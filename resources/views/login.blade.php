<x-master>
    <div class="container">
        
        <form method="post" action="{{ route('User.Login.login') }}">
            @csrf
            <h3>Log In</h3><br>
            @error('email')
                {{ $message }}
            @enderror
            <input type="email" name="email" placeholder="Email" class="input"><br>
            <input type="password" name="password" placeholder="Password" class="input"><br>
            <input type="submit" value="Log In" name='log' class='sub'>
        </form>
    </div>
</div>
</x-master>

