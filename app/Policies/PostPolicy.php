<?php

namespace App\Policies;

use App\Model\Admin\Admin;
use App\Model\Post\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Model\User\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function view(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Model\User\User  $user
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $this->getPermission($admin,4);
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Model\User\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Admin $admin)
    {
        return $this->getPermission($admin,7);
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Model\User\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Admin $admin)
    {
        return $this->getPermission($admin,6);
    }

    public function tag(Admin $admin)
    {
        return $this->getPermission($admin,9);
    }

    public function category(Admin $admin)
    {
        return $this->getPermission($admin,10);
    }

    protected function getPermission($admin,$p_id)
    {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }

}
