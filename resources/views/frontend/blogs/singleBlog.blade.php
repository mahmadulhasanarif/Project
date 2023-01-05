@extends('frontend.master')
@section('content')
    <!--====== Start Hero Section ======-->
    <section class="hero-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 style="color: #F16D24" class="title">Blog Standard</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero Section ======-->
    <!--====== Start Blog Section ======-->
    <section class="blog-details-style pt-50 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrapper mb-35">
                        <div class="blog-post-item">
                            <div class="post-thumbnail">
                                <img src="{{asset($blog->image)}}" alt="blog image">
                            </div>
                            <div class="entry-content">
                                <div class="b-user-admin d-flex justify-content-end">
                                    <a href="#" class="d-inline-flex align-items-center">
                                        <div class="thumb"><img src="{{asset($blog->image)}}" alt="USer Image"></div>
                                        <span>Supper Admin</span>
                                    </a>
                                </div>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a>{{ Carbon\Carbon::parse($blog->created_at)->diffforHumans() }}</a></span></li>
                                        <li><span><i class="far fa-comments"></i><a href="#">comments (05)</a></span></li>
                                    </ul>
                                </div>
                                <h3 class="title">{{$blog->title}}</h3>
                                <p>{{$blog->sort_desc}}</p>
                                <blockquote>
                                    <div class="thumb">
                                        <img src="{{asset('frontend/assets/images/blog/user-4.jpg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{$blog->sort_desc}}</h4>
                                        <h5>William K. Parker</h5>
                                    </div>
                                </blockquote>
                                <p>{{$blog->long_desc}}</p>
                                <div class="post-share-tag">
                                    <div class="post-tag-cloud">
                                        <ul>
                                            <li class="item-heading">Popular Tags  :</li>
                                            <li><a href="{{route('it.service')}}">IT Service</a></li>
                                            <li><a href="{{route('software.service')}}">Software Service</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-share">
                                        <ul class="social-link">
                                            <li class="item-heading">Share News    :</li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-author-box mt-60 mb-60">
                            <div class="author-thumb">
                                <img src="{{asset('frontend/assets/images/blog/post-author.jpg')}}" alt="post author">
                            </div>
                            <div class="author-content">
                                <h4>Shawn B. Bailey</h4>
                                <p>Quis autem veleum iure reprehenderit quinea voluptate esse quam molestiae consequatu velillum dolorem fugiat quo voluptas nulla pariano one rejects dislikes</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>    
                       
                        
                        <div class="comments-respond mb-35" id="comment-respond">
                            <h4 class="comments-heading">Leave a Comments</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            <form class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Your Full Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Website" name="url" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea name="message" class="form_control" placeholder="Comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button class="main-btn btn-purple">Send your comments</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-widget-area">
                        <div class="widget search-widget mb-35">
                            <h4 class="widget-title">Search <span class="line"></span></h4>
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                    <i class="fas fa-search"></i>
                                </div>
                            </form>
                        </div>
                        <div class="widget recent-post-widget mb-35">
                            <h4 class="widget-title">Recent News <span class="line"></span></h4>
                            <ul class="recent-post-list">
                                @foreach ($blogs as $blog)
                                <li class="post-thumbnail-content">
                                    <img src="{{asset($blog->image)}}" height="80px" width="80px" alt="post image">
                                    <div class="post-title-date">
                                        <h6><a href="{{route('blog.details',$blog->id)}}">{{$blog->title}}</a></h6>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="{{route('blog.details',$blog->id)}}">{{ Carbon\Carbon::parse($blog->created_at)->diffforHumans() }}</a></span>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="widget widget-banner mb-35">
                            <div class="banner-content bg_cover" style="background-image: url({{asset('frontend/assets/images/widget/banner-1.jpg')}});">
                                <h3>Ready To Get Expert 
                                    Our IT Services</h3>
                                <a href="#" class="main-btn main-btn-sm main-btn-blue">conatct Us</a>
                            </div>
                        </div>
                        <div class="widget widget-tag-cloud mb-35">
                            <h4 class="widget-title">Best Tags<span class="line"></span></h4>
                            <a href="#">Technology</a>
                            <a href="#">service</a>
                            <a href="#">team</a>
                            <a href="#">solutions</a>
                            <a href="#">consultancy</a>
                            <a href="#">It Company</a>
                            <a href="#">agency</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Blog Section ======-->
@endsection