<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script>
    $(document).ready(function(){
        $(document).on('click', '#addContact', function(e){
            e.preventDefault();
            let name = $('#name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();
            let address = $('#address').val();
            let message = $('#message').val();
            $.ajax({
                url: "{{ route('contact.store') }}",
                method:'POST',
                data:{name:name, phone:phone, email:email, address:address, message:message},
                success:function(res){
                    $('#addContactModal').modal('hide');
                    $('#addForm')[0].reset();
                    $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Contact data added successfully!", "added success")
                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value){
                        $('.errorMsg').append('<span class="text-danger">'+value+'</span>'+'<br>')
                    });
                }
            });
        });
        
        $(document).on('click', '#deleteButton', function(e){
            e.preventDefault();
            let contact_id = $(this).data('id');
            if(confirm('Are you sure you want to delete this')){
                $.ajax({
                    url: "{{ route('contact.delete') }}",
                    method:"GET",
                    data:{contact_id:contact_id},
                    success:function(res){
                        if(res.status == 'success'){
                            $('.table').load(location.href+' .table');
                            Command: toastr["warning"]("Contact data deleted successfully!", "delete success")
                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                        }
                    }
                });
            }
        });
    });
</script>