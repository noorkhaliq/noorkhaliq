@extends('frontend._master')
@section('mainContent')
    <main id="content" class="content" >
        <section
            class="MainSlider lqd-css-sticky bg-cover bg-center d-flex flex-wrap" style="height: 100vh" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1500", "delay":"900", "easing":"easeOutQuint", "direction":"forward", "initValues":{ "opacity":0}, "animations":{ "opacity":1} }'
            data-row-bg="true" data-animate-onscroll="true" data-animate-from='{"opacity":1}' data-animate-to='{"opacity":0}' data-slideshow-bg="true"
            data-slideshow-options='{"effect":"fade","imageArray":["{{asset('amirimages')}}/slide-1.jpg","{{asset('amirimages')}}/slide-3.jpg","{{asset('amirimages')}}/slide-2.jpg"]}'>
            <div class="slider-bg-curve"></div>
            <div class="container">
                <div class="MainMessage" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1500", "delay":"600", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "opacity":0}, "animations":{"translateY":0, "opacity":1} }'>
                    <div>
                        <div class="strong6" data-fittext="true" data-fittext-options='{"compressor":0.675,"maxFontSize":"18","minFontSize":"14"}' data-split-text="true" data-split-options='{ "type": "lines" }' data-text-rotator="true">
							<span class="">
								<span class="txt-rotate-keywords">
									<span class="keyword active">هل تتطلَّع إلى بناء منزل أحلامك؟</span>
									<span class="keyword">هل تبحث عن تصميمٍ مميزٍ يلبِّي طموحاتك؟</span>
								</span>
							</span>
                        </div>
                    </div>
                    <h1 class="h2 strong6 color-primary mt-2 mb-2">شركة الأمير للاستشارات الهندسية</h1>
                    <h3 class="strong6 h4 text-secondary mt-0">نصممُ بابتكار.. بعيداً عن التكرار</h3>
                    <p class="text-dark strong6">تقدم لكم شركة الأمير تصاميمَ معماريةً مميزة وديكورات داخلية فريدة
                        بالإضافة للإشراف الهندسي الفعال على كافة أنواع المباني، بخبرة هندسية تتجاوز 25 سنة
                    </p>
                    <p class="mt-3 strong6">
                        <span>للاستفسار يرجى الاتصال على الرقم: </span>
                        <a href="tel:+971502794830" class="text-primary ltr">0502794830</a>
                        <span>أو على</span>
                        <a href="https://api.whatsapp.com/send?phone=971502794830" class="text-whatsapp">واتساب</a>
                    </p>
                    <div class=" d-flex align-items-center">
                        <a href="#" class="btn btn-solid btn-sm btn-bordered-gradient-primary round strong6">
                            <span><span class="btn-text">عن الشركة</span></span>
                        </a>
                        <a href="https://youtu.be/8VSOsh7BctQ" class="btn btn-solid btn-sm round bg-youtube strong6 fresco">
								<span>
									<span class="btn-icon"><i class="fa fa-youtube ml-2"></i></span>
									<span class="btn-text">فيديو تعريفي</span>
								</span>
                        </a>
                    </div><!-- /.header-module -->
                </div>
            </div>
            <span class="row-bg-loader"></span>
        </section>
        <section  class="ligher-bg pb-30 z-9" style="margin-top: -40px">
            <div class="container">
                <div class="row">
                    <div class="lqd-column col-md-10 col-md-offset-1 text-center" >
                        <div class="box bg-white box-shadow-1 p-3 round" >
                            <h2 class=" Round-title font-size-22 strong6 bg-secondary text-white ">حقائق عن الشركة</h2>
                            <div class="row">
                                <div class="lqd-column col-md-3 col-sm-6 text-center">
                                    <div class="liquid-counter">
                                        <div class="liquid-counter-element text-primary font-size-60" data-enable-counter="true" data-counter-options='{ "targetNumber": "25", "blurEffect": true }'>
                                            <span>25</span>
                                        </div><!-- /.liquid-counter-element -->
                                        <span class="liquid-counter-text strong6 font-size-16">
											سنة من الخبرات العملية للمهندسين
										</span>
                                    </div>
                                </div><!-- /.col-md-3 -->
                                <div class="lqd-column col-md-3 col-sm-6 text-center">
                                    <div class="liquid-counter">
                                        <div class="liquid-counter-element text-primary font-size-60" data-enable-counter="true" data-counter-options='{ "targetNumber": "5 ", "blurEffect": true }'>
                                            <span>5</span>
                                        </div><!-- /.liquid-counter-element -->
                                        <span class="liquid-counter-text strong6 font-size-16">
											نجوم تصنيف من قبل بلدية دبي
										</span>
                                    </div>
                                </div><!-- /.col-md-3 -->
                                <div class="lqd-column col-md-3 col-sm-6 text-center">
                                    <div class="liquid-counter">
                                        <div class="liquid-counter-element text-primary font-size-60" data-enable-counter="true" data-counter-options='{ "targetNumber": "100", "blurEffect": true }'>
                                            <span>100</span>
                                        </div><!-- /.liquid-counter-element -->
                                        <span class="liquid-counter-text strong6 font-size-16">
											مشروع تم إنجازها خلال السنوات الخمس الأخيرة
										</span>
                                    </div>
                                </div><!-- /.col-md-3 -->
                                <div class="lqd-column col-md-3 col-sm-6 text-center">
                                    <div class="liquid-counter">
                                        <div class="liquid-counter-element text-primary font-size-60" data-enable-counter="true" data-counter-options='{ "targetNumber": "100", "blurEffect": true }'>
                                            <span>100</span>
                                        </div><!-- /.liquid-counter-element -->
                                        <span class="liquid-counter-text strong6 font-size-16">
											مشروع قيد الإنشاء الأن
										</span>
                                    </div>
                                </div><!-- /.col-md-3 -->
                            </div><!-- /.row -->
                            <p class="strong6 text-primary font-size-20">بالاضافة الى تكريم الشركة من عدة جهات حكومية داخل الإمارات</p>
                            <div class="text-center">
                                <ul class="inline-nav thumbs-img">
                                    <li><a href="{{asset('amirimages')}}/honoring/amir-honoring-1.jpg" class="fresco" data-fresco-group="honoring"><img class="thumb-img" src="{{asset('amirimages')}}/honoring/amir-honoring-1-thumb.jpg"></a></li>
                                    <li><a href="{{asset('amirimages')}}/honoring/amir-honoring-2.jpg" class="fresco" data-fresco-group="honoring"><img class="thumb-img" src="{{asset('amirimages')}}/honoring/amir-honoring-2-thumb.jpg"></a></li>
                                    <li><a href="{{asset('amirimages')}}/honoring/amir-honoring-3.jpg" class="fresco" data-fresco-group="honoring"><img class="thumb-img" src="{{asset('amirimages')}}/honoring/amir-honoring-3-thumb.jpg"></a></li>
                                    <li><a href="{{asset('amirimages')}}/honoring/amir-honoring-4.jpg" class="fresco" data-fresco-group="honoring"><img class="thumb-img" src="{{asset('amirimages')}}/honoring/amir-honoring-4-thumb.jpg"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>

        <section class="bg-light pt-70 pb-70 z-9" id="OurService">
            <div class="container" >
                <div class="row mb-4">
                    <div class="lqd-column col-md-10 col-md-offset-1 text-center" >
                        <p class="mb-4 font-size-20 strong6">شركة الأمير للاستشارات الهندسية من الشركات الرائدة التي تأسست في دولة الإمارات العربية المتحدة وهي متخصصة في جميع أنواع المباني السكنية والتجارية والصناعية ولديها الخبرة الكافية في المشاريع الكبيرة والصغيرة بخبرة مهندسين تتجاوز 25 سنة</p>
                    </div>
                </div>
                <div class="row" >
                    <div class="lqd-column col-md-10 col-md-offset-1">
                        <header class="fancy-title text-center mb-60" >
                            <h2 class="mb-4 font-size-32 color-primary strong6">خدمات متميزة </h2>
                            <p class="font-size-20">تقدم شركة الأمير للاستشارات الهندسية خدمات استشارية متميزة تفوق توقعات عملائنا من خلال: اعتماد المنهجيات الهندسية المثلى والحلول ذات القيمة العالية والفعالة من حيث التكلفة بما يتوافق مع أحدث القوانين والمعايير الدولية والمحلية للتصميم.</p>
                        </header>
                    </div><!-- /.lqd-column col-md-12 -->
                </div><!-- /.row -->
                <div class="row mx-md-0" data-custom-animations="true" data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "opacity":0}, "animations":{"translateY":0, "opacity":1} }'>
                    @foreach($service as $services)
                    <div class="col-md-6">
                        <div class="fancy-box fancy-icon-box fancy-box-case-study" data-hover3d="true">
                            <div class="iconbox iconbox-side iconbox-round iconbox-shadow iconbox-heading-sm iconbox-filled iconbox-filled  iconbox-has-fill-element" data-stacking-factor="1"  >
                                <div class="iconbox-icon-wrap" style="width: 70px">
									<span class="iconbox-icon-container">
										<svg style="height: 40px" viewBox="0 0 238 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<g id="3650534" fill-rule="nonzero">
													<path d="M153.234,178.43 L167.734,257.09 L15.524,409.3 L36.574,295.09 L153.234,178.43 Z M137.514,93.14 L237.046,335.789 L189.442,374.875 L167.734,257.09 L153.234,178.43 L137.514,93.14 Z" id="Combined-Shape" fill="#A3C12F"></path>
													<path d="M210.188,432.268 L148.096,95.388 L175.236,45.39 C177.353,41.491 176.647,36.663 173.503,33.532 L142.745,2.912 C140.871,1.047 138.335,-2.84217094e-14 135.691,-2.84217094e-14 L75.618,-2.84217094e-14 C72.973,-2.84217094e-14 70.437,1.047 68.563,2.913 L37.805,33.533 C34.66,36.663 33.955,41.491 36.072,45.391 L63.212,95.388 L1.12,432.266 C0.417,436.076 1.978,439.948 5.126,442.206 L99.826,510.126 C101.568,511.375 103.611,512 105.654,512 C107.697,512 109.74,511.375 111.482,510.126 L206.182,442.206 C209.329,439.949 210.89,436.077 210.188,432.268 Z M82.119,103.14 L129.188,103.14 L130.225,108.767 L69.977,169.016 L82.119,103.14 Z M79.746,20 L131.561,20 L154.088,42.426 L131.987,83.138 L79.317,83.138 L57.217,42.426 L79.746,20 Z M63.586,203.691 L134.627,132.649 L168.915,318.681 L42.905,444.69 L21.938,429.652 L63.586,203.691 Z M105.654,489.694 L59.377,456.504 L173.318,342.564 L189.37,429.652 L105.654,489.694 Z" id="Shape" fill="#020288"></path>
												</g>
											</g>
										</svg>
									</span>
                                </div><!-- /.iconbox-icon-wrap -->
                                <div class="contents">
                                    <h3 class="font-weight-semibold font-size-22 mt-0 mb-10 color-primary">{{$services->title}}</h3>
                                    <p>{!! $services->text !!}</p>
                                </div><!-- /.contents -->
                            </div><!-- /.iconbox -->
                        </div><!-- /.iconbox -->
                    </div>
                    @endforeach
                </div><!-- /.row mx-md-0 -->
            </div><!-- /.container -->
        </section>

        <section class="bg-white pt-70 pb-70 z-9" id="recent-news">
            <div class="container" >
                <header class="fancy-title text-center mb-30" >
                    <h2 class="mb-4 font-size-32 color-primary strong6">جديد الشركة </h2>
                    <p class="font-size-20">لشركة الأمير للاستشارات الهندسية العديد من المشاريع الجديدة التي تغطي كافة مناطق إمارة دبي</p>
                </header>
                <div class="carousel-container carousel-nav-floated carousel-nav-center carousel-nav-middle carousel-nav-md carousel-nav-solid carousel-nav-rectangle carousel-nav-shadowed carousel-dots-style1">
                    <div class="carousel-items row mx-0" data-lqd-flickity='{"cellAlign":"center","prevNextButtons":true,"buttonsAppendTo":"self","pageDots":false,"groupCells":true,"wrapAround":true,"pauseAutoPlayOnHover":false,"navArrow":"1","navOffsets":{"nav":{"top":"25%"},"prev":"-13px","next":"-13px"}}'>
                        @foreach($blogs as $blog)
                            <div class="carousel-item col-sm-6 col-md-3 px-2">
                                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                                    <a href="post.html" class="fancy-box-image loaded">
                                        <img src="{{ asset('uploads/'.$blog->image) }}" alt="هنا عنوان المقال">
                                    </a>
                                    <div class="fancy-box-contents">
                                        <a href="post.html" class="d-block mb-3">
                                            <h3 class="font-weight-semibold">{{$blog->title}}</h3>
                                        </a><!-- /.fancy-box-header -->
                                        <div class="fancy-box-info">
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
                    </div><!-- /.carousel-items -->
                </div>
            </div>
        </section>
        <section class="bg-white pt-70 pb-70 z-9" id="Projects">
            <div class="container" >
                <header class="fancy-title text-center mb-30" >
                    <h2 class="mb-4 font-size-32 color-primary strong6">مشاريع شركة الأمير للاستشارات الهندسية </h2>
                    <p class="font-size-20">تنتشر مشاريعنا في كافة أنحاء إمارة دبي و نطمح للتوسع في كافة إمارات الدولة لتكون شركة الأمير للاستشارات الهندسية رائدة في تقديم خدمات الاستشارات الهندسية ذات المستوى العالمي مع التأكيد على تقديم أعلى معايير الجودة والعمل المهني بما يحقق النمو التدريجي للشركة وتوسعها</p>
                </header>
                <div class="liquid-portfolio-list text-center">
                    <ul class="filter-list filter-list-inline size-md " id="Amir-portdolio" >
                        <li class="active" data-filter="*">جميع المشاريع</li>
                        @foreach($categories as $category)
                            <li class="list-group-item "  data-filter=".category__{{$category->id}}" >
                                {{$category->category_title}}
                            </li>
                        @endforeach
                    </ul>
                    <div class="row liquid-portfolio-list-row mt-30" data-liquid-masonry="true" data-masonry-options='{ "filtersID": "#Amir-portdolio" }'>
                        @foreach($project as $projects)
                            <div class="lqd-column col-lg-3  col-xs-6 masonry-item interior category__{{$projects->category_id}}">
                                <div class="ld-pf-item ld-pf-light pf-details-inside pf-details-boxed pf-details-circle pf-details-pull-down pf-details-pull-left title-size-18 pf-details-h-str pf-details-v-end pf-contents-mid pf-hover-masktext">
                                    <div class="ld-pf-inner">
                                        <div class="ld-pf-image">
                                            <figure style="background-image: url({{ asset('uploads/'.$projects->image) }});">
                                                <img src="{{ asset('uploads/'.$projects->image) }}" alt="Portfolio Image">
                                            </figure>
                                        </div>
                                        <div class="ld-pf-details">
                                            <div class="ld-pf-bg bg-secondary" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": "this", "duration": 850, "initValues": { "scale": 0, "transformOrigin": "0 80% 0" }, "animations": { "scale": 1, "transformOrigin": "0 80% 0" } }'></div><!-- /.ld-pf-bg -->
                                            <div class="ld-pf-details-inner justify-content-center" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 200, "duration": 650, "delay": 150, "initValues": { "translateY": "100%" }, "animations": { "translateY": "0", "rotateX": 0 } }'>
                                                <h5 class="ld-pf-title mb-0" data-split-text="true" data-split-options='{ "type": "lines" }'>{{$projects->title}}</h5>
                                                <div class="ld-pf-category size-md" data-split-text="true" data-split-options='{ "type": "lines" }'>
                                                    <span class="d-block strong6">{{$projects->location}}</span>
                                                    <span class="d-block strong6">{{$projects->area}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                <a href="{{asset('amirimages')}}/profile/villa/1.jpg" class="liquid-overlay-link fresco" data-fresco-group="profile" data-fresco-caption="المساحة: ٢٣٣ م - الموقع - النوع"></a>--}}
                                    </div>
                                </div><!-- /.ld-pf-item -->
                            </div>
                        @endforeach
                    </div><!-- /.row liquid-portfolio-list-row -->
                </div><!-- /.liquid-portfolio-list -->
            </div><!-- /.container -->
        </section>


        <section id="about" class="vc_row fullheight d-flex flex-wrap align-items-center bg-cover bg-center py-5 lqd-css-sticky" data-animate-onscroll="true" data-animate-from='{"opacity":1, "translateY": 0}' data-animate-to='{"opacity":1, "translateY": -200}' style="background-image: url({{asset('amirimages')}}/alamir-3.jpg);">
            <div class="liquid-row-overlay bg-fade-dark-05"></div>
            <div class="side-Message col-md-6">
                <div class="side-Message-inner">
                    <div data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":1200,"delay":160,"initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
                        <h3 class="mt-0 mb-3 font-size-38 strong6 text-white">للشركة حضوراً فعالاً في كافة المعارض والمؤتمرات الخاصة بالبناء</h3>
                    </div><!-- /.lqd-column col-md-8 col-md-offset-2 text-center -->
                </div><!-- /.row -->
                <div class="SliderSideHero-overlay-bg"></div>
            </div><!-- /.container -->
        </section>

        <section id="contact" class="vc_row bg-cover bg-center pt-60 pb-50 " data-parallax="true" data-parallax-options='{"parallaxBG": true}' style="background-image: url({{asset('amirimages')}}/bg-1.jpg);">
            <div class="liquid-row-overlay bg-fade-dark-035"></div>
            <div class="container">
                <div class="row d-md-flex flex-wrap align-items-center">
                    <div class="lqd-column col-md-7 text-center text-md-right">
                        <h3 class="mt-0 strong6 text-white" >مع الأميرِ للاستشارات الهندسية.. حلمُك يصبحُ حقيقة بفريقُ عملٍ متكامل.. من كافة التخصصات الهندسية</h3>
                    </div><!-- /.lqd-column col-md-7 -->
                    <div class="lqd-column col-md-5">
                        <div class="d-flex">
                            <a href="tel:+971502794830" target="_blank" class="btn btn-solid semi-round btn-block">
								<span>
									<span class="btn-txt">إتصل بنا</span>
								</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=971502794830" target="_blank" class="btn btn-solid bg-whatsapp semi-round btn-block">
							<span>
								<span class="btn-txt"><i class="fa fa-whatsapp"></i> 0502794830</span>
							</span>
                            </a>
                        </div>
                    </div><!-- /.lqd-column col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </main>

@endsection
