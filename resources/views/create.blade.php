@extends('layouts.mastercreate')

@section('createcontent')

      <div class="div">
        <div class="title">
          <div class="text-wrapper">CREATE</div>
          <div class="text-wrapper-2">PICK TO CREATE</div>
        </div>
        <a href="{{ url('/admin/create/user') }}" class="div-wrapper">
          <div class="text-wrapper-3">NEW USER</div>
        </a>
        <a href="{{ url('/admin/create/review') }}" class="div-wrapper">
          <div class="text-wrapper-3">CONTACT US</div>
        </a>
        <a href="{{ url('/admin/create/service') }}" class="div-wrapper">
          <div class="text-wrapper-3">SERVICE</div>
        </a>
      </div>

@endsection
