@php
    $newContacts = \App\Models\Contacts::where('created_at', '>=', now()->subDays(7))->count();
    $upcomingEvents = \App\Models\Events::where('date', '>=', now())->count();
    $newMessages = \App\Models\Messages::where('created_at', '>=', now()->subDays(7))->count();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{url('home')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <i class='bx bxs-church' style='color:#696cff; font-size:32px;'></i>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">BEYOND FAITH</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('home') ? 'active' : '' }}">
            <a href="{{url('home')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Church Management -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Church Management</span></li>
        
        <!-- Events -->
        <li class="menu-item {{ request()->is('events') || request()->is('event_id/*') ? 'active' : '' }}">
            <a href="{{url('events')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-calendar-event"></i>
                <div data-i18n="Basic">Events</div>
                @if($upcomingEvents > 0)
                    <span class="badge badge-center rounded-pill bg-success ms-auto">{{ $upcomingEvents }}</span>
                @endif
            </a>
        </li>
        
        <!-- Messages/Sermons -->
        <li class="menu-item {{ request()->is('messages') || request()->is('message_id/*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-microphone"></i>
                <div data-i18n="User interface">Messages</div>
                @if($newMessages > 0)
                    <span class="badge badge-center rounded-pill bg-info ms-auto">{{ $newMessages }}</span>
                @endif
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('messages') ? 'active' : '' }}">
                    <a href="{{url('messages')}}" class="menu-link">
                        <div data-i18n="All Messages">All Messages</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{url('messages')}}?sort=created_at&order=desc" class="menu-link">
                        <div data-i18n="Recent">Recent</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Media -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Media & Resources</span></li>
        
        <!-- Gallery -->
        <li class="menu-item {{ request()->is('admingallery') || request()->is('gallery_id/*') ? 'active' : '' }}">
            <a href="{{url('admingallery')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-photo-album"></i>
                <div data-i18n="Extended UI">Gallery</div>
            </a>
        </li>

        <!-- Ebooks -->
        <li class="menu-item {{ request()->is('ebooksource') || request()->is('ebook_edit/*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-book-bookmark"></i>
                <div data-i18n="Boxicons">Ebooks</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('ebooksource') ? 'active' : '' }}">
                    <a href="{{url('ebooksource')}}" class="menu-link">
                        <div data-i18n="All Ebooks">All Ebooks</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{url('ebooksource')}}?sort=created_at&order=desc" class="menu-link">
                        <div data-i18n="Recent">Recent</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Communication -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Communication</span></li>
        
        <!-- Contacts -->
        <li class="menu-item {{ request()->is('contacts') ? 'active' : '' }}">
            <a href="{{url('contacts')}}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-envelope'></i>
                <div data-i18n="Tables">Contacts</div>
                @if($newContacts > 0)
                    <span class="badge badge-center rounded-pill bg-danger ms-auto">{{ $newContacts }}</span>
                @endif
            </a>
        </li>
    </ul>
</aside>

<style>
.badge-center {
    min-width: 20px;
    height: 20px;
    padding: 0.25rem 0.4rem;
    font-size: 0.7rem;
    line-height: 1;
}
</style>
