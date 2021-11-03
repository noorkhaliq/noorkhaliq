@extends('frontend._master')
@section('mainContent')
<main id="content" class="content" >
    <div class="blog-single-cover scheme-light" data-fullheight="true" data-inview="true" data-inview-options='{ "onImagesLoaded": true }' style="background-color: #666871;">
        <figure class="blog-single-media" data-responsive-bg="true" data-parallax="true" data-parallax-options='{ "parallaxBG": true, "triggerHook": "onLeave" }' data-parallax-from='{ "translateY": "0%" }' data-parallax-to='{ "translateY": "60%" }'>
            <img src="{{ asset('uploads/'.$blogs->image) }}" alt="Blog single">
        </figure>
        <div class="blog-single-details">
            <div class="text-center">
                <ol class="breadcrumb reset-ul inline-nav comma-sep-li text-white" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"2500", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                    <li class="breadcrumb-item active"><a href="{{route('front.blogs')}}"><span>جديد الشركة</span></a></li>
                    <li class="blog-single-title text-white entry-title h2 strong6" data-split-text="true" data-split-options='{ "type": "lines" }'>{{$blogs->title }} </li>
                </ol>
            </div><!-- /.row -->
        </div><!-- /.blog-single-details -->
    </div><!-- /.blog-single-cover -->
    <article class="blog-single bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! $blogs->description !!}
<!-- /.blog-single-content entry-content -->


{{--                    <nav class="post-nav">--}}

{{--                        <div class="nav-previous">--}}
{{--                            <a href="#" rel="prev">--}}
{{--                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444" stroke-width="2" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" width="24" height="24">--}}
{{--											<g>--}}
{{--                                                <line stroke-miterlimit="10" x1="22" y1="12" x2="2" y2="12" stroke-linejoin="miter" stroke-linecap="butt"></line>--}}
{{--                                                <polyline stroke-linecap="square" stroke-miterlimit="10" points="9,19 2,12 9,5 " stroke-linejoin="miter"></polyline>--}}
{{--                                            </g>--}}
{{--										</svg>--}}
{{--                                <span class="screen-reader-text">المقال السابق</span>--}}
{{--                                <span aria-hidden="true" class="nav-subtitle">المقال السابق</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="nav-next">--}}
{{--                            <a href="#" rel="next">--}}
{{--                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444" stroke-width="2" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" width="24" height="24">--}}
{{--											<g transform="rotate(180 12,12) ">--}}
{{--                                                <line stroke-miterlimit="10" x1="22" y1="12" x2="2" y2="12" stroke-linejoin="miter" stroke-linecap="butt"></line>--}}
{{--                                                <polyline stroke-linecap="square" stroke-miterlimit="10" points="9,19 2,12 9,5 " stroke-linejoin="miter"></polyline>--}}
{{--                                            </g>--}}
{{--										</svg>--}}
{{--                                <span class="screen-reader-text">المقال التالي</span>--}}
{{--                                <span aria-hidden="true" class="nav-subtitle">المقال التالي</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                    </nav><!-- /.post-nav -->--}}
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </article><!-- /.blog-single -->

    <div class="blog-single-content entry-content pull-up expanded">
        <footer class="text-center">
            <div class="page-nav">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                    </ul>
                </nav>
            </div>
        </footer>
        <!-- /.blog-single-footer entry-footer -->
    </div>
</main>
@endsection
