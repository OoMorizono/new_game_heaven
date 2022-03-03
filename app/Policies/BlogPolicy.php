<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\Women;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the women can view any models.
     *
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Women $women)
    {
        //
    }

    /**
     * Determine whether the women can view the model.
     *
     * @param  \App\Models\Women  $women
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Women $women, Blog $blog)
    {
        //
    }

    /**
     * Determine whether the women can create models.
     *
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Women $women)
    {
        //
    }

    /**
     * Determine whether the women can update the model.
     *
     * @param  \App\Models\Women  $women
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Women $women, Blog $blog)
    {
        return $women->id === $blog->women_id;
    }

    /**
     * Determine whether the women can delete the model.
     *
     * @param  \App\Models\Women  $women
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Women $women, Blog $blog)
    {
        return $women->id === $blog->women_id;
    }

    /**
     * Determine whether the women can restore the model.
     *
     * @param  \App\Models\Women  $women
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Women $women, Blog $blog)
    {
        //
    }

    /**
     * Determine whether the women can permanently delete the model.
     *
     * @param  \App\Models\Women  $women
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Women $women, Blog $blog)
    {
        //
    }
}
