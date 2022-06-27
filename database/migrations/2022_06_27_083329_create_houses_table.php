<?php

/*
CREARE LA MIGRAZIONE
CREATE
php artisan make:migration create_nometabella_table
UPDATE
php artisan make:migration update_nometabella_table --table=nometabella

NB: nel metodo down() deve essere presente l'istruzione contraria la metodo up()
per il create non ci sono problemi perché di default è presente il drop della tabella
mentr negli updete bisogna specificare l'istruzione contraria

COMANDI
php artisan migrate -> lancia tutte e migrazioni non ancora eseguite
php artisan migrate:rollback -> elimino le ultime migrazioni
php artisan migrate:rollback --step=3 -> elimino le ultime 3 migrazioni
php artisan migrate:reset -> cancello tutte le tabelle dal db
php artisam migrate:refresh -> cancella tutto il db e lancia da capo tutte le migrazioni

*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();

            $table->string('address',200);
            $table->string('postal_code',10);
            $table->string('city',50);
            $table->string('state',50);
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->text('descriptions');
            $table->integer('price')->unsigned();
            $table->boolean('is_aviable')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
