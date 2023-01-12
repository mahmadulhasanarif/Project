@extends('frontend.master')
@section('content')

<!--====== Start Service Section ======-->
<section class="service-area service-style-six bg_cover pt-50 pb-130" style="background-image: url({{asset('frontend/assets/images/bg/block-bg-2.png')}})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8">
                <div class="section-title section-title-white mb-90">
                    <span style="background-color: #F16D24" class="sub-title sub-title-bg blue-light-bg">IT Services</span>
                    <h2 style="color: #F16D24" class="text-underline">Communication IT Services</h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-4">
                <div class="button float-md-right mb-60">
                    <a href="{{route('software.service')}}" class="main-btn btn-red">View software services</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-nineteen animate-icon mb-40">
                    <div class="icon blue-light-bg">
                        <i class="flaticon-cyber-security-2"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{route('serviceDetails')}}" class="text-underline">Office Network Setup & Maintenance</a></h3>
                        <p>Sed perspiciatis unde oms 
                            natus sit voluptate accusate
                            doloremque laudantium</p>
                        <a href="{{route('serviceDetails')}}" class="btn-link">read more</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-nineteen animate-icon mb-40">
                    <div class="icon red-dark-bg">
                        <i class="flaticon-padlock"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{route('serviceDetails')}}"  class="text-underline">CCTV, IP Camera Installation & Maintenance</a></h3>
                        <p>Sed perspiciatis unde oms 
                            natus sit voluptate accusate
                            doloremque laudantium</p>
                        <a href="service-details.html" class="btn-link">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-nineteen animate-icon mb-40">
                    <div class="icon purple-blue-bg">
                        <i class="flaticon-cyber-security-3"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{route('serviceDetails')}}" class="text-underline">Hardware Setup & Maintenance</a></h3>
                        <p>Sed perspiciatis unde oms 
                            natus sit voluptate accusate
                            doloremque laudantium</p>
                        <a href="{{route('serviceDetails')}}" class="btn-link">read more</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-nineteen animate-icon mb-40">
                    <div class="icon dark-blue-bg">
                        <i class="flaticon-cyber-security-4"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{route('serviceDetails')}}"  class="text-underline">Printer, Photocopier Setup & Maintenance</a></h3>
                        <p>Sed perspiciatis unde oms 
                            natus sit voluptate accusate
                            doloremque laudantium</p>
                        <a href="{{route('serviceDetails')}}" class="btn-link">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-nineteen animate-icon mb-40">
                    <div class="icon red-dark-bg">
                        <i class="flaticon-padlock"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{route('serviceDetails')}}"  class="text-underline">Server Setup & Maintenance</a></h3>
                        <p>Sed perspiciatis unde oms 
                            natus sit voluptate accusate
                            doloremque laudantium</p>
                        <a href="{{route('serviceDetails')}}" class="btn-link">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-nineteen animate-icon mb-40">
                    <div class="icon dark-blue-bg">
                        <i class="flaticon-cyber-security-4"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{route('serviceDetails')}}"  class="text-underline">Managed IT Support</a></h3>
                        <p>Sed perspiciatis unde oms 
                            natus sit voluptate accusate
                            doloremque laudantium</p>
                        <a href="{{route('serviceDetails')}}" class="btn-link">read more</a>
                    </div>
                </div>
            </div>

            
        </div>

    </div>
</section><!--====== End Service Section ======-->


    <!--====== Start Counter Section ======-->
<section class="counter-area counter-style-two pt-50 pb-30">
    <div class="container">
        <div class="counter-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-item text-center">
                        <div class="icon">
                            <i class="flaticon-document"></i>
                        </div>
                        <h2 class="number"><span class="count">25630</span>+</h2>
                        <p>Happy Customer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-item text-center">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <h2 class="number"><span class="count">75646</span>+</h2>
                        <p>Happy Customer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-item text-center">
                        <div class="icon">
                            <i class="flaticon-dashboard-1"></i>
                        </div>
                        <h2 class="number"><span class="count">89634</span>+</h2>
                        <p>Happy Customer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-item text-center">
                        <div class="icon">
                            <i class="flaticon-trophy"></i>
                        </div>
                        <h2 class="number"><span class="count">96325</span>+</h2>
                        <p>Happy Customer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Counter Section ======-->


<!--====== Start Testimonial Section ======-->
<section class="testimonial-area testimonial-style-two bg_cover pt-80 pb-80" style="background-image: url(assets/images/bg/testimonial-bg-1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-50">
                    <span style="background-color: #F16D24" class="sub-title sub-title-bg blue-light-bg">Our testimonials</span>
                    <h2 style="color: #F16D24">Communication IT Client FeedBack</h2>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-two">
            <div class="testimonial-item">
                <div class="wt-thumb-box">
                    <div class="thumb">
                        <img src="{{asset('frontend/assets/images/testimonial/thumb-3.jpg')}}" alt="testimonial image">
                    </div>
                    <div class="comment">
                        <h5>“Quality Team”</h5>
                    </div>
                </div>
                <div class="wt-content">
                    <p>Quis autem veleum iure rerehenderitey qui in ea voluptate velit esse quamessc nihil molestia consequatur velillum qus dolorem eum fugiat quoes.</p>
                    <div class="quote-title-box">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h5>Robert D. Matthews</h5>
                            <span class="position">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="wt-thumb-box">
                    <div class="thumb">
                        <img src="{{asset('frontend/assets/images/testimonial/thumb-4.jpg')}}" alt="testimonial image">
                    </div>
                    <div class="comment">
                        <h5>“Clean Code”</h5>
                    </div>
                </div>
                <div class="wt-content">
                    <p>Quis autem veleum iure rerehenderitey qui in ea voluptate velit esse quamessc nihil molestia consequatur velillum qus dolorem eum fugiat quoes.</p>
                    <div class="quote-title-box">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h5>Courtney F. Schlem</h5>
                            <span class="position">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="wt-thumb-box">
                    <div class="thumb">
                        <img src="{{asset('frontend/assets/images/testimonial/thumb-5.jpg')}}" alt="testimonial image">
                    </div>
                    <div class="comment">
                        <h5>“Quality Team”</h5>
                    </div>
                </div>
                <div class="wt-content">
                    <p>Quis autem veleum iure rerehenderitey qui in ea voluptate velit esse quamessc nihil molestia consequatur velillum qus dolorem eum fugiat quoes.</p>
                    <div class="quote-title-box">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h5>Herbert L. McCoy</h5>
                            <span class="position">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="wt-thumb-box">
                    <div class="thumb">
                        <img src="{{asset('frontend/assets/images/testimonial/thumb-4.jpg')}}" alt="testimonial image">
                    </div>
                    <div class="comment">
                        <h5>“Quality Team”</h5>
                    </div>
                </div>
                <div class="wt-content">
                    <p>Quis autem veleum iure rerehenderitey qui in ea voluptate velit esse quamessc nihil molestia consequatur velillum qus dolorem eum fugiat quoes.</p>
                    <div class="quote-title-box">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h5>Courtney F. Schlem</h5>
                            <span class="position">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Testimonial Section ======-->
@endsection