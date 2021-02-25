<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\ActivityLog;
use Carbon\Carbon;
use DB;
use Auth;

class UsersController extends Controller
{
    protected $activeMenu = ['admin','user'];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select(
            "SELECT
            users.id,
            users.first_name,
            users.middle_name,
            users.last_name,
            users.email,
            users.phone_number,
            roles.slug,
            users.userphoto_path,
            users.created_at
        FROM
            users,
            roles,
            users_roles
        WHERE
            users_roles.role_id = roles.id
            AND users_roles.user_id = users.id
        ORDER BY users.id DESC"
        );

        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = DB::table('roles')
            ->select('id', 'slug')
            ->get();

        return view('admin.user.create')->with('roles', $role);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:13',
            'privilege' => 'required',
        ]);

        $dev_role = Role::where('slug', $request->privilege)->first();
        $dev_perm = Permission::where('slug', 'create')->first();

        $users = new User();
        $users->first_name = $request->fullname;
        $users->middle_name = $request->fullname;
        $users->last_name = $request->fullname;
        $user_email = $users->email = strtolower($request->firstname)."@feisalmombo.co.tz";
        $users->phone_number = $request->phonenumber;
        $users->password = bcrypt('developer');

        $st = $users->save();
        $users->roles()->attach($dev_role);
        $users->permissions()->attach($dev_perm);
        $userstatus = new UserStatus();
        $userstatus->user_id = $users->id;
        $userstatus->slug = false;
        $userstatus->save();
        if (!$st) {
            return redirect('admin/user/create')->with('message', 'Failed to insert User data');
        }
        return redirect('admin/user/create')->with('message', 'User is successfully added with email:' . strtolower($user_email) . '  Password: ' . 'marketplace');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer_id = Auth::user()->id;

        $profile = DB::select(
            "SELECT
            users.id,
            users.first_name,
            users.middle_name,
            users.last_name,
            users.email,
            users.phone_number,
            roles.slug,
            users.userphoto_path,
            users.created_at
        FROM
            users,
            roles,
            users_roles
        WHERE
            users_roles.role_id = roles.id
            AND users_roles.user_id = users.id
        ORDER BY users.id DESC"
        );

        return view('admin.user.show')->with('profiles', $profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $role = Role::all();

        return view('admin.user.edit')->with('users', $user)->with('leve', $role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validate(request(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required',
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:13',
            'privilege' => 'required',
            'userprofile' => 'mimes:jpeg,jpg,png|required|max:2048',
        ]);

        $user->first_name = $request->firstname;
        $user->middle_name = $request->middlename;
        $user->last_name = $request->lastname;
        $user->email = $request->email;
        $user->phone_number = $request->phonenumber;
        $user->userphoto_path = $request->userprofile->store('Userprofilephoto', 'public');
        $st = $user->save();
        if (!$st) {
            return redirect()->back()->with('message', 'Failed to Update User data');
        }

        return redirect('admin/user/index')->with('message', 'User is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uid = Auth::user()->id;
        $user = User::findOrFail($id);
        $user->delete();
        ActivityLog::where('changetype', 'Delete User')->update(['user_id' => $uid]);
        $request->session()->flash('message', 'User is successfully deleted');

        return back();
    }
}
