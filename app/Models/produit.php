<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'prix',
        'categorie_id'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function User()
    {
        return $this->hasMany(User::class);
    }
}
