<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Recipe::class,50)->create();

        $recipe = new\App\Recipe([
            'title'=>'Chicken Biryani',
            'imagePath'=>'images/biryani.jpg',
            'videoPath'=>'https://www.youtube.com/embed/sYWQduVwFZ8',
            'price'=>'500',
            'Quantity'=>'1',
            'discount'=>'10',
            'ingredients'=>'½ KG Chicken2 Onions1 Cup Yogurt2 Half Boiled Potatoes1 TBSP Salt5 Tomatoes1 TSP Turmeric Powder1 TBSP Red Chili Powder12 Green Chilies4 Black Cardamoms6 Cloves1 TSP Black Cumin Seeds12 Black Peppers4 Green Cardamoms6 Plum1 TSP Nutmeg & Mace Powder½ TSP Food Color½ TSP Biryani Essence½ Pinch Mint4 Lemon½ Pinch Green Coriander2 Cup Rice1 TBSP Ghee',
            'cooking_method'=>'1- In a bowl add Rice, Water and soak for 30 minutes.2- In a cooking pot, add water, salt, cooking oil and soaked rice then boil the rice until 3/4th done.3- in another cooking pot, add cooking oil, onion and fry until light brown.4- Now add ginger garlic paste, chicken and fry for a while.5- Now, add garam masala, salt, turmeric, red chili powder, potato, yogurt, water and cook for 10 minutes.6- Now, add dried plum, tomato, green chili and cook for a while.7- Take a cooking pot for layering.8- start from Cooked Chicken layer then rice layer and then spread the mint, fresh coriander after that, add again chicken layer then rice layer, now spread the fried onion, biryani essence, food color, fresh coriander, mint, green chili, nutmeg powder, javitri powder, and simmer for 10 minutes.Your tasty Sindhi Biryani Now Ready to Serve:',
            'serve'=>'4',
            'cooking_time'=>'40',
        ]);

        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Nihari',
            'imagePath'=>'images/nihari.jpg',
            'videoPath'=>'https://www.youtube.com/embed/6MkL2NFq34Q',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'1⁄2 kg beef1 salt1 teaspoon pepper1⁄2 teaspoon turmeric powder1 teaspoon coriander powder4 tablespoons oil3 tablespoons flour1 teaspoon ginger paste1 nihari masala mix',
            'cooking_method'=>'1.Heat oil in a heavy based pot.2.Add meat and fry it a little.3.Add salt, chili powder, turmeric, coriander powder and ginger paste.4.Mix well.5.Add a little water.6.Dissolve flour in half a cup of water and add this to the meat and bring to boil.7.Grind all the whole spices ( spice mix).8.Put all the ground spices in a fine cotton cloth bundle and add to meat OR grind them till powdery fine and add them to the meat.9.Add 3-4 cups of water; cover and leave to tenderize on very low flame. It can take up to 5 - 6 hours if using chicken and more if using beef.10.When meat has softened remove the bundle of spices and make the curry into desired consistency.11.To Garnish--Fry some onion slices in a little oil until golden brown and add to Nihari.12.Also garnish with fresh coriander, ginger and green chilies.',
            'serve'=>'4',
            'cooking_time'=>'300',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Chicken Karahi',
            'imagePath'=>'images/chicken karahi.jpg',
            'videoPath'=>'https://www.youtube.com/embed/C_zpoq0iq_s',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'2 kg cube size boneless chicken1⁄2 cup oil1 tablespoon crushed ginger1 tablespoon crushed garlic1 salt1 red pepper1.green chili6 -8 tomatoes1 fresh coriander',
            'cooking_method'=>'1.Heat oil.2.Add chicken.3.Fry on low hear till the water in the chicken dries.4.After the water dries fry the chicken in the oil till it turns light brown.5.Add salt, red pepper, ginger and garlic.6.Cut tomatoes and add in the chicken.7.Cover the wok/pot and cook at low heat.8.Let the tomatoes cook and when you see the oil on the chicken, sprinkle fresh coriander.9.Chicken Karahi is prepared.Serve Hot!P.S: You can also add 1 tbsp of Achar Gosht Masala',
            'serve'=>'6',
            'cooking_time'=>'30',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Kofta',
            'imagePath'=>'images/kofta.jpg',
            'videoPath'=>'https://www.youtube.com/embed/qM9piynIfkg',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'1 kg. beef mince5 onions (chopped very fine)4 tbsp. garlic paste (divided)2 tbsp. ginger paste (divided)2 tbsp. garam masala (for the koftas)3 tbsp. tomato ketchup1/2 c. coriander leaves (chopped fine)Salt (to taste)3 tbsp. vegetable cooking oil2 tsp. coriander powder1 tsp. cumin powder1/2 tsp. turmeric powder1 tsp. chili powder1 tsp. garam masala (for the gravy)4 large tomatoes (cubed)',
            'cooking_method'=>'1.Put the minced beef, 2 of the chopped onions, 2 tablespoons of garlic paste, 1 tablespoons ginger paste, 2 tablespoons of garam masala, tomato ketchup, and coriander leaves in a large bowl and mix well.2.Form the mixture into equal-sized balls and keep on a plate.3.Heat the oil in a pan and add the remaining onions. Fry until they are light brown then add the remainder of the ginger and garlic paste. Fry for a minute.4.Add all the powdered spices (coriander, cumin, red chili powder, 1 tsp garam masala, and turmeric) before frying for two to three minutes.5.Add the tomatoes and mix well. Fry the masala till the oil begins to separate from it.6.Add 2 cups of warm water to the masala and season with salt to taste. Gently add the meatballs. Do not stir for at least the next five minutes.7.Stir gently so as not to break the meatballs.8.Cook uncovered until the meatballs are done. The gravy can be as thick as you like, so add or dry up the water as needed.9.Serve with jeera rice and kachumbar salad and enjoy!',
            'serve'=>'6',
            'cooking_time'=>'65',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Aloo Ghosht',
            'imagePath'=>'images/aloo ghosht.jpg',
            'videoPath'=>'https://www.youtube.com/embed/J549YiBh9ro',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'½ kg Mutton4 Potato1 ½ tsp Turmeric powder2 Onion(finely chopped)1 tbsp Red chili powder1 tbsp Ginger garlic paste.Salt to taste½ cup Oil½ cupYogurt2 Green chili1 tsp All Spice powder½ bunch Fresh coriander leaves(chopped)2 Green chilies(chopped)',
            'cooking_method'=>'1.Peel potatoes and cut them into pieces.2.Mix ½ tsp turmeric powder with water and soak the potato pieces in it.3.In a pan heat oil, add mutton, onion, ginger garlic, 1 tsp turmeric powder, red chili powder, salt and 2 cups of hot water.4.Cook till water dries and meat tenders.5.Then add in yogurt and pieces of potatoes and stir fry.6.Now add 2 cup of water, cover and simmer for 10 minutes.7.When the oil separates, add in all spice powder, fresh coriander leaves and chopped green chilies and keep it on a low flame.8.Serve it hot with naan.',
            'serve'=>'6',
            'cooking_time'=>'40',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Qeema',
            'imagePath'=>'images/qeema.jpg',
            'videoPath'=>'https://www.youtube.com/embed/aA5OWFUnWFI',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'400g minced meat1 large onion chopped (or 1 ½ medium onion)3 tbsp cooking oil1 tbsp heaped ginger finely chopped (1 ½ inch long piece of ginger)1 tbsp heaped garlic, finely chopped (5 cloves)½ to 1 tsp salt1 tsp red chilli powder½ tsp red chili flakes (for garnishing)1 tsp garam masala1 tsp cumin powder1 tsp coriander powder (heaped)½ tsp turmeric powder1 cup water',
            'cooking_method'=>'1.Heat oil on medium heat then add in onion – cook until transparent and add garlic and ginger.2.Cook till the onion is golden brown then add the minced meat.3.Cook the meat till the its color changes to brown. Reduce to low heat.4.Add in spices when the meat starts taking out its juices.5.After 30 seconds of adding the spices – add 1 cup water.6.Cover the sauce pan and leave on low heat till the water evaporates.7.Garnish with julienned ginger, red chili flakes and serve with naan or rice.',
            'serve'=>'4',
            'cooking_time'=>'35',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Daal Mash',
            'imagePath'=>'images/daal mash.jpg',
            'videoPath'=>'https://www.youtube.com/embed/0NhlTWa7m9g',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'1 cup Maash ki daal (soaked for a few hours, preferably overnight)1/2 tsp ginger paste4-5 diced green chillies1 inch ginger piece, julienned1/2 thinly sliced onion3-4 whole dried red chillies.neutral cooking oil',
            'cooking_method'=>'1.Rinse your soaked daal and put it to boil with a generous amount of water, the ginger paste and a spoon full of salt.2.Once the daal is cooked, 20-30 minutes,  drain the excess water and return the daal to the pot.3.Finely mince however many green chillies you feel comfortable using and add those along with the julienned ginger (if using) into the pot.4.Taste for salt, adjust seasoning.5.Heat a generous lug of oil in a small frying pan and add the onions and whole red chillies.5.When the onions turns a beautiful caramelly brown then pour the baghaar/tadka over the maash ki daal. Eat with roti. ',
            'serve'=>'4',
            'cooking_time'=>'30',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Moong daal',
            'imagePath'=>'images/moong daal.jpg',
            'videoPath'=>'https://www.youtube.com/embed/BddWaGiw-KE',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'1 1⁄2 cups yellow split peas1 teaspoon salt1 medium yellow onion, chopped2 -3 tablespoons jalapenos, minced1 teaspoon fresh turmeric, grated (or 1 teaspoon dried turmeric)1⁄2-1 teaspoon curry powder2 tablespoons peanut oil (I use a combination of oil and butter) or 2 tablespoons ghee (I use a combination of oil and butter)1 1⁄2 teaspoons black mustard seeds1 lemon, juice of fresh cilantro (to garnish)',
            'cooking_method'=>'1.In large pan boil the split peas in plenty of water for about 30 minutes until tender. If the water starts evaporating too quickly, add more as needed. By the end of the cooking time, the split peas should have the dry consistency of mashed potatoes, the majority of the lentils will have lost their shape and most of the water will have evaporated.2.Remove pot from range, drain the water from the lentils and stir in salt. Cover and set aside.3.Chop onion, and combine with the jalapeno, turmeric and curry powder.4.Heat the oil or ghee over medium heat in a heavy saute pan with lid. When oil is hot, carefully add the black mustard seeds. Stand back as they may pop up into your face. Cover the pan with the lid and continue cooking the mustard seeds until the popping quiets down.5.Now add the onion mixture to the pan and saute until the onion is translucent and golden. Finally, stir in the cooked split peas. Remove from heat and stir in the lemon juice. Taste and adjust seasoning if necessary.6.Garnish each serving with minced cilantro leaves.6.Serve with basmati rice.',
            'serve'=>'6',
            'cooking_time'=>'40',

        ]);
        $recipe->save();
        $recipe = new\App\Recipe([
            'title'=>'Gulab Jamun',
            'imagePath'=>'images/gulab jamun.jpg',
            'videoPath'=>'https://www.youtube.com/embed/Ci0tWRzZi7s',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'2 Cup Powdered Milk 6-8 tbsp Milk  (few tbsp more or less, dough should be smooth) 1 tbsp Canola Oil  (or ghee, for dough, plus more for frying) Pistachio  (crushed, for garnish) 1 tbsp Unsalted Butter  (or use Ghee - Clarified Butter) 1/2 tsp Baking Powder  1 tbsp All-Purpose Flour  (maida) 2 tbsp Semolina  (fine, soaked in milk for 10 minutes) Rose Syrup 1/2 tsp Rose Water  1.5 Cup Sugar  2 Cup Water  1 tsp Lime  (juice)',
            'cooking_method'=>'1. Soak semolina with 3 tbsp water (or milk) and set aside. In a sauce pan, combine sugar and water for rose syrup. Add lime juice. Heat until sugar has dissolved, boil for 3 minutes. Then mix in rose water and set aside. 2. In a wide bowl, take powdered milk, add in baking powder, mix well. Now, add cold butter diced in chunks (or ghee if using) and canola oil (or ghee if using). Rub with hands to distribute fat in milk powder. 3. Now add soaked (suji) semolina and 1 tbsp maida (all purpose flour), and stir with hand to combine. 4. Now add milk a little bit at a time until it makes smooth dough. Don\'t knead to make dough. Just use gentle pressure to bring everything together. Cover with kitchen towel and set aside for 10 minutes to rest. Additional Notes Dough should not be very dry not wet. 5. Divide rested dough into 20 equal portions and arrange on a plate 6. Now with clean hands (you can also oil hands if dough is sticky), roll each portion to make a smooth ball. Make sure it is smooth from all sides, no cracks visible. If dough sticks to hand, wash hand, wipe dry and repeat rolling again. 7. Cover the rolled balls with kitchen towel. Heat oil for deep drying. Oil should not be very hot or jamun will be uncooked and doughy from inside. Additional Notes Test oil temperature by dropping a small dough ball in oil. It should come to top on count 5. If dough immediately comes to top or gets brown, oil is over heated. If dough stays at bottom more than 5 counts, it is not heated fully. 8. It takes 8-10 minutes to cook one batch of Jamun. After first 4 minutes in oil, gulab jamun should not look brown at all. 9. After 8-10 minutes gulab jamun will look brown. Now, these will be fully cooked from inside. (at this point, you can also crank-up the heat a bit, and brown them as much you like.) 10. Remove the cooked jamun into a plate lined with paper towel. Repeat steps 7-9 to cook all. 11. While rest of jamun are cooking, heat the syrup. Drop the cooked ones in syrup. Once all jamuns are in syrup, increase heat and bring syrup to boil. Then remove from heat. Transfer syrup with gulab jamuns to a deep dish. Soak all gulab jamun in syrup for at-least 25 minutes. 12. Gulab Jamun are ready when soaked most of the liquid and look heavier than their size and are moist and spongy due to soaking sugar syrup. Serve topped with chopped pistachios and little bit of leftover syrup. Enjoy!',
            'serve'=>'10',
            'cooking_time'=>'35',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Ras Malai',
            'imagePath'=>'images/ras malai.jpg',
            'videoPath'=>'https://www.youtube.com/embed/DsyU23GXBpk',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'1 TSP Corn Flour2 Liter Milk35 gm Cashes35 gm Almonds35 gm Pistachios1 TSP Saffron½ Cup Condensed Milk4 Cup Water1 Cup Sugar3 TSP Lemon Juice',
            'cooking_method'=>'1.First of all, boil the milk (1 Liter) in a Pan.2.After boiling, add Lemon Juice in this boiled Milk. (Its Curdling Process of Milk / Doodh Phatna)3.Now put this milk into batis Cloth (Potli), Strain it so that it left all the water4.Keep Hanging this batis cloth potli so that it left the remaining water5.Now add this milk into the cooking pot. Also add Corn Flour, let it some soft. Now make peras.6.It is time for preparing Sugar Syrup. Add Water, Sugar and mix it well7.Next, Increase the flame then add Pera’s (Which we have prepared above)8.Now close this Pot and cook it more for 18 minutes9.Dip the Pera’s into the Sugar Syrup, let them cool Add milk(3 Cup) in a pan, also add Condensed Milk, Pistachios, & Cook it for 12-15 Minutes10.It’s time to finalize the process. Add Pera’s into the cooking pot, put the mixture (Milk with Cream/Malai) Your Tummy Ras Malai is Ready to serve',
            'serve'=>'3',
            'cooking_time'=>'40',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Gajar Halwa',
            'imagePath'=>'images/gajar halwa.jpg',
            'videoPath'=>'https://www.youtube.com/embed/DkgeVkaduoI',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'25 grams Kishmish (Raisins)25grams Kaju (Cashewnuts) Chopped1 kg-Carrots Grated1 litre-Milk2 tbsp-MILKMAID Pure Ghee1/2 tin (200g)-NESTLÉ MILKMAID Sweetened Condensed Milk',
            'cooking_method'=>'1.Mix carrots and milk in a pan, bring to a boil. Cook on low flame, stirring occasionally, till milk dries up.2.Add NESTLÉ MILKMAID Sweetened Condensed Milk and continue cooking on low flame, stirring occasionally, till it dries up.3.Add the ghee and cook for another 10 minutes. Garnish with nuts and raisins and serve hot.',
            'serve'=>'10',
            'cooking_time'=>'20',

        ]);
        $recipe->save();

        $recipe = new\App\Recipe([
            'title'=>'Kheer',
            'imagePath'=>'images/kheer.jpg',
            'videoPath'=>'https://www.youtube.com/embed/K9eoakmALTk',
            'price'=>'450',
            'Quantity'=>'2',
            'discount'=>'15',
            'ingredients'=>'Elaichi (Cardamom) Powder.Mixed Dried Fruits chopped50 gm-Rice raw1 litre-Milk',
            'cooking_method'=>'1.Wash rice and pressure cook in milk for 10 minutes (or cook on slow fire, till rice is soft).2.Add NESTLÉ MILKMAID Sweetened Condensed Milk and cook for another 5-7 minutes, stirring constantly, until the kheer reaches the desired consistency.3.Remove from fire. Serve garnished with nuts / elaichi powder.',
            'serve'=>'10',
            'cooking_time'=>'15',

        ]);
        $recipe->save();

    }
}
