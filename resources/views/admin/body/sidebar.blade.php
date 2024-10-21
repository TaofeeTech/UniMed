<div class="vertical-menu">

    <div data-simplebar class="h-100">
        {{-- to get the id of the user  --}}
        @php
            $id = Auth::guard('admin')->user()->id;
            $adminData = App\Models\Admin::find($id);
        @endphp
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('upload/no_image.PNG') }}"
                    alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $adminData->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ url('admin/dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/system-settings') }}" class="waves-effect">
                        <i class="ri-settings-3-line"></i>
                        <span>System Settings</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/view-services') }}" class="">
                        <i class="ri-luggage-cart-fill"></i>
                        <span>Services</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa-solid fa-images"></i>
                        <span>Gallery</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.galleryCat') }}">Add Gallery Category</a></li>
                        <li><a href="{{ route('view.galleryCat') }}">View Gallery Categories </a></li>
                        <li><a href="{{ route('add.gallery') }}">Add Gallery</a></li>
                        <li><a href="{{ route('view.gallery') }}">View Gallery </a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('view_categories') }}" class="">
                        <i class="ri-luggage-cart-fill"></i>
                        <span>Dept. Categories</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-bill-line"></i>
                        <span>Sub Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add_Subcategory') }}">Add SubCategory</a></li>
                        <li><a href="{{ route('view_subcategories') }}">View SubCategoies </a></li>
                        <li><a href="{{ route('deleted_subcategories') }}">Recently Deleted SubCategories </a></li>
                    </ul>
                </li> --}}

                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-product-hunt-line"></i>
                        <span>Departments</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add_department') }}">Add Departments</a></li>
                        <li><a href="{{ route('view_department') }}">View All Departments </a></li>
                    </ul>
                </li>

                <li class="menu-title">Users</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-shield-user-fill"></i>
                        <span>Users View</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.all') }}">Users</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
