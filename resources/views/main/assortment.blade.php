<section class="assortment">
    <div class="assortment__container">
        <div class="assortment__content">
            <h2 class="assortment__title title">Что нужно починить?</h2>
            <div class="assortment__main">
                <div class="assortment__left">
                    <div class="assortment__radios">
                    @foreach($products as $key_product => $product)
                        <div class="assortment__radio">
                            <input id="assortment-view{{ $product->id }}" type="radio" name="assortment_view" @if($key_product == 0) checked @endif>
                            <label for="assortment-view{{ $product->id }}">{{ $product->title }}</label>
                        </div>
                    @endforeach
                    </div>
                    <div class="assortment__select">
                        <select class="assortment__select" name="assortment_view">
                            @foreach($products as $key_product => $product)
                                <option class="assortment__option" value="{{ $product->id }}" @if($key_product == 0) selected @endif>
                                    {{ $product->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="assortment__right">
                    @foreach($products as $key_product => $product)
                        <div id="assortment-repair{{ $product->id }}" class="assortment__views js-assortment-views @if($key_product == 0) _active @endif" @if($key_product > 0) style="display: none" @endif>
                            @if($product->services)
                                @php
                                    $product_services = $product->services->toArray();
                                    if(count($product_services) > 0) {
                                        $views_repair_chunked = array_chunk($product_services, 5);
                                    }
                                @endphp
                                @foreach($views_repair_chunked as $key_chunk => $view_repair_chunk)
                                    <div @if($key_chunk > 0) style="display: none" @endif class="assortment__chunk js-assortment-chunk @if($key_chunk == 0) _active @endif">
                                        @foreach($view_repair_chunk as $view_repair)
                                            <a href="{{ "/{$product->url}/{$view_repair['url']}" }}" class="assortment__view">
                                                <span>{{ $view_repair['title'] }}</span>
                                                <span>{{ $view_repair['price'] }}&nbsp;₽</span>
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
