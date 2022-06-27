<?php

// importo il model che mi serve per il seeder
use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['loft','monolocale','bilocale','trilocale','quadrilocale','villa','castello'];
        foreach ($categories as $category){
            // istanzio una nuova Category ad ogni ciclo per inserire ogni singola riga nel db
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
