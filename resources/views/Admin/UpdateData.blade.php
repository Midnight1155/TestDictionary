@extends('layouts.app')

@section('content')
    <div class="container">
        <br />
        <h3 align="center">Update Dictionary Data</h3>
        <br />
        {{--<div align="right">
            <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button>
        </div>--}}
        <br />
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dictionary_table">
                <thead>
                <tr>
                    <th width="15%">Kadazan</th>
                    <th width="15%">Centre</th>
                    <th width="25%">Malay</th>
                    <th width="25%">English</th>
                    <th width="15%">Action</th>
                </tr>
                </thead>
            </table>
        </div>
        <br />
        <br />
    </div>

    <div id="formModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Record</h4>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <form method="post" id="sample_form" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-4" >Kadazan : </label>
                            <div class="col-md-8">
                                <input type="text" name="Kadazan" id="Kadazan" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Centre : </label>
                            <div class="col-md-8">
                                <input type="text" name="Centre" id="Centre" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Malay : </label>
                            <div class="col-md-8">
                                <input type="text" name="Malay" id="Malay" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">English : </label>
                            <div class="col-md-8">
                                <input type="text" name="English" id="English" class="form-control" />
                            </div>
                        </div>
                        <br />
                        <div class="form-group" align="center">
                            <input type="hidden" name="action" id="action" value="Add" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                            <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Confirmation</h2>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dictionary_table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('ViewData.getdata2') }}",
                "columns":[
                    { data: "Kadazan", name: 'Kadazan' },
                    { data: "Centre", name: 'Centre' },
                    { data: "Malay", name: 'Malay' },
                    { data: "English", name: 'English' },
                    { data: "action", name: 'Action', orderable: false }
                ]
            });

            $('#create_record').click(function(){
                $('.modal-title').text('Add New Record');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#form_result').html('');

                $('#formModal').modal('show');
            });

            $('#sample_form').on('submit', function(event){
                event.preventDefault();
                var action_url = '';

                if($('#action').val() == 'Edit')
                {
                    action_url = "{{ route('admin.update') }}";
                }

                $.ajax({
                    url: action_url,
                    method:"POST",
                    data:$(this).serialize(),
                    dataType:"json",
                    success:function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success)
                        {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#sample_form')[0].reset();
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            });

            $(document).on('click', '.edit', function(){
                var id = $(this).attr('id');
                $('#form_result').html('');
                //$('#formModal').modal('show');
                $.ajax({
                    url :"/admin/"+id+"/edit",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#Kadazan').val(data.result.Kadazan);
                        $('#Malay').val(data.result.Malay);
                        $('#Centre').val(data.result.Centre);
                        $('#English').val(data.result.English);
                        $('#hidden_id').val(id);
                        $('.modal-title').text('Edit Record');
                        $('#action_button').val('Edit');
                        $('#action').val('Edit');
                        $('#formModal').modal('show');
                    }
                })
            });

            var user_id;

            $(document).on('click', '.delete', function(){
                user_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"admin/destroy/"+user_id,
                    beforeSend:function(){
                        $('#ok_button').text('Deleting...');
                    },
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#confirmModal').modal('hide');
                            $('#user_table').DataTable().ajax.reload();
                            alert('Data Deleted');
                        }, 2000);
                    }
                })
            });

        });
    </script>

@endsection
