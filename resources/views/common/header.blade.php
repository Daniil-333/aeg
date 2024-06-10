<header class="header">
    <div class="header__top">
        <div class="header__container">
            <div class="header__topInner">
                <p class="header__topTxt">г. Москва, Шоссе Энтузиастов 31 ст57</p>
                <div class="header__topContact">
                    <p class="header__topTxt">с 9:00 до 21:00</p>
                    <a href="tel:+7 (495) 182-07-71" class="header__topLink">+7 (495) 182-07-71</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__content">
        <div class="header__container">
            <div class="header__contentInner">
                <div class="header__logoBox">
                    <a href="{{ route('front.main') }}" class="logo">
                        <p>aeg</p>
                        <p>:ruexpert</p>
                    </a>
                    <details class="header__city">
                        <summary class="header__citySelected">Москва</summary>
                        <div class="header__cities listDetails">
                            <div class="listDetails__item _selected">Москва</div>
                            @foreach($cities as $city)
                                <div class="listDetails__item">
                                    <a href="https://aeg{{ $city['link'] }}.ruexpert.net" itemprop="location">
                                        Aeg в {{ $city['name'] }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </details>
                </div>
                <button id="burger" class="header__burger burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div id="menu" class="header__main">
                    <nav class="header__menu menu">
                        @foreach($menu as $menuItem)
                            @if(array_key_exists('submenu', $menuItem))
                                <details class="header__menuPrice">
                                    <summary>{{ $menuItem['name'] }}</summary>
                                    <div class="listDetails">
                                        @foreach($menuItem['submenu'] as $menuSubItem)
                                            <div class="listDetails__item">
                                                <a href="{{ $menuSubItem['link'] }}">
                                                    {{ $menuSubItem['name'] }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </details>
                            @else
                                <div class="menu__wrapLink">
                                    <a href="{{ $menuItem['link'] }}" class="menu__link">{{ $menuItem['name'] }}</a>
                                </div>
                            @endif
                        @endforeach
                    </nav>
                    <div class="header__contact">
                        <p>г. Москва, Шоссе Энтузиастов 31 ст57</p>
                        <div class="header__contactRow">
                            <p>с 9:00 до 21:00</p>
                            <a href="tel:+7 (495) 182-07-71" target="_blank">+7 (495) 182-07-71</a>
                        </div>
                    </div>
                </div>
                <div class="header__stickyInfo">
                    <div class="header__topContact">
                        <p class="header__topTxt">с 9:00 до 21:00</p>
                        <a href="tel:+7 (495) 182-07-71" class="header__topLink">+7 (495) 182-07-71</a>
                    </div>
                    <a href="#join" class="btn header__stickyBtn"><span>Заказать ремонт</span></a>
                </div>
            </div>
        </div>
    </div>
</header>
