document.addEventListener("DOMContentLoaded", function() {
    const selectBtn = document.querySelector(".select-btn");
    const options = document.querySelector(".options");
    const selectedItems = document.querySelector(".selected-items");
    const totalPriceElement = document.querySelector(".total-price");

    let totalPrice = 0;

    selectBtn.addEventListener("click", () => {
        options.classList.toggle("active");
    });

    document.querySelectorAll(".option").forEach(option => {
        option.addEventListener("click", () => {
            const price = parseFloat(option.getAttribute("data-price"));
            const imageSrc = option.getAttribute("data-image");
            const text = option.querySelector(".option-text").textContent;

            const listItem = document.createElement("li");
            listItem.innerHTML = `<img src="${imageSrc}" alt="${text}"><span>${text}</span>`;
            selectedItems.appendChild(listItem);

            totalPrice += price;
            totalPriceElement.textContent = totalPrice.toFixed(2);

            options.classList.remove("active");
            selectBtn.querySelector(".sBtn-text").textContent = "Select your option";
        });
    });

    document.addEventListener("click", function(event) {
        if (!selectBtn.contains(event.target) && !options.contains(event.target)) {
            options.classList.remove("active");
        }
    });

    // Function to update the time every second
    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString();
        document.getElementById('time').textContent = timeString;
    }

    // Update the time immediately and then every second
    updateTime();
    setInterval(updateTime, 1000);
});
