import {Modal} from "../class/Modal";

export const Tools = {
    isWebp: function(callback) {
        let webP = new Image();
		webP.onload = webP.onerror = function () {
			callback(webP.height == 2);
		};
		webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
    },
    isIOS: function () {
        return [
                'iPad Simulator',
                'iPhone Simulator',
                'iPod Simulator',
                'iPad',
                'iPhone',
                'iPod',
                'MacIntel',
            ].includes(window.navigator.platform)
            // iPad on iOS 13 detection
            || (window.navigator.userAgent.includes("Mac"))
    },
    input : {
        numeric: function(opts){
            $('input.ui-numeric').each(function(){
                let input = $(this);
                input.removeClass('ui-numeric');
                if(!opts || opts.readonly !== false)
                    input.attr('readonly','readonly');

                let id = 'ui' + Tools.uniqid();
                $(this).replaceWith($('<div/>', {
                    id: id,
                    class: 'ui-numeric d-flex align-items-center'
                }));

                let block = $('#' + id);
                block.append(input);

                input.before($('<div/>', {
                    class: 'ui-numeric-spinner d-flex align-items-center justify-content-center',
                    'data-id': id,
                    'data-dir': 'minus',
                    html: '<i class="icon-ic-minus"></i>'
                }));

                input.after($('<div/>', {
                    class: 'ui-numeric-spinner d-flex align-items-center justify-content-center',
                    'data-id': id,
                    'data-dir': 'plus',
                    html: '<i class="icon-ic-plus"></i>'
                }));

                $('.ui-numeric-spinner[data-id="' + id + '"]').click(function(){
                    let input = $(this).parent().find('input');
                    let val = parseInt(input.val());

                    val += $(this).data('dir') == 'plus' ? 1 : -1;
                    if(val < 1) val = 1;

                    input.val(val);
                    input.change();
                });
            });
        },
        password: function($input) {

            $('input[type="password"]').each(function(){
                $(this).after('<i class="icon-ic-pass-show password-toggler"></i>');
            });

        },
        reg: function($input,reg) {
            $input.bind("change keyup input click", function() {
                if (this.value.match(reg)) {
                    this.value = this.value.replace(reg, '');
                }
            });
        },
        range: function($range,$input1,$input2){

            let instance;
            let min = parseInt($input1.data('min'));
            let max = parseInt($input1.data('max'));
            let from = parseInt($input1.val());
            let to = $input2 ? parseInt($input2.val()) : '';

            let range_params = {
                skin: 'round',
                min: min,
                max: max,
                from: from,
                to: to,
                hide_min_max: true,
                hide_from_to: true,
                onStart: function(data) {
                    $input1.prop("value", data.from);

                    if($input2 && $input2.length)
                        $input2.prop("value", data.to);
                },
                onChange: function(data) {
                    $input1.prop("value", data.from);

                    if($input2 && $input2.length)
                        $input2.prop("value", data.to);
                }
            };
            if($input2 && $input2.length)
                range_params.type = 'double';
            $range.ionRangeSlider(range_params);

            instance = $range.data("ionRangeSlider");

            $input1.on("input", function() {
                let val = $(this).prop("value");

                if (val < min) {
                    val = min;
                } else if (val > max) {
                    val = max;
                }

                instance.update({
                    from: val
                });
            });

            instance.update({
                from: $input1.val()
            });

            if($input2 && $input2.length) {
                $input2.on("input", function() {
                    let val = $(this).prop("value");

                    if (val < min) {
                        val = min;
                    } else if (val > max) {
                        val = max;
                    }

                    instance.update({
                        to: val
                    });
                });

                instance.update({
                    to: $input2.val()
                });
            }

            return instance;

        }
    },
    resetForm: function($form) {
        if($form.length) {
            $form[0].reset();
            $form.find('.is-invalid').removeClass('is-invalid');
        }
    },
    cookie: {
        set: function(name, value, options = {}) {

            options = {
                path: '/',
            };

            if (options.expires instanceof Date) {
                options.expires = options.expires.toUTCString();
            }

            let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

            for (let optionKey in options) {
                updatedCookie += "; " + optionKey;
                let optionValue = options[optionKey];
                if (optionValue !== true) {
                    updatedCookie += "=" + optionValue;
                }
            }

            document.cookie = updatedCookie;
        },
        get: function(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }
    },
    getFormField: function(selector) {

        let data = {};
        const regex = /(?!^|\[)\w+(?=\]|$)/g;

        $(selector).find('input[type="text"],input[type="date"],input[type="email"],input[type="tel"],input[type="password"],input[type="hidden"],input[type="number"],input[type="checkbox"],input[type="radio"]:checked,select,textarea').each(function(){

            let name = $(this).attr('name');
            if($(this).attr('disabled') == 'disabled') {
                return true;
            }

            let value = $(this).val();
            if($(this).attr('type') == 'checkbox')
                value = $(this).is(':checked') ? 1 : 0;

            if( name && name != '') {

                if(name.match(/\[/gi)) {
                    let attr = name.match(regex);
                    let replace = '\[' + attr + '\]';
                    let field = name.replace(replace,'');

                    if(!data[field]) {
                        data[field] = {};
                    }
                    let t = data[field];
                    for(let j = 0; j < attr.length; j++){

                        if(t[attr[j]] === undefined){
                            t[attr[j]] = {}
                        }

                        if(j === attr.length - 1)
                            t[attr[j]] = value;
                        else
                            t = t[attr[j]]
                    }
                }
                else {
                    if (!data[name])
                        data[name] = value;
                    else {
                        if (!Array.isArray(data[name])) {
                            var val = data[name];
                            data[name] = [];
                            data[name].push(val);
                        }

                        data[name].push(value);
                    }
                }
            }

        });

        return data;
    },
    modal: function(template,data,opts) {

        let ajaxData = opts || {};
        ajaxData.template = template;
        ajaxData.data = data || {};

        let callback = opts ? opts.callback : function () {} || function(){};

        Tools.ajax('get_modal',ajaxData,function(msg){

            $('body').append(msg.html);

            let $modal = $('#' + msg.id);
            let objModal = new Modal({$modal});
            window.pageObject.modal = [];
            window.pageObject.modal.push(objModal);

            if(callback)
                callback(msg);
        });
    },
    ajax: function (action,data,success,error,file) {

        let is_obj = typeof action == 'object' ? true : false;

        success = is_obj ? action.success : (success ?? function(){});
        error = is_obj ? action.error : (error ?? function(){});

        data = is_obj ? action.data : data;
        if(!data) data = {};

        if(data instanceof FormData) {
            data.append('action',is_obj ? action.action : action);
        }
        else {
            data.action = is_obj ? action.action : action;
        }

        let aparams =  {
            type: 'POST',
            dataType: 'json',
            data: data,
            success: success,
            error: error
        };

        if(is_obj && action.url)
            aparams.url = action.url;

        if((is_obj && action.file) || file) {
            aparams.cache = false;
            aparams.processData = false;
            aparams.contentType = false;
        }

        let ajax_object = $.ajax(aparams);

        return ajax_object;
    },

    getSelector() {
        return {
            html: document.documentElement,
            body: document.querySelector('body'),
            wrapper: document.querySelector('.wrapper'),
        }
    },
    bodyFixPosition () {

        setTimeout( function() {

            let scrollPosition = window.pageYOffset || Tools.getSelector().html.scrollTop;

            Tools.getSelector().body.setAttribute('data-body-scroll-fix', scrollPosition);
            Tools.getSelector().body.classList.add('_locked');

            if (!Tools.isIOS())
                Tools.getSelector().body.classList.add('_fixPadding');

            Tools.getSelector().body.style.top = `-${scrollPosition}px`;
        }, 15 );
    },
    bodyUnfixPosition () {
        let scrollPosition = parseInt(this.getSelector().body.getAttribute('data-body-scroll-fix'));

        this.getSelector().body.removeAttribute('data-body-scroll-fix');

        this.getSelector().body.classList.remove('_locked', '_fixPadding');

        this.getSelector().body.removeAttribute('style');

        window.scroll(0, scrollPosition);
    },
    debounce: function (func, delay) {
        let inDebounce
        return function() {
            const context = this
            const args = arguments
            clearTimeout(inDebounce)
            inDebounce = setTimeout(() => func.apply(context, args), delay)
        }
    },
    throttle(fn, ms) {
        let locked = false;
        return function() {
            if(locked) return;
            const context = this;
            const args = arguments;

            locked = true;

            setTimeout(() => {
                fn.apply(context, args)
                locked = false
            }, ms)
        }
    },
};
