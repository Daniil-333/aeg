import './bootstrap';

import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

import {Tools} from './common/tools.js';
window.Tools = Tools;

import {Burger} from "./class/Burger";
import {SmoothScroll} from "./class/SmoothScroll";
import Splide from "@splidejs/splide";

class Base {

    constructor() {
        let protoMain = Object.getPrototypeOf(this);
        let protoBase = Object.getPrototypeOf(protoMain);
        this.initStack = [];
        this.callInitByProto(protoBase);
        this.callInitByProto(protoMain);

        Tools.isWebp((support) => (support) ?
            document.documentElement.classList.add('webp') :
            document.documentElement.classList.add('no-webp'));

        new Burger();
        new SmoothScroll();
    }

    callInitByProto(proto) {
        let vars = Object.getOwnPropertyNames(proto);

        for(let method of vars) {
            if(method.match(/^init[\w]+/,method)) {
                this.initStack.push(method);

                this[method]();
            }
        }
    }

    initStickyHeader() {
        $(window).on('scroll', function(){

            let $header = $('header.header');
            let $headerBottom = $('.header .header__content');

            if ($(window).scrollTop() >= $header.outerHeight() - $headerBottom.outerHeight()) {
                $header.addClass('_sticky');
            }
            else {
                if(!$('body').hasClass('_locked')) {
                    $header.removeClass('_sticky');
                }
            }
        });
    }

    initDropList() {
        $(document).on('click', '[data-drop-box]', function () {
            if(!$(this).hasClass('_open')) {
                $(this).addClass('_open');
            }
            else {
                $(this).removeClass('_open');
            }
        });
    }

    initWhatRepair() {
        const obj = this;

        $(document).on('click', '.js-more-repair', function () {
            const chunk = $('.js-assortment-views._active')
                .find('.js-assortment-chunk')
                .not('._active')[0];
            $(chunk).removeAttr('style').addClass('_active');
        });

        $(document).on('change', 'input[name="assortment_view"]', function () {
            const numFromId = $(this).attr('id').replace(/^\D+/g, '');
            obj.hangleChangedRepair(numFromId);
        });

        $(document).on('change', 'select[name="assortment_view"]', function () {
            const numFromId = $(this).find('option:selected').val();
            obj.hangleChangedRepair(numFromId);
        });
    }

    hangleChangedRepair(id) {
        const $assortmentViews = $('.js-assortment-views');

        $assortmentViews.removeClass('_active').hide();
        $(`#assortment-repair${id}`).addClass('_active').show();

        $assortmentViews.each(function () {
            $(this).find('.js-assortment-chunk').not(':first-child')
                .removeClass('_active')
                .attr('style', 'display:none');
        })
    }

    initSlider() {
        if(!$('.faq__items').length)
            return;

        new Splide('.faq__items', {
            arrows: false,
            pagination: false,
            gap: 20,
            drag: 'free',
            padding: { left: 15, right: 15 },
            mediaQuery: 'min',

            breakpoints: {
                767.98: {
                    isNavigation: false,
                    wheel: false
                },
                320: {
                    fixedWidth: 290,
                }
            }

        }).mount();
    }

    initLazyMap() {
        const $map = $('#map');
        const $script = $('#ymap_lazy');
        if(!$map.length) return;

        const calcScroll = function () {
            let hT = $map.offset().top,
                hH = $map.height(),
                wH = $(window).height(),
                wS = $(window).scrollTop();

            // console.log(wS, hT, hH, wH);
            if (wS > (hT+hH-wH)){
                $script.attr('src', $script.attr('data-src')).removeAttr('data-src');
            }
        }
        let handle = Tools.debounce(calcScroll, 100);

        $(window).on('scroll', handle);
    }
}

window.Base = Base;

window.addEventListener('load', function () {
    new Base();
})
