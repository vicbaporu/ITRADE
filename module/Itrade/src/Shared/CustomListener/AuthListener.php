<?php

namespace Shared\CustomListener;

use Zend\Mvc\Router\RouteMatch;

use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;

use Zend\Code\Reflection\ClassReflection;
use Shared\Session\AouthSession;

class AuthListener implements ListenerAggregateInterface {
    
    protected $listeners = array();
    
    /*
     * Enlace con el listener de la aplicacion con la accion principal de onDispatch y maxima prioridad 1000
     */
    public function attach(EventManagerInterface $events, $priority = 1000){
        $this->listeners[] = $events->attach(MvcEvent::EVENT_DISPATCH, array($this, 'onDispatch'), $priority);
    }
    
    /*
     * Elimina todos los eventos para que se use el onDispatch
     */
    public function detach(EventManagerInterface $events)
    {
        foreach($this->listeners as $index => $listener){
            if($events->detach($listener)){
                unset($this->listeners[$index]);
            }
        }
    }
    
    /*
     * Verifica si existe una sesión con datos:
     *  Si no existe redirige al login
     *  Si existe permite ingresar
     * 
     * Excluye las rutas publicas de la verificación
     */
    public function onDispatch (MvcEvent $e){
       
        $matches = $e->getRouteMatch();        
        $AouthSession  = new AouthSession();
        
        $controller = $matches->getParam('controller');
        
        $module = explode('\\', $controller); $module = $module[0];
        $action = $matches->getParam('action');

        define("redirect", $matches->getMatchedRouteName());
        
        switch ($module){
            case 'Admin':{
              
                /* Rutas excluidas de verificación */
                $excludeControllers = array(
                    'Admin\Login\Controller\Login',
                );
                
                
                /* Verificamos si es una ruta excluida ó si hay una sesión activa */
                if (in_array( $controller , $excludeControllers, true ) || $AouthSession->isActive() ) {  
                    return;
                }else{
                   
                    $matches->setParam('controller', 'Login\Controller\Login');
                    $matches->setParam('action', 'index');
                }
                
            }
        }
        
        return;
        
        
        
         
        
        
        
        
        

    }

}