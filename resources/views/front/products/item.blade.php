<div class="col-lg-4 pt-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="p-3 card rounded" style="border-radius: 12px !important;">

            <img class="img-fluid" style="width: 100%;height: 220px;border-radius: 12px !important;" src="{{ asset($item->image) }}" alt="">

        <div class=" p-2">
            <b class="card-title fs-4">{{ $item->title }}</b>
            <p class=" text-muted">
                {{ Str::limit($item->short_description, 75) }}
            </p>
            <a href="{{ route('front.product.show', $item->id) }}" class="btn d-block btn--primary">
                {{ __('lang.show_details') }}
            </a>
        </div>

    </div>
</div>
