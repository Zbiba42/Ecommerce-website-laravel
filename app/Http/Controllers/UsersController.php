<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function SignUpindex()
    {
        return view('signup');
    }

    public function SignUp(Request $request)
    {
        // dd($request->post());

        $data = $request->post();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return to_route('User.Login.index');
    }
    
    public function loginindex()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email, "password" => $password];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            Session::put("user" , Auth::getUser());

            return redirect(route('homePage'));
        } else {
            return back()->withErrors([
                'email' => 'email enixestane'
            ]);
        };
    }

    public function Logout()
    {
        Session::flush();
        
        Auth::logout();

        return to_route('homePage');
    }

    public function showUsers (){
        
        return view('Users',[
            'users' =>  User::paginate(10)
        ]);
    }

    public function addUserIndex(){
        return view('addUser');
    }

    public function addUser (Request $request) {
        $data = $request->post();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        session()->flash('success', 'Data saved successfully!');
        return back();
    }

    public function delete (User $user){
        $user->delete();
        // User::destroy($user->id);
        return back();
    }

    public function updateIndex (User $user){
        
        return view('updateUser',compact('user'));
    }

    public function update (User $user , Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email|max:255',
            'type' => ['required', 'in:seller,admin,client'],
            'password' => 'required|min:8|max:255',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user->fill($validatedData)->save();
        return to_route('Admin.showUsers');
    }
}
