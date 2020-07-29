<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'password',
        'email',
        'active_code',
        'ref_id',
        'identity_number',
        'identity_picture_front',
        'identity_picture_back',
        'approved_at',
        'code',
        'level',
        'status',
        'topic',
        'avatar',
    ];

    protected $dates = ['approved_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected $appends = ['level_name'];

    public function point() {
        return $this->hasOne(CustomerPoint::class);
    }


}
