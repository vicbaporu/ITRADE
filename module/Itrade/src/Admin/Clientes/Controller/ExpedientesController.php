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
            //FACTURACION MXN
            
            //El esqueleto de nuestro arreglo
            $totales = array(
                'subtotal' => 0,
                'iva' => 0,
                'total' => 0,
                'utilidad' => 0,
                'anticipo' => 0,
                'saldo' => 0,
            );
            
            //El esqueleto de nuestro arreglo
            $totales_usd = array(
                'subtotal' => 0,
                'iva' => 0,
                'total' => 0,
                'utilidad' => 0,
                'anticipo' => 0,
                'saldo' => 0,
            );
            
            
            
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('mxn')->orderByExpedientegastoFecha(\Criteria::DESC)->filterByIdexpediente($entity->getIdexpediente())->groupByIdgastofacturacion()->find();
           
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
                $expedientes_gastos_array[$key]['details'] = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('mxn')->orderByIdexpedientegasto(\Criteria::DESC)->joinEmpleado()->withColumn('CONCAT(empleado_nombre,empleado_apellidopaterno,empleado_apallidomaterno)','empleado_nombre')->filterByIdexpediente($entity->getIdexpediente())->filterByIdgastofacturacion($expediente_gasto->getIdgastofacturacion())->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
            }
            
           
            //cargos conocidos
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('mxn')->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('gastorecibir')->withColumn('SUM(expedientegasto_monto)','gastorecibir_total')->groupByIdgastofacturacion()->find();
           
            foreach ($expedientes_gastos as $expediente_gasto){
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $expedientes_gastos_array[$key]['cargos_recibir'] = $expediente_gasto->getVirtualColumn('gastorecibir_total');
            }
            
            //cargos conocidos
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('mxn')->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('gastoconocido')->withColumn('SUM(expedientegasto_monto)','gastoconocido_total')->groupByIdgastofacturacion()->find();
            $cargos_conocidos = 0.00;
            foreach ($expedientes_gastos as $expediente_gasto){
                $cargos_conocidos += $expediente_gasto->getVirtualColumn('gastoconocido_total');
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $expedientes_gastos_array[$key]['cargos_conocidos'] = $expediente_gasto->getVirtualColumn('gastoconocido_total');
            }
            
            //cobro
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('mxn')->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('cobro')->withColumn('SUM(expedientegasto_monto)','cobro_total')->groupByIdgastofacturacion()->find();
            $cobros = 0.00;
            foreach ($expedientes_gastos as $expediente_gasto){
                $cobros = +$expediente_gasto->getVirtualColumn('cobro_total');
                
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $iva = $expediente_gasto->getGastofacturacion()->getGastofacturacionIva();
                
                if($iva == 0){
                    $expedientes_gastos_array[$key]['no_sujetos_iva'] = $expediente_gasto->getVirtualColumn('cobro_total');
                    $calc_iva = $expediente_gasto->getVirtualColumn('cobro_total') * (float)('0.'.$iva);
                    $cal_sub = $expediente_gasto->getVirtualColumn('cobro_total') - $calc_iva;
                    $totales['subtotal']+=$cal_sub;
                    $totales['iva']+=$calc_iva;
                    $totales['total']+=$expediente_gasto->getVirtualColumn('cobro_total')+ $calc_iva;
                }else{
                    $expedientes_gastos_array[$key]['sujetos_iva'] = $expediente_gasto->getVirtualColumn('cobro_total');
                    $calc_iva = $expediente_gasto->getVirtualColumn('cobro_total') * (float)('0.'.$iva);
                    $cal_sub = $expediente_gasto->getVirtualColumn('cobro_total');
                    $totales['subtotal']+=$cal_sub;
                    $totales['iva']+=$calc_iva;
                    $totales['total']+=$expediente_gasto->getVirtualColumn('cobro_total') + $calc_iva;
                }
                
            }
            
            //anticipo
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('mxn')->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('anticipo')->groupByExpedientegastoTipo('anticipo')->withColumn('SUM(expedientegasto_monto)','anticipo_total')->groupByIdgastofacturacion()->findOne();
            if(!empty($expedientes_gastos)){
                $totales['anticipo'] = $expedientes_gastos->getVirtualColumn('anticipo_total');
            }
            
           
           
            $totales['saldo'] = $totales['total'] - $totales['anticipo'];
            $totales['utilidad'] = $cobros - $cargos_conocidos;

            //FACTURACION USD
            
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('usd')->filterByExpedientegastoMoneda('usd')->orderByExpedientegastoFecha(\Criteria::DESC)->filterByIdexpediente($entity->getIdexpediente())->groupByIdgastofacturacion()->find();
            
            $expedientes_gastos_usd_array = array();
            
            foreach ($expedientes_gastos as $expediente_gasto){
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $expedientes_gastos_usd_array[$key] = array(
                    'id' => $expediente_gasto->getIdgastofacturacion(),
                    'cargos_recibir' => '', 
                    'cargos_conocidos' => '', 
                    'sujetos_iva' => '', 
                    'no_sujetos_iva' => '', 
                );
                $expedientes_gastos_usd_array[$key]['details'] = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('usd')->orderByIdexpedientegasto(\Criteria::DESC)->joinEmpleado()->withColumn('CONCAT(empleado_nombre,empleado_apellidopaterno,empleado_apallidomaterno)','empleado_nombre')->filterByIdexpediente($entity->getIdexpediente())->filterByIdgastofacturacion($expediente_gasto->getIdgastofacturacion())->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
            }
            
            //cargos conocidos
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('usd')->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('gastorecibir')->withColumn('SUM(expedientegasto_monto)','gastorecibir_total')->groupByIdgastofacturacion()->find();
            foreach ($expedientes_gastos as $expediente_gasto){
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $expedientes_gastos_usd_array[$key]['cargos_recibir'] = $expediente_gasto->getVirtualColumn('gastorecibir_total');
            }
            
            //cargos conocidos
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('usd')->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('gastoconocido')->withColumn('SUM(expedientegasto_monto)','gastoconocido_total')->groupByIdgastofacturacion()->find();
            $cargos_conocidos = 0.00;
            foreach ($expedientes_gastos as $expediente_gasto){
                $cargos_conocidos += $expediente_gasto->getVirtualColumn('gastoconocido_total');
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $expedientes_gastos_usd_array[$key]['cargos_conocidos'] = $expediente_gasto->getVirtualColumn('gastoconocido_total');
            }
            
            //cargos conocidos
            $cobros = 0.00;
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('usd')->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('cobro')->withColumn('SUM(expedientegasto_monto)','cobro_total')->groupByIdgastofacturacion()->find();
            foreach ($expedientes_gastos as $expediente_gasto){
                $cobros += $expediente_gasto->getVirtualColumn('cobro_total');
                $key = $expediente_gasto->getGastofacturacion()->getGastofacturacionNombre();
                $iva = $expediente_gasto->getGastofacturacion()->getGastofacturacionIva();
                
                if($iva == 0){
                    $expedientes_gastos_usd_array[$key]['no_sujetos_iva'] = $expediente_gasto->getVirtualColumn('cobro_total');
                    $calc_iva = $expediente_gasto->getVirtualColumn('cobro_total') * (float)('0.'.$iva);
                    $cal_sub = $expediente_gasto->getVirtualColumn('cobro_total') - $calc_iva;
                    $totales_usd['subtotal']+=$cal_sub;
                    $totales_usd['iva']+=$calc_iva;
                    $totales_usd['total']+=$expediente_gasto->getVirtualColumn('cobro_total')+ $calc_iva;
                }else{
                    $expedientes_gastos_usd_array[$key]['sujetos_iva'] = $expediente_gasto->getVirtualColumn('cobro_total');
                    $calc_iva = $expediente_gasto->getVirtualColumn('cobro_total') * (float)('0.'.$iva);
                    $cal_sub = $expediente_gasto->getVirtualColumn('cobro_total');
                    $totales_usd['subtotal']+=$cal_sub;
                    $totales_usd['iva']+=$calc_iva;
                    $totales_usd['total']+=$expediente_gasto->getVirtualColumn('cobro_total') + $calc_iva;
                }
                
            }
            
            //anticipo
            $expedientes_gastos = \ExpedientegastoQuery::create()->filterByExpedientegastoMoneda('usd')->filterByIdexpediente($entity->getIdexpediente())->filterByExpedientegastoTipo('anticipo')->groupByExpedientegastoTipo('anticipo')->withColumn('SUM(expedientegasto_monto)','anticipo_total')->groupByIdgastofacturacion()->findOne();
            if(!empty($expedientes_gastos)){
                $totales_usd['anticipo'] = $expedientes_gastos->getVirtualColumn('anticipo_total');
            }
            
           
           
            $totales_usd['saldo'] = $totales_usd['total'] - $totales_usd['anticipo'];
            $totales_usd['utilidad'] = $cobros - $cargos_conocidos;
            
            //SERVICIOS
            $servicios = \ExpedienteservicioQuery::create()->filterByIdexpediente($entity->getIdexpediente())->find();
            
            //CONSIGNATARIO, EMBARCADOR
            if($entity->getExpedienteTipo() == 'importacion'){
                $consignatario = $entity->getCliente()->getClienteRazonsocial();
                $embarcador = $entity->getProveedorcliente()->getProveedorclienteNombre();
            }else{
                $embarcador = $entity->getCliente()->getClienteRazonsocial();
                $consignatario = $entity->getProveedorcliente()->getProveedorclienteNombre();
            }
            
            $cliente = $entity->getCliente();
            $view_model = new ViewModel();
            $view_model->setTemplate('admin/clientes/expedientes/editar');
            $view_model->setVariables(array(
                'servicios' => $servicios,
                'entity' => $entity,
                'form' => $form,
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'cliente' => $cliente,
                'facturacion' => $expedientes_gastos_array,
                'totales' => $totales,
                'facturacion_usd' => $expedientes_gastos_usd_array,
                'totales_usd' => $totales_usd,
                'files' => json_encode($files_array),
                'consignatario' => $consignatario,
                'embarcador' => $embarcador
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
            
            $mailer = new \Shared\GeneralFunction\Itrademailer();
            if($mailer->newExpedienteEmail($cliente, $folio)){
                $this->flashMessenger()->addSuccessMessage('Correo electronico enviado exitosamente!');
            }
            
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
        $moneda = $this->params()->fromQuery('moneda');
        
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
        $form = new \Admin\Clientes\Form\ExpedientegastoForm($idexpediente,$categoriasgasto_array,$proveedores_array,$moneda);
        
        //Enviamos a la vista
        $view_model = new ViewModel();
        $view_model->setTerminal(true)
                   ->setVariable('form', $form)
                   ->setVariable('entity', $entity) 
                   ->setTemplate('/clientes/expedientes/modal/nuevocargo');
        
        return $view_model;
                

    }
    
    public function eliminarcargoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $id = $request->getPost('id');
            
            $entity = \ExpedientegastoQuery::create()->findPk($id);
            
            $entity->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');
            
            if($entity->isDeleted()){
                return $this->getResponse()->setContent(json_encode(true));
            }

        }
        
        $id = $this->params()->fromQuery('id');

        //RETORNAMOS A NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTerminal(true);
        $view_model->setTemplate('/clientes/expedientes/modal/eliminarcargo');
        
        return $view_model;

    }
    
    public function editarcargoAction(){
        
        $request = $this->getRequest();
        
        $idgasto = $this->params()->fromQuery('id');
        $entity = \ExpedientegastoQuery::create()->findPk($idgasto);
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            
            $auth = new \Shared\Session\AouthSession();
            $auth = $auth->getData();
            
           
            $entity = \ExpedientegastoQuery::create()->findPk($post_data['idexpedientegasto']);
            
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
        foreach ($proveedores as $proveedor){
            $id = $proveedor->getIdproveedoritrade();
            $proveedores_array[$id] = $proveedor->getProveedoritradeNombre();
        }
        
        //gastos de facturacion
        $gastos_facturacion = \GastofacturacionQuery::create()->filterByIdcategoriagasto($entity->getGastofacturacion()->getIdcategoriagasto())->find();
        $gastos_facturacion_array = array();
        foreach ($gastos_facturacion as $gasto_facturacion){
            $id = $gasto_facturacion->getIdgastofacturacion();
            $gastos_facturacion_array[$id] = $gasto_facturacion->getGastofacturacionNombre();
        }

        //INSTANCIAMOS NUESTRO FORMULARIO
        $form = new \Admin\Clientes\Form\ExpedientegastoForm($entity->getIdexpediente(),$categoriasgasto_array,$proveedores_array,$entity->getExpedientegastoMoneda(),$gastos_facturacion_array);
        
        //Ponemos nuetros datos al formulario....
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
        $form->get('expedientegasto_fecha')->setValue($entity->getExpedientegastoFecha('d/m/Y'));
        $form->get('idcategoriagasto')->setValue($entity->getGastofacturacion()->getIdcategoriagasto());
        $form->get('idgastofacturacion')->setValue($entity->getIdgastofacturacion());
        $form->get('idgastofacturacion')->setAttribute('disabled', false);
        
        //Enviamos a la vista
        $view_model = new ViewModel(); 
        $view_model->setTerminal(true)
                   ->setVariable('form', $form)
                   ->setVariable('entity', $entity) 
                   ->setTemplate('/clientes/expedientes/modal/editarcargo');
        
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
    
    public function nuevoservicioAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $entity = new \Expedienteservicio();
            
            foreach($post_data as $key => $value){
                if(\ExpedienteservicioPeer::getTableMap()->hasColumn($key) && !empty($value) && $key != 'expedienteservicio_fecha'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //LA FECHA
            $expedienteservicio_fecha = \DateTime::createFromFormat('d/m/Y', $post_data['expedienteservicio_fecha']);
            $entity->setExpedienteservicioFecha($expedienteservicio_fecha);
            
            $entity->save();

            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$entity->getExpediente()->getIdcliente().'/expedientes/ver/'.$entity->getIdexpediente());
            
        }
        
        $idexpediente = $this->params()->fromQuery('idexpediente');
        $expediente = \ExpedienteQuery::create()->findPk($idexpediente);
        
        $servicios_array = array();
        if($expediente->getExpedienteTipo() == 'importacion'){
            
            $servicios = \ServicioQuery::create()->filterByServicioTipo('importacion')->find();
            
        }else{
            
            $servicios = \ServicioQuery::create()->filterByServicioTipo('exportacion')->find();
        }
        
        $servicio = new \Servicio();
        foreach ($servicios as $servicio){
            $idservicio = $servicio->getIdservicio();
            $servicios_array[$idservicio] = $servicio->getServicioNombre();
        }
        
        //Instanciamos nuestro formulario
        $form = new \Admin\Clientes\Form\ServicioForm($idexpediente);
        
        //Enviamos a la vista
        $view_model = new ViewModel();
        $view_model->setTerminal(true)
                   ->setVariable('form', $form)
                    ->setVariable('entity', $expediente)
                   ->setTemplate('/clientes/expedientes/modal/nuevoservicio');
        
        return $view_model;
        
        
    }
    
    public function getserviciosAction(){
        
        $tipo = $this->params()->fromQuery('tipo');
        $medio = $this->params()->fromQuery('medio');
        
        $result = \ServicioQuery::create()->filterByServicioTipo($tipo)->filterByServicioMedio($medio)->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);
       
        return $this->getResponse()->setContent(json_encode($result));
        
        
    }
    
    public function agregarhistorialAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $entity = new \Expedientehistorial();
            
            foreach($post_data as $key => $value){
                if(\ExpedientehistorialPeer::getTableMap()->hasColumn($key) && !empty($value)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //La fecha
            $entity->setExpedientehistorialFecha(new \DateTime());
            
            $entity->save();
            
            //Validamos si se va enviar por correo al cliente
            if(isset($post_data['sendemail'])){
                
                $cliente = $entity->getExpedienteservicio()->getExpediente()->getCliente();
                $new_status = $entity->getServicioestado()->getServicioestadoNombre();
                $folio = $entity->getExpedienteservicio()->getExpediente()->getExpedienteFolio();
                
                $mailer = new \Shared\GeneralFunction\Itrademailer();
                if($mailer->changeStatusEmail($cliente, $folio, $new_status)){
                    $this->flashMessenger()->addSuccessMessage('Correo electronico enviado exitosamente!');
                }
               
            }
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$entity->getExpedienteservicio()->getExpediente()->getIdcliente().'/expedientes/ver/'.$entity->getExpedienteservicio()->getIdexpediente());
            
        }
        
        $idexpedienteservicio = $this->params()->fromQuery('idexpedienteservicio');
        $expedienteservicio = \ExpedienteservicioQuery::create()->findPk($idexpedienteservicio);
        $expediente = $expedienteservicio->getExpediente();
        
        //Obtenemos los estatus disponibles dependiendo del servicio seleccionado
        $servicio_estatus = array();
        $servicioestatus = \ServicioestadoQuery::create()->filterByIdservicio($expedienteservicio->getIdservicio())->find();
        
        $estatus = new \Servicioestado();
        foreach ($servicioestatus as $estatus){
            $id = $estatus->getIdservicioestado();
            $servicio_estatus[$id] = $estatus->getServicioestadoNombre();
        }
        
        //Instanciamos nuestro formurmalario
        $form = new \Admin\Clientes\Form\HistorialForm($idexpedienteservicio, $servicio_estatus);
        
        //Enviamos a la vista
        $view_model = new ViewModel();
        $view_model->setTerminal(true)
                   ->setVariable('form', $form)
                    ->setVariable('entity', $expediente)
                   ->setTemplate('/clientes/expedientes/modal/agregarhistorial');
        
        return $view_model;
        
        
    }
    
    public function editarhistorialAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $id = $post_data['idexpedientehistorial'];
            $entity = \ExpedientehistorialQuery::create()->findPk($id);
            
            foreach($post_data as $key => $value){
                if(\ExpedientehistorialPeer::getTableMap()->hasColumn($key) && !empty($value)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            
            //Validamos si se va enviar por correo al cliente
            if(isset($post_data['sendemail'])){
                
                $cliente = $entity->getExpedienteservicio()->getExpediente()->getCliente();
                $new_status = $entity->getServicioestado()->getServicioestadoNombre();
                $folio = $entity->getExpedienteservicio()->getExpediente()->getExpedienteFolio();
                
                $mailer = new \Shared\GeneralFunction\Itrademailer();
                if($mailer->changeStatusEmail($cliente, $folio, $new_status)){
                    $this->flashMessenger()->addSuccessMessage('Correo electronico enviado exitosamente!');
                }
               
            }
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$entity->getExpedienteservicio()->getExpediente()->getIdcliente().'/expedientes/ver/'.$entity->getExpedienteservicio()->getIdexpediente());

            
        }
        
        $id = $this->params()->fromQuery('id');
        $entity = \ExpedientehistorialQuery::create()->findPk($id);
        $expedienteservicio = $entity->getExpedienteservicio();
        $expediente = $expedienteservicio->getExpediente();
        
        //Obtenemos los estatus disponibles dependiendo del servicio seleccionado
        $servicio_estatus = array();
        $servicioestatus = \ServicioestadoQuery::create()->filterByIdservicio($expedienteservicio->getIdservicio())->find();
        
        $estatus = new \Servicioestado();
        foreach ($servicioestatus as $estatus){
            $id = $estatus->getIdservicioestado();
            $servicio_estatus[$id] = $estatus->getServicioestadoNombre();
        }
        
        //Instanciamos nuestro formurmalario
        $form = new \Admin\Clientes\Form\HistorialForm($expedienteservicio->getIdexpedienteservicio(), $servicio_estatus);
        $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        
        //Enviamos a la vista
        $view_model = new ViewModel();
        $view_model->setTerminal(true)
                   ->setVariable('form', $form)
                    ->setVariable('entity', $expediente)
                   ->setTemplate('/clientes/expedientes/modal/editarhistorial');
        
        return $view_model;
        
        
        
        
        echo '<pre>';var_dump($entity->toArray()); echo '</pre>';exit();
        
    }
    
    public function eliminarhistorialAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $id = $request->getPost('id');

            $entity = \ExpedientehistorialQuery::create()->findPk($id);
            $expediente_servicio = $entity->getExpedienteservicio();

            $entity->delete();

            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');
            
            if($entity->isDeleted()){
                return $this->getResponse()->setContent(json_encode(true));
            }

        }
        
        $id = $this->params()->fromQuery('id');

        //RETORNAMOS A NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTerminal(true);
        $view_model->setTemplate('/clientes/expedientes/modal/eliminarhistorial');
        
        return $view_model;

    }
    
    public function eliminarservicioAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $id = $request->getPost('id');
            
            $entity = \ExpedienteservicioQuery::create()->findPk($id);

            $entity->delete();

            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');
            
            if($entity->isDeleted()){
                return $this->getResponse()->setContent(json_encode(true));
            }

        }
        
        $id = $this->params()->fromQuery('id');

        //RETORNAMOS A NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTerminal(true);
        $view_model->setTemplate('/clientes/expedientes/modal/eliminarhistorial');
        
        return $view_model;

    }
    
    public function nuevoanticipoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            
            $entity = new \Expedienteanticipo();
            
            foreach($post_data as $key => $value){
                if(\ExpedienteanticipoPeer::getTableMap()->hasColumn($key) && !empty($value) && $key != 'expedienteanticipo_fecha'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //LA FECHA
            $expedienteanticipo_fecha = \DateTime::createFromFormat('d/m/Y', $post_data['expedienteanticipo_fecha']);
            $entity->setExpedienteanticipoFecha($expedienteanticipo_fecha);

            $entity->save();
            
            //El comprobante
            if(!empty($post_files['expedienteanticipo_comprobante']['name'])){
                
                $target_path = "/files/expedientesanticipos/";
                $target_path = $target_path . $entity->getIdexpedienteanticipo() .'_'.basename( $post_files['expedienteanticipo_comprobante']['name']);
                
                if(move_uploaded_file($_FILES['expedienteanticipo_comprobante']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$target_path)){
                    $entity->setExpedienteanticipoComprobante($target_path);
                    $entity->save();
                }

            }
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$entity->getExpediente()->getIdcliente().'/expedientes/ver/'.$entity->getIdexpediente());

            
        }
        
        $idexpediente = $this->params()->fromQuery('id');
        $moneda = $this->params()->fromQuery('moneda');
        
        $expediente = \ExpedienteQuery::create()->findPk($idexpediente);
        
        $form = new \Admin\Clientes\Form\ExpedienteanticipoForm($idexpediente, $moneda);
        
        //Enviamos a la vista
        $view_model = new ViewModel();
        $view_model->setTerminal(true)
                   ->setVariable('form', $form)
                   ->setVariable('entity', $expediente) 
                   ->setTemplate('/clientes/expedientes/modal/nuevoanticipo');
        
        return $view_model;
        
        
    }
}
    