class SliderCustom {
    constructor(options) {
        this.slideIndex = options.slideIndex
        this.$next = document.querySelector(options.buttonNext)
        this.$prev = document.querySelector(options.buttonPrev)
        this.$doc = document
        this.$next.onclick = this.nextSlide.bind(this)
        this.$prev.onclick = this.prevSlide.bind(this)
        this.$doc.onload = this.showSlides(this.slideIndex)
    }

    showSlides(n) {

        let slides = document.getElementsByClassName('item');

        if (n > slides.length) {
            this.slideIndex = 1
        }

        if (n < 1) {
            this.slideIndex = slides.length
        }

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }

        slides[this.slideIndex - 1].style.display = 'block';

    }

    nextSlide() {
        this.showSlides(this.slideIndex += 1);
    }

    prevSlide() {
        this.showSlides(this.slideIndex -= 1);
    }

}

class menuSlider {
    constructor(options) {
        this.$btnopen = document.querySelector(options.openButton);
        this.$menucontainer = document.querySelector(options.container);
        this.$btnopen.onclick = this.show.bind(this);
        this.$menucontainer.onclick = this.hide.bind(this);
    }

    show() {
        let $menuchild = this.$menucontainer.firstElementChild;
        this.$menucontainer.style.visibility = "visible";
        this.$menucontainer.style.opacity = "1";
        $menuchild.classList.add("menu-container-transition");
    }

    hide(e) {
        let $menuchild = this.$menucontainer.firstElementChild;
        if (e.target.classList.value === "menu-wrapper") {
            this.$menucontainer.style.opacity = "0";
            this.$menucontainer.style.visibility = "hidden";
            $menuchild.classList.remove("menu-container-transition");
        }
    }
}

const swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
});

const swipercustom = new SliderCustom ({
    slideIndex: 1,
    buttonNext: '.next',
    buttonPrev: '.prev'
})

const menu = new menuSlider({
    openButton: '.menu-opener',
    container: '.menu-wrapper',
});


