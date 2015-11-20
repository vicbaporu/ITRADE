<?php


/**
 * Base class that represents a query for the 'expedientearchivo' table.
 *
 *
 *
 * @method ExpedientearchivoQuery orderByIdexpedientearchivo($order = Criteria::ASC) Order by the idexpedientearchivo column
 * @method ExpedientearchivoQuery orderByIdexpediente($order = Criteria::ASC) Order by the idexpediente column
 * @method ExpedientearchivoQuery orderByExpedientearchivoFecha($order = Criteria::ASC) Order by the expedientearchivo_fecha column
 * @method ExpedientearchivoQuery orderByExpedientearchivoNota($order = Criteria::ASC) Order by the expedientearchivo_nota column
 * @method ExpedientearchivoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 *
 * @method ExpedientearchivoQuery groupByIdexpedientearchivo() Group by the idexpedientearchivo column
 * @method ExpedientearchivoQuery groupByIdexpediente() Group by the idexpediente column
 * @method ExpedientearchivoQuery groupByExpedientearchivoFecha() Group by the expedientearchivo_fecha column
 * @method ExpedientearchivoQuery groupByExpedientearchivoNota() Group by the expedientearchivo_nota column
 * @method ExpedientearchivoQuery groupByIdempleado() Group by the idempleado column
 *
 * @method ExpedientearchivoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExpedientearchivoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExpedientearchivoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExpedientearchivoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method ExpedientearchivoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method ExpedientearchivoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method ExpedientearchivoQuery leftJoinExpediente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expediente relation
 * @method ExpedientearchivoQuery rightJoinExpediente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expediente relation
 * @method ExpedientearchivoQuery innerJoinExpediente($relationAlias = null) Adds a INNER JOIN clause to the query using the Expediente relation
 *
 * @method Expedientearchivo findOne(PropelPDO $con = null) Return the first Expedientearchivo matching the query
 * @method Expedientearchivo findOneOrCreate(PropelPDO $con = null) Return the first Expedientearchivo matching the query, or a new Expedientearchivo object populated from the query conditions when no match is found
 *
 * @method Expedientearchivo findOneByIdexpediente(int $idexpediente) Return the first Expedientearchivo filtered by the idexpediente column
 * @method Expedientearchivo findOneByExpedientearchivoFecha(string $expedientearchivo_fecha) Return the first Expedientearchivo filtered by the expedientearchivo_fecha column
 * @method Expedientearchivo findOneByExpedientearchivoNota(string $expedientearchivo_nota) Return the first Expedientearchivo filtered by the expedientearchivo_nota column
 * @method Expedientearchivo findOneByIdempleado(int $idempleado) Return the first Expedientearchivo filtered by the idempleado column
 *
 * @method array findByIdexpedientearchivo(int $idexpedientearchivo) Return Expedientearchivo objects filtered by the idexpedientearchivo column
 * @method array findByIdexpediente(int $idexpediente) Return Expedientearchivo objects filtered by the idexpediente column
 * @method array findByExpedientearchivoFecha(string $expedientearchivo_fecha) Return Expedientearchivo objects filtered by the expedientearchivo_fecha column
 * @method array findByExpedientearchivoNota(string $expedientearchivo_nota) Return Expedientearchivo objects filtered by the expedientearchivo_nota column
 * @method array findByIdempleado(int $idempleado) Return Expedientearchivo objects filtered by the idempleado column
 *
 * @package    propel.generator.itrade_system.om
 */
abstract class BaseExpedientearchivoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExpedientearchivoQuery object.
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
            $modelName = 'Expedientearchivo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExpedientearchivoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExpedientearchivoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExpedientearchivoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExpedientearchivoQuery) {
            return $criteria;
        }
        $query = new ExpedientearchivoQuery(null, null, $modelAlias);

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
     * @return   Expedientearchivo|Expedientearchivo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExpedientearchivoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExpedientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Expedientearchivo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdexpedientearchivo($key, $con = null)
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
     * @return                 Expedientearchivo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idexpedientearchivo`, `idexpediente`, `expedientearchivo_fecha`, `expedientearchivo_nota`, `idempleado` FROM `expedientearchivo` WHERE `idexpedientearchivo` = :p0';
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
            $obj = new Expedientearchivo();
            $obj->hydrate($row);
            ExpedientearchivoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Expedientearchivo|Expedientearchivo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Expedientearchivo[]|mixed the list of results, formatted by the current formatter
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
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idexpedientearchivo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdexpedientearchivo(1234); // WHERE idexpedientearchivo = 1234
     * $query->filterByIdexpedientearchivo(array(12, 34)); // WHERE idexpedientearchivo IN (12, 34)
     * $query->filterByIdexpedientearchivo(array('min' => 12)); // WHERE idexpedientearchivo >= 12
     * $query->filterByIdexpedientearchivo(array('max' => 12)); // WHERE idexpedientearchivo <= 12
     * </code>
     *
     * @param     mixed $idexpedientearchivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function filterByIdexpedientearchivo($idexpedientearchivo = null, $comparison = null)
    {
        if (is_array($idexpedientearchivo)) {
            $useMinMax = false;
            if (isset($idexpedientearchivo['min'])) {
                $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $idexpedientearchivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpedientearchivo['max'])) {
                $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $idexpedientearchivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $idexpedientearchivo, $comparison);
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
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function filterByIdexpediente($idexpediente = null, $comparison = null)
    {
        if (is_array($idexpediente)) {
            $useMinMax = false;
            if (isset($idexpediente['min'])) {
                $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTE, $idexpediente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpediente['max'])) {
                $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTE, $idexpediente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTE, $idexpediente, $comparison);
    }

    /**
     * Filter the query on the expedientearchivo_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientearchivoFecha('2011-03-14'); // WHERE expedientearchivo_fecha = '2011-03-14'
     * $query->filterByExpedientearchivoFecha('now'); // WHERE expedientearchivo_fecha = '2011-03-14'
     * $query->filterByExpedientearchivoFecha(array('max' => 'yesterday')); // WHERE expedientearchivo_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $expedientearchivoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function filterByExpedientearchivoFecha($expedientearchivoFecha = null, $comparison = null)
    {
        if (is_array($expedientearchivoFecha)) {
            $useMinMax = false;
            if (isset($expedientearchivoFecha['min'])) {
                $this->addUsingAlias(ExpedientearchivoPeer::EXPEDIENTEARCHIVO_FECHA, $expedientearchivoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedientearchivoFecha['max'])) {
                $this->addUsingAlias(ExpedientearchivoPeer::EXPEDIENTEARCHIVO_FECHA, $expedientearchivoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientearchivoPeer::EXPEDIENTEARCHIVO_FECHA, $expedientearchivoFecha, $comparison);
    }

    /**
     * Filter the query on the expedientearchivo_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedientearchivoNota('fooValue');   // WHERE expedientearchivo_nota = 'fooValue'
     * $query->filterByExpedientearchivoNota('%fooValue%'); // WHERE expedientearchivo_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedientearchivoNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function filterByExpedientearchivoNota($expedientearchivoNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedientearchivoNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedientearchivoNota)) {
                $expedientearchivoNota = str_replace('*', '%', $expedientearchivoNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedientearchivoPeer::EXPEDIENTEARCHIVO_NOTA, $expedientearchivoNota, $comparison);
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
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(ExpedientearchivoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(ExpedientearchivoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedientearchivoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedientearchivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(ExpedientearchivoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientearchivoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function joinEmpleado($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return                 ExpedientearchivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpediente($expediente, $comparison = null)
    {
        if ($expediente instanceof Expediente) {
            return $this
                ->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTE, $expediente->getIdexpediente(), $comparison);
        } elseif ($expediente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTE, $expediente->toKeyValue('PrimaryKey', 'Idexpediente'), $comparison);
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
     * @return ExpedientearchivoQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Expedientearchivo $expedientearchivo Object to remove from the list of results
     *
     * @return ExpedientearchivoQuery The current query, for fluid interface
     */
    public function prune($expedientearchivo = null)
    {
        if ($expedientearchivo) {
            $this->addUsingAlias(ExpedientearchivoPeer::IDEXPEDIENTEARCHIVO, $expedientearchivo->getIdexpedientearchivo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
