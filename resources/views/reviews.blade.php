@extends('layouts.master')

@section('content')
<div class="table-containers">
    <div class="content-container">
        <div class="title-container">
            <div class="title">
                <h1 class="title-1 h1-40px-bold-inter">Contact Messages</h1>
                <div class="manage-your-users h4-23px-medium-inter">Manage your contact messages</div>
            </div>
            <a href="/admin/create/review" class="button-create"><div class="create h6-16px-regular-inter">Create</div></a>
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
                        <img
                            class="iconly-light-arrow-down-2-1"
                            src="{{ asset('img/iconly-light-arrow---down-2-2.svg') }}"
                            alt="Iconly/Light/Arrow - Down 2"
                        />
                    </div>
                </div>
                <div class="table">
                    <div class="frame-36021">
                        <div class="frame-360-4">
                            <div class="id valign-text-middle inter-medium-manatee-16px">Name</div>
                        </div>
                        <div class="frame-360-4">
                            <div class="comments valign-text-middle inter-medium-manatee-16px">Email</div>
                        </div>
                        <div class="frame-360-4">
                            <div class=" valign-text-middle inter-medium-manatee-16px">Message</div>
                        </div>
                        <div class="frame-360-4">
                            <div class="actions valign-text-middle inter-medium-manatee-16px">Actions</div>
                        </div>
                    </div>
                    @foreach($messages as $message)
                        <div class="table-child">
                            <div class="frame-36022">
                                <div class="frame-360-4">
                                    <div class="name-3 valign-text-middle inter-medium-manatee-16px">{{ $message->name }}</div>
                                </div>
                                <div class="frame-360-4">
                                    <div class="comments valign-text-middle inter-medium-manatee-16px">{{ $message->email }}</div>
                                </div>
                                <div class="frame-360-4">
                                    <div class="rating valign-text-middle inter-medium-manatee-16px">{{ $message->message }}</div>
                                </div>
                                <div class="frame-360-4">
                                    <div class="dropdown">
                                        <button class="dropbtn">...</button>

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
