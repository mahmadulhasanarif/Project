@extends('frontend.master')
@section('content')
 <!--====== Start Hero Section ======-->
 <section class="hero-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-title-text text-center">
                    <h1 style="color: #F16D24" class="title">About US Page</h1>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
<!--====== Start About Section ======-->
<section class="fancy-about fancy-about-four pt-80 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-content-box mb-50">
                    <div class="section-title mb-25">
                        <span style="background-color: #F16D24" class="sub-title sub-title-bg blue-light-bg">what  we  offer</span>
                        <h2>We Care IT Business
                            to Made Great Success </h2>
                    </div>
                    <p>Sed perspiciatis unde omnis natus voluptate accusantie 
                        doloremque laudantium totam rem aperiam eaque quaea
                        vtore eritatis quasi architecto beatae vitae</p>
                    <blockquote class="quote-content mb-35">
                        Unde omnis natus voluptate accusantie doloremqu dan totam rem aperiam eaque quaea vtore eritatis
                    </blockquote>
                    <ul class="check-list list-circle-bg mb-20">
                        <li>Professional Services</li>
                        <li>Experience Advisors</li>
                        <li>Software Development</li>
                        <li>Product Engineering</li>
                    </ul>
                    <a href="{{route('software.service')}}" class="main-btn btn btn-red">learn about more</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="img-holder-box mb-50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="experience-box">
                                <div class="year">
                                    <h2>25</h2>
                                </div>
                            </div>
                            <div class="img-holder">
                                <img src="{{asset('frontend/assets/images/about/about-13.jpg')}}" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-holder">
                                <img src="{{asset('frontend/assets/images/about/Untitled-2 (2).jpg')}}" alt="About Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start History Section ======-->
<section class="history-style-one mb-minus-130">
    <div class="container">
        <div class="history-wrapper">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="history-img bg_cover" style="background-image: url({{asset('frontend/assets/images/features/history-img-1.jpg')}});"></div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--====== End History Section ======-->

 <!--====== Start Service Section ======-->
 <section class="service-area service-style-five bg_cover pt-50 pb-30" style="background-image: url({{asset('frontend/assets/images/bg/block-bg-2.png')}})">
    <div class="container">
        <div class="row service-item-wrapper">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center blue-light-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-web-design-1"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">Web Design</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center dark-blue-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-mobile-app"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">Mobile Apps</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center dark-yellow-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-cyber-security-1"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">Cyber Security</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center dark-green-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-product"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">Product Strategy</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center red-dark-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-target"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">QA & Tasting</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Service Section ======-->

<!--====== Start Client Section ======-->
<section class="clients-area clients-style-one light-gray-bg pt-60 pb-80 clients-map">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-45">
                    <span class="sub-title red-dark">popular partners</span>
                    <h2 class="text-uppercase">We have <span class="red-dark">2563+</span> world wide clients</h2>
                </div>
            </div>
        </div>
        <div class="clients-wrapper">
            <div class="clients-slider-one">
                <div class="client-item">
                    <div class="client-img">
                        <img src="frontend/assets/images/clients/01.png" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="frontend/assets/images/clients/02.png" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="frontend/assets/images/clients/03.png" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="frontend/assets/images/clients/04.png" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="frontend/assets/images/clients/05.png" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="frontend/assets/images/clients/06.png" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="frontend/assets/images/clients/03.png" alt="clients image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Client Section ======-->
@endsection