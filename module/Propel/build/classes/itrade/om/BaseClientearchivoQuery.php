<?php


/**
 * Base class that represents a query for the 'clientearchivo' table.
 *
 *
 *
 * @method ClientearchivoQuery orderByIdclientearchivo($order = Criteria::ASC) Order by the idclientearchivo column
 * @method ClientearchivoQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method ClientearchivoQuery orderByClientearchivoArchivo($order = Criteria::ASC) Order by the clientearchivo_archivo column
 * @method ClientearchivoQuery orderByClientearchivoSize($order = Criteria::ASC) Order by the clientearchivo_size column
 *
 * @method ClientearchivoQuery groupByIdclientearchivo() Group by the idclientearchivo column
 * @method ClientearchivoQuery groupByIdcliente() Group by the idcliente column
 * @method ClientearchivoQuery groupByClientearchivoArchivo() Group by the clientearchivo_archivo column
 * @method ClientearchivoQuery groupByClientearchivoSize() Group by the clientearchivo_size column
 *
 * @method ClientearchivoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClientearchivoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClientearchivoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClientearchivoQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method ClientearchivoQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method ClientearchivoQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method Clientearchivo findOne(PropelPDO $con = null) Return the first Clientearchivo matching the query
 * @method Clientearchivo findOneOrCreate(PropelPDO $con = null) Return the first Clientearchivo matching the query, or a new Clientearchivo object populated from the query conditions when no match is found
 *
 * @method Clientearchivo findOneByIdcliente(int $idcliente) Return the first Clientearchivo filtered by the idcliente column
 * @method Clientearchivo findOneByClientearchivoArchivo(string $clientearchivo_archivo) Return the first Clientearchivo filtered by the clientearchivo_archivo column
 * @method Clientearchivo findOneByClientearchivoSize(string $clientearchivo_size) Return the first Clientearchivo filtered by the clientearchivo_size column
 *
 * @method array findByIdclientearchivo(int $idclientearchivo) Return Clientearchivo objects filtered by the idclientearchivo column
 * @method array findByIdcliente(int $idcliente) Return Clientearchivo objects filtered by the idcliente column
 * @method array findByClientearchivoArchivo(string $clientearchivo_archivo) Return Clientearchivo objects filtered by the clientearchivo_archivo column
 * @method array findByClientearchivoSize(string $clientearchivo_size) Return Clientearchivo objects filtered by the clientearchivo_size column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseClientearchivoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClientearchivoQuery object.
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
            $modelName = 'Clientearchivo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClientearchivoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClientearchivoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClientearchivoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClientearchivoQuery) {
            return $criteria;
        }
        $query = new ClientearchivoQuery(null, null, $modelAlias);

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
     * @return   Clientearchivo|Clientearchivo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientearchivoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientearchivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Clientearchivo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdclientearchivo($key, $con = null)
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
     * @return                 Clientearchivo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idclientearchivo`, `idcliente`, `clientearchivo_archivo`, `clientearchivo_size` FROM `clientearchivo` WHERE `idclientearchivo` = :p0';
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
            $obj = new Clientearchivo();
            $obj->hydrate($row);
            ClientearchivoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Clientearchivo|Clientearchivo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Clientearchivo[]|mixed the list of results, formatted by the current formatter
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
     * @return ClientearchivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientearchivoPeer::IDCLIENTEARCHIVO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClientearchivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientearchivoPeer::IDCLIENTEARCHIVO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idclientearchivo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdclientearchivo(1234); // WHERE idclientearchivo = 1234
     * $query->filterByIdclientearchivo(array(12, 34)); // WHERE idclientearchivo IN (12, 34)
     * $query->filterByIdclientearchivo(array('min' => 12)); // WHERE idclientearchivo >= 12
     * $query->filterByIdclientearchivo(array('max' => 12)); // WHERE idclientearchivo <= 12
     * </code>
     *
     * @param     mixed $idclientearchivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientearchivoQuery The current query, for fluid interface
     */
    public function filterByIdclientearchivo($idclientearchivo = null, $comparison = null)
    {
        if (is_array($idclientearchivo)) {
            $useMinMax = false;
            if (isset($idclientearchivo['min'])) {
                $this->addUsingAlias(ClientearchivoPeer::IDCLIENTEARCHIVO, $idclientearchivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclientearchivo['max'])) {
                $this->addUsingAlias(ClientearchivoPeer::IDCLIENTEARCHIVO, $idclientearchivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientearchivoPeer::IDCLIENTEARCHIVO, $idclientearchivo, $comparison);
    }

    /**
     * Filter the query on the idcliente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcliente(1234); // WHERE idcliente = 1234
     * $query->filterByIdcliente(array(12, 34)); // WHERE idcliente IN (12, 34)
     * $query->filterByIdcliente(array('min' => 12)); // WHERE idcliente >= 12
     * $query->filterByIdcliente(array('max' => 12)); // WHERE idcliente <= 12
     * </code>
     *
     * @see       filterByCliente()
     *
     * @param     mixed $idcliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientearchivoQuery The current query, for fluid interface
     */
    public function filterByIdcliente($idcliente = null, $comparison = null)
    {
        if (is_array($idcliente)) {
            $useMinMax = false;
            if (isset($idcliente['min'])) {
                $this->addUsingAlias(ClientearchivoPeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcliente['max'])) {
                $this->addUsingAlias(ClientearchivoPeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientearchivoPeer::IDCLIENTE, $idcliente, $comparison);
    }

    /**
     * Filter the query on the clientearchivo_archivo column
     *
     * Example usage:
     * <code>
     * $query->filterByClientearchivoArchivo('fooValue');   // WHERE clientearchivo_archivo = 'fooValue'
     * $query->filterByClientearchivoArchivo('%fooValue%'); // WHERE clientearchivo_archivo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clientearchivoArchivo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientearchivoQuery The current query, for fluid interface
     */
    public function filterByClientearchivoArchivo($clientearchivoArchivo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clientearchivoArchivo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clientearchivoArchivo)) {
                $clientearchivoArchivo = str_replace('*', '%', $clientearchivoArchivo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientearchivoPeer::CLIENTEARCHIVO_ARCHIVO, $clientearchivoArchivo, $comparison);
    }

    /**
     * Filter the query on the clientearchivo_size column
     *
     * Example usage:
     * <code>
     * $query->filterByClientearchivoSize('fooValue');   // WHERE clientearchivo_size = 'fooValue'
     * $query->filterByClientearchivoSize('%fooValue%'); // WHERE clientearchivo_size LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clientearchivoSize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClientearchivoQuery The current query, for fluid interface
     */
    public function filterByClientearchivoSize($clientearchivoSize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clientearchivoSize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clientearchivoSize)) {
                $clientearchivoSize = str_replace('*', '%', $clientearchivoSize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientearchivoPeer::CLIENTEARCHIVO_SIZE, $clientearchivoSize, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClientearchivoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(ClientearchivoPeer::IDCLIENTE, $cliente->getIdcliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientearchivoPeer::IDCLIENTE, $cliente->toKeyValue('PrimaryKey', 'Idcliente'), $comparison);
        } else {
            throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClientearchivoQuery The current query, for fluid interface
     */
    public function joinCliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cliente');

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
            $this->addJoinObject($join, 'Cliente');
        }

        return $this;
    }

    /**
     * Use the Cliente relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Clientearchivo $clientearchivo Object to remove from the list of results
     *
     * @return ClientearchivoQuery The current query, for fluid interface
     */
    public function prune($clientearchivo = null)
    {
        if ($clientearchivo) {
            $this->addUsingAlias(ClientearchivoPeer::IDCLIENTEARCHIVO, $clientearchivo->getIdclientearchivo(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
