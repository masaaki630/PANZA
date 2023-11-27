document.addEventListener("DOMContentLoaded", function () {
    var heartContainers = document.querySelectorAll(".checked_shohin_price .heart-container");

    heartContainers.forEach(function (container) {
        container.addEventListener("click", function () {
            var heartIcon = container.querySelector("i.fa-heart");

            // 現在のクラスを取得し、fa-regularかfa-solidかを切り替える
            var currentClass = heartIcon.classList.contains("fa-regular") ? "fa-regular" : "fa-solid";

            // 切り替えるアイコンに応じてクラスを変更し、色も変更する
            if (currentClass === "fa-regular") {
                heartIcon.classList.remove("fa-regular");
                heartIcon.classList.add("fa-solid");
                heartIcon.style.color = "red";
            } else {
                heartIcon.classList.remove("fa-solid");
                heartIcon.classList.add("fa-regular");
                heartIcon.style.color = "";
            }
        });
    });
});

