<section class="how">
    <div class="how__container">
        <div class="how__content">
            <h2 class="how__title title">Как мы работаем?</h2>
            <div class="how__items">
                @foreach([
                        1 => [
                            'icon' => 'chat',
                            'title' => 'Бесплатная консультация',
                            'txt' => 'Этап консультирования клиента по стоимости ремонта, прием заявок на услуги'
                        ],
                        2 => [
                            'icon' => 'diagnostic',
                            'title' => 'Диагностика устройства',
                            'txt' => 'Диагностика и выявление поломки, согласование цены и сроков проведения работ'
                        ],
                        3 => [
                            'icon' => 'repair',
                            'title' => 'Ремонт техники',
                            'txt' => 'Проведение работ по восстановлению техники, проверка работоспособности'
                        ],
                        4 => [
                            'icon' => 'warranty2',
                            'title' => 'Предоставление гарантии',
                            'txt' => 'Оформление заказ-наряда и гарантийного талона на все работы и комплектующие'
                        ],
                    ] as $keyHow => $itemHow)
                    <div class="how__item">
                        <div class="how__icon">
                            <img src="{{ asset("img/svg/{$itemHow['icon']}.svg") }}" alt="">
                        </div>
                        <p class="how__heading">{{ "{$keyHow}) {$itemHow['title']}" }}</p>
                        <p class="how__txt">{{ $itemHow['txt'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>