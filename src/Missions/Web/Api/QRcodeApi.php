<?php namespace Application\Missions\Web\Api;

use Application\Missions\Web\Services\QRService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

class QRcodeApi extends Api{
    public function __construct(private QRService $QRService)
    {
    }

    #[Route(self::GET, '/qr/:code(MIK51-[s][a-z]*-[0-9]+-[0-9a-zA-Z]*)')]
    public function qrGet(string $code){
        $result = $this->QRService->checkByHash($code);
        if($result){
            return $code;
        }else return false;
    }

}
