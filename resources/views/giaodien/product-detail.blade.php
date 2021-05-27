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
				

				
					<div class="col-sm-9 padding-right">
						<div class="product-details"><!--product-details-->
							<div class="col-sm-5">
								<div class="view-product">
									<img src="../{{$chitiet->hinh}}" alt="" />
								</div>
								
							</div>
							<div class="col-sm-7">

								<div class="product-information"><!--/product-information-->

									<h2>{{$chitiet->Ten_hang_hoa}}</h2>
									<p>Mã code {{$chitiet->ma_code}}</p>
										<span>
										<span> Giá: {{$chitiet->gia}}</span>
										<form action="" method="POST">
											<label>Số lượng:</label>
											<input type="number" value="1" name="sl"  min="1" />


											<button class="btn btn-fefault cart" type="submit" name="add-to-cart" >
												<i class="fa fa-shopping-cart"></i>
												Thêm giỏ hàng
											</button>
										</form>
									</span>

								</div><!--/product-information-->
							

						</div>
					</div><!--/product-details-->
					

					

					
				</div>
			</div>
		</div>
	</section>
	@include('layouts.footer')


	@include('layouts.script')
</body>
</html>
