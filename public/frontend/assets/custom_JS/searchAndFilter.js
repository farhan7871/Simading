// bentuk jquery
$(document).ready(function() {
    
    // deklarasi variabel 
    var searchQuery = ''
    var category_id = ''

    // ketika field search terfokus (terketik)
    $(document).on('keyup', '#search_madings', function() {
        fetchSearchedMadings($(this).val())
        $('#pagination-div').hide()
        if($(this).val() === '') {
            $('#pagination-div').show()
        }
    })

    // ketika tombol kategori diklik
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
            
        }
    })
}