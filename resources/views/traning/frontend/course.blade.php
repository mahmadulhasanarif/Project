@extends('traning.frontend.master')
@section('content')
@include('traning.frontend.layout.courseHeader')
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Courses</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="{{route('traning.index')}}">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Courses</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Team Members -->
	<section class="our-team pb-240">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row">

						@foreach ($courses as $course)
						<div class="col-lg-6 col-xl-4">
							<div class="top_courses">
								<div class="thumb">
									<img class="img-whp" src="{{$course->image}}" alt="t4.jpg">
									<div class="overlay">
										<div class="tag">Best Seller</div>
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

						<div class="col-lg-12">
							<div class="mbp_pagination">
								<ul class="page_navigation">
								    <li class="page-item disabled">
								    	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item active" aria-current="page">
								    	<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">...</a></li>
								    <li class="page-item"><a class="page-link" href="#">14</a></li>
								    <li class="page-item">
								    	<a class="page-link" href="#">Next <span class="flaticon-right-arrow-1"></span></a>
								    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3">
					
					<div class="selected_filter_widget style2 mb30">
					  	<div id="accordion" class="panel-group">
						    <div class="panel">
						      	<div class="panel-heading">
							      	<h4 class="panel-title">
							        	<a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Software</a>
							        </h4>
						      	</div>
							    <div id="panelBodySoftware" class="panel-collapse collapse show">
							        <div class="panel-body">
										<div class="ui_kit_checkbox">
											<div class="custom-control custom-checkbox">
												@foreach ($categories as $category)
												<input type="checkbox" class="custom-control-input" id="">
												<label class="custom-control-label" for="customCheck14">{{$category->name}} </label>
												@endforeach
											</div>
											
											<a class="color-orose" href="#"><span class="fa fa-plus pr10"></span> See More</a>
										</div>
							        </div>
							    </div>
						    </div>
						</div>
					</div>
					<div class="selected_filter_widget style2 mb30">
					  	<div id="accordion" class="panel-group">
						    <div class="panel">
						      	<div class="panel-heading">
							      	<h4 class="panel-title">
							        	<a href="#panelBodySkills" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Skill level</a>
							        </h4>
						      	</div>
							    <div id="panelBodySkills" class="panel-collapse collapse show">
							        <div class="panel-body">
										<div class="ui_kit_checkbox">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck99">
												<label class="custom-control-label" for="customCheck99">Beginner <span class="float-right">(03)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck98">
												<label class="custom-control-label" for="customCheck98">Intermediate <span class="float-right">(15)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck97">
												<label class="custom-control-label" for="customCheck97">Advanced <span class="float-right">(126)</span></label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck96">
												<label class="custom-control-label" for="customCheck96">Appropriate for all <span class="float-right">(1,584)</span></label>
											</div>
										</div>
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