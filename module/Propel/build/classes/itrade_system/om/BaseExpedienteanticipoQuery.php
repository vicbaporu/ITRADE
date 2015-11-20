<?php


/**
 * Base class that represents a query for the 'expedienteanticipo' table.
 *
 *
 *
 * @method ExpedienteanticipoQuery orderByIdexpedienteanticipo($order = Criteria::ASC) Order by the idexpedienteanticipo column
 * @method ExpedienteanticipoQuery orderByExpedienteanticipoFecha($order = Criteria::ASC) Order by the expedienteanticipo_fecha column
 * @method ExpedienteanticipoQuery orderByIdexpediente($order = Criteria::ASC) Order by the idexpediente column
 * @method ExpedienteanticipoQuery orderByExpedienteanticipoCantidad($order = Criteria::ASC) Order by the expedienteanticipo_cantidad column
 * @method ExpedienteanticipoQuery orderByExpedienteanticipoMetodopago($order = Criteria::ASC) Order by the expedienteanticipo_metodopago column
 * @method ExpedienteanticipoQuery orderByExpedienteanticipoComprobante($order = Criteria::ASC) Order by the expedienteanticipo_comprobante column
 *
 * @method ExpedienteanticipoQuery groupByIdexpedienteanticipo() Group by the idexpedienteanticipo column
 * @method ExpedienteanticipoQuery groupByExpedienteanticipoFecha() Group by the expedienteanticipo_fecha column
 * @method ExpedienteanticipoQuery groupByIdexpediente() Group by the idexpediente column
 * @method ExpedienteanticipoQuery groupByExpedienteanticipoCantidad() Group by the expedienteanticipo_cantidad column
 * @method ExpedienteanticipoQuery groupByExpedienteanticipoMetodopago() Group by the expedienteanticipo_metodopago column
 * @method ExpedienteanticipoQuery groupByExpedienteanticipoComprobante() Group by the expedienteanticipo_comprobante column
 *
 * @method ExpedienteanticipoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExpedienteanticipoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExpedienteanticipoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExpedienteanticipoQuery leftJoinExpediente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expediente relation
 * @method ExpedienteanticipoQuery rightJoinExpediente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expediente relation
 * @method ExpedienteanticipoQuery innerJoinExpediente($relationAlias = null) Adds a INNER JOIN clause to the query using the Expediente relation
 *
 * @method Expedienteanticipo findOne(PropelPDO $con = null) Return the first Expedienteanticipo matching the query
 * @method Expedienteanticipo findOneOrCreate(PropelPDO $con = null) Return the first Expedienteanticipo matching the query, or a new Expedienteanticipo object populated from the query conditions when no match is found
 *
 * @method Expedienteanticipo findOneByExpedienteanticipoFecha(string $expedienteanticipo_fecha) Return the first Expedienteanticipo filtered by the expedienteanticipo_fecha column
 * @method Expedienteanticipo findOneByIdexpediente(int $idexpediente) Return the first Expedienteanticipo filtered by the idexpediente column
 * @method Expedienteanticipo findOneByExpedienteanticipoCantidad(string $expedienteanticipo_cantidad) Return the first Expedienteanticipo filtered by the expedienteanticipo_cantidad column
 * @method Expedienteanticipo findOneByExpedienteanticipoMetodopago(string $expedienteanticipo_metodopago) Return the first Expedienteanticipo filtered by the expedienteanticipo_metodopago column
 * @method Expedienteanticipo findOneByExpedienteanticipoComprobante(string $expedienteanticipo_comprobante) Return the first Expedienteanticipo filtered by the expedienteanticipo_comprobante column
 *
 * @method array findByIdexpedienteanticipo(int $idexpedienteanticipo) Return Expedienteanticipo objects filtered by the idexpedienteanticipo column
 * @method array findByExpedienteanticipoFecha(string $expedienteanticipo_fecha) Return Expedienteanticipo objects filtered by the expedienteanticipo_fecha column
 * @method array findByIdexpediente(int $idexpediente) Return Expedienteanticipo objects filtered by the idexpediente column
 * @method array findByExpedienteanticipoCantidad(string $expedienteanticipo_cantidad) Return Expedienteanticipo objects filtered by the expedienteanticipo_cantidad column
 * @method array findByExpedienteanticipoMetodopago(string $expedienteanticipo_metodopago) Return Expedienteanticipo objects filtered by the expedienteanticipo_metodopago column
 * @method array findByExpedienteanticipoComprobante(string $expedienteanticipo_comprobante) Return Expedienteanticipo objects filtered by the expedienteanticipo_comprobante column
 *
 * @package    propel.generator.itrade_system.om
 */
abstract class BaseExpedienteanticipoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExpedienteanticipoQuery object.
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
            $modelName = 'Expedienteanticipo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExpedienteanticipoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExpedienteanticipoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExpedienteanticipoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExpedienteanticipoQuery) {
            return $criteria;
        }
        $query = new ExpedienteanticipoQuery(null, null, $modelAlias);

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
     * @return   Expedienteanticipo|Expedienteanticipo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExpedienteanticipoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExpedienteanticipoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Expedienteanticipo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdexpedienteanticipo($key, $con = null)
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
     * @return                 Expedienteanticipo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idexpedienteanticipo`, `expedienteanticipo_fecha`, `idexpediente`, `expedienteanticipo_cantidad`, `expedienteanticipo_metodopago`, `expedienteanticipo_comprobante` FROM `expedienteanticipo` WHERE `idexpedienteanticipo` = :p0';
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
            $obj = new Expedienteanticipo();
            $obj->hydrate($row);
            ExpedienteanticipoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Expedienteanticipo|Expedienteanticipo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Expedienteanticipo[]|mixed the list of results, formatted by the current formatter
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
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idexpedienteanticipo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdexpedienteanticipo(1234); // WHERE idexpedienteanticipo = 1234
     * $query->filterByIdexpedienteanticipo(array(12, 34)); // WHERE idexpedienteanticipo IN (12, 34)
     * $query->filterByIdexpedienteanticipo(array('min' => 12)); // WHERE idexpedienteanticipo >= 12
     * $query->filterByIdexpedienteanticipo(array('max' => 12)); // WHERE idexpedienteanticipo <= 12
     * </code>
     *
     * @param     mixed $idexpedienteanticipo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function filterByIdexpedienteanticipo($idexpedienteanticipo = null, $comparison = null)
    {
        if (is_array($idexpedienteanticipo)) {
            $useMinMax = false;
            if (isset($idexpedienteanticipo['min'])) {
                $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO, $idexpedienteanticipo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpedienteanticipo['max'])) {
                $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO, $idexpedienteanticipo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO, $idexpedienteanticipo, $comparison);
    }

    /**
     * Filter the query on the expedienteanticipo_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteanticipoFecha('2011-03-14'); // WHERE expedienteanticipo_fecha = '2011-03-14'
     * $query->filterByExpedienteanticipoFecha('now'); // WHERE expedienteanticipo_fecha = '2011-03-14'
     * $query->filterByExpedienteanticipoFecha(array('max' => 'yesterday')); // WHERE expedienteanticipo_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $expedienteanticipoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function filterByExpedienteanticipoFecha($expedienteanticipoFecha = null, $comparison = null)
    {
        if (is_array($expedienteanticipoFecha)) {
            $useMinMax = false;
            if (isset($expedienteanticipoFecha['min'])) {
                $this->addUsingAlias(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_FECHA, $expedienteanticipoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedienteanticipoFecha['max'])) {
                $this->addUsingAlias(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_FECHA, $expedienteanticipoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_FECHA, $expedienteanticipoFecha, $comparison);
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
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function filterByIdexpediente($idexpediente = null, $comparison = null)
    {
        if (is_array($idexpediente)) {
            $useMinMax = false;
            if (isset($idexpediente['min'])) {
                $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTE, $idexpediente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idexpediente['max'])) {
                $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTE, $idexpediente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTE, $idexpediente, $comparison);
    }

    /**
     * Filter the query on the expedienteanticipo_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteanticipoCantidad(1234); // WHERE expedienteanticipo_cantidad = 1234
     * $query->filterByExpedienteanticipoCantidad(array(12, 34)); // WHERE expedienteanticipo_cantidad IN (12, 34)
     * $query->filterByExpedienteanticipoCantidad(array('min' => 12)); // WHERE expedienteanticipo_cantidad >= 12
     * $query->filterByExpedienteanticipoCantidad(array('max' => 12)); // WHERE expedienteanticipo_cantidad <= 12
     * </code>
     *
     * @param     mixed $expedienteanticipoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function filterByExpedienteanticipoCantidad($expedienteanticipoCantidad = null, $comparison = null)
    {
        if (is_array($expedienteanticipoCantidad)) {
            $useMinMax = false;
            if (isset($expedienteanticipoCantidad['min'])) {
                $this->addUsingAlias(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_CANTIDAD, $expedienteanticipoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expedienteanticipoCantidad['max'])) {
                $this->addUsingAlias(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_CANTIDAD, $expedienteanticipoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_CANTIDAD, $expedienteanticipoCantidad, $comparison);
    }

    /**
     * Filter the query on the expedienteanticipo_metodopago column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteanticipoMetodopago('fooValue');   // WHERE expedienteanticipo_metodopago = 'fooValue'
     * $query->filterByExpedienteanticipoMetodopago('%fooValue%'); // WHERE expedienteanticipo_metodopago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteanticipoMetodopago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function filterByExpedienteanticipoMetodopago($expedienteanticipoMetodopago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteanticipoMetodopago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteanticipoMetodopago)) {
                $expedienteanticipoMetodopago = str_replace('*', '%', $expedienteanticipoMetodopago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_METODOPAGO, $expedienteanticipoMetodopago, $comparison);
    }

    /**
     * Filter the query on the expedienteanticipo_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByExpedienteanticipoComprobante('fooValue');   // WHERE expedienteanticipo_comprobante = 'fooValue'
     * $query->filterByExpedienteanticipoComprobante('%fooValue%'); // WHERE expedienteanticipo_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expedienteanticipoComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function filterByExpedienteanticipoComprobante($expedienteanticipoComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expedienteanticipoComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expedienteanticipoComprobante)) {
                $expedienteanticipoComprobante = str_replace('*', '%', $expedienteanticipoComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExpedienteanticipoPeer::EXPEDIENTEANTICIPO_COMPROBANTE, $expedienteanticipoComprobante, $comparison);
    }

    /**
     * Filter the query by a related Expediente object
     *
     * @param   Expediente|PropelObjectCollection $expediente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExpedienteanticipoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpediente($expediente, $comparison = null)
    {
        if ($expediente instanceof Expediente) {
            return $this
                ->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTE, $expediente->getIdexpediente(), $comparison);
        } elseif ($expediente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTE, $expediente->toKeyValue('PrimaryKey', 'Idexpediente'), $comparison);
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
     * @return ExpedienteanticipoQuery The current query, for fluid interface
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
     * @param   Expedienteanticipo $expedienteanticipo Object to remove from the list of results
     *
     * @return ExpedienteanticipoQuery The current query, for fluid interface
     */
    public function prune($expedienteanticipo = null)
    {
        if ($expedienteanticipo) {
            $this->addUsingAlias(ExpedienteanticipoPeer::IDEXPEDIENTEANTICIPO, $expedienteanticipo->getIdexpedienteanticipo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
