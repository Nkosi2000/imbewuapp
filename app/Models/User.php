<?php

namespace App\Models;

use App\Enums\UserRole;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile_number',
        'profile_picture',
        'location',
        'role',
        'password',
        'is_active',
        'consent_given_at',
        'consent_version',
        'preferred_language',
        'timezone',
        'last_login_at',
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
        'consent_given_at' => 'datetime',
        'last_login_at' => 'datetime',
        'is_active' => 'boolean',
        'deleted_at' => 'datetime',
        'role' => UserRole::class,
    ];

    // ========== Accessors ==========

    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getInitialsAttribute(): string
    {
        return strtoupper(substr($this->first_name, 0, 1) . substr($this->last_name, 0, 1));
    }

    // ========== Role Helpers ==========

    public function isAdmin(): bool
    {
        return $this->role === UserRole::ADMIN;
    }

    public function isProgramCoordinator(): bool
    {
        return $this->role === UserRole::PROGRAM_COORDINATOR;
    }

    public function isIndependentGrower(): bool
    {
        return $this->role === UserRole::INDEPENDENT_GROWER;
    }

    public function isStudent(): bool
    {
        return $this->role === UserRole::STUDENT;
    }

    public function hasRole(UserRole|string ...$roles): bool
    {
        foreach ($roles as $role) {
            $roleEnum = $role instanceof UserRole ? $role : UserRole::tryFrom($role);
            if ($this->role === $roleEnum) {
                return true;
            }
        }
        return false;
    }

    // ========== Public Roles for Registration ==========

    public static function getPublicRoles(): array
    {
        return UserRole::publicValues();
    }

    // ========== Query Scopes ==========

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeWithRole($query, UserRole|string $role)
    {
        $roleValue = $role instanceof UserRole ? $role->value : $role;
        return $query->where('role', $roleValue);
    }
}