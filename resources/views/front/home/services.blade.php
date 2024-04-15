<section class="section--services pb-5" >
    <div class="container pb-5">
        <div class="row p-5">
            <div class="col-md-12 pt-5  wow fadeInDown">
                <div class="">
                    <h3 class="bold "><b class="main-color">{{ __('lang.our_palces_desc') }}</b></h3>
                </div>
            </div>
        </div>
        <div class="row ">


            <div class="owl-carousel testimonial-carousel"  style="direction: ltr">
                @foreach ($parteners as $item)
                        <div class="item p-5 ">
                            <div class="  ">
                                <img src="{{ asset($item->image) }}" class="m-auto" style="width:100%;height: 350px" alt="">
                                <br>
                                <b>{{ $item->title }}</b>
                            </div>
                        </div>
                    @endforeach
            </div>



        </div>
    </div>
</section>
