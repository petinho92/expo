<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Eventacs;
use Application\Entity\Student;

class QRService{

    public function __construct(private StudentService $studentService)
    {
    }

    public function checkByHash($code){
        if(preg_match('(MIK51-[s][a-z]*-[0-9]+-[0-9a-zA-Z]*)', $code)){
            $data = explode("-", $code);
            if($data[1]==='student'){
                if($this->studentService->checkByHash($data[2],$data[3])){
                    return $this->studentService->getStudentNameNeptunbyID($data[2]);
                }else return false;
            }
        }
        return false;
    }

    public function createAccessQRCode(array $input){
        $event = Eventacs::create();
        $event->date = $input['_date'];
        $event->room = $input['_room'];
        $event->phase = $input['_phase'];
        $event->qrcode = $input['_qrCode'];
        $event->save();
        return $event;
    }
}
