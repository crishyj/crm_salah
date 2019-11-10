@extends('layouts.dashboard')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>&nbsp;Manage Links</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Manage Links</a></li>
        </ul>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-1">
                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal"><i
                        class="fa fa-plus"></i> Add New
                </button>
            </div>

            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body table-responsive">
                        <table class="table table-hover table-bordered text-center" id="linktable">
                            <thead>
                            <tr>
                                <th>Serial Number</th>
                                <th>Name</th>
                                <th>Modification</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$item)
                                <tr>
                                    <input type="hidden" name="link"  value="{{$item->link}}">
                                    <input type="hidden" name="name" value="{{$item->name}}">
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td width="50px">
                                        <button class="btn btn-success edit_button" data-toggle="modal" data-target="#editModal"><i
                                                class="fa fa-edit"></i> Edit
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Link</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="" method="post" id="add_form">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">The Name</label>
                            <input class="form-control name" type="text" name="name" placeholder="Name...">
                            <span class="invalid-feedback name_error"><strong></strong></span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Link</label>
                            <input class="form-control link" type="text" name="link" placeholder="Link...">
                            <span class="invalid-feedback link_error"><strong></strong></span>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success btn-add"><i class="fa fa-fw fa-lg fa-check-circle"></i>&nbsp;Save
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                            class="fa fa-fw fa-lg fa-times-circle"></i>&nbsp;Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Link</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="" method="post" id="edit_form">
                        @csrf
                        <input type="hidden" name='id'>
                        <div class="form-group">
                            <label class="control-label">The Name</label>
                            <input class="form-control name" type="text" name="name" placeholder="Name...">
                            <span class="invalid-feedback name_error"><strong></strong></span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Link</label>
                            <input class="form-control link" type="text" name="link" placeholder="Link...">
                            <span class="invalid-feedback link_error"><strong></strong></span>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success btn-edit"><i class="fa fa-fw fa-lg fa-check-circle"></i>&nbsp;Save
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                            class="fa fa-fw fa-lg fa-times-circle"></i>&nbsp;Close
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('script')

    <script src="{{ asset('master/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('master/js/plugins/dataTables.bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('#linktable').DataTable();

            $(".edit_button").click(function (){
                let id = $(this).parents('tr').find('input[name="id"]').val();
                let name = $(this).parents('tr').find('input[name="name"]').val();
                let link = $(this).parents('tr').find('input[name="link"]').val();

                $("#editModal input[name='id']").val(id);
                $("#editModal input[name='name']").val(name);
                $("#editModal input[name='link']").val(link);
            })

            $(".btn-edit").click(function () {
                console.log($('#edit_form').serialize());
                $("#ajax-loading").fadeIn();
                $.ajax({
                    url: "{{route('link.edit')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: $('#edit_form').serialize(),
                    success: function (response) {
                        $("#ajax-loading").fadeOut();
                        if (response == 'success') {
                            alert('Updated Successfully.');
                            window.location.reload();
                        } else {
                            let messages = response.data;
                            if (messages.name) {
                                $('#edit_form .name_error strong').text(messages.name[0]);
                                $('#edit_form .name_error').show();
                                $('#edit_form .name').focus();
                            }
                        }
                    },
                    error: function (response) {
                        $("#ajax-loading").fadeOut();
                        if (response.responseJSON.message == 'The given data was invalid.') {
                            let messages = response.responseJSON.errors;
                            if (messages.name) {
                                $('#edit_form .name_error strong').text(messages.name[0]);
                                $('#edit_form .name_error').show();
                                $('#edit_form .name').focus();
                            }
                            if (messages.title) {
                                $('#edit_form .title_error strong').text(messages.title[0]);
                                $('#edit_form .title_error').show();
                                $('#edit_form .title').focus();
                            }

                        } else {
                            alert("Something went wrong");
                        }
                    }
                });
            });

            $(".btn-add").click(function () {
                console.log($('#add_form').serialize());
                $("#ajax-loading").fadeIn();
                $.ajax({
                    url: "{{route('link.create')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: $('#add_form').serialize(),
                    success: function (response) {
                        $("#ajax-loading").fadeOut();
                        if (response == 'success') {
                            alert('Add Successfully.');
                            window.location.reload();
                        } else {
                            let messages = response.data;
                            if (messages.name) {
                                $('#add_form .name_error strong').text(messages.name[0]);
                                $('#add_form .name_error').show();
                                $('#add_form .name').focus();
                            }
                        }
                    },
                    error: function (response) {
                        $("#ajax-loading").fadeOut();
                        if (response.responseJSON.message == 'The given data was invalid.') {
                            let messages = response.responseJSON.errors;
                            if (messages.name) {
                                $('#edit_form .name_error strong').text(messages.name[0]);
                                $('#edit_form .name_error').show();
                                $('#edit_form .name').focus();
                            }
                            if (messages.title) {
                                $('#edit_form .title_error strong').text(messages.title[0]);
                                $('#edit_form .title_error').show();
                                $('#edit_form .title').focus();
                            }

                        } else {
                            alert("Something went wrong");
                        }
                    }
                });
            });

        });
    </script>
@endsection
