<?php

namespace Admin\Clientes\Form;

use Zend\Form\Form;

class ExpedienteForm extends Form
{
    public function __construct($idcliente,$consignatarioembarcador = array())
    {
        // we want to ignore the name passed
        parent::__construct('expediente_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idexpediente',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'idcliente',
            'type' => 'Hidden',
            'attributes' => array(
                'value' => $idcliente,
            ),
        ));
        
        $this->add(array(
            'name' => 'idconsignatarioembarcador',
            'type' => 'Select',
            'options' => array(
                'label' => 'Consignatario/Embarcador',
                'empty_option' => 'Sin especificar',
                'value_options' => $consignatarioembarcador,
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
                'disabled' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'expediente_tipo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Tipo',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    'exportacion' => 'Exportación',
                    'importacion' => 'Importación',
                ),
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
               
    }
}
