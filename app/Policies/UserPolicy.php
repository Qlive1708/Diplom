<?php

namespace App\Policies;

use App\Model\User as ModelUser;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Model\User  $user
     * @return mixed
     */
    public function viewAny(ModelUser $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\User  $model
     * @return mixed
     */
    public function view(ModelUser $user, ModelUser $model)
    {
        //
        return $user->userHasRole('admin')?: $user->id == $model->id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Model\User  $user
     * @return mixed
     */
    public function create(ModelUser $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\User  $model
     * @return mixed
     */
    public function update(ModelUser $user, ModelUser $model)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\User  $model
     * @return mixed
     */
    public function delete(ModelUser $user, ModelUser $model)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\User  $model
     * @return mixed
     */
    public function restore(ModelUser $user, ModelUser $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\User  $model
     * @return mixed
     */
    public function forceDelete(ModelUser $user, ModelUser $model)
    {
        //
    }
}
