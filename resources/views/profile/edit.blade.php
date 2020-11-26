@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <form method="POST" action="{{ route('profile.update', ['profile' => $profile->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <input name="name" value="{{ $profile->name_first }}" placeholder="name_first">
            @error('name_first')
            {{ $message }}
            @enderror

            <input name="date" value="{{ $profile->name_last }}" placeholder="name_last">
            @error('name_last')
            {{ $message }}
            @enderror

            <input name="location" value="{{ $profile->country }}" placeholder="country">
            @error('country')
            {{ $message }}
            @enderror

            <input name="region" value="{{ $profile->gender }}" placeholder="gender">
            @error('gender')
            {{ $message }}
            @enderror

            <input name="country" value="{{ $profile->phone }}" placeholder="phone">
            @error('phone')
            {{ $message }}
            @enderror

            <button type="submit">edit</button>
        </form>
    </div>
</div>
@endsection
