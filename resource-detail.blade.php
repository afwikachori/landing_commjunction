@extends('main.basic')
@section('content')

<div class="section-8">
    <div class="container text-align-left">
      <div class="div-block-34">
        <a href="{{route('resource')}}" class="new-back-button">
          <img src="{{ asset('images/arrow-left.webp') }}" alt="" class="arrow-back mr-3"> <span>Back to Home</span>
        </a>
      </div>
    </div>
    
    <div class="container">
      <div class="div-block-45 resource-header">
        <div class="w-layout-grid grid-4">
          <div id="w-node-573558b1bf72-84cb9a47" class="div-block-51 justify-selt-left">
            <div class="text-block-27">{{ trans('resource-title.CRS-SHL-Title') }}</div>
            <div class="news-headline text-align-left">{{$detailResource[0]->title}}</div>
            <div class="product-headline res-type">{{$detailResource[0]->deskripsi}}</div>
            <p class="paragraph-10">{{$detailResource[0]->short_description}}</p>
          </div>
          <div class="div-block-50">
            <img src="{{ env('CDN_URL').$detailResource[0]->image }}" width="100%" alt="" style="height: 100%;object-fit: cover;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="resource-content">
    <div class="div-block-52">
      <p class="res-content-2">{{$detailResource[0]->content}}</p>
    </div>
    <div class="div-block-52">
      <div class="news-headline">{{ trans('resource-title.CRS-CON-Tittle') }}</div>
      <div class="form-block mobile w-form">
      <form id="form-resource" class="form-3 resource" action="{{route('resource-request')}}" method="post" ajax="true" autocomplete="off">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="business_unit_type" value="3">
        <input type="hidden" name="resource_id" value="{{$detailResource[0]->id}}">
          <div class="div-block-53">
            <label class="field-label">{{ trans('resource-title.CRS-CON-FullName') }}</label>
            <input type="text" class="text-field-2 w-input" name="nama" id="nama">
          </div>
          <div>
            <label class="field-label">{{ trans('resource-title.CRS-CON-Email') }}</label>
            <input type="email" class="text-field-2 w-input" name="email" id="email">
          </div>
          <div>
            <label class="field-label">{{ trans('resource-title.CRS-CON-Mobile') }}</label>
            <input type="text" class="text-field-2 w-input" name="telepon" id="telepon">
          </div>
          <div>
            <label class="field-label">{{ trans('resource-title.CRS-CON-Profession') }}</label>
            <input type="text" class="text-field-2 w-input" name="profesi" name="profesi">
          </div>
          <input type="submit" value="Download" class="button action-button download-resource-2 w-button">
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

@endsection
@section('modal')
@endsection