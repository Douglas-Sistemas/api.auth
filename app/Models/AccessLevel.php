<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes
};

/**
 * @property int $id
 * @property string $label
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class AccessLevel extends Model
{

    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'label',
        'created_at',
        'updated_at'
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
