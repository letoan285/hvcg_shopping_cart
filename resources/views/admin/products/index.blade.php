@extends('layouts.admin')
@section('title', ' Product Page')
@section('style')
<style>
	.relative {
		position: relative;

	}
	.relative > input {
		width: 100% !important;
	}
	.absolute {
		position: absolute;
		top: 0;
		right: 0;
	}
</style>
@endsection
@section('content')
  <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách sản phẩm</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
					<div class="row mb-2 ml-1">
						<div class="col-4">
							<a class="btn btn-success" href="products/create"><i class="glyphicon-plus" >Tạo sản phẩm mới</i></a> 
						</div>
						<div class="col-8">
							<form method="get" class="form-inline row" id="search-form">
								<div class="col-4">
									
									<select name="pageSize" id="pageSize" class="form-control">
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select>
							
								</div>
								<div class="col-8">
									<div class="relative">
										<input type="text" class="form-control" name="keyword" value="{{ $keyword }}">
										<button type="submit" class="btn btn-info absolute" ><i class="fa fa-search"></i></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				<table class="table table-bordered table-hover table-stripped">
					<thead>
						<tr>
							<th>STT</th>
							<th>Hình ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Giá bán</th>
							<th>Mô tả ngắn</th>
							<th>Tên danh mục</th>
							<th>Trạng thái</th>
							<th>Lựa chọn</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td><a href=""><img width="150" src="{{ asset($product->image) }}" alt=""></a></td>
							<td>{{ str_limit($product->name, 30) }}</td>
							<td>{{ $product->selling_price }}</td>
							<td>{{ str_limit($product->short_description, 50) }}</td>
							<td>{{ $product->category_id }}</td>
							<td>{{ $product->status === 1 ? 'Hien thi' : 'Khong hien thi' }}</td>
							<td>
								<a class ="btn btn-sm btn-info" href="{{route('products.edit', $product->id)}}"><i class="fa fa-pencil"></i></a>
								<a class="btn btn-sm btn-danger" onclick="confirmDelete('{{ route('products.destroy', $product->id) }} ');" href="javascript:;"><i class="fa fa-times"></i> </a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $products->links() }}
			</div>    
</div>

@endsection

@section('script')

<script src="{{ asset('plugins/bootbox/bootbox.min.js')}}"></script>
<script>

	function confirmDelete(url){
		bootbox.confirm({
			message: "Bạn có chắc chắn xóa không ?",
				buttons: {
						confirm: {
								label: 'Chắc chắn',
								className: 'btn-success'
						},
						cancel: {
								label: 'Không !',
								className: 'btn-danger'
						}
				},
				callback: function (result) {
					if(result) {
						window.location.href = url;
						console.log('ban con firm')
					}
				}
		});
	}


	$(document).ready(function(){
		$("#pageSize").on('change', function(){
			$("#search-form").submit();
		});
	})
</script>


@endsection

{{-- {{route('products.destroy', $product->id)}} --}}