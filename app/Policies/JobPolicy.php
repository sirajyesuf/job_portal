<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\BaseUser;

class JobPolicy
{
    use HandlesAuthorization;

    public function viewAny(BaseUser $user)
    {
        return true;
    }

    public function view(BaseUser $user, Job $job)
    {
        return true;
    }

 
    public function create(BaseUser $user)
    {
        if(!$user->isAdmin() and $user->isSubscriber()) return true;
    }

 
    public function update(BaseUser $user, Job $job)
    {
        return true;
    }


    public function delete(BaseUser $user, Job $job)
    {
        return true;
    }


    public function restore(BaseUser $user, Job $job)
    {
        //
    }

    public function forceDelete(BaseUser $user, Job $job)
    {
        //
    }


}
