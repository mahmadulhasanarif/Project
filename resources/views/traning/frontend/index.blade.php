@extends('traning.frontend.master')
@section('content')
@include('traning.frontend.layout.header')
    <!-- Home Design -->
	<section class="home-three home3-overlay home3_bgi6">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home-text text-center">
						<h2 class="fz50">Find the Best Courses</h2>
						<p class="color-white">Technology is brining a massive wave of evolution on learning things on different ways.</p>
						<a class="btn home_btn" href="#">Ready to get Started?</a>
					</div>
				</div>
			</div>
			<div class="row_style">
				<svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none"> <path d="M 1000 280 l 2 -253 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -235 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path><path d="M 1000 261 l 2 -222 c -157 -43 -312 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -153.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 16.61 v 22.39 z"></path><path d="M 1000 296 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path></svg>
			</div>
		</div>
	</section>

    	<!-- School category courses -->
	<section class="school-category-courses pt30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Communication IT Traning Categories Courses</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($categories as $category)
				<div class="col-sm-6 col-lg-3">
					<div class="img_hvr_box home3" style="background-image: url({{asset($category->image)}});">
						<div class="overlay">
							<div class="details">
								<h5>{{$category->name}}</h5>
								<p>Over 800 Courses</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach 
				
			</div>
		</div>
	</section>


	<!-- Top Course home3 -->
	<section class="home3_top_course pb0 pt0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Browse Our Top Courses</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
			 	<div class="col-lg-12">
			 		<div id="options" class="alpha-pag full">
						<div class="option-isotop">

							<ul id="filter" class="option-set" data-option-key="filter">
								<li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">Developer</a></li>
								@foreach ($categories as $category)
								<li class="list-inline-item"><a href="#{{$category->name}}" data-option-value=".{{$category->name}}">{{$category->name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div><!-- FILTER BUTTONS -->
			 		<div class="emply-text-sec">
			 			<div class="row" id="masonry_abc">
			 				
							@foreach ($courses as $course)
			 				<div class="col-md-6 col-lg-4 col-xl-4 {{$course->category->name}} {{$course->category->name}}">
								<div class="top_courses">
									<div class="thumb">
										<img class="img-whp" src="{{asset($course->image)}}" alt="t2.jpg">
										<div class="overlay">
											<div class="tag">Top Seller</div>
											<div class="icon"><span class="flaticon-like"></span></div>
											<a class="tc_preview_course" href="#">Preview Course</a>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p>{{$course->user->name}}</p>
											<h5>{{$course->title}}</h5>
											<ul class="tc_review">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#">(6)</a></li>
											</ul>
										</div>
										<div class="tc_footer">
											<ul class="tc_meta float-left">
												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
												<li class="list-inline-item"><a href="#">1548</a></li>
												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
												<li class="list-inline-item"><a href="#">25</a></li>
											</ul>
											<div class="tc_price float-right">${{$course->price}}.00</div>
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
	</section>

	    	<!-- about3 home3 -->
			<section class="home3_about home3_wave">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-xl-6">
							<div class="about_home3">
								<h3>What We Do</h3>
								<h5>Striving to make the web a more beautiful place every single day</h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
								<a href="#" class="btn about_btn_home3">View More</a>
								<ul class="partners_thumb_list">
									<li class="list-inline-item"><a href="#"><img class="img-fluid" src="traning/images/partners/1.png" alt="1.png"></a></li>
									<li class="list-inline-item"><a href="#"><img class="img-fluid" src="traning/images/partners/2.png" alt="2.png"></a></li>
									<li class="list-inline-item"><a href="#"><img class="img-fluid" src="traning/images/partners/3.png" alt="3.png"></a></li>
									<li class="list-inline-item"><a href="#"><img class="img-fluid" src="traning/images/partners/4.png" alt="4.png"></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6">
							<div class="row">
								<div class="col-sm-6 col-lg-6">
									<div class="home3_about_icon_box one">
										<span class="icon"><span class="flaticon-account"></span></span>
										<div class="details">
											<h4>Create Account</h4>
											<p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">
									<div class="home3_about_icon_box two">
										<span class="icon"><span class="flaticon-online"></span></span>
										<div class="details">
											<h4>Create Online Course</h4>
											<p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">
									<div class="home3_about_icon_box three">
										<span class="icon"><span class="flaticon-student-1"></span></span>
										<div class="details">
											<h4>Interact with Students</h4>
											<p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">
									<div class="home3_about_icon_box four">
										<span class="icon"><span class="flaticon-employee"></span></span>
										<div class="details">
											<h4>Achieve Your Goals</h4>
											<p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="about_home3_shape_container">
								<div class="about_home3_shape"><img src="traning/images/about/shape1.png" alt="shape1.png"></div>
							</div>
						</div>
					</div>
				</div>
			</section>


	<!-- Event -->
	<section class="divider2 parallax bgc-thm2" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="divider-two">
						<p class="color-white">Get Lot's Of Online Courses for Free</p>
						<h1 class="color-white text-uppercase">REGISTER TO GET IT</h1>
				        <div id="countdown"></div>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="divider-two">
						<p class="color-white">CREATE FREE ACCOUNT TO GET</p>
						<h3 class="color-white text-uppercase">The Complete Web Developer Course</h3>
					</div>
					<div class="divider-two-form">
						<div id="mc_embed_signup">
							<form method="post" action="{{route('seminer.store')}}">
								@csrf
								<div class="row">
									<div class="col-lg-6" id="mc_embed_signup_scroll">
										<div class="mc-field-group">
											<input type="text" required name="name" placeholder="Your Name">
										</div>
										<div class="mc-field-group">
											<input type="text" required name="address" placeholder="Address">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="mc-field-group">
											<input type="email" required name="email" placeholder="Email Address">
										</div>
										<div class="mc-field-group">
											<input type="text" required name="number" placeholder="Email number">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="mc-field-group">
											<select class="form-control" required name="course_id">
												<option required>select course</option>
												@foreach ($courses as $course)
												<option value="{{$course->id}}">{{$course->name}}</option>
												@endforeach
												
											</select>
										</div>
									</div>
									<div class="col-lg-1"></div>
									<div class="col-lg-5">
										<button type="submit" class="btn btn-lg mailchimp_btn">Get It Now</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- about3 home3 -->
	<section class="home3_about2 pb10 pt30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Top Rating Instructors</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					@foreach ($instractors as $instractor)
					<div class="instructor_slider_home3">
						<div class="item">
							<div class="instructor_col">
								<div class="thumb">
									<img class="img-fluid img-rounded-circle" src="{{$instractor->image}}" alt="1.png">
								</div>
								<div class="details">
									<ul>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
										<li class="list-inline-item"><a href="#">(5)</a></li>
									</ul>
									<h4>{{$instractor->name}}</h4>
									<p>{{$instractor->subject}}</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			
		</div>
	</section>

    <!-- Testimonials -->
	<section class="our-testimonials bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">What People Say</h3>
						<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="testimonial_slider_home3">
						<div class="item">
							<div class="testimonial_grid">
								<div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
								<div class="testimonial_content">
									<div class="thumb">
										<img class="img-fluid" src="traning/images/testimonial/1.jpg" alt="1.jpg">
										<h4>Alex Gibson</h4>
										<p>Telemarketer</p>
									</div>
									<div class="details">
										<p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
								<div class="testimonial_content">
									<div class="thumb">
										<img class="img-fluid" src="traning/images/testimonial/2.jpg" alt="2.jpg">
										<h4>Alex Gibson</h4>
										<p>Telemarketer</p>
									</div>
									<div class="details">
										<p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
								<div class="testimonial_content">
									<div class="thumb">
										<img class="img-fluid" src="traning/images/testimonial/3.jpg" alt="3.jpg">
										<h4>Alex Gibson</h4>
										<p>Telemarketer</p>
									</div>
									<div class="details">
										<p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
								<div class="testimonial_content">
									<div class="thumb">
										<img class="img-fluid" src="traning/images/testimonial/4.jpg" alt="4.jpg">
										<h4>Alex Gibson</h4>
										<p>Telemarketer</p>
									</div>
									<div class="details">
										<p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="t_icon home3"><span class="flaticon-quotation-mark"></span></div>
								<div class="testimonial_content">
									<div class="thumb">
										<img class="img-fluid" src="traning/images/testimonial/5.jpg" alt="5.jpg">
										<h4>Alex Gibson</h4>
										<p>Telemarketer</p>
									</div>
									<div class="details">
										<p>This is the best job-board theme that our company has come across! Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite…</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection