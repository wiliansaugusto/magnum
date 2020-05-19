<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'mgm_tbl_usuario';

    protected $fillable = [
        'nm_usuario', 'ds_nickname', 'email', 'password',
    ];

    public function usuario()
    {
        return $this->belongsTo('App\Palestrante');
=======
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'mgm_tbl_usuario';

    protected $fillable = [
        'nm_usuario', 'email', 'password', 'ds_nickname', 'id_perfil',
    ];

    protected $dates = ['deleted_at'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'id_perfil');
    }

    public function palestrantes()
    {
        return $this->belongsTo(Palestrante::class, 'id_usuario', 'id');
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
    }
}
