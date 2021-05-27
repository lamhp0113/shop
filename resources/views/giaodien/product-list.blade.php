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

	

	
	<section>
		<div class="container">
			<div class="row">

				@include('layouts.category') <!-- heder -->

				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<!--features_items-->
						<h2 class="title text-center">{{$tendm->Ten_loai}}</h2>
						@foreach($chitietdm as $dm)
						<div class="col-sm-4">
							
							<div class="product-image-wrapper">

								<div class="single-products">
									<div class="productinfo text-center">
										<a href="/list-chitiet/{{$dm->id}}">
											<img src="../{{$dm->hinh}}" width="200px" height="200px" alt="" /></a>
											<h2>{{$dm->gia}}</h2>
											<p>{{$dm->Ten_hang_hoa}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>
										</div>

									</div>


								</div>

							</div>
							@endforeach
							<br>
							<br>


						</div>



					</div>
				</div>
			</div>
		</section>

		@include('layouts.footer')


		@include('layouts.script')
	</body>
	</html>
