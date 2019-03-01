<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(OrdersTableSeeder::class);
         $this->call(ProductRecipesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(RecipeOrdersTableSeeder::class);
         $this->call(RecipesTableSeeder::class);
//         $this->call(ProfileTableSeeder::class);
         $this->call(ProductOrdersTableSeeder::class);
         $this->call(AdminUser::class);
    }
}
