@extends('layouts.app')

@section('content')
    <div class="card" style="width: 22rem;">
        <div class="card-body">
            <h1 class="card-title">Hello, {{ $name }}!</h1>
            <h2 class="mt-3 mb-3">My Skills</h2>
            @if(count($skills) > 0)
                <ul class="list-group">
                    @foreach ($skills as $skill)
                        <li class="list-group-item">{{ $skill }}</li>
                    @endforeach
                </ul>
            @else
                <div class="alert alert-danger" role="alert">
                    You have no skills!
                </div>
            @endif
        </div>
    </div>
@endsection