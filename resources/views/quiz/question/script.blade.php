<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script>
    $(document).ready(function(){
        $(document).on('click', '#addQuestion', function(e){
            e.preventDefault();
            let category_id = $('#category_id').val();
            let question_text = $('#question_text').val();
            $.ajax({
                url: "{{ route('quiz_question.store') }}",
                method:'POST',
                data:{category_id:category_id, question_text:question_text},
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
            let category_id = $(this).data('category_id');
            let question_text = $(this).data('question_text');
            $('#up_id').val(id);
            $('#up_category_id').val(category_id);
            $('#up_question_text').val(question_text);
        });
        $(document).on('click', '#UpdateQuestion', function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_category_id = $('#up_category_id').val();
            let up_question_text = $('#up_question_text').val();
            console.log(up_id + up_category_id + up_question_text)
            $.ajax({
                url: "{{ route('quiz_question.update') }}",
                method: 'POST',
                data: {up_id:up_id, up_category_id:up_category_id, up_question_text:up_question_text},
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
            let question_id = $(this).data('id');
            if(confirm('Are you sure you want to delete this')){
                $.ajax({
                    url: "{{ route('quiz_question.delete') }}",
                    method:"GET",
                    data:{question_id:question_id},
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