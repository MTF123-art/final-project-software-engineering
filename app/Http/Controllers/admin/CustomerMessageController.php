<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
    public function index()
    {
        return view('admin.customer-message.index', [
            'title' => 'Customer Messages',
            'messages' => Contact::latest()->paginate(6),
        ]);
    }

    public function delete($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.customer-message.index')->with('success', 'Message deleted successfully.');
    }

    public function show($id)
    {
        $message = Contact::findOrFail($id);

        if (!$message->is_read) {
            $message->is_read = true;
            $message->save();
        }

        return view('admin.customer-message.show', compact('message'));
    }
}
