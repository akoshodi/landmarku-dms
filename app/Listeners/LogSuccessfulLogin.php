<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;
use App\Models\Login as LoginEvent;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        LoginEvent::create([
            'user_id' => $event->user->id,
            'ip_address' => $this->request->ip(),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
