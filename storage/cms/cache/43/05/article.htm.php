<?php 
class Cms5f44164b76e72391886154_59533cfc9464cc355a4f0b08df9335dcClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
    $this->page->title = $this->post->title;
}
}
