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
 							<th>Mã code</th>
 							<th>Tên hàng hóa</th>
 							<th>Giá</th>
 							<th>Số lượng</th>
 							<th>Hình</th>
 							<th>id_loai</th>
 							<th>
 								<a href="admin/add-sanpham" class="btn btn-sm btn-success">Thêm mới</a>
 								
 							</th>
 						</tr>
 						
 						@foreach($sanpham as $sp)
 						<tr>
 							<td>{{$sp->id}}</td>
 							<td>{{$sp->ma_code}}</td>
 							<td>{{$sp->Ten_hang_hoa}}</td>
 							<td>{{$sp->gia}}</td>
 							<td>{{$sp->so_luong_hang}}</td>
 							<td><img src="{{$sp->hinh}}"  width="50px"></td>
 							<td>{{$sp->danhmuc->Ten_loai}}</td>


 							
 							<td> 
 								<img src="" width="70">
 							</td>
 							<td>
 								<a href="admin/edit-sanpham/{{$sp->id}}" class="btn btn-sm btn-info">Edit</a>
 								<a href="admin/xoa-sanpham/{{$sp->id}}" onclick="return confirm('Bạn có chắc chắc muốn xóa không?.')" class="btn btn-sm btn-danger">Remove</a>
 							</td>
 						</tr>
 						@endforeach
 						
 						
 					</tbody>
 				</table>
 			</div>
 			<!-- /.box-body -->
 		</div>
 		<!-- /.box -->
 	</div>
 </div>
 @endsection