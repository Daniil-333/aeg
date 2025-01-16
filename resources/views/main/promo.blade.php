<section class="promo">
    <div class="promo__container">
        <div class="promo__content">
            <div class="promo__left">
                <h1 class="promo__title title ">Сервисный центр Aeg в Москве</h1>
                <div class="promo__subtitle">Профессиональный ремонт и обслуживание техники Aeg опытными мастерами111</div>
                <form class="promo__form form">
                    @csrf
                    <p class="promo__txt form__txt">
                        <span>20% при записи онлайн:</span>
                        <span>Узнать стоимость ремонта за 20 секунд:</span>
                    </p>
                    <div class="form__row">
                        <div class="ui-input">
                            <input type="tel" placeholder="+7 (999) 000-00-00" name="phone">
                            <img src="{{ asset('img/svg/phone.svg') }}" alt="" class="form__icon">
                        </div>
                        <button type="submit" class="form__button btn"><span>Заказать ремонт</span></button>
                    </div>
                    <div class="promo__agree form__agree">*отправляя форму, вы даёте согласие на <a href="#">обработку персональных данных</a>
                    </div>
                </form>
            </div>
            <div class="promo__right">
                <img src="{{ asset('img/promo.png') }}" alt="" class="promo__img">
            </div>
        </div>
    </div>
</section>
