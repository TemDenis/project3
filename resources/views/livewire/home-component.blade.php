

<section id="center">
  <div class="center">
   <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <div class="overlay"></div>
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item slides">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Sed Dignissim Lacinia</h1> 
			 <h3>Vestibulum Lacinia Arcu Eget</h3>   
			 <h4><a href="#">CONUDIA NOSTRA</a></h4>    
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Torquent Per Conubia Nostra</h1> 
			 <h3>Vestibulum Lacinia Arcu Eget</h3>   
			 <h4><a href="#">CONUDIA NOSTRA</a></h4>    
        </hgroup>
      </div>
    </div>
    <div class="item slides active">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Fusce Nec Tellus Sed Augue</h1> 
			 <h3>Vestibulum Lacinia Arcu Eget</h3>   
			 <h4><a href="#">CONUDIA NOSTRA</a></h4>    
        </hgroup>
      </div>
    </div>
  </div> 
  </div>
  </div>
 </section>
<section id="middle">
 <div class="container">
  <div class="row">
   <div class="middle_1 clearfix">
    <div class="middle_2">
	 <h2>Our Services</h2>
	 <div class=" content-top2">
	 <h4 class="text-center">O</h4>
	</div>
	</div>
	  @foreach($ourservices as $ourservice)
    <div class="col-sm-4">
	 <div class="middle_3">
	  <h3><a href="#">{{ $ourservice->name}}</a> DESIGN</h3>
	  <p>{{$ourservice->description}}</p>
	  <a href="#"><img src="{{ asset('assets/images/photo') }}/{{$ourservice->image}}" height="300" alt="abc"  class="img_responsive"></a>
	 </div>
	</div>
	  @endforeach
	  
   </div>
  </div>
 </div>
</section>
<section id="explore">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 padding_all">
    <div class="Popular_inner_1 clearfix">
	 <div class="Popular_1 clearfix">



<ul class="nav nav-tabs">
	@foreach($categories as $key=>$category)
  <li><a data-toggle="tab" href="#category_{{$category->id}}"  class="{{$key == 0 ? 'active': ''}}">{{$category->name}}</a></li>
    @endforeach
</ul>

@foreach($categories as $key=>$category)
     <div class="tab-content clearfix {{$key == 0 ? 'active': ''}}">
  <div id="category_{{$category->id}}" class="tab-pane fade clearfix ">
     <div class="click clearfix ">
      <div class="col-sm-12 space_all ">
	   
		  @php
            $c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
		  @endphp
		  @foreach($c_products as $c_product)
        <div class="col-sm-3">
		 <div class="explore_1">
		  <div class="ih-item square colored effect14 bottom_to_top"><a href="">
                      <div class="img"><img src="{{ asset('assets/images/photo') }}/{{$c_product->image}}" height="45" alt="img"></div>
                      <div class="info">
                        <h3>{{$c_product->heading}}</h3>
                        <p>{{$c_product->description}}</p>
                      </div></a>
                    </div>
					 
		 </div>
		</div>
		 @endforeach
     </div>
	</div>
	</div> 
   </div>
    @endforeach
  </div>
 </div>
</div>
</section>
<section id="product">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="product_1">
	 <h2>Our Team</h2>
	 <div class=" content-top2">
	 <h4 class="text-center">O</h4>
	</div>
	</div>
	  
	@foreach($ourteams as $ourteam)
	<div class="col-sm-4">
	 <div class="product_2">
	  <p><a href="#"><img src="{{ asset('assets/images/photo') }}/{{$ourteam->image}}" height="250" alt="abc" class="img_responsive"></a></p>
	 </div>
	 <div class="product_3">
	  <h2>{{ $ourteam->name}}</h2>
	  <h4>{{ $ourteam->occupation}}</h4>
	  <p>{{ $ourteam->description}}.</p>
	  <ul>
	      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	  </ul>
	 </div>
	</div>
    @endforeach

	

   </div>
  </div>
 </div>
</section>
<section id="news">
 <div class="container">
  <div class="row">
   <div class="news_1 clearfix">
    <div class="news_2">
	 <h2>News & Events</h2>
	 <div class=" content-top2">
	 <h4 class="text-center">O</h4>
	 </div>

	 @foreach($events as $event)
    <div class="col-sm-6">
	 <div class="news_3">
	  <a href="#"><img src="{{ asset('assets/images') }}/{{$event->image}}" height="250" alt="abc" class="img_responsive"></a>
	 </div>
	 <div class="news_4 clearfix">
	  <div class="col-sm-3 space_all">
	   <div class="news_5">
	    <h4>{{$event->event_date}}<br/></h4>
	   </div>
	  </div>
	  <div class="col-sm-9 space_all">
	   <div class="news_6">
	    <h3>{{$event->place}}</h3>
		<p>{{$event->description}}.</p>
		<a href="#" class="button">Read more <i class="fa fa-long-arrow-right"></i></a>
	   </div>
	  </div>
	 </div>
	</div>
	@endforeach

	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
<section id="property">
 <div class="container">
  <div class="row">
   <div class="property_1">
    <h2>Customer Says</h2>
     <div class=" content-top2">
	 <h4 class="text-center">O</h4>
	 </div>	
	</div>
   </div>
   <div class="col-sm-12 space_all">
    <div class="blog_home1">
	 <div class="col-sm-4">
	   <div class="blog_home1i clearfix">
			<a href="#"><img src="{{ asset('assets/img/40.jpg') }}" alt="abc" class="img_responsive"></a>
	    <div class="blog_home1ii clearfix">
			<h4><a href="#">Gardening the Global Greenhouse by Richard Bisgrove..</a></h4>
			<ul>
			 <li><i class="fa fa-user"></i> By <a href="#"> Aptent</a></li>
			 <li><i class="fa fa-comment"></i> <a href="#">0 comment</a></li>
			</ul>
			<p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using  <a href="#">Read More</a></p>
		</div>
		<div class="blog_home1il clearfix">
          <h6 class="mgt"><span class="date">For Sale</span> <span class="year">$59,999</span></h6>	
		</div>
	  </div>
	  <div class="property_2">
	     <ul>
	          <li><i class="fa fa-object-group"></i></li>
			  <li> 520 sq ft</li>
			  <li><i class="fa fa-bed"></i></li>
			  <li>6</li>
			  <li><i class="fa fa-home"></i></li>
			  <li>3</li>
	     </ul>
	  </div>
	 </div>
	 <div class="col-sm-4">
	   <div class="blog_home1i clearfix">
			<a href="#"><img src="{{ asset('assets/img/41.jpg') }}" alt="abc" class="img_responsive"></a>
	    <div class="blog_home1ii clearfix">
			<h4><a href="#">Gardening the Global Greenhouse by Richard Bisgrove..</a></h4>
			<ul>
			 <li><i class="fa fa-user"></i> By <a href="#"> Aptent </a></li>
			 <li><i class="fa fa-comment"></i> <a href="#">0 comment</a></li>
			</ul>
			<p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using  <a href="#">Read More</a></p>
		</div>
		<div class="blog_home1il clearfix">
          <h6 class="mgt"><span class="date">For Rent</span> <span class="year">$79,999</span></h6>	
		</div>
	  </div>
	  <div class="property_2">
	     <ul>
	          <li><i class="fa fa-object-group"></i></li>
			  <li> 520 sq ft</li>
			  <li><i class="fa fa-bed"></i></li>
			  <li>6</li>
			  <li><i class="fa fa-home"></i></li>
			  <li>3</li>
	     </ul>
	  </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="blog_home1i clearfix">
			<a href="#"><img src="{{ asset('assets/img/42.jpg') }}" alt="abc" class="img_responsive"></a>
	    <div class="blog_home1ii clearfix">
			<h4><a href="#">Gardening the Global Greenhouse by Richard Bisgrove..</a></h4>
			<ul>
			 <li><i class="fa fa-user"></i> By <a href="#"> Aptent</a></li>
			 <li><i class="fa fa-comment"></i> <a href="#">0 comment</a></li>
			</ul>
			<p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using  <a href="#">Read More</a></p>
		</div>
		<div class="blog_home1il clearfix">
          <h6 class="mgt"><span class="date">For Sale</span> <span class="year">$89,999</span></h6>	
		</div>
	  </div>
	  <div class="property_2">
	     <ul>
	          <li><i class="fa fa-object-group"></i></li>
			  <li> 520 sq ft</li>
			  <li><i class="fa fa-bed"></i></li>
			  <li>6</li>
			  <li><i class="fa fa-home"></i></li>
			  <li>3</li>
	     </ul>
	  </div>
	 </div>
	</div>
   </div>
   <div class="col-sm-12 space_all">
    <div class="blog_home1">
	 <div class="col-sm-4">
	   <div class="blog_home1i clearfix">
			<a href="#"><img src="{{ asset('assets/img/43.jpg') }}" alt="abc" class="img_responsive"></a>
	    <div class="blog_home1ii clearfix">
			<h4><a href="#">Gardening the Global Greenhouse by Richard Bisgrove..</a></h4>
			<ul>
			 <li><i class="fa fa-user"></i> By <a href="#"> Aptent</a></li>
			 <li><i class="fa fa-comment"></i> <a href="#">0 comment</a></li>
			</ul>
			<p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using  <a href="#">Read More</a></p>
		</div>
		<div class="blog_home1il clearfix">
          <h6 class="mgt"><span class="date">For Sale</span> <span class="year">$59,999</span></h6>	
		</div>
	  </div>
	  <div class="property_2">
	     <ul>
	          <li><i class="fa fa-object-group"></i></li>
			  <li> 520 sq ft</li>
			  <li><i class="fa fa-bed"></i></li>
			  <li>6</li>
			  <li><i class="fa fa-home"></i></li>
			  <li>3</li>
	     </ul>
	  </div>
	 </div>
	 <div class="col-sm-4">
	   <div class="blog_home1i clearfix">
			<a href="#"><img src="{{ asset('assets/img/44.jpg') }}" alt="abc" class="img_responsive"></a>
	    <div class="blog_home1ii clearfix">
			<h4><a href="#">Gardening the Global Greenhouse by Richard Bisgrove..</a></h4>
			<ul>
			 <li><i class="fa fa-user"></i> By <a href="#"> Aptent </a></li>
			 <li><i class="fa fa-comment"></i> <a href="#">0 comment</a></li>
			</ul>
			<p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using  <a href="#">Read More</a></p>
		</div>
		<div class="blog_home1il clearfix">
          <h6 class="mgt"><span class="date">For Rent</span> <span class="year">$79,999</span></h6>	
		</div>
	  </div>
	  <div class="property_2">
	     <ul>
	          <li><i class="fa fa-object-group"></i></li>
			  <li> 520 sq ft</li>
			  <li><i class="fa fa-bed"></i></li>
			  <li>6</li>
			  <li><i class="fa fa-home"></i></li>
			  <li>3</li>
	     </ul>
	  </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="blog_home1i clearfix">
			<a href="#"><img src="{{ asset('assets/img/45.jpg') }}" alt="abc" class="img_responsive"></a>
	    <div class="blog_home1ii clearfix">
			<h4><a href="#">Gardening the Global Greenhouse by Richard Bisgrove..</a></h4>
			<ul>
			 <li><i class="fa fa-user"></i> By <a href="#"> Aptent</a></li>
			 <li><i class="fa fa-comment"></i> <a href="#">0 comment</a></li>
			</ul>
			<p>Lorem Ipsum by the readable content of a page when looking at its layout. The point of using  <a href="#">Read More</a></p>
		</div>
		<div class="blog_home1il clearfix">
          <h6 class="mgt"><span class="date">For Sale</span> <span class="year">$89,999</span></h6>	
		</div>
	  </div>
	  <div class="property_2">
	     <ul>
	          <li><i class="fa fa-object-group"></i></li>
			  <li> 520 sq ft</li>
			  <li><i class="fa fa-bed"></i></li>
			  <li>6</li>
			  <li><i class="fa fa-home"></i></li>
			  <li>3</li>
	     </ul>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>


