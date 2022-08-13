const container = document.querySelector(".container");


// container.classList.add("sign-up-mode");


/*******  incrémentation date  *****/

var min = new Date().getFullYear(),
    max = min + 9,
    select = document.getElementById('selectElementId');

x = min - 2001;
for (var i = min; i >= min - x; i--) {
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}