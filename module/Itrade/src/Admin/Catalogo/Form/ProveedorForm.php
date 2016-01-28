<?php

namespace Catalogo\Form;

use Zend\Form\Form;

class ProveedorForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('proveedor_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idproveedoritrade',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_nombre',
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
            'name' => 'proveedoritrade_nombrecontacto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre de contacto',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_telefono',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono ',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_calle',
            'type' => 'Text',
            'options' => array(
                'label' => 'Calle',
            ),
            'attributes' => array(
                
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_numero',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número exterior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_interior',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número interior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_colonia',
            'type' => 'Text',
            'options' => array(
                'label' => 'Colonia',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_ciudad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ciudad',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_estado',
            'type' => 'Text',
            'options' => array(
                'label' => 'Estado',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_pais',
            'type' => 'Text',
            'options' => array(
                'label' => 'País',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_email',
            'type' => 'Text',
            'options' => array(
                'label' => 'Correo electrónico',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_rfc',
            'type' => 'Text',
            'options' => array(
                'label' => 'RFC',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedoritrade_clabe',
            'type' => 'Text',
            'options' => array(
                'label' => 'CLABE',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
    }
}
