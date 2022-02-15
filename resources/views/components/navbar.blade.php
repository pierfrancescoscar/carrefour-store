<div class="container">
<div class="custom-header">
    {{-- LOGO --}}
    <div class="custom-header__logo">
        <img src="{{ asset('images/carrefour-logomark.svg') }}" alt="">
        <img src="{{ asset('images/carrefour-logotype.svg') }}" alt="">
    </div>
    {{-- INPUT --}}
	 <div class="custom-header__form">
            <input placeholder="Di cosa hai bisogno?" class="custom-header__input pl-4" type="text">
            <button class="search-btn"><i class="fas fa-search"></i></button>
		</div>
    <div class="pay-block">
        <div class="custom-header__payback payback">
            <h3>payback</h3>
            <h4>Scopri Payback</h4>
            <img src="{{ asset('images/payback-ball.png') }}" alt="">
        </div>
        <a href=""><i class="fas fa-shopping-cart"></i></a>
    </div>
</div>
<div class="navbar">

		<ul class="navbar__list">
			<li>Spesa Online</li>
			<li>Elettronica e Giocattoli <i class="fas fa-caret-down"></i></li>
			<li>Promozioni</li>
		</ul>

	
		<ul class="navbar__list">
			<li>Vivi di Gusto</li>
			<li>Idee regalo <i class="fas fa-caret-down"></i></li>
			<li>Spesa Smart <i class="fas fa-caret-down"></i></li>
			<li><i class="fas fa-user"></i> Accedi <i class="fas fa-caret-down"></i></li>
		</ul>

</div>
</div>