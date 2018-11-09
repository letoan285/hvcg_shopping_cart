@extends('layouts.admin')

@section('title', 'Category Page')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Danh sach danh muc</h3>
     
            

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">

       <div class="row mb-2 ml-1">
            <a class="btn btn-sm btn-success " href="{{route('categories.create')}}">Them moi</a>
       </div>
        
        <table class="table table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hinh Anh</th>
                    <th>Ten Danh Muc</th>
                    <th>Danh muc cha</th>
                    <th>Trang thai</th>
                    <th>Lua chon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cate)
                    <tr>
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $cate->image }}</td>
                       <td>{{ $cate->name }}</td>
                       <td>{{ $cate->parent_id }}</td>
                       <td>{{ $cate->status == 1 ? 'Hien Thi' : 'Khong Hien Thi' }}</td>
                       <td>
                           <a class="btn btn-sm btn-info" href=""><i class="fa fa-pencil"></i></a>
                           <a class="btn btn-sm btn-danger" href=""><i class="fa fa-times"></i></a>
                       </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
</div>




@endsection