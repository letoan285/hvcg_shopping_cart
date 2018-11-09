@extends('layouts.admin')
@section('title', 'Update Category')
@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Sửa danh mục</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i></button>
			</div>
		</div>
        <div class="card-body">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label> Tên danh mục</label>
			<input type="text" class="form-control" name="name" placeholder="Tên danh mục..." value="{{$category->name}}">
		</div>
		<div class="form-group">
			<label>slug</label>
			<input type="text" class="form-control" name="slug" placeholder="Slug..." value="{{$category->slug}}">
		</div>

		<div class="form-group">
			<label> Status</label>
			<input type="number" class="form-control" name="status" placeholder="Status..." value="{{$category->status}}">
		</div>
		<div class="form-group">
			<label> Danh mục cha</label>
			<input type="text" class="form-control" name="parent_id" placeholder="Tên danh mục..." value="{{$category->parent_id}}">
		</div>
		<div class="form-group">
			<label> Ảnh</label>
			<input type="file" class="form-control" name="image" placeholder="Chọn ảnh...">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Update" />
		</div>
	</form>
@endsection