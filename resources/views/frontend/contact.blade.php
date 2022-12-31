@extends('frontend.master')
@section('content')
<!--====== Start Hero Section ======-->
    <section class="hero-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="page-title-text text-center">
                            <h1 style="color: #F16D24" class="title">Contact Us</h1>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-title-text text-center">
                            <h1 class="title">
                                @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{Session::get('message')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
    </section><!--====== End Hero Section ======-->

        <!--====== Start Contact Information Section ======-->
        <section class="contact-information-area contact-information-style-one ">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-8">
                        <div class="information-wrapper mb-50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="information-item mb-60">
                                        <div class="icon">
                                            <i class="flaticon-map"></i>
                                        </div>
                                        <div class="text">
                                            
                                            <a href="https://www.google.com/maps/place/Communication+IT+(CmIT)/@23.
                                            8663066,90.3691446,15z/data=!4m19!1m13!4m12!1m3!2m2!1d90.3974258!2d23.8743517!1m6!1m2!1s0x3755c5cb11303719:0xc1384c85422a4186!2sCommunication+IT+(CmIT),
                                            +Plot%234+(Amin+Tower),+Road%2301A,+Level%2301,+Dhaka+1230!2m2!1d90.3997048!2d23.8748649!3e0!3m4!1s0x3755c5cb11303719:0xc1384c85422a4186!8m2!3d23.8748649!4d90.3997048">
                                            <h5>Uttora Dhaka</h5>
                                            <p>Plot#4 (Amin Tower), Road#01A, Level#01, Dhaka 1230</p>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="information-item mb-60">
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="text">
                                            <h5>Our Helpline</h5>
                                            <p><span>Mobile :</span><a href="tel:+01234567899">+012 (345) 678 99</a></p>
                                            <p><span>Phone :</span><a href="tel:+123456789">+123456789</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="information-item mb-60">
                                        <div class="icon">
                                            <i class="flaticon-map"></i>
                                        </div>
                                        <div class="text">
                                            <h5>San Francisco</h5>
                                            <p>720 Main Street, B - Block, 
                                                Floor, San Francisco</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="information-item mb-60">
                                        <div class="icon">
                                            <i class="flaticon-phone"></i>
                                        </div>
                                        <div class="text">
                                            <h5>Email Address</h5>
                                            <p><a href="mailto:hotlines@gmail.com">hotlines@gmail.com</a></p>
                                            <p><a href="www.infor.net">www.infor.net</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="information-cta mb-50">
                            <div class="information-box mb-25">
                                <h3>Working Hour</h3>
                                <h5>Sun - Friday   :  08 am - 09pm</h5>
                                <h5 class="st-close">Satarday Close</h5>
                            </div>
                            <div class="information-box mb-25">
                                <h3>Ready To Work Us ?</h3>
                                <p>Sed perspiciatis unde omnisnae
                                    voluptate accusantie dolore</p>
                                <a href="contact.html" class="main-btn main-btn-blue">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Information Section ======-->

        

        {{-- <!--====== Start Contact Section ======-->
        <section class="contact-area contact-style-two">
            <div class="contact-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center mb-55">
                                <h2>Send Us Message</h2>
                                <h5>Don’t Hesited To Contact With Us! Feel Free To Message Us</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-form">
                                <form method="POST" action="{{route('contact.store')}}" id="addForm">
                                    @csrf

                                    <div class="row justify-content-center">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Phone Number" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Address" name="address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form_group">
                                                <textarea name="message" placeholder="Message" class="form_control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form_group text-center">
                                                <button type="submit" class="main-btn btn-purple w-100">send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Section ======--> --}}


         <!--====== Start Contact Section ======-->
         <section class="contact-area contact-style-three bg_cover pt-20 pb-80"> 
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-section-box">
                            <div class="section-title section-title-two mb-25">
                                <span class="sub-title">Need help ?</span>
                                <h2>Let’s Talk About Communication IT
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
                            <form class="contact-form" method="POST" action="{{route('contact.store')}}">
                                @csrf
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
                                            <input type="text" class="form_control" placeholder="Phone" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide" name="support">
                                                <option value="1">Customer Support</option>
                                                <option value="2">IT Support</option>
                                                <option value="3">Software Support</option>
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
                                                <button type="submit" class="main-btn btn-purple">Get free contact</button>
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

        <!--====== Start Map section ======-->
        <section class="contact-page-map">
           <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14594.628463508796!2d90.36914459914644!3d23.866306568601235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5cb11303719%3A0xc1384c85422a4186!2sCommunication%20IT%20(CmIT)!5e0!3m2!1sen!2sbd!4v1671446580708!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
           </div>
        </section><!--====== End Map section ======-->

@endsection