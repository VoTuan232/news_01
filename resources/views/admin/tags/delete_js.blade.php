<script>
    $(document).on('click', '#delete', function(e) {
        var id = $(this).data('id');
        $.get("{{ URL::to('manager/tags/edit') }}", {id: id}, function(data) {
            $('#frm-delete').find('#id').val(data.tag.id)
            $('#frm-delete').find('#name').val(data.tag.name)
            $('#deleteTag').modal('show');
        })
    })
    
    $('#frm-delete').on('submit', function(e) {
        e.preventDefault();
        var id = document.getElementById('id').value;
        
        $.post("{{ URL::to('manager/tags/destroy') }}", {id: id}, function(data) {
            $('.tag-info #' + id).remove();
            $('#message').css('display', 'block');
            $('#message').html(data.message);
            $('#message').addClass(data.class_name);
            $('#deleteTag').modal('hide');
        })
    })      
</script>
