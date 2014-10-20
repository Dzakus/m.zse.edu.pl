<?php 
class NewsHandler
{
    public function handle()
    {
        // 
    }

    public function addViews( $news )
    {
        if ( !Cookie::get($news->id) ) {
        $news->czytano = $news->czytano + 1;
        $news->save();
        Cookie::queue($news->id, true, 60);
    }
    }
}