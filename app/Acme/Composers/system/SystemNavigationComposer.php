<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 16/12/14
 * Time: 2:05 PM
 */

namespace Acme\Composers\system;


use Acme\Models\Message;
use Cache;

class SystemNavigationComposer {

    private $message;

    function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function compose($view){

        $newMessages = $this->getNewMessage();
        $view->with('messages', $newMessages);
    }

    private function getNewMessage(){
        return $this->message->whereStatus("NEW")->get();
    }

}

