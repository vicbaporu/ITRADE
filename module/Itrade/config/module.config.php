<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Itrade;

return array(
    'router' => array(
        'routes' => array(
            /*
             * ADMIN
             */
            'client' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route' => 'clientes.itrade',
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'home' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/',
                            'defaults' => array(
                                'controller'    => 'Client\Controller\Index',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                ),
            ),
            /*
             * ADMIN
             */
            'admin' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route' => 'admin.itrade',
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'home' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/',
                            'defaults' => array(
                                'controller'    => 'Admin\Controller\Index',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                ),
            ),
            /*
             * WEBSITE
             */
            'website' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route' => 'itrade',
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'home' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:lang]',
                            'defaults' => array(
                                'controller'    => 'Website\Controller\Index',
                                'action'        => 'index',
                                'lang'          => 'es',
                            ),
                            'constraints' => array(
                                'lang' => 'es|en',
                            ),
                        ),
                    ),
                    
                    //Ruta servicios
                    'servicios' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/servicios[/:lang]',
                            'route'    => '/servicios[/:lang]',
                            'defaults' => array(
                                'controller'    => 'Website\Controller\Servicios',
                                'action'        => 'index',
                                'lang'          => 'es',
                            ),
                            'constraints' => array(
                                'lang' => 'es|en',
                            ),
                        ),
                    ),

                    //Ruta de contacto
                    'contacto' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:lang]/contacto[/:servicio]',
                            'defaults' => array(
                                'controller'    => 'Website\Controller\Contacto',
                                'action'        => 'index',
                                'lang'          => 'es',
                            ),
                            'constraints' => array(
                                'lang' => 'es|en',
                            ),
                        ),
                    ),

                    //Ruta de login
                    'login' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[/:lang]/login',
                            'defaults' => array(
                                'controller'    => 'Website\Controller\Login',
                                'action'        => 'index',
                                'lang'          => 'es',
                            ),
                            'constraints' => array(
                                'lang' => 'es|en',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_MX',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            /*
             * Website
             */
            'Website\Controller\Index' => 'Website\Controller\IndexController',
            
            'Website\Controller\Servicios' => 'Website\Controller\ServiciosController',

            'Website\Controller\Contacto' => 'Website\Controller\ContactoController',

            'Website\Controller\Login' => 'Website\Controller\LoginController',
            /*
             * ADMIN
             */
            'Admin\Controller\Index' => 'Admin\Controller\IndexController',
            /*
             * CLIENT
             */
            'Client\Controller\Index' => 'Client\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '\..\view\layout\layout.phtml',
            'layout/login'            => __DIR__ . '\..\view\client\layout\layout.phtml',
            'application/index/index' => __DIR__ . '\..\view\application\index\index.phtml',
            'error/404'               => __DIR__ . '\..\view\error\404.phtml',
            'error/index'             => __DIR__ . '\..\view\error\index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
