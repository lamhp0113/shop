 @extends('admin.layouts.main')
 @section('content')


 <!-- Content Header (Page header) -->
 <div class="content-header">
 	<div class="container-fluid">
 		<div class="row mb-2">
 			<div class="col-sm-6">
 				<h1 class="m-0">Chi tiết đơn hàng</h1>
 			</div><!-- /.col -->

 		</div><!-- /.row -->
 	</div><!-- /.container-fluid -->
 </div>
 <div class="row">
 	<div class="col-md-6">
 		<div class="card" style="background: #ffffff">
 			<div class="card-header">
 				<h3 class="card-title">
 					Thông tin khách hàng
 				</h3>
 			</div>
 			<hr>

 			<table class="table table-bordered" style="border:3px solid black">
 				<thead >
 					<tr >

 						<th style="border:3px solid black">Họ và tên</th>
 						<th style="border:3px solid black">Email</th>
 						<th style="border:3px solid black">Số điện thoai</th>
 						<th style="border:3px solid black">Đia chỉ</th>
 					</tr>
 				</thead>   


 				<tbody  style="border:3px solid black">
 					<tr>
 						<td style="border:3px solid black">{{$dh->ten_khach_hang}}</td>
 						<td style="border:3px solid black">{{$dh->email}}</td>
 						<td style="border:3px solid black">{{$dh->so_dien_thoai}}</td>
 						<td style="border:3px solid black">{{$dh->dia_chi}}</td>


 					</tr>

 				</tbody>

 			</table>

 			<!-- /.card-body -->
 		</div>
 		<!-- /.card -->
 	</div>
 	<!-- ./col -->
 	<div class="col-md-6"  >
 		<div class="card" style="background: #ffffff">
 			<div class="card-header">
 				<h3 class="card-title">Thông tin đơn hàng</h3>
 			</div>
 			<hr>

 			<div class="card-body">
 				<table class="table table-bordered" style="border:3px solid black">
 					<thead>
 						<tr>

 							<th style="border:3px solid black">Tên</th>
 							<th style="border:3px solid black">Gía</th>
 							<th  style="border:3px solid black">Số lượng</th>
 						</tr>
 					</thead>


 					<tbody>
 						<tr>
 							<td style="border:3px solid black">{{$chitiet->Ten_hang_hoa}}</td>
 							<td style="border:3px solid black">{{$chitiet->gia}}</td>
 							<td style="border:3px solid black">{{$chitiet->so_luong}}
 								
 							</td>


 						</tr>

 					</tbody>

 				</table>



 				<form action="admin/chitiet-donhang/{{$dh->id}}" method="POST" enctype="multipart/form-data">
 					<input type="hidden" name="_token" value="{{csrf_token()}}" >
 					<br>
 					<input type="submit" name="hoanthanh" value="Hoàn thành">

 				</form>



 			</div>


 			<!-- /.card-body -->

 		</div>
 	</div>
 	<!-- ./col -->
 </div>
 

 @endsection