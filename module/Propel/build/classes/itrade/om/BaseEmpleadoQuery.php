<?php


/**
 * Base class that represents a query for the 'empleado' table.
 *
 *
 *
 * @method EmpleadoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadoQuery orderByEmpleadoNombre($order = Criteria::ASC) Order by the empleado_nombre column
 * @method EmpleadoQuery orderByEmpleadoApellidopaterno($order = Criteria::ASC) Order by the empleado_apellidopaterno column
 * @method EmpleadoQuery orderByEmpleadoApallidomaterno($order = Criteria::ASC) Order by the empleado_apallidomaterno column
 * @method EmpleadoQuery orderByEmpleadoEmail($order = Criteria::ASC) Order by the empleado_email column
 * @method EmpleadoQuery orderByEmpleadoPassword($order = Criteria::ASC) Order by the empleado_password column
 * @method EmpleadoQuery orderByEmpleadoCelular($order = Criteria::ASC) Order by the empleado_celular column
 * @method EmpleadoQuery orderByEmpleadoTelefono($order = Criteria::ASC) Order by the empleado_telefono column
 * @method EmpleadoQuery orderByEmpleadoCalle($order = Criteria::ASC) Order by the empleado_calle column
 * @method EmpleadoQuery orderByEmpleadoNumero($order = Criteria::ASC) Order by the empleado_numero column
 * @method EmpleadoQuery orderByEmpleadoInterior($order = Criteria::ASC) Order by the empleado_interior column
 * @method EmpleadoQuery orderByEmpleadoColonia($order = Criteria::ASC) Order by the empleado_colonia column
 * @method EmpleadoQuery orderByEmpleadoCodigopostal($order = Criteria::ASC) Order by the empleado_codigopostal column
 * @method EmpleadoQuery orderByEmpleadoCiudad($order = Criteria::ASC) Order by the empleado_ciudad column
 * @method EmpleadoQuery orderByEmpleadoEstado($order = Criteria::ASC) Order by the empleado_estado column
 * @method EmpleadoQuery orderByEmpleadoNss($order = Criteria::ASC) Order by the empleado_nss column
 * @method EmpleadoQuery orderByEmpleadoRfc($order = Criteria::ASC) Order by the empleado_rfc column
 * @method EmpleadoQuery orderByEmpleadoIniciocontrato($order = Criteria::ASC) Order by the empleado_iniciocontrato column
 * @method EmpleadoQuery orderByEmpleadoNombrecontacto($order = Criteria::ASC) Order by the empleado_nombrecontacto column
 * @method EmpleadoQuery orderByEmpleadoTelefonocontacto($order = Criteria::ASC) Order by the empleado_telefonocontacto column
 * @method EmpleadoQuery orderByEmpleadoEstatus($order = Criteria::ASC) Order by the empleado_estatus column
 * @method EmpleadoQuery orderByEmpleadoRol($order = Criteria::ASC) Order by the empleado_rol column
 * @method EmpleadoQuery orderByEmpleadoFoto($order = Criteria::ASC) Order by the empleado_foto column
 *
 * @method EmpleadoQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadoQuery groupByEmpleadoNombre() Group by the empleado_nombre column
 * @method EmpleadoQuery groupByEmpleadoApellidopaterno() Group by the empleado_apellidopaterno column
 * @method EmpleadoQuery groupByEmpleadoApallidomaterno() Group by the empleado_apallidomaterno column
 * @method EmpleadoQuery groupByEmpleadoEmail() Group by the empleado_email column
 * @method EmpleadoQuery groupByEmpleadoPassword() Group by the empleado_password column
 * @method EmpleadoQuery groupByEmpleadoCelular() Group by the empleado_celular column
 * @method EmpleadoQuery groupByEmpleadoTelefono() Group by the empleado_telefono column
 * @method EmpleadoQuery groupByEmpleadoCalle() Group by the empleado_calle column
 * @method EmpleadoQuery groupByEmpleadoNumero() Group by the empleado_numero column
 * @method EmpleadoQuery groupByEmpleadoInterior() Group by the empleado_interior column
 * @method EmpleadoQuery groupByEmpleadoColonia() Group by the empleado_colonia column
 * @method EmpleadoQuery groupByEmpleadoCodigopostal() Group by the empleado_codigopostal column
 * @method EmpleadoQuery groupByEmpleadoCiudad() Group by the empleado_ciudad column
 * @method EmpleadoQuery groupByEmpleadoEstado() Group by the empleado_estado column
 * @method EmpleadoQuery groupByEmpleadoNss() Group by the empleado_nss column
 * @method EmpleadoQuery groupByEmpleadoRfc() Group by the empleado_rfc column
 * @method EmpleadoQuery groupByEmpleadoIniciocontrato() Group by the empleado_iniciocontrato column
 * @method EmpleadoQuery groupByEmpleadoNombrecontacto() Group by the empleado_nombrecontacto column
 * @method EmpleadoQuery groupByEmpleadoTelefonocontacto() Group by the empleado_telefonocontacto column
 * @method EmpleadoQuery groupByEmpleadoEstatus() Group by the empleado_estatus column
 * @method EmpleadoQuery groupByEmpleadoRol() Group by the empleado_rol column
 * @method EmpleadoQuery groupByEmpleadoFoto() Group by the empleado_foto column
 *
 * @method EmpleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadoQuery leftJoinClienteRelatedByIdempleadocomercial($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClienteRelatedByIdempleadocomercial relation
 * @method EmpleadoQuery rightJoinClienteRelatedByIdempleadocomercial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClienteRelatedByIdempleadocomercial relation
 * @method EmpleadoQuery innerJoinClienteRelatedByIdempleadocomercial($relationAlias = null) Adds a INNER JOIN clause to the query using the ClienteRelatedByIdempleadocomercial relation
 *
 * @method EmpleadoQuery leftJoinClienteRelatedByIdempleadooperaciones($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClienteRelatedByIdempleadooperaciones relation
 * @method EmpleadoQuery rightJoinClienteRelatedByIdempleadooperaciones($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClienteRelatedByIdempleadooperaciones relation
 * @method EmpleadoQuery innerJoinClienteRelatedByIdempleadooperaciones($relationAlias = null) Adds a INNER JOIN clause to the query using the ClienteRelatedByIdempleadooperaciones relation
 *
 * @method EmpleadoQuery leftJoinExpedientearchivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedientearchivo relation
 * @method EmpleadoQuery rightJoinExpedientearchivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedientearchivo relation
 * @method EmpleadoQuery innerJoinExpedientearchivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedientearchivo relation
 *
 * @method EmpleadoQuery leftJoinExpedientegasto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expedientegasto relation
 * @method EmpleadoQuery rightJoinExpedientegasto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expedientegasto relation
 * @method EmpleadoQuery innerJoinExpedientegasto($relationAlias = null) Adds a INNER JOIN clause to the query using the Expedientegasto relation
 *
 * @method Empleado findOne(PropelPDO $con = null) Return the first Empleado matching the query
 * @method Empleado findOneOrCreate(PropelPDO $con = null) Return the first Empleado matching the query, or a new Empleado object populated from the query conditions when no match is found
 *
 * @method Empleado findOneByEmpleadoNombre(string $empleado_nombre) Return the first Empleado filtered by the empleado_nombre column
 * @method Empleado findOneByEmpleadoApellidopaterno(string $empleado_apellidopaterno) Return the first Empleado filtered by the empleado_apellidopaterno column
 * @method Empleado findOneByEmpleadoApallidomaterno(string $empleado_apallidomaterno) Return the first Empleado filtered by the empleado_apallidomaterno column
 * @method Empleado findOneByEmpleadoEmail(string $empleado_email) Return the first Empleado filtered by the empleado_email column
 * @method Empleado findOneByEmpleadoPassword(string $empleado_password) Return the first Empleado filtered by the empleado_password column
 * @method Empleado findOneByEmpleadoCelular(string $empleado_celular) Return the first Empleado filtered by the empleado_celular column
 * @method Empleado findOneByEmpleadoTelefono(string $empleado_telefono) Return the first Empleado filtered by the empleado_telefono column
 * @method Empleado findOneByEmpleadoCalle(string $empleado_calle) Return the first Empleado filtered by the empleado_calle column
 * @method Empleado findOneByEmpleadoNumero(string $empleado_numero) Return the first Empleado filtered by the empleado_numero column
 * @method Empleado findOneByEmpleadoInterior(string $empleado_interior) Return the first Empleado filtered by the empleado_interior column
 * @method Empleado findOneByEmpleadoColonia(string $empleado_colonia) Return the first Empleado filtered by the empleado_colonia column
 * @method Empleado findOneByEmpleadoCodigopostal(string $empleado_codigopostal) Return the first Empleado filtered by the empleado_codigopostal column
 * @method Empleado findOneByEmpleadoCiudad(string $empleado_ciudad) Return the first Empleado filtered by the empleado_ciudad column
 * @method Empleado findOneByEmpleadoEstado(string $empleado_estado) Return the first Empleado filtered by the empleado_estado column
 * @method Empleado findOneByEmpleadoNss(string $empleado_nss) Return the first Empleado filtered by the empleado_nss column
 * @method Empleado findOneByEmpleadoRfc(string $empleado_rfc) Return the first Empleado filtered by the empleado_rfc column
 * @method Empleado findOneByEmpleadoIniciocontrato(string $empleado_iniciocontrato) Return the first Empleado filtered by the empleado_iniciocontrato column
 * @method Empleado findOneByEmpleadoNombrecontacto(string $empleado_nombrecontacto) Return the first Empleado filtered by the empleado_nombrecontacto column
 * @method Empleado findOneByEmpleadoTelefonocontacto(string $empleado_telefonocontacto) Return the first Empleado filtered by the empleado_telefonocontacto column
 * @method Empleado findOneByEmpleadoEstatus(string $empleado_estatus) Return the first Empleado filtered by the empleado_estatus column
 * @method Empleado findOneByEmpleadoRol(string $empleado_rol) Return the first Empleado filtered by the empleado_rol column
 * @method Empleado findOneByEmpleadoFoto(string $empleado_foto) Return the first Empleado filtered by the empleado_foto column
 *
 * @method array findByIdempleado(int $idempleado) Return Empleado objects filtered by the idempleado column
 * @method array findByEmpleadoNombre(string $empleado_nombre) Return Empleado objects filtered by the empleado_nombre column
 * @method array findByEmpleadoApellidopaterno(string $empleado_apellidopaterno) Return Empleado objects filtered by the empleado_apellidopaterno column
 * @method array findByEmpleadoApallidomaterno(string $empleado_apallidomaterno) Return Empleado objects filtered by the empleado_apallidomaterno column
 * @method array findByEmpleadoEmail(string $empleado_email) Return Empleado objects filtered by the empleado_email column
 * @method array findByEmpleadoPassword(string $empleado_password) Return Empleado objects filtered by the empleado_password column
 * @method array findByEmpleadoCelular(string $empleado_celular) Return Empleado objects filtered by the empleado_celular column
 * @method array findByEmpleadoTelefono(string $empleado_telefono) Return Empleado objects filtered by the empleado_telefono column
 * @method array findByEmpleadoCalle(string $empleado_calle) Return Empleado objects filtered by the empleado_calle column
 * @method array findByEmpleadoNumero(string $empleado_numero) Return Empleado objects filtered by the empleado_numero column
 * @method array findByEmpleadoInterior(string $empleado_interior) Return Empleado objects filtered by the empleado_interior column
 * @method array findByEmpleadoColonia(string $empleado_colonia) Return Empleado objects filtered by the empleado_colonia column
 * @method array findByEmpleadoCodigopostal(string $empleado_codigopostal) Return Empleado objects filtered by the empleado_codigopostal column
 * @method array findByEmpleadoCiudad(string $empleado_ciudad) Return Empleado objects filtered by the empleado_ciudad column
 * @method array findByEmpleadoEstado(string $empleado_estado) Return Empleado objects filtered by the empleado_estado column
 * @method array findByEmpleadoNss(string $empleado_nss) Return Empleado objects filtered by the empleado_nss column
 * @method array findByEmpleadoRfc(string $empleado_rfc) Return Empleado objects filtered by the empleado_rfc column
 * @method array findByEmpleadoIniciocontrato(string $empleado_iniciocontrato) Return Empleado objects filtered by the empleado_iniciocontrato column
 * @method array findByEmpleadoNombrecontacto(string $empleado_nombrecontacto) Return Empleado objects filtered by the empleado_nombrecontacto column
 * @method array findByEmpleadoTelefonocontacto(string $empleado_telefonocontacto) Return Empleado objects filtered by the empleado_telefonocontacto column
 * @method array findByEmpleadoEstatus(string $empleado_estatus) Return Empleado objects filtered by the empleado_estatus column
 * @method array findByEmpleadoRol(string $empleado_rol) Return Empleado objects filtered by the empleado_rol column
 * @method array findByEmpleadoFoto(string $empleado_foto) Return Empleado objects filtered by the empleado_foto column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseEmpleadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadoQuery object.
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
            $modelName = 'Empleado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadoQuery) {
            return $criteria;
        }
        $query = new EmpleadoQuery(null, null, $modelAlias);

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
     * @return   Empleado|Empleado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleado($key, $con = null)
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
     * @return                 Empleado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleado`, `empleado_nombre`, `empleado_apellidopaterno`, `empleado_apallidomaterno`, `empleado_email`, `empleado_password`, `empleado_celular`, `empleado_telefono`, `empleado_calle`, `empleado_numero`, `empleado_interior`, `empleado_colonia`, `empleado_codigopostal`, `empleado_ciudad`, `empleado_estado`, `empleado_nss`, `empleado_rfc`, `empleado_iniciocontrato`, `empleado_nombrecontacto`, `empleado_telefonocontacto`, `empleado_estatus`, `empleado_rol`, `empleado_foto` FROM `empleado` WHERE `idempleado` = :p0';
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
            $obj = new Empleado();
            $obj->hydrate($row);
            EmpleadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleado|Empleado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleado[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $keys, Criteria::IN);
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
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the empleado_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNombre('fooValue');   // WHERE empleado_nombre = 'fooValue'
     * $query->filterByEmpleadoNombre('%fooValue%'); // WHERE empleado_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNombre($empleadoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNombre)) {
                $empleadoNombre = str_replace('*', '%', $empleadoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NOMBRE, $empleadoNombre, $comparison);
    }

    /**
     * Filter the query on the empleado_apellidopaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoApellidopaterno('fooValue');   // WHERE empleado_apellidopaterno = 'fooValue'
     * $query->filterByEmpleadoApellidopaterno('%fooValue%'); // WHERE empleado_apellidopaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoApellidopaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoApellidopaterno($empleadoApellidopaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoApellidopaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoApellidopaterno)) {
                $empleadoApellidopaterno = str_replace('*', '%', $empleadoApellidopaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_APELLIDOPATERNO, $empleadoApellidopaterno, $comparison);
    }

    /**
     * Filter the query on the empleado_apallidomaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoApallidomaterno('fooValue');   // WHERE empleado_apallidomaterno = 'fooValue'
     * $query->filterByEmpleadoApallidomaterno('%fooValue%'); // WHERE empleado_apallidomaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoApallidomaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoApallidomaterno($empleadoApallidomaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoApallidomaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoApallidomaterno)) {
                $empleadoApallidomaterno = str_replace('*', '%', $empleadoApallidomaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_APALLIDOMATERNO, $empleadoApallidomaterno, $comparison);
    }

    /**
     * Filter the query on the empleado_email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoEmail('fooValue');   // WHERE empleado_email = 'fooValue'
     * $query->filterByEmpleadoEmail('%fooValue%'); // WHERE empleado_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoEmail($empleadoEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoEmail)) {
                $empleadoEmail = str_replace('*', '%', $empleadoEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_EMAIL, $empleadoEmail, $comparison);
    }

    /**
     * Filter the query on the empleado_password column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoPassword('fooValue');   // WHERE empleado_password = 'fooValue'
     * $query->filterByEmpleadoPassword('%fooValue%'); // WHERE empleado_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoPassword($empleadoPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoPassword)) {
                $empleadoPassword = str_replace('*', '%', $empleadoPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_PASSWORD, $empleadoPassword, $comparison);
    }

    /**
     * Filter the query on the empleado_celular column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCelular('fooValue');   // WHERE empleado_celular = 'fooValue'
     * $query->filterByEmpleadoCelular('%fooValue%'); // WHERE empleado_celular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCelular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCelular($empleadoCelular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCelular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCelular)) {
                $empleadoCelular = str_replace('*', '%', $empleadoCelular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CELULAR, $empleadoCelular, $comparison);
    }

    /**
     * Filter the query on the empleado_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoTelefono('fooValue');   // WHERE empleado_telefono = 'fooValue'
     * $query->filterByEmpleadoTelefono('%fooValue%'); // WHERE empleado_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoTelefono($empleadoTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoTelefono)) {
                $empleadoTelefono = str_replace('*', '%', $empleadoTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_TELEFONO, $empleadoTelefono, $comparison);
    }

    /**
     * Filter the query on the empleado_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCalle('fooValue');   // WHERE empleado_calle = 'fooValue'
     * $query->filterByEmpleadoCalle('%fooValue%'); // WHERE empleado_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCalle($empleadoCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCalle)) {
                $empleadoCalle = str_replace('*', '%', $empleadoCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CALLE, $empleadoCalle, $comparison);
    }

    /**
     * Filter the query on the empleado_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNumero('fooValue');   // WHERE empleado_numero = 'fooValue'
     * $query->filterByEmpleadoNumero('%fooValue%'); // WHERE empleado_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNumero($empleadoNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNumero)) {
                $empleadoNumero = str_replace('*', '%', $empleadoNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NUMERO, $empleadoNumero, $comparison);
    }

    /**
     * Filter the query on the empleado_interior column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoInterior('fooValue');   // WHERE empleado_interior = 'fooValue'
     * $query->filterByEmpleadoInterior('%fooValue%'); // WHERE empleado_interior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoInterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoInterior($empleadoInterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoInterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoInterior)) {
                $empleadoInterior = str_replace('*', '%', $empleadoInterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_INTERIOR, $empleadoInterior, $comparison);
    }

    /**
     * Filter the query on the empleado_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoColonia('fooValue');   // WHERE empleado_colonia = 'fooValue'
     * $query->filterByEmpleadoColonia('%fooValue%'); // WHERE empleado_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoColonia($empleadoColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoColonia)) {
                $empleadoColonia = str_replace('*', '%', $empleadoColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_COLONIA, $empleadoColonia, $comparison);
    }

    /**
     * Filter the query on the empleado_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCodigopostal('fooValue');   // WHERE empleado_codigopostal = 'fooValue'
     * $query->filterByEmpleadoCodigopostal('%fooValue%'); // WHERE empleado_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCodigopostal($empleadoCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCodigopostal)) {
                $empleadoCodigopostal = str_replace('*', '%', $empleadoCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL, $empleadoCodigopostal, $comparison);
    }

    /**
     * Filter the query on the empleado_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCiudad('fooValue');   // WHERE empleado_ciudad = 'fooValue'
     * $query->filterByEmpleadoCiudad('%fooValue%'); // WHERE empleado_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCiudad($empleadoCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCiudad)) {
                $empleadoCiudad = str_replace('*', '%', $empleadoCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CIUDAD, $empleadoCiudad, $comparison);
    }

    /**
     * Filter the query on the empleado_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoEstado('fooValue');   // WHERE empleado_estado = 'fooValue'
     * $query->filterByEmpleadoEstado('%fooValue%'); // WHERE empleado_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoEstado($empleadoEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoEstado)) {
                $empleadoEstado = str_replace('*', '%', $empleadoEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_ESTADO, $empleadoEstado, $comparison);
    }

    /**
     * Filter the query on the empleado_nss column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNss('fooValue');   // WHERE empleado_nss = 'fooValue'
     * $query->filterByEmpleadoNss('%fooValue%'); // WHERE empleado_nss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNss($empleadoNss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNss)) {
                $empleadoNss = str_replace('*', '%', $empleadoNss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NSS, $empleadoNss, $comparison);
    }

    /**
     * Filter the query on the empleado_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoRfc('fooValue');   // WHERE empleado_rfc = 'fooValue'
     * $query->filterByEmpleadoRfc('%fooValue%'); // WHERE empleado_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoRfc($empleadoRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoRfc)) {
                $empleadoRfc = str_replace('*', '%', $empleadoRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_RFC, $empleadoRfc, $comparison);
    }

    /**
     * Filter the query on the empleado_iniciocontrato column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoIniciocontrato('2011-03-14'); // WHERE empleado_iniciocontrato = '2011-03-14'
     * $query->filterByEmpleadoIniciocontrato('now'); // WHERE empleado_iniciocontrato = '2011-03-14'
     * $query->filterByEmpleadoIniciocontrato(array('max' => 'yesterday')); // WHERE empleado_iniciocontrato < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadoIniciocontrato The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoIniciocontrato($empleadoIniciocontrato = null, $comparison = null)
    {
        if (is_array($empleadoIniciocontrato)) {
            $useMinMax = false;
            if (isset($empleadoIniciocontrato['min'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_INICIOCONTRATO, $empleadoIniciocontrato['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadoIniciocontrato['max'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_INICIOCONTRATO, $empleadoIniciocontrato['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_INICIOCONTRATO, $empleadoIniciocontrato, $comparison);
    }

    /**
     * Filter the query on the empleado_nombrecontacto column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNombrecontacto('fooValue');   // WHERE empleado_nombrecontacto = 'fooValue'
     * $query->filterByEmpleadoNombrecontacto('%fooValue%'); // WHERE empleado_nombrecontacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNombrecontacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNombrecontacto($empleadoNombrecontacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNombrecontacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNombrecontacto)) {
                $empleadoNombrecontacto = str_replace('*', '%', $empleadoNombrecontacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NOMBRECONTACTO, $empleadoNombrecontacto, $comparison);
    }

    /**
     * Filter the query on the empleado_telefonocontacto column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoTelefonocontacto('fooValue');   // WHERE empleado_telefonocontacto = 'fooValue'
     * $query->filterByEmpleadoTelefonocontacto('%fooValue%'); // WHERE empleado_telefonocontacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoTelefonocontacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoTelefonocontacto($empleadoTelefonocontacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoTelefonocontacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoTelefonocontacto)) {
                $empleadoTelefonocontacto = str_replace('*', '%', $empleadoTelefonocontacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_TELEFONOCONTACTO, $empleadoTelefonocontacto, $comparison);
    }

    /**
     * Filter the query on the empleado_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoEstatus('fooValue');   // WHERE empleado_estatus = 'fooValue'
     * $query->filterByEmpleadoEstatus('%fooValue%'); // WHERE empleado_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoEstatus($empleadoEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoEstatus)) {
                $empleadoEstatus = str_replace('*', '%', $empleadoEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_ESTATUS, $empleadoEstatus, $comparison);
    }

    /**
     * Filter the query on the empleado_rol column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoRol('fooValue');   // WHERE empleado_rol = 'fooValue'
     * $query->filterByEmpleadoRol('%fooValue%'); // WHERE empleado_rol LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoRol The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoRol($empleadoRol = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoRol)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoRol)) {
                $empleadoRol = str_replace('*', '%', $empleadoRol);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_ROL, $empleadoRol, $comparison);
    }

    /**
     * Filter the query on the empleado_foto column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoFoto('fooValue');   // WHERE empleado_foto = 'fooValue'
     * $query->filterByEmpleadoFoto('%fooValue%'); // WHERE empleado_foto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoFoto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoFoto($empleadoFoto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoFoto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoFoto)) {
                $empleadoFoto = str_replace('*', '%', $empleadoFoto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FOTO, $empleadoFoto, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClienteRelatedByIdempleadocomercial($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $cliente->getIdempleadocomercial(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            return $this
                ->useClienteRelatedByIdempleadocomercialQuery()
                ->filterByPrimaryKeys($cliente->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClienteRelatedByIdempleadocomercial() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClienteRelatedByIdempleadocomercial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinClienteRelatedByIdempleadocomercial($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClienteRelatedByIdempleadocomercial');

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
            $this->addJoinObject($join, 'ClienteRelatedByIdempleadocomercial');
        }

        return $this;
    }

    /**
     * Use the ClienteRelatedByIdempleadocomercial relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteRelatedByIdempleadocomercialQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClienteRelatedByIdempleadocomercial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClienteRelatedByIdempleadocomercial', 'ClienteQuery');
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClienteRelatedByIdempleadooperaciones($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $cliente->getIdempleadooperaciones(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            return $this
                ->useClienteRelatedByIdempleadooperacionesQuery()
                ->filterByPrimaryKeys($cliente->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClienteRelatedByIdempleadooperaciones() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClienteRelatedByIdempleadooperaciones relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinClienteRelatedByIdempleadooperaciones($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClienteRelatedByIdempleadooperaciones');

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
            $this->addJoinObject($join, 'ClienteRelatedByIdempleadooperaciones');
        }

        return $this;
    }

    /**
     * Use the ClienteRelatedByIdempleadooperaciones relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteRelatedByIdempleadooperacionesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinClienteRelatedByIdempleadooperaciones($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClienteRelatedByIdempleadooperaciones', 'ClienteQuery');
    }

    /**
     * Filter the query by a related Expedientearchivo object
     *
     * @param   Expedientearchivo|PropelObjectCollection $expedientearchivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedientearchivo($expedientearchivo, $comparison = null)
    {
        if ($expedientearchivo instanceof Expedientearchivo) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $expedientearchivo->getIdempleado(), $comparison);
        } elseif ($expedientearchivo instanceof PropelObjectCollection) {
            return $this
                ->useExpedientearchivoQuery()
                ->filterByPrimaryKeys($expedientearchivo->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExpedientearchivo() only accepts arguments of type Expedientearchivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Expedientearchivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinExpedientearchivo($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Expedientearchivo');

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
            $this->addJoinObject($join, 'Expedientearchivo');
        }

        return $this;
    }

    /**
     * Use the Expedientearchivo relation Expedientearchivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExpedientearchivoQuery A secondary query class using the current class as primary query
     */
    public function useExpedientearchivoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExpedientearchivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expedientearchivo', 'ExpedientearchivoQuery');
    }

    /**
     * Filter the query by a related Expedientegasto object
     *
     * @param   Expedientegasto|PropelObjectCollection $expedientegasto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpedientegasto($expedientegasto, $comparison = null)
    {
        if ($expedientegasto instanceof Expedientegasto) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $expedientegasto->getIdempleado(), $comparison);
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
     * @return EmpleadoQuery The current query, for fluid interface
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
     * @param   Empleado $empleado Object to remove from the list of results
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function prune($empleado = null)
    {
        if ($empleado) {
            $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleado->getIdempleado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
