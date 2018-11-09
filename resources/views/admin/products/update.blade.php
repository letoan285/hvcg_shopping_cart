@extends('layouts.admin')
@section('title', 'Create Product')
@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Sửa sản phẩm </h3>
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
			<label> Tên sản phẩm</label>
			<input type="text" class="form-control" name="name" placeholder="Tên sản phẩm..." value="{{$products->name}}">
		</div>
		<div class="form-group">
			<label>slug</label>
			<input type="text" class="form-control" name="slug" placeholder="Slug..." value="{{$products->slug}}">
		</div>
		<div class="form-group">
			<label> Ảnh</label>
			<input type="file" class="form-control" name="image" placeholder="Chọn ảnh...">
		</div>
		<div class="form-group">
			<label> Giá bán</label>
			<input type="number" class="form-control" name="list_price" placeholder="Giá bán..." value="{{$products->list_price}}">
		</div>
		<div class="form-group">
			<label> Giá nhập</label>
			<input type="number" class="form-control" name="selling_price" placeholder="Giá nhâp..." value="{{$products->selling_price}}">
		</div>
		<div class="form-group">
			<label> Mô tả ngắn</label>
			<input type="text" class="form-control" name="short_description" placeholder="Mô tả ngắn..." value="{{$products->short_description}}">
		</div>
		<div class="form-group">
			<label> Mô tả </label>
			<input type="text" class="form-control" name="description" placeholder="Mô tả..." value="{{$products->desciption}}"
		</div>
		<div class="form-group">
			<label> Danh mục</label>
			<input type="text" class="form-control" name="category_id" placeholder="Danh mục..." value="{{$products->category_id}}">
		</div>
		<div class="form-group">
			<label> Status</label>
			<input type="number" class="form-control" name="status" placeholder="Status..." value="{{$products->status}}">
		</div>
		<div class="form-group">
			<label> Nhà hỗ trợ</label>
			<input type="number" class="form-control" name="supplier_id" placeholder="Nhà hỗ trợ..." value="{{$products->supplier_id}}">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Update Product" />
		</div>
	</form>
@endsection