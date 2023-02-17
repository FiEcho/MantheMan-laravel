<div class="sidebar">
    <div class="logo-details ms-5 my-4">
        <a href="">
            <i class="fa-solid fa-square-parking icon"></i>
            <img src="{{ asset('assets/image/Logo.png') }}" class="w-32" alt="" srcset="">
        </a>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{ route('admin.home') }}">
                <i class="fa-solid fa-house mr-2 mb-1"></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="">Dashboard</a></li>
            </ul>
        </li>
        <li>
            <div class="icon-link">
                <a href="">
                    <i class="fa-solid fa-box mr-2 mb-1"></i>
                    <span class="link_name">Product</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu ">
                <li><a class="link_name" href="">Product</a></li>
                <li><a href="{{ route('admin.productCategory.index') }}">Product Category</a></li>
                <li><a href="{{ route('admin.product.index') }}">Products</a></li>
            </ul>
        <li>
            <div class="icon-link">
                <a href="{{ route('admin.MySkill.index') }}">
                    <i class="fa-solid fa-person mr-2 mb-1"></i>
                    <span class="link_name">My Skills</span>
                </a>
            </div>
        </li>
        <li>
            <div class="icon-link">
                <a class="text-zinc-400" href="{{ route('admin.product.index') }}">
                    <i class="fa-solid fa-list mr-2 mb-1"></i>
                    <span class="link_name">Project</span>
                </a>
            </div>
        </li>
    </ul>
</div>

<section class="home-section">
    <div class="home-content">
        <div class="mb-4">
            <x-dashboard.header>
                <i class='bx bx-menu text-black '></i>
            </x-dashboard.header>
        </div>
        <div class="{{ $mainClass1 }}">
            <div class="{{ $mainClass2 }}">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
