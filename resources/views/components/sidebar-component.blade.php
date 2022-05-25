<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);">
                    <i class='bx bx-home-circle'></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('gallery.list') }}">
                    <i class='bx bx-image'></i>
                        <span key="t-dashboards">Gallery</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('category.list') }}">
                        <i class='bx bx-duplicate'></i>
                        <span key="t-layouts">Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('our-work.list') }}">
                        <i class='bx bx-layout'></i>
                        <span key="t-layouts">Our Work</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('blog.list') }}">
                        <i class='bx bxs-book-content' ></i>
                        <span key="t-layouts">Blog</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('blog.list') }}">
                        <i class='bx bx-unlink' ></i>
                        <span key="t-layouts">Meta</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>