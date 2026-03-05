@php
    $segments = request()->segments();
    $breadcrumbs = [
        'home' => 'Dashboard',
        'events' => 'Events',
        'messages' => 'Messages',
        'admingallery' => 'Gallery',
        'ebooksource' => 'Ebooks',
        'contacts' => 'Contacts',
        'event_id' => 'Edit Event',
        'message_id' => 'Edit Message',
        'gallery_id' => 'Edit Gallery',
        'ebook_edit' => 'Edit Ebook',
    ];
@endphp

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('home') }}"><i class="bx bx-home-alt me-1"></i>Home</a>
        </li>
        @foreach($segments as $index => $segment)
            @if($index < count($segments) - 1)
                <li class="breadcrumb-item">
                    <a href="{{ url(implode('/', array_slice($segments, 0, $index + 1))) }}">
                        {{ $breadcrumbs[$segment] ?? ucfirst($segment) }}
                    </a>
                </li>
            @else
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $breadcrumbs[$segment] ?? ucfirst($segment) }}
                </li>
            @endif
        @endforeach
    </ol>
</nav>
