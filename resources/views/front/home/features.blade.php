<section class="section--product pt-5">
    <div class="bg-white ">
        <div class="container mb-5">
            <div class="d-flex m-auto justify-content-center  wow zoomIn" style="">
                <div class="pt-2 text-center" >

                    <h2 class="text-center"> <b class="main-color">{{ __('lang.our_features') }}</b></h2>
                    <p>{{__('lang.features_desc')}}</p>
                </div>
            </div>
            <div class="row pt-5 mb-5 facts-counter ">
                @forelse ($features as $item)

                <div class="col-md-6 col-lg-4 wow " data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomInDown;">
                    <div class=" feature--item h-100 p-3">
                        <div class="bg-white h-100 text-center rounded py-4 px-3">
                            <span class="bg--image--feature"><img class="align-self-center mb-3" src="{{ asset($item->image) }}" width="40" alt=""></span>
                            <h4><b class="mb-2 fs-5">{{ $item->title }}</b></h4>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                </div>


                @empty
                @endforelse
            </div>

        </div>
        <br><br>
    </div>
</section>
