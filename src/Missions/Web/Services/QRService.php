<?php namespace Application\Missions\Web\Services;

class QRService{
    public function __construct(private StudentService $studentService)
    {
    }


    public function checkByHash($code)
    {
        //MIK51-student-19-bcb31e155e1cab753008b98cb8053872
        if(preg_match('(MIK51-[s][a-z]*-[0-9]+-[0-9a-zA-Z]*)', $code)){
            $data = explode("-", $code);
            if($data[1] === 'student'){
                if($this->studentService->checkByHash($data[2],$data[3])){
                    return $this->studentService->getStudentNameByID($data[2]);
                }else{
                    return false;
                }
            }
            return false;
        }
    }
}
