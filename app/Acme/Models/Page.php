<?php
/**
 * Created by PhpStorm.
 * User: adrianexavier
 * Date: 18/11/14
 * Time: 2:38 PM
 */

namespace Acme\Models;

use Acme\Page\PageWasDeleted;
use Laracasts\Commander\Events\EventGenerator;

class Page extends \Eloquent {

    use EventGenerator;

    protected $fillable = [
        'url', 'order', 'parent_id'
    ];

    public function metaData()
    {
        return $this->hasMany('Acme\Models\PageMetaData');
    }

    public function content()
    {
        return $this->hasMany('PageContent');
    }

    public function media()
    {
        return $this->hasMany('Acme\Models\Media');
    }

    public function addNewPage()
    {

    }

    public function deletePage($id)
    {
        $page = $this->findOrFail($id);
        $page->title()->where('page_id','=',$id)->delete();
        $page->delete();
        $page->raise(new PageWasDeleted($page));

        return $page;
    }

}