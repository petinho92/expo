<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Eventacs;

class EventService{

    public function getAll(){
        return Eventacs::search()->collect();
    }
}
