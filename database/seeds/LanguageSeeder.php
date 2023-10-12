<?php

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Language::count() === 0) {
            Language::create(
                [
                    'locale' => 'en',
                    'name'   => 'English',
                ]
            );
        }
    }
}
