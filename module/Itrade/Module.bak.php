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
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
//            'Zend\Loader\StandardAutoloader' => array(
//                'namespaces' => array(
//                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
//                    'Catalogos' => __DIR__ . '/src/'  .'Catalogos',
//                    'Compras' => __DIR__ . '/src/'  .'Compras',
//                    'Login' => __DIR__ . '/src/'  .'Login',
//                    'Shared' => __DIR__ . '/src/'  .'Shared',
//                    'Inventario' => __DIR__ . '/src/'  .'Inventario',
//                    'Egresos' => __DIR__ . '/src/'  .'Egresos',
//                    'Empleados' => __DIR__ . '/src/'  .'Empleados',
//                    'Pacientes' => __DIR__ . '/src/'  .'Pacientes',
//                    'Agenda' => __DIR__ . '/src/'  .'Agenda',
//                    'Ventas' => __DIR__ . '/src/'  .'Ventas',
//                    'Configuracion' => __DIR__ . '/src/'  .'Configuracion',
//                    'Reportes' => __DIR__ . '/src/'  .'Reportes',
//                    
//                ),
//            ),
        );
    }
}
