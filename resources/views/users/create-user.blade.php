@extends('layouts.mastercreate')

@section('createcontent')
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="ratingu95create">
        <div class="div">
            <div class="title">
                <div class="text-wrapper">New User</div>
                <div class="text-wrapper-2">Create new account</div>
            </div>
            <div class="frame-35376">
                <div class="frame-35544">
                    <input type="text" name="first_name" placeholder="First Name" class="frame-3605 form-control" required>
                    <input type="text" name="last_name" placeholder="Last Name" class="frame-3605 form-control" required>
                    <input type="email" name="email" placeholder="Email" class="frame-3605 form-control" required>
                    <input type="password" name="password" placeholder="Password" class="frame-3605 form-control" required>
                    <select class="frame-3605 form-control" name="user_type" required>
                        <option value="">User type</option>
                        <option value="admin">Admin</option>
                        <option value="freelancer">Freelancer</option>
                        <option value="customer">Customer</option>
                    </select>
                    <button class="frame-35356" type="submit">
                        <div class="create valign-text-middle h6-16px-regular-inter">Sign up</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
