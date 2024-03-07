<header id="qodef-page-header" role="banner">
<div id="qodef-page-header-inner" class=" qodef-skin--{{ $themeMode ?? 'dark' }}">
    <div class="qodef-divided-header-left-wrapper">
        <nav class="qodef-header-navigation" role="navigation" aria-label="Divided Left Menu">
            <ul id="menu-main-menu-1" class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom {{ $menuActive === 'home' ? 'current-menu-ancestor' : '' }} current-menu-parent menu-item-has-children menu-item-23 qodef--hide-link qodef-menu-item--narrow">
                <a href="{{ route('home', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Home</span></a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24 qodef--hide-link qodef-menu-item--narrow {{ $menuActive === 'about' ? 'current-menu-ancestor' : '' }}">
                <a href="{{ route('about', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">About Us</span></a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26 qodef--hide-link qodef-menu-item--narrow {{ $menuActive === 'services' ? 'current-menu-ancestor' : '' }}">
                <a href="{{ route('service', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Services</span></a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27 qodef--hide-link qodef-menu-item--narrow {{ $menuActive === 'gallery' ? 'current-menu-ancestor' : '' }}">
                <a href="{{ route('gallery', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Gallery</span></a>
            </li>
            </ul>
        </nav>
    </div>
    <a itemprop="url" class="qodef-header-logo-link qodef-height--set" href="{{ route('home', ['theme' => 'leonie']) }}" style="height:28px" rel="home">
        <img width="228" height="56" src="{{ asset('vendor/nails/leonie/wp-content/uploads/2021/07/Logo-dark-mobile.png') }}" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
        <img width="228" height="56" src="{{ asset('vendor/nails/leonie/wp-content/uploads/2021/07/Logo-dark-mobile.png') }}" class="qodef-header-logo-image qodef--dark" alt="logo dark" itemprop="image" />
        <img width="228" height="56" src="{{ asset('vendor/nails/leonie/wp-content/uploads/2021/07/Logo-light-white-2x.png') }}" class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image" />
    </a>
    <div class="qodef-divided-header-right-wrapper">
        <div class="qodef-widget-holder qodef--one">
            <div id="custom_html-8" class="widget_text widget widget_custom_html qodef-header-widget-area-one" data-area="header-widget-one">
            <div class="textwidget custom-html-widget">
                <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="{{ route('coupons', ['theme' => 'leonie']) }}" target="_self" rel="noopener">
                    <span class="qodef-m-text {{ $menuActive == 'coupons' ? 'active-menu' : '' }}">Coupons</span>
                </a>
            </div>
            </div>
            <div id="custom_html-8" class="widget_text widget widget_custom_html qodef-header-widget-area-one" data-area="header-widget-one">
            <div class="textwidget custom-html-widget">
                <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="{{ route('booking', ['theme' => 'leonie']) }}" target="_self" rel="noopener">
                    <span class="qodef-m-text {{ $menuActive == 'booking' ? 'active-menu' : '' }}">Book now</span>
                </a>
            </div>
            </div>
            <div id="custom_html-8" class="widget_text widget widget_custom_html qodef-header-widget-area-one" data-area="header-widget-one">
            <div class="textwidget custom-html-widget">
                <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="{{ route('contact', ['theme' => 'leonie']) }}" target="_self" rel="noopener">
                    <span class="qodef-m-text {{ $menuActive == 'contact' ? 'active-menu' : '' }}">Contact US</span>
                </a>
            </div>
            </div>
            <div id="leonie_core_side_area_opener-2" class="widget widget_leonie_core_side_area_opener qodef-header-widget-area-one" data-area="header-widget-one"><a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--predefined qodef-side-area-opener">
            <span class="qodef-m-icon qodef--open">
            <span class="qodef-m-lines"><span class="qodef-m-line qodef--1"></span><span class="qodef-m-line qodef--2"></span></span> </span>
            </a>
            </div>
        </div>
    </div>
</div>
<div class="qodef-header-sticky">
    <div class="qodef-header-sticky-inner">
        <div class="qodef-divided-header-left-wrapper">
            <nav class="qodef-header-navigation" role="navigation" aria-label="Divided Left Menu">
            <ul id="menu-main-menu-2" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom {{ $menuActive == 'home' ? 'current-menu-ancestor' : '' }} current-menu-parent menu-item-has-children menu-item-23 qodef--hide-link qodef-menu-item--narrow">
                    <a href="{{ route('home', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Home</span></a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'about' ? 'current-menu-ancestor' : '' }}">
                    <a href="{{ route('about', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">About Us</span></a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'services' ? 'current-menu-ancestor' : '' }}">
                    <a href="{{ route('service', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Services</span></a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'gallery' ? 'current-menu-ancestor' : '' }}">
                    <a href="{{ route('gallery', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Gallery</span></a>
                </li>
            </ul>
            </nav>
        </div>
        <a itemprop="url" class="qodef-header-logo-link qodef-height--set" href="{{ route('home', ['theme' => 'leonie']) }}" style="height:28px" rel="home">
            <img width="228" height="56" src="{{ asset('vendor/nails/leonie/wp-content/uploads/2021/07/Logo-dark-mobile.png') }}" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
        </a>
        <div class="qodef-divided-header-right-wrapper">
            <div class="qodef-widget-holder qodef--one">
            <div id="custom_html-14" class="widget_text widget widget_custom_html qodef-sticky-right">
                <div class="textwidget custom-html-widget">
                    <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="{{ route('coupons', ['theme' => 'leonie']) }}" target="_self" rel="noopener">
                        <span class="qodef-m-text {{ $menuActive == 'coupons' ? 'active-menu' : '' }}">Coupons</span>
                    </a>
                </div>
            </div>
            <div id="custom_html-14" class="widget_text widget widget_custom_html qodef-sticky-right">
                <div class="textwidget custom-html-widget">
                    <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="{{ route('booking', ['theme' => 'leonie']) }}" target="_self" rel="noopener">
                        <span class="qodef-m-text {{ $menuActive == 'booking' ? 'active-menu' : '' }}">Book now</span>
                    </a>
                </div>
            </div>
            <div id="custom_html-14" class="widget_text widget widget_custom_html qodef-sticky-right">
                <div class="textwidget custom-html-widget">
                    <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="{{ route('contact', ['theme' => 'leonie']) }}" target="_self" rel="noopener">
                        <span class="qodef-m-text {{ $menuActive == 'contact' ? 'active-menu' : '' }}">Contact Us</span>
                    </a>
                </div>
            </div>
            
            <div id="leonie_core_side_area_opener-3" class="widget widget_leonie_core_side_area_opener qodef-sticky-right">
                <a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--predefined qodef-side-area-opener">
                    <span class="qodef-m-icon qodef--open">
                        <span class="qodef-m-lines">
                        <span class="qodef-m-line qodef--1"></span>
                        <span class="qodef-m-line qodef--2"></span>
                        </span> 
                    </span>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
</header>
<header id="qodef-page-mobile-header" role="banner">
<div id="qodef-page-mobile-header-inner" class>
    <a itemprop="url" class="qodef-mobile-header-logo-link qodef-height--set" href="{{ route('home', ['theme' => 'leonie']) }}" style="height:28px" rel="home">
        <img width="228" height="56" src="{{ asset('vendor/nails/leonie/wp-content/uploads/2021/07/Logo-dark-mobile.png') }}" class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image" />
    </a>
    <a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--predefined qodef-mobile-header-opener">
        <span class="qodef-m-icon qodef--open">
        <span class="qodef-m-lines"><span class="qodef-m-line qodef--1"></span><span class="qodef-m-line qodef--2"></span></span> </span>
        <span class="qodef-m-icon qodef--close">
        <span class="qodef-m-lines"><span class="qodef-m-line qodef--1"></span><span class="qodef-m-line qodef--2"></span></span> </span>
    </a>
    <nav class="qodef-mobile-header-navigation" role="navigation" aria-label="Mobile Menu">
        <ul id="menu-main-menu-4" class="qodef-content-grid">
            <li class="menu-item menu-item-type-custom menu-item-object-custom {{ $menuActive == 'home' ? 'current-menu-ancestor': '' }} current-menu-parent menu-item-has-children menu-item-23 qodef--hide-link qodef-menu-item--narrow">
            <a href="{{ route('home', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Home</span></a>
            <svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="5px" height="11px" viewBox="0 0 5.438 9.844" enable-background="new 0 0 5.438 9.844">
                <g>
                    <path d="M5.184,5.125L0.635,9.64L0.203,9.242l4.35-4.316L0.236,0.609L0.635,0.21l4.549,4.516V5.125z"></path>
                </g>
            </svg>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'about' ? 'current-menu-ancestor': '' }}">
            <a href="{{ route('about', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">About Us</span></a>
            <svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="5px" height="11px" viewBox="0 0 5.438 9.844" enable-background="new 0 0 5.438 9.844">
                <g>
                    <path d="M5.184,5.125L0.635,9.64L0.203,9.242l4.35-4.316L0.236,0.609L0.635,0.21l4.549,4.516V5.125z"></path>
                </g>
            </svg>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'services' ? 'current-menu-ancestor': '' }}">
            <a href="{{ route('service', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Services</span></a>
            <svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="5px" height="11px" viewBox="0 0 5.438 9.844" enable-background="new 0 0 5.438 9.844">
                <g>
                    <path d="M5.184,5.125L0.635,9.64L0.203,9.242l4.35-4.316L0.236,0.609L0.635,0.21l4.549,4.516V5.125z"></path>
                </g>
            </svg>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-27 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'gallery' ? 'current-menu-ancestor': '' }}">
            <a href="{{ route('gallery', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Gallery</span></a>
            <svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="5px" height="11px" viewBox="0 0 5.438 9.844" enable-background="new 0 0 5.438 9.844">
                <g>
                    <path d="M5.184,5.125L0.635,9.64L0.203,9.242l4.35-4.316L0.236,0.609L0.635,0.21l4.549,4.516V5.125z"></path>
                </g>
            </svg>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'coupons' ? 'current-menu-ancestor': '' }}">
            <a href="{{ route('coupons', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Coupons</span></a>
            <svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="5px" height="11px" viewBox="0 0 5.438 9.844" enable-background="new 0 0 5.438 9.844">
                <g>
                    <path d="M5.184,5.125L0.635,9.64L0.203,9.242l4.35-4.316L0.236,0.609L0.635,0.21l4.549,4.516V5.125z"></path>
                </g>
            </svg>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'booking' ? 'current-menu-ancestor': '' }}">
            <a href="{{ route('booking', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Book Now</span></a>
            <svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="5px" height="11px" viewBox="0 0 5.438 9.844" enable-background="new 0 0 5.438 9.844">
                <g>
                    <path d="M5.184,5.125L0.635,9.64L0.203,9.242l4.35-4.316L0.236,0.609L0.635,0.21l4.549,4.516V5.125z"></path>
                </g>
            </svg>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25 qodef--hide-link qodef-menu-item--narrow {{ $menuActive == 'contact' ? 'current-menu-ancestor': '' }}">
            <a href="{{ route('contact', ['theme' => 'leonie']) }}"><span class="qodef-menu-item-text">Contact Us</span></a>
            <svg class="qodef-menu-item-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="5px" height="11px" viewBox="0 0 5.438 9.844" enable-background="new 0 0 5.438 9.844">
                <g>
                    <path d="M5.184,5.125L0.635,9.64L0.203,9.242l4.35-4.316L0.236,0.609L0.635,0.21l4.549,4.516V5.125z"></path>
                </g>
            </svg>
            </li>
        </ul>
    </nav>
</div>
</header>