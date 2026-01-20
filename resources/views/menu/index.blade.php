@extends('layouts.app')

@section('title', 'Menu')

@section('content')
  <h1 class="mb-4">Menu</h1>

  @if($items->isEmpty())
    <div class="alert alert-info">No menu items found.</div>
  @else
    <div class="row">
      @foreach($items as $item)
        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{ route('menu.show', $item->id) }}">{{ $item->name }}</a>
                @if(!$item->is_available)
                  <span class="badge bg-secondary">Unavailable</span>
                @endif
              </h5>
              <p class="card-text">{{ \Illuminate\Support\Str::limit($item->description, 120) }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
              <strong>${{ number_format($item->price, 2) }}</strong>
              <a href="{{ route('menu.show', $item->id) }}" class="btn btn-sm btn-primary">View</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif
@endsection
