<?php

    namespace App\Models;


    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Laravel\Passport\HasApiTokens;

    class User extends Authenticatable
    {
        use Notifiable, HasApiTokens;

        protected $fillable = [
            'name', 'email', 'password','zipCode', 'number', 'address', 'district', 'city', 'state', 'complement'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function orders()
        {
            return $this->hasMany(Order::class);
        }
    }
