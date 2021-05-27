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
 							<th>Tên khách hàng</th>
 							<th>Email</th>
 							<th>SĐT</th>
 							<TH>Địa chỉ</TH>
 							<th>Ngày đặt</th>
 							<th>Trạng thái</th>

 							<th>
 								<a href="them" class="btn btn-sm btn-success">Thêm mới</a>
 								
 							</th>
 						</tr>
 						
 						@foreach($donhang as $dh)
 						<tr>
 							<td>{{$dh->id}}</td>
 							<td>{{$dh->ten_khach_hang}}</td>
 							<td>{{$dh->email}}</td>
 							<td>{{$dh->so_dien_thoai}}</td>
 							<td>{{$dh->dia_chi}}</td>
 							<td>{{$dh->Ngay_Dat_Hang}}</td>
 							<td>  @if($dh->Trang_Thai==1)
 								<p> Chưa sử lý </p>
 								@else
 								<p>đã xử lý </p>
 							</td>               
 							@endif 
 						
 							
 							<td>
 								<a href="admin/chitiet-donhang/{{$dh->id}}" class="btn btn-sm btn-info">xem</a>
 								
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