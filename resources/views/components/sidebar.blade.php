@php
$user = auth()->user();

$links = [
    [
        "href" => "dashboard",
        "text" => "Dashboard",
        "icon" => "fab fa-readme",
        "role_access" => array_to_object([
            "super-admin" ,"admin"
        ]),
        "is_multi" => false,
    ],[
        "href" => [
            [
                "section_text" => "Management",
                "icon" => "fas fa-fire",
                "role_access" => array_to_object([ // only role
                    "super-admin","admin",
                ]),
                "section_list" => [
                    ["href" => "users", "text" => "Management - Users"],
                    ["href" => "roles", "text" => "Management - Roles"],
                ]
            ]
        ],
        "text" => "Access",
        "role_access" => array_to_object([
            "super-admin", "admin"
        ]),
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "End Point",
                "icon" => "fas fa-fire",
                "role_access" => array_to_object([ // only role
                    "super-admin","admin",
                ]),
                "section_list" => [
                    ["href" => "endpoint.settings", "text" => "End - Point Settings"],
                    // ["href" => "endpoint.employees", "text" => "End - Point Employees"],
                ]
            ]
        ],
        "text" => "TESTING",
        "role_access" => array_to_object([
            "super-admin", "admin"
        ]),
        "is_multi" => true,
    ],
];

$navigation_links = array_to_object($links);

@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="" alt="">
            </a>
        </div>
        @foreach ($navigation_links as $link)
        <ul class="sidebar-menu">
            @if ($user->hasRole($link->role_access))
                <li class="menu-header">{{ $link->text }}</li>
                @if (!$link->is_multi)
                <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route($link->href) }}"><i class="{{ $link->icon }}"></i><span>Dashboard & ReadMe</span></a>
                </li>
                @else
                    @foreach ($link->href as $section)
                        @if ($user->hasRole($section->role_access))
                            @php
                                $routes = collect($section->section_list)->map(function ($child) {
                                    return Request::routeIs($child->href);
                                })->toArray();

                                $is_active = in_array(true, $routes);
                            @endphp

                            <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="{{ $section->icon }}"></i> <span>{{ $section->section_text }}</span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($section->section_list as $child)
                                        <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endif
        </ul>
        @endforeach
    </aside>
</div>
