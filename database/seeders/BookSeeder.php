<?php

namespace Database\Seeders;

use App\Models\Bookshelf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookshelf = Bookshelf::pluck("id");
        // $bookshelf = [1, 2, 3, 4, 5]
        Book::create([
            'title' => 'Matinya Burung-Burung',
            'author' => 'GTA',
            'year' => 2077,
            'publisher' => 'Zahri',
            'city' => 'Cianjur',
            'cover' => 'https://placehold.co/512',
            'bookshelf_id' => $bookshelf[random_int(1, count($bookshelf))],
        ]);
    }
}
