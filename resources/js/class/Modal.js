export class Modal {

    constructor(params) {
        this.$modal = params.$modal;

        this._init(this.$modal, this);
    }

     _init($modal, obj) {
        if(!$(this.getSelector().body).hasClass('_locked')) {
            this.bodyFixPosition(obj);
        }

        this.openModal($modal);

        $modal.find('[data-modal-close]').one('click', this.closeModal.bind(this));
    }

    openModal($modal) {
        setTimeout(() => $modal.addClass('_show'), 300);
        setTimeout(() => $modal.find('.modal__wrapper').addClass('_show'), 400);
    }

    closeModal() {
        const obj = this;
        this.$modal.removeClass('_show');

        setTimeout(() => {
            obj.$modal.next('script').remove(); // на случай, если есть скрипты для модалки
            obj.$modal.remove()
        }, 400)

        setTimeout(() => {
            if($('.modal._show').length === 0) {
                obj.bodyUnfixPosition();
            }
        }, 500)
    }

    getSelector() {
        return {
            html: document.documentElement,
            body: document.querySelector('body'),
            wrapper: document.querySelector('.wrapper'),
        }
    }

    bodyFixPosition (obj) {

        setTimeout( function() {

            let scrollPosition = window.pageYOffset || obj.getSelector().html.scrollTop;

            obj.getSelector().body.setAttribute('data-body-scroll-fix', scrollPosition); // Cтавим атрибут со значением прокрутки
            obj.getSelector().body.classList.add('_locked');

            if (!Tools.isIOS())
                obj.getSelector().body.classList.add('_fixPadding');

            obj.getSelector().body.style.top = `-${scrollPosition}px`;
        }, 15 );
    }

    bodyUnfixPosition () {
        let scrollPosition = parseInt(this.getSelector().body.getAttribute('data-body-scroll-fix'));

        this.getSelector().body.removeAttribute('data-body-scroll-fix');

        this.getSelector().body.classList.remove('_locked', '_fixPadding');

        this.getSelector().body.removeAttribute('style');

        window.scroll(0, scrollPosition);
    }

    toggleBodyPosition () {
        if ( !this.getSelector().body.hasAttribute('data-body-scroll-fix') ) {
            this.bodyFixPosition();
        }else {
            this.bodyUnfixPosition();
        }
    }
}