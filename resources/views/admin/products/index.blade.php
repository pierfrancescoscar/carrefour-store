@extends('layouts.app')



@section('content')
<div class="container">
	<div class="row">
		<div class="col">
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
								<li class=""><a href="#" class="nav-link ms-1 p-0">Edit</a></li>
								<li class="ml-2"><a href="#" class="nav-link ms-1 p-0">Update</a></li>
								<li class="ml-2"><a href="#" class="nav-link ms-1 p-0">Delete</a></li>
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