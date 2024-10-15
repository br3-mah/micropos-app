@extends('layouts.main')
@section('content')

    @if (auth()->user()->isSubscribed == 0)
        @include('billing.empty');
    @else
        @include('billing.current');
    @endif

@endsection