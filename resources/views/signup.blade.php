<x-master>
    <div class="container">
        <form method="POST" action="{{ route('User.SignUp.SignUp') }}">
            @csrf
            <h3>Sign Up</h3><br>
            <input type="text" name="name" placeholder='Username' class="input"><br>
            <input type="email" name="email" placeholder='Email' class="input"><br>
            <label>choose your account type</label><br>
            <input type="radio" name="type" value="client">
            <label for="type">Client</label><br>
            <input type="radio" name="type" value="seller">
            <label for="type">Seller</label><br>
            <input type="radio" name="type" value="admin">
            <label for="type">Admin</label><br>
            <input type="password" name="password" placeholder='Password' class="input"><br>
            <input type="submit" value="sign up" name='submit' class="sub">
        </form>
</div>
</x-master>