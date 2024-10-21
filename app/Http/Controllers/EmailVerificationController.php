<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\YourTestEmail; // Import your Mailable class

class EmailVerificationController extends Controller
{
    public function sendTestEmail()
    {
        $recipientEmail = 'maduhukefline64@gmail.com';

        Mail::to($recipientEmail)->send(new YourTestEmail());

        return 'Email sent to ' . $recipientEmail . '!';
    }
}
