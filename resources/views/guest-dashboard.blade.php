@extends('layouts.app')

@section('title', 'Kenya Safari Dashboard')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Include components directly using include -->
        @include('components.dashboard.hero-banner')
        
        @include('components.dashboard.quick-links')
        
        @include('components.dashboard.featured-destinations')
        
        @include('components.dashboard.safari-finder')
        
        @include('components.dashboard.upcoming-events')
        
        <!-- Add more components as needed -->
    </div>
</div>
@endsection