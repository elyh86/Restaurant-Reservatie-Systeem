<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'name' => 'Bruschetta',
                'description' => 'Gegrilde broodjes met tomaat, knoflook en verse basilicum',
                'price' => 8.50,
                'image' => 'https://images.unsplash.com/photo-1572695157366-5e585ab2b69f?w=600',
                'category' => 'appetizer',
            ],
            [
                'name' => 'Caprese Salade',
                'description' => 'Verse mozzarella, tomaat, basilicum met olijfolie',
                'price' => 10.00,
                'image' => 'https://images.unsplash.com/photo-1608897013039-887f21d8c804?w=600',
                'category' => 'appetizer',
            ],
            [
                'name' => 'Carpaccio',
                'description' => 'Rauwe runderfilet met rucola, parmezaan en truffelolie',
                'price' => 14.00,
                'image' => 'https://images.unsplash.com/photo-1608897013039-887f21d8c804?w=600',
                'category' => 'appetizer',
            ],
            [
                'name' => 'Garnalencocktail',
                'description' => 'Garnalensalade met avocado en citrusdressing',
                'price' => 12.50,
                'image' => 'https://images.unsplash.com/photo-1626645738196-c2a7c87a8f58?w=600',
                'category' => 'appetizer',
            ],
            [
                'name' => 'Zalm Filet',
                'description' => 'Verse zalm met citroen-dillesaus en seizoensgroenten',
                'price' => 24.00,
                'image' => 'https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Biefstuk',
                'description' => 'Malse biefstuk met pepersaus en gebakken aardappelen',
                'price' => 28.00,
                'image' => 'https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Kip Parmigiana',
                'description' => 'Gepaneerde kip met tomatensaus en mozzarella',
                'price' => 22.00,
                'image' => 'https://images.unsplash.com/photo-1632778149955-e80f8ceca2e8?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Pizza Margherita',
                'description' => 'Huisgemaakte pizza met mozzarella, tomaat en basilicum',
                'price' => 16.00,
                'image' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Pizza Quattro Formaggi',
                'description' => 'Pizza met mozzarella, gorgonzola, parmezaan en fontina',
                'price' => 18.00,
                'image' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Pasta Carbonara',
                'description' => 'Spaghetti met guanciale, eierdooier, pecorino en zwarte peper',
                'price' => 19.00,
                'image' => 'https://images.unsplash.com/photo-1612874742237-6526221588e3?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Risotto Funghi',
                'description' => 'Roomrisotto met wilde paddenstoelen en parmezaan',
                'price' => 21.00,
                'image' => 'https://images.unsplash.com/photo-1476124369491-e7addf5db371?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Garnalen Linguine',
                'description' => 'Linguine met knoflook, chili, tomaten en gegrilde garnalen',
                'price' => 23.00,
                'image' => 'https://images.unsplash.com/photo-1563379926898-05f4575a45d8?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Osso Buco',
                'description' => 'Gekookt kalfsvlees met gremolata en risotto milanese',
                'price' => 32.00,
                'image' => 'https://images.unsplash.com/photo-1544025162-d76694265947?w=600',
                'category' => 'main_course',
            ],
            [
                'name' => 'Tiramisu',
                'description' => 'Italiaanse dessert met mascarpone, espresso en cacao',
                'price' => 8.00,
                'image' => 'https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=600',
                'category' => 'dessert',
            ],
            [
                'name' => 'Panna Cotta',
                'description' => 'Roompudding met frambozensaus',
                'price' => 7.50,
                'image' => 'https://images.unsplash.com/photo-1488477181946-6428a0291777?w=600',
                'category' => 'dessert',
            ],
            [
                'name' => 'Chocoladetaart',
                'description' => 'Rijke chocoladetaart met vanille-ijs',
                'price' => 9.00,
                'image' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=600',
                'category' => 'dessert',
            ],
            [
                'name' => 'Affogato',
                'description' => 'Vanille-ijs met heet espresso',
                'price' => 6.00,
                'image' => 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?w=600',
                'category' => 'dessert',
            ],
            [
                'name' => 'Gelato',
                'description' => 'Italiaans ijs (3 smaken naar keuze)',
                'price' => 7.00,
                'image' => 'https://images.unsplash.com/photo-1557142046-c704a3df3691?w=600',
                'category' => 'dessert',
            ],
            [
                'name' => 'Huiswijn Rood',
                'description' => 'Italiaanse rode wijn per glas',
                'price' => 6.50,
                'image' => null,
                'category' => 'drink',
            ],
            [
                'name' => 'Huiswijn Wit',
                'description' => 'Italiaanse witte wijn per glas',
                'price' => 6.50,
                'image' => null,
                'category' => 'drink',
            ],
            [
                'name' => 'Italiaans Bier',
                'description' => 'Vers gebotteld Italiaans bier',
                'price' => 5.00,
                'image' => null,
                'category' => 'drink',
            ],
            [
                'name' => 'Espresso',
                'description' => 'Sterke Italiaanse espresso',
                'price' => 3.00,
                'image' => null,
                'category' => 'drink',
            ],
            [
                'name' => 'Cappuccino',
                'description' => 'Espresso met gestoomde melk en melkschuim',
                'price' => 4.00,
                'image' => null,
                'category' => 'drink',
            ],
            [
                'name' => 'Limoncello',
                'description' => 'Italiaanse citroenlikeur',
                'price' => 5.50,
                'image' => null,
                'category' => 'drink',
            ],
        ];

        foreach ($items as $item) {
            Menu::create(array_merge($item, ['is_available' => true]));
        }
    }
}
