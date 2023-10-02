<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Package extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'img_path',
        'all_points',
        'donated_points',
        'package_id',
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(PackageType::class, 'package_id');
    }
}
