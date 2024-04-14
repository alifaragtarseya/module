@extends('dashboard.layouts.master')
@section('title')
    {{ __('lang.dashboard') }}
@endsection
@section('css')

@endsection


@section('content')
    <div class="row">
        @foreach ($totals as $item)
        <div class="col-md-4 col-lg-3 pt-3">
            <div class="card">
                <a href="{{ $item['url'] }}">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div>
                              <span class="fw-medium d-block mb-1">{{ $item['title'] }}</span>
                          <h2 class="card-title  mb-2">{{ $item['value'] }}</h2>
                          </div>
                        <div class="avatar flex-shrink-0">
                          {!! $item['icon'] !!}
                        </div>
                      </div>

                      {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                    </div></a>
              </div>
        </div>
        @endforeach
    </div>

@endsection
