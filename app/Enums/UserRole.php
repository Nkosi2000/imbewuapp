<?php

namespace App\Enums;

enum UserRole: string
{
    case STUDENT = 'student';
    case INDEPENDENT_GROWER = 'independent_grower';
    case PROGRAM_COORDINATOR = 'program_coordinator';
    case ADMIN = 'admin';

    /**
     * Roles that a user can choose during public registration.
     * Excludes admin.
     */
    public static function publicRoles(): array
    {
        return [
            self::STUDENT,
            self::INDEPENDENT_GROWER,
            self::PROGRAM_COORDINATOR,
        ];
    }

    /**
     * Get all role values as an array (for seeding, etc.).
     *
     * @return array<string>
     */
    public static function allValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Get public role values only (for validation).
     *
     * @return array<string>
     */
    public static function publicValues(): array
    {
        return array_map(fn($role) => $role->value, self::publicRoles());
    }

    /**
     * Get human-readable label for a role.
     */
    public function label(): string
    {
        return match($this) {
            self::STUDENT => 'Student',
            self::INDEPENDENT_GROWER => 'Independent Grower',
            self::PROGRAM_COORDINATOR => 'Program Coordinator',
            self::ADMIN => 'Administrator',
        };
    }
}