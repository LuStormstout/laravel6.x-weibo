<?php

namespace App\Policies;

use App\Models\Status;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusPolicy
{
    use HandlesAuthorization;

    /**
     * 只有作者可以删除微博
     * @param User $user
     * @param Status $status
     * @return bool
     */
    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}
