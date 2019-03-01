<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        /*
       _____________________________________________________________________________________________
      |                                                                                             |
      |      Grocery                                                                  |
      |_____________________________________________________________________________________________|

      */

        $product = new\App\Product([

            'title'=>'Eva Cooking Oil 1L',
            'imagePath'=>'images/evacookingoil.jpg',
            'price'=>'193',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Meezan Cooking Oil 1L',
            'imagePath'=>'images/meezancookingoil.jpg',
            'price'=>'175',
            'discount'=>'1',
            'category_id'=>'1',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Tallo Cooking Oil 1L',
            'imagePath'=>'images/tallocookingoil.jpg',
            'price'=>'186',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Tallo Banaspati 1Kg',
            'imagePath'=>'images/tallobanaspati.jpg',
            'price'=>'160',
            'discount'=>'18',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Achar Gosht Masala 50g',
            'imagePath'=>'images/natachargosht.jpg',
            'price'=>'50',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'National Ginger Powder 50g',
            'imagePath'=>'images/natgingerpow.jpg',
            'price'=>'33',
            'discount'=>'23',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Biryani Masala 50g',
            'imagePath'=>'images/natbiryani.jpg',
            'price'=>'50',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Bombay Biryani Masala 70g',
            'imagePath'=>'images/natbombaybiryani.jpg',
            'price'=>'30',
            'discount'=>'28',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Fish Masala 50g',
            'imagePath'=>'images/tallobanaspati.jpg',
            'price'=>'28',
            'discount'=>'27',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Recipe Chicken Jaflrezi 50g',
            'imagePath'=>'images/natchickenjafrezi.jpg',
            'price'=>'28',
            'discount'=>'22',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Haleem Masala',
            'imagePath'=>'images/tallobanaspati.jpg',
            'price'=>'55',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Cumin Seed Powder 50 GM',
            'imagePath'=>'images/cuminpow.jpg',
            'price'=>'50',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();        


        $product = new\App\Product([

            'title'=>'National Karahi Gosht',
            'imagePath'=>'images/natkarahigosht.jpg',
            'price'=>'50',
            'discount'=>'0',
            'category_id'=>'1',
        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'National Red Chilli Powder 100g',
            'imagePath'=>'images/natredchillipow.jpg',
            'price'=>'70',
            'discount'=>'0',
            'category_id'=>'1',


        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Nestle MilkPak 1000ml',
            'imagePath'=>'images/milkpak.jpg',
            'price'=>'143',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Nurpur Milk 250ml',
            'imagePath'=>'images/nurpurmilk.jpg',
            'price'=>'32',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Rafhan Corn Flour 10kg',
            'imagePath'=>'images/rafhancornflour.png',
            'price'=>'1214',
            'discount'=>'686',
            'category_id'=>'1',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Shezan Orange Jam 2kg',
            'imagePath'=>'images/shezanorangejam.jpg',
            'price'=>'342',
            'discount'=>'184',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Figaro Pitted Black Olives 240g',
            'imagePath'=>'images/figaroblackolives.jpg',
            'price'=>'135',
            'discount'=>'188',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Tapal Tezdam 190gm',
            'imagePath'=>'images/tapaltezdam.jpg',
            'price'=>'157',
            'discount'=>'8',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Vital Tea Economy Zipper Pack 950g',
            'imagePath'=>'images/vitaltea.png',
            'price'=>'795',
            'discount'=>'96',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Nestle Yogurt 150 gm',
            'imagePath'=>'images/nestleyogurt.jpg',
            'price'=>'60',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Turmeric Powder 100 gm',
            'imagePath'=>'images/turmpow.jpg',
            'price'=>'50',
            'discount'=>'0',
            'category_id'=>'1',

           ]);
        $product->save();



        $product = new\App\Product([

            'title'=>'OK cloves 100 gm',
            'imagePath'=>'images/cloves.jpg',
            'price'=>'60',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Black Pepper Powder 25 gm',
            'imagePath'=>'images/pepper.jpg',
            'price'=>'90',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Cumin Seeds 50 gm',
            'imagePath'=>'images/cumin.jpg',
            'price'=>'80',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'black cardamom 50 gm',
            'imagePath'=>'images/cardamom.jpg',
            'price'=>'30',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'cardamom pods green 50 gm',
            'imagePath'=>'images/cardamomgreen.jpg',
            'price'=>'20',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();



        $product = new\App\Product([

            'title'=>'Mace Powder 50 gm',
            'imagePath'=>'images/macpow.jpg',
            'price'=>'100',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();



        $product = new\App\Product([

            'title'=>'Nutmag Powder 50 gm',
            'imagePath'=>'images/nutmag.jpg',
            'price'=>'150',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Plum 50 gm',
            'imagePath'=>'images/plum.jpg',
            'price'=>'70',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Star Anise 50 gm',
            'imagePath'=>'images/staranise.jpg',
            'price'=>'30',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'OK Black Cumin Seed 100 GM',
            'imagePath'=>'images/bcumin.jpg',
            'price'=>'120',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();



        $product = new\App\Product([

            'title'=>'Shan Coriander Powder 100GM',
            'imagePath'=>'images/corinpow.png',
            'price'=>'74',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Mitchells Ginger Garlic Paste 320 GM',
            'imagePath'=>'images/garginpas.png',
            'price'=>'194',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Garam Masala 25 GM',
            'imagePath'=>'images/natgarmas.jpg',
            'price'=>'48',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Tomato Ketchup 1kg',
            'imagePath'=>'images/natket.jpg',
            'price'=>'166',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Dasani Water 1500ML X6',
            'imagePath'=>'images/dasani.jpg',
            'price'=>'200',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'N&L Daal Mash Washed 1 KG',
            'imagePath'=>'images/dalmash.png',
            'price'=>'250',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Mehran Ginger Paste 400 gm',
            'imagePath'=>'images/ginpas.jpg',
            'price'=>'120',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();        


        $product = new\App\Product([

            'title'=>'N&L Daal Moong Washed 1 KG',
            'imagePath'=>'images/moong.jpg',
            'price'=>'150',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Jalapenos sliced green',
            'imagePath'=>'images/jalapeno.jpg',
            'price'=>'230',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'National Curry Powder 200 gm',
            'imagePath'=>'images/curry.jpg',
            'price'=>'50',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();        


        $product = new\App\Product([

            'title'=>'Peanut Oil 5000 ml',
            'imagePath'=>'images/peanutoil.jpeg',
            'price'=>'2000',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Adams Butter 100GM',
            'imagePath'=>'images/butter.jpg',
            'price'=>'105',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'NATCO black mustard seeds 100 gm',
            'imagePath'=>'images/blmusseeds.jpg',
            'price'=>'90',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Millac Milk Powder',
            'imagePath'=>'images/milkpow.jpg',
            'price'=>'300',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Dalda Canola Oil 3000 ml',
            'imagePath'=>'images/canola.jpg',
            'price'=>'375',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Plain Pistachio Per 250GM',
            'imagePath'=>'images/pista.jpg',
            'price'=>'610',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Roosmoor Baking Powder 100 gm',
            'imagePath'=>'images/baking.jpg',
            'price'=>'66',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Maida Flour 1 kg',
            'imagePath'=>'images/maida.jpeg',
            'price'=>'40',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Whitworths Semolina 500G',
            'imagePath'=>'images/semolina.jpg',
            'price'=>'140',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Rose Water',
            'imagePath'=>'images/rose.jpg',
            'price'=>'70',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Shakarganj Sugar 1 kg',
            'imagePath'=>'images/sugar.jpg',
            'price'=>'70',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Rafhan Corn Flour 300 gm',
            'imagePath'=>'images/rc.jpg',
            'price'=>'69',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Almond With Shell 500 GM',
            'imagePath'=>'images/almond.jpg',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Saffron 100 gm',
            'imagePath'=>'images/saff.jpg',
            'price'=>'80',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Nestle Condensed milk 400 g',
            'imagePath'=>'images/cmilk.jpg',
            'price'=>'150',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Raisins(kishmish) 100 gm',
            'imagePath'=>'images/kish.jpg',
            'price'=>'160',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Nestle Milkmaid Pure Ghee',
            'imagePath'=>'images/mghee.jpg',
            'price'=>'500',
            'discount'=>'0',
            'category_id'=>'1',

        ]);
        $product->save();








        /*
               _____________________________________________________________________________________________
              |                                                                                             |
              |             Meat                                                                            |
              |_____________________________________________________________________________________________|


 */




        $product = new\App\Product([

            'title'=>'Chicken Cut Chilled Biryani Per 500GM',
            'imagePath'=>'images/m1.jpg',
            'price'=>'95',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Chicken Cut Chilled Qorma Per 500GM',
            'imagePath'=>'images/m2.jpg',
            'price'=>'95',
            'discount'=>'75',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Chicken Breast Boneless Per 500GM',
            'imagePath'=>'images/m3.jpg',
            'price'=>'155',
            'discount'=>'145',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Chicken Mince Per 500GM',
            'imagePath'=>'images/m4.jpg',
            'price'=>'198',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Mutton Biryani Cut Per 500GM',
            'imagePath'=>'images/m5.jpg',
            'price'=>'395',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Mutton Mince Per 500GM',
            'imagePath'=>'images/m6.jpg',
            'price'=>'550',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Mutton Front Chops (Champ) Per 500GM',
            'imagePath'=>'images/m7.jpg',
            'price'=>'545',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Mutton Mix Per 500 GM',
            'imagePath'=>'images/m8.jpg',
            'price'=>'475',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Beef Mince 500GM',
            'imagePath'=>'images/m9.jpg',
            'price'=>'250',
            'discount'=>'25',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Veal Mince Per 500GM',
            'imagePath'=>'images/m10.jpg',
            'price'=>'288',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Beef Boti Boneless Per 500GM',
            'imagePath'=>'images/m11.jpg',
            'price'=>'250',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Top Sirlion Steak Per 500GM',
            'imagePath'=>'images/m12.jpg',
            'price'=>'290',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Chicken Neck Per 500GM',
            'imagePath'=>'images/m13.jpg',
            'price'=>'58',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Chicken Wings Without Skin 500GM',
            'imagePath'=>'images/m14.jpg',
            'price'=>'80',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Chicken Cut Chilled Karahi Per 500GM',
            'imagePath'=>'images/m15.jpg',
            'price'=>'90',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Chicken Leg Tikka',
            'imagePath'=>'images/m16.jpg',
            'price'=>'100',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Whole Chicken W/O Giblets 500GM',
            'imagePath'=>'images/m17.jpg',
            'price'=>'133',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'K & Ns Breast Fillet 500GM',
            'imagePath'=>'images/m18.jpg',
            'price'=>'290',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Goat Paey 4 PCS',
            'imagePath'=>'images/m19.jpg',
            'price'=>'539',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Beef Loaf Boneless 500GM',
            'imagePath'=>'images/m20.jpg',
            'price'=>'288',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Chicken Boneless Handi Cutt Per 500GM',
            'imagePath'=>'images/m21.jpg',
            'price'=>'190',
            'discount'=>'0',
            'category_id'=>'2',

        ]);
        $product->save();





        /*
         _____________________________________________________________________________________________
        |                                                                                             |
        |      Fruits and vegetables                                                                  |
        |_____________________________________________________________________________________________|

        */




        $product = new\App\Product([

            'title'=>'Peaches Premium Per 500GM',
            'imagePath'=>'images/fv1.jpg',
            'price'=>'30',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Khandari Pomegranate Per 500GM',
            'imagePath'=>'images/fv2.jpg',
            'price'=>'120',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Fuji Apple Per 500GM',
            'imagePath'=>'images/fv3.jpg',
            'price'=>'50',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Sundar Khani Grapes Per 500GM',
            'imagePath'=>'images/fv4.jpg',
            'price'=>'60',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Melon Garma Per 500GM',
            'imagePath'=>'images/fv5.jpg',
            'price'=>'28',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Royal Gala Apple Per 500GM',
            'imagePath'=>'images/fv6.jpg',
            'price'=>'288',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'White Pomegranate Per 500GM',
            'imagePath'=>'images/fv7.jpg',
            'price'=>'88',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Gola Grapes Per 500GM',
            'imagePath'=>'images/fv8.jpg',
            'price'=>'80',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

       $product = new\App\Product([

            'title'=>'Mitha Per 500GM',
            'imagePath'=>'images/fv9.jpg',
            'price'=>'88',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Pears Per 500GM',
            'imagePath'=>'images/fv10.jpg',
            'price'=>'100',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Potatoes Per 500GM',
            'imagePath'=>'images/fv11.jpg',
            'price'=>'10',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Tomatoes Per 500GM',
            'imagePath'=>'images/fv12.jpg',
            'price'=>'30',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Lemon Per 500GM',
            'imagePath'=>'images/fv13.jpg',
            'price'=>'100',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Coriander Per 250GM',
            'imagePath'=>'images/fv14.jpg',
            'price'=>'20',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Ginger Per 500GM',
            'imagePath'=>'images/fv15.jpg',
            'price'=>'115',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Green Capsicum Per 500GM',
            'imagePath'=>'images/fv16.jpg',
            'price'=>'50',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Green Cabbage Per 500GM',
            'imagePath'=>'images/fv17.jpg',
            'price'=>'30',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Cucumber Per 500GM',
            'imagePath'=>'images/fv18.jpg',
            'price'=>'30',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Mint Leaves Per 250GM',
            'imagePath'=>'images/fv19.jpg',
            'price'=>'43',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Okra (Bhindi) Per 500GM',
            'imagePath'=>'images/fv20.jpg',
            'price'=>'40',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();



        $product = new\App\Product([

            'title'=>'Green Chilli per 500GM',
            'imagePath'=>'images/fv21.jpg',
            'price'=>'20',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();



        $product = new\App\Product([

            'title'=>'Green Coriander 100GM',
            'imagePath'=>'images/fv22.jpg',
            'price'=>'10',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();



        $product = new\App\Product([

            'title'=>'Onion 5 kg',
            'imagePath'=>'images/fv23.jpg',
            'price'=>'10',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Dried Red Chillies 500 gm',
            'imagePath'=>'images/fv24.jpg',
            'price'=>'100',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Carrot Red Per 500GM',
            'imagePath'=>'images/fv25.jpg',
            'price'=>'25',
            'discount'=>'0',
            'category_id'=>'3',

        ]);
        $product->save();




        /*
                                 _____________________________________________________________________________________________
                                |                                                                                             |
                                |            Sports                                                                           |
                                |_____________________________________________________________________________________________|

                */





        $product = new\App\Product([

            'title'=>'Weight Loss Body Wrap Sauna Belt - Red',
            'imagePath'=>'images/s1.jpg',
            'price'=>'500',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'LED Sports Watch - Bracelet Wrist Watch - Black',
            'imagePath'=>'images/s2.jpg',
            'price'=>'288',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Telemall Sauna Belt Waist Trimmer - Blue',
            'imagePath'=>'images/s3.jpg',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Hot Shaper Belt - Black-M',
            'imagePath'=>'images/s4.jpg',
            'price'=>'180',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'High Quality Boxing Gloves - Black',
            'imagePath'=>'images/s5.jpg',
            'price'=>'560',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Tactical Goggles Military Multi Shaded Sporty UV Glasses for hiking Outdoor Camping Sunglasses',
            'imagePath'=>'images/s6.jpg',
            'price'=>'500',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Tummy Trimmer Double Spring - Black & Silver',
            'imagePath'=>'images/s7.jpg',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Green Football Soccer Ball For Football Fans-Design May Vary',
            'imagePath'=>'images/s8.jpg',
            'price'=>'370',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Pack of 2 Tennis Balls',
            'imagePath'=>'images/s9.jpg',
            'price'=>'150',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'CA Tape Ball Cricket Bat-2000-White and Yellow',
            'imagePath'=>'images/s10.jpg',
            'price'=>'800',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Basket Ball-Orange',
            'imagePath'=>'images/s11.jpg',
            'price'=>'900',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Wooden Skipping Rope-Multicolor',
            'imagePath'=>'images/s12.jpg',
            'price'=>'100',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Tom and Jerry Ludo Board Game Double Sided-18x18"',
            'imagePath'=>'images/s13.jpg',
            'price'=>'100',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Pack of 6-Badminton Feather Shuttle Cock',
            'imagePath'=>'images/s14.jpg',
            'price'=>'288',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Pack of 2-Badminton Racket Set With Plastic Carrying Bag',
            'imagePath'=>'images/s15.jpg',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'High Quality Double Sided 2 Sided Dart Board With 6 Darts-16 Inch',
            'imagePath'=>'images/s16.jpg',
            'price'=>'900',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Black and White Football Soccer',
            'imagePath'=>'images/s17.jpg',
            'price'=>'300',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Boxing Bag-3ft-Black',
            'imagePath'=>'images/s18.jpg',
            'price'=>'1500',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Pair Of Rubber Coated Dumbbells-10KG-Black',
            'imagePath'=>'images/s19.jpg',
            'price'=>'7000',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();

        $product = new\App\Product([

            'title'=>'Skate Liner-Black',
            'imagePath'=>'images/s20.jpg',
            'price'=>'3000',
            'discount'=>'0',
            'category_id'=>'4',

        ]);
        $product->save();




        /*
                         _____________________________________________________________________________________________
                        |                                                                                             |
                        |   Beauty and Personal Care                                                                  |
                        |_____________________________________________________________________________________________|

        */



        $product = new\App\Product([

            'title'=>'100% Natural Seaweeds Alga Mask for Acne Spots & Whitening Facial Mask',
            'imagePath'=>'images/b1.jpg',
            'price'=>'1100',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Fair & Lovely Advanced Multi-Vitamin Expert Fairness Solution 25g',
            'imagePath'=>'images/b2.jpg',
            'price'=>'220',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'1 Box 8 Kinds Stickers Eyebrow Stencil Eyebrow ',
            'imagePath'=>'images/b3.jpg',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'1 Million Colonge 125 ML',
            'imagePath'=>'images/b4.jpg',
            'price'=>'6000',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'10 in 1 Multi Action Face Wash - 100ml',
            'imagePath'=>'images/b5.jpg',
            'price'=>'600',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'10-In-1 Style Mix - Black - MS 21 E',
            'imagePath'=>'images/b6.jpg',
            'price'=>'9000',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'100 Natural Original 19.4G Red Tiger Balm',
            'imagePath'=>'images/b7.jpg',
            'price'=>'500',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'11 in 1 Multifunction Face Massager - White & Blue',
            'imagePath'=>'images/b8.jpg',
            'price'=>'2000',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'110 Degrees for Men - 100Ml',
            'imagePath'=>'images/b9.jpg',
            'price'=>'1600',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'121 for Men - 100 ml',
            'imagePath'=>'images/b10.jpg',
            'price'=>'1000',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'121 NYC MEN Perfume For Men -100 ml',
            'imagePath'=>'images/b11.jpg',
            'price'=>'500',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'12pcs / set Manicure Set Pedicure Scissor Pliers Knife Pick Utility Kit Nail Care Tool Set Beauty Nail Set',
            'imagePath'=>'images/b12.jpg',
            'price'=>'800',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'12PCs 2 In 1 Nail Paints With Beads - Multicolor',
            'imagePath'=>'images/b13.jpg',
            'price'=>'850',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'12 Lipstick - True Lips',
            'imagePath'=>'images/b14.jpg',
            'price'=>'2000',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'-500 Super Grooming Kit 8 in 1 Multicolor',
            'imagePath'=>'images/b15.jpg',
            'price'=>'500',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'-526 Super Grooming Kit 8 in 1 Multicolor',
            'imagePath'=>'images/b16.jpg',
            'price'=>'1900',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'1 Million Prive - 100ml',
            'imagePath'=>'images/b17.jpg',
            'price'=>'14,500',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'1 Million For Men - 100ml',
            'imagePath'=>'images/b18.jpg',
            'price'=>'9000',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'1 Million For Men',
            'imagePath'=>'images/b19.jpg',
            'price'=>'9000',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'1 Million Colonge 125 ML',
            'imagePath'=>'images/b20.jpg',
            'price'=>'6000',
            'discount'=>'0',
            'category_id'=>'5',

        ]);
        $product->save();


/*
                 _____________________________________________________________________________________________
                |                                                                                             |
                |            Baby care                                                                        |
                |_____________________________________________________________________________________________|

*/



        $product = new\App\Product([

            'title'=>'Molfix 3D Junior 32 Pcs Twin 11-18kgs',
            'imagePath'=>'images/c1.jpg',
            'price'=>'700',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Johnson Baby Cologne 200ml',
            'imagePath'=>'images/c2.jpg',
            'price'=>'250',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Johnson\'s Baby Lotion 200ml',
            'imagePath'=>'images/c3.jpg',
            'price'=>'230',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Molfix 3D E.Large 26 Pcs Twin 15+ Kgs',
            'imagePath'=>'images/c4.jpg',
            'price'=>'850',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Molfix 3D Maxi 68 Pcs Jumbo 7-14kgs',
            'imagePath'=>'images/c5.jpg',
            'price'=>'1600',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Molfix 3D Maxi 34 Pcs Twin 7-14kgs',
            'imagePath'=>'images/c6.jpg',
            'price'=>'850',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Molfix 3D Mini 11 Pcs Trial Pack 3-6kgs',
            'imagePath'=>'images/c7.jpg',
            'price'=>'240',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Molfix 3D Midi 38 Pcs Twin 4-9kgs',
            'imagePath'=>'images/c8.jpg',
            'price'=>'850',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Oilatum Junior Cream - 150 g',
            'imagePath'=>'images/c9.jpg',
            'price'=>'630',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Pampers - 4 ~ 9 Kg - 72 Pieces - Taped',
            'imagePath'=>'images/c10.jpg',
            'price'=>'1800',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Sun Kids Moisturising Lotion 50+ 200 ml',
            'imagePath'=>'images/c11.jpg',
            'price'=>'1200',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Pampers - 3 ~ 6 Kg - 80 Pieces - Taped',
            'imagePath'=>'images/c12.jpg',
            'price'=>'1700',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Pampers Diapers Junior 5 (Pack of 15)',
            'imagePath'=>'images/c13.jpg',
            'price'=>'450',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Baby Jelly Unscented - 250ml',
            'imagePath'=>'images/c14.jpg',
            'price'=>'260',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Baby Jelly Scented - 250ml',
            'imagePath'=>'images/c15.jpg',
            'price'=>'250',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Johnson\'s Regular Baby Cologne - 125ml',
            'imagePath'=>'images/c16.jpg',
            'price'=>'190',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Gold Baby Shampoo - 100 ml',
            'imagePath'=>'images/c17.jpg',
            'price'=>'200',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Milk Soap - 100g',
            'imagePath'=>'images/c18.jpg',
            'price'=>'80',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'All Natural Citro Ganix Foaming Wash - 250ml',
            'imagePath'=>'images/c19.jpg',
            'price'=>'450',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Baby Bedtime Bath - 200ml',
            'imagePath'=>'images/c20.jpg',
            'price'=>'180',
            'discount'=>'0',
            'category_id'=>'6',

        ]);
        $product->save();





        /*
         _____________________________________________________________________________________________
        |                                                                                             |
        |            Beverages                                                                        |
        |_____________________________________________________________________________________________|

        */



        $product = new\App\Product([

            'title'=>'Sprite 500 ML X12',
            'imagePath'=>'images/d1.jpg',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'7UP 345 ML X 12',
            'imagePath'=>'images/d2.jpg',
            'price'=>'312',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Sting Energy Drink Berry Blast 500 ML X 12',
            'imagePath'=>'images/d3.jpg',
            'price'=>'540',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Sprite 330 ML X 12',
            'imagePath'=>'images/d4.jpg',
            'price'=>'550',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Sprite 1.5 Ltr X 6',
            'imagePath'=>'images/d5.jpg',
            'price'=>'425',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Taurine Monster Energy 355 ML',
            'imagePath'=>'images/d6.jpg',
            'price'=>'140',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Mezan Cola Next 1 LTR X 6',
            'imagePath'=>'images/d7.jpg',
            'price'=>'270',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Coca Cola 250 ML X 12',
            'imagePath'=>'images/d8.jpg',
            'price'=>'440',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'7UP 500 ML X 12',
            'imagePath'=>'images/d9.jpg',
            'price'=>'360',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Mirinda 500 ML X 12',
            'imagePath'=>'images/d10.jpg',
            'price'=>'360',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Mountain Dew 1.5 LTR X 6',
            'imagePath'=>'images/d11.jpg',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Pepsi Diet 1.5 LTR',
            'imagePath'=>'images/d12.jpg',
            'price'=>'65',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'7up 1.5 LTR X 6',
            'imagePath'=>'images/d13.jpg',
            'price'=>'390',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Pepsi 2.25 LTR X 6',
            'imagePath'=>'images/d14.jpg',
            'price'=>'540',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Coca Cola 500 ML X 12',
            'imagePath'=>'images/d15.jpg',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Coca Cola Can 250 ML X 12',
            'imagePath'=>'images/d16.jpg',
            'price'=>'408',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Coca Cola 330 ML X 12',
            'imagePath'=>'images/d17.jpg',
            'price'=>'550',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Coca Cola 2.25 LTR X 6',
            'imagePath'=>'images/d18.jpg',
            'price'=>'570',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Fanta Orange 1 LTR',
            'imagePath'=>'images/d19.jpg',
            'price'=>'58',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Fanta Orange 1 LTR X 6',
            'imagePath'=>'images/d20.jpg',
            'price'=>'348',
            'discount'=>'0',
            'category_id'=>'7',

        ]);
        $product->save();






/*
 _____________________________________________________________________________________________
|                                                                                             |
|            Household                                                                        |
|_____________________________________________________________________________________________|

*/




        $product = new\App\Product([

            'title'=>'BBQ Grill - 1 ft - Silver',
            'imagePath'=>'images/h1.jpg',
            'price'=>'1000',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'12-In-1 Kitchen Tool Chef Basket',
            'imagePath'=>'images/h2.jpg',
            'price'=>'300',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Anchor Wall Clock',
            'imagePath'=>'images/h3.jpg',
            'price'=>'500',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'100 BBQ Bamboo Sticks - Brown - 8 Inches Long',
            'imagePath'=>'images/h4.jpg',
            'price'=>'800',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Garlic Chopper - Green',
            'imagePath'=>'images/h5.jpg',
            'price'=>'300',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Meat Hammer - Silver',
            'imagePath'=>'images/h6.jpg',
            'price'=>'200',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Manual Water Pump Dispenser for 19 Liter Cans',
            'imagePath'=>'images/h7.jpg',
            'price'=>'250',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Nicer Dicer Plus Vegetable & Fruit Cutter',
            'imagePath'=>'images/h8.jpg',
            'price'=>'600',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Non Stick Fry Pan',
            'imagePath'=>'images/h9.jpg',
            'price'=>'270',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Original Rosee Folding Tray',
            'imagePath'=>'images/h10.jpg',
            'price'=>'1000',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Non Stick Smokeless BBQ Stove Top Grill - Black',
            'imagePath'=>'images/h11.jpg',
            'price'=>'800',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Pack of 12 - Multicolor Plastic Cloth Hangers',
            'imagePath'=>'images/h12.jpg',
            'price'=>'300',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Stainless Steel Knife Silver',
            'imagePath'=>'images/h13.png',
            'price'=>'100',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'2 In 1 Clever Cutter For Kitchen Helper',
            'imagePath'=>'images/h14.png',
            'price'=>'400',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Stainless Steel Tarbooz / Watermelon Slicer and Cutter - Silver',
            'imagePath'=>'images/h15.jpg',
            'price'=>'200',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'Tripple Paper Dispenser For Kitchen',
            'imagePath'=>'images/h16.jpg',
            'price'=>'700',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'3 Shelf Vegetable Rack-Grey',
            'imagePath'=>'images/h17.jpg',
            'price'=>'700',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'3 Piece Box Set-Plastic-Multicolor',
            'imagePath'=>'images/h18.jpg',
            'price'=>'1000',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'3 Tier Lunch Box-LB 4-Green',
            'imagePath'=>'images/h19.jpg',
            'price'=>'500',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();


        $product = new\App\Product([

            'title'=>'3 Piece Roti Basket-Multi Designs',
            'imagePath'=>'images/h20.jpg',
            'price'=>'200',
            'discount'=>'0',
            'category_id'=>'8',

        ]);
        $product->save();





    }
}
