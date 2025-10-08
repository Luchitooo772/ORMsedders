<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Usamos la fachada DB
// use App\Models\Docente; // Si tu modelo tiene fillable, puedes usarlo: Docente::create([...])

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertamos datos directamente en la tabla 'docentes'
        DB::table('docentes')->insert([
            [
                'nombre' => 'Ana Garcia',
                'email' => 'ana.garcia@ejemplo.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos Lopez',
                'email' => 'carlos.lopez@ejemplo.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}