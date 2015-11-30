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
                'label' => 'Numero exterior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_interior',
            'type' => 'Text',
            'options' => array(
                'label' => 'Numero interior',
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
                'class' => 'form-control',
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

 
    }
}


