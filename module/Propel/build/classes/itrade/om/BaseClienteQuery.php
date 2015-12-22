<?php


/**
 * Base class that represents a query for the 'cliente' table.
 *
 *
 *
 * @method ClienteQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method ClienteQuery orderByClienteRazonsocial($order = Criteria::ASC) Order by the cliente_razonsocial column
 * @method ClienteQuery orderByClienteRfc($order = Criteria::ASC) Order by the cliente_rfc column
 * @method ClienteQuery orderByClienteCalle($order = Criteria::ASC) Order by the cliente_calle column
 * @method ClienteQuery orderByClienteNumero($order = Criteria::ASC) Order by the cliente_numero column
 * @method ClienteQuery orderByClienteInterior($order = Criteria::ASC) Order by the cliente_interior column
 * @method ClienteQuery orderByClienteColonia($order = Criteria::ASC) Order by the cliente_colonia column
 * @method ClienteQuery orderByClienteCiudad($order = Criteria::ASC) Order by the cliente_ciudad column
 * @method ClienteQuery orderByClienteEstado($order = Criteria::ASC) Order by the cliente_estado column
 * @method ClienteQuery orderByClientePais($order = Criteria::ASC) Order by the cliente_pais column
 * @method ClienteQuery orderByClienteEmail($order = Criteria::ASC) Order by the cliente_email column
 * @method ClienteQuery orderByClienteTelefono($order = Criteria::ASC) Order by the cliente_telefono column
 * @method ClienteQuery orderByClienteNombrecontacto($order = Criteria::ASC) Order by the cliente_nombrecontacto column
 * @method ClienteQuery orderByClienteCumpleanios($order = Criteria::ASC) Order by the cliente_cumpleanios column
 * @method ClienteQuery orderByClienteCallefiscal($order = Criteria::ASC) Order by the cliente_callefiscal column
 * @method ClienteQuery orderByClienteNumerofiscal($order = Criteria::ASC) Order by the cliente_numerofiscal column
 * @method ClienteQuery orderByClienteInteriorfiscal($order = Criteria::ASC) Order by the cliente_interiorfiscal column
 * @method ClienteQuery orderByClienteColoniafiscal($order = Criteria::ASC) Order by the cliente_coloniafiscal column
 * @method ClienteQuery orderByClienteCiudadfiscal($order = Criteria::ASC) Order by the cliente_ciudadfiscal column
 * @method ClienteQuery orderByClienteEstadofiscal($order = Criteria::ASC) Order by the cliente_estadofiscal column
 * @method ClienteQuery orderByClientePaisfiscal($order = Criteria::ASC) Order by the cliente_paisfiscal column
 * @method ClienteQuery orderByClientePadronimportador($order = Criteria::ASC) Order by the cliente_padronimportador column
 * @method ClienteQuery orderByClienteEncargadoconferido($order = Criteria::ASC) Order by the cliente_encargadoconferido column
 * @method ClienteQuery orderByClienteR1($order = Criteria::ASC) Order by the cliente_r1 column
 * @method ClienteQuery orderByClienteR2($order = Criteria::ASC) Order by the cliente_r2 column
 * @method ClienteQuery orderByClienteIdentificacionrepresentantelegal($order = Criteria::ASC) Order by the cliente_identificacionrepresentantelegal column
 * @method ClienteQuery orderByClienteRfcrepresentantelegal($order = Criteria::ASC) Order by the cliente_rfcrepresentantelegal column
 * @method ClienteQuery orderByClienteActaconstitutiva($order = Criteria::ASC) Order by the cliente_actaconstitutiva column
 * @method ClienteQuery orderByClientePodernotarial($order = Criteria::ASC) Order by the cliente_podernotarial column
 * @method ClienteQuery orderByClienteCartaencomienda($order = Criteria::ASC) Order by the cliente_cartaencomienda column
 * @method ClienteQuery orderByClienteComprobantedomicilio($order = Criteria::ASC) Order by the cliente_comprobantedomicilio column
 * @method ClienteQuery orderByClienteComprobanteclabe($order = Criteria::ASC) Order by the cliente_comprobanteclabe column
 * @method ClienteQuery orderByClienteClabe($order = Criteria::ASC) Order by the cliente_clabe column
 * @method ClienteQuery orderByClienteArchivoszip($order = Criteria::ASC) Order by the cliente_archivoszip column
 * @method ClienteQuery orderByIdempleadocomercial($order = Criteria::ASC) Order by the idempleadocomercial column
 * @method ClienteQuery orderByIdempleadooperaciones($order = Criteria::ASC) Order by the idempleadooperaciones column
 *
 * @method ClienteQuery groupByIdcliente() Group by the idcliente column
 * @method ClienteQuery groupByClienteRazonsocial() Group by the cliente_razonsocial column
 * @method ClienteQuery groupByClienteRfc() Group by the cliente_rfc column
 * @method ClienteQuery groupByClienteCalle() Group by the cliente_calle column
 * @method ClienteQuery groupByClienteNumero() Group by the cliente_numero column
 * @method ClienteQuery groupByClienteInterior() Group by the cliente_interior column
 * @method ClienteQuery groupByClienteColonia() Group by the cliente_colonia column
 * @method ClienteQuery groupByClienteCiudad() Group by the cliente_ciudad column
 * @method ClienteQuery groupByClienteEstado() Group by the cliente_estado column
 * @method ClienteQuery groupByClientePais() Group by the cliente_pais column
 * @method ClienteQuery groupByClienteEmail() Group by the cliente_email column
 * @method ClienteQuery groupByClienteTelefono() Group by the cliente_telefono column
 * @method ClienteQuery groupByClienteNombrecontacto() Group by the cliente_nombrecontacto column
 * @method ClienteQuery groupByClienteCumpleanios() Group by the cliente_cumpleanios column
 * @method ClienteQuery groupByClienteCallefiscal() Group by the cliente_callefiscal column
 * @method ClienteQuery groupByClienteNumerofiscal() Group by the cliente_numerofiscal column
 * @method ClienteQuery groupByClienteInteriorfiscal() Group by the cliente_interiorfiscal column
 * @method ClienteQuery groupByClienteColoniafiscal() Group by the cliente_coloniafiscal column
 * @method ClienteQuery groupByClienteCiudadfiscal() Group by the cliente_ciudadfiscal column
 * @method ClienteQuery groupByClienteEstadofiscal() Group by the cliente_estadofiscal column
 * @method ClienteQuery groupByClientePaisfiscal() Group by the cliente_paisfiscal column
 * @method ClienteQuery groupByClientePadronimportador() Group by the cliente_padronimportador column
 * @method ClienteQuery groupByClienteEncargadoconferido() Group by the cliente_encargadoconferido column
 * @method ClienteQuery groupByClienteR1() Group by the cliente_r1 column
 * @method ClienteQuery groupByClienteR2() Group by the cliente_r2 column
 * @method ClienteQuery groupByClienteIdentificacionrepresentantelegal() Group by the cliente_identificacionrepresentantelegal column
 * @method ClienteQuery groupByClienteRfcrepresentantelegal() Group by the cliente_rfcrepresentantelegal column
 * @method ClienteQuery groupByClienteActaconstitutiva() Group by the cliente_actaconstitutiva column
 * @method ClienteQuery groupByClientePodernotarial() Group by the cliente_podernotarial column
 * @method ClienteQuery groupByClienteCartaencomienda() Group by the cliente_cartaencomienda column
 * @method ClienteQuery groupByClienteComprobantedomicilio() Group by the cliente_comprobantedomicilio column
 * @method ClienteQuery groupByClienteComprobanteclabe() Group by the cliente_comprobanteclabe column
 * @method ClienteQuery groupByClienteClabe() Group by the cliente_clabe column
 * @method ClienteQuery groupByClienteArchivoszip() Group by the cliente_archivoszip column
 * @method ClienteQuery groupByIdempleadocomercial() Group by the idempleadocomercial column
 * @method ClienteQuery groupByIdempleadooperaciones() Group by the idempleadooperaciones column
 *
 * @method ClienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClienteQuery leftJoinEmpleadoRelatedByIdempleadocomercial($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadocomercial relation
 * @method ClienteQuery rightJoinEmpleadoRelatedByIdempleadocomercial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadocomercial relation
 * @method ClienteQuery innerJoinEmpleadoRelatedByIdempleadocomercial($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadocomercial relation
 *
 * @method ClienteQuery leftJoinEmpleadoRelatedByIdempleadooperaciones($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadooperaciones relation
 * @method ClienteQuery rightJoinEmpleadoRelatedByIdempleadooperaciones($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadooperaciones relation
 * @method ClienteQuery innerJoinEmpleadoRelatedByIdempleadooperaciones($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadooperaciones relation
 *
 * @method ClienteQuery leftJoinExpediente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Expediente relation
 * @method ClienteQuery rightJoinExpediente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Expediente relation
 * @method ClienteQuery innerJoinExpediente($relationAlias = null) Adds a INNER JOIN clause to the query using the Expediente relation
 *
 * @method Cliente findOne(PropelPDO $con = null) Return the first Cliente matching the query
 * @method Cliente findOneOrCreate(PropelPDO $con = null) Return the first Cliente matching the query, or a new Cliente object populated from the query conditions when no match is found
 *
 * @method Cliente findOneByClienteRazonsocial(string $cliente_razonsocial) Return the first Cliente filtered by the cliente_razonsocial column
 * @method Cliente findOneByClienteRfc(string $cliente_rfc) Return the first Cliente filtered by the cliente_rfc column
 * @method Cliente findOneByClienteCalle(string $cliente_calle) Return the first Cliente filtered by the cliente_calle column
 * @method Cliente findOneByClienteNumero(string $cliente_numero) Return the first Cliente filtered by the cliente_numero column
 * @method Cliente findOneByClienteInterior(string $cliente_interior) Return the first Cliente filtered by the cliente_interior column
 * @method Cliente findOneByClienteColonia(string $cliente_colonia) Return the first Cliente filtered by the cliente_colonia column
 * @method Cliente findOneByClienteCiudad(string $cliente_ciudad) Return the first Cliente filtered by the cliente_ciudad column
 * @method Cliente findOneByClienteEstado(string $cliente_estado) Return the first Cliente filtered by the cliente_estado column
 * @method Cliente findOneByClientePais(string $cliente_pais) Return the first Cliente filtered by the cliente_pais column
 * @method Cliente findOneByClienteEmail(string $cliente_email) Return the first Cliente filtered by the cliente_email column
 * @method Cliente findOneByClienteTelefono(string $cliente_telefono) Return the first Cliente filtered by the cliente_telefono column
 * @method Cliente findOneByClienteNombrecontacto(string $cliente_nombrecontacto) Return the first Cliente filtered by the cliente_nombrecontacto column
 * @method Cliente findOneByClienteCumpleanios(string $cliente_cumpleanios) Return the first Cliente filtered by the cliente_cumpleanios column
 * @method Cliente findOneByClienteCallefiscal(string $cliente_callefiscal) Return the first Cliente filtered by the cliente_callefiscal column
 * @method Cliente findOneByClienteNumerofiscal(string $cliente_numerofiscal) Return the first Cliente filtered by the cliente_numerofiscal column
 * @method Cliente findOneByClienteInteriorfiscal(string $cliente_interiorfiscal) Return the first Cliente filtered by the cliente_interiorfiscal column
 * @method Cliente findOneByClienteColoniafiscal(string $cliente_coloniafiscal) Return the first Cliente filtered by the cliente_coloniafiscal column
 * @method Cliente findOneByClienteCiudadfiscal(string $cliente_ciudadfiscal) Return the first Cliente filtered by the cliente_ciudadfiscal column
 * @method Cliente findOneByClienteEstadofiscal(string $cliente_estadofiscal) Return the first Cliente filtered by the cliente_estadofiscal column
 * @method Cliente findOneByClientePaisfiscal(string $cliente_paisfiscal) Return the first Cliente filtered by the cliente_paisfiscal column
 * @method Cliente findOneByClientePadronimportador(string $cliente_padronimportador) Return the first Cliente filtered by the cliente_padronimportador column
 * @method Cliente findOneByClienteEncargadoconferido(string $cliente_encargadoconferido) Return the first Cliente filtered by the cliente_encargadoconferido column
 * @method Cliente findOneByClienteR1(string $cliente_r1) Return the first Cliente filtered by the cliente_r1 column
 * @method Cliente findOneByClienteR2(string $cliente_r2) Return the first Cliente filtered by the cliente_r2 column
 * @method Cliente findOneByClienteIdentificacionrepresentantelegal(string $cliente_identificacionrepresentantelegal) Return the first Cliente filtered by the cliente_identificacionrepresentantelegal column
 * @method Cliente findOneByClienteRfcrepresentantelegal(string $cliente_rfcrepresentantelegal) Return the first Cliente filtered by the cliente_rfcrepresentantelegal column
 * @method Cliente findOneByClienteActaconstitutiva(string $cliente_actaconstitutiva) Return the first Cliente filtered by the cliente_actaconstitutiva column
 * @method Cliente findOneByClientePodernotarial(string $cliente_podernotarial) Return the first Cliente filtered by the cliente_podernotarial column
 * @method Cliente findOneByClienteCartaencomienda(string $cliente_cartaencomienda) Return the first Cliente filtered by the cliente_cartaencomienda column
 * @method Cliente findOneByClienteComprobantedomicilio(string $cliente_comprobantedomicilio) Return the first Cliente filtered by the cliente_comprobantedomicilio column
 * @method Cliente findOneByClienteComprobanteclabe(string $cliente_comprobanteclabe) Return the first Cliente filtered by the cliente_comprobanteclabe column
 * @method Cliente findOneByClienteClabe(string $cliente_clabe) Return the first Cliente filtered by the cliente_clabe column
 * @method Cliente findOneByClienteArchivoszip(string $cliente_archivoszip) Return the first Cliente filtered by the cliente_archivoszip column
 * @method Cliente findOneByIdempleadocomercial(int $idempleadocomercial) Return the first Cliente filtered by the idempleadocomercial column
 * @method Cliente findOneByIdempleadooperaciones(int $idempleadooperaciones) Return the first Cliente filtered by the idempleadooperaciones column
 *
 * @method array findByIdcliente(int $idcliente) Return Cliente objects filtered by the idcliente column
 * @method array findByClienteRazonsocial(string $cliente_razonsocial) Return Cliente objects filtered by the cliente_razonsocial column
 * @method array findByClienteRfc(string $cliente_rfc) Return Cliente objects filtered by the cliente_rfc column
 * @method array findByClienteCalle(string $cliente_calle) Return Cliente objects filtered by the cliente_calle column
 * @method array findByClienteNumero(string $cliente_numero) Return Cliente objects filtered by the cliente_numero column
 * @method array findByClienteInterior(string $cliente_interior) Return Cliente objects filtered by the cliente_interior column
 * @method array findByClienteColonia(string $cliente_colonia) Return Cliente objects filtered by the cliente_colonia column
 * @method array findByClienteCiudad(string $cliente_ciudad) Return Cliente objects filtered by the cliente_ciudad column
 * @method array findByClienteEstado(string $cliente_estado) Return Cliente objects filtered by the cliente_estado column
 * @method array findByClientePais(string $cliente_pais) Return Cliente objects filtered by the cliente_pais column
 * @method array findByClienteEmail(string $cliente_email) Return Cliente objects filtered by the cliente_email column
 * @method array findByClienteTelefono(string $cliente_telefono) Return Cliente objects filtered by the cliente_telefono column
 * @method array findByClienteNombrecontacto(string $cliente_nombrecontacto) Return Cliente objects filtered by the cliente_nombrecontacto column
 * @method array findByClienteCumpleanios(string $cliente_cumpleanios) Return Cliente objects filtered by the cliente_cumpleanios column
 * @method array findByClienteCallefiscal(string $cliente_callefiscal) Return Cliente objects filtered by the cliente_callefiscal column
 * @method array findByClienteNumerofiscal(string $cliente_numerofiscal) Return Cliente objects filtered by the cliente_numerofiscal column
 * @method array findByClienteInteriorfiscal(string $cliente_interiorfiscal) Return Cliente objects filtered by the cliente_interiorfiscal column
 * @method array findByClienteColoniafiscal(string $cliente_coloniafiscal) Return Cliente objects filtered by the cliente_coloniafiscal column
 * @method array findByClienteCiudadfiscal(string $cliente_ciudadfiscal) Return Cliente objects filtered by the cliente_ciudadfiscal column
 * @method array findByClienteEstadofiscal(string $cliente_estadofiscal) Return Cliente objects filtered by the cliente_estadofiscal column
 * @method array findByClientePaisfiscal(string $cliente_paisfiscal) Return Cliente objects filtered by the cliente_paisfiscal column
 * @method array findByClientePadronimportador(string $cliente_padronimportador) Return Cliente objects filtered by the cliente_padronimportador column
 * @method array findByClienteEncargadoconferido(string $cliente_encargadoconferido) Return Cliente objects filtered by the cliente_encargadoconferido column
 * @method array findByClienteR1(string $cliente_r1) Return Cliente objects filtered by the cliente_r1 column
 * @method array findByClienteR2(string $cliente_r2) Return Cliente objects filtered by the cliente_r2 column
 * @method array findByClienteIdentificacionrepresentantelegal(string $cliente_identificacionrepresentantelegal) Return Cliente objects filtered by the cliente_identificacionrepresentantelegal column
 * @method array findByClienteRfcrepresentantelegal(string $cliente_rfcrepresentantelegal) Return Cliente objects filtered by the cliente_rfcrepresentantelegal column
 * @method array findByClienteActaconstitutiva(string $cliente_actaconstitutiva) Return Cliente objects filtered by the cliente_actaconstitutiva column
 * @method array findByClientePodernotarial(string $cliente_podernotarial) Return Cliente objects filtered by the cliente_podernotarial column
 * @method array findByClienteCartaencomienda(string $cliente_cartaencomienda) Return Cliente objects filtered by the cliente_cartaencomienda column
 * @method array findByClienteComprobantedomicilio(string $cliente_comprobantedomicilio) Return Cliente objects filtered by the cliente_comprobantedomicilio column
 * @method array findByClienteComprobanteclabe(string $cliente_comprobanteclabe) Return Cliente objects filtered by the cliente_comprobanteclabe column
 * @method array findByClienteClabe(string $cliente_clabe) Return Cliente objects filtered by the cliente_clabe column
 * @method array findByClienteArchivoszip(string $cliente_archivoszip) Return Cliente objects filtered by the cliente_archivoszip column
 * @method array findByIdempleadocomercial(int $idempleadocomercial) Return Cliente objects filtered by the idempleadocomercial column
 * @method array findByIdempleadooperaciones(int $idempleadooperaciones) Return Cliente objects filtered by the idempleadooperaciones column
 *
 * @package    propel.generator.itrade.om
 */
abstract class BaseClienteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClienteQuery object.
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
            $modelName = 'Cliente';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClienteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClienteQuery) {
            return $criteria;
        }
        $query = new ClienteQuery(null, null, $modelAlias);

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
     * @return   Cliente|Cliente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cliente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcliente($key, $con = null)
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
     * @return                 Cliente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcliente`, `cliente_razonsocial`, `cliente_rfc`, `cliente_calle`, `cliente_numero`, `cliente_interior`, `cliente_colonia`, `cliente_ciudad`, `cliente_estado`, `cliente_pais`, `cliente_email`, `cliente_telefono`, `cliente_nombrecontacto`, `cliente_cumpleanios`, `cliente_callefiscal`, `cliente_numerofiscal`, `cliente_interiorfiscal`, `cliente_coloniafiscal`, `cliente_ciudadfiscal`, `cliente_estadofiscal`, `cliente_paisfiscal`, `cliente_padronimportador`, `cliente_encargadoconferido`, `cliente_r1`, `cliente_r2`, `cliente_identificacionrepresentantelegal`, `cliente_rfcrepresentantelegal`, `cliente_actaconstitutiva`, `cliente_podernotarial`, `cliente_cartaencomienda`, `cliente_comprobantedomicilio`, `cliente_comprobanteclabe`, `cliente_clabe`, `cliente_archivoszip`, `idempleadocomercial`, `idempleadooperaciones` FROM `cliente` WHERE `idcliente` = :p0';
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
            $obj = new Cliente();
            $obj->hydrate($row);
            ClientePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cliente|Cliente[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cliente[]|mixed the list of results, formatted by the current formatter
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
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientePeer::IDCLIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientePeer::IDCLIENTE, $keys, Criteria::IN);
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
     * @param     mixed $idcliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByIdcliente($idcliente = null, $comparison = null)
    {
        if (is_array($idcliente)) {
            $useMinMax = false;
            if (isset($idcliente['min'])) {
                $this->addUsingAlias(ClientePeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcliente['max'])) {
                $this->addUsingAlias(ClientePeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientePeer::IDCLIENTE, $idcliente, $comparison);
    }

    /**
     * Filter the query on the cliente_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteRazonsocial('fooValue');   // WHERE cliente_razonsocial = 'fooValue'
     * $query->filterByClienteRazonsocial('%fooValue%'); // WHERE cliente_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteRazonsocial($clienteRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteRazonsocial)) {
                $clienteRazonsocial = str_replace('*', '%', $clienteRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_RAZONSOCIAL, $clienteRazonsocial, $comparison);
    }

    /**
     * Filter the query on the cliente_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteRfc('fooValue');   // WHERE cliente_rfc = 'fooValue'
     * $query->filterByClienteRfc('%fooValue%'); // WHERE cliente_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteRfc($clienteRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteRfc)) {
                $clienteRfc = str_replace('*', '%', $clienteRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_RFC, $clienteRfc, $comparison);
    }

    /**
     * Filter the query on the cliente_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCalle('fooValue');   // WHERE cliente_calle = 'fooValue'
     * $query->filterByClienteCalle('%fooValue%'); // WHERE cliente_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCalle($clienteCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCalle)) {
                $clienteCalle = str_replace('*', '%', $clienteCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CALLE, $clienteCalle, $comparison);
    }

    /**
     * Filter the query on the cliente_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteNumero('fooValue');   // WHERE cliente_numero = 'fooValue'
     * $query->filterByClienteNumero('%fooValue%'); // WHERE cliente_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteNumero($clienteNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteNumero)) {
                $clienteNumero = str_replace('*', '%', $clienteNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_NUMERO, $clienteNumero, $comparison);
    }

    /**
     * Filter the query on the cliente_interior column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteInterior('fooValue');   // WHERE cliente_interior = 'fooValue'
     * $query->filterByClienteInterior('%fooValue%'); // WHERE cliente_interior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteInterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteInterior($clienteInterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteInterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteInterior)) {
                $clienteInterior = str_replace('*', '%', $clienteInterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_INTERIOR, $clienteInterior, $comparison);
    }

    /**
     * Filter the query on the cliente_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteColonia('fooValue');   // WHERE cliente_colonia = 'fooValue'
     * $query->filterByClienteColonia('%fooValue%'); // WHERE cliente_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteColonia($clienteColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteColonia)) {
                $clienteColonia = str_replace('*', '%', $clienteColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_COLONIA, $clienteColonia, $comparison);
    }

    /**
     * Filter the query on the cliente_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCiudad('fooValue');   // WHERE cliente_ciudad = 'fooValue'
     * $query->filterByClienteCiudad('%fooValue%'); // WHERE cliente_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCiudad($clienteCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCiudad)) {
                $clienteCiudad = str_replace('*', '%', $clienteCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CIUDAD, $clienteCiudad, $comparison);
    }

    /**
     * Filter the query on the cliente_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteEstado('fooValue');   // WHERE cliente_estado = 'fooValue'
     * $query->filterByClienteEstado('%fooValue%'); // WHERE cliente_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteEstado($clienteEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteEstado)) {
                $clienteEstado = str_replace('*', '%', $clienteEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_ESTADO, $clienteEstado, $comparison);
    }

    /**
     * Filter the query on the cliente_pais column
     *
     * Example usage:
     * <code>
     * $query->filterByClientePais('fooValue');   // WHERE cliente_pais = 'fooValue'
     * $query->filterByClientePais('%fooValue%'); // WHERE cliente_pais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clientePais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClientePais($clientePais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clientePais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clientePais)) {
                $clientePais = str_replace('*', '%', $clientePais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_PAIS, $clientePais, $comparison);
    }

    /**
     * Filter the query on the cliente_email column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteEmail('fooValue');   // WHERE cliente_email = 'fooValue'
     * $query->filterByClienteEmail('%fooValue%'); // WHERE cliente_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteEmail($clienteEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteEmail)) {
                $clienteEmail = str_replace('*', '%', $clienteEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_EMAIL, $clienteEmail, $comparison);
    }

    /**
     * Filter the query on the cliente_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteTelefono('fooValue');   // WHERE cliente_telefono = 'fooValue'
     * $query->filterByClienteTelefono('%fooValue%'); // WHERE cliente_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteTelefono($clienteTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteTelefono)) {
                $clienteTelefono = str_replace('*', '%', $clienteTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_TELEFONO, $clienteTelefono, $comparison);
    }

    /**
     * Filter the query on the cliente_nombrecontacto column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteNombrecontacto('fooValue');   // WHERE cliente_nombrecontacto = 'fooValue'
     * $query->filterByClienteNombrecontacto('%fooValue%'); // WHERE cliente_nombrecontacto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteNombrecontacto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteNombrecontacto($clienteNombrecontacto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteNombrecontacto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteNombrecontacto)) {
                $clienteNombrecontacto = str_replace('*', '%', $clienteNombrecontacto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_NOMBRECONTACTO, $clienteNombrecontacto, $comparison);
    }

    /**
     * Filter the query on the cliente_cumpleanios column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCumpleanios('fooValue');   // WHERE cliente_cumpleanios = 'fooValue'
     * $query->filterByClienteCumpleanios('%fooValue%'); // WHERE cliente_cumpleanios LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCumpleanios The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCumpleanios($clienteCumpleanios = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCumpleanios)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCumpleanios)) {
                $clienteCumpleanios = str_replace('*', '%', $clienteCumpleanios);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CUMPLEANIOS, $clienteCumpleanios, $comparison);
    }

    /**
     * Filter the query on the cliente_callefiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCallefiscal('fooValue');   // WHERE cliente_callefiscal = 'fooValue'
     * $query->filterByClienteCallefiscal('%fooValue%'); // WHERE cliente_callefiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCallefiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCallefiscal($clienteCallefiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCallefiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCallefiscal)) {
                $clienteCallefiscal = str_replace('*', '%', $clienteCallefiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CALLEFISCAL, $clienteCallefiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_numerofiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteNumerofiscal('fooValue');   // WHERE cliente_numerofiscal = 'fooValue'
     * $query->filterByClienteNumerofiscal('%fooValue%'); // WHERE cliente_numerofiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteNumerofiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteNumerofiscal($clienteNumerofiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteNumerofiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteNumerofiscal)) {
                $clienteNumerofiscal = str_replace('*', '%', $clienteNumerofiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_NUMEROFISCAL, $clienteNumerofiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_interiorfiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteInteriorfiscal('fooValue');   // WHERE cliente_interiorfiscal = 'fooValue'
     * $query->filterByClienteInteriorfiscal('%fooValue%'); // WHERE cliente_interiorfiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteInteriorfiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteInteriorfiscal($clienteInteriorfiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteInteriorfiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteInteriorfiscal)) {
                $clienteInteriorfiscal = str_replace('*', '%', $clienteInteriorfiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_INTERIORFISCAL, $clienteInteriorfiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_coloniafiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteColoniafiscal('fooValue');   // WHERE cliente_coloniafiscal = 'fooValue'
     * $query->filterByClienteColoniafiscal('%fooValue%'); // WHERE cliente_coloniafiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteColoniafiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteColoniafiscal($clienteColoniafiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteColoniafiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteColoniafiscal)) {
                $clienteColoniafiscal = str_replace('*', '%', $clienteColoniafiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_COLONIAFISCAL, $clienteColoniafiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_ciudadfiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCiudadfiscal('fooValue');   // WHERE cliente_ciudadfiscal = 'fooValue'
     * $query->filterByClienteCiudadfiscal('%fooValue%'); // WHERE cliente_ciudadfiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCiudadfiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCiudadfiscal($clienteCiudadfiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCiudadfiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCiudadfiscal)) {
                $clienteCiudadfiscal = str_replace('*', '%', $clienteCiudadfiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CIUDADFISCAL, $clienteCiudadfiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_estadofiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteEstadofiscal('fooValue');   // WHERE cliente_estadofiscal = 'fooValue'
     * $query->filterByClienteEstadofiscal('%fooValue%'); // WHERE cliente_estadofiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteEstadofiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteEstadofiscal($clienteEstadofiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteEstadofiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteEstadofiscal)) {
                $clienteEstadofiscal = str_replace('*', '%', $clienteEstadofiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_ESTADOFISCAL, $clienteEstadofiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_paisfiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClientePaisfiscal('fooValue');   // WHERE cliente_paisfiscal = 'fooValue'
     * $query->filterByClientePaisfiscal('%fooValue%'); // WHERE cliente_paisfiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clientePaisfiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClientePaisfiscal($clientePaisfiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clientePaisfiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clientePaisfiscal)) {
                $clientePaisfiscal = str_replace('*', '%', $clientePaisfiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_PAISFISCAL, $clientePaisfiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_padronimportador column
     *
     * Example usage:
     * <code>
     * $query->filterByClientePadronimportador('fooValue');   // WHERE cliente_padronimportador = 'fooValue'
     * $query->filterByClientePadronimportador('%fooValue%'); // WHERE cliente_padronimportador LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clientePadronimportador The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClientePadronimportador($clientePadronimportador = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clientePadronimportador)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clientePadronimportador)) {
                $clientePadronimportador = str_replace('*', '%', $clientePadronimportador);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_PADRONIMPORTADOR, $clientePadronimportador, $comparison);
    }

    /**
     * Filter the query on the cliente_encargadoconferido column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteEncargadoconferido('fooValue');   // WHERE cliente_encargadoconferido = 'fooValue'
     * $query->filterByClienteEncargadoconferido('%fooValue%'); // WHERE cliente_encargadoconferido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteEncargadoconferido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteEncargadoconferido($clienteEncargadoconferido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteEncargadoconferido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteEncargadoconferido)) {
                $clienteEncargadoconferido = str_replace('*', '%', $clienteEncargadoconferido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_ENCARGADOCONFERIDO, $clienteEncargadoconferido, $comparison);
    }

    /**
     * Filter the query on the cliente_r1 column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteR1('fooValue');   // WHERE cliente_r1 = 'fooValue'
     * $query->filterByClienteR1('%fooValue%'); // WHERE cliente_r1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteR1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteR1($clienteR1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteR1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteR1)) {
                $clienteR1 = str_replace('*', '%', $clienteR1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_R1, $clienteR1, $comparison);
    }

    /**
     * Filter the query on the cliente_r2 column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteR2('fooValue');   // WHERE cliente_r2 = 'fooValue'
     * $query->filterByClienteR2('%fooValue%'); // WHERE cliente_r2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteR2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteR2($clienteR2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteR2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteR2)) {
                $clienteR2 = str_replace('*', '%', $clienteR2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_R2, $clienteR2, $comparison);
    }

    /**
     * Filter the query on the cliente_identificacionrepresentantelegal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteIdentificacionrepresentantelegal('fooValue');   // WHERE cliente_identificacionrepresentantelegal = 'fooValue'
     * $query->filterByClienteIdentificacionrepresentantelegal('%fooValue%'); // WHERE cliente_identificacionrepresentantelegal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteIdentificacionrepresentantelegal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteIdentificacionrepresentantelegal($clienteIdentificacionrepresentantelegal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteIdentificacionrepresentantelegal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteIdentificacionrepresentantelegal)) {
                $clienteIdentificacionrepresentantelegal = str_replace('*', '%', $clienteIdentificacionrepresentantelegal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_IDENTIFICACIONREPRESENTANTELEGAL, $clienteIdentificacionrepresentantelegal, $comparison);
    }

    /**
     * Filter the query on the cliente_rfcrepresentantelegal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteRfcrepresentantelegal('fooValue');   // WHERE cliente_rfcrepresentantelegal = 'fooValue'
     * $query->filterByClienteRfcrepresentantelegal('%fooValue%'); // WHERE cliente_rfcrepresentantelegal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteRfcrepresentantelegal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteRfcrepresentantelegal($clienteRfcrepresentantelegal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteRfcrepresentantelegal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteRfcrepresentantelegal)) {
                $clienteRfcrepresentantelegal = str_replace('*', '%', $clienteRfcrepresentantelegal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_RFCREPRESENTANTELEGAL, $clienteRfcrepresentantelegal, $comparison);
    }

    /**
     * Filter the query on the cliente_actaconstitutiva column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteActaconstitutiva('fooValue');   // WHERE cliente_actaconstitutiva = 'fooValue'
     * $query->filterByClienteActaconstitutiva('%fooValue%'); // WHERE cliente_actaconstitutiva LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteActaconstitutiva The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteActaconstitutiva($clienteActaconstitutiva = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteActaconstitutiva)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteActaconstitutiva)) {
                $clienteActaconstitutiva = str_replace('*', '%', $clienteActaconstitutiva);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_ACTACONSTITUTIVA, $clienteActaconstitutiva, $comparison);
    }

    /**
     * Filter the query on the cliente_podernotarial column
     *
     * Example usage:
     * <code>
     * $query->filterByClientePodernotarial('fooValue');   // WHERE cliente_podernotarial = 'fooValue'
     * $query->filterByClientePodernotarial('%fooValue%'); // WHERE cliente_podernotarial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clientePodernotarial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClientePodernotarial($clientePodernotarial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clientePodernotarial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clientePodernotarial)) {
                $clientePodernotarial = str_replace('*', '%', $clientePodernotarial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_PODERNOTARIAL, $clientePodernotarial, $comparison);
    }

    /**
     * Filter the query on the cliente_cartaencomienda column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCartaencomienda('fooValue');   // WHERE cliente_cartaencomienda = 'fooValue'
     * $query->filterByClienteCartaencomienda('%fooValue%'); // WHERE cliente_cartaencomienda LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCartaencomienda The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCartaencomienda($clienteCartaencomienda = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCartaencomienda)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCartaencomienda)) {
                $clienteCartaencomienda = str_replace('*', '%', $clienteCartaencomienda);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CARTAENCOMIENDA, $clienteCartaencomienda, $comparison);
    }

    /**
     * Filter the query on the cliente_comprobantedomicilio column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteComprobantedomicilio('fooValue');   // WHERE cliente_comprobantedomicilio = 'fooValue'
     * $query->filterByClienteComprobantedomicilio('%fooValue%'); // WHERE cliente_comprobantedomicilio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteComprobantedomicilio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteComprobantedomicilio($clienteComprobantedomicilio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteComprobantedomicilio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteComprobantedomicilio)) {
                $clienteComprobantedomicilio = str_replace('*', '%', $clienteComprobantedomicilio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_COMPROBANTEDOMICILIO, $clienteComprobantedomicilio, $comparison);
    }

    /**
     * Filter the query on the cliente_comprobanteclabe column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteComprobanteclabe('fooValue');   // WHERE cliente_comprobanteclabe = 'fooValue'
     * $query->filterByClienteComprobanteclabe('%fooValue%'); // WHERE cliente_comprobanteclabe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteComprobanteclabe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteComprobanteclabe($clienteComprobanteclabe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteComprobanteclabe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteComprobanteclabe)) {
                $clienteComprobanteclabe = str_replace('*', '%', $clienteComprobanteclabe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_COMPROBANTECLABE, $clienteComprobanteclabe, $comparison);
    }

    /**
     * Filter the query on the cliente_clabe column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteClabe('fooValue');   // WHERE cliente_clabe = 'fooValue'
     * $query->filterByClienteClabe('%fooValue%'); // WHERE cliente_clabe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteClabe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteClabe($clienteClabe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteClabe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteClabe)) {
                $clienteClabe = str_replace('*', '%', $clienteClabe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CLABE, $clienteClabe, $comparison);
    }

    /**
     * Filter the query on the cliente_archivoszip column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteArchivoszip('fooValue');   // WHERE cliente_archivoszip = 'fooValue'
     * $query->filterByClienteArchivoszip('%fooValue%'); // WHERE cliente_archivoszip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteArchivoszip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteArchivoszip($clienteArchivoszip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteArchivoszip)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteArchivoszip)) {
                $clienteArchivoszip = str_replace('*', '%', $clienteArchivoszip);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_ARCHIVOSZIP, $clienteArchivoszip, $comparison);
    }

    /**
     * Filter the query on the idempleadocomercial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadocomercial(1234); // WHERE idempleadocomercial = 1234
     * $query->filterByIdempleadocomercial(array(12, 34)); // WHERE idempleadocomercial IN (12, 34)
     * $query->filterByIdempleadocomercial(array('min' => 12)); // WHERE idempleadocomercial >= 12
     * $query->filterByIdempleadocomercial(array('max' => 12)); // WHERE idempleadocomercial <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadocomercial()
     *
     * @param     mixed $idempleadocomercial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByIdempleadocomercial($idempleadocomercial = null, $comparison = null)
    {
        if (is_array($idempleadocomercial)) {
            $useMinMax = false;
            if (isset($idempleadocomercial['min'])) {
                $this->addUsingAlias(ClientePeer::IDEMPLEADOCOMERCIAL, $idempleadocomercial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadocomercial['max'])) {
                $this->addUsingAlias(ClientePeer::IDEMPLEADOCOMERCIAL, $idempleadocomercial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientePeer::IDEMPLEADOCOMERCIAL, $idempleadocomercial, $comparison);
    }

    /**
     * Filter the query on the idempleadooperaciones column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadooperaciones(1234); // WHERE idempleadooperaciones = 1234
     * $query->filterByIdempleadooperaciones(array(12, 34)); // WHERE idempleadooperaciones IN (12, 34)
     * $query->filterByIdempleadooperaciones(array('min' => 12)); // WHERE idempleadooperaciones >= 12
     * $query->filterByIdempleadooperaciones(array('max' => 12)); // WHERE idempleadooperaciones <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadooperaciones()
     *
     * @param     mixed $idempleadooperaciones The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByIdempleadooperaciones($idempleadooperaciones = null, $comparison = null)
    {
        if (is_array($idempleadooperaciones)) {
            $useMinMax = false;
            if (isset($idempleadooperaciones['min'])) {
                $this->addUsingAlias(ClientePeer::IDEMPLEADOOPERACIONES, $idempleadooperaciones['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadooperaciones['max'])) {
                $this->addUsingAlias(ClientePeer::IDEMPLEADOOPERACIONES, $idempleadooperaciones['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientePeer::IDEMPLEADOOPERACIONES, $idempleadooperaciones, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadocomercial($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(ClientePeer::IDEMPLEADOCOMERCIAL, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientePeer::IDEMPLEADOCOMERCIAL, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadocomercial() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadocomercial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadocomercial($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadocomercial');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadocomercial');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadocomercial relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadocomercialQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadocomercial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadocomercial', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadooperaciones($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(ClientePeer::IDEMPLEADOOPERACIONES, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClientePeer::IDEMPLEADOOPERACIONES, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadooperaciones() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadooperaciones relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadooperaciones($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadooperaciones');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadooperaciones');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadooperaciones relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadooperacionesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadooperaciones($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadooperaciones', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Expediente object
     *
     * @param   Expediente|PropelObjectCollection $expediente  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExpediente($expediente, $comparison = null)
    {
        if ($expediente instanceof Expediente) {
            return $this
                ->addUsingAlias(ClientePeer::IDCLIENTE, $expediente->getIdcliente(), $comparison);
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
     * @return ClienteQuery The current query, for fluid interface
     */
    public function joinExpediente($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useExpedienteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinExpediente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Expediente', 'ExpedienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cliente $cliente Object to remove from the list of results
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function prune($cliente = null)
    {
        if ($cliente) {
            $this->addUsingAlias(ClientePeer::IDCLIENTE, $cliente->getIdcliente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
