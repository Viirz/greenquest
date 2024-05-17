<?php
namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use CrudTrait;
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'donations'; // specify the table name if it's not the plural form of the model name

    protected $fillable = ['id', 'user_id', 'amount', 'time']; // specify the attributes that can be mass assigned
}
?>