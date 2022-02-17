<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Eventacs;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Plugins\Created\Created;
use Symfony\Component\Validator\Constraints\NotBlank;

#[Created]
#[Validator('date', NotBlank::class, ['message'=>'Nap kiválasztása kötelező!'])]
#[Validator('room', NotBlank::class, ['message'=>'Terem kiválasztása kötelező!'])]
#[Validator('phase', NotBlank::class, ['message'=>'Program kiválasztása kötelező!'])]
#[Validator('qrcode', NotBlank::class, ['message'=>'QR kód megadása kötelező!'])]
#[Modelify(\Application\Database\DefaultConnection::class, 'eventacs', true)]
class Eventacs extends _Eventacs{

}