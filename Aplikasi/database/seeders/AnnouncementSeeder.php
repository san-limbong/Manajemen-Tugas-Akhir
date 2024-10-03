<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 1',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 2',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 3',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 4',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 5',
            'deskripsi' => 'Deskripsi'
        ]);

        

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 6',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 7',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 8',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 9',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 10',
            'deskripsi' => 'Deskripsi'
        ]);


        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 11',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 12',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 13',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 14',
            'deskripsi' => 'Deskripsi'
        ]);

        DB::table('announcements')->insert([
            'judul' => 'Pengumuman 15',
            'deskripsi' => 'Deskripsi'
        ]);
    }
}

// php artisan db:seed --class=AnnouncementSeeder
