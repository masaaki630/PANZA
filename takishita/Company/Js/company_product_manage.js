

document.getElementById('selectImages').addEventListener('click', function() {
  document.getElementById('imageModal').style.display = 'block';
});

function selectImage(imageName) {
  var selectedImagesDiv = document.getElementById('selectedImages');
  selectedImagesDiv.innerHTML += '<img src="' + imageName + '">';

  var imageNamesInput = document.getElementById('imageNames');
  if (imageNamesInput.value != '') {
      imageNamesInput.value += ',';
  }
  imageNamesInput.value += imageName;
}
