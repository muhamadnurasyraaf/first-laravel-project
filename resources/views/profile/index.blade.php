@extends('layout.main')

@section('container')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>User Profile</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" id="firstName" class="form-control" value="{{ auth()->user()->username }}" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" id="id" class="form-control" value="{{ auth()->user()->id }}" readonly>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Email Verified at</label>
                <input type="text" id="city" class="form-control" value="{{ auth()->user()->email_verified_at ?? 'Null' }}" readonly>
            </div>
        </div>
    </div>
</div>
@endsection
