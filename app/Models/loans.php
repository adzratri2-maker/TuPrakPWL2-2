<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loans extends Model
{
    protected $fillable = [
        'user_id',
        'loan_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loanDetails()
    {
        return $this->hasMany(LoanDetail::class);
    }

    public function returnData()
    {
        return $this->hasOne(ReturnModel::class);
    }
}
