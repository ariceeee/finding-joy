document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".filter");
    const gallery = document.querySelector(".gallery");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            // Deselect all
            buttons.forEach(btn => btn.classList.remove("selected"));

            // Select one that was clicked
            button.classList.add("selected");

            const selectedTopic = button.innerHTML.trim();

            // make request to filter.php for json processing (use ajax so don't have to refresh page)
            fetch("filter.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "filter=" + encodeURIComponent(selectedTopic)
            })
            .then(res => res.text())
            .then(html => {
                // output response to the document
                gallery.innerHTML = html; 
            });
        });
    });
});