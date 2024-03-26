<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['title', 'salary'];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
