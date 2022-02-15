<div class="custom-header">
    {{-- LOGO --}}
    <div class="custom-header__logo">
        <a href="/">
            <img src="{{ asset('images/carrefour-logomark.svg') }}" alt="">
        </a>
        <a href="/">
            <img src="{{ asset('images/carrefour-logotype.svg') }}" alt="">
        </a>
    </div>
    {{-- INPUT --}}
	 <form action="">
			<div class="custom-header__form">
            <input placeholder="Di cosa hai bisogno?" class="custom-header__input pl-4" type="text">
            <button class="search-btn"><i class="fas fa-search"></i></button>
			</div>
        </form>
    <div class="pay-block">
        <div class="custom-header__payback payback">
            <h3>payback</h3>
            <h4>Scopri Payback</h4>
            <img src="{{ asset('images/payback-ball.png') }}" alt="">
        </div>
        <a href=""><i class="fas fa-shopping-cart"></i></a>
    </div>
</div>