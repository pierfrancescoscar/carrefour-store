<div class="container px-5">
  <div class="swiper">
      <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach ($categories as $category)
        <div class="swiper-slide"> 
          <div class="swiper-slide-card">
            <a class="swiper-slide-card-wrap" href="#">
              <figure class="swiper-slide-card-wrap-image"><img src="{{$category->image}}" alt="image" /></figure>
              <div class="swiper-slide-card-wrap-text">{{$category->name}}</div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-button-prev-custom"><span class="material-icons">chevron_left</span></div>
      <div class="swiper-button-next-custom"><span class="material-icons">chevron_right</span></div>
  </div>
</div>