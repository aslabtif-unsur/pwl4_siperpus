<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bookshelf;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Query Builder
        DB::table('bookshelves')->insert([
            [
                'code' => 'RB-001A',
                'name' => 'Teknik Informatika'
            ],
            [
                'code' => 'RB-002B',
                'name' => 'Teknik Industri'
            ],
            [
                'code' => 'RB-003C',
                'name' => 'Teknik Sipil'
            ],
            [
                'code' => 'RB-004D',
                'name' => ''
            ],
        ]);

        // eloquent ORM
        Bookshelf::create([
            'code' => 'RB-999Z',
            'name' => 'Uknown'
        ]);
    }
}
