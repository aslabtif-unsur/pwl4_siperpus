<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role Admin
        Role::create(['name' => 'admin']);
        Permission::create(['name' => 'kelola_akun']);
        
        // Role Pustakawan
        Role::create(['name' => 'pustakawan']);
        Permission::create(['name' => 'kelola_buku']);
        Permission::create(['name' => 'kelola_peminjaman']);
        Permission::create(['name' => 'kelola_pengembalian']);
        
        // Role Member
        Role::create(['name' => 'member']);
        Permission::create(['name' => 'lihat_buku']);
        Permission::create(['name' => 'pinjam_buku']);
    }
}
