document.addEventListener("DOMContentLoaded", function () {
    let currentIndex = 0;
    const images = document.querySelectorAll("#slideshow-container img");

    function showImage(index) {
        const newPosition = index * -100 + "%";
        document.querySelector("#slideshow-container").style.transform = "translateX(" + newPosition + ")";
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    images.forEach(function(image,index){
        console.log(images);
        const newPosition = index * -100 + "%";
        image.style.transform = "translateX(" + newPosition + ")";
    });

    // 各画像をクリックすると次の画像に切り替える
    images.forEach(function (image, index) {
        image.addEventListener("click", function () {
            console.log(images);
            if(images.length - 1 == index){
                index = 0;
            }
            // const newPosition = index * -100 + "%";
            // image.style.transform = "translateX(" + newPosition + ")";

            currentIndex = index;
            showImage(currentIndex);
        });
    });

    // 最初の画像表示
    showImage(currentIndex);
});