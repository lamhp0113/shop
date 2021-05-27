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
							<img src={{asset('images/home/shipping.jpg')}} height="500px" width="200px" alt="" />
						</div><!--/shipping-->

					</div>
				</div>