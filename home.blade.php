@extends('main.for-home')
@section('content')


<div class="div-block"><img src="{{asset('webflow/images/Rectangle-193.webp')}}" alt="" class="image-18"></div>
<div class="index-space-top"></div>
<div class="container">
    <div class="columns w-row">
        <div class="column w-col w-col-6">
            <div class="text-block-3 mobile left-title-1">{{ trans('home.LP-SHL-Title') }}</div>
            <div class="headline left-title-1">{{ trans('home.LP-HL-Title') }}</div>
            <p class="paragraph text-align-left left-title-desc-1">{{ trans('home.LP-ST-Text') }}</p><a href="#howit" class="button action-button w-button btn-get left-title-desc-1 js-scroll-trigger">{{ trans('home.LP-HL-Button') }}</a>
        </div>
        <div class="column-9 w-col w-col-5"><img src="{{asset('webflow/images/Group-83.webp')}}" alt="" class="image-4"></div>
    </div>
    <div class="mobile-headline"><img src="{{asset('webflow/images/Isometric-HR-1.webp')}}" alt="" class="image-4">
        <div class="text-block-3">{{ trans('home.LP-SHL-Title') }}</div>
        <div class="headline">{{ trans('home.LP-HL-Title') }}</div>
        <p class="paragraph">{{ trans('home.LP-ST-Text') }}</p><a href="#howit" class="button action-button w-button js-scroll-trigger">{{ trans('home.LP-HL-Button') }}</a>
    </div>
</div>

@if(count($listNews) > 0)
<div class="sections-3 news-section">
    <div class="container">
        <div class="columns-2 w-row" style="width:100%">
            <div class="column-12 w-col w-col-6">
                <div class="headline title-news-custom" style="margin-left:0">{{ trans('home.LP-NF-Title') }}</div>
            </div>
            <div class="column-21 w-col w-col-6">
                <a href="{{route('all-news.view')}}" style="float:right">
                    <div class="see-all-button">See Other News</div>
                </a>
            </div>
        </div>
    </div>
    <!-- <div class="div-block-60">
        <div class="div-block-31"> -->
    <!-- <div class="w-clearfix"><img src="images/og-fox-news.webp" alt="" class="cardimage-4 newsheadimage"></div>
                <div>
                    <div class="cardheader-3">News Flash</div>
                    <div class="cardparagraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </div>
                </div>
                <div class="div-block-32"><a href="#" class="button-7 w-button"></a></div> -->
    <!-- <div class="card-2 mobile"> -->
    <div class="container">
    <div class="row" style="width:100%">
        <div class="col-12">
            <div class="owl-carousel">
                @foreach($listNews as $news)
                <div class="card-2 web d-block">
                    <div class="w-clearfix">
                        @if($news['image'])
                            <img src="{{ env('CDN_URL').$news['image'] }}" alt="" class="cardimage-4">
                        @else
                            <img src="{{ asset('images/icon_cam.webp') }}" alt="" class="cardimage-4">
                        @endif
                    </div>
                    <div>
                        <div class="cardheader-3 news-title-home" style="text-align:left">{{$news['title']}}</div>
                        <div class="cardparagraph-2 news-desc-home" style="text-align:left">{{$news['subtitle']}}</div>
                    </div>
                    <div class="div-block-32">
                        <a href="news/detail/{{$news['id_news']}}">
                            <div class="readmore-2">Read More</div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

    <!-- </div> -->
    <!-- </div>
    </div> -->
</div>
@endif



<div class="container">
<div class="section-5">
    <div>
        <div class="columns-2 w-row">
            <div class="column-12 w-col w-col-6">
                <div class="text-block-3 text-block-3-mobile" style="display:inherit;margin-left:0">{{ trans('home.LP-IN-SHL-Title') }}</div>
                <div class="headline"  style="display:inherit; margin-left:0">{{ trans('home.LP-IN-HL-Title') }}</div>
            </div>
            <div class="column-21 w-col w-col-6">
                <p class="paragraph-2" style="text-align:right;margin-right:0">{{ trans('home.LP-IN-ST-Text') }}</p>
            </div>
        </div>
    </div>
    <div class="div-block-21 container-icon-about-commjunction">
        <div class="feature-showcase mobile">
            <div class="row">
                <div class="col-6 col-sm-12 col-md-6 custom-margin-bottom-20">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('webflow/images/Group-80.webp')}}" alt="" class="cardimage">
                        </div>
                        <div class="col-6">
                            <div class="cardheader">{{ trans('home.LP-IN-OR-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-IN-OR-Text') }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-md-6 custom-margin-bottom-20">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('webflow/images/Group-80.webp')}}" alt="" class="cardimage">
                        </div>
                        <div class="col-6">
                            <div class="cardheader">{{ trans('home.LP-IN-HC-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-IN-HC-Text') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-12 col-md-6 custom-margin-bottom-20">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('webflow/images/Group-81.webp')}}" alt="" class="cardimage">
                        </div>
                        <div class="col-6">
                            <div class="cardheader">{{ trans('home.LP-IN-CZ-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-IN-CZ-Text') }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-md-6 custom-margin-bottom-20">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('webflow/images/Group-82.webp')}}" alt="" class="cardimage">
                        </div>
                        <div class="col-6">
                            <div class="cardheader">{{ trans('home.LP-IN-UF-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-IN-UF-Text') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns-15 w-row">
            <div class="column-28 w-col-3">
                <!-- ------------------------------------------------------------------------ -->
                <div class="feature-showcase web">
                    <div class="div-block-4 w-clearfix" style="display:contents"><img src="{{asset('webflow/images/Group-95.webp')}}" alt="" class="cardimage"></div>
                    <div class="div-block-17">
                        <div class="cardheader cardhead-about">{{ trans('home.LP-IN-OR-Title') }}</div>
                        <div class="cardparagraph">{{ trans('home.LP-IN-OR-Text') }}</div>
                    </div>
                </div>
                <!-- <div class="feature-showcase mobile">
                    <div class="columns-1 w-row">
                        <div class="column-1 w-clearfix w-col-3"><img src="{{asset('webflow/images/Group-80.webp')}}" alt="" class="cardimage"></div>
                        <div class="w-col-3">
                            <div class="cardheader">{{ trans('home.LP-IN-OR-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-IN-OR-Text') }}</div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="column-29 w-col-3">
                <div class="feature-showcase web">
                    <div class="div-block-4 w-clearfix" style="display:contents"><img src="{{asset('webflow/images/Group-96.webp')}}" alt="" class="cardimage"></div>
                    <div class="div-block-18">
                        <div class="cardheader cardhead-about">{{ trans('home.LP-IN-HC-Title') }}</div>
                        <div class="cardparagraph">{{ trans('home.LP-IN-HC-Text') }}</div>
                    </div>
                </div>
                <!-- <div class="feature-showcase mobile">
                    <div class="columns-1 w-row">
                        <div class="column-1 w-clearfix w-col-3"><img src="{{asset('webflow/images/Group-80.webp')}}" alt="" class="cardimage"></div>
                        <div class="w-col-3">
                            <div class="cardheader">{{ trans('home.LP-IN-HC-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-IN-HC-Text') }}</div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="column-31 w-col-3">
                <div class="feature-showcase web">
                    <div class="div-block-4 w-clearfix" style="display:contents"><img src="{{asset('webflow/images/Group-96.webp')}}" alt="" class="cardimage"></div>
                    <div class="div-block-19">
                        <div class="cardheader cardhead-about">{{ trans('home.LP-IN-CZ-Title') }}</div>
                        <div class="cardparagraph">{{ trans('home.LP-IN-CZ-Text') }}</div>
                    </div>
                </div>
                <!-- <div class="feature-showcase mobile">
                    <div class="columns-1 w-row">
                        <div class="column-1 w-clearfix w-col-3"><img src="{{asset('webflow/images/Group-81.webp')}}" alt="" class="cardimage"></div>
                        <div class="w-col-3">
                            <div class="cardheader">{{ trans('home.LP-IN-CZ-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-IN-CZ-Text') }}</div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="w-col-3">
                <div class="feature-showcase web">
                    <div class="div-block-4 w-clearfix" style="display:contents"><img src="{{asset('webflow/images/Group-98.webp')}}" alt="" class="cardimage"></div>
                    <div class="div-block-20">
                        <div class="cardheader cardhead-about">{{ trans('home.LP-IN-UF-Title') }}</div>
                        <div class="cardparagraph">{{ trans('home.LP-IN-UF-Text') }}</div>
                    </div>
                </div>
                <!-- <div class="feature-showcase mobile">
                    <div class="columns-1 w-row">
                        <div class="column-1 w-clearfix w-col-3"><img src="{{asset('webflow/images/Group-82.webp')}}" alt="" class="cardimage"></div>
                        <div class="w-col-3">
                            <div class="cardheader">{{ trans('home.LP-IN-UF-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-IN-UF-Text') }}</div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
</div>

<div class="sections" id="howit">
    <img src="{{asset('webflow/images/Vector-8.webp')}}" alt="" class="image-19">
    <div class="container">
    <div class="columns-2 w-row">
        <div class="column-11 w-col w-col-4 align-item-baseline">
            <div class="text-block-3 ml-0">{{ trans('home.LP-SV-SHL-Title') }}</div>
            <div class="headline" style="margin-left:0;">{{ trans('home.LP-SV-HL-Title') }}</div>
            <p class="paragraph-2" style="margin-left:0;margin-right:0;">{{ trans('home.LP-SV-Text') }}</p>
        </div>
        <div class="column-42 w-col w-col-8">
            <div class="columns-9 w-row">
                <div class="w-col w-col-4">
                    <div class="card web">
                        <div class="w-clearfix"><img src="{{asset('image/CMJ07.webp')}}" alt="" class="cardimage-2"></div>
                        <div>
                            <div class="cardheader line-height-25">{{ trans('home.LP-SV-OC-Title') }}</div>
                            <div class="cardparagraph tab-d-none h-subtitle-hiw">{{ trans('home.LP-SV-OC-Text') }}</div>
                            <!-- <a href="{{route('howit')}}">
                                <div class="readmore">{{ trans('home.LP-SV-OC-Link') }}</div>
                            </a> -->
                        </div>
                    </div>
                    <div class="card mobile">
                        <div class="columns-8 w-row">
                            <div class="column-10 w-clearfix w-col w-col-6"><img src="{{asset('image/CMJ07.webp')}}" alt="" class="cardimage-2"></div>
                            <div class="w-col w-col-6">
                                <div class="cardheader">{{ trans('home.LP-SV-OC-Title') }}</div>
                                <div class="cardparagraph mobile">{{ trans('home.LP-SV-OC-Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="card web">
                        <div class="w-clearfix"><img src="{{asset('image/CMJ14.webp')}}" alt="" class="cardimage-2"></div>
                        <div class="div-block-5">
                            <div class="cardheader line-height-25">{{ trans('home.LP-SV-OS-Title') }}</div>
                            <div class="cardparagraph tab-d-none h-subtitle-hiw">{{ trans('home.LP-SV-OS-Text') }}</div>
                            <!-- <a href="{{route('howit')}}">
                                <div class="readmore">{{ trans('home.LP-SV-OS-Link') }}</div>
                            </a> -->
                        </div>
                    </div>
                    <div class="card mobile">
                        <div class="columns-8 w-row">
                            <div class="column-10 w-clearfix w-col w-col-6"><img src="{{asset('image/CMJ14.webp')}}" alt="" class="cardimage-2"></div>
                            <div class="w-col w-col-6">
                                <div class="cardheader">{{ trans('home.LP-SV-OS-Title') }}</div>
                                <div class="cardparagraph mobile">{{ trans('home.LP-SV-OS-Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="card web">
                        <div class="w-clearfix"><img src="{{asset('image/CMJ17.webp')}}" alt="" class="cardimage-2"></div>
                        <div class="div-block-6">
                            <div class="cardheader line-height-25">{{ trans('home.LP-SV-API-Title') }}</div>
                            <div class="cardparagraph tab-d-none h-subtitle-hiw">{{ trans('home.LP-SV-API-Text') }}</div>
                            <!-- <a href="{{route('howit')}}">
                                <div class="readmore">{{ trans('home.LP-SV-API-Link') }}</div>
                            </a> -->
                        </div>
                    </div>
                    <div class="card mobile">
                        <div class="columns-8 w-row">
                            <div class="column-10 w-clearfix w-col w-col-6"><img src="{{asset('image/CMJ17.webp')}}" alt="" class="cardimage-2"></div>
                            <div class="w-col w-col-6">
                                <div class="cardheader">{{ trans('home.LP-SV-API-Title') }}</div>
                                <div class="cardparagraph mobile">{{ trans('home.LP-SV-API-Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="w-row">
        <div class="w-col w-col-12 see-detail-service-content">
            <a href="{{route('howit')}}" class="see-detail-service">
                See Detail
            </a>
        </div>
    </div>
</div>

<div class="section-5 margin-top-30 margin-top-100" id="features">
    <div class="container">
        <div class="section-5" style="width:100%">
            <div class="text-block-3 odd">{{ trans('home.LP-FT-SHL-Title') }}</div>
            <div class="headline odd custom-margin-left-0 custom-justify-content-features-center">{{ trans('home.LP-FT-HL-Title') }}</div>
            <p class="paragraph-2">{{ trans('home.LP-FT-ST-Text') }}</p>
        </div>
    </div>

    <div class="container">
        <div class="div-block-22">
            <div class="div-block-23 custom-margin-right-30">
                <div class="w-layout-grid grid">
                    <div class="feature-showcase">
                        <div class="div-block-4 w-clearfix"><img src="{{asset('/image/Authentication.webp')}}" alt="" class="cardimage"></div>
                        <div>
                            <div class="cardheader">{{ trans('home.LP-FT-OR1-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-FT-OR1-Text') }}</div>
                        </div>
                    </div>
                    <div class="feature-showcase">
                        <div class="div-block-4 w-clearfix"><img src="{{asset('/image/CustomPortal.webp')}}" alt="" class="cardimage"></div>
                        <div>
                            <div class="cardheader-2">{{ trans('home.LP-FT-OR2-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-FT-OR2-Text') }}</div>
                        </div>
                    </div>
                    <div class="feature-showcase">
                        <div class="div-block-4 w-clearfix"><img src="{{asset('/image/Dashboard.webp')}}" alt="" class="cardimage"></div>
                        <div>
                            <div class="cardheader">{{ trans('home.LP-FT-OR3-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-FT-OR3-Text') }}</div>
                        </div>
                    </div>
                    <div class="feature-showcase">
                        <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ManageSub.webp')}}" alt="" class="cardimage"></div>
                        <div>
                            <div class="cardheader">{{ trans('home.LP-FT-OR4-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-FT-OR4-Text') }}</div>
                        </div>
                    </div>
                    <div id="w-node-98c566575a29-debf5ecf" class="feature-showcase">
                        <div class="div-block-4 w-clearfix"><img src="{{asset('/image/ReportManagement.webp')}}" alt="" class="cardimage"></div>
                        <div>
                            <div class="cardheader">{{ trans('home.LP-FT-OR5-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-FT-OR5-Text') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{asset('webflow/images/Group-78-2.webp')}}" alt="" class="image-17">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="column-6 w-col w-col-7" style="align-items:center;width:100%;">
            <a href="{{route('features')}}" class="button action-button w-button">See Detail</a>
        </div>
    </div>

</div>
<div class="section custom-margin-top-15">
    <img src="{{asset('webflow/images/Group-100.webp')}}" alt="" class="image-20 mobile">
    <div class="container">
    <div class="columns-12 w-row">
        <div class="column-11 w-col w-col-6"><img src="{{asset('webflow/images/Isometric-HR-1.webp')}}" alt="" class="image-17"></div>
        <div class="column-32 w-col w-col-6">
            <div class="text-block-13 mobile">{{ trans('home.LP-UFT-SHL-Title') }}</div>
            <div class="headline white custom-margin-left-0 custom-margin-left-35-upgraded-features">{{ trans('home.LP-UFT-HL-Title') }}</div>
            <p class="paragraph-3 mobile" style="text-align: left;">{{ trans('home.LP-UFT-ST-Text') }}</p>
            <div class="columns-2 w-row">
                <div class="column-23 w-col w-col-4"><img src="{{asset('webflow/images/Group-86.webp')}}" alt="" class="image-21">
                    <div class="text-block-14 mobile">{{ trans('home.LP-UFT-Group') }}</div>
                </div>
                <div class="column-24 w-col w-col-4"><img src="{{asset('webflow/images/Group-87.webp')}}" alt="" class="image-21">
                    <div class="text-block-14 mobile">{{ trans('home.LP-UFT-Marketplace') }}</div>
                </div>
                <div class="column-23 w-col w-col-4"><img src="{{asset('webflow/images/Group-88.webp')}}" alt="" class="image-21">
                    <div class="text-block-14 mobile">{{ trans('home.LP-UFT-PaymentAPI') }}</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="sections" id="pricing">
    <div class="container">
    <div class="columns-16 w-row">
        <div class="column-11 w-col w-col-4 align-item-baseline">
            <div class="text-block-3">{{ trans('home.LP-PR-SHL-Title') }}</div>
            <div class="headline">{{ trans('home.LP-PR-HL-Title') }}</div>
            <p class="paragraph-2" style="margin-right:0">{{ trans('home.LP-PR-ST-Text') }}</p>
        </div>
        <div class="w-col w-col-8">
            <div class="columns-9 w-row">
                <div class="w-col w-col-4">
                    <div class="card web pricing">
                        <div class="w-clearfix"><img src="{{asset('/image/Starter.webp')}}" alt="" class="cardimage-2"></div>
                        <div class="div-block-6">
                            <div class="cardheader pricing">{{ trans('home.LP-PR-OC-Title') }}</div>
                            <div class="cardparagraph h-subtitle-pricing">{{ trans('home.LP-PR-OC-Text') }}</div>
                            <div class="cardheader pricing line">________________________________</div>
                            <div class="cardparagraph mini-ttext">{{ trans('home.LP-PR-getstarted') }}</div>
                            <div class="cardheader pricing price">{{ trans('home.LP-PR-OC-Price') }}</div>
                            <!-- <a href="{{route('pricing')}}" class="margin-top-10 button action-button long w-button">{{ trans('home.LP-PR-OC-Button') }}</a> -->
                        </div>
                    </div>
                    <div class="card pricing mobile">
                        <div class="div-block-24 w-clearfix"><img src="{{asset('/image/Starter.webp')}}" alt="" class="cardimage-2"></div>
                        <div class="div-block-6">
                            <div class="cardheader pricing">{{ trans('home.LP-PR-OC-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-PR-OC-Text') }}</div>
                            <div class="cardheader pricing line">________________________________</div>
                            <div class="cardparagraph mini-ttext">{{ trans('home.LP-PR-getstarted') }}</div>
                            <div class="cardheader pricing price">{{ trans('home.LP-PR-OC-Price') }}</div><a href="{{route('pricing')}}" class="button action-button long w-button">{{ trans('home.LP-PR-OC-Button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="card web pricing">
                        <div class="w-clearfix"><img src="{{asset('/image/Medium.webp')}}" alt="" class="cardimage-2"></div>
                        <div class="div-block-6">
                            <div class="cardheader pricing">{{ trans('home.LP-PR-OS-Title') }}</div>
                            <div class="cardparagraph h-subtitle-pricing">{{ trans('home.LP-PR-OS-Text') }}</div>
                            <div class="cardheader pricing line">________________________________</div>
                            <div class="cardparagraph mini-ttext">{{ trans('home.LP-PR-getstarted') }}</div>
                            <div class="cardheader pricing price">{{ trans('home.LP-PR-OS-Price') }}</div>
                            <!-- <a href="{{route('pricing')}}" class="margin-top-10 button action-button long w-button">{{ trans('home.LP-PR-OS-Button') }}</a> -->
                        </div>
                    </div>
                    <div class="card pricing mobile">
                        <div class="w-clearfix"><img src="{{asset('/image/Medium.webp')}}" alt="" class="cardimage-2"></div>
                        <div class="div-block-6">
                            <div class="cardheader pricing">{{ trans('home.LP-API-OS-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-API-OS-Text') }}</div>
                            <div class="cardheader pricing line">________________________________</div>
                            <div class="cardparagraph mini-ttext">{{ trans('home.LP-PR-getstarted') }}</div>
                            <div class="cardheader pricing price">{{ trans('home.LP-PR-OS-Price') }}</div><a href="{{route('pricing')}}" class="button action-button long w-button">{{ trans('home.LP-API-OS-Button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="w-col w-col-4">
                    <div class="card web pricing">
                        <div class="w-clearfix"><img src="{{asset('/image/Corporate.webp')}}" alt="" class="cardimage-2"></div>
                        <div class="div-block-6">
                            <div class="cardheader pricing">{{ trans('home.LP-PR-API-Title') }}</div>
                            <div class="cardparagraph h-subtitle-pricing">{{ trans('home.LP-PR-API-Text') }}</div>
                            <div class="cardheader pricing line">________________________________</div>
                            <div class="cardparagraph mini-ttext">{{ trans('home.LP-PR-getstarted') }}</div>
                            <div class="cardheader pricing price">{{ trans('home.LP-PR-API-Price') }}</div>
                            <!-- <a href="{{route('pricing')}}" class="margin-top-10 button action-button long w-button">{{ trans('home.LP-PR-API-Button') }}</a> -->
                        </div>
                    </div>
                    <div class="card pricing mobile">
                        <div class="w-clearfix"><img src="{{asset('/image/Corporate.webp')}}" alt="" class="cardimage-2"></div>
                        <div class="div-block-6">
                            <div class="cardheader pricing">{{ trans('home.LP-PR-API-Title') }}</div>
                            <div class="cardparagraph">{{ trans('home.LP-PR-API-Text') }}</div>
                            <div class="cardheader pricing line">________________________________</div>
                            <div class="cardparagraph mini-ttext">{{ trans('home.LP-PR-getstarted') }}</div>
                            <div class="cardheader pricing price">{{ trans('home.LP-PR-API-Price') }}</div><a href="{{route('pricing')}}" class="button action-button long w-button">{{ trans('home.LP-PR-API-Button') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="w-row">
        <div class="w-col w-col-12 see-detail-service-content">
            <a href="{{route('pricing')}}" class="see-detail-service">
                See Detail
            </a>
        </div>
    </div>

    <div class="section-4">
        <div class="sections-2 container">
            <div class="web-product w-row" style="width:100%">
                <div class="column-6 w-col w-col-6" style="display:block">
                    <div class="text-block-5" style="text-align:left">{{ trans('home.LP-L-SHL-Title') }}</div>
                    <div class="headline margin-left-custom-1" style="display:block;">{{ trans('home.LP-L-HL-Title') }}</div>
                    <p class="paragraph" style="text-align:left">{{ trans('home.LP-L-HL-Teks') }}</p><a href="https://app.commjunction.id/admin" class="button action-button w-button"style="float:left">{{ trans('home.LP-L-HL-Button') }}</a>
                </div>
                <div class="column-22 w-col w-col-6"><img src="{{asset('webflow/images/Illustration-1.webp')}}" alt="" class="image-14"></div>
            </div>
            <div class="mobile-product w-row">
                <div class="column-6 w-col w-col-6"><img src="{{asset('webflow/images/Illustration-1.webp')}}" alt="" class="image-14"></div>
                <div class="column-22 w-col w-col-6">
                    <div class="text-block-5">{{ trans('home.LP-L-SHL-Title') }}</div>
                    <div class="headline">{{ trans('home.LP-L-HL-Title') }}</div>
                    <p class="paragraph">{{ trans('home.LP-L-HL-Teks') }}</p>
                    <a href="#" class="button action-button w-button">{{ trans('home.LP-L-HL-Button') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-2">
    <div class="form-contact-cta"><div><div class="headline d-inline-block ml-2">{{ trans('home.LP-CON-Title') }}</div></div></div>
    <div class="form-contact-cta">
    <div class="form-block w-form">
        <form id="contactItSolution" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form pr-0">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="subjectEmail" value="Commjunction">
            <input type="hidden" name="url" value="/">
            <div class="columns-4 w-row">
                <div class="w-col w-col-4">
                    <label for="name" class="field-label">{{ trans('home.LP-CON-FullName') }}</label>
                    <input type="text" class="text-field-2 w-input" id="fullname" name="fullname">
                </div>
                <div class="w-col w-col-4">
                    <label class="field-label">{{ trans('home.LP-CON-Company') }}</label>
                    <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                </div>
                <div class="w-col w-col-4">
                    <label class="field-label">{{ trans('home.LP-CON-Email') }}</label>
                    <input type="email" class="text-field-2 w-input" name="email" id="email">
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-12">
                    <label class="field-label">{{ trans('home.LP-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
                </div>
            </div>
        </form>
        <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
        </div>
    </div>
    <div class="form-block mobile w-form">
        <form id="contactItSolution" action="{{route('mail-cta')}}" method="post" ajax="true" autocomplete="off" class="form hide-mobile">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="subjectEmail" value="Commjunction">
            <input type="hidden" name="url" value="/">
            <div class="columns-4 w-row">
                <div class="w-col w-col-4">
                    <label for="name" class="field-label">{{ trans('home.LP-CON-FullName') }}</label>
                    <input type="text" class="text-field-2 w-input" id="fullname" name="fullname">
                </div>
                <div class="w-col w-col-4">
                    <label class="field-label">{{ trans('home.LP-CON-Company') }}</label>
                    <input type="text" class="text-field-2 w-input" name="institution" id="institution">
                </div>
                <div class="w-col w-col-4">
                    <label class="field-label">{{ trans('home.LP-CON-Email') }}</label>
                    <input type="email" class="text-field-2 w-input" name="email" id="email">
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-12">
                    <label class="field-label">{{ trans('home.LP-CON-Description') }}</label>
                    <textarea name="description" class="text-field-2 w-input" id="description" rows="5"></textarea>
                    <input type="submit" class="submit-button w-button">
                </div>
            </div>
        </form>
        <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
@section('modal')
@endsection
