<?php


/**
 * Base class that represents a query for the 'proveedoritrade' table.
 *
 *
 *
 * @method ProveedoritradeQuery orderByIdproveedoritrade($order = Criteria::ASC) Order by the idproveedoritrade column
 * @method ProveedoritradeQuery orderByProveedoritradeNombre($order = Criteria::ASC) Order by the proveedoritrade_nombre column
 * @method ProveedoritradeQuery orderByProveedoritradeNombrecontacto($order = Criteria::ASC) Order by the proveedoritrade_nombrecontacto column
 * @method ProveedoritradeQuery orderByProveedoritradeTelefono($order = Criteria::ASC) Order by the proveedoritrade_telefono column
 * @method ProveedoritradeQuery orderByProveedoritradeCalle($order = Criteria::ASC) Order by the proveedoritrade_calle column
 * @method ProveedoritradeQuery orderByProveedoritradeNumero($order = Criteria::ASC) Order by the proveedoritrade_numero column
 * @method ProveedoritradeQuery orderByProveedoritradeInterior($order = Criteria::ASC) Order by the proveedoritrade_interior column
 * @method ProveedoritradeQuery orderByProveedoritradeColonia($order = Criteria::ASC) Order by the proveedoritrade_colonia column
 * @method ProveedoritradeQuery orderByProveedoritradeCiudad($order = Criteria::ASC) Order by the proveedoritrade_ciudad column
 * @method ProveedoritradeQuery orderByProveedoritradeEstado($order = Criteria::ASC) Order by the proveedoritrade_estado column
 * @method ProveedoritradeQuery orderByProveedoritradePais($order = Criteria::ASC) Order by the proveedoritrade_pais column
 * @method ProveedoritradeQuery orderByProveedoritradeEmail($order = Criteria::ASC) Order by the proveedoritrade_email column
 * @method ProveedoritradeQuery orderByProveedoritradeRfc($order = Criteria::ASC) Order by the proveedoritrade_rfc column
 * @method ProveedoritradeQuery orderByProveedoritradeComprobantedomicilio($order = Criteria::ASC) Order by the proveedoritrade_comprobantedomicilio column
 * @method ProveedoritradeQuery orderByProveedoritradeClabe($order = Criteria::ASC) Order by the proveedoritrade_clabe column
 * @method ProveedoritradeQuery orderByProveedoritradeComprobantedatosbancarios($order = Criteria::ASC) Order by the proveedoritrade_comprobantedatosbancarios column
 *
 * @method ProveedoritradeQuery groupByIdproveedoritrade() Group by the idproveedoritrade column
 * @method ProveedoritradeQuery groupByProveedoritradeNombre() Group by the proveedoritrade_nombre column
 * @method ProveedoritradeQuery groupByProveedoritradeNombrecontacto() Group by the proveedoritrade_nombrecontacto column
 * @method ProveedoritradeQuery groupByProveedoritradeTelefono() Group by the proveedoritrade_telefono column
 * @method ProveedoritradeQuery groupByProveedoritradeCalle() Group by the proveedoritrade_calle column
 * @method ProveedoritradeQuery groupByProveedoritradeNumero() Group by the proveedoritrade_numero column
 * @method ProveedoritradeQuery groupByProveedoritradeInterior() Group by the proveedoritrade_interior column
 * @method ProveedoritradeQuery groupByProveedoritradeColonia() Group by the proveedoritrade_colonia column
 * @method ProveedoritradeQuery groupByProveedoritradeCiudad() Group by the proveedoritrade_ciudad column
 * @method ProveedoritradeQuery groupByProveedoritradeEstado() Group by the proveedoritrade_estado column
 * @method ProveedoritradeQuery groupByProveedoritradePais() Group by the proveedoritrade_pais column
 * @method ProveedoritradeQuery groupByProveedoritradeEmail() Group by the proveedoritrade_email column
 * @method ProveedoritradeQuery groupByProveedoritradeRfc() Group by the proveedoritrade_rfc column
 * @method ProveedoritradeQuery groupByProveedoritradeComprobantedomicilio() Group by the proveedoritrade_comprobantedomicilio column
 * @method ProveedoritradeQuery groupByProveedoritradeClabe() Group by the proveedoritrade_clabe column
 * @method ProveedoritradeQuery groupByProveedoritradeComprobantedatosbancarios() Group by the proveedoritrade_comprobantedatosbancarios column
 *
 * @method ProveedoritradeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedoritradeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedoritradeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedoritradeQuery leftJoinExpedientegasto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedientegasto relation
 * @method ProveedoritradeQuery rightJoinExpedientegasto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedientegasto relation
 * @method ProveedoritradeQuery innerJoinExpedientegasto($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedientegasto relation
 *
 * @method ProveedoritradeQuery leftJoinProveedoritradeservicio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedoritradeservicio relation
 * @method ProveedoritradeQuery rightJoinProveedoritradeservicio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedoritradeservicio relation
 * @method ProveedoritradeQuery innerJoinProveedoritradeservicio($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedoritradeservicio relation
 *
 * @method Proveedoritrade findOne(PropelPDO $con = null) Return the first Proveedoritrade matching the query
 * @method Proveedoritrade findOneOrCreate(PropelPDO $con = null) Return the first Proveedoritrade matching the query, or a new Proveedoritrade object populated from the query conditions when no match is found
 *
 * @method Proveedoritrade findOneByProveedoritradeNombre(string $proveedoritrade_nombre) Return the first Proveedoritrade filtered by the proveedoritrade_nombre column
 * @method Proveedoritrade findOneByProveedoritradeNombrecontacto(string $proveedoritrade_nombrecontacto) Return the first Proveedoritrade filtered by the proveedoritrade_nombrecontacto column
 * @method Proveedoritrade findOneByProveedoritradeTelefono(string $proveedoritrade_telefono) Return the first Proveedoritrade filtered by the proveedoritrade_telefono column
 * @method Proveedoritrade findOneByProveedoritradeCalle(string $proveedoritrade_calle) Return the first Proveedoritrade filtered by the proveedoritrade_calle column
 * @method Proveedoritrade findOneByProveedoritradeNumero(string $proveedoritrade_numero) Return the first Proveedoritrade filtered by the proveedoritrade_numero column
 * @method Proveedoritrade findOneByProveedoritradeInterior(string $proveedoritrade_interior) Return the first Proveedoritrade filtered by the proveedoritrade_interior column
 * @method Proveedoritrade findOneByProveedoritradeColonia(string $proveedoritrade_colonia) Return the first Proveedoritrade filtered by the proveedoritrade_colonia column
 * @method Proveedoritrade findOneByProveedoritradeCiudad(string $proveedoritrade_ciudad) Return the first Proveedoritrade filtered by the proveedoritrade_ciudad column
 * @method Proveedoritrade findOneByProveedoritradeEstado(string $proveedoritrade_estado) Return the first Proveedoritrade filtered by the proveedoritrade_estado column
 * @method Proveedoritrade findOneByProveedoritradePais(string $proveedoritrade_pais) Return the first Proveedoritrade filtered by the proveedoritrade_pais column
 * @method Proveedoritrade findOneByProveedoritradeEmail(string $proveedoritrade_email) Return the first Proveedoritrade filtered by the proveedoritrade_email column
 * @method Proveedoritrade findOneByProveedoritradeRfc(string $proveedoritrade_rfc) Return the first Proveedoritrade filtered by the proveedoritrade_rfc column
 * @method Proveedoritrade findOneByProveedoritradeComprobantedomicilio(string $proveedoritrade_comprobantedomicilio) Return the first Proveedoritrade filtered by the proveedoritrade_comprobantedomicilio column
 * @method Proveedoritrade findOneByProveedoritradeClabe(string $proveedoritrade_clabe) Return the first Proveedoritrade filtered by the proveedoritrade_clabe column
 * @method Proveedoritrade findOneByProveedoritradeComprobantedatosbancarios(string $proveedoritrade_comprobantedatosbancarios) Return the first Proveedoritrade filtered by the proveedoritrade_comprobantedatosbancarios column
 *
 * @method array findByIdproveedoritrade(int $idproveedoritrade) Return Proveedoritrade objects filtered by the idproveedoritrade column
 * @method array findByProveedoritradeNombre(string $proveedoritrade_nombre) Return Proveedoritrade objects filtered by the proveedoritrade_nombre column
 * @method array findByProveedoritradeNombrecontacto(string $proveedoritrade_nombrecontacto) Return Proveedoritrade objects filtered by the proveedoritrade_nombrecontacto column
 * @method array findByProveedoritradeTelefono(string $proveedoritrade_telefono) Return Proveedoritrade objects filtered by the proveedoritrade_telefono column
 * @method array findByProveedoritradeCalle(string $proveedoritrade_calle) Return Proveedoritrade objects filtered by the proveedoritrade_calle column
 * @method array findByProveedoritradeNumero(string $proveedoritrade_numero) Return Proveedoritrade objects filtered by the proveedoritrade_numero column
 * @method array findByProveedoritradeInterior(string $proveedoritrade_interior) Return Proveedoritrade objects filtered by the proveedoritrade_interior column
 * @method array findByProveedoritradeColonia(string $proveedoritrade_colonia) Return Proveedoritrade objects filtered by the proveedoritrade_colonia column
 * @method array findByProveedoritradeCiudad(string $proveedoritrade_ciudad) Return Proveedoritrade objects filtered by the proveedoritrade_ciudad column
 * @method array findByProveedoritradeEstado(string $proveedoritrade_estado) Return Proveedoritrade objects filtered by the proveedoritrade_estado column
 * @method array findByProveedoritradePais(string $proveedoritrade_pais) Return Proveedoritrade objects filtered by the proveedoritrade_pais column
 * @method array findByProveedoritradeEmail(string $proveedoritrade_email) Return Proveedoritrade objects filtered by the proveedoritrade_email column
 * @method array findByProveedoritradeRfc(string $proveedoritrade_rfc) Return Proveedoritrade objects filtered by the proveedoritrade_rfc column
 * @method array findByProveedoritradeComprobantedomicilio(string $proveedoritrade_comprobantedomicilio) Return Proveedoritrade objects filtered by the proveedoritrade_comprobantedomicilio column
 * @method array findByProveedoritradeClabe(string $proveedoritrade_clabe) Return Proveedoritrade objects filtered by the proveedoritrade_clabe column
 * @method array findByProveedoritradeComprobantedatosbancarios(string $proveedoritrade_comprobantedatosbancarios) Return Proveedoritrade objects filtered by the proveedoritrade_comprobantedatosbancarios column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseProveedoritradeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedoritradeQuery object.
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
            $modelName = 'Proveedoritrade';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedoritradeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedoritradeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedoritradeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedoritradeQuery) {
            return $criteria;
        }
        $query = new ProveedoritradeQuery(null, null, $modelAlias);

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
     * @return   Proveedoritrade|Proveedoritrade[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedoritradePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedoritradePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedoritrade A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedoritrade($key, $con = null)
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
     * @return                 Proveedoritrade A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedoritrade`, `proveedoritrade_nombre`, `proveedoritrade_nombrecontacto`, `proveedoritrade_telefono`, `proveedoritrade_calle`, `proveedoritrade_numero`, `proveedoritrade_interior`, `proveedoritrade_colonia`, `proveedoritrade_ciudad`, `proveedoritrade_estado`, `proveedoritrade_pais`, `proveedoritrade_email`, `proveedoritrade_rfc`, `proveedoritrade_comprobantedomicilio`, `proveedoritrade_clabe`, `proveedoritrade_comprobantedatosbancarios` FROM `proveedoritrade` WHERE `idproveedoritrade` = :p0';
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
            $obj = new Proveedoritrade();
            $obj->hydrate($row);
            ProveedoritradePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedoritrade|Proveedoritrade[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedoritrade[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedoritradePeer::IDPROVEEDORITRADE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedoritradePeer::IDPROVEEDORITRADE, $keys, Criteria::IN);
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
     * @param     mixed $idproveedoritrade The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByIdproveedoritrade($idproveedoritrade = null, $comparison = null)
    {
        if (is_array($idproveedoritrade)) {
            $useMinMax = false;
            if (isset($idproveedoritrade['min'])) {
                $this->addUsingAlias(ProveedoritradePeer::IDPROVEEDORITRADE, $idproveedoritrade['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedoritrade['max'])) {
                $this->addUsingAlias(ProveedoritradePeer::IDPROVEEDORITRADE, $idproveedoritrade['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::IDPROVEEDORITRADE, $idproveedoritrade, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeNombre('fooValue');   // WHERE proveedoritrade_nombre = 'fooValue'
     * $query->filterByProveedoritradeNombre('%fooValue%'); // WHERE proveedoritrade_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeNombre($proveedoritradeNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeNombre)) {
                $proveedoritradeNombre = str_replace('*', '%', $proveedoritradeNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_NOMBRE, $proveedoritradeNombre, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_nombrecontacto column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeNombrecontacto('fooValue');   // WHERE proveedoritrade_nombrecontacto = 'fooValue'
     * $query->filterByProveedoritradeNombrecontacto('%fooValue%'); // WHERE proveedoritrade_nombrecontacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeNombrecontacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeNombrecontacto($proveedoritradeNombrecontacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeNombrecontacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeNombrecontacto)) {
                $proveedoritradeNombrecontacto = str_replace('*', '%', $proveedoritradeNombrecontacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_NOMBRECONTACTO, $proveedoritradeNombrecontacto, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeTelefono('fooValue');   // WHERE proveedoritrade_telefono = 'fooValue'
     * $query->filterByProveedoritradeTelefono('%fooValue%'); // WHERE proveedoritrade_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeTelefono($proveedoritradeTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeTelefono)) {
                $proveedoritradeTelefono = str_replace('*', '%', $proveedoritradeTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_TELEFONO, $proveedoritradeTelefono, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeCalle('fooValue');   // WHERE proveedoritrade_calle = 'fooValue'
     * $query->filterByProveedoritradeCalle('%fooValue%'); // WHERE proveedoritrade_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeCalle($proveedoritradeCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeCalle)) {
                $proveedoritradeCalle = str_replace('*', '%', $proveedoritradeCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_CALLE, $proveedoritradeCalle, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeNumero('fooValue');   // WHERE proveedoritrade_numero = 'fooValue'
     * $query->filterByProveedoritradeNumero('%fooValue%'); // WHERE proveedoritrade_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeNumero($proveedoritradeNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeNumero)) {
                $proveedoritradeNumero = str_replace('*', '%', $proveedoritradeNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_NUMERO, $proveedoritradeNumero, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_interior column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeInterior('fooValue');   // WHERE proveedoritrade_interior = 'fooValue'
     * $query->filterByProveedoritradeInterior('%fooValue%'); // WHERE proveedoritrade_interior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeInterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeInterior($proveedoritradeInterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeInterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeInterior)) {
                $proveedoritradeInterior = str_replace('*', '%', $proveedoritradeInterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_INTERIOR, $proveedoritradeInterior, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeColonia('fooValue');   // WHERE proveedoritrade_colonia = 'fooValue'
     * $query->filterByProveedoritradeColonia('%fooValue%'); // WHERE proveedoritrade_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeColonia($proveedoritradeColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeColonia)) {
                $proveedoritradeColonia = str_replace('*', '%', $proveedoritradeColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_COLONIA, $proveedoritradeColonia, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeCiudad('fooValue');   // WHERE proveedoritrade_ciudad = 'fooValue'
     * $query->filterByProveedoritradeCiudad('%fooValue%'); // WHERE proveedoritrade_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeCiudad($proveedoritradeCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeCiudad)) {
                $proveedoritradeCiudad = str_replace('*', '%', $proveedoritradeCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_CIUDAD, $proveedoritradeCiudad, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeEstado('fooValue');   // WHERE proveedoritrade_estado = 'fooValue'
     * $query->filterByProveedoritradeEstado('%fooValue%'); // WHERE proveedoritrade_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeEstado($proveedoritradeEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeEstado)) {
                $proveedoritradeEstado = str_replace('*', '%', $proveedoritradeEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_ESTADO, $proveedoritradeEstado, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradePais('fooValue');   // WHERE proveedoritrade_pais = 'fooValue'
     * $query->filterByProveedoritradePais('%fooValue%'); // WHERE proveedoritrade_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradePais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradePais($proveedoritradePais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradePais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradePais)) {
                $proveedoritradePais = str_replace('*', '%', $proveedoritradePais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_PAIS, $proveedoritradePais, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_email column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeEmail('fooValue');   // WHERE proveedoritrade_email = 'fooValue'
     * $query->filterByProveedoritradeEmail('%fooValue%'); // WHERE proveedoritrade_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeEmail($proveedoritradeEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeEmail)) {
                $proveedoritradeEmail = str_replace('*', '%', $proveedoritradeEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_EMAIL, $proveedoritradeEmail, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeRfc('fooValue');   // WHERE proveedoritrade_rfc = 'fooValue'
     * $query->filterByProveedoritradeRfc('%fooValue%'); // WHERE proveedoritrade_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeRfc($proveedoritradeRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeRfc)) {
                $proveedoritradeRfc = str_replace('*', '%', $proveedoritradeRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_RFC, $proveedoritradeRfc, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_comprobantedomicilio column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeComprobantedomicilio('fooValue');   // WHERE proveedoritrade_comprobantedomicilio = 'fooValue'
     * $query->filterByProveedoritradeComprobantedomicilio('%fooValue%'); // WHERE proveedoritrade_comprobantedomicilio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeComprobantedomicilio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeComprobantedomicilio($proveedoritradeComprobantedomicilio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeComprobantedomicilio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeComprobantedomicilio)) {
                $proveedoritradeComprobantedomicilio = str_replace('*', '%', $proveedoritradeComprobantedomicilio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDOMICILIO, $proveedoritradeComprobantedomicilio, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_clabe column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeClabe('fooValue');   // WHERE proveedoritrade_clabe = 'fooValue'
     * $query->filterByProveedoritradeClabe('%fooValue%'); // WHERE proveedoritrade_clabe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeClabe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeClabe($proveedoritradeClabe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeClabe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeClabe)) {
                $proveedoritradeClabe = str_replace('*', '%', $proveedoritradeClabe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_CLABE, $proveedoritradeClabe, $comparison);
    }

    /**
     * Filter the query on the proveedoritrade_comprobantedatosbancarios column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedoritradeComprobantedatosbancarios('fooValue');   // WHERE proveedoritrade_comprobantedatosbancarios = 'fooValue'
     * $query->filterByProveedoritradeComprobantedatosbancarios('%fooValue%'); // WHERE proveedoritrade_comprobantedatosbancarios LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedoritradeComprobantedatosbancarios The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function filterByProveedoritradeComprobantedatosbancarios($proveedoritradeComprobantedatosbancarios = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedoritradeComprobantedatosbancarios)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedoritradeComprobantedatosbancarios)) {
                $proveedoritradeComprobantedatosbancarios = str_replace('*', '%', $proveedoritradeComprobantedatosbancarios);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedoritradePeer::PROVEEDORITRADE_COMPROBANTEDATOSBANCARIOS, $proveedoritradeComprobantedatosbancarios, $comparison);
    }

    /**
     * Filter the query by a related Expedientegasto object
     *
     * @param   Expedientegasto|PropelObjectCollection $expedientegasto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedoritradeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedientegasto($expedientegasto, $comparison = null)
    {
        if ($expedientegasto instanceof Expedientegasto) {
            return $this
                ->addUsingAlias(ProveedoritradePeer::IDPROVEEDORITRADE, $expedientegasto->getIdproveedoritrade(), $comparison);
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
     * @return ProveedoritradeQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedoritradeservicio object
     *
     * @param   Proveedoritradeservicio|PropelObjectCollection $proveedoritradeservicio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedoritradeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedoritradeservicio($proveedoritradeservicio, $comparison = null)
    {
        if ($proveedoritradeservicio instanceof Proveedoritradeservicio) {
            return $this
                ->addUsingAlias(ProveedoritradePeer::IDPROVEEDORITRADE, $proveedoritradeservicio->getIdproveedoritrade(), $comparison);
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
     * @return ProveedoritradeQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Proveedoritrade $proveedoritrade Object to remove from the list of results
     *
     * @return ProveedoritradeQuery The current query, for fluid interface
     */
    public function prune($proveedoritrade = null)
    {
        if ($proveedoritrade) {
            $this->addUsingAlias(ProveedoritradePeer::IDPROVEEDORITRADE, $proveedoritrade->getIdproveedoritrade(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
