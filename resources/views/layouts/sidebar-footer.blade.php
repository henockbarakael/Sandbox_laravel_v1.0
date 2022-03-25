<div class="sidebar-footer hidden-small">
    <a class="setting-btn" data-toggle="tooltip" data-placement="top" title="Open Settings Menu" data-original-title="Settings">
        <span class="feather icon-settings" aria-hidden="true"></span>
    </a>
    <a onclick="toggleFullScreen();" class="toggle-full-screen" data-toggle="tooltip" data-placement="top" title="Go FullScreen" data-original-title="FullScreen">
        <span id="full-screen" class="feather icon-maximize full-screen" aria-hidden="true"></span>
    </a>
    <a id="disable-click" data-toggle="tooltip" data-placement="top" title="Lock Sidebar" data-original-title="Lock">
        <span class="feather icon-eye" aria-hidden="true"></span>
    </a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
    <a data-toggle="tooltip" data-placement="top" title="Logout From Site" href="{{ route('logout')}} " data-original-title="Logout" onclick="event.preventDefault(); this.closest('form').submit();">
        <span class="feather icon-power" aria-hidden="true"></span>
    </a>
    </form>
</div>