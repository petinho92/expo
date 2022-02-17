<?php namespace Application\Missions\Web;

use Application\Missions\Web\Api\QRcodeApi;
use Application\Missions\Web\Api\RegistrationApi;
use Atomino\Bundle\Authenticate\SessionAuthenticator;
use Atomino\Mercury\Responder\Smart\Cache\Middleware\Cache;

class Router extends \Atomino\Mercury\Router\Router {

	public function __construct(protected SessionAuthenticator $authenticator) { }

	public function route():void{
		$this(method: 'GET', path: '/')?->pipe(Cache::class)->pipe(Page\Index::class);
        $this('POST', path: '/post/**')?->pipe(RegistrationApi::class);
        $this('GET', path: '/get/**')?->pipe(QRcodeApi::class);
		$this()?->pipe(Page\Error404::class);
	}

}
