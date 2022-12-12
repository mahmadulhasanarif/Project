<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script>
    $(document).ready(function(){
        $(document).on('click', '#addCategory', function(e){
            e.preventDefault();
            let name = $('#name').val();
            $.ajax({
                url: "{{ route('quiz_category.store') }}",
                method:'POST',
                data:{name:name},
                success:function(res){
                    $('#addModal').modal('hide');
                    $('#addForm')[0].reset();
                    $('.table').load(location.href+' .table');
                    Command: toastr["success"]("Data added successfully!", "added success")
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
        // edit Product
        $(document).on('click', '.updateButton', function(){
            let id = $(this).data('id');
            let name = $(this).data('name');
            let price = $(this).data('price');
            $('#up_id').val(id);
            $('#up_name').val(name);
            $('#up_price').val(price);
        });
        $(document).on('click', '#UpdateCategory', function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_name = $('#up_name').val();
            let up_price = $('#up_price').val();
            console.log(up_id + up_name + up_price)
            $.ajax({
                url: "{{ route('quiz_category.update') }}",
                method: 'POST',
                data: {up_id:up_id, up_name:up_name, up_price:up_price},
                success:function(res){
                    if(res.status == 'success'){
                        $('#updateModal').modal('hide');
                        $('#updateForm')[0].reset();
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Product data updated successfully!", "update success")
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
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value){
                        $('.errorMsg').append('<span class="text-danger">'+value+'</span>'+'<br>')
                    });
                }
            });
        });

        // delete
        $(document).on('click', '#deleteButton', function(e){
            e.preventDefault();
            let category_id = $(this).data('id');
            if(confirm('Are you sure you want to delete this')){
                $.ajax({
                    url: "{{ route('quiz_category.delete') }}",
                    method:"GET",
                    data:{category_id:category_id},
                    success:function(res){
                        if(res.status == 'success'){
                            $('.table').load(location.href+' .table');
                            Command: toastr["warning"]("Data deleted successfully!", "deleted success")
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

        // paginate
        $(document).on('click', '.pagination a', function(e){
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            paginator(page);
        });
        function paginator(page){
            $.ajax({
                url: '/paginator?page='+page,
                success:function(res){
                    $('.card-body').html(res);
                }
            });
        }

    });
</script>