
@extends('layouts.mastercreate')

@section('createcontent')
<form action="/admin/create/review/store" method="POST">
    @csrf
    <div class="ratingu95create">
        <div class="div">
            <div class="title">
                <div class="text-wrapper">Message</div>
                <div class="text-wrapper-2">Create new message</div>
            </div>
            <div class="frame-35376">
                <div class="frame-35544">
                    <input type="text" class="frame-3605 form-control" name="name" placeholder="Enter your name" required>
                    <input type="email" class="frame-3605 form-control" name="email" placeholder="Enter your email" required>
                </div>

                <div class="frame-35364">
                    <textarea id="message" name="message" class="email-input" rows="4" placeholder="Enter your message" required></textarea>
                </div>

                <button class="frame-35356">
                    <div class="create valign-text-middle h6-16px-regular-inter">Create</div>
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
