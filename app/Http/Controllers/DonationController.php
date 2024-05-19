<?php

// namespace App\Http\Controllers;

// use App\Models\Donations;
// use Illuminate\Http\Request;

// class DonationController extends Controller
// {
//     public function sum()
//     {
//         $sum = Donations::sum('amount');
//         return response()->json(['sum' => $sum]);
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donations;
use App\Http\Controllers\save;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|integer|min:1',
        ]);

        $donation = new Donations();
        $donation->user_id = Auth::id();
        $donation->amount = $request->amount;
        $donation->time = now();
        $donation->save();

        return redirect()->back()->with('success', 'Donation successful!');    
    }



    public function totalDonations()
    {
        $totalDonations = Donations::sum('amount');
        return response()->json(['sum' => $totalDonations]);
    }
}

