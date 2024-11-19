// jquery tolong ambilkan saya dokumen dan jika siap
// jalankan fungsi berikut
$(document).ready(function(){
    // hilangkan tombol cari
    $('#tombol-cari').hide();

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
    // munculkan icon loading
    $('.loader').show();

//     ajax menggunakan load
//     // load terbatas hanya bisa get tidak bisa post
    // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());


        // $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){

            $('#container').html(data);
            $('.loader').hide();

        });

});

});

// var keyword = document.getElementById('keyword');
// keyword.addEventListener('keyup',function(){
//     console.log('ok');
// });