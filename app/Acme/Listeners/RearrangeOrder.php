<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 12/12/14
 * Time: 7:35 PM
 */

namespace Acme\Listeners;


use Acme\Page\PageWasDeleted;
use Acme\Services\Ordering\OrderArrangementServices;
use Cache;
use Laracasts\Commander\Events\EventListener;

class RearrangeOrder extends EventListener{

    public function whenPageWasDeleted(PageWasDeleted $event)
    {
        $object = $this->getObject($event);
        $criteria['col'] = "parent_id";
        $criteria['logic'] = "=";
        $criteria['criteria'] = $event->$object->parent_id;
        $this->deleteAnItem($event, $criteria);
        Cache::flush();
    }

    public function whenANewPageWasAdded(ANewPageWasAdded $event)
    {
        $object = $this->getObject($event);
        $criteria['col'] = "parent_id";
        $criteria['logic'] = "=";
        $criteria['criteria'] = $event->$object->parent_id;
        $this->deleteAnItem($event, $criteria);
        Cache::flush();
    }

    protected function deleteAnItem($event,$criteria)
    {
        $object = $this->getObject($event);
        $table = $event->$object->getTable();
        $ordering = new OrderArrangementServices($table);
        $ordering->deleteAnItem($event->$object->order, $criteria);
    }

    /**
     * @param $event
     * @return mixed
     */
    protected function getObject($event)
    {
        return key(get_class_vars(get_class($event)));
    }

} 