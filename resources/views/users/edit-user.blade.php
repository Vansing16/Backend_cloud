@extends('layouts.mastercreate')

@section('createcontent')

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.users.update', $model->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="user_type" value="{{ $type }}">
    <div class="ratingu95create">
        <div class="div">
            <div class="title">
                <div class="text-wrapper">Edit {{ ucfirst($type) }}</div>
                <div class="text-wrapper-2">Update {{ $type }} details</div>
            </div>
            <div class="frame-35376">
                <div class="frame-35544">
                    @if($type == 'user')
                        <input type="text" name="first_name" value="{{ $model->first_name }}" placeholder="First Name" class="frame-3605 form-control" required>
                        <input type="text" name="last_name" value="{{ $model->last_name }}" placeholder="Last Name" class="frame-3605 form-control" required>
                        <input type="email" name="email" value="{{ $model->email }}" placeholder="Email" class="frame-3605 form-control" required>
                        <input type="password" name="password" placeholder="Password" class="frame-3605 form-control">
                    @elseif($type == 'admin')
                        <input type="text" name="first_name" value="{{ explode(' ', $model->name)[0] }}" placeholder="First Name" class="frame-3605 form-control" required>
                        <input type="text" name="last_name" value="{{ explode(' ', $model->name)[1] }}" placeholder="Last Name" class="frame-3605 form-control" required>
                        <input type="email" name="email" value="{{ $model->email }}" placeholder="Email" class="frame-3605 form-control" required>
                        <input type="password" name="password" placeholder="Password" class="frame-3605 form-control">
                    @elseif($type == 'freelancer')
                        <input type="text" name="first_name" value="{{ $model->first_name }}" placeholder="First Name" class="frame-3605 form-control" required>
                        <input type="text" name="last_name" value="{{ $model->last_name }}" placeholder="Last Name" class="frame-3605 form-control" required>
                        <input type="email" name="email" value="{{ $model->email }}" placeholder="Email" class="frame-3605 form-control" required>
                        <input type="password" name="password" placeholder="Password" class="frame-3605 form-control">
                        <input type="text" name="professional_role" value="{{ $model->professional_role }}" placeholder="Professional Role" class="frame-3605 form-control" required>
                        <input type="text" name="work_type" value="{{ $model->work_type }}" placeholder="Work Type" class="frame-3605 form-control" required>
                        <textarea name="bio" placeholder="Bio" class="frame-3605 form-control" rows="4" required>{{ $model->bio }}</textarea>
                        <input type="text" name="profile_image_path" value="{{ $model->profile_image_path }}" placeholder="Profile Image Path" class="frame-3605 form-control">
                        <input type="text" name="resume_path" value="{{ $model->resume_path }}" placeholder="Resume Path" class="frame-3605 form-control">
                    @endif
                    <button type="submit" class="frame-35356">
                        <div class="create valign-text-middle h6-16px-regular-inter">Update</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
