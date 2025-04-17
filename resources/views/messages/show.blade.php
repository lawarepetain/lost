@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Conversation avec {{ $receiver->name }}</h2>

    <div class="border p-3 mb-3" style="height: 300px; overflow-y: scroll;">
        @foreach($messages as $message)
            <div class="mb-2 {{ $message->sender_id === auth()->id() ? 'text-end' : '' }}">
                <strong>{{ $message->sender->name }}</strong><br>
                {{ $message->contenu }} <br>
                <small class="text-muted">{{ $message->created_at->format('H:i d/m/Y') }}</small>
            </div>
        @endforeach
    </div>

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input type="hidden" name="receiver_id" value="{{ $receiver->id }}">
        <textarea name="contenu" class="form-control mb-2" rows="3" placeholder="Votre message..."></textarea>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
@endsection
