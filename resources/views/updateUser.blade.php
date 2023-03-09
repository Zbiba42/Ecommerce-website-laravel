@php
    $client = false ;
    $seller = false ;
    $admin = false ;
    if($user->type = 'client') $client = true ; 
    if($user->type = 'seller') $seler = true ; 
    if($user->type = 'admin') $admin = true ; 


@endphp
<x-master>
<div class="container">
        
    <form method="post" action="{{ route('Admin.updateUser.update', $user->id) }}">
        @method('PUT')
        @csrf
        <h3>Update User</h3><br>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        <input type="text" name="name" class="input" value='{{ $user->name }}'><br>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        <input type="email" name="email" class="input" value='{{ $user->email }}'><br>
            @error('type')
                <div class="error">{{ $message }}</div>
            @enderror
        <label>choose the new account type</label><br>
            <input type="radio" name="type" value="client" @checked($client)>
            <label for="type">Client</label><br>
            <input type="radio" name="type" value="seller" @checked($seller)>
            <label for="type">Seller</label><br>
            <input type="radio" name="type" value="admin" @checked($admin)>
            <label for="type">Admin</label><br>

            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        <input type="password" name="password" class="input" ><br>
        <input type="submit" value="Update" name='update' class="sub" style="margin:5px 0 0 15px;">
       
    </form>
    </div>
</x-master>