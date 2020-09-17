<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'guitars';

    protected $fillable = ['brand', 'model', 'type_id', 'price'];

    public function guitarType()
    {
        return $this->belongsTo(GuitarType::class, 'type_id', 'id')->first();
    }

}
