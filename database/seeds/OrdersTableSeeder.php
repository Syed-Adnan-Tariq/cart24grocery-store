<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\Order::class,100)->create();

        $order = new \App\Order([

            'Quantity' => '100',
            'price' => '5000',
            'user_id' => '5',


        ]);

        $order->save();

        $order = new \App\Order([

            'Quantity' => '10',
            'price' => '500',
            'user_id' => '1',


        ]);

        $order->save();

        $order = new \App\Order([

            'Quantity' => '100',
            'price' => '700',
            'user_id' => '3',


        ]);

        $order->save();

        $order = new \App\Order([

            'Quantity' => '1',
            'price' => '1000',
            'user_id' => '4',


        ]);

        $order->save();

        $order = new \App\Order([

            'Quantity' => '10',
            'price' => '2500',
            'user_id' => '3',


        ]);

        $order->save();


        $order = new \App\Order([

            'Quantity' => '30',
            'price' => '1800',
            'user_id' => '5',


        ]);

        $order->save();

    }

}
