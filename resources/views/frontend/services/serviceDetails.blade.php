@extends('frontend.master')
@section('content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-title-text text-center">
                    <h1 style="color: #F16D24" class="title">Service Details Page</h1>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->


<!--====== Start Fancy Block Section ======-->
<section class="fancy-text-block fancy-text-block-eleven pt-50 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-holder-box mb-50">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="about-img mb-50">
                                <img src="{{asset('frontend/assets/images/about/about-9.jpg')}}" alt="">
                            </div>
                        </div>
                      
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-wrapper">
                    <div class="section-title section-title-two mb-25">
                        <span class="sub-title">It Benifits</span>
                        <h2>We Provide How Can Growth 
                            Your IT Business</h2>
                    </div>
                    <p>On the other hand denounce with righteous indignation and dislike 
                        men who are so beguiled and demoralized by the charms of pleasure of the moment blinded by desire that they cannot foresee</p>
                    <ul class="check-list list-circle-bg mb-20">
                        <li>Software Solutions</li>
                        <li>Product Engineering</li>
                        <li>Database Security</li>
                        <li>Mobile Strategy</li>
                        <li>IT Consultancy</li>
                        <li>Business Growth</li>
                    </ul>
                    <a href="#" class="main-btn btn-red-light">Contact Whats App</a>
                    <a href="#" class="main-btn btn-blue-light">Contact Facebook</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Fancy Block Section ======-->

    <!--====== Start About Section ======-->
    <section class="fancy-about fancy-about-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="text-wrapper mb-50">
                        <div class="experience-box">
                            <div class="big-text mb-45">25</div>
                            <div class="content mb-45">
                                <span class="span">Years Of Experience</span>
                                <h2>Professional IT Solutions 
                                    for Business Success</h2>
                                <blockquote>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptatem accustium dolorem
                                        que laudantium totam rem eaque</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="counter-wrapper">
                            <div class="row">
                                <div class="col-md-4 col-6 counter-column">
                                    <div class="counter-item">
                                        <h2 class="number"><span class="count">25630</span>+</h2>
                                        <p>Happy Customer</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 counter-column">
                                    <div class="counter-item">
                                        <h2 class="number"><span class="count">75646</span>+</h2>
                                        <p>Star Work Reviews</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 counter-column">
                                    <div class="counter-item">
                                        <h2 class="number"><span class="count">89634</span>+</h2>
                                        <p>Project Complate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img mb-50">
                        <img src="{{asset('frontend/assets/images/about/about-9.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->
        
        <!--====== Start Contact Section ======-->
        <section class="contact-area contact-style-three bg_cover pt-50 pb-80" style="background-image: url({{assert('frontend/assets/images/bg/testimonial-bg-1.jpg')}});"> 
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-section-box">
                            <div class="section-title section-title-two mb-25">
                                <span class="sub-title">Need help ?</span>
                                <h2>Let’s Talk About IT
                                    Solutions</h2>
                            </div>
                            <p>On the other hand denounce righteous indige
                                ation and dislike men who are so beguiled and
                                demoralized by the charms of pleasure of the moment blinded by desire</p>
                            <ul class="social-link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-wrapper">
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Full Name Here" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Website" name="website" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide">
                                                <option value="01">Customer Support</option>
                                                <option value="01">Customer Support</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Write Message" name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <div class="col-lg-12">
                                                <button class="main-btn btn-purple">Get free consultations</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Section ======-->

@endsection