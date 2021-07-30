// bentuk jquery
$(document).ready(function() {
    
    // deklarasi variabel 
    var searchQuery = ''
    var category_id = 'all'

    // ketika field search terfokus (terketik)
    $(document).on('keyup', '#search_madings', function() {
        searchQuery = $(this).val()
        fetch_data(category_id, searchQuery)
        $('#pagination-div').hide()
        if($(this).val() === '') {
            $('#pagination-div').show()
        }
    })

    // ketika tombol kategori diklik
    $(document).on('click', '.category-cb', function() {
        $('.category-cb').each(function() {
            if($(this).is(':checked')) {
                console.log('id kategori: '+$(this).val())
                category_id = $(this).val()
                $('#pagination-div').hide()
                fetch_data(category_id, searchQuery)
            }

        })
        // ketika tidak terdapat tombol kategori yang terpilih
        if($('.category-cb').not(':checked').length === $('.category-cb').length) {
            console.log('not checked')
            category_id = 'all'
            fetch_data(category_id, searchQuery)
            $('#pagination-div').show()
        }
    })
})

// fungsi fetch data menggunakan ajax jquery
function fetch_data(id, query = '') {
    // menghilangkan list mading pada tampilan
    $('#data-madings-div').empty()

    // request dalam bentuk ajax
    $.ajax({
        type: 'GET',
        url: '/mading/fetch_data/' + id,
        data: {query:query},
        dataType: 'json',
        success:function(response) {
            if (response.data.length == 0) {
                // jika data kosong
                $('#data-madings-div').html(`<div class="col"><p class="text-center">Data tidak ditemukan 😭</p></div>`);
            } else {
                $('#data-madings-div').empty()
                var iter = 0
                // iterasi append element html
                response.data.forEach(element => {
                    iter++
                    const date = new Date(element.updated_at)
                    console.log('iterasi: '+iter)
                    console.log(element.created_at)
                    $('#data-madings-div').append(`
                    <div class="my-3 mx-3">
                        <div class="card shadow text-center bg-white" style="width: 250px; height: 370px; background-color: #11638a;">
                            <div class="card-header">
                                <h3>${element.kelola_kategori.kategori}</h2>
                            </div>
                            <a href="/mading/${element.id}">
                                <img class="card-img-top" style="width: 100%; height: 15vw; object-fit:cover;" src="/storage/${element.gambar}" alt="">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-truncate"> ${element.judul}</h6>
                                <h6 class="card-text text-truncate"> ${element.deskripsi}</h6>
                                <p> Terbit: ${date.toLocaleString('in-ID', {day: 'numeric', month: 'long', year: 'numeric'})}</p>
                            </div>
                        </div>
                    </div>
                    `)
                })
            }
        }
    })
}