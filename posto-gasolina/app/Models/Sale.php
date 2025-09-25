<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = ['user_id', 'total'];

    /**
     * Relacionamento: uma venda tem muitos itens
     */
    public function items()
    {
        return $this->hasMany(SaleItem::class);
    }

    /**
     * Relacionamento: uma venda pertence a um usuário
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}