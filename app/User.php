<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function search ($query) {
        $pagination = $query['pagination'];
        $name = $query['name'];
        $active = isset($query['active']) ? $query['active'] : null;
        $inactive = isset($query['inactive']) ? $query['inactive'] : null;
        $search = User::where('isSupperAdmin', 0);

        if ($name) {
            $search = $search->where('name', 'like', '%' . $name . '%')
                ->orWhere('email', 'like', '%' . $name . '%');
        }

        if (!$active || !$inactive) {
            $status = $active && !$inactive ? 1 : 0;
            $search = $search->where('status', $status);
        }

        return $search->paginate($pagination);
    }
}
