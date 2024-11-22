<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->id();
            $table->string('catgEng', 30);
            $table->string('catgRus', 30);
            $table->string('saver', 30);
            $table->timestamp('created_at', 3)->useCurrent();
            $table->timestamp('updated_at', 3)->useCurrentOnUpdate();
            // $table->timestamps();
        });
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
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorys');
    }
};
