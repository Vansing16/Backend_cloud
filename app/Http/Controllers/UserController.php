<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Freelancer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $admins = Admin::all();
        $freelancers = Freelancer::all();

        $totalUsers = $users->count();
        $totalAdmins = $admins->count();
        $totalFreelancers = $freelancers->count();

        return view('users.users', compact('users', 'admins', 'freelancers', 'totalUsers', 'totalAdmins', 'totalFreelancers'));
    }

    public function create()
    {
        return view('users.create-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:signups,email|unique:admins,email|unique:freelancers,email',
            'password' => 'required|string|min:8|max:255',
            'user_type' => 'required|string|in:admin,freelancer,user,customer',
        ]);

        if ($request->user_type == 'admin') {
            Admin::create([
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } elseif ($request->user_type == 'freelancer') {
            Freelancer::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } else {
            User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_type' => $request->user_type,
            ]);
        }

        return redirect()->route('admin.users')->with('success', 'User created successfully');
    }

    public function edit($id, $type)
    {
        if ($type == 'user') {
            $user = User::find($id);
            if ($user) {
                return view('users.edit-user', ['model' => $user, 'type' => 'user']);
            }
        } elseif ($type == 'admin') {
            $admin = Admin::find($id);
            if ($admin) {
                return view('users.edit-user', ['model' => $admin, 'type' => 'admin']);
            }
        } elseif ($type == 'freelancer') {
            $freelancer = Freelancer::find($id);
            if ($freelancer) {
                return view('users.edit-user', ['model' => $freelancer, 'type' => 'freelancer']);
            }
        }

        return redirect()->route('admin.users')->with('error', 'User not found');
}




public function update(Request $request, $id)
{
    $rules = [
        'user_type' => 'required|string',
    ];

    if ($request->user_type == 'admin') {
        $rules = array_merge($rules, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email,' . $id,
            'password' => 'nullable|string|min:8|max:255',
        ]);
    } elseif ($request->user_type == 'freelancer') {
        $rules = array_merge($rules, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:freelancers,email,' . $id,
            'password' => 'nullable|string|min:8|max:255',
            'professional_role' => 'required|string|max:255',
            'work_type' => 'required|string|max:255',
            'bio' => 'required|string',
        ]);
    } else { // customer
        $rules = array_merge($rules, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:signups,email,' . $id,
            'password' => 'nullable|string|min:8|max:255',
        ]);
    }

    $validatedData = $request->validate($rules);

    try {
        if ($request->user_type == 'admin') {
            $admin = Admin::find($id);
            if ($admin) {
                $admin->name = $request->first_name . ' ' . $request->last_name;
                $admin->email = $request->email;
                if ($request->filled('password')) {
                    $admin->password = Hash::make($request->password);
                }
                $admin->save();
            } else {
                return redirect()->route('admin.users')->with('error', 'Admin not found');
            }
        } elseif ($request->user_type == 'freelancer') {
            $freelancer = Freelancer::find($id);
            if ($freelancer) {
                $freelancer->first_name = $request->first_name;
                $freelancer->last_name = $request->last_name;
                $freelancer->email = $request->email;
                if ($request->filled('password')) {
                    $freelancer->password = Hash::make($request->password);
                }
                $freelancer->professional_role = $request->professional_role;
                $freelancer->work_type = $request->work_type;
                $freelancer->bio = $request->bio;
                $freelancer->save();
            } else {
                return redirect()->route('admin.users')->with('error', 'Freelancer not found');
            }
        } else {
            $user = User::find($id);
            if ($user) {
                $user->first_name = $request->first_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                if ($request->filled('password')) {
                    $user->password = Hash::make($request->password);
                }
                $user->save();
            } else {
                return redirect()->route('admin.users')->with('error', 'User not found');
            }
        }

        return redirect()->route('admin.users')->with('success', 'User updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('admin.users')->with('error', 'An error occurred while updating the user');
    }
}






    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        } else {
            $admin = Admin::find($id);
            if ($admin) {
                $admin->delete();
            } else {
                $freelancer = Freelancer::find($id);
                if ($freelancer) {
                    $freelancer->delete();
                } else {
                    return redirect()->route('admin.users')->with('error', 'User not found');
                }
            }
        }

        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }
}
