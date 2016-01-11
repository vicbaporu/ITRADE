<?php

namespace Catalogo\Form;

use Zend\Form\Form;

class ServiciosForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('servicios_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idservicio',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'servicio_nombre',
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
            'name' => 'servicio_tipo',
            'type' => 'Text',
            'options' => array(
                'label' => 'Tipo',
            ),
            'attributes' => array(
                'required' => true,
                'disabled' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'servicio_medio',
            'type' => 'Text',
            'options' => array(
                'label' => 'Medio',
            ),
            'attributes' => array(
                'required' => true,
                'disabled' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'servicio_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Descripción',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
      
    }
}
