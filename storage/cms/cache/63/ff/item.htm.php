<?php 
class Cms5f44185de675c173965348_ecaf45017809c58e5fca271a8c0950e8Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if ($this->post)
    $this->page->title = $this->post->title;
}
}
