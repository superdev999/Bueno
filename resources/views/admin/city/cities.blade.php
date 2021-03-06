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

  <!-- Content -->
		<div id="content">
			<div class="menubar">
                <div class="sidebar-toggler visible-xs">
                    <i class="ion-navicon"></i>
                </div>
                
				<div class="page-title">
					List of Cities
				</div>&nbsp;&nbsp;

        <a href="{{URL::route('admin.new_city')}}" class="new-user btn btn-primary btn-xs">
          Add New</a>
			</div>

			<div class="content-wrapper">
                @include('admin.partials.flash')
                <table id="datatable-example">
                    <thead>
                        <tr>
                            <th tabindex="0" rowspan="1" colspan="1">Sno
                            </th>
                            <th tabindex="0" rowspan="1" colspan="1">City Name
                            </th>
                            <th tabindex="0" rowspan="1" colspan="1">Status
                            </th>
                            
                        </tr>
                    </thead>
                    
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Sno</th>
                            <th rowspan="1" colspan="1">City Name</th>
                            <th rowspan="1" colspan="1">Status</th>

                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $counter=1;?>
                    @foreach($cities as $city)
                        <tr>
                            <td>
                            	{{$counter++}}
                            </td>
                            <td><a href="{{URL::route('admin.update_city',$city->id)}}">{{$city->name}}</a></td>
                            <td>@if($city->status)<label class="label label-success"> Active @else <label class="label label-danger"> Disabled @endif</label></td>

                        </tr>
                    @endforeach                 
                   	</tbody>
                </table>

			</div>


  @endsection

  @section('script')

   
	<script type="text/javascript">
        $(function() {
            $('#datatable-example').dataTable({
                "sPaginationType": "full_numbers",
                "iDisplayLength": 10,
    			"aLengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]]
            });
        });
    </script>

  @endsection