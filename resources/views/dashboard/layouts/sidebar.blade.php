<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">

        </span>
        <span class="app-brand-text demo menu-text fw-bold ms-2">
            <img src="{{ asset(getSettingValue('logo')) }}" alt="">
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

   <ul class="menu-inner py-1">
      {{--  <!-- Dashboards -->
      <li class="menu-item active open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboards">Dashboards</div>
          <div class="badge bg-danger rounded-pill ms-auto">5</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a
              href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/dashboards-crm.html"
              target="_blank"
              class="menu-link">
              <div data-i18n="CRM">CRM</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="index.html" class="menu-link">
              <div data-i18n="Analytics">Analytics</div>
            </a>
          </li>
          <li class="menu-item">
            <a
              href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html"
              target="_blank"
              class="menu-link">
              <div data-i18n="eCommerce">eCommerce</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item">
            <a
              href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-logistics-dashboard.html"
              target="_blank"
              class="menu-link">
              <div data-i18n="Logistics">Logistics</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item">
            <a
              href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-academy-dashboard.html"
              target="_blank"
              class="menu-link">
              <div data-i18n="Academy">Academy</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
        </ul>
      </li>--}}


      <li class="menu-item {{ request()->routeIs('admin.home')?'active':'' }} ">
          <a href="{{ route('admin.home') }}" class="menu-link ">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Dashboards">{{ __('lang.home_dash') }}</div>
          </a>
      </li>


      <li class="menu-item {{ request()->routeIs('admin.slider') || request()->is('admin-panel/metatags/home')?'active open':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-image"></i>
          <div data-i18n="home">{{ __('lang.home') }}</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ request()->routeIs('admin.slider')?'active':'' }}">
            <a href="{{ route('admin.slider') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.sliders') }}</div>
            </a>
          </li>
          <li class="menu-item {{ request()->routeIs('admin.meta','home')?'active':'' }}">
            <a href="{{ route('admin.meta','home') }}" class="menu-link">
              <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- about --}}
      <li class="menu-item {{ request()->routeIs('admin.about') ||request()->routeIs('admin.team') || request()->is('admin-panel/metatags/about')?'active open':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-info-circle"></i>
          <div data-i18n="home">{{ __('lang.about') }}</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ request()->routeIs('admin.about')?'active':'' }}">
            <a href="{{ route('admin.about') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.about_us') }}</div>
            </a>
          </li>
          {{-- <li class="menu-item {{ request()->routeIs('admin.certification')?'active':'' }}">
            <a href="{{ route('admin.certification') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.certifications') }}</div>
            </a>
          </li> --}}
          <li class="menu-item {{ request()->routeIs('admin.team')?'active':'' }}">
            <a href="{{ route('admin.team') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.teams') }}</div>
            </a>
          </li>
          <li class="menu-item {{request()->is('admin-panel/metatags/about')?'active':'' }}">
            <a href="{{ route('admin.meta','about') }}" class="menu-link">
              <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- serives --}}
      <li class="menu-item {{ request()->routeIs('admin.service*') ||request()->routeIs('admin.servicecat*') || request()->is('admin-panel/metatags/service')?'active open':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-box"></i>
          <div data-i18n="home">{{ __('lang.services') }}</div>
        </a>
        <ul class="menu-sub">

          <li class="menu-item {{ request()->routeIs('admin.service*')?'active':'' }}">
            <a href="{{ route('admin.service') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.services') }}</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('admin-panel/metatags/service')?'active':'' }}">
            <a href="{{ route('admin.meta','service') }}" class="menu-link">
              <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- projects --}}
      {{-- <li class="menu-item {{ request()->routeIs('admin.project*') ||request()->routeIs('admin.pro_cat*') || request()->is('admin-panel/metatags/project')?'active open':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-briefcase"></i>
          <div data-i18n="home">{{ __('lang.projects_manage') }}</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ request()->routeIs('admin.pro_cat')?'active':'' }}">
            <a href="{{ route('admin.pro_cat') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.projects_categories') }}</div>
            </a>
          </li>
          <li class="menu-item {{ request()->routeIs('admin.project')?'active':'' }}">
            <a href="{{ route('admin.project') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.projects') }}</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('admin-panel/metatags/project')?'active':'' }}">
            <a href="{{ route('admin.meta','project') }}" class="menu-link">
              <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
            </a>
          </li>
        </ul>
      </li> --}}

      {{-- products management --}}
      <li class="menu-item {{request()->routeIs('admin.cat*') || request()->routeIs('admin.brand*') || request()->routeIs('admin.product*') || request()->is('admin-panel/metatags/project')?'active open':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-list-ul"></i>
          <div data-i18n="home">{{ __('lang.projects_manage') }}</div>
        </a>
        <ul class="menu-sub">
          {{-- <li class="menu-item {{ request()->routeIs('admin.brand')?'active':'' }}">
            <a href="{{ route('admin.brand') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.brands') }}</div>
            </a>
          </li>--}}
          {{-- <li class="menu-item {{ request()->routeIs('admin.cat')?'active':'' }}">
              <a href="{{ route('admin.cat') }}"  class="menu-link ">
                <div data-i18n="CRM">{{ __('lang.categories') }}</div>
              </a>
            </li> --}}
            <li class="menu-item {{ request()->routeIs('admin.product*')?'active':'' }}">
              <a href="{{ route('admin.product') }}"  class="menu-link ">
                <div data-i18n="CRM">{{ __('lang.projects') }}</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin-panel/metatags/project')?'active':'' }}">
            <a href="{{ route('admin.meta','project') }}" class="menu-link">
              <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
            </a>
          </li>
        </ul>
      </li>


      {{-- parteners --}}
      <li class="menu-item {{ request()->routeIs('admin.partener*')?'active':'' }}">
        <a href="{{ route('admin.partener') }}"  class="menu-link  ">
            <i class="menu-icon tf-icons bx bx-group"></i>
          <div data-i18n="parteners">{{ __('lang.parteners') }}</div>
        </a>
      </li>


      {{-- features --}}
      <li class="menu-item {{ request()->routeIs('admin.feature*')?'active':'' }}">
        <a href="{{ route('admin.feature') }}"  class="menu-link  ">
            <i class="menu-icon tf-icons bx bx-diamond"></i>
          <div data-i18n="features">{{ __('lang.features') }}</div>
        </a>
      </li>


      {{-- counter --}}
      <li class="menu-item {{ request()->routeIs('admin.counter*')?'active':'' }}">
        <a href="{{ route('admin.counter') }}"  class="menu-link  ">
            <i class="menu-icon tf-icons bx bx-tachometer"></i>
          <div data-i18n="counters">{{ __('lang.counters') }}</div>
        </a>
      </li>

      {{-- settings --}}
      <li class="menu-item {{ request()->routeIs('admin.setting')?'active':'' }}">
        <a href="{{ route('admin.setting') }}"  class="menu-link  ">
            <i class="menu-icon tf-icons bx bx-abacus"></i>
          <div data-i18n="settings">{{ __('lang.settings') }}</div>
        </a>
      </li>

      <li class="menu-item {{ request()->routeIs('admin.meta','contact')?'active':'' }}">
        <a href="{{ route('admin.meta','contact') }}" class="menu-link">
          <div data-i18n="Analytics">{{ __('lang.contact_metatag') }}</div>
        </a>
      </li>

    </ul>
  </aside>
