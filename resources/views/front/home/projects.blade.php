<section class="project--section">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 pt-5 text-center wow fadeInDown">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <h3 class="bold"> <i class="fas fa-project-diagram"></i> <b>{{ __('lang.latest_projects') }}</b></h3>
                    <div class="line-linear-dark"></div>
                </div>
            </div>
        </div>


        <div class="row pt-4">
            @forelse ($projects as $item)
                <div class="col-md-6 pt-2 col-lg-4 text-center wow zoomInDown animate__delay-{{ $loop->iteration }}s">
                    <div class="project--card">
                        <img src="{{ asset($item->image) }}" alt="Avatar" class="project--card--image">
                        <h4 class="m-0 project--card--title">{{ $item->title }}</h4>
                        <div class="overlay">
                            <div class="pt-5">{{ Str::limit($item->description, 50) }}</div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse

        </div>

        <div class="row wow zoomInUp">
            <div class="col-md-12 pt-5 text-center">
                <a href="" class="  btn btn--primary">
                    {{ __('lang.explore_more') }}
                    <i class="fa fa-arrow-{{ isRtl()?'left':'right' }}"></i>
                </a>
            </div>
        </div>
    </div>
</section>
