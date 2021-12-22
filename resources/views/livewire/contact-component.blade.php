<div>
<section id="contact_main">
 <div class="container">
  <div class="row">
   <div class="about_1">
    <h2>CONTACT</h2>
	<p><a href="/"> HOME </a> <i class="fa fa-angle-double-right"></i> <a href="#"> CONTACT </a></p>
   </div>
  </div>
 </div>
</section>
<section id="contact">
 <div class="container">
  <div class="row">
   <div class="contact_1 clearfix">
    <div class="col-sm-5">
	 <div class="contact_2">
	  <h4>Come Visit Us At</h4>
	  <h2>Our Address</h2>
	 </div>
	 <div class="contact_3 clearfix">
	  <div class="col-sm-2 space_all">
	   <div class="contact_4">
	    <i class="fa fa-map-marker"></i>
	   </div>
	  </div>
	  <div class="col-sm-10 space_all">
	   <div class="contact_5">
	    <h3>Office Address</h3>
		<p>Moghamo street, Hospital Round About</p>
	   </div>
	  </div>
	 </div>
	 <div class="contact_3 clearfix">
	  <div class="col-sm-2 space_all">
	   <div class="contact_4">
	    <i class="fa fa-phone"></i>
	   </div>
	  </div>
	  <div class="col-sm-10 space_all">
	   <div class="contact_5">
	    <h3>Our Phone Number</h3>
		<p>+237 676-736-394</p>
	   </div>
	  </div>
	 </div>
	 <div class="contact_6 clearfix">
	  <div class="col-sm-2 space_all">
	   <div class="contact_4">
	    <i class="fa fa-envelope"></i>
	   </div>
	  </div>
	  <div class="col-sm-10 space_all">
	   <div class="contact_5">
	    <h3>Our Email</h3>
		<p>epoxymaster10.com</p>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-sm-7">
	 <div class="contact_7">
	  <h4>Send Message</h4>
	  <h2>Drop Us A Line</h2>
	 </div>
	   @if(Session::has('message'))
             <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
	   @endif

	   <form name="form_contact" wire:submit.prevent="sendMessage">
	 <div class="col-sm-12 space_all">
	   <div class="col-sm-6">
	    <div class="contact_8">
			
		 <input type="text" class="form-control" placeholder="Your Name" name="name" wire:model="name">
		   @error('name') <p class="text-danger">{{$message}}</p> @enderror
		</div> 
	   </div>
	   <div class="col-sm-6">
	    <div class="contact_8">
		 <input type="text" class="form-control" placeholder="Your Phone" name="phone" wire:model="phone">
		 @error('phone') <p class="text-danger">{{$message}}</p> @enderror
		</div> 
	   </div>
	  </div>
	  <div class="col-sm-12 space_all">
	   <div class="col-sm-6">
	    <div class="contact_8">
		 <input type="text" class="form-control" placeholder="Your Email" name="email" wire:model="email">
		 @error('email') <p class="text-danger">{{$message}}</p> @enderror
		</div> 
	   </div>
	  </div>
	  <div class="col-sm-12">
	   <div class="contact_9">
	    <textarea placeholder="Message" class="form-control" name = "message" wire:model="message"></textarea>
		@error('message') <p class="text-danger">{{$message}}</p> @enderror
	   </div>
	  </div>
	  <div class="col-sm-12">
	   <div class="contact_10">
	       <ul>
	            <!-- <li><a href="#" class="button">SEND</a></li> -->
				<input type="submit" class="button" name="ok" value="SEND">
	      </ul>
	   </div>
	  </div>
  </form>
	</div>
   </div>
  </div> 
 </div>
</section>
<section id="contact_inner">
 <iframe src="assets/https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3635689.793072721!2d78.6421709625!3d27.141236999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1531201517392" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen=""></iframe>
</section>
</div>

