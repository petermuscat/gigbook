<li class="nav-item {{ Ekko::areActiveRoutes(['home', 'profile', 'groups', 'files', 'artists']) }}">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-home"></i>
            <span class="title">My Gigbook</span>
            <span class="arrow"></span>
        </a>

    <ul class="sub-menu">
        <li class="{{ Ekko::isActiveRoute('profile') }}">
            <a href="{{ route('profile') }}" class="nav-link">
                <i class="icon-user"></i>
                <span class="title">Profile</span>
            </a>
        </li>
        <li class="{!! Request::is('groups*') ? 'active' : '' !!}">
            <a href="{{ route('groups') }}" class="nav-link">
                <i class="icon-users"></i>
                <span class="title">Manage Groups</span>
            </a>
        </li>
        <li class="{{ Ekko::isActiveRoute('files') }}">
            <a href="{{ route('files') }}" class="nav-link">
                <i class="icon-social-dropbox "></i>
                <span class="title">Manage Files</span>
            </a>
        </li>
        <li class="{{ Ekko::isActiveRoute('artists') }}">
            <a href="{{ route('artists') }}" class="nav-link">
                <i class="icon-user-follow "></i>
                <span class="title">Artist Register</span>
            </a>
        </li>
    </ul>
	    </li>
<li class="{{ Ekko::isActiveRoute('gigs') }}">
    <a href="{{ route('gigs') }}" class="nav-link nav-toggle">
        <i class="icon-music-tone-alt "></i>
        <span class="title">Gigs</span>
    </a>
</li>
<li class="{{ Ekko::isActiveRoute('contacts') }}">
    <a href="{{ route('contacts') }}" class="nav-link nav-toggle">
        <i class="icon-users"></i>
        <span class="title">Contacts</span>
    </a>
</li>

<li class="{{ Ekko::isActiveRoute('reports') }}">
    <a href="{{ route('reports') }}" class="nav-link nav-toggle">
        <i class="icon-graph"></i>
        <span class="title">Reports</span>
    </a>
</li>
<li class="{{ Ekko::isActiveRoute('calendar') }}">
    <a href="{{ route('calendar') }}" class="nav-link nav-toggle">
        <i class="icon-calendar"></i>
        <span class="title">Calendar</span>
    </a>
</li>
<li class="{{ Ekko::isActiveRoute('community') }}">
    <a href="{{ route('community') }}" class="nav-link nav-toggle">
        <i class="icon-heart"></i>
        <span class="title">Community</span>
    </a>
</li>
<li class="{{ Ekko::isActiveRoute('services') }}">
    <a href="{{ route('services') }}" class="nav-link nav-toggle">
        <i class="icon-notebook"></i>
        <span class="title">Services</span>
    </a>
</li>