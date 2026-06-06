<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class Certificacao extends Model
{
  protected $table = 'certificacoes';

  public function save(array $options = [])
    {
        // Se nenhum autor tiver sido atribuído, atribua o id do usuário atual como autor do post
        if (!$this->profissional_id && Auth::user()) {
            $this->profissional_id = Auth::user()->getKey();
        }

        return parent::save();
    }
}
