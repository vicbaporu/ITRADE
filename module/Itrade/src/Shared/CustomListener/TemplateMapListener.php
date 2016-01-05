<?php 

namespace Shared\CustomListener;
 
use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\Code\Reflection\ClassReflection;

class TemplateMapListener implements ListenerAggregateInterface
{
   
    protected $listeners = array();
    public function attach(EventManagerInterface $events)
    {
       $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, array($this, 'onDispatch'),900);
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
        $controller_of_route = $controller_params['controller'];  

        $section = new classReflection($controller_of_route.'Controller');
        

        $section = $section ->getFileName();   
        $section = explode('/src/',  $section);
        $section = explode("/",$section[1]);

                
       
        $template_map=$e->getApplication()->getServiceManager()->get('viewtemplatemapresolver');
       
        
        //$section[0] = 'Website';
        switch ($section[1])
        {
            case 'Website':
            
            {
                $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'\..\..\..\view\website\layout\layout.phtml',
                        'error/404'          => __DIR__.'\..\..\..\view\website\theme\layout\error\404.phtml',
                        'error/index'        => __DIR__.'\..\..\..\view\website\theme\layout\error\index.phtml',                                                        
                    ));
                break;
            }
            case 'Admin':{
               
                $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'\..\..\..\view\admin\layout\layout.phtml',
                        'error/404'          => __DIR__.'\..\..\..\view\admin\theme\layout\error\404.phtml',
                        'error/index'        => __DIR__.'\..\..\..\view\admin\theme\layout\error\index.phtml',
                                                                              
                ));
                break;
            }
            case 'Client':{
                $template_map->merge(
                    array(
                        'layout/layout'      => __DIR__.'\..\..\..\view\client\layout\layout.phtml',
                        'error/404'          => __DIR__.'\..\..\..\view\client\theme\layout\error\404.phtml',
                        'error/index'        => __DIR__.'\..\..\..\view\client\theme\layout\error\index.phtml',
                                                                              
                ));
                break;
            }

        }       
         
    }
      
}