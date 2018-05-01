@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('content')

<div class="shoppage">
	<div class="shopheader_bg">
    	<div class="container">
			<div class="row">
				<h1 class="cover-heading text-center shopheader">Get in Touch</h1>
			</div>
		</div>
</div>
        <section id="contact">
            <div class="container">
            
                <div class="row">

                    <div class="col-md-5">
                    
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" name="" value="" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="" value="" placeholder="E-mail" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="" value="" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="" rows="3" placeholder="Message/Feedback" required></textarea>
                            </div>
                            <button class="btn btn-info" type="submit" name="button">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                            </button>
                        </form>
                    </div>

                    <div class="col-md-7">
                        <iframe width="600" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJCW8PPKmMWYgRXTo0BsEx75Q&key=AIzaSyDK7d2dOo9CWggdrjomqW6VgZ2I8kaMgNo" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

</div>
        
@endsection