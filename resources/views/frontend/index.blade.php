@extends('frontend.master')
@section('content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="hero-wrapper-three hero-slider-three">
        <div class="single-slider bg_cover" style="background-image: url({{asset('frontend/assets/images/untitled.jpg')}});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="hero-content text-center">
                            <span style="background-color: #F16D24" class="sub-title"> it solutions</span>
                            <h1>Communication IT Solution</h1>
                            <ul class="button">
                                <li><a href="#" class="main-btn btn-red-light">get started now</a></li>
                                <li><a href="#" class="main-btn btn-blue-light">explore more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider bg_cover" style="background-image: url({{asset('frontend/assets/images/untitled.jpg')}});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="hero-content text-center">
                            <span class="sub-title">professional it solutions</span>
                            <h1>Communication IT Solution</h1>
                            <ul class="button">
                                <li><a href="#" class="main-btn btn-blue-light">get started now</a></li>
                                <li><a href="#" class="main-btn btn-gray-light">explore more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->

    
   <!--====== End About Section ======-->
   <section class="fancy-about fancy-about-three pt-130 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="text-wrapper mb-50">
                    <div class="section-title mb-25">
                        <span style="background-color: #F16D24" class="sub-title sub-title-bg blue-light-bg">what  we  offer</span>
                        <h2 class="text-underline">Best Categoris For Your 
                            Software Solutions</h2>
                    </div>
                    <p>Sed perspiciatis unde omnis natus voluptate accusantie 
                        doloremque laudantium totam rem aperiam eaque quaea
                        vtore eritatis quasi architecto beatae vitae</p>
                    <div class="experience-box">
                        <div class="year">
                            <h2>3</h2>
                        </div>
                        <div class="text">
                            <h4>Years Of Experience
                                We Provides</h4>
                            <p>Perspiciatis unde onatus 
                                voluptate dolore laudantie
                                totam rem aperiam</p>
                        </div>
                    </div>
                    <ul class="button">
                        <li>
                            <a href="{{route('it.service')}}" class="main-btn">Get our it services</a>
                        </li>
                        <li>
                            <a href="tel:+8801894-620088" class="support">
                                <div class="icon">
                                    <i class="flaticon-customer-service"></i>
                                </div>
                                <div class="info">
                                    <span class="span">any support?</span>
                                    <h5>+8801894-620088</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="img-holder mb-50">
                    <img src="{{asset('frontend/assets/images/Untitled-2 (1).jpg')}}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->

    <!--====== Start Features Section ======-->
    <section class="fancy-features light-gray-bg pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-45">
                        <span class="sub-title red-dark text-underline">what we do</span>
                        <h2 class="text-uppercase">Solutions Customers Have 
                            Built with Instabase</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{route('software.service')}}">
                        <div class="block-style-two animate-icon mb-40">
                            <div class="icon">
                                <img src="frontend/assets/images/icon/icon-17.png" alt>
                            </div>
                            <div class="text">
                                <h3 class="text-underline">Software Services</h3>
                                <p>Sedut perspicias unomnis natus error sit voluptatemc accusanti remqua</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12">
                    <a href="{{route('it.service')}}">
                        <div class="block-style-two animate-icon mb-40">
                            <div class="icon">
                                <img src="frontend/assets/images/icon/icon-2.png" alt>
                            </div>
                            <div class="text">
                                <h3 class="text-underline">IT Services</h3>
                                <p>Sedut perspicias unomnis natus error sit voluptatemc accusanti remqua</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section><!--====== End Features Section ======-->
    
    <!--====== Start Service Section ======-->
    <section style="background-color: #000000" class="service-area dark-black-bg pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center service-style-one">
                <div class="col-lg-4">
                    <div class="text-wrapper mb-40">
                        <div class="section-title section-title-white mb-20">
                            <span class="sub-title red-dark text-underline">Our popular services</span>
                            <h2 class="text-uppercase">Best Professional
                                IT Solutiuons
                                </h2>
                        </div>
                        <p>Sed perspiciatis unde omniste natus voluptate 
                            accusantiuy doloremque laudantium totam aperm
                            eaque quae ainvtore veritatis architecto</p>
                        <a href="service-1.html" class="main-btn">explore more services</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="block-style-three animate-icon border-right-1">
                                    <div class="icon">
                                        <i class="flaticon-puzzle-1"></i>
                                    </div>
                                    <div class="text">
                                        <h3 class="title"><a href="service-details.html" class="text-underline">Infrastructure</a></h3>
                                        <p>But I must explain to you how all this mistaken ideofe denouncing pleasure</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-style-three animate-icon pr-lg-0">
                                    <div class="icon">
                                        <i class="flaticon-solution-1"></i>
                                    </div>
                                    <div class="text">
                                        <h3 class="title"><a href="service-details.html" class="text-underline">IT Engineering</a></h3>
                                        <p>But I must explain to you how all this mistaken ideofe denouncing pleasure</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-style-three animate-icon border-right-1">
                                    <div class="icon">
                                        <i class="flaticon-cyber-security"></i>
                                    </div>
                                    <div class="text">
                                        <h3 class="title"><a href="service-details.html" class="text-underline">cyber security</a></h3>
                                        <p>But I must explain to you how all this mistaken ideofe denouncing pleasure</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-style-three animate-icon pr-lg-0">
                                    <div class="icon">
                                        <i class="flaticon-internet-of-things"></i>
                                    </div>
                                    <div class="text">
                                        <h3 class="title"><a href="service-details.html" class="text-underline">Apps Development</a></h3>
                                        <p>But I must explain to you how all this mistaken ideofe denouncing pleasure</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Service Section ======-->

<!--====== Start Service Section ======-->
<section class="clients-area clients-style-one light-gray-bg pt-70 pb-80 clients-map">
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
</section><!--====== End Service Section ======-->




@endsection