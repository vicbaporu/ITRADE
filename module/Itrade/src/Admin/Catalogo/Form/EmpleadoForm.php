<?php

namespace Catalogo\Form;

use Zend\Form\Form;

class EmpleadoForm extends Form
{
    public function __construct()
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

 
    }
}