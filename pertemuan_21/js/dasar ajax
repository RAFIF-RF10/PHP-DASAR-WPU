// ambil elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// event js ada : click, dblclick/doubleclick, mouseover
// tombolCari.addEventListener('click', function(){
//     alert('berhasil!!');
// });

// tambahkan event ketika keyword ditulis
// keypress : ketika kita menuliskan sesuatu di inputnya
// keyup : ketika kita melepas tangan dari keyboard
// keydown :
keyword.addEventListener('keyup', function(){
    
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if( xhr.readyState == 4 && xhr.status == 200 ){
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();

});