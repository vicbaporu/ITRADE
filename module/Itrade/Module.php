<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Itrade;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {

        //Recepción de los Eventos
        $eventManager   = $e->getApplication()->getEventManager();

        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        //Llamada al Listener de Templetes
        $themeListener   = new \Shared\CustomListener\TemplateMapListener();
        $themeListener->attach($eventManager);
        
        //Llamada al Listener de Idioma
        $langListener   = new \Shared\CustomListener\LangListener();
        $langListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    'Website' => __DIR__ . '/src/' . 'Website',
                    'Admin' => __DIR__ . '/src/' . 'Admin',
                    'Client' => __DIR__ . '/src/' . 'Client',
                    'Shared' => __DIR__ . '/src/' . 'Shared',
                ),
            ),
        );
    }
}
