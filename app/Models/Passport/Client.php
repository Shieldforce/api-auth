<?php

namespace App\Models\Passport;

use Laravel\Passport\Client as BaseClient;

class Client extends BaseClient
{
    /**
     * Overrider method skipsAuthorization
     */
    public function skipsAuthorization(): bool
    {
        return true;
        //return $this->firstParty();
    }
}
