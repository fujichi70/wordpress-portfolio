"use strict";

{
    window.addEventListener("load", () => {
        const elements = document.querySelectorAll(".target");
        const options = {
            threshold: 0.3,
        };
        const observer = new IntersectionObserver(callBack, options);

        registObserver();

        function registObserver() {
            for (let i = 0; i < elements.length; i++) {
                observer.observe(elements[i]);
            }
        }

        function callBack(entries, observer) {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }
                entry.target.classList.add("appear");
                observer.unobserve(entry.target);
            });
        }
    });
}
