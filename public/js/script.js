$(function() {

    // Add button Form
    $('#buttonAdd').on('click', () => {
        
        $('#name').val('');
        $('#birth').val('');
        $('#gender').val('Male');
        $('#about').val('');
        $('#id').val('');
        // $('#image').val('');


        $('#modalTitle').html('Add New Seiyuu');
        $('.modal-footer button[type=submit]').html('Add Data');
        $('modal-body form').attr('action', 'http://localhost/mvc/public/seiyuu/add');



    })
    
    // Edit button Form
     $('.showModalEdit').on('click', function() {

        $('#modalTitle').html('Edit Data Seiyuu');
        $('.modal-footer button[type=submit]').html('Save Changes');
        $('.modal-body form').attr('action', 'http://localhost/mvc/public/seiyuu/change');

        const id = $(this).data("id");

        $.ajax({
            url: 'http://localhost/mvc/public/seiyuu/getchange',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: (data) => {
                // console.log(data);
                $('#name').val(data.name);
                $('#birth').val(data.birth);
                $('#gender').val(data.gender);
                $('#about').val(data.about);
                // $('#image').val(data.image);
                $('#id').val(data.id);
                // console.log(data.image);
            }
        });

     });
});