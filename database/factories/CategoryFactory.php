<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
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
            'catgEng' => $w,
            // локаль по умолчанию ('en_US') - Английский (США)
            // 'catgRus' => fake('uk_UA')->word(),
            'catgRus' => fake('ru_RU')->word(),
            'saver' => $w.'.JPG',
        ];
    }
}
/* Пример таблицы categorys
    Database changed
    +----+----------------+---------------+--------------------+---------------------+------------+
    | id | catgEng        | catgRus       | saver              | created_at          | updated_at |
    +----+----------------+---------------+--------------------+---------------------+------------+
    |  1 | fruits         | ??????        | Fruits.JPG         | 2022-04-29 11:58:34 | NULL       |
    |  2 | vegetables     | ?????         | Vegetables.JPG     | 2022-04-29 11:58:37 | NULL       |
    |  3 | groats         | ?????         | Groats.JPG         | 2022-04-29 11:58:40 | NULL       |
    |  4 | drinks         | ???????       | Drinks.JPG         | 2022-04-29 11:58:41 | NULL       |
    |  5 | bakeryProducts | ???????       | BakeryProducts.JPG | 2022-04-29 11:58:42 | NULL       |
    |  6 | doughProducts  | ????????????? | DoughProducts.JPG  | 2022-04-29 11:58:43 | NULL       |
    |  7 | eggs           | ????          | Eggs.JPG           | 2022-04-29 11:58:45 | NULL       |
    +----+----------------+---------------+--------------------+---------------------+------------+
*/
