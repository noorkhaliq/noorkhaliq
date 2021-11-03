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
                                <li class="breadcrumb-item active"><span>المشاريع</span></li>
                            </ol>
                        </div><!-- /.ld-fancy-heading -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <section class="bg-white pt-70 pb-70 z-9" id="Projects">
            <div class="container">
                <header class="fancy-title text-center mb-30" >
                    <h2 class="mb-4 font-size-32 color-primary strong6">مشاريع شركة الأمير للاستشارات الهندسية </h2>
                </header>
                <div class="liquid-portfolio-list text-center">
                    <ul class="filter-list filter-list-inline size-md " id="Amir-portdolio" >
                        <li class="active" data-filter="*"><a href="{{route('front.projects')}}">جميع المشاريع</a></li>
                        @foreach($categories as $category)
                            <li class="list-group-item" >
                                <a href="{{route('front.projects').'?cat='.($category->id==request('cat')?'':$category->id).'&search='.request('search')}}">{{$category->category_title}}</a>
                                {{-- <span class="badgetext badge badge-pill badge-light mb-0 mt-1">{{ $category->projects_count }}</span>--}}
                            </li>
                        @endforeach
                    </ul>
                    <div class="row liquid-portfolio-list-row mt-30" data-liquid-masonry="true" data-masonry-options='{ "filtersID": "#Amir-portdolio" }'>
                        @foreach($project as $projects)
                            <div class="lqd-column col-lg-3 col-xs-6 masonry-item interior">
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
    </main>

@endsection
