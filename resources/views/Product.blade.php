<x-master>
    @php
        // die($product);
    @endphp
    <div className="shoeContainer">
        <div className="imgContainer">
          <img src="{{ asset('storsdsdage/' . $product->picture)  }}" alt="unavailable" />
        </div>
        <div className="infoContainer">
          <h4 className="Shoecategory">
            {{ $product->Category }}
          </h4>
          <h1 className="ShoeName">{{ $product->name }}</h1>
          <h3 className="ShoePrice">{shoeData.price} $</h3>
          <h4 className="ShoeLeft">Items Left :{shoeData.items_left}</h4>

          <h4 className="SelectSize">Select Size</h4>
          <div className="SizeSelection">
            <div className="size">
              <h4>M 10 / W 11.5</h4>
            </div>
            <div className="size">
              <h4>M 10 / W 11.5</h4>
            </div>
            <div className="size">
              <h4>M 10 / W 11.5</h4>
            </div>
          </div>
          <div className="buttonsContainer">
            <div className="button" onClick={addtoCart}>
              <h4>
                Add to Cart <i className="fa-solid fa-cart-shopping"></i>
              </h4>
            </div>

            <div className="button" onClick={addToFav}>
              <h4>
                Favorite <i className="fa-solid fa-heart"></i>
              </h4>
            </div>
          </div>
        </div>
      </div>
</x-master>