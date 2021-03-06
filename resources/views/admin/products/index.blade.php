@extends('layouts.app')



@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Price</th>
						<th scope="col">Description</th>
						<th scope="col">Available</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($products as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td>{{number_format($product->price, 2)}}</td>
						<td>{{$product->description}}</td>
						<td>{{$product->available}}</td>
						<td colspan="3">
							<ul class="d-flex m-0 p-0 list-style-none">
								<li class="ml-2 list-unstyled mr-2"><a
										href="{{route('admin.products.show', $product->slug)}}"
										class="btn btn-primary ms-1 p-1">Show</a></li>

								<li class="list-unstyled"><a href="{{ route('admin.products.edit', $product->slug) }}"
										class="btn btn-success ms-1 p-1">Edit</a></li>

								<li class="ml-2 list-unstyled">
									<form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger ms-1 py-1 px-3 text-uppercase"><i
												class="fas fa-trash-alt"></i></button>
									</form>
								</li>
							</ul>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection