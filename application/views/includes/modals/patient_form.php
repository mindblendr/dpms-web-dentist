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
                    <pre ng-bind="modal.data | json"></pre>
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
                        <div class="col-md-2">
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
                                <input type="text" class="form-control" ng-model="modal.data.religion">
                                <label>Religion</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.nationality">
                                <label>Nationality</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.occupation">
                                <label>Occupation</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.email_address">
                                <label>Email Address</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.mobile_number">
                                <label>Mobile Number</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.dental_insurance">
                                <label>Dental Insurance</label>
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button ng-show="modal.save" ng-click="modal.save(modal.data);" type="button" class="btn btn-alt-success" data-dismiss="modal"><i class="fa fa-check"></i> Save</button>
            </div>
        </div>
    </div>
</div>