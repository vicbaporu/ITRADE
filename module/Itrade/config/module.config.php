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
                    /*
                     * LOGIN
                     */
                    'login' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/login[/:action]',
                            'defaults' => array(
                                'controller'    => 'Login\Controller\Login',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    /*
                     * CATALOGOS
                     */
                    'catalogo' => array(
                        'type'    => 'literal',
                        'options' => array(
                            'route'    => '/catalogo',
                        ),
                        'may_terminate' => false,
                        'child_routes' => array(
                            'empleados' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/empleados[/:action][/:id][/]',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Catalogo\Controller\Empleado',
                                        'action'        => 'index',
                                    ),
                                ),
                            ),
                            'proveedores' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/proveedores[/:action][/:id][/]',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Catalogo\Controller\Proveedor',
                                        'action'        => 'index',
                                    ),
                                ),
                            ),
                            'gastos' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/gastos[/:action][/:id][/]',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Catalogo\Controller\Gastos',
                                        'action'        => 'index',
                                    ),
                                    'constraints' => array(
                                        'action' => 'index|nuevo|editar|serverside|eliminar',
                                        'id' => '[0-9]*',
                                    ),
                                    
                                ),
                            ),
                            'catergoria-gastos' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/categorias-gastos[/:action][/:id][/]',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Catalogo\Controller\Categoriagastos',
                                        'action'        => 'index',
                                    ),
                                    'constraints' => array(
                                        'action' => 'index|nuevo|editar|serverside|eliminar',
                                        'id' => '[0-9]*',
                                    ),
                                    
                                ),
                            ),
                            'servicios' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/servicios[/:action][/:id][/]',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Catalogo\Controller\Servicios',
                                        'action'        => 'index',
                                    ),
                                    'constraints' => array(
                                        'action' => 'index|nuevo|editar|serverside|eliminar',
                                        'id' => '[0-9]*',
                                    ),
                                    
                                ),
                            ),
                        ),
                    ),
                    'clientes' => array(
                        'type'    => 'literal',
                        'options' => array(
                            'route'    => '/clientes',
                            'defaults' => array(
                                'controller'    => 'Admin\Clientes\Controller\Clientes',
                                'action'        => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'serverside' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/serverside',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'serverside',
                                    ),
                                ),
                            ),
                            'nuevo' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/nuevo',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'nuevo',
                                    ),
                                ),
                            ),
                            'editar' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/ver/:id',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'editar',
                                    ),
                                ),
                                'may_terminate' => true,
                                'child_routes' => array(
                                    'proveedores' => array(
                                        'type'    => 'Segment',
                                        'options' => array(
                                            'route'    => '/proveedores',
                                        ),
                                        'may_terminate' => true,
                                        'child_routes' => array(
                                            'nuevo' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/nuevo',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Clientes',
                                                        'action' => 'proveedornuevo',
                                                    ),
                                                ),
                                            ),
                                            'editar' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/editar/:idproveedor',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Clientes',
                                                        'action' => 'proveedoreditar',
                                                    ),
                                                ),
                                            ),
                                            'eliminar' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/eliminar/:idproveedor',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Clientes',
                                                        'action' => 'proveedoreliminar',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    'clientes' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/clientes',
                                        ),
                                        'may_terminate' => true,
                                        'child_routes' => array(
                                            'nuevo' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/nuevo',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Proveedorclientes',
                                                        'action' => 'nuevo',
                                                    ),
                                                ),
                                            ),
                                            'serverside' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/serverside',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Proveedorclientes',
                                                        'action' => 'serverside',
                                                    ),
                                                ),
                                            ),
                                            'editar' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/editar/:idclientecliente',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Proveedorclientes',
                                                        'action' => 'editar',
                                                    ),
                                                ),
                                            ),
                                            'eliminar' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/eliminar/:idclientecliente',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Proveedorclientes',
                                                        'action' => 'eliminar',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                    //
                                    'expedientes' => array(
                                        'type' => 'Segment',
                                        'options' => array(
                                            'route' => '/expedientes',
                                        ),
                                        'may_terminate' => true,
                                        'child_routes' => array(
                                            'nuevo' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/nuevo',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Expedientes',
                                                        'action' => 'nuevo',
                                                    ),
                                                ),
                                            ),
                                            'editar' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/ver/:idexpediente',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Expedientes',
                                                        'action' => 'editar',
                                                    ),
                                                ),
                                                'may_terminate' => true,
                                                'child_routes' => array(
                                                    'dropzone' => array(
                                                        'type' => 'Segment',
                                                        'options' => array(
                                                            'route' => '/dropzone',
                                                            'defaults' => array(
                                                                'controller' => 'Admin\Clientes\Controller\Expedientes',
                                                                'action' => 'dropzone',
                                                            ),
                                                        ),
                                                    ),
                                                    'nuevocargo' => array(
                                                        'type' => 'Segment',
                                                        'options' => array(
                                                            'route' => '/nuevocargo',
                                                            'defaults' => array(
                                                                'controller' => 'Admin\Clientes\Controller\Expedientes',
                                                                'action' => 'nuevocargo',
                                                            ),
                                                        ),
                                                    ),
                                                    'getcargos' => array(
                                                        'type' => 'Segment',
                                                        'options' => array(
                                                            'route' => '/getcargos',
                                                            'defaults' => array(
                                                                'controller' => 'Admin\Clientes\Controller\Expedientes',
                                                                'action' => 'getcargos',
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'serverside' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/serverside',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Expedientes',
                                                        'action' => 'serverside',
                                                    ),
                                                ),
                                            ),
                                            'getproveedores' => array(
                                                'type' => 'Segment',
                                                'options' => array(
                                                    'route' => '/getproveedores',
                                                    'defaults' => array(
                                                        'controller' => 'Admin\Clientes\Controller\Expedientes',
                                                        'action' => 'getproveedores',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'validateajax' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/validateajax',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'validateajax',
                                    ),
                                ),
                            ),
                            'changepassword' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/changepassword',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'changepassword',
                                    ),
                                ),
                            ),
                            'selectfile' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/selectfile',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'selectfile',
                                    ),
                                ),
                            ),
                            
                            'legaldropzone' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/legaldropzone',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'legaldropzone',
                                    ),
                                ),
                            ),
                            'filesdropzone' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/filesdropzone',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'filesdropzone',
                                    ),
                                ),
                            ),
                            'legaldropzonedownload' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/legaldropzonedownload',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'legaldropzonedownload',
                                    ),
                                ),
                            ),
                            'filesdropzonedownload' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/filesdropzonedownload',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'filesdropzonedownload',
                                    ),
                                ),
                            ),
                            'legaldropzonedelete' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/legaldropzonedelete',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'legaldropzonedelete',
                                    ),
                                ),
                            ),
                            'filesdropzonedelete' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/filesdropzonedelete',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'filesdropzonedelete',
                                    ),
                                ),
                            ),
                            'proveedorserverside' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/proveedorserverside',
                                    'defaults' => array(
                                        'controller'    => 'Admin\Clientes\Controller\Clientes',
                                        'action'        => 'proveedorserverside',
                                    ),
                                ),
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
            
             //CATALOGO

            'Admin\Catalogo\Controller\Empleado' => 'Admin\Catalogo\Controller\EmpleadoController',
            'Admin\Catalogo\Controller\Proveedor' => 'Admin\Catalogo\Controller\ProveedorController',
            'Admin\Catalogo\Controller\Gastos' => 'Admin\Catalogo\Controller\GastosController',
            'Admin\Catalogo\Controller\Categoriagastos' => 'Admin\Catalogo\Controller\CategoriagastosController',
            'Admin\Catalogo\Controller\Servicios' => 'Admin\Catalogo\Controller\ServiciosController',
             
             //LOGIN
            'Login\Controller\Login' => 'Login\Controller\LoginController',
            
            //CLIENTES
            'Admin\Clientes\Controller\Clientes' => 'Admin\Clientes\Controller\ClientesController',
            'Admin\Clientes\Controller\Proveedorclientes' => 'Admin\Clientes\Controller\ProveedorclientesController',
            'Admin\Clientes\Controller\Expedientes' => 'Admin\Clientes\Controller\ExpedientesController',
                         
            'Admin\Controller\Index' => 'Admin\Controller\IndexController',
            
            
            /*
             * CLIENT
             */
            'Client\Controller\Index' => 'Client\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
        //'layout/layout'         => __DIR__ . '/../view/apps/theme/layout/launched.phtml',
        //'website/index/index'   => __DIR__ . '/../view/website/index/index.phtml',
        'error/404'             => __DIR__ . '/../view/website/theme/layout/launched/errors/404.phtml',
        'error/index'           => __DIR__ . '/../view/website/theme/layout/launched/errors/index.phtml',
        ),
        'template_path_stack' => array(
            'Website' =>  __DIR__ . '/../view/',
            'Admin' =>  __DIR__ . '/../view/admin/',
           // 'Admin' => __DIR__ . '/../view/admin',
         //   'Website' => __DIR__ . '/../view',

        ),
    ),
);
