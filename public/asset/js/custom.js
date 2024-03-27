(function ($) {
    'use strict';

    $(document).on('ready', function () {
        // -----------------------------
        //  Screenshot Slider
        // -----------------------------
        $('.speaker-slider').slick({
            slidesToShow: 3,
            centerMode: true,
            infinite: true,
            autoplay: true,
            arrows:true,
            responsive: [
                {
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
         });
        // -----------------------------
        //  Count Down JS
        // -----------------------------
        $('.timer').syotimer({
            year: 2017,
            month: 12,
            day: 9,
            hour: 20,
            minute: 30
        });
        // -----------------------------
        // To Top Init
        // -----------------------------
        $('.to-top').click(function() {
          $('html, body').animate({ scrollTop: 0 }, 'slow');
          return false;
        });

        // -----------------------------
        // Magnific Popup
        // -----------------------------
        $('.image-popup').magnificPopup({
            type: 'image',
            removalDelay: 160, //delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function () {
                    // just a hack that adds mfp-anim class to markup
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            closeOnContentClick: true,
            midClick: true,
            fixedContentPos: false,
            fixedBgPos: true

        });
        // -----------------------------
        // Mixitup
        // -----------------------------
        var containerEl = document.querySelector('.gallery-wrapper');
        var mixer;
        if (containerEl) {
            mixer = mixitup(containerEl);
        }
    });

})(jQuery);


//SEARCH
const search = document.getElementById('search');
const searchResults = document.getElementById('searchResults');
fetchSearchResults();

search.addEventListener("keyup", function() {
  fetchSearchResults();
});

function fetchSearchResults() {
  fetch(`/search?search=${search.value}`)
    .then(res => res.text())
    .then(data => {
      searchResults.innerHTML = data;
    })
    .catch(error => console.error('Erreur lors de la recherche:', error));
}

////////filtrage function
document.querySelectorAll('input[type="radio"][name="category"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        var checkedCategory = this.value;
        fetch(`/filter?category=${checkedCategory}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('searchResults').innerHTML = data;
            })
            .catch(error => console.error('Erreur lors du filtrage des events:', error));
    });
});


///////PAGINATION////////
var currentPage = 1;
    $(document).ready(function() {
        $('#prev-page, #next-page').click(function(e) {
            e.preventDefault();
            var page = $(this).attr('id') === 'prev-page' ? currentPage - 1 : currentPage + 1;
            loadEvents(page);
        });
    });

    function loadEvents(page) {
        $.ajax({
            url: '/search?page=' + page,
            type: 'GET',
            success: function(data) {
                $('#searchResults').html(data);
                currentPage = page;
            }
        });
    }
