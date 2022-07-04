"use strict";

{
    document.addEventListener("DOMContentLoaded", () => {
        const returnTop = document.querySelector(".return-top");

        // スクロールバー
        window.addEventListener("scroll", () => {
            if (200 < window.scrollY) {
                returnTop.style.visibility = "visible";
            } else {
                returnTop.style.visibility = "hidden";
            }
        });

        returnTop.addEventListener("click", () => {
            window.scrollTo(0, 0);
        });
    });
}
