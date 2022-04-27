<?php namespace Application\Missions\Admin\Api;

use Application\Missions\Admin\Services\EmailService;
use Application\Missions\Admin\Services\EventService;
use Application\Missions\Admin\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

use function Atomino\debug;

class StatApi extends Api{
    public function __construct(private StudentService $studentService, private EmailService $emailService, private EventService $eventService)
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

    #[Route(self::GET, '/getAll')]
    public function getAll(){
        //student: name, neptun, email, qrcode
        //email: name, email, qrcode, statusSent, sentDate

        $results = array();

        $students = $this->studentService->getAll();
        $emails = $this->emailService->getAll();

        foreach ($students as $student){
            foreach ($emails as $email){
                if($student->qrcode == $email->qrcode){
                    $results[] = (object)[
                        'name' => $student->name,
                        'email' => $student->email,
                        'neptun' => $student->neptun,
                        'qrcode' => $student->qrcode,
                        'statusSent' => $email->statusSent,
                        'created' => $student->created->format('Y-m-d H:i:s'),
                        'sentDate' => ($email->sentDate != null)? $email->sentDate->format('Y-m-d H:i:s') : null
                    ];

                }
            }
        }
        return $results;
    }

    #[Route(self::GET, '/getLog')]
    public function getLog(){
        $students = $this->studentService->getAllStudentInformation();
        $events = $this->eventService->getAll();
        $results = array();

        foreach ($events as $event){
            foreach ($students as $student){
                if($event->qrcode == $student->getQRCode()){
                    $results[] = (object)[
                        'name' => $student->name,
                        'email' => $student->email,
                        'neptun' => $student->neptun,
                        'mobile' => $student->mobile,
                        'major' => $student->major,
                        'semester' => $student->semester,
                        'programs' => $student->programs,
                        'lang' => $student->lang,
                        'registration' => $student->created->format('Y-m-d H:i:s'),
                        'event' => "Pollack Expo",
                        'event_day' => (string)$event->date,
                        'room' => $event->room,
                        'phase' => $event->phase,
                        'scannerTime' => $event->created->format('Y-m-d H:i:s'),
                    ];
                }
            }
        }return $results;

    }
}
