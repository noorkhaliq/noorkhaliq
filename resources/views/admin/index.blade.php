@extends('layouts.master')

@section('mainContent')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Manage Users </h3>
                                <a href="{{ route('admin.create')  }}" class="btn btn-success" style="float: right;">Add &plus;</a>

                            </div>
                            <div class="card-body">
                                <table id="userDataTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th >Actions</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

    <script>
        var table=undefined;
        $(document).ready(function(){
            table=$('#userDataTable').DataTable({
                "ajax": "{{route('admin.list')}}",
                "processing": true,
                "serverSide": true,
                "columns": [
                    { "data": "id",name:'id' },
                    { "data": "name",name:'name' },
                    { "data": "email",name:'email' },
                    // { "data": "password",name:'password' },
                    // { "data": "short_description",name:'description' },
                    // { "data": "image", name: 'image', searchable: false, orderable:false, render: function(d, row) {
                    //         return d ? `<img src='${d}' style="width: 100px; height: 100px;"/>`: '';
                    //     }},
                    // { "data": "customStatus",name:'status' },
                    // { "data": "",name:'created_at' },
                    { "data": "actions",searchable: false, orderable:false },

                ]

            })



            $('body').on('click' , '.deleteUser' , function (e){
                e.preventDefault();

                var url = $(this).attr('href');
                $.ajax({
                    url : url ,
                    type : 'delete' ,
                    success : function(response){
                        table.ajax.reload();
                    }
                })

            })


        });
    </script>


@endsection
