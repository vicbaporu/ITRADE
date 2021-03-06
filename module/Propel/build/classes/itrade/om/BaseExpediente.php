<?php


/**
 * Base class that represents a row from the 'expediente' table.
 *
 *
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseExpediente extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ExpedientePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ExpedientePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idexpediente field.
     * @var        int
     */
    protected $idexpediente;

    /**
     * The value for the idcliente field.
     * @var        int
     */
    protected $idcliente;

    /**
     * The value for the idconsignatarioembarcador field.
     * @var        int
     */
    protected $idconsignatarioembarcador;

    /**
     * The value for the expediente_listaempaque field.
     * @var        string
     */
    protected $expediente_listaempaque;

    /**
     * The value for the expediente_factura field.
     * @var        string
     */
    protected $expediente_factura;

    /**
     * The value for the expediente_fechainicio field.
     * @var        string
     */
    protected $expediente_fechainicio;

    /**
     * The value for the expediente_fechafin field.
     * @var        string
     */
    protected $expediente_fechafin;

    /**
     * The value for the expediente_tipo field.
     * @var        string
     */
    protected $expediente_tipo;

    /**
     * The value for the expediente_estatus field.
     * @var        string
     */
    protected $expediente_estatus;

    /**
     * The value for the expediente_folio field.
     * @var        string
     */
    protected $expediente_folio;

    /**
     * The value for the expediente_preciomxn field.
     * @var        string
     */
    protected $expediente_preciomxn;

    /**
     * The value for the expediente_preciousd field.
     * @var        string
     */
    protected $expediente_preciousd;

    /**
     * The value for the expediente_estatuspago field.
     * @var        boolean
     */
    protected $expediente_estatuspago;

    /**
     * The value for the expediente_facturacionmxn field.
     * @var        string
     */
    protected $expediente_facturacionmxn;

    /**
     * The value for the expediente_facturacionusd field.
     * @var        string
     */
    protected $expediente_facturacionusd;

    /**
     * The value for the expediente_pendientepagomxn field.
     * @var        string
     */
    protected $expediente_pendientepagomxn;

    /**
     * The value for the expediente_pendientepagousd field.
     * @var        string
     */
    protected $expediente_pendientepagousd;

    /**
     * The value for the expediente_facturapdfmxn field.
     * @var        string
     */
    protected $expediente_facturapdfmxn;

    /**
     * The value for the expediente_facturaxmlmxn field.
     * @var        string
     */
    protected $expediente_facturaxmlmxn;

    /**
     * The value for the expediente_facturapdfusd field.
     * @var        string
     */
    protected $expediente_facturapdfusd;

    /**
     * The value for the expediente_facturaxmlusd field.
     * @var        string
     */
    protected $expediente_facturaxmlusd;

    /**
     * @var        Cliente
     */
    protected $aCliente;

    /**
     * @var        Proveedorcliente
     */
    protected $aProveedorcliente;

    /**
     * @var        PropelObjectCollection|Expedienteanticipo[] Collection to store aggregation of Expedienteanticipo objects.
     */
    protected $collExpedienteanticipos;
    protected $collExpedienteanticiposPartial;

    /**
     * @var        PropelObjectCollection|Expedientearchivo[] Collection to store aggregation of Expedientearchivo objects.
     */
    protected $collExpedientearchivos;
    protected $collExpedientearchivosPartial;

    /**
     * @var        PropelObjectCollection|Expedientegasto[] Collection to store aggregation of Expedientegasto objects.
     */
    protected $collExpedientegastos;
    protected $collExpedientegastosPartial;

    /**
     * @var        PropelObjectCollection|Expedienteservicio[] Collection to store aggregation of Expedienteservicio objects.
     */
    protected $collExpedienteservicios;
    protected $collExpedienteserviciosPartial;

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
    protected $expedienteanticiposScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $expedientearchivosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $expedientegastosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $expedienteserviciosScheduledForDeletion = null;

    /**
     * Get the [idexpediente] column value.
     *
     * @return int
     */
    public function getIdexpediente()
    {

        return $this->idexpediente;
    }

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
     * Get the [idconsignatarioembarcador] column value.
     *
     * @return int
     */
    public function getIdconsignatarioembarcador()
    {

        return $this->idconsignatarioembarcador;
    }

    /**
     * Get the [expediente_listaempaque] column value.
     *
     * @return string
     */
    public function getExpedienteListaempaque()
    {

        return $this->expediente_listaempaque;
    }

    /**
     * Get the [expediente_factura] column value.
     *
     * @return string
     */
    public function getExpedienteFactura()
    {

        return $this->expediente_factura;
    }

    /**
     * Get the [optionally formatted] temporal [expediente_fechainicio] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getExpedienteFechainicio($format = '%x')
    {
        if ($this->expediente_fechainicio === null) {
            return null;
        }

        if ($this->expediente_fechainicio === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->expediente_fechainicio);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->expediente_fechainicio, true), $x);
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
     * Get the [optionally formatted] temporal [expediente_fechafin] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getExpedienteFechafin($format = '%x')
    {
        if ($this->expediente_fechafin === null) {
            return null;
        }

        if ($this->expediente_fechafin === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->expediente_fechafin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->expediente_fechafin, true), $x);
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
     * Get the [expediente_tipo] column value.
     *
     * @return string
     */
    public function getExpedienteTipo()
    {

        return $this->expediente_tipo;
    }

    /**
     * Get the [expediente_estatus] column value.
     *
     * @return string
     */
    public function getExpedienteEstatus()
    {

        return $this->expediente_estatus;
    }

    /**
     * Get the [expediente_folio] column value.
     *
     * @return string
     */
    public function getExpedienteFolio()
    {

        return $this->expediente_folio;
    }

    /**
     * Get the [expediente_preciomxn] column value.
     *
     * @return string
     */
    public function getExpedientePreciomxn()
    {

        return $this->expediente_preciomxn;
    }

    /**
     * Get the [expediente_preciousd] column value.
     *
     * @return string
     */
    public function getExpedientePreciousd()
    {

        return $this->expediente_preciousd;
    }

    /**
     * Get the [expediente_estatuspago] column value.
     *
     * @return boolean
     */
    public function getExpedienteEstatuspago()
    {

        return $this->expediente_estatuspago;
    }

    /**
     * Get the [expediente_facturacionmxn] column value.
     *
     * @return string
     */
    public function getExpedienteFacturacionmxn()
    {

        return $this->expediente_facturacionmxn;
    }

    /**
     * Get the [expediente_facturacionusd] column value.
     *
     * @return string
     */
    public function getExpedienteFacturacionusd()
    {

        return $this->expediente_facturacionusd;
    }

    /**
     * Get the [expediente_pendientepagomxn] column value.
     *
     * @return string
     */
    public function getExpedientePendientepagomxn()
    {

        return $this->expediente_pendientepagomxn;
    }

    /**
     * Get the [expediente_pendientepagousd] column value.
     *
     * @return string
     */
    public function getExpedientePendientepagousd()
    {

        return $this->expediente_pendientepagousd;
    }

    /**
     * Get the [expediente_facturapdfmxn] column value.
     *
     * @return string
     */
    public function getExpedienteFacturapdfmxn()
    {

        return $this->expediente_facturapdfmxn;
    }

    /**
     * Get the [expediente_facturaxmlmxn] column value.
     *
     * @return string
     */
    public function getExpedienteFacturaxmlmxn()
    {

        return $this->expediente_facturaxmlmxn;
    }

    /**
     * Get the [expediente_facturapdfusd] column value.
     *
     * @return string
     */
    public function getExpedienteFacturapdfusd()
    {

        return $this->expediente_facturapdfusd;
    }

    /**
     * Get the [expediente_facturaxmlusd] column value.
     *
     * @return string
     */
    public function getExpedienteFacturaxmlusd()
    {

        return $this->expediente_facturaxmlusd;
    }

    /**
     * Set the value of [idexpediente] column.
     *
     * @param  int $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setIdexpediente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idexpediente !== $v) {
            $this->idexpediente = $v;
            $this->modifiedColumns[] = ExpedientePeer::IDEXPEDIENTE;
        }


        return $this;
    } // setIdexpediente()

    /**
     * Set the value of [idcliente] column.
     *
     * @param  int $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setIdcliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcliente !== $v) {
            $this->idcliente = $v;
            $this->modifiedColumns[] = ExpedientePeer::IDCLIENTE;
        }

        if ($this->aCliente !== null && $this->aCliente->getIdcliente() !== $v) {
            $this->aCliente = null;
        }


        return $this;
    } // setIdcliente()

    /**
     * Set the value of [idconsignatarioembarcador] column.
     *
     * @param  int $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setIdconsignatarioembarcador($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idconsignatarioembarcador !== $v) {
            $this->idconsignatarioembarcador = $v;
            $this->modifiedColumns[] = ExpedientePeer::IDCONSIGNATARIOEMBARCADOR;
        }

        if ($this->aProveedorcliente !== null && $this->aProveedorcliente->getIdproveedorcliente() !== $v) {
            $this->aProveedorcliente = null;
        }


        return $this;
    } // setIdconsignatarioembarcador()

    /**
     * Set the value of [expediente_listaempaque] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteListaempaque($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_listaempaque !== $v) {
            $this->expediente_listaempaque = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_LISTAEMPAQUE;
        }


        return $this;
    } // setExpedienteListaempaque()

    /**
     * Set the value of [expediente_factura] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFactura($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_factura !== $v) {
            $this->expediente_factura = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FACTURA;
        }


        return $this;
    } // setExpedienteFactura()

    /**
     * Sets the value of [expediente_fechainicio] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFechainicio($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->expediente_fechainicio !== null || $dt !== null) {
            $currentDateAsString = ($this->expediente_fechainicio !== null && $tmpDt = new DateTime($this->expediente_fechainicio)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->expediente_fechainicio = $newDateAsString;
                $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FECHAINICIO;
            }
        } // if either are not null


        return $this;
    } // setExpedienteFechainicio()

    /**
     * Sets the value of [expediente_fechafin] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFechafin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->expediente_fechafin !== null || $dt !== null) {
            $currentDateAsString = ($this->expediente_fechafin !== null && $tmpDt = new DateTime($this->expediente_fechafin)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->expediente_fechafin = $newDateAsString;
                $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FECHAFIN;
            }
        } // if either are not null


        return $this;
    } // setExpedienteFechafin()

    /**
     * Set the value of [expediente_tipo] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_tipo !== $v) {
            $this->expediente_tipo = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_TIPO;
        }


        return $this;
    } // setExpedienteTipo()

    /**
     * Set the value of [expediente_estatus] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_estatus !== $v) {
            $this->expediente_estatus = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_ESTATUS;
        }


        return $this;
    } // setExpedienteEstatus()

    /**
     * Set the value of [expediente_folio] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFolio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_folio !== $v) {
            $this->expediente_folio = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FOLIO;
        }


        return $this;
    } // setExpedienteFolio()

    /**
     * Set the value of [expediente_preciomxn] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedientePreciomxn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expediente_preciomxn !== $v) {
            $this->expediente_preciomxn = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_PRECIOMXN;
        }


        return $this;
    } // setExpedientePreciomxn()

    /**
     * Set the value of [expediente_preciousd] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedientePreciousd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expediente_preciousd !== $v) {
            $this->expediente_preciousd = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_PRECIOUSD;
        }


        return $this;
    } // setExpedientePreciousd()

    /**
     * Sets the value of the [expediente_estatuspago] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteEstatuspago($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->expediente_estatuspago !== $v) {
            $this->expediente_estatuspago = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_ESTATUSPAGO;
        }


        return $this;
    } // setExpedienteEstatuspago()

    /**
     * Set the value of [expediente_facturacionmxn] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFacturacionmxn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_facturacionmxn !== $v) {
            $this->expediente_facturacionmxn = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FACTURACIONMXN;
        }


        return $this;
    } // setExpedienteFacturacionmxn()

    /**
     * Set the value of [expediente_facturacionusd] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFacturacionusd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_facturacionusd !== $v) {
            $this->expediente_facturacionusd = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FACTURACIONUSD;
        }


        return $this;
    } // setExpedienteFacturacionusd()

    /**
     * Set the value of [expediente_pendientepagomxn] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedientePendientepagomxn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expediente_pendientepagomxn !== $v) {
            $this->expediente_pendientepagomxn = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOMXN;
        }


        return $this;
    } // setExpedientePendientepagomxn()

    /**
     * Set the value of [expediente_pendientepagousd] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedientePendientepagousd($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expediente_pendientepagousd !== $v) {
            $this->expediente_pendientepagousd = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOUSD;
        }


        return $this;
    } // setExpedientePendientepagousd()

    /**
     * Set the value of [expediente_facturapdfmxn] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFacturapdfmxn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_facturapdfmxn !== $v) {
            $this->expediente_facturapdfmxn = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FACTURAPDFMXN;
        }


        return $this;
    } // setExpedienteFacturapdfmxn()

    /**
     * Set the value of [expediente_facturaxmlmxn] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFacturaxmlmxn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_facturaxmlmxn !== $v) {
            $this->expediente_facturaxmlmxn = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FACTURAXMLMXN;
        }


        return $this;
    } // setExpedienteFacturaxmlmxn()

    /**
     * Set the value of [expediente_facturapdfusd] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFacturapdfusd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_facturapdfusd !== $v) {
            $this->expediente_facturapdfusd = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FACTURAPDFUSD;
        }


        return $this;
    } // setExpedienteFacturapdfusd()

    /**
     * Set the value of [expediente_facturaxmlusd] column.
     *
     * @param  string $v new value
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteFacturaxmlusd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->expediente_facturaxmlusd !== $v) {
            $this->expediente_facturaxmlusd = $v;
            $this->modifiedColumns[] = ExpedientePeer::EXPEDIENTE_FACTURAXMLUSD;
        }


        return $this;
    } // setExpedienteFacturaxmlusd()

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

            $this->idexpediente = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idcliente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idconsignatarioembarcador = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->expediente_listaempaque = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->expediente_factura = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->expediente_fechainicio = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->expediente_fechafin = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->expediente_tipo = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->expediente_estatus = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->expediente_folio = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->expediente_preciomxn = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->expediente_preciousd = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->expediente_estatuspago = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->expediente_facturacionmxn = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->expediente_facturacionusd = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->expediente_pendientepagomxn = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->expediente_pendientepagousd = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->expediente_facturapdfmxn = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->expediente_facturaxmlmxn = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->expediente_facturapdfusd = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->expediente_facturaxmlusd = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = ExpedientePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Expediente object", $e);
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

        if ($this->aCliente !== null && $this->idcliente !== $this->aCliente->getIdcliente()) {
            $this->aCliente = null;
        }
        if ($this->aProveedorcliente !== null && $this->idconsignatarioembarcador !== $this->aProveedorcliente->getIdproveedorcliente()) {
            $this->aProveedorcliente = null;
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
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ExpedientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCliente = null;
            $this->aProveedorcliente = null;
            $this->collExpedienteanticipos = null;

            $this->collExpedientearchivos = null;

            $this->collExpedientegastos = null;

            $this->collExpedienteservicios = null;

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
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ExpedienteQuery::create()
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
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ExpedientePeer::addInstanceToPool($this);
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

            if ($this->aCliente !== null) {
                if ($this->aCliente->isModified() || $this->aCliente->isNew()) {
                    $affectedRows += $this->aCliente->save($con);
                }
                $this->setCliente($this->aCliente);
            }

            if ($this->aProveedorcliente !== null) {
                if ($this->aProveedorcliente->isModified() || $this->aProveedorcliente->isNew()) {
                    $affectedRows += $this->aProveedorcliente->save($con);
                }
                $this->setProveedorcliente($this->aProveedorcliente);
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

            if ($this->expedienteanticiposScheduledForDeletion !== null) {
                if (!$this->expedienteanticiposScheduledForDeletion->isEmpty()) {
                    ExpedienteanticipoQuery::create()
                        ->filterByPrimaryKeys($this->expedienteanticiposScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedienteanticiposScheduledForDeletion = null;
                }
            }

            if ($this->collExpedienteanticipos !== null) {
                foreach ($this->collExpedienteanticipos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->expedientearchivosScheduledForDeletion !== null) {
                if (!$this->expedientearchivosScheduledForDeletion->isEmpty()) {
                    ExpedientearchivoQuery::create()
                        ->filterByPrimaryKeys($this->expedientearchivosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedientearchivosScheduledForDeletion = null;
                }
            }

            if ($this->collExpedientearchivos !== null) {
                foreach ($this->collExpedientearchivos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->expedientegastosScheduledForDeletion !== null) {
                if (!$this->expedientegastosScheduledForDeletion->isEmpty()) {
                    ExpedientegastoQuery::create()
                        ->filterByPrimaryKeys($this->expedientegastosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedientegastosScheduledForDeletion = null;
                }
            }

            if ($this->collExpedientegastos !== null) {
                foreach ($this->collExpedientegastos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->expedienteserviciosScheduledForDeletion !== null) {
                if (!$this->expedienteserviciosScheduledForDeletion->isEmpty()) {
                    ExpedienteservicioQuery::create()
                        ->filterByPrimaryKeys($this->expedienteserviciosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->expedienteserviciosScheduledForDeletion = null;
                }
            }

            if ($this->collExpedienteservicios !== null) {
                foreach ($this->collExpedienteservicios as $referrerFK) {
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

        $this->modifiedColumns[] = ExpedientePeer::IDEXPEDIENTE;
        if (null !== $this->idexpediente) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ExpedientePeer::IDEXPEDIENTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ExpedientePeer::IDEXPEDIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idexpediente`';
        }
        if ($this->isColumnModified(ExpedientePeer::IDCLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idcliente`';
        }
        if ($this->isColumnModified(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR)) {
            $modifiedColumns[':p' . $index++]  = '`idconsignatarioembarcador`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_LISTAEMPAQUE)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_listaempaque`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURA)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_factura`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FECHAINICIO)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_fechainicio`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FECHAFIN)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_fechafin`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_tipo`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_estatus`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FOLIO)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_folio`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_PRECIOMXN)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_preciomxn`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_PRECIOUSD)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_preciousd`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_ESTATUSPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_estatuspago`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURACIONMXN)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_facturacionmxn`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURACIONUSD)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_facturacionusd`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOMXN)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_pendientepagomxn`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOUSD)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_pendientepagousd`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURAPDFMXN)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_facturapdfmxn`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURAXMLMXN)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_facturaxmlmxn`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURAPDFUSD)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_facturapdfusd`';
        }
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURAXMLUSD)) {
            $modifiedColumns[':p' . $index++]  = '`expediente_facturaxmlusd`';
        }

        $sql = sprintf(
            'INSERT INTO `expediente` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idexpediente`':
                        $stmt->bindValue($identifier, $this->idexpediente, PDO::PARAM_INT);
                        break;
                    case '`idcliente`':
                        $stmt->bindValue($identifier, $this->idcliente, PDO::PARAM_INT);
                        break;
                    case '`idconsignatarioembarcador`':
                        $stmt->bindValue($identifier, $this->idconsignatarioembarcador, PDO::PARAM_INT);
                        break;
                    case '`expediente_listaempaque`':
                        $stmt->bindValue($identifier, $this->expediente_listaempaque, PDO::PARAM_STR);
                        break;
                    case '`expediente_factura`':
                        $stmt->bindValue($identifier, $this->expediente_factura, PDO::PARAM_STR);
                        break;
                    case '`expediente_fechainicio`':
                        $stmt->bindValue($identifier, $this->expediente_fechainicio, PDO::PARAM_STR);
                        break;
                    case '`expediente_fechafin`':
                        $stmt->bindValue($identifier, $this->expediente_fechafin, PDO::PARAM_STR);
                        break;
                    case '`expediente_tipo`':
                        $stmt->bindValue($identifier, $this->expediente_tipo, PDO::PARAM_STR);
                        break;
                    case '`expediente_estatus`':
                        $stmt->bindValue($identifier, $this->expediente_estatus, PDO::PARAM_STR);
                        break;
                    case '`expediente_folio`':
                        $stmt->bindValue($identifier, $this->expediente_folio, PDO::PARAM_STR);
                        break;
                    case '`expediente_preciomxn`':
                        $stmt->bindValue($identifier, $this->expediente_preciomxn, PDO::PARAM_STR);
                        break;
                    case '`expediente_preciousd`':
                        $stmt->bindValue($identifier, $this->expediente_preciousd, PDO::PARAM_STR);
                        break;
                    case '`expediente_estatuspago`':
                        $stmt->bindValue($identifier, (int) $this->expediente_estatuspago, PDO::PARAM_INT);
                        break;
                    case '`expediente_facturacionmxn`':
                        $stmt->bindValue($identifier, $this->expediente_facturacionmxn, PDO::PARAM_STR);
                        break;
                    case '`expediente_facturacionusd`':
                        $stmt->bindValue($identifier, $this->expediente_facturacionusd, PDO::PARAM_STR);
                        break;
                    case '`expediente_pendientepagomxn`':
                        $stmt->bindValue($identifier, $this->expediente_pendientepagomxn, PDO::PARAM_STR);
                        break;
                    case '`expediente_pendientepagousd`':
                        $stmt->bindValue($identifier, $this->expediente_pendientepagousd, PDO::PARAM_STR);
                        break;
                    case '`expediente_facturapdfmxn`':
                        $stmt->bindValue($identifier, $this->expediente_facturapdfmxn, PDO::PARAM_STR);
                        break;
                    case '`expediente_facturaxmlmxn`':
                        $stmt->bindValue($identifier, $this->expediente_facturaxmlmxn, PDO::PARAM_STR);
                        break;
                    case '`expediente_facturapdfusd`':
                        $stmt->bindValue($identifier, $this->expediente_facturapdfusd, PDO::PARAM_STR);
                        break;
                    case '`expediente_facturaxmlusd`':
                        $stmt->bindValue($identifier, $this->expediente_facturaxmlusd, PDO::PARAM_STR);
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
        $this->setIdexpediente($pk);

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

            if ($this->aCliente !== null) {
                if (!$this->aCliente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCliente->getValidationFailures());
                }
            }

            if ($this->aProveedorcliente !== null) {
                if (!$this->aProveedorcliente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProveedorcliente->getValidationFailures());
                }
            }


            if (($retval = ExpedientePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExpedienteanticipos !== null) {
                    foreach ($this->collExpedienteanticipos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExpedientearchivos !== null) {
                    foreach ($this->collExpedientearchivos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExpedientegastos !== null) {
                    foreach ($this->collExpedientegastos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExpedienteservicios !== null) {
                    foreach ($this->collExpedienteservicios as $referrerFK) {
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
        $pos = ExpedientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdexpediente();
                break;
            case 1:
                return $this->getIdcliente();
                break;
            case 2:
                return $this->getIdconsignatarioembarcador();
                break;
            case 3:
                return $this->getExpedienteListaempaque();
                break;
            case 4:
                return $this->getExpedienteFactura();
                break;
            case 5:
                return $this->getExpedienteFechainicio();
                break;
            case 6:
                return $this->getExpedienteFechafin();
                break;
            case 7:
                return $this->getExpedienteTipo();
                break;
            case 8:
                return $this->getExpedienteEstatus();
                break;
            case 9:
                return $this->getExpedienteFolio();
                break;
            case 10:
                return $this->getExpedientePreciomxn();
                break;
            case 11:
                return $this->getExpedientePreciousd();
                break;
            case 12:
                return $this->getExpedienteEstatuspago();
                break;
            case 13:
                return $this->getExpedienteFacturacionmxn();
                break;
            case 14:
                return $this->getExpedienteFacturacionusd();
                break;
            case 15:
                return $this->getExpedientePendientepagomxn();
                break;
            case 16:
                return $this->getExpedientePendientepagousd();
                break;
            case 17:
                return $this->getExpedienteFacturapdfmxn();
                break;
            case 18:
                return $this->getExpedienteFacturaxmlmxn();
                break;
            case 19:
                return $this->getExpedienteFacturapdfusd();
                break;
            case 20:
                return $this->getExpedienteFacturaxmlusd();
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
        if (isset($alreadyDumpedObjects['Expediente'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Expediente'][$this->getPrimaryKey()] = true;
        $keys = ExpedientePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdexpediente(),
            $keys[1] => $this->getIdcliente(),
            $keys[2] => $this->getIdconsignatarioembarcador(),
            $keys[3] => $this->getExpedienteListaempaque(),
            $keys[4] => $this->getExpedienteFactura(),
            $keys[5] => $this->getExpedienteFechainicio(),
            $keys[6] => $this->getExpedienteFechafin(),
            $keys[7] => $this->getExpedienteTipo(),
            $keys[8] => $this->getExpedienteEstatus(),
            $keys[9] => $this->getExpedienteFolio(),
            $keys[10] => $this->getExpedientePreciomxn(),
            $keys[11] => $this->getExpedientePreciousd(),
            $keys[12] => $this->getExpedienteEstatuspago(),
            $keys[13] => $this->getExpedienteFacturacionmxn(),
            $keys[14] => $this->getExpedienteFacturacionusd(),
            $keys[15] => $this->getExpedientePendientepagomxn(),
            $keys[16] => $this->getExpedientePendientepagousd(),
            $keys[17] => $this->getExpedienteFacturapdfmxn(),
            $keys[18] => $this->getExpedienteFacturaxmlmxn(),
            $keys[19] => $this->getExpedienteFacturapdfusd(),
            $keys[20] => $this->getExpedienteFacturaxmlusd(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCliente) {
                $result['Cliente'] = $this->aCliente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProveedorcliente) {
                $result['Proveedorcliente'] = $this->aProveedorcliente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collExpedienteanticipos) {
                $result['Expedienteanticipos'] = $this->collExpedienteanticipos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExpedientearchivos) {
                $result['Expedientearchivos'] = $this->collExpedientearchivos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExpedientegastos) {
                $result['Expedientegastos'] = $this->collExpedientegastos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExpedienteservicios) {
                $result['Expedienteservicios'] = $this->collExpedienteservicios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ExpedientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdexpediente($value);
                break;
            case 1:
                $this->setIdcliente($value);
                break;
            case 2:
                $this->setIdconsignatarioembarcador($value);
                break;
            case 3:
                $this->setExpedienteListaempaque($value);
                break;
            case 4:
                $this->setExpedienteFactura($value);
                break;
            case 5:
                $this->setExpedienteFechainicio($value);
                break;
            case 6:
                $this->setExpedienteFechafin($value);
                break;
            case 7:
                $this->setExpedienteTipo($value);
                break;
            case 8:
                $this->setExpedienteEstatus($value);
                break;
            case 9:
                $this->setExpedienteFolio($value);
                break;
            case 10:
                $this->setExpedientePreciomxn($value);
                break;
            case 11:
                $this->setExpedientePreciousd($value);
                break;
            case 12:
                $this->setExpedienteEstatuspago($value);
                break;
            case 13:
                $this->setExpedienteFacturacionmxn($value);
                break;
            case 14:
                $this->setExpedienteFacturacionusd($value);
                break;
            case 15:
                $this->setExpedientePendientepagomxn($value);
                break;
            case 16:
                $this->setExpedientePendientepagousd($value);
                break;
            case 17:
                $this->setExpedienteFacturapdfmxn($value);
                break;
            case 18:
                $this->setExpedienteFacturaxmlmxn($value);
                break;
            case 19:
                $this->setExpedienteFacturapdfusd($value);
                break;
            case 20:
                $this->setExpedienteFacturaxmlusd($value);
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
        $keys = ExpedientePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdexpediente($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdcliente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdconsignatarioembarcador($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setExpedienteListaempaque($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setExpedienteFactura($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setExpedienteFechainicio($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setExpedienteFechafin($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setExpedienteTipo($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setExpedienteEstatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setExpedienteFolio($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setExpedientePreciomxn($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setExpedientePreciousd($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setExpedienteEstatuspago($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setExpedienteFacturacionmxn($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setExpedienteFacturacionusd($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setExpedientePendientepagomxn($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setExpedientePendientepagousd($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setExpedienteFacturapdfmxn($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setExpedienteFacturaxmlmxn($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setExpedienteFacturapdfusd($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setExpedienteFacturaxmlusd($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ExpedientePeer::DATABASE_NAME);

        if ($this->isColumnModified(ExpedientePeer::IDEXPEDIENTE)) $criteria->add(ExpedientePeer::IDEXPEDIENTE, $this->idexpediente);
        if ($this->isColumnModified(ExpedientePeer::IDCLIENTE)) $criteria->add(ExpedientePeer::IDCLIENTE, $this->idcliente);
        if ($this->isColumnModified(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR)) $criteria->add(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR, $this->idconsignatarioembarcador);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_LISTAEMPAQUE)) $criteria->add(ExpedientePeer::EXPEDIENTE_LISTAEMPAQUE, $this->expediente_listaempaque);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURA)) $criteria->add(ExpedientePeer::EXPEDIENTE_FACTURA, $this->expediente_factura);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FECHAINICIO)) $criteria->add(ExpedientePeer::EXPEDIENTE_FECHAINICIO, $this->expediente_fechainicio);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FECHAFIN)) $criteria->add(ExpedientePeer::EXPEDIENTE_FECHAFIN, $this->expediente_fechafin);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_TIPO)) $criteria->add(ExpedientePeer::EXPEDIENTE_TIPO, $this->expediente_tipo);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_ESTATUS)) $criteria->add(ExpedientePeer::EXPEDIENTE_ESTATUS, $this->expediente_estatus);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FOLIO)) $criteria->add(ExpedientePeer::EXPEDIENTE_FOLIO, $this->expediente_folio);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_PRECIOMXN)) $criteria->add(ExpedientePeer::EXPEDIENTE_PRECIOMXN, $this->expediente_preciomxn);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_PRECIOUSD)) $criteria->add(ExpedientePeer::EXPEDIENTE_PRECIOUSD, $this->expediente_preciousd);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_ESTATUSPAGO)) $criteria->add(ExpedientePeer::EXPEDIENTE_ESTATUSPAGO, $this->expediente_estatuspago);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURACIONMXN)) $criteria->add(ExpedientePeer::EXPEDIENTE_FACTURACIONMXN, $this->expediente_facturacionmxn);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURACIONUSD)) $criteria->add(ExpedientePeer::EXPEDIENTE_FACTURACIONUSD, $this->expediente_facturacionusd);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOMXN)) $criteria->add(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOMXN, $this->expediente_pendientepagomxn);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOUSD)) $criteria->add(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOUSD, $this->expediente_pendientepagousd);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURAPDFMXN)) $criteria->add(ExpedientePeer::EXPEDIENTE_FACTURAPDFMXN, $this->expediente_facturapdfmxn);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURAXMLMXN)) $criteria->add(ExpedientePeer::EXPEDIENTE_FACTURAXMLMXN, $this->expediente_facturaxmlmxn);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURAPDFUSD)) $criteria->add(ExpedientePeer::EXPEDIENTE_FACTURAPDFUSD, $this->expediente_facturapdfusd);
        if ($this->isColumnModified(ExpedientePeer::EXPEDIENTE_FACTURAXMLUSD)) $criteria->add(ExpedientePeer::EXPEDIENTE_FACTURAXMLUSD, $this->expediente_facturaxmlusd);

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
        $criteria = new Criteria(ExpedientePeer::DATABASE_NAME);
        $criteria->add(ExpedientePeer::IDEXPEDIENTE, $this->idexpediente);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdexpediente();
    }

    /**
     * Generic method to set the primary key (idexpediente column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdexpediente($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdexpediente();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Expediente (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdcliente($this->getIdcliente());
        $copyObj->setIdconsignatarioembarcador($this->getIdconsignatarioembarcador());
        $copyObj->setExpedienteListaempaque($this->getExpedienteListaempaque());
        $copyObj->setExpedienteFactura($this->getExpedienteFactura());
        $copyObj->setExpedienteFechainicio($this->getExpedienteFechainicio());
        $copyObj->setExpedienteFechafin($this->getExpedienteFechafin());
        $copyObj->setExpedienteTipo($this->getExpedienteTipo());
        $copyObj->setExpedienteEstatus($this->getExpedienteEstatus());
        $copyObj->setExpedienteFolio($this->getExpedienteFolio());
        $copyObj->setExpedientePreciomxn($this->getExpedientePreciomxn());
        $copyObj->setExpedientePreciousd($this->getExpedientePreciousd());
        $copyObj->setExpedienteEstatuspago($this->getExpedienteEstatuspago());
        $copyObj->setExpedienteFacturacionmxn($this->getExpedienteFacturacionmxn());
        $copyObj->setExpedienteFacturacionusd($this->getExpedienteFacturacionusd());
        $copyObj->setExpedientePendientepagomxn($this->getExpedientePendientepagomxn());
        $copyObj->setExpedientePendientepagousd($this->getExpedientePendientepagousd());
        $copyObj->setExpedienteFacturapdfmxn($this->getExpedienteFacturapdfmxn());
        $copyObj->setExpedienteFacturaxmlmxn($this->getExpedienteFacturaxmlmxn());
        $copyObj->setExpedienteFacturapdfusd($this->getExpedienteFacturapdfusd());
        $copyObj->setExpedienteFacturaxmlusd($this->getExpedienteFacturaxmlusd());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getExpedienteanticipos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedienteanticipo($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExpedientearchivos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedientearchivo($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExpedientegastos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedientegasto($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExpedienteservicios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExpedienteservicio($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdexpediente(NULL); // this is a auto-increment column, so set to default value
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
     * @return Expediente Clone of current object.
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
     * @return ExpedientePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ExpedientePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Cliente object.
     *
     * @param                  Cliente $v
     * @return Expediente The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCliente(Cliente $v = null)
    {
        if ($v === null) {
            $this->setIdcliente(NULL);
        } else {
            $this->setIdcliente($v->getIdcliente());
        }

        $this->aCliente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cliente object, it will not be re-added.
        if ($v !== null) {
            $v->addExpediente($this);
        }


        return $this;
    }


    /**
     * Get the associated Cliente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cliente The associated Cliente object.
     * @throws PropelException
     */
    public function getCliente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCliente === null && ($this->idcliente !== null) && $doQuery) {
            $this->aCliente = ClienteQuery::create()->findPk($this->idcliente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCliente->addExpedientes($this);
             */
        }

        return $this->aCliente;
    }

    /**
     * Declares an association between this object and a Proveedorcliente object.
     *
     * @param                  Proveedorcliente $v
     * @return Expediente The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProveedorcliente(Proveedorcliente $v = null)
    {
        if ($v === null) {
            $this->setIdconsignatarioembarcador(NULL);
        } else {
            $this->setIdconsignatarioembarcador($v->getIdproveedorcliente());
        }

        $this->aProveedorcliente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Proveedorcliente object, it will not be re-added.
        if ($v !== null) {
            $v->addExpediente($this);
        }


        return $this;
    }


    /**
     * Get the associated Proveedorcliente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Proveedorcliente The associated Proveedorcliente object.
     * @throws PropelException
     */
    public function getProveedorcliente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProveedorcliente === null && ($this->idconsignatarioembarcador !== null) && $doQuery) {
            $this->aProveedorcliente = ProveedorclienteQuery::create()->findPk($this->idconsignatarioembarcador, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProveedorcliente->addExpedientes($this);
             */
        }

        return $this->aProveedorcliente;
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
        if ('Expedienteanticipo' == $relationName) {
            $this->initExpedienteanticipos();
        }
        if ('Expedientearchivo' == $relationName) {
            $this->initExpedientearchivos();
        }
        if ('Expedientegasto' == $relationName) {
            $this->initExpedientegastos();
        }
        if ('Expedienteservicio' == $relationName) {
            $this->initExpedienteservicios();
        }
    }

    /**
     * Clears out the collExpedienteanticipos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Expediente The current object (for fluent API support)
     * @see        addExpedienteanticipos()
     */
    public function clearExpedienteanticipos()
    {
        $this->collExpedienteanticipos = null; // important to set this to null since that means it is uninitialized
        $this->collExpedienteanticiposPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedienteanticipos collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedienteanticipos($v = true)
    {
        $this->collExpedienteanticiposPartial = $v;
    }

    /**
     * Initializes the collExpedienteanticipos collection.
     *
     * By default this just sets the collExpedienteanticipos collection to an empty array (like clearcollExpedienteanticipos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedienteanticipos($overrideExisting = true)
    {
        if (null !== $this->collExpedienteanticipos && !$overrideExisting) {
            return;
        }
        $this->collExpedienteanticipos = new PropelObjectCollection();
        $this->collExpedienteanticipos->setModel('Expedienteanticipo');
    }

    /**
     * Gets an array of Expedienteanticipo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Expediente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expedienteanticipo[] List of Expedienteanticipo objects
     * @throws PropelException
     */
    public function getExpedienteanticipos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedienteanticiposPartial && !$this->isNew();
        if (null === $this->collExpedienteanticipos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedienteanticipos) {
                // return empty collection
                $this->initExpedienteanticipos();
            } else {
                $collExpedienteanticipos = ExpedienteanticipoQuery::create(null, $criteria)
                    ->filterByExpediente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedienteanticiposPartial && count($collExpedienteanticipos)) {
                      $this->initExpedienteanticipos(false);

                      foreach ($collExpedienteanticipos as $obj) {
                        if (false == $this->collExpedienteanticipos->contains($obj)) {
                          $this->collExpedienteanticipos->append($obj);
                        }
                      }

                      $this->collExpedienteanticiposPartial = true;
                    }

                    $collExpedienteanticipos->getInternalIterator()->rewind();

                    return $collExpedienteanticipos;
                }

                if ($partial && $this->collExpedienteanticipos) {
                    foreach ($this->collExpedienteanticipos as $obj) {
                        if ($obj->isNew()) {
                            $collExpedienteanticipos[] = $obj;
                        }
                    }
                }

                $this->collExpedienteanticipos = $collExpedienteanticipos;
                $this->collExpedienteanticiposPartial = false;
            }
        }

        return $this->collExpedienteanticipos;
    }

    /**
     * Sets a collection of Expedienteanticipo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedienteanticipos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteanticipos(PropelCollection $expedienteanticipos, PropelPDO $con = null)
    {
        $expedienteanticiposToDelete = $this->getExpedienteanticipos(new Criteria(), $con)->diff($expedienteanticipos);


        $this->expedienteanticiposScheduledForDeletion = $expedienteanticiposToDelete;

        foreach ($expedienteanticiposToDelete as $expedienteanticipoRemoved) {
            $expedienteanticipoRemoved->setExpediente(null);
        }

        $this->collExpedienteanticipos = null;
        foreach ($expedienteanticipos as $expedienteanticipo) {
            $this->addExpedienteanticipo($expedienteanticipo);
        }

        $this->collExpedienteanticipos = $expedienteanticipos;
        $this->collExpedienteanticiposPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expedienteanticipo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expedienteanticipo objects.
     * @throws PropelException
     */
    public function countExpedienteanticipos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedienteanticiposPartial && !$this->isNew();
        if (null === $this->collExpedienteanticipos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedienteanticipos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedienteanticipos());
            }
            $query = ExpedienteanticipoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExpediente($this)
                ->count($con);
        }

        return count($this->collExpedienteanticipos);
    }

    /**
     * Method called to associate a Expedienteanticipo object to this object
     * through the Expedienteanticipo foreign key attribute.
     *
     * @param    Expedienteanticipo $l Expedienteanticipo
     * @return Expediente The current object (for fluent API support)
     */
    public function addExpedienteanticipo(Expedienteanticipo $l)
    {
        if ($this->collExpedienteanticipos === null) {
            $this->initExpedienteanticipos();
            $this->collExpedienteanticiposPartial = true;
        }

        if (!in_array($l, $this->collExpedienteanticipos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedienteanticipo($l);

            if ($this->expedienteanticiposScheduledForDeletion and $this->expedienteanticiposScheduledForDeletion->contains($l)) {
                $this->expedienteanticiposScheduledForDeletion->remove($this->expedienteanticiposScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expedienteanticipo $expedienteanticipo The expedienteanticipo object to add.
     */
    protected function doAddExpedienteanticipo($expedienteanticipo)
    {
        $this->collExpedienteanticipos[]= $expedienteanticipo;
        $expedienteanticipo->setExpediente($this);
    }

    /**
     * @param	Expedienteanticipo $expedienteanticipo The expedienteanticipo object to remove.
     * @return Expediente The current object (for fluent API support)
     */
    public function removeExpedienteanticipo($expedienteanticipo)
    {
        if ($this->getExpedienteanticipos()->contains($expedienteanticipo)) {
            $this->collExpedienteanticipos->remove($this->collExpedienteanticipos->search($expedienteanticipo));
            if (null === $this->expedienteanticiposScheduledForDeletion) {
                $this->expedienteanticiposScheduledForDeletion = clone $this->collExpedienteanticipos;
                $this->expedienteanticiposScheduledForDeletion->clear();
            }
            $this->expedienteanticiposScheduledForDeletion[]= clone $expedienteanticipo;
            $expedienteanticipo->setExpediente(null);
        }

        return $this;
    }

    /**
     * Clears out the collExpedientearchivos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Expediente The current object (for fluent API support)
     * @see        addExpedientearchivos()
     */
    public function clearExpedientearchivos()
    {
        $this->collExpedientearchivos = null; // important to set this to null since that means it is uninitialized
        $this->collExpedientearchivosPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedientearchivos collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedientearchivos($v = true)
    {
        $this->collExpedientearchivosPartial = $v;
    }

    /**
     * Initializes the collExpedientearchivos collection.
     *
     * By default this just sets the collExpedientearchivos collection to an empty array (like clearcollExpedientearchivos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedientearchivos($overrideExisting = true)
    {
        if (null !== $this->collExpedientearchivos && !$overrideExisting) {
            return;
        }
        $this->collExpedientearchivos = new PropelObjectCollection();
        $this->collExpedientearchivos->setModel('Expedientearchivo');
    }

    /**
     * Gets an array of Expedientearchivo objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Expediente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expedientearchivo[] List of Expedientearchivo objects
     * @throws PropelException
     */
    public function getExpedientearchivos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedientearchivosPartial && !$this->isNew();
        if (null === $this->collExpedientearchivos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedientearchivos) {
                // return empty collection
                $this->initExpedientearchivos();
            } else {
                $collExpedientearchivos = ExpedientearchivoQuery::create(null, $criteria)
                    ->filterByExpediente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedientearchivosPartial && count($collExpedientearchivos)) {
                      $this->initExpedientearchivos(false);

                      foreach ($collExpedientearchivos as $obj) {
                        if (false == $this->collExpedientearchivos->contains($obj)) {
                          $this->collExpedientearchivos->append($obj);
                        }
                      }

                      $this->collExpedientearchivosPartial = true;
                    }

                    $collExpedientearchivos->getInternalIterator()->rewind();

                    return $collExpedientearchivos;
                }

                if ($partial && $this->collExpedientearchivos) {
                    foreach ($this->collExpedientearchivos as $obj) {
                        if ($obj->isNew()) {
                            $collExpedientearchivos[] = $obj;
                        }
                    }
                }

                $this->collExpedientearchivos = $collExpedientearchivos;
                $this->collExpedientearchivosPartial = false;
            }
        }

        return $this->collExpedientearchivos;
    }

    /**
     * Sets a collection of Expedientearchivo objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedientearchivos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedientearchivos(PropelCollection $expedientearchivos, PropelPDO $con = null)
    {
        $expedientearchivosToDelete = $this->getExpedientearchivos(new Criteria(), $con)->diff($expedientearchivos);


        $this->expedientearchivosScheduledForDeletion = $expedientearchivosToDelete;

        foreach ($expedientearchivosToDelete as $expedientearchivoRemoved) {
            $expedientearchivoRemoved->setExpediente(null);
        }

        $this->collExpedientearchivos = null;
        foreach ($expedientearchivos as $expedientearchivo) {
            $this->addExpedientearchivo($expedientearchivo);
        }

        $this->collExpedientearchivos = $expedientearchivos;
        $this->collExpedientearchivosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expedientearchivo objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expedientearchivo objects.
     * @throws PropelException
     */
    public function countExpedientearchivos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedientearchivosPartial && !$this->isNew();
        if (null === $this->collExpedientearchivos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedientearchivos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedientearchivos());
            }
            $query = ExpedientearchivoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExpediente($this)
                ->count($con);
        }

        return count($this->collExpedientearchivos);
    }

    /**
     * Method called to associate a Expedientearchivo object to this object
     * through the Expedientearchivo foreign key attribute.
     *
     * @param    Expedientearchivo $l Expedientearchivo
     * @return Expediente The current object (for fluent API support)
     */
    public function addExpedientearchivo(Expedientearchivo $l)
    {
        if ($this->collExpedientearchivos === null) {
            $this->initExpedientearchivos();
            $this->collExpedientearchivosPartial = true;
        }

        if (!in_array($l, $this->collExpedientearchivos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedientearchivo($l);

            if ($this->expedientearchivosScheduledForDeletion and $this->expedientearchivosScheduledForDeletion->contains($l)) {
                $this->expedientearchivosScheduledForDeletion->remove($this->expedientearchivosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expedientearchivo $expedientearchivo The expedientearchivo object to add.
     */
    protected function doAddExpedientearchivo($expedientearchivo)
    {
        $this->collExpedientearchivos[]= $expedientearchivo;
        $expedientearchivo->setExpediente($this);
    }

    /**
     * @param	Expedientearchivo $expedientearchivo The expedientearchivo object to remove.
     * @return Expediente The current object (for fluent API support)
     */
    public function removeExpedientearchivo($expedientearchivo)
    {
        if ($this->getExpedientearchivos()->contains($expedientearchivo)) {
            $this->collExpedientearchivos->remove($this->collExpedientearchivos->search($expedientearchivo));
            if (null === $this->expedientearchivosScheduledForDeletion) {
                $this->expedientearchivosScheduledForDeletion = clone $this->collExpedientearchivos;
                $this->expedientearchivosScheduledForDeletion->clear();
            }
            $this->expedientearchivosScheduledForDeletion[]= clone $expedientearchivo;
            $expedientearchivo->setExpediente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Expediente is new, it will return
     * an empty collection; or if this Expediente has previously
     * been saved, it will retrieve related Expedientearchivos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Expediente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientearchivo[] List of Expedientearchivo objects
     */
    public function getExpedientearchivosJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientearchivoQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getExpedientearchivos($query, $con);
    }

    /**
     * Clears out the collExpedientegastos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Expediente The current object (for fluent API support)
     * @see        addExpedientegastos()
     */
    public function clearExpedientegastos()
    {
        $this->collExpedientegastos = null; // important to set this to null since that means it is uninitialized
        $this->collExpedientegastosPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedientegastos collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedientegastos($v = true)
    {
        $this->collExpedientegastosPartial = $v;
    }

    /**
     * Initializes the collExpedientegastos collection.
     *
     * By default this just sets the collExpedientegastos collection to an empty array (like clearcollExpedientegastos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedientegastos($overrideExisting = true)
    {
        if (null !== $this->collExpedientegastos && !$overrideExisting) {
            return;
        }
        $this->collExpedientegastos = new PropelObjectCollection();
        $this->collExpedientegastos->setModel('Expedientegasto');
    }

    /**
     * Gets an array of Expedientegasto objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Expediente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expedientegasto[] List of Expedientegasto objects
     * @throws PropelException
     */
    public function getExpedientegastos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedientegastosPartial && !$this->isNew();
        if (null === $this->collExpedientegastos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedientegastos) {
                // return empty collection
                $this->initExpedientegastos();
            } else {
                $collExpedientegastos = ExpedientegastoQuery::create(null, $criteria)
                    ->filterByExpediente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedientegastosPartial && count($collExpedientegastos)) {
                      $this->initExpedientegastos(false);

                      foreach ($collExpedientegastos as $obj) {
                        if (false == $this->collExpedientegastos->contains($obj)) {
                          $this->collExpedientegastos->append($obj);
                        }
                      }

                      $this->collExpedientegastosPartial = true;
                    }

                    $collExpedientegastos->getInternalIterator()->rewind();

                    return $collExpedientegastos;
                }

                if ($partial && $this->collExpedientegastos) {
                    foreach ($this->collExpedientegastos as $obj) {
                        if ($obj->isNew()) {
                            $collExpedientegastos[] = $obj;
                        }
                    }
                }

                $this->collExpedientegastos = $collExpedientegastos;
                $this->collExpedientegastosPartial = false;
            }
        }

        return $this->collExpedientegastos;
    }

    /**
     * Sets a collection of Expedientegasto objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedientegastos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedientegastos(PropelCollection $expedientegastos, PropelPDO $con = null)
    {
        $expedientegastosToDelete = $this->getExpedientegastos(new Criteria(), $con)->diff($expedientegastos);


        $this->expedientegastosScheduledForDeletion = $expedientegastosToDelete;

        foreach ($expedientegastosToDelete as $expedientegastoRemoved) {
            $expedientegastoRemoved->setExpediente(null);
        }

        $this->collExpedientegastos = null;
        foreach ($expedientegastos as $expedientegasto) {
            $this->addExpedientegasto($expedientegasto);
        }

        $this->collExpedientegastos = $expedientegastos;
        $this->collExpedientegastosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expedientegasto objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expedientegasto objects.
     * @throws PropelException
     */
    public function countExpedientegastos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedientegastosPartial && !$this->isNew();
        if (null === $this->collExpedientegastos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedientegastos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedientegastos());
            }
            $query = ExpedientegastoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExpediente($this)
                ->count($con);
        }

        return count($this->collExpedientegastos);
    }

    /**
     * Method called to associate a Expedientegasto object to this object
     * through the Expedientegasto foreign key attribute.
     *
     * @param    Expedientegasto $l Expedientegasto
     * @return Expediente The current object (for fluent API support)
     */
    public function addExpedientegasto(Expedientegasto $l)
    {
        if ($this->collExpedientegastos === null) {
            $this->initExpedientegastos();
            $this->collExpedientegastosPartial = true;
        }

        if (!in_array($l, $this->collExpedientegastos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedientegasto($l);

            if ($this->expedientegastosScheduledForDeletion and $this->expedientegastosScheduledForDeletion->contains($l)) {
                $this->expedientegastosScheduledForDeletion->remove($this->expedientegastosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expedientegasto $expedientegasto The expedientegasto object to add.
     */
    protected function doAddExpedientegasto($expedientegasto)
    {
        $this->collExpedientegastos[]= $expedientegasto;
        $expedientegasto->setExpediente($this);
    }

    /**
     * @param	Expedientegasto $expedientegasto The expedientegasto object to remove.
     * @return Expediente The current object (for fluent API support)
     */
    public function removeExpedientegasto($expedientegasto)
    {
        if ($this->getExpedientegastos()->contains($expedientegasto)) {
            $this->collExpedientegastos->remove($this->collExpedientegastos->search($expedientegasto));
            if (null === $this->expedientegastosScheduledForDeletion) {
                $this->expedientegastosScheduledForDeletion = clone $this->collExpedientegastos;
                $this->expedientegastosScheduledForDeletion->clear();
            }
            $this->expedientegastosScheduledForDeletion[]= clone $expedientegasto;
            $expedientegasto->setExpediente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Expediente is new, it will return
     * an empty collection; or if this Expediente has previously
     * been saved, it will retrieve related Expedientegastos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Expediente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientegasto[] List of Expedientegasto objects
     */
    public function getExpedientegastosJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientegastoQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getExpedientegastos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Expediente is new, it will return
     * an empty collection; or if this Expediente has previously
     * been saved, it will retrieve related Expedientegastos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Expediente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientegasto[] List of Expedientegasto objects
     */
    public function getExpedientegastosJoinGastofacturacion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientegastoQuery::create(null, $criteria);
        $query->joinWith('Gastofacturacion', $join_behavior);

        return $this->getExpedientegastos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Expediente is new, it will return
     * an empty collection; or if this Expediente has previously
     * been saved, it will retrieve related Expedientegastos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Expediente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedientegasto[] List of Expedientegasto objects
     */
    public function getExpedientegastosJoinProveedoritrade($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedientegastoQuery::create(null, $criteria);
        $query->joinWith('Proveedoritrade', $join_behavior);

        return $this->getExpedientegastos($query, $con);
    }

    /**
     * Clears out the collExpedienteservicios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Expediente The current object (for fluent API support)
     * @see        addExpedienteservicios()
     */
    public function clearExpedienteservicios()
    {
        $this->collExpedienteservicios = null; // important to set this to null since that means it is uninitialized
        $this->collExpedienteserviciosPartial = null;

        return $this;
    }

    /**
     * reset is the collExpedienteservicios collection loaded partially
     *
     * @return void
     */
    public function resetPartialExpedienteservicios($v = true)
    {
        $this->collExpedienteserviciosPartial = $v;
    }

    /**
     * Initializes the collExpedienteservicios collection.
     *
     * By default this just sets the collExpedienteservicios collection to an empty array (like clearcollExpedienteservicios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExpedienteservicios($overrideExisting = true)
    {
        if (null !== $this->collExpedienteservicios && !$overrideExisting) {
            return;
        }
        $this->collExpedienteservicios = new PropelObjectCollection();
        $this->collExpedienteservicios->setModel('Expedienteservicio');
    }

    /**
     * Gets an array of Expedienteservicio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Expediente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Expedienteservicio[] List of Expedienteservicio objects
     * @throws PropelException
     */
    public function getExpedienteservicios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExpedienteserviciosPartial && !$this->isNew();
        if (null === $this->collExpedienteservicios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExpedienteservicios) {
                // return empty collection
                $this->initExpedienteservicios();
            } else {
                $collExpedienteservicios = ExpedienteservicioQuery::create(null, $criteria)
                    ->filterByExpediente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExpedienteserviciosPartial && count($collExpedienteservicios)) {
                      $this->initExpedienteservicios(false);

                      foreach ($collExpedienteservicios as $obj) {
                        if (false == $this->collExpedienteservicios->contains($obj)) {
                          $this->collExpedienteservicios->append($obj);
                        }
                      }

                      $this->collExpedienteserviciosPartial = true;
                    }

                    $collExpedienteservicios->getInternalIterator()->rewind();

                    return $collExpedienteservicios;
                }

                if ($partial && $this->collExpedienteservicios) {
                    foreach ($this->collExpedienteservicios as $obj) {
                        if ($obj->isNew()) {
                            $collExpedienteservicios[] = $obj;
                        }
                    }
                }

                $this->collExpedienteservicios = $collExpedienteservicios;
                $this->collExpedienteserviciosPartial = false;
            }
        }

        return $this->collExpedienteservicios;
    }

    /**
     * Sets a collection of Expedienteservicio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $expedienteservicios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Expediente The current object (for fluent API support)
     */
    public function setExpedienteservicios(PropelCollection $expedienteservicios, PropelPDO $con = null)
    {
        $expedienteserviciosToDelete = $this->getExpedienteservicios(new Criteria(), $con)->diff($expedienteservicios);


        $this->expedienteserviciosScheduledForDeletion = $expedienteserviciosToDelete;

        foreach ($expedienteserviciosToDelete as $expedienteservicioRemoved) {
            $expedienteservicioRemoved->setExpediente(null);
        }

        $this->collExpedienteservicios = null;
        foreach ($expedienteservicios as $expedienteservicio) {
            $this->addExpedienteservicio($expedienteservicio);
        }

        $this->collExpedienteservicios = $expedienteservicios;
        $this->collExpedienteserviciosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Expedienteservicio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Expedienteservicio objects.
     * @throws PropelException
     */
    public function countExpedienteservicios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExpedienteserviciosPartial && !$this->isNew();
        if (null === $this->collExpedienteservicios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExpedienteservicios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExpedienteservicios());
            }
            $query = ExpedienteservicioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExpediente($this)
                ->count($con);
        }

        return count($this->collExpedienteservicios);
    }

    /**
     * Method called to associate a Expedienteservicio object to this object
     * through the Expedienteservicio foreign key attribute.
     *
     * @param    Expedienteservicio $l Expedienteservicio
     * @return Expediente The current object (for fluent API support)
     */
    public function addExpedienteservicio(Expedienteservicio $l)
    {
        if ($this->collExpedienteservicios === null) {
            $this->initExpedienteservicios();
            $this->collExpedienteserviciosPartial = true;
        }

        if (!in_array($l, $this->collExpedienteservicios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExpedienteservicio($l);

            if ($this->expedienteserviciosScheduledForDeletion and $this->expedienteserviciosScheduledForDeletion->contains($l)) {
                $this->expedienteserviciosScheduledForDeletion->remove($this->expedienteserviciosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Expedienteservicio $expedienteservicio The expedienteservicio object to add.
     */
    protected function doAddExpedienteservicio($expedienteservicio)
    {
        $this->collExpedienteservicios[]= $expedienteservicio;
        $expedienteservicio->setExpediente($this);
    }

    /**
     * @param	Expedienteservicio $expedienteservicio The expedienteservicio object to remove.
     * @return Expediente The current object (for fluent API support)
     */
    public function removeExpedienteservicio($expedienteservicio)
    {
        if ($this->getExpedienteservicios()->contains($expedienteservicio)) {
            $this->collExpedienteservicios->remove($this->collExpedienteservicios->search($expedienteservicio));
            if (null === $this->expedienteserviciosScheduledForDeletion) {
                $this->expedienteserviciosScheduledForDeletion = clone $this->collExpedienteservicios;
                $this->expedienteserviciosScheduledForDeletion->clear();
            }
            $this->expedienteserviciosScheduledForDeletion[]= clone $expedienteservicio;
            $expedienteservicio->setExpediente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Expediente is new, it will return
     * an empty collection; or if this Expediente has previously
     * been saved, it will retrieve related Expedienteservicios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Expediente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Expedienteservicio[] List of Expedienteservicio objects
     */
    public function getExpedienteserviciosJoinServicio($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExpedienteservicioQuery::create(null, $criteria);
        $query->joinWith('Servicio', $join_behavior);

        return $this->getExpedienteservicios($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idexpediente = null;
        $this->idcliente = null;
        $this->idconsignatarioembarcador = null;
        $this->expediente_listaempaque = null;
        $this->expediente_factura = null;
        $this->expediente_fechainicio = null;
        $this->expediente_fechafin = null;
        $this->expediente_tipo = null;
        $this->expediente_estatus = null;
        $this->expediente_folio = null;
        $this->expediente_preciomxn = null;
        $this->expediente_preciousd = null;
        $this->expediente_estatuspago = null;
        $this->expediente_facturacionmxn = null;
        $this->expediente_facturacionusd = null;
        $this->expediente_pendientepagomxn = null;
        $this->expediente_pendientepagousd = null;
        $this->expediente_facturapdfmxn = null;
        $this->expediente_facturaxmlmxn = null;
        $this->expediente_facturapdfusd = null;
        $this->expediente_facturaxmlusd = null;
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
            if ($this->collExpedienteanticipos) {
                foreach ($this->collExpedienteanticipos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExpedientearchivos) {
                foreach ($this->collExpedientearchivos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExpedientegastos) {
                foreach ($this->collExpedientegastos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExpedienteservicios) {
                foreach ($this->collExpedienteservicios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCliente instanceof Persistent) {
              $this->aCliente->clearAllReferences($deep);
            }
            if ($this->aProveedorcliente instanceof Persistent) {
              $this->aProveedorcliente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExpedienteanticipos instanceof PropelCollection) {
            $this->collExpedienteanticipos->clearIterator();
        }
        $this->collExpedienteanticipos = null;
        if ($this->collExpedientearchivos instanceof PropelCollection) {
            $this->collExpedientearchivos->clearIterator();
        }
        $this->collExpedientearchivos = null;
        if ($this->collExpedientegastos instanceof PropelCollection) {
            $this->collExpedientegastos->clearIterator();
        }
        $this->collExpedientegastos = null;
        if ($this->collExpedienteservicios instanceof PropelCollection) {
            $this->collExpedienteservicios->clearIterator();
        }
        $this->collExpedienteservicios = null;
        $this->aCliente = null;
        $this->aProveedorcliente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ExpedientePeer::DEFAULT_STRING_FORMAT);
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
