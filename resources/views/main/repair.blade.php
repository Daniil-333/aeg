<section class="repair">
    <div class="repair__container">
        <div class="repair__content">
            <h2 class="repair__title title">Качественный ремонт устройств Aeg</h2>
            <p class="repair__txt">Профессиональный ремонт устройств Aeg в нашем сервисном центре - это гарантия безупречной работы ваших устройств. Мы осуществляем обслуживание всех моделей бытовой техники Aeg, включая холодильники, посудомоечные машины, варочные поверхности, стиральные машины, плиты и другие устройства. Наши квалифицированные мастера применяют только оригинальные запчасти и прогрессивное оборудование для проведения обслуживания, что гарантирует безупречное функционирование вашей аппаратуры после ремонта. Наш сервисный центр также предлагает оперативный сервис и компетентное обслуживание для вашего комфорта. Запишитесь на ремонт прямо сейчас и обеспечьте себе беспрецедентный уровень сервиса.</p>
            <div class="repair__items">
                @if(array_key_exists('left', $footer_links))
                    @foreach($footer_links['left'] as $footer_link)
                        <a href="#" class="repair__item">
                            <img src="{{ asset("storage/img/repair/{$footer_link['img']}.png") }}" alt="{{ $footer_link['name'] }}" class="repair__img">
                            <h2 class="repair__heading">{{ $footer_link['name'] }}</h2>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>