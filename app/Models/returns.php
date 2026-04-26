<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class returns extends Model
{
    protected $table = 'returns';

    protected $fillable = [
        'loan_id',
        'return_date'
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
