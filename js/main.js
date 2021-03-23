window.addEventListener("DOMContentLoaded", (event) => {
    document.body.classList.remove("preload");
    setTimeout(load, 1000) // Scuffed
});

function load() {
    let stuff_to_load = document.getElementsByClassName("preload");
    for (let i = 0, len = stuff_to_load.length; i < len; i++) {
        stuff_to_load[i].classList.remove("preload");
    }
}