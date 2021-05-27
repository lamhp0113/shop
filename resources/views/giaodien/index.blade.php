<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | E-Shopper</title>
	@include('layouts.style')
</head><!--/head--> 

<body>
	@include('layouts.main-header') <!-- heder -->
	
	@include('layouts.slider') <!-- slider -->
	
	<section>
		<div class="container">
			<div class="row">
				@include('layouts.category') 
				<div>
					<a href="showcart">show</a>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"> Sản phẩm</h2>
						@foreach($sanpham as $sp)
						<div class="col-sm-4">
							
							<div class="product-image-wrapper">

								<div class="single-products">
									<div class="productinfo text-center">
										<a href="list-chitiet/{{$sp->id}}"><img src="{{$sp->hinh}}" width="200px" height="200px" alt="" /></a>
										<h2>{{number_format($sp->gia)}}</h2>
										<p>{{$sp->Ten_hang_hoa}}</p>
										<a href="add-cart/{{$sp->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>
									</div>
									
								</div>
								

							</div>

						</div>
						@endforeach
							<div  style="width:100%;padding-left:40%" >{{ $sanpham->links() }}</div>
						
					</div><!--features_items-->
					
					

					
				</div>
			</div>
		</div>
	</section>
	
	@include('layouts.footer')


	@include('layouts.script')
</body>
</html>
