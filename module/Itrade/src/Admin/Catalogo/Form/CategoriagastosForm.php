<?php

namespace Catalogo\Form;

use Zend\Form\Form;

class CategoriagastosForm extends Form
{
    public function __construct($categorias_gastos = null)
    {
        // we want to ignore the name passed
        parent::__construct('categoriagastos_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idcategoriagasto',
            'type' => 'Hidden',
        ));
                
        $this->add(array(
            'name' => 'categoriagasto_nombre',
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
            'name' => 'categoriagasto_descripcion',
            'type' => 'Textarea',
            'options' => array(
                'label' => 'Descripción',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));

    }
}

