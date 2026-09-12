<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Profissional extends Model
{
    protected $table = 'profissionais';

     public function save(array $options = [])
    {
        // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
        if (!$this->usuario_id && Auth::user()) {
            $this->usuario_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    public function scopeUsuario($query)
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return $query;
        }
        return $query->where('usuario_id', $user->getKey());
    }
}
