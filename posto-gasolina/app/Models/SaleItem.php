<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['sale_id', 'product_id', 'quantity', 'price'];

    /**
     * Relacionamento: um item pertence a um produto
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Relacionamento: um item pertence a uma venda
     */
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}