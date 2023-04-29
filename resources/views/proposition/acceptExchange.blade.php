@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('propositions.acceptExchange', $proposition->id) }}">
    @csrf
    <button type="submit" class="btn btn-primary">Accept Exchange</button>
</form>

@endsection
