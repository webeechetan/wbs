<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="mm-active">
                    <i class='bx bx-home-circle'></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('gallery.list') }}" class="@if(Route::current()->getName()=='gallery.list') waves-effect mm-active @endif">
                    <i class='bx bx-image'></i>
                        <span key="t-dashboards">Gallery</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('category.list') }}" class="@if(Route::current()->getName()=='category.list') waves-effect mm-active @endif">
                        <i class='bx bx-duplicate'></i>
                        <span key="t-layouts">Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('our-work.list') }}" class="@if(Route::current()->getName()=='our-work.list') waves-effect mm-active @endif">
                        <i class='bx bx-layout'></i>
                        <span key="t-layouts">Our Work</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('blog.list') }}" class="@if(Route::current()->getName()=='blog.list') waves-effect mm-active @endif">
                        <i class='bx bxs-book-content' ></i>
                        <span key="t-layouts">Blog</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('news.list') }}" class="@if(Route::current()->getName()=='news.list') waves-effect mm-active @endif">
                        <i class='bx bx-news' ></i>
                        <span key="t-layouts">News</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('meta.list') }}" class="@if(Route::current()->getName()=='meta.list') waves-effect mm-active @endif">
                        <i class='bx bx-unlink' ></i>
                        <span key="t-layouts">Meta</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('slide.list') }}" class="@if(Route::current()->getName()=='slider.list') waves-effect mm-active @endif">
                        <i class='bx bx-slideshow' ></i>
                        <span key="t-layouts">Slider</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>