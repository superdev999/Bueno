@extends('layouts.master')

@section('content')

    <!-- ############################## -->
    <!-- ############ BODY ############ -->
    <!-- ############################## -->

    <section class="title_sec gray-dim-bg">
        <div class="container more">
            <div class="row">
                <div class="col-xs-12">

                    <div class="main-sec">
                    </div> <!-- main-sec ends -->

                </div> <!-- col-xs-12 ends -->
            </div> <!-- row ends -->
        </div> <!-- container ends -->
    </section> <!-- title_sec ends -->

    <section class="paddingbottom-xlg marginbottom-xlg">

        <div class="container more">
            <div class="row">
                <div class="col-xs-12">

                    @include('partials.flash')
                    @include('partials.errors')

                    <div class="col-xs-12 col-md-10 account_sec forgot_pass_sec">

                        <section class="title_sec white-bg dashed_border col-xs-12 no-padding">
                            <div class="main-sec stick_lines col-xs-12">
                                <div class="col-xs-12">
                                    <h2 class="style_header_loud">Reset Your Password?</h2>
                                </div> <!-- left-sec ends -->
                            </div> <!-- col-xs-12 ends -->
                        </section> <!-- title_sec ends -->

                        <form action="{{ route('users.reset_password.post') }}" method="POST" class="bueno_form col-xs-12 margintop-md">
                            {{ csrf_field() }}
                            <p>Please enter the OTP Code we sent you.<br /></p>
                            <div class="col-xs-12 col-sm-8 col-md-4 no-padding">
                                <input type="hidden" required class="form-control bueno_inputtext black" id="phoneNumber" name="phone" placeholder="Phone" value="@if(session('phone')){{ session('phone') }}@else{{ old('phone') }}@endif">
                                <div class="form-group bueno_form_group">
                                    <input type="number" required class="form-control bueno_inputtext black" id="phoneNumber" name="code" placeholder="OTP Code" value="{{ old('code') }}">
                                </div> <!-- bueno_form_group ends -->
                                <div class="form-group bueno_form_group">
                                    <input type="password" required class="form-control bueno_inputtext black" id="phoneNumber" name="password" placeholder="Password">
                                </div> <!-- bueno_form_group ends -->
                                <div class="form-group bueno_form_group">
                                    <input type="password" required class="form-control bueno_inputtext black" id="phoneNumber" name="confirm_password" placeholder="Confirm Password">
                                </div> <!-- bueno_form_group ends -->
                                <input type="submit" class="btn btn-xlg btn-primary full_width" value="Reset Password">
                            </div> <!-- col-sm-4 ends -->
                        </form> <!-- bueno_form ends -->

                        <form action="{{ route('users.resend_forgot_password.post') }}" method="POST" class="bueno_form col-xs-12 margintop-md">
                            {{ csrf_field() }}
                            <div class="col-xs-12 col-sm-8 col-md-4 no-padding">
                                <input type="hidden" required class="form-control bueno_inputtext black" id="phoneNumber" name="phone" placeholder="Phone" value="@if(session('phone')){{ session('phone') }}@else{{ old('phone') }}@endif">
                                <input type="submit" class="btn btn-xlg btn-primary full_width" value="Resend OTP Code">
                            </div>
                        </form> <!-- bueno_form ends -->

                    </div> <!-- signup_sec ends -->

                </div> <!-- col-xs-12 ends -->
            </div> <!-- row ends -->
        </div> <!-- container ends -->

    </section> <!-- catering_query ends -->



@endsection