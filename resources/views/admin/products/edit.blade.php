@extends('layouts.admin')
@section('title', 'Edit Product')
@section('content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Sua sản phẩm </h3>
			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i></button>
			</div>
		</div>
        <div class="card-body">
		<form action="{{ route('products.update', $product->id )}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label> Tên sản phẩm</label>
			<input type="text" class="form-control" name="name" value="{{$product->name}}">
		</div>
		<div class="form-group">
			<label>slug</label>
			<input type="text" class="form-control" name="slug" value="{{ $product->slug }}">
		</div>
		<div class="form-group">
			<label> Ảnh</label>
			<img width="150" src="{{$product->image}}" alt="">
			<input type="file" class="form-control" name="image" value="{{ $product->image }}">
		</div>
		<div class="form-group">
			<label> Giá niem yet</label>
			<input type="number" class="form-control" name="list_price" value="{{ $product->list_price }}">
		</div>
		<div class="form-group">
			<label> Giá ban</label>
			<input type="number" class="form-control" name="selling_price" value="{{ $product->selling_price }}">
		</div>
		<div class="form-group">
			<label> Mô tả ngắn</label>
			<textarea type="text" class="form-control" name="short_description">{{ $product->short_description }}</textarea>
		</div>
		<div class="form-group">
			<label> Mô tả </label>
			<textarea type="text" class="form-control" name="description" >{{ $product->description }}</textarea>
		</div>
		<div class="form-group">
			<label> Danh mục </label>
			<select name="category_id" class="form-control">
				<option value="">Chon danh muc</option>
				@foreach ($categories as $item)
					<option 
					@php 
						if($item->id == $product->category_id){
							echo 'selected';
						}
					@endphp
					value="{{ $item->id }}"
					>{{ $item->name }}</option>
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