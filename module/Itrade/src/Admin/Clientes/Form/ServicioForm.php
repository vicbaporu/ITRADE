<?php

namespace Admin\Clientes\Form;

use Zend\Form\Form;

class ServicioForm extends Form
{
    public function __construct($idexpediente)
    {
        // we want to ignore the name passed
        parent::__construct('expedientservicio_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idexpedienteservicio',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'idexpediente',
            'type' => 'Hidden',
            'attributes' => array(
                'value' => $idexpediente,
            ),
        ));
        
        $this->add(array(
            'name' => 'expedienteservicio_fecha',
            'type' => 'Text',
            'options' => array(
                'label' => 'Fecha',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'servicio_medio',
            'type' => 'Select',
            'options' => array(
                'label' => 'Medio',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    'Terrestre LTL' => 'Terrestre LTL',
                    'Terrestre FTL' => 'Terrestre FTL',
                    'Aereo' => 'Aereo',
                    'Maritimo FCL' => 'Maritimo FCL',
                    'Maritimo LCL' => 'Maritimo LCL',
                ),
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'idservicio',
            'type' => 'Select',
            'options' => array(
                'label' => 'Servicio ',
                'empty_option' => 'Sin especificar',
                'value_options' => array(),
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
                'disabled' => true,
            ),
        ));

    }
}
