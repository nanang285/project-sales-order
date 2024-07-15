<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('swipers/swiper-bundle.min.js') }}"></script>

<script>
    // Menutup lightbox saat diklik
    document.addEventListener('click', function(event) {
        const lightbox = document.querySelector('.lb-container');
        if (lightbox && lightbox.contains(event.target)) {
            lightbox.closest('.lb-outerContainer').querySelector('.lb-close').click();
        }
    });
</script>

<script>
  $(document).ready(function () {
    var swiperLatestProject = new Swiper('.swiper-latest-project', {
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
            1024: {
                slidesPerView: 1.7,
                spaceBetween: 45,
            },
        },
        navigation: {
            prevEl: '.swiper-latest-project .button-next',
        },
        loop: true,
    });

    $('.button-next').on('click', function () {
        swiperLatestProject.slideNext();
    });
});



const swiperKlienKami = new Swiper('.swiper-klien-kami', {
    slidesPerView: 1,
    spaceBetween: 13,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },
    pagination: {
        el: '.swiper-klien-kami .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-klien-kami .swiper-button-next',
        prevEl: '.swiper-klien-kami .swiper-button-prev',
    },
    loop: true,
    autoplay: {
        delay: 3000, // delay in milliseconds
        disableOnInteraction: false, // enable autoplay even when user interacts with swiper
    },
});

</script>

<script>
    // Check password
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var currentType = passwordInput.getAttribute("type");
        
        if (currentType === "password") {
            passwordInput.setAttribute("type", "text");
        } else {
            passwordInput.setAttribute("type", "password");
        }
    }
</script>

<script>
    AOS.init();
</script>

</body>

</html>
