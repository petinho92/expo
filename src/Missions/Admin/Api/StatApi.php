<?php namespace Application\Missions\Admin\Api;

use Application\Missions\Admin\Services\EmailService;
use Application\Missions\Admin\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

class StatApi extends Api{
    public function __construct(private StudentService $studentService, private EmailService $emailService)
    {
    }

    #[Route(self::GET, '/getList')]
    public function getList(){
        return $this->studentService->getAll();
    }

    #[Route(self::GET, '/getCount')]
    public function getCount(){
        return $this->studentService->getCount();
    }

    #[Route(self::GET, '/getEmail')]
    public function getEmailSender(){
        return $this->emailService->getAll();
    }
}
