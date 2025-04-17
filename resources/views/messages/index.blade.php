@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Messages</h1>
    @foreach($conversations as $userId => $conv)
        @php $user = $conv->first()->sender_id == auth()->id() ? $conv->first()->receiver : $conv->first()->sender; @endphp
        <div class="mb-2">
            <a href="{{ route('messages.show', $user->id) }}">{{ $user->name }}</a>
        </div>
    @endforeach
</div>
@endsection
