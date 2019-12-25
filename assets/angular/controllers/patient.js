app.controller('patientCtrl', function ($rootScope, $scope, $scope, $http, $cookies) {
    $scope.getPatients = function (page, keyword) {
        var session = $cookies.getObject('session_user');
        page = page || 1;
        keyword = keyword || null;

        var form_data = {
            page: page,
            limit: 10,
        };

        if (keyword) {
            form_data['column'] = 'firstname|middlename|lastname';
            form_data['keyword'] = keyword;
        }

        $http({
            url: API_URL + 'dentist/patient',
            method: 'POST',
            data: form_data,
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + session.jwt
            }
        }).then(function (response) {
            if (response.data.status == 1) {
                if (response.data.context.status == 1) {                    
                    $scope.patients = response.data.context.data;
                    $scope.patient_pagination = {
                        no_of_pages: response.data.context.no_of_pages,
                        page: response.data.context.page,
                        per_page: response.data.context.per_page,
                        offset: 1 + ((response.data.context.page - 1) * response.data.context.per_page),
                        request: $scope.getPatients
                    };
                } else {
                    $cookies.remove('session_user');
                    window.location = APP_URL + 'auth';
                }
            }
        }, function (error) {
            $cookies.remove('session_user');
            window.location = APP_URL + 'auth';
        });
    }

    $scope.deletePatient = function (patient) {
        if (patient) {
            var session = $cookies.getObject('session_user');
            swal.fire({
                title: "Delete",
                html: `Are you sure you want to delete
                        <br>Dr. ${patient.firstname} ${patient.lastname} [${patient.username}]?
                        <br><small class="text-danger"><i>You won\'t be able to revert this!</i></small>`,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    $http({
                        url: API_URL + 'dentist/patient/delete',
                        method: 'POST',
                        data: {
                            patient_id: patient.id
                        },
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + session.jwt
                        }
                    }).then(function (response) {
                        if (response.data.status == 1) {
                            if (response.data.context.status == 1) {                    
                                swal.fire({
                                    title: 'Dr. ' + patient.firstname + ' ' + patient.lastname + ' has been deleted',
                                    type: 'info',
                                });
                                
                                $scope.getPatients();
                            }
                        }
                    }, function (error) {
                    });
                }
            });
        }
    }

    var savePatient = function (patient) {
        var session = $cookies.getObject('session_user');
        $http({
            url: API_URL + 'dentist/patient/' + (! patient.patient_id ? 'add' : 'edit'),
            method: 'POST',
            data: patient,
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + session.jwt
            }
        }).then(function (response) {
            if (response.data.status == 1) {
                if (response.data.context.status == 1) {                    
                    swal.fire({
                        title: 'Save Account',
                        text: 'Patient data has been saved!',
                        type: 'info',
                    });
                    
                    $scope.getPatients();
                } else {
                    if (response.data.context.errors) showErrors(response.data.context.errors);
                }
            }
        }, function (error) {
        });
    }
    
    $scope.showPatientForm = function (patient) {
        try {
            var data = {
                patient_id: patient.id,
                dentist_id: patient.dentist_id,
                firstname: patient.firstname,
                middlename: patient.middlename,
                lastname: patient.lastname,
                age: patient.age,
                gender: patient.gender,
                religion: patient.religion,
                nationality: patient.nationality,
                address: patient.address,
                address_1: patient.address_1,
                address_2: patient.address_2,
                address_3: patient.address_3,
                address_4: patient.address_4,
                address_5: patient.address_5,
                occupation: patient.occupation,
                dental_insurance: patient.dental_insurance,
                effective_date: patient.effective_date,
                guardian_firstname: patient.guardian_firstname,
                guardian_middlename: patient.guardian_middlename,
                guardian_lastname: patient.guardian_lastname,
                guardian_occupation: patient.guardian_occupation,
                consultation_reason: patient.consultation_reason,
                home_number: patient.home_number,
                office_number: patient.office_number,
                fax_number: patient.fax_number,
                mobile_number: patient.mobile_number,
                email_address: patient.email_address,
                signature: patient.signature,
                consent_agreement: patient.consent_agreement,
                picture: patient.picture,
                record_date: patient.record_date
            };
        } catch (error) {
            var data = {}
        }

        $rootScope.openModal({
            title: 'Patient',
            data: data,
            selector: '#modal_patient_form',
            save: function (patient) {
                if (patient) {
                    swal.fire({
                        title: 'Save Account',
                        html: 'Are you sure you want to update<br>Dr. ' + patient.firstname + ' ' + patient.lastname + ' [' + patient.username + ']?',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, save it!'
                    }).then(function (result) {
                        if (result.value) {
                            savePatient(patient);
                        }
                    })
                }
            },
        });
    }

    $scope.getPatients();
    $rootScope.searchData = $scope.getPatients;
});