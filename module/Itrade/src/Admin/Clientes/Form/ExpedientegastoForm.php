<?php

namespace Admin\Clientes\Form;

use Zend\Form\Form;

class ExpedientegastoForm extends Form
{
    public function __construct($idexpediente, $idcategoriagasto = array(), $idproveedoritrade=array())
    {
        // we want to ignore the name passed
        parent::__construct('expedientegasto_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idexpedientegasto',
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
            'name' => 'idcategoriagasto',
            'type' => 'Select',
            'options' => array(
                'label' => 'Categoria gasto',
                'empty_option' => 'Sin especificar',
                'value_options' => $idcategoriagasto,
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'idgastofacturacion',
            'type' => 'Select',
            'options' => array(
                'label' => 'Concepto',
                'empty_option' => 'Sin especificar',
                'value_options' => array(),
            ),
            'attributes' => array(
                'class' => 'width-100',
                'disabled' => true,
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'expedientegasto_fecha',
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
            'name' => 'expedientegasto_monto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Monto',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'placeholder' => '0.00',
            ),
        ));
        
        $this->add(array(
            'name' => 'idproveedoritrade',
            'type' => 'Select',
            'options' => array(
                'label' => 'Proveedor',
                'empty_option' => 'Sin especificar',
                'value_options' => $idproveedoritrade
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'expedientegasto_tipo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Consignatario/Embarcador',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    'gastorecibir' => 'Cargo a recibir',
                    'gastoconocido' => 'Cargo conocido',
                    'cobro' => 'Cobro',
                ),
            ),
            'attributes' => array(
                'class' => 'width-100',
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'expedientegasto_nota',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Nota',
            ),
            'attributes' => array(
              
                'class' => 'form-control',
            ),
        ));

    }
}
