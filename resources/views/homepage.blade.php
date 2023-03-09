<x-master >

<div class="contain">
    <div class="categories">
        <h3 class='text' style="margin: 0px 0 12px">Categories</h3>
            <a href="{{ route('homePage.category','Home & Kitchen') }}" class="buttonCat" >Home & Kitchen</a>
            <a href="{{ route('homePage.category','Beauty & Personal Car') }}" class="buttonCat" >Beauty & Personal Car</a>
            <a href="{{ route('homePage.category','Clothing, Shoes & Jewelry') }}" class="buttonCat" >Clothing, Shoes & Jewelry</a>
            <a href="{{ route('homePage.category','Toys & games') }}" class="buttonCat" >Toys & games</a>
            <a href="{{ route('homePage.category','Electronics') }}" class="buttonCat" >Electronics</a>
            <a href="{{ route('homePage.category','Sports & outdoors') }}" class="buttonCat" >Sports & outdoors</a>
            <a href="{{ route('homePage.category','Office Supplies') }}" class="buttonCat" >Office Supplies</a>
            <a href="{{ route('homePage.category','Home & Kitchen') }}" class="buttonCat" >Home & Kitchen</a>
    </div>
    <h3 class='text'>Available Products</h3>
        
        @foreach($products as $product)
            <a href="{{ route('product.product', $product) }}">
                <div class="box">
                    <div class="image" style='background:url({{ asset('storage/' . $product->picture)  }})'>
                    </div> 
                    <h4 class="title">{{ $product->name }}</h4>
                        <form action="{{ route('cart.add',$product) }}" method="post">
                            @csrf
                            <input type="submit" value="Add to cart" class='button'>
                        </form>
                    <h4 class="price">{{ $product->price }}$</h4>
                </div>                       
            </a>
        @endforeach
    
</div>
</x-master>  

            