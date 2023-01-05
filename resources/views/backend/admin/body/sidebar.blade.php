 
 <?php
$id = Auth::user()->id;
$user = App\Models\User::find($id);


?>
 
 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            <img src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url(asset('assets/images/users/avatar-1.jpg')) }}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1">{{$user->name}}</h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>
                <!--End User details -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{route('dashboard')}}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Profile</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('profile.view')}}">Profile View</a></li>
                                    <li><a href="{{route('password.view')}}">Password change</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('client.test')}}" class=" waves-effect">
                                    <i class="ri-calendar-2-line"></i>
                                    <span>Exam</span>
                                </a>
                            </li>


                           




                            <li class="menu-title">Pages</li>
                            
                            @if (Auth::check() && Auth::user()->email == "admin@gmail.com")
                            <li>
                                <a href="{{route('admin.results.index')}}" class=" waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Result</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('quiz_category')}}">category index</a></li>
                                    <li><a href="{{route('quiz_category.create')}}">category add</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Question</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('quiz_question')}}">question index</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-eraser-fill"></i>
                                    <span>Option</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('quiz_option')}}">option index</a></li>
                                    <li><a href="{{route('quiz_option.create')}}">option add</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-vip-crown-2-line"></i>
                                    <span>Certificate</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('certificate.index')}}">certificate index</a></li>
                                    <li><a href="#">Certificate add</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-pencil-ruler-2-line"></i>
                                    <span>Blog</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.blog.index')}}">blog index</a></li>
                                    <li><a href="#">blog add</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-bar-chart-line"></i>
                                    <span>cadfa</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-apex.html">Apex Charts</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                                    <li><a href="charts-flot.html">Flot Charts</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-pencil-ruler-2-line"></i>
                                    <span>Courses</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('course.category.index')}}">category</a></li>
                                    <li><a href="{{route('course.index')}}">Course</a></li>
                                    <li><a href="{{route('lesson.index')}}">Lesson</a></li>
                                    <li><a href="{{route('instractor.index')}}">Instractor</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="{{route('contact.index')}}" class=" waves-effect">
                                    <i class="ri-brush-line"></i>
                                    <span>Contact</span>
                                </a>
                            </li>
                            @endif
                         

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>