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
                        @if(array_key_exists('left', $footer_links))
                            <nav class="footer__menu">
                                @foreach($footer_links['left'] as $footer_link)
                                    <a href="{{ $footer_link['link'] }}" class="footer__link">{{ $footer_link['name'] }}</a>
                                @endforeach
                            </nav>
                        @endif
                    </div>
                    <div>
                        <p class="footer__heading">Сервис</p>
                        @if(array_key_exists('right', $footer_links))
                            <div class="footer__right">
                                @foreach($footer_links['right'] as $footer_link)
                                    <a href="{{ $footer_link['link'] }}" class="footer__link">{{ $footer_link['name'] }}</a>
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
