<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden in master data.
     *
     * @var array<int, string>
     */
    public $unpublished = [
        'password',
    ];

    /**
     * The attributes that should be sortable in master data.
     *
     * @var array<int, string>
     */
    public $sortable = [
        'name',
        'email',
        'age',
    ];

    /**
     * The attributes that should be searchable in master data.
     *
     * @var array<int, string>
     */
    public $searchable = [
        'name',
        'email',
    ];

    /**
     * The attributes that should be filterable in master data.
     *
     * @var array<string, array<string, string>>
     */
    public $filterable = [
        'created_at' => [
            'type' => 'date',
            'format' => 'YYYY-MM-DD',
        ],
        'name' => [
            'type' => 'select',
            'options' => [
                'male',
                'female',
            ],
        ],
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
