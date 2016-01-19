<?php


/**
 * Base class that represents a row from the 'cliente' table.
 *
 *
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseCliente extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ClientePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ClientePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcliente field.
     * @var        int
     */
    protected $idcliente;

    /**
     * The value for the cliente_email field.
     * @var        string
     */
    protected $cliente_email;

    /**
     * The value for the cliente_password field.
     * @var        string
     */
    protected $cliente_password;

    /**
     * The value for the cliente_razonsocial field.
     * @var        string
     */
    protected $cliente_razonsocial;

    /**
     * The value for the cliente_rfc field.
     * @var        string
     */
    protected $cliente_rfc;

    /**
     * The value for the cliente_calle field.
     * @var        string
     */
    protected $cliente_calle;

    /**
     * The value for the cliente_numero field.
     * @var        string
     */
    protected $cliente_numero;

    /**
     * The value for the cliente_interior field.
     * @var        string
     */
    protected $cliente_interior;

    /**
     * The value for the cliente_colonia field.
     * @var        string
     */
    protected $cliente_colonia;

    /**
     * The value for the cliente_codigopostal field.
     * @var        string
     */
    protected $cliente_codigopostal;

    /**
     * The value for the cliente_ciudad field.
     * @var        string
     */
    protected $cliente_ciudad;

    /**
     * The value for the cliente_estado field.
     * @var        string
     */
    protected $cliente_estado;

    /**
     * The value for the cliente_pais field.
     * @var        string
     */
    protected $cliente_pais;

    /**
     * The value for the cliente_telefono field.
     * @var        string
     */
    protected $cliente_telefono;

    /**
     * The value for the cliente_celular field.
     * @var        string
     */
    protected $cliente_celular;

    /**
     * The value for the cliente_nombrecontacto field.
     * @var        string
     */
    protected $cliente_nombrecontacto;

    /**
     * The value for the cliente_cumpleanios field.
     * @var        string
     */
    protected $cliente_cumpleanios;

    /**
     * The value for the cliente_callefiscal field.
     * @var        string
     */
    protected $cliente_callefiscal;

    /**
     * The value for the cliente_numerofiscal field.
     * @var        string
     */
    protected $cliente_numerofiscal;

    /**
     * The value for the cliente_interiorfiscal field.
     * @var        string
     */
    protected $cliente_interiorfiscal;

    /**
     * The value for the cliente_coloniafiscal field.
     * @var        string
     */
    protected $cliente_coloniafiscal;

    /**
     * The value for the cliente_codigopostalfiscal field.
     * @var        string
     */
    protected $cliente_codigopostalfiscal;

    /**
     * The value for the cliente_ciudadfiscal field.
     * @var        string
     */
    protected $cliente_ciudadfiscal;

    /**
     * The value for the cliente_estadofiscal field.
     * @var        string
     */
    protected $cliente_estadofiscal;

    /**
     * The value for the cliente_paisfiscal field.
     * @var        string
     */
    protected $cliente_paisfiscal;

    /**
     * The value for the cliente_padronimportador field.
     * @var        string
     */
    protected $cliente_padronimportador;

    /**
     * The value for the cliente_encargadoconferido field.
     * @var        string
     */
    protected $cliente_encargadoconferido;

    /**
     * The value for the cliente_r1 field.
     * @var        string
     */
    protected $cliente_r1;

    /**
     * The value for the cliente_r2 field.
     * @var        string
     */
    protected $cliente_r2;

    /**
     * The value for the cliente_identificacionrepresentantelegal field.
     * @var        string
     */
    protected $cliente_identificacionrepresentantelegal;

    /**
     * The value for the cliente_rfcrepresentantelegal field.
     * @var        string
     */
    protected $cliente_rfcrepresentantelegal;

    /**
     * The value for the cliente_actaconstitutiva field.
     * @var        string
     */
    protected $cliente_actaconstitutiva;

    /**
     * The value for the cliente_podernotarial field.
     * @var        string
     */
    protected $cliente_podernotarial;

    /**
     * The value for the cliente_cartaencomienda field.
     * @var        string
     */
    protected $cliente_cartaencomienda;

    /**
     * The value for the cliente_comprobantedomicilio field.
     * @var        string
     */
    protected $cliente_comprobantedomicilio;

    /**
     * The value for the cliente_comprobanteclabe field.
     * @var        string
     */
    protected $cliente_comprobanteclabe;

    /**
     * The value for the cliente_clabe field.
     * @var        string
     */
    protected $cliente_clabe;

    /**
     * The value for the cliente_archivoszip field.
     * @var        string
     */
    protected $cliente_archivoszip;

    /**
     * The value for the idempleadocomercial field.
     * @var        int
     */
    protected $idempleadocomercial;

    /**
     * The value for the idempleadooperaciones field.
     * @var        int
     */
    protected $idempleadooperaciones;

    /**
     * The value for the cliente_ultimologin field.
     * @var        string
     */
    protected $cliente_ultimologin;

    /**
     * The value for the cliente_fotografiasdomicilio field.
     * @var        string
     */
    protected $cliente_fotografiasdomicilio;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleadocomercial;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleadooperaciones;

    /**
     * @var        PropelObjectCollection|Clientearchivo[] Collection to store aggregation of Clientearchivo objects.
     */
    protected $collClientearchivos;
    protected $collClientearchivosPartial;

    /**
     * @var        PropelObjectCollection|Expediente[] Collection to store aggregation of Expediente objects.
     */
    protected $collExpedientes;
    protected $collExpedientesPartial;

    /**
     * @var        PropelObjectCollection|Proveedorcliente[] Collection to store aggregation of Proveedorcliente objects.
     */
    protected $collProveedorclientes;
    protected $collProveedorclientesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $clientearchivosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $expedientesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $proveedorclientesScheduledForDeletion = null;

    /**
     * Get the [idcliente] column value.
     *
     * @return int
     */
    public function getIdcliente()
    {

        return $this->idcliente;
    }

    /**
     * Get the [cliente_email] column value.
     *
     * @return string
     */
    public function getClienteEmail()
    {

        return $this->cliente_email;
    }

    /**
     * Get the [cliente_password] column value.
     *
     * @return string
     */
    public function getClientePassword()
    {

        return $this->cliente_password;
    }

    /**
     * Get the [cliente_razonsocial] column value.
     *
     * @return string
     */
    public function getClienteRazonsocial()
    {

        return $this->cliente_razonsocial;
    }

    /**
     * Get the [cliente_rfc] column value.
     *
     * @return string
     */
    public function getClienteRfc()
    {

        return $this->cliente_rfc;
    }

    /**
     * Get the [cliente_calle] column value.
     *
     * @return string
     */
    public function getClienteCalle()
    {

        return $this->cliente_calle;
    }

    /**
     * Get the [cliente_numero] column value.
     *
     * @return string
     */
    public function getClienteNumero()
    {

        return $this->cliente_numero;
    }

    /**
     * Get the [cliente_interior] column value.
     *
     * @return string
     */
    public function getClienteInterior()
    {

        return $this->cliente_interior;
    }

    /**
     * Get the [cliente_colonia] column value.
     *
     * @return string
     */
    public function getClienteColonia()
    {

        return $this->cliente_colonia;
    }

    /**
     * Get the [cliente_codigopostal] column value.
     *
     * @return string
     */
    public function getClienteCodigopostal()
    {

        return $this->cliente_codigopostal;
    }

    /**
     * Get the [cliente_ciudad] column value.
     *
     * @return string
     */
    public function getClienteCiudad()
    {

        return $this->cliente_ciudad;
    }

    /**
     * Get the [cliente_estado] column value.
     *
     * @return string
     */
    public function getClienteEstado()
    {

        return $this->cliente_estado;
    }

    /**
     * Get the [cliente_pais] column value.
     *
     * @return string
     */
    public function getClientePais()
    {

        return $this->cliente_pais;
    }

    /**
     * Get the [cliente_telefono] column value.
     *
     * @return string
     */
    public function getClienteTelefono()
    {

        return $this->cliente_telefono;
    }

    /**
     * Get the [cliente_celular] column value.
     *
     * @return string
     */
    public function getClienteCelular()
    {

        return $this->cliente_celular;
    }

    /**
     * Get the [cliente_nombrecontacto] column value.
     *
     * @return string
     */
    public function getClienteNombrecontacto()
    {

        return $this->cliente_nombrecontacto;
    }

    /**
     * Get the [optionally formatted] temporal [cliente_cumpleanios] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getClienteCumpleanios($format = '%x')
    {
        if ($this->cliente_cumpleanios === null) {
            return null;
        }

        if ($this->cliente_cumpleanios === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->cliente_cumpleanios);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->cliente_cumpleanios, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [cliente_callefiscal] column value.
     *
     * @return string
     */
    public function getClienteCallefiscal()
    {

        return $this->cliente_callefiscal;
    }

    /**
     * Get the [cliente_numerofiscal] column value.
     *
     * @return string
     */
    public function getClienteNumerofiscal()
    {

        return $this->cliente_numerofiscal;
    }

    /**
     * Get the [cliente_interiorfiscal] column value.
     *
     * @return string
     */
    public function getClienteInteriorfiscal()
    {

        return $this->cliente_interiorfiscal;
    }

    /**
     * Get the [cliente_coloniafiscal] column value.
     *
     * @return string
     */
    public function getClienteColoniafiscal()
    {

        return $this->cliente_coloniafiscal;
    }

    /**
     * Get the [cliente_codigopostalfiscal] column value.
     *
     * @return string
     */
    public function getClienteCodigopostalfiscal()
    {

        return $this->cliente_codigopostalfiscal;
    }

    /**
     * Get the [cliente_ciudadfiscal] column value.
     *
     * @return string
     */
    public function getClienteCiudadfiscal()
    {

        return $this->cliente_ciudadfiscal;
    }

    /**
     * Get the [cliente_estadofiscal] column value.
     *
     * @return string
     */
    public function getClienteEstadofiscal()
    {

        return $this->cliente_estadofiscal;
    }

    /**
     * Get the [cliente_paisfiscal] column value.
     *
     * @return string
     */
    public function getClientePaisfiscal()
    {

        return $this->cliente_paisfiscal;
    }

    /**
     * Get the [cliente_padronimportador] column value.
     *
     * @return string
     */
    public function getClientePadronimportador()
    {

        return $this->cliente_padronimportador;
    }

    /**
     * Get the [cliente_encargadoconferido] column value.
     *
     * @return string
     */
    public function getClienteEncargadoconferido()
    {

        return $this->cliente_encargadoconferido;
    }

    /**
     * Get the [cliente_r1] column value.
     *
     * @return string
     */
    public function getClienteR1()
    {

        return $this->cliente_r1;
    }

    /**
     * Get the [cliente_r2] column value.
     *
     * @return string
     */
    public function getClienteR2()
    {

        return $this->cliente_r2;
    }

    /**
     * Get the [cliente_identificacionrepresentantelegal] column value.
     *
     * @return string
     */
    public function getClienteIdentificacionrepresentantelegal()
    {

        return $this->cliente_identificacionrepresentantelegal;
    }

    /**
     * Get the [cliente_rfcrepresentantelegal] column value.
     *
     * @return string
     */
    public function getClienteRfcrepresentantelegal()
    {

        return $this->cliente_rfcrepresentantelegal;
    }

    /**
     * Get the [cliente_actaconstitutiva] column value.
     *
     * @return string
     */
    public function getClienteActaconstitutiva()
    {

        return $this->cliente_actaconstitutiva;
    }

    /**
     * Get the [cliente_podernotarial] column value.
     *
     * @return string
     */
    public function getClientePodernotarial()
    {

        return $this->cliente_podernotarial;
    }

    /**
     * Get the [cliente_cartaencomienda] column value.
     *
     * @return string
     */
    public function getClienteCartaencomienda()
    {

        return $this->cliente_cartaencomienda;
    }

    /**
     * Get the [cliente_comprobantedomicilio] column value.
     *
     * @return string
     */
    public function getClienteComprobantedomicilio()
    {

        return $this->cliente_comprobantedomicilio;
    }

    /**
     * Get the [cliente_comprobanteclabe] column value.
     *
     * @return string
     */
    public function getClienteComprobanteclabe()
    {

        return $this->cliente_comprobanteclabe;
    }

    /**
     * Get the [cliente_clabe] column value.
     *
     * @return string
     */
    public function getClienteClabe()
    {

        return $this->cliente_clabe;
    }

    /**
     * Get the [cliente_archivoszip] column value.
     *
     * @return string
     */
    public function getClienteArchivoszip()
    {

        return $this->cliente_archivoszip;
    }

    /**
     * Get the [idempleadocomercial] column value.
     *
     * @return int
     */
    public function getIdempleadocomercial()
    {

        return $this->idempleadocomercial;
    }

    /**
     * Get the [idempleadooperaciones] column value.
     *
     * @return int
     */
    public function getIdempleadooperaciones()
    {

        return $this->idempleadooperaciones;
    }

    /**
     * Get the [optionally formatted] temporal [cliente_ultimologin] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getClienteUltimologin($format = 'Y-m-d H:i:s')
    {
        if ($this->cliente_ultimologin === null) {
            return null;
        }

        if ($this->cliente_ultimologin === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->cliente_ultimologin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->cliente_ultimologin, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [cliente_fotografiasdomicilio] column value.
     *
     * @return string
     */
    public function getClienteFotografiasdomicilio()
    {

        return $this->cliente_fotografiasdomicilio;
    }

    /**
     * Set the value of [idcliente] column.
     *
     * @param  int $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setIdcliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcliente !== $v) {
            $this->idcliente = $v;
            $this->modifiedColumns[] = ClientePeer::IDCLIENTE;
        }


        return $this;
    } // setIdcliente()

    /**
     * Set the value of [cliente_email] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_email !== $v) {
            $this->cliente_email = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_EMAIL;
        }


        return $this;
    } // setClienteEmail()

    /**
     * Set the value of [cliente_password] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClientePassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_password !== $v) {
            $this->cliente_password = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_PASSWORD;
        }


        return $this;
    } // setClientePassword()

    /**
     * Set the value of [cliente_razonsocial] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_razonsocial !== $v) {
            $this->cliente_razonsocial = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_RAZONSOCIAL;
        }


        return $this;
    } // setClienteRazonsocial()

    /**
     * Set the value of [cliente_rfc] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_rfc !== $v) {
            $this->cliente_rfc = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_RFC;
        }


        return $this;
    } // setClienteRfc()

    /**
     * Set the value of [cliente_calle] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_calle !== $v) {
            $this->cliente_calle = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CALLE;
        }


        return $this;
    } // setClienteCalle()

    /**
     * Set the value of [cliente_numero] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_numero !== $v) {
            $this->cliente_numero = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_NUMERO;
        }


        return $this;
    } // setClienteNumero()

    /**
     * Set the value of [cliente_interior] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteInterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_interior !== $v) {
            $this->cliente_interior = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_INTERIOR;
        }


        return $this;
    } // setClienteInterior()

    /**
     * Set the value of [cliente_colonia] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_colonia !== $v) {
            $this->cliente_colonia = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_COLONIA;
        }


        return $this;
    } // setClienteColonia()

    /**
     * Set the value of [cliente_codigopostal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_codigopostal !== $v) {
            $this->cliente_codigopostal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CODIGOPOSTAL;
        }


        return $this;
    } // setClienteCodigopostal()

    /**
     * Set the value of [cliente_ciudad] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_ciudad !== $v) {
            $this->cliente_ciudad = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CIUDAD;
        }


        return $this;
    } // setClienteCiudad()

    /**
     * Set the value of [cliente_estado] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_estado !== $v) {
            $this->cliente_estado = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_ESTADO;
        }


        return $this;
    } // setClienteEstado()

    /**
     * Set the value of [cliente_pais] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClientePais($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_pais !== $v) {
            $this->cliente_pais = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_PAIS;
        }


        return $this;
    } // setClientePais()

    /**
     * Set the value of [cliente_telefono] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_telefono !== $v) {
            $this->cliente_telefono = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_TELEFONO;
        }


        return $this;
    } // setClienteTelefono()

    /**
     * Set the value of [cliente_celular] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_celular !== $v) {
            $this->cliente_celular = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CELULAR;
        }


        return $this;
    } // setClienteCelular()

    /**
     * Set the value of [cliente_nombrecontacto] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteNombrecontacto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_nombrecontacto !== $v) {
            $this->cliente_nombrecontacto = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_NOMBRECONTACTO;
        }


        return $this;
    } // setClienteNombrecontacto()

    /**
     * Sets the value of [cliente_cumpleanios] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCumpleanios($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cliente_cumpleanios !== null || $dt !== null) {
            $currentDateAsString = ($this->cliente_cumpleanios !== null && $tmpDt = new DateTime($this->cliente_cumpleanios)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->cliente_cumpleanios = $newDateAsString;
                $this->modifiedColumns[] = ClientePeer::CLIENTE_CUMPLEANIOS;
            }
        } // if either are not null


        return $this;
    } // setClienteCumpleanios()

    /**
     * Set the value of [cliente_callefiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCallefiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_callefiscal !== $v) {
            $this->cliente_callefiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CALLEFISCAL;
        }


        return $this;
    } // setClienteCallefiscal()

    /**
     * Set the value of [cliente_numerofiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteNumerofiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_numerofiscal !== $v) {
            $this->cliente_numerofiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_NUMEROFISCAL;
        }


        return $this;
    } // setClienteNumerofiscal()

    /**
     * Set the value of [cliente_interiorfiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteInteriorfiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_interiorfiscal !== $v) {
            $this->cliente_interiorfiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_INTERIORFISCAL;
        }


        return $this;
    } // setClienteInteriorfiscal()

    /**
     * Set the value of [cliente_coloniafiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteColoniafiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_coloniafiscal !== $v) {
            $this->cliente_coloniafiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_COLONIAFISCAL;
        }


        return $this;
    } // setClienteColoniafiscal()

    /**
     * Set the value of [cliente_codigopostalfiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCodigopostalfiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_codigopostalfiscal !== $v) {
            $this->cliente_codigopostalfiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CODIGOPOSTALFISCAL;
        }


        return $this;
    } // setClienteCodigopostalfiscal()

    /**
     * Set the value of [cliente_ciudadfiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCiudadfiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_ciudadfiscal !== $v) {
            $this->cliente_ciudadfiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CIUDADFISCAL;
        }


        return $this;
    } // setClienteCiudadfiscal()

    /**
     * Set the value of [cliente_estadofiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteEstadofiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_estadofiscal !== $v) {
            $this->cliente_estadofiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_ESTADOFISCAL;
        }


        return $this;
    } // setClienteEstadofiscal()

    /**
     * Set the value of [cliente_paisfiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClientePaisfiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_paisfiscal !== $v) {
            $this->cliente_paisfiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_PAISFISCAL;
        }


        return $this;
    } // setClientePaisfiscal()

    /**
     * Set the value of [cliente_padronimportador] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClientePadronimportador($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_padronimportador !== $v) {
            $this->cliente_padronimportador = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_PADRONIMPORTADOR;
        }


        return $this;
    } // setClientePadronimportador()

    /**
     * Set the value of [cliente_encargadoconferido] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteEncargadoconferido($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_encargadoconferido !== $v) {
            $this->cliente_encargadoconferido = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_ENCARGADOCONFERIDO;
        }


        return $this;
    } // setClienteEncargadoconferido()

    /**
     * Set the value of [cliente_r1] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteR1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_r1 !== $v) {
            $this->cliente_r1 = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_R1;
        }


        return $this;
    } // setClienteR1()

    /**
     * Set the value of [cliente_r2] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteR2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_r2 !== $v) {
            $this->cliente_r2 = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_R2;
        }


        return $this;
    } // setClienteR2()

    /**
     * Set the value of [cliente_identificacionrepresentantelegal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteIdentificacionrepresentantelegal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_identificacionrepresentantelegal !== $v) {
            $this->cliente_identificacionrepresentantelegal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL;
        }


        return $this;
    } // setClienteIdentificacionrepresentantelegal()

    /**
     * Set the value of [cliente_rfcrepresentantelegal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteRfcrepresentantelegal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_rfcrepresentantelegal !== $v) {
            $this->cliente_rfcrepresentantelegal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_RFCREPRESENTANTELEGAL;
        }


        return $this;
    } // setClienteRfcrepresentantelegal()

    /**
     * Set the value of [cliente_actaconstitutiva] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteActaconstitutiva($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_actaconstitutiva !== $v) {
            $this->cliente_actaconstitutiva = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_ACTACONSTITUTIVA;
        }


        return $this;
    } // setClienteActaconstitutiva()

    /**
     * Set the value of [cliente_podernotarial] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClientePodernotarial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_podernotarial !== $v) {
            $this->cliente_podernotarial = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_PODERNOTARIAL;
        }


        return $this;
    } // setClientePodernotarial()

    /**
     * Set the value of [cliente_cartaencomienda] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCartaencomienda($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_cartaencomienda !== $v) {
            $this->cliente_cartaencomienda = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CARTAENCOMIENDA;
        }


        return $this;
    } // setClienteCartaencomienda()

    /**
     * Set the value of [cliente_comprobantedomicilio] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteComprobantedomicilio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_comprobantedomicilio !== $v) {
            $this->cliente_comprobantedomicilio = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_COMPROBANTEDOMICILIO;
        }


        return $this;
    } // setClienteComprobantedomicilio()

    /**
     * Set the value of [cliente_comprobanteclabe] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteComprobanteclabe($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_comprobanteclabe !== $v) {
            $this->cliente_comprobanteclabe = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_COMPROBANTECLABE;
        }


        return $this;
    } // setClienteComprobanteclabe()

    /**
     * Set the value of [cliente_clabe] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteClabe($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_clabe !== $v) {
            $this->cliente_clabe = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CLABE;
        }


        return $this;
    } // setClienteClabe()

    /**
     * Set the value of [cliente_archivoszip] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteArchivoszip($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_archivoszip !== $v) {
            $this->cliente_archivoszip = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_ARCHIVOSZIP;
        }


        return $this;
    } // setClienteArchivoszip()

    /**
     * Set the value of [idempleadocomercial] column.
     *
     * @param  int $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setIdempleadocomercial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadocomercial !== $v) {
            $this->idempleadocomercial = $v;
            $this->modifiedColumns[] = ClientePeer::IDEMPLEADOCOMERCIAL;
        }

        if ($this->aEmpleadoRelatedByIdempleadocomercial !== null && $this->aEmpleadoRelatedByIdempleadocomercial->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleadocomercial = null;
        }


        return $this;
    } // setIdempleadocomercial()

    /**
     * Set the value of [idempleadooperaciones] column.
     *
     * @param  int $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setIdempleadooperaciones($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadooperaciones !== $v) {
            $this->idempleadooperaciones = $v;
            $this->modifiedColumns[] = ClientePeer::IDEMPLEADOOPERACIONES;
        }

        if ($this->aEmpleadoRelatedByIdempleadooperaciones !== null && $this->aEmpleadoRelatedByIdempleadooperaciones->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleadooperaciones = null;
        }


        return $this;
    } // setIdempleadooperaciones()

    /**
     * Sets the value of [cliente_ultimologin] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteUltimologin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cliente_ultimologin !== null || $dt !== null) {
            $currentDateAsString = ($this->cliente_ultimologin !== null && $tmpDt = new DateTime($this->cliente_ultimologin)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->cliente_ultimologin = $newDateAsString;
                $this->modifiedColumns[] = ClientePeer::CLIENTE_ULTIMOLOGIN;
            }
        } // if either are not null


        return $this;
    } // setClienteUltimologin()

    /**
     * Set the value of [cliente_fotografiasdomicilio] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteFotografiasdomicilio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_fotografiasdomicilio !== $v) {
            $this->cliente_fotografiasdomicilio = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_FOTOGRAFIASDOMICILIO;
        }


        return $this;
    } // setClienteFotografiasdomicilio()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idcliente = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cliente_email = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->cliente_password = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cliente_razonsocial = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cliente_rfc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cliente_calle = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->cliente_numero = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cliente_interior = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cliente_colonia = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->cliente_codigopostal = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->cliente_ciudad = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->cliente_estado = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->cliente_pais = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->cliente_telefono = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->cliente_celular = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->cliente_nombrecontacto = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->cliente_cumpleanios = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->cliente_callefiscal = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->cliente_numerofiscal = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->cliente_interiorfiscal = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->cliente_coloniafiscal = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->cliente_codigopostalfiscal = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->cliente_ciudadfiscal = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->cliente_estadofiscal = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->cliente_paisfiscal = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->cliente_padronimportador = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->cliente_encargadoconferido = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->cliente_r1 = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->cliente_r2 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->cliente_identificacionrepresentantelegal = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->cliente_rfcrepresentantelegal = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->cliente_actaconstitutiva = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->cliente_podernotarial = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->cliente_cartaencomienda = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->cliente_comprobantedomicilio = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->cliente_comprobanteclabe = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->cliente_clabe = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->cliente_archivoszip = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->idempleadocomercial = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->idempleadooperaciones = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->cliente_ultimologin = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->cliente_fotografiasdomicilio = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 42; // 42 = ClientePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cliente object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aEmpleadoRelatedByIdempleadocomercial !== null && $this->idempleadocomercial !== $this->aEmpleadoRelatedByIdempleadocomercial->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleadocomercial = null;
        }
        if ($this->aEmpleadoRelatedByIdempleadooperaciones !== null && $this->idempleadooperaciones !== $this->aEmpleadoRelatedByIdempleadooperaciones->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleadooperaciones = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ClientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleadoRelatedByIdempleadocomercial = null;
            $this->aEmpleadoRelatedByIdempleadooperaciones = null;
            $this->collClientearchivos = null;

            $this->collExpedientes = null;

            $this->collProveedorclientes = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ClienteQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ClientePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEmpleadoRelatedByIdempleadocomercial !== null) {
                if ($this->aEmpleadoRelatedByIdempleadocomercial->isModified() || $this->aEmpleadoRelatedByIdempleadocomercial->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleadocomercial->save($con);
                }
                $this->setEmpleadoRelatedByIdempleadocomercial($this->aEmpleadoRelatedByIdempleadocomercial);
            }

            if ($this->aEmpleadoRelatedByIdempleadooperaciones !== null) {
                if ($this->aEmpleadoRelatedByIdempleadooperaciones->isModified() || $this->aEmpleadoRelatedByIdempleadooperaciones->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleadooperaciones->save($con);
                }
                $this->setEmpleadoRelatedByIdempleadooperaciones($this->aEmpleadoRelatedByIdempleadooperaciones);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->clientearchivosScheduledForDeletion !== null) {
                if (!$this->clientearchivosScheduledForDeletion->isEmpty()) {
                    ClientearchivoQuery::create()
                        ->filterByPrimaryKeys($this->clientearchivosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->clientearchivosScheduledForDeletion = null;
                }
            }

            if ($this->collClientearchivos !== null) {
                foreach ($this->collClientearchivos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->expedientesScheduledForDeletion !== null) {
                if (!$this->expedientesScheduledForDeletion->isEmpty()) {
                    foreach ($this->expedientesScheduledForDeletion as $expediente) {
                        // need to save related object because we set the relation to null
                        $expediente->save($con);
                    }
                    $this->expedientesScheduledForDeletion = null;
                }
            }

            if ($this->collExpedientes !== null) {
                foreach ($this->collExpedientes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->proveedorclientesScheduledForDeletion !== null) {
                if (!$this->proveedorclientesScheduledForDeletion->isEmpty()) {
                    ProveedorclienteQuery::create()
                        ->filterByPrimaryKeys($this->proveedorclientesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->proveedorclientesScheduledForDeletion = null;
                }
            }

            if ($this->collProveedorclientes !== null) {
                foreach ($this->collProveedorclientes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ClientePeer::IDCLIENTE;
        if (null !== $this->idcliente) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClientePeer::IDCLIENTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ClientePeer::IDCLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idcliente`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_email`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_password`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_razonsocial`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_rfc`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_calle`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_numero`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_INTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_interior`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_colonia`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_codigopostal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_ciudad`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_estado`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_PAIS)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_pais`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_telefono`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_celular`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_NOMBRECONTACTO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_nombrecontacto`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CUMPLEANIOS)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_cumpleanios`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CALLEFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_callefiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_NUMEROFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_numerofiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_INTERIORFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_interiorfiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_COLONIAFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_coloniafiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CODIGOPOSTALFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_codigopostalfiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CIUDADFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_ciudadfiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTADOFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_estadofiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_PAISFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_paisfiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_PADRONIMPORTADOR)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_padronimportador`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ENCARGADOCONFERIDO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_encargadoconferido`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_R1)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_r1`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_R2)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_r2`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_identificacionrepresentantelegal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_RFCREPRESENTANTELEGAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_rfcrepresentantelegal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ACTACONSTITUTIVA)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_actaconstitutiva`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_PODERNOTARIAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_podernotarial`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CARTAENCOMIENDA)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_cartaencomienda`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_COMPROBANTEDOMICILIO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_comprobantedomicilio`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_COMPROBANTECLABE)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_comprobanteclabe`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CLABE)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_clabe`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ARCHIVOSZIP)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_archivoszip`';
        }
        if ($this->isColumnModified(ClientePeer::IDEMPLEADOCOMERCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadocomercial`';
        }
        if ($this->isColumnModified(ClientePeer::IDEMPLEADOOPERACIONES)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadooperaciones`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ULTIMOLOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_ultimologin`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_FOTOGRAFIASDOMICILIO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_fotografiasdomicilio`';
        }

        $sql = sprintf(
            'INSERT INTO `cliente` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcliente`':
                        $stmt->bindValue($identifier, $this->idcliente, PDO::PARAM_INT);
                        break;
                    case '`cliente_email`':
                        $stmt->bindValue($identifier, $this->cliente_email, PDO::PARAM_STR);
                        break;
                    case '`cliente_password`':
                        $stmt->bindValue($identifier, $this->cliente_password, PDO::PARAM_STR);
                        break;
                    case '`cliente_razonsocial`':
                        $stmt->bindValue($identifier, $this->cliente_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`cliente_rfc`':
                        $stmt->bindValue($identifier, $this->cliente_rfc, PDO::PARAM_STR);
                        break;
                    case '`cliente_calle`':
                        $stmt->bindValue($identifier, $this->cliente_calle, PDO::PARAM_STR);
                        break;
                    case '`cliente_numero`':
                        $stmt->bindValue($identifier, $this->cliente_numero, PDO::PARAM_STR);
                        break;
                    case '`cliente_interior`':
                        $stmt->bindValue($identifier, $this->cliente_interior, PDO::PARAM_STR);
                        break;
                    case '`cliente_colonia`':
                        $stmt->bindValue($identifier, $this->cliente_colonia, PDO::PARAM_STR);
                        break;
                    case '`cliente_codigopostal`':
                        $stmt->bindValue($identifier, $this->cliente_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`cliente_ciudad`':
                        $stmt->bindValue($identifier, $this->cliente_ciudad, PDO::PARAM_STR);
                        break;
                    case '`cliente_estado`':
                        $stmt->bindValue($identifier, $this->cliente_estado, PDO::PARAM_STR);
                        break;
                    case '`cliente_pais`':
                        $stmt->bindValue($identifier, $this->cliente_pais, PDO::PARAM_STR);
                        break;
                    case '`cliente_telefono`':
                        $stmt->bindValue($identifier, $this->cliente_telefono, PDO::PARAM_STR);
                        break;
                    case '`cliente_celular`':
                        $stmt->bindValue($identifier, $this->cliente_celular, PDO::PARAM_STR);
                        break;
                    case '`cliente_nombrecontacto`':
                        $stmt->bindValue($identifier, $this->cliente_nombrecontacto, PDO::PARAM_STR);
                        break;
                    case '`cliente_cumpleanios`':
                        $stmt->bindValue($identifier, $this->cliente_cumpleanios, PDO::PARAM_STR);
                        break;
                    case '`cliente_callefiscal`':
                        $stmt->bindValue($identifier, $this->cliente_callefiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_numerofiscal`':
                        $stmt->bindValue($identifier, $this->cliente_numerofiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_interiorfiscal`':
                        $stmt->bindValue($identifier, $this->cliente_interiorfiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_coloniafiscal`':
                        $stmt->bindValue($identifier, $this->cliente_coloniafiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_codigopostalfiscal`':
                        $stmt->bindValue($identifier, $this->cliente_codigopostalfiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_ciudadfiscal`':
                        $stmt->bindValue($identifier, $this->cliente_ciudadfiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_estadofiscal`':
                        $stmt->bindValue($identifier, $this->cliente_estadofiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_paisfiscal`':
                        $stmt->bindValue($identifier, $this->cliente_paisfiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_padronimportador`':
                        $stmt->bindValue($identifier, $this->cliente_padronimportador, PDO::PARAM_STR);
                        break;
                    case '`cliente_encargadoconferido`':
                        $stmt->bindValue($identifier, $this->cliente_encargadoconferido, PDO::PARAM_STR);
                        break;
                    case '`cliente_r1`':
                        $stmt->bindValue($identifier, $this->cliente_r1, PDO::PARAM_STR);
                        break;
                    case '`cliente_r2`':
                        $stmt->bindValue($identifier, $this->cliente_r2, PDO::PARAM_STR);
                        break;
                    case '`cliente_identificacionrepresentantelegal`':
                        $stmt->bindValue($identifier, $this->cliente_identificacionrepresentantelegal, PDO::PARAM_STR);
                        break;
                    case '`cliente_rfcrepresentantelegal`':
                        $stmt->bindValue($identifier, $this->cliente_rfcrepresentantelegal, PDO::PARAM_STR);
                        break;
                    case '`cliente_actaconstitutiva`':
                        $stmt->bindValue($identifier, $this->cliente_actaconstitutiva, PDO::PARAM_STR);
                        break;
                    case '`cliente_podernotarial`':
                        $stmt->bindValue($identifier, $this->cliente_podernotarial, PDO::PARAM_STR);
                        break;
                    case '`cliente_cartaencomienda`':
                        $stmt->bindValue($identifier, $this->cliente_cartaencomienda, PDO::PARAM_STR);
                        break;
                    case '`cliente_comprobantedomicilio`':
                        $stmt->bindValue($identifier, $this->cliente_comprobantedomicilio, PDO::PARAM_STR);
                        break;
                    case '`cliente_comprobanteclabe`':
                        $stmt->bindValue($identifier, $this->cliente_comprobanteclabe, PDO::PARAM_STR);
                        break;
                    case '`cliente_clabe`':
                        $stmt->bindValue($identifier, $this->cliente_clabe, PDO::PARAM_STR);
                        break;
                    case '`cliente_archivoszip`':
                        $stmt->bindValue($identifier, $this->cliente_archivoszip, PDO::PARAM_STR);
                        break;
                    case '`idempleadocomercial`':
                        $stmt->bindValue($identifier, $this->idempleadocomercial, PDO::PARAM_INT);
                        break;
                    case '`idempleadooperaciones`':
                        $stmt->bindValue($identifier, $this->idempleadooperaciones, PDO::PARAM_INT);
                        break;
                    case '`cliente_ultimologin`':
                        $stmt->bindValue($identifier, $this->cliente_ultimologin, PDO::PARAM_STR);
                        break;
                    case '`cliente_fotografiasdomicilio`':
                        $stmt->bindValue($identifier, $this->cliente_fotografiasdomicilio, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdcliente($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aEmpleadoRelatedByIdempleadocomercial !== null) {
                if (!$this->aEmpleadoRelatedByIdempleadocomercial->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleadocomercial->getValidationFailures());
                }
            }

            if ($this->aEmpleadoRelatedByIdempleadooperaciones !== null) {
                if (!$this->aEmpleadoRelatedByIdempleadooperaciones->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleadooperaciones->getValidationFailures());
                }
            }


            if (($retval = ClientePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collClientearchivos !== null) {
                    foreach ($this->collClientearchivos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExpedientes !== null) {
                    foreach ($this->collExpedientes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProveedorclientes !== null) {
                    foreach ($this->collProveedorclientes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdcliente();
                break;
            case 1:
                return $this->getClienteEmail();
                break;
            case 2:
                return $this->getClientePassword();
                break;
            case 3:
                return $this->getClienteRazonsocial();
                break;
            case 4:
                return $this->getClienteRfc();
                break;
            case 5:
                return $this->getClienteCalle();
                break;
            case 6:
                return $this->getClienteNumero();
                break;
            case 7:
                return $this->getClienteInterior();
                break;
            case 8:
                return $this->getClienteColonia();
                break;
            case 9:
                return $this->getClienteCodigopostal();
                break;
            case 10:
                return $this->getClienteCiudad();
                break;
            case 11:
                return $this->getClienteEstado();
                break;
            case 12:
                return $this->getClientePais();
                break;
            case 13:
                return $this->getClienteTelefono();
                break;
            case 14:
                return $this->getClienteCelular();
                break;
            case 15:
                return $this->getClienteNombrecontacto();
                break;
            case 16:
                return $this->getClienteCumpleanios();
                break;
            case 17:
                return $this->getClienteCallefiscal();
                break;
            case 18:
                return $this->getClienteNumerofiscal();
                break;
            case 19:
                return $this->getClienteInteriorfiscal();
                break;
            case 20:
                return $this->getClienteColoniafiscal();
                break;
            case 21:
                return $this->getClienteCodigopostalfiscal();
                break;
            case 22:
                return $this->getClienteCiudadfiscal();
                break;
            case 23:
                return $this->getClienteEstadofiscal();
                break;
            case 24:
                return $this->getClientePaisfiscal();
                break;
            case 25:
                return $this->getClientePadronimportador();
                break;
            case 26:
                return $this->getClienteEncargadoconferido();
                break;
            case 27:
                return $this->getClienteR1();
                break;
            case 28:
                return $this->getClienteR2();
                break;
            case 29:
                return $this->getClienteIdentificacionrepresentantelegal();
                break;
            case 30:
                return $this->getClienteRfcrepresentantelegal();
                break;
            case 31:
                return $this->getClienteActaconstitutiva();
                break;
            case 32:
                return $this->getClientePodernotarial();
                break;
            case 33:
                return $this->getClienteCartaencomienda();
                break;
            case 34:
                return $this->getClienteComprobantedomicilio();
                break;
            case 35:
                return $this->getClienteComprobanteclabe();
                break;
            case 36:
                return $this->getClienteClabe();
                break;
            case 37:
                return $this->getClienteArchivoszip();
                break;
            case 38:
                return $this->getIdempleadocomercial();
                break;
            case 39:
                return $this->getIdempleadooperaciones();
                break;
            case 40:
                return $this->getClienteUltimologin();
                break;
            case 41:
                return $this->getClienteFotografiasdomicilio();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Cliente'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cliente'][$this->getPrimaryKey()] = true;
        $keys = ClientePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcliente(),
            $keys[1] => $this->getClienteEmail(),
            $keys[2] => $this->getClientePassword(),
            $keys[3] => $this->getClienteRazonsocial(),
            $keys[4] => $this->getClienteRfc(),
            $keys[5] => $this->getClienteCalle(),
            $keys[6] => $this->getClienteNumero(),
            $keys[7] => $this->getClienteInterior(),
            $keys[8] => $this->getClienteColonia(),
            $keys[9] => $this->getClienteCodigopostal(),
            $keys[10] => $this->getClienteCiudad(),
            $keys[11] => $this->getClienteEstado(),
            $keys[12] => $this->getClientePais(),
            $keys[13] => $this->getClienteTelefono(),
            $keys[14] => $this->getClienteCelular(),
            $keys[15] => $this->getClienteNombrecontacto(),
            $keys[16] => $this->getClienteCumpleanios(),
            $keys[17] => $this->getClienteCallefiscal(),
            $keys[18] => $this->getClienteNumerofiscal(),
            $keys[19] => $this->getClienteInteriorfiscal(),
            $keys[20] => $this->getClienteColoniafiscal(),
            $keys[21] => $this->getClienteCodigopostalfiscal(),
            $keys[22] => $this->getClienteCiudadfiscal(),
            $keys[23] => $this->getClienteEstadofiscal(),
            $keys[24] => $this->getClientePaisfiscal(),
            $keys[25] => $this->getClientePadronimportador(),
            $keys[26] => $this->getClienteEncargadoconferido(),
            $keys[27] => $this->getClienteR1(),
            $keys[28] => $this->getClienteR2(),
            $keys[29] => $this->getClienteIdentificacionrepresentantelegal(),
            $keys[30] => $this->getClienteRfcrepresentantelegal(),
            $keys[31] => $this->getClienteActaconstitutiva(),
            $keys[32] => $this->getClientePodernotarial(),
            $keys[33] => $this->getClienteCartaencomienda(),
            $keys[34] => $this->getClienteComprobantedomicilio(),
            $keys[35] => $this->getClienteComprobanteclabe(),
            $keys[36] => $this->getClienteClabe(),
            $keys[37] => $this->getClienteArchivoszip(),
            $keys[38] => $this->getIdempleadocomercial(),
            $keys[39] => $this->getIdempleadooperaciones(),
            $keys[40] => $this->getClienteUltimologin(),
            $keys[41] => $this->getClienteFotografiasdomicilio(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleadoRelatedByIdempleadocomercial) {
                $result['EmpleadoRelatedByIdempleadocomercial'] = $this->aEmpleadoRelatedByIdempleadocomercial->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleadoRelatedByIdempleadooperaciones) {
                $result['EmpleadoRelatedByIdempleadooperaciones'] = $this->aEmpleadoRelatedByIdempleadooperaciones->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collClientearchivos) {
                $result['Clientearchivos'] = $this->collClientearchivos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExpedientes) {
                $result['Expedientes'] = $this->collExpedientes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProveedorclientes) {
                $result['Proveedorclientes'] = $this->collProveedorclientes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdcliente($value);
                break;
            case 1:
                $this->setClienteEmail($value);
                break;
            case 2:
                $this->setClientePassword($value);
                break;
            case 3:
                $this->setClienteRazonsocial($value);
                break;
            case 4:
                $this->setClienteRfc($value);
                break;
            case 5:
                $this->setClienteCalle($value);
                break;
            case 6:
                $this->setClienteNumero($value);
                break;
            case 7:
                $this->setClienteInterior($value);
                break;
            case 8:
                $this->setClienteColonia($value);
                break;
            case 9:
                $this->setClienteCodigopostal($value);
                break;
            case 10:
                $this->setClienteCiudad($value);
                break;
            case 11:
                $this->setClienteEstado($value);
                break;
            case 12:
                $this->setClientePais($value);
                break;
            case 13:
                $this->setClienteTelefono($value);
                break;
            case 14:
                $this->setClienteCelular($value);
                break;
            case 15:
                $this->setClienteNombrecontacto($value);
                break;
            case 16:
                $this->setClienteCumpleanios($value);
                break;
            case 17:
                $this->setClienteCallefiscal($value);
                break;
            case 18:
                $this->setClienteNumerofiscal($value);
                break;
            case 19:
                $this->setClienteInteriorfiscal($value);
                break;
            case 20:
                $this->setClienteColoniafiscal($value);
                break;
            case 21:
                $this->setClienteCodigopostalfiscal($value);
                break;
            case 22:
                $this->setClienteCiudadfiscal($value);
                break;
            case 23:
                $this->setClienteEstadofiscal($value);
                break;
            case 24:
                $this->setClientePaisfiscal($value);
                break;
            case 25:
                $this->setClientePadronimportador($value);
                break;
            case 26:
                $this->setClienteEncargadoconferido($value);
                break;
            case 27:
                $this->setClienteR1($value);
                break;
            case 28:
                $this->setClienteR2($value);
                break;
            case 29:
                $this->setClienteIdentificacionrepresentantelegal($value);
                break;
            case 30:
                $this->setClienteRfcrepresentantelegal($value);
                break;
            case 31:
                $this->setClienteActaconstitutiva($value);
                break;
            case 32:
                $this->setClientePodernotarial($value);
                break;
            case 33:
                $this->setClienteCartaencomienda($value);
                break;
            case 34:
                $this->setClienteComprobantedomicilio($value);
                break;
            case 35:
                $this->setClienteComprobanteclabe($value);
                break;
            case 36:
                $this->setClienteClabe($value);
                break;
            case 37:
                $this->setClienteArchivoszip($value);
                break;
            case 38:
                $this->setIdempleadocomercial($value);
                break;
            case 39:
                $this->setIdempleadooperaciones($value);
                break;
            case 40:
                $this->setClienteUltimologin($value);
                break;
            case 41:
                $this->setClienteFotografiasdomicilio($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ClientePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcliente($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClienteEmail($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClientePassword($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setClienteRazonsocial($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setClienteRfc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setClienteCalle($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setClienteNumero($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setClienteInterior($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setClienteColonia($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setClienteCodigopostal($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setClienteCiudad($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setClienteEstado($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setClientePais($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setClienteTelefono($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setClienteCelular($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setClienteNombrecontacto($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setClienteCumpleanios($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setClienteCallefiscal($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setClienteNumerofiscal($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setClienteInteriorfiscal($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setClienteColoniafiscal($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setClienteCodigopostalfiscal($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setClienteCiudadfiscal($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setClienteEstadofiscal($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setClientePaisfiscal($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setClientePadronimportador($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setClienteEncargadoconferido($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setClienteR1($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setClienteR2($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setClienteIdentificacionrepresentantelegal($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setClienteRfcrepresentantelegal($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setClienteActaconstitutiva($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setClientePodernotarial($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setClienteCartaencomienda($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setClienteComprobantedomicilio($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setClienteComprobanteclabe($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setClienteClabe($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setClienteArchivoszip($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setIdempleadocomercial($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setIdempleadooperaciones($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setClienteUltimologin($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setClienteFotografiasdomicilio($arr[$keys[41]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ClientePeer::DATABASE_NAME);

        if ($this->isColumnModified(ClientePeer::IDCLIENTE)) $criteria->add(ClientePeer::IDCLIENTE, $this->idcliente);
        if ($this->isColumnModified(ClientePeer::CLIENTE_EMAIL)) $criteria->add(ClientePeer::CLIENTE_EMAIL, $this->cliente_email);
        if ($this->isColumnModified(ClientePeer::CLIENTE_PASSWORD)) $criteria->add(ClientePeer::CLIENTE_PASSWORD, $this->cliente_password);
        if ($this->isColumnModified(ClientePeer::CLIENTE_RAZONSOCIAL)) $criteria->add(ClientePeer::CLIENTE_RAZONSOCIAL, $this->cliente_razonsocial);
        if ($this->isColumnModified(ClientePeer::CLIENTE_RFC)) $criteria->add(ClientePeer::CLIENTE_RFC, $this->cliente_rfc);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CALLE)) $criteria->add(ClientePeer::CLIENTE_CALLE, $this->cliente_calle);
        if ($this->isColumnModified(ClientePeer::CLIENTE_NUMERO)) $criteria->add(ClientePeer::CLIENTE_NUMERO, $this->cliente_numero);
        if ($this->isColumnModified(ClientePeer::CLIENTE_INTERIOR)) $criteria->add(ClientePeer::CLIENTE_INTERIOR, $this->cliente_interior);
        if ($this->isColumnModified(ClientePeer::CLIENTE_COLONIA)) $criteria->add(ClientePeer::CLIENTE_COLONIA, $this->cliente_colonia);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CODIGOPOSTAL)) $criteria->add(ClientePeer::CLIENTE_CODIGOPOSTAL, $this->cliente_codigopostal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CIUDAD)) $criteria->add(ClientePeer::CLIENTE_CIUDAD, $this->cliente_ciudad);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTADO)) $criteria->add(ClientePeer::CLIENTE_ESTADO, $this->cliente_estado);
        if ($this->isColumnModified(ClientePeer::CLIENTE_PAIS)) $criteria->add(ClientePeer::CLIENTE_PAIS, $this->cliente_pais);
        if ($this->isColumnModified(ClientePeer::CLIENTE_TELEFONO)) $criteria->add(ClientePeer::CLIENTE_TELEFONO, $this->cliente_telefono);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CELULAR)) $criteria->add(ClientePeer::CLIENTE_CELULAR, $this->cliente_celular);
        if ($this->isColumnModified(ClientePeer::CLIENTE_NOMBRECONTACTO)) $criteria->add(ClientePeer::CLIENTE_NOMBRECONTACTO, $this->cliente_nombrecontacto);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CUMPLEANIOS)) $criteria->add(ClientePeer::CLIENTE_CUMPLEANIOS, $this->cliente_cumpleanios);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CALLEFISCAL)) $criteria->add(ClientePeer::CLIENTE_CALLEFISCAL, $this->cliente_callefiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_NUMEROFISCAL)) $criteria->add(ClientePeer::CLIENTE_NUMEROFISCAL, $this->cliente_numerofiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_INTERIORFISCAL)) $criteria->add(ClientePeer::CLIENTE_INTERIORFISCAL, $this->cliente_interiorfiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_COLONIAFISCAL)) $criteria->add(ClientePeer::CLIENTE_COLONIAFISCAL, $this->cliente_coloniafiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CODIGOPOSTALFISCAL)) $criteria->add(ClientePeer::CLIENTE_CODIGOPOSTALFISCAL, $this->cliente_codigopostalfiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CIUDADFISCAL)) $criteria->add(ClientePeer::CLIENTE_CIUDADFISCAL, $this->cliente_ciudadfiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTADOFISCAL)) $criteria->add(ClientePeer::CLIENTE_ESTADOFISCAL, $this->cliente_estadofiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_PAISFISCAL)) $criteria->add(ClientePeer::CLIENTE_PAISFISCAL, $this->cliente_paisfiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_PADRONIMPORTADOR)) $criteria->add(ClientePeer::CLIENTE_PADRONIMPORTADOR, $this->cliente_padronimportador);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ENCARGADOCONFERIDO)) $criteria->add(ClientePeer::CLIENTE_ENCARGADOCONFERIDO, $this->cliente_encargadoconferido);
        if ($this->isColumnModified(ClientePeer::CLIENTE_R1)) $criteria->add(ClientePeer::CLIENTE_R1, $this->cliente_r1);
        if ($this->isColumnModified(ClientePeer::CLIENTE_R2)) $criteria->add(ClientePeer::CLIENTE_R2, $this->cliente_r2);
        if ($this->isColumnModified(ClientePeer::CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL)) $criteria->add(ClientePeer::CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL, $this->cliente_identificacionrepresentantelegal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_RFCREPRESENTANTELEGAL)) $criteria->add(ClientePeer::CLIENTE_RFCREPRESENTANTELEGAL, $this->cliente_rfcrepresentantelegal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ACTACONSTITUTIVA)) $criteria->add(ClientePeer::CLIENTE_ACTACONSTITUTIVA, $this->cliente_actaconstitutiva);
        if ($this->isColumnModified(ClientePeer::CLIENTE_PODERNOTARIAL)) $criteria->add(ClientePeer::CLIENTE_PODERNOTARIAL, $this->cliente_podernotarial);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CARTAENCOMIENDA)) $criteria->add(ClientePeer::CLIENTE_CARTAENCOMIENDA, $this->cliente_cartaencomienda);
        if ($this->isColumnModified(ClientePeer::CLIENTE_COMPROBANTEDOMICILIO)) $criteria->add(ClientePeer::CLIENTE_COMPROBANTEDOMICILIO, $this->cliente_comprobantedomicilio);
        if ($this->isColumnModified(ClientePeer::CLIENTE_COMPROBANTECLABE)) $criteria->add(ClientePeer::CLIENTE_COMPROBANTECLABE, $this->cliente_comprobanteclabe);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CLABE)) $criteria->add(ClientePeer::CLIENTE_CLABE, $this->cliente_clabe);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ARCHIVOSZIP)) $criteria->add(ClientePeer::CLIENTE_ARCHIVOSZIP, $this->cliente_archivoszip);
        if ($this->isColumnModified(ClientePeer::IDEMPLEADOCOMERCIAL)) $criteria->add(ClientePeer::IDEMPLEADOCOMERCIAL, $this->idempleadocomercial);
        if ($this->isColumnModified(ClientePeer::IDEMPLEADOOPERACIONES)) $criteria->add(ClientePeer::IDEMPLEADOOPERACIONES, $this->idempleadooperaciones);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ULTIMOLOGIN)) $criteria->add(ClientePeer::CLIENTE_ULTIMOLOGIN, $this->cliente_ultimologin);
        if ($this->isColumnModified(ClientePeer::CLIENTE_FOTOGRAFIASDOMICILIO)) $criteria->add(ClientePeer::CLIENTE_FOTOGRAFIASDOMICILIO, $this->cliente_fotografiasdomicilio);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ClientePeer::DATABASE_NAME);
        $criteria->add(ClientePeer::IDCLIENTE, $this->idcliente);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcliente();
    }

    /**
     * Generic method to set the primary key (idcliente column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcliente($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcliente();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cliente (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClienteEmail($this->getClienteEmail());
        $copyObj->setClientePassword($this->getClientePassword());
        $copyObj->setClienteRazonsocial($this->getClienteRazonsocial());
        $copyObj->setClienteRfc($this->getClienteRfc());
        $copyObj->setClienteCalle($this->getClienteCalle());
        $copyObj->setClienteNumero($this->getClienteNumero());
        $copyObj->setClienteInterior($this->getClienteInterior());
        $copyObj->setClienteColonia($this->getClienteColonia());
        $copyObj->setClienteCodigopostal($this->getClienteCodigopostal());
        $copyObj->setClienteCiudad($this->getClienteCiudad());
        $copyObj->setClienteEstado($this->getClienteEstado());
        $copyObj->setClientePais($this->getClientePais());
        $copyObj->setClienteTelefono($this->getClienteTelefono());
        $copyObj->setClienteCelular($this->getClienteCelular());
        $copyObj->setClienteNombrecontacto($this->getClienteNombrecontacto());
        $copyObj->setClienteCumpleanios($this->getClienteCumpleanios());
        $copyObj->setClienteCallefiscal($this->getClienteCallefiscal());
        $copyObj->setClienteNumerofiscal($this->getClienteNumerofiscal());
        $copyObj->setClienteInteriorfiscal($this->getClienteInteriorfiscal());
        $copyObj->setClienteColoniafiscal($this->getClienteColoniafiscal());
        $copyObj->setClienteCodigopostalfiscal($this->getClienteCodigopostalfiscal());
        $copyObj->setClienteCiudadfiscal($this->getClienteCiudadfiscal());
        $copyObj->setClienteEstadofiscal($this->getClienteEstadofiscal());
        $copyObj->setClientePaisfiscal($this->getClientePaisfiscal());
        $copyObj->setClientePadronimportador($this->getClientePadronimportador());
        $copyObj->setClienteEncargadoconferido($this->getClienteEncargadoconferido());
        $copyObj->setClienteR1($this->getClienteR1());
        $copyObj->setClienteR2($this->getClienteR2());
        $copyObj->setClienteIdentificacionrepresentantelegal($this->getClienteIdentificacionrepresentantelegal());
        $copyObj->setClienteRfcrepresentantelegal($this->getClienteRfcrepresentantelegal());
        $copyObj->setClienteActaconstitutiva($this->getClienteActaconstitutiva());
        $copyObj->setClientePodernotarial($this->getClientePodernotarial());
        $copyObj->setClienteCartaencomienda($this->getClienteCartaencomienda());
        $copyObj->setClienteComprobantedomicilio($this->getClienteComprobantedomicilio());
        $copyObj->setClienteComprobanteclabe($this->getClienteComprobanteclabe());
        $copyObj->setClienteClabe($this->getClienteClabe());
        $copyObj->setClienteArchivoszip($this->getClienteArchivoszip());
        $copyObj->setIdempleadocomercial($this->getIdempleadocomercial());
        $copyObj->setIdempleadooperaciones($this->getIdempleadooperaciones());
        $copyObj->setClienteUltimologin($this->getClienteUltimologin());
        $copyObj->setClienteFotografiasdomicilio($this->getClienteFotografiasdomicilio());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getClientearchivos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClientearchivo($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExpedientes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpediente($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProveedorclientes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProveedorcliente($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcliente(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Cliente Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ClientePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ClientePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Cliente The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleadocomercial(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadocomercial(NULL);
        } else {
            $this->setIdempleadocomercial($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleadocomercial = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addClienteRelatedByIdempleadocomercial($this);
        }


        return $this;
    }


    /**
     * Get the associated Empleado object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empleado The associated Empleado object.
     * @throws PropelException
     */
    public function getEmpleadoRelatedByIdempleadocomercial(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleadocomercial === null && ($this->idempleadocomercial !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleadocomercial = EmpleadoQuery::create()->findPk($this->idempleadocomercial, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleadocomercial->addClientesRelatedByIdempleadocomercial($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleadocomercial;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Cliente The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleadooperaciones(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadooperaciones(NULL);
        } else {
            $this->setIdempleadooperaciones($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleadooperaciones = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addClienteRelatedByIdempleadooperaciones($this);
        }


        return $this;
    }


    /**
     * Get the associated Empleado object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empleado The associated Empleado object.
     * @throws PropelException
     */
    public function getEmpleadoRelatedByIdempleadooperaciones(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleadooperaciones === null && ($this->idempleadooperaciones !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleadooperaciones = EmpleadoQuery::create()->findPk($this->idempleadooperaciones, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleadooperaciones->addClientesRelatedByIdempleadooperaciones($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleadooperaciones;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Clientearchivo' == $relationName) {
            $this->initClientearchivos();
        }
        if ('Expediente' == $relationName) {
            $this->initExpedientes();
        }
        if ('Proveedorcliente' == $relationName) {
            $this->initProveedorclientes();
        }
    }

    /**
     * Clears out the collClientearchivos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cliente The current object (for fluent API support)
     * @see        addClientearchivos()
     */
    public function clearClientearchivos()
    {
        $this->collClientearchivos = null; // important to set this to null since that means it is uninitialized
        $this->collClientearchivosPartial = null;

        return $this;
    }

    /**
     * reset is the collClientearchivos collection loaded partially
     *
     * @return void
     */
    public function resetPartialClientearchivos($v = true)
    {
        $this->collClientearchivosPartial = $v;
    }

    /**
     * Initializes the collClientearchivos collection.
     *
     * By default this just sets the collClientearchivos collection to an empty array (like clearcollClientearchivos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClientearchivos($overrideExisting = true)
    {
        if (null !== $this->collClientearchivos && !$overrideExisting) {
            return;
        }
        $this->collClientearchivos = new PropelObjectCollection();
        $this->collClientearchivos->setModel('Clientearchivo');
    }

    /**
     * Gets an array of Clientearchivo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cliente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Clientearchivo[] List of Clientearchivo objects
     * @throws PropelException
     */
    public function getClientearchivos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClientearchivosPartial && !$this->isNew();
        if (null === $this->collClientearchivos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClientearchivos) {
                // return empty collection
                $this->initClientearchivos();
            } else {
                $collClientearchivos = ClientearchivoQuery::create(null, $criteria)
                    ->filterByCliente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClientearchivosPartial && count($collClientearchivos)) {
                      $this->initClientearchivos(false);

                      foreach ($collClientearchivos as $obj) {
                        if (false == $this->collClientearchivos->contains($obj)) {
                          $this->collClientearchivos->append($obj);
                        }
                      }

                      $this->collClientearchivosPartial = true;
                    }

                    $collClientearchivos->getInternalIterator()->rewind();

                    return $collClientearchivos;
                }

                if ($partial && $this->collClientearchivos) {
                    foreach ($this->collClientearchivos as $obj) {
                        if ($obj->isNew()) {
                            $collClientearchivos[] = $obj;
                        }
                    }
                }

                $this->collClientearchivos = $collClientearchivos;
                $this->collClientearchivosPartial = false;
            }
        }

        return $this->collClientearchivos;
    }

    /**
     * Sets a collection of Clientearchivo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clientearchivos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cliente The current object (for fluent API support)
     */
    public function setClientearchivos(PropelCollection $clientearchivos, PropelPDO $con = null)
    {
        $clientearchivosToDelete = $this->getClientearchivos(new Criteria(), $con)->diff($clientearchivos);


        $this->clientearchivosScheduledForDeletion = $clientearchivosToDelete;

        foreach ($clientearchivosToDelete as $clientearchivoRemoved) {
            $clientearchivoRemoved->setCliente(null);
        }

        $this->collClientearchivos = null;
        foreach ($clientearchivos as $clientearchivo) {
            $this->addClientearchivo($clientearchivo);
        }

        $this->collClientearchivos = $clientearchivos;
        $this->collClientearchivosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Clientearchivo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Clientearchivo objects.
     * @throws PropelException
     */
    public function countClientearchivos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClientearchivosPartial && !$this->isNew();
        if (null === $this->collClientearchivos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClientearchivos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClientearchivos());
            }
            $query = ClientearchivoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCliente($this)
                ->count($con);
        }

        return count($this->collClientearchivos);
    }

    /**
     * Method called to associate a Clientearchivo object to this object
     * through the Clientearchivo foreign key attribute.
     *
     * @param    Clientearchivo $l Clientearchivo
     * @return Cliente The current object (for fluent API support)
     */
    public function addClientearchivo(Clientearchivo $l)
    {
        if ($this->collClientearchivos === null) {
            $this->initClientearchivos();
            $this->collClientearchivosPartial = true;
        }

        if (!in_array($l, $this->collClientearchivos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClientearchivo($l);

            if ($this->clientearchivosScheduledForDeletion and $this->clientearchivosScheduledForDeletion->contains($l)) {
                $this->clientearchivosScheduledForDeletion->remove($this->clientearchivosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Clientearchivo $clientearchivo The clientearchivo object to add.
     */
    protected function doAddClientearchivo($clientearchivo)
    {
        $this->collClientearchivos[]= $clientearchivo;
        $clientearchivo->setCliente($this);
    }

    /**
     * @param	Clientearchivo $clientearchivo The clientearchivo object to remove.
     * @return Cliente The current object (for fluent API support)
     */
    public function removeClientearchivo($clientearchivo)
    {
        if ($this->getClientearchivos()->contains($clientearchivo)) {
            $this->collClientearchivos->remove($this->collClientearchivos->search($clientearchivo));
            if (null === $this->clientearchivosScheduledForDeletion) {
                $this->clientearchivosScheduledForDeletion = clone $this->collClientearchivos;
                $this->clientearchivosScheduledForDeletion->clear();
            }
            $this->clientearchivosScheduledForDeletion[]= clone $clientearchivo;
            $clientearchivo->setCliente(null);
        }

        return $this;
    }

    /**
     * Clears out the collExpedientes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cliente The current object (for fluent API support)
     * @see        addExpedientes()
     */
    public function clearExpedientes()
    {
        $this->collExpedientes = null; // important to set this to null since that means it is uninitialized
        $this->collExpedientesPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedientes collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedientes($v = true)
    {
        $this->collExpedientesPartial = $v;
    }

    /**
     * Initializes the collExpedientes collection.
     *
     * By default this just sets the collExpedientes collection to an empty array (like clearcollExpedientes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedientes($overrideExisting = true)
    {
        if (null !== $this->collExpedientes && !$overrideExisting) {
            return;
        }
        $this->collExpedientes = new PropelObjectCollection();
        $this->collExpedientes->setModel('Expediente');
    }

    /**
     * Gets an array of Expediente objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cliente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expediente[] List of Expediente objects
     * @throws PropelException
     */
    public function getExpedientes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedientesPartial && !$this->isNew();
        if (null === $this->collExpedientes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedientes) {
                // return empty collection
                $this->initExpedientes();
            } else {
                $collExpedientes = ExpedienteQuery::create(null, $criteria)
                    ->filterByCliente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedientesPartial && count($collExpedientes)) {
                      $this->initExpedientes(false);

                      foreach ($collExpedientes as $obj) {
                        if (false == $this->collExpedientes->contains($obj)) {
                          $this->collExpedientes->append($obj);
                        }
                      }

                      $this->collExpedientesPartial = true;
                    }

                    $collExpedientes->getInternalIterator()->rewind();

                    return $collExpedientes;
                }

                if ($partial && $this->collExpedientes) {
                    foreach ($this->collExpedientes as $obj) {
                        if ($obj->isNew()) {
                            $collExpedientes[] = $obj;
                        }
                    }
                }

                $this->collExpedientes = $collExpedientes;
                $this->collExpedientesPartial = false;
            }
        }

        return $this->collExpedientes;
    }

    /**
     * Sets a collection of Expediente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedientes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cliente The current object (for fluent API support)
     */
    public function setExpedientes(PropelCollection $expedientes, PropelPDO $con = null)
    {
        $expedientesToDelete = $this->getExpedientes(new Criteria(), $con)->diff($expedientes);


        $this->expedientesScheduledForDeletion = $expedientesToDelete;

        foreach ($expedientesToDelete as $expedienteRemoved) {
            $expedienteRemoved->setCliente(null);
        }

        $this->collExpedientes = null;
        foreach ($expedientes as $expediente) {
            $this->addExpediente($expediente);
        }

        $this->collExpedientes = $expedientes;
        $this->collExpedientesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expediente objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expediente objects.
     * @throws PropelException
     */
    public function countExpedientes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedientesPartial && !$this->isNew();
        if (null === $this->collExpedientes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedientes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedientes());
            }
            $query = ExpedienteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCliente($this)
                ->count($con);
        }

        return count($this->collExpedientes);
    }

    /**
     * Method called to associate a Expediente object to this object
     * through the Expediente foreign key attribute.
     *
     * @param    Expediente $l Expediente
     * @return Cliente The current object (for fluent API support)
     */
    public function addExpediente(Expediente $l)
    {
        if ($this->collExpedientes === null) {
            $this->initExpedientes();
            $this->collExpedientesPartial = true;
        }

        if (!in_array($l, $this->collExpedientes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpediente($l);

            if ($this->expedientesScheduledForDeletion and $this->expedientesScheduledForDeletion->contains($l)) {
                $this->expedientesScheduledForDeletion->remove($this->expedientesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expediente $expediente The expediente object to add.
     */
    protected function doAddExpediente($expediente)
    {
        $this->collExpedientes[]= $expediente;
        $expediente->setCliente($this);
    }

    /**
     * @param	Expediente $expediente The expediente object to remove.
     * @return Cliente The current object (for fluent API support)
     */
    public function removeExpediente($expediente)
    {
        if ($this->getExpedientes()->contains($expediente)) {
            $this->collExpedientes->remove($this->collExpedientes->search($expediente));
            if (null === $this->expedientesScheduledForDeletion) {
                $this->expedientesScheduledForDeletion = clone $this->collExpedientes;
                $this->expedientesScheduledForDeletion->clear();
            }
            $this->expedientesScheduledForDeletion[]= $expediente;
            $expediente->setCliente(null);
        }

        return $this;
    }

    /**
     * Clears out the collProveedorclientes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cliente The current object (for fluent API support)
     * @see        addProveedorclientes()
     */
    public function clearProveedorclientes()
    {
        $this->collProveedorclientes = null; // important to set this to null since that means it is uninitialized
        $this->collProveedorclientesPartial = null;

        return $this;
    }

    /**
     * reset is the collProveedorclientes collection loaded partially
     *
     * @return void
     */
    public function resetPartialProveedorclientes($v = true)
    {
        $this->collProveedorclientesPartial = $v;
    }

    /**
     * Initializes the collProveedorclientes collection.
     *
     * By default this just sets the collProveedorclientes collection to an empty array (like clearcollProveedorclientes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProveedorclientes($overrideExisting = true)
    {
        if (null !== $this->collProveedorclientes && !$overrideExisting) {
            return;
        }
        $this->collProveedorclientes = new PropelObjectCollection();
        $this->collProveedorclientes->setModel('Proveedorcliente');
    }

    /**
     * Gets an array of Proveedorcliente objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cliente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Proveedorcliente[] List of Proveedorcliente objects
     * @throws PropelException
     */
    public function getProveedorclientes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProveedorclientesPartial && !$this->isNew();
        if (null === $this->collProveedorclientes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProveedorclientes) {
                // return empty collection
                $this->initProveedorclientes();
            } else {
                $collProveedorclientes = ProveedorclienteQuery::create(null, $criteria)
                    ->filterByCliente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProveedorclientesPartial && count($collProveedorclientes)) {
                      $this->initProveedorclientes(false);

                      foreach ($collProveedorclientes as $obj) {
                        if (false == $this->collProveedorclientes->contains($obj)) {
                          $this->collProveedorclientes->append($obj);
                        }
                      }

                      $this->collProveedorclientesPartial = true;
                    }

                    $collProveedorclientes->getInternalIterator()->rewind();

                    return $collProveedorclientes;
                }

                if ($partial && $this->collProveedorclientes) {
                    foreach ($this->collProveedorclientes as $obj) {
                        if ($obj->isNew()) {
                            $collProveedorclientes[] = $obj;
                        }
                    }
                }

                $this->collProveedorclientes = $collProveedorclientes;
                $this->collProveedorclientesPartial = false;
            }
        }

        return $this->collProveedorclientes;
    }

    /**
     * Sets a collection of Proveedorcliente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $proveedorclientes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cliente The current object (for fluent API support)
     */
    public function setProveedorclientes(PropelCollection $proveedorclientes, PropelPDO $con = null)
    {
        $proveedorclientesToDelete = $this->getProveedorclientes(new Criteria(), $con)->diff($proveedorclientes);


        $this->proveedorclientesScheduledForDeletion = $proveedorclientesToDelete;

        foreach ($proveedorclientesToDelete as $proveedorclienteRemoved) {
            $proveedorclienteRemoved->setCliente(null);
        }

        $this->collProveedorclientes = null;
        foreach ($proveedorclientes as $proveedorcliente) {
            $this->addProveedorcliente($proveedorcliente);
        }

        $this->collProveedorclientes = $proveedorclientes;
        $this->collProveedorclientesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Proveedorcliente objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Proveedorcliente objects.
     * @throws PropelException
     */
    public function countProveedorclientes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProveedorclientesPartial && !$this->isNew();
        if (null === $this->collProveedorclientes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProveedorclientes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProveedorclientes());
            }
            $query = ProveedorclienteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCliente($this)
                ->count($con);
        }

        return count($this->collProveedorclientes);
    }

    /**
     * Method called to associate a Proveedorcliente object to this object
     * through the Proveedorcliente foreign key attribute.
     *
     * @param    Proveedorcliente $l Proveedorcliente
     * @return Cliente The current object (for fluent API support)
     */
    public function addProveedorcliente(Proveedorcliente $l)
    {
        if ($this->collProveedorclientes === null) {
            $this->initProveedorclientes();
            $this->collProveedorclientesPartial = true;
        }

        if (!in_array($l, $this->collProveedorclientes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProveedorcliente($l);

            if ($this->proveedorclientesScheduledForDeletion and $this->proveedorclientesScheduledForDeletion->contains($l)) {
                $this->proveedorclientesScheduledForDeletion->remove($this->proveedorclientesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Proveedorcliente $proveedorcliente The proveedorcliente object to add.
     */
    protected function doAddProveedorcliente($proveedorcliente)
    {
        $this->collProveedorclientes[]= $proveedorcliente;
        $proveedorcliente->setCliente($this);
    }

    /**
     * @param	Proveedorcliente $proveedorcliente The proveedorcliente object to remove.
     * @return Cliente The current object (for fluent API support)
     */
    public function removeProveedorcliente($proveedorcliente)
    {
        if ($this->getProveedorclientes()->contains($proveedorcliente)) {
            $this->collProveedorclientes->remove($this->collProveedorclientes->search($proveedorcliente));
            if (null === $this->proveedorclientesScheduledForDeletion) {
                $this->proveedorclientesScheduledForDeletion = clone $this->collProveedorclientes;
                $this->proveedorclientesScheduledForDeletion->clear();
            }
            $this->proveedorclientesScheduledForDeletion[]= clone $proveedorcliente;
            $proveedorcliente->setCliente(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcliente = null;
        $this->cliente_email = null;
        $this->cliente_password = null;
        $this->cliente_razonsocial = null;
        $this->cliente_rfc = null;
        $this->cliente_calle = null;
        $this->cliente_numero = null;
        $this->cliente_interior = null;
        $this->cliente_colonia = null;
        $this->cliente_codigopostal = null;
        $this->cliente_ciudad = null;
        $this->cliente_estado = null;
        $this->cliente_pais = null;
        $this->cliente_telefono = null;
        $this->cliente_celular = null;
        $this->cliente_nombrecontacto = null;
        $this->cliente_cumpleanios = null;
        $this->cliente_callefiscal = null;
        $this->cliente_numerofiscal = null;
        $this->cliente_interiorfiscal = null;
        $this->cliente_coloniafiscal = null;
        $this->cliente_codigopostalfiscal = null;
        $this->cliente_ciudadfiscal = null;
        $this->cliente_estadofiscal = null;
        $this->cliente_paisfiscal = null;
        $this->cliente_padronimportador = null;
        $this->cliente_encargadoconferido = null;
        $this->cliente_r1 = null;
        $this->cliente_r2 = null;
        $this->cliente_identificacionrepresentantelegal = null;
        $this->cliente_rfcrepresentantelegal = null;
        $this->cliente_actaconstitutiva = null;
        $this->cliente_podernotarial = null;
        $this->cliente_cartaencomienda = null;
        $this->cliente_comprobantedomicilio = null;
        $this->cliente_comprobanteclabe = null;
        $this->cliente_clabe = null;
        $this->cliente_archivoszip = null;
        $this->idempleadocomercial = null;
        $this->idempleadooperaciones = null;
        $this->cliente_ultimologin = null;
        $this->cliente_fotografiasdomicilio = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collClientearchivos) {
                foreach ($this->collClientearchivos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExpedientes) {
                foreach ($this->collExpedientes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProveedorclientes) {
                foreach ($this->collProveedorclientes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpleadoRelatedByIdempleadocomercial instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleadocomercial->clearAllReferences($deep);
            }
            if ($this->aEmpleadoRelatedByIdempleadooperaciones instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleadooperaciones->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collClientearchivos instanceof PropelCollection) {
            $this->collClientearchivos->clearIterator();
        }
        $this->collClientearchivos = null;
        if ($this->collExpedientes instanceof PropelCollection) {
            $this->collExpedientes->clearIterator();
        }
        $this->collExpedientes = null;
        if ($this->collProveedorclientes instanceof PropelCollection) {
            $this->collProveedorclientes->clearIterator();
        }
        $this->collProveedorclientes = null;
        $this->aEmpleadoRelatedByIdempleadocomercial = null;
        $this->aEmpleadoRelatedByIdempleadooperaciones = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ClientePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
