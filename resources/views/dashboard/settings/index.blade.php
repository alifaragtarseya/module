@php
    $title = __('lang.settings');
@endphp

@extends('dashboard.layouts.master')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @component('dashboard.layouts.includes.card', ['title' => $title])
        @slot('content')
            <form action="{{ route('admin.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3 pt-3">
                        <ul class="nav nav-pills flex-column align-items-start w3-ul border" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="main-info-tab" data-bs-toggle="tab" data-bs-target="#main-info"
                                    type="button" role="tab" aria-controls="main-info"
                                    aria-selected="true">
                                    <i class="bx bx-info-circle"></i> {{ __('lang.main_info') }} </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button"
                                    role="tab" aria-controls="vision" aria-selected="false">
                                    <i class="bx bx-images"></i>{{ __('lang.vision_mission') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="logo-images-tab" data-bs-toggle="tab" data-bs-target="#logo-images" type="button"
                                    role="tab" aria-controls="logo-images" aria-selected="false">
                                    <i class="bx bx-images"></i>{{ __('lang.logo_images') }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                                    role="tab" aria-controls="contact" aria-selected="false">
                                    <i class="bx bx-mail-send"></i>{{ __('lang.contact_us') }}</button>
                            </li>


                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content border" id="myTabContent">
                            {{-- main info site  --}}
                            <div class="tab-pane fade show active" id="main-info" role="tabpanel" aria-labelledby="main-info-tab">
                                <div class="row">
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.site_name_' . $locale) }}
                                                </label>
                                                {!! Form::text(
                                                    'site_name_' . $locale,
                                                    old("site_name_{$locale}", optional($settings->where('key', 'site_name_' . $locale)->first())->value),
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.address_' . $locale) }}
                                                </label>
                                                {!! Form::text(
                                                    'address_' . $locale,
                                                    old("address_{$locale}", optional($settings->where('key', 'address_' . $locale)->first())->value),
                                                    ['class' => 'form-control'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-6 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.short_description_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'short_description_' . $locale,
                                                    old(
                                                        "short_description_{$locale}",
                                                        optional($settings->where('key', 'short_description_' . $locale)->first())->value,
                                                    ),
                                                    ['class' => 'form-control '],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach (config('translatable.locales') as $key => $locale)
                                        <div class="col-md-12 pt-3">
                                            <div class="form-group">
                                                <label for="name">
                                                    {{ __('lang.description_' . $locale) }}
                                                </label>
                                                {!! Form::textarea(
                                                    'description_' . $locale,
                                                    old("description_{$locale}", optional($settings->where('key', 'description_' . $locale)->first())->value),
                                                    ['class' => 'form-control tinymce'],
                                                ) !!}
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('ifram_map', __('lang.ifram_map'), ['class' => 'form-label']) !!}
                                            {!! Form::textarea('ifram_map', old('ifram_map', optional($settings->where('key', 'ifram_map')->first())->value), [
                                                'class' => 'form-control',

                                            ]) !!}
                                        </div>

                                    </div>

                                </div>
                            </div>

                            {{-- logo images --}}
                            <div class="tab-pane fade  " id="logo-images" role="tabpanel" aria-labelledby="logo-images-tab">
                                <div class="row">



                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="logo">{{ __('lang.logo') }}</label> (<small class="text-danger">{{ __('lang.best_size') }} : w:105 * h:60</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-logo" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'logo')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="logo"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'logo')" id="logo"
                                                class="d-none form-control mt-3" name="logo">


                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="logo_white">{{ __('lang.logo_white') }}</label> (<small class="text-danger">{{ __('lang.best_size') }} : w:225 * h:92</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-logo_white" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'logo_white')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="logo_white"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'logo_white')" id="logo_white"
                                                class="d-none form-control mt-3" name="logo_white">
                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="fav_icon">{{ __('lang.fav_icon') }}</label> (<small class="text-danger">{{ __('lang.best_size') }} : w:40 * h:40</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-favicon" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'favicon')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="favicon"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'favicon')" id="favicon"
                                                class="d-none form-control mt-3" name="favicon">
                                        </div>

                                    </div>

                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="bg_footer">{{ __('lang.bg_footer') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-bg_footer" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'bg_footer')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="bg_footer"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'bg_footer')" id="bg_footer"
                                                class="d-none form-control mt-3" name="bg_footer">
                                        </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="profile">{{ __('lang.profile') }}</label>
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                              <b>{{ asset(optional($settings->where('key', 'company_profile')->first())->value) }}</b>
                                            </div>
                                            <br>


                                            <input type="file" onchange="changeImage(this, 'company_profile')" id="company_profile"
                                                class=" form-control mt-3" name="company_profile">
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">


                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            <label for="contact_image">{{ __('lang.contant_image') }}</label> (<small class="text-danger">{{ __('lang.best_size') }} : w:650 * h:600</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-contact_image" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'contact_image')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="contact_image"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'contact_image')" id="contact_image"
                                                class="d-none form-control mt-3" name="contact_image">
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('phone', __('lang.phone'), ['class' => 'form-label']) !!}
                                            {!! Form::number('phone', old('phone', optional($settings->where('key', 'phone')->first())->value), [
                                                'class' => 'form-control',
                                                'setp' => 'any',
                                            ]) !!}
                                        </div>

                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('whatsapp', __('lang.whatsapp'), ['class' => 'form-label']) !!} <small
                                                class="badge bg-warning">({{ __('lang.enter_country_code') }})</small>
                                            {!! Form::number('whatsapp', old('whatsapp', optional($settings->where('key', 'whatsapp')->first())->value), [
                                                'class' => 'form-control',
                                                'setp' => 'any',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('email_1', __('lang.email') . ' 1', ['class' => 'form-label']) !!}
                                            {!! Form::email('email_1', old('email_1', optional($settings->where('key', 'email_1')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('email_2', __('lang.email') . ' 2', ['class' => 'form-label']) !!}
                                            {!! Form::email('email_2', old('email_2', optional($settings->where('key', 'email_2')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('facebook_link', __('lang.facebook_link'), ['class' => 'form-label']) !!}
                                            {!! Form::url(
                                                'facebook_link',
                                                old('facebook_link', optional($settings->where('key', 'facebook_link')->first())->value),
                                                ['class' => 'form-control'],
                                            ) !!}
                                        </div>
                                    </div>

                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('youtube_link', __('lang.youtube_link'), ['class' => 'form-label']) !!}
                                            {!! Form::url(
                                                'youtube_link',
                                                old('youtube_link', optional($settings->where('key', 'youtube_link')->first())->value),
                                                ['class' => 'form-control'],
                                            ) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('twitter', __('lang.twitter'), ['class' => 'form-label']) !!}
                                            {!! Form::url('twitter', old('twitter', optional($settings->where('key', 'twitter')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('instagram', __('lang.instagram'), ['class' => 'form-label']) !!}
                                            {!! Form::url('instagram', old('instagram', optional($settings->where('key', 'instagram')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('snapchat', __('lang.snapchat'), ['class' => 'form-label']) !!}
                                            {!! Form::url('snapchat', old('snapchat', optional($settings->where('key', 'snapchat')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('telegram', __('lang.telegram'), ['class' => 'form-label']) !!}
                                            {!! Form::url('telegram', old('telegram', optional($settings->where('key', 'telegram')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('linkedin', __('lang.linkedin'), ['class' => 'form-label']) !!}
                                            {!! Form::url('linkedin', old('linkedin', optional($settings->where('key', 'linkedin')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <div class="form-group">
                                            {!! Form::label('tiktok', __('lang.tiktok'), ['class' => 'form-label']) !!}
                                            {!! Form::url('tiktok', old('tiktok', optional($settings->where('key', 'tiktok')->first())->value), [
                                                'class' => 'form-control',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                                    {{-- <div class="col-md-4 pt-3">
                                        <div class="form-group">
                                            <label for="bg_footer">{{ __('lang.image') }}</label> (<small class="text-danger">{{ __('lang.best_size') }} : w:550 * h:450</small>)
                                            <div style="width: 100%;border: 1px dashed #ccc; padding: 10px">
                                                <img class=" image-preview-vision_bg" width="100%"
                                                    src="{{ asset(optional($settings->where('key', 'vision_bg')->first())->value ?? 'assets/img/default.jpg') }}">
                                            </div>
                                            <br>
                                            <label for="vision_bg"class="btn btn-primary text-white mt-2">
                                                <i class="bx bx-cloud-upload fs-6 cursor-pointer"></i>
                                            </label>

                                            <input type="file" onchange="changeImage(this, 'vision_bg')" id="vision_bg"
                                                class="d-none form-control mt-3" name="vision_bg">
                                        </div>

                                    </div> --}}



                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <div class="col-md-12 pt-3">
                                                <div class="form-group">
                                                    <label for="name">
                                                        {{ __('lang.story_description_' . $locale) }}
                                                    </label>
                                                    {!! Form::textarea(
                                                        'story_description_' . $locale,
                                                        old("story_description_{$locale}", optional($settings->where('key', 'story_description_' . $locale)->first())->value),
                                                        ['class' => 'form-control tinymce'],
                                                    ) !!}
                                                </div>
                                            </div>
                                        @endforeach
                                        <hr>
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <div class="col-md-12 pt-3">
                                                <div class="form-group">
                                                    <label for="name">
                                                        {{ __('lang.culture_description_' . $locale) }}
                                                    </label>
                                                    {!! Form::textarea(
                                                        'culture_description_' . $locale,
                                                        old("culture_description_{$locale}", optional($settings->where('key', 'culture_description_' . $locale)->first())->value),
                                                        ['class' => 'form-control tinymce'],
                                                    ) !!}
                                                </div>
                                            </div>
                                        @endforeach


                            </div>

                        </div>
                    </div>
                </div>



                <div class="modal-footer pt-5 text-center">
                    <button type="submit" class="btn w3-block btn-primary">{{ __('lang.save') }}</button>
                </div>
            </form>
        @endslot
    @endcomponent
@endsection
