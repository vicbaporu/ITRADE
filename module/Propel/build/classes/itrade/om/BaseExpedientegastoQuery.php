<?php


/**
 * Base class that represents a query for the 'expedientegasto' table.
 *
 *
 *
 * @method ExpedientegastoQuery orderByIdexpedientegasto($order = Criteria::ASC) Order by the idexpedientegasto column
 * @method ExpedientegastoQuery orderByIdexpediente($order = Criteria::ASC) Order by the idexpediente column
 * @method ExpedientegastoQuery orderByIdgastofacturacion($order = Criteria::ASC) Order by the idgastofacturacion column
 * @method ExpedientegastoQuery orderByIdproveedoritrade($order = Criteria::ASC) Order by the idproveedoritrade column
 * @method ExpedientegastoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method ExpedientegastoQuery orderByExpedientegastoFecha($order = Criteria::ASC) Order by the expedientegasto_fecha column
 * @method ExpedientegastoQuery orderByExpedientegastoMonto($order = Criteria::ASC) Order by the expedientegasto_monto column
 * @method ExpedientegastoQuery orderByExpedientegastoTipo($order = Criteria::ASC) Order by the expedientegasto_tipo column
 * @method ExpedientegastoQuery orderByExpedientegastoComprobante($order = Criteria::ASC) Order by the expedientegasto_comprobante column
 * @method ExpedientegastoQuery orderByExpedientegastoNota($order = Criteria::ASC) Order by the expedientegasto_nota column
 *
 * @method ExpedientegastoQuery groupByIdexpedientegasto() Group by the idexpedientegasto column
 * @method ExpedientegastoQuery groupByIdexpediente() Group by the idexpediente column
 * @method ExpedientegastoQuery groupByIdgastofacturacion() Group by the idgastofacturacion column
 * @method ExpedientegastoQuery groupByIdproveedoritrade() Group by the idproveedoritrade column
 * @method ExpedientegastoQuery groupByIdempleado() Group by the idempleado column
 * @method ExpedientegastoQuery groupByExpedientegastoFecha() Group by the expedientegasto_fecha column
 * @method ExpedientegastoQuery groupByExpedientegastoMonto() Group by the expedientegasto_monto column
 * @method ExpedientegastoQuery groupByExpedientegastoTipo() Group by the expedientegasto_tipo column
 * @method ExpedientegastoQuery groupByExpedientegastoComprobante() Group by the expedientegasto_comprobante column
 * @method ExpedientegastoQuery groupByExpedientegastoNota() Group by the expedientegasto_nota column
 *
 * @method ExpedientegastoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExpedientegastoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExpedientegastoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExpedientegastoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method ExpedientegastoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method ExpedientegastoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method ExpedientegastoQuery leftJoinExpediente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expediente relation
 * @method ExpedientegastoQuery rightJoinExpediente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expediente relation
 * @method ExpedientegastoQuery innerJoinExpediente($relationAlias = null) Adds a INNER JOIN clause to the query using the Expediente relation
 *
 * @method ExpedientegastoQuery leftJoinGastofacturacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Gastofacturacion relation
 * @method ExpedientegastoQuery rightJoinGastofacturacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Gastofacturacion relation
 * @method ExpedientegastoQuery innerJoinGastofacturacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Gastofacturacion relation
 *
 * @method ExpedientegastoQuery leftJoinProveedoritrade($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedoritrade relation
 * @method ExpedientegastoQuery rightJoinProveedoritrade($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedoritrade relation
 * @method ExpedientegastoQuery innerJoinProveedoritrade($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedoritrade relation
 *
 * @method Expedientegasto findOne(PropelPDO $con = null) Return the first Expedientegasto matching the query
 * @method Expedientegasto findOneOrCreate(PropelPDO $con = null) Return the first Expedientegasto matching the query, or a new Expedientegasto object populated from the query conditions when no match is found
 *
 * @method Expedientegasto findOneByIdexpediente(int $idexpediente) Return the first Expedientegasto filtered by the idexpediente column
 * @method Expedientegasto findOneByIdgastofacturacion(int $idgastofacturacion) Return the first Expedientegasto filtered by the idgastofacturacion column
 * @method Expedientegasto findOneByIdproveedoritrade(int $idproveedoritrade) Return the first Expedientegasto filtered by the idproveedoritrade column
 * @method Expedientegasto findOneByIdempleado(int $idempleado) Return the first Expedientegasto filtered by the idempleado column
 * @method Expedientegasto findOneByExpedientegastoFecha(string $expedientegasto_fecha) Return the first Expedientegasto filtered by the expedientegasto_fecha column
 * @method Expedientegasto findOneByExpedientegastoMonto(string $expedientegasto_monto) Return the first Expedientegasto filtered by the expedientegasto_monto column
 * @method Expedientegasto findOneByExpedientegastoTipo(string $expedientegasto_tipo) Return the first Expedientegasto filtered by the expedientegasto_tipo column
 * @method Expedientegasto findOneByExpedientegastoComprobante(string $expedientegasto_comprobante) Return the first Expedientegasto filtered by the expedientegasto_comprobante column
 * @method Expedientegasto findOneByExpedientegastoNota(string $expedientegasto_nota) Return the first Expedientegasto filtered by the expedientegasto_nota column
 *
 * @method array findByIdexpedientegasto(int $idexpedientegasto) Return Expedientegasto objects filtered by the idexpedientegasto column
 * @method array findByIdexpediente(int $idexpediente) Return Expedientegasto objects filtered by the idexpediente column
 * @method array findByIdgastofacturacion(int $idgastofacturacion) Return Expedientegasto objects filtered by the idgastofacturacion column
 * @method array findByIdproveedoritrade(int $idproveedoritrade) Return Expedientegasto objects filtered by the idproveedoritrade column
 * @method array findByIdempleado(int $idempleado) Return Expedientegasto objects filtered by the idempleado column
 * @method array findByExpedientegastoFecha(string $expedientegasto_fecha) Return Expedientegasto objects filtered by the expedientegasto_fecha column
 * @method array findByExpedientegastoMonto(string $expedientegasto_monto) Return Expedientegasto objects filtered by the expedientegasto_monto column
 * @method array findByExpedientegastoTipo(string $expedientegasto_tipo) Return Expedientegasto objects filtered by the expedientegasto_tipo column
 * @method array findByExpedientegastoComprobante(string $expedientegasto_comprobante) Return Expedientegasto objects filtered by the expedientegasto_comprobante column
 * @method array findByExpedientegastoNota(string $expedientegasto_nota) Return Expedientegasto objects filtered by the expedientegasto_nota column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseExpedientegastoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExpedientegastoQuery object.
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
            $modelName = 'Expedientegasto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExpedientegastoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExpedientegastoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExpedientegastoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExpedientegastoQuery) {
            return $criteria;
        }
        $query = new ExpedientegastoQuery(null, null, $modelAlias);

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
     * @return   Expedientegasto|Expedientegasto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExpedientegastoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExpedientegastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Expedientegasto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdexpedientegasto($key, $con = null)
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
     * @return                 Expedientegasto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idexpedientegasto`, `idexpediente`, `idgastofacturacion`, `idproveedoritrade`, `idempleado`, `expedientegasto_fecha`, `expedientegasto_monto`, `expedientegasto_tipo`, `expedientegasto_comprobante`, `expedientegasto_nota` FROM `expedientegasto` WHERE `idexpedientegasto` = :p0';
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
            $obj = new Expedientegasto();
            $obj->hydrate($row);
            ExpedientegastoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Expedientegasto|Expedientegasto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Expedientegasto[]|mixed the list of results, formatted by the current formatter
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
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idexpedientegasto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdexpedientegasto(1234); // WHERE idexpedientegasto = 1234
     * $query->filterByIdexpedientegasto(array(12, 34)); // WHERE idexpedientegasto IN (12, 34)
     * $query->filterByIdexpedientegasto(array('min' => 12)); // WHERE idexpedientegasto >= 12
     * $query->filterByIdexpedientegasto(array('max' => 12)); // WHERE idexpedientegasto <= 12
     * </code>
     *
     * @param     mixed $idexpedientegasto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByIdexpedientegasto($idexpedientegasto = null, $comparison = null)
    {
        if (is_array($idexpedientegasto)) {
            $useMinMax = false;
            if (isset($idexpedientegasto['min'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $idexpedientegasto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpedientegasto['max'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $idexpedientegasto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $idexpedientegasto, $comparison);
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
     * @see       filterByExpediente()
     *
     * @param     mixed $idexpediente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByIdexpediente($idexpediente = null, $comparison = null)
    {
        if (is_array($idexpediente)) {
            $useMinMax = false;
            if (isset($idexpediente['min'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTE, $idexpediente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpediente['max'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTE, $idexpediente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTE, $idexpediente, $comparison);
    }

    /**
     * Filter the query on the idgastofacturacion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdgastofacturacion(1234); // WHERE idgastofacturacion = 1234
     * $query->filterByIdgastofacturacion(array(12, 34)); // WHERE idgastofacturacion IN (12, 34)
     * $query->filterByIdgastofacturacion(array('min' => 12)); // WHERE idgastofacturacion >= 12
     * $query->filterByIdgastofacturacion(array('max' => 12)); // WHERE idgastofacturacion <= 12
     * </code>
     *
     * @see       filterByGastofacturacion()
     *
     * @param     mixed $idgastofacturacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByIdgastofacturacion($idgastofacturacion = null, $comparison = null)
    {
        if (is_array($idgastofacturacion)) {
            $useMinMax = false;
            if (isset($idgastofacturacion['min'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDGASTOFACTURACION, $idgastofacturacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idgastofacturacion['max'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDGASTOFACTURACION, $idgastofacturacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::IDGASTOFACTURACION, $idgastofacturacion, $comparison);
    }

    /**
     * Filter the query on the idproveedoritrade column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedoritrade(1234); // WHERE idproveedoritrade = 1234
     * $query->filterByIdproveedoritrade(array(12, 34)); // WHERE idproveedoritrade IN (12, 34)
     * $query->filterByIdproveedoritrade(array('min' => 12)); // WHERE idproveedoritrade >= 12
     * $query->filterByIdproveedoritrade(array('max' => 12)); // WHERE idproveedoritrade <= 12
     * </code>
     *
     * @see       filterByProveedoritrade()
     *
     * @param     mixed $idproveedoritrade The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByIdproveedoritrade($idproveedoritrade = null, $comparison = null)
    {
        if (is_array($idproveedoritrade)) {
            $useMinMax = false;
            if (isset($idproveedoritrade['min'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDPROVEEDORITRADE, $idproveedoritrade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedoritrade['max'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDPROVEEDORITRADE, $idproveedoritrade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::IDPROVEEDORITRADE, $idproveedoritrade, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(ExpedientegastoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the expedientegasto_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientegastoFecha('2011-03-14'); // WHERE expedientegasto_fecha = '2011-03-14'
     * $query->filterByExpedientegastoFecha('now'); // WHERE expedientegasto_fecha = '2011-03-14'
     * $query->filterByExpedientegastoFecha(array('max' => 'yesterday')); // WHERE expedientegasto_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $expedientegastoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByExpedientegastoFecha($expedientegastoFecha = null, $comparison = null)
    {
        if (is_array($expedientegastoFecha)) {
            $useMinMax = false;
            if (isset($expedientegastoFecha['min'])) {
                $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_FECHA, $expedientegastoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientegastoFecha['max'])) {
                $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_FECHA, $expedientegastoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_FECHA, $expedientegastoFecha, $comparison);
    }

    /**
     * Filter the query on the expedientegasto_monto column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientegastoMonto(1234); // WHERE expedientegasto_monto = 1234
     * $query->filterByExpedientegastoMonto(array(12, 34)); // WHERE expedientegasto_monto IN (12, 34)
     * $query->filterByExpedientegastoMonto(array('min' => 12)); // WHERE expedientegasto_monto >= 12
     * $query->filterByExpedientegastoMonto(array('max' => 12)); // WHERE expedientegasto_monto <= 12
     * </code>
     *
     * @param     mixed $expedientegastoMonto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByExpedientegastoMonto($expedientegastoMonto = null, $comparison = null)
    {
        if (is_array($expedientegastoMonto)) {
            $useMinMax = false;
            if (isset($expedientegastoMonto['min'])) {
                $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_MONTO, $expedientegastoMonto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientegastoMonto['max'])) {
                $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_MONTO, $expedientegastoMonto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_MONTO, $expedientegastoMonto, $comparison);
    }

    /**
     * Filter the query on the expedientegasto_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientegastoTipo('fooValue');   // WHERE expedientegasto_tipo = 'fooValue'
     * $query->filterByExpedientegastoTipo('%fooValue%'); // WHERE expedientegasto_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedientegastoTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByExpedientegastoTipo($expedientegastoTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedientegastoTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedientegastoTipo)) {
                $expedientegastoTipo = str_replace('*', '%', $expedientegastoTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_TIPO, $expedientegastoTipo, $comparison);
    }

    /**
     * Filter the query on the expedientegasto_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientegastoComprobante('fooValue');   // WHERE expedientegasto_comprobante = 'fooValue'
     * $query->filterByExpedientegastoComprobante('%fooValue%'); // WHERE expedientegasto_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedientegastoComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByExpedientegastoComprobante($expedientegastoComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedientegastoComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedientegastoComprobante)) {
                $expedientegastoComprobante = str_replace('*', '%', $expedientegastoComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_COMPROBANTE, $expedientegastoComprobante, $comparison);
    }

    /**
     * Filter the query on the expedientegasto_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientegastoNota('fooValue');   // WHERE expedientegasto_nota = 'fooValue'
     * $query->filterByExpedientegastoNota('%fooValue%'); // WHERE expedientegasto_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedientegastoNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function filterByExpedientegastoNota($expedientegastoNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedientegastoNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedientegastoNota)) {
                $expedientegastoNota = str_replace('*', '%', $expedientegastoNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientegastoPeer::EXPEDIENTEGASTO_NOTA, $expedientegastoNota, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedientegastoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(ExpedientegastoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientegastoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function joinEmpleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleado');

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
            $this->addJoinObject($join, 'Empleado');
        }

        return $this;
    }

    /**
     * Use the Empleado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleado', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Expediente object
     *
     * @param   Expediente|PropelObjectCollection $expediente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedientegastoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpediente($expediente, $comparison = null)
    {
        if ($expediente instanceof Expediente) {
            return $this
                ->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTE, $expediente->getIdexpediente(), $comparison);
        } elseif ($expediente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTE, $expediente->toKeyValue('PrimaryKey', 'Idexpediente'), $comparison);
        } else {
            throw new PropelException('filterByExpediente() only accepts arguments of type Expediente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expediente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function joinExpediente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expediente');

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
            $this->addJoinObject($join, 'Expediente');
        }

        return $this;
    }

    /**
     * Use the Expediente relation Expediente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedienteQuery A secondary query class using the current class as primary query
     */
    public function useExpedienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExpediente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expediente', 'ExpedienteQuery');
    }

    /**
     * Filter the query by a related Gastofacturacion object
     *
     * @param   Gastofacturacion|PropelObjectCollection $gastofacturacion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedientegastoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGastofacturacion($gastofacturacion, $comparison = null)
    {
        if ($gastofacturacion instanceof Gastofacturacion) {
            return $this
                ->addUsingAlias(ExpedientegastoPeer::IDGASTOFACTURACION, $gastofacturacion->getIdgastofacturacion(), $comparison);
        } elseif ($gastofacturacion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientegastoPeer::IDGASTOFACTURACION, $gastofacturacion->toKeyValue('PrimaryKey', 'Idgastofacturacion'), $comparison);
        } else {
            throw new PropelException('filterByGastofacturacion() only accepts arguments of type Gastofacturacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Gastofacturacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function joinGastofacturacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Gastofacturacion');

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
            $this->addJoinObject($join, 'Gastofacturacion');
        }

        return $this;
    }

    /**
     * Use the Gastofacturacion relation Gastofacturacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   GastofacturacionQuery A secondary query class using the current class as primary query
     */
    public function useGastofacturacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGastofacturacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Gastofacturacion', 'GastofacturacionQuery');
    }

    /**
     * Filter the query by a related Proveedoritrade object
     *
     * @param   Proveedoritrade|PropelObjectCollection $proveedoritrade The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedientegastoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedoritrade($proveedoritrade, $comparison = null)
    {
        if ($proveedoritrade instanceof Proveedoritrade) {
            return $this
                ->addUsingAlias(ExpedientegastoPeer::IDPROVEEDORITRADE, $proveedoritrade->getIdproveedoritrade(), $comparison);
        } elseif ($proveedoritrade instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientegastoPeer::IDPROVEEDORITRADE, $proveedoritrade->toKeyValue('PrimaryKey', 'Idproveedoritrade'), $comparison);
        } else {
            throw new PropelException('filterByProveedoritrade() only accepts arguments of type Proveedoritrade or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedoritrade relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function joinProveedoritrade($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedoritrade');

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
            $this->addJoinObject($join, 'Proveedoritrade');
        }

        return $this;
    }

    /**
     * Use the Proveedoritrade relation Proveedoritrade object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedoritradeQuery A secondary query class using the current class as primary query
     */
    public function useProveedoritradeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedoritrade($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedoritrade', 'ProveedoritradeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Expedientegasto $expedientegasto Object to remove from the list of results
     *
     * @return ExpedientegastoQuery The current query, for fluid interface
     */
    public function prune($expedientegasto = null)
    {
        if ($expedientegasto) {
            $this->addUsingAlias(ExpedientegastoPeer::IDEXPEDIENTEGASTO, $expedientegasto->getIdexpedientegasto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
