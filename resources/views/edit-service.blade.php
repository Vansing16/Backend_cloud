@extends('layouts.mastercreate')

@section('createcontent')

<form action="{{ route('service.update', $service->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="ratingu95create">
        <div class="div">
            <div class="title">
                <div class="text-wrapper">Edit Service</div>
                <div class="text-wrapper-2">Update service details</div>
            </div>
            <div class="frame-35376">
                <div class="frame-35544">
                    <input type="text" name="title" value="{{ $service->title }}" placeholder="Service Title" class="frame-3605 form-control" required>
                    <input type="text" name="thumbnail" value="{{ $service->thumbnail }}" placeholder="Thumbnail URL" class="frame-3605 form-control" required>
                    <input type="text" name="category" value="{{ $service->category }}" placeholder="Category" class="frame-3605 form-control" required>
                    <input type="number" step="0.01" name="cost" value="{{ $service->cost }}" placeholder="Cost" class="frame-3605 form-control" required>
                    <input type="text" name="rate_hour" value="{{ $service->rate_hour }}" placeholder="Rate per Hour" class="frame-3605 form-control" required>
                    <textarea name="description" placeholder="Description" class="frame-3605 form-control" rows="4" required>{{ $service->description }}</textarea>
                    <button type="submit" class="frame-35356">
                        <div class="create valign-text-middle h6-16px-regular-inter">Update</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
