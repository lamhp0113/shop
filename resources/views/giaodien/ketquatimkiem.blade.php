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
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục<!--  --></h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Danh muc
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										@foreach($danhmuc as $dm)
										<ul>
											<li><a href="list-danhmuc/{{$dm->id}}">{{$dm->Ten_loai}} </a></li>
											
										</ul>
										@endforeach
									</div>
								</div>
							</div>

							
						</div><!--/category-products-->

						

						
						<div class="shipping text-center"><!--shipping-->
							<img src="../images/home/shipping.jpg" height="500px" width="200px" alt="" />
						</div><!--/shipping-->

					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<!--features_items-->
						<h2 class="title text-center">Ket qua tim kiếm:{{$search_text}}</h2>
							@foreach ($seach as $in)
						<div class="col-sm-4">


							<div class="product-image-wrapper">
								

								<div class="single-products">
									<div class="productinfo text-center">
										<a href="list-chitiet/{{$dm->id}}">
											<img src="../{{$in->hinh}}" width="200px" height="200px" alt="" /></a>
											<h2>{{$in->gia}}</h2>
											<p>{{$in->Ten_hang_hoa}}</p>
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
