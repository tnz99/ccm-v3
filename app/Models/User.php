<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(): BelongsTo {
        return $this->belongsTo(Role::class);
    }

    public function isSuperAdmin() {
        $role_id = $this->role_id;
        $super_admin_role_id =  Role::where('name', 'super_admin')->value('id');
        return $super_admin_role_id === $role_id;
    }

    public function isAdmin() {
        $role_id = $this->role_id;
        $admin_role_id =  Role::where('name', 'admin')->value('id');
        return $admin_role_id === $role_id;
    }

    public function isDonar() {
        $role_id = $this->role_id;
        $donar_role_id =  Role::where('name', 'donar')->value('id');
        return $donar_role_id === $role_id;
    }
}
