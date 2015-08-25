<?php namespace Celepar\Catalogo\Models;

use Model;

/**
 * Servico Model
 */
class Servico extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'celepar_catalogo_servicos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['tipo_servico_id'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'tipo_servico' => ['Celepar\Catalogo\Models\TipoServico']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}