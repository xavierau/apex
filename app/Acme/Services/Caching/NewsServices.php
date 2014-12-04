<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 18/11/14
 * Time: 10:28 AM
 */

namespace Acme\Services\Caching;


use Acme\Repositories\Interfaces\NewsInterface;
use Acme\Services\Ordering\OrderArrangementServices;
use Acme\Validation\NewsValidator;

class NewsServices {


    /**
     * @var NewsInterface
     */
    private $news;
    /**
     * @var NewsValidator
     */
    private $validator;
    /**
     * @var OrderArrangementServices
     */
    private $order;

    function __construct(NewsInterface $news, NewsValidator $validator, OrderArrangementServices $order )
    {
        $this->news = $news;
        $this->validator = $validator;
        $this->order = $order;
    }


}