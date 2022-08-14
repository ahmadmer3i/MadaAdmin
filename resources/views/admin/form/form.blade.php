<!doctype html>
<html lang="en">

<head>

    @php
        $services = \App\Models\ApplyFormService::all();
        $qualifications = \App\Models\FormQualification::all();
        $statuses = \App\Models\FormMaterialStatus::all();
        $transfers = \App\Models\SalaryTransferWay::all();
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
                        <a href="index.html" class="auth-logo">
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

                    <form class="form-horizontal mt-3" action="{{ route('apply.submit') }}" method="POST">
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
                                <div class="col-sm-4 pr-0">
                                    <select class="form-select" aria-label="Default select example"
                                            id="application_type_id" name="application_type_id">
                                        <option selected="" disabled>اختر نوع الطلب</option>
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
                            <label for="apply_full_name" class="col-sm-2 col-form-label">الإسم الكامل</label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="apply_full_name" name="apply_full_name" type="text"
                                       required=""
                                       placeholder="الإسم الكامل من اربع مقاطع">
                            </div>
                            <label for="apply_nationality" class="col-sm-2 col-form-label">الجنسية</label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="apply_nationality" name="apply_nationality" type="text"
                                       required=""
                                       placeholder="على سبيل المثال اردني">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_national_id" class="col-sm-2 col-form-label"> الرقم الوطني<br>
                                جواز
                                السفر لغير الاردنيين</label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="apply_national_id" name="apply_national_id" type="text"
                                       required=""
                                       placeholder="الرقم الوطني جواز / السفر لغير الاردنيين">
                            </div>
                            <label for="apply_gender" class="col-sm-2 col-form-label">الجنس</label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <select class="form-select" aria-label=""
                                        id="apply_gender" name="apply_gender">

                                    <option value="male">ذكر</option>
                                    <option value="female">انثى</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_address" class="col-sm-2 col-form-label">العنوان</label>
                            <div class="col-lg-6 col-md-12 col-sm-12">

                                <input class="form-control" id="apply_address" name="apply_address" type="text"
                                       required=""
                                       placeholder="العنوان">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_phone" class="col-sm-2 col-form-label"> رقم الهاتف
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="apply_phone" name="apply_phone"
                                       type="text"
                                       required=""
                                       placeholder="07XXXXXXXX">
                            </div>
                            <label for="apply_email" class="col-sm-2 col-form-label">البريد
                                الالكتروني</label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_email" name="apply_email"
                                       type="text"
                                       required=""
                                       placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_birthdate" class="col-sm-2 col-form-label"> تاريخ
                                الميلاد
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="apply_birthdate" name="apply_birthdate"
                                       type="date"
                                       required=""
                                       placeholder="">
                            </div>
                            <label for="qualification_id" class="col-sm-2 col-form-label">المؤهل
                                العلمي</label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
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
                            <label for="apply_phone" class="col-sm-2 col-form-label"> رقم الهاتف
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="apply_phone" name="apply_phone"
                                       type="text"
                                       required=""
                                       placeholder="07XXXXXXXX">
                            </div>
                            <label for="apply_email" class="col-sm-2 col-form-label">البريد
                                الالكتروني</label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_email" name="apply_email"
                                       type="email"
                                       required=""
                                       placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="material_status_id" class="col-sm-2 col-form-label"> الحالة
                                الإجتماعية
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <select class="form-select" aria-label=""
                                        id="material_status_id" name="material_status_id">
                                    <option value="" selected disabled>اختر الحالة
                                        الاجتماعية
                                    </option>
                                    @foreach($statuses as $status)
                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="dependents" class="col-sm-2 col-form-label">
                                عدد المعالين
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="dependents" name="dependents"
                                       type="number"
                                       step="0"
                                       required=""
                                       placeholder="عدد المعالين">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="husband_wife_name" class="col-sm-2 col-form-label">
                                إسم الزوج / الزوجة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">

                                <input class="form-control" id="husband_wife_name" name="husband_wife_name"
                                       type="text"
                                       placeholder="إسم الزوج / الزوجة">
                            </div>
                            <label for="husband_wife_work" class="col-sm-2 col-form-label">
                                عمل الزوج / الزوجة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="husband_wife_work" name="husband_wife_work"
                                       type="text"
                                       placeholder="عمل الزوج / الزوجة">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h4 class="d-flex justify-content-start pb-4 pt-5">اقارب من الدرجة الاولى</h4>
                                </div>
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h5 class="d-flex justify-content-start pb-1 pt-1" style="font-family: 'GE Flow'">
                                        القريب الاول
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="relative_one_name" class="col-sm-1 col-form-label">
                                الإسم
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12">

                                <input class="form-control" id="relative_one_name" name="relative_one_name"
                                       type="text"
                                       placeholder="الإسم الكامل">
                            </div>
                            <label for="relative_one_relation" class="col-sm-1 col-form-label">
                                الصلة
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12">
                                <input class="form-control" id="relative_one_relation" name="relative_one_relation"
                                       type="text"
                                       placeholder="الصلة">
                            </div>
                            <label for="relative_one_work_title" class="col-sm-1 col-form-label">
                                المهنة
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12">

                                <input class="form-control" id="relative_one_work_title" name="relative_one_work_title"
                                       type="text"
                                       placeholder="المهنة">
                            </div>
                            <label for="relative_one_work_place" class="col-sm-1 col-form-label">
                                مكان العمل
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12">
                                <input class="form-control" id="relative_one_work_place" name="relative_one_work_place"
                                       type="text"
                                       placeholder=" مكان العمل">
                            </div>
                            <label for="relative_one_phone" class="col-sm-1 col-form-label">
                                الهاتف
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12">
                                <input class="form-control" id="relative_one_phone" name="relative_one_phone"
                                       type="text"
                                       placeholder="الهاتف">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h5 class="d-flex justify-content-start pb-4 pt-2" style="font-family: 'GE Flow'">
                                        القريب الثاني</h5>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="relative_two_name" class="col-sm-1 col-form-label">
                                الإسم
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12">

                                <input class="form-control" id="relative_two_name" name="relative_two_name"
                                       type="text"
                                       placeholder="الإسم الكامل">
                            </div>
                            <label for="relative_two_relation" class="col-sm-1 col-form-label">
                                الصلة
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12">
                                <input class="form-control" id="relative_two_relation" name="relative_two_relation"
                                       type="text"
                                       placeholder="الصلة">
                            </div>
                            <label for="relative_two_work_title" class="col-sm-1 col-form-label">
                                المهنة
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12">

                                <input class="form-control" id="relative_two_work_title" name="relative_two_work_title"
                                       type="text"
                                       placeholder="المهنة">
                            </div>
                            <label for="relative_two_work_place" class="col-sm-1 col-form-label">
                                مكان العمل
                            </label>
                            <div class="col-lg-1 col-md-12 col-sm-12">
                                <input class="form-control" id="relative_two_work_place" name="relative_two_work_place"
                                       type="text"
                                       placeholder=" مكان العمل">
                            </div>
                            <label for="relative_two_phone" class="col-sm-1 col-form-label">
                                الهاتف
                            </label>
                            <div class="col-lg-2 col-md-12 col-sm-12">
                                <input class="form-control" id="relative_two_phone" name="relative_two_phone"
                                       type="text"
                                       placeholder="الهاتف">
                            </div>
                        </div>
                        <div class="column one">
                            <div class="row mt-2 one-second">
                                <div class="col-sm-12 font-type">
                                    <h4 class="d-flex justify-content-start pb-4 pt-5">
                                        بيانات العمل
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_place" class="col-sm-2 col-form-label">
                                اسم الشركة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_place" name="apply_work_place"
                                       type="text"
                                       required=""
                                       placeholder="اسم الشركة">
                            </div>
                            <label for="apply_work_title" class="col-sm-2 col-form-label">
                                الوظيفة
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_title" name="apply_work_title"
                                       type="text"
                                       step="0"
                                       required=""
                                       placeholder="الوظيفة">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_phone" class="col-sm-2 col-form-label">
                                رقم الهاتف
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_phone" name="apply_work_phone"
                                       type="tel"
                                       required=""
                                       placeholder="رقم الهاتف">
                            </div>
                            <label for="apply_work_website" class="col-sm-2 col-form-label">
                                الموقع الالكتروني
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_website" name="apply_work_website"
                                       type="text"
                                       step="0"
                                       required=""
                                       placeholder="الموقع الالكتروني">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_address" class="col-sm-2 col-form-label">
                                عنوان العمل
                            </label>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_address" name="apply_work_address"
                                       type="tel"
                                       required=""
                                       placeholder="عنوان العمل">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="apply_work_date" class="col-sm-2 col-form-label">
                                تاريخ التعيين
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <input class="form-control" id="apply_work_date" name="apply_work_date"
                                       type="date"
                                       required=""
                                       placeholder="تاريخ التعيين">
                            </div>
                            <label for="apply_salary" class="col-sm-2 col-form-label">
                                الراتب الاجمالي
                            </label>
                            <div class="col-lg-4 col-md-12 col-sm-12">
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
                            <label for="apply_salary" class="col-sm-1 col-form-label">
                                طريقة استلام الراتب
                            </label>
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <select class="form-select" aria-label=""
                                        id="material_status_id" name="material_status_id">
                                    <option value="" selected disabled>
                                        اختر طريقة الاستلام
                                    </option>
                                    @foreach($transfers as $transfer)
                                        <option value="{{$transfer->id}}">{{$transfer->transfer_way}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">ارسال
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

</body>
</html>
