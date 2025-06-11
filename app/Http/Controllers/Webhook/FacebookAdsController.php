<?php

namespace App\Http\Controllers\Webhook;

use App\Models\UserFacebookLead;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacebookAdsController extends Controller
{

    public function getFacebookLeads(Request $request)
    {
        try {
            // Get the entire request payload
            $payload = $request->all();

            $verifyToken = ['oNUfKo0VRzsPWa9SnhHjvWnLadJ6NVrV', 'EAAKM6WFGk80BO7HBe6bITxPwiclgsLJyZCj4kwyTHUsH7IQpT1TUKAzcGhex25etZARbdRxxTC4jiPv97f3411M05c3mC04TbUx1ZCZAZA5YPScTC4z63WNGRzKReNJiZC9RwLYVN6pL6RlQGUm8na58MopwWzTR3EJlF2ZCamPRAHKGnyWTwVxbMxCtiCZCyiLxj9cfvjCO6JNp30GAeuZBtIOwq']; // same as in Meta UI

            // Check for Facebook verification request
            if ($request->has('hub_mode') && $request->input('hub_mode') === 'subscribe' 
                && $request->has('hub_verify_token') && in_array($request->input('hub_verify_token'), $verifyToken)) {
                return response($request->input('hub_challenge'), 200)
                    ->header('Content-Type', 'text/plain');
            }

            // Check for Facebook verification request (using hub.mode format)
            if ($request->has('hub.mode') && $request->input('hub.mode') === 'subscribe' 
                && $request->has('hub.verify_token') && in_array($request->input('hub.verify_token'), $verifyToken)) {
                return response($request->input('hub.challenge'), 200)
                    ->header('Content-Type', 'text/plain');
            }

            // If verification fails
            if (($request->has('hub_mode') || $request->has('hub.mode')) && 
                (!in_array($request->input('hub_verify_token'), $verifyToken) && !in_array($request->input('hub.verify_token'), $verifyToken))) {
                return response(['Error' => 'Verification failed', 'response' => $request->all()], 403);
            }

            // Create a new UserFacebookLead record
            $lead = new UserFacebookLead();
            $lead->user_id = 2; // Set user_id if authenticated
            $lead->request_payload = json_encode($payload); // Store the entire payload as JSON
            $lead->save();

//            return response()->json([
//                'success' => true,
//                'message' => 'Facebook lead data saved successfully',
//                'lead_id' => $lead->id,
//                'hub.challenge' => $request->input('hub_challenge')
//            ]);
            return response($request->input('hub.challenge'), 200)
                ->header('Content-Type', 'text/plain');

        } catch (\Exception $e) {
            // If there's an error, create a record with error logs
            try {
                $lead = new UserFacebookLead();
                $lead->user_id = 2;
                $lead->request_payload = json_encode($request->all());
                $lead->error_logs = json_encode([
                    'message' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => $e->getTraceAsString()
                ]);
                $lead->save();
            } catch (\Exception $innerException) {
                // If we can't even log the error, return both errors
                return response()->json([
                    'success' => false,
                    'error' => $e->getMessage(),
                    'logging_error' => $innerException->getMessage()
                ], 500);
            }

            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Error logged successfully'
            ], 500);
        }
    }
}
