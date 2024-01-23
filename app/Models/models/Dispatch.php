<?php

namespace App\Models\models;

use App\Events\TestingEvent;
use Illuminate\Database\Eloquent\Model;

class Dispatch extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dispatchs';

    // Clave primaria y su tipo
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    // Atributos que son asignables en masa
    protected $fillable = ['document', 'type', 'productCode'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($post) {
            event(new TestingEvent($post));
        });
    }

}
