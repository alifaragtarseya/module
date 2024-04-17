@extends('front.layouts.master')

@section('content')
    <section class="container pt-5 mb-5 py-5">
        <div class="row pb-5">
            <div class="col-md-12 pt-5  wow fadeInDown">
                <div class="">
                    <h3 class="bold "> <b class="main-color">{{ __('lang.our_services') }}</b></h3>
                    <h3 class="{{ isMobile() ? '' : 'w-50' }} bold text-dark">
                        {{ __('lang.service_desc')}}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $item)
                <div class="col-md-4  pt-5">
                    <div class="card p-3 border-0" style="height: 100%">
                        <div class="card-body p-1">
                            <h3 class="card-title"><b>{{ $item->title }}</b></h3>
                            <div class="card-text">
                                {!! $item->short_description !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br><br><br>
        <div class="pt-5 row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-12">
                <div class="d-flex align-items-center justify-content-around {{ isMobile() ? 'flex-column' : '' }}"
                    style="height: 100%">
                    @if (isMobile())
                    <img src="{{ asset($metaBanner->image) }}" style="width:{{ isMobile() ? '100%' : '550px' }};height: 600px"
                    alt="">
                    @endif
                    <div class="desc {{ isMobile() ? '' : 'w-50' }}">
                        <h3 class="bold text-dark">{{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</h3>
                        <p class="">{{ isRtl() ? $metaBanner->description : $metaBanner->description_en }}</p>
                    </div>
                    @if (!isMobile())
                    <img src="{{ asset($metaBanner->image) }}" style="width:{{ isMobile() ? '100%' : '550px' }};height: 600px"
                    alt="">
                    @endif
                </div>
            </div>
        </div>

        {{-- <div class="pt-5 text-center">
            <a href="{{ route('front.contact') }}" class="btn btn--primary">
                {{ __('lang.contact_us') }}
            </a>
        </div> --}}
    </section>
@endsection
