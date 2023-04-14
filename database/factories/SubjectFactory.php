<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->randomElement(['CÁLCULO DIFERENCIAL',' FUNDAMENTOS DE INVESTIGACIÓN','MATEMÁTICAS DISCRETAS',' TALLER DE ADMINISTRACIÓN',' TALLER DE ÉTICA',' CONTABILIDAD FINANCIERA',' CÁLCULO INTEGRAL','PROBABILIDAD Y ESTADÍSTICA','QUÍMICA', 'ÁLGEBRA LINEAL', 'CULTURA EMPRESARIAL', 'CÁLCULO VECTORIAL', 'DESARROLLO SUSTENTABLE', 'FÍSICA GENERAL', 'INVESTIGACIÓN DE OPERACIONES', 'ECUACIONES DIFERENCIALES', 'MÉTODOS NUMÉRICOS']),
            'clave' => fake()->regexify('[A-Z]{3}[0-9]{4}'),
            'ing' => fake()->randomElement(['ISC','IE','IEM','II','IER']),
            'semestre' => fake()->randomElement(['1','2','3','4','5','6','7','8','9']),
        ];
    }

}