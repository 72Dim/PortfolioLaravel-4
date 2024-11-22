<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $w = fake()->word();
        return [
            // 'category' => fake()->randomDigitNot(0,8,9),
            'category' => fake()->randomDigitNotNull(), // число от 1 до 9.
            'prodEng' => $w,
            // 'prodRus' => fake('ru_RU')->name(), //работает
            'prodRus' => fake('ru_RU')->word(),
            // 'units' => fake()->randomElements(['1кГ', '1Лит', '10Шт']),
            // 'units' => fake()->randomElements(['a', 'b', 'c', 'd', 'e']),
            'units' => fake()->word(),
            'price' => fake()->randomFloat(2, 5, 100),
            // 'country' => fake()->randomElements(['Украина', 'Болгария', 'Турция', 'Израиль', 'Китай']),
            'country' => fake()->word(),
            'picture' => $w.'.JPG',
        ];
    }
    /*  Table - products
        Варианты наз. столбца FK_id, ctg_id
        +----+-------+-------------+------------------+-------+-------+--------------------+-----------------+---------------------+------------+
        | id | category | prodEng     | prodRus          | units | price | country            | picture         | created_at          | updated_at |
        +----+-------+-------------+------------------+-------+-------+--------------------+-----------------+---------------------+------------+
        |  1 |     1       | Cherry_plum | Алыча            |   1Кг | 19.50 | Украина             | Cherry_plum.JPG | 2022-04-29 11:58:35 | NULL       |
        |  2 |     1       | Pomelo      | Помело           |   1Кг | 39.50 | Израиль             | Pomelo.JPG      | 2022-04-29 11:58:35 | NULL       |
        +----+-------+-------------+------------------+-------+-------+--------------------+-----------------+---------------------+------------+
    */
}
