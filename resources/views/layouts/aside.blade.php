@php
    $page = config('site.page');
@endphp
<div class="app-sidebar__user"><img class="app-sidebar__user-avatar"src="{{asset('images/avatar.png')}}" alt="User Image">
    <div>
        <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
        <p class="app-sidebar__user-designation">Admin </p>
    </div>
</div>
<ul class="app-menu">
    <li><a class="app-menu__item @if($page == 'customer') active @endif" href="/admin"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Customers</span></a></li>
    <li><a class="app-menu__item @if($page == 'manage_link') active @endif" href="/link"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Manage Links</span></a></li>
</ul>