<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */
    public $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'divisi', 'url_foto', 'visi', 'misi', 'program',
    ];
}
