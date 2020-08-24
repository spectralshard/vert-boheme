<?php 
class Cms5f440e95d6475800885771_53cbd3d37f688222b1458abbd13ad63bClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
    $this->page->title = $this->post->title;
}
}
