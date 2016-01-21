<?php


/**
 * Base class that represents a query for the 'proveedoritradearchivo' table.
 *
 *
 *
 * @method ProveedoritradearchivoQuery orderByIdproveedoritradearchivo($order = Criteria::ASC) Order by the idproveedoritradearchivo column
 * @method ProveedoritradearchivoQuery orderByIdproveedoritrade($order = Criteria::ASC) Order by the idproveedoritrade column
 * @method ProveedoritradearchivoQuery orderByProveedoritradearchivoArchivo($order = Criteria::ASC) Order by the proveedoritradearchivo_archivo column
 * @method ProveedoritradearchivoQuery orderByProveedoritradearchivoSize($order = Criteria::ASC) Order by the proveedoritradearchivo_size column
 *
 * @method ProveedoritradearchivoQuery groupByIdproveedoritradearchivo() Group by the idproveedoritradearchivo column
 * @method ProveedoritradearchivoQuery groupByIdproveedoritrade() Group by the idproveedoritrade column
 * @method ProveedoritradearchivoQuery groupByProveedoritradearchivoArchivo() Group by the proveedoritradearchivo_archivo column
 * @method ProveedoritradearchivoQuery groupByProveedoritradearchivoSize() Group by the proveedoritradearchivo_size column
 *
 * @method ProveedoritradearchivoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedoritradearchivoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedoritradearchivoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedoritradearchivoQuery leftJoinProveedoritrade($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedoritrade relation
 * @method ProveedoritradearchivoQuery rightJoinProveedoritrade($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedoritrade relation
 * @method ProveedoritradearchivoQuery innerJoinProveedoritrade($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedoritrade relation
 *
 * @method Proveedoritradearchivo findOne(PropelPDO $con = null) Return the first Proveedoritradearchivo matching the query
 * @method Proveedoritradearchivo findOneOrCreate(PropelPDO $con = null) Return the first Proveedoritradearchivo matching the query, or a new Proveedoritradearchivo object populated from the query conditions when no match is found
 *
 * @method Proveedoritradearchivo findOneByIdproveedoritrade(int $idproveedoritrade) Return the first Proveedoritradearchivo filtered by the idproveedoritrade column
 * @method Proveedoritradearchivo findOneByProveedoritradearchivoArchivo(string $proveedoritradearchivo_archivo) Return the first Proveedoritradearchivo filtered by the proveedoritradearchivo_archivo column
 * @method Proveedoritradearchivo findOneByProveedoritradearchivoSize(string $proveedoritradearchivo_size) Return the first Proveedoritradearchivo filtered by the proveedoritradearchivo_size column
 *
 * @method array findByIdproveedoritradearchivo(int $idproveedoritradearchivo) Return Proveedoritradearchivo objects filtered by the idproveedoritradearchivo column
 * @method array findByIdproveedoritrade(int $idproveedoritrade) Return Proveedoritradearchivo objects filtered by the idproveedoritrade column
 * @method array findByProveedoritradearchivoArchivo(string $proveedoritradearchivo_archivo) Return Proveedoritradearchivo objects filtered by the proveedoritradearchivo_archivo column
 * @method array findByProveedoritradearchivoSize(string $proveedoritradearchivo_size) Return Proveedoritradearchivo objects filtered by the proveedoritradearchivo_size column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseProveedoritradearchivoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedoritradearchivoQuery object.
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
            $modelName = 'Proveedoritradearchivo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedoritradearchivoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedoritradearchivoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedoritradearchivoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedoritradearchivoQuery) {
            return $criteria;
        }
        $query = new ProveedoritradearchivoQuery(null, null, $modelAlias);

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
     * @return   Proveedoritradearchivo|Proveedoritradearchivo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedoritradearchivoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedoritradearchivo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedoritradearchivo($key, $con = null)
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
     * @return                 Proveedoritradearchivo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedoritradearchivo`, `idproveedoritrade`, `proveedoritradearchivo_archivo`, `proveedoritradearchivo_size` FROM `proveedoritradearchivo` WHERE `idproveedoritradearchivo` = :p0';
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
            $obj = new Proveedoritradearchivo();
            $obj->hydrate($row);
            ProveedoritradearchivoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedoritradearchivo|Proveedoritradearchivo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedoritradearchivo[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedoritradearchivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADEARCHIVO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedoritradearchivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADEARCHIVO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproveedoritradearchivo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedoritradearchivo(1234); // WHERE idproveedoritradearchivo = 1234
     * $query->filterByIdproveedoritradearchivo(array(12, 34)); // WHERE idproveedoritradearchivo IN (12, 34)
     * $query->filterByIdproveedoritradearchivo(array('min' => 12)); // WHERE idproveedoritradearchivo >= 12
     * $query->filterByIdproveedoritradearchivo(array('max' => 12)); // WHERE idproveedoritradearchivo <= 12
     * </code>
     *
     * @param     mixed $idproveedoritradearchivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradearchivoQuery The current query, for fluid interface
     */
    public function filterByIdproveedoritradearchivo($idproveedoritradearchivo = null, $comparison = null)
    {
        if (is_array($idproveedoritradearchivo)) {
            $useMinMax = false;
            if (isset($idproveedoritradearchivo['min'])) {
                $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADEARCHIVO, $idproveedoritradearchivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedoritradearchivo['max'])) {
                $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADEARCHIVO, $idproveedoritradearchivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADEARCHIVO, $idproveedoritradearchivo, $comparison);
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
     * @return ProveedoritradearchivoQuery The current query, for fluid interface
     */
    public function filterByIdproveedoritrade($idproveedoritrade = null, $comparison = null)
    {
        if (is_array($idproveedoritrade)) {
            $useMinMax = false;
            if (isset($idproveedoritrade['min'])) {
                $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADE, $idproveedoritrade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedoritrade['max'])) {
                $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADE, $idproveedoritrade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADE, $idproveedoritrade, $comparison);
    }

    /**
     * Filter the query on the proveedoritradearchivo_archivo column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradearchivoArchivo('fooValue');   // WHERE proveedoritradearchivo_archivo = 'fooValue'
     * $query->filterByProveedoritradearchivoArchivo('%fooValue%'); // WHERE proveedoritradearchivo_archivo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradearchivoArchivo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradearchivoQuery The current query, for fluid interface
     */
    public function filterByProveedoritradearchivoArchivo($proveedoritradearchivoArchivo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradearchivoArchivo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradearchivoArchivo)) {
                $proveedoritradearchivoArchivo = str_replace('*', '%', $proveedoritradearchivoArchivo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradearchivoPeer::PROVEEDORITRADEARCHIVO_ARCHIVO, $proveedoritradearchivoArchivo, $comparison);
    }

    /**
     * Filter the query on the proveedoritradearchivo_size column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradearchivoSize('fooValue');   // WHERE proveedoritradearchivo_size = 'fooValue'
     * $query->filterByProveedoritradearchivoSize('%fooValue%'); // WHERE proveedoritradearchivo_size LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradearchivoSize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradearchivoQuery The current query, for fluid interface
     */
    public function filterByProveedoritradearchivoSize($proveedoritradearchivoSize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradearchivoSize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradearchivoSize)) {
                $proveedoritradearchivoSize = str_replace('*', '%', $proveedoritradearchivoSize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradearchivoPeer::PROVEEDORITRADEARCHIVO_SIZE, $proveedoritradearchivoSize, $comparison);
    }

    /**
     * Filter the query by a related Proveedoritrade object
     *
     * @param   Proveedoritrade|PropelObjectCollection $proveedoritrade The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedoritradearchivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedoritrade($proveedoritrade, $comparison = null)
    {
        if ($proveedoritrade instanceof Proveedoritrade) {
            return $this
                ->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADE, $proveedoritrade->getIdproveedoritrade(), $comparison);
        } elseif ($proveedoritrade instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADE, $proveedoritrade->toKeyValue('PrimaryKey', 'Idproveedoritrade'), $comparison);
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
     * @return ProveedoritradearchivoQuery The current query, for fluid interface
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
     * @param   Proveedoritradearchivo $proveedoritradearchivo Object to remove from the list of results
     *
     * @return ProveedoritradearchivoQuery The current query, for fluid interface
     */
    public function prune($proveedoritradearchivo = null)
    {
        if ($proveedoritradearchivo) {
            $this->addUsingAlias(ProveedoritradearchivoPeer::IDPROVEEDORITRADEARCHIVO, $proveedoritradearchivo->getIdproveedoritradearchivo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
