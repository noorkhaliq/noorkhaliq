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
                                <h3 class="card-title">Manage Category </h3>
                                <a href="{{ route('category.create')  }}" class="btn btn-success" style="float: right;">Add &plus;</a>
                            </div>
                            <div class="card-body">
                                <table id="userDataTable" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>category_title</th>
                                        <th>Status</th>
                                        <th>Date</th>
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
                "ajax": "{{route('category.list')}}",
                "processing": true,
                "serverSide": true,
                "columns": [
                    { "data": "id",name:'id' },
                    { "data": "category_title",name:'category_title' },
                    { "data": "status",name:'status' },
                    { "data": "registration_date",name:'created_at' },
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
