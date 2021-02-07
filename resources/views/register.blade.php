@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="row justify-content-center">

        <div class="col-md-8">
            <form action="{{route('register.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6 form-group">
                        <label for="">الإسم الكامل</label>
                        <input type="text" name="name" class="form-control" value="" placeholder="الإسم الكامل">
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="">رقم الهاتف</label>
                        <input type="tel" id="mob" class="form-control" name="phone" data-format="+1 (ddd) ddd-dddd"  maxlength="8"  value="" placeholder=" Ex : 565665665">

                    </div>

                    <div class="col-12 col-md-6 form-group " >
                        <div id="em">
                            <label for="">البريد الإلكتروني</label>
                            <input type="email"  id="email" class="form-control" class="email" name="email" value="" placeholder="البريد الإلكتروني">
                            <span class="error"></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="">اسم المتجر</label>
                        <input type="text" name="store_name" class="form-control" value="" placeholder="اسم المتجر">
                    </div>



                    <div class="col-12 col-md-12 form-group">
                        <label for="">كلمة المرور</label>
                        <input type="password" class="form-control" name="password" value="" placeholder="كلمة المرور">
                    </div>



                    <div class="col-12 form-group radioBtn">
                        <h4 class="pt-3 pb-3">Do You Have Domain ?</h4>
                        <label class="pr-3">
                            <input type="radio" class="form-control" id="yes" name="domain" value="yes" placeholder="اسم المتجر">
                            <span class="labelTxt">yes</span>
                        </label>
                        <label class="pr-3">
                            <input type="radio" class="form-control" id="no" name="domain" value="no" placeholder="Enter Your Store Name">
                            <span class="labelTxt">No</span>
                        </label>
                        <label class="pr-3">
                            <input type="radio" class="form-control" name="domain" value="nodomain" placeholder="Enter Your Store Name">
                            <span class="labelTxt">I don't need Domain</span>
                        </label>
                    </div>
                    <div class="col-12 form-group">
                        <div class="domainFld1" id="new">
                            <label for="">Start your domain name search and check availability .</label>
                            <input type="text"  name="new_domain_detail" class="form-control" placeholder="Enter Your Domain Name">
                            <span>Enter with .com, .net etc.</span>
                        </div>
                        <div class="domainFld2" id="exists">
                            <label for="">Do you have existing domain ? please Enter your domain name Below .</label>
                            <input type="text" class="form-control" name="exists_domain_detail" placeholder="Enter Your Domain Name">
                        </div>
                    </div>


                    <div class="col-12 form-group packageSectn">
                        <h4 class="pt-3 pb-3">Select Package</h4>
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="">Yearly
                                    <input type="radio" name="package" class="form-control" value="yearly" placeholder="Enter Your Store Name">
                                </label>
                                <label for="">Monthly
                                    <input type="radio" class="form-control" name="package" value="monthly" placeholder="Enter Your Store Name">
                                </label>
{{--                                <label>--}}
{{--                                    <input type="radio"name="package1" class="form-control" value="" placeholder="Enter Your Store Name">--}}
{{--                                </label>--}}
{{--                            </div>--}}

{{--                            <div class="col-6 form-group">--}}
{{--                                <label>--}}
{{--                                    <input type="radio" class="form-control" name="package2" value="" placeholder="Enter Your Store Name">--}}
{{--                                </label>--}}
{{--                            </div>--}}
                        </div>
                    </div>


                <div class="row mt-5">
                    <button class="btn btn-primary" id="btns" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(function () {
            $('div[id="new"]').hide();
            //show it when the checkbox is clicked
            $('input[id="yes"]').on('click', function () {
                if ($(this).prop('checked')) {
                    $('div[id="new"]').fadeIn();
                } else {
                    $('div[id="new"]').hide();
                }
            });
        });

        $(function () {
            $('div[id="exists"]').hide();
            //show it when the checkbox is clicked
            $('input[id="no"]').on('click', function () {
                if ($(this).prop('checked')) {
                    $('div[id="exists"]').fadeIn();
                } else {
                    $('div[id="exists"]').hide();
                }
            });
        });
    </script>
    @endsection
