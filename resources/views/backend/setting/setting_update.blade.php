@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">

	 <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">{{trans('admin.site-setting-page')}} </h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
	 <form method="post" action="{{ route('update.sitesetting') }}" enctype="multipart/form-data">
	 	@csrf

	 	<input type="hidden" name="id" value="{{ $setting->id }}">
					  <div class="row">
						<div class="col-12">

			<div class="row">
				<div class="col-md-6">

	 <div class="form-group">
		<h5>{{trans('admin.site-logo')}}  <span class="text-danger"> </span></h5>
		<div class="controls">
	 <input type="file" name="logo" class="form-control" > </div>
	</div>


	<div class="form-group">
		<h5>{{trans('admin.phone-one')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="phone_one" class="form-control" value="{{ $setting->phone_one }}" > </div>
	</div>



	<div class="form-group">
		<h5>{{trans('admin.phone-two')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="phone_two" class="form-control"  value="{{ $setting->phone_two }}"  > </div>
	</div>

	<div class="form-group">
		<h5>{{trans('admin.email')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="email" name="email" class="form-control" value="{{ $setting->email }}"   > </div>
	</div>

<div class="form-group">
		<h5>{{trans('admin.name')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="company_name" class="form-control" value="{{ $setting->company_name }}"   > </div>
	</div>


	<div class="form-group">
		<h5>{{trans('admin.address')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="company_address" class="form-control" value="{{ $setting->company_address }}"   > </div>
	</div>


	<div class="form-group">
		<h5>{{trans('admin.facebook')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}"   > </div>
	</div>


	<div class="form-group">
		<h5>{{trans('admin.twitter')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="twitter" class="form-control"  value="{{ $setting->twitter }}"  > </div>
	</div>

	<div class="form-group">
		<h5>{{trans('admin.linkedin')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="linkedin" class="form-control"  value="{{ $setting->linkedin }}"  > </div>
	</div>

	<div class="form-group">
		<h5>{{trans('admin.youtube')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="youtube" class="form-control"  value="{{ $setting->youtube }}"  > </div>
	</div>

	<div class="form-group">
		<h5>{{trans('admin.instagram')}} <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="instagram" class="form-control"  value="{{ $setting->instagram }}"  > </div>
	</div>
					
				</div> <!-- end cold md 6 --> 
				
			</div>	<!-- end row 	 -->	

 
	  

			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="{{trans('admin.update')}}">					 
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
 


	  </div>

 

@endsection