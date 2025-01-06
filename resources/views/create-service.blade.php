@extends('layouts.mastercreate')

@section('createcontent')

<form action="/admin/create/service/store" method="POST">
    @csrf
    <div class="ratingu95create">
        <div class="div">
            <div class="title">
                <div class="text-wrapper">New Service</div>
                <div class="text-wrapper-2">Create new service</div>
            </div>
            <div class="frame-35376">
                <div class="frame-35544">
                    <input type="text" name="title" placeholder="Service Title" class="frame-3605 form-control" required>
                    <input type="text" name="thumbnail" placeholder="Thumbnail URL" class="frame-3605 form-control" required>
                    <input type="text" name="category" placeholder="Category" class="frame-3605 form-control" required>
                    <input type="number" step="0.01" name="cost" placeholder="Cost" class="frame-3605 form-control" required>
                    <input type="text" name="rate_hour" placeholder="Rate per Hour" class="frame-3605 form-control" required>
                    <textarea name="description" placeholder="Description" class="frame-3605 form-control" rows="4" required></textarea>
                    <button type="submit" class="frame-35356">
                        <div class="create valign-text-middle h6-16px-regular-inter">Create</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
