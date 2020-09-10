<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Employee extends Model
{
    protected $fillable = [
        "name",
        "email",
        "salary"
    ];

    protected $hidden = [
        "updated_at"
    ];

    public function getCreatedAtAttribute($value)
    {
        $createdAt = Carbon::parse($value);

        return $createdAt->format('Y.m.d');
    }
}
