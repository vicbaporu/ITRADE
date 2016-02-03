<?php

namespace Admin\Clientes\Form;

use Zend\Form\Form;

class HistorialForm extends Form
{
    public function __construct($idexpedienteservicio,$idestadoservicio)
    {
        // we want to ignore the name passed
        parent::__construct('expedientservicio_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idexpedientehistorial',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'idexpedienteservicio',
            'type' => 'Hidden',
            'attributes' => array(
                'value' => $idexpedienteservicio,
            ),
        ));
        
        $this->add(array(
            'name' => 'expedientehistorial_nota',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Nota',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'idestadoservicio',
            'type' => 'Select',
            'options' => array(
                'label' => 'Medio',
                'empty_option' => 'Sin especificar',
                'value_options' => $idestadoservicio
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));

    }
}
