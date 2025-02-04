@extends('layouts.main.index')

@section('content')
<div class="col-lg-9">
    <div class="post_content">

        <!-- Top Panel -->
        <div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
            <div class="author_image"><div><img src="images/author.jpg" alt=""></div></div>
            <div class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></div>
            <div class="post_share ml-sm-auto">
                <span>share</span>
                <ul class="post_share_list">
                    <li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Post Body -->

        <div class="post_body">
            <p class="post_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec, accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies magna pharetra. In ut odio a ligula egestas pretium et quis sapien. Etiam faucibus magna eu porta vulputate. Aliquam euismod rhoncus malesuada. Nunc rutrum hendrerit semper.</p>
            <figure>
                <img src="images/post_image.jpg" alt="">
                <figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>
            </figure>
            <p class="post_p">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>
            <div class="post_quote">
                <p class="post_p">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>
                <div class="post_quote_source">Robert Morgan</div>
            </div>
            <p class="post_p">Donec orci dolor, pretium in luctus id, consequat vitae nibh. Quisque hendrerit, lorem sit amet mollis malesuada, urna orci volutpat ex, sed scelerisque nunc velit et massa. Sed maximus id erat vel feugiat. Phasellus bibendum nisi non urna bibendum elementum. Aenean tincidunt nibh vitae ex facilisis ultrices. Integer ornare efficitur ultrices. Integer neque lectus, venenatis at pulvinar quis, aliquet id neque. Mauris ultrices consequat velit, sed dignissim elit posuere in. Cras vitae dictum dui.</p>

            <!-- Post Tags -->
            <div class="post_tags">
                <ul>
                    <li class="post_tag"><a href="#">Liberty</a></li>
                    <li class="post_tag"><a href="#">Manual</a></li>
                    <li class="post_tag"><a href="#">Interpretation</a></li>
                    <li class="post_tag"><a href="#">Recommendation</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Panel -->
        <div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
            <div class="author_image"><div><img src="images/author.jpg" alt=""></div></div>
            <div class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></div>
            <div class="post_share ml-sm-auto">
                <span>share</span>
                <ul class="post_share_list">
                    <li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- Similar Posts -->
        <div class="similar_posts">
            <div class="grid clearfix">

                <!-- Small Card With Image -->
                <div class="card card_small_with_image grid-item">
                    <img class="card-img-top" src="images/post_25.jpg" alt="https://unsplash.com/@jakobowens1">
                    <div class="card-body">
                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                    </div>
                </div>

                <!-- Small Card With Image -->
                <div class="card card_small_with_image grid-item">
                    <img class="card-img-top" src="images/post_2.jpg" alt="https://unsplash.com/@jakobowens1">
                    <div class="card-body">
                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                    </div>
                </div>

                <!-- Small Card With Image -->
                <div class="card card_small_with_image grid-item">
                    <img class="card-img-top" src="images/post_26.jpg" alt="https://unsplash.com/@jakobowens1">
                    <div class="card-body">
                        <div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
                        <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                    </div>
                </div>

            </div>

            <!-- Post Comment -->
            {{-- <div class="post_comment">
                <div class="post_comment_title">Post Comment</div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="post_comment_form_container">
                            <form action="#">
                                <input type="text" class="comment_input comment_input_name" placeholder="Your Name" required="required">
                                <input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required">
                                <textarea class="comment_text" placeholder="Your Comment" required="required"></textarea>
                                <button type="submit" class="comment_button">Post Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Comments -->
            {{-- <div class="comments">
                <div class="comments_title">Comments <span>(12)</span></div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="comments_container">
                            <ul class="comment_list">
                                <li class="comment">
                                    <div class="comment_body">
                                        <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                            <div class="comment_author_image"><div><img src="images/comment_author_1.jpg" alt=""></div></div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                            <button type="button" class="reply_button ml-auto">Reply</button>
                                        </div>
                                        <div class="comment_content">
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
                                        </div>
                                    </div>

                                    <!-- Reply -->
                                    <ul class="comment_list">
                                        <li class="comment">
                                            <div class="comment_body">
                                                <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                                    <div class="comment_author_image"><div><img src="images/comment_author_2.jpg" alt=""></div></div>
                                                    <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                                    <button type="button" class="reply_button ml-auto">Reply</button>
                                                </div>
                                                <div class="comment_content">
                                                    <p>Nulla facilisi. Aenean porttitor quis tortor id tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus molestie varius tincidunt. Vestibulum congue sed libero ac sodales.</p>
                                                </div>
                                            </div>

                                            <!-- Reply -->
                                            <ul class="comment_list">

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment">
                                    <div class="comment_body">
                                        <div class="comment_panel d-flex flex-row align-items-center justify-content-start">
                                            <div class="comment_author_image"><div><img src="images/comment_author_1.jpg" alt=""></div></div>
                                            <small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
                                            <button type="button" class="reply_button ml-auto">Reply</button>
                                        </div>
                                        <div class="comment_content">
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="load_more">
        <div id="load_more" class="load_more_button text-center trans_200">Load More</div>
    </div>
</div>
@endsection
