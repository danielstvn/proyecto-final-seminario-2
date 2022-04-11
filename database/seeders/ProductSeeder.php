<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Product::create([
            'nombre' => 'Puerta baño',
            'tipo' => 'corrediza',
            'material' => 'aluminio',
            'color' => 'natural blanca',
            'detalle' => 'puerta en aluminio  sencilla exlusiva baño',
            'img' =>'https://i.pinimg.com/originals/e4/17/25/e417254d042d3dfd7a9ccf6cdf1aa56d.jpg',
            'valor' => 700000,
            
        ]);

        Product::create([
            'nombre' => 'Puerta cocina',
            'tipo' => 'corrediza',
            'material' => 'aluminio',
            'color' => 'Negro H3 Poliester',
            'detalle' => 'puerta en aluminio para cocina con vidrio acrilico ',
            'img' =>'https://i.pinimg.com/originals/24/bb/59/24bb598d334248c769e610b816ae9f3e.webp',
            'valor' => 850000,
            
        ]);

        Product::create([
            'nombre' => 'ventana fachada',
            'tipo' => 'proyectante',
            'material' => 'aluminio',
            'color' => 'natural blanca',
            'detalle' => 'ventana para fachada',
            'img' =>'https://i.pinimg.com/originals/39/47/cc/3947cc46a4d9b851ebc0961f33f3c28d.jpg',
            'valor' => 350000,
            
        ]);

        Product::create([
            'nombre' => 'ventana cocina',
            'tipo' => 'corrediza',
            'material' => 'aluminio',
            'color' => 'natural blanca',
            'detalle' => 'ventana para cuarto',
            'img' =>'https://ailla-alumini.com/wp-content/uploads/2014/03/tipos-ventanas-aluminio-cocina-sabadell.jpg',
            'valor' => 350000,
            
        ]);

        Product::create([
            'nombre' => 'Puerta baño',
            'tipo' => 'puerta corrediza',
            'material' => 'Vidrio',
            'color' => 'natural Transparente',
            'detalle' => 'puerta en vidrio templado ',
            'img' =>'https://http2.mlstatic.com/D_795303-MPE26888409086_022018-O.jpg',
            'valor' => 900000,
            
        ]);

        Product::create([
            'nombre' => 'Espejo baño',
            'tipo' => 'pared',
            'material' => 'vidrio',
            'color' => 'natural',
            'detalle' => 'espejo para baño ',
            'img' =>'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/pia-capdevilaambiente-ban-o-espejo-pared-1634207371.jpg?crop=1.00xw:0.904xh;0.00173xw,0.0625xh&resize=480:*',
            'valor' => 250000,
            
        ]);
    }
}
