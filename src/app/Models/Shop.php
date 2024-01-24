<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; 
    protected $fillable = ['id','name', 'descriptione','area_id' , 'genre_id',  'image_pass'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

   public function scopeSearch($query, $area, $genre, $keyword)
    {
        return $query
            ->when($area !== 'all', function ($query) use ($area) {
                return $query->where('area', $area);
            })
            ->when($genre !== 'all', function ($query) use ($genre) {
                return $query->where('genre', $genre);
            })
            ->when($keyword !== '', function ($query) use ($keyword) {
                return $query->where('name', 'like', '%' . $keyword . '%');
            });
    }
}
