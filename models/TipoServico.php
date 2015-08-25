<?php namespace Celepar\Catalogo\Models;

use Model;

/**
 * TipoServico Model
 */
class TipoServico extends Model
{
    use \October\Rain\Database\Traits\SimpleTree;

    const TREE_LABEL = 'tipo';

    /**
     * @var string The database table used by the model.
     */
    public $table = 'celepar_catalogo_tipo_servicos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */

    public $hasMany = [
        'children' => ['Celepar\Catalogo\Models\TipoServico'],
        'servico' => ['Celepar\Catalogo\Models\Servico'],
    ];

    public $belongsTo = [
        'parent' => ['Celepar\Catalogo\Models\TipoServico']
    ];
   //public $hasOne = [];
   //public $hasMany = [];
   //public $belongsTo = [];
   //public $belongsToMany = [];
   //public $morphTo = [];
   //public $morphOne = [];
   //public $morphMany = [];
   //public $attachOne = [];
   //public $attachMany = [];

}