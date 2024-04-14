<section class="section--product">
    <div class="bg-dark ">
        <div class="container mb-5">
            <div class="pt-3 row">
                <div class="col-md-12 pt-5 text-center wow fadeInDown">
                   <div class="d-flex justify-content-center flex-column align-items-center">
                    <h1 class="text-white">
                        <i class="fas fa-sitemap"></i>
                       <b> {{ __('lang.latest_products') }}</b>
                    </h1>
                    <div class="line-linear"></div>
                   </div>
                </div>
            </div>
            <div class="row pt-5 mb-5">
                @forelse ($products as $item)
                    @include('front.products.item', ['product' => $item])
                @empty
                @endforelse
            </div>
            <div class=" mt-4 pt-4 wow zoomInUp">
                <div class="text-center">
                    <a href="" class="btn btn--primary ">{{ __('lang.explore_more') }} <i class="fa fa-arrow-{{ isRtl()?'left':'right' }}"></i></a>
                </div>
            </div>
        </div>
        <br><br>
    </div>
</section>
