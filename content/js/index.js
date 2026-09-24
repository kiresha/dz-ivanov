const popup = document.getElementById('popup');
const closeBtn = document.getElementById('closeBtn');

if (!sessionStorage.getItem('promo')) {
    popup.classList.add('show');
}

function hide() {
    popup.classList.remove('show');
    sessionStorage.setItem('promo', '1');
}

closeBtn.onclick = hide;

popup.onclick = function(e) {
    if (e.target == popup) hide();
};

document.onkeydown = function(e) {
    if (e.key == 'Escape' && popup.classList.contains('show')) hide();
};