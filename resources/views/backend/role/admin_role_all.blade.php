@extends('admin.admin_master')
@section('admin')

@if(session()->get('lang') == 'hi')

<style>
	.add-admin{
		float: left;
	}
</style>

@else 

<style>
	.add-admin{
		float: right;
	}
</style>

@endif
  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">{{trans('admin.admins-list')}} </h3>
<a href="{{ route('add.admin') }}" class="btn btn-danger add-admin">{{trans('admin.add-admin')}}</a>

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>{{trans('admin.image')}}  </th>
								<th>{{trans('admin.name')}}  </th>
								<th>{{trans('site.email')}} </th> 
								<th>{{trans('admin.roles')}} </th>
								<th>{{trans('admin.process')}}</th>
								 
							</tr>
						</thead>
						<tbody>
	 @foreach($adminuser as $item)
	 <tr>
		<td> <img src="{{ asset($item->profile_photo_path) }}" style="width: 50px; height: 50px;">  </td>
		<td> {{ $item->name }}  </td>
		<td>  {{ $item->email  }}  </td>

		<td>
			@if($item->brand == 1)
			<span class="badge btn-primary">{{trans('admin.brand')}}</span>
			@else
			@endif

			@if($item->category == 1)
			<span class="badge btn-secondary">{{trans('admin.category')}}</span>
			@else
			@endif


			@if($item->product == 1)
			<span class="badge btn-success">{{trans('admin.product')}}</span>
			@else
			@endif


			@if($item->slider == 1)
			<span class="badge btn-danger">{{trans('admin.slider')}}</span>
			@else
			@endif


			@if($item->coupons == 1)
			<span class="badge btn-warning">{{trans('admin.coupons')}}</span>
			@else
			@endif


			@if($item->shipping == 1)
			<span class="badge btn-info">{{trans('admin.shipping')}}</span>
			@else
			@endif


			@if($item->blog == 1)
			<span class="badge btn-light">{{trans('admin.blog')}}</span>
			@else
			@endif


			@if($item->setting == 1)
			<span class="badge btn-dark">{{trans('admin.settings')}}</span>
			@else
			@endif


			@if($item->returnorder == 1)
			<span class="badge btn-primary">{{trans('admin.return-order')}}</span>
			@else
			@endif


			@if($item->review == 1)
			<span class="badge btn-secondary">{{trans('admin.reviews')}}</span>
			@else
			@endif


			@if($item->orders == 1)
			<span class="badge btn-success">{{trans('admin.orders')}}</span>
			@else
			@endif

			@if($item->stock == 1)
			<span class="badge btn-danger">{{trans('admin.stock')}}</span>
			@else
			@endif

			@if($item->reports == 1)
			<span class="badge btn-warning">{{trans('admin.reports')}}</span>
			@else
			@endif

			@if($item->alluser == 1)
			<span class="badge btn-info">{{trans('admin.users')}}</span>
			@else
			@endif

			@if($item->adminuserrole == 1)
			<span class="badge btn-dark">{{trans('admin.roles')}}</span>
			@else
			@endif
 

		  </td>
		 

		<td width="25%">
 <a href="{{ route('edit.admin.user',$item->id) }}" class="btn btn-info" title="{{trans('admin.edit')}}"><i class="fa fa-pencil"></i> </a>

 <a href="{{ route('delete.admin.user',$item->id) }}" class="btn btn-danger" title="{{trans('admin.delete')}}" id="delete">
 	<i class="fa fa-trash"></i></a>
		</td>
							 
	 </tr>
	  @endforeach
						</tbody>
						 
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			          
			</div>
			<!-- /.col -->

 

 


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  



@endsection