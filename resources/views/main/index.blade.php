@extends('layouts.main.index')

@section('content')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset("front/plugins/OwlCarousel2-2.2.1/owl.carousel.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("front/plugins/OwlCarousel2-2.2.1/animate.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("front/plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("front/styles/main_styles.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("front/styles/responsive.css")}}">
@endsection
<div class="home">

    <!-- Home Slider -->

    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">


            <!-- Slider Item -->
            @foreach($featured as $post)
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url({{$post->post->post_image}}); filter: blur(8px);
                    -webkit-filter: blur(8px);"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content">
                                    @isset($post->post->categories)
                                    @foreach($post->post->categories as $category)
                                    <div class="home_slider_item_category trans_200 d-inline-block" style="background: {{$category->category->color}};"><a href="category.html" class="trans_200">{{ ($category->category) ? $category->category->name : '' }}</a></div>
                                                {{-- <br> --}}
                                            @endforeach
                                            @endisset
                                    <div class="home_slider_item_title">
                                        <a href="post/{{$post->post->id}}/{{$post->post->slug}}">{{$post->post->title}}</a>
                                    </div>
                                    <div class="home_slider_item_link">
                                    <p class="text-white mb-4">{{$post->post->short_content}}</p>
                                        <a href="post/{{$post->post->id}}/{{$post->post->slug}}" class="trans_200">Continue Reading
                                            <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                                                <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Similar Posts -->
                <div class="similar_posts_container">
                    <div class="container">
                        <div class="row d-flex flex-row align-items-end">
                @foreach ($featured as $item)

                            <!-- Similar Post -->
                            <div class="col-lg-3 col-md-6 similar_post_col">
                                <div class="similar_post trans_200">
                                    <a href="post/{{$item->post->id}}/{{$item->post->slug}}">{{$item->post->title}}</a>
                                </div>
                            </div>


                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
            @endforeach



        </div>

        <div class="custom_nav_container home_slider_nav_container">
            <div class="custom_prev custom_prev_home_slider">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="15px" height="20px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                    <polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
                </svg>
            </div>
            <ul id="custom_dots" class="custom_dots custom_dots_home_slider">
                <li class="custom_dot custom_dot_home_slider active"><span></span></li>
                <li class="custom_dot custom_dot_home_slider"><span></span></li>
                <li class="custom_dot custom_dot_home_slider"><span></span></li>
            </ul>
            <div class="custom_next custom_next_home_slider">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="15px" height="20px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                    <polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
                </svg>
            </div>
        </div>

    </div>
</div>

<div class="page_content mb-5">
    <div class="container mb-5">
        <div class="row row-lg-eq-height">

            <!-- Main Content -->

            <div class="col-lg-12">
                <div class="main_content">

                    <!-- Blog Section - Don't Miss -->

                    <div class="blog_section">
                        <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                            <div class="section_title">Latest</div>
                            {{-- <div class="section_tags ml-auto">
                                <ul>
                                    <li class="active"><a href="category.html">Anime</a></li>
                                    <li><a href="category.html">style hunter</a></li>
                                    <li><a href="category.html">vogue</a></li>
                                    <li><a href="category.html">health & fitness</a></li>
                                    <li><a href="category.html">travel</a></li>
                                </ul>
                            </div> --}}

                        </div>
                        <div class="section_content">
                            <div class="container">

                                <!-- Largest Card With Image -->


                                <!-- Small Card Without Image -->


                                <!-- Small Card With Background -->
                                <div class="row">

                                    @foreach ($latest as $item)
                                    <div class="col-lg-6 col-12 mt-3">
                                        <div class="post-card">
                                            <div class="card-image w-100" style="background-image: url({{$item->post_image}}); background-position:center;"></div>
                                            {{-- <div class="card-img-top" style="height: 300px; overflow:hidden;" src="{{$item->post_image}}"> --}}
                                            <div class="card-body">
                                                <div class="card-title"><a href="post/{{$item->id}}/{{$item->slug}}">{{$item->title}}</a></div>
                                                <p class="card-text">{{$item->short_content}}...</p>
                                                <small class="post_meta w-100 d-inline-block">
                                                    <a href="#">{{$item->user->name}}</a>
                                                    <span>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y h:m A')}}</span>
                                                    {{-- <div class="tags float-right">aa</div> --}}
                                                    @isset($item->categories)
                                    @foreach($item->categories as $category)
                                    <div class="float-right px-1 rounded text-white mr-1" style="background: {{$category->category->color}};">{{ ($category->category) ? $category->category->name : '' }}</div>
                                            @endforeach
                                            @endisset
                                                </small>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>



                            </div>
                        </div>
                    </div>

                    <!-- Blog Section - What's Trending -->

                    {{-- <div class="blog_section">
                        <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                            <div class="section_title">What's Trending</div>
                            <div class="section_tags ml-auto">
                                <ul>
                                    <li class="active"><a href="category.html">all</a></li>
                                    <li><a href="category.html">style hunter</a></li>
                                    <li><a href="category.html">vogue</a></li>
                                    <li><a href="category.html">health & fitness</a></li>
                                    <li><a href="category.html">travel</a></li>
                                </ul>
                            </div>
                            <div class="section_panel_more">
                                <ul>
                                    <li>more
                                        <ul>
                                            <li><a href="category.html">new look 2018</a></li>
                                            <li><a href="category.html">street fashion</a></li>
                                            <li><a href="category.html">business</a></li>
                                            <li><a href="category.html">recipes</a></li>
                                            <li><a href="category.html">sport</a></li>
                                            <li><a href="category.html">celebrities</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="section_content">
                            <div class="grid clearfix">

                                <!-- Large Card With Background -->
                                <div class="card card_large_with_background grid-item">
                                    <div class="card_background" style="background-image:url(front/images/post_8.jpg)"></div>
                                    <div class="card-body">
                                        <div class="card-title"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Large Card With Image -->
                                <div class="card grid-item card_large_with_image">
                                    <img class="card-img-top" src="front/images/post_9.jpg" alt="">
                                    <div class="card-body">
                                        <div class="card-title"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <p class="card-text">Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Default Card With Image -->
                                <div class="card card_small_with_image grid-item">
                                    <img class="card-img-top" src="front/images/post_5.jpg" alt="">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Default Card With Background -->

                                <div class="card card_default card_default_with_background grid-item">
                                    <div class="card_background" style="background-image:url(front/images/post_6.jpg)"></div>
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                    </div>
                                </div>

                                <!-- Default Card No Image -->
                                <div class="card card_default card_default_no_image grid-item">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                    </div>
                                </div>

                                <!-- Default Card No Image -->
                                <div class="card card_default card_default_no_image grid-item">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                    </div>
                                </div>

                                <!-- Default Card With Background -->

                                <div class="card card_default card_default_with_background grid-item">
                                    <div class="card_background" style="background-image:url(front/images/post_7.jpg)"></div>
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div> --}}

                    <!-- Blog Section - Videos -->

                    {{-- <div class="blog_section">
                        <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                            <div class="section_title">Most Popular Videos</div>
                        </div>
                        <div class="section_content">
                            <div class="row">
                                <div class="col">
                                    <div class="videos">
                                        <div class="player_container">
                                            <div id="P1" class="player"
                                                 data-property="{videoURL:'2ScS5kwm7nI',containment:'self',startAt:0,mute:false,autoPlay:false,loop:false,opacity:1}">
                                            </div>
                                        </div>
                                        <div class="playlist">
                                            <div class="playlist_background"></div>

                                            <!-- Video -->
                                            <div class="video_container video_command active" onclick="jQuery('#P1').YTPChangeVideo({videoURL: '2ScS5kwm7nI', mute:false, addRaster:true})">
                                                <div class="video d-flex flex-row align-items-center justify-content-start">
                                                    <div class="video_image"><div><img src="images/video_1.jpg" alt=""></div><img class="play_img" src="images/play.png" alt=""></div>
                                                    <div class="video_content">
                                                        <div class="video_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Video -->
                                            <div class="video_container video_command" onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'BzMLA8YIgG0', mute:false, addRaster:true})">
                                                <div class="video d-flex flex-row align-items-center justify-content-start">
                                                    <div class="video_image"><div><img src="images/video_2.jpg" alt=""></div><img class="play_img" src="images/play.png" alt=""></div>
                                                    <div class="video_content">
                                                        <div class="video_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Video -->
                                            <div class="video_container video_command" onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'bpbcSdqvtUQ', mute:false, addRaster:true})">
                                                <div class="video d-flex flex-row align-items-center justify-content-start">
                                                    <div class="video_image"><div><img src="images/video_3.jpg" alt=""></div><img class="play_img" src="images/play.png" alt=""></div>
                                                    <div class="video_content">
                                                        <div class="video_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Video -->
                                            <div class="video_container video_command" onclick="jQuery('#P1').YTPChangeVideo({videoURL: 'UjYemgbhJF0', mute:false, addRaster:true})">
                                                <div class="video d-flex flex-row align-items-center justify-content-start">
                                                    <div class="video_image"><div><img src="images/video_4.jpg" alt=""></div><img class="play_img" src="images/play.png" alt=""></div>
                                                    <div class="video_content">
                                                        <div class="video_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <div class="video_info"><span>1.2M views</span><span>Sep 29</span></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Blog Section - Latest -->

                    {{-- <div class="blog_section">
                        <div class="section_panel d-flex flex-row align-items-center justify-content-start">
                            <div class="section_title">Latest Articles</div>
                        </div>
                        <div class="section_content">
                            <div class="grid clearfix">

                                <!-- Small Card With Image -->
                                <div class="card card_small_with_image grid-item">
                                    <img class="card-img-top" src="images/post_10.jpg" alt="">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Small Card Without Image -->
                                <div class="card card_default card_small_no_image grid-item">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Small Card With Image -->
                                <div class="card card_small_with_image grid-item">
                                    <img class="card-img-top" src="images/post_15.jpg" alt="">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Small Card With Image -->
                                <div class="card card_small_with_image grid-item">
                                    <img class="card-img-top" src="images/post_13.jpg" alt="https://unsplash.com/@jakobowens1">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Small Card With Background -->
                                <div class="card card_default card_small_with_background grid-item">
                                    <div class="card_background" style="background-image:url(images/post_11.jpg)"></div>
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Small Card With Background -->
                                <div class="card card_default card_small_with_background grid-item">
                                    <div class="card_background" style="background-image:url(images/post_16.jpg)"></div>
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Small Card With Image -->
                                <div class="card card_small_with_image grid-item">
                                    <img class="card-img-top" src="images/post_14.jpg" alt="">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Small Card Without Image -->
                                <div class="card card_default card_small_no_image grid-item">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Small Card Without Image -->
                                <div class="card card_default card_small_no_image grid-item">
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                    </div>
                                </div>

                                <!-- Default Card With Background -->
                                <div class="card card_default card_default_with_background grid-item">
                                    <div class="card_background" style="background-image:url(images/post_12.jpg)"></div>
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                    </div>
                                </div>

                                <!-- Default Card With Background -->
                                <div class="card card_default card_default_with_background grid-item">
                                    <div class="card_background" style="background-image:url(images/post_6.jpg)"></div>
                                    <div class="card-body">
                                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most</a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                </div>
                {{-- <div class="load_more">
                    <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
                </div> --}}
            </div>

            <!-- Sidebar -->

            {{-- <div class="col-lg-3">
                <div class="sidebar">
                    <div class="sidebar_background"></div>

                    <!-- Top Stories -->

                    <div class="sidebar_section">
                        <div class="sidebar_title_container">
                            <div class="sidebar_title">Top Stories</div>
                            <div class="sidebar_slider_nav">
                                <div class="custom_nav_container sidebar_slider_nav_container">
                                    <div class="custom_prev custom_prev_top">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                            <polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
                                        </svg>
                                    </div>
                                    <ul id="custom_dots" class="custom_dots custom_dots_top">
                                        <li class="custom_dot custom_dot_top active"><span></span></li>
                                        <li class="custom_dot custom_dot_top"><span></span></li>
                                        <li class="custom_dot custom_dot_top"><span></span></li>
                                    </ul>
                                    <div class="custom_next custom_next_top">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                            <polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_section_content">

                            <!-- Top Stories Slider -->
                            <div class="sidebar_slider_container">
                                <div class="owl-carousel owl-theme sidebar_slider_top">

                                    <!-- Top Stories Slider Item -->
                                    <div class="owl-item">

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_1.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_2.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_3.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_4.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Top Stories Slider Item -->
                                    <div class="owl-item">

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_1.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_2.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_3.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_4.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Top Stories Slider Item -->
                                    <div class="owl-item">

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_1.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_2.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_3.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Sidebar Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/top_4.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advertising -->

                    <div class="sidebar_section">
                        <div class="advertising">
                            <div class="advertising_background" style="background-image:url(images/post_17.jpg)"></div>
                            <div class="advertising_content d-flex flex-column align-items-start justify-content-end">
                                <div class="advertising_perc">-15%</div>
                                <div class="advertising_link"><a href="#">How Did van Gogh’s Turbulent Mind</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Newest Videos -->

                    <div class="sidebar_section newest_videos">
                        <div class="sidebar_title_container">
                            <div class="sidebar_title">Newest Videos</div>
                            <div class="sidebar_slider_nav">
                                <div class="custom_nav_container sidebar_slider_nav_container">
                                    <div class="custom_prev custom_prev_vid">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                            <polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
                                        </svg>
                                    </div>
                                    <ul id="custom_dots" class="custom_dots custom_dots_vid">
                                        <li class="custom_dot custom_dot_vid active"><span></span></li>
                                        <li class="custom_dot custom_dot_vid"><span></span></li>
                                        <li class="custom_dot custom_dot_vid"><span></span></li>
                                    </ul>
                                    <div class="custom_next custom_next_vid">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                            <polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_section_content">

                            <!-- Sidebar Slider -->
                            <div class="sidebar_slider_container">
                                <div class="owl-carousel owl-theme sidebar_slider_vid">

                                    <!-- Newest Videos Slider Item -->
                                    <div class="owl-item">

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_1.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_2.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_3.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_4.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Newest Videos Slider Item -->
                                    <div class="owl-item">

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_1.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_2.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_3.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_4.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Newest Videos Slider Item -->
                                    <div class="owl-item">

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_1.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_2.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_3.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Newest Videos Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="side_post_image"><div><img src="images/vid_4.jpg" alt=""></div></div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advertising 2 -->

                    <div class="sidebar_section">
                        <div class="advertising_2">
                            <div class="advertising_background" style="background-image:url(images/post_18.jpg)"></div>
                            <div class="advertising_2_content d-flex flex-column align-items-center justify-content-center">
                                <div class="advertising_2_link"><a href="#">Turbulent <span>Mind</span></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Future Events -->

                    <div class="sidebar_section future_events">
                        <div class="sidebar_title_container">
                            <div class="sidebar_title">Future Events</div>
                            <div class="sidebar_slider_nav">
                                <div class="custom_nav_container sidebar_slider_nav_container">
                                    <div class="custom_prev custom_prev_events">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                            <polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
                                        </svg>
                                    </div>
                                    <ul id="custom_dots" class="custom_dots custom_dots_events">
                                        <li class="custom_dot custom_dot_events active"><span></span></li>
                                        <li class="custom_dot custom_dot_events"><span></span></li>
                                        <li class="custom_dot custom_dot_events"><span></span></li>
                                    </ul>
                                    <div class="custom_next custom_next_events">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
                                            <polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_section_content">

                            <!-- Sidebar Slider -->
                            <div class="sidebar_slider_container">
                                <div class="owl-carousel owl-theme sidebar_slider_events">

                                    <!-- Future Events Slider Item -->
                                    <div class="owl-item">

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">13</div>
                                                        <div class="event_month">apr</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">27</div>
                                                        <div class="event_month">apr</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">02</div>
                                                        <div class="event_month">may</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">09</div>
                                                        <div class="event_month">may</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Future Events Slider Item -->
                                    <div class="owl-item">

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">13</div>
                                                        <div class="event_month">apr</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">27</div>
                                                        <div class="event_month">apr</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">02</div>
                                                        <div class="event_month">may</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">09</div>
                                                        <div class="event_month">may</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <!-- Future Events Slider Item -->
                                    <div class="owl-item">

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">13</div>
                                                        <div class="event_month">apr</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">27</div>
                                                        <div class="event_month">apr</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">02</div>
                                                        <div class="event_month">may</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Future Events Post -->
                                        <div class="side_post">
                                            <a href="post.html">
                                                <div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
                                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                                        <div class="event_day">09</div>
                                                        <div class="event_month">may</div>
                                                    </div>
                                                    <div class="side_post_content">
                                                        <div class="side_post_title">How Did van Gogh’s Turbulent Mind</div>
                                                        <small class="post_meta">Katy Liu<span>Sep 29</span></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}

        </div>
    </div>


</div>

@endsection
