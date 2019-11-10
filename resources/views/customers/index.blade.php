@extends('layouts.dashboard')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>&nbsp;Customers</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Customers</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body table-responsive">
                        <table class="table table-hover table-bordered text-center" id="customerTable">
                            <thead>
                                <tr>
                                    <th class="no-sort">No</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Numeber</th>
                                    <th>Country</th>
                                    <th>Created</th>
                                    <th>Serial Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key=>$item)
                                    <tr>
                                        <input type="hidden" name="title" class="title" value="{{$item->title}}" />
                                        <input type="hidden" name="age" class="age" value="{{$item->age}}" />
                                        <input type="hidden" name="gender" class="gender" value="{{$item->gender}}" />
                                        <input type="hidden" name="governorate" class="governorate" value="{{$item->governorate}}" />
                                        <input type="hidden" name="city" class="city" value="{{$item->city}}" />
                                        <input type="hidden" name="street" class="street" value="{{$item->street}}" />
                                        <input type="hidden" name="post" class="post" value="{{$item->post}}" />
                                        <input type="hidden" name="po" class="po" value="{{$item->po}}" />
                                        <input type="hidden" name="group" class="group" value="{{$item->title}}" />
                                        <td>{{ $key + 1 }}</td>
                                        <td class="name">{{$item->name}}</td>
                                        <td class="email">{{$item->email}}</td>
                                        <td class="phone">{{$item->phone}}</td>
                                        <td class="country" data-id="{{$item->country_id}}">{{$item->country->name ?? ''}}</td>
                                        <td class="created">{{$item->created_at}}</td>
                                        <td class="updated">{{$item->link->name ?? ''}}</td>
                                        <td class="py-2">
                                            <a href="{{route('customer.delete', $item->id)}}" onclick="return window.confirm('Are you sure?')" class="btn btn-primary btn-sm btn-delete" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash"></i>Delete</a>
                                            <a href="#" class="btn btn-success btn-sm btn-edit" data-id="{{$item->id}}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add More"><i class="fa fa-edit"></i>Add More</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <a href="{{ route('customer.export')}}"> <button class="btn btn-success mt-3">Customer Export</button> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('customer.edit')}}" method="post" id="edit_form">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Customer</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" class="id" />
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="control-label">Title</label>
                                <input class="form-control title" type="text" name="title" placeholder="Title">
                                <span class="invalid-feedback title_error"><strong></strong></span>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control name" type="text" name="name" placeholder="Full Name">
                                <span class="invalid-feedback name_error"><strong></strong></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="control-label">Age</label>
                                <input class="form-control age" type="number" min="1" name="age" placeholder="Age">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="control-label">Gender</label>
                                <select name="gender" class="form-control gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">Country</label>
                                <select class="form-control country" name="country">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="control-label">Governorate</label>
                                <input class="form-control governorate" type="text" name="governorate" placeholder="Governorate">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="control-label">City</label>
                                <input class="form-control city" type="text" name="city" placeholder="City">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="control-label">Street</label>
                                <input class="form-control street" type="text" name="street" placeholder="Street">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="control-label">Post Number</label>
                                <input class="form-control post" type="text" name="post" placeholder="Post Number">
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="control-label">PO Box</label>
                                <input class="form-control po" type="text" name="po" placeholder="PO Box">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control email" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="control-label">Client Group</label>
                                <select name="group" class="form-control group">
                                    <option value="" hidden>Select Group</option>
                                    <option value="1">Group1</option>
                                    <option value="2">Group2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>&nbsp;Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>&nbsp;Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script src="{{ asset('master/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('master/js/plugins/dataTables.bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function(){

            $('#customerTable').DataTable();

            $("#btn-add").click(function(){
                $("#addModal").modal();
            });

            $(".btn-edit").click(function(){
                let id = $(this).data('id');
                let name = $(this).parents('tr').find('.name').text().trim();
                let email = $(this).parents('tr').find('.email').text().trim();
                let phone = $(this).parents('tr').find('.phone').text().trim();
                let country = $(this).parents('tr').find('.country').data('id');
                let title = $(this).parents('tr').find('.title').val().trim();
                let age = $(this).parents('tr').find('.age').val().trim();
                let gender = $(this).parents('tr').find('.gender').val().trim();
                let governorate = $(this).parents('tr').find('.governorate').val().trim();
                let city = $(this).parents('tr').find('.city').val().trim();
                let street = $(this).parents('tr').find('.street').val().trim();
                let post = $(this).parents('tr').find('.post').val().trim();
                let po = $(this).parents('tr').find('.po').val().trim();
                $("#edit_form input.form-control").val('');
                $("#edit_form .id").val(id);
                $("#edit_form .name").val(name);
                $("#edit_form .email").val(email);
                $("#edit_form .phone").val(phone);
                $("#edit_form .country").val(country);
                $("#edit_form .title").val(title);
                $("#edit_form .gender").val(gender);
                $("#edit_form .governorate").val(governorate);
                $("#edit_form .city").val(city);
                $("#edit_form .street").val(street);
                $("#edit_form .post").val(post);
                $("#edit_form .age").val(age);
                $("#edit_form .po").val(po);

                $("#editModal").modal();
            });

            $("#edit_form .btn-submit").click(function(){
                $("#ajax-loading").fadeIn();
                $.ajax({
                    url: "{{route('customer.edit')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: $('#edit_form').serialize(),
                    success : function(response) {
                        $("#ajax-loading").fadeOut();
                        if(response == 'success') {
                            alert('Updated Successfully.');
                            window.location.reload();
                        } else {
                            let messages = response.data;
                            if(messages.name) {
                                $('#edit_form .name_error strong').text(messages.name[0]);
                                $('#edit_form .name_error').show();
                                $('#edit_form .name').focus();
                            }
                        }
                    },
                    error: function(response) {
                        $("#ajax-loading").fadeOut();
                        if(response.responseJSON.message == 'The given data was invalid.'){
                            let messages = response.responseJSON.errors;
                            if(messages.name) {
                                $('#edit_form .name_error strong').text(messages.name[0]);
                                $('#edit_form .name_error').show();
                                $('#edit_form .name').focus();
                            }
                            if(messages.title) {
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
