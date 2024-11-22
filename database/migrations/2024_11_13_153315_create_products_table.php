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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('category')
            $table->foreignId('category')
            ->constrained(table: 'categorys')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('prodEng', 30);
            $table->string('prodRus', 30);
            $table->string('units', 30);
            $table->decimal('price', 5, 2);
            $table->string('country', 30);
            $table->string('picture', 30);
            $table->timestamp('created_at', 3)->useCurrent();
            $table->timestamp('updated_at', 3)->useCurrentOnUpdate();
            // $table->timestamps();
        });
    }
    /*  Пример таблицы products.

        $allProducts = DB::select(
                'SELECT id, category, prodEng, prodRus, units, price, country, picture FROM products WHERE category = :category',
                ['category' => $_id]
            );

        +------------+--------------+------+-----+---------+----------------+
        | Field      | Type         | Null | Key | Default | Extra          |
        +------------+--------------+------+-----+---------+----------------+
        | id         | int          | NO   | PRI | NULL    | auto_increment |
        | FK_id      | int          | YES  | MUL | NULL    |                |
        | prodEng    | varchar(30)  | YES  |     | NULL    |                |
        | prodRus    | varchar(30)  | YES  |     | NULL    |                |
        | units      | varchar(30)  | YES  |     | NULL    |                |
        | price      | decimal(5,2) | YES  |     | NULL    |                |
        | country    | varchar(30)  | YES  |     | NULL    |                |
        | picture    | varchar(30)  | YES  |     | NULL    |                |
        | created_at | datetime     | YES  |     | NULL    |                |
        | updated_at | datetime     | YES  |     | NULL    |                |
        +------------+--------------+------+-----+---------+----------------+

        +----+----------+-------------+-----------+-------+-------+-----------+-----------------+---------------------+------------+
        | id | category | prodEng     | prodRus   | units | price | country   | picture         | created_at          | updated_at |
        +----+----------+-------------+-----------+-------+-------+-----------+-----------------+---------------------+------------+
        |  1 |        1 | Cherry_plum | ?????     | 1??   | 19.50 | ???????   | Cherry_plum.JPG | 2022-04-29 11:58:35 | NULL       |
        |  2 |        1 | Pomelo      | ??????    | 1??   | 39.50 | ???????   | Pomelo.JPG      | 2022-04-29 11:58:35 | NULL       |
        |  3 |        1 | Pear        | ?????     | 1??   | 15.50 | ???????   | Pear.JPG        | 2022-04-29 11:58:35 | NULL       |
        |  4 |        1 | Oranges     | ????????  | 1??   | 19.56 | ??????    | Orange.JPG      | 2022-04-29 11:58:36 | NULL       |
        |  5 |        1 | Bananas     | ??????    | 1??   | 36.85 | ????????? | Banana.JPG      | 2022-04-29 11:58:36 | NULL       |
        |  6 |        1 | Limes       | ??????    | 1??   | 32.45 | ??????    | lime.JPG        | 2022-04-29 11:58:36 | NULL       |
        |  7 |        1 | Mandarins   | ????????? | 1??   | 10.89 | ??????    | Mandarin.JPG    | 2022-04-29 11:58:36 | NULL       |
        |  8 |        1 | Apples      | ??????    | 1??   | 12.89 | ???????   | Apples.JPG      | 2022-04-29 11:58:37 | NULL       |
        |  9 |        2 | Kobak       | ?????     | 1??   | 25.50 | ???????   | Kobak.JPG       | 2022-04-29 11:58:37 | NULL       |
        | 10 |        2 | Corn        | ????????  | 1??   | 35.50 | ???????.  | Corn.JPG        | 2022-04-29 11:58:38 | NULL       |
        +----+----------+-------------+-----------+-------+-------+-----------+-----------------+---------------------+------------+

        'Cherry_plum'  =>
		[
			'title'  => "Алыча",
			'units'  => "1Кг",
			'price'  =>  19.50,
			'currency'  => "грн",
			'productDescription'  => "Украина.",
			'picture'  => "img/Cherry_plum.JPG"
		],
        */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
