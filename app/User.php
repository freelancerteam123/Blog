<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

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
        $active = isset($query['active']) ? $query['active'] : null;
        $inactive = isset($query['inactive']) ? $query['inactive'] : null;
        $search = User::where('isSupperAdmin', 0);

        if (isset($query['name'])) {
            $name = $query['name'];
            $search = $search->where('name', 'like', '%' . $name . '%')
                ->orWhere('email', 'like', '%' . $name . '%');
        }

        if ((!$active && $inactive) || ($active && !$inactive)) {
            $status = $active && !$inactive ? 1 : 0;
            $search = $search->where('status', $status);
        }

        return $search->paginate($pagination);
    }

    public static function updateLastActive ($id) {
        User::where('id', $id)->update(['last_active' => Carbon::now()]);
    }
}
