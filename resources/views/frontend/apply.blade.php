@php
    $services = \App\Models\ApplyFormService::all();
    $transfers = \App\Models\SalaryTransferWay::all();
@endphp
@extends('frontend.main_master')
@section('main')
    <div class="section mcb-section full-width"
         style="padding-top:175px;padding-left:10%;padding-right:10%">
        <div class="row">
            <div class="col-md-6" style="padding:0 4%">
                <div class="row">
                    <div class="col-12 column-margin-40px">
                        <h1>Test</h1></div>
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
                    alt="fsubpic1"
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
                                            <h2 class="d-flex justify-content-center">طلب تمويل</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mt-2 one-second">
                                        <div class="col-sm-12 font-type">
                                            <h4 class="d-flex justify-content-start">نوع الطلب</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-3 one-second">
                                        <label for="application_type_id" class="col-sm-2 col-form-label">نوع
                                            الطلب</label>
                                        <div class="col-sm-4 font-type">
                                            <select name="application_type_id" id="application_type_id">
                                                <option value="" selected disabled>اختر نوع
                                                    الطلب
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
                                            <h4 class="d-flex justify-content-start">البيانات الشخصية</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-3 one-second">
                                        <label for="apply_full_name" class="col-sm-2 col-form-label">
                                            الإسم الكامل
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="apply_full_name"
                                                   name="apply_full_name"
                                                   placeholder="الإسم الكامل"
                                                   value="">
                                        </div>
                                        <label for="apply_nationality" class="col-sm-2 col-form-label">الجنسية</label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="apply_nationality"
                                                   name="apply_nationality"
                                                   placeholder="الجنسية"
                                                   value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-2 mt-2 one-second">
                                        <label for="apply_national_id" class="col-sm-2 col-form-label">
                                            الرقم الوطني<br>
                                            جواز
                                            السفر
                                            لغير الاردنيين</label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="apply_national_id"
                                                   name="apply_national_id"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   placeholder="الرقم الوطني جواز / السفر لغير الاردنيين"
                                                   value="">
                                        </div>
                                        <label for="apply_gender" class="col-sm-2 col-form-label">الجنس</label>
                                        <div class="col-sm-4 font-type">
                                            <select name="apply_gender" id="apply_gender">
                                                <option value="male">ذكر</option>
                                                <option value="female">انثى</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="apply_address" class="col-sm-2 col-form-label">العنوان</label>
                                        <div class="col-sm-10 font-type">
                                            <input class="form-apply_address" type="text" id="apply_address"
                                                   name="apply_address"
                                                   placeholder="العنوان"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_phone" class="col-sm-2 col-form-label">رقم الهاتف</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="tel"
                                                       onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                       id="apply_phone" name="apply_phone"
                                                       placeholder="رقم الهاتف"
                                                       value="">
                                            </div>
                                            <label for="apply_email" class="col-sm-2 col-form-label">البريد
                                                الالكتروني</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="email" id="apply_email"
                                                       name="apply_email"
                                                       placeholder="البريد الالكتروني"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_birthdate" class="col-sm-2 col-form-label">تاريخ
                                                الميلاد</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="date"
                                                       id="apply_birthdate" name="apply_birthdate"
                                                       placeholder="تاريخ الميلاد"
                                                       value="">
                                            </div>
                                            <label for="qualification" class="col-sm-2 col-form-label">المؤهل
                                                العلمي</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="qualification"
                                                       name="qualification"
                                                       placeholder="المؤهل العلمي"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="material_status" class="col-sm-2 col-form-label">الحالة
                                                الإجتماعية</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text"
                                                       id="material_status" name="material_status"
                                                       placeholder="الحالة الإجتماعية"
                                                       value="">
                                            </div>
                                            <label for="dependents" class="col-sm-2 col-form-label">عدد المعالين</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="number" id="dependents"
                                                       onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                       name="dependents"
                                                       placeholder="عدد المعالين"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="husband_wife_name" class="col-sm-2 col-form-label">إسم الزوج /
                                                الزوجة
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text"
                                                       id="husband_wife_name" name="husband_wife_name"
                                                       placeholder="إسم الزوج / الزوجة"
                                                       value="">
                                            </div>
                                            <label for="husband_wife_work" class="col-sm-2 col-form-label">عمل الزوج /
                                                الزوجة</label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="husband_wife_work"
                                                       name="husband_wife_work"
                                                       placeholder="عمل الزوج / الزوجة"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="column one">
                                    <div class="row mt-2 one-second">
                                        <div class="col-sm-12 font-type">
                                            <h4 class="d-flex justify-content-start">اقارب من الدرجة الاولى</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="relative_one_name" class="col-sm-1 col-form-label">الإسم</label>
                                        <div class="col-sm-2 font-type">
                                            <input class="form-control" type="text" id="relative_one_name"
                                                   name="relative_one_name"
                                                   placeholder="الإسم الكامل"
                                                   value="">
                                        </div>
                                        <label for="relative_one_relation" class="col-sm-1 col-form-label">الصلة</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="text" id="relative_one_relation"
                                                   name="relative_one_relation"
                                                   placeholder="الصلة"
                                                   value="">
                                        </div>
                                        <label for="relative_one_work_title"
                                               class="col-sm-1 col-form-label">المهنة</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="text" id="relative_one_work_title"
                                                   name="relative_one_work_title"
                                                   placeholder="المهنة"
                                                   value="">
                                        </div>
                                        <label for="relative_one_work_place" class="col-sm-1 col-form-label">مكان
                                            العمل</label>
                                        <div class="col-sm-2 font-type">
                                            <input class="form-control" type="text" id="relative_one_work_place"
                                                   name="relative_one_work_place"
                                                   placeholder="مكان العمل"
                                                   value="">
                                        </div>
                                        <label for="relative_one_phone" class="col-sm-1 col-form-label">الهاتف</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="tel" id="relative_one_phone"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   name="relative_one_phone"
                                                   placeholder="الهاتف"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="relative_two_name" class="col-sm-1 col-form-label">الإسم</label>
                                        <div class="col-sm-2 font-type">
                                            <input class="form-control" type="text" id="relative_two_name"
                                                   name="relative_two_name"
                                                   placeholder="الإسم الكامل"
                                                   value="">
                                        </div>
                                        <label for="relative_two_relation" class="col-sm-1 col-form-label">الصلة</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="text" id="relative_two_relation"
                                                   name="relative_two_relation"
                                                   placeholder="الصلة"
                                                   value="">
                                        </div>
                                        <label for="relative_two_work_title"
                                               class="col-sm-1 col-form-label">المهنة</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="text" id="relative_two_work_title"
                                                   name="relative_two_work_title"
                                                   placeholder="المهنة"
                                                   value="">
                                        </div>
                                        <label for="relative_two_work_place" class="col-sm-1 col-form-label">مكان
                                            العمل</label>
                                        <div class="col-sm-2 font-type">
                                            <input class="form-control" type="text" id="relative_two_work_place"
                                                   name="relative_two_work_place"
                                                   placeholder="مكان العمل"
                                                   value="">
                                        </div>
                                        <label for="relative_two_phone" class="col-sm-1 col-form-label">الهاتف</label>
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="tel" id="relative_two_phone"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   name="relative_two_phone"
                                                   placeholder="الهاتف"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mt-2 one-second">
                                            <div class="col-sm-12 font-type">
                                                <h4 class="d-flex justify-content-start">بيانات العمل</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_work_place" class="col-sm-2 col-form-label">اسم الشركة
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text"
                                                       id="apply_work_place" name="apply_work_place"
                                                       placeholder="اسم الشركة"
                                                       value="">
                                            </div>
                                            <label for="apply_work_title" class="col-sm-2 col-form-label">
                                                الوظيفة
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="apply_work_title"
                                                       name="apply_work_title"
                                                       placeholder="الوظيفة"
                                                       value=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_work_phone" class="col-sm-2 col-form-label">
                                                رقم الهاتف
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text"
                                                       id="apply_work_phone" name="apply_work_phone"
                                                       onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                       placeholder="رقم الهاتف"
                                                       value="">
                                            </div>
                                            <label for="apply_work_website" class="col-sm-2 col-form-label">
                                                الموقع الالكتروني
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="apply_work_website"
                                                       name="apply_work_website"
                                                       placeholder="الموقع الالكتروني"
                                                       value=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_work_address" class="col-sm-2 col-form-label">
                                                عنوان العمل
                                            </label>
                                            <div class="col-sm-10 font-type">
                                                <input class="form-control" type="text"
                                                       id="apply_work_address" name="apply_work_address"
                                                       placeholder="عنوان العمل"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">
                                            <label for="apply_work_date" class="col-sm-2 col-form-label">
                                                تاريخ التعيين
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control text-right" type="date"
                                                       id="apply_work_date" name="apply_work_date"
                                                       placeholder="تاريخ التعيين"
                                                       value="">
                                            </div>
                                            <label for="apply_salary" class="col-sm-2 col-form-label">
                                                الراتب الاجمالي
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="text" id="apply_salary"
                                                       name="apply_salary"
                                                       onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                       placeholder="الراتب الاجمالي"
                                                       value=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">

                                            <label for="apply_work_email" class="col-sm-2 col-form-label">
                                                البريد الإلكتروني
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="email" id="apply_work_email"
                                                       name="apply_work_email"
                                                       placeholder="البريد الإلكتروني"
                                                       value=""
                                                >
                                            </div>
                                            <label for="transfer_way_id" class="col-sm-2 col-form-label">
                                                طريقة استلام الراتب
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <select name="transfer_way_id" id="transfer_way_id">
                                                    <option value="" selected disabled>اختر طريقة التحويل
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
                                                قيمة الاقتطاع على الراتب
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <input class="form-control" type="number" id="salary_deduction"
                                                       name="salary_deduction"
                                                       onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                       placeholder="قيمة الاقتطاع على الراتب"
                                                       value=""
                                                >
                                            </div>
                                            <label for="salary_deduction_detail" class="col-sm-2 col-form-label">
                                                تفاصيل الاقتطاعات
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <textarea class="form-control text-right"
                                                          id="salary_deduction_detail" name="salary_deduction_detail"
                                                          placeholder="تفاصيل الاقتطاعات"
                                                          rows="4"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mb-3 mt-2 one-second">

                                            <label for="personal_loan" class="col-sm-2 col-form-label">
                                                القروض الشخصية
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <textarea class="form-control" id="personal_loan" name="personal_loan"
                                                          placeholder="القروض الشخصية"
                                                          rows="4"
                                                ></textarea>
                                            </div>
                                            <label for="mortgages" class="col-sm-2 col-form-label">
                                                الرهونات على الاموال غير المنقولة
                                            </label>
                                            <div class="col-sm-4 font-type">
                                                <textarea class="form-control text-right"
                                                          rows="4"
                                                          id="mortgages" name="mortgages"
                                                          placeholder=" الرهونات على الاموال غير المنقولة"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one">
                                        <div class="row mt-4 one-second">
                                            <div class="col-sm-12 font-type">
                                                <h4 class="d-flex justify-content-start">تفاصيل الكفيل</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_full_name" class="col-sm-2 col-form-label">الإسم الكامل
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   id="sponsor_full_name" name="sponsor_full_name"
                                                   placeholder="الإسم الكامل"
                                                   value="">
                                        </div>
                                        <label for="sponsor_nationality" class="col-sm-2 col-form-label">الجنسية</label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="sponsor_nationality"
                                                   name="sponsor_nationality"
                                                   placeholder="الجنسية"
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_national_id" class="col-sm-2 col-form-label">الرقم الوطني /
                                            الشخصي
                                            لغير الأردنيين
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   id="sponsor_national_id" name="sponsor_national_id"
                                                   placeholder="الإسم الكامل"
                                                   value="">
                                        </div>
                                        <label for="sponsor_gender" class="col-sm-2 col-form-label">الجنس</label>
                                        <div class="col-sm-4 font-type">
                                            <select id="sponsor_gender" name="sponsor_gender">
                                                <option value="male">ذكر</option>
                                                <option value="female">انثى</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_address" class="col-sm-2 col-form-label">العنوان
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   id="sponsor_address" name="sponsor_address"
                                                   placeholder="العنوان"
                                                   value="">
                                        </div>
                                        <label for="sponsor_relationship"
                                               class="col-sm-2 col-form-label">القرابة</label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="sponsor_relationship"
                                                   name="sponsor_relationship"
                                                   placeholder="القرابة"
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_phone" class="col-sm-2 col-form-label">رقم الهاتف
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   id="sponsor_phone" name="sponsor_phone"
                                                   placeholder="رقم الهاتف"
                                                   value="">
                                        </div>
                                        <label for="sponsor_salary_transfer_way_id" class="col-sm-2 col-form-label">طريقة
                                            استلام الراتب / اسم
                                            البنك</label>
                                        <div class="col-sm-4 font-type">
                                            <select name="sponsor_salary_transfer_way_id"
                                                    id="sponsor_salary_transfer_way_id">
                                                <option value="" selected disabled>اختر طريقة التحويل
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
                                        <label for="sponsor_work_title" class="col-sm-2 col-form-label">عمل الكفيل
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   id="sponsor_work_title" name="sponsor_work_title"
                                                   placeholder="عمل الكفيل"
                                                   value="">
                                        </div>
                                        <label for="sponsor_work_place" class="col-sm-2 col-form-label">
                                            اسم الشركة
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text" id="sponsor_work_place"
                                                   name="sponsor_work_place"
                                                   placeholder=" اسم الشركة"
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <label for="sponsor_salary" class="col-sm-2 col-form-label">الراتب
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="number"
                                                   onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)"
                                                   id="sponsor_salary" name="sponsor_salary"
                                                   placeholder="الراتب"
                                                   value="">
                                        </div>
                                        <label for="sponsor_work_date" class="col-sm-2 col-form-label">
                                            تاريخ التعيين
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
                                            عنوان العمل
                                        </label>
                                        <div class="col-sm-4 font-type">
                                            <input class="form-control" type="text"
                                                   id="sponsor_work_address" name="sponsor_work_address"
                                                   placeholder="عنوان العمل"
                                                   value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="column one">
                                    <div class="row mb-3 mt-2 one-second">
                                        <div class="col-sm-1 font-type">
                                            <input class="form-control" type="checkbox"
                                                   id="check_confirm" name="check_confirm">
                                        </div>
                                        <label for="check_confirm"
                                               style="text-align: right; font-size: 24px; font-weight: 900; color: #992d2e"
                                               class="col-sm-10 col-form-label">
                                            أقر ان كافة المعلومات المذكورة اعلاه صحيحة و دقيقة، و انني اتحمل كافة
                                            المسؤولية عن اي معلومات مغلوطة أو غير صحيحة، و أننا نفوض الشركة للإطلاع
                                            الدائم في أي وقت من الاوقات على نظام كريف و نظام سيكريت، و اننا نتنازل عن
                                            حقنا بأحكام السرية المصرفية لغايات هذا التفويض.
                                        </label>

                                    </div>
                                </div>
                                <div class="row mb-3 mt-5 one-second">

                                </div>
                                <div class="column one font-type">

                                    <button class="button-primary"
                                            id="submit"
                                            type="submit">
                                        ارسال
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
