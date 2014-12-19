<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 12/12/14
 * Time: 8:20 PM
 */

namespace Acme\Page;


use Acme\Models\Page;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class AddANewPageCommandHandler implements CommandHandler {

    use DispatchableTrait

    protected $page;

    function __construct(Page $page)
    {
        $this->page = $page;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $page = $this->page->addNewPage($command->pageId);

        $this->dispatchEventsFor($page);

        return $page;
    }
}