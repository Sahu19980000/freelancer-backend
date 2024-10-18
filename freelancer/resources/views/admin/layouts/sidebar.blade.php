<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}"
                alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
            </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                            src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                    <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2"
                            aria-hidden="true"></i></div>
                </li>
                <li class="pin-title sidebar-main-title">
                    <div>
                        <h6>Pinned</h6>
                    </div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-1">General</h6>
                    </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                        href="/home">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                        </svg><span>Dashboard</span></a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6 class="">Clients</h6>
                    </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                        </svg><span>Users as Client</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('clientusers.index') }}">List</a></li>
                        <li><a href="{{ route('clientusers.create') }}">Create new</a></li>
                    </ul>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6 class="">Companies</h6>
                    </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                        </svg><span>Users as Company</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('companyusers.index') }}">List</a></li>
                        <li><a href="{{ route('companyusers.create') }}">Create new</a></li>
                    </ul>
                </li>


                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-8">Applications</h6>
                    </div>
                </li>

                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-job-search') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-job-search') }}"></use>
                        </svg><span>Add Category</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('category.index') }}">List</a></li>
                        <li><a href="{{ route('category.create') }}">Create new</a></li>
                    </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                        </svg><span>Add SubCategory</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('subcategory.index') }}">List</a></li>
                        <li><a href="{{ route('subcategory.create') }}">Create new</a></li>
                    </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                        </svg><span>Add Basic Plan</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('basicplanmake.index') }}">List</a></li>
                        <li><a href="{{ route('basicplanmake.create') }}">Create new</a></li>
                    </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                        </svg><span>Add Advance Plan</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('advanceplanmake/index') }}">List</a></li>
                        <li><a href="{{ route('advanceplanmake/create') }}">Create new</a></li>
                    </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                    </svg><span>Add Premium Plan</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('premiumplanmake/index') }}">List</a></li>
                    <li><a href="{{ route('premiumplanmake/create') }}">Create new</a></li>
                </ul>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                    </svg><span>Add Language Info</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('language/info/index') }}">List</a></li>
                    <li><a href="{{ route('language/info/create') }}">Create new</a></li>
                </ul>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                    href="#">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                    </svg>
                    <svg class="fill-icon">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                    </svg><span>Company add technology</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('company/technology/index') }}">List</a></li>
                    <li><a href="{{ route('company/technology/create') }}">Create new</a></li>
                </ul>
            </li>

            </ul>


            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</div>
