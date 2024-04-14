@php
    $title = __('lang.metatag') . ' - ' . __('lang.'.$page);
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form class="form" action="{{ route('admin.meta.saveMetatag',$page) }}"
                method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="page" value="{{ $page }}">
                <div class="row">
                    <div class="col-12  ">

                        {!! Form::label('image', __('lang.image') , ['class' => 'form-label'] ) !!} <br>
                        <img class=" image-preview-image  " width="100%" height="200"   src="{{ asset($data->image ?? 'assets/img/default.jpg' ) }}">
                        <br>
                        <label for="image"class="btn btn-primary text-white mt-2">
                            {{-- <i class="ti ti-cloud-upload fs-6 cursor-pointer"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13 19v-4h3l-4-5l-4 5h3v4z"/><path fill="currentColor" d="M7 19h2v-2H7c-1.654 0-3-1.346-3-3c0-1.404 1.199-2.756 2.673-3.015l.581-.102l.192-.558C8.149 8.274 9.895 7 12 7c2.757 0 5 2.243 5 5v1h1c1.103 0 2 .897 2 2s-.897 2-2 2h-3v2h3c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5z"/></svg>
                        </label>

                        <input type="file"  onchange="changeImage(this, 'image')" id="image" class="d-none form-control  , 'required'mt-3" name="image" >
                    </div>

                    <div class="col-md-6 pt-3">
                        <div class="form-group">
                            <label for="name">
                                عنوان الصفحة <span class="text-danger"> * </span>
                            </label>
                            {!! Form::text("title", old("title", $data->title), ['class' => 'form-control' , 'required']) !!}
                        </div>
                    </div>
                    <div class="col-md-6 pt-3">
                        <div class="form-group">
                            <label for="name">
                                Page Title <span class="text-danger"> * </span>
                            </label>
                            {!! Form::text("title_en", old("title_en", $data->title_en), ['class' => 'form-control' , 'required']) !!}
                        </div>
                    </div>
                    <div class="col-md-6 pt-3">
                        <div class="form-group">
                            <label for="name">
                                وصف الصفحة <span class="text-danger"> * </span>
                            </label>
                            {!! Form::textarea("description", old("description", $data->description), ['class' => 'form-control' , 'required']) !!}
                        </div>
                    </div>
                    <div class="col-md-6 pt-3">
                        <div class="form-group">
                            <label for="name">
                                Page Description <span class="text-danger"> * </span>
                            </label>
                            {!! Form::textarea("description_en", old("description_en", $data->description_en), ['class' => 'form-control' , 'required']) !!}
                        </div>
                    </div>
                    <div class="col-md-12 pt-3">
                        <div class="form-group">
                            <label for="name">
                               {{ __('lang.keywords') }} <span class="text-danger"> * </span>
                            </label>
                            {!! Form::text("keywords", old("keywords", $data->keywords), ['class' => 'form-control' , 'required']) !!}
                        </div>
                    </div>


                </div>
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
