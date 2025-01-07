@extends('admin.layout')
@section('content')
    @foreach ($ourServices as $service)
        <div class="service-item">
            <h2>{{ $service->title }}</h2>
            <img src="{{ asset('storage/' . $service->image_1) }}" alt="Image 1">
            <p>{{ $service->content }}</p>
            <p>{{ $service->paragraph_1 }}</p>
            <p>{{ $service->paragraph_2 }}</p>
            <img src="{{ asset('storage/' . $service->image_2) }}" alt="Image 2">
            <img src="{{ asset('storage/' . $service->image_3) }}" alt="Image 3">
            <img src="{{ asset('storage/' . $service->image_4) }}" alt="Image 4">
            <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon">
        </div>
    @endforeach
@endsection
