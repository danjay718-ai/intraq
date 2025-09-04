<?php

namespace App\Models\EmployeeManagement;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'user_id',
        'scheduled_date',
        'status',
        'scheduled_start_time',
        'scheduled_end_time',
        'approved_by',
        'scheduled_by',
        'remarks',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
