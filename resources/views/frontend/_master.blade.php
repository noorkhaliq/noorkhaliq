<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="theme-color" content="#3ed2a7">
    <title>
        شركة الأمير للاستشارات الهندسية
    </title>
    <meta name="description" content="شركة الأمير للاستشارات الهندسية">
    <meta name="keywords" content="شركة الأمير للاستشارات الهندسية">
    <meta name="distribution" content="global">
    <meta name="author" content="شركة الأمير للاستشارات الهندسية">
    <!-- Open Graph protocol -->
    <meta property="og:title" content="شركة الأمير للاستشارات الهندسية"/>
    <meta property="og:type" content="Media Website"/>
    <meta property="og:url" content="http://www.alamircon.com/"/>
    <meta property="og:image" content="{{asset('amirimages')}}/favicon/favicon.png"/>
    <meta property="og:site_name" content="شركة الأمير للاستشارات الهندسية"/>
    <meta property="og:description" content="هنا توضع نبذة عن الموقع أو الصفحة الداخلية"/>
    <!-- Favicons -->
    <link rel="shortcut icon" type='image/x-icon' href="{{asset('amirimages')}}/favicon/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('amirimages')}}/favicon/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('amirimages')}}/favicon/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('amirimages')}}/favicon/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('amirimages')}}/favicon/apple-touch-icon-precomposed.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('amir')}}/css/style.css" />
    <script async src="{{asset('amir')}}/vendors/modernizr.min.js"></script>

</head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="minimal" data-mobile-nav-shceme="gray" data-mobile-nav-breakpoint="1199">

<div id="wrap" >
    @inject('frontControllerObject' ,'\App\Http\Controllers\FrontController' )
    <header class="main-header main-header-overlay " data-sticky-header="true">
        <div class="mainbar-wrap">
            <div class="container mainbar-container">
                <div class="row mainbar-row align-items-lg-stretch px-4" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "opacity":0}, "animations":{"translateY":0, "opacity":1} }'>
                    <div class="col">
                        <div class="BrandCol">
                            <a class="MainBrand" href="#" rel="home">
                                <img src="{{asset('amirimages')}}/main-logo.svg" alt="شركة الأمير للاستشارات الهندسية">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-center"  data-localscroll="true">
                            <li  @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'front.index')class="is-active"@endif><a href="{{route('front.index')}}"> <span>الرئيسة</span></a></li>
                            <li @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'front.blogs')class="is-active"@endif><a href="{{route('front.blogs' )}}"><span>جديد الشركة</span></a></li>
                            <li @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'front.projects')class="is-active"@endif class="menu-item-has-children">
                                <a href="{{route('front.projects')}}">
									<span class="link-txt">
										<span class="txt"> مشاريعنا <span class="submenu-expander"> <i class="fa fa-angle-down"></i> </span> </span>
									</span>
                                </a>
                                <ul class="nav-item-children">
                                    @foreach($frontControllerObject->projectList() as $category)
                                    <li >
                                        <a href="{{route('front.projects').'?cat='.($category->id==request('cat')?'':$category->id)}}">{{$category->category_title}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @foreach($frontControllerObject->pagesList()  as $page)
                            <li @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'front.about')class="is-active"@endif>
                                <a href="{{ route('front.about' , $page->id) }}"> <span>عن الشركة</span></a>
                            </li>
                              @endforeach
                        </ul>
                    </div><!-- /.col -->

                    <div class="col text-right">
                        <div class=" d-flex align-items-center">
                            <ul class="social-icon branded-text round social-icon-sm font-size-20 mr-3 ml-3">
                                @php
                                    $socials = $frontControllerObject->getFacebookLinks();
                                @endphp
                                @foreach($socials as $social)
                                    <li><a href="{{$social->value}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                @endforeach
                                @php
                                    $socials = $frontControllerObject->getInstagramLinks();
                                @endphp
                                @foreach($socials as $social)
                                    <li><a href="{{$social->value}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                @endforeach
                                @php
                                    $socials = $frontControllerObject->getYoutubeLinks();
                                @endphp
                                @foreach($socials as $social)
                                    <li><a href="{{$social->value}}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                @endforeach
                            </ul>
                            @php
                                $socials = $frontControllerObject->getWhatappLinks();
                            @endphp
                            @foreach($socials as $social)
                                <a href="{{$social->value}}" class="btn btn-solid btn-sm round bg-whatsapp font-weight-medium">
                                    <span><span class="btn-icon"><i class="fa fa-whatsapp font-size-20"></i></span></span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
{{--    //mobile header--}}
    <header id="MobHeader" class="searchActive3">
        <div class="HeaderTop" >
            <div class="d-flex" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "opacity":0}, "animations":{"translateY":0, "opacity":1} }'>
                <div class="MobHeader-LSide d-flex">
                    <div class="MobHeader-ico">
                        <a class="MobHeader-link" data-toggle="modal" data-target="#MobMenu"><i class="fa fa-bars headerIcosizeFix"></i></a>
                    </div>
                </div>
                <div class="MobHeader-title">
                    <a href="index.html" class="MobHeader-link">
                        <img src="{{asset('amirimages')}}/main-logo.svg" class="logo-dark" height="50">
                    </a>
                </div>
                <div class="MobHeader-RSide d-flex">
                    <div class="MobHeader-ico">
                        <a href="https://api.whatsapp.com/send?phone=971502794830" class="mainMenuTrigger toggle MobHeader-link dropdown-toggle">
                            <i class="fa fa-whatsapp headerIcosizeFix text-whatsapp"></i>
                        </a>
                    </div>
                    <div class="MobHeader-ico">
                        <a href="tel:+971502794830" class="mainMenuTrigger toggle MobHeader-link dropdown-toggle">
                            <i class="fa fa-phone headerIcosizeFix text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@yield('mainContent')
    <footer class="main-footer bg-white" data-sticky-footer="true" >
        <section class="pt-50">
            <div class="container">
                <div class="row">
                    <div class="lqd-column col-md-2 text-center">
                        <div class="mb-15">
                            <img src="{{asset('amirimages')}}/foot-logo.svg" width="150">
                        </div>
                    </div>
                    <div class="lqd-column col-md-6">
                        <ul class="main-nav foot-inline-nav" data-localscroll="true">
                            <li class="is-active"><a href="#content"> <span>الرئيسة</span></a></li>
                            <li><a href="#OurService"><span>خدماتنا</span></a></li>
                            <li><a href="#recent-news"><span>جديد الشركة</span></a></li>
                            <li><a href="#about"> <span>عن الشركة</span></a></li>
                            <li><a href="#Projects"><span>مشاريعنا</span></a></li>
                            <li><a href="#contact"><span>تواصل معنا</span></a></li>
                        </ul>
                        <h4 class="strong6 ">عن الموقع</h4>
                        @php
                            $socials = $frontControllerObject->getAddressLinks();
                        @endphp
                        @foreach($socials as $social)
                            <p>{{$social->value}}</p>
                        @endforeach
                        <ul class="social-icon branded round social-icon-sm mb-30">
                            @php
                                $socials = $frontControllerObject->getFacebookLinks();
                            @endphp
                            @foreach($socials as $social)
                                <li><a href="{{$social->value}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            @endforeach
                            @php
                                $socials = $frontControllerObject->getInstagramLinks();
                            @endphp
                            @foreach($socials as $social)
                                <li><a href="{{$social->value}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            @endforeach
                            @php
                                $socials = $frontControllerObject->getYoutubeLinks();
                            @endphp
                            @foreach($socials as $social)
                                <li><a href="{{$social->value}}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="lqd-column col-md-3 ">
                        <h4 class="strong6">التواصل</h4>
                        <p>
                            @php
                                $socials = $frontControllerObject->getPoLinks();
                            @endphp
                            @foreach($socials as $social)
                                {{$social->value}} <br>
                            @endforeach
                        @php
                            $socials = $frontControllerObject->getPhoneLinks();
                        @endphp
                        @foreach($socials as $social)
                                Tel : <a href="tel:0097142205250">{{$social->value}}</a> <br>
                        @endforeach
                            @php
                                $socials = $frontControllerObject->getEmailLinks();
                            @endphp
                            @foreach($socials as $social)
                                Email : <a href="www.alamircon.com">{{$social->value}}</a>
                            @endforeach
                        </p>
                    </div><!-- /.col-md-3 col-sm-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="bg-primary pt-25 pb-25 mt-50">
            <div class="container text-center">
                <p class="mb-0 text-white mb-xs-15 d-block-xs"> حقوق النشر ©  www.alamircon.com {{ now()->format('Y') }}
                    ، جميع الحقوق محفوظة

                    @php
                        $socials = $frontControllerObject->getTermsLinks();
                    @endphp
                    @foreach($socials as $social)
                        <a class="text-white" href="{{ route('front.about' , $social->id) }}"> <span>سياسة الخصوصية</span></a> |
                    @endforeach

                    @php
                        $socials = $frontControllerObject->getPolicyLinks();
                    @endphp
                    @foreach($socials as $social)
                        <a class="text-white" href="{{ route('front.about' , $social->id) }}"> <span>الأحكام والشروط</span></a>
                    @endforeach
            </div><!-- /.container -->
        </section>
    </footer><!-- /.main-footer -->
</div><!-- /#wrap -->
{{--mobile-footer--}}
<div class="modal fade MobMenu" id="MobMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <a class="AmirHeader-btn close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </a>
    <div class="modal-dialog" role="document">

        <div class="MainSec-mob">
            <div class="MainSec-mob-logo">
                <img src="{{asset('amirimages')}}/main-logo.svg">
            </div>
            <ul class="main-nav nav " data-localscroll="true">
                <li class="is-active"><a href="#content"> <span>الرئيسة</span></a></li>
                <li><a href="#OurService"><span>خدماتنا</span></a></li>
                <li><a href="#recent-news"><span>جديد الشركة</span></a></li>
                <li><a href="#about"> <span>عن الشركة</span></a></li>
                <li><a href="#Projects"><span>مشاريعنا</span></a></li>
                <li><a href="#contact"><span>تواصل معنا</span></a></li>

            </ul>

            <ul class="social-icon branded round social-icon-sm mb-30 p-15">
                <li><a href="https://www.facebook.com/AlAmir.Engineering.Consultants" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/alamir_engineering_consultants" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCwrSVLGoWjbDMqr-Sw46dMQ" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
            </ul>

        </div>



    </div>
</div>

<script src="{{asset('amir')}}/js/vendors.min.js"></script>
<script src="{{asset('amir')}}/js/main.min.js"></script>

</body>
</html>
