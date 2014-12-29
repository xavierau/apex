<?php namespace Acme\Composers\front;

use Acme\Models\Page;
use Cache;
use Session;

/**
* 
*/
class BaseFrontEndComposer
{
    protected $key;
    public $langId;

    function __construct()
	{
        $this->key = 'langId';
		if (!Session::has($this->key)) {
			Session::put($this->key,Cache::get('setting_default_language'));
		}
        $this->lang_id = Session::get($this->key);
    }

    /**
 * @return mixed
 */

    protected function getPageSingleContent($url)
    {

        $langId = Session::get($this->key);
//        Cache::forget("page_{$langId}_{$url}");
        return $data = Cache::rememberForever("page_{$langId}_{$url}", function()use($url){

            $page = Page::whereUrl($url)->with(['content' => function ($query) {
                $query->whereLang_id(Session::get('langId'))->whereStatus('published')->whereContent_type('single');
            }, 'media'])->first();

            if($page->content->first())
            {
                $content = $page->content->first()->content;
            }else{
                $content="";
            }

            $data['layout'] = $page->layout;
            $data['medias'] = $page->media;
            $data['contents'] = $content;
            return $data;
        });


    }

    /**
     * @return string
     */
    protected function getTheStructuralContentsWithCurrentLanguage($url, $identifier)
    {
        $langId = Session::get($this->key);
        $var = [
            'url'=>$url,
            'identifier'=>$identifier
        ];

//        Cache::forget("page_{$langId}_{$url}_{$identifier}");
         $data = Cache::rememberForever("page_{$langId}_{$url}_{$identifier}", function()use($var){
            $page = Page::with(['content' => function ($query) {
                $query->whereLang_id(Session::get('langId'))->whereContent_type('structural')->whereStatus('published');
            }])->whereUrl($var['url'])->first();

            $data['contents'] = $this->getContentWithIdentifierIs($page, $var['identifier']);
            return $data;
        });
        return $data;


    }

    /**
     * @param $page
     * @param $contents
     * @return string
     */
    private function getContentWithIdentifierIs($page, $identifier)
    {
        $content = "";
        if (count($page->content) > 0) {
            foreach ($page->content as $contents) {
                if ($contents->identifier == $identifier) {
                    $content = $contents->content;
                }
            }
        }
        return $content;
    }
}