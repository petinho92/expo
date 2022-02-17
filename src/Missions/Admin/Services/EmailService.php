<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Emailsender;
use function Symfony\Component\String\b;

class EmailService{

    public function getAll(): array{
        $data = Emailsender::search()->collect();
        $array = array();

        foreach ($data as $adat){
            $array[] = (object)[
                'name' => $adat->toName,
                'email' => $adat->toEmail,
                'qr' => $adat->toQr,
                'statusSent'=>$adat->statusSent,
                'sentDate' =>$adat->sentTime
            ];
        } return $array;
    }
}
