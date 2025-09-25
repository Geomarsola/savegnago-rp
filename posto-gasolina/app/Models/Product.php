<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    // Relacionamento: um produto pode estar em vários itens de venda
    public function saleItems()
    {
        return $this->hasMany(SaleItem::class);
    }
    
}