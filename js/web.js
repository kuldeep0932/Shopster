var flag = 0;
function next() {
    flag = flag + 1;
    sliderimage(flag);
}

function previous() {
    flag = flag - 1;
    sliderimage(flag);
}

sliderimage(flag);
function sliderimage(num) {
    var slide = document.getElementsByClassName("slide_image");
    if (num == slide.length) {
        flag = 0;
        num = 0;
    }
    if (num < 0) {
        flag = slide.length - 1;
        num = slide.length - 1;
    }
    for (let y of slide) {
        y.style.display = 'none';
    }
    slide[num].style.display = "block";
}

var a = document.getElementById("right");
a.addEventListener("click", next);

var b = document.getElementById("left");
b.addEventListener("click", previous);


setInterval(function () {
    next()
}, 8000);


//   Function for dark mode by clicking moon icon
// var moon = document.getElementById("dark_logo");
// moon.onclick = function () {
//     document.body.classList.toggle("dark_theme");
//     if (document.body.classList.contains("dark_theme")) {

//         document.getElementById("change_img").src =" Tradestr";
//         const iconElement = document.getElementById('dark_logo');
//         function changeIcon() {
//             iconElement.classList.remove('fa-moon');
//             iconElement.classList.add('fa-sun');
//         }
//         changeIcon();
//     }
//     else {
//         document.getElementById("change_img").src = "https://cdn.shopify.com/s/files/1/0710/9122/4872/files/logo_0d694945-8120-47a1-ae7b-abaee0a34889_130x.png?v=1674635068";
//         const iconElement = document.getElementById('dark_logo');
//         function changeIcon() {
//             iconElement.classList.remove('fa-sun');
//             iconElement.classList.add('fa-moon');
//         }
//         changeIcon();
//     }
// }

// Function to change the Font Awesome icon
// function changeIcon() {
//   iconElement.classList.remove('fa-moon');
//   iconElement.classList.add('fa-sun');
// }

var content=document.getElementById("content");
var content1=document.getElementById("content1");
function dflex(){
    content.style.display="flex";
    content1.style.display="flex";
}
function dnone(){
    content.style.display="none";
    content1.style.display="none";
}


// Function to show and close form on popup
function show_form(){
    document.getElementById("popup_container").style=`display:flex;`;
}
show = document.getElementById("prev");
show.addEventListener("click",show_form);
function close_form(){
    document.getElementById("popup_container").style="display:none;";
}
close_btn = document.getElementById("close");
close_btn.addEventListener("click",close_form);

outside_close = document.getElementById("popup_container");
outside_close.addEventListener("click",close_form);


// Function to slide review section

var f = 0;
function r_next() {
    f = f + 1;
    slidereview(f);
}

function r_previous() {
    f = f - 1;
    slidereview(f);
}
slidereview(f);
function slidereview(num) {
    var review = document.getElementsByClassName("review_container");
    if (num == review.length) {
        f = 0;
        num = 0;
    }
    if (num < 0) {
        f = review.length - 1;
        num = review.length - 1;
    }
    for (let y of review) {
        y.style.display = 'none';
    }
    review[num].style.display = "block";
}

var a = document.getElementById("r-right");
a.addEventListener("click", r_next);

var b = document.getElementById("r-left");
b.addEventListener("click", r_previous);


setInterval(function () {
    r_next()
}, 3000);







