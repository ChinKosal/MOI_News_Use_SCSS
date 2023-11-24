// Get the button
var mybutton = document.getElementById("myBtn");
let menufixd = document.querySelector(".navbar");
console.log("hello");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
        menufixd.classList.add("navbar-sticky");
    } else {
        mybutton.style.display = "none";
        menufixd.classList.remove("navbar-sticky");
    }
}

mybutton.onclick = function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
};
