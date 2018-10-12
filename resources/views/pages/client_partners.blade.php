@extends('master')
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url('assets/master/images/bg/4.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Client and Partners</h1>
						<h2>MSI Your Digital Solution Enabler!</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div id="fh5co-services" class="fh5co-project">
	<div class="container">
		<div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Our Valueable Clients & Partners</h2>
            </div>
        </div>
        <div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <img class="img-responsive" src="{!! asset('assets/master/images/gmbr/telco.png') !!}" alt="">
					<img src="{!! asset('assets/master/images/gmbr/partner.png') !!}" class="img-responsive">
					<p class="text-center"></p>
				</div>
			</div>
			<div class="col-md-2 col-sm-2">
			</div>
		</div>
	</div>
</div>
@endsection