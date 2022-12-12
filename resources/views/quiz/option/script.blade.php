<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script>
    $(document).ready(function(){
        $(document).on('click', '#addOption', function(e){
            e.preventDefault();
            let question_id = $('#question_id').val();
            let option_text = $('#option_text').val();
            let points = $('#points').val();
            $.ajax({
                url: "{{ route('quiz_option.store') }}",
                method:'POST',
                data:{question_id:question_id, option_text:option_text, points:points},
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
            let question_id = $(this).data('question_id');
            let option_text = $(this).data('option_text');
            let points = $(this).data('points');
            $('#up_id').val(id);
            $('#up_question_id').val(question_id);
            $('#up_option_text').val(option_text);
            $('#up_points').val(points);
        });
        $(document).on('click', '#UpdateOption', function(e){
            e.preventDefault();
            let up_id = $('#up_id').val();
            let up_question_id = $('#up_question_id').val();
            let up_option_text = $('#up_option_text').val();
            let up_points = $('#up_points').val();
            console.log(up_id + up_question_id + up_option_text + up_points)
            $.ajax({
                url: "{{ route('quiz_option.update') }}",
                method: 'POST',
                data: {up_id:up_id, up_question_id:up_question_id, up_option_text:up_option_text, up_points:up_points},
                success:function(res){
                    if(res.status == 'success'){
                        $('#updateModal').modal('hide');
                        $('#updateForm')[0].reset();
                        $('.table').load(location.href+' .table');
                        Command: toastr["success"]("Option Data updated successfully!", "Updated success")
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
            let option_id = $(this).data('id');
            if(confirm('Are you sure you want to delete this')){
                $.ajax({
                    url: "{{ route('quiz_option.delete') }}",
                    method:"GET",
                    data:{option_id:option_id},
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