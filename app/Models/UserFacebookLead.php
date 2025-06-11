<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFacebookLead extends Model
{
    protected $table = 'user_facebook_leads';

    protected $fillable = [
        'user_id',
        'request_payload',
        'error_logs',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Automatically set the created_at field when creating a new product
        static::creating(function ($user) {
            $user->created_at = now()->addHours(5);
        });

        // Automatically set the updated_at field when updating a product
        static::updating(function ($user) {
            $user->updated_at = now()->addHours(5);
        });
    }
}
