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
<div class="wrapper-page">
    <div class="container-fluid p-0">
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

                <h4 class="text-muted text-center font-size-18"><b>تم تقديم طلبك بنجاح</b></h4>

                <div class="p-3 text-center">
                    <p>
                        شكراً لك
                        {{$apply->apply_full_name}}

                    </p>
                    <p>رقم طلبك هو {{$apply->id}}</p>
                    <p>سيتم التواصل معك قريبا</p>
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
            }, "يرجى ادخال الرقم بالانجليزية و مبتدئاً 7 و من 9 خانات");
        $.validator.addMethod(
            "emailValidation",
            function (value, element) {
                value = value.replace(/\s+/g, "");
                return this.optional(element) || value.length > 9 && value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
            }, "يرجى ادخال البريد الالكتروني بالشكل الصحيح");
        $.validator.addMethod(
            "nameValidation",
            function (value, element) {
                // value = value.replace(/\s+/g, "");
                return this.optional(element) || value.length >= 10 &&
                    value.match(/(^[(ёЁЇїІіЄєҐґa-zA-Zа-яА-Я\u0621-\u064A\u0660-\u0669)]{3,26})(\s)([(ёЁЇїІіЄєҐґa-zA-Zа-яА-Я\u0621-\u064A\u0660-\u0669)]{3,26})?(\s)?([(ёЁЇїІіЄєҐґa-zA-Zа-яА-Я\u0621-\u064A\u0660-\u0669)]{3,26})?(\s)?([(ёЁЇїІіЄєҐґa-zA-Zа-яА-Я\u0621-\u064A\u0660-\u0669)]{3,26})+$/);
            }, "يرجى ادخال الاسم من اربع مقاطع");
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
                    required: '* اختر نوع الطلب',
                },
                // sponsor_work_date: {
                //     required: '* ادخل تاريخ التعيين',
                // },
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
                    digits: 'يرجى ادخال الرقم بالانجليزية'
                },
                apply_birthdate: {
                    required: '* ادخل تاريخ الميلاد',
                    max: "العمر يجب ان يكون على الاقل ١٣ عاماً",
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
                // sponsor_full_name: {
                //     required: '* ادخل اسم الكفيل من اربع مقاطع',
                // },
                personal_loan: {
                    required: '* ادخل القروض الشخصية',
                },
                // sponsor_nationality: {
                //     required: '* ادخل جنسية الكفيل',
                // },
                // sponsor_national_id: {
                //     required: '* ادخل الرقم الوطني او رقم جواز السفر',
                // },
                // sponsor_gender: {
                //     required: '* اختر جنس الكفيل',
                // },
                // sponsor_address: {
                //     required: '* ادخل عنوان الكفيل',
                // },
                // sponsor_relationship: {
                //     required: '* ادخل صلة القرابة',
                // },
                // sponsor_phone: {
                //     required: '* ادخل رقم هاتف الكفيل',
                // },
                // sponsor_work_title: {
                //     required: '* ادخل عمل الكفيل',
                // },
                // sponsor_work_place: {
                //     required: '* ادخل مكان عمل الكفيل',
                // },
                // sponsor_work_address: {
                //     required: '* ادخل عنوان عمل الكفيل',
                // },
                // sponsor_salary: {
                //     required: '* ادخل راتب الكفيل',
                // },
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
