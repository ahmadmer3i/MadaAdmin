<!DOCTYPE html>
{{--<html>
<head>
    <meta charset="utf-8"/>
    <title>{{$application->form_services->name}}</title>

    <style>
        h2 {
            display: flex;
            text-align: center;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            background-image: url({{public_path('frontend/content/images/heroback.png')}});
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 0;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0"
           style="background-image: url("{{public_path('frontend/content/images/heroback.png')}}")">

    <tr class="top">
        <td colspan="2">
            <table>
                <tr>
                    <td class="title">
                        <img src="{{public_path('backend/assets/images/logo-dark.png')}}"
                             style="width: 50%; max-width: 200px" alt=""/>
                    </td>


                </tr>
            </table>
        </td>
    </tr>

    <tr class="invoice-box">
        <td colspan="3">
            <table>
                <tr style="text-align: right">

                    <td style="padding-left: 5px">
                        الجنسية: {{$application->apply_nationality}}<br/>
                    </td>
                    <td style="padding-left: 5px">
                        الاسم: {{$application->apply_full_name}}<br/>
                    </td>
                    <td style="padding-left: 5px">
                        الاسم: {{$application->apply_national_id}}<br/>
                    </td>
            </table>
        </td>
    </tr>

    <tr class="heading">
        <td>Payment Method</td>

        <td>Check #</td>
    </tr>

    <tr class="details">
        <td>Check</td>

        <td>1000</td>
    </tr>

    <tr class="heading">
        <td>Item</td>

        <td>Price</td>
    </tr>

    <tr class="item">
        <td>Website design</td>
    </tr>

    <tr class="item">
        <td>Hosting (3 months)</td>

        <td>$75.00</td>
    </tr>

    <tr class="item last">
        <td>Domain name (1 year)</td>

        <td>$10.00</td>
    </tr>
    <tr class="heading">
        <td>Payment Method</td>

        <td>Check #</td>
    </tr>

    <tr class="details">
        <td>Check</td>

        <td>1000</td>
    </tr>

    <tr class="heading">
        <td>Item</td>

        <td>Price</td>
    </tr>

    <tr class="item">
        <td>Website design</td>

        <td>$300.00</td>
    </tr>

    <tr class="item">
        <td>Hosting (3 months)</td>

        <td>$75.00</td>
    </tr>

    <tr class="item last">
        <td>Domain name (1 year)</td>

        <td>$10.00</td>
    </tr>

    <tr class="total">
        <td></td>

        <td>Total: $385.00</td>
    </tr>
    </table>
</div>
</body>
</html>--}}

<html lang="en" dir="rtl">

<head>


</head>

<body>
<style>

    table {
        width: 100%;
    }

    table .table-row {
        font-size: 16px;
        width: 50%;
        padding-left: 20px;
        white-space: nowrap;
    }

    .body-font-size {
        font-size: 14px;
        text-align: center;
    }

    .name-element {
        font-weight: bold;
        flex-flow: nowrap row;
    }

    .container {
        display: grid;
    }

    .table-row {
        font-size: 16px;
        padding-bottom: 20px;
    }

    body {
        font-family: 'almarai', sans-serif;
        text-align: center;
        color: #000;
    }

    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        /*border: 1px solid #eee;*/
        /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);*/
        font-size: 16px;
        line-height: 24px;
        font-family: 'almarai', sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .invoice-box.rtl {
        direction: ltr;
        font-family: 'almarai', sans-serif;
    }

    .invoice-box.rtl table {
        text-align: right;
    }

    .invoice-box.rtl table tr td:nth-child(2) {
        text-align: left;
    }


    /* Clear floats after the columns */
</style>

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div class="container">
    <div class="invoice-box rtl">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title" style="text-align: left">
                                <img src="{{public_path('backend/assets/images/logo-dark.png')}}" alt="Company logo"
                                     style="width: 100%; max-width: 200px; display: flex; justify-content: right"/>
                            </td>

                            <td style="text-align: right; direction: rtl">
                                رقم الطلب: {{$application->id}}<br/>
                                التاريخ: {{$date}} <br/>
                                نوع الطلب: <b>{{$application->form_services->name}}</b><br>
                                الخدمة
                                المطلوبة:{{!empty($application->category_services->name) ? $application->category_services->name : ''}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


        <!-- start page title -->
        <div>
            <h1>طلب تمويل</h1>
        </div>


    </div>
    <h2 style='text-align: right'>البيانات الشخصية</h2>
    <table style="padding-top: 20px">

        <tr>
            <td class="table-row">

                <span class="name-element">الاسم: </span>{{$application->apply_full_name}}


            </td>
            <td class="table-row">
                <span class="name-element">الرقم الوطني: </span>{{$application->apply_national_id}}
            </td>

        <tr>
            <td class="table-row">

                <span class="name-element">العنوان: </span>{{$application->apply_address}}


            </td>
            <td class="table-row">
                <span class="name-element">الجنس: </span>{{$application->apply_gender == 'male' ? 'ذكر':'انثى'}}
            </td>

        </tr>
        <tr>


            <td class="table-row">

                <span class="name-element">الجنسية: </span>{{$application->apply_nationality}}


            </td>
        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">البريد الالكتروني: </span>{{$application->apply_email}}


            </td>

        </tr>
        <tr>

            <td class="table-row">
                    <span
                        class="name-element">تاريخ الميلاد: </span>{{$application->apply_birthdate}}
            </td>
            <td class="table-row">

                <span class="name-element">رقم الهاتف: </span>{{$application->apply_phone}}


            </td>
        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">اسم الزوج / الزوجة: </span>{{$application->husband_wife_name}}


            </td>
            <td class="table-row">

                <span class="name-element">عمل الزوج / الزوجة: </span>{{$application->husband_wife_work}}


            </td>


        </tr>
        <tr>


        </tr>

        <tr>
            <td class="table-row">
                    <span
                        class="name-element">عدد المعالين: </span>{{$application->dependents}}
            </td>
            <td class="table-row">
                <span class="name-element">المؤهل العلمي: </span>{{$application->form_qualification->name}}
            </td>

        <tr>

    </table>
    <h2 style='text-align: right'>اقارب الدرجة الاولى</h2>
    <table
        style="border-collapse: collapse; border-spacing: 0; width: 100%; text-align: center">
        <thead>
        <tr>
            <th>#</th>
            <th>الاسم</th>
            <th>الصلة</th>
            <th>المهنة</th>
            <th>مكان العمل</th>
            <th>رقم الهاتف</th>
        </tr>
        </thead>


        <tbody>
        <tr>
            <td class="body-font-size">1</td>
            <td class="body-font-size">
                {{$application->relative_one_name}}
            </td>
            <td class="body-font-size">{{$application->relative_one_relation}}</td>
            <td class="body-font-size">{{$application->relative_one_work_title}}</td>
            <td class="body-font-size">{{$application->relative_one_work_place}}</td>
            <td class="body-font-size">{{$application->relative_one_phone}}</td>
        </tr>
        <tr>
            <td class="body-font-size">2</td>
            <td class="body-font-size">
                {{$application->relative_two_name}}
            </td>
            <td class="body-font-size">{{$application->relative_two_relation}}</td>
            <td class="body-font-size">{{$application->relative_two_work_title}}</td>
            <td class="body-font-size">{{$application->relative_two_work_place}}</td>
            <td class="body-font-size">{{$application->relative_two_phone}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    <h2 style='text-align: right'>بيانات العمل</h2>
    <table style="padding-top: 20px;font-size: 20px">

        <tr>
            <td class="table-row">

                <span class="name-element">اسم الشركة: </span>{{$application->apply_work_place}}


            </td>
            <td class="table-row">
                <span class="name-element">الوظيفة: </span>{{$application->apply_work_title}}
            </td>

        <tr>
            <td class="table-row">

                <span class="name-element">رقم الهاتف: </span>{{$application->apply_work_phone}}


            </td>
            <td class="table-row">

                <span class="name-element">الموقع الالكتروني: </span>{{$application->apply_work_website}}


            </td>

        </tr>
        <tr>
            <td class="table-row" style="font-size: 20px;">

                <span class="name-element">عنوان العمل: </span>{{$application->apply_work_address}}


            </td>
            <td class="table-row">

                <span class="name-element">تاريخ التعيين: </span>{{$application->apply_work_date}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">البريد الالكتروني: </span>{{$application->apply_work_email}}


            </td>
            <td class="table-row">

                <span class="name-element">الراتب الاجمالي: </span>{{$application->apply_salary}} دينار اردني


            </td>

        </tr>
        <tr>
            <td class="table-row">

                        <span
                            class="name-element">طريقة استلام الراتب: </span>{{!empty($application->transfer_ways) ? $application->transfer_ways->transfer_way : ''}}


            </td>
            <td class="table-row">

                <span
                    class="name-element">البنك: </span> {{!empty($application->partner_bank->name) ? $application->partner_bank->name : ''}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">قيمة الاقتطاعات على الراتب: </span>{{$application->salary_deduction}} دينار
                اردني


            </td>
            <td class="table-row">

                <span class="name-element">تفاصيل الاقتطاعات: </span>{{$application->salary_deduction_detail}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">القروض الشخصية: </span>{{$application->personal_loan}}
            </td>


        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">الرهونات على الاموال غير المنقولة: </span>{{$application->mortgages}}


            </td>
        </tr>


    </table>
    <h2 style='text-align: right'>تفاصيل الكفيل</h2>
    <table style="padding-top: 20px">

        <tr>
            <td class="table-row">

                <span class="name-element">الاسم الكامل: </span>{{$application->sponsor_full_name}}


            </td>
            <td class="table-row">
                <span class="name-element">الجنسية: </span>{{$application->sponsor_nationality}}
            </td>

        <tr>
            <td class="table-row">

                <span class="name-element">الرقم الوطني: </span>{{$application->sponsor_national_id}}


            </td>
            <td class="table-row">

                @if($application->sponsor_gender == 'male')
                    <span class="name-element">الجنس: </span>ذكر
                @elseif($application->sponsor_gender == 'female')
                    <span class="name-element">الجنس: </span>انثى
                @else
                    <span class="name-element">الجنس: </span>
                @endif


            </td>

        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">العنوان: </span>{{$application->sponsor_address}}


            </td>
            <td class="table-row">

                <span class="name-element">القرابة: </span>{{$application->sponsor_relationship}}

            </td>

        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">رقم الهاتف: </span>{{$application->sponsor_phone}}


            </td>
            <td class="table-row">

                <span
                    class="name-element">الراتب: </span>{{!empty($application->sponsor_salary) ? $application->sponsor_salary.' دينار اردني' : ''}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                <span
                    class="name-element">طريقة استلام الراتب: </span>{{!empty($application->transfer_ways_sponsor->transfer_way) ? $application->transfer_ways_sponsor->transfer_way:''}}


            </td>
            <td class="table-row">

                <span
                    class="name-element">البنك: </span>{{(!empty($application->sponsor_bank->name) ?  $application->sponsor_bank->name : 'No')}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">عمل الكفيل: </span>{{$application->sponsor_work_title}}
            </td>
            <td class="table-row">

                <span class="name-element">الشركة: </span>{{$application->sponsor_work_place}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">عنوان العمل: </span>{{$application->sponsor_work_address}}
            </td>
            <td class="table-row">

                    <span
                        class="name-element">تاريخ التعيين: </span>{{$application->sponsor_work_date}}


            </td>

        </tr>


    </table>
    <h2 style="text-align: right">اقرار</h2>
    <p style="font-size: 16px; text-align: right">نحن الموقعين
        ادناه.................................................................</p>
    <p style="font-size: 16px; text-align: right">
        اقر ان كافة المعلومات المذكورة اعلاه صحيحة و دقيقة، و انني اتحمل كافة المسؤولية عن اي معلومات مغلوطة
        أو غير صحيحة، و أننا نفوض الشركة للإطلاع الدائم في أي وقت من الاوقات على نظام كريف و نظام سيكريت، و
        اننا نتنازل عن حقنا بأحكام السرية المصرفية لغايات هذا التفويض عليه اوقع.
    </p>

    <table>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">مقدم الطلب:</span>
            </td>
            <td class="table-row">

                    <span
                        class="name-element" style="padding-right: 40px">الكفيل:</span>


            </td>
    </table>
    <br>
    <table>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">التاريخ:</span>
            </td>
            <td class="table-row">

                    <span
                        class="name-element" style="padding-right: 40px">التاريخ:</span>


            </td>
    </table>
    <br>
    <table>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">التوقيع:</span>
            </td>
            <td class="table-row">

                    <span
                        class="name-element" style="padding-right: 40px">التوقيع:</span>


            </td>
    </table>

    </tr>
</div>
</div>
<!-- end row -->

<!-- End Page-content -->
</body>
</html>
