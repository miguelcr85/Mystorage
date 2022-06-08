<?php namespace Mcramirez\Mystorage\Models;

use Model;

/**
 * Model
 */
class Mystorage extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mcramirez_mystorage_storage';

    /**
     * @var array Validation rules
     */
    public $rules = [

       
    ];
    
    protected $jsonable = ['items'];
}
