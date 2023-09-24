<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DBData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('roles')->insert([
            'name' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'vendedor',
        ]);

        DB::table('users')->insert([
            'name' => "Maria",
            'email' =>"maria21@gmail.com",
            'password' => Str::random(10),
            'role_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => "Carla",
            'email' =>"carla.catalina@gmail.com",
            'password' => Str::random(10),
            'role_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => "Jose",
            'email' =>"jose.llanes@gmail.com",
            'password' => Str::random(10),
            'role_id' => 2
        ]);

        DB::table('categories')->insert([
            'name' => "camisa",
            'description' => "camisas unicolor",
        ]);

        DB::table('categories')->insert([
            'name' => "pantalon",
            'description' => "patalones unicolor",
        ]);

        DB::table('categories')->insert([
            'name' => "franela",
            'description' => "franela unicolor",
        ]);

        DB::table('categories')->insert([
            'name' => "falda",
            'description' => "falda unicolor",
        ]);

        DB::table('categories')->insert([
            'name' => "licra",
            'description' => "licra unicolor",
        ]);

        DB::table('products')->insert([
            'name' => "camisa roja",
            'description' => "camisa roja",
            'amount' => 1,
            'price_production' => 1,
            'image' => 'https://arturocalle.vtexassets.com/arquivos/ids/429662-800-auto?v=637850237511830000&width=800&height=auto&aspect=true',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "camisa azul",
            'description' => "camisa azul",
            'amount' => 1,
            'price_production' => 1,
            'image' => 'https://ferrefarbef.com/wp-content/uploads/2023/01/camisa-oxford-500x500-agrofarbef-1.jpg',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "camisa cuadros",
            'description' => "camisa cuadros",
            'amount' => 1,
            'price_production' => 1,
            'image' => 'https://www.camiseriaeuropea.com/cdn/shop/products/479_001.jpg?v=1598905432&width=990',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "camisa verde",
            'description' => "camisa verde",
            'amount' => 1,
            'price_production' => 1,
            'image' => 'https://www.thundra.co/wp-content/uploads/2021/10/Referencia-5-01-optimized.jpg',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "camisa blanca",
            'description' => "camisa blanca",
            'amount' => 1,
            'price_production' => 1,
            'image' => 'https://mercedesbenzco.vtexassets.com/arquivos/ids/156327-500-auto?v=637879894033000000&width=500&height=auto&aspect=true',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "camisa negra",
            'description' => "camisa negra",
            'amount' => 1,
            'price_production' => 1,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_2X_624034-MLM54861537347_042023-F.webp',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "camisa gris",
            'description' => "camisa gris",
            'amount' => 1,
            'price_production' => 1,
            'image' => 'https://www.duracolor.co/components/com_virtuemart/shop_image/product/resized/magictoolbox_cache/dd6b6cfc02e1715d9cb0915c3f4a72c2/788/thumb350x350/37800525de2931032933501b5a6df84d.jpg',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => "franela roja",
            'description' => "franela roja",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://static.dafiti.com.co/p/gildan-3615-3316231-1-zoom.jpg',
            'category_id' => 3
        ]);
        
        DB::table('products')->insert([
            'name' => "franela azul",
            'description' => "franela azul",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://gsvcolombia.com/cdn/shop/products/Azul_rey9_720x.jpg?v=1625157569',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "franela cuadros",
            'description' => "franela cuadros",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://www.14oz.es/uploads/photo/image/21816/gallery_A06627_IUUut40v.JPG',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "franela verde",
            'description' => "franela verde",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://demo.servisisweb.com/site/wp-content/uploads/2018/06/img-6.jpg',
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => "franela blanca",
            'description' => "franela blanca",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://unifyb2b.net/images/thumbnails/590/590/detailed/8/FTSMP12.png',
            'category_id' => 3
        ]);


        DB::table('products')->insert([
            'name' => "licra roja",
            'description' => "licra roja",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://dferactivewear.com/cdn/shop/products/image00025_2.jpg?v=1651621100',
            'category_id' => 5
        ]);
        
        DB::table('products')->insert([
            'name' => "licra azul",
            'description' => "licra azul",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_2X_749482-MCO70722770161_072023-F.webp',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "licra cuadros",
            'description' => "licra cuadros",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_2X_605346-MLM51109504750_082022-F.webp',
            'category_id' => 5
        ]);

        DB::table('products')->insert([
            'name' => "licra verde",
            'description' => "licra verde",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://tendenciadeportiva.com.co/wp-content/uploads/2022/03/LD-588-Frontal.png',
            'category_id' => 5
        ]);
        DB::table('products')->insert([
            'name' => "licra blanca",
            'description' => "licra blanca",
            'amount' => 1,
            'price_production' => 144,
            'image' => 'https://racketball.vteximg.com.br/arquivos/ids/196058-1248-1546/41961-LICRA-DEPORTIVA-LARGA-BLANCO-MUJER-PANTALONES-Y-LICRAS-RACKETBALL-7701650875354-1.jpg?v=637986182164130000',
            'category_id' => 5
        ]);

        //taxes
        DB::table('taxes')->insert([
            'name' => "IVA",
            'value' => 0.16
        ]);

        //currencies
        DB::table('currencies')->insert([
            'name' => "VES - Bolivar"
        ]);
        DB::table('currencies')->insert([
            'name' => "COP - Pesos"
        ]);
        DB::table('currencies')->insert([
            'name' => "USD - Dolares"
        ]);

        //changes
        DB::table('changes')->insert([
            'value' => 33.9172,
            'currency_id' => 3,
            'currency_change_id' => 1
        ]);
        DB::table('changes')->insert([
            'value' => 0.029598,
            'currency_id' => 1,
            'currency_change_id' => 3
        ]);
        DB::table('changes')->insert([
            'value' => 116.174,
            'currency_id' => 1,
            'currency_change_id' => 2
        ]);
        DB::table('changes')->insert([
            'value' => 0.00849861,
            'currency_id' => 2,
            'currency_change_id' => 1
        ]);
        DB::table('changes')->insert([
            'value' => 0.00025,
            'currency_id' => 2,
            'currency_change_id' => 3
        ]);
        DB::table('changes')->insert([
            'value' => 3938.91,
            'currency_id' => 3,
            'currency_change_id' => 2
        ]);

        //product_tax
        DB::table('product_tax')->insert([
            'product_id' => 1,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 2,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 3,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 4,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 5,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 6,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 7,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 8,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 9,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 10,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 11,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 12,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 13,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 14,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 15,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 16,
            'tax_id' => 1
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 17,
            'tax_id' => 1
        ]);

        //currency_product
        DB::table('currency_product')->insert([
            'value' => 33.9172,
            'product_id' => 1,
            'currency_id' => 1
        ]);
        DB::table('currency_product')->insert([
            'value' => 67.8344,
            'product_id' => 2,
            'currency_id' => 1
        ]);
        DB::table('currency_product')->insert([
            'value' => 169.586,
            'product_id' => 3,
            'currency_id' => 1
        ]);
        DB::table('currency_product')->insert([
            'value' => 101.7516,
            'product_id' => 4,
            'currency_id' => 1
        ]);
        DB::table('currency_product')->insert([
            'value' => 271.3376,
            'product_id' => 5,
            'currency_id' => 1
        ]);
        DB::table('currency_product')->insert([
            'value' => 116174,
            'product_id' => 6,
            'currency_id' => 2
        ]);
        DB::table('currency_product')->insert([
            'value' => 232348,
            'product_id' => 7,
            'currency_id' => 2
        ]);
        DB::table('currency_product')->insert([
            'value' => 580870,
            'product_id' => 8,
            'currency_id' => 2
        ]);
        DB::table('currency_product')->insert([
            'value' => 348522,
            'product_id' => 9,
            'currency_id' => 2
        ]);
        DB::table('currency_product')->insert([
            'value' => 929392,
            'product_id' => 10,
            'currency_id' => 2
        ]);
        DB::table('currency_product')->insert([
            'value' => 1,
            'product_id' => 11,
            'currency_id' => 3
        ]);
        DB::table('currency_product')->insert([
            'value' => 2,
            'product_id' => 12,
            'currency_id' => 3
        ]);
        DB::table('currency_product')->insert([
            'value' => 5,
            'product_id' => 13,
            'currency_id' => 3
        ]);
        DB::table('currency_product')->insert([
            'value' => 3,
            'product_id' => 14,
            'currency_id' => 3
        ]);
        DB::table('currency_product')->insert([
            'value' => 8,
            'product_id' => 15,
            'currency_id' => 3
        ]);
        DB::table('currency_product')->insert([
            'value' => 157.0516,
            'product_id' => 16,
            'currency_id' => 1
        ]);
        DB::table('currency_product')->insert([
            'value' => 203521,
            'product_id' => 17,
            'currency_id' => 2
        ]);
    }
}
