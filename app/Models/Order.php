<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Order extends Model
    {
        use SoftDeletes;
        protected $casts = [
            'products' => 'array',
        ];
        protected $fillable = [
            'user_id', 'totalPrice', 'products'
        ];

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        // public function product()
        // {
        //     return $this->belongsTo(Product::class, 'product_id');
        // }

    }
