<nav>
        @php
                $userType = '';
                if(session('user')){
                        $userType = session('user')->type  ;
                }
        @endphp
   
        @if($userType == 'client') 
                <a href="/">Home</a>
                <a href="/Cart">Cart</a>
                <a href="/Logout">Log out</a>            
        @elseif ($userType == 'seller')
                <a href="/">Home</a>
                <a href="{{ route('Product.addProduct.index') }}">Add products</a>
                <a href="{{ route('product.Products') }}">Your Products</a>
                <a href="{{ route('User.logout') }}">Log out</a>

        @elseif ($userType == 'admin')
                <a href="/">Home</a>
                <a href="{{ route('Admin.showUsers') }}">Users</a>
                <a href="{{ route('Admin.addUser.index') }}">Add User</a>
                <a href="{{ route('User.logout') }}">Log out</a>
        
        @endif
        
        @guest
            <a href="/">Home</a>
            <a href="{{ route('User.SignUp.index') }}">Sign Up</a>
            <a href="{{ route('User.Login.index') }}">Log In</a>
        @endguest
        
   
</nav>
