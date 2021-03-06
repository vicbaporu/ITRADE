<?php


/**
 * Base class that represents a query for the 'proveedorcliente' table.
 *
 *
 *
 * @method ProveedorclienteQuery orderByIdproveedorcliente($order = Criteria::ASC) Order by the idproveedorcliente column
 * @method ProveedorclienteQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method ProveedorclienteQuery orderByProveedorclienteNombre($order = Criteria::ASC) Order by the proveedorcliente_nombre column
 * @method ProveedorclienteQuery orderByProveedorclienteTaxid($order = Criteria::ASC) Order by the proveedorcliente_taxid column
 * @method ProveedorclienteQuery orderByProveedorclienteNombrecontacto($order = Criteria::ASC) Order by the proveedorcliente_nombrecontacto column
 * @method ProveedorclienteQuery orderByProveedorclienteTelefonocontacto($order = Criteria::ASC) Order by the proveedorcliente_telefonocontacto column
 * @method ProveedorclienteQuery orderByProveedorclienteEmailcontacto($order = Criteria::ASC) Order by the proveedorcliente_emailcontacto column
 * @method ProveedorclienteQuery orderByProveedorclienteCalle($order = Criteria::ASC) Order by the proveedorcliente_calle column
 * @method ProveedorclienteQuery orderByProveedorclienteNumero($order = Criteria::ASC) Order by the proveedorcliente_numero column
 * @method ProveedorclienteQuery orderByProveedorclienteInterior($order = Criteria::ASC) Order by the proveedorcliente_interior column
 * @method ProveedorclienteQuery orderByProveedorclienteColonia($order = Criteria::ASC) Order by the proveedorcliente_colonia column
 * @method ProveedorclienteQuery orderByProveedorclienteCiudad($order = Criteria::ASC) Order by the proveedorcliente_ciudad column
 * @method ProveedorclienteQuery orderByProveedorclienteEstado($order = Criteria::ASC) Order by the proveedorcliente_estado column
 * @method ProveedorclienteQuery orderByProveedorclientePais($order = Criteria::ASC) Order by the proveedorcliente_pais column
 * @method ProveedorclienteQuery orderByProveedorclienteTipo($order = Criteria::ASC) Order by the proveedorcliente_tipo column
 *
 * @method ProveedorclienteQuery groupByIdproveedorcliente() Group by the idproveedorcliente column
 * @method ProveedorclienteQuery groupByIdcliente() Group by the idcliente column
 * @method ProveedorclienteQuery groupByProveedorclienteNombre() Group by the proveedorcliente_nombre column
 * @method ProveedorclienteQuery groupByProveedorclienteTaxid() Group by the proveedorcliente_taxid column
 * @method ProveedorclienteQuery groupByProveedorclienteNombrecontacto() Group by the proveedorcliente_nombrecontacto column
 * @method ProveedorclienteQuery groupByProveedorclienteTelefonocontacto() Group by the proveedorcliente_telefonocontacto column
 * @method ProveedorclienteQuery groupByProveedorclienteEmailcontacto() Group by the proveedorcliente_emailcontacto column
 * @method ProveedorclienteQuery groupByProveedorclienteCalle() Group by the proveedorcliente_calle column
 * @method ProveedorclienteQuery groupByProveedorclienteNumero() Group by the proveedorcliente_numero column
 * @method ProveedorclienteQuery groupByProveedorclienteInterior() Group by the proveedorcliente_interior column
 * @method ProveedorclienteQuery groupByProveedorclienteColonia() Group by the proveedorcliente_colonia column
 * @method ProveedorclienteQuery groupByProveedorclienteCiudad() Group by the proveedorcliente_ciudad column
 * @method ProveedorclienteQuery groupByProveedorclienteEstado() Group by the proveedorcliente_estado column
 * @method ProveedorclienteQuery groupByProveedorclientePais() Group by the proveedorcliente_pais column
 * @method ProveedorclienteQuery groupByProveedorclienteTipo() Group by the proveedorcliente_tipo column
 *
 * @method ProveedorclienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedorclienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedorclienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedorclienteQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method ProveedorclienteQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method ProveedorclienteQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method ProveedorclienteQuery leftJoinExpediente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expediente relation
 * @method ProveedorclienteQuery rightJoinExpediente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expediente relation
 * @method ProveedorclienteQuery innerJoinExpediente($relationAlias = null) Adds a INNER JOIN clause to the query using the Expediente relation
 *
 * @method Proveedorcliente findOne(PropelPDO $con = null) Return the first Proveedorcliente matching the query
 * @method Proveedorcliente findOneOrCreate(PropelPDO $con = null) Return the first Proveedorcliente matching the query, or a new Proveedorcliente object populated from the query conditions when no match is found
 *
 * @method Proveedorcliente findOneByIdcliente(int $idcliente) Return the first Proveedorcliente filtered by the idcliente column
 * @method Proveedorcliente findOneByProveedorclienteNombre(string $proveedorcliente_nombre) Return the first Proveedorcliente filtered by the proveedorcliente_nombre column
 * @method Proveedorcliente findOneByProveedorclienteTaxid(string $proveedorcliente_taxid) Return the first Proveedorcliente filtered by the proveedorcliente_taxid column
 * @method Proveedorcliente findOneByProveedorclienteNombrecontacto(string $proveedorcliente_nombrecontacto) Return the first Proveedorcliente filtered by the proveedorcliente_nombrecontacto column
 * @method Proveedorcliente findOneByProveedorclienteTelefonocontacto(string $proveedorcliente_telefonocontacto) Return the first Proveedorcliente filtered by the proveedorcliente_telefonocontacto column
 * @method Proveedorcliente findOneByProveedorclienteEmailcontacto(string $proveedorcliente_emailcontacto) Return the first Proveedorcliente filtered by the proveedorcliente_emailcontacto column
 * @method Proveedorcliente findOneByProveedorclienteCalle(string $proveedorcliente_calle) Return the first Proveedorcliente filtered by the proveedorcliente_calle column
 * @method Proveedorcliente findOneByProveedorclienteNumero(string $proveedorcliente_numero) Return the first Proveedorcliente filtered by the proveedorcliente_numero column
 * @method Proveedorcliente findOneByProveedorclienteInterior(string $proveedorcliente_interior) Return the first Proveedorcliente filtered by the proveedorcliente_interior column
 * @method Proveedorcliente findOneByProveedorclienteColonia(string $proveedorcliente_colonia) Return the first Proveedorcliente filtered by the proveedorcliente_colonia column
 * @method Proveedorcliente findOneByProveedorclienteCiudad(string $proveedorcliente_ciudad) Return the first Proveedorcliente filtered by the proveedorcliente_ciudad column
 * @method Proveedorcliente findOneByProveedorclienteEstado(string $proveedorcliente_estado) Return the first Proveedorcliente filtered by the proveedorcliente_estado column
 * @method Proveedorcliente findOneByProveedorclientePais(string $proveedorcliente_pais) Return the first Proveedorcliente filtered by the proveedorcliente_pais column
 * @method Proveedorcliente findOneByProveedorclienteTipo(string $proveedorcliente_tipo) Return the first Proveedorcliente filtered by the proveedorcliente_tipo column
 *
 * @method array findByIdproveedorcliente(int $idproveedorcliente) Return Proveedorcliente objects filtered by the idproveedorcliente column
 * @method array findByIdcliente(int $idcliente) Return Proveedorcliente objects filtered by the idcliente column
 * @method array findByProveedorclienteNombre(string $proveedorcliente_nombre) Return Proveedorcliente objects filtered by the proveedorcliente_nombre column
 * @method array findByProveedorclienteTaxid(string $proveedorcliente_taxid) Return Proveedorcliente objects filtered by the proveedorcliente_taxid column
 * @method array findByProveedorclienteNombrecontacto(string $proveedorcliente_nombrecontacto) Return Proveedorcliente objects filtered by the proveedorcliente_nombrecontacto column
 * @method array findByProveedorclienteTelefonocontacto(string $proveedorcliente_telefonocontacto) Return Proveedorcliente objects filtered by the proveedorcliente_telefonocontacto column
 * @method array findByProveedorclienteEmailcontacto(string $proveedorcliente_emailcontacto) Return Proveedorcliente objects filtered by the proveedorcliente_emailcontacto column
 * @method array findByProveedorclienteCalle(string $proveedorcliente_calle) Return Proveedorcliente objects filtered by the proveedorcliente_calle column
 * @method array findByProveedorclienteNumero(string $proveedorcliente_numero) Return Proveedorcliente objects filtered by the proveedorcliente_numero column
 * @method array findByProveedorclienteInterior(string $proveedorcliente_interior) Return Proveedorcliente objects filtered by the proveedorcliente_interior column
 * @method array findByProveedorclienteColonia(string $proveedorcliente_colonia) Return Proveedorcliente objects filtered by the proveedorcliente_colonia column
 * @method array findByProveedorclienteCiudad(string $proveedorcliente_ciudad) Return Proveedorcliente objects filtered by the proveedorcliente_ciudad column
 * @method array findByProveedorclienteEstado(string $proveedorcliente_estado) Return Proveedorcliente objects filtered by the proveedorcliente_estado column
 * @method array findByProveedorclientePais(string $proveedorcliente_pais) Return Proveedorcliente objects filtered by the proveedorcliente_pais column
 * @method array findByProveedorclienteTipo(string $proveedorcliente_tipo) Return Proveedorcliente objects filtered by the proveedorcliente_tipo column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseProveedorclienteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedorclienteQuery object.
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
            $modelName = 'Proveedorcliente';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedorclienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedorclienteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedorclienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedorclienteQuery) {
            return $criteria;
        }
        $query = new ProveedorclienteQuery(null, null, $modelAlias);

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
     * @return   Proveedorcliente|Proveedorcliente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedorclientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedorclientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedorcliente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedorcliente($key, $con = null)
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
     * @return                 Proveedorcliente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedorcliente`, `idcliente`, `proveedorcliente_nombre`, `proveedorcliente_taxid`, `proveedorcliente_nombrecontacto`, `proveedorcliente_telefonocontacto`, `proveedorcliente_emailcontacto`, `proveedorcliente_calle`, `proveedorcliente_numero`, `proveedorcliente_interior`, `proveedorcliente_colonia`, `proveedorcliente_ciudad`, `proveedorcliente_estado`, `proveedorcliente_pais`, `proveedorcliente_tipo` FROM `proveedorcliente` WHERE `idproveedorcliente` = :p0';
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
            $obj = new Proveedorcliente();
            $obj->hydrate($row);
            ProveedorclientePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedorcliente|Proveedorcliente[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedorcliente[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedorclientePeer::IDPROVEEDORCLIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedorclientePeer::IDPROVEEDORCLIENTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproveedorcliente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedorcliente(1234); // WHERE idproveedorcliente = 1234
     * $query->filterByIdproveedorcliente(array(12, 34)); // WHERE idproveedorcliente IN (12, 34)
     * $query->filterByIdproveedorcliente(array('min' => 12)); // WHERE idproveedorcliente >= 12
     * $query->filterByIdproveedorcliente(array('max' => 12)); // WHERE idproveedorcliente <= 12
     * </code>
     *
     * @param     mixed $idproveedorcliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByIdproveedorcliente($idproveedorcliente = null, $comparison = null)
    {
        if (is_array($idproveedorcliente)) {
            $useMinMax = false;
            if (isset($idproveedorcliente['min'])) {
                $this->addUsingAlias(ProveedorclientePeer::IDPROVEEDORCLIENTE, $idproveedorcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedorcliente['max'])) {
                $this->addUsingAlias(ProveedorclientePeer::IDPROVEEDORCLIENTE, $idproveedorcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::IDPROVEEDORCLIENTE, $idproveedorcliente, $comparison);
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
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByIdcliente($idcliente = null, $comparison = null)
    {
        if (is_array($idcliente)) {
            $useMinMax = false;
            if (isset($idcliente['min'])) {
                $this->addUsingAlias(ProveedorclientePeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcliente['max'])) {
                $this->addUsingAlias(ProveedorclientePeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::IDCLIENTE, $idcliente, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteNombre('fooValue');   // WHERE proveedorcliente_nombre = 'fooValue'
     * $query->filterByProveedorclienteNombre('%fooValue%'); // WHERE proveedorcliente_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteNombre($proveedorclienteNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteNombre)) {
                $proveedorclienteNombre = str_replace('*', '%', $proveedorclienteNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRE, $proveedorclienteNombre, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_taxid column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteTaxid('fooValue');   // WHERE proveedorcliente_taxid = 'fooValue'
     * $query->filterByProveedorclienteTaxid('%fooValue%'); // WHERE proveedorcliente_taxid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteTaxid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteTaxid($proveedorclienteTaxid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteTaxid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteTaxid)) {
                $proveedorclienteTaxid = str_replace('*', '%', $proveedorclienteTaxid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_TAXID, $proveedorclienteTaxid, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_nombrecontacto column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteNombrecontacto('fooValue');   // WHERE proveedorcliente_nombrecontacto = 'fooValue'
     * $query->filterByProveedorclienteNombrecontacto('%fooValue%'); // WHERE proveedorcliente_nombrecontacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteNombrecontacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteNombrecontacto($proveedorclienteNombrecontacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteNombrecontacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteNombrecontacto)) {
                $proveedorclienteNombrecontacto = str_replace('*', '%', $proveedorclienteNombrecontacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_NOMBRECONTACTO, $proveedorclienteNombrecontacto, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_telefonocontacto column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteTelefonocontacto('fooValue');   // WHERE proveedorcliente_telefonocontacto = 'fooValue'
     * $query->filterByProveedorclienteTelefonocontacto('%fooValue%'); // WHERE proveedorcliente_telefonocontacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteTelefonocontacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteTelefonocontacto($proveedorclienteTelefonocontacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteTelefonocontacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteTelefonocontacto)) {
                $proveedorclienteTelefonocontacto = str_replace('*', '%', $proveedorclienteTelefonocontacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_TELEFONOCONTACTO, $proveedorclienteTelefonocontacto, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_emailcontacto column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteEmailcontacto('fooValue');   // WHERE proveedorcliente_emailcontacto = 'fooValue'
     * $query->filterByProveedorclienteEmailcontacto('%fooValue%'); // WHERE proveedorcliente_emailcontacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteEmailcontacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteEmailcontacto($proveedorclienteEmailcontacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteEmailcontacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteEmailcontacto)) {
                $proveedorclienteEmailcontacto = str_replace('*', '%', $proveedorclienteEmailcontacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_EMAILCONTACTO, $proveedorclienteEmailcontacto, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteCalle('fooValue');   // WHERE proveedorcliente_calle = 'fooValue'
     * $query->filterByProveedorclienteCalle('%fooValue%'); // WHERE proveedorcliente_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteCalle($proveedorclienteCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteCalle)) {
                $proveedorclienteCalle = str_replace('*', '%', $proveedorclienteCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_CALLE, $proveedorclienteCalle, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteNumero('fooValue');   // WHERE proveedorcliente_numero = 'fooValue'
     * $query->filterByProveedorclienteNumero('%fooValue%'); // WHERE proveedorcliente_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteNumero($proveedorclienteNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteNumero)) {
                $proveedorclienteNumero = str_replace('*', '%', $proveedorclienteNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_NUMERO, $proveedorclienteNumero, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_interior column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteInterior('fooValue');   // WHERE proveedorcliente_interior = 'fooValue'
     * $query->filterByProveedorclienteInterior('%fooValue%'); // WHERE proveedorcliente_interior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteInterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteInterior($proveedorclienteInterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteInterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteInterior)) {
                $proveedorclienteInterior = str_replace('*', '%', $proveedorclienteInterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_INTERIOR, $proveedorclienteInterior, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteColonia('fooValue');   // WHERE proveedorcliente_colonia = 'fooValue'
     * $query->filterByProveedorclienteColonia('%fooValue%'); // WHERE proveedorcliente_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteColonia($proveedorclienteColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteColonia)) {
                $proveedorclienteColonia = str_replace('*', '%', $proveedorclienteColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_COLONIA, $proveedorclienteColonia, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteCiudad('fooValue');   // WHERE proveedorcliente_ciudad = 'fooValue'
     * $query->filterByProveedorclienteCiudad('%fooValue%'); // WHERE proveedorcliente_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteCiudad($proveedorclienteCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteCiudad)) {
                $proveedorclienteCiudad = str_replace('*', '%', $proveedorclienteCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_CIUDAD, $proveedorclienteCiudad, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteEstado('fooValue');   // WHERE proveedorcliente_estado = 'fooValue'
     * $query->filterByProveedorclienteEstado('%fooValue%'); // WHERE proveedorcliente_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteEstado($proveedorclienteEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteEstado)) {
                $proveedorclienteEstado = str_replace('*', '%', $proveedorclienteEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_ESTADO, $proveedorclienteEstado, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclientePais('fooValue');   // WHERE proveedorcliente_pais = 'fooValue'
     * $query->filterByProveedorclientePais('%fooValue%'); // WHERE proveedorcliente_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclientePais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclientePais($proveedorclientePais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclientePais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclientePais)) {
                $proveedorclientePais = str_replace('*', '%', $proveedorclientePais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_PAIS, $proveedorclientePais, $comparison);
    }

    /**
     * Filter the query on the proveedorcliente_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorclienteTipo('fooValue');   // WHERE proveedorcliente_tipo = 'fooValue'
     * $query->filterByProveedorclienteTipo('%fooValue%'); // WHERE proveedorcliente_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorclienteTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function filterByProveedorclienteTipo($proveedorclienteTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorclienteTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorclienteTipo)) {
                $proveedorclienteTipo = str_replace('*', '%', $proveedorclienteTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorclientePeer::PROVEEDORCLIENTE_TIPO, $proveedorclienteTipo, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorclienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(ProveedorclientePeer::IDCLIENTE, $cliente->getIdcliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedorclientePeer::IDCLIENTE, $cliente->toKeyValue('PrimaryKey', 'Idcliente'), $comparison);
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
     * @return ProveedorclienteQuery The current query, for fluid interface
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
     * Filter the query by a related Expediente object
     *
     * @param   Expediente|PropelObjectCollection $expediente  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorclienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpediente($expediente, $comparison = null)
    {
        if ($expediente instanceof Expediente) {
            return $this
                ->addUsingAlias(ProveedorclientePeer::IDPROVEEDORCLIENTE, $expediente->getIdconsignatarioembarcador(), $comparison);
        } elseif ($expediente instanceof PropelObjectCollection) {
            return $this
                ->useExpedienteQuery()
                ->filterByPrimaryKeys($expediente->getPrimaryKeys())
                ->endUse();
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
     * @return ProveedorclienteQuery The current query, for fluid interface
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
     * @param   Proveedorcliente $proveedorcliente Object to remove from the list of results
     *
     * @return ProveedorclienteQuery The current query, for fluid interface
     */
    public function prune($proveedorcliente = null)
    {
        if ($proveedorcliente) {
            $this->addUsingAlias(ProveedorclientePeer::IDPROVEEDORCLIENTE, $proveedorcliente->getIdproveedorcliente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
