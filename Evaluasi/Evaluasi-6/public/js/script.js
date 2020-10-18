$(function () {

    $('.tombolUbahData').on('click', function () {
    
        const id = $(this).data('id')
    
        $.ajax({
    
            url : "http://localhost/nyoping/public/admin/getUbah",
            data : {id : id},
            method: "post",
            dataType : "json",
            success : function (data) {
                $('#nama_produk').val(data.nama_barang);
                $('#kategori').val(data.id_kategori);
                $('#harga_produk').val(data.harga_barang);
                $('#gambar').val(data.gambar);
                $('#deskripsi').val(data.deskripsi);
                $('#id').val(data.id_barang);
        }
    
        })
    
    })
    
    })