document.addEventListener("DOMContentLoaded", function() {
    const signoutBtn = document.getElementById("signout");
    const noBtn = document.getElementById("nobtn");
    const yesBtn = document.getElementById("yesbtn");
    const out = document.getElementById("out");

    signoutBtn.addEventListener("click", () => {
        out.classList.add("open");
    });

    noBtn.addEventListener("click", () => {
        out.classList.remove("open");
    });

    yesBtn.addEventListener("click", () => {
        out.classList.remove("open");
    });
});
