<?php

namespace Catalogo\Form;

use Zend\Form\Form;

class GastoForm extends Form
{
    public function __construct($categorias_gastos = null)
    {
        // we want to ignore the name passed
        parent::__construct('gasto_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idgastofacturacion',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'idcategoriagasto',
            'type' => 'Select',
            'options' => array(
                'label' => 'Estado',
                'empty_option' => 'Seleccione una categoria',
                'value_options' => $categorias_gastos
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'width-100',
            ),
        ));
        
        $this->add(array(
            'name' => 'gastofacturacion_nombre',
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
            'name' => 'gastofacturacion_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Descripción',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'gastofacturacion_iva',
            'type' => 'Select',
            'options' => array(
                'label' => 'Estado',
                'empty_option' => 'Seleccione el IVA correspondiente',
                'value_options' => array(
                    '0' => '0 %',
                    '4' => '4 %',
                    '16' => '16 %',
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'width-100',
            ),
        ));
      
    
    }
}

