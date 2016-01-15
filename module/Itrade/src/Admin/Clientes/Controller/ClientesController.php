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
                $tmp['cliente_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/clientes/ver/'.$value->getIdcliente().'"><i class="fa fa-pencil"></i></a><a class="delete" data-toggle="tooltip" data-placement="left" title="Eliminar" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>';
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
            
            $cliente_password = $this->generatePassword();
            
            //SETIAMOS LA CONTRASEÑA DEL PASSWORD
            $entity->setClientePassword(md5($cliente_password));
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            //VALIDAMOS SI ENVIAMOS EL CORREO DE BIENVENIDA
            if(isset($post_data['cliente_sendemail'])){
                if($post_data['cliente_sendemail'] == '1'){
                    
                    $itrade_mailer = new \Shared\GeneralFunction\Itrademailer();
                    $enviar_correo = $itrade_mailer->welcomeEmail($entity,$cliente_password);
                    if($enviar_correo){
                        $this->flashMessenger()->addSuccessMessage('Correo electronico de bienvenida enviado exitosamente!');
                    }
                    
                }
            } 
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/clientes/editar', array('id' => $entity->getIdcliente()));

        }
        
        $form = new \Admin\Clientes\Form\ClientesForm();
        
        //RETORNAMOS A NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/clientes/clientes/nuevo');
        $view_model->setVariable('form', $form);
        return $view_model;
        
    }
    
    public function editarAction(){
        
        $id = $this->params()->fromRoute('id');
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //INSTANCIAMOS NUESTRA ENTIDAD
            $entity = \ClienteQuery::create()->findPk($id);
            
            //SETIAMOS NUESTROS DATOS CON EXCEPCIONES
            foreach($post_data as $key => $value){
                if(\ClientePeer::getTableMap()->hasColumn($key) && !empty($value) && $key != 'cliente_cumpleanios'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            if(!empty($post_data['cliente_cumpleanios'])){
                
                $cliente_cumpleanios = date_create_from_format('d/m/Y', $post_data['cliente_cumpleanios']);
                $entity->setClienteCumpleanios($cliente_cumpleanios);
            }
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/clientes/editar', array('id' => $entity->getIdcliente()));
            
        }
       
        $exist = \ClienteQuery::create()->filterByIdcliente($id)->exists();
        
        if($exist){
            
            $entity = \ClienteQuery::create()->findPk($id);
            $form = new \Admin\Clientes\Form\ClientesForm();
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            //RETORNAMOS A NUESTRA VISTA
            $view_model = new ViewModel();
            $view_model->setTemplate('admin/clientes/clientes/editar');
            $view_model->setVariables(array(
                'entity' => json_encode($entity->toArray(\BasePeer::TYPE_FIELDNAME)),
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'form' => $form
            ));
            return $view_model;
            
            
        }else{
            return $this->redirect()->toRoute('admin/clientes', array('action' => 'index'));
        }
      
    }
    
    function generatePassword($length = 8) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }
    
    public function validateajaxAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $query = new \ClienteQuery();
       
            $query->filterBy(\BasePeer::translateFieldname('cliente', $post_data['field'], \BasePeer::TYPE_FIELDNAME, \BasePeer::TYPE_PHPNAME), $post_data['value'], \Criteria::EQUAL);
            
            $exist = $query->exists();
            
            if($post_data['field'] == 'cliente_email'){
                $msj = 'correo electrónico en uso';
            }
            
            return $this->getResponse()->setContent(json_encode(array('exist' => $exist,'msj' => $msj)));
            
            
        }
        
       
    }
    
    public function changepasswordAction(){
        
        $request = $this->getRequest();
       
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $id = $post_data['idcliente'];
            $entity = \ClienteQuery::create()->findPk($id);
            
            $entity->setClientePassword(md5($post_data['cliente_password']));
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            //VALIDAMOS SI ENVIAMOS EL CORREO DE BIENVENIDA
            if(isset($post_data['cliente_sendemail'])){
                if($post_data['cliente_sendemail'] == '1'){
                    
                    $itrade_mailer = new \Shared\GeneralFunction\Itrademailer();
                    $enviar_correo = $itrade_mailer->welcomeEmail($entity,$post_data['cliente_password']);
                    if($enviar_correo){
                        $this->flashMessenger()->addSuccessMessage('Correo electronico de bienvenida enviado exitosamente!');
                    }
                    
                }
            }       
           //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
           return $this->redirect()->toRoute('admin/clientes/editar', array('id' => $entity->getIdcliente()));

        }
        
        $id = $this->params()->fromQuery('id');
        $viewModel = new ViewModel();
        $viewModel->setTemplate('admin/clientes/clientes/changepassword');
        $viewModel->setTerminal(true);
        $viewModel->setVariable('id', $id);
        return $viewModel;

    }
    
    public function selectfileAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){}
        
        $viewModel = new ViewModel();
        $viewModel->setTemplate('admin/clientes/clientes/selectfile');
        $viewModel->setTerminal(true);
        return $viewModel;

    }

}
