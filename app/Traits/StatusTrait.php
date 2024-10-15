<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Models\Subscription;

trait StatusTrait
{
    /**
     * Check if the user has an active subscription.
     *
     * @return bool
     */
    public function hasActiveSubscription()
    {
        // Assuming the Subscription model is properly defined
        $currentDate = Carbon::now();

        // Find the user's active subscription
        return $this->subscriptions()
                    ->where('status', 'active')
                    ->where('start_date', '<=', $currentDate)
                    ->where('end_date', '>=', $currentDate)
                    ->exists();
    }

    /**
     * Get the user's current active subscription.
     *
     * @return Subscription|null
     */
    public function getCurrentSubscription()
    {
        $currentDate = Carbon::now();

        // Return the active subscription or null if no active subscription exists
        return $this->subscriptions()
                    ->where('status', 'active')
                    ->where('start_date', '<=', $currentDate)
                    ->where('end_date', '>=', $currentDate)
                    ->first();
    }
}
