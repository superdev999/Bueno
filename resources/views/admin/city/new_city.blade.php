
@extends('admin.master')

  @section('title')Bueno Kitchen @endsection

  @section('header')

  <!-- stylesheets -->
  @include('admin.partials.css')

  <!-- javascript -->
  @include('admin.partials.js')

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  @endsection

  @section('content')

  <div id="content">
    @include('admin.partials.errors')
    @include('admin.partials.flash')

            <div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>

                <div class="page-title">
                    Add a new City 
                </div>
            </div>

            <div class="content-wrapper">
                <form id="new-customer" class="form-horizontal" method="post" action="#" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-2 col-md-2 control-label">City Name</label>
                        <div class="col-sm-10 col-md-8">
                          <input type="text" class="form-control" name="name" required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-md-2 control-label">State</label>
                        <div class="col-sm-10 col-md-8">
                            <div class="has-feedback">
                                <select name="state_id" class="form-control"  required="">
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-md-2 control-label">Status</label>
                        <div class="col-sm-10 col-md-8">
                            <div class="has-feedback">
                                <select name="status" class="form-control"  required="">
                                <option value="1">Active</option>
                                <option value="0" selected="">Disabled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group form-actions">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{URL::route('admin.cities')}}" class="btn btn-default">Back</a>
                            <button type="submit" class="btn btn-success">Add City</button> 
                        </div>
                    </div>
                </form>
                  
            </div>
        </div>

  @endsection

  @section('script')

  <script type="text/javascript">
        $(function () {

            // form validation
            $('#new-customer').validate({
                rules: {
                    "customer[first_name]": {
                        required: true
                    },
                    "customer[email]": {
                        required: true,
                        email: true
                    },
                    "customer[address]": {
                        required: true
                    },
                    "customer[notes]": {
                        required: true
                    }
                },
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('success').addClass('error');
                },
                success: function (element) {
                    element.addClass('valid').closest('.form-group').removeClass('error').addClass('success');
                }
            });


           
        });
    </script>

  @endsection