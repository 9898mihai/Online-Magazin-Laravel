<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 20; $i++)
           DB::table('products')->insert([
                'category_id' => rand(1, 3),
                'name' => 'Product '.$i,
                'code' => 'product_'.$i,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pellentesque orci sit amet eros aliquet, at pharetra ligula congue. Suspendisse eu libero iaculis, dictum neque ut, suscipit risus. Sed at lacus eu neque sagittis accumsan. Nunc cursus eu lacus non faucibus. Suspendisse porttitor fringilla felis viverra blandit. Cras in sollicitudin risus. Etiam auctor elementum nulla, ut sagittis tortor lacinia quis. Sed quis nulla iaculis odio sagittis rhoncus in ac velit. Nullam iaculis efficitur eleifend. Vivamus finibus augue quis metus posuere, eu semper eros tristique. Donec sit amet lobortis odio. Nullam sit amet viverra tellus, id placerat orci. Sed accumsan hendrerit lacus feugiat viverra. Duis semper sollicitudin magna nec ornare. Cras lectus erat, gravida sit amet interdum a, bibendum quis mi. Morbi quis risus vel est hendrerit tempor. Sed tempor, justo quis posuere suscipit, nibh sem consequat eros, vel tempor tellus leo quis urna. In interdum in dolor eget posuere. Maecenas at neque tortor. Morbi turpis nisl, tristique sed molestie id, scelerisque at elit. Ut at nulla lacus. Aenean accumsan arcu nec consectetur faucibus. Nam consectetur eu nulla a condimentum. Pellentesque nec vehicula orci, eget sodales ex.',
                'image' => 'no_image.png',
                'price' => rand(200, 2000),
            ]);
    }
}
