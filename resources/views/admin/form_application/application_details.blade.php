@extends('admin.admin_master')
@section('admin')
    <div class="page-content" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h2 class="mb-sm-0">Application Details</h2>
                                            <div class="page-title-right">
                                                <div class="page-title-right">
                                                    <a href="{{ route('form-application.applications.pdf', $application->id) }}"
                                                       class="btn btn-dark">Export PDF</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('form-application.application.submit') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $application->id}}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">
                                            Requested Service
                                        </label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->form_services->name) ? $application->form_services->name : '' }}">
                                        </div>
                                        <label for="title" class="col-sm-2 col-form-label px-5">Application
                                            Date</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->created_at) ? $application->created_at : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label px-5">Requested
                                            Category</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->category_services->name) ? $application->category_services->name : '' }}">
                                        </div>
                                        <label for="title" class="col-sm-2 col-form-label px-4">Application
                                            Status</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   style="color: @if(($application->approved)) green @elseif(is_null($application->approved)) orange @else red @endif"
                                                   placeholder=""
                                                   value="@if(($application->approved)) Approved @elseif(is_null($application->approved)) Waiting @else Rejected @endif">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="pt-5">Personal Info</h4>
                                                <div class="page-title-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-1">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Name</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_full_name) ? $application->apply_full_name : '' }}">
                                        </div>
                                        <label for="subtitle" class="col-sm-2 col-form-label  px-5">Nationality</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_nationality) ? $application->apply_nationality : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Gender</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_gender) ? $application->apply_gender : '' }}">
                                        </div>
                                        <label for="subtitle" class="col-sm-2 col-form-label px-5">National ID</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_national_id) ? $application->apply_national_id : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Address</label>
                                        <div class="col-sm-10">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_address) ? $application->apply_address : '' }}">
                                        </div>

                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Birth Date</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_birthdate) ? $application->apply_birthdate : '' }}">
                                        </div>
                                        <label for="subtitle" class="col-sm-2 col-form-label  px-5">Email</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_email) ? $application->apply_email : '' }}">
                                        </div>


                                    </div>

                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Phone Number</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_phone) ? $application->apply_phone : '0' }}">
                                        </div>
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Material Status</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->form_material_status->name) ? $application->form_material_status->name : '' }}">
                                        </div>


                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title"
                                               class="col-sm-2 col-form-label  px-5">{{$application->apply_gender == 'male' ? 'Wife Work':'Husband Work'}}</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->husband_wife_work) ? $application->husband_wife_work : 'No' }}">
                                        </div>
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Qualification</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->form_qualification->name) ? $application->form_qualification->name : '-' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">{{$application->apply_gender == 'male' ? 'Wife Work':'Husband Work'}}</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->husband_wife_name) ? $application->husband_wife_name : 'NO' }}">
                                        </div>

                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Dependents</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->dependents) ? $application->dependents : '0' }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="my-5">Relative Info</h4>
                                                <div class="page-title-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <table id="datatable"
                                                           class="table table-bordered dt-responsive wrap"
                                                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Relation</th>
                                                            <th>Work</th>
                                                            <th>Work Place</th>
                                                            <th>Phone Number</th>
                                                        </tr>
                                                        </thead>


                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                {{$application->relative_one_name}}
                                                            </td>
                                                            <td>{{$application->relative_one_relation}}</td>
                                                            <td>{{$application->relative_one_work_title}}</td>
                                                            <td>{{$application->relative_one_work_place}}</td>
                                                            <td>{{$application->relative_one_phone}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                {{$application->relative_two_name}}
                                                            </td>
                                                            <td>{{$application->relative_two_relation}}</td>
                                                            <td>{{$application->relative_two_work_title}}</td>
                                                            <td>{{$application->relative_two_work_place}}</td>
                                                            <td>{{$application->relative_two_phone}}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="mt-5">Work Info</h4>
                                                <div class="page-title-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-1">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Work Place</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_work_place) ? $application->apply_work_place : 'NO' }}">
                                        </div>

                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Work Title</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_work_title) ? $application->apply_work_title : '0' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Work Website</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_work_website) ? $application->apply_work_website : 'NO' }}">
                                        </div>

                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Work Phone</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_work_phone) ? $application->apply_work_phone : '0' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Work Address</label>
                                        <div class="col-sm-10">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_work_address) ? $application->apply_work_address : '' }}">
                                        </div>

                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Work Start Date</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_work_date) ? $application->apply_work_date : 'NO' }}">
                                        </div>

                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Salary</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_salary) ? $application->apply_salary : '0' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Work Email</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->apply_work_email) ? $application->apply_work_email : 'NO' }}">
                                        </div>

                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label px-4">Salary Deduction</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->salary_deduction) ? $application->salary_deduction : '0' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label px-4">Transfer Way</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->transfer_ways->transfer_way) ? $application->transfer_ways->transfer_way : '0' }}">
                                        </div>
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label px-4">Transfer Way</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->partner_bank->name) ? $application->partner_bank->name : 'No' }}">
                                        </div>


                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Personal Loans</label>
                                        <div class="col-sm-4">
                                            <textarea disabled
                                                      class="form-control form-details" type="text"
                                                      rows="5"
                                                      id="subtitle"
                                                      name="subtitle"
                                                      placeholder="No Personal Loan"
                                            >{{ !empty($application->personal_loan) ? $application->personal_loan : '' }}</textarea>
                                        </div>
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Mortgages</label>
                                        <div class="col-sm-4">
                                            <textarea disabled
                                                      class="form-control form-details" type="text"
                                                      id="subtitle"
                                                      rows="5"
                                                      name="subtitle"
                                                      placeholder="No Deductions"
                                            >{{ !empty($application->mortgages) ? $application->mortgages : '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Salary Deduction Details</label>
                                        <div class="col-sm-4">
                                            <textarea disabled
                                                      class="form-control form-details" type="text"
                                                      id="subtitle"
                                                      rows="5"
                                                      name="subtitle"
                                                      placeholder="No Deductions"
                                            >{{ !empty($application->salary_deduction_detail) ? $application->salary_deduction_detail : '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="mt-5">Sponsor Details</h4>
                                                <div class="page-title-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-1">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Sponsor Name</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_full_name) ? $application->sponsor_full_name : '' }}">
                                        </div>
                                        <label for="subtitle" class="col-sm-2 col-form-label  px-5">Nationality</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_nationality) ? $application->sponsor_nationality : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Gender</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_gender) ? $application->sponsor_gender : '' }}">
                                        </div>
                                        <label for="subtitle" class="col-sm-2 col-form-label px-5">National ID</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_national_id) ? $application->sponsor_national_id : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Sponsor Address</label>
                                        <div class="col-sm-10">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_address) ? $application->sponsor_address : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Sponsor Phone</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_phone) ? $application->sponsor_phone : '' }}">
                                        </div>
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Relationship</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_relationship) ? $application->sponsor_relationship : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Work Title</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_work_title) ? $application->sponsor_work_title : '' }}">
                                        </div>
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Work Place</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_work_place) ? $application->sponsor_work_place : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-4">Sponsor Work
                                            Address</label>
                                        <div class="col-sm-10">
                                            <input disabled class="form-control form-details text-uppercase" type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_work_address) ? $application->sponsor_work_address : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Work Start Date</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_work_date) ? $application->sponsor_work_date : '' }}">
                                        </div>
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Sponsor Salary</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_salary) ? $application->sponsor_salary : '' }}">
                                        </div>


                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Salary Transfer</label>
                                        <div class="col-sm-4">
                                            <input disabled
                                                   class="form-control form-details" type="text"
                                                   id="subtitle"
                                                   name="subtitle"
                                                   placeholder=""
                                                   value="{{ !empty($application->transfer_ways_sponsor->transfer_way) ? $application->transfer_ways_sponsor->transfer_way : '' }}">
                                        </div>

                                        <label for="title" class="col-sm-2 col-form-label  px-5">Sponsor Bank</label>
                                        <div class="col-sm-4">
                                            <input disabled class="form-control form-details" type="text" id="title"
                                                   name="title"
                                                   placeholder=""
                                                   value="{{ !empty($application->sponsor_bank->name) ? $application->sponsor_bank->name : 'No' }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="mt-5">IDs Images</h4>
                                                <div class="page-title-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle"
                                               class="col-sm-2 col-form-label  px-5">Applicant ID</label>
                                        <div class="col-4">
                                            @if(!empty($application->apply_id_image))
                                                <div>

                                                    <a class="image-popup-vertical-fit"
                                                       href="{{asset($application->apply_id_image)}}"
                                                       title="Caption. Can be aligned it to any side and contain any HTML.">
                                                        <img class="img-fluid" alt="img-2"
                                                             src="{{asset($application->apply_id_image)}}"
                                                             width="145">
                                                    </a>
                                                </div>
                                                <div class="col-3 align-center">
                                                    <a href="{{asset($application->apply_id_image)}}"
                                                       download>Download</a>
                                                </div>
                                            @else
                                                <div>
                                                    <img class="img-thumbnail" alt="img-2"
                                                         src="{{asset('backend/assets/images/Image_not_available.png')}}"
                                                         width="145">
                                                </div>
                                            @endif
                                        </div>
                                        <label for="title" class="col-sm-2 col-form-label  px-5">Sponsor ID</label>
                                        <div class="col-3">
                                            @if(!empty($application->sponsor_id_image))
                                                <div>

                                                    <a class="image-popup-vertical-fit"
                                                       href="{{asset($application->sponsor_id_image)}}"
                                                       title="Caption. Can be aligned it to any side and contain any HTML.">
                                                        <img class="img-fluid" alt="img-2"
                                                             src="{{asset($application->sponsor_id_image)}}"
                                                             width="145">
                                                    </a>
                                                </div>
                                                <div class="col-3 align-center">
                                                    <a href="{{asset($application->sponsor_id_image)}}"
                                                       download>Download</a>
                                                </div>
                                            @else
                                                <div>
                                                    <img class="img-thumbnail" alt="img-2"
                                                         src="{{asset('backend/assets/images/Image_not_available.png')}}"
                                                         width="145">
                                                </div>
                                            @endif

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="mt-5">Company Procedure</h4>
                                                <div class="page-title-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-1">
                                        <label for="service_requested" class="col-sm-2 col-form-label  px-5">Service
                                            Required</label>
                                        <div class="col-sm-4">
                                            <input class="form-control form-details" type="text" id="service_requested"
                                                   name="service_requested"
                                                   placeholder="Service Requested"
                                                   value="{{ !empty($application->service_requested) ? $application->service_requested : '' }}">
                                        </div>
                                        <label for="type"
                                               class="col-sm-2 col-form-label  px-5">Type</label>
                                        <div class="col-sm-4">
                                            <input
                                                class="form-control form-details" type="text"
                                                id="service_type"
                                                name="service_type"
                                                placeholder="Type"
                                                value="{{ !empty($application->service_type) ? $application->service_type : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-1">
                                        <label for="procedure_value" class="col-sm-2 col-form-label  px-5">
                                            Procedure Value
                                        </label>
                                        <div class="col-sm-4">
                                            <input class="form-control form-details" type="text" id="procedure_value"
                                                   name="procedure_value"
                                                   placeholder="Procedure Value"
                                                   value="{{ !empty($application->procedure_value) ? $application->procedure_value : '' }}">
                                        </div>
                                        <label for="payment_period"
                                               class="col-sm-2 col-form-label  px-5">Payment Period</label>
                                        <div class="col-sm-4">
                                            <input
                                                class="form-control form-details" type="text"
                                                id="payment_period"
                                                name="payment_period"
                                                placeholder="Payment Period"
                                                value="{{ !empty($application->payment_period) ? $application->payment_period : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-1">
                                        <label for="profit_ratio" class="col-sm-2 col-form-label  px-5">
                                            Profit Ratio
                                        </label>
                                        <div class="col-sm-4">
                                            <input class="form-control form-details" type="number" step="0.01"
                                                   id="profit_ratio"
                                                   name="profit_ratio"
                                                   placeholder="Profit Ratio"
                                                   value="{{ !empty($application->profit_ratio) ? $application->profit_ratio : '' }}">
                                        </div>
                                        <label for="total_amount"
                                               class="col-sm-2 col-form-label  px-5">Total Amount</label>
                                        <div class="col-sm-4">
                                            <input
                                                class="form-control form-details" type="number"
                                                step="0.01"
                                                id="total_amount"
                                                name="total_amount"
                                                placeholder="Total Amount"
                                                value="{{ !empty($application->total_amount) ? $application->total_amount : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-1">
                                        <label for="first_payment" class="col-sm-2 col-form-label  px-5">
                                            Initial Payment
                                        </label>
                                        <div class="col-sm-4">
                                            <input class="form-control form-details" type="number" id="first_payment"
                                                   name="first_payment"
                                                   placeholder="Initial Payment"
                                                   value="{{ !empty($application->first_payment) ? $application->first_payment : '' }}">
                                        </div>
                                        <label for="installment_value"
                                               class="col-sm-2 col-form-label  px-4">Installment Value</label>
                                        <div class="col-sm-4">
                                            <input
                                                class="form-control form-details" type="number"
                                                id="installment_value"
                                                name="installment_value"
                                                placeholder="Installment Value"
                                                value="{{ !empty($application->installment_value) ? $application->installment_value : '' }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div>
                                                        <h5 class="font-size-14 mb-4">Approval</h5>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                   name="approved" id="approved" value="true">
                                                            <label class="form-check-label" for="approved">
                                                                Approve Application
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                   name="approved" id="reject" value="false">
                                                            <label class="form-check-label" for="reject">
                                                                Reject Application
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                   name="approved" id="waiting"
                                                                   value="">
                                                            <label class="form-check-label"
                                                                   for="waiting">
                                                                Keep Waiting
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <div>
                                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                                           value="Submit">

                                                </div>
                                                <div class="page-title-right">
                                                    <a href="{{ route('form-application.applications') }}"
                                                       class="btn btn-danger">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
