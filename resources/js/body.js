// Get the button
var mybutton = document.getElementById("myBtn");
let menufixd = document.querySelector(".navbar");
let headerfix = document.querySelector(".header");

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
        headerfix.classList.add("header-sticky");
    } else {
        mybutton.style.display = "none";
        menufixd.classList.remove("navbar-sticky");
        headerfix.classList.remove("header-sticky");
    }
}

mybutton.onclick = function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
};

// show dailog
document.addEventListener("DOMContentLoaded", function () {
    // Get the elements
    const sidebarContainer = document.getElementById("showdialog");
    const openToggle = document.getElementById("OpenToggle");
    const exitToggle = document.getElementById("exittoogle");
    // Function to toggle the sidebar
    function toggleSidebar() {
        const currentRight = parseInt(getComputedStyle(sidebarContainer).right);

        // Toggle the sidebar's right position
        sidebarContainer.style.right = currentRight === 0 ? "-2000px" : "0";
    }

    // Attach click event to the open toggle button
    openToggle.addEventListener("click", toggleSidebar);

    exitToggle.addEventListener("click", function () {
        // Set the modal's right position to -2000px
        sidebarContainer.style.right = "-2000px";
    });
});

// modal
document.addEventListener("DOMContentLoaded", function () {
    // Get all buttons and modals
    const showDialogButtons = document.querySelectorAll(".showDailog");
    const closeDialogButtons = document.querySelectorAll(".closeDailog");
    const shareDialogs = document.querySelectorAll(".share_dialog");

    // Function to toggle the modal
    function toggleModal(index) {
        if (shareDialogs[index]) {
            shareDialogs[index].style.display =
                shareDialogs[index].style.display === "none" ||
                shareDialogs[index].style.display === ""
                    ? "block"
                    : "none";
        }
    }

    // Attach click event to all show dialog buttons
    showDialogButtons.forEach((button, index) => {
        button.addEventListener("click", () => toggleModal(index));
    });

    // Attach click event to all close dialog buttons
    closeDialogButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
            if (shareDialogs[index]) {
                shareDialogs[index].style.display = "none";
            }
        });
    });
});
