<x-master>
    <div class="contain">

        <h3 class='text'>Cart :</h3>
            
            @foreach($cart as $product)
                <a href="">
                    <div class="box">
                        <div class="image" style='background:url({{ asset('storage/' . $product->picture)  }})'>
                        </div> 
                        <h4 class="title">{{ $product->name }}</h4>
                        <h4 class="price">{{ $product->price }}$</h4>
                    </div>                       
                </a>
            
            @endforeach
    
    </div>
</x-master>