<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Student;
use Atomino\Carbon\Database\Finder\Filter;

class StudentService{

    public function getAll(): array{
        $data = Student::search()->collect();
        $array = array();

        foreach ($data as $adat) {
            $array[] = (object)[
                'name' => $adat->name,
                'neptun' => $adat->neptun,
                'email' => $adat->email,
                'qrcode' => $adat->getQRCode(),
                'created' => $adat->created
            ];
        }
        return $array;
    }

    public function getCount(): int{
        return Student::search()->count();
    }

    public function checkByHash($id, $hash){
        $student = Student::pick($id);
        if($student){
            if($hash === md5($student->neptun)){
                return true;
            }
        }return false;
    }

    public function getStudentNameNeptunbyID($id){
        if(Student::pick($id)){
            $student = Student::pick($id);
            return array(
                $student->name,
                $student->neptun
            );
        }
    }

    public function getAllStudentInformation(){
        return Student::search()->collect();

    }

}
