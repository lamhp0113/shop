	 @extends('admin.layouts.main')
	 @section('content')

	 <div id="page-wrapper">
	 	<div class="container-fluid">
	 		<div class="row">
	 			<div class="col-lg-12">
	 				<h1 class="page-header">Category

	 				</h1>
	 			</div>
	 			<!-- /.col-lg-12 -->
	 			<div class="col-lg-7" style="padding-bottom:120px">
	 				<form action="admin/edit-danhmuc/{{$danhmuc->id}}" method="post"  enctype="multipart/form-data">
	 					<input type="hidden" name="_token" value="{{csrf_token()}}" >

	 					<div class="form-group">
	 						<label>Tên danh mục</label>
	 						<input class="form-control"  style="width:60%" name="Ten_loai" value="{{$danhmuc->Ten_loai}}" placeholder=" Category Name" />
	 					</div>

	 					<button type="submit" class="btn btn-default"> sua</button>

	 					<form>
	 					</div>
	 				</div>
	 				<!-- /.row -->
	 			</div>
	 			<!-- /.container-fluid -->
	 		</div>
	 		@endsection