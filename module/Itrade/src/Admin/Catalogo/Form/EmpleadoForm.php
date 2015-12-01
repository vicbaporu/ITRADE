<?php

namespace Catalogo\Form;

use Zend\Form\Form;

class EmpleadoForm extends Form
{
    public function __construct($mexico_states = null)
    {
        // we want to ignore the name passed
        parent::__construct('empleado_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idempleado',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'empleado_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_apellidopaterno',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido paterno',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_apallidomaterno',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido materno',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_email',
            'type' => 'Text',
            'options' => array(
                'label' => 'Apellido materno',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_celular',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono celular',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_telefono',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono fijo',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        
        
        /*
         * DIRECCION
         */
        
        $this->add(array(
            'name' => 'empleado_calle',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono fijo',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        
        $this->add(array(
            'name' => 'empleado_calle',
            'type' => 'Text',
            'options' => array(
                'label' => 'Calle',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_numero',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número exterior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_interior',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número interior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_colonia',
            'type' => 'Text',
            'options' => array(
                'label' => 'Colonia',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_ciudad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ciudad',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_estado',
            'type' => 'Select',
            'options' => array(
                'label' => 'Estado',
                'empty_option' => 'Seleccione un estado',
                'value_options' => $mexico_states
                
            ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_codigopostal',
            'type' => 'Text',
            'options' => array(
                'label' => 'Código postal',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        /*
         * INFORMACION LABORAL
         */
        
        $this->add(array(
            'name' => 'empleado_iniciocontrato',
            'type' => 'Text',
            'options' => array(
                'label' => 'Inicio de contrato',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_rfc',
            'type' => 'Text',
            'options' => array(
                'label' => 'R.F.C',
            ),
            'attributes' => array(

                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_nss',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número del seguro social',
            ),
            'attributes' => array(

                'class' => 'form-control',
            ),
        ));
        
        /*
         * INFORMACION DE CONTACTO
         */
        
        $this->add(array(
            'name' => 'empleado_nombrecontacto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre de contacto',
            ),
            'attributes' => array(

                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_telefonocontacto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número de contacto',
            ),
            'attributes' => array(

                'class' => 'form-control',
            ),
        ));
        
        /*
         * DATOS DE ACCESO
         */
        
        $this->add(array(
            'name' => 'empleado_rol',
            'type' => 'Select',
            'options' => array(
                'label' => 'Rol',
                'empty_option' => 'Seleccione un rol',
                'value_options' =>array(
                    'operaciones' => 'Operaciónes',
                    'ventas' => 'Ventas',
                    'administrador' => 'Administrador' 
                ),
                
            ),
            'attributes' => array(
                'class' => 'width-100',
            ),
        ));
        
         $this->add(array(
            'name' => 'empleado_email',
            'type' => 'Text',
            'options' => array(
                'label' => 'Correo electrónico',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
         
         $this->add(array(
            'name' => 'empleado_password',
            'type' => 'Password',
            'options' => array(
                'label' => 'Contraseña',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
         
         $this->add(array(
            'name' => 'empleado_foto',
            'type' => 'File',
             'attributes' => array(
                'class' => 'hidden',
            ),
             
        ));

        
 
    }
}
