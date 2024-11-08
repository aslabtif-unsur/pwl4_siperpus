<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pustakawan = User::create([
            'name' => 'Pustakawan',
            'email' => 'pustakawan@unsur.ac.id',
            'password' => Hash::make('password#2024')
        ]);
        $pustakawan->assignRole('pustakawan');
        $pustakawan->givePermissionTo('kelola_buku');
        $pustakawan->givePermissionTo('kelola_peminjaman');
        $pustakawan->givePermissionTo('kelola_pengembalian');
        
        $mahasiswa = User::create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@unsur.ac.id',
            'password' => Hash::make('password#2024')
        ]);
        $mahasiswa->assignRole('member');
        $mahasiswa->givePermissionTo('lihat_buku');
        $mahasiswa->givePermissionTo('pinjam_buku');
    }
}
