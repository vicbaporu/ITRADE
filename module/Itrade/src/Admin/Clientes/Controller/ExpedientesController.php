<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Clientes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ExpedientesController extends AbstractActionController
{
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //EL MAPEO DE NUESTRA TABALA
            $table_map = array(
                0 => 'expediente_folio',
                1 => 'expediente_fechainicio',
                2 => 'expediente_tipo',
                3 => 'expediente_consignatario',
                4 => 'expediente_embarcador',
                5 => 'expediente_estatus',
            );
                        
            $post_data = $request->getPost();
            
            //NUESTRA QUERY
            $query = new \ExpedienteQuery();
            $query->filterByIdcliente($post_data['idcliente']);
            $query->joinCliente()->withColumn('cliente_razonsocial');
            $query->joinProveedorcliente()->withColumn('proveedorcliente_nombre');
            
            //ORDER 
            if(isset($post_data['order'])){
                $order = $table_map[$post_data['order'][0]['column']];
                $dir = $post_data['order'][0]['dir'];
                $query->orderBy($order, $dir);
            }else{
                $query->orderByIdcliente(\Criteria::DESC);
            }

            if(!empty($post_data['search']['value'])){
                
                $search = $post_data['search']['value'];

                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('expediente.expediente_tipo', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('cliente.cliente_razonsocial', '%'.$search.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('proveedorcliente.proveedorcliente_nombre', '%'.$search.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('expediente.expediente_estatus', '%'.$search.'%', \Criteria::LIKE);
                $c5= $c->getNewCriterion('expediente.expediente_folio', '%'.$search.'%', \Criteria::LIKE);
                
                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5);

                $query->addAnd($c1);
               
            }

            //EL TOTAL DE LA BUSQUEDA
            $recordsFiltered = $query->count();
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
             //DAMOS EL FORMATO CORRECTO
            $data = array();
            $value = new \Expediente();
            foreach ($query->find() as $value){
                $tmp['DT_RowId'] = $value->getIdexpediente();
                $tmp['expediente_folio'] = $value->getExpedienteFolio();
                $tmp['expediente_fechainicio'] = $value->getExpedienteFechainicio('d/m/Y');
                if($value->getExpedienteTipo() == 'importacion'){
                    $tmp['expediente_tipo'] = ucfirst('Importación');
                    $tmp['expediente_consignatario'] = $value->getCliente()->getClienteRazonsocial();
                    $tmp['expediente_embarcador']    = $value->getProveedorcliente()->getProveedorclienteTaxid();
                }else{
                    $tmp['expediente_tipo'] = ucfirst('Exportación');
                    $tmp['expediente_consignatario']    = $value->getProveedorcliente()->getProveedorclienteNombre();
                    $tmp['expediente_embarcador'] = $value->getCliente()->getClienteRazonsocial();
                }
                $tmp['expediente_estatus'] = ucfirst($value->getExpedienteEstatus());
                $tmp['expediente_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/clientes/ver/'.$value->getIdcliente().'/expedientes/ver/'.$value->getIdexpediente()
                        .'"><i class="fa fa-pencil"></i></a><a class="delete" data-toggle="tooltip" data-placement="left" title="Eliminar" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>';
                $data[] = $tmp;
 
            }  
            
            //El arreglo que regresamos
            $json_data = array(
                "draw"            => (int)$post_data['draw'],
                "recordsFiltered" => $recordsFiltered,
                "data"            => $data,
                "page"            => $post_data['url_params']['page']
            );

            
            return $this->getResponse()->setContent(json_encode($json_data));

        }
    }
    
    public function editarAction(){
        
        $request = $this->getRequest();
        
        $idcliente = $this->params()->fromRoute('id');
        $idexpediente = $this->params()->fromRoute('idexpediente');
        
        if($request->isPost()){}
        
        $exist = \ExpedienteQuery::create()->filterByIdexpediente($idexpediente)->exists();
        
        if($exist){
            
            $entity = \ExpedienteQuery::create()->findPk($idcliente);
            $form = new \Admin\Clientes\Form\ExpedienteForm($idcliente);
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $form->get('expediente_fechainicio')->setValue($entity->getExpedienteFechainicio('d/m/Y'));
            $form->get('expediente_fechafin')->setValue($entity->getExpedienteFechafin('d/m/Y'));
            
            //FACTURACION
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByIdexpediente($entity->getIdexpediente())->groupByIdgastofacturacion()->withColumn('SUM(expedientegasto_monto)','SUMA')->find();
            
            //damos el formato para la tabla
            $expedientes_gastos_array = array();
            $expediente_gasto = new \Expedientegasto();
            foreach ($expedientes_gastos as $expediente_gasto){
                //$tmp[]
            }
            
            $cliente = $entity->getCliente();
            $view_model = new ViewModel();
            $view_model->setTemplate('admin/clientes/expedientes/editar');
            $view_model->setVariables(array(
                'entity' => $entity,
                'form' => $form,
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'cliente' => $cliente,
            ));
            return $view_model;
        }else{
             return $this->redirect()->toUrl('/clientes/ver/'.$idcliente.'?active=expedientes');
        }
     
    }
    
    public function nuevoAction(){
       
        $request = $this->getRequest();
        $idcliente = $this->params()->fromRoute('id');
        $cliente = \ClienteQuery::create()->findPk($idcliente);
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $entity = new \Expediente();
            
            foreach($post_data as $key => $value){
                if(\ExpedientePeer::getTableMap()->hasColumn($key) && !empty($value) && $key != 'cliente_cumpleanios'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //LA FECHA DE APERTURA
            $entity->setExpedienteFechainicio(new \DateTime());
            //EL ESTATUS
            $entity->setExpedienteEstatus('abierto');
            
            $date = new \DateTime();
            
            $entity->save();
            
            //CREAMOS EL FOLIO
            $folio = 'ITR'.$date->format('m').$date->format('y');
            if((int)$entity->getIdexpediente() < 10){
                $folio.='0';
            }
            $folio.=$entity->getIdexpediente();
            
            $entity->setExpedienteFolio($folio);
            $entity->save();

            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$idcliente.'/expedientes/ver/'.$entity->getIdexpediente());

        }
        
        $form = new \Admin\Clientes\Form\ExpedienteForm($idcliente);
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/clientes/expedientes/nuevo');
        $view_model->setVariable('form', $form);
        $view_model->setVariable('cliente', $cliente);
        return $view_model;
 
    }
    
    public function getproveedoresAction(){
        
        $type = $this->params()->fromQuery('type');
        $idcliente = $this->params()->fromQuery('idcliente');
        
        $result = array();
        
        if($type == 'importacion'){
            
            $result = \ProveedorclienteQuery::create()->filterByIdcliente($idcliente)->filterByproveedorclienteTipo('proveedor')->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
        }elseif($type == 'exportacion'){
            $result = \ProveedorclienteQuery::create()->filterByIdcliente($idcliente)->filterByproveedorclienteTipo('cliente')->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
        }
        
        return $this->getResponse()->setContent(json_encode($result));
        
        
    }
    
    public function dropzoneAction(){
        
        $idexpediente = $this->params()->fromRoute('idexpediente');
        
        $storeFolder = $_SERVER['DOCUMENT_ROOT'].'/files/expedientes';
        
        
        
        
       echo '<pre>';var_dump($idexpediente);echo '</pre>';exit();
    }
    
    public function nuevocargoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            
            $auth = new \Shared\Session\AouthSession();
            $auth = $auth->getData();
            
            $entity = new \Expedientegasto();
               
                     
            foreach($post_data as $key => $value){
                if(\ExpedientegastoPeer::getTableMap()->hasColumn($key) && !empty($value) && $key != 'expedientegasto_fecha'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //LA FECHA
            $expedientegasto_fecha = \DateTime::createFromFormat('d/m/Y', $post_data['expedientegasto_fecha']);
            $entity->setExpedientegastoFecha($expedientegasto_fecha);
            
            $entity->setIdempleado($auth['idempleado']);

            $entity->save();
            
            //El comprobante
            if(!empty($post_files['expedientegasto_comprobante']['name'])){
                
                $target_path = "/files/expedientesgastos/";
                $target_path = $target_path . $entity->getIdexpedientegasto() .'_'.basename( $post_files['expedientegasto_comprobante']['name']);
                
                if(move_uploaded_file($_FILES['expedientegasto_comprobante']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$target_path)){
                    $entity->setExpedientegastoComprobante($target_path);
                    $entity->save();
                }

            }
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$entity->getExpediente()->getIdcliente().'/expedientes/ver/'.$entity->getIdexpediente());
            
            

        }
        
        $idexpediente = $this->params()->fromQuery('id');
        $entity = \ExpedienteQuery::create()->findPk($idexpediente);
        
        //LAS CATEGORIAS DE NUESTROS GASTOS
        $categoriasgasto = \CategoriagastoQuery::create()->find();
        $categoriasgasto_array = array();
        foreach ($categoriasgasto as $categoriagastos){
            $id = $categoriagastos->getIdcategoriagasto();
            $categoriasgasto_array[$id] = $categoriagastos->getCategoriagastoNombre();
        }
        
        //LOS PROVEEDORES
        $proveedores = \ProveedoritradeQuery::create()->filterByIdproveedoritrade(1,  \Criteria::NOT_EQUAL)->find();
        $proveedores_array = array();
        $proveedor = new \Proveedoritrade();
        foreach ($proveedores as $proveedor){
            $id = $proveedor->getIdproveedoritrade();
            $proveedores_array[$id] = $proveedor->getProveedoritradeNombre();
        }
        
        //INSTANCIAMOS NUESTRO FORMULARIO
        $form = new \Admin\Clientes\Form\ExpedientegastoForm($idexpediente,$categoriasgasto_array,$proveedores_array);
        
        //Enviamos a la vista
        $view_model = new ViewModel();
        $view_model->setTerminal(true)
                   ->setVariable('form', $form)
                   ->setVariable('entity', $entity) 
                   ->setTemplate('/clientes/expedientes/modal/nuevocargo');
        
        return $view_model;
                

    }

    public function getcargosAction(){
        
        $idcategoria = $this->params()->fromQuery('idcategoria');
        
        $result = \GastofacturacionQuery::create()->filterByIdcategoriagasto($idcategoria)->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
       
        return $this->getResponse()->setContent(json_encode($result));

    }
}
