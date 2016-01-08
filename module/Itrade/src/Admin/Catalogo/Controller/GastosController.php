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

class GastosController extends AbstractActionController
{
    public function indexAction()
    {
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/catalogo/gastos/index');
        $view_model->setVariable('successMessages', json_encode($this->flashMessenger()->getSuccessMessages()));
        return $view_model;

    }
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            
            $post_data = $request->getPost();
            

            $entity = new \Gastofacturacion();
            
            foreach($post_data as $key => $value){
                if(\GastofacturacionPeer::getTableMap()->hasColumn($key) && !empty($value)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //SETIAMOS EL IVA
            $entity->setGastofacturacionIva($post_data['gastofacturacion_iva']);
            
           
            $entity->save();
            
             //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/catalogo/gastos', array('action' => 'editar','id' => $entity->getIdgastofacturacion()));

        }
        
        //LE DAMOS FORMATO A LAS CATEGORIAS DE GASTOS
        $categorias_gastos = \CategoriagastoQuery::create()->find();
        $categorias_gastos_array = array();
        foreach ($categorias_gastos as $categoria_gasto){
            $idcategoriagasto = $categoria_gasto->getIdcategoriagasto();
            $categorias_gastos_array[$idcategoriagasto] = $categoria_gasto->getCategoriagastoNombre();
        }
        
        //INSTANCIAMOS NUESTRO FORMULARIO
        $form = new \Catalogo\Form\GastoForm($categorias_gastos_array);
        
        //RETORNAMOS A NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/catalogo/gastos/nuevo');
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
              $entity = \GastofacturacionQuery::create()->findPk($id);
              
                //SETIAMOS NUESTROS DATOS CON EXCEPCIONES
                foreach($post_data as $key => $value){
                    if(\GastofacturacionPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                
                //SETIAMOS EL IVA
                $entity->setGastofacturacionIva($post_data['gastofacturacion_iva']);
            
                $entity->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                  
                //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
                return $this->redirect()->toRoute('admin/catalogo/gastos', array('action' => 'editar','id' => $entity->getIdgastofacturacion()));
              
              
          }
          
          
         $exist = \GastofacturacionQuery::create()->filterByIdgastofacturacion($id)->exists();
         
         if($exist){
             
                $entity = \GastofacturacionQuery::create()->findPk($id);
              
                //LE DAMOS FORMATO A LAS CATEGORIAS DE GASTOS
                $categorias_gastos = \CategoriagastoQuery::create()->find();
                $categorias_gastos_array = array();
                foreach ($categorias_gastos as $categoria_gasto){
                    $idcategoriagasto = $categoria_gasto->getIdcategoriagasto();
                    $categorias_gastos_array[$idcategoriagasto] = $categoria_gasto->getCategoriagastoNombre();
                }
                
                //INSTANCIAMOS NUESTRO FORMULARIO
                $form = new \Catalogo\Form\GastoForm($categorias_gastos_array);
                $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
                
                //RETORNAMOS A NUESTRA VISTA
                $view_model = new ViewModel();
                $view_model->setTemplate('admin/catalogo/gastos/editar');
                $view_model->setVariables(array(
                    'entity' => json_encode($entity->toArray(\BasePeer::TYPE_FIELDNAME)),
                    'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                    'form' => $form
                ));
                
                return $view_model;
              
              
              
         }else{
             return $this->redirect()->toRoute('admin/catalogo/gastos', array('action' => 'index'));
         }
         
       

        
    }
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //EL MAPEO DE NUESTRA TABALA
            $table_map = array(
                0 => 'gastofacturacion_nombre',
                1 => 'categoriagasto_nombre',
                2 => 'gastofacturacion_descripcion',
                3 => 'gastofacturacion_iva',
            );
            
            $post_data = $request->getPost();

            //NUESTRA QUERY
            $query = new \GastofacturacionQuery();
            
            //JOIN
            $query->joinCategoriagasto()->withColumn('categoriagasto_nombre');
            
            
            //ORDER 
            if(isset($post_data['order'])){
                $order = $table_map[$post_data['order'][0]['column']];
                $dir = $post_data['order'][0]['dir'];
                $query->orderBy($order, $dir);
            }else{
                $query->orderByIdgastofacturacion(\Criteria::DESC);
            }

            if(!empty($post_data['search']['value'])){
                
                $search = $post_data['search']['value'];

                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('gastofacturacion.gastofacturacion_nombre', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('gastofacturacion.gastofacturacion_descripcion', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('categoriagasto.categoriagasto_nombre', '%'.$search.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('gastofacturacion.gastofacturacion_iva', '%'.$search.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
               
            }

            //EL TOTAL DE LA BUSQUEDA
            $recordsFiltered = $query->count();
            
            //SUSTITUIMOS VARIABLES SI NOS LAS ENVIAN POR LA URL
                if(isset($post_data['url_params']['limit']) && isset($post_data['url_params']['page'])){
                    $post_data['length'] = (int)$post_data['url_params']['limit'];
                    $post_data['start'] = 0;
                    if((int)$post_data['url_params']['page'] > 1){               
                        $post_data['start'] = ($post_data['url_params']['limit'] * ((int)$post_data['url_params']['page']-1));
                    }
            }

            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
             //DAMOS EL FORMATO CORRECTO
            $data = array();
            $value = new \Gastofacturacion();
            foreach ($query->find() as $value){

                $tmp['DT_RowId'] = $value->getIdgastofacturacion();
                $tmp['gastofacturacion_nombre'] = $value->getGastofacturacionNombre();
                $tmp['categoriagasto_nombre'] = $value->getCategoriagasto()->getCategoriagastoNombre();
                $tmp['gastofacturacion_descripcion'] = $value->getGastofacturacionDescripcion();
                $tmp['gastofacturacion_iva'] = ucfirst($value->getGastofacturacionIva()).' %';
                $tmp['gastofacturacion_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/catalogo/gastos/editar/'.$value->getIdgastofacturacion().'"><i class="fa fa-pencil"></i></a><a class="delete" data-toggle="tooltip" data-placement="left" title="Eliminar" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>';

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
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $id = $request->getPost('id');
            
            $entity = \GastofacturacionQuery::create()->findPk($id);
            
            $entity->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');
            
            if($entity->isDeleted()){
                return $this->getResponse()->setContent(json_encode(true));
            }
            
            
        }
        
        $id = $this->params()->fromQuery('id');
        
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setTemplate('admin/catalogo/gastos/eliminar');
        return $viewModel;
    }
}
