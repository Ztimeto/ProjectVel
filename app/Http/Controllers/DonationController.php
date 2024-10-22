<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use App\Models\Donation;
use App\Models\Campaign; // Make sure to import the Campaign model
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    public function __construct() {
        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        \Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION') === 'false';
    }

    public function createDonation(Request $request) {
        // Validasi permintaan
        $validated = $request->validate([
            'amount' => 'required|numeric|min:10000',
            'name' => 'required|string',
            'email' => 'required|email',
            'campaign_id' => 'required|exists:campaigns,id',
        ]);

        $validated['donor_name'] = $validated['name'];

        $campaign = Campaign::find($validated['campaign_id']);
        $validated['division'] = $campaign->division;

        // Buat catatan donasi
        $donation = Donation::create($validated);

        // Update the campaign's raised amount
        $campaign = Campaign::find($validated['campaign_id']);
        $campaign->raised_amount += $donation->amount;
        $campaign->save(); // Save the updated campaign

        // Buat token Snap
        try {
            $midtrans = Snap::getSnapToken([
                'transaction_details' => [
                    'order_id' => $donation->id,
                    'gross_amount' => $donation->amount,
                ],
                'customer_details' => [
                    'first_name' => $validated['name'],
                ],
            ]);
            
            return response()->json(['success' => true, 'snap_token' => $midtrans]);
        } catch (\Exception $e) {
            Log::error('Midtrans Snap token error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error generating payment token.']);
        }
    }
}
