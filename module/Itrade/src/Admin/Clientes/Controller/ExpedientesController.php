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
                    $tmp['expediente_embarcador']    = $value->getProveedorcliente()->getProveedorclienteNombre();
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
    
    public function getcomprobantefacturacionAction(){
        
        $idexpedientegasto = $this->params()->fromQuery('id');
        $entity = \ExpedientegastoQuery::create()->findPk($idexpedientegasto);
        
        $file_path = $entity->getExpedientegastoComprobante();
        $file_name = explode('/files/expedientesgastos/',$entity->getExpedientegastoComprobante());
        $file_name = $file_name[1];
        
        $taget_file = $_SERVER['DOCUMENT_ROOT'].$entity->getExpedientegastoComprobante();
        
        $file_base64 = base64_encode(file_get_contents($taget_file));
        $file_type = mime_content_type($taget_file);
        
        return $this->getResponse()->setContent(json_encode(array('base64' => $file_base64, 'type' => $file_type,'name' => $file_name)));
        
        
    }
    
    public function editarAction(){
        
        $request = $this->getRequest();
        
        $idcliente = $this->params()->fromRoute('id');
        $idexpediente = $this->params()->fromRoute('idexpediente');
        
        if($request->isPost()){}
        
        $exist = \ExpedienteQuery::create()->filterByIdexpediente($idexpediente)->exists();
        
        if($exist){
            
            $entity = \ExpedienteQuery::create()->findPk($idexpediente);
            $form = new \Admin\Clientes\Form\ExpedienteForm($idcliente);
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $form->get('expediente_fechainicio')->setValue($entity->getExpedienteFechainicio('d/m/Y'));
            $form->get('expediente_fechafin')->setValue($entity->getExpedienteFechafin('d/m/Y'));
            
            //ARCHIVOS
            $files = \ExpedientearchivoQuery::create()->filterByIdexpediente($entity->getIdexpediente())->find();
            $files_array = array();
            $file = new \Expedientearchivo();
            foreach ($files as $file){
                $file_path = $file->getExpedientearchivoArchivo();
                $file_name = explode('files/expedientes/'.$entity->getIdexpediente().'/', $file->getExpedientearchivoArchivo());
                $tmp['id'] = $file->getIdexpedientearchivo();
                $tmp['name'] = $file_name[1];
                $tmp['size'] = $file->getExpedientearchivoSize();
                $tmp['type']= mime_content_type($_SERVER['DOCUMENT_ROOT'].'/'.$file->getExpedientearchivoArchivo());
                $files_array[] = $tmp;
            }
            //FACTURACION
            
            //El esqueleto de nuestro arreglo
            $totales = array(
                'subtotal' => 0,
                'iva' => 0,
                'total' => 0,
            );
            
            $expedientes_gastos = \ExpedientegastoQuery::create()->orderByExpedientegastoFecha(\Criteria::DESC)->filterByIdexpediente($entity->getIdexpediente())->groupByIdgastofacturacion()->find();

            $expedientes_gastos_array = array();
            
            foreach ($expedientes_gastos as $expediente_gasto){
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $expedientes_gastos_array[$key] = array(
                    'id' => $expediente_gasto->getIdgastofacturacion(),
                    'cargos_recibir' => '', 
                    'cargos_conocidos' => '', 
                    'sujetos_iva' => '', 
                    'no_sujetos_iva' => '', 
                );
                $expedientes_gastos_array[$key]['details'] = \ExpedientegastoQuery::create()->orderByIdexpedientegasto(\Criteria::DESC)->joinEmpleado()->withColumn('CONCAT(empleado_nombre,empleado_apellidopaterno,empleado_apallidomaterno)','empleado_nombre')->filterByIdexpediente($entity->getIdexpediente())->filterByIdgastofacturacion($expediente_gasto->getIdgastofacturacion())->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
            }

            //cargos conocidos
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('gastorecibir')->withColumn('SUM(expedientegasto_monto)','gastorecibir_total')->groupByIdgastofacturacion()->find();
            foreach ($expedientes_gastos as $expediente_gasto){
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $expedientes_gastos_array[$key]['cargos_recibir'] = $expediente_gasto->getVirtualColumn('gastorecibir_total');
            }
            
            //cargos conocidos
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('gastoconocido')->withColumn('SUM(expedientegasto_monto)','gastoconocido_total')->groupByIdgastofacturacion()->find();
            foreach ($expedientes_gastos as $expediente_gasto){
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $expedientes_gastos_array[$key]['cargos_conocidos'] = $expediente_gasto->getVirtualColumn('gastoconocido_total');
            }
            
            //cargos conocidos
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('cobro')->withColumn('SUM(expedientegasto_monto)','cobro_total')->groupByIdgastofacturacion()->find();
            foreach ($expedientes_gastos as $expediente_gasto){
                
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $iva = $expediente_gasto->getGastofacturacion()->getGastofacturacionIva();
                
                if($iva == 0){
                    $expedientes_gastos_array[$key]['no_sujetos_iva'] = $expediente_gasto->getVirtualColumn('cobro_total');
                    $calc_iva = $expediente_gasto->getVirtualColumn('cobro_total') * (float)('0.'.$iva);
                    $cal_sub = $expediente_gasto->getVirtualColumn('cobro_total') - $calc_iva;
                    $totales['subtotal']+=$cal_sub;
                    $totales['iva']+=$calc_iva;
                    $totales['total']+=$expediente_gasto->getVirtualColumn('cobro_total');
                }else{
                    $expedientes_gastos_array[$key]['sujetos_iva'] = $expediente_gasto->getVirtualColumn('cobro_total');
                    $calc_iva = $expediente_gasto->getVirtualColumn('cobro_total') * (float)('0.'.$iva);
                    $cal_sub = $expediente_gasto->getVirtualColumn('cobro_total') - $calc_iva;
                    $totales['subtotal']+=$cal_sub;
                    $totales['iva']+=$calc_iva;
                    $totales['total']+=$expediente_gasto->getVirtualColumn('cobro_total');
                }
                
            }
            
            $cliente = $entity->getCliente();
            $view_model = new ViewModel();
            $view_model->setTemplate('admin/clientes/expedientes/editar');
            $view_model->setVariables(array(
                'entity' => $entity,
                'form' => $form,
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'cliente' => $cliente,
                'facturacion' => $expedientes_gastos_array,
                'totales' => $totales,
                'files' => json_encode($files_array),
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
        
         $request = $this->getRequest();
        
         if($request->isPost()){
             
             $files = $request->getFiles();
            
             $tempFile = $files['file']['tmp_name'];
             
             $targetFile =  $storeFolder. '/'. $idexpediente.'/'.$_FILES['file']['name'];
             
             if (!file_exists($storeFolder. '/'. $idexpediente)) {
                mkdir($storeFolder. '/'. $idexpediente, 0777, true);
             }
             
             move_uploaded_file($tempFile,$targetFile);
             
             //Guardamos en nuestra base de datos
             $entity  = new \Expedientearchivo();
             $entity->setIdexpediente($idexpediente);
             $entity->setExpedientearchivoArchivo('/files/expedientes'. '/'. $idexpediente.'/'.$_FILES['file']['name']);
             $entity->setExpedientearchivoSize($_FILES['file']['size']);
             
             $entity->save();
             
             return $this->getResponse()->setContent(json_encode(array('response' => true, 'id' => $entity->getExpedientearchivoArchivo())));
         }
        
        
        
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
    
    public function dropzonedownloadAction(){
        
         $request = $this->getRequest();
         
         if($request->isPost()){
             
            $post_data = $request->getPost();
            
            //obtnemos el id del archivo
            $id = $post_data['id'];
            $entity = \ExpedientearchivoQuery::create()->findPk($id);
            
            $file_path = $entity->getExpedientearchivoArchivo();
            $file_name = explode('/files/expedientes/'.$entity->getIdexpediente().'/', $entity->getExpedientearchivoArchivo());
            $file_name = $file_name[1];
            
            $taget_file = $_SERVER['DOCUMENT_ROOT'].$entity->getExpedientearchivoArchivo();
            
            $file_base64 = base64_encode(file_get_contents($taget_file));
            $file_type = mime_content_type($taget_file);
            
            return $this->getResponse()->setContent(json_encode(array('base64' => $file_base64, 'type' => $file_type,'name' => $file_name)));
            
             
         }
        
    }
    
    public function dropzonedeleteAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //obtnemos el id del archivo
            $id = $post_data['id'];
            $entity = \ExpedientearchivoQuery::create()->findPk($id);
            
            //Eliminamos del sistema de archivos
            $taget_file = $_SERVER['DOCUMENT_ROOT'].$entity->getExpedientearchivoArchivo();
            unlink($taget_file);
            
            //Eliminamos de la base de datos
            $entity->delete();
            
            return $this->getResponse()->setContent(json_encode(true));
                       
        }
    }
}