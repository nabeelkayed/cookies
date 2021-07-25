function setLocalStorage(color) {
    localStorage.setItem("FavColor", color);
    visibility();
}

function changeColor() {
    document.body.style.background = localStorage.getItem("FavColor");
}

function visibility() {
    if (localStorage.getItem("FavColor") != null)
        document.getElementById('div').style.display = "none";
    else
        document.getElementById('div').style.display = "block";
}

function removeFavColor() {
    localStorage.removeItem("FavColor");
    document.body.style.background = "white";
    visibility();
}