	 @extends('admin.layouts.main')
     @section('content')
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> 
                        Sản phẩm
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/add-sanpham" method="post"  enctype="multipart/form-data">

                        <input type="hidden" name="_token" value="{{csrf_token()}}" >
                        <div class="form-group">
                            <label>Tên hàng hóa </label>
                            <input class="form-control" type="text"   style="width:60%" name="Ten_hang_hoa" >
                        </div>  
                        <div class="form-group">
                            <label>Ma_code</label>
                            <input class="form-control" type="text"   style="width:60%" name="ma_code" >
                        </div>
                        <div class="form-group">
                            <label>Gia</label>
                            <input class="form-control" type="number"   style="width:60%" name="gia" >
                        </div>
                        <div class="form-group">
                            <label>Soluong</label>
                            <input class="form-control" type="number"  style="width:60%" name="so_luong_hang" >
                        </div>
                        <div class="form-group">
                            <label>Anh</label>
                            <input class="form-control" type="file"  style="width:60%" name="myFile" >
                        </div>
                        <div>
                            <select name="loaihang" id="">
                                @foreach ($theloai as $tl)
                                <option value="{{$tl->id}}">{{$tl->Ten_loai}}</option>
                                @endforeach
                            </select>
                        </div>
                        


                        <button type="submit" class="btn btn-default"> Add</button>

                        <form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            @endsection