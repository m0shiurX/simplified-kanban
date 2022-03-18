<?php

namespace App\Models;

use App\Models\Column;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Card extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'column_id',
        'title',
        'description',
    ];


    public function column()
    {
        return $this->belongsTo(Column::class);
    }
}
