@extends('front.layouts.master')

@section('content')



     <section class="container pt-5 mb-5 py-5">
        <div class="row pb-5">
            <div class="col-md-12 pt-5  wow fadeInDown">
                <div class="">
                    <h3 class="bold "> <b class="main-color">{{ __('lang.our_services') }}</b></h3>
                    <h3 class="w-50 bold text-dark">{{ isRtl()? $metaBanner->descrih3tion : $metaBanner->description_en }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $item)
            <div class="col-md-4  pt-5">
                <div class="card p-3 border-0" style="height: 100%">
                    <div class="card-body p-1">
                        <h4 class="card-title"><b>{{ $item->title }}</b></h4>
                        <p class="card-text">{{$item->short_description}}</p>
                      </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- <div class="pt-5 text-center">
            <a href="{{ route('front.contact') }}" class="btn btn--primary">
                {{ __('lang.contact_us') }}
            </a>
        </div> --}}
     </section>
@endsection
