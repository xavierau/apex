<?php namespace Acme\Composers\front;

use Cache;

/**
*
*/
class ImmigrationComposer extends BaseFrontEndComposer
{

	public function compose($view)
	{
        $viewData = $view->getData();

		if ($country = $viewData['country'])
        {
            $type = 'country';
            $data  = $this->getTheStructuralContentsWithCurrentLanguage('immigration', $country);
        }else{
            $type="default";
            $data = $this->getPageSingleContent('immigration');
        }
		$view->withContent($data['contents'])->withType($type);
	}

}