<?php

namespace Admin\Clientes\Form;

use Zend\Form\Form;

class ClientesForm extends Form
{
    public function __construct($empleados_array = null)
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
                'name' => 'idempleadocomercial',
                'type' => 'Select',
                'options' => array(
                    'label' => 'Ejecutivo comercial',
                    'empty_option' => 'Sin especificar',
                    'value_options' => $empleados_array,

                ),
                'attributes' => array(
                    'class' => 'width-100',
                ),
            ));
            
            $this->add(array(
                'name' => 'idempleadooperaciones',
                'type' => 'Select',
                'options' => array(
                    'label' => 'Ejecutivo de opoeraciónes',
                    'empty_option' => 'Sin especificar',
                    'value_options' => $empleados_array,

                ),
                'attributes' => array(
                    'class' => 'width-100',
                ),
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
                    'label' => 'Teléfono ',
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



    }
}
