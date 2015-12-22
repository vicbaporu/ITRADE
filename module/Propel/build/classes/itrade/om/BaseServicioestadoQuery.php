<?php


/**
 * Base class that represents a query for the 'servicioestado' table.
 *
 *
 *
 * @method ServicioestadoQuery orderByIdservicioestado($order = Criteria::ASC) Order by the idservicioestado column
 * @method ServicioestadoQuery orderByIdservicio($order = Criteria::ASC) Order by the idservicio column
 * @method ServicioestadoQuery orderByServicioestadoNombre($order = Criteria::ASC) Order by the servicioestado_nombre column
 * @method ServicioestadoQuery orderByServicioestadoComodin($order = Criteria::ASC) Order by the servicioestado_comodin column
 * @method ServicioestadoQuery orderByServicioestadoJerarquia($order = Criteria::ASC) Order by the servicioestado_jerarquia column
 *
 * @method ServicioestadoQuery groupByIdservicioestado() Group by the idservicioestado column
 * @method ServicioestadoQuery groupByIdservicio() Group by the idservicio column
 * @method ServicioestadoQuery groupByServicioestadoNombre() Group by the servicioestado_nombre column
 * @method ServicioestadoQuery groupByServicioestadoComodin() Group by the servicioestado_comodin column
 * @method ServicioestadoQuery groupByServicioestadoJerarquia() Group by the servicioestado_jerarquia column
 *
 * @method ServicioestadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ServicioestadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ServicioestadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ServicioestadoQuery leftJoinServicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Servicio relation
 * @method ServicioestadoQuery rightJoinServicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Servicio relation
 * @method ServicioestadoQuery innerJoinServicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Servicio relation
 *
 * @method ServicioestadoQuery leftJoinExpedientehistorial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedientehistorial relation
 * @method ServicioestadoQuery rightJoinExpedientehistorial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedientehistorial relation
 * @method ServicioestadoQuery innerJoinExpedientehistorial($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedientehistorial relation
 *
 * @method Servicioestado findOne(PropelPDO $con = null) Return the first Servicioestado matching the query
 * @method Servicioestado findOneOrCreate(PropelPDO $con = null) Return the first Servicioestado matching the query, or a new Servicioestado object populated from the query conditions when no match is found
 *
 * @method Servicioestado findOneByIdservicio(int $idservicio) Return the first Servicioestado filtered by the idservicio column
 * @method Servicioestado findOneByServicioestadoNombre(string $servicioestado_nombre) Return the first Servicioestado filtered by the servicioestado_nombre column
 * @method Servicioestado findOneByServicioestadoComodin(boolean $servicioestado_comodin) Return the first Servicioestado filtered by the servicioestado_comodin column
 * @method Servicioestado findOneByServicioestadoJerarquia(int $servicioestado_jerarquia) Return the first Servicioestado filtered by the servicioestado_jerarquia column
 *
 * @method array findByIdservicioestado(int $idservicioestado) Return Servicioestado objects filtered by the idservicioestado column
 * @method array findByIdservicio(int $idservicio) Return Servicioestado objects filtered by the idservicio column
 * @method array findByServicioestadoNombre(string $servicioestado_nombre) Return Servicioestado objects filtered by the servicioestado_nombre column
 * @method array findByServicioestadoComodin(boolean $servicioestado_comodin) Return Servicioestado objects filtered by the servicioestado_comodin column
 * @method array findByServicioestadoJerarquia(int $servicioestado_jerarquia) Return Servicioestado objects filtered by the servicioestado_jerarquia column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseServicioestadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseServicioestadoQuery object.
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
            $modelName = 'Servicioestado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ServicioestadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ServicioestadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ServicioestadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ServicioestadoQuery) {
            return $criteria;
        }
        $query = new ServicioestadoQuery(null, null, $modelAlias);

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
     * @return   Servicioestado|Servicioestado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ServicioestadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ServicioestadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Servicioestado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdservicioestado($key, $con = null)
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
     * @return                 Servicioestado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idservicioestado`, `idservicio`, `servicioestado_nombre`, `servicioestado_comodin`, `servicioestado_jerarquia` FROM `servicioestado` WHERE `idservicioestado` = :p0';
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
            $obj = new Servicioestado();
            $obj->hydrate($row);
            ServicioestadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Servicioestado|Servicioestado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Servicioestado[]|mixed the list of results, formatted by the current formatter
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
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ServicioestadoPeer::IDSERVICIOESTADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ServicioestadoPeer::IDSERVICIOESTADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idservicioestado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservicioestado(1234); // WHERE idservicioestado = 1234
     * $query->filterByIdservicioestado(array(12, 34)); // WHERE idservicioestado IN (12, 34)
     * $query->filterByIdservicioestado(array('min' => 12)); // WHERE idservicioestado >= 12
     * $query->filterByIdservicioestado(array('max' => 12)); // WHERE idservicioestado <= 12
     * </code>
     *
     * @param     mixed $idservicioestado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function filterByIdservicioestado($idservicioestado = null, $comparison = null)
    {
        if (is_array($idservicioestado)) {
            $useMinMax = false;
            if (isset($idservicioestado['min'])) {
                $this->addUsingAlias(ServicioestadoPeer::IDSERVICIOESTADO, $idservicioestado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicioestado['max'])) {
                $this->addUsingAlias(ServicioestadoPeer::IDSERVICIOESTADO, $idservicioestado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioestadoPeer::IDSERVICIOESTADO, $idservicioestado, $comparison);
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
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function filterByIdservicio($idservicio = null, $comparison = null)
    {
        if (is_array($idservicio)) {
            $useMinMax = false;
            if (isset($idservicio['min'])) {
                $this->addUsingAlias(ServicioestadoPeer::IDSERVICIO, $idservicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservicio['max'])) {
                $this->addUsingAlias(ServicioestadoPeer::IDSERVICIO, $idservicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioestadoPeer::IDSERVICIO, $idservicio, $comparison);
    }

    /**
     * Filter the query on the servicioestado_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioestadoNombre('fooValue');   // WHERE servicioestado_nombre = 'fooValue'
     * $query->filterByServicioestadoNombre('%fooValue%'); // WHERE servicioestado_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $servicioestadoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function filterByServicioestadoNombre($servicioestadoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($servicioestadoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $servicioestadoNombre)) {
                $servicioestadoNombre = str_replace('*', '%', $servicioestadoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicioestadoPeer::SERVICIOESTADO_NOMBRE, $servicioestadoNombre, $comparison);
    }

    /**
     * Filter the query on the servicioestado_comodin column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioestadoComodin(true); // WHERE servicioestado_comodin = true
     * $query->filterByServicioestadoComodin('yes'); // WHERE servicioestado_comodin = true
     * </code>
     *
     * @param     boolean|string $servicioestadoComodin The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function filterByServicioestadoComodin($servicioestadoComodin = null, $comparison = null)
    {
        if (is_string($servicioestadoComodin)) {
            $servicioestadoComodin = in_array(strtolower($servicioestadoComodin), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServicioestadoPeer::SERVICIOESTADO_COMODIN, $servicioestadoComodin, $comparison);
    }

    /**
     * Filter the query on the servicioestado_jerarquia column
     *
     * Example usage:
     * <code>
     * $query->filterByServicioestadoJerarquia(1234); // WHERE servicioestado_jerarquia = 1234
     * $query->filterByServicioestadoJerarquia(array(12, 34)); // WHERE servicioestado_jerarquia IN (12, 34)
     * $query->filterByServicioestadoJerarquia(array('min' => 12)); // WHERE servicioestado_jerarquia >= 12
     * $query->filterByServicioestadoJerarquia(array('max' => 12)); // WHERE servicioestado_jerarquia <= 12
     * </code>
     *
     * @param     mixed $servicioestadoJerarquia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function filterByServicioestadoJerarquia($servicioestadoJerarquia = null, $comparison = null)
    {
        if (is_array($servicioestadoJerarquia)) {
            $useMinMax = false;
            if (isset($servicioestadoJerarquia['min'])) {
                $this->addUsingAlias(ServicioestadoPeer::SERVICIOESTADO_JERARQUIA, $servicioestadoJerarquia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($servicioestadoJerarquia['max'])) {
                $this->addUsingAlias(ServicioestadoPeer::SERVICIOESTADO_JERARQUIA, $servicioestadoJerarquia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicioestadoPeer::SERVICIOESTADO_JERARQUIA, $servicioestadoJerarquia, $comparison);
    }

    /**
     * Filter the query by a related Servicio object
     *
     * @param   Servicio|PropelObjectCollection $servicio The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioestadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServicio($servicio, $comparison = null)
    {
        if ($servicio instanceof Servicio) {
            return $this
                ->addUsingAlias(ServicioestadoPeer::IDSERVICIO, $servicio->getIdservicio(), $comparison);
        } elseif ($servicio instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ServicioestadoPeer::IDSERVICIO, $servicio->toKeyValue('PrimaryKey', 'Idservicio'), $comparison);
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
     * @return ServicioestadoQuery The current query, for fluid interface
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
     * Filter the query by a related Expedientehistorial object
     *
     * @param   Expedientehistorial|PropelObjectCollection $expedientehistorial  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServicioestadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedientehistorial($expedientehistorial, $comparison = null)
    {
        if ($expedientehistorial instanceof Expedientehistorial) {
            return $this
                ->addUsingAlias(ServicioestadoPeer::IDSERVICIOESTADO, $expedientehistorial->getIdestadoservicio(), $comparison);
        } elseif ($expedientehistorial instanceof PropelObjectCollection) {
            return $this
                ->useExpedientehistorialQuery()
                ->filterByPrimaryKeys($expedientehistorial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExpedientehistorial() only accepts arguments of type Expedientehistorial or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expedientehistorial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function joinExpedientehistorial($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expedientehistorial');

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
            $this->addJoinObject($join, 'Expedientehistorial');
        }

        return $this;
    }

    /**
     * Use the Expedientehistorial relation Expedientehistorial object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedientehistorialQuery A secondary query class using the current class as primary query
     */
    public function useExpedientehistorialQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinExpedientehistorial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expedientehistorial', 'ExpedientehistorialQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Servicioestado $servicioestado Object to remove from the list of results
     *
     * @return ServicioestadoQuery The current query, for fluid interface
     */
    public function prune($servicioestado = null)
    {
        if ($servicioestado) {
            $this->addUsingAlias(ServicioestadoPeer::IDSERVICIOESTADO, $servicioestado->getIdservicioestado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
