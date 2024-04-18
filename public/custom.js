const search = document.getElementById('search');
const searchResults = document.getElementById('subtopnav');
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


//////////////

const searchitem = document.getElementById('searchCours');
const searchCours = document.getElementById('searchResults');
fetchSearchItemResults();

searchitem.addEventListener("keyup", function() {
  fetchSearchItemResults();
});

function fetchSearchItemResults() {
    console.log('Fetching results');
  fetch(`/searchItem?search=${searchitem.value}`)
    .then(res => res.text())
    .then(data => {
        searchCours.innerHTML = data;
    })
    .catch(error => console.error('Erreur lors de la recherche:', error));
}
///////////filtrage
document.querySelectorAll('input[type="radio"][name="category"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        var checkedCategory = this.value;
        fetch(`/filter?category=${checkedCategory}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById('searchResults').innerHTML = data;
            })
            .catch(error => console.error('Erreur lors du filtrage des cours par category:', error));
    });
});

var currentPage = 1;

$(document).ready(function() {
    $('#prev-page, #next-page').click(function(e) {
        console.log('Previous page clicked');
        e.preventDefault();
        var page = $(this).attr('id') === 'prev-page' ? currentPage - 1 : currentPage + 1;
        loadCourses(page);
    });
});

function loadCourses(page) {
    $.ajax({
        url: '/searchItem?page=' + page,
        type: 'GET',
        success: function(data) {
            $('#searchResults').html(data);
            currentPage = page;
        }
    });

}



////////////SEARCH EXO

