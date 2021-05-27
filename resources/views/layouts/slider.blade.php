


<section id="slider"><!--slider-->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
           <?php $i=0; ?>  
           @foreach ($tintuc as $tt)
           @if ($i==0)
           <div class='item active'>
             @else
             <div class='item'>
              
              @endif
              <?php $i++ ?>
              <div class="col-sm-6">
                <h1><span>E</span>-SHOPPER</h1>
                <h2>{{$tt->tieude}}
                </h2>
                <p>{{$tt->mota}}</p>
              </div>
              <div class="col-sm-6">
                
                <img src="../{{$tt->hinhanh}}" style="width:450px;height:400px;"  class="girl img-responsive" alt="" />
                
              </div>

            </div>
            @endforeach
          </div>

          <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>

      </div>
    </div>

  </section><!--/slider-->