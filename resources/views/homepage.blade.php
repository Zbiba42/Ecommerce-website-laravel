<x-master >

<div class="contain">
    @include('partials.categories')
    <h3 class='text'>Available Products</h3>
        
        @foreach($products as $product)
            <a href="{{ route('product.product', $product) }}">
                <div class="box">
                    <div class="image" style='background:url({{ asset('storage/' . $product->picture)  }})'>
                    </div> 
                    <h4 class="title">{{ $product->name }}</h4>
                        @if(session('user'))
                            <form action="{{ route('cart.add',$product) }}" method="post">
                                @csrf
                                <input type="submit" value="Add to cart" >
                            </form>
                        @else
                            <form action="{{ route('User.Login.index') }}" method="get">
                             
                                <input type="submit" value="Add to cart" >
                            </form>
                        @endif
                    <h4 class="price">{{ $product->price }}$</h4>
                </div>                       
            </a>
        @endforeach
    
</div>
</x-master>  

            