<?php

namespace Client\Form;

use Zend\Form\Form;

class ClienteForm extends Form
{
    public function __construct($mexico_states = null,$data)
    {

        $countries = array
            (
                'mexico'            => 'México',
                'estados unidos'    => 'Estados Unidos'
            );

        parent::__construct('cliente_form');
        $this->setAttribute('method', 'post');

        //Datos generales
            $this->add(array(
                'name' => 'cliente_razon_social',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Razón Social',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteRazonsocial(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_rfc',
                'type' => 'Text',
                'options' => array(
                    'label' => 'RFC',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteRfc(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_calle',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Calle',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteCalle(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_numero_exterior',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Número exterior',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteNumero(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_numero_interior',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Número Interior',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteInterior(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_colonia',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Colonia',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteColonia(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_ciudad',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Ciudad',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteCiudad(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_cp',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Código Postal',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteCodigopostal(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_estado',
                'type' => 'Select',
                'options' => array(
                    'label' => 'Estado',
                    'empty_option' => 'Seleccione un estado',
                    'value_options' => $mexico_states,
                ),
                'attributes' => array(
                    'value' => $data->getClienteEstado(),
                    'class' => 'width-100',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_pais',
                'type' => 'Select',
                'options' => array(
                    'label' => 'País',
                    'empty_option' => 'Seleccione un país',
                    'value_options' => $countries,
                    
                ),
                'attributes' => array(
                    'value' => $data->getClientePais(),
                    'class' => 'width-100',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_email',
                'type' => 'Text',
                'options' => array(
                    'label' => 'E-mail',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteEmail(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_telefono',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Teléfono',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteTelefono(),

                ),
            ));
            $this->add(array(
                'name' => 'cliente_nombre',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Nombre',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteNombrecontacto(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_cumpleaños',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Fecha de cumpleaños',
                ),
                'attributes' => array(
                    'class' => 'form-control input-append.date',
                ),
            ));
        //Terminan datos generales
        
        //Datos Fiscales
            $this->add(array(
                'name' => 'cliente_f_razon_social',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Razón Social',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    //$data->getClienteNombrecontacto(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_rfc',
                'type' => 'Text',
                'options' => array(
                    'label' => 'RFC',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_calle',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Calle',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteCallefiscal(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_numero_exterior',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Número exterior',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteNumerofiscal(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_numero_interior',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Número Interior',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteInteriorfiscal(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_colonia',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Colonia',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteColoniafiscal(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_ciudad',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Ciudad',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteCiudadfiscal(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_cp',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Código Postal',
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                    'value' => $data->getClienteCodigopostalfiscal(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_estado',
                'type' => 'Select',
                'options' => array(
                    'label' => 'Estado',
                    'empty_option' => 'Seleccione un estado',
                    'value_options' => $mexico_states
                    
                ),
                'attributes' => array(
                    'class' => 'width-100',
                    'value' => $data->getClienteEstadofiscal(),
                ),
            ));
            $this->add(array(
                'name' => 'cliente_f_pais',
                'type' => 'Select',
                'options' => array(
                    'label' => 'País',
                    'empty_option' => 'Seleccione un país',
                    'value_options' => $countries
                    
                ),
                'attributes' => array(
                    'class' => 'width-100',
                    'value' => $data->getClientePaisfiscal(),
                ),
            ));
        //Terminan datos fiscales


        //Datos legales
            $this->add(array(
                'name' => 'cliente_padron',
                'type' => 'File',
                'options' => array(
                    'label' => 'Padron',
                ),
                 'attributes' => array(
                    'class' => 'form-control dropzone no-margin dz-clickable',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_encargo',
                'type' => 'File',
                'options' => array(
                    'label' => 'Encargo Conferido',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_R1',
                'type' => 'File',
                'options' => array(
                    'label' => 'R1 de la empresa',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_R2',
                'type' => 'File',
                'options' => array(
                    'label' => 'R2 de la empresa',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_identificacion',
                'type' => 'File',
                'options' => array(
                    'label' => 'Identificacion del representante legal',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_rfc_empresa',
                'type' => 'File',
                'options' => array(
                    'label' => 'RFC de la empresa',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_rfc_representante',
                'type' => 'File',
                'options' => array(
                    'label' => 'RFC del representante legal',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_acta',
                'type' => 'File',
                'options' => array(
                    'label' => 'Acta constitutiva de la empresa',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_poder',
                'type' => 'File',
                'options' => array(
                    'label' => 'Poder notarial',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_carta',
                'type' => 'File',
                'options' => array(
                    'label' => 'Carta',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_comprobante_domicilio',
                'type' => 'File',
                'options' => array(
                    'label' => 'Comprobante de domicilio',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_clabe',
                'type' => 'File',
                'options' => array(
                    'label' => 'Cuenta bancaria CLABE',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'application/pdf',
                ),
                 
            ));

            $this->add(array(
                'name' => 'cliente_carpeta',
                'type' => 'File',
                'options' => array(
                    'label' => 'Carpeta ZIP,RAR',
                ),
                 'attributes' => array(
                    'class' => 'form-control',
                    'accept'=> 'zip/.zip,.rar',
                    'multiple' => 'false',
                ),
                 
            ));
            $this->add(array(
                'name' => 'cliente_foto_domicilio',
                'type' => 'File',
                'options' => array(
                    'label' => 'Fotografías del domicilio',
                ),
                 'attributes' => array(
                    'class' => 'form-control ',
                    'accept'=> 'image/*',
                    'multiple' => 'false',
                ),
                 
            ));

        //Terminan datos legales

    }
}
