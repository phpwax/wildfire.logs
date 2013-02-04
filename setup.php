<?
WaxEvent::add("cms.destruct", function(){
  $controller = WaxEvent::data();
  $log = new WildfireLog;
  $log->update_attributes(array('controller'=>$controller->controller,
                          'action'=>$controller->action,
                          'page'=>Request::get("id"),
                          'param_string'=>serialize($_REQUEST),
                          'language'=>Request::param('lang'),
                          'wildfire_user_id'=>($controller->current_user)?$controller->current_user->primval:""
                          ));
});
?>