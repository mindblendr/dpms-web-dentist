<div class="modal fade" id="modal_patient_form" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Patient Form</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <!-- <pre ng-bind="modal.data | json"></pre> -->
                    <h2 class="content-heading">Patient Information</h2>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.firstname">
                                <label>Firstname</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.middlename">
                                <label>Middlename</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.lastname">
                                <label>Lastname</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">
                            <div class="form-material">
                                <input type="number" class="form-control" ng-model="modal.data.age">
                                <label>Age</label>
                            </div>
                        </div>
                        <div class="col-md-3">
<<<<<<< Updated upstream
=======
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.birthday" placeholder="MMMM-DD-YY">
                                <label>Birthday</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.religion">
                                <label>Religion</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.occupation">
                                <label>Occupation</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <!-- <div class="form-material">
                                <label class="col-15" for="example-select">Select</label>
                                <div class="col-md-15">
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="0">Please select</option>
                                        <option id="data-gender-male" ng-model="model.data.gender" ng-value="'male" for="data-gender-male">Male</option>
                                        <option id="data-gender-female" ng-model="model.data.gender" ng-value="'female" for="data-gender-female">Female</option>
                                        <option id="data-gender-others" ng-model="model.data.gender" ng-value="'otheres"  for="data-gender-others">Others</option>
                                    </select>
                                </div>
                            </div> -->

>>>>>>> Stashed changes
                            <div class="form-material">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" ng-model="modal.data.gender" id="data-gender-male" ng-value="'male'">
                                    <label class="custom-control-label" for="data-gender-male">Male</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" ng-model="modal.data.gender" id="data-gender-female" ng-value="'female'">
                                    <label class="custom-control-label" for="data-gender-female">Female</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" ng-model="modal.data.gender" id="data-gender-others" ng-value="'others'">
                                    <label class="custom-control-label" for="data-gender-others">Others</label>
                                </div>
                                <label>Gender</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.nickname">
                                <label>Nickname</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.nationality">
                                <label>Nationality</label>
                            </div>
                        </div>
<<<<<<< Updated upstream
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.occupation">
                                <label>Occupation</label>
                            </div>
                        </div>
                        <div class="col-md-4">
=======
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.email_address">
                                <label>Email Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.mobile_number">
                                <label>Mobile Number</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.mobile_number">
                                <label>Home Number</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.office_number">
                                <label>Office Number</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.fax_number">
                                <label>Fax Number</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
>>>>>>> Stashed changes
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.dental_insurance">
                                <label>Dental Insurance</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.effective_date" placeholder="YYYY-MM-DD">
                                <label>Effective Date</label>
                            </div>
                        </div>
                    </div>
<<<<<<< Updated upstream
=======
                    <br>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.address">
                                <label>House No.</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.address_1">
                                <label>Street Name</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.address_2">
                                <label>Subdivision</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.address_3">
                                <label>Baranggay</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.address_4">
                                <label>City/Municipality</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.address_5">
                                <label>Province</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.address_6">
                                <label>Country</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-material form-material-primary">
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" ng-model="modal.data.referral" placeholder="---">
                                <label for="material-color-primary">Whom may we thank for referring you?</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material form-material-primary">
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" ng-model="modal.data.consultation_reason" placeholder="---">
                                <label for="material-color-primary">What's the reason for your consultation?</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <h3 class="block-title"><b>For Minors:</b></h3>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.guardian_firstname">
                                <label>Guardian Firstname</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.guardian_middlename">
                                <label>Guardian Middlename</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.guardian_lastname">
                                <label>Guardian Lastname</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h2 class="content-heading">Dental History</h2>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.previous_doctor">
                                <label>Previous Dentist</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.last_dental_visit" placeholder="YYYY-MM-DD">
                                <label>Last Dental Visit</label>
                            </div>
                        </div>
                    </div>
                    <h2 class="content-heading">Medical History</h2>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <div class="form-material form-material-primary">
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="Dr.">
                                <label for="material-color-primary">Name of Physician</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-material form-material-primary">
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="----">
                                <label for="material-color-primary">Specialty, if applicable</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <div class="form-material form-material-primary">
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="----">
                                <label for="material-color-primary">Office Address</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material form-material-primary">
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="----">
                                <label for="material-color-primary">Office Number</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <h3 class="block-title">1. Are you in good health?</h3>
                        </div>
                        <div class="col-md-4">
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group1">
                                <span class="css-control-indicator"></span> Yes
                            </label>
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group1">
                                <span class="css-control-indicator"></span> No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <h3 class="block-title">2. Are you under medical treatment now?</h3>
                        </div>
                        <div class="col-md-4">
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group2">
                                <span class="css-control-indicator"></span> Yes
                            </label>
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group2">
                                <span class="css-control-indicator"></span> No
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material form-material-primary">
                                <label for="material-color-primary">If so, what is the condition being treated?</label>
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="----">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <h3 class="block-title">3. Have you ever had serious illness or surgical operation?</h3>
                        </div>
                        <div class="col-md-4">
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group3">
                                <span class="css-control-indicator"></span> Yes
                            </label>
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group3">
                                <span class="css-control-indicator"></span> No
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material form-material-primary">
                                <label for="material-color-primary">If so, what illness or operation</label>
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="----">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <h3 class="block-title">4. Have you ever been hospitalized</h3>
                        </div>
                        <div class="col-md-4">
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group4">
                                <span class="css-control-indicator"></span> Yes
                            </label>
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group4">
                                <span class="css-control-indicator"></span> No
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material form-material-primary">
                                <label for="material-color-primary">If so, when and why?</label>
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="----">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <h3 class="block-title">5. Are you taking any prescription/non-prescription medication?</h3>
                        </div>
                        <div class="col-md-4">
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group5">
                                <span class="css-control-indicator"></span> Yes
                            </label>
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group5">
                                <span class="css-control-indicator"></span> No
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material form-material-primary">
                                <label for="material-color-primary">If so, please specify</label>
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="----">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <h3 class="block-title">6. Do you use tobacco products?</h3>
                        </div>
                        <div class="col-md-4">
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group6">
                                <span class="css-control-indicator"></span> Yes
                            </label>
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group6">
                                <span class="css-control-indicator"></span> No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <h3 class="block-title">7. Do you use alcohol, cocaine or other dangerous drugs?</h3>
                        </div>
                        <div class="col-md-4">
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group7">
                                <span class="css-control-indicator"></span> Yes
                            </label>
                            <label class="css-control css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio-group7">
                                <span class="css-control-indicator"></span> No
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <h3 class="block-title">8. Are you allergic to any of the following: (Please Check)</h3>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input">
                                <span class="css-control-indicator"></span> Local Anasthetics (Ex. Lidocaine)
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input">
                                <span class="css-control-indicator"></span> Penicillin, Antibiotics
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input">
                                <span class="css-control-indicator"></span> Sulfa Drugs
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input">
                                <span class="css-control-indicator"></span> Aspirin
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input">
                                <span class="css-control-indicator"></span> Latex
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">    
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input">
                                <span class="css-control-indicator"></span> Others
                            </label>
                            <div class="form-material form-material-primary">
                                <label for="material-color-primary">Please specify:</label>
                                <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="----">
                            </div>
                        </div>
                    </div>
>>>>>>> Stashed changes
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button ng-show="modal.save" ng-click="modal.save(modal.data);" type="button" class="btn btn-alt-success" data-dismiss="modal"><i class="fa fa-check"></i> Save</button>
            </div>
        </div>
    </div>
</div>