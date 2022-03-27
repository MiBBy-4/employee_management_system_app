<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sortable;

    protected $table = 'employees';
    protected $fillable = [
        'first_name', 'last_name',
        'salary', 'date_of_birth',
    ];

    public $sortable = ['first_name',
                        'last_name',
                        'salary',
                        'date_of_birth'];
}
