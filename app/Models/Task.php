<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $table = 'tasks';
    protected $fillable = ['tasks', 'description', 'status'];

    protected array $enumStatus = [
        1 => 'в работе',
        2 => 'завершен',
        3 => 'еще не начат'
    ];
    public function getStatusAttribute($value)
    {
        return $this->enumStatus[$value];
    }
}
