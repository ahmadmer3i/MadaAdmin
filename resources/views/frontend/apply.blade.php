@php
    $services = \App\Models\ApplyFormService::all();
    $transfers = \App\Models\SalaryTransferWay::all();
    $qualifications = \App\Models\FormQualification::all();
@endphp
@extends('frontend.main_master')
@section('main')
    <div class="section mcb-section full-width"
         style="padding-top:175px;padding-left:10%;padding-right:10%">
        <div class="row">
            <div class="col-md-6" style="padding:0 4%">
                <div class="row">
                    <div class="col-12 column-margin-40px">
                        <h1></h1></div>
                    <div class="col-12">
                        <hr class="no_line"
                            style="margin:0 auto 40px">
                    </div>
                    <div class="col-12">
                        <hr style="margin:0 auto 30px;"/>
                    </div>
                    @include('frontend.body.phone')
                </div>
            </div>
            <div class="col-md-6" style="padding:0 4%"><img
                    alt=""
                    class="scale-with-grid"
                    height="854"
                    src="{{ !empty($contact_title->image) ? $contact_title->image : 'upload/960-854.png' }}"
                    title="" width="960"/></div>
        </div>
    </div>
    <div class="section mcb-section"
         style="padding-top:10px;padding-bottom:55px;background-image:url({{asset('frontend/content/images/finance2-wrapbg1.png')}});background-repeat:repeat;background-position:center top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-5" style="padding:54px 0 0">
                    <div id="contactWrapper" class="px-5">
                        <div id="contactform"
                             style="direction: rtl; font-family: 'GE Flow',serif;padding: 0 54px">
                            <form method="post" action="{{route('apply.submit')}}">
                                @csrf
                                <div class="column one">
                                    <div class="row mt-2 one-second">
                                        <div class="col-sm-12 font-type">
                                            <h2 class="d-flex justify-content-center">?????? ??????????</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mt-2 one-second">
                                        <div class="col-sm-12 font-type">
                                            <h4 class="d-flex justify-content-start">?????? ??????????</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-3 one-second">
                                        <label for="application_type_id" class="col-sm-2 col-form-label">??????
                                            ??????????</label>
                                        <div class="col-sm-4 font-type">
                                            <select name="application_type_id" id="application_type_id" required>
                                                <option value="" selected disabled>???????? ??????
                                                    ??????????
                                                </option>
                                                @foreach($services as $service)
                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mt-2 one-second">
                                        <div class="col-sm-12 font-type">
                                            <h4 class="d-flex justify-content-start">???????????????? ??????????????</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-3 one-second">
                                        <label for="apply_full_name" class="col-sm-2 col-form-label">
                                            ?????????? ????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control"
                                                   type="text"
                                                   id="apply_full_name"
                                                   name="apply_full_name"
                                                   placeholder="?????????? ????????????"
                                                   value=""
                                                   required
                                            >
                                        </div>
                                        <label for="apply_nationality" class="col-sm-2 col-form-label">??????????????</label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="apply_nationality"
                                                   name="apply_nationality"
                                                   placeholder="??????????????"
                                                   value=""
                                                   required
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-2 mt-2 one-second">
                                        <label for="apply_national_id" class="col-sm-2 col-form-label">
                                            ?????????? ????????????<br>
                                            ????????
                                            ??????????
                                            ???????? ??????????????????</label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="apply_national_id"
                                                   name="apply_national_id"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   placeholder="?????????? ???????????? ???????? / ?????????? ???????? ??????????????????"
                                                   value=""
                                                   required
                                            >
                                        </div>
                                        <label for="apply_gender" class="col-sm-2 col-form-label">??????????</label>
                                        <div class="col-sm-4 font-type">
                                            <select name="apply_gender" id="apply_gender" required>
                                                <option value="male">??????</option>
                                                <option value="female">????????</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="apply_address" class="col-sm-2 col-form-label">??????????????</label>
                                        <div class="col-sm-10 font-type">
                                            <input class="form-apply_address" type="text" id="apply_address"
                                                   name="apply_address"
                                                   placeholder="??????????????"
                                                   value=""
                                                   required
                                            >
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_phone" class="col-sm-2 col-form-label">?????? ????????????</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="tel"
                                                       onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                       id="apply_phone" name="apply_phone"
                                                       placeholder="?????? ????????????"
                                                       value="">
                                            </div>
                                            <label for="apply_email" class="col-sm-2 col-form-label">????????????
                                                ????????????????????</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="email" id="apply_email"
                                                       name="apply_email"
                                                       placeholder="???????????? ????????????????????"
                                                       value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_birthdate" class="col-sm-2 col-form-label">??????????
                                                ??????????????</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="date"
                                                       id="apply_birthdate" name="apply_birthdate"
                                                       placeholder="?????????? ??????????????"
                                                       value=""
                                                       required
                                                >
                                            </div>
                                            <label for="qualification_id" class="col-sm-2 col-form-label">????????????
                                                ????????????</label>
                                            <div class="col-sm-4 font-type">
                                                <select class="form-select" name="qualification_id"
                                                        id="qualification_id" required>
                                                    <option value="" selected disabled>???????? ????????????
                                                        ????????????
                                                    </option>
                                                    @foreach($qualifications as $qualification)
                                                        <option
                                                            value="{{$qualification->id}}">{{$qualification->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="material_status" class="col-sm-2 col-form-label">????????????
                                                ????????????????????</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text"
                                                       id="material_status" name="material_status"
                                                       placeholder="???????????? ????????????????????"
                                                       value="">
                                            </div>
                                            <label for="dependents" class="col-sm-2 col-form-label">?????? ????????????????</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="number" id="dependents"
                                                       onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                       name="dependents"
                                                       placeholder="?????? ????????????????"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="husband_wife_name" class="col-sm-2 col-form-label">?????? ?????????? /
                                                ????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text"
                                                       id="husband_wife_name" name="husband_wife_name"
                                                       placeholder="?????? ?????????? / ????????????"
                                                       value="">
                                            </div>
                                            <label for="husband_wife_work" class="col-sm-2 col-form-label">?????? ?????????? /
                                                ????????????</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="husband_wife_work"
                                                       name="husband_wife_work"
                                                       placeholder="?????? ?????????? / ????????????"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="column one">
                                    <div class="row mt-2 one-second">
                                        <div class="col-sm-12 font-type">
                                            <h4 class="d-flex justify-content-start">?????????? ???? ???????????? ????????????</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="relative_one_name" class="col-sm-1 col-form-label">??????????</label>
                                        <div class="col-sm-2 font-type">
                                            <input class="form-control" type="text" id="relative_one_name"
                                                   name="relative_one_name"
                                                   placeholder="?????????? ????????????"
                                                   value="">
                                        </div>
                                        <label for="relative_one_relation" class="col-sm-1 col-form-label">??????????</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="text" id="relative_one_relation"
                                                   name="relative_one_relation"
                                                   placeholder="??????????"
                                                   value="">
                                        </div>
                                        <label for="relative_one_work_title"
                                               class="col-sm-1 col-form-label">????????????</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="text" id="relative_one_work_title"
                                                   name="relative_one_work_title"
                                                   placeholder="????????????"
                                                   value="">
                                        </div>
                                        <label for="relative_one_work_place" class="col-sm-1 col-form-label">
                                            ???????? ??????????
                                        </label>
                                        <div class="col-sm-2 font-type">
                                            <input class="form-control" type="text" id="relative_one_work_place"
                                                   name="relative_one_work_place"
                                                   placeholder="???????? ??????????"
                                                   value="">
                                        </div>
                                        <label for="relative_one_phone" class="col-sm-1 col-form-label">????????????</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="tel" id="relative_one_phone"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   name="relative_one_phone"
                                                   placeholder="????????????"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="relative_two_name" class="col-sm-1 col-form-label">??????????</label>
                                        <div class="col-sm-2 font-type">
                                            <input class="form-control" type="text" id="relative_two_name"
                                                   name="relative_two_name"
                                                   placeholder="?????????? ????????????"
                                                   value="">
                                        </div>
                                        <label for="relative_two_relation" class="col-sm-1 col-form-label">??????????</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="text" id="relative_two_relation"
                                                   name="relative_two_relation"
                                                   placeholder="??????????"
                                                   value="">
                                        </div>
                                        <label for="relative_two_work_title"
                                               class="col-sm-1 col-form-label">????????????</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="text" id="relative_two_work_title"
                                                   name="relative_two_work_title"
                                                   placeholder="????????????"
                                                   value="">
                                        </div>
                                        <label for="relative_two_work_place" class="col-sm-1 col-form-label">????????
                                            ??????????</label>
                                        <div class="col-sm-2 font-type">
                                            <input class="form-control" type="text" id="relative_two_work_place"
                                                   name="relative_two_work_place"
                                                   placeholder="???????? ??????????"
                                                   value="">
                                        </div>
                                        <label for="relative_two_phone" class="col-sm-1 col-form-label">????????????</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="tel" id="relative_two_phone"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   name="relative_two_phone"
                                                   placeholder="????????????"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mt-2 one-second">
                                            <div class="col-sm-12 font-type">
                                                <h4 class="d-flex justify-content-start">???????????? ??????????</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_work_place" class="col-sm-2 col-form-label">?????? ????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text"
                                                       id="apply_work_place" name="apply_work_place"
                                                       placeholder="?????? ????????????"
                                                       value="">
                                            </div>
                                            <label for="apply_work_title" class="col-sm-2 col-form-label">
                                                ??????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="apply_work_title"
                                                       name="apply_work_title"
                                                       placeholder="??????????????"
                                                       value=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_work_phone" class="col-sm-2 col-form-label">
                                                ?????? ????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text"
                                                       id="apply_work_phone" name="apply_work_phone"
                                                       onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                       placeholder="?????? ????????????"
                                                       value="">
                                            </div>
                                            <label for="apply_work_website" class="col-sm-2 col-form-label">
                                                ???????????? ????????????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="apply_work_website"
                                                       name="apply_work_website"
                                                       placeholder="???????????? ????????????????????"
                                                       value=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_work_address" class="col-sm-2 col-form-label">
                                                ?????????? ??????????
                                            </label>
                                            <div class="col-sm-10 font-type">
                                                <input class="form-control" type="text"
                                                       id="apply_work_address" name="apply_work_address"
                                                       placeholder="?????????? ??????????"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_work_date" class="col-sm-2 col-form-label">
                                                ?????????? ??????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control text-right" type="date"
                                                       id="apply_work_date" name="apply_work_date"
                                                       placeholder="?????????? ??????????????"
                                                       value="">
                                            </div>
                                            <label for="apply_salary" class="col-sm-2 col-form-label">
                                                ???????????? ????????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="apply_salary"
                                                       name="apply_salary"
                                                       placeholder="???????????? ????????????????"
                                                       value=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">

                                            <label for="apply_work_email" class="col-sm-2 col-form-label">
                                                ???????????? ????????????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="email" id="apply_work_email"
                                                       name="apply_work_email"
                                                       placeholder="???????????? ????????????????????"
                                                       value=""
                                                >
                                            </div>
                                            <label for="transfer_way_id" class="col-sm-2 col-form-label">
                                                ?????????? ???????????? ????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <select name="transfer_way_id" id="transfer_way_id">
                                                    <option value="" selected disabled>???????? ?????????? ??????????????
                                                    </option>
                                                    @foreach($transfers as $transfer)
                                                        <option
                                                            value="{{$transfer->id}}">{{$transfer->transfer_way}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">

                                            <label for="salary_deduction" class="col-sm-2 col-form-label">
                                                ???????? ???????????????? ?????? ????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="number" id="salary_deduction"
                                                       name="salary_deduction"
                                                       placeholder="???????? ???????????????? ?????? ????????????"
                                                       value=""
                                                >
                                            </div>
                                            <label for="salary_deduction_detail" class="col-sm-2 col-form-label">
                                                ???????????? ????????????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <textarea class="form-control text-right"
                                                          id="salary_deduction_detail" name="salary_deduction_detail"
                                                          placeholder="???????????? ????????????????????"
                                                          rows="4"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">

                                            <label for="personal_loan" class="col-sm-2 col-form-label">
                                                ???????????? ??????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <textarea class="form-control" id="personal_loan" name="personal_loan"
                                                          placeholder="???????????? ??????????????"
                                                          rows="4"
                                                ></textarea>
                                            </div>
                                            <label for="mortgages" class="col-sm-2 col-form-label">
                                                ???????????????? ?????? ?????????????? ?????? ????????????????
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <textarea class="form-control text-right"
                                                          rows="4"
                                                          id="mortgages" name="mortgages"
                                                          placeholder=" ???????????????? ?????? ?????????????? ?????? ????????????????"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mt-4 one-second">
                                            <div class="col-sm-12 font-type">
                                                <h4 class="d-flex justify-content-start">???????????? ????????????</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_full_name" class="col-sm-2 col-form-label">?????????? ????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   id="sponsor_full_name" name="sponsor_full_name"
                                                   placeholder="?????????? ????????????"
                                                   value="">
                                        </div>
                                        <label for="sponsor_nationality" class="col-sm-2 col-form-label">??????????????</label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="sponsor_nationality"
                                                   name="sponsor_nationality"
                                                   placeholder="??????????????"
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_national_id" class="col-sm-2 col-form-label">?????????? ???????????? /
                                            ????????????
                                            ???????? ??????????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   id="sponsor_national_id" name="sponsor_national_id"
                                                   placeholder="?????????? ???????????? / ???????????? ???????? ??????????????????"
                                                   value="">
                                        </div>
                                        <label for="sponsor_gender" class="col-sm-2 col-form-label">??????????</label>
                                        <div class="col-sm-4 font-type">
                                            <select id="sponsor_gender" name="sponsor_gender">
                                                <option value="male">??????</option>
                                                <option value="female">????????</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_address" class="col-sm-2 col-form-label">??????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   id="sponsor_address" name="sponsor_address"
                                                   placeholder="??????????????"
                                                   value="">
                                        </div>
                                        <label for="sponsor_relationship"
                                               class="col-sm-2 col-form-label">??????????????</label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="sponsor_relationship"
                                                   name="sponsor_relationship"
                                                   placeholder="??????????????"
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_phone" class="col-sm-2 col-form-label">?????? ????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   id="sponsor_phone" name="sponsor_phone"
                                                   placeholder="?????? ????????????"
                                                   value="">
                                        </div>
                                        <label for="sponsor_salary_transfer_way_id" class="col-sm-2 col-form-label">??????????
                                            ???????????? ???????????? / ??????
                                            ??????????</label>
                                        <div class="col-sm-4 font-type">
                                            <select name="sponsor_salary_transfer_way_id"
                                                    id="sponsor_salary_transfer_way_id">
                                                <option value="" selected disabled>???????? ?????????? ??????????????
                                                </option>
                                                @foreach($transfers as $transfer)
                                                    <option
                                                        value="{{$transfer->id}}">{{$transfer->transfer_way}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_work_title" class="col-sm-2 col-form-label">?????? ????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   id="sponsor_work_title" name="sponsor_work_title"
                                                   placeholder="?????? ????????????"
                                                   value="">
                                        </div>
                                        <label for="sponsor_work_place" class="col-sm-2 col-form-label">
                                            ?????? ????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="sponsor_work_place"
                                                   name="sponsor_work_place"
                                                   placeholder=" ?????? ????????????"
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_salary" class="col-sm-2 col-form-label">????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="number"
                                                   id="sponsor_salary" name="sponsor_salary"
                                                   placeholder="????????????"
                                                   value="">
                                        </div>
                                        <label for="sponsor_work_date" class="col-sm-2 col-form-label">
                                            ?????????? ??????????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="date" id="sponsor_work_date"
                                                   name="sponsor_work_date"
                                                   placeholder=""
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_work_address" class="col-sm-2 col-form-label">
                                            ?????????? ??????????
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   id="sponsor_work_address" name="sponsor_work_address"
                                                   placeholder="?????????? ??????????"
                                                   value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="checkbox" required
                                                   id="check_confirm" name="check_confirm">
                                        </div>
                                        <label for="check_confirm"
                                               style="text-align: right; font-size: 24px; font-weight: 900; color: #992d2e"
                                               class="col-sm-10 col-form-label">
                                            ?????? ???? ???????? ?????????????????? ???????????????? ?????????? ?????????? ?? ???????????? ?? ???????? ?????????? ????????
                                            ?????????????????? ???? ???? ?????????????? ???????????? ???? ?????? ???????????? ?? ???????? ???????? ???????????? ??????????????
                                            ???????????? ???? ???? ?????? ???? ?????????????? ?????? ???????? ???????? ?? ???????? ?????????????? ?? ???????? ???????????? ????
                                            ???????? ???????????? ???????????? ???????????????? ???????????? ?????? ??????????????.
                                        </label>

                                    </div>
                                </div>
                                <div class="row mb-3 mt-5 one-second">

                                </div>
                                <div class="column one font-type">

                                    <button class="button-primary"
                                            id="submit"
                                            type="submit">
                                        ??????????
                                    </button>
                                </div>
                            </form>
                            <div id="success_message"
                                 style="display:none">
                                <h3>Submitted the form
                                    successfully!</h3>
                                <p>We will get back to you soon.</p>
                            </div>
                            <div id="error_message"
                                 style="width:100%; height:100%; display:none;">
                                <h3>Error</h3> Sorry there was an
                                error sending your form.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
