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
                        ??????????????: {{$application->apply_nationality}}<br/>
                    </td>
                    <td style="padding-left: 5px">
                        ??????????: {{$application->apply_full_name}}<br/>
                    </td>
                    <td style="padding-left: 5px">
                        ??????????: {{$application->apply_national_id}}<br/>
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
                                ?????? ??????????: {{$application->id}}<br/>
                                ??????????????: {{$date}} <br/>
                                ?????? ??????????: <b>{{$application->form_services->name}}</b><br>
                                ????????????
                                ????????????????:{{!empty($application->category_services->name) ? $application->category_services->name : ''}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>


        <!-- start page title -->
        <div>
            <h1>?????? ??????????</h1>
        </div>


    </div>
    <h2 style='text-align: right'>???????????????? ??????????????</h2>
    <table style="padding-top: 20px">

        <tr>
            <td class="table-row">

                <span class="name-element">??????????: </span>{{$application->apply_full_name}}


            </td>
            <td class="table-row">
                <span class="name-element">?????????? ????????????: </span>{{$application->apply_national_id}}
            </td>

        <tr>
            <td class="table-row">

                <span class="name-element">??????????????: </span>{{$application->apply_address}}


            </td>
            <td class="table-row">
                <span class="name-element">??????????: </span>{{$application->apply_gender == 'male' ? '??????':'????????'}}
            </td>

        </tr>
        <tr>


            <td class="table-row">

                <span class="name-element">??????????????: </span>{{$application->apply_nationality}}


            </td>
        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">???????????? ????????????????????: </span>{{$application->apply_email}}


            </td>

        </tr>
        <tr>

            <td class="table-row">
                    <span
                        class="name-element">?????????? ??????????????: </span>{{$application->apply_birthdate}}
            </td>
            <td class="table-row">

                <span class="name-element">?????? ????????????: </span>{{$application->apply_phone}}


            </td>
        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">?????? ?????????? / ????????????: </span>{{$application->husband_wife_name}}


            </td>
            <td class="table-row">

                <span class="name-element">?????? ?????????? / ????????????: </span>{{$application->husband_wife_work}}


            </td>


        </tr>
        <tr>


        </tr>

        <tr>
            <td class="table-row">
                    <span
                        class="name-element">?????? ????????????????: </span>{{$application->dependents}}
            </td>
            <td class="table-row">
                <span class="name-element">???????????? ????????????: </span>{{$application->form_qualification->name}}
            </td>

        <tr>

    </table>
    <h2 style='text-align: right'>?????????? ???????????? ????????????</h2>
    <table
        style="border-collapse: collapse; border-spacing: 0; width: 100%; text-align: center">
        <thead>
        <tr>
            <th>#</th>
            <th>??????????</th>
            <th>??????????</th>
            <th>????????????</th>
            <th>???????? ??????????</th>
            <th>?????? ????????????</th>
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
    <h2 style='text-align: right'>???????????? ??????????</h2>
    <table style="padding-top: 20px;font-size: 20px">

        <tr>
            <td class="table-row">

                <span class="name-element">?????? ????????????: </span>{{$application->apply_work_place}}


            </td>
            <td class="table-row">
                <span class="name-element">??????????????: </span>{{$application->apply_work_title}}
            </td>

        <tr>
            <td class="table-row">

                <span class="name-element">?????? ????????????: </span>{{$application->apply_work_phone}}


            </td>
            <td class="table-row">

                <span class="name-element">???????????? ????????????????????: </span>{{$application->apply_work_website}}


            </td>

        </tr>
        <tr>
            <td class="table-row" style="font-size: 20px;">

                <span class="name-element">?????????? ??????????: </span>{{$application->apply_work_address}}


            </td>
            <td class="table-row">

                <span class="name-element">?????????? ??????????????: </span>{{$application->apply_work_date}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">???????????? ????????????????????: </span>{{$application->apply_work_email}}


            </td>
            <td class="table-row">

                <span class="name-element">???????????? ????????????????: </span>{{$application->apply_salary}} ?????????? ??????????


            </td>

        </tr>
        <tr>
            <td class="table-row">

                        <span
                            class="name-element">?????????? ???????????? ????????????: </span>{{!empty($application->transfer_ways) ? $application->transfer_ways->transfer_way : ''}}


            </td>
            <td class="table-row">

                <span
                    class="name-element">??????????: </span> {{!empty($application->partner_bank->name) ? $application->partner_bank->name : ''}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">???????? ???????????????????? ?????? ????????????: </span>{{$application->salary_deduction}} ??????????
                ??????????


            </td>
            <td class="table-row">

                <span class="name-element">???????????? ????????????????????: </span>{{$application->salary_deduction_detail}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">???????????? ??????????????: </span>{{$application->personal_loan}}
            </td>


        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">???????????????? ?????? ?????????????? ?????? ????????????????: </span>{{$application->mortgages}}


            </td>
        </tr>


    </table>
    <h2 style='text-align: right'>???????????? ????????????</h2>
    <table style="padding-top: 20px">

        <tr>
            <td class="table-row">

                <span class="name-element">?????????? ????????????: </span>{{$application->sponsor_full_name}}


            </td>
            <td class="table-row">
                <span class="name-element">??????????????: </span>{{$application->sponsor_nationality}}
            </td>

        <tr>
            <td class="table-row">

                <span class="name-element">?????????? ????????????: </span>{{$application->sponsor_national_id}}


            </td>
            <td class="table-row">

                @if($application->sponsor_gender == 'male')
                    <span class="name-element">??????????: </span>??????
                @elseif($application->sponsor_gender == 'female')
                    <span class="name-element">??????????: </span>????????
                @else
                    <span class="name-element">??????????: </span>
                @endif


            </td>

        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">??????????????: </span>{{$application->sponsor_address}}


            </td>
            <td class="table-row">

                <span class="name-element">??????????????: </span>{{$application->sponsor_relationship}}

            </td>

        </tr>
        <tr>
            <td class="table-row">

                <span class="name-element">?????? ????????????: </span>{{$application->sponsor_phone}}


            </td>
            <td class="table-row">

                <span
                    class="name-element">????????????: </span>{{!empty($application->sponsor_salary) ? $application->sponsor_salary.' ?????????? ??????????' : ''}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                <span
                    class="name-element">?????????? ???????????? ????????????: </span>{{!empty($application->transfer_ways_sponsor->transfer_way) ? $application->transfer_ways_sponsor->transfer_way:''}}


            </td>
            <td class="table-row">

                <span
                    class="name-element">??????????: </span>{{(!empty($application->sponsor_bank->name) ?  $application->sponsor_bank->name : 'No')}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">?????? ????????????: </span>{{$application->sponsor_work_title}}
            </td>
            <td class="table-row">

                <span class="name-element">????????????: </span>{{$application->sponsor_work_place}}


            </td>

        </tr>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">?????????? ??????????: </span>{{$application->sponsor_work_address}}
            </td>
            <td class="table-row">

                    <span
                        class="name-element">?????????? ??????????????: </span>{{$application->sponsor_work_date}}


            </td>

        </tr>


    </table>
    <h2 style="text-align: right">??????????</h2>
    <p style="font-size: 16px; text-align: right">?????? ????????????????
        ??????????.................................................................</p>
    <p style="font-size: 16px; text-align: right">
        ?????? ???? ???????? ?????????????????? ???????????????? ?????????? ?????????? ?? ???????????? ?? ???????? ?????????? ???????? ?????????????????? ???? ???? ?????????????? ????????????
        ???? ?????? ???????????? ?? ???????? ???????? ???????????? ?????????????? ???????????? ???? ???? ?????? ???? ?????????????? ?????? ???????? ???????? ?? ???????? ?????????????? ??
        ???????? ???????????? ???? ???????? ???????????? ???????????? ???????????????? ???????????? ?????? ?????????????? ???????? ????????.
    </p>

    <table>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">???????? ??????????:</span>
            </td>
            <td class="table-row">

                    <span
                        class="name-element" style="padding-right: 40px">????????????:</span>


            </td>
    </table>
    <br>
    <table>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">??????????????:</span>
            </td>
            <td class="table-row">

                    <span
                        class="name-element" style="padding-right: 40px">??????????????:</span>


            </td>
    </table>
    <br>
    <table>
        <tr>
            <td class="table-row">

                    <span
                        class="name-element">??????????????:</span>
            </td>
            <td class="table-row">

                    <span
                        class="name-element" style="padding-right: 40px">??????????????:</span>


            </td>
    </table>

    </tr>
</div>
</div>
<!-- end row -->

<!-- End Page-content -->
</body>
</html>
