@extends('main.basic')
@section('content')

<div class="section-8">
    <div class="container text-align-left">
        <div class="div-block-34 mt-3">
            <a href="{{route('home')}}" class="new-back-button">
                <img src="{{ asset('images/arrow-left.webp') }}" alt="" class="arrow-back mr-3"> <span>Back to Home</span>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="div-block-45 ml-0">
        <div class="columns-26 w-row">
            <div class="w-col w-col-6">
                <div class="div-block-37 text-align-left">
                    <div class="text-block-26">{{ trans('resource.RSC-SHL-Title') }}</div>
                    <div class="resource-headline">{{ trans('resource.RSC-HL-Title') }}</div>
                    <p class="paragraph-9">{{ trans('resource.RSC-ST-Text') }}</p>
                </div>
            </div>
            <div class="column-43 w-col w-col-6">
                <img src="{{asset('/image/CMJ02.webp')}}" alt="" class="image-38">
            </div>
        </div>
    </div>
</div>
<div class="section-12">
    <div class="container">
        <div class="columns-27 w-row w-100">
            @foreach($listResource as $resource)
            <div class="w-col w-col-4 w-50-tab">
                <div class="card-nohover card-res">
                    <div class="w-clearfix div-block-49">
                        <img src="{{ env('CDN_URL').$resource['image'] }}" width="100%" alt="">
                    </div>
                    <div class="res-title">{{$resource['title']}}</div>
                    <p class="res-content">{{$resource['short_description']}}</p>
                    <a href="/resource/detail/{{$resource['id']}}" class="button action-button resource-detail w-button">{{ trans('resource.RSC-RS1-Button') }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
@section('modal')
@endsection
