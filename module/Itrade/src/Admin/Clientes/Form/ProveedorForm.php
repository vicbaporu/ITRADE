<?php

namespace Admin\Clientes\Form;

use Zend\Form\Form;

class ProveedorForm extends Form
{
    public function __construct($idcliente)
    {
        // we want to ignore the name passed
        parent::__construct('proveedor_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idproveedorcliente',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'idcliente',
            'type' => 'Hidden',
            'value' => $idcliente,
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_nombre',
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
            'name' => 'proveedorcliente_nombrecontacto',
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
            'name' => 'proveedorcliente_taxid',
            'type' => 'Text',
            'options' => array(
                'label' => 'Tax ID',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_telefonocontacto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Teléfono',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
         $this->add(array(
            'name' => 'proveedorcliente_emailcontacto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Correo electrónico',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control email-field',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_calle',
            'type' => 'Text',
            'options' => array(
                'label' => 'Calle',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_numero',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número exterior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_interior',
            'type' => 'Text',
            'options' => array(
                'label' => 'Número interior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_colonia',
            'type' => 'Text',
            'options' => array(
                'label' => 'Colonia',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_ciudad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Ciudad',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_estado',
            'type' => 'Text',
            'options' => array(
                'label' => 'Estado',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedorcliente_pais',
            'type' => 'Text',
            'options' => array(
                'label' => 'País',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
                
    }
}
