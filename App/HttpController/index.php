<?php
namespace App\HttpController;
use EasySwoole\Core\Http\AbstractInterface\Controller;
use EasySwoole\Core\Component\Logger;

class Index extends Controller
{
  function index()
  {
  		$logger = new Logger();

  		$logger->log("loglogloglog");
      // TODO: Implement index() method.
      $this->response()->write('We Are Griphone.');
  }
}