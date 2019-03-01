<?php

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
        $category = new \App\Category([

            'name' => 'Grocery',
            'imagePath' => 'images/grocery.jpeg'
        ]);

        $category->save();

        $category = new \App\Category([

            'name' => 'Meat',
            'imagePath' => 'images/meat.jpg'
        ]);

        $category->save();

        $category = new \App\Category([

            'name' => 'Fruits and Vegetables',
            'imagePath' => 'images/fv.jpg'
        ]);

        $category->save();

        $category = new \App\Category([

            'name' => 'Sports',
            'imagePath' => 'images/sports.jpg'
        ]);

        $category->save();

        $category = new \App\Category([

            'name' => 'Beauty and Personal Care',
            'imagePath' => 'images/beauty.jpg'
        ]);

        $category->save();

        $category = new \App\Category([

            'name' => 'Baby Care',
            'imagePath' => 'images/babycare.jpg'
        ]);

        $category->save();

        $category = new \App\Category([

            'name' => 'Beverages',
            'imagePath' => 'images/beverages.jpg'
        ]);

        $category->save();

        $category = new \App\Category([

            'name' => 'Household',
            'imagePath' => 'images/household.jpeg'
        ]);

        $category->save();


        /* // factory(App\Category::class,10)->create();
          $category = new \App\Category([

              'name' => 'Grocery',
              'imagePath' => 'images/app.jpg'
          ]);

          $category->save();

          $category = new \App\Category([

              'name' => 'meet',
              'imagePath' => 'images/gro.jpg'
          ]);

          $category->save();
          $category = new \App\Category([

              'name' => 'Soap',
              'imagePath' => 'images/orange.jpg'
          ]);

          $category->save();
          $category = new \App\Category([

              'name' => 'sports',
              'imagePath' => 'images/E.jpg'
          ]);

          $category->save();
          $category = new \App\Category([

              'name' => 'computer',
              'imagePath' => 'images/F.jpg'
          ]);

          $category->save();
          $category = new \App\Category([

              'name' => 'Android',
              'imagePath' => 'images/G.jpg'
          ]);

          $category->save();*/

    }
}
