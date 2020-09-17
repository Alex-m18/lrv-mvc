<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuitarType extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guitar_types';

    protected $fillable = ['type'];

    public function guitars()
    {
        return $this->hasMany(Guitar::class, 'type_id', 'id');
    }

}
