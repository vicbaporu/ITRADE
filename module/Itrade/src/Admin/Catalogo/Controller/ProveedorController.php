<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProveedorController extends AbstractActionController
{
    public function indexAction()
    {
        
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/catalogo/proveedor/index');
        $view_model->setVariable('successMessages', json_encode($this->flashMessenger()->getSuccessMessages()));
        return $view_model;
        
    }

    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $entity = new \Proveedoritrade();
            
            foreach($post_data as $key => $value){
                if(\ProveedoritradePeer::getTableMap()->hasColumn($key) && !empty($value)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/catalogo/proveedores', array('action' => 'editar','id' => $entity->getIdproveedoritrade()));

        }
        
        $form = new \Catalogo\Form\ProveedorForm();
        
        //RETORNAMOS A NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/catalogo/proveedor/nuevo');
        $view_model->setVariable('form', $form);
        return $view_model;
        
    }
    
    public function editarAction(){
        
        //ID ENTIDAD
        $id = $this->params()->fromRoute('id');
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //INSTANCIAMOS NUESTRA ENTIDAD
            $entity = \ProveedoritradeQuery::create()->findPk($id);
            
            //SETIAMOS NUESTROS DATOS CON EXCEPCIONES
            foreach($post_data as $key => $value){
                if(\ProveedoritradePeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
             //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/catalogo/proveedores', array('action' => 'editar','id' => $entity->getIdproveedoritrade()));

        }
        
        
        $exist = \ProveedoritradeQuery::create()->filterByIdproveedoritrade($id)->exists();
         
         if($exist){
            
            $entity = \ProveedoritradeQuery::create()->findPk($id);

            //INSTANCIAMOS NUESTRO FORMULARIO
            $form = new \Catalogo\Form\ProveedorForm();
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            //LOS ARCHIVOS
            $files = \ProveedoritradearchivoQuery::create()->filterByIdproveedoritrade($entity->getIdproveedoritrade())->find();
            
            $files_array = array();
            $file = new \Proveedoritradearchivo();
            foreach ($files as $file){
                $file_path = $file->getProveedoritradearchivoArchivo();
                $file_name = explode('files/proveedores/'.$entity->getIdproveedoritrade().'/', $file->getProveedoritradearchivoArchivo());
                $tmp['id'] = $file->getIdproveedoritradearchivo();
                $tmp['name'] = $file_name[1];
                $tmp['size'] = $file->getProveedoritradearchivoSize();
                $tmp['type']= mime_content_type($_SERVER['DOCUMENT_ROOT'].'/'.$file->getProveedoritradearchivoArchivo());
                $files_array[] = $tmp;
            }
            

            //RETORNAMOS A NUESTRA VISTA
            $view_model = new ViewModel();
            $view_model->setTemplate('admin/catalogo/proveedor/editar');
            $view_model->setVariables(array(
                'entity' => json_encode($entity->toArray(\BasePeer::TYPE_FIELDNAME)),
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'files' => json_encode($files_array),
                'form' => $form
            ));
            return $view_model;
        
           
            
        }else{
            return $this->redirect()->toRoute('admin/catalogo/proveedores', array('action' => 'index'));
        }
        
    }
    

    public function eliminarAction(){
        
        $request = $this->getRequest();
        
      

        if($request->isPost()){
            
            $id = $request->getPost('id');
            
            $entity = \ProveedoritradeQuery::create()->findPk($id);
            
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
        $view_model->setTemplate('admin/catalogo/proveedor/eliminar');
        return $view_model;


        return $viewModel;
    }
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //EL MAPEO DE NUESTRA TABALA
            $table_map = array(
                0 => 'proveedoritrade_nombre',
                1 => 'proveedor_nombrecontacto',
                2 => 'proveedoritrade_telefono',
            );
            
            $post_data = $request->getPost();

            //NUESTRA QUERY
            $query = new \ProveedoritradeQuery();
            $query->filterByIdproveedoritrade(1,  \Criteria::NOT_EQUAL);
            
            //ORDER 
            if(isset($post_data['order'])){
                $order = $table_map[$post_data['order'][0]['column']];
                $dir = $post_data['order'][0]['dir'];
                $query->orderBy($order, $dir);
            }else{
                $query->orderByIdproveedoritrade(\Criteria::DESC);
            }
            
 
            if(!empty($post_data['search']['value'])){
                
                $search = $post_data['search']['value'];

                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('proveedoritrade.proveedoritrade_nombre', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('proveedoritrade.proveedoritrade_nombrecontacto', '%'.$search.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('proveedoritrade.proveedoritrade_telefono', '%'.$search.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
               
            }

            //EL TOTAL DE LA BUSQUEDA
            $recordsFiltered = $query->count();
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
             //DAMOS EL FORMATO CORRECTO
            $data = array();
            $value = new \Proveedoritrade();
            foreach ($query->find() as $value){

                $tmp['DT_RowId'] = $value->getIdproveedoritrade();
                $tmp['proveedoritrade_nombre'] = $value->getProveedoritradeNombre();
                $tmp['proveedor_nombrecontacto'] =  $value->getProveedoritradeNombrecontacto();
                $tmp['proveedoritrade_telefono'] = $value->getProveedoritradeTelefono();
                $tmp['empleado_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/catalogo/proveedores/editar/'.$value->getIdproveedoritrade().'"><i class="fa fa-pencil"></i></a><a class="delete" data-toggle="tooltip" data-placement="left" title="Eliminar" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>';
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
    
    public function dropzoneAction(){
        
         $storeFolder = $_SERVER['DOCUMENT_ROOT'].'/files/proveedores';
      
         $request = $this->getRequest();
         
         if($request->isPost()){
             
             
             $post_data = $request->getPost();
             $files = $request->getFiles();
             
             //OBTENEMOS EL ID DEL PROVEEDOR
             $id = $post_data['id'];
            
             
             $tempFile = $files['file']['tmp_name']; 
             $targetFile =  $storeFolder. '/'. $id.'/'.$_FILES['file']['name']; 
             
             if (!file_exists($storeFolder. '/'. $id)) {
                mkdir($storeFolder. '/'. $id, 0777, true);
            }

             move_uploaded_file($tempFile,$targetFile);
             
             //Guardamos en nuestra base de datos
             $proveedor_archivo = new \Proveedoritradearchivo();
             $proveedor_archivo->setIdproveedoritrade($id);
             $proveedor_archivo->setProveedoritradearchivoArchivo('/files/proveedores'. '/'. $id.'/'.$_FILES['file']['name']);
             $proveedor_archivo->setProveedoritradearchivoSize($_FILES['file']['size']);
             
             $proveedor_archivo->save();
             
             return $this->getResponse()->setContent(json_encode(array('response' => true, 'id' => $proveedor_archivo->getIdproveedoritradearchivo())));
             
         }
         
    }
    
    public function dropzonedeleteAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //obtnemos el id del archivo
            $id = $post_data['id'];
            $entity = \ProveedoritradearchivoQuery::create()->findPk($id);
            
            //Eliminamos del sistema de archivos
            $taget_file = $_SERVER['DOCUMENT_ROOT'].$entity->getProveedoritradearchivoArchivo();
            unlink($taget_file);
            
            //Eliminamos de la base de datos
            $entity->delete();
            
            return $this->getResponse()->setContent(json_encode(true));
                       
        }
    }
    
    public function dropzonedownloadAction(){
        
         $request = $this->getRequest();
         
         if($request->isPost()){
             
            $post_data = $request->getPost();
            
            //obtnemos el id del archivo
            $id = $post_data['id'];
            $entity = \ProveedoritradearchivoQuery::create()->findPk($id);
            
            $file_path = $entity->getProveedoritradearchivoArchivo();
            $file_name = explode('/files/proveedores/'.$entity->getIdproveedoritrade().'/', $entity->getProveedoritradearchivoArchivo());
            $file_name = $file_name[1];
            
            $taget_file = $_SERVER['DOCUMENT_ROOT'].$entity->getProveedoritradearchivoArchivo();
            
            $file_base64 = base64_encode(file_get_contents($taget_file));
            $file_type = mime_content_type($taget_file);
            
            return $this->getResponse()->setContent(json_encode(array('base64' => $file_base64, 'type' => $file_type,'name' => $file_name)));
            
             
         }
        
    }
}
