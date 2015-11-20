<?php


/**
 * Base class that represents a query for the 'gastofacturacion' table.
 *
 *
 *
 * @method GastofacturacionQuery orderByIdgastofacturacion($order = Criteria::ASC) Order by the idgastofacturacion column
 * @method GastofacturacionQuery orderByGastofacturacionNombre($order = Criteria::ASC) Order by the gastofacturacion_nombre column
 * @method GastofacturacionQuery orderByGastofacturacionDescripcion($order = Criteria::ASC) Order by the gastofacturacion_descripcion column
 *
 * @method GastofacturacionQuery groupByIdgastofacturacion() Group by the idgastofacturacion column
 * @method GastofacturacionQuery groupByGastofacturacionNombre() Group by the gastofacturacion_nombre column
 * @method GastofacturacionQuery groupByGastofacturacionDescripcion() Group by the gastofacturacion_descripcion column
 *
 * @method GastofacturacionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GastofacturacionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GastofacturacionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GastofacturacionQuery leftJoinExpedientegasto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedientegasto relation
 * @method GastofacturacionQuery rightJoinExpedientegasto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedientegasto relation
 * @method GastofacturacionQuery innerJoinExpedientegasto($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedientegasto relation
 *
 * @method Gastofacturacion findOne(PropelPDO $con = null) Return the first Gastofacturacion matching the query
 * @method Gastofacturacion findOneOrCreate(PropelPDO $con = null) Return the first Gastofacturacion matching the query, or a new Gastofacturacion object populated from the query conditions when no match is found
 *
 * @method Gastofacturacion findOneByGastofacturacionNombre(string $gastofacturacion_nombre) Return the first Gastofacturacion filtered by the gastofacturacion_nombre column
 * @method Gastofacturacion findOneByGastofacturacionDescripcion(string $gastofacturacion_descripcion) Return the first Gastofacturacion filtered by the gastofacturacion_descripcion column
 *
 * @method array findByIdgastofacturacion(int $idgastofacturacion) Return Gastofacturacion objects filtered by the idgastofacturacion column
 * @method array findByGastofacturacionNombre(string $gastofacturacion_nombre) Return Gastofacturacion objects filtered by the gastofacturacion_nombre column
 * @method array findByGastofacturacionDescripcion(string $gastofacturacion_descripcion) Return Gastofacturacion objects filtered by the gastofacturacion_descripcion column
 *
 * @package    propel.generator.itrade_system.om
 */
abstract class BaseGastofacturacionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGastofacturacionQuery object.
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
            $modelName = 'Gastofacturacion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GastofacturacionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GastofacturacionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GastofacturacionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GastofacturacionQuery) {
            return $criteria;
        }
        $query = new GastofacturacionQuery(null, null, $modelAlias);

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
     * @return   Gastofacturacion|Gastofacturacion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GastofacturacionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GastofacturacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Gastofacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdgastofacturacion($key, $con = null)
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
     * @return                 Gastofacturacion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idgastofacturacion`, `gastofacturacion_nombre`, `gastofacturacion_descripcion` FROM `gastofacturacion` WHERE `idgastofacturacion` = :p0';
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
            $obj = new Gastofacturacion();
            $obj->hydrate($row);
            GastofacturacionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Gastofacturacion|Gastofacturacion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Gastofacturacion[]|mixed the list of results, formatted by the current formatter
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
     * @return GastofacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GastofacturacionPeer::IDGASTOFACTURACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GastofacturacionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GastofacturacionPeer::IDGASTOFACTURACION, $keys, Criteria::IN);
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
     * @param     mixed $idgastofacturacion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GastofacturacionQuery The current query, for fluid interface
     */
    public function filterByIdgastofacturacion($idgastofacturacion = null, $comparison = null)
    {
        if (is_array($idgastofacturacion)) {
            $useMinMax = false;
            if (isset($idgastofacturacion['min'])) {
                $this->addUsingAlias(GastofacturacionPeer::IDGASTOFACTURACION, $idgastofacturacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idgastofacturacion['max'])) {
                $this->addUsingAlias(GastofacturacionPeer::IDGASTOFACTURACION, $idgastofacturacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GastofacturacionPeer::IDGASTOFACTURACION, $idgastofacturacion, $comparison);
    }

    /**
     * Filter the query on the gastofacturacion_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByGastofacturacionNombre('fooValue');   // WHERE gastofacturacion_nombre = 'fooValue'
     * $query->filterByGastofacturacionNombre('%fooValue%'); // WHERE gastofacturacion_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gastofacturacionNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GastofacturacionQuery The current query, for fluid interface
     */
    public function filterByGastofacturacionNombre($gastofacturacionNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gastofacturacionNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gastofacturacionNombre)) {
                $gastofacturacionNombre = str_replace('*', '%', $gastofacturacionNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GastofacturacionPeer::GASTOFACTURACION_NOMBRE, $gastofacturacionNombre, $comparison);
    }

    /**
     * Filter the query on the gastofacturacion_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByGastofacturacionDescripcion('fooValue');   // WHERE gastofacturacion_descripcion = 'fooValue'
     * $query->filterByGastofacturacionDescripcion('%fooValue%'); // WHERE gastofacturacion_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gastofacturacionDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GastofacturacionQuery The current query, for fluid interface
     */
    public function filterByGastofacturacionDescripcion($gastofacturacionDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gastofacturacionDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gastofacturacionDescripcion)) {
                $gastofacturacionDescripcion = str_replace('*', '%', $gastofacturacionDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GastofacturacionPeer::GASTOFACTURACION_DESCRIPCION, $gastofacturacionDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Expedientegasto object
     *
     * @param   Expedientegasto|PropelObjectCollection $expedientegasto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GastofacturacionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedientegasto($expedientegasto, $comparison = null)
    {
        if ($expedientegasto instanceof Expedientegasto) {
            return $this
                ->addUsingAlias(GastofacturacionPeer::IDGASTOFACTURACION, $expedientegasto->getIdgastofacturacion(), $comparison);
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
     * @return GastofacturacionQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Gastofacturacion $gastofacturacion Object to remove from the list of results
     *
     * @return GastofacturacionQuery The current query, for fluid interface
     */
    public function prune($gastofacturacion = null)
    {
        if ($gastofacturacion) {
            $this->addUsingAlias(GastofacturacionPeer::IDGASTOFACTURACION, $gastofacturacion->getIdgastofacturacion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
