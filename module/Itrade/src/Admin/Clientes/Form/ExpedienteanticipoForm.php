<?php

namespace Admin\Clientes\Form;

use Zend\Form\Form;

class ExpedienteanticipoForm extends Form
{
    public function __construct($idexpediente,$moneda)
    {
        // we want to ignore the name passed
        parent::__construct('expedientegasto_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idexpedienteanticipo',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'expedienteanticipo_fecha',
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
            'name' => 'idexpediente',
            'type' => 'Hidden',
            'attributes' => array(
                'value' => $idexpediente,
            ),

        ));
        
        $this->add(array(
            'name' => 'expedienteanticipo_moneda',
            'type' => 'Hidden',
            'attributes' => array(
                'value' => $moneda,
            ),
        ));

        $this->add(array(
            'name' => 'expedienteanticipo_metodopago',
            'type' => 'Select',
            'options' => array(
                'label' => 'Método de pago',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    'efectivo' => 'Efectivo',
                    'cheque' => 'Cheque',
                    'trasnferencia' => 'Transferencia',
                    'otro' => 'Otro',
                ),
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'expedienteanticipo_cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Monto',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));

    }
}
