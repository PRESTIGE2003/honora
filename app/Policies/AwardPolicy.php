<?php

namespace App\Policies;

use App\Models\Award;
use App\Models\User;

class AwardPolicy
{
    public function create(User $user): bool
    {
        return $user->is_admin === true;
    }

    public function update(User $user, Award $award): bool
    {
        return $user->is_admin === true;
    }
}
