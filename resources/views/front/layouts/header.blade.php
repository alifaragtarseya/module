


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-{{ isMobile()?'3':'4' }} p-3 px-lg-5" style="box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.04);">
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid me-3" style="width: 150px;" src="{{ asset(getSettingValue('logo')) }}" alt=""></h1>
    </a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav m{{ isRtl()?'e':'s' }}-auto  rounded pe-4 py-3 py-lg-0">
            {{-- <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->routeIs('front.home') ? 'active' : '' }}">{{ __('lang.home') }}</a> --}}
            <a href="{{ route('front.about') }}" class="nav-item nav-link {{ request()->routeIs('front.about') ? 'active  ' : '' }}">{{ __('lang.studio') }}</a>
            <a href="{{ route('front.project') }}"  class="nav-link {{ request()->routeIs('front.project*') ? 'active' : '' }}" >{{ __('lang.projects') }}</a>
            <a href="{{ route('front.service') }}" class="nav-item nav-link {{ request()->routeIs('front.service') ? ' active ' : '' }}">{{ __('lang.services') }}</a>
            <a href="{{ route('front.award') }}" class="nav-item nav-link {{ request()->routeIs('front.award') ? ' active ' : '' }}">{{ __('lang.awards') }}</a>


            {{-- <a href="{{ route('front.project') }}" class="nav-item {{ request()->routeIs('front.gallery*') ? 'active' : '' }} nav-link">{{ __('lang.research') }}</a> --}}

            <a href="{{ route('front.contact') }}" class="nav-item nav-link {{ request()->routeIs('front.contact') ? 'active' : '' }}">{{ __('lang.contact') }}</a>

            <div class=" nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown"
                   >
                    <span class="">       {{ App::getLocale() == 'en' ?'English' : 'العربية' }} </span>
                </a>
                <div class="dropdown-menu p-0" style="min-width: 225px">
                    <a class="dropdown-item w3-border-bottom p-3" href="{{ route('front.lang') }}?lang=en">
                        <i>English</i>
                    </a>
                    <a class="dropdown-item p-3" href="{{ route('front.lang') }}?lang=ar">
                        <i>العربية</i>
                    </a>
                </div>
            </div>
            {{-- @if (isMobile())
            @endif--}}
        </div>
    </div>
    {{-- @if (!isMobile())

    <div class=" nav-item dropdown">
        <a class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown"
           >
            <span class="">       {{ App::getLocale() == 'en' ?'English' : 'العربية' }} </span>
        </a>
        <div class="dropdown-menu p-0" style="min-width: 225px">
            <a class="dropdown-item w3-border-bottom p-3" href="{{ route('front.lang') }}?lang=en">
                <i>English</i>
            </a>
            <a class="dropdown-item p-3" href="{{ route('front.lang') }}?lang=ar">
                <i>العربية</i>
            </a>
        </div>
    </div>
    @endif --}}
</nav>
<!-- Navbar End -->
