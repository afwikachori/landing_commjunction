@extends('main.basic')
@section('content')

<div class="section-8">
    <div class="container">
        <div class="div-block-34 custom-position-back-button-all-news mt-5">
            <a href="{{route('home')}}" class="back-button w-button"></a>
        </div>
    </div>

    @if(count($listHighlight) > 0)
    <div class="div-block-41 mt-5">
        <div class="news-list-headline">{{ trans('news.NWS-HL-Title') }}</div>
    </div>

    <div class="container">
        <div class="div-block-35">
            <div data-delay="3000" data-animation="slide" data-autoplay="1" data-easing="ease-in" data-duration="300" data-infinite="1" class="slider-2 w-slider">
                <div class="mask w-slider-mask">
                    @foreach($listHighlight as $newsHl)

                    <div class="slide w-slide">

                        <a href="/news/detail/{{$newsHl['id_news']}}">
                            <div class="w-layout-grid grid-3">
                                <div id="w-node-d597f79a4082-951dbff1" class="div-block-59">
                                    @if($newsHl['image'])
                                        <img src="{{ env('CDN_URL').$newsHl['image'] }}" alt="" class="img-highlight" />
                                    @else
                                        <img src="{{ asset('images/icon_cam.webp') }}" alt="" class="img-highlight">
                                    @endif
                                </div>
                                <div id="w-node-a6fe74b476e0-d62cca6a" class="div-block-40">
                                    <div class="text-block-25">{{ \Carbon\Carbon::parse($newsHl['date'])->format('d M y')}}
                                        | By Admin</div>
                                    <div class="headline-slide news-title-highlight">{{$newsHl['title']}}</div>
                                    <p class="paragraph-7 news-desc-highlight">{{$newsHl['subtitle']}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="left-arrow w-slider-arrow-left">
                    <div class="icon-2 w-icon-slider-left"></div>
                </div>
                <div class="right-arrow w-slider-arrow-right">
                    <div class="icon-2 w-icon-slider-right"></div>
                </div>
                <div class="slide-nav w-slider-nav w-slider-nav-invert w-round"></div>
            </div>
        </div>
    </div>
    @endif
    
    <div class="div-block-36">
        <div class="w-row">
            <div class="w-col w-col-6">
                <div data-animation="slide" data-duration="500" data-infinite="1" class="w-slider">
                    <div class="w-slider-mask">
                        <div class="w-slide"></div>
                        <div class="w-slide"></div>
                    </div>
                    <div class="w-slider-arrow-left">
                        <div class="w-icon-slider-left"></div>
                    </div>
                    <div class="w-slider-arrow-right">
                        <div class="w-icon-slider-right"></div>
                    </div>
                    <div class="w-slider-nav w-round"></div>
                </div>
            </div>
            <div class="w-col w-col-6">
                <div>
                    <div class="text-block-18 product-headline">COMMJUNCTION</div>
                    <div class="headline-4 product-headline">{{ trans('news.NWS-HL-Title') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-9">
    <div class="w-container-commjunction">
    @foreach($listNews as $news)
    <div class="div-block-38">
        <div class="columns-23 w-row w-100">
            <div class="column-39 w-col w-col-6">
                @if($news['image'])
                    <img src="{{ env('CDN_URL').$news['image'] }}" alt="" class="img-news-all">
                @else
                    <img src="{{ asset('images/icon_cam.webp') }}" alt="" class="img-news-all">
                @endif
            </div>
            <div class="column-37 w-col w-col-6">
                <div class="columns-25 w-row">
                    <div class="w-col">
                        <div class="text-block-25">{{ \Carbon\Carbon::parse($news['date'])->format('d M y')}} | By Admin
                        </div>
                        <div class="news-headline text-align-left news-title-list">{{$news['title']}}</div>
                    </div>
                    <div class="w-col">
                        <p class="news-p news-desc-list">{{$news['subtitle']}}</p>
                    </div>
                    <div class="column-38 w-col"><a href="/news/detail/{{$news['id_news']}}" class="button-9 w-button">{{ trans('news.NWS-NW1-Button') }}</a></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    
</div>

@endsection