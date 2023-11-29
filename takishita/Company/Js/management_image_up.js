

document.addEventListener('DOMContentLoaded', function () {
    // 画像の追加ボタンのクリックイベント
  document.getElementById('add-image-button').addEventListener('click', function () {
    const newImgDiv = document.createElement("div");
    newImgDiv.className = "image_container";
    const divChild=document.getElementById("image-upload-container").appendChild(newImgDiv);
    const newInput = document.createElement('input');
    newInput.type = 'file';
    newInput.name = 'images[]';  // 同じ名前を持つため、サーバー側で配列として受け取ることができます。
    newInput.className = "images";
    newInput.accept = 'image/*';
    newInput.addEventListener('change', image);
    newImgDiv.appendChild(newInput);
    newImgDiv.appendChild(document.createElement('br'));
    const newDiv = document.createElement('div');
    newDiv.className = "image-preview";
    const newImg = document.createElement('img');
    newImg.src = "";
    newImg.className = "image_prev";
    newImg.style = "display:none";
    divChild.appendChild(newDiv);
    divChild.appendChild(newDiv).appendChild(newImg);
    divChild.appendChild(document.createElement('br'));
  });
});

function image() {
  const container = document.querySelectorAll(".image_container");
  container.forEach(function (cont) {
    const images = cont.querySelector(".images");
    const img_prev = cont.querySelector(".image_prev");
    const file = images.files[0];
    if (file) {
      img_prev.src = URL.createObjectURL(file);
      img_prev.style.display = "block";
    }
    else {
      img_prev.style.display = "none";
    }
  });
}
