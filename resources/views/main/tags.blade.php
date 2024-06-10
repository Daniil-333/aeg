<div class="tags">
    <div class="tags__container">
        <div class="tags__content">
            @foreach([
                1 => [
                    'icon' => 'chat',
                    'heading' => 'Бесплатно проконсультируем',
                    'txt' => 'Свяжемся с вами через 5 мин.',
                ],
                2 => [
                   'icon' => 'settings',
                    'heading' => 'Быстрая диагностика техники',
                    'txt' => 'Займет примерно 15 мин.',
                ],
                3 => [
                   'icon' => 'warranty',
                    'heading' => 'Гарантия до 12 месяцев',
                    'txt' => 'На все услуги и запчасти',
                ],
                ] as $tagItem)
                <div class="tags__item">
                    <div class="tags__icon">
                        <img src="{{ asset("storage/img/svg/{$tagItem['icon']}.svg") }}" alt="{{ $tagItem['heading'] }}">
                    </div>
                    <h3 class="tags__heading">{{ $tagItem['heading'] }}</h3>
                    <p class="tags__txt">{{ $tagItem['txt'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
