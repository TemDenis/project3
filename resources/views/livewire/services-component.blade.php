<div>
<section id="services_main">
 <div class="container">
  <div class="row">
   <div class="about_1">
    <h2>SERVICES</h2>
	<p><a href="/"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="#"> SERVICES </a></p>
   </div>
  </div>
 </div>
</section>
<section id="services" class="clearfix">
 <div class="container">
 	@foreach($services as $service)
	 @if(Auth::user())
    {{Auth::user()->name}}
        @endif
  <div class="row">
     <div class="services_2 clearfix">
    <div class="col-sm-4">
	 <div class="services_3">
		<a href="#"><img src="{{ asset('assets/images/photo') }}/{{$service->image}}" height="275" alt="abc" class="img_responsive"></a>
	 </div>
	 <div class="services_4">
	  <h4>{{$service->title}}</h4>
	  <p>{{$service->description}}.</p>
	  <a href="#">Read More<i class="fa fa-angle-double-right"></i></a>
	 </div>
	</div>
	  </div>
   </div>
   	@endforeach
 </div> 
</section>
</div>

