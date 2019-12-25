<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content" ng-controller="patientCtrl">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Patient <small>List</small></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option btn btn-secondary" title="Add Data" ng-click="showPatientForm();">
                    <i class="si si-plus"></i>
                </button>
                <button type="button" class="btn-block-option btn btn-secondary" title="Refresh Data" ng-click="getPatients();">
                    <i class="si si-reload"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th class="d-sm-table-cell">PATIENT</th>
                        <th style="width: 200px;">RECORD DATE</th>
                        <th style="width: 200px;">UPDATED DATE</th>
                        <th style="width: 100px;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="patient in patients track by $index">
                        <td><span ng-bind="$index + patient_pagination.offset"></span></td>
                        <td>
                            <i class="si si-symbol-male" ng-show="patient.gender == 'male'"></i>
                            <i class="si si-symbol-female" ng-show="patient.gender == 'female'"></i>
                            <i class="si si-question" ng-show="patient.gender == 'others'"></i>
                            <b ng-bind="patient.lastname | uppercase"></b>, <span ng-bind="patient.firstname"></span> <span ng-bind="patient.middlename"></span>
                        </td>
                        <td><span ng-bind="patient.created_at"></span></td>
                        <td><span ng-bind="patient.updated_at"></span></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-secondary" title="Edit" ng-click="showPatientForm(patient)">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button ng-show="patient.status == 1" type="button" class="btn btn-sm btn-secondary" title="Block" ng-click="changeStatus(patient)">
                                    <i class="fa fa-ban"></i>
                                </button>
                                <button ng-show="patient.status == 0" type="button" class="btn btn-sm btn-secondary" title="Activate" ng-click="changeStatus(patient)">
                                    <i class="fa fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-secondary" title="Delete" ng-click="deletePatient(patient);">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="100%"><div pagination="patient_pagination" ng-pagination></div></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>