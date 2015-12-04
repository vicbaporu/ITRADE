<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EmpleadoController extends AbstractActionController
{
    public function indexAction()
    {
        $collection = \EmpleadoQuery::create()->filterByIdempleado(1,  \Criteria::NOT_EQUAL)->find();
        return new ViewModel(array(
            'collection' => $collection,
        ));
    }
    
    public function nuevoAction()
    {
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            
            $entity = new \Empleado();
            
            foreach($post_data as $key => $value){
                if(\EmpleadoPeer::getTableMap()->hasColumn($key) && !empty($value)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //SETIAMOS LA FECHA EN EL FORMATO CORRECTO
            $empleado_iniciocontrato = date_create_from_format('d/m/Y', $post_data['empleado_iniciocontrato']);
            
            $entity->setEmpleadoIniciocontrato($empleado_iniciocontrato);
            
            //SETIAMOS LA CONTRASEÑA EN MD5
            $entity->setEmpleadoPassword(md5($post_data['empleado_password']));
            
            //SETIAMOS EL STATUS COMO ACTIVO
            $entity->setEmpleadoEstatus('activo');
          
            $entity->save();
            
            //LA FOTO DEL EMPLEADO
            if(!empty($post_files['empleado_foto']['name'])){
                
                $upload_folder ='/img/admin/profiles/';
                
                $img_type = $post_files['empleado_foto']['type']; $img_type = explode('/', $img_type); $img_type = $img_type[1];
                $img_info = getimagesize($post_files['empleado_foto']['tmp_name']); 
                
                $img_original = imagecreatefromjpeg($post_files['empleado_foto']['tmp_name']);
                $max_ancho = 250;
                $max_alto = 250;
                
                list($ancho,$alto)=getimagesize($post_files['empleado_foto']['tmp_name']);
                
                //Se calcula ancho y alto de la imagen final
                $x_ratio = $max_ancho / $ancho;
                $y_ratio = $max_alto / $alto;
                
                //Si el ancho y el alto de la imagen no superan los maximos,
                //ancho final y alto final son los que tiene actualmente
                if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
                    $ancho_final = $ancho;
                    $alto_final = $alto;
                }
                
                
                /*
                 * si proporcion horizontal*alto mayor que el alto maximo,
                 * alto final es alto por la proporcion horizontal
                 * es decir, le quitamos al ancho, la misma proporcion que
                 * le quitamos al alto
                 *
                 */ 
                elseif (($x_ratio * $alto) < $max_alto) {
                    $alto_final = ceil($x_ratio * $alto);
                    $ancho_final = $max_ancho;
                }
                
                /*
                 * Igual que antes pero a la inversa
                 */ 
                else {
                    $ancho_final = ceil($y_ratio * $ancho);
                    $alto_final = $max_alto;
                }
                
                //Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
                $tmp=imagecreatetruecolor($ancho_final,$alto_final);
                
                //Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
                imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
                
                //Se destruye variable $img_original para liberar memoria
                imagedestroy($img_original);
                
                //Definimos la calidad de la imagen final
                $calidad=95;
                //Se crea la imagen final en el directorio indicado

                imagejpeg($tmp,$_SERVER['DOCUMENT_ROOT']."/img/admin/profiles/empleado_avatar_".$entity->getIdempleado().".jpg",$calidad);
                
                //SETIAMOS LA FOTO
                $entity->setEmpleadoFoto("/img/admin/profiles/empleado_avatar_".$entity->getIdempleado().".jpg");
                
                $entity->save();
                
            }
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                  
             //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/catalogo/empleados', array('action' => 'editar','id' => $entity->getIdempleado()));
                
        }
        
        //INSTANCIAMOS NUESTRO FORMULARIO
        $mexico_states = \Shared\GeneralFunction\Geolocation::getMexicoStates();
        $form = new \Catalogo\Form\EmpleadoForm($mexico_states);
        
        //RETORNAMOS A NUESTRA VISTA
        return new ViewModel(array(
            'form' => $form
        ));
    }
    
    public function editarAction(){
        //ID ENTIDAD
        $id = $this->params()->fromRoute('id');
        
        $request = $this->getRequest();
        
        if($request->isPost()){
        
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            
            //INSTANCIAMOS NUESTRA ENTIDAD
            $entity = \EmpleadoQuery::create()->findPk($id);
           
            
            //SETIAMOS NUESTROS DATOS CON EXCEPCIONES
            foreach($post_data as $key => $value){
                if(\EmpleadoPeer::getTableMap()->hasColumn($key) && $key!= 'empleado_iniciocontrato' && $key!= 'empleado_password'  && $key!= 'empleado_foto'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
           
            //SETIAMOS LA FECHA DE CONTRATO
            if(!empty($post_data['empleado_iniciocontrato'])){
                $empleado_iniciocontrato = date_create_from_format('d/m/Y', $post_data['empleado_iniciocontrato']);
                $entity->setEmpleadoIniciocontrato($empleado_iniciocontrato);
            }
            
            //SETIAMOS LA CONTRASEÑA EN MD5
           if(!empty($post_data['empleado_password'])){
                $entity->setEmpleadoPassword(md5($post_data['empleado_password']));
            }
            
            //ELIMINAMOS LA FOTOGRAFIA DEL EMPLEADO
            $entity->setEmpleadoFoto(NULL);
            unlink($_SERVER['DOCUMENT_ROOT'] . "/img/admin/profiles/empleado_avatar_" . $entity->getIdempleado() . ".jpg");
            
           $entity->save();
           
           //LA FOTO DEL EMPLEADO
            if (!empty($post_files['empleado_foto']['name'])) {

                $upload_folder = '/img/admin/profiles/';

                $img_type = $post_files['empleado_foto']['type'];
                $img_type = explode('/', $img_type);
                $img_type = $img_type[1];
                $img_info = getimagesize($post_files['empleado_foto']['tmp_name']);

                $img_original = imagecreatefromjpeg($post_files['empleado_foto']['tmp_name']);
                $max_ancho = 250;
                $max_alto = 250;

                list($ancho, $alto) = getimagesize($post_files['empleado_foto']['tmp_name']);

                //Se calcula ancho y alto de la imagen final
                $x_ratio = $max_ancho / $ancho;
                $y_ratio = $max_alto / $alto;

                //Si el ancho y el alto de la imagen no superan los maximos,
                //ancho final y alto final son los que tiene actualmente
                if (($ancho <= $max_ancho) && ($alto <= $max_alto)) {//Si ancho
                    $ancho_final = $ancho;
                    $alto_final = $alto;
                }


                /*
                 * si proporcion horizontal*alto mayor que el alto maximo,
                 * alto final es alto por la proporcion horizontal
                 * es decir, le quitamos al ancho, la misma proporcion que
                 * le quitamos al alto
                 *
                 */ elseif (($x_ratio * $alto) < $max_alto) {
                    $alto_final = ceil($x_ratio * $alto);
                    $ancho_final = $max_ancho;
                }

                /*
                 * Igual que antes pero a la inversa
                 */ else {
                    $ancho_final = ceil($y_ratio * $ancho);
                    $alto_final = $max_alto;
                }

                //Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
                $tmp = imagecreatetruecolor($ancho_final, $alto_final);

                //Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
                imagecopyresampled($tmp, $img_original, 0, 0, 0, 0, $ancho_final, $alto_final, $ancho, $alto);

                //Se destruye variable $img_original para liberar memoria
                imagedestroy($img_original);

                //Definimos la calidad de la imagen final
                $calidad = 95;
                //Se crea la imagen final en el directorio indicado

                imagejpeg($tmp, $_SERVER['DOCUMENT_ROOT'] . "/img/admin/profiles/empleado_avatar_" . $entity->getIdempleado() . ".jpg", $calidad);

                //SETIAMOS LA FOTO
                $entity->setEmpleadoFoto("/img/admin/profiles/empleado_avatar_" . $entity->getIdempleado() . ".jpg");

                $entity->save();
            }
            
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                  
             //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/catalogo/empleados', array('action' => 'editar','id' => $entity->getIdempleado()));
        }
        
        
        
        $exist = \EmpleadoQuery::create()->filterByIdempleado($id)->exists();
        
        if($exist){
            
            $entity = \EmpleadoQuery::create()->findPk($id);

            //INSTANCIAMOS NUESTRO FORMULARIO
            $mexico_states = \Shared\GeneralFunction\Geolocation::getMexicoStates();
            $form = new \Catalogo\Form\EmpleadoForm($mexico_states);
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            //REMOVEMOS EL CAMPO DE LA FECHA
            $form->get('empleado_iniciocontrato')->setValue('');
            //RETORNAMOS A NUESTRA VISTA
            return new ViewModel(array(
                'entity' => json_encode($entity->toArray(\BasePeer::TYPE_FIELDNAME)),
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'form' => $form
            ));
        
           
            
        }else{
            return $this->redirect()->toRoute('admin/catalogo/empleados', array('action' => 'index'));
        }
       

    }
    
    public function validateajaxAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $query = new \EmpleadoQuery();
       
            $query->filterBy(\BasePeer::translateFieldname('empleado', $post_data['field'], \BasePeer::TYPE_FIELDNAME, \BasePeer::TYPE_PHPNAME), $post_data['value'], \Criteria::EQUAL);
            
            $exist = $query->exists();
            
            if($post_data['field'] == 'empleado_email'){
                $msj = 'correo electrónico en uso';
            }
            
            return $this->getResponse()->setContent(json_encode(array('exist' => $exist,'msj' => $msj)));
            
            
        }
        
       
    }
}
