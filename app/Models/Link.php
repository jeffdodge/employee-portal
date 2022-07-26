<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\EloquentSortable\Sortable;

class Link extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    public $sortable = [
        'order_column_name' => 'weight',
        'sort_when_creating' => true,
    ];

    protected $fillable = [
        'title',
        'link',
        'color',
        'weight',
    ];

}
