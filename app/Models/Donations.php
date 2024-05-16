<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    protected $table = 'donations'; // specify the table name if it's not the plural form of the model name

    protected $fillable = ['id', 'user_id', 'amoun  t', 'time']; // specify the attributes that can be mass assigned
}
?>