<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Tous les utilisateurs avec qui on a échangé
        $conversations = Message::where('sender_id', $user->id)
                            ->orWhere('receiver_id', $user->id)
                            ->with(['sender', 'receiver'])
                            ->latest()
                            ->get()
                            ->groupBy(function ($msg) use ($user) {
                                return $msg->sender_id === $user->id ? $msg->receiver_id : $msg->sender_id;
                            });

        return view('messages.index', compact('conversations'));
    }

    public function show($id)
    {
        $user = Auth::user();

        $messages = Message::where(function ($query) use ($id, $user) {
            $query->where('sender_id', $user->id)->where('receiver_id', $id);
        })->orWhere(function ($query) use ($id, $user) {
            $query->where('sender_id', $id)->where('receiver_id', $user->id);
        })->orderBy('created_at')->get();

        $receiver = User::findOrFail($id);

        return view('messages.show', compact('messages', 'receiver'));
    }

    public function store(Request $request)
{
    $request->validate([
        'receiver_id' => 'required|exists:users,id',
        'contenu' => 'required|string|max:2000',
    ]);

    $message = Message::create([
        'sender_id' => Auth::id(),
        'receiver_id' => $request->receiver_id,
        'contenu' => $request->contenu,
    ]);

    // ⏪ Ajouter ceci pour l'événement en temps réel
    event(new NewMessage($message));

    return redirect()->back()->with('success', 'Message envoyé !');
}

}
