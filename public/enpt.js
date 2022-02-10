$(document).ready(function(){
    $(document).on('click', '.deleteReplace,.deleteSupervisor', function(){
        $('#deleteModal').modal('show');
    });

    $('#supervisor-tbl').DataTable();
});
