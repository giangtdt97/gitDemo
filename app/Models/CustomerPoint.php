<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerPoint extends Model
{
    protected $fillable = ['id', 'customer_id', 'point', 'total_paid', 'total_used', 'total_draw', 'total_accumulated',
        'total_refunded', 'refunded_per_day', 'total_refer'];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
