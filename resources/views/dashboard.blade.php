@extends('app')

@section('content')
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card border-0 shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">Profile</h2>
            </div>
            <div class="card-body text-center">
                <img src="{{ Auth::user()->profile_picture }}" alt="Profile Picture" class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px;">
                <h4>{{ auth()->user()->name }}</h4>
                <p class="text-muted">Joined: {{ auth()->user()->created_at->format('M d, Y') }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card border-0 shadow">
            <div class="card-header bg-secondary text-white">
                <h2 class="text-center">Welcome..!</h2>
            </div>
            <div class="card-body">
               
                <div class="text-center mt-4">
                    <a href="/logout" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
         <button type="button" class="btn btn-warning btn-lg" onclick="location.href='{{ route('ol') }}';">Ordinary-Level</button>
         <button type="button" class="btn btn-warning btn-lg" onclick="location.href='{{ route('al') }}';">Advanced-Level</button>
         <button type="button" class="btn btn-warning btn-lg" onclick="location.href='{{ route('it') }}';">Information Technology</button>
         <button type="button" class="btn btn-warning btn-lg" onclick="location.href='{{ route('general') }}';">General Knowledge</button>
        </div>
</div>

                            
 </div>
@endsection


