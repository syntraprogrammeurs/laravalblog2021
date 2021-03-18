<?php

namespace App\Http\Controllers;

use App\Events\UsersSoftDelete;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Models\Photo;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   /* public function __construct()
    {
        $this->middleware('auth');
    }*/
    public function index()
    {
        //
        //$users = User::latest()->paginate(10);
        $users = User::with(['photo','roles'])->withTrashed()->paginate(10);



        return view('admin.users.index', compact('users', 'allUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
        //dd($request);
        $user = new User();
        $user->name= $request->name;
        $user->email = $request->email;
        $user->is_active = $request->is_active;
        if($file = $request->file('photo_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('images/users', $name);
            $photo = Photo::create(['file'=>$name]);
            $user->photo_id = $photo->id;
        }

        $user->password = Hash::make($request['password']);
        $user->save();

        /**wegschrijven van de tussentabel**/
        $user->roles()->sync($request->roles, false);

        return redirect('admin/users');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        //$user = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);
        if(trim($request->password == '')){
            $input = $request->except('password');
        }else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }

        if($file = $request->file('photo_id')){
            $name = time(). $file->getClientOriginalName();
            $file->move('images/users', $name);
            $photo = Photo::create(['file'=>$name]);
           // dd($photo->id);
            $input['photo_id'] = $photo->id;
        }

        $user->update($input);
        /**wegschrijven van de tussentabel**/
        $user->roles()->sync($request->roles, true);

        return redirect('admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
       // $user = User::findOrFail($id);
        Session::flash('user_message', $user->name . 'was deleted!');
        UsersSoftDelete::dispatch($user);
        $user->delete();
            foreach($user->posts as $post){
               $post->forceDelete();
            }

        //unlink(public_path() .$user->photo->file);
        return redirect('/admin/users');
    }
    public function userRestore($id){
        //whereId($id)
        $user = User::onlyTrashed()->findOrFail($id);
        User::onlyTrashed()->where('id',$id)->restore();
        Session::flash('user_message', $user->name . 'was restored!');
        return redirect('/admin/users');
    }
}
