let flag = 0;
function setCookie(FavColor, color) {
    document.cookie = FavColor + "=" + color + ";";
    visibility();
}
function removeFavColor() {
    document.cookie = "FavColor= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"
    document.body.style.background = "white";
    flag = 0;
    visibility();
}

function getCookie() {
    let ca = document.cookie;
    let cookies = ca.split(';')
    for (let i = 0; i < cookies.length; i++) {
        let co = cookies[i];
        if (co.indexOf("FavColor=") == 0) {
            return co.substring("FavColor=".length, co.length) + "";
        }
    }
}

function changeColor() {
    document.body.style.background = getCookie();
}

function visibility() {
    let ca = document.cookie;
    let cookies = ca.split(';')
    for (let i = 0; i < cookies.length; i++) {
        let co = cookies[i];
        if (co.indexOf("FavColor=") == 0) {
            flag = 1
        }
    }
    if (flag)
        document.getElementById('div').style.display = "none";
    else
        document.getElementById('div').style.display = "block";
}

