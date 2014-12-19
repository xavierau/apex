<?php
class PageContent extends \Eloquent {
	protected $fillable = ['title', 'lang_id', 'page_id'];
    protected $table = "page_content";

    public function page()
    {
        return $this->belongsTo('Page');
    }

    public function addNewContent($page, $input)
    {
        $data = [];
        $data['page_id'] = $page->id;
        foreach($input['title'] as $lang_id => $title){
            $data['title'] = $title;
            $data['lang_id'] = $lang_id;
            PageContent::create($data);
        }
    }

    public function deleteContent($page)
    {
        PageContent::where('page_id','=',$page->id)->delete();
    }

    public function updateContent($id, $input)
    {

        $contents = PageContent::where('page_id','=',$id)->get();
        foreach ($input['title'] as $lang_id => $title){
            foreach ($contents as $content){
                if($content->lang_id == $lang_id)
                {
                    $content->title = $title;
                    $content->save();
                }
            }
        }
    }
}