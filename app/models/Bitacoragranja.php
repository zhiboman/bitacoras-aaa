<?php

class Bitacoragranja extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    protected $area;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    protected $fecha;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    protected $lugar;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $guardia;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $monitorista;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    protected $hora;

    /**
     *
     * @var string
     * @Column(type="string", length=400, nullable=false)
     */
    protected $evento;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    protected $ubicacion;

    /**
     *
     * @var string
     * @Column(type="string", length=60, nullable=false)
     */
    protected $personaInformada;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    protected $tiempoDeRespuesta;

    /**
     *
     * @var string
     * @Column(type="string", length=400, nullable=false)
     */
    protected $observaciones;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = date('U');

        return $this;
    }

    /**
     * Method to set the value of field area
     *
     * @param string $area
     * @return $this
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Method to set the value of field fecha
     *
     * @param string $fecha
     * @return $this
     */
    public function setFecha($fecha)
    {
        $this->fecha = date("Y-m-d");

        return $this;
    }

    /**
     * Method to set the value of field lugar
     *
     * @param string $lugar
     * @return $this
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Method to set the value of field guardia
     *
     * @param string $guardia
     * @return $this
     */
    public function setGuardia($guardia)
    {
        $this->guardia = $guardia;

        return $this;
    }

    /**
     * Method to set the value of field monitorista
     *
     * @param string $monitorista
     * @return $this
     */
    public function setMonitorista($monitorista)
    {
        $this->monitorista = $monitorista;

        return $this;
    }

    /**
     * Method to set the value of field hora
     *
     * @param string $hora
     * @return $this
     */
    public function setHora($hora)
    {
        $this->hora = date("H:i:s");

        return $this;
    }

    /**
     * Method to set the value of field evento
     *
     * @param string $evento
     * @return $this
     */
    public function setEvento($evento)
    {
        $this->evento = $evento;

        return $this;
    }

    /**
     * Method to set the value of field ubicacion
     *
     * @param string $ubicacion
     * @return $this
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Method to set the value of field personaInformada
     *
     * @param string $personaInformada
     * @return $this
     */
    public function setPersonaInformada($personaInformada)
    {
        $this->personaInformada = $personaInformada;

        return $this;
    }

    /**
     * Method to set the value of field tiempoDeRespuesta
     *
     * @param string $tiempoDeRespuesta
     * @return $this
     */
    public function setTiempoDeRespuesta($tiempoDeRespuesta)
    {
        $this->tiempoDeRespuesta = $tiempoDeRespuesta;

        return $this;
    }

    /**
     * Method to set the value of field observaciones
     *
     * @param string $observaciones
     * @return $this
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Returns the value of field fecha
     *
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Returns the value of field lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Returns the value of field guardia
     *
     * @return string
     */
    public function getGuardia()
    {
        return $this->guardia;
    }

    /**
     * Returns the value of field monitorista
     *
     * @return string
     */
    public function getMonitorista()
    {
        return $this->monitorista;
    }

    /**
     * Returns the value of field hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Returns the value of field evento
     *
     * @return string
     */
    public function getEvento()
    {
        return $this->evento;
    }

    /**
     * Returns the value of field ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Returns the value of field personaInformada
     *
     * @return string
     */
    public function getPersonaInformada()
    {
        return $this->personaInformada;
    }

    /**
     * Returns the value of field tiempoDeRespuesta
     *
     * @return string
     */
    public function getTiempoDeRespuesta()
    {
        return $this->tiempoDeRespuesta;
    }

    /**
     * Returns the value of field observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("bitacoraaa");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bitacoragranja[]|Bitacoragranja|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bitacoragranja|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'area' => 'area',
            'fecha' => 'fecha',
            'lugar' => 'lugar',
            'guardia' => 'guardia',
            'monitorista' => 'monitorista',
            'hora' => 'hora',
            'evento' => 'evento',
            'ubicacion' => 'ubicacion',
            'personaInformada' => 'personaInformada',
            'tiempoDeRespuesta' => 'tiempoDeRespuesta',
            'observaciones' => 'observaciones'
        ];
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'bitacoragranja';
    }

}
