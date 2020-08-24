<?php 
class Cms5f441bdf1ab97498126269_a5364a5ded6b4d9fbbb595745f4962cfClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the category name
    if ($this->category)
        $this->page->title = $this->category->name;
}
}
