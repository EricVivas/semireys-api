<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Sale;

class DBData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'vendedor',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => "Maria",
            'email' => "maria21@gmail.com",
            'password' => bcrypt('Maria123.'),
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => "Carla",
            'email' => "carla.catalina@gmail.com",
            'password' => bcrypt('Carla123.'),
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => "Jose",
            'email' => "jose.llanes@gmail.com",
            'password' => bcrypt('Jose123.'),
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => "Luis",
            'email' => "luis.tavera@gmail.com",
            'password' => bcrypt('Luis123.'),
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => "Orlando",
            'email' => "orlando.palencia@gmail.com",
            'password' => bcrypt('Orlando123.'),
            'role_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => "camisa",
            'description' => "camisas unicolor",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => "pantalon",
            'description' => "patalones unicolor",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => "franela",
            'description' => "franela unicolor",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => "pantalon",
            'description' => "patalones unicolor",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => "falda",
            'description' => "falda unicolor",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('categories')->insert([
            'name' => "licra",
            'description' => "licra unicolor",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('currencies')->insert([
            'name' => "VES - Bolivar",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('currencies')->insert([
            'name' => "COP - Pesos",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('currencies')->insert([
            'name' => "USD - Dolares",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('products')->insert([
            'name' => "camisa roja",
            'description' => "camisa roja",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 20,
            'image' => 'https://arturocalle.vtexassets.com/arquivos/ids/429662-800-auto?v=637850237511830000&width=800&height=auto&aspect=true',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "camisa azul",
            'description' => "camisa azul",
            'amount' => 6,
            'value' => 10000,
            'price_production' => 1,
            'image' => 'https://ferrefarbef.com/wp-content/uploads/2023/01/camisa-oxford-500x500-agrofarbef-1.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "camisa cuadros",
            'description' => "camisa cuadros",
            'amount' => 7,
            'value' => 10000,
            'price_production' => 1,
            'image' => 'https://www.camiseriaeuropea.com/cdn/shop/products/479_001.jpg?v=1598905432&width=990',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "camisa verde",
            'description' => "camisa verde",
            'amount' => 8,
            'value' => 10000,
            'price_production' => 1,
            'image' => 'https://www.thundra.co/wp-content/uploads/2021/10/Referencia-5-01-optimized.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "camisa blanca",
            'description' => "camisa blanca",
            'amount' => 6,
            'value' => 10000,
            'price_production' => 1,
            'image' => 'https://mercedesbenzco.vtexassets.com/arquivos/ids/156327-500-auto?v=637879894033000000&width=500&height=auto&aspect=true',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "camisa negra",
            'description' => "camisa negra",
            'amount' => 5,
            'value' => 10000,
            'price_production' => 1,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_2X_624034-MLM54861537347_042023-F.webp',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "camisa gris",
            'description' => "camisa gris",
            'amount' => 9,
            'value' => 10000,
            'price_production' => 1,
            'image' => 'https://www.duracolor.co/components/com_virtuemart/shop_image/product/resized/magictoolbox_cache/dd6b6cfc02e1715d9cb0915c3f4a72c2/788/thumb350x350/37800525de2931032933501b5a6df84d.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "franela roja",
            'description' => "franela roja",
            'amount' => 7,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://static.dafiti.com.co/p/gildan-3615-3316231-1-zoom.jpg',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "franela azul",
            'description' => "franela azul",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://gsvcolombia.com/cdn/shop/products/Azul_rey9_720x.jpg?v=1625157569',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "franela cuadros",
            'description' => "franela cuadros",
            'amount' => 9,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://www.14oz.es/uploads/photo/image/21816/gallery_A06627_IUUut40v.JPG',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "franela verde",
            'description' => "franela verde",
            'amount' => 4,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://demo.servisisweb.com/site/wp-content/uploads/2018/06/img-6.jpg',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "franela blanca",
            'description' => "franela blanca",
            'amount' => 6,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://unifyb2b.net/images/thumbnails/590/590/detailed/8/FTSMP12.png',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra roja",
            'description' => "licra roja",
            'amount' => 8,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://dferactivewear.com/cdn/shop/products/image00025_2.jpg?v=1651621100',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra azul",
            'description' => "licra azul",
            'amount' => 7,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_2X_749482-MCO70722770161_072023-F.webp',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra cuadros",
            'description' => "licra cuadros",
            'amount' => 6,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_2X_605346-MLM51109504750_082022-F.webp',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra verde",
            'description' => "licra verde",
            'amount' => 7,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://tendenciadeportiva.com.co/wp-content/uploads/2022/03/LD-588-Frontal.png',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra blanca",
            'description' => "licra blanca",
            'amount' => 9,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://racketball.vteximg.com.br/arquivos/ids/196058-1248-1546/41961-LICRA-DEPORTIVA-LARGA-BLANCO-MUJER-PANTALONES-Y-LICRAS-RACKETBALL-7701650875354-1.jpg?v=637986182164130000',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa azul',
            'description' => 'Elegante camisa en azul rey, confeccionada en algodón peinado para mayor suavidad. Manga larga y cuello abotonado que le da un look clásico y versátil, ideal para la oficina o una ocasión especial.',
            'amount' => 5,
            'value' => 50000,
            'price_production' => 30,
            'image' => 'https://coralshop.co/cdn/shop/products/camisa-azul-rey-3.jpg?v=1675719218',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa blanca',
            'description' => 'Impecable camisa blanca hecha de algodón 100% para un tacto suave y natural. De corte slim fit, con cuello abotonado y puños ajustables. Perfecta para vestir con clase sin perder la elegancia.',
            'amount' => 3,
            'value' => 30000,
            'price_production' => 25,
            'image' => 'https://repunte.com/wp-content/uploads/2018/08/Camisa-blanca.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa negra',
            'description' => 'Camisa casual en color negro, fabricada en tela fresca y ligera ideal para climas cálidos. Corte holgado y mangas largas para máxima comodidad. Luce genial tanto para el día como para la noche.',
            'amount' => 8,
            'value' => 80000,
            'price_production' => 20,
            'image' => 'https://ss261.liverpool.com.mx/xl/1068517606.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa gris',
            'description' => 'Camisa sport en tono gris plata, confeccionada en tejido hidrófilo que absorbe la humedad y se seca rápidamente. Cuello básico, mangas cortas y corte semi-ajustado para un look casual y despreocupado.',
            'amount' => 4,
            'value' => 40000,
            'price_production' => 28,
            'image' => 'https://t-static.dafiti.com.br/3ecCpYqgUeW8xi152UKbrYOl55A=/400x580/smart/filters:quality(90)/static.dafiti.com.co/p/tennis-3036-8085861-2-product.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa rosada',
            'description' => 'Coqueta y femenina camisa en color rosado, con delicados volantes y mangas abullonadas que le aportan un toque romántico. Escote en V con botones y tela fluida que realza la silueta.',
            'amount' => 7,
            'value' => 70000,
            'price_production' => 18,
            'image' => 'https://www.flashy.com.co/cdn/shop/products/camisa-crop-manga-larga-con-botones-giovanna-1.jpg?v=1669056383',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa jean',
            'description' => 'Camisa en tela de jean 100% algodón para un look moderno y casual. Lavados realzados, corte ajustado y cuello abotonado. Combine con tus jeans favoritos para un outfit coordinado.',
            'amount' => 6,
            'value' => 60000,
            'price_production' => 35,
            'image' => 'https://www.dwork.com.co/wp-content/uploads/2021/07/RCJDL-1.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa hawaiana',
            'description' => 'Camisa hawaiana estilo vintage con vistosos estampados tropicales. Cuello abotonado y corte holgado. Perfecta para lograr un look relajado en tus próximas vacaciones.',
            'amount' => 5,
            'value' => 50000,
            'price_production' => 23,
            'image' => 'https://i.ebayimg.com/images/g/0zsAAOSwu71jtqJ8/s-l1200.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa de lino',
            'description' => 'Fresca camisa en lino 100% natural, ligera y de rápido secado. Tono crudo, corte ajustado y cuello abotonado. Ideal para combatir el calor sin perder el estilo.',
            'amount' => 4,
            'value' => 40000,
            'price_production' => 45,
            'image' => 'https://almacenesginopasscalli.com/wp-content/uploads/2023/02/Mesa-de-trabajo-31-8.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa de rayas',
            'description' => 'Elegante camisa en tonos azules con sutiles rayas verticales. Cuello slim, puños ajustables y corte entallado. Hecha en suave tela de algodón peinado.',
            'amount' => 6,
            'value' => 60000,
            'price_production' => 40,
            'image' => 'https://cdn.baguer.co/uploads/2023/11/camisa-para-hombre-slim-a-rayas-manga-corta-con-bordado-unser-azul-claro-828625AC.jpg_7kr2FlPbGzYE55S8oGpZnBIZ7zlmmRtNW2DiIyXG2gTFniwIgv.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa estampada',
            'description' => 'Moderna camisa estampada en tonos tierra con motivos étnicos y geométricos. cuello abotonado y corte holgado. Fabulosos estampados que resaltan tu estilo.',
            'amount' => 5,
            'value' => 50000,
            'price_production' => 38,
            'image' => 'https://renzo.com.co/wp-content/uploads/2020/07/200105044-scaled.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa de franela',
            'description' => 'Cómoda y cálida camisa en suave franela a cuadros. Corte holgado, cuello abotonado. Perfecta para los días frescos del otoño e invierno.',
            'amount' => 7,
            'value' => 70000,
            'price_production' => 36,
            'image' => 'https://portoblanco.com/cdn/shop/products/C-1955_2.jpg?v=1669919627',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa polo',
            'description' => 'Clásica camisa polo en punto piqué. Cuello, puños y bajo en ribete del mismo tono. Logotipo bordado en el pecho. Cortes limpios para un look casual.',
            'amount' => 9,
            'value' => 90000,
            'price_production' => 32,
            'image' => 'https://www.intimissimi.com.co/media/catalog/product/cache/image/e9c3970ab036de70892d86c6d221abfe/2/0/202206271440586289.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa manga corta',
            'description' => 'Fresca y cómoda camisa manga corta en tonos pasteles. Cuello button-down, bolsillo en el pecho y corte semi-slim. Colores suaves ideales para el verano.',
            'amount' => 8,
            'value' => 80000,
            'price_production' => 30,
            'image' => 'https://cdn.shopify.com/s/files/1/0346/6845/products/2_a2504b8d-56ce-4ed0-b60c-f6a04dd611d0_900x.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Camisa sin cuello',
            'description' => 'Moderna camisa en tela fresca sin cuello con escote redondo. Tono blanco roto, corte holgado y original diseño asimétrico en la parte delantera.',
            'amount' => 4,
            'value' => 40000,
            'price_production' => 33,
            'image' => 'https://cdn.shopify.com/s/files/1/0346/6845/products/1_a15c9a48-a3b6-4a0e-a4aa-54ea4ae0e4c4_900x.jpg',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Franela roja',
                'description' => 'Cálida franela en color rojo intenso, fabricada en algodón peinado para máxima suavidad. Corte recto, cuello redondo, para un look casual. Perfecta para las tardes frías.',
                'amount' => 10,
                'value' => 10000,
                'price_production' => 15,
                'image' => 'https://m.media-amazon.com/images/I/51SabobzHKL._AC_UY1100_.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'currency_id' => 2
            ],
            [
                'name' => 'Franela azul',
                'description' => 'Franela en azul marino con acabado desgastado vintage. Confeccionada en algodón suave con cuello redondo y mangas largas. Logo bordado en el pecho. Un básico infalible para tu guardarropa casual.',
                'amount' => 12,
                'value' => 12000,
                'price_production' => 18,
                'image' => 'https://clasicosdelnorte.com/cdn/shop/products/KIC_123-2600-2869-200_prod1.jpg?v=1615731291',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'currency_id' => 2
            ],
            [
                'name' => 'Franela gris',
                'description' => 'Franela gris con corte holgado y mangas largas para brindar la máxima comodidad. Ideal para los días de frío en casa, paseos al aire libre o viajes. Confeccionada en tela de algodón peinado súper suave.',
                'amount' => 20,
                'value' => 20000,
                'price_production' => 12,
                'image' => 'https://i.ebayimg.com/images/g/3uMAAOSw9-JeP3K4/s-l500.png',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'currency_id' => 2
            ],
            [
                'name' => 'Franela verde',
                'description' => 'Moderna franela en color verde musgo, con cuello redondo y bolsillos frontales. Manga larga y corte semi ajustado. Perfecta para combinar con jeans o leggings en días casuales.',
                'amount' => 15,
                'value' => 15000,
                'price_production' => 20,
                'image' => 'https://franelas.com/verde.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'currency_id' => 2

            ],
            [
                'name' => 'Franela rosada',
                'description' => 'Divertida franela en color rosado pastel con estampado de corazones bordados. Manga corta, escote redondo y corte ajustado. Ideal para crear outfits primaverales casuales y frescas.',
                'amount' => 8,
                'value' => 8000,
                'price_production' => 22,
                'image' => 'https://franelas.com/rosada.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'currency_id' => 2
            ]
        ]);
        DB::table('products')->insert([
            'name' => "Pantalón marino",
            'description' => "Pantalón marino",
            'amount' => 40,
            'value' => 40000,
            'price_production' => 22.95,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A1001181007338_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON PANA MARINO",
            'description' => "PANTALON PANA MARINO",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 33.44,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A01869_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON GRIS MULTIBOLSILLOS",
            'description' => "PANTALON GRIS MULTIBOLSILLOS TERGAL PGM-31",
            'amount' => 8,
            'value' => 8000,
            'price_production' => 11.95,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A1011180001438_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON AMARILLO",
            'description' => "PANTALON AMARILLO REF PGM31",
            'amount' => 8,
            'value' => 8000,
            'price_production' => 11.87,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A1011180001741_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON AZULINA",
            'description' => "PANTALON AZULINA PGM31REFLEX",
            'amount' => 8,
            'value' => 8000,
            'price_production' => 17,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A1011181002038_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON MARINO PGM31REFLEX",
            'description' => "PANTALON MARINO PGM31REFLEX",
            'amount' => 12,
            'value' => 12000,
            'price_production' => 17,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A1011181002438_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON PGM31 MULTIB TERGAL MARIN",
            'description' => "PANTALON PGM31 MULTIB TERGAL MARIN",
            'amount' => 12,
            'value' => 12000,
            'price_production' => 12,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A02410_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON PGM31 MULTIB TERGAL MARIN",
            'description' => "PANTALON PGM31 MULTIB TERGAL MARIN",
            'amount' => 12,
            'value' => 12000,
            'price_production' => 12,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A1015020000636_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON AZULINA MULTIBOLSILLOS TE",
            'description' => "PANTALON AZULINA MULTIBOLSILLOS TE",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 12,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A1015020000636_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON MARINO MULTIBOLSILLOS C/C",
            'description' => "PANTALON MARINO MULTIBOLSILLOS C/C",
            'amount' => 12,
            'value' => 12000,
            'price_production' => 12,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A02849_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON MARINO MULTIB PGM-9",
            'description' => "PANTALON MARINO MULTIB PGM-9",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 12,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A04087_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON GRIS PGM31REFLEX",
            'description' => "PANTALON GRIS PGM31REFLEX",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 17,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A05556_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON DRILL NEGRO",
            'description' => "PANTALON DRILL NEGRO V061-0-05",
            'amount' => 12,
            'value' => 12000,
            'price_production' => 12,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A05582_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON VESTIR FIFTY MARINO 50P",
            'description' => "PANTALON VESTIR FIFTY MARINO 50P, MARCA BEYTON",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 8,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A2701800002236_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON INVIERNO KAKI",
            'description' => "PANTALON INVIERNO 100% ALG. KAKI",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 18,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A2701800002834_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON INVIERNO VERDE",
            'description' => "PANTALON INVIERNO 100% ALG. VERDE",
            'amount' => 15,
            'value' => 15000,
            'price_production' => 13,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A2701800002934_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON GRIS 6B C/RODILLERA Y C",
            'description' => "PANTALON GRIS 6B C/RODILLERA Y C",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 25,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A12994_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON GRIS ACOLCHADO 16388 C/2",
            'description' => "PANTALON GRIS ACOLCHADO 16388 C/2 MARCA: SAENA",
            'amount' => 5,
            'value' => 5000,
            'price_production' => 29,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A12996_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "PANTALON 5 BOLSILLOS C/TRABILLAS 65CMS 245GR",
            'description' => "PANTALON 5 BOLSILLOS C/TRABILLAS 65CMS 245GR, MARCA: IROTEX",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 25,
            'image' => 'https://deinsa.es/descargas/Imagenes_Articulos/A19009_PH.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Pantalón Dama Mujer Jeans Básico Skinny Negro Casual Comodo",
            'description' => "Pantalón Dama Mujer Jeans Básico Skinny Negro Casual Comodo",
            'amount' => 40,
            'value' => 40000,
            'price_production' => 30,
            'image' => 'https://resources.claroshop.com/medios-plazavip/s2/10996/1299134/5e1f6f72802c8-7806411e-84b7-4cf9-8242-9a1ac470e5f5-1600x1600.jpg',
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corta Mujer Rosada",
            'description' => "Marca: Sybilla",
            'amount' => 40,
            'value' => 40000,
            'price_production' => 30,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882544908_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Larga para Mujer Beige",
            'description' => "Marca: Sybilla",
            'amount' => 8,
            'value' => 8000,
            'price_production' => 80,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882905007_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Larga para Mujer Sybilla Negra",
            'description' => "Marca: Sybilla",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 80,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882905006_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Larga para Mujer Sybilla Color Print",
            'description' => "Marca: Sybilla",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 70,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882905021_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Medio de Algodón para Mujer Basement Negra",
            'description' => "Marca: Basement",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 130,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/70856629_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda de Felpa Moteada Mujer Beige",
            'description' => "Marca: Tommy Hilfiger",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 90,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/120567633_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corto Basement Mujer",
            'description' => "MArca: Basement",
            'amount' => 40,
            'value' => 40000,
            'price_production' => 30,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882609997_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Larga Juvenil Femenino Negro Atypical",
            'description' => "Marca: Atypical",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 30,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/118249924_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda larga para mujer",
            'description' => "Marca: Belife",
            'amount' => 40,
            'value' => 40000,
            'price_production' => 80,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/122202723_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "FALDA LARGA MUJER GRIS 86950",
            'description' => "Marca: Rutta",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 24.5,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/gsc_122833848_3412364_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corta Dahla Mujer Negra",
            'description' => "Marca: Dahla",
            'amount' => 4,
            'value' => 4000,
            'price_production' => 18.78,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882557685_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corta Dahla Mujer Azul medio",
            'description' => "Marca: Dahla",
            'amount' => 3,
            'value' => 3000,
            'price_production' => 19.99,
            'image' => ' https://falabella.scene7.com/is/image/FalabellaCO/882557685_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corta Dahla Mujer Rosada",
            'description' => "Marca: Dahla",
            'amount' => 46,
            'value' => 46000,
            'price_production' => 66,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882557841_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corta Basement Mujer Blanca",
            'description' => "Marca Basement",
            'amount' => 5,
            'value' => 5000,
            'price_production' => 45,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882553944_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corta Basement Mujer Azul",
            'description' => "Marca: Basement",
            'amount' => 33,
            'value' => 33000,
            'price_production' => 22,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882553949_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corto Basement Mujer Azul Claro",
            'description' => "Marca: Basement",
            'amount' => 9,
            'value' => 9000,
            'price_production' => 30.17,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882553938_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Para Mujer Efecto Cuero Tipo Tubo Negra",
            'description' => "Marca: sky",
            'amount' => 5,
            'value' => 5000,
            'price_production' => 22.5,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/118123128_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Larga Juvenil Femenino Palo De Rosa Oscuro",
            'description' => "Marca: Atypical",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 42,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/gsc_118243563_2023021_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corta Basement Mujer Ondulada",
            'description' => "Marca: Basement",
            'amount' => 2,
            'value' => 2000,
            'price_production' => 90,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882548686_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Falda Corta Blanca con destellos Mujer",
            'description' => "Marca: University Club",
            'amount' => 11,
            'value' => 11000,
            'price_production' => 19.99,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/61893700_1?wid=800&hei=800&qlt=70',
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra spandex",
            'description' => "licra Spandex",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 144,
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Bluelycra.jpg/330px-Bluelycra.jpg',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Lycra",
            'description' => "licra Lycra",
            'amount' => 3,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvvqIxYhbXcbXu6ZHzNrKTl_lcdijYXWmUh_GcJyXxT_B81mI85Jh-U5zNK9nP-8FDiHk&usqp=CAU',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Elastano",
            'description' => "licra Elastano",
            'amount' => 4,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://4.bp.blogspot.com/-IeuIuH0BLuA/UHbBdgSHVCI/AAAAAAAAClc/FiFGc8fInnU/s200/cotton-lycra-shorts.jpg',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Elastano",
            'description' => "licra blanca",
            'amount' => 6,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://racketball.vteximg.com.br/arquivos/ids/196058-1248-1546/41961-LICRA-DEPORTIVA-LARGA-BLANCO-MUJER-PANTALONES-Y-LICRAS-RACKETBALL-7701650875354-1.jpg?v=637986182164130000',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Acrilan",
            'description' => "licra Acrilan",
            'amount' => 4,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://lenceriamonique.com.mx/wp-content/uploads/2020/10/406_adelante-300x300.png',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Poliamida",
            'description' => "licra Poliamida",
            'amount' => 6,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://www.skaylafitstore.com/wp-content/uploads/2022/08/BB90883-1.jpg',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Nylon",
            'description' => "licra Nylon",
            'amount' => 9,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://landing-page-backend.s3.ap-south-1.amazonaws.com/blog_page_prodimages/9b5151b4-f9a9-4bcb-bad0-3eed454289c5/shutterstock_1230577864-1_auto.png',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Poliéster",
            'description' => "licra Poliéster",
            'amount' => 7,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaI0NSZpWwFRfw_71hQr8sbZWHJicaJluYg8PO0-XOR03-oJhLq6BE7dFt5FPK6j-YCRI&usqp=CAU',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => "licra Algodón elástico",
            'description' => "licra Algodón elástico",
            'amount' => 6,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://nayaindumentaria.com/wp-content/uploads/2020/09/naya-117-cintura-elastisada-3..jpg',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Tactel",
            'description' => "licra Tactel",
            'amount' => 6,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://www.nativos.com.co/images/galeria/imagen_id_1896.jpg',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Neopreno",
            'description' => "licra Neopreno",
            'amount' => 6,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://sendaigroup.com.co/cdn/shop/products/Diapositiva84_150x150.jpg?v=1665885708',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Jersey",
            'description' => "licra Jersey",
            'amount' => 12,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://www.telasperu.com/wp-content/uploads/2015/03/Screenshot_2018-10-27-21-09-232.png',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Seda elástica",
            'description' => "licra Seda elástica",
            'amount' => 8,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://racketball.vteximg.com.br/arquivos/ids/186392-1248-1546/41962-LICRA-DEPORTIVA-AZUL-OSCURO-MUJER-PANTALONES-Y-LICRAS-RACKETBALL-7701650788548-1.jpg?v=637986167778630000',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Licra francesa",
            'description' => "Licra francesa",
            'amount' => 6,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://fiber.com.co/cdn/shop/files/FANL03-B-5_1512x.jpg?v=1692539588',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Supplex",
            'description' => "licra Supplex",
            'amount' => 4,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://nikkystore.com.co/wp-content/uploads/2023/07/LEGGINS-CON-PUNTA-NEGRO-UNICA-SUPLEX-HEB.-GRANDE-0923-2-1434x1536.png',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Lycra suave",
            'description' => "Lycra suave",
            'amount' => 8,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://www.skinlook.co/cdn/shop/files/4_cf9ae76e-d49b-49ac-862f-37dd90de1d15.png?v=1689728174&width=1946',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Licra deportiva",
            'description' => "Licra deportiva",
            'amount' => 3,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://megashoptv.vteximg.com.br/arquivos/ids/164491-900-900/Leggins-deportivos-tiro-alto-control-de-abdomen-licra-larga_1.jpg?v=638229811783630000',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Licra mezclilla",
            'description' => "Licra mezclilla",
            'amount' => 6,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://www.alcarrito.com/media/catalog/product/i/m/img-20230714-wa0107.jpg?width=600&height=600&canvas=600,600&optimize=medium&bg-color=255,255,255&fit=bounds',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "licra Elastomérico",
            'description' => "licra Elastomérico",
            'amount' => 9,
            'value' => 1000,
            'price_production' => 144,
            'image' => 'https://www.kinema.com.co/cdn/shop/products/Disenosintitulo_40_b1ed70e6-afe0-4ada-aafb-7afc643e7b40_900x.jpg?v=1646972496',
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Conjunto Buzo Sudadera Sportwear Adidas Hombre",
            'description' => "Marca: Adidas",
            'amount' => 12,
            'value' => 12000,
            'price_production' => 25.30,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/60837509_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Camiseta de Fútbol Local Colombia 22 Adidas Mujer",
            'description' => "Marca: Adidas",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 25,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/38082850_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Pantaloneta deportiva Todo deporte Nike Hombre",
            'description' => "Marca: NIKE",
            'amount' => 13,
            'value' => 13000,
            'price_production' => 15,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/12792417_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Leggins Entrenamiento Tiro Alto para Mujer Adidas",
            'description' => "Marca: Adidas",
            'amount' => 23,
            'value' => 23000,
            'price_production' => 22,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/38647745_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Saco semi abierto para Hombre Mountain Gear",
            'description' => "Marca: Mountain Gear",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 55,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882317301_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Pantaloneta Nike Hombre",
            'description' => "Marca: Nike",
            'amount' => 15,
            'value' => 15000,
            'price_production' => 17,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/43859476_1?wid=1500&hei=1500&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Pantalon de Sudadera para Hombre Diadora Negro",
            'description' => "Marca: Diadora",
            'amount' => 5,
            'value' => 5000,
            'price_production' => 45,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882067338_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Pantalon de Sudadera para Hombre Diadora Gris",
            'description' => "Marca: Diadora",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 17,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882067341_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Pantalon de Sudadera para Hombre Diadora Gris Claro",
            'description' => "Marca: Diadora",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 17,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882067332_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Pantalón de Sudadera Adidas Hombre Grisaseo",
            'description' => "Marca: ADIDAS",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 35,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/26787684_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Camiseta Deportiva Para Hombre Puma negra",
            'description' => "Marca: PUMA",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 25,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/62967383_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Camiseta Deportiva Para Hombre Puma Roja",
            'description' => "Marca: PUMA",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 25,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/62967384_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Camiseta Deportiva Para Hombre Puma blanca",
            'description' => "Marca: PUMA",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 25,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/62967377_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Camiseta Deportiva Para Hombre Puma azul oscuro",
            'description' => "Marca: PUMA",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 25,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/62967372_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Chaqueta Para Mujer Mountain Gear NEGRA",
            'description' => "Marca: Mountain Gear",
            'amount' => 25,
            'value' => 25000,
            'price_production' => 40,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882774921_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Chaqueta Para Mujer Mountain Gear Verde Esmeralda",
            'description' => "Marca: Mountain Gear",
            'amount' => 25,
            'value' => 25000,
            'price_production' => 40,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882774923_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Conjunto Sudadera Fratta Mujer GRIS",
            'description' => "Marca: Fratta",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 75,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882498608_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Conjunto Buzo Sudadera para Hombre Fit Slim Diadora negra",
            'description' => "Marca: DIADORA",
            'amount' => 20,
            'value' => 20000,
            'price_production' => 55,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882674779_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Top deportivo para Mujer con Soporte Alto Diadora Azul Celeste",
            'description' => "Marca: DIADORA",
            'amount' => 8,
            'value' => 8000,
            'price_production' => 53.99,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882702268_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => "Chaqueta Cortavientos para Hombre Diadora color Oliva",
            'description' => "Marca: DIADORA",
            'amount' => 10,
            'value' => 10000,
            'price_production' => 95,
            'image' => 'https://falabella.scene7.com/is/image/FalabellaCO/882603805_1?wid=800&hei=800&qlt=70',
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
            'currency_id' => 2
        ]);
        DB::table('taxes')->insert([
            'name' => "IVA",
            'value' => 0.16,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('changes')->insert([
            'value' => 33.9172,
            'currency_id' => 3,
            'currency_change_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('changes')->insert([
            'value' => 0.029598,
            'currency_id' => 1,
            'currency_change_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('changes')->insert([
            'value' => 116.174,
            'currency_id' => 1,
            'currency_change_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('changes')->insert([
            'value' => 0.00849861,
            'currency_id' => 2,
            'currency_change_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('changes')->insert([
            'value' => 0.00025,
            'currency_id' => 2,
            'currency_change_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('changes')->insert([
            'value' => 3938.91,
            'currency_id' => 3,
            'currency_change_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 1,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 2,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 3,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 4,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 5,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 6,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 7,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 8,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 9,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 10,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 11,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 12,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 13,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 14,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 15,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 16,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('product_tax')->insert([
            'product_id' => 17,
            'tax_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        for ($i = 0; $i < 200; $i++) {
            $fecha = Carbon::now();
            $fecha->setDate(now()->year, rand(1, 12), rand(1, 30));
        
            $sale = Sale::create([
                'name_client' => 'Jose',
                'email_client' => 'jose.1996@gmail.com',
                'number_phone_client' => '9889809888',
                'total' => rand(100, 10000),
                'user_id' => 1,
                'currency_id' => 1,
                'created_at' => $fecha->toDateString(),
                'updated_at' => $fecha->toDateString(),
            ]);
        
            DB::table('product_sale')->insert([
                'amount' => rand(1, 10),
                'sale_id' => $sale->id,
                'product_id' => rand(1, 115),
            ]);
        }
    }
}