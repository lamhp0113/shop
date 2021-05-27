	 @extends('admin.layouts.main')
	@section('content')

	<div class="row">
	    <div class="col-xs-12">
	      <div class="box">
	        <div class="box-header">
	          <h3 class="box-title">Danh sách the loai</h3>

	          <div class="box-tools">
	          	<form action="" method="get">
		            	
	        	</form>
	          </div>
	        </div>
	        <!-- /.box-header -->
	        <div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tbody>
						<tr>
						  <th>ID</th>
						  <th>ten the loai</th>
						  <th>
						  	<a href="admin/add-danhmuc" class="btn btn-sm btn-success">Add</a>
						  </th>
						  	  <th>
						 
						  </th>
						</tr>
					      
					       @foreach($danhmuc as $dm)
						<tr>
							<td>{{$dm->id}}</td>
							<td>{{$dm->Ten_loai}}</td>

						
							<td> 
								<img src="" width="70">
							</td>
							<td>
								<a href="admin/edit-danhmuc/{{$dm->id}}" class="btn btn-sm btn-info">Edit</a>
								<a href="admin/xoa-danhmuc/{{$dm->id}}" onclick="return confirm('Bạn có chắc chắc muốn xóa không?.')" class="btn btn-sm btn-danger">Remove</a>
							</td>
						</tr>
						@endforeach
							
						<tr>
							<td colspan="5" class="text-center"></td>
						</tr>
					</tbody>
				</table>
	        </div>
	        <!-- /.box-body -->
	      </div>
	      <!-- /.box -->
	    </div>
	</div>
	@endsection