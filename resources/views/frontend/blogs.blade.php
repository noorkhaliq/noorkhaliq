@extends('frontend._master')
@section('mainContent')
<main id="content" class="content" >
    <section class="bg-fixed lqd-css-sticky bg-cover mb-0" style="background-image: url({{asset('amirimages')}}/slide-3.jpg);">
        <div class="liquid-row-overlay bg-fade-dark-05"></div>
        <div class="container MainContainer pt-100 pb-100">
            <div class="row">
                <div class="lqd-column col-md-12 text-center pt-100 ">
                    <div class="ld-fancy-heading" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"2500", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":60, "translateZ":160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                        <ol class="breadcrumb reset-ul inline-nav comma-sep-li text-white" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"2500", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "translateZ":-160, "rotateX":-84, "opacity":0}, "animations":{"translateY":0, "translateZ":0, "rotateX":0, "opacity":1} }'>
                            <li class="breadcrumb-item"><a href="{{route('front.index')}}"><span>الرئيسية</span></a></li>
                            <li class="breadcrumb-item active"><span>أنت هنا فى هذه الصفحة</span></li>
                        </ol>
                    </div><!-- /.ld-fancy-heading -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="vc_row bg-light">
        <div class="container">
            <div class="MainArticle bg-fade-white-095 border-radius-10 p-5 box-shadow-1 mb-50" style="margin-top: -100px" >
                <div class="liquid-blog-grid row" data-liquid-masonry="true">
                    @foreach($blogs as $blog)
                    <div class="masonry-item col-sm-6 col-md-3 px-2">
                        <div class="fancy-box content-box-heading-sm fancy-box-tour">
                            <a href="{{route('front.blog_list' , $blog->id)}}" class="fancy-box-image loaded">
                                <img src="{{ asset('uploads/'.$blog->image) }}" alt="هنا عنوان المقال">
                            </a>
                            <div class="fancy-box-contents">
                                <a href="{{route('front.blog_list' , $blog->id)}}" class="d-block mb-3">
                                    <h3 class=" font-weight-semibold">{{$blog->title}}</h3>
                                </a><!-- /.fancy-box-header -->
                                <div >
                                    <p>{{\Illuminate\Support\Str::words(strip_tags($blog->description) , 10)}}</p>
                                </div><!-- /.fancy-box-info -->
                            </div><!-- /.fancy-box-contents -->
                            <div class="fancy-box-footer">
                                <span><i class="icon-basic_calendar"></i> {{$blog->created_at->today()}}</span>
                                <span class="fancy-box-icon"><i class="icon-liquid_arrow_right"></i></span>
                            </div><!-- /.fancy-box-footer -->
                        </div><!-- /.fancy-box -->
                    </div><!-- /.carousel-item col-sm-6 col-md-4 -->
                    @endforeach
                </div>
                <footer class="text-center">
                    <div class="page-nav">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                {{$blogs->links()}}
                            </ul>
                        </nav>
                    </div>
                </footer>
            </div>
        </div>
    </section>
</main>
@endsection
