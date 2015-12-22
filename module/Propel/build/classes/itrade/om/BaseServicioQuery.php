<?php


/**
 * Base class that represents a query for the 'servicio' table.
 *
 *
 *
 * @method ServicioQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method ServicioQuery orderByServicioTipo($order = Criteria::ASC) Order by the servicio_tipo column
 * @method ServicioQuery orderByServicioMedio($order = Criteria::ASC) Order by the servicio_medio column
 * @method ServicioQuery orderByServicioNombre($order = Criteria::ASC) Order by the servicio_nombre column
 * @method ServicioQuery orderByServicioDescripcion($order = Criteria::ASC) Order by the servicio_descripcion column
 *
 * @method ServicioQuery groupByIdservicio() Group by the idservicio column
 * @method ServicioQuery groupByServicioTipo() Group by the servicio_tipo column
 * @method ServicioQuery groupByServicioMedio() Group by the servicio_medio column
 * @method ServicioQuery groupByServicioNombre() Group by the servicio_nombre column
 * @method ServicioQuery groupByServicioDescripcion() Group by the servicio_descripcion column
 *
 * @method ServicioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ServicioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ServicioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ServicioQuery leftJoinExpedienteservicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedienteservicio relation
 * @method ServicioQuery rightJoinExpedienteservicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedienteservicio relation
 * @method ServicioQuery innerJoinExpedienteservicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedienteservicio relation
 *
 * @method ServicioQuery leftJoinProveedoritradeservicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedoritradeservicio relation
 * @method ServicioQuery rightJoinProveedoritradeservicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedoritradeservicio relation
 * @method ServicioQuery innerJoinProveedoritradeservicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedoritradeservicio relation
 *
 * @method ServicioQuery leftJoinServicioestado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicioestado relation
 * @method ServicioQuery rightJoinServicioestado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicioestado relation
 * @method ServicioQuery innerJoinServicioestado($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicioestado relation
 *
 * @method Servicio findOne(PropelPDO $con = null) Return the first Servicio matching the query
 * @method Servicio findOneOrCreate(PropelPDO $con = null) Return the first Servicio matching the query, or a new Servicio object populated from the query conditions when no match is found
 *
 * @method Servicio findOneByServicioTipo(string $servicio_tipo) Return the first Servicio filtered by the servicio_tipo column
 * @method Servicio findOneByServicioMedio(string $servicio_medio) Return the first Servicio filtered by the servicio_medio column
 * @method Servicio findOneByServicioNombre(string $servicio_nombre) Return the first Servicio filtered by the servicio_nombre column
 * @method Servicio findOneByServicioDescripcion(string $servicio_descripcion) Return the first Servicio filtered by the servicio_descripcion column
 *
 * @method array findByIdservicio(int $idservicio) Return Servicio objects filtered by the idservicio column
 * @method array findByServicioTipo(string $servicio_tipo) Return Servicio objects filtered by the servicio_tipo column
 * @method array findByServicioMedio(string $servicio_medio) Return Servicio objects filtered by the servicio_medio column
 * @method array findByServicioNombre(string $servicio_nombre) Return Servicio objects filtered by the servicio_nombre column
 * @method array findByServicioDescripcion(string $servicio_descripcion) Return Servicio objects filtered by the servicio_descripcion column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseServicioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseServicioQuery object.
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
            $modelName = 'Servicio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ServicioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ServicioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ServicioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ServicioQuery) {
            return $criteria;
        }
        $query = new ServicioQuery(null, null, $modelAlias);

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
     * @return   Servicio|Servicio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ServicioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ServicioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Servicio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdservicio($key, $con = null)
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
     * @return                 Servicio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idservicio`, `servicio_tipo`, `servicio_medio`, `servicio_nombre`, `servicio_descripcion` FROM `servicio` WHERE `idservicio` = :p0';
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
            $obj = new Servicio();
            $obj->hydrate($row);
            ServicioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Servicio|Servicio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Servicio[]|mixed the list of results, formatted by the current formatter
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
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ServicioPeer::IDSERVICIO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ServicioPeer::IDSERVICIO, $keys, Criteria::IN);
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
     * @param     mixed $idservicio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(ServicioPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(ServicioPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the servicio_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioTipo('fooValue');   // WHERE servicio_tipo = 'fooValue'
     * $query->filterByServicioTipo('%fooValue%'); // WHERE servicio_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioTipo($servicioTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioTipo)) {
                $servicioTipo = str_replace('*', '%', $servicioTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_TIPO, $servicioTipo, $comparison);
    }

    /**
     * Filter the query on the servicio_medio column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioMedio('fooValue');   // WHERE servicio_medio = 'fooValue'
     * $query->filterByServicioMedio('%fooValue%'); // WHERE servicio_medio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioMedio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioMedio($servicioMedio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioMedio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioMedio)) {
                $servicioMedio = str_replace('*', '%', $servicioMedio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_MEDIO, $servicioMedio, $comparison);
    }

    /**
     * Filter the query on the servicio_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioNombre('fooValue');   // WHERE servicio_nombre = 'fooValue'
     * $query->filterByServicioNombre('%fooValue%'); // WHERE servicio_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioNombre($servicioNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioNombre)) {
                $servicioNombre = str_replace('*', '%', $servicioNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_NOMBRE, $servicioNombre, $comparison);
    }

    /**
     * Filter the query on the servicio_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioDescripcion('fooValue');   // WHERE servicio_descripcion = 'fooValue'
     * $query->filterByServicioDescripcion('%fooValue%'); // WHERE servicio_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function filterByServicioDescripcion($servicioDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioDescripcion)) {
                $servicioDescripcion = str_replace('*', '%', $servicioDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioPeer::SERVICIO_DESCRIPCION, $servicioDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Expedienteservicio object
     *
     * @param   Expedienteservicio|PropelObjectCollection $expedienteservicio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedienteservicio($expedienteservicio, $comparison = null)
    {
        if ($expedienteservicio instanceof Expedienteservicio) {
            return $this
                ->addUsingAlias(ServicioPeer::IDSERVICIO, $expedienteservicio->getIdservicio(), $comparison);
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
     * @return ServicioQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedoritradeservicio object
     *
     * @param   Proveedoritradeservicio|PropelObjectCollection $proveedoritradeservicio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedoritradeservicio($proveedoritradeservicio, $comparison = null)
    {
        if ($proveedoritradeservicio instanceof Proveedoritradeservicio) {
            return $this
                ->addUsingAlias(ServicioPeer::IDSERVICIO, $proveedoritradeservicio->getIdservicio(), $comparison);
        } elseif ($proveedoritradeservicio instanceof PropelObjectCollection) {
            return $this
                ->useProveedoritradeservicioQuery()
                ->filterByPrimaryKeys($proveedoritradeservicio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProveedoritradeservicio() only accepts arguments of type Proveedoritradeservicio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedoritradeservicio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function joinProveedoritradeservicio($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedoritradeservicio');

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
            $this->addJoinObject($join, 'Proveedoritradeservicio');
        }

        return $this;
    }

    /**
     * Use the Proveedoritradeservicio relation Proveedoritradeservicio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedoritradeservicioQuery A secondary query class using the current class as primary query
     */
    public function useProveedoritradeservicioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProveedoritradeservicio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedoritradeservicio', 'ProveedoritradeservicioQuery');
    }

    /**
     * Filter the query by a related Servicioestado object
     *
     * @param   Servicioestado|PropelObjectCollection $servicioestado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicioestado($servicioestado, $comparison = null)
    {
        if ($servicioestado instanceof Servicioestado) {
            return $this
                ->addUsingAlias(ServicioPeer::IDSERVICIO, $servicioestado->getIdservicio(), $comparison);
        } elseif ($servicioestado instanceof PropelObjectCollection) {
            return $this
                ->useServicioestadoQuery()
                ->filterByPrimaryKeys($servicioestado->getPrimaryKeys())
                ->endUse();
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
     * @return ServicioQuery The current query, for fluid interface
     */
    public function joinServicioestado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useServicioestadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinServicioestado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Servicioestado', 'ServicioestadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Servicio $servicio Object to remove from the list of results
     *
     * @return ServicioQuery The current query, for fluid interface
     */
    public function prune($servicio = null)
    {
        if ($servicio) {
            $this->addUsingAlias(ServicioPeer::IDSERVICIO, $servicio->getIdservicio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
