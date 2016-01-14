<?php

namespace Admin\Clientes\Form;

use Zend\Form\Form;

class ClientesForm extends Form
{
    public function __construct()
    {
        $countries = array(
                'México',
                'Estados Unidos'
            );

        parent::__construct('cliente_form');
        $this->setAttribute('method', 'post');

            //Datos generales
        
            $this->add(array(
                'name' => 'idcliente',
                'type' => 'Hidden',
            ));

            $this->add(array(
                'name' => 'cliente_nombrecontacto',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Nombre de contacto',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control',
                ),
            ));

            $this->add(array(
                'name' => 'cliente_telefono',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Teléfono',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control',
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_celular',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Célular',
                ),
                'attributes' => array(
                    'class' => 'form-control',
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_calle',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Calle',
                ),
                'attributes' => array(
                   
                    'class' => 'form-control',
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_numero',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Número exterior',
                ),
                'attributes' => array(
                    'class' => 'form-control',
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_interior',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Número Interior',
                ),
                'attributes' => array(
                    'class' => 'form-control',
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_colonia',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Colonia',
                ),
                'attributes' => array(
                    'class' => 'form-control',
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_ciudad',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Ciudad',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control',
                ),
            ));
            
             $this->add(array(
                'name' => 'cliente_estado',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Estado',
                ),
                'attributes' => array(
                    'class' => 'form-control',
                ),
            ));
             
            $this->add(array(
               'name' => 'cliente_pais',
               'type' => 'Text',
               'options' => array(
                   'label' => 'Pais',
               ),
               'attributes' => array(
                   'required' => true,
                   'class' => 'form-control',
               ),
           ));
            
            $this->add(array(
                'name' => 'cliente_codigopostal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Código Postal',
                ),
                'attributes' => array(
                    'class' => 'form-control',
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_cumpleanios',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Fecha de nacimiento',
                ),
                'attributes' => array(
                    'class' => 'form-control input-append date',
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_email',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Correo electrónico',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control email-field validate-ajax',
                    'dirname' => '/clientes'
                ),
            ));
            
            $this->add(array(
                'name' => 'cliente_password',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Password',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control',
                ),
            ));
            


            $this->add(array(
                'name' => 'cliente_razonsocial',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Razón Social',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_rfc',
                'type' => 'Text',
                'options' => array(
                    'label' => 'RFC',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control',
                ),
            ));

            $this->add(array(
                'name' => 'cliente_callefiscal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Calle',
                ),
                'attributes' => array(
                  
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_numerofiscal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Número exterior',
                ),
                'attributes' => array(
  
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_interiorfiscal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Número Interior',
                ),
                'attributes' => array(
        
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_coloniafiscal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Colonia',
                ),
                'attributes' => array(
           
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_ciudadfiscal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Ciudad',
                ),
                'attributes' => array(
         
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_codigopostalfiscal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Código Postal',
                ),
                'attributes' => array(
        
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_estadofiscal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Estado',
                ),
                'attributes' => array(
   
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_paisfiscal',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Pais',
                ),
                'attributes' => array(
     
                    'class' => 'form-control',
                ),
            ));

        //Terminan datos fiscales


        //Datos legales
            $this->add(array(
                'name' => 'cliente_padron',
                'type' => 'File',
                'options' => array(
                    'label' => 'Padron',
                ),
                 'attributes' => array(
                    'class' => 'form-control dropzone no-margin dz-clickable',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_encargo',
                'type' => 'File',
                'options' => array(
                    'label' => 'Encargo Conferido',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_R1',
                'type' => 'File',
                'options' => array(
                    'label' => 'R1 de la empresa',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_R2',
                'type' => 'File',
                'options' => array(
                    'label' => 'R2 de la empresa',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_identificacion',
                'type' => 'File',
                'options' => array(
                    'label' => 'Identificacion del representante legal',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_rfc_empresa',
                'type' => 'File',
                'options' => array(
                    'label' => 'RFC de la empresa',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_rfc_representante',
                'type' => 'File',
                'options' => array(
                    'label' => 'RFC del representante legal',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_acta',
                'type' => 'File',
                'options' => array(
                    'label' => 'Acta constitutiva de la empresa',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_poder',
                'type' => 'File',
                'options' => array(
                    'label' => 'Poder notarial',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_carta',
                'type' => 'File',
                'options' => array(
                    'label' => 'Carta',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_comprobante_domicilio',
                'type' => 'File',
                'options' => array(
                    'label' => 'Comprobante de domicilio',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_clabe',
                'type' => 'File',
                'options' => array(
                    'label' => 'Cuenta bancaria CLABE',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));

            $this->add(array(
                'name' => 'cliente_carpeta',
                'type' => 'File',
                'options' => array(
                    'label' => 'Carpeta ZIP,RAR',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'zip/.zip,.rar',
                    'multiple' => 'true',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_foto_domicilio',
                'type' => 'File',
                'options' => array(
                    'label' => 'Fotografías del domicilio',
                ),
                 'attributes' => array(
                    'class' => 'form-control ',
                    'accept'=> 'image/*',
                    'multiple' => 'true',
                ),
                 
            ));

        //Terminan datos legales

    }
}
