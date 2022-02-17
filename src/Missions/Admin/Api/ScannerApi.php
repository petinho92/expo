<?php namespace Application\Missions\Admin\Api;

use Application\Missions\Admin\Services\QRService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use function Atomino\debug;


class ScannerApi extends Api{
    public function __construct(private QRService $qrService)
    {
    }

    #[Route(self::POST, '/processingQRCode')]
    public function processingQR(){
        if($this->data->get('_date') != "" && $this->data->get('_qrCode') !=""
            && $this->data->get('_room') != "" && $this->data->get('_phase') != ""){
            debug("kiscica");
            $code = $this->qrService->checkByHash($this->data->get('_qrCode'));
            if($code){
                $result=$this->qrService->createAccessQRCode($this->data->all());
                return array(
                    'statusCode' => 200,
                    'qrcode' => $result->qrcode,
                    'name' => $code,
                );
            }else return array(
                'statusCode' => 422,
                'message' => "Nem található ilyen vonalkód!"
            );
        }else return array(
            'statusCode' => 422,
            'message' => "Mezők kitöltése kötelező!"
        );
    }
}
