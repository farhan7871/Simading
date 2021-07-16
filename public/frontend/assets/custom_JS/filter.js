$(document).ready(function() {
    $(document).on('click', '.category-cb', function() {
        $('.category-cb').each(function() {
            if($(this).is(':checked')) {
                console.log($(this).val())
                $('#pagination-div').hide()
                fetchDataByCategory($(this).val())
            }

        })

        if($('.category-cb').not(':checked').length === $('.category-cb').length) {
            console.log('not checked')
            fetchDataByCategory('all')
            $('#pagination-div').show()
        }
    })

})

function fetchDataByCategory(id) {
    $('#data-madings-div').empty()

    $.ajax({
        type: 'GET',
        url: '/filter/categories/' + id,
        success: function (response) {
            console.log(response.data)
            // var response = JSON.parse(response)

            if (response.data.length == 0) {
                $('#data-madings-div').append(`<p class="text-center">Data tidak ditemukan 😭</p>`);
            } else {
                response.data.forEach(element => {
                    $('#data-madings-div').append(`
                    <div class="my-3 mx-3">
                        <div class="card shadow text-center bg-white" style="width: 250px; height: 370px; background-color: #11638a;">
                            <div class="card-header">
                                <h3>${element.kelola_kategori.kategori}</h2>
                            </div>
                            <a href="{{ url('/mading/'.${element.id}) }}">
                                <img class="card-img-top" style="width: 100%; height: 15vw; object-fit:cover;" src="/storage/${element.gambar}" alt="">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title text-truncate"> ${element.deskripsi}</h6>
                                <p> Terbit: ${element.created_at}</p>
                            </div>
                        </div>
                    </div>
                    `)
                })
            }
        }
    })
}