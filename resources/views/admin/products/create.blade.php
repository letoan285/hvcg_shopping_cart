@extends('layouts.admin')
@section('title', 'Create Product')
@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Tạo sản phẩm mới</h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i></button>
			</div>
		</div>
        <div class="card-body">
		<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label> Tên sản phẩm</label>
			<input type="text" class="form-control" name="name" placeholder="Tên sản phẩm...">
		</div>
		<div class="form-group">
			<label>slug</label>
			<input type="text" class="form-control" name="slug" placeholder="Slug...">
		</div>
		<div class="form-group">
			<label> Ảnh</label>
			<input type="file" class="form-control" name="image" placeholder="Chọn ảnh...">
		</div>
		<div class="form-group">
			<label> Giá bán</label>
			<input type="number" class="form-control" name="list_price" placeholder="Giá bán...">
		</div>
		<div class="form-group">
			<label> Giá nhập</label>
			<input type="number" class="form-control" name="selling_price" placeholder="Giá nhâp...">
		</div>
		<div class="form-group">
			<label> Mô tả ngắn</label>
			<input type="text" class="form-control" name="short_description" placeholder="Mô tả ngắn...">
		</div>
		<div class="form-group">
			<label> Mô tả </label>
			<input type="text" class="form-control" name="description" placeholder="Mô tả ngắn...">
		</div>
		<div class="form-group">
			<label> Danh mục</label>
			<select name="category_id" class="form-control">
				<option value="">Chon danh muc</option>
				@foreach ($categories as $item)
					<option value="{{ $item->id }}">{{ $item->name }}</option>
				@endforeach
			
			</select>
		</div>
		<div class="form-group">
			<label> Trang thai</label>
			<input type="number" class="form-control" name="status" placeholder="Status...">
		</div>
		<div class="form-group">
			<label> Nhà cung cap</label>
			<input type="number" class="form-control" name="supplier_id" placeholder="Nhà hỗ trợ...">
		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Create New" />
		</div>
	</form>
@endsection