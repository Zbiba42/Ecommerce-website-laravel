<x-master>
  
    <div class="shoeContainer">
        <div class="imgContainer">
          <img src="{{ asset('storage/' . $product->picture)  }}" alt="unavailable" />
        </div>
        <div class="infoContainer">
          <h1 class="ShoeName">{{ $product->name }}</h1>
          <h4 class="Shoecategory">
            {{ $product->Category }}
          </h4>
          <h4 class="description">{{ $product->description }}</h4>
          <h3 class="ShoePrice"> {{ $product->price }} $ </h3>

          <div class="buttonsContainer">
            <div class="button" onClick={addtoCart}>
              <h4>
                buy <i class="fa-solid fa-cart-shopping"></i>
              </h4>
              
            </div>
              
              </div>
          </div>
        </div>
      </div>
</x-master>