<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    const TYPE_PRIORITY_MAIN = 1;
    const TYPE_PRIORITY_SECOND = 2;
    const TYPE_TARGET_BOOK = 'App\Eloquent\Book';

    protected $table = 'media';

    protected $fillable = [
        'path',
        'priority',
        'height',
        'width',
        'target_type',
        'target_id',
    ];

    public function target()
    {
        return morphTo();
    }
}
