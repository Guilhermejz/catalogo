<?php namespace Celepar\Catalogo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddFkTipoServicos extends Migration
{

    public function up()
    {
        Schema::table('celepar_catalogo_servicos', function($table)
        {
            $table->integer('tipo_servico_id')->unsigned()->nullable();
            $table->foreign('tipo_servico_id')->references('id')->on('celepar_catalogo_tipo_servicos');
        });
    }

    public function down()
    {
        Schema::table('celepar_catalogo_servicos', function($table)
        {
            $table->dropForeign('celepar_catalogo_servicos_tipo_servico_id_foreign');
        });
    }

}
