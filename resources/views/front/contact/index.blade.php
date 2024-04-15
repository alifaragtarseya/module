@extends('front.layouts.master')
@section('css')
    <style>
        .contact-info-box {
    text-align: center;
    border-radius: 5px;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    -webkit-box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.08);
    box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.08);
    background: #fff;
    padding: 30px;
    margin-bottom: 30px;
    height: 100%;
}
.contact-info-box .icon {
    display: inline-block;
    width: 70px;
    height: 70px;
    line-height: 70px;
    background: #f5f5f5;
    border-radius: 50%;
    font-size: 35px;
    color: var(--MainColor);
    -webkit-transition: 0.5s;
    transition: 0.5s;
    margin-bottom: 12px;
    position: relative;
}
.contact-info-box:hover .icon {
    background-color: var(--primary);
    color: #fff;
    border-color: var(--primary);
}
.contact_image {
    width: 100%;
    height: 500px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    border-radius: 20px;
    box-shadow: 0 0 13px -3px;
}
    </style>
@endsection
@section('content')


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {{-- <div class="row pt-4 mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <h3>{{ __('lang.email') }}</h3>
                        <p>
                            <a class="nav-link text-muted" href="mailto:{{ getSettingValue('email_1') }}"><span>{{ getSettingValue('email_1') }}</span></a>
                            <a class="nav-link text-muted" href="mailto:{{ getSettingValue('email_2') }}"><span>{{ getSettingValue('email_2') }}</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <h3>{{ __('lang.address') }}</h3>
                        <p>
                            {{ getSettingValue('address_'.app()->getLocale()) }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <h3>{{ __('lang.phone') }}</h3>
                        <p>
                            <a class="nav-link text-muted" href="tel:{{ getSettingValue('phone') }}"><span>{{ getSettingValue('phone') }}</span></a>
                        </p>
                    </div>
                </div>
            </div> --}}
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <h1 class="display-6 mb-5">{{ isRtl() ? $metaBanner->title : $metaBanner->title_en }}</h1>
                    <p class="mb-4 text-dark">
                        {{ isRtl() ? $metaBanner->description : $metaBanner->description_en }}
                    </p>
                    <p><a class="nav-link text-dark p-0" href="mailto:{{ getSettingValue('email_1') }}"><span>{{ getSettingValue('email_1') }}</span></a></p>
                    <p class=" text-dark">
                        {{ getSettingValue('address_'.app()->getLocale()) }}
                    </p>
                    {{-- <img src="{{ getSettingValue('') }}" width="100%" alt=""> --}}
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Ahmed Ramadan ...">
                                    <label for="name">{{ __('lang.name') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="ex@gmail.com">
                                    <label for="email">{{ __('lang.email') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="{{ __('lang.subject') }}">
                                    <label for="subject">{{ __('lang.subject') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="{{ __('lang.enter_your_message') }}" id="message" style="height: 100px"></textarea>
                                    <label for="message">{{ __('lang.message') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn--primary py-3 px-5" type="button" onclick="sendMessage()">{{ __('lang.send_message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12 pt-5 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
        {{-- <div class="position-relative rounded overflow-hidden h-100">
            <iframe class="position-relative w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div> --}}

        {!! getSettingValue('ifram_map') !!}
    </div>
    <!-- Contact End -->
@endsection
@section('js')
    <script>



        var whatsapp_base_url= 'https://wa.me/{phone}/?text={text}';

        function validate(data) {
            var valid = true;
            Object.keys(data).forEach(key => {
                if (!data[key]) {
                    valid = false;
                }
            });
            return valid;
        }
        function sendMessage() {
            var text = '';

            var data = {
                name: $('#name').val(),
                email: $('#email').val(),
                subject: $('#subject').val(),
                message: $('#message').val(),
            };

            if (!validate(data)) {
                alert('Please fill all the fields');
                return false;
            }

            Object.keys(data).forEach(key => {
                text += key + ' :' + data[key] + " \n" ;

            });

                var link = whatsapp_base_url
                .replace('{phone}', "{{ getSettingValue('whatsapp_phone') }}")
                .replace('{text}', encodeURIComponent(text));

                console.log(link + text)
                window.open(link , "_blank");
        }

    </script>
@endsection
