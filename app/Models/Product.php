<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['photo_id','brand_id', 'productcategory_id','name','body','price'];

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function productcategory(){
        return $this->belongsTo(ProductCategory::class,'productcategory_id');
    }
}
