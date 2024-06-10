<section class="assortment">
    <div class="assortment__container">
        <div class="assortment__content">
            <h2 class="assortment__title title">Что нужно починить?</h2>
            <div class="assortment__main">
                <div class="assortment__left">
                    <div class="assortment__radios">
                    @foreach($footer_links['left'] as $key_footer_link => $footer_link)
                        <div class="assortment__radio">
                            <input id="assortment-view{{ $footer_link['id'] }}" type="radio" name="assortment_view" @if($key_footer_link == 1) checked @endif>
                            <label for="assortment-view{{ $footer_link['id'] }}">{{ $footer_link['name'] }}</label>
                        </div>
                    @endforeach
                    </div>
                    <div class="assortment__select">
                        <select class="assortment__select" name="assortment_view">
                            @foreach($footer_links['left'] as $key_footer_link => $footer_link)
                                <option class="assortment__option" value="{{ $footer_link['id'] }}" @if($key_footer_link == 1) selected @endif>
                                    {{ $footer_link['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="assortment__right">
                    @foreach($footer_links['left'] as $key_footer_link => $footer_link)
                        <div id="assortment-repair{{ $footer_link['id'] }}" class="assortment__views js-assortment-views @if($key_footer_link == 1) _active @endif" @if($key_footer_link > 1) style="display: none" @endif>
                            @if(array_key_exists('views_repair', $footer_link))
                                @php
                                    if(count($footer_link['views_repair']) > 0) {
                                        $views_repair_chunked = array_chunk($footer_link['views_repair'], 5);
                                    }
                                @endphp
                                @foreach($views_repair_chunked as $key_chunk => $view_repair_chunk)
                                    <div @if($key_chunk > 0) style="display: none" @endif class="assortment__chunk js-assortment-chunk @if($key_chunk == 0) _active @endif">
                                        @foreach($view_repair_chunk as $view_repair)
                                            <a href="{{ "/remont_{$footer_link['link']}/usluga_{$view_repair['link']}" }}" class="assortment__view">
                                                <span>{{ $view_repair['title'] }}</span>
                                                <span>{{ $view_repair['cost'] }}&nbsp;₽</span>
                                            </a>
                                        @endforeach
                                    </div>
                                @endforeach
                            @else
                                Раздел в стадии наполнения
                            @endif
                        </div>
                    @endforeach
                    <button type="button" class="assortment__more js-more-repair">Показать еще</button>
                </div>
            </div>
        </div>
    </div>
</section>
