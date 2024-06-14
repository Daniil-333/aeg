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
                    <div class="header__city drop" data-drop-box>
                        <p class="drop__item _selected">Москва</p>
                        <div class="header__cities drop__list" data-drop-list>
                            @foreach($cities as $city)
                                <div class="drop__item">
                                    <a href="https://aeg{{ $city['link'] }}.ruexpert.net" itemprop="location">
                                        Aeg в {{ $city['title'] }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>
                <button id="burger" class="header__burger burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div id="menu" class="header__main">
                    <nav class="header__menu menu">
                        @foreach($menu as $menu_item)
                            @if($menu_item['submenu'])
                                <div class="header__menuPrice drop" data-drop-box>
                                    <p class="drop__item _selected">{{ $menu_item['title'] }}</p>
                                    <div class="drop__list" data-drop-list>
                                        @foreach($products as $product)
                                            <div class="drop__item">
                                                <a href="/{{ $product->url }}">
                                                    {{ $product->title }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <i class="fa-solid fa-caret-down"></i>
                                </div>
                            @else
                                <div class="menu__wrapLink">
                                    <a href="{{ $menu_item['link'] }}" class="menu__link">{{ $menu_item['title'] }}</a>
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
