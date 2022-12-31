@extends('frontend.master')
@section('content')
    <!--====== Start Hero Section ======-->
    <section class="hero-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 style="color: #F16D24" class="title">Blog Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Hero Section ======-->
    <!--====== Start Blog Section ======-->
    <section class="blog-area blog-standard-style pt-50 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-standard-wrapper">
                        @foreach ($blogs as $blog)
                        <div class="blog-post-item mb-50">
                            <div class="post-thumbnail">
                                <img src="{{asset($blog->image)}}" alt="blog image">
                            </div>
                            <div class="entry-content">
                                <div class="b-user-admin d-flex justify-content-end">
                                    <a href="{{route('blog.details',$blog->id)}}" class="d-inline-flex align-items-center">
                                        <div class="thumb"><img src="{{'frontend/assets/images/blog/user-1.jpg'}}" alt="USer Image"></div>
                                        <span>{{Auth::user()->name}}</span>
                                    </a>
                                </div>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="{{route('blog.details',$blog->id)}}">{{ Carbon\Carbon::parse($blog->created_at)->diffforHumans() }}</a></span></li>
                                        <li><span><i class="far fa-comments"></i><a href="{{route('blog.details',$blog->id)}}">comments (05)</a></span></li>
                                    </ul>
                                </div>
                                <h3 class="title"><a href="{{route('blog.details',$blog->id)}}">{{$blog->title}}</a></h3>
                                <p>{{$blog->sort_desc}}</p>
                                <a href="{{route('blog.details',$blog->id)}}" class="main-btn filled-btn">Read More</a>
                            </div>
                        </div>
                        @endforeach

                        <div class="page-pagination mb-35">
                            <ul>
                                <li><a href="#"><i class="far fa-angle-left"></i></a></li>
                                <li><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#"><i class="far fa-angle-right"></i></a></li>
                            </ul>
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
                                        <h6><a href="blog-details.html">{{$blog->title}}</a></h6>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">{{ Carbon\Carbon::parse($blog->created_at)->diffforHumans() }}</a></span>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="widget widget-banner mb-35">
                            <div class="banner-content bg_cover" style="background-image: url({{'frontend/assets/images/widget/banner-1.jpg'}});">
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