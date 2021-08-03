@if(Auth::user()->role=="Admin" || Auth::user()->role=="Manager")
@include('admin')
@else
@include('user_dashboard')
@endif