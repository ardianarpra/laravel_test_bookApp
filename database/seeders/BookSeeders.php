<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book')->insert([
                [
                    'judul' => "The Lord of the Rings",
                    'penulis' => "J. R. R. Tolkien",
                    'tahun_terbit' => "1954",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'judul' => "The Cyberiad",
                    'penulis' => "Stanislaw Lem",
                    'tahun_terbit' => "1965",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'judul' => "Harry Potter and the Philosopher's Stone",
                    'penulis' => "J. K. Rowling",
                    'tahun_terbit' => "1997",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'judul' => "A Game of Thrones",
                    'penulis' => "George R. R. Martin",
                    'tahun_terbit' => "1996",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    'judul' => "Dune",
                    'penulis' => "Frank Herbert",
                    'tahun_terbit' => "1965",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
