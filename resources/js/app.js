document.getElementById("menu-btn").addEventListener("click", function () {
    document.getElementById("mobile-menu").classList.toggle("hidden");
});

(function () {
    var slide = document.getElementById("testimonial-slide");
    var dots = document.querySelectorAll("#testimonial-dots button");
    var active = 0;
    function go(i) {
        active = i;
        slide.style.transform = "translateX(-" + i * 100 + "%)";
        dots.forEach(function (d, idx) {
            d.classList.toggle("w-6", idx === i);
            d.classList.toggle("bg-(--gold)", idx === i);
            d.classList.toggle("bg-white/30", idx !== i);
        });
    }
    dots.forEach(function (d, i) {
        d.addEventListener("click", function () {
            go(i);
        });
    });
    setInterval(function () {
        go((active + 1) % dots.length);
    }, 6000);
})();
