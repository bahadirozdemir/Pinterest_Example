<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Girisyap extends Authenticatable
{
  use HasFactory;
  protected $table="kullanicilar";
  protected $primaryKey = 'email';
  public $incrementing = false;
  protected $keyType = 'string';
}
