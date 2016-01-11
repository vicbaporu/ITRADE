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

class ClientesController extends AbstractActionController
{
    public function indexAction()
    {
        
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/clientes/clientes/index');
        $view_model->setVariable('successMessages', json_encode($this->flashMessenger()->getSuccessMessages()));
        return $view_model;
        
    }
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //EL MAPEO DE NUESTRA TABALA
            $table_map = array(
                0 => 'cliente_razonsocial',
                1 => 'cliente_nombrecontacto',
                2 => 'cliente_email',
                3 => 'cliente_celular',
                4 => 'cliente_ciudad',
                5 => 'cliente_pais',
            );
            
            $post_data = $request->getPost();

            //NUESTRA QUERY
            $query = new \ClienteQuery();
            
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
                
                $c1= $c->getNewCriterion('cliente.cliente_razonsocial', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('cliente.cliente_nombrecontacto', '%'.$search.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('cliente.cliente_celular', '%'.$search.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('cliente.cliente_ciudad', '%'.$search.'%', \Criteria::LIKE);
                $c5= $c->getNewCriterion('cliente.cliente_estado', '%'.$search.'%', \Criteria::LIKE);
                $c6= $c->getNewCriterion('cliente.cliente_pais', '%'.$search.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5)->addOr($c6);

                $query->addAnd($c1);
               
            }

            //EL TOTAL DE LA BUSQUEDA
            $recordsFiltered = $query->count();
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
             //DAMOS EL FORMATO CORRECTO
            $data = array();
            $value = new \Cliente();
            foreach ($query->find() as $value){

                $tmp['DT_RowId'] = $value->getIdcliente();
                $tmp['cliente_razonsocial'] = $value->getClienteRazonsocial();
                $tmp['cliente_nombrecontacto'] =  $value->getClienteNombrecontacto();
                $tmp['cliente_email'] = $value->getClienteEmail();
                $tmp['cliente_telefono'] = $value->getClienteTelefono();
                $tmp['cliente_ciudad'] = $value->getClienteCiudad();
                if(!is_null($value->getClienteEstado())){
                    $tmp['cliente_ciudad'].=', '.$value->getClienteEstado();
                }
                $tmp['cliente_pais'] = $value->getClientePais();
                $tmp['servicio_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/clientes/editar/'.$value->getIdcliente().'"><i class="fa fa-pencil"></i></a>';
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
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $entity = new \Cliente();
            
            foreach($post_data as $key => $value){
                if(\ClientePeer::getTableMap()->hasColumn($key) && !empty($value) && $key != 'cliente_cumpleanios'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            
            if(!empty($post_data['cliente_cumpleanios'])){
                
                $cliente_cumpleanios = date_create_from_format('d/m/Y', $post_data['cliente_cumpleanios']);
                $entity->setClienteCumpleanios($cliente_cumpleanios);
            }
            
            
            echo '<pre>';var_dump($entity->toArray()); echo '</pre>';exit();
            
            
        }
        
        $form = new \Admin\Clientes\Form\ClientesForm();
        
        //RETORNAMOS A NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/clientes/clientes/nuevo');
        $view_model->setVariable('form', $form);
        return $view_model;
        
    }
}
