<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 text-center">
                <h2><b class="main-color">{{ __('lang.about_') }}</b> <b>{{ getSettingValue('site_name_'.app()->getLocale()) }}</b></h2>
            </div>
            @if (isMobile())

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class=" " >
                    <img class="w-100  h-100 " src="{{ asset($about->image) }}" alt="" style="object-fit: cover;">

                </div>
            </div>
            @endif
            <div class="col-lg-6  wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6 mb-5 main-color">
                        {{-- <i class="fa fa-quote-left main-color me-3"></i> --}}
                        {{ $about->title }}</h1>
                    <p class=" text-body mb-4">
                        {!! $about->short_description !!}
                    </p>
                    <div class=" mt-4 pt-4">
                        <div class="">
                            <a href="{{ route('front.about') }}" class="btn btn--primary {{ isMobile()?'d-block':'' }}">
                                {{ __('lang.more_about') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if (!isMobile())

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class=" " >
                    <img class="w-100  h-100 " src="{{ asset($about->image) }}" alt="" style="object-fit: cover;">

                </div>
            </div>
            @endif
        </div>
    </div>
</div>
