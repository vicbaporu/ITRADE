<?php


/**
 * Base class that represents a query for the 'categoriagasto' table.
 *
 *
 *
 * @method CategoriagastoQuery orderByIdcategoriagasto($order = Criteria::ASC) Order by the idcategoriagasto column
 * @method CategoriagastoQuery orderByCategoriagastoNombre($order = Criteria::ASC) Order by the categoriagasto_nombre column
 * @method CategoriagastoQuery orderByCategoriagastoDescripcion($order = Criteria::ASC) Order by the categoriagasto_descripcion column
 *
 * @method CategoriagastoQuery groupByIdcategoriagasto() Group by the idcategoriagasto column
 * @method CategoriagastoQuery groupByCategoriagastoNombre() Group by the categoriagasto_nombre column
 * @method CategoriagastoQuery groupByCategoriagastoDescripcion() Group by the categoriagasto_descripcion column
 *
 * @method CategoriagastoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CategoriagastoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CategoriagastoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CategoriagastoQuery leftJoinGastofacturacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Gastofacturacion relation
 * @method CategoriagastoQuery rightJoinGastofacturacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Gastofacturacion relation
 * @method CategoriagastoQuery innerJoinGastofacturacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Gastofacturacion relation
 *
 * @method Categoriagasto findOne(PropelPDO $con = null) Return the first Categoriagasto matching the query
 * @method Categoriagasto findOneOrCreate(PropelPDO $con = null) Return the first Categoriagasto matching the query, or a new Categoriagasto object populated from the query conditions when no match is found
 *
 * @method Categoriagasto findOneByCategoriagastoNombre(string $categoriagasto_nombre) Return the first Categoriagasto filtered by the categoriagasto_nombre column
 * @method Categoriagasto findOneByCategoriagastoDescripcion(string $categoriagasto_descripcion) Return the first Categoriagasto filtered by the categoriagasto_descripcion column
 *
 * @method array findByIdcategoriagasto(int $idcategoriagasto) Return Categoriagasto objects filtered by the idcategoriagasto column
 * @method array findByCategoriagastoNombre(string $categoriagasto_nombre) Return Categoriagasto objects filtered by the categoriagasto_nombre column
 * @method array findByCategoriagastoDescripcion(string $categoriagasto_descripcion) Return Categoriagasto objects filtered by the categoriagasto_descripcion column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseCategoriagastoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCategoriagastoQuery object.
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
            $modelName = 'Categoriagasto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CategoriagastoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CategoriagastoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CategoriagastoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CategoriagastoQuery) {
            return $criteria;
        }
        $query = new CategoriagastoQuery(null, null, $modelAlias);

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
     * @return   Categoriagasto|Categoriagasto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CategoriagastoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CategoriagastoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Categoriagasto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcategoriagasto($key, $con = null)
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
     * @return                 Categoriagasto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcategoriagasto`, `categoriagasto_nombre`, `categoriagasto_descripcion` FROM `categoriagasto` WHERE `idcategoriagasto` = :p0';
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
            $obj = new Categoriagasto();
            $obj->hydrate($row);
            CategoriagastoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Categoriagasto|Categoriagasto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Categoriagasto[]|mixed the list of results, formatted by the current formatter
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
     * @return CategoriagastoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CategoriagastoPeer::IDCATEGORIAGASTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CategoriagastoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CategoriagastoPeer::IDCATEGORIAGASTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcategoriagasto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcategoriagasto(1234); // WHERE idcategoriagasto = 1234
     * $query->filterByIdcategoriagasto(array(12, 34)); // WHERE idcategoriagasto IN (12, 34)
     * $query->filterByIdcategoriagasto(array('min' => 12)); // WHERE idcategoriagasto >= 12
     * $query->filterByIdcategoriagasto(array('max' => 12)); // WHERE idcategoriagasto <= 12
     * </code>
     *
     * @param     mixed $idcategoriagasto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CategoriagastoQuery The current query, for fluid interface
     */
    public function filterByIdcategoriagasto($idcategoriagasto = null, $comparison = null)
    {
        if (is_array($idcategoriagasto)) {
            $useMinMax = false;
            if (isset($idcategoriagasto['min'])) {
                $this->addUsingAlias(CategoriagastoPeer::IDCATEGORIAGASTO, $idcategoriagasto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcategoriagasto['max'])) {
                $this->addUsingAlias(CategoriagastoPeer::IDCATEGORIAGASTO, $idcategoriagasto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CategoriagastoPeer::IDCATEGORIAGASTO, $idcategoriagasto, $comparison);
    }

    /**
     * Filter the query on the categoriagasto_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoriagastoNombre('fooValue');   // WHERE categoriagasto_nombre = 'fooValue'
     * $query->filterByCategoriagastoNombre('%fooValue%'); // WHERE categoriagasto_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categoriagastoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CategoriagastoQuery The current query, for fluid interface
     */
    public function filterByCategoriagastoNombre($categoriagastoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categoriagastoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categoriagastoNombre)) {
                $categoriagastoNombre = str_replace('*', '%', $categoriagastoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CategoriagastoPeer::CATEGORIAGASTO_NOMBRE, $categoriagastoNombre, $comparison);
    }

    /**
     * Filter the query on the categoriagasto_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoriagastoDescripcion('fooValue');   // WHERE categoriagasto_descripcion = 'fooValue'
     * $query->filterByCategoriagastoDescripcion('%fooValue%'); // WHERE categoriagasto_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categoriagastoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CategoriagastoQuery The current query, for fluid interface
     */
    public function filterByCategoriagastoDescripcion($categoriagastoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categoriagastoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categoriagastoDescripcion)) {
                $categoriagastoDescripcion = str_replace('*', '%', $categoriagastoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CategoriagastoPeer::CATEGORIAGASTO_DESCRIPCION, $categoriagastoDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Gastofacturacion object
     *
     * @param   Gastofacturacion|PropelObjectCollection $gastofacturacion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CategoriagastoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGastofacturacion($gastofacturacion, $comparison = null)
    {
        if ($gastofacturacion instanceof Gastofacturacion) {
            return $this
                ->addUsingAlias(CategoriagastoPeer::IDCATEGORIAGASTO, $gastofacturacion->getIdcategoriagasto(), $comparison);
        } elseif ($gastofacturacion instanceof PropelObjectCollection) {
            return $this
                ->useGastofacturacionQuery()
                ->filterByPrimaryKeys($gastofacturacion->getPrimaryKeys())
                ->endUse();
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
     * @return CategoriagastoQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Categoriagasto $categoriagasto Object to remove from the list of results
     *
     * @return CategoriagastoQuery The current query, for fluid interface
     */
    public function prune($categoriagasto = null)
    {
        if ($categoriagasto) {
            $this->addUsingAlias(CategoriagastoPeer::IDCATEGORIAGASTO, $categoriagasto->getIdcategoriagasto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
