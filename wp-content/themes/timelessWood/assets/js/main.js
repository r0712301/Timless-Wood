// Timeline toggle

var elements = [1, 2, 3, 4, 5];

try {
    elements.forEach(element => {
        img = document.getElementById('over-ons-werken-timeline-' + element);
        img.addEventListener('click', function () {
            toggleImg(element);
        })
    });
} catch (error) {
    console.log(error);
}


function toggleImg(id) {
    var imgId = "over-ons-werken-timeline-foto-" + id;
    var img = document.getElementById(imgId);
    var iconId = "over-ons-werken-timeline-icon-" + id;
    var icon = document.getElementById(iconId);


    if (img.style.display === "none") {
        console.log("open");
        img.style.display = "block";
        icon.classList.replace("fa-plus", "fa-minus");
    }
    else {
        console.log("close");
        img.style.display = "none";
        icon.classList.replace("fa-minus", "fa-plus");
    }
}

// go back button

function goBack() {
    window.history.back();
}

// realisatie filter

document.addEventListener('DOMContentLoaded', function () {
    try {
        const filterButtons = document.querySelectorAll('.realisatie-filter-btn');
        const cards = document.querySelectorAll('.realisatie-page-card');

        // Set the initial active button (All)
        const initialActiveButton = document.querySelector('.realisatie-filter-btn[data-category="all"]');
        if (initialActiveButton) {
            initialActiveButton.classList.add('active');
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                const category = this.getAttribute('data-category');

                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to the clicked button
                this.classList.add('active');

                // Filter posts based on the selected category
                cards.forEach(card => {
                    if (category === 'all') {
                        card.style.display = 'block'; // Show all posts if 'All' is selected
                    } else {
                        if (card.classList.contains('category-' + category)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        });
    } catch (error) {
        console.log(error);
    }

});