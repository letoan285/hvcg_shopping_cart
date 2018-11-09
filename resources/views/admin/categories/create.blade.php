@extends('layouts.admin')
@section('title', 'Create Category')
@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Tạo danh mục mới</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i></button>
			</div>
		</div>
        <div class="card-body">
		<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label> Tên danh mục</label>
				<input type="text" class="form-control" name="name" placeholder="Tên danh mục...">
				@if($errors->has('name'))
				<span class="text-danger">{{$errors->first('name')}}</span>
				@endif

			</div>
			<div class="form-group">
				<label>slug</label>
				<input type="text" class="form-control" name="slug" placeholder="Slug...">
			</div>
			<div class="form-group">
				<label>status</label>
				<select name="status" id="" class="form-control">
					<option value="">Chon trang thai</option>
					<option value="1">Hien thi</option>
					<option value="0">Khong hien thi</option>
				</select>
				@if($errors->has('status'))
				<span class="text-danger">{{$errors->first('status')}}</span>
				@endif
			</div>
			
			<div class="form-group">
				<label> Danh mục cha</label>
				<select name="parent_id" id="" class="form-control">
					<option value="">Chon trang thai</option>
					<option value="1">Hien thi</option>
					<option value="0">Khong hien thi</option>
				</select>
				@if($errors->has('parent_id'))
				<span class="text-danger">{{$errors->first('parent_id')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label> Ảnh</label>
				<input type="file" class="form-control" name="image" placeholder="Chọn ảnh...">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Create New" />
			</div>
		</form>
	</div>
@endsection