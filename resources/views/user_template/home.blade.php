@extends('user_template.layouts.template')
@section('main-content')

<div class="fashion_section">
   <div id="main_slider">
            <div class="container">
               <h3 class="py-5">HomePage</h3>
               <h1 class="fashion_taital">All Products</h1>
               <div class="fashion_section_2">
                  <div class="row">
                    
                     @foreach ($allproducts as $product)
                        
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">{{ $product->product_name }}</h4>
                           <p class="price_text">Price  <span style="color: #262626;"> $ {{ $product->price }}</span></p>
                           <div class="tshirt_img" ><img class="img-fluid" src="{{ asset($product->product_img) }}"></div>
                       
                           <p  class="products_text">
                              {{strip_tags(substr($product->product_long_des, 0, 30)).'...' }}
                              <a href="{{ route('singleproduct', [$product->id, $product->slug]) }}"><button class="read-more-button">Read More</button></a>
                            </p>
                           <div class="btn_main">
                              <div class="buy_bt">
                                {{--   <form action="{{ route('addproducttocart') }}" method="POST">
                                     @csrf --}}
                                     <input type="hidden" value="{{ $product->id}}" name="product_id">
                                     <input type="hidden" value="{{ $product->price}}" name="price">
                                     <input type="hidden" value="1" name="quantity">
                                     <br>
                                     <a class="btn btn-warning text-center" href="{{ route('singleproduct', [$product->id, $product->slug]) }}" >See More</a>
                                {{-- </form> --}} 
                             </div>
                             {{--   <div class="seemore_bt"><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}">See More</a></div> --}}
                           </div> 
                        </div>
                     </div>
                     @endforeach
                     
                  </div>
               </div>
            </div>
            
            <a class="carousel-control-prev" href="" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               
   </div>
  
   <div class="loader_main">
      <div class="loader"></div>
</div>
<!-- fashion section end -->
<!-- electronic section start -->


      
</div>
</div>
</div>


@endsection()