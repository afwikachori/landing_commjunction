@extends('main.main2')
@section('content')

  <div class="section-10">
  
    <div class="section-8">
      <div class="container">
        <div class="div-block-34  mt-3"><a href="{{route('home')}}" class="back-button w-button"></a></div>
      </div>
      
    </div>
    <div class="container">
    <div class="div-block-44 news-headline">
      <div class="text-block-18">{{$news['title']}}</div>
      <div class="text-block-24">{{$dateFormat}} | By Admin</div>
      <div class="div-block-33"><img src="{{ env('CDN_URL').$news['image'] }}" style="max-width:60%;" alt=""></div>
      <div class="div-block-43">
        <p class="paragraph-6"style="line-height:25px">{{$news['subtitle']}}</p>
        <p class="paragraph-6"style="line-height:25px">{{$news['description']}}</p>
      </div>
    </div>
    </div>
    
  </div>

@endsection