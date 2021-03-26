window.addEventListener("DOMContentLoaded", (event) => {
    //normalize_article_heights(); To do: Fix this.
});

function normalize_article_heights() {
    let containers = document.getElementsByClassName("article_containers");
    for (let i = 0, len = containers.length; i < len; i++) { // For each container
        let heights = [];
        let articles = containers[i].children;
        for (let j = 0, len2 = articles.length; j < len2; j++) { // Get current heights
            heights.push(articles[j].children[0].getBoundingClientRect().height);
        }
        let max_height = Math.max(...heights);
        for (let j = 0, len2 = articles.length; j < len2; j++) { // Update heights below max
            if (heights[j] < max_height) {
                articles[j].children[0].style.height = `${max_height-10}px`;
            }
        }
    }
}