<?php namespace Celepar\Catalogo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTipoServicosTable extends Migration
{

    public function up()
    {
        Schema::create('celepar_catalogo_tipo_servicos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('tipo')->nullable()->index()->unique();
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->tinyInteger('ordem')->nullable()->default(0)->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('celepar_catalogo_tipo_servicos');
    }

}
