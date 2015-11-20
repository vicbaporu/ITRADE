<?php


/**
 * Base class that represents a query for the 'expedienteservicio' table.
 *
 *
 *
 * @method ExpedienteservicioQuery orderByIdexpedienteservicio($order = Criteria::ASC) Order by the idexpedienteservicio column
 * @method ExpedienteservicioQuery orderByIdexpediente($order = Criteria::ASC) Order by the idexpediente column
 * @method ExpedienteservicioQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method ExpedienteservicioQuery orderByExpedienteservicioFecha($order = Criteria::ASC) Order by the expedienteservicio_fecha column
 * @method ExpedienteservicioQuery orderByExpedienteservicioFechatermino($order = Criteria::ASC) Order by the expedienteservicio_fechatermino column
 *
 * @method ExpedienteservicioQuery groupByIdexpedienteservicio() Group by the idexpedienteservicio column
 * @method ExpedienteservicioQuery groupByIdexpediente() Group by the idexpediente column
 * @method ExpedienteservicioQuery groupByIdservicio() Group by the idservicio column
 * @method ExpedienteservicioQuery groupByExpedienteservicioFecha() Group by the expedienteservicio_fecha column
 * @method ExpedienteservicioQuery groupByExpedienteservicioFechatermino() Group by the expedienteservicio_fechatermino column
 *
 * @method ExpedienteservicioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExpedienteservicioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExpedienteservicioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExpedienteservicioQuery leftJoinExpediente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expediente relation
 * @method ExpedienteservicioQuery rightJoinExpediente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expediente relation
 * @method ExpedienteservicioQuery innerJoinExpediente($relationAlias = null) Adds a INNER JOIN clause to the query using the Expediente relation
 *
 * @method ExpedienteservicioQuery leftJoinServicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicio relation
 * @method ExpedienteservicioQuery rightJoinServicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicio relation
 * @method ExpedienteservicioQuery innerJoinServicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicio relation
 *
 * @method Expedienteservicio findOne(PropelPDO $con = null) Return the first Expedienteservicio matching the query
 * @method Expedienteservicio findOneOrCreate(PropelPDO $con = null) Return the first Expedienteservicio matching the query, or a new Expedienteservicio object populated from the query conditions when no match is found
 *
 * @method Expedienteservicio findOneByIdexpediente(int $idexpediente) Return the first Expedienteservicio filtered by the idexpediente column
 * @method Expedienteservicio findOneByIdservicio(int $idservicio) Return the first Expedienteservicio filtered by the idservicio column
 * @method Expedienteservicio findOneByExpedienteservicioFecha(string $expedienteservicio_fecha) Return the first Expedienteservicio filtered by the expedienteservicio_fecha column
 * @method Expedienteservicio findOneByExpedienteservicioFechatermino(string $expedienteservicio_fechatermino) Return the first Expedienteservicio filtered by the expedienteservicio_fechatermino column
 *
 * @method array findByIdexpedienteservicio(int $idexpedienteservicio) Return Expedienteservicio objects filtered by the idexpedienteservicio column
 * @method array findByIdexpediente(int $idexpediente) Return Expedienteservicio objects filtered by the idexpediente column
 * @method array findByIdservicio(int $idservicio) Return Expedienteservicio objects filtered by the idservicio column
 * @method array findByExpedienteservicioFecha(string $expedienteservicio_fecha) Return Expedienteservicio objects filtered by the expedienteservicio_fecha column
 * @method array findByExpedienteservicioFechatermino(string $expedienteservicio_fechatermino) Return Expedienteservicio objects filtered by the expedienteservicio_fechatermino column
 *
 * @package    propel.generator.itrade_system.om
 */
abstract class BaseExpedienteservicioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExpedienteservicioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'itrade_system';
        }
        if (null === $modelName) {
            $modelName = 'Expedienteservicio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExpedienteservicioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExpedienteservicioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExpedienteservicioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExpedienteservicioQuery) {
            return $criteria;
        }
        $query = new ExpedienteservicioQuery(null, null, $modelAlias);

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
     * @return   Expedienteservicio|Expedienteservicio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExpedienteservicioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExpedienteservicioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Expedienteservicio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdexpedienteservicio($key, $con = null)
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
     * @return                 Expedienteservicio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idexpedienteservicio`, `idexpediente`, `idservicio`, `expedienteservicio_fecha`, `expedienteservicio_fechatermino` FROM `expedienteservicio` WHERE `idexpedienteservicio` = :p0';
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
            $obj = new Expedienteservicio();
            $obj->hydrate($row);
            ExpedienteservicioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Expedienteservicio|Expedienteservicio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Expedienteservicio[]|mixed the list of results, formatted by the current formatter
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
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTESERVICIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTESERVICIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idexpedienteservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdexpedienteservicio(1234); // WHERE idexpedienteservicio = 1234
     * $query->filterByIdexpedienteservicio(array(12, 34)); // WHERE idexpedienteservicio IN (12, 34)
     * $query->filterByIdexpedienteservicio(array('min' => 12)); // WHERE idexpedienteservicio >= 12
     * $query->filterByIdexpedienteservicio(array('max' => 12)); // WHERE idexpedienteservicio <= 12
     * </code>
     *
     * @param     mixed $idexpedienteservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function filterByIdexpedienteservicio($idexpedienteservicio = null, $comparison = null)
    {
        if (is_array($idexpedienteservicio)) {
            $useMinMax = false;
            if (isset($idexpedienteservicio['min'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTESERVICIO, $idexpedienteservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpedienteservicio['max'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTESERVICIO, $idexpedienteservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTESERVICIO, $idexpedienteservicio, $comparison);
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
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function filterByIdexpediente($idexpediente = null, $comparison = null)
    {
        if (is_array($idexpediente)) {
            $useMinMax = false;
            if (isset($idexpediente['min'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTE, $idexpediente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpediente['max'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTE, $idexpediente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTE, $idexpediente, $comparison);
    }

    /**
     * Filter the query on the idservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicio(1234); // WHERE idservicio = 1234
     * $query->filterByIdservicio(array(12, 34)); // WHERE idservicio IN (12, 34)
     * $query->filterByIdservicio(array('min' => 12)); // WHERE idservicio >= 12
     * $query->filterByIdservicio(array('max' => 12)); // WHERE idservicio <= 12
     * </code>
     *
     * @see       filterByServicio()
     *
     * @param     mixed $idservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteservicioPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the expedienteservicio_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteservicioFecha('2011-03-14'); // WHERE expedienteservicio_fecha = '2011-03-14'
     * $query->filterByExpedienteservicioFecha('now'); // WHERE expedienteservicio_fecha = '2011-03-14'
     * $query->filterByExpedienteservicioFecha(array('max' => 'yesterday')); // WHERE expedienteservicio_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $expedienteservicioFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function filterByExpedienteservicioFecha($expedienteservicioFecha = null, $comparison = null)
    {
        if (is_array($expedienteservicioFecha)) {
            $useMinMax = false;
            if (isset($expedienteservicioFecha['min'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::EXPEDIENTESERVICIO_FECHA, $expedienteservicioFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedienteservicioFecha['max'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::EXPEDIENTESERVICIO_FECHA, $expedienteservicioFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteservicioPeer::EXPEDIENTESERVICIO_FECHA, $expedienteservicioFecha, $comparison);
    }

    /**
     * Filter the query on the expedienteservicio_fechatermino column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteservicioFechatermino('2011-03-14'); // WHERE expedienteservicio_fechatermino = '2011-03-14'
     * $query->filterByExpedienteservicioFechatermino('now'); // WHERE expedienteservicio_fechatermino = '2011-03-14'
     * $query->filterByExpedienteservicioFechatermino(array('max' => 'yesterday')); // WHERE expedienteservicio_fechatermino < '2011-03-13'
     * </code>
     *
     * @param     mixed $expedienteservicioFechatermino The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function filterByExpedienteservicioFechatermino($expedienteservicioFechatermino = null, $comparison = null)
    {
        if (is_array($expedienteservicioFechatermino)) {
            $useMinMax = false;
            if (isset($expedienteservicioFechatermino['min'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::EXPEDIENTESERVICIO_FECHATERMINO, $expedienteservicioFechatermino['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedienteservicioFechatermino['max'])) {
                $this->addUsingAlias(ExpedienteservicioPeer::EXPEDIENTESERVICIO_FECHATERMINO, $expedienteservicioFechatermino['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteservicioPeer::EXPEDIENTESERVICIO_FECHATERMINO, $expedienteservicioFechatermino, $comparison);
    }

    /**
     * Filter the query by a related Expediente object
     *
     * @param   Expediente|PropelObjectCollection $expediente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteservicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpediente($expediente, $comparison = null)
    {
        if ($expediente instanceof Expediente) {
            return $this
                ->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTE, $expediente->getIdexpediente(), $comparison);
        } elseif ($expediente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTE, $expediente->toKeyValue('PrimaryKey', 'Idexpediente'), $comparison);
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
     * @return ExpedienteservicioQuery The current query, for fluid interface
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
     * Filter the query by a related Servicio object
     *
     * @param   Servicio|PropelObjectCollection $servicio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteservicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicio($servicio, $comparison = null)
    {
        if ($servicio instanceof Servicio) {
            return $this
                ->addUsingAlias(ExpedienteservicioPeer::IDSERVICIO, $servicio->getIdservicio(), $comparison);
        } elseif ($servicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedienteservicioPeer::IDSERVICIO, $servicio->toKeyValue('PrimaryKey', 'Idservicio'), $comparison);
        } else {
            throw new PropelException('filterByServicio() only accepts arguments of type Servicio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function joinServicio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicio');

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
            $this->addJoinObject($join, 'Servicio');
        }

        return $this;
    }

    /**
     * Use the Servicio relation Servicio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioQuery A secondary query class using the current class as primary query
     */
    public function useServicioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinServicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicio', 'ServicioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Expedienteservicio $expedienteservicio Object to remove from the list of results
     *
     * @return ExpedienteservicioQuery The current query, for fluid interface
     */
    public function prune($expedienteservicio = null)
    {
        if ($expedienteservicio) {
            $this->addUsingAlias(ExpedienteservicioPeer::IDEXPEDIENTESERVICIO, $expedienteservicio->getIdexpedienteservicio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
