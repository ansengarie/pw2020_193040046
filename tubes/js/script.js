const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

//hilangkan tombol cari
tombolCari.style.display = 'none';


// event ketika menuliskan keyword
keyword.addEventListener('keydown', function () {
  //ajax


  // //xmklhttprequest
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = xhr.responseText;
  //   }
  // };

  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // xhr.send();

  //fetch()
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((respone) => respone.text())
    .then((respone) => (container.innerHTML = respone));
});

// preview image untuk tambah dan ubah
function previewImage() {
  const foto = document.querySelector('.foto');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(foto.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}