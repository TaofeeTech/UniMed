<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            @php
                $getSystemSettingsApp = App\Models\settings::getSingle();
            @endphp
            <div class="navbar-brand-box">
                <a href="{{ route('admin_dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ url($getSystemSettingsApp->logo) }}" alt="logo-sm" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url($getSystemSettingsApp->logo) }}" alt="logo-dark" height="30">
                    </span>
                </a>

                <a href="{{ route('admin_dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ url($getSystemSettingsApp->logo) }}" alt="logo-sm-light" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url($getSystemSettingsApp->logo) }}" alt="logo-light" height="40">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>
{{-- to get the id of the user  --}}
@php
$id = Auth::guard('admin')->user()->id;
$adminData = App\Models\Admin::find($id);
@endphp
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ (!empty($adminData->profile_image)) ? url('upload/admin_images/'.$adminData->profile_image) :url('upload/no_image.PNG') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ $adminData->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route("admin.profile") }}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="{{ route("admin.all") }}"><i class="ri-wallet-2-line align-middle me-1"></i> View users</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route("admin_logout") }}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>