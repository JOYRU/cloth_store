@extends('layouts.app')
@section('css')
@parent
<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container mt-3 mb-3">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header header-elements-inline">
                    <h5 class="card-title">All Product</h5>

				</div>
				<div class="card-body">
					See All Product
				</div>
				<table class="table datatable-basic">
					<thead>
						<tr>
							<th>Brand name</th>
							<th>Product Size</th>
							<th>Product Price </th>
							<th>Product Description</th>
							<th>Category Name</th>


							<!--th>Status</th-->

						</tr>
					</thead>
					<tbody>

                        @foreach($products as $product)
						<tr>


							<td>{{$product->brand_name}}</td>
							<td>{{$product->product_size}}</td>
							<td>{{$product->product_price}}</td>
							<td>{{$product->product_description}}</td>
							<td>{{$product->category_id}}</td>



                        </tr>
                        @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Basic datatable -->
	<!-- /basic datatable -->
</div>
@endsection