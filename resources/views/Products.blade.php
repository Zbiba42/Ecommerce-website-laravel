<x-master>
    <div class="contain">
        <h3 class='text'>Products added</h3>
            
        @foreach($products as $product){
            <div class="box">
                <div class="image" style='background:url({{ asset('storage/' . $product->picture)  }})'>
                </div> 
                <form  method="get" action="{{ route('Product.update.index', $product) }}">
                    <label for="{{ $product->id . 'update'}}" class="label-edit"><i class="fas fa-pen"></i></label>
                    <input type="submit" value="edit" name='edit' id="{{ $product->id . 'update'}}" class='subb'>
                </form>
                <form action="{{ route('Product.deleteProduct' , $product) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <label for="{{ $product->id . 'delete'}}" class="label-delete"><i class="fas fa-trash"></i></label>
                    <input type="submit" value="delete" name='deletee' id="{{ $product->id . 'delete'}}" class='subb'>
                </form>
                <h4 class="title">{{ $product->name }}</h4>
                <h4 class="price">{{ $product->price }}$</h4>         
            </div>                       
        }
        @endforeach

       
    </div>
</x-master>