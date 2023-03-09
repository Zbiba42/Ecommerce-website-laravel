<x-master>
    
    <div class="containerr">
        {{ $users->links('pagination::bootstrap-5') }}
        <table>
            <tr>
                <th>user Type</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>operations</th>
            </tr>
           
                @foreach($users as $user){
                    <tr>
                        <td> {{ $user->type }} </td>
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->password }} </td>
                        <td><form action="{{ route('Admin.deleteUser' , $user->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                          <input type="submit" value="delete" name="delete" class='but' style="margin-left:19%;margin-right:0.5%;">
                        </form>
                        <form action="{{ route('Admin.updateUser.index', $user->id) }}" method="get">
                            @csrf
                            <input type="submit" value="edit" name='edit' class='but' style="margin-right:19% ;margin-left:0.5%;">
                        </form>
                      </td>
                    </tr>
                }
                @endforeach
           
        </table>

    </div>
</x-master>