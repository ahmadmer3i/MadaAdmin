<!doctype html>
<html lang="en" dir="rtl">

<head>

    @php
        $services = \App\Models\ApplyFormService::all();
        $qualifications = \App\Models\FormQualification::all();
        $statuses = \App\Models\FormMaterialStatus::all();
        $transfers = \App\Models\SalaryTransferWay::all();
        $banks = \App\Models\FormBank::all();
    @endphp
    <meta charset="utf-8"/>
    <title>MADA Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin & Dashboard" name="description"/>
    <meta content="" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/libs/twitter-bootstrap-wizard/prettify.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/content/webfonterarabic/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/content/webfontkit/stylesheet.css')}}">
    <link href="{{asset('backend/assets/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/content/css/custom.css')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('backend/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}"
          rel="stylesheet">

    <link href="{{asset('backend/assets/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet"
          type="text/css">

    <link href="{{asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}"
          rel="stylesheet">
    <link href="{{asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('backend/assets/css/form.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body class="auth-body-bg">
<div class="bg-overlay"></div>
<div class="container-fluid" style="padding: 30px 30px">
    <div class="container-fluid p-0" style="direction: rtl">
        <div class="card">
            <div class="card-body">

                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="{{url('/')}}" class="auth-logo">
                            <img src="{{asset('backend/assets/images/logo-dark.png')}}" height="30"
                                 class="logo-dark mx-auto" alt="">
                            <img src="{{asset('backend/assets/images/logo-light.png')}}" height="30"
                                 class="logo-light mx-auto" alt="">
                        </a>
                    </div>
                </div>

                <h4 class="text-muted text-center font-size-22" style="font-family: 'GE Flow', sans-serif">
                    ?????? ??????????
                </h4>

                <div class="p-3">

                    <form class="form-horizontal mt-3" action="{{ route('apply.submit') }}" method="POST"
                          enctype="multipart/form-data"
                          id="requestForm">
                        @csrf

                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h4 class="d-flex justify-content-start pb-4">?????? ??????????</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label" for="application_type_id">??????
                                    ??????????</label>
                                <div class="col-sm-4 pr-0 error-message">
                                    <select class="form-select"
                                            required
                                            id="application_type_id" name="application_type_id">
                                        <option selected="" disabled value="">???????? ?????? ??????????</option>
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label" for="category_id">??????
                                    ????????????</label>
                                <div class="col-sm-4 pr-0 error-message">
                                    <select class="form-select"
                                            id="category_id" name="category_id" required>
                                        <option selected="" disabled value="">???????? ????????????</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h4 class="d-flex justify-content-start pb-4">???????????????? ??????????????</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_full_name" class="col-sm-1 col-form-label">?????????? ????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_full_name" name="apply_full_name" type="text"
                                       required=""
                                       placeholder="?????????? ???????????? ???? ???????? ??????????">
                            </div>
                            <label for="apply_nationality" class="col-sm-1 col-form-label">??????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_nationality" name="apply_nationality" type="text"
                                       required=""
                                       placeholder="?????? ???????? ???????????? ??????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_national_id" class="col-sm-1 col-form-label"> ?????????? ????????????<br>
                                ????????
                                ?????????? ???????? ??????????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_national_id" name="apply_national_id" type="text"
                                       required=""
                                       placeholder="?????????? ???????????? / ???????? ?????????? ???????? ??????????????????">
                            </div>
                            <label for="apply_gender" class="col-sm-1 col-form-label">??????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <select class="form-select" aria-label="" required
                                        id="apply_gender" name="apply_gender">
                                    <option value="" selected="" disabled>???????? ??????????</option>
                                    <option value="male">??????</option>
                                    <option value="female">????????</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_address" class="col-sm-1 col-form-label">??????????????</label>
                            <div class="col-lg-6 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_address" name="apply_address" type="text"
                                       required=""
                                       placeholder="??????????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_phone" class="col-sm-1 col-form-label"> ?????? ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control text-right" id="apply_phone" name="apply_phone"
                                       type="text"
                                       placeholder="7XXXXXXXX"
                                       required=""
                                >
                            </div>
                            <label for="apply_email" class="col-sm-1 col-form-label">????????????
                                ????????????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_email" name="apply_email"
                                       type="text"
                                       required=""
                                       placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_birthdate" class="col-sm-1 col-form-label"> ??????????
                                ??????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                {{--                                <div class="input-group" id="datepicker1">--}}
                                {{--                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy"--}}
                                {{--                                           data-date-format="dd/mm/yyyy" data-date-container='#datepicker1'--}}
                                {{--                                           id="apply_birthdate" name="apply_birthdate"--}}
                                {{--                                           data-provide="datepicker">--}}

                                {{--                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>--}}
                                {{--                                </div>--}}
                                <input class="form-control" id="apply_birthdate" name="apply_birthdate"
                                       type="date"
                                       max="{{\Illuminate\Support\Carbon::now()->subYear(13)}}"
                                       required=""
                                       placeholder="">
                            </div>
                            <label for="qualification_id" class="col-sm-1 col-form-label">????????????
                                ????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <select class="form-select" aria-label=""
                                        id="qualification_id" name="qualification_id">
                                    <option value="" selected disabled>???????? ????????????
                                        ????????????
                                    </option>
                                    @foreach($qualifications as $qualification)
                                        <option value="{{$qualification->id}}">{{$qualification->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="material_status_id" class="col-sm-1 col-form-label"> ????????????
                                ????????????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <select class="form-select" aria-label="" required
                                        id="material_status_id" name="material_status_id">
                                    <option value="" selected disabled>???????? ????????????
                                        ????????????????????
                                    </option>
                                    @foreach($statuses as $status)
                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="dependents" class="col-sm-1 col-form-label">
                                ?????? ????????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="dependents" name="dependents"
                                       type="text"

                                       required=""
                                       placeholder="?????? ????????????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="husband_wife_name" class="col-sm-1 col-form-label">
                                ?????? ?????????? / ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 ">

                                <input class="form-control" id="husband_wife_name" name="husband_wife_name"
                                       type="text"
                                       placeholder="?????? ?????????? / ????????????">
                            </div>
                            <label for="husband_wife_work" class="col-sm-1 col-form-label">
                                ?????? ?????????? / ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                <input class="form-control" id="husband_wife_work" name="husband_wife_work"
                                       type="text"
                                       placeholder="?????? ?????????? / ????????????">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12  font-type">
                                    <h4 class="d-flex justify-content-start pb-4 pt-5">?????????? ???? ???????????? ????????????</h4>
                                </div>
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12  font-type">
                                    <h5 class="d-flex justify-content-start pb-1 pt-1"
                                        style="font-family: 'GE Flow',sans-serif">
                                        ???????????? ??????????
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="relative_one_name" class="col-sm-1 col-form-label">
                                ??????????
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="relative_one_name" name="relative_one_name"
                                       type="text"
                                       placeholder="?????????? ????????????">
                            </div>
                            <label for="relative_one_relation" class="col-sm-1 col-form-label">
                                ??????????
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_one_relation" name="relative_one_relation"
                                       type="text"
                                       placeholder="??????????">
                            </div>
                            <label for="relative_one_work_title" class="col-sm-1 col-form-label">
                                ????????????
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="relative_one_work_title" name="relative_one_work_title"
                                       type="text"
                                       placeholder="????????????">
                            </div>
                            <label for="relative_one_work_place" class="col-sm-1 col-form-label">
                                ???????? ??????????
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_one_work_place" name="relative_one_work_place"
                                       type="text"
                                       placeholder=" ???????? ??????????">
                            </div>
                            <label for="relative_one_phone" class="col-sm-1 col-form-label">
                                ????????????
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_one_phone" name="relative_one_phone"
                                       type="text"
                                       placeholder="????????????">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12  font-type">
                                    <h5 class="d-flex justify-content-start pb-4 pt-2"
                                        style="font-family: 'GE Flow',sans-serif">
                                        ???????????? ????????????</h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="relative_two_name" class="col-sm-1 col-form-label">
                                ??????????
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="relative_two_name" name="relative_two_name"
                                       type="text"
                                       placeholder="?????????? ????????????">
                            </div>
                            <label for="relative_two_relation" class="col-sm-1 col-form-label">
                                ??????????
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_two_relation" name="relative_two_relation"
                                       type="text"
                                       placeholder="??????????">
                            </div>
                            <label for="relative_two_work_title" class="col-sm-1 col-form-label">
                                ????????????
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="relative_two_work_title" name="relative_two_work_title"
                                       type="text"
                                       placeholder="????????????">
                            </div>
                            <label for="relative_two_work_place" class="col-sm-1 col-form-label">
                                ???????? ??????????
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_two_work_place" name="relative_two_work_place"
                                       type="text"
                                       placeholder=" ???????? ??????????">
                            </div>
                            <label for="relative_two_phone" class="col-sm-1 col-form-label">
                                ????????????
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_two_phone" name="relative_two_phone"
                                       type="text"
                                       placeholder="????????????">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12  font-type">
                                    <h4 class="d-flex justify-content-start pb-4 pt-5">
                                        ???????????? ??????????
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_place" class="col-sm-1 col-form-label">
                                ?????? ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_place" name="apply_work_place"
                                       type="text"
                                       required=""
                                       placeholder="?????? ????????????">
                            </div>
                            <label for="apply_work_title" class="col-sm-1 col-form-label">
                                ??????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_title" name="apply_work_title"
                                       type="text"
                                       required=""
                                       placeholder="??????????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_phone" class="col-sm-1 col-form-label">
                                ?????? ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_phone" name="apply_work_phone"
                                       type="tel"
                                       required=""
                                       placeholder="?????? ????????????">
                            </div>
                            <label for="apply_work_website" class="col-sm-1 col-form-label">
                                ???????????? ????????????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_website" name="apply_work_website"
                                       type="text"
                                       placeholder="???????????? ????????????????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_address" class="col-sm-1 col-form-label">
                                ?????????? ??????????
                            </label>
                            <div class="col-lg-6 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_address" name="apply_work_address"
                                       type="text"
                                       required=""
                                       placeholder="?????????? ??????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_date" class="col-sm-1 col-form-label">
                                ?????????? ??????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_date" name="apply_work_date"
                                       type="date"
                                       required=""
                                       placeholder="?????????? ??????????????">
                            </div>
                            <label for="apply_salary" class="col-sm-1 col-form-label">
                                ???????????? ????????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" style="direction: rtl" id="apply_salary" name="apply_salary"
                                       type="number"
                                       step="0.01"
                                       required=""
                                       placeholder="???????????? ????????????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_email" class="col-sm-1 col-form-label">
                                ???????????? ????????????????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_email" name="apply_work_email"
                                       type="email"
                                       placeholder="???????????? ????????????????????">
                            </div>
                            <label for="transfer_way_id" class="col-sm-1 col-form-label">
                                ?????????? ???????????? ????????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12 error-message">
                                <select class="form-select" aria-label="" required
                                        id="transfer_way_id" name="transfer_way_id">
                                    <option value="" selected disabled>
                                        ???????? ?????????? ????????????????
                                    </option>
                                    @foreach($transfers as $transfer)
                                        <option value="{{$transfer->id}}">{{$transfer->transfer_way}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="bank_id" class="col-sm-1 col-form-label">
                                ?????? ??????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <select class="form-select" aria-label=""
                                        id="bank_id" name="bank_id">
                                    <option value="" selected disabled>
                                        ???????? ?????? ??????????
                                    </option>
                                    @foreach($banks as $bank)
                                        <option value="{{$bank->id}}">{{$bank->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="salary_deduction" class="col-sm-1 col-form-label">
                                ???????? ???????????????? ?????? ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="salary_deduction" name="salary_deduction"
                                       type="number"
                                       step="0.01"
                                       required=""
                                       style="direction: rtl"
                                       placeholder="???????? ???????????????? ?????? ????????????">
                            </div>
                            <label for="salary_deduction_detail" class="col-sm-1 col-form-label">
                                ???????????? ????????????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <textarea class="form-control" id="salary_deduction_detail"
                                          name="salary_deduction_detail"
                                          rows="4"
                                          type="text"
                                          required=""
                                          placeholder="???????????? ????????????????????"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="personal_loan" class="col-sm-1 col-form-label">
                                ???????????? ??????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <textarea class="form-control" id="personal_loan" name="personal_loan"
                                          required=""
                                          rows="4"
                                          placeholder="???????????? ??????????????"></textarea>
                            </div>
                            <label for="mortgages" class="col-sm-1 col-form-label">
                                ???????????????? ?????? ?????????????? ?????? ????????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <textarea class="form-control" id="mortgages"
                                          name="mortgages"
                                          rows="4"
                                          type="text"
                                          required=""
                                          placeholder="???????????????? ?????? ?????????????? ?????? ????????????????"></textarea>
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h4 class="d-flex justify-content-start pb-4 pt-5">
                                        ???????????? ????????????
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_full_name" class="col-sm-1 col-form-label">?????????? ????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_full_name" name="sponsor_full_name" type="text"

                                       placeholder="?????????? ???????????? ???? ???????? ??????????">
                            </div>
                            <label for="sponsor_nationality" class="col-sm-1 col-form-label">??????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="sponsor_nationality" name="sponsor_nationality"
                                       type="text"

                                       placeholder="?????? ???????? ???????????? ??????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_national_id" class="col-sm-1 col-form-label"> ?????????? ????????????<br>
                                ????????
                                ?????????? ???????? ??????????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="sponsor_national_id" name="sponsor_national_id"
                                       type="text"

                                       placeholder="?????????? ???????????? / ???????? ?????????? ???????? ??????????????????">
                            </div>
                            <label for="sponsor_gender" class="col-sm-1 col-form-label">??????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <select class="form-select" aria-label=""
                                        id="sponsor_gender" name="sponsor_gender">
                                    <option value="" selected="" disabled>???????? ??????????</option>
                                    <option value="male">??????</option>
                                    <option value="female">????????</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_address" class="col-sm-1 col-form-label">??????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_address" name="sponsor_address" type="text"

                                       placeholder="??????????????">
                            </div>
                            <label for="sponsor_relationship" class="col-sm-1 col-form-label">??????????????</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_relationship" name="sponsor_relationship"
                                       type="text"

                                       placeholder="??????????????">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="sponsor_phone" class="col-sm-1 col-form-label">
                                ?????? ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_phone" name="sponsor_phone" type="tel"

                                       style="direction: rtl"
                                       placeholder="?????? ????????????">
                            </div>
                            <label for="sponsor_work_title" class="col-sm-1 col-form-label">
                                ?????? ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_work_title" name="sponsor_work_title"
                                       type="text"

                                       placeholder="?????? ????????????">
                            </div>

                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_work_place" class="col-sm-1 col-form-label">
                                ?????? ????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_work_place" name="sponsor_work_place"
                                       type="text"

                                       placeholder="?????? ????????????">
                            </div>
                            <label for="sponsor_work_date" class="col-sm-1 col-form-label">
                                ?????????? ??????????????
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="sponsor_work_date" name="sponsor_work_date"
                                       type="date"
                                       placeholder="?????????? ??????????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_work_address" class="col-sm-1 col-form-label">
                                ?????????? ??????????
                            </label>
                            <div class="col-lg-6 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_work_address" name="sponsor_work_address"
                                       type="text"

                                       placeholder="?????????? ??????????">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_salary" class="col-sm-1 col-form-label">
                                ????????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_salary" name="sponsor_salary"
                                       type="number"
                                       step="0.01"

                                       style="direction: rtl"
                                       placeholder="????????????">
                            </div>
                            <label for="sponsor_salary_transfer_way_id" class="col-sm-1 col-form-label">??????????
                                ???????????? ????????????</label>
                            <div class="col-lg-3 col-md-12 col-sm-12 error-message">


                                <select class="form-select" aria-label=""
                                        id="sponsor_salary_transfer_way_id" name="sponsor_salary_transfer_way_id">
                                    <option value="" selected disabled>
                                        ???????? ?????????? ????????????????
                                    </option>
                                    @foreach($transfers as $transfer)
                                        <option value="{{$transfer->id}}">{{$transfer->transfer_way}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <label for="sponsor_bank_id" class="col-sm-1 col-form-label">
                                ?????? ??????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <select class="form-select" aria-label=""
                                        id="sponsor_bank_id" name="sponsor_bank_id">
                                    <option value="" selected disabled>
                                        ???????? ?????? ??????????
                                    </option>
                                    @foreach($banks as $bank)
                                        <option value="{{$bank->id}}">{{$bank->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row mt-5">
                            <label for="apply_id_image" class="col-sm-2 col-form-label">
                                ?????????? ???????? ???? ???????? ???????? ??????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_id_image" name="apply_id_image"
                                       type="file" value="">
                            </div>
                            <label for="sponsor_id_image" class="col-sm-2 col-form-label">
                                ?????????? ???????? ???? ???????? ????????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">

                                <input class="form-control" id="sponsor_id_image" name="sponsor_id_image"
                                       type="file" value="">
                            </div>

                        </div>
                        <div class="form-group mb-3 row">
                            <label for="attachment2" class="col-sm-2 col-form-label">
                                ?????????? ???????? ???? ?????? ???????????? ???? ?????????? ??????????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">

                                <input class="form-control" id="attachment2" name="attachment2"
                                       type="file" value="">
                            </div>
                            <label for="attachment1" class="col-sm-2 col-form-label">
                                ???????????? ????????
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">

                                <input class="form-control" id="attachment1" name="attachment1"
                                       type="file" value="">
                            </div>
                        </div>
                        <div class="form-group mb-3 row pt-5">
                            <div class="form-check form-check-right error-message">

                                <input class="form-check-input" type="checkbox" id="agree" name="agree" required>
                                <label for="sponsor_bank_id"
                                       class="col-sm-10 col-form-label text-right pb-1">
                                    ?????? ???? ???????? ?????????????????? ???????????????? ?????????? ?????????? ?? ???????????? ?? ???????? ?????????? ????????
                                    ?????????????????? ???? ???? ?????????????? ???????????? ???? ?????? ???????????? ?? ???????? ???????? ???????????? ??????????????
                                    ???????????? ???? ???? ?????? ???? ?????????????? ?????? ???????? ???????? ?? ???????? ?????????????? ?? ???????? ???????????? ????
                                    ???????? ???????????? ???????????? ???????????????? ???????????? ?????? ??????????????.
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end">
                                <button class="btn btn-info w-25  waves-effect waves-light" type="submit">??????????
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end -->
            </div>
            <!-- end cardbody -->
        </div>
        <!-- end card -->
    </div>
    <!-- end container -->
</div>
<!-- end -->

<!-- JAVASCRIPT -->
<script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<script src="{{asset('backend/assets/js/pages/form-advanced.init.js')}}"></script>
<script src="{{asset('backend/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

<script src="{{asset('backend/assets/libs/twitter-bootstrap-wizard/prettify.js')}}"></script>

<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('backend/assets/js/pages/form-wizard.init.js')}}"></script>
<script src="{{asset('backend/assets/js/validate.min.js')}}"></script>
<script>
    @if(Session::has('message'))
    const type = "{{ Session::get('alert-type','info') }}";
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>
<script>
    $(document).ready(function () {
        $.validator.addMethod(
            "mobileValidation",
            function (value, element) {
                value = value.replace(/\s+/g, "");
                return this.optional(element) || value.length >= 9 && value.match(/^7[7-9][0-9][0-9]{6}?$/);
            }, "???????? ?????????? ?????????? ?????????????????????? ?? ?????????????? 7 ?? ???? 9 ??????????");
        $.validator.addMethod(
            "emailValidation",
            function (value, element) {
                value = value.replace(/\s+/g, "");
                return this.optional(element) || value.length > 9 && value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
            }, "???????? ?????????? ???????????? ???????????????????? ???????????? ????????????");
        $.validator.addMethod(
            "nameValidation",
            function (value, element) {
                // value = value.replace(/\s+/g, "");
                return this.optional(element) || value.length >= 10 &&
                    value.match(/(^[(????????????????????a-zA-Z??-????-??\u0621-\u064A\u0660-\u0669)]{3,26})(\s)([(????????????????????a-zA-Z??-????-??\u0621-\u064A\u0660-\u0669)]{3,26})?(\s)?([(????????????????????a-zA-Z??-????-??\u0621-\u064A\u0660-\u0669)]{3,26})?(\s)?([(????????????????????a-zA-Z??-????-??\u0621-\u064A\u0660-\u0669)]{3,26})+$/);
            }, "???????? ?????????? ?????????? ???? ???????? ??????????");
        $('#requestForm').validate({
            rules: {
                application_type_id: {
                    required: true,
                },
                apply_full_name: {
                    nameValidation: true,

                },
                apply_gender: {
                    required: true,
                },
                apply_nationality: {
                    required: true,
                },
                apply_national_id: {
                    required: true,
                },
                apply_address: {
                    required: true,
                },
                apply_phone: {
                    required: true,
                    mobileValidation: true,
                    minlength: 9,
                    maxlength: 9,
                },
                apply_birthdate: {
                    required: true,
                },
                apply_email: {
                    required: true,
                    emailValidation: true,
                },
                material_status_id: {
                    required: true,
                },
                qualification_id: {
                    required: true,
                },
                dependents: {
                    required: true,
                    digits: true,
                },
                relative_one_name: {
                    required: true,
                },
                relative_one_relation: {
                    required: true,
                },
                relative_one_work_title: {
                    required: true,
                },
                relative_one_work_place: {
                    required: true,
                },
                relative_one_phone: {
                    required: true,
                },
                relative_two_name: {
                    required: true,
                },
                relative_two_relation: {
                    required: true,
                },
                relative_two_work_title: {
                    required: true,
                },
                relative_two_work_place: {
                    required: true,
                },
                relative_two_phone: {
                    required: true,
                },
                apply_work_place: {
                    required: true,
                },
                apply_work_title: {
                    required: true,
                },
                apply_work_phone: {
                    required: true,
                },
                apply_work_address: {
                    required: true,
                },
                apply_work_date: {
                    required: true,
                },
                apply_salary: {
                    required: true,
                },
                salary_deduction: {
                    required: true,
                },
                salary_deduction_detail: {
                    required: true,
                },
                personal_loan: {
                    required: true,
                },
                mortgages: {
                    required: true,
                },
                // sponsor_full_name: {
                //     required: true,
                // },
                // sponsor_nationality: {
                //     required: true,
                // },
                // sponsor_national_id: {
                //     required: true,
                // },
                // sponsor_gender: {
                //     required: true,
                // },
                // sponsor_address: {
                //     required: true,
                // },

                // sponsor_relationship: {
                //     required: true,
                // },
                // sponsor_phone: {
                //     required: true,
                // },
                // sponsor_work_title: {
                //     required: true,
                // },
                // sponsor_work_place: {
                //     required: true,
                // },
                // sponsor_work_address: {
                //     required: true,
                // },
                // sponsor_salary: {
                //     required: true,
                // },

            },
            messages: {
                application_type_id: {
                    required: '* ???????? ?????? ??????????',
                },
                // sponsor_work_date: {
                //     required: '* ???????? ?????????? ??????????????',
                // },
                apply_gender: {
                    required: '* ???????? ??????????',
                },
                apply_nationality: {
                    required: '* ???????? ??????????????',
                },
                apply_full_name: {
                    required: '* ???????? ??????????',
                },
                apply_national_id: {
                    required: '* ???????? ?????????? ???????????? ???? ?????? ???????? ??????????',
                },
                apply_address: {
                    required: '* ???????? ??????????????',
                },
                apply_phone: {
                    required: '* ???????? ?????? ????????????',
                    digits: '???????? ?????????? ?????????? ??????????????????????'
                },
                apply_birthdate: {
                    required: '* ???????? ?????????? ??????????????',
                    max: "?????????? ?????? ???? ???????? ?????? ?????????? ???? ??????????",
                },
                apply_email: {
                    required: '* ???????? ???????????? ????????????????????',
                },
                material_status_id: {
                    required: '* ???????? ???????????? ????????????????????',
                },
                qualification_id: {
                    required: '* ???????? ???????????? ????????????',
                },
                dependents: {
                    required: '* ???????? ?????? ????????????????',
                },
                relative_one_name: {
                    required: '* ???????? ?????? ????????????',
                },
                relative_one_relation: {
                    required: '* ???????? ??????????',
                },
                relative_one_work_title: {
                    required: '* ???????? ???????? ????????????',
                },
                relative_one_work_place: {
                    required: '* ???????? ???????? ?????? ????????????',
                },
                relative_one_phone: {
                    required: '* ???????? ?????? ???????? ????????????',
                },
                relative_two_name: {
                    required: '* ???????? ?????? ????????????',
                },
                relative_two_relation: {
                    required: '* ???????? ??????????',
                },
                relative_two_work_title: {
                    required: '* ???????? ???????? ????????????',
                },
                relative_two_work_place: {
                    required: '* ???????? ???????? ?????? ????????????',
                },
                relative_two_phone: {
                    required: '* ???????? ?????? ???????? ????????????',
                },
                apply_work_place: {
                    required: '* ???????? ?????? ????????????',
                },
                apply_work_title: {
                    required: '* ???????? ??????????????',
                },
                apply_work_phone: {
                    required: '* ???????? ?????? ???????? ??????????',
                },
                apply_work_address: {
                    required: '* ???????? ?????????? ??????????',
                },
                apply_work_date: {
                    required: '* ???????? ?????????? ??????????????',
                },
                apply_salary: {
                    required: '* ???????? ???????????? ????????????????',
                },
                salary_deduction: {
                    required: '* ???????? ???????? ????????????????????',
                },
                salary_deduction_detail: {
                    required: '* ???????? ???????????? ????????????????????',
                },
                mortgages: {
                    required: '* ???????? ???????????????? ?????? ?????????????? ?????? ????????????????',
                },
                // sponsor_full_name: {
                //     required: '* ???????? ?????? ???????????? ???? ???????? ??????????',
                // },
                personal_loan: {
                    required: '* ???????? ???????????? ??????????????',
                },
                // sponsor_nationality: {
                //     required: '* ???????? ?????????? ????????????',
                // },
                // sponsor_national_id: {
                //     required: '* ???????? ?????????? ???????????? ???? ?????? ???????? ??????????',
                // },
                // sponsor_gender: {
                //     required: '* ???????? ?????? ????????????',
                // },
                // sponsor_address: {
                //     required: '* ???????? ?????????? ????????????',
                // },
                // sponsor_relationship: {
                //     required: '* ???????? ?????? ??????????????',
                // },
                // sponsor_phone: {
                //     required: '* ???????? ?????? ???????? ????????????',
                // },
                // sponsor_work_title: {
                //     required: '* ???????? ?????? ????????????',
                // },
                // sponsor_work_place: {
                //     required: '* ???????? ???????? ?????? ????????????',
                // },
                // sponsor_work_address: {
                //     required: '* ???????? ?????????? ?????? ????????????',
                // },
                // sponsor_salary: {
                //     required: '* ???????? ???????? ????????????',
                // },
                transfer_way_id: {
                    required: '* ???????? ?????????? ???????????????? ????????????',
                },
                agree: {
                    required: '* ???????? ???????????????? ?????? ????????????',
                }, sponsor_salary_transfer_way_id: {
                    required: '* ???????? ?????????? ???????????? ????????????',
                },
                category_id: {
                    required: '???????? ???????????? ?????? ????????????'
                }


            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.error-message').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid')
                $(element).css({
                    'background-position': 'left calc(.375em + .94rem) center',
                    'padding-right': '2%',
                })
                $('#agree').css({
                    'padding': '0'
                })
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid')
            },
        })
    })
</script>
<script>
    $(document).on('change', '#application_type_id', function () {
        var application_type_id = $(this).val();
        $.ajax({
            url: "{{route('get-category')}}",
            type: "GET",
            data: {application_type_id: application_type_id},
            success: function (data) {
                var html = '<option selected="" disabled value="">???????? ????????????</option>';
                $.each(data, function (key, v) {
                    html += '<option value="' + v.id + '" > ' + v.name + ' </option>'
                });
                $("#category_id").html(html);
            }
        })
    });
</script>
</body>
</html>
