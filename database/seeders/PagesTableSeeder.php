<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Page::truncate();

        $about = new Page([
            'title' => 'About',
            'url' => '/about',
            'content' => 'About Page'
        ]);

        $contact = new Page([
            'title' => 'Contact',
            'url' => '/contact',
            'content' => 'Contact Page'
        ]);

        $faq = new Page([
            'title' => 'FAQ',
            'url' => '/faq',
            'content' => 'FAQ Page'
        ]);

        $admin->pages()->saveMany([
            $about,
            $contact,
            $faq
        ]);

        $about->appendNode($faq);
    }
}
