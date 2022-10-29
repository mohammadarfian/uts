<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'Lawless Dogbar - Slingky Dog Tshirt - Black',
                    'fotoBarang' => 'gambar1.jpg',
                    'harga' => '229000',
                    'stok' => '30',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Black heavy 24s cotton short sleeve t-shirt, tubular fit, seamless double needle 2cm collar, taped neck and shoulders, screen printed with quality plastisol ink.
                    Please do check the size chart, we use different size chart for every item we posted',
                ],
                [
                    'namaBarang' => 'Lawless - Sabbath Sunday Tshirt - Black',
                    'fotoBarang' => 'gambar2.jpg',
                    'harga' => '209000',
                    'stok' => '10',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Black heavy 24s cotton short sleeve t-shirt, tubular fit, seamless double needle 2cm collar, taped neck and shoulders, screen printed with quality plastisol ink.
                    Please do check the size chart, we use different size chart for every item we posted',
                ],
                [
                    'namaBarang' => 'Mousepad Gaming Rexus Kvlar T10 Speed Edition',
                    'fotoBarang' => 'gambar3.jpg',
                    'harga' => '65000',
                    'stok' => '100',
                    'ukuran' => 'All Size',
                    'reviewBarang' => 'Spesifikasi
                    Permukaan: Kain Tekstur
                    Dasar: Karet bertekstur anti-slip
                    Ukuran
                    - Panjang 800mm
                    - Lebar 300mm
                    - Ketebalan 3mm',
                ],
                [
                    'namaBarang' => 'LinkaweOriginal Jumper Hoodie Basic ',
                    'fotoBarang' => 'gambar4.jpg',
                    'harga' => '106000',
                    'stok' => '200',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Material heavy fleece / fleece tebal / fleece polyester ( bahan lembut panas tidak adem )
                    Material rib/karet polyester ( lembut ,kloyor, tidak kaku )
                    Gramasi kain 280 ( tidak terlalu tebal/tipis )',
                ],
                [
                    'namaBarang' => 'Sandal Swallow ORI',
                    'fotoBarang' => 'gambar5.jpg',
                    'harga' => '10000',
                    'stok' => '500',
                    'ukuran' => '39, 40, 41, 42, 43',
                    'reviewBarang' => 'Sandal Swallow merupakan sandal yang sangat populer di Indonesia sejak tahun 80an. Sandal anti-slip yang awet ini dijual dengan harga yang sangat affordable, sehingga dicintai semua kalangan.',
                ],
                [
                    'namaBarang' => 'Celana Chino Pendek Pria Ribsgold',
                    'fotoBarang' => 'gambar6.jpg',
                    'harga' => '89000',
                    'stok' => '50',
                    'ukuran' => '28, 29, 30, 31',
                    'reviewBarang' => 'Short Chino Pants sangat cocok digunakan untuk kegiatan sehari-hari, karena sifatnya lebih terlihat casual dan bahan yang kami gunakan 100% bahan chino dan tidak ada campuran bahan reguler.
                    Short Chino Pants ini sangat cocok digunakan dengan Kaos Polos, Kaos Strip dan kemeja.',
                ],
                [
                    'namaBarang' => 'Kemeja Pique Lengan Panjang Premium Dzargo',
                    'fotoBarang' => 'gambar7.jpg',
                    'harga' => '139000',
                    'stok' => '200',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Produk dengan karakter bahan halus & lembut, meneyerap keringat, tidak panas, sehingga nyaman digunakan saat sedang beraktivitas baik di dalam maupun di luar ruangan.',
                ],
                [
                    'namaBarang' => 'Kemeja Batik Pria Slim Fit Lengan Pendek Cotton Stretch',
                    'fotoBarang' => 'gambar8.jpg',
                    'harga' => '100000',
                    'stok' => '200',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Bahan cotton Stretch tebal, lembut, halus, tentunya adem dan nyaman di pakai',
                ]
            ]
        );
    }
}
