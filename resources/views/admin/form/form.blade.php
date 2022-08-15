<!doctype html>
<html lang="en">

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
    <link rel="stylesheet" href="{{asset('frontend/content/webfonterarabic/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/content/css/custom.css')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
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
                    طلب تمويل
                </h4>

                <div class="p-3">

                    <form class="form-horizontal mt-3" action="{{ route('apply.submit') }}" method="POST"
                          id="requestForm">
                        @csrf

                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h4 class="d-flex justify-content-start pb-4">نوع الطلب</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">

                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label" for="application_type_id">نوع
                                    الطلب</label>
                                <div class="col-sm-4 pr-0 error-message">
                                    <select class="form-select"
                                            required
                                            id="application_type_id" name="application_type_id">
                                        <option selected="" disabled value="">اختر نوع الطلب</option>
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
                                    <h4 class="d-flex justify-content-start pb-4">البيانات الشخصية</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_full_name" class="col-sm-1 col-form-label">الإسم الكامل</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_full_name" name="apply_full_name" type="text"
                                       required=""
                                       placeholder="الإسم الكامل من اربع مقاطع">
                            </div>
                            <label for="apply_nationality" class="col-sm-1 col-form-label">الجنسية</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_nationality" name="apply_nationality" type="text"
                                       required=""
                                       placeholder="على سبيل المثال اردني">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_national_id" class="col-sm-1 col-form-label"> الرقم الوطني<br>
                                جواز
                                السفر لغير الاردنيين</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_national_id" name="apply_national_id" type="text"
                                       required=""
                                       placeholder="الرقم الوطني / جواز السفر لغير الاردنيين">
                            </div>
                            <label for="apply_gender" class="col-sm-1 col-form-label">الجنس</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <select class="form-select" aria-label="" required
                                        id="apply_gender" name="apply_gender">
                                    <option value="" selected="" disabled>اختر الجنس</option>
                                    <option value="male">ذكر</option>
                                    <option value="female">انثى</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_address" class="col-sm-1 col-form-label">العنوان</label>
                            <div class="col-lg-6 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_address" name="apply_address" type="text"
                                       required=""
                                       placeholder="العنوان">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_phone" class="col-sm-1 col-form-label"> رقم الهاتف
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_phone" name="apply_phone"
                                       type="text"
                                       required=""
                                       placeholder="07XXXXXXXX">
                            </div>
                            <label for="apply_email" class="col-sm-1 col-form-label">البريد
                                الالكتروني</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_email" name="apply_email"
                                       type="text"
                                       required=""
                                       placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_birthdate" class="col-sm-1 col-form-label"> تاريخ
                                الميلاد
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="apply_birthdate" name="apply_birthdate"
                                       type="date"
                                       required=""
                                       placeholder="">
                            </div>
                            <label for="qualification_id" class="col-sm-1 col-form-label">المؤهل
                                العلمي</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <select class="form-select" aria-label=""
                                        id="qualification_id" name="qualification_id">
                                    <option value="" selected disabled>اختر المؤهل
                                        العلمي
                                    </option>
                                    @foreach($qualifications as $qualification)
                                        <option value="{{$qualification->id}}">{{$qualification->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="material_status_id" class="col-sm-1 col-form-label"> الحالة
                                الإجتماعية
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <select class="form-select" aria-label="" required
                                        id="material_status_id" name="material_status_id">
                                    <option value="" selected disabled>اختر الحالة
                                        الاجتماعية
                                    </option>
                                    @foreach($statuses as $status)
                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="dependents" class="col-sm-1 col-form-label">
                                عدد المعالين
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="dependents" name="dependents"
                                       type="number"
                                       step="0"
                                       required=""
                                       placeholder="عدد المعالين">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="husband_wife_name" class="col-sm-1 col-form-label">
                                إسم الزوج / الزوجة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 ">

                                <input class="form-control" id="husband_wife_name" name="husband_wife_name"
                                       type="text"
                                       placeholder="إسم الزوج / الزوجة">
                            </div>
                            <label for="husband_wife_work" class="col-sm-1 col-form-label">
                                عمل الزوج / الزوجة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                <input class="form-control" id="husband_wife_work" name="husband_wife_work"
                                       type="text"
                                       placeholder="عمل الزوج / الزوجة">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12  font-type">
                                    <h4 class="d-flex justify-content-start pb-4 pt-5">اقارب من الدرجة الاولى</h4>
                                </div>
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12  font-type">
                                    <h5 class="d-flex justify-content-start pb-1 pt-1"
                                        style="font-family: 'GE Flow',sans-serif">
                                        القريب الاول
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="relative_one_name" class="col-sm-1 col-form-label">
                                الإسم
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="relative_one_name" name="relative_one_name"
                                       type="text"
                                       placeholder="الإسم الكامل">
                            </div>
                            <label for="relative_one_relation" class="col-sm-1 col-form-label">
                                الصلة
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_one_relation" name="relative_one_relation"
                                       type="text"
                                       placeholder="الصلة">
                            </div>
                            <label for="relative_one_work_title" class="col-sm-1 col-form-label">
                                المهنة
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="relative_one_work_title" name="relative_one_work_title"
                                       type="text"
                                       placeholder="المهنة">
                            </div>
                            <label for="relative_one_work_place" class="col-sm-1 col-form-label">
                                مكان العمل
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_one_work_place" name="relative_one_work_place"
                                       type="text"
                                       placeholder=" مكان العمل">
                            </div>
                            <label for="relative_one_phone" class="col-sm-1 col-form-label">
                                الهاتف
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_one_phone" name="relative_one_phone"
                                       type="text"
                                       placeholder="الهاتف">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12  font-type">
                                    <h5 class="d-flex justify-content-start pb-4 pt-2"
                                        style="font-family: 'GE Flow',sans-serif">
                                        القريب الثاني</h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="relative_two_name" class="col-sm-1 col-form-label">
                                الإسم
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="relative_two_name" name="relative_two_name"
                                       type="text"
                                       placeholder="الإسم الكامل">
                            </div>
                            <label for="relative_two_relation" class="col-sm-1 col-form-label">
                                الصلة
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_two_relation" name="relative_two_relation"
                                       type="text"
                                       placeholder="الصلة">
                            </div>
                            <label for="relative_two_work_title" class="col-sm-1 col-form-label">
                                المهنة
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="relative_two_work_title" name="relative_two_work_title"
                                       type="text"
                                       placeholder="المهنة">
                            </div>
                            <label for="relative_two_work_place" class="col-sm-1 col-form-label">
                                مكان العمل
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_two_work_place" name="relative_two_work_place"
                                       type="text"
                                       placeholder=" مكان العمل">
                            </div>
                            <label for="relative_two_phone" class="col-sm-1 col-form-label">
                                الهاتف
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="relative_two_phone" name="relative_two_phone"
                                       type="text"
                                       placeholder="الهاتف">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12  font-type">
                                    <h4 class="d-flex justify-content-start pb-4 pt-5">
                                        بيانات العمل
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_place" class="col-sm-1 col-form-label">
                                اسم الشركة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_place" name="apply_work_place"
                                       type="text"
                                       required=""
                                       placeholder="اسم الشركة">
                            </div>
                            <label for="apply_work_title" class="col-sm-1 col-form-label">
                                الوظيفة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_title" name="apply_work_title"
                                       type="text"
                                       step="0"
                                       required=""
                                       placeholder="الوظيفة">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_phone" class="col-sm-1 col-form-label">
                                رقم الهاتف
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_phone" name="apply_work_phone"
                                       type="tel"
                                       required=""
                                       placeholder="رقم الهاتف">
                            </div>
                            <label for="apply_work_website" class="col-sm-1 col-form-label">
                                الموقع الالكتروني
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_website" name="apply_work_website"
                                       type="text"
                                       placeholder="الموقع الالكتروني">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_address" class="col-sm-1 col-form-label">
                                عنوان العمل
                            </label>
                            <div class="col-lg-6 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_address" name="apply_work_address"
                                       type="tel"
                                       required=""
                                       placeholder="عنوان العمل">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_date" class="col-sm-1 col-form-label">
                                تاريخ التعيين
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_work_date" name="apply_work_date"
                                       type="date"
                                       required=""
                                       placeholder="تاريخ التعيين">
                            </div>
                            <label for="apply_salary" class="col-sm-1 col-form-label">
                                الراتب الاجمالي
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="apply_salary" name="apply_salary"
                                       type="number"
                                       step="0.01"
                                       required=""
                                       placeholder="الراتب الاجمالي">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_email" class="col-sm-1 col-form-label">
                                البريد الإلكتروني
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_email" name="apply_work_email"
                                       type="email"
                                       placeholder="البريد الإلكتروني">
                            </div>
                            <label for="transfer_way_id" class="col-sm-1 col-form-label">
                                طريقة استلام الراتب
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12 error-message">
                                <select class="form-select" aria-label="" required
                                        id="transfer_way_id" name="transfer_way_id">
                                    <option value="" selected disabled>
                                        اختر طريقة الاستلام
                                    </option>
                                    @foreach($transfers as $transfer)
                                        <option value="{{$transfer->id}}">{{$transfer->transfer_way}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="bank_id" class="col-sm-1 col-form-label">
                                اسم البنك
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <select class="form-select" aria-label=""
                                        id="bank_id" name="bank_id">
                                    <option value="" selected disabled>
                                        اختر اسم البنك
                                    </option>
                                    @foreach($banks as $bank)
                                        <option value="{{$bank->id}}">{{$bank->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="salary_deduction" class="col-sm-1 col-form-label">
                                قيمة الاقتطاع على الراتب
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="salary_deduction" name="salary_deduction"
                                       type="number"
                                       step="0.01"
                                       required=""
                                       placeholder="قيمة الاقتطاع على الراتب">
                            </div>
                            <label for="salary_deduction_detail" class="col-sm-1 col-form-label">
                                تفاصيل الاقتطاعات
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <textarea class="form-control" id="salary_deduction_detail"
                                          name="salary_deduction_detail"
                                          rows="4"
                                          type="text"
                                          required=""
                                          placeholder="تفاصيل الاقتطاعات"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="personal_loan" class="col-sm-1 col-form-label">
                                القروض الشخصية
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <textarea class="form-control" id="personal_loan" name="personal_loan"
                                          required=""
                                          rows="4"
                                          placeholder="القروض الشخصية"></textarea>
                            </div>
                            <label for="mortgages" class="col-sm-1 col-form-label">
                                الرهونات على الاموال غير المنقولة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <textarea class="form-control" id="mortgages"
                                          name="mortgages"
                                          rows="4"
                                          type="text"
                                          required=""
                                          placeholder="الرهونات على الاموال غير المنقولة"></textarea>
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h4 class="d-flex justify-content-start pb-4 pt-5">
                                        تفاصيل الكفيل
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_full_name" class="col-sm-1 col-form-label">الإسم الكامل</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_full_name" name="sponsor_full_name" type="text"
                                       required=""
                                       placeholder="الإسم الكامل من اربع مقاطع">
                            </div>
                            <label for="sponsor_nationality" class="col-sm-1 col-form-label">الجنسية</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="sponsor_nationality" name="sponsor_nationality"
                                       type="text"
                                       required=""
                                       placeholder="على سبيل المثال اردني">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_national_id" class="col-sm-1 col-form-label"> الرقم الوطني<br>
                                جواز
                                السفر لغير الاردنيين</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">
                                <input class="form-control" id="sponsor_national_id" name="sponsor_national_id"
                                       type="text"
                                       required=""
                                       placeholder="الرقم الوطني جواز / السفر لغير الاردنيين">
                            </div>
                            <label for="sponsor_gender" class="col-sm-1 col-form-label">الجنس</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <select class="form-select" aria-label="" required
                                        id="sponsor_gender" name="sponsor_gender">
                                    <option value="" selected="" disabled>اختر الجنس</option>
                                    <option value="male">ذكر</option>
                                    <option value="female">انثى</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_address" class="col-sm-1 col-form-label">العنوان</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_address" name="sponsor_address" type="text"
                                       required=""
                                       placeholder="العنوان">
                            </div>
                            <label for="sponsor_relationship" class="col-sm-1 col-form-label">القرابة</label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_relationship" name="sponsor_relationship"
                                       type="text"
                                       required=""
                                       placeholder="القرابة">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <label for="sponsor_phone" class="col-sm-1 col-form-label">
                                رقم الهاتف
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_phone" name="sponsor_phone" type="tel"
                                       required=""
                                       placeholder="رقم الهاتف">
                            </div>
                            <label for="sponsor_work_title" class="col-sm-1 col-form-label">
                                عمل الكفيل
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_work_title" name="sponsor_work_title"
                                       type="text"
                                       required=""
                                       placeholder="عمل الكفيل">
                            </div>

                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_work_place" class="col-sm-1 col-form-label">
                                اسم الشركة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_work_place" name="sponsor_work_place"
                                       type="text"
                                       required=""
                                       placeholder="اسم الشركة">
                            </div>
                            <label for="sponsor_work_date" class="col-sm-1 col-form-label">
                                تاريخ التعيين
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="sponsor_work_date" name="sponsor_work_date"
                                       type="date"
                                       placeholder="تاريخ التعيين">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_work_address" class="col-sm-1 col-form-label">
                                عنوان العمل
                            </label>
                            <div class="col-lg-6 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_work_address" name="sponsor_work_address"
                                       type="text"
                                       required=""
                                       placeholder="عنوان العمل">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="sponsor_salary" class="col-sm-1 col-form-label">
                                الراتب
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12 error-message">

                                <input class="form-control" id="sponsor_salary" name="sponsor_salary"
                                       type="number"
                                       step="0.01"
                                       required=""
                                       placeholder="الراتب">
                            </div>
                            <label for="sponsor_salary_transfer_way_id" class="col-sm-1 col-form-label">طريقة
                                استلام الراتب</label>
                            <div class="col-lg-3 col-md-12 col-sm-12 error-message">


                                <select class="form-select" aria-label="" required
                                        id="sponsor_salary_transfer_way_id" name="sponsor_salary_transfer_way_id">
                                    <option value="" selected disabled>
                                        اختر طريقة الاستلام
                                    </option>
                                    @foreach($transfers as $transfer)
                                        <option value="{{$transfer->id}}">{{$transfer->transfer_way}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <label for="sponsor_bank_id" class="col-sm-1 col-form-label">
                                اسم البنك
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <select class="form-select" aria-label=""
                                        id="sponsor_bank_id" name="sponsor_bank_id">
                                    <option value="" selected disabled>
                                        اختر اسم البنك
                                    </option>
                                    @foreach($banks as $bank)
                                        <option value="{{$bank->id}}">{{$bank->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                        </div>
                        <div class="form-group mb-3 row pt-5">
                            <div class="form-check form-check-right error-message">

                                <input class="form-check-input" type="checkbox" id="agree" name="agree" required>
                                <label for="sponsor_bank_id"
                                       class="col-sm-10 col-form-label text-right pb-1">
                                    أقر ان كافة المعلومات المذكورة اعلاه صحيحة و دقيقة، و انني اتحمل كافة
                                    المسؤولية عن اي معلومات مغلوطة أو غير صحيحة، و أننا نفوض الشركة للإطلاع
                                    الدائم في أي وقت من الاوقات على نظام كريف و نظام سيكريت، و اننا نتنازل عن
                                    حقنا بأحكام السرية المصرفية لغايات هذا التفويض.
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end">
                                <button class="btn btn-info w-25  waves-effect waves-light" type="submit">ارسال
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

<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
        $('#requestForm').validate({
            rules: {
                application_type_id: {
                    required: true,
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
                },
                apply_birthdate: {
                    required: true,
                },
                apply_email: {
                    required: true,
                },
                material_status_id: {
                    required: true,
                },
                qualification_id: {
                    required: true,
                },
                dependents: {
                    required: true,
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
                sponsor_full_name: {
                    required: true,
                },
                sponsor_nationality: {
                    required: true,
                },
                sponsor_national_id: {
                    required: true,
                },
                sponsor_gender: {
                    required: true,
                },
                sponsor_address: {
                    required: true,
                },
                sponsor_relationship: {
                    required: true,
                },
                sponsor_phone: {
                    required: true,
                },
                sponsor_work_title: {
                    required: true,
                },
                sponsor_work_place: {
                    required: true,
                },
                sponsor_work_address: {
                    required: true,
                },
                sponsor_salary: {
                    required: true,
                },

            },
            messages: {
                application_type_id: {
                    required: '* اختر نوع الطلب',
                },
                sponsor_work_date: {
                    required: '* ادخل تاريخ التعيين',
                },
                apply_gender: {
                    required: '* اختر الجنس',
                },
                apply_nationality: {
                    required: '* ادخل الجنسية',
                },
                apply_full_name: {
                    required: '* ادخل الاسم',
                },
                apply_national_id: {
                    required: '* ادخل الرقم الوطني او رقم جواز السفر',
                },
                apply_address: {
                    required: '* ادخل العنوان',
                },
                apply_phone: {
                    required: '* ادخل رقم الهاتف',
                },
                apply_birthdate: {
                    required: '* ادخل تاريخ الميلاد',
                },
                apply_email: {
                    required: '* ادخل البريد الالكتروني',
                },
                material_status_id: {
                    required: '* اختر الحالة الإجتماعية',
                },
                qualification_id: {
                    required: '* اختر المؤهل العلمي',
                },
                dependents: {
                    required: '* ادخل عدد المعالين',
                },
                relative_one_name: {
                    required: '* ادخل اسم القريب',
                },
                relative_one_relation: {
                    required: '* ادخل الصلة',
                },
                relative_one_work_title: {
                    required: '* ادخل مهنة القريب',
                },
                relative_one_work_place: {
                    required: '* ادخل مكان عمل القريب',
                },
                relative_one_phone: {
                    required: '* ادخل رقم هاتف القريب',
                },
                relative_two_name: {
                    required: '* ادخل اسم القريب',
                },
                relative_two_relation: {
                    required: '* ادخل الصلة',
                },
                relative_two_work_title: {
                    required: '* ادخل مهنة القريب',
                },
                relative_two_work_place: {
                    required: '* ادخل مكان عمل القريب',
                },
                relative_two_phone: {
                    required: '* ادخل رقم هاتف القريب',
                },
                apply_work_place: {
                    required: '* ادخل اسم الشركة',
                },
                apply_work_title: {
                    required: '* ادخل الوظيفة',
                },
                apply_work_phone: {
                    required: '* ادخل رقم هاتف العمل',
                },
                apply_work_address: {
                    required: '* ادخل عنوان العمل',
                },
                apply_work_date: {
                    required: '* ادخل تاريخ التعيين',
                },
                apply_salary: {
                    required: '* ادخل الراتب الإجمالي',
                },
                salary_deduction: {
                    required: '* ادخل قيمة الاقتطاعات',
                },
                salary_deduction_detail: {
                    required: '* ادخل تفاصيل الاقتطاعات',
                },
                mortgages: {
                    required: '* ادخل الرهونات على الاموال غير المنقولة',
                },
                sponsor_full_name: {
                    required: '* ادخل اسم الكفيل من اربع مقاطع',
                },
                personal_loan: {
                    required: '* ادخل القروض الشخصية',
                },
                sponsor_nationality: {
                    required: '* ادخل جنسية الكفيل',
                },
                sponsor_national_id: {
                    required: '* ادخل الرقم الوطني او رقم جواز السفر',
                },
                sponsor_gender: {
                    required: '* اختر جنس الكفيل',
                },
                sponsor_address: {
                    required: '* ادخل عنوان الكفيل',
                },
                sponsor_relationship: {
                    required: '* ادخل صلة القرابة',
                },
                sponsor_phone: {
                    required: '* ادخل رقم هاتف الكفيل',
                },
                sponsor_work_title: {
                    required: '* ادخل عمل الكفيل',
                },
                sponsor_work_place: {
                    required: '* ادخل مكان عمل الكفيل',
                },
                sponsor_work_address: {
                    required: '* ادخل عنوان عمل الكفيل',
                },
                sponsor_salary: {
                    required: '* ادخل راتب الكفيل',
                },
                transfer_way_id: {
                    required: '* اختر طريقة الاستلام الراتب',
                },
                agree: {
                    required: '* يرجى الموافقة على الشروط',
                }, sponsor_salary_transfer_way_id: {
                    required: '* اختر طريقة استلام الراتب',
                },


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
</body>
</html>
