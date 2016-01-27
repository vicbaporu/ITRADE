<?php 

namespace Shared\CustomListener;
 
use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\Code\Reflection\ClassReflection;

class LangListener implements ListenerAggregateInterface
{
   
    protected $listeners = array();
    public function attach(EventManagerInterface $events)
    {
       $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, array($this, 'onDispatch'),800);
    }
   
    public function detach(EventManagerInterface $events)
    {
       foreach ($this->listeners as $index => $listener) {
    	
           if ($events->detach($listener)) {
                unset($this->listeners[$index]);
            }
        } 
       
    }
    
    public function onDispatch(MvcEvent $e)
    {
        
    	$controller_params = $e->getRouteMatch()->getParams();
        
        if(isset($controller_params['lang'])){
            
            $lang = $controller_params['lang'];
            define('lang', $lang);
            $translator = $e->getApplication()->getServiceManager()->get('translator');
        
            if($lang == 'en'){
                $translator->setLocale($lang.'_US');
            }
        }else{
            $translator = $e->getApplication()->getServiceManager()->get('translator');
            $translator->setLocale('en_US');
        }
        
        

    }
      
}