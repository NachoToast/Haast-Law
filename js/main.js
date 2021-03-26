window.addEventListener("DOMContentLoaded", (event) => {
    document.body.classList.remove("preload");
    //setTimeout(load, 1000) // Scuffed
});

function load() {
    let stuff_to_load = document.getElementsByClassName("preload");
    console.log(stuff_to_load.length)
    for (let i = 0, len = stuff_to_load.length; i < len; i++) {
        console.log(stuff_to_load[i].classList + "\n");
    }
}