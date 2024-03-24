<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  
    use HasFactory;

    const ABIERTO   = 1; 
    const ASIGNADO  = 2; 
    const PROCESO   = 3; 
    const REVISION  = 4; 
    const TERMINADO = 5; 
    const CANCELADO = 6; 
    
}
