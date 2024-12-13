<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftType;

class GiftTypeController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
        ]);
    
        GiftType::create([
            'type' => $request->type,
        ]);
    
        return redirect()->route('gift_types.index')->with('success', 'Ajándék típus sikeresen hozzáadva!');
    }

}
