@extends('layouts.master')

@section('content')
<div class="table-containers">
    <div class="content-container">
        <div class="title-container">
            <div class="title">
                <h1 class="title-1 h1-40px-bold-inter">Messages</h1>
                <div class="manage-your-users h4-23px-medium-inter">Manage your Messages</div>
            </div>
            <a class="button-create" href="/admin/create/message">
                <div class="create h6-16px-regular-inter">Create</div>
            </a>
        </div>
        <div class="content">
            <div class="overlap-group-2">
                <div class="summary">
                    <div class="frame-1268">
                        <div class="frame-1267">
                            <div class="users-1 h5-19px-medium-inter">Messages</div>
                            <div class="frame-1266">
                                <p class="address h6-16px-regular-inter">{{ $totalMessages }} Messages</p>
                            </div>
                        </div>
                    </div>
                    <div class="iconly-light-arrow-down-2">
                        <img class="iconly-light-arrow-down-2-1" src="{{ asset('img/iconly-light-arrow---down-2-2.svg') }}" alt="Iconly/Light/Arrow - Down 2" />
                    </div>
                </div>
                <div class="table">
                    <div class="frame-36021">
                        <div class="frame-360-5">
                            <div class="id valign-text-middle inter-medium-manatee-16px">Name</div>
                        </div>
                        <div class="frame-360-5">
                            <div class="phonenumber valign-text-middle inter-medium-manatee-16px">Email</div>
                        </div>
                        <div class="frame-360-5">
                            <div class="type valign-text-middle inter-medium-manatee-16px">Message</div>
                        </div>
                        <div class="frame-360-5">
                            <div class="email valign-text-middle inter-medium-manatee-16px">Contact Info</div>
                        </div>
                        <div class="frame-360-5">
                            <div class="actions valign-text-middle inter-medium-manatee-16px">Actions</div>
                        </div>
                    </div>

                    @foreach($messages as $message)
                        <div class="table-child">
                            <div class="frame-36022">
                                <div class="frame-360-5">
                                    <div class="number-3 valign-text-middle inter-medium-manatee-16px">
                                        {{ $message->name ?? 'N/A' }}
                                    </div>
                                </div>
                                <div class="frame-360-5">
                                    <div class="phone-3 valign-text-middle h6-16px-regular-inter">
                                        {{ $message->email ?? 'N/A' }}
                                    </div>
                                </div>
                                <div class="frame-360-5">
                                    <div class="admin-2 valign-text-middle h6-16px-regular-inter">
                                        {{ $message->message ?? 'N/A' }}
                                    </div>
                                </div>
                                <div class="frame-360-5">
                                    <div class="jackgmaicom-3 valign-text-middle h6-16px-regular-inter">
                                        {{ $message->contactinfo ?? 'N/A' }}
                                    </div>
                                </div>
                                <div class="frame-360-5">
                                    <div class="dropdown">
                                        <button class="dropbtn">...</button>
                                        <div class="dropdown-content">
                                            <a href="#">Edit</a>
                                            <a href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
