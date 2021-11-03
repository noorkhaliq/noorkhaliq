@extends('frontend._master')
@section('mainContent')
<body class="InnerPage" data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="minimal" data-mobile-nav-shceme="gray" data-mobile-nav-breakpoint="1199">
<div id="wrap" >
    <main id="content" class="content" >
        <div class="blog-single-cover scheme-light" data-fullheight="true" data-inview="true" data-inview-options='{ "onImagesLoaded": true }' style="background-color: #666871;">
            <figure class="blog-single-media" data-responsive-bg="true" data-parallax="true" data-parallax-options='{ "parallaxBG": true, "triggerHook": "onLeave" }' data-parallax-from='{ "translateY": "0%" }' data-parallax-to='{ "translateY": "60%" }'>
                <img src="{{asset('amirimages')}}/profile/villa/1.jpg" alt="Blog single">
            </figure>
            <div class="blog-single-details">
                <div class="text-center">
                    <h1 class="blog-single-title entry-title h2 strong6" data-split-text="true" data-split-options='{ "type": "lines" }'>
                    {{$page->title}}</h1>
                </div><!-- /.row -->
            </div><!-- /.blog-single-details -->
        </div><!-- /.blog-single-cover -->
        <article class="blog-single bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="blog-single-content entry-content pull-up expanded">
                            {!! $page->content !!}
                        </div><!-- /.blog-single-content entry-content -->
                    </div><!-- /.col-md-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </article><!-- /.blog-single -->
    </main>
</div><!-- /#wrap -->
</body>
@endsection
