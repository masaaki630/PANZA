function handleFileUpload() {
    var fileInput = document.querySelector('.file-upload');
    var uploadedFilesContainer = document.querySelector('.uploaded-files');

    // 既存の子要素があれば削除
    while (uploadedFilesContainer.firstChild) {
        uploadedFilesContainer.removeChild(uploadedFilesContainer.firstChild);
    }

    fileInput.addEventListener('change', function() {
        var files = fileInput.files;

        for (var i = 0; i < files.length; i++) {
            var fileName = files[i].name;

            // アイコンと画像名を追加する関数を呼び出す
            addFileWithName(fileName);
        }
    });
}

function addFileWithName(fileName) {
    var uploadedFilesContainer = document.querySelector('.uploaded-files');

    // アップロードされた画像名を表示するための新しい要素を作成
    var fileNameElement = document.createElement('span');
    fileNameElement.innerText = fileName;

    // アイコンを表示するための新しい要素を作成
    var iconElement = document.createElement('i');
    iconElement.classList.add('fas', 'fa-image'); // FontAwesomeのアイコンクラスを指定

    // アイコンと画像名を包む要素を作成
    var fileInfoContainer = document.createElement('div');
    fileInfoContainer.classList.add('file-info');
    fileInfoContainer.appendChild(iconElement);
    fileInfoContainer.appendChild(fileNameElement);

    // 削除ボタンを作成
    var deleteButton = document.createElement('button');
    deleteButton.innerText = '削除';
    deleteButton.addEventListener('click', function() {
        // 削除ボタンが押されたらその親要素を削除
        var fileContainer = deleteButton.closest('.file-container');
        if (fileContainer) {
            uploadedFilesContainer.removeChild(fileContainer);
        }
    });

    // 画像名、アイコン、削除ボタンを包む要素を作成
    var fileContainer = document.createElement('div');
    fileContainer.classList.add('file-container');
    fileContainer.appendChild(fileInfoContainer);
    fileContainer.appendChild(deleteButton);

    // 作成した要素をコンテナに追加
    uploadedFilesContainer.appendChild(fileContainer);
}