<?php


/**
 * Base class that represents a query for the 'expedientehistorial' table.
 *
 *
 *
 * @method ExpedientehistorialQuery orderByIdexpedientehistorial($order = Criteria::ASC) Order by the idexpedientehistorial column
 * @method ExpedientehistorialQuery orderByIdexpedienteservicio($order = Criteria::ASC) Order by the idexpedienteservicio column
 * @method ExpedientehistorialQuery orderByIdestadoservicio($order = Criteria::ASC) Order by the idestadoservicio column
 * @method ExpedientehistorialQuery orderByExpedientehistorialFecha($order = Criteria::ASC) Order by the expedientehistorial_fecha column
 * @method ExpedientehistorialQuery orderByExpedientehistorialNota($order = Criteria::ASC) Order by the expedientehistorial_nota column
 *
 * @method ExpedientehistorialQuery groupByIdexpedientehistorial() Group by the idexpedientehistorial column
 * @method ExpedientehistorialQuery groupByIdexpedienteservicio() Group by the idexpedienteservicio column
 * @method ExpedientehistorialQuery groupByIdestadoservicio() Group by the idestadoservicio column
 * @method ExpedientehistorialQuery groupByExpedientehistorialFecha() Group by the expedientehistorial_fecha column
 * @method ExpedientehistorialQuery groupByExpedientehistorialNota() Group by the expedientehistorial_nota column
 *
 * @method ExpedientehistorialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExpedientehistorialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExpedientehistorialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExpedientehistorialQuery leftJoinExpedienteservicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedienteservicio relation
 * @method ExpedientehistorialQuery rightJoinExpedienteservicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedienteservicio relation
 * @method ExpedientehistorialQuery innerJoinExpedienteservicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedienteservicio relation
 *
 * @method ExpedientehistorialQuery leftJoinServicioestado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicioestado relation
 * @method ExpedientehistorialQuery rightJoinServicioestado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicioestado relation
 * @method ExpedientehistorialQuery innerJoinServicioestado($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicioestado relation
 *
 * @method Expedientehistorial findOne(PropelPDO $con = null) Return the first Expedientehistorial matching the query
 * @method Expedientehistorial findOneOrCreate(PropelPDO $con = null) Return the first Expedientehistorial matching the query, or a new Expedientehistorial object populated from the query conditions when no match is found
 *
 * @method Expedientehistorial findOneByIdexpedienteservicio(int $idexpedienteservicio) Return the first Expedientehistorial filtered by the idexpedienteservicio column
 * @method Expedientehistorial findOneByIdestadoservicio(int $idestadoservicio) Return the first Expedientehistorial filtered by the idestadoservicio column
 * @method Expedientehistorial findOneByExpedientehistorialFecha(string $expedientehistorial_fecha) Return the first Expedientehistorial filtered by the expedientehistorial_fecha column
 * @method Expedientehistorial findOneByExpedientehistorialNota(string $expedientehistorial_nota) Return the first Expedientehistorial filtered by the expedientehistorial_nota column
 *
 * @method array findByIdexpedientehistorial(int $idexpedientehistorial) Return Expedientehistorial objects filtered by the idexpedientehistorial column
 * @method array findByIdexpedienteservicio(int $idexpedienteservicio) Return Expedientehistorial objects filtered by the idexpedienteservicio column
 * @method array findByIdestadoservicio(int $idestadoservicio) Return Expedientehistorial objects filtered by the idestadoservicio column
 * @method array findByExpedientehistorialFecha(string $expedientehistorial_fecha) Return Expedientehistorial objects filtered by the expedientehistorial_fecha column
 * @method array findByExpedientehistorialNota(string $expedientehistorial_nota) Return Expedientehistorial objects filtered by the expedientehistorial_nota column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseExpedientehistorialQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExpedientehistorialQuery object.
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
            $modelName = 'Expedientehistorial';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExpedientehistorialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExpedientehistorialQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExpedientehistorialQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExpedientehistorialQuery) {
            return $criteria;
        }
        $query = new ExpedientehistorialQuery(null, null, $modelAlias);

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
     * @return   Expedientehistorial|Expedientehistorial[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExpedientehistorialPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExpedientehistorialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Expedientehistorial A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdexpedientehistorial($key, $con = null)
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
     * @return                 Expedientehistorial A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idexpedientehistorial`, `idexpedienteservicio`, `idestadoservicio`, `expedientehistorial_fecha`, `expedientehistorial_nota` FROM `expedientehistorial` WHERE `idexpedientehistorial` = :p0';
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
            $obj = new Expedientehistorial();
            $obj->hydrate($row);
            ExpedientehistorialPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Expedientehistorial|Expedientehistorial[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Expedientehistorial[]|mixed the list of results, formatted by the current formatter
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
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTEHISTORIAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTEHISTORIAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idexpedientehistorial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdexpedientehistorial(1234); // WHERE idexpedientehistorial = 1234
     * $query->filterByIdexpedientehistorial(array(12, 34)); // WHERE idexpedientehistorial IN (12, 34)
     * $query->filterByIdexpedientehistorial(array('min' => 12)); // WHERE idexpedientehistorial >= 12
     * $query->filterByIdexpedientehistorial(array('max' => 12)); // WHERE idexpedientehistorial <= 12
     * </code>
     *
     * @param     mixed $idexpedientehistorial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function filterByIdexpedientehistorial($idexpedientehistorial = null, $comparison = null)
    {
        if (is_array($idexpedientehistorial)) {
            $useMinMax = false;
            if (isset($idexpedientehistorial['min'])) {
                $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTEHISTORIAL, $idexpedientehistorial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpedientehistorial['max'])) {
                $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTEHISTORIAL, $idexpedientehistorial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTEHISTORIAL, $idexpedientehistorial, $comparison);
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
     * @see       filterByExpedienteservicio()
     *
     * @param     mixed $idexpedienteservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function filterByIdexpedienteservicio($idexpedienteservicio = null, $comparison = null)
    {
        if (is_array($idexpedienteservicio)) {
            $useMinMax = false;
            if (isset($idexpedienteservicio['min'])) {
                $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTESERVICIO, $idexpedienteservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpedienteservicio['max'])) {
                $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTESERVICIO, $idexpedienteservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTESERVICIO, $idexpedienteservicio, $comparison);
    }

    /**
     * Filter the query on the idestadoservicio column
     *
     * Example usage:
     * <code>
     * $query->filterByIdestadoservicio(1234); // WHERE idestadoservicio = 1234
     * $query->filterByIdestadoservicio(array(12, 34)); // WHERE idestadoservicio IN (12, 34)
     * $query->filterByIdestadoservicio(array('min' => 12)); // WHERE idestadoservicio >= 12
     * $query->filterByIdestadoservicio(array('max' => 12)); // WHERE idestadoservicio <= 12
     * </code>
     *
     * @see       filterByServicioestado()
     *
     * @param     mixed $idestadoservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function filterByIdestadoservicio($idestadoservicio = null, $comparison = null)
    {
        if (is_array($idestadoservicio)) {
            $useMinMax = false;
            if (isset($idestadoservicio['min'])) {
                $this->addUsingAlias(ExpedientehistorialPeer::IDESTADOSERVICIO, $idestadoservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idestadoservicio['max'])) {
                $this->addUsingAlias(ExpedientehistorialPeer::IDESTADOSERVICIO, $idestadoservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientehistorialPeer::IDESTADOSERVICIO, $idestadoservicio, $comparison);
    }

    /**
     * Filter the query on the expedientehistorial_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientehistorialFecha('2011-03-14'); // WHERE expedientehistorial_fecha = '2011-03-14'
     * $query->filterByExpedientehistorialFecha('now'); // WHERE expedientehistorial_fecha = '2011-03-14'
     * $query->filterByExpedientehistorialFecha(array('max' => 'yesterday')); // WHERE expedientehistorial_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $expedientehistorialFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function filterByExpedientehistorialFecha($expedientehistorialFecha = null, $comparison = null)
    {
        if (is_array($expedientehistorialFecha)) {
            $useMinMax = false;
            if (isset($expedientehistorialFecha['min'])) {
                $this->addUsingAlias(ExpedientehistorialPeer::EXPEDIENTEHISTORIAL_FECHA, $expedientehistorialFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientehistorialFecha['max'])) {
                $this->addUsingAlias(ExpedientehistorialPeer::EXPEDIENTEHISTORIAL_FECHA, $expedientehistorialFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientehistorialPeer::EXPEDIENTEHISTORIAL_FECHA, $expedientehistorialFecha, $comparison);
    }

    /**
     * Filter the query on the expedientehistorial_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientehistorialNota('fooValue');   // WHERE expedientehistorial_nota = 'fooValue'
     * $query->filterByExpedientehistorialNota('%fooValue%'); // WHERE expedientehistorial_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedientehistorialNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function filterByExpedientehistorialNota($expedientehistorialNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedientehistorialNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedientehistorialNota)) {
                $expedientehistorialNota = str_replace('*', '%', $expedientehistorialNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientehistorialPeer::EXPEDIENTEHISTORIAL_NOTA, $expedientehistorialNota, $comparison);
    }

    /**
     * Filter the query by a related Expedienteservicio object
     *
     * @param   Expedienteservicio|PropelObjectCollection $expedienteservicio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedientehistorialQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedienteservicio($expedienteservicio, $comparison = null)
    {
        if ($expedienteservicio instanceof Expedienteservicio) {
            return $this
                ->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTESERVICIO, $expedienteservicio->getIdexpedienteservicio(), $comparison);
        } elseif ($expedienteservicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTESERVICIO, $expedienteservicio->toKeyValue('PrimaryKey', 'Idexpedienteservicio'), $comparison);
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
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function joinExpedienteservicio($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useExpedienteservicioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinExpedienteservicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expedienteservicio', 'ExpedienteservicioQuery');
    }

    /**
     * Filter the query by a related Servicioestado object
     *
     * @param   Servicioestado|PropelObjectCollection $servicioestado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedientehistorialQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicioestado($servicioestado, $comparison = null)
    {
        if ($servicioestado instanceof Servicioestado) {
            return $this
                ->addUsingAlias(ExpedientehistorialPeer::IDESTADOSERVICIO, $servicioestado->getIdservicioestado(), $comparison);
        } elseif ($servicioestado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientehistorialPeer::IDESTADOSERVICIO, $servicioestado->toKeyValue('PrimaryKey', 'Idservicioestado'), $comparison);
        } else {
            throw new PropelException('filterByServicioestado() only accepts arguments of type Servicioestado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Servicioestado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function joinServicioestado($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Servicioestado');

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
            $this->addJoinObject($join, 'Servicioestado');
        }

        return $this;
    }

    /**
     * Use the Servicioestado relation Servicioestado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServicioestadoQuery A secondary query class using the current class as primary query
     */
    public function useServicioestadoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinServicioestado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicioestado', 'ServicioestadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Expedientehistorial $expedientehistorial Object to remove from the list of results
     *
     * @return ExpedientehistorialQuery The current query, for fluid interface
     */
    public function prune($expedientehistorial = null)
    {
        if ($expedientehistorial) {
            $this->addUsingAlias(ExpedientehistorialPeer::IDEXPEDIENTEHISTORIAL, $expedientehistorial->getIdexpedientehistorial(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
