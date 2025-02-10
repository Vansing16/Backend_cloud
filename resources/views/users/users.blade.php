@extends('layouts.master')

@section('content')
    <div class="table-containers">
        <div class="content-container">
            <div class="title-container">
                <div class="title">
                    <h1 class="title-1 h1-40px-bold-inter">USERS</h1>
                    <div class="manage-your-users h4-23px-medium-inter">Manage your users</div>
                </div>
                <a href="{{ route('admin.users.create') }}" class="button-create">
                    <div class="create h6-16px-regular-inter">Create</div>
                </a>
            </div>
            <div class="content">
                <div class="overlap-group-2">
                    <div class="summary">
                        <div class="frame-1268">
                            <div class="frame-1267">
                                <div class="users-1 h5-19px-medium-inter">Total Users</div>
                                <div class="frame-1266">
                                    <p class="address h6-16px-regular-inter">{{ $totalUsers }} Users</p>
                                </div>
                            </div>
                            <div class="frame-1267">
                                <div class="users-1 h5-19px-medium-inter">Total Admins</div>
                                <div class="frame-1266">
                                    <p class="address h6-16px-regular-inter">{{ $totalAdmins }} Admins</p>
                                </div>
                            </div>
                            <div class="frame-1267">
                                <div class="users-1 h5-19px-medium-inter">Total Freelancers</div>
                                <div class="frame-1266">
                                    <p class="address h6-16px-regular-inter">{{ $totalFreelancers }} Freelancers</p>
                                </div>
                            </div>
                        </div>
                        <div class="iconly-light-arrow-down-2">
                            <img class="iconly-light-arrow-down-2-1"
                                src="{{ asset('img/iconly-light-arrow---down-2-2.svg') }}"
                                alt="Iconly/Light/Arrow - Down 2" />
                        </div>
                    </div>
                    @if ($users->isEmpty() && $admins->isEmpty() && $freelancers->isEmpty())
                        <div class="no-users">
                            <p>No users, admins, or freelancers available.</p>
                        </div>
                    @else
                        <div class="table">
                            <div class="frame-36021">
                                <div class="frame-360">
                                    <div class="place valign-text-middle inter-medium-manatee-16px">First Name</div>
                                </div>
                                <div class="frame-360">
                                    <div class="place valign-text-middle inter-medium-manatee-16px">Last Name</div>
                                </div>
                                <div class="frame-360">
                                    <div class="id valign-text-middle inter-medium-manatee-16px">ID</div>
                                </div>
                                <div class="frame-360">
                                    <div class="type valign-text-middle inter-medium-manatee-16px">Type</div>
                                </div>
                                <div class="frame-360">
                                    <div class="email valign-text-middle inter-medium-manatee-16px">Email</div>
                                </div>
                                <div class="frame-360-last">
                                    <div class="actions valign-text-middle inter-medium-manatee-16px">Actions</div>
                                </div>
                            </div>
                            @foreach ($users as $user)
                                <div class="table-child">
                                    <div class="frame-36022">
                                        <div class="frame-360">
                                            <div class="name-3 valign-text-middle inter-medium-manatee-16px">
                                                {{ $user->first_name }}</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="name-3 valign-text-middle inter-medium-manatee-16px">
                                                {{ $user->last_name }}</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="number-3 valign-text-middle inter-medium-manatee-16px">
                                                {{ $user->id }}</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="user-2 valign-text-middle h6-16px-regular-inter">User</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="jackgmaicom-3 valign-text-middle h6-16px-regular-inter">
                                                {{ $user->email }}</div>
                                        </div>
                                        <div class="frame-360-last">
                                            <div class="dropdown">

                                                <a
                                                    href="{{ route('admin.users.edit', ['id' => $user->id, 'type' => 'user']) }}">Edit</a>
                                                <a href="#"
                                                    onclick="event.preventDefault(); document.getElementById('delete-user-{{ $user->id }}').submit();">Delete</a>
                                                <form id="delete-user-{{ $user->id }}"
                                                    action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($admins as $admin)
                                <div class="table-child">
                                    <div class="frame-36022">
                                        <div class="frame-360">
                                            <div class="name-3 valign-text-middle inter-medium-manatee-16px">
                                                {{ $admin->name }}</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="name-3 valign-text-middle inter-medium-manatee-16px"> </div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="number-3 valign-text-middle inter-medium-manatee-16px">
                                                {{ $admin->id }}</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="admin-2 valign-text-middle h6-16px-regular-inter">Admin</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="jackgmaicom-3 valign-text-middle h6-16px-regular-inter">
                                                {{ $admin->email }}</div>
                                        </div>
                                        <div class="frame-360-last">
                                            <a
                                                href="{{ route('admin.users.edit', ['id' => $admin->id, 'type' => 'admin']) }}">Edit</a>
                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('delete-admin-{{ $admin->id }}').submit();">Delete</a>
                                            <form id="delete-admin-{{ $admin->id }}"
                                                action="{{ route('admin.users.destroy', $admin->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($freelancers as $freelancer)
                                <div class="table-child">
                                    <div class="frame-36022">
                                        <div class="frame-360">
                                            <div class="name-3 valign-text-middle inter-medium-manatee-16px">
                                                {{ $freelancer->first_name }}</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="name-3 valign-text-middle inter-medium-manatee-16px">
                                                {{ $freelancer->last_name }}</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="number-3 valign-text-middle inter-medium-manatee-16px">
                                                {{ $freelancer->id }}</div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="freelancer-2 valign-text-middle h6-16px-regular-inter">Freelancer
                                            </div>
                                        </div>
                                        <div class="frame-360">
                                            <div class="jackgmaicom-3 valign-text-middle h6-16px-regular-inter">
                                                {{ $freelancer->email }}</div>
                                        </div>
                                        <div class="frame-360-last">
                                            <div class="dropdown">

                                                <a
                                                    href="{{ route('admin.users.edit', ['id' => $freelancer->id, 'type' => 'freelancer']) }}">Edit</a>
                                                <a href="#"
                                                    onclick="event.preventDefault(); document.getElementById('delete-freelancer-{{ $freelancer->id }}').submit();">Delete</a>
                                                <form id="delete-freelancer-{{ $freelancer->id }}"
                                                    action="{{ route('admin.users.destroy', $freelancer->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
