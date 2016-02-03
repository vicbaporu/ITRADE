<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Expedientes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ExpedientesController extends AbstractActionController
{
    public function indexAction()
    {
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/expedientes/expedientes/index');
        $view_model->setVariable('successMessages', json_encode($this->flashMessenger()->getSuccessMessages()));
        return $view_model;
    }
    
    public function serversideAction()  {
        
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
            $query->joinCliente()->withColumn('cliente_razonsocial');
            $query->joinProveedorcliente()->withColumn('proveedorcliente_nombre');
            
            //ORDER 
            if(isset($post_data['order'])){
                $order = $table_map[$post_data['order'][0]['column']];
                $dir = $post_data['order'][0]['dir'];
                $query->orderBy($order, $dir);
            }else{
                $query->orderByIdexpediente(\Criteria::DESC);
            }
            
            if(!empty($post_data['search']['value'])){
                
                $search = $post_data['search']['value'];
                
                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('expediente.expediente_folio', '%'.$search.'%', \Criteria::LIKE);
                //$c2= $c->getNewCriterion('expediente.expediente_fechainicio', '%'.$search.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('expediente.expediente_tipo', '%'.$search.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('expediente.expediente_estatus', '%'.$search.'%', \Criteria::LIKE);
                $c5= $c->getNewCriterion('cliente.cliente_razonsocial', '%'.$search.'%', \Criteria::LIKE);
                $c6= $c->getNewCriterion('proveedorcliente.proveedorcliente_nombre', '%'.$search.'%', \Criteria::LIKE);

                $c1->addOr($c3)->addOr($c4)->addOr($c5)->addOr($c6);

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
                $tmp['expediente_folio'] = $value->getExpedienteFolio('d/m/Y');
                $tmp['expediente_fechainicio'] = $value->getExpedienteFechainicio('d/m/Y');
                $tmp['expediente_tipo'] = $value->getExpedienteTipo();
                $tmp['expediente_estatus'] = ucfirst($value->getExpedienteEstatus());
                if($value->getExpedienteTipo() == 'importacion'){
                    $tmp['expediente_consignatario'] = $value->getCliente()->getClienteRazonsocial();
                    $tmp['expediente_embarcador'] = $value->getProveedorcliente()->getProveedorclienteNombre();
                }else{
                    $tmp['expediente_embarcador'] = $value->getCliente()->getClienteRazonsocial();
                    $tmp['expediente_consignatario'] = $value->getProveedorcliente()->getProveedorclienteNombre();
                }
                $tmp['expediente_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/clientes/ver/'.$value->getIdcliente().'/expedientes/ver/'.$value->getIdexpediente().'"><i class="fa fa-pencil"></i></a><a class="delete" data-toggle="tooltip" data-placement="left" title="Eliminar" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>';
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
        $id= $this->params()->fromRoute('id');
        
        if($request->isPost()){
            
            $id= $request->getPost('id');
            
            $entity = \ExpedienteQuery::create()->findPk($id);
           
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');
            
            return $this->getResponse()->setContent(json_encode(true));
        }

        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setTemplate('admin/expedientes/expedientes/eliminar');
        
        return $viewModel;
        
    }
}
