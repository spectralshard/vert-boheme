<?php 
class Cms5e8c85541d73c902057075_cfc325aa464dc9ead24bfc6c919ab278Class extends Cms\Classes\PageCode
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
