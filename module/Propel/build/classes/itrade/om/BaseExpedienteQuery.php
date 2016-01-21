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
 * @method ExpedienteQuery orderByExpedientePrecio($order = Criteria::ASC) Order by the expediente_precio column
 * @method ExpedienteQuery orderByExpedienteTipo($order = Criteria::ASC) Order by the expediente_tipo column
 * @method ExpedienteQuery orderByExpedienteEstatus($order = Criteria::ASC) Order by the expediente_estatus column
 *
 * @method ExpedienteQuery groupByIdexpediente() Group by the idexpediente column
 * @method ExpedienteQuery groupByIdcliente() Group by the idcliente column
 * @method ExpedienteQuery groupByIdconsignatarioembarcador() Group by the idconsignatarioembarcador column
 * @method ExpedienteQuery groupByExpedienteListaempaque() Group by the expediente_listaempaque column
 * @method ExpedienteQuery groupByExpedienteFactura() Group by the expediente_factura column
 * @method ExpedienteQuery groupByExpedienteFechainicio() Group by the expediente_fechainicio column
 * @method ExpedienteQuery groupByExpedienteFechafin() Group by the expediente_fechafin column
 * @method ExpedienteQuery groupByExpedientePrecio() Group by the expediente_precio column
 * @method ExpedienteQuery groupByExpedienteTipo() Group by the expediente_tipo column
 * @method ExpedienteQuery groupByExpedienteEstatus() Group by the expediente_estatus column
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
 * @method Expediente findOneByExpedientePrecio(string $expediente_precio) Return the first Expediente filtered by the expediente_precio column
 * @method Expediente findOneByExpedienteTipo(string $expediente_tipo) Return the first Expediente filtered by the expediente_tipo column
 * @method Expediente findOneByExpedienteEstatus(string $expediente_estatus) Return the first Expediente filtered by the expediente_estatus column
 *
 * @method array findByIdexpediente(int $idexpediente) Return Expediente objects filtered by the idexpediente column
 * @method array findByIdcliente(int $idcliente) Return Expediente objects filtered by the idcliente column
 * @method array findByIdconsignatarioembarcador(int $idconsignatarioembarcador) Return Expediente objects filtered by the idconsignatarioembarcador column
 * @method array findByExpedienteListaempaque(string $expediente_listaempaque) Return Expediente objects filtered by the expediente_listaempaque column
 * @method array findByExpedienteFactura(string $expediente_factura) Return Expediente objects filtered by the expediente_factura column
 * @method array findByExpedienteFechainicio(string $expediente_fechainicio) Return Expediente objects filtered by the expediente_fechainicio column
 * @method array findByExpedienteFechafin(string $expediente_fechafin) Return Expediente objects filtered by the expediente_fechafin column
 * @method array findByExpedientePrecio(string $expediente_precio) Return Expediente objects filtered by the expediente_precio column
 * @method array findByExpedienteTipo(string $expediente_tipo) Return Expediente objects filtered by the expediente_tipo column
 * @method array findByExpedienteEstatus(string $expediente_estatus) Return Expediente objects filtered by the expediente_estatus column
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
        $sql = 'SELECT `idexpediente`, `idcliente`, `idconsignatarioembarcador`, `expediente_listaempaque`, `expediente_factura`, `expediente_fechainicio`, `expediente_fechafin`, `expediente_precio`, `expediente_tipo`, `expediente_estatus` FROM `expediente` WHERE `idexpediente` = :p0';
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
     * Filter the query on the expediente_precio column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientePrecio(1234); // WHERE expediente_precio = 1234
     * $query->filterByExpedientePrecio(array(12, 34)); // WHERE expediente_precio IN (12, 34)
     * $query->filterByExpedientePrecio(array('min' => 12)); // WHERE expediente_precio >= 12
     * $query->filterByExpedientePrecio(array('max' => 12)); // WHERE expediente_precio <= 12
     * </code>
     *
     * @param     mixed $expedientePrecio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteQuery The current query, for fluid interface
     */
    public function filterByExpedientePrecio($expedientePrecio = null, $comparison = null)
    {
        if (is_array($expedientePrecio)) {
            $useMinMax = false;
            if (isset($expedientePrecio['min'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIO, $expedientePrecio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientePrecio['max'])) {
                $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIO, $expedientePrecio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientePeer::EXPEDIENTE_PRECIO, $expedientePrecio, $comparison);
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
