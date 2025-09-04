<?php

namespace App\Models\EmployeeManagement;

use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    protected $fillable = [
        'user_id',
        'schedule_id',
        'clock_in_time',
        'clock_out_time',
        'total_hours',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
