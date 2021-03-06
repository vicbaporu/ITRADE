<?php


/**
 * Base class that represents a query for the 'expediente' table.
 *
 *
 *
 * @method ExpedienteQuery orderByIdexpediente($order = Criteria::ASC) Order by the idexpediente column
 * @method ExpedienteQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method ExpedienteQuery orderByIdconsignatarioembarcador($order = Criteria::ASC) Order by the idconsignatarioembarcador column
 * @method ExpedienteQuery orderByExpedienteListaempaque($order = Criteria::ASC) Order by the expediente_listaempaque column
 * @method ExpedienteQuery orderByExpedienteFactura($order = Criteria::ASC) Order by the expediente_factura column
 * @method ExpedienteQuery orderByExpedienteFechainicio($order = Criteria::ASC) Order by the expediente_fechainicio column
 * @method ExpedienteQuery orderByExpedienteFechafin($order = Criteria::ASC) Order by the expediente_fechafin column
 * @method ExpedienteQuery orderByExpedienteTipo($order = Criteria::ASC) Order by the expediente_tipo column
 * @method ExpedienteQuery orderByExpedienteEstatus($order = Criteria::ASC) Order by the expediente_estatus column
 * @method ExpedienteQuery orderByExpedienteFolio($order = Criteria::ASC) Order by the expediente_folio column
 * @method ExpedienteQuery orderByExpedientePreciomxn($order = Criteria::ASC) Order by the expediente_preciomxn column
 * @method ExpedienteQuery orderByExpedientePreciousd($order = Criteria::ASC) Order by the expediente_preciousd column
 * @method ExpedienteQuery orderByExpedienteEstatuspago($order = Criteria::ASC) Order by the expediente_estatuspago column
 * @method ExpedienteQuery orderByExpedienteFacturacionmxn($order = Criteria::ASC) Order by the expediente_facturacionmxn column
 * @method ExpedienteQuery orderByExpedienteFacturacionusd($order = Criteria::ASC) Order by the expediente_facturacionusd column
 * @method ExpedienteQuery orderByExpedientePendientepagomxn($order = Criteria::ASC) Order by the expediente_pendientepagomxn column
 * @method ExpedienteQuery orderByExpedientePendientepagousd($order = Criteria::ASC) Order by the expediente_pendientepagousd column
 * @method ExpedienteQuery orderByExpedienteFacturapdfmxn($order = Criteria::ASC) Order by the expediente_facturapdfmxn column
 * @method ExpedienteQuery orderByExpedienteFacturaxmlmxn($order = Criteria::ASC) Order by the expediente_facturaxmlmxn column
 * @method ExpedienteQuery orderByExpedienteFacturapdfusd($order = Criteria::ASC) Order by the expediente_facturapdfusd column
 * @method ExpedienteQuery orderByExpedienteFacturaxmlusd($order = Criteria::ASC) Order by the expediente_facturaxmlusd column
 *
 * @method ExpedienteQuery groupByIdexpediente() Group by the idexpediente column
 * @method ExpedienteQuery groupByIdcliente() Group by the idcliente column
 * @method ExpedienteQuery groupByIdconsignatarioembarcador() Group by the idconsignatarioembarcador column
 * @method ExpedienteQuery groupByExpedienteListaempaque() Group by the expediente_listaempaque column
 * @method ExpedienteQuery groupByExpedienteFactura() Group by the expediente_factura column
 * @method ExpedienteQuery groupByExpedienteFechainicio() Group by the expediente_fechainicio column
 * @method ExpedienteQuery groupByExpedienteFechafin() Group by the expediente_fechafin column
 * @method ExpedienteQuery groupByExpedienteTipo() Group by the expediente_tipo column
 * @method ExpedienteQuery groupByExpedienteEstatus() Group by the expediente_estatus column
 * @method ExpedienteQuery groupByExpedienteFolio() Group by the expediente_folio column
 * @method ExpedienteQuery groupByExpedientePreciomxn() Group by the expediente_preciomxn column
 * @method ExpedienteQuery groupByExpedientePreciousd() Group by the expediente_preciousd column
 * @method ExpedienteQuery groupByExpedienteEstatuspago() Group by the expediente_estatuspago column
 * @method ExpedienteQuery groupByExpedienteFacturacionmxn() Group by the expediente_facturacionmxn column
 * @method ExpedienteQuery groupByExpedienteFacturacionusd() Group by the expediente_facturacionusd column
 * @method ExpedienteQuery groupByExpedientePendientepagomxn() Group by the expediente_pendientepagomxn column
 * @method ExpedienteQuery groupByExpedientePendientepagousd() Group by the expediente_pendientepagousd column
 * @method ExpedienteQuery groupByExpedienteFacturapdfmxn() Group by the expediente_facturapdfmxn column
 * @method ExpedienteQuery groupByExpedienteFacturaxmlmxn() Group by the expediente_facturaxmlmxn column
 * @method ExpedienteQuery groupByExpedienteFacturapdfusd() Group by the expediente_facturapdfusd column
 * @method ExpedienteQuery groupByExpedienteFacturaxmlusd() Group by the expediente_facturaxmlusd column
 *
 * @method ExpedienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExpedienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExpedienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExpedienteQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method ExpedienteQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method ExpedienteQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method ExpedienteQuery leftJoinProveedorcliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedorcliente relation
 * @method ExpedienteQuery rightJoinProveedorcliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedorcliente relation
 * @method ExpedienteQuery innerJoinProveedorcliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedorcliente relation
 *
 * @method ExpedienteQuery leftJoinExpedienteanticipo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedienteanticipo relation
 * @method ExpedienteQuery rightJoinExpedienteanticipo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedienteanticipo relation
 * @method ExpedienteQuery innerJoinExpedienteanticipo($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedienteanticipo relation
 *
 * @method ExpedienteQuery leftJoinExpedientearchivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedientearchivo relation
 * @method ExpedienteQuery rightJoinExpedientearchivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedientearchivo relation
 * @method ExpedienteQuery innerJoinExpedientearchivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedientearchivo relation
 *
 * @method ExpedienteQuery leftJoinExpedientegasto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedientegasto relation
 * @method ExpedienteQuery rightJoinExpedientegasto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedientegasto relation
 * @method ExpedienteQuery innerJoinExpedientegasto($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedientegasto relation
 *
 * @method ExpedienteQuery leftJoinExpedienteservicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedienteservicio relation
 * @method ExpedienteQuery rightJoinExpedienteservicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedienteservicio relation
 * @method ExpedienteQuery innerJoinExpedienteservicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedienteservicio relation
 *
 * @method Expediente findOne(PropelPDO $con = null) Return the first Expediente matching the query
 * @method Expediente findOneOrCreate(PropelPDO $con = null) Return the first Expediente matching the query, or a new Expediente object populated from the query conditions when no match is found
 *
 * @method Expediente findOneByIdcliente(int $idcliente) Return the first Expediente filtered by the idcliente column
 * @method Expediente findOneByIdconsignatarioembarcador(int $idconsignatarioembarcador) Return the first Expediente filtered by the idconsignatarioembarcador column
 * @method Expediente findOneByExpedienteListaempaque(string $expediente_listaempaque) Return the first Expediente filtered by the expediente_listaempaque column
 * @method Expediente findOneByExpedienteFactura(string $expediente_factura) Return the first Expediente filtered by the expediente_factura column
 * @method Expediente findOneByExpedienteFechainicio(string $expediente_fechainicio) Return the first Expediente filtered by the expediente_fechainicio column
 * @method Expediente findOneByExpedienteFechafin(string $expediente_fechafin) Return the first Expediente filtered by the expediente_fechafin column
 * @method Expediente findOneByExpedienteTipo(string $expediente_tipo) Return the first Expediente filtered by the expediente_tipo column
 * @method Expediente findOneByExpedienteEstatus(string $expediente_estatus) Return the first Expediente filtered by the expediente_estatus column
 * @method Expediente findOneByExpedienteFolio(string $expediente_folio) Return the first Expediente filtered by the expediente_folio column
 * @method Expediente findOneByExpedientePreciomxn(string $expediente_preciomxn) Return the first Expediente filtered by the expediente_preciomxn column
 * @method Expediente findOneByExpedientePreciousd(string $expediente_preciousd) Return the first Expediente filtered by the expediente_preciousd column
 * @method Expediente findOneByExpedienteEstatuspago(boolean $expediente_estatuspago) Return the first Expediente filtered by the expediente_estatuspago column
 * @method Expediente findOneByExpedienteFacturacionmxn(string $expediente_facturacionmxn) Return the first Expediente filtered by the expediente_facturacionmxn column
 * @method Expediente findOneByExpedienteFacturacionusd(string $expediente_facturacionusd) Return the first Expediente filtered by the expediente_facturacionusd column
 * @method Expediente findOneByExpedientePendientepagomxn(string $expediente_pendientepagomxn) Return the first Expediente filtered by the expediente_pendientepagomxn column
 * @method Expediente findOneByExpedientePendientepagousd(string $expediente_pendientepagousd) Return the first Expediente filtered by the expediente_pendientepagousd column
 * @method Expediente findOneByExpedienteFacturapdfmxn(string $expediente_facturapdfmxn) Return the first Expediente filtered by the expediente_facturapdfmxn column
 * @method Expediente findOneByExpedienteFacturaxmlmxn(string $expediente_facturaxmlmxn) Return the first Expediente filtered by the expediente_facturaxmlmxn column
 * @method Expediente findOneByExpedienteFacturapdfusd(string $expediente_facturapdfusd) Return the first Expediente filtered by the expediente_facturapdfusd column
 * @method Expediente findOneByExpedienteFacturaxmlusd(string $expediente_facturaxmlusd) Return the first Expediente filtered by the expediente_facturaxmlusd column
 *
 * @method array findByIdexpediente(int $idexpediente) Return Expediente objects filtered by the idexpediente column
 * @method array findByIdcliente(int $idcliente) Return Expediente objects filtered by the idcliente column
 * @method array findByIdconsignatarioembarcador(int $idconsignatarioembarcador) Return Expediente objects filtered by the idconsignatarioembarcador column
 * @method array findByExpedienteListaempaque(string $expediente_listaempaque) Return Expediente objects filtered by the expediente_listaempaque column
 * @method array findByExpedienteFactura(string $expediente_factura) Return Expediente objects filtered by the expediente_factura column
 * @method array findByExpedienteFechainicio(string $expediente_fechainicio) Return Expediente objects filtered by the expediente_fechainicio column
 * @method array findByExpedienteFechafin(string $expediente_fechafin) Return Expediente objects filtered by the expediente_fechafin column
 * @method array findByExpedienteTipo(string $expediente_tipo) Return Expediente objects filtered by the expediente_tipo column
 * @method array findByExpedienteEstatus(string $expediente_estatus) Return Expediente objects filtered by the expediente_estatus column
 * @method array findByExpedienteFolio(string $expediente_folio) Return Expediente objects filtered by the expediente_folio column
 * @method array findByExpedientePreciomxn(string $expediente_preciomxn) Return Expediente objects filtered by the expediente_preciomxn column
 * @method array findByExpedientePreciousd(string $expediente_preciousd) Return Expediente objects filtered by the expediente_preciousd column
 * @method array findByExpedienteEstatuspago(boolean $expediente_estatuspago) Return Expediente objects filtered by the expediente_estatuspago column
 * @method array findByExpedienteFacturacionmxn(string $expediente_facturacionmxn) Return Expediente objects filtered by the expediente_facturacionmxn column
 * @method array findByExpedienteFacturacionusd(string $expediente_facturacionusd) Return Expediente objects filtered by the expediente_facturacionusd column
 * @method array findByExpedientePendientepagomxn(string $expediente_pendientepagomxn) Return Expediente objects filtered by the expediente_pendientepagomxn column
 * @method array findByExpedientePendientepagousd(string $expediente_pendientepagousd) Return Expediente objects filtered by the expediente_pendientepagousd column
 * @method array findByExpedienteFacturapdfmxn(string $expediente_facturapdfmxn) Return Expediente objects filtered by the expediente_facturapdfmxn column
 * @method array findByExpedienteFacturaxmlmxn(string $expediente_facturaxmlmxn) Return Expediente objects filtered by the expediente_facturaxmlmxn column
 * @method array findByExpedienteFacturapdfusd(string $expediente_facturapdfusd) Return Expediente objects filtered by the expediente_facturapdfusd column
 * @method array findByExpedienteFacturaxmlusd(string $expediente_facturaxmlusd) Return Expediente objects filtered by the expediente_facturaxmlusd column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseExpedienteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExpedienteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'itrade';
        }
        if (null === $modelName) {
            $modelName = 'Expediente';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExpedienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExpedienteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExpedienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExpedienteQuery) {
            return $criteria;
        }
        $query = new ExpedienteQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Expediente|Expediente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExpedientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExpedientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Expediente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdexpediente($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Expediente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idexpediente`, `idcliente`, `idconsignatarioembarcador`, `expediente_listaempaque`, `expediente_factura`, `expediente_fechainicio`, `expediente_fechafin`, `expediente_tipo`, `expediente_estatus`, `expediente_folio`, `expediente_preciomxn`, `expediente_preciousd`, `expediente_estatuspago`, `expediente_facturacionmxn`, `expediente_facturacionusd`, `expediente_pendientepagomxn`, `expediente_pendientepagousd`, `expediente_facturapdfmxn`, `expediente_facturaxmlmxn`, `expediente_facturapdfusd`, `expediente_facturaxmlusd` FROM `expediente` WHERE `idexpediente` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Expediente();
            $obj->hydrate($row);
            ExpedientePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Expediente|Expediente[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Expediente[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idexpediente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdexpediente(1234); // WHERE idexpediente = 1234
     * $query->filterByIdexpediente(array(12, 34)); // WHERE idexpediente IN (12, 34)
     * $query->filterByIdexpediente(array('min' => 12)); // WHERE idexpediente >= 12
     * $query->filterByIdexpediente(array('max' => 12)); // WHERE idexpediente <= 12
     * </code>
     *
     * @param     mixed $idexpediente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByIdexpediente($idexpediente = null, $comparison = null)
    {
        if (is_array($idexpediente)) {
            $useMinMax = false;
            if (isset($idexpediente['min'])) {
                $this->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $idexpediente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpediente['max'])) {
                $this->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $idexpediente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $idexpediente, $comparison);
    }

    /**
     * Filter the query on the idcliente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcliente(1234); // WHERE idcliente = 1234
     * $query->filterByIdcliente(array(12, 34)); // WHERE idcliente IN (12, 34)
     * $query->filterByIdcliente(array('min' => 12)); // WHERE idcliente >= 12
     * $query->filterByIdcliente(array('max' => 12)); // WHERE idcliente <= 12
     * </code>
     *
     * @see       filterByCliente()
     *
     * @param     mixed $idcliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByIdcliente($idcliente = null, $comparison = null)
    {
        if (is_array($idcliente)) {
            $useMinMax = false;
            if (isset($idcliente['min'])) {
                $this->addUsingAlias(ExpedientePeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcliente['max'])) {
                $this->addUsingAlias(ExpedientePeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::IDCLIENTE, $idcliente, $comparison);
    }

    /**
     * Filter the query on the idconsignatarioembarcador column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconsignatarioembarcador(1234); // WHERE idconsignatarioembarcador = 1234
     * $query->filterByIdconsignatarioembarcador(array(12, 34)); // WHERE idconsignatarioembarcador IN (12, 34)
     * $query->filterByIdconsignatarioembarcador(array('min' => 12)); // WHERE idconsignatarioembarcador >= 12
     * $query->filterByIdconsignatarioembarcador(array('max' => 12)); // WHERE idconsignatarioembarcador <= 12
     * </code>
     *
     * @see       filterByProveedorcliente()
     *
     * @param     mixed $idconsignatarioembarcador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByIdconsignatarioembarcador($idconsignatarioembarcador = null, $comparison = null)
    {
        if (is_array($idconsignatarioembarcador)) {
            $useMinMax = false;
            if (isset($idconsignatarioembarcador['min'])) {
                $this->addUsingAlias(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR, $idconsignatarioembarcador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconsignatarioembarcador['max'])) {
                $this->addUsingAlias(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR, $idconsignatarioembarcador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR, $idconsignatarioembarcador, $comparison);
    }

    /**
     * Filter the query on the expediente_listaempaque column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteListaempaque('fooValue');   // WHERE expediente_listaempaque = 'fooValue'
     * $query->filterByExpedienteListaempaque('%fooValue%'); // WHERE expediente_listaempaque LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteListaempaque The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteListaempaque($expedienteListaempaque = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteListaempaque)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteListaempaque)) {
                $expedienteListaempaque = str_replace('*', '%', $expedienteListaempaque);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_LISTAEMPAQUE, $expedienteListaempaque, $comparison);
    }

    /**
     * Filter the query on the expediente_factura column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFactura('fooValue');   // WHERE expediente_factura = 'fooValue'
     * $query->filterByExpedienteFactura('%fooValue%'); // WHERE expediente_factura LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteFactura The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFactura($expedienteFactura = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteFactura)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteFactura)) {
                $expedienteFactura = str_replace('*', '%', $expedienteFactura);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FACTURA, $expedienteFactura, $comparison);
    }

    /**
     * Filter the query on the expediente_fechainicio column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFechainicio('2011-03-14'); // WHERE expediente_fechainicio = '2011-03-14'
     * $query->filterByExpedienteFechainicio('now'); // WHERE expediente_fechainicio = '2011-03-14'
     * $query->filterByExpedienteFechainicio(array('max' => 'yesterday')); // WHERE expediente_fechainicio < '2011-03-13'
     * </code>
     *
     * @param     mixed $expedienteFechainicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFechainicio($expedienteFechainicio = null, $comparison = null)
    {
        if (is_array($expedienteFechainicio)) {
            $useMinMax = false;
            if (isset($expedienteFechainicio['min'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FECHAINICIO, $expedienteFechainicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedienteFechainicio['max'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FECHAINICIO, $expedienteFechainicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FECHAINICIO, $expedienteFechainicio, $comparison);
    }

    /**
     * Filter the query on the expediente_fechafin column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFechafin('2011-03-14'); // WHERE expediente_fechafin = '2011-03-14'
     * $query->filterByExpedienteFechafin('now'); // WHERE expediente_fechafin = '2011-03-14'
     * $query->filterByExpedienteFechafin(array('max' => 'yesterday')); // WHERE expediente_fechafin < '2011-03-13'
     * </code>
     *
     * @param     mixed $expedienteFechafin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFechafin($expedienteFechafin = null, $comparison = null)
    {
        if (is_array($expedienteFechafin)) {
            $useMinMax = false;
            if (isset($expedienteFechafin['min'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FECHAFIN, $expedienteFechafin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedienteFechafin['max'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FECHAFIN, $expedienteFechafin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FECHAFIN, $expedienteFechafin, $comparison);
    }

    /**
     * Filter the query on the expediente_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteTipo('fooValue');   // WHERE expediente_tipo = 'fooValue'
     * $query->filterByExpedienteTipo('%fooValue%'); // WHERE expediente_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteTipo($expedienteTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteTipo)) {
                $expedienteTipo = str_replace('*', '%', $expedienteTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_TIPO, $expedienteTipo, $comparison);
    }

    /**
     * Filter the query on the expediente_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteEstatus('fooValue');   // WHERE expediente_estatus = 'fooValue'
     * $query->filterByExpedienteEstatus('%fooValue%'); // WHERE expediente_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteEstatus($expedienteEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteEstatus)) {
                $expedienteEstatus = str_replace('*', '%', $expedienteEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_ESTATUS, $expedienteEstatus, $comparison);
    }

    /**
     * Filter the query on the expediente_folio column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFolio('fooValue');   // WHERE expediente_folio = 'fooValue'
     * $query->filterByExpedienteFolio('%fooValue%'); // WHERE expediente_folio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteFolio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFolio($expedienteFolio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteFolio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteFolio)) {
                $expedienteFolio = str_replace('*', '%', $expedienteFolio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FOLIO, $expedienteFolio, $comparison);
    }

    /**
     * Filter the query on the expediente_preciomxn column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientePreciomxn(1234); // WHERE expediente_preciomxn = 1234
     * $query->filterByExpedientePreciomxn(array(12, 34)); // WHERE expediente_preciomxn IN (12, 34)
     * $query->filterByExpedientePreciomxn(array('min' => 12)); // WHERE expediente_preciomxn >= 12
     * $query->filterByExpedientePreciomxn(array('max' => 12)); // WHERE expediente_preciomxn <= 12
     * </code>
     *
     * @param     mixed $expedientePreciomxn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedientePreciomxn($expedientePreciomxn = null, $comparison = null)
    {
        if (is_array($expedientePreciomxn)) {
            $useMinMax = false;
            if (isset($expedientePreciomxn['min'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIOMXN, $expedientePreciomxn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientePreciomxn['max'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIOMXN, $expedientePreciomxn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIOMXN, $expedientePreciomxn, $comparison);
    }

    /**
     * Filter the query on the expediente_preciousd column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientePreciousd(1234); // WHERE expediente_preciousd = 1234
     * $query->filterByExpedientePreciousd(array(12, 34)); // WHERE expediente_preciousd IN (12, 34)
     * $query->filterByExpedientePreciousd(array('min' => 12)); // WHERE expediente_preciousd >= 12
     * $query->filterByExpedientePreciousd(array('max' => 12)); // WHERE expediente_preciousd <= 12
     * </code>
     *
     * @param     mixed $expedientePreciousd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedientePreciousd($expedientePreciousd = null, $comparison = null)
    {
        if (is_array($expedientePreciousd)) {
            $useMinMax = false;
            if (isset($expedientePreciousd['min'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIOUSD, $expedientePreciousd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientePreciousd['max'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIOUSD, $expedientePreciousd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIOUSD, $expedientePreciousd, $comparison);
    }

    /**
     * Filter the query on the expediente_estatuspago column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteEstatuspago(true); // WHERE expediente_estatuspago = true
     * $query->filterByExpedienteEstatuspago('yes'); // WHERE expediente_estatuspago = true
     * </code>
     *
     * @param     boolean|string $expedienteEstatuspago The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteEstatuspago($expedienteEstatuspago = null, $comparison = null)
    {
        if (is_string($expedienteEstatuspago)) {
            $expedienteEstatuspago = in_array(strtolower($expedienteEstatuspago), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_ESTATUSPAGO, $expedienteEstatuspago, $comparison);
    }

    /**
     * Filter the query on the expediente_facturacionmxn column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFacturacionmxn('fooValue');   // WHERE expediente_facturacionmxn = 'fooValue'
     * $query->filterByExpedienteFacturacionmxn('%fooValue%'); // WHERE expediente_facturacionmxn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteFacturacionmxn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFacturacionmxn($expedienteFacturacionmxn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteFacturacionmxn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteFacturacionmxn)) {
                $expedienteFacturacionmxn = str_replace('*', '%', $expedienteFacturacionmxn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FACTURACIONMXN, $expedienteFacturacionmxn, $comparison);
    }

    /**
     * Filter the query on the expediente_facturacionusd column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFacturacionusd('fooValue');   // WHERE expediente_facturacionusd = 'fooValue'
     * $query->filterByExpedienteFacturacionusd('%fooValue%'); // WHERE expediente_facturacionusd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteFacturacionusd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFacturacionusd($expedienteFacturacionusd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteFacturacionusd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteFacturacionusd)) {
                $expedienteFacturacionusd = str_replace('*', '%', $expedienteFacturacionusd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FACTURACIONUSD, $expedienteFacturacionusd, $comparison);
    }

    /**
     * Filter the query on the expediente_pendientepagomxn column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientePendientepagomxn(1234); // WHERE expediente_pendientepagomxn = 1234
     * $query->filterByExpedientePendientepagomxn(array(12, 34)); // WHERE expediente_pendientepagomxn IN (12, 34)
     * $query->filterByExpedientePendientepagomxn(array('min' => 12)); // WHERE expediente_pendientepagomxn >= 12
     * $query->filterByExpedientePendientepagomxn(array('max' => 12)); // WHERE expediente_pendientepagomxn <= 12
     * </code>
     *
     * @param     mixed $expedientePendientepagomxn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedientePendientepagomxn($expedientePendientepagomxn = null, $comparison = null)
    {
        if (is_array($expedientePendientepagomxn)) {
            $useMinMax = false;
            if (isset($expedientePendientepagomxn['min'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOMXN, $expedientePendientepagomxn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientePendientepagomxn['max'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOMXN, $expedientePendientepagomxn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOMXN, $expedientePendientepagomxn, $comparison);
    }

    /**
     * Filter the query on the expediente_pendientepagousd column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientePendientepagousd(1234); // WHERE expediente_pendientepagousd = 1234
     * $query->filterByExpedientePendientepagousd(array(12, 34)); // WHERE expediente_pendientepagousd IN (12, 34)
     * $query->filterByExpedientePendientepagousd(array('min' => 12)); // WHERE expediente_pendientepagousd >= 12
     * $query->filterByExpedientePendientepagousd(array('max' => 12)); // WHERE expediente_pendientepagousd <= 12
     * </code>
     *
     * @param     mixed $expedientePendientepagousd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedientePendientepagousd($expedientePendientepagousd = null, $comparison = null)
    {
        if (is_array($expedientePendientepagousd)) {
            $useMinMax = false;
            if (isset($expedientePendientepagousd['min'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOUSD, $expedientePendientepagousd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientePendientepagousd['max'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOUSD, $expedientePendientepagousd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PENDIENTEPAGOUSD, $expedientePendientepagousd, $comparison);
    }

    /**
     * Filter the query on the expediente_facturapdfmxn column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFacturapdfmxn('fooValue');   // WHERE expediente_facturapdfmxn = 'fooValue'
     * $query->filterByExpedienteFacturapdfmxn('%fooValue%'); // WHERE expediente_facturapdfmxn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteFacturapdfmxn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFacturapdfmxn($expedienteFacturapdfmxn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteFacturapdfmxn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteFacturapdfmxn)) {
                $expedienteFacturapdfmxn = str_replace('*', '%', $expedienteFacturapdfmxn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FACTURAPDFMXN, $expedienteFacturapdfmxn, $comparison);
    }

    /**
     * Filter the query on the expediente_facturaxmlmxn column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFacturaxmlmxn('fooValue');   // WHERE expediente_facturaxmlmxn = 'fooValue'
     * $query->filterByExpedienteFacturaxmlmxn('%fooValue%'); // WHERE expediente_facturaxmlmxn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteFacturaxmlmxn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFacturaxmlmxn($expedienteFacturaxmlmxn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteFacturaxmlmxn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteFacturaxmlmxn)) {
                $expedienteFacturaxmlmxn = str_replace('*', '%', $expedienteFacturaxmlmxn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FACTURAXMLMXN, $expedienteFacturaxmlmxn, $comparison);
    }

    /**
     * Filter the query on the expediente_facturapdfusd column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFacturapdfusd('fooValue');   // WHERE expediente_facturapdfusd = 'fooValue'
     * $query->filterByExpedienteFacturapdfusd('%fooValue%'); // WHERE expediente_facturapdfusd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteFacturapdfusd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFacturapdfusd($expedienteFacturapdfusd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteFacturapdfusd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteFacturapdfusd)) {
                $expedienteFacturapdfusd = str_replace('*', '%', $expedienteFacturapdfusd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FACTURAPDFUSD, $expedienteFacturapdfusd, $comparison);
    }

    /**
     * Filter the query on the expediente_facturaxmlusd column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteFacturaxmlusd('fooValue');   // WHERE expediente_facturaxmlusd = 'fooValue'
     * $query->filterByExpedienteFacturaxmlusd('%fooValue%'); // WHERE expediente_facturaxmlusd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteFacturaxmlusd The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedienteFacturaxmlusd($expedienteFacturaxmlusd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteFacturaxmlusd)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteFacturaxmlusd)) {
                $expedienteFacturaxmlusd = str_replace('*', '%', $expedienteFacturaxmlusd);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_FACTURAXMLUSD, $expedienteFacturaxmlusd, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(ExpedientePeer::IDCLIENTE, $cliente->getIdcliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientePeer::IDCLIENTE, $cliente->toKeyValue('PrimaryKey', 'Idcliente'), $comparison);
        } else {
            throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function joinCliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cliente');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Cliente');
        }

        return $this;
    }

    /**
     * Use the Cliente relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
    }

    /**
     * Filter the query by a related Proveedorcliente object
     *
     * @param   Proveedorcliente|PropelObjectCollection $proveedorcliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedorcliente($proveedorcliente, $comparison = null)
    {
        if ($proveedorcliente instanceof Proveedorcliente) {
            return $this
                ->addUsingAlias(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR, $proveedorcliente->getIdproveedorcliente(), $comparison);
        } elseif ($proveedorcliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientePeer::IDCONSIGNATARIOEMBARCADOR, $proveedorcliente->toKeyValue('PrimaryKey', 'Idproveedorcliente'), $comparison);
        } else {
            throw new PropelException('filterByProveedorcliente() only accepts arguments of type Proveedorcliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedorcliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function joinProveedorcliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedorcliente');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Proveedorcliente');
        }

        return $this;
    }

    /**
     * Use the Proveedorcliente relation Proveedorcliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorclienteQuery A secondary query class using the current class as primary query
     */
    public function useProveedorclienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedorcliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedorcliente', 'ProveedorclienteQuery');
    }

    /**
     * Filter the query by a related Expedienteanticipo object
     *
     * @param   Expedienteanticipo|PropelObjectCollection $expedienteanticipo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedienteanticipo($expedienteanticipo, $comparison = null)
    {
        if ($expedienteanticipo instanceof Expedienteanticipo) {
            return $this
                ->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $expedienteanticipo->getIdexpediente(), $comparison);
        } elseif ($expedienteanticipo instanceof PropelObjectCollection) {
            return $this
                ->useExpedienteanticipoQuery()
                ->filterByPrimaryKeys($expedienteanticipo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExpedienteanticipo() only accepts arguments of type Expedienteanticipo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expedienteanticipo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function joinExpedienteanticipo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expedienteanticipo');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Expedienteanticipo');
        }

        return $this;
    }

    /**
     * Use the Expedienteanticipo relation Expedienteanticipo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedienteanticipoQuery A secondary query class using the current class as primary query
     */
    public function useExpedienteanticipoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExpedienteanticipo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expedienteanticipo', 'ExpedienteanticipoQuery');
    }

    /**
     * Filter the query by a related Expedientearchivo object
     *
     * @param   Expedientearchivo|PropelObjectCollection $expedientearchivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedientearchivo($expedientearchivo, $comparison = null)
    {
        if ($expedientearchivo instanceof Expedientearchivo) {
            return $this
                ->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $expedientearchivo->getIdexpediente(), $comparison);
        } elseif ($expedientearchivo instanceof PropelObjectCollection) {
            return $this
                ->useExpedientearchivoQuery()
                ->filterByPrimaryKeys($expedientearchivo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExpedientearchivo() only accepts arguments of type Expedientearchivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expedientearchivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function joinExpedientearchivo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expedientearchivo');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Expedientearchivo');
        }

        return $this;
    }

    /**
     * Use the Expedientearchivo relation Expedientearchivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedientearchivoQuery A secondary query class using the current class as primary query
     */
    public function useExpedientearchivoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExpedientearchivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expedientearchivo', 'ExpedientearchivoQuery');
    }

    /**
     * Filter the query by a related Expedientegasto object
     *
     * @param   Expedientegasto|PropelObjectCollection $expedientegasto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedientegasto($expedientegasto, $comparison = null)
    {
        if ($expedientegasto instanceof Expedientegasto) {
            return $this
                ->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $expedientegasto->getIdexpediente(), $comparison);
        } elseif ($expedientegasto instanceof PropelObjectCollection) {
            return $this
                ->useExpedientegastoQuery()
                ->filterByPrimaryKeys($expedientegasto->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExpedientegasto() only accepts arguments of type Expedientegasto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expedientegasto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function joinExpedientegasto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expedientegasto');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Expedientegasto');
        }

        return $this;
    }

    /**
     * Use the Expedientegasto relation Expedientegasto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedientegastoQuery A secondary query class using the current class as primary query
     */
    public function useExpedientegastoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExpedientegasto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expedientegasto', 'ExpedientegastoQuery');
    }

    /**
     * Filter the query by a related Expedienteservicio object
     *
     * @param   Expedienteservicio|PropelObjectCollection $expedienteservicio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedienteservicio($expedienteservicio, $comparison = null)
    {
        if ($expedienteservicio instanceof Expedienteservicio) {
            return $this
                ->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $expedienteservicio->getIdexpediente(), $comparison);
        } elseif ($expedienteservicio instanceof PropelObjectCollection) {
            return $this
                ->useExpedienteservicioQuery()
                ->filterByPrimaryKeys($expedienteservicio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExpedienteservicio() only accepts arguments of type Expedienteservicio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expedienteservicio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function joinExpedienteservicio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expedienteservicio');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Expedienteservicio');
        }

        return $this;
    }

    /**
     * Use the Expedienteservicio relation Expedienteservicio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedienteservicioQuery A secondary query class using the current class as primary query
     */
    public function useExpedienteservicioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExpedienteservicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expedienteservicio', 'ExpedienteservicioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Expediente $expediente Object to remove from the list of results
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function prune($expediente = null)
    {
        if ($expediente) {
            $this->addUsingAlias(ExpedientePeer::IDEXPEDIENTE, $expediente->getIdexpediente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
