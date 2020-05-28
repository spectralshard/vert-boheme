<?php 
class Cms5ecfda6677865854683957_701031e280b1287633a1029f10bdabbdClass extends Cms\Classes\PageCode
{
public function onEnd()
{
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
$this->page->title = $this['item']->item->title;
$this->page->meta_title = $this['item']->item->title;
$this->page->meta_description = 'Portfolio d\'Amélie Cauchon Simard - fleuriste à Laval';
$this['image_url'] = $this['item']->item->images->first()->path;
}
}
