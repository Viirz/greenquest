<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function sum()
    {
        $sum = Donations::sum('amount');
        return response()->json(['sum' => $sum]);
    }
}
