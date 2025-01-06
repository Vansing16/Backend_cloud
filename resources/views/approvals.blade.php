@extends('layouts.master')

@section('content')
<div class="table-containers">
    <div class="content-container">
        <div class="title-container">
            <div class="title">
                <h1 class="title-1 h1-40px-bold-inter">Service Approval</h1>
                <div class="manage-your-users h4-23px-medium-inter">Approve your seller services</div>
            </div>
            <div class="button-create">
                <a href="/admin/create/service" class="create h6-16px-regular-inter">Create</a>
            </div>
        </div>
        <div class="content">
            <div class="overlap-group-2">
                <div class="summary">
                    <div class="frame-1268">
                        <div class="group-4">
                            <div class="spends h5-19px-medium-inter">Total services</div>
                            <div class="price h6-16px-regular-inter">{{ $totalServices }} Services</div>
                        </div>
                    </div>
                    <div class="iconly-light-arrow-down-2">
                        <img class="iconly-light-arrow-down-2-1" src="{{ asset('img/iconly-light-arrow---down-2-2.svg') }}" alt="Iconly/Light/Arrow - Down 2" />
                    </div>
                </div>

                @if($services->isEmpty())
                    <div class="no-users">
                        <p>No services available.</p>
                    </div>
                @else
                    <div class="table">
                        <div class="frame-36021">
                            <div class="frame-360">
                                <div class="id valign-text-middle inter-medium-manatee-16px">Title</div>
                            </div>
                            <div class="frame-360">
                                <div class="type valign-text-middle inter-medium-manatee-16px">Category</div>
                            </div>
                            <div class="frame-360">
                                <div class="email valign-text-middle inter-medium-manatee-16px">Cost</div>
                            </div>
                            <div class="frame-360">
                                <div class="service valign-text-middle inter-medium-manatee-16px">Rate per Hour</div>
                            </div>
                            <div class="frame-360">
                                <div class="actions valign-text-middle inter-medium-manatee-16px">Description</div>
                            </div>
                            <div class="frame-360">
                                <div class="actions valign-text-middle inter-medium-manatee-16px">Actions</div>
                            </div>
                        </div>

                        @foreach ($services as $service)
                        <div class="table-child">
                            <div class="frame-36022">
                                <div class="frame-360">
                                    <div class="number-3 valign-text-middle inter-medium-manatee-16px">{{ $service->title }}</div>
                                </div>
                                <div class="frame-360">
                                    <div class="admin-2 valign-text-middle h6-16px-regular-inter">{{ $service->category }}</div>
                                </div>
                                <div class="frame-360">
                                    <div class="jackgmaicom-3 valign-text-middle h6-16px-regular-inter">{{ $service->cost }}</div>
                                </div>
                                <div class="frame-360">
                                    <div class="web-development valign-text-middle h6-16px-regular-inter">{{ $service->rate_hour }}</div>
                                </div>
                                <div class="frame-360">
                                    <div class="service-description valign-text-middle h6-16px-regular-inter">{{ $service->description }}</div>
                                </div>
                                <div class="frame-360">
                                    <div class="dropdown">
                                        <button class="dropbtn">...</button>
                                        <div class="dropdown-content">
                                            <a href="#">Approve</a>
                                            <a href="{{ route('service.edit', $service->id) }}">Edit</a>
                                            <form action="{{ route('service.destroy', $service->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Delete</button>
                                            </form>
                                        </div>
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
