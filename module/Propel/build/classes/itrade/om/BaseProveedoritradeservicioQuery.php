<?php


/**
 * Base class that represents a query for the 'proveedoritradeservicio' table.
 *
 *
 *
 * @method ProveedoritradeservicioQuery orderByIdproveedoritradeservicio($order = Criteria::ASC) Order by the idproveedoritradeservicio column
 * @method ProveedoritradeservicioQuery orderByIdproveedoritrade($order = Criteria::ASC) Order by the idproveedoritrade column
 * @method ProveedoritradeservicioQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 *
 * @method ProveedoritradeservicioQuery groupByIdproveedoritradeservicio() Group by the idproveedoritradeservicio column
 * @method ProveedoritradeservicioQuery groupByIdproveedoritrade() Group by the idproveedoritrade column
 * @method ProveedoritradeservicioQuery groupByIdservicio() Group by the idservicio column
 *
 * @method ProveedoritradeservicioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedoritradeservicioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedoritradeservicioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedoritradeservicioQuery leftJoinProveedoritrade($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedoritrade relation
 * @method ProveedoritradeservicioQuery rightJoinProveedoritrade($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedoritrade relation
 * @method ProveedoritradeservicioQuery innerJoinProveedoritrade($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedoritrade relation
 *
 * @method ProveedoritradeservicioQuery leftJoinServicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicio relation
 * @method ProveedoritradeservicioQuery rightJoinServicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicio relation
 * @method ProveedoritradeservicioQuery innerJoinServicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicio relation
 *
 * @method Proveedoritradeservicio findOne(PropelPDO $con = null) Return the first Proveedoritradeservicio matching the query
 * @method Proveedoritradeservicio findOneOrCreate(PropelPDO $con = null) Return the first Proveedoritradeservicio matching the query, or a new Proveedoritradeservicio object populated from the query conditions when no match is found
 *
 * @method Proveedoritradeservicio findOneByIdproveedoritrade(int $idproveedoritrade) Return the first Proveedoritradeservicio filtered by the idproveedoritrade column
 * @method Proveedoritradeservicio findOneByIdservicio(int $idservicio) Return the first Proveedoritradeservicio filtered by the idservicio column
 *
 * @method array findByIdproveedoritradeservicio(int $idproveedoritradeservicio) Return Proveedoritradeservicio objects filtered by the idproveedoritradeservicio column
 * @method array findByIdproveedoritrade(int $idproveedoritrade) Return Proveedoritradeservicio objects filtered by the idproveedoritrade column
 * @method array findByIdservicio(int $idservicio) Return Proveedoritradeservicio objects filtered by the idservicio column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseProveedoritradeservicioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedoritradeservicioQuery object.
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
            $modelName = 'Proveedoritradeservicio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedoritradeservicioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedoritradeservicioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedoritradeservicioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedoritradeservicioQuery) {
            return $criteria;
        }
        $query = new ProveedoritradeservicioQuery(null, null, $modelAlias);

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
     * @return   Proveedoritradeservicio|Proveedoritradeservicio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedoritradeservicioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradeservicioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedoritradeservicio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedoritradeservicio($key, $con = null)
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
     * @return                 Proveedoritradeservicio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedoritradeservicio`, `idproveedoritrade`, `idservicio` FROM `proveedoritradeservicio` WHERE `idproveedoritradeservicio` = :p0';
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
            $obj = new Proveedoritradeservicio();
            $obj->hydrate($row);
            ProveedoritradeservicioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedoritradeservicio|Proveedoritradeservicio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedoritradeservicio[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedoritradeservicioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADESERVICIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedoritradeservicioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADESERVICIO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproveedoritradeservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedoritradeservicio(1234); // WHERE idproveedoritradeservicio = 1234
     * $query->filterByIdproveedoritradeservicio(array(12, 34)); // WHERE idproveedoritradeservicio IN (12, 34)
     * $query->filterByIdproveedoritradeservicio(array('min' => 12)); // WHERE idproveedoritradeservicio >= 12
     * $query->filterByIdproveedoritradeservicio(array('max' => 12)); // WHERE idproveedoritradeservicio <= 12
     * </code>
     *
     * @param     mixed $idproveedoritradeservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeservicioQuery The current query, for fluid interface
     */
    public function filterByIdproveedoritradeservicio($idproveedoritradeservicio = null, $comparison = null)
    {
        if (is_array($idproveedoritradeservicio)) {
            $useMinMax = false;
            if (isset($idproveedoritradeservicio['min'])) {
                $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADESERVICIO, $idproveedoritradeservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedoritradeservicio['max'])) {
                $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADESERVICIO, $idproveedoritradeservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADESERVICIO, $idproveedoritradeservicio, $comparison);
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
     * @return ProveedoritradeservicioQuery The current query, for fluid interface
     */
    public function filterByIdproveedoritrade($idproveedoritrade = null, $comparison = null)
    {
        if (is_array($idproveedoritrade)) {
            $useMinMax = false;
            if (isset($idproveedoritrade['min'])) {
                $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADE, $idproveedoritrade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedoritrade['max'])) {
                $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADE, $idproveedoritrade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADE, $idproveedoritrade, $comparison);
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
     * @return ProveedoritradeservicioQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(ProveedoritradeservicioPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(ProveedoritradeservicioPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedoritradeservicioPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query by a related Proveedoritrade object
     *
     * @param   Proveedoritrade|PropelObjectCollection $proveedoritrade The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedoritradeservicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedoritrade($proveedoritrade, $comparison = null)
    {
        if ($proveedoritrade instanceof Proveedoritrade) {
            return $this
                ->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADE, $proveedoritrade->getIdproveedoritrade(), $comparison);
        } elseif ($proveedoritrade instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADE, $proveedoritrade->toKeyValue('PrimaryKey', 'Idproveedoritrade'), $comparison);
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
     * @return ProveedoritradeservicioQuery The current query, for fluid interface
     */
    public function joinProveedoritrade($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useProveedoritradeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProveedoritrade($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedoritrade', 'ProveedoritradeQuery');
    }

    /**
     * Filter the query by a related Servicio object
     *
     * @param   Servicio|PropelObjectCollection $servicio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedoritradeservicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicio($servicio, $comparison = null)
    {
        if ($servicio instanceof Servicio) {
            return $this
                ->addUsingAlias(ProveedoritradeservicioPeer::IDSERVICIO, $servicio->getIdservicio(), $comparison);
        } elseif ($servicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedoritradeservicioPeer::IDSERVICIO, $servicio->toKeyValue('PrimaryKey', 'Idservicio'), $comparison);
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
     * @return ProveedoritradeservicioQuery The current query, for fluid interface
     */
    public function joinServicio($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useServicioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinServicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicio', 'ServicioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Proveedoritradeservicio $proveedoritradeservicio Object to remove from the list of results
     *
     * @return ProveedoritradeservicioQuery The current query, for fluid interface
     */
    public function prune($proveedoritradeservicio = null)
    {
        if ($proveedoritradeservicio) {
            $this->addUsingAlias(ProveedoritradeservicioPeer::IDPROVEEDORITRADESERVICIO, $proveedoritradeservicio->getIdproveedoritradeservicio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
