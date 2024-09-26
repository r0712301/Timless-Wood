var elements = [1, 2, 3, 4, 5];

elements.forEach(element => {
    img = document.getElementById('over-ons-werken-timeline-' + element);
    img.addEventListener('click', function () {
        toggleImg(element);
    })
});

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