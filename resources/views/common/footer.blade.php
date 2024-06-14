<footer class="footer">
    <div class="footer__container">
        <div class="footer__main">
            <div class="footer__left">
                <div class="footer__logoBox">
                    <a href="{{ route('front.main') }}" class="logo logo_white">
                        <p>aeg</p>
                        <p>:ruexpert</p>
                    </a>
                    <p>Ежедневно с 09:00 до 21:00</p>
                </div>
                <div class="footer__contact">
                    <div class="footer__phone">
                        <a href="tel:+7 (495) 182-07-71" target="_blank">+7 (495) 182-07-71</a>
                        <p>(многоканальный)</p>
                    </div>
                    <div class="footer__addr">
                        <img src="{{ asset('storage/img/svg/geo.svg') }}" alt="">
                        <p>г. Москва, Шоссе Энтузиастов 31 ст57</p>
                    </div>
                </div>
                <div class="footer__desktop">
                    <div class="footer__rating">
                        <p>Рейтинг сервиса</p>
                        <img src="{{ asset('storage/img/stars.png') }}" alt="">
                        <p>4.8-5.0 - 403 голоса</p>
                    </div>
                    <div class="footer__rights">&copy; ruexperts.net, 2024 г. Все права защищены.</div>
                </div>
            </div>
            <div class="footer__center">
                <div class="footer__centerInner">
                    <div>
                        <p class="footer__heading">Что мы чиним?</p>
                        @if($products)
                            <nav class="footer__menu">
                                @foreach($products as $product)
                                    <a href="{{ $product->url }}" class="footer__link">{{ $product->title }}</a>
                                @endforeach
                            </nav>
                        @endif
                    </div>
                    <div>
                        <p class="footer__heading">Сервис</p>
                        @if($menu)
                            <div class="footer__right">
                                @foreach($menu as $menu_item)
                                    <a href="{{ $menu_item['link'] }}" class="footer__link">{{ $menu_item['title'] }}</a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="footer__mobile">
                    <div class="footer__rating">
                        <p>Рейтинг сервиса</p>
                        <img src="{{ asset('storage/img/stars.png') }}" alt="">
                        <p>4.8-5.0 - 403 голоса</p>
                    </div>
                    <div class="footer__rights">&copy; Aeg, 2024 г. Все права защищены.</div>
                </div>
                <div class="footer__cookies">Используем cookies для корректной работы сайта, персонализации&nbsp;пользователей и других целей, предусмотренных
                    <a href="#">политикой обработки персональных данных</a></div>
            </div>
        </div>
    </div>
</footer>
