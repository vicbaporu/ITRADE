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
    	

        $section = new classReflection($controller_of_route);
        
        $section = $section ->getFileName();      
        $section = explode("/src/",  $section);      
        $section = explode("/",$section[1]);
        
        $template_map=$e->getApplication()->getServiceManager()->get('viewtemplatemapresolver');

        switch ($section[0]){
    		case 'Apps':{
    			
    			$template_map->merge(
    					array(
                                                        'layout/layout'      => __DIR__.'/../../../view/apps/theme/layout/launched/launched.phtml',
    							'error/404'          => __DIR__.'/../../../view/apps/theme/layout/launched/errors/404.phtml',
    							'error/index'        => __DIR__.'/../../../view/apps/theme/layout/launched/errors/index.phtml',
                               
                                // analizar si la ubicacion para esto lo correcto es aqui.
                                'dashboard_user_area'           => __DIR__ . '/../../../view/apps/theme/layout/launched/dashboard-viewhelper/user-area.phtml',
                                'dashboard_search_area'         => __DIR__ . '/../../../view/apps/theme/layout/launched/dashboard-viewhelper/search-area.phtml',
                                'dashboard_top_menu'            => __DIR__ . '/../../../view/apps/theme/layout/launched/dashboard-viewhelper/top-menu.phtml',
                                'dashboard_app_menu'            => __DIR__ . '/../../../view/apps/theme/layout/launched/dashboard-viewhelper/app-menu.phtml',
                                'dashboard_notification_area'   => __DIR__ . '/../../../view/apps/theme/layout/launched/dashboard-viewhelper/notification-area.phtml',
                                'dashboard_footer'              => __DIR__ . '/../../../view/apps/theme/layout/launched/dashboard-viewhelper/footer.phtml',                                                                                 
                        ));
    			break;
    		}
    		case 'Auth':{
    			$template_map->merge(
    					array(
                                'layout/layout'      => __DIR__.'/../../../view/auth/theme/layout/launched/launched.phtml',
                                'error/404'          => __DIR__.'/../../../view/auth/theme/layout/launched/errors/404.phtml',
                                'error/index'        => __DIR__.'/../../../view/auth/theme/layout/launched/errors/index.phtml',
                            ));
                       
    			break;
    		}
           

    		case 'Templete':{
                $template_map->merge(
                        array(
                                'layout/layout'      => __DIR__.'/../../../view/templete/theme/layout/launched/launched.phtml',
                                'error/404'          => __DIR__.'/../../../view/templete/theme/layout/launched/errors/404.phtml',
                                'error/index'        => __DIR__.'/../../../view/templete/theme/layout/launched/errors/index.phtml',

                                // analizar si la ubicaci�n para esto lo correcto es aqu�.
                                'dashboard_user_area'           => __DIR__ . '/../../../view/templete/theme/layout/launched/dashboard-viewhelper/user-area.phtml',
                                'dashboard_search_area'         => __DIR__ . '/../../../view/templete/theme/layout/launched/dashboard-viewhelper/search-area.phtml',
                                'dashboard_top_menu'            => __DIR__ . '/../../../view/templete/theme/layout/launched/dashboard-viewhelper/top-menu.phtml',
                                'dashboard_app_menu'            => __DIR__ . '/../../../view/templete/theme/layout/launched/dashboard-viewhelper/app-menu.phtml',
                                'dashboard_notification_area'   => __DIR__ . '/../../../view/templete/theme/layout/launched/dashboard-viewhelper/notification-area.phtml',
                                'dashboard_footer'              => __DIR__ . '/../../../view/templete/theme/layout/launched/dashboard-viewhelper/footer.phtml',
                            ));
                break;
            }
            case 'Website':{
                $template_map->merge(
                        array(
                                'layout/layout'      => __DIR__.'/../../../view/website/theme/layout/launched/launched.phtml',
                                'error/404'          => __DIR__.'/../../../view/website/theme/layout/launched/errors/404.phtml',
                                'error/index'        => __DIR__.'/../../../view/website/theme/layout/launched/errors/index.phtml',

                                'website_header'   => __DIR__ . '/../../../view/website/theme/layout/launched/viewhelpers/header.phtml',
                                'website_header_menu'   => __DIR__ . '/../../../view/website/theme/layout/launched/viewhelpers/header_menu.phtml',
                                'website_footer'   => __DIR__ . '/../../../view/website/theme/layout/launched/viewhelpers/footer.phtml',
                            ));
                break;
            }
    	}    	
         
    }
      
}