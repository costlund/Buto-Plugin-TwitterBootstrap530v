<?php
class PluginTwitterBootstrap530v{
  public function widget_include($data){
    /**
     * Tell other plugin that Bootstrap 4 is included.
     */
    $_SESSION['plugin']['twitter']['bootstrap530v']['include'] = true;
    /**
     * 
     */
    wfPlugin::includeonce('wf/array');
    $data = new PluginWfArray($data);
    $element = array();
    $element[] = $this->getElementText("\n<!-- PluginTwitterBootstrap530v, Start -->\n");
    if($data->get('data/meta')){
      $element[] = $this->getElementMetaCharset();
      $element[] = $this->getElementMetaViewport();
    }
    if($data->get('data/css')){
      $element[] = $this->getElementCss();
      $element[] = $this->getElementCssStyleModal();
    }
    if($data->get('data/jquery')){
      $element[] = $this->getElementJsJquery();
    }
    if($data->get('data/popper')){
      $element[] = $this->getElementJsPopper();
    }
    if($data->get('data/js')){
      $element[] = $this->getElementJsBootstrap();
    }
    $element[] = $this->getElementStyleWebmaster();
    $element[] = $this->getElementStyleContent();
    $element[] = $this->getElementModalFix();
    $element[] = $this->getElementText("\n<!-- PluginTwitterBootstrap530v, End -->\n");
    wfDocument::renderElement($element);
  }
  private function getElementText($text){
    return wfDocument::createHtmlElement('text', $text);
  }
  private function getElementMetaCharset(){
    return wfDocument::createHtmlElement('meta', null, array('charset' => 'utf-8'), array('i18n' => false));
  }
  private function getElementMetaViewport(){
    return wfDocument::createHtmlElement('meta', null, array('name' => 'viewport', 'content' => "width=device-width, user-scalable=no"), array('i18n' => false));
  }
  private function getElementCss(){
    return wfDocument::createHtmlElement('link', null, array('rel' => 'stylesheet', 'href' => '/plugin/twitter/bootstrap530v/css/bootstrap.min.css', 'id' => 'PluginTwitterBootstrap530v'));
  }
  private function getElementCssStyleModal(){
    return wfDocument::createHtmlElement('style', "@media (min-width: 700px) {.modal-xl { max-width: 90% !important; } }");
  }
  private function getElementJsBootstrap(){
    return wfDocument::createHtmlElement('script', null, array('src' => '/plugin/twitter/bootstrap530v/js/bootstrap.min.js'));
  }
  private function getElementJsJquery(){
    return wfDocument::createHtmlElement('script', null, array('src' => '/plugin/twitter/bootstrap530v/jquery/jquery_3.3.1.js'));
  }
  private function getElementJsPopper(){
    return wfDocument::createHtmlElement('script', null, array('src' => '/plugin/twitter/bootstrap530v/popper/2.11.6_popper.min.js'));
  }
  private function getElementStyleWebmaster(){
    return wfDocument::createHtmlElement('style', ".webmaster{}.webmaster-border{border:solid 1px red !important}.webmaster-text{color:red !important}");
  }
  private function getElementStyleContent(){
    return wfDocument::createHtmlElement('style', ".content{}.content-parentheses::before{content: '(' !important}.content-parentheses::after{content: ')' !important}.content-colon::after{content: ':' !important}");
  }
  private function getElementModalFix(){
    wfPlugin::includeonce('wf/yml');
    $e = new PluginWfYml(__DIR__.'/element/modal_fix.yml');
    return $e->get();
  }
}
