<section id="join" class="join">
    <div class="join__container">
        <div class="join__content">
            <div class="join__left">
                <h2 class="join__title">Если у вас остались вопросы</h2>
                <p class="join__txt">Свяжитесь с нами, наш менеджер свяжется в течение 5 минут</p>
                <form id="form-send" class="join__form form" autocomplete="off">
                    @csrf
                    <div class="join__formRow">
                        <div class="ui-input">
                            <input type="tel" placeholder="+7 (999) 000-00-00" name="phone">
                            <img src="{{ asset('storage/img/svg/phone.svg') }}" alt="" class="form__icon">
                        </div>
                        <button type="submit" class="form__button btn"><span>Отправить заявку</span></button>
                    </div>

                    <p class="form__agree join__agree">*отправляя форму, вы даёте согласие на <a href="#" target="_blank">обработку персональных данных</a></p>
                </form>
            </div>
            <div class="join__right">
                <div id="map" class="join__map">
                    <script id="ymap_lazy" type="text/javascript" charset="utf-8" async data-src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7e96d3c6d4666f9ce576f4045deedfaac2d71597e7a327dbeea5c8c84b34b3d0&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
            </div>
        </div>
    </div>
</section>
