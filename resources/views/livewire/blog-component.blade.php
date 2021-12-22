<section id="blog_main">
 <div class="container">
  <div class="row">
   <div class="about_1">
    <h2>BLOG</h2>
	<p><a href="/"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="/"> BLOG </a></p>
   </div>
  </div>
 </div>
</section>
<section id="blog">
 <div class="container">
  <div class="row">
   <div class="blog_1 clearfix">
    <div class="col-sm-7">
      @foreach($centerblogs as $centerblog)
	 <div class="blog_2">
	  <h3>Quis Nostrud Exercitation</h3>
	  <h6>Published On {{$centerblog->created_at}}</h6>
	  <a href="details.html"><img src="{{ asset('assets/images/photo')}}/{{$centerblog->image}}" height="410" alt="abc" class="img_responsive"></a>
	  <p>{{$centerblog->description}}.</p>
	  <a href="details.html" class="button">Read more <i class="fa fa-long-arrow-right"></i></a>
	  <ul>
	      <li><i class="fa fa-tag"></i> 2 Tags</li>
		  <li><i class="fa fa-bookmark"></i> Tincidunt</li>
		  <li><i class="fa fa-user"></i> Admin</li>
	  </ul>
	 </div>
   @endforeach
   
   {{$centerblogs->Links()}}	 
	 
   </div>
	
	<div class="col-sm-5">
	 <div class="blog_4">
	  <h3>Recent posts</h3>
	 </div>

	 @foreach ($blogs as $blog)
	 <div class="blog_5 clearfix">
	  <div class="col-sm-4 space_all">
	   <div class="blog_6">
	    <a href="details.html"><img src="{{ asset('assets/images/photo')}}/{{ $blog->image}}" height="120" alt="abc" class="img_responsive"></a>
	   </div>
	  </div>
	  <div class="col-sm-8 space_all">
	   <div class="blog_7">
	    <h5><a href="details.html">Published</a> {{$blog->created_at}}</h5>
		<h6>{{$blog->description}}</h6>
		<p><a href="details.html">Read More</a></p>
	   </div>
	  </div>
	 </div>
     @endforeach

	 <div class="blog_8">
	  <h3>About US:</h3>
	  <a href="details.html"><img src="assets/images/photo/img17.jpg" height="350" alt="abc" class="img_responsive"></a>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	     Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
		 <a href="details.html" class="button">Read more <i class="fa fa-long-arrow-right"></i></a>
	 </div>
	 <div class="blog_9">
	  <h3>Tags</h3>
	  <ul>
	       <li><a href="details.html"><i class="fa fa-tag"></i> corporate </a></li>
		   <li><a href="details.html"><i class="fa fa-tag"></i>  theme  </a></li>
		   <li><a href="details.html"><i class="fa fa-tag"></i>  css3  </a></li>
		   <li><a href="details.html"><i class="fa fa-tag"></i>  premium  </a></li>
		   <li><a href="details.html"><i class="fa fa-tag"></i>  html5  </a></li>
	  </ul>
	  <ul>
	       <li><a href="details.html"><i class="fa fa-tag"></i>  business  </a></li>
		   <li><a href="details.html"><i class="fa fa-tag"></i>   all purpose   </a></li>
		   <li><a href="details.html"><i class="fa fa-tag"></i>   Js   </a></li>
		   <li><a href="details.html"><i class="fa fa-tag"></i>   muse   </a></li>
	  </ul>
	 </div>
	 <div class="blog_10">
	  <a href="details.html"><img src="assets/images/photo/img17.jpg" height="350" alt="abc" class="img_responsive"></a>
	 </div>
	 <div class="blog_10">
	  <a href="details.html"><img src="assets/images/photo/img18.jpg" height="350" alt="abc" class="img_responsive"></a>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
