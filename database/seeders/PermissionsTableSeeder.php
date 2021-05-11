<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'room_create',
            ],
            [
                'id'    => 24,
                'title' => 'room_edit',
            ],
            [
                'id'    => 25,
                'title' => 'room_show',
            ],
            [
                'id'    => 26,
                'title' => 'room_delete',
            ],
            [
                'id'    => 27,
                'title' => 'room_access',
            ],
            [
                'id'    => 28,
                'title' => 'manage_room_access',
            ],
            [
                'id'    => 29,
                'title' => 'floor_create',
            ],
            [
                'id'    => 30,
                'title' => 'floor_edit',
            ],
            [
                'id'    => 31,
                'title' => 'floor_show',
            ],
            [
                'id'    => 32,
                'title' => 'floor_delete',
            ],
            [
                'id'    => 33,
                'title' => 'floor_access',
            ],
            [
                'id'    => 34,
                'title' => 'tenant_create',
            ],
            [
                'id'    => 35,
                'title' => 'tenant_edit',
            ],
            [
                'id'    => 36,
                'title' => 'tenant_show',
            ],
            [
                'id'    => 37,
                'title' => 'tenant_delete',
            ],
            [
                'id'    => 38,
                'title' => 'tenant_access',
            ],
            [
                'id'    => 39,
                'title' => 'manage_setting_access',
            ],
            [
                'id'    => 40,
                'title' => 'department_create',
            ],
            [
                'id'    => 41,
                'title' => 'department_edit',
            ],
            [
                'id'    => 42,
                'title' => 'department_show',
            ],
            [
                'id'    => 43,
                'title' => 'department_delete',
            ],
            [
                'id'    => 44,
                'title' => 'department_access',
            ],
            [
                'id'    => 45,
                'title' => 'faculty_create',
            ],
            [
                'id'    => 46,
                'title' => 'faculty_edit',
            ],
            [
                'id'    => 47,
                'title' => 'faculty_show',
            ],
            [
                'id'    => 48,
                'title' => 'faculty_delete',
            ],
            [
                'id'    => 49,
                'title' => 'faculty_access',
            ],
            [
                'id'    => 50,
                'title' => 'level_create',
            ],
            [
                'id'    => 51,
                'title' => 'level_edit',
            ],
            [
                'id'    => 52,
                'title' => 'level_show',
            ],
            [
                'id'    => 53,
                'title' => 'level_delete',
            ],
            [
                'id'    => 54,
                'title' => 'level_access',
            ],
            [
                'id'    => 55,
                'title' => 'accounting_access',
            ],
            [
                'id'    => 56,
                'title' => 'expense_create',
            ],
            [
                'id'    => 57,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 58,
                'title' => 'expense_show',
            ],
            [
                'id'    => 59,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 60,
                'title' => 'expense_access',
            ],
            [
                'id'    => 61,
                'title' => 'payment_create',
            ],
            [
                'id'    => 62,
                'title' => 'payment_edit',
            ],
            [
                'id'    => 63,
                'title' => 'payment_show',
            ],
            [
                'id'    => 64,
                'title' => 'payment_delete',
            ],
            [
                'id'    => 65,
                'title' => 'payment_access',
            ],
            [
                'id'    => 66,
                'title' => 'complaint_create',
            ],
            [
                'id'    => 67,
                'title' => 'complaint_edit',
            ],
            [
                'id'    => 68,
                'title' => 'complaint_show',
            ],
            [
                'id'    => 69,
                'title' => 'complaint_delete',
            ],
            [
                'id'    => 70,
                'title' => 'complaint_access',
            ],
            [
                'id'    => 71,
                'title' => 'notice_create',
            ],
            [
                'id'    => 72,
                'title' => 'notice_edit',
            ],
            [
                'id'    => 73,
                'title' => 'notice_show',
            ],
            [
                'id'    => 74,
                'title' => 'notice_delete',
            ],
            [
                'id'    => 75,
                'title' => 'notice_access',
            ],
            [
                'id'    => 76,
                'title' => 'about_us_create',
            ],
            [
                'id'    => 77,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 78,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 79,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 80,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 81,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
