@extends('home_layout')
@section('body')
    <!-- contact -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- /css files -->
<!-- fonts -->
<link href='fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href='fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- /fonts -->
<!-- js files -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- /js files -->

	<!-- faq -->
	<div class="about-inner py-5">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="row py-xl-4">
				<div class="col-lg-6 welcome-right text-center mb-lg-0 mb-5">
					<img src="website/images/faq.jpg" alt="" class="img-fluid" />
				</div>
				<div class="col-lg-6 about-right-faq">
					<h3 class="mt-2 mb-3">Frequently asked questions</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit.</p>
					<p class="mt-3">Suspendisse porta erat sit amet eros sagittis, quis hendrerit libero aliquam. Fusce semper augue
						ac dolor
						efficitur.</p>
					<a href="about.html" class="btn button-style mt-sm-5 mt-4">Read More</a>
				</div>
			</div>
			<!-- accordions -->
			<ul class="accordion css-accordion mt-5">
				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item1" />
					<label for="item1" class="accordion-item-hd">At vero eos et accusamus et iusto odio dignissimos ducimus <span
						 class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<h6 class="accordion-textm">AmetLorem ipsum dolor sit amet</h6>
						<p>Sodales quis.At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit ametLorem ipsum
							dolor sit amet,sed diam nonumy. Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua.</p>
					</div>
				</li>
				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item2" />
					<label for="item2" class="accordion-item-hd">Lorem ipsum dolor sit amet <span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<h6 class="accordion-textm">Dolores et ea rebum lorem ipsum</h6>
						<p>Duo dolores et ea rebum. Lorem ipsum dolor sit ametLorem ipsum
							dolor sit amet,sed diam nonumy. Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua.</p>
					</div>
				</li>
				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item3" />
					<label for="item3" class="accordion-item-hd">Tque corrupti quos dolores et quas molestias excepturi sint occaecati
						<span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<h6 class="accordion-textm">At vero eos et accusam et</h6>
						<p>sodales quis. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit ametLorem ipsum
							dolor sit amet,sed diam nonumy. Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua.</p>
					</div>
				</li>
				<li class="accordion-item">
					<input class="accordion-item-input" type="checkbox" name="accordion" id="item4" />
					<label for="item4" class="accordion-item-hd">Dolores et quas molestias excepturi sint occaecati <span class="accordion-item-hd-cta">&#9650;</span></label>
					<div class="accordion-item-bd">
						<h6 class="accordion-textm">Lorem ipsum dolor sit amet</h6>
						<p>Sodales quis at vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit ametLorem ipsum
							dolor sit amet,sed diam nonumy. Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua.</p>
					</div>
				</li>
			</ul>
			<!-- //accordions -->
		</div>
	</div>
	<!-- //faq -->
	@endsection