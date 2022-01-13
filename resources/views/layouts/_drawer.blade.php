<div class="mdk-drawer js-mdk-drawer" id="default-drawer" data-align="start" data-position="left">
    <div class="mdk-drawer__scrim"></div>
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar="init">
            <div class="simplebar-wrapper">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset">
                        <div class="simplebar-content">
                            <div class="sidebar-heading sidebar-m-t">Super Admin Menu</div>
                            <ul class="sidebar-menu">
                                <li>
                                    <a class="sidebar-menu-button" href="{{ url('/settings/application') }}">
                                        <span class="sidebar-menu-text">{{ __('parametre de l\'application') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidebar-menu-button" href="{{ url('/settings/theme/bikin') }}">
                                        <span class="sidebar-menu-text">{{ __('parametre du theme') }}</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="sidebar-menu-button" href="{{ url('/plans/showAdmin') }}">
                                        <span class="sidebar-menu-text">{{ __('Plan') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder"></div>
            </div>
        </div>
    </div>
</div>