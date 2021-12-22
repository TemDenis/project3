	   
	   
<section id="about">
 <div class="container">
  <div class="row">
   <div class="about_1">
    <h2>ABOUT</h2>
	<p><a href="/"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="#"> ABOUT </a></p>
   </div>
  </div>
 </div>
</section>
<section id="about_inner">
   <div class="about_inner">
     <div class="container">
	   <div class="row">
		   @foreach($abouts as $about)
	     <div class="col-sm-12">
		   <div class="col-sm-6">
		     <div class="about_inner_1"><img src="{{ asset('assets/images/photo') }}/{{$about->image}}" height="350"></div>
		   </div>
		   <div class="col-sm-6">
		     <div class="about_inner_2">
			   <h1 class="text-center">{{$about->question}}?</h1>
			   <p class="text-center">{{$about->description}}.</p>
			 </div>
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
</section>