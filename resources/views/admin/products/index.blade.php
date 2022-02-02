
@extends('') {{--YEALD --}}


	
@section('main-section')
<section class="products">
	<div class="container">
		<ul class="products__list">
				<li  class=" products__item">
						<h2 class="products__title">SALAMI</h2>
						<div class="products__poster">
							<img src="https://picsum.photos/100/100" alt="">   
						</div>
						<div class="products__price">2455$</div>
						<div class="products-control">
							<button class="products-control__remove btn"><i class="fas fa-trash-alt"></i></button>
							<button class="products-control__edit btn" ><i class="fas fa-edit"></i></button>
							<button class="products-control__show btn"><i class="fas fa-eye"></i></button>
						</div>
				</li>
		</ul>
	</div>
</section>
@endsection