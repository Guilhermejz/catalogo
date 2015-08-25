<?php namespace Celepar\Catalogo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateServicosTable extends Migration
{

    public function up()
    {
        Schema::create('celepar_catalogo_servicos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome')->nullable()->unique();
            $table->text('escopo')->nullable();
            $table->text('descricao')->nullable();
            $table->tinyInteger('ordem')->nullable()->default(0)->unsigned();
            $table->string('endereco_web')->nullable()->unique();
            $table->string('orgao_responsavel')->nullable();
            $table->text('base_legal')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('celepar_catalogo_servicos');
    }

}
