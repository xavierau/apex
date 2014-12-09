<?php namespace Acme\Composers\front;



// use Acme\Services\PageServices;
use DB;
use Cache;
/**
*
*/
class ImmigrationComposer extends BaseFrontEndComposer
{

	public function compose($view)
	{
    $viewData = $view->getData();
		if ($country = $viewData['country']) {
      $result = DB::table('immigration_content')->whereCountry($country)->first();
      $type = "country";
      if ($result==null) {
        $result = DB::table('immigration_content')->whereType('default')->first();
        $type="default";
      }
      $content = $result->content;
    }else{
      $result = DB::table('immigration_content')->whereType('default')->first();
      // dd($result);
      $content = $result->content;
      $type="default";
    }

  
		$view->withContent($content)->withType($type);
	}

}