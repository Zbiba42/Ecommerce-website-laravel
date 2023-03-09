<x-master>
    <div class="container">
        @if (session('success'))
            <h3 h3 style="color:orange; margin-left:70px;">
                {{ session('success') }}
            </h3><br>
        @endif
        <form method="POST" action="{{ route('Admin.addUser.add') }}">
            @csrf
            <h3>Add User</h3><br>
            <input type="text" name="name" placeholder='Username' class="input"><br>
            <input type="email" name="email" placeholder='Email' class="input"><br>
            <label>choose the account type</label><br>
            <input type="radio" name="type" value="client">
            <label for="type">Client</label><br>
            <input type="radio" name="type" value="seller">
            <label for="type">Seller</label><br>
            <input type="radio" name="type" value="admin">
            <label for="type">Admin</label><br>
            <input type="password" name="password" placeholder='Password' class="input"><br>
            <input type="submit" value="Add user" name='submit' class="sub">
        </form>
    </div>
</x-master>