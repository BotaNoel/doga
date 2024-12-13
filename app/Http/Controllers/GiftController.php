<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gift;

class GiftController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gift_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'gift_type_id' => 'required|exists:gift_types,id',
        ]);

        Gift::create([
            'gift_name' => $request->gift_name,
            'price' => $request->price,
            'gift_type_id' => $request->gift_type_id,
        ]);

        return redirect()->route('gifts.index')->with('success', 'Ajándék sikeresen hozzáadva!');
    }
}
