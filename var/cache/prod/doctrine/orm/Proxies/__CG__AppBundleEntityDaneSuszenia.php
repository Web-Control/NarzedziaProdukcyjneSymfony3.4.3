<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DaneSuszenia extends \AppBundle\Entity\DaneSuszenia implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'Asortyment', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'nrSuszarni', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'data', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'godzina', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscBlanszownika', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'temperaturaBlanszownika', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr7', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr6', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr5', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr4', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr3', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr2', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr1', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'temperaturaGora', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'temperaturaDol', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'czasSuszenia', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'wilgotnosc', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'wykonawcaPomiaru', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'ocenaTowaruZmiany1', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'ocenaTowaruZmiany2', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'ocenaTowaruZmiany3', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'iloscSuszuZmiana1', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'iloscSuszuZmiana2', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'iloscSuszuZmiana3', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'calkowitaIloscSuszu', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'dostawca', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'uwagi', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'zdjecia', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'opisZdjecia'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'Asortyment', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'nrSuszarni', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'data', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'godzina', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscBlanszownika', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'temperaturaBlanszownika', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr7', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr6', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr5', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr4', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr3', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr2', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'predkoscSiatkiNr1', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'temperaturaGora', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'temperaturaDol', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'czasSuszenia', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'wilgotnosc', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'wykonawcaPomiaru', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'ocenaTowaruZmiany1', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'ocenaTowaruZmiany2', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'ocenaTowaruZmiany3', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'iloscSuszuZmiana1', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'iloscSuszuZmiana2', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'iloscSuszuZmiana3', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'calkowitaIloscSuszu', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'dostawca', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'uwagi', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'zdjecia', '' . "\0" . 'AppBundle\\Entity\\DaneSuszenia' . "\0" . 'opisZdjecia'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (DaneSuszenia $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAsortyment($Asortyment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsortyment', [$Asortyment]);

        return parent::setAsortyment($Asortyment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsortyment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsortyment', []);

        return parent::getAsortyment();
    }

    /**
     * {@inheritDoc}
     */
    public function setNrSuszarni($nrSuszarni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNrSuszarni', [$nrSuszarni]);

        return parent::setNrSuszarni($nrSuszarni);
    }

    /**
     * {@inheritDoc}
     */
    public function getNrSuszarni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNrSuszarni', []);

        return parent::getNrSuszarni();
    }

    /**
     * {@inheritDoc}
     */
    public function setData($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setData', [$data]);

        return parent::setData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getData', []);

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    public function setGodzina($godzina)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGodzina', [$godzina]);

        return parent::setGodzina($godzina);
    }

    /**
     * {@inheritDoc}
     */
    public function getGodzina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGodzina', []);

        return parent::getGodzina();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredkoscBlanszownika($predkoscBlanszownika)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredkoscBlanszownika', [$predkoscBlanszownika]);

        return parent::setPredkoscBlanszownika($predkoscBlanszownika);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredkoscBlanszownika()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredkoscBlanszownika', []);

        return parent::getPredkoscBlanszownika();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemperaturaBlanszownika($temperaturaBlanszownika)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemperaturaBlanszownika', [$temperaturaBlanszownika]);

        return parent::setTemperaturaBlanszownika($temperaturaBlanszownika);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemperaturaBlanszownika()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemperaturaBlanszownika', []);

        return parent::getTemperaturaBlanszownika();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredkoscSiatkiNr7($predkoscSiatkiNr7)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredkoscSiatkiNr7', [$predkoscSiatkiNr7]);

        return parent::setPredkoscSiatkiNr7($predkoscSiatkiNr7);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredkoscSiatkiNr7()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredkoscSiatkiNr7', []);

        return parent::getPredkoscSiatkiNr7();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredkoscSiatkiNr6($predkoscSiatkiNr6)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredkoscSiatkiNr6', [$predkoscSiatkiNr6]);

        return parent::setPredkoscSiatkiNr6($predkoscSiatkiNr6);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredkoscSiatkiNr6()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredkoscSiatkiNr6', []);

        return parent::getPredkoscSiatkiNr6();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredkoscSiatkiNr5($predkoscSiatkiNr5)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredkoscSiatkiNr5', [$predkoscSiatkiNr5]);

        return parent::setPredkoscSiatkiNr5($predkoscSiatkiNr5);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredkoscSiatkiNr5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredkoscSiatkiNr5', []);

        return parent::getPredkoscSiatkiNr5();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredkoscSiatkiNr4($predkoscSiatkiNr4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredkoscSiatkiNr4', [$predkoscSiatkiNr4]);

        return parent::setPredkoscSiatkiNr4($predkoscSiatkiNr4);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredkoscSiatkiNr4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredkoscSiatkiNr4', []);

        return parent::getPredkoscSiatkiNr4();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredkoscSiatkiNr3($predkoscSiatkiNr3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredkoscSiatkiNr3', [$predkoscSiatkiNr3]);

        return parent::setPredkoscSiatkiNr3($predkoscSiatkiNr3);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredkoscSiatkiNr3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredkoscSiatkiNr3', []);

        return parent::getPredkoscSiatkiNr3();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredkoscSiatkiNr2($predkoscSiatkiNr2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredkoscSiatkiNr2', [$predkoscSiatkiNr2]);

        return parent::setPredkoscSiatkiNr2($predkoscSiatkiNr2);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredkoscSiatkiNr2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredkoscSiatkiNr2', []);

        return parent::getPredkoscSiatkiNr2();
    }

    /**
     * {@inheritDoc}
     */
    public function setPredkoscSiatkiNr1($predkoscSiatkiNr1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPredkoscSiatkiNr1', [$predkoscSiatkiNr1]);

        return parent::setPredkoscSiatkiNr1($predkoscSiatkiNr1);
    }

    /**
     * {@inheritDoc}
     */
    public function getPredkoscSiatkiNr1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPredkoscSiatkiNr1', []);

        return parent::getPredkoscSiatkiNr1();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemperaturaGora($temperaturaGora)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemperaturaGora', [$temperaturaGora]);

        return parent::setTemperaturaGora($temperaturaGora);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemperaturaGora()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemperaturaGora', []);

        return parent::getTemperaturaGora();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemperaturaDol($temperaturaDol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemperaturaDol', [$temperaturaDol]);

        return parent::setTemperaturaDol($temperaturaDol);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemperaturaDol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemperaturaDol', []);

        return parent::getTemperaturaDol();
    }

    /**
     * {@inheritDoc}
     */
    public function setCzasSuszenia($czasSuszenia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCzasSuszenia', [$czasSuszenia]);

        return parent::setCzasSuszenia($czasSuszenia);
    }

    /**
     * {@inheritDoc}
     */
    public function getCzasSuszenia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCzasSuszenia', []);

        return parent::getCzasSuszenia();
    }

    /**
     * {@inheritDoc}
     */
    public function setWilgotnosc($wilgotnosc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWilgotnosc', [$wilgotnosc]);

        return parent::setWilgotnosc($wilgotnosc);
    }

    /**
     * {@inheritDoc}
     */
    public function getWilgotnosc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWilgotnosc', []);

        return parent::getWilgotnosc();
    }

    /**
     * {@inheritDoc}
     */
    public function setWykonawcaPomiaru($wykonawcaPomiaru)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWykonawcaPomiaru', [$wykonawcaPomiaru]);

        return parent::setWykonawcaPomiaru($wykonawcaPomiaru);
    }

    /**
     * {@inheritDoc}
     */
    public function getWykonawcaPomiaru()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWykonawcaPomiaru', []);

        return parent::getWykonawcaPomiaru();
    }

    /**
     * {@inheritDoc}
     */
    public function setOcenaTowaruZmiany1($ocenaTowaruZmiany1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOcenaTowaruZmiany1', [$ocenaTowaruZmiany1]);

        return parent::setOcenaTowaruZmiany1($ocenaTowaruZmiany1);
    }

    /**
     * {@inheritDoc}
     */
    public function getOcenaTowaruZmiany1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOcenaTowaruZmiany1', []);

        return parent::getOcenaTowaruZmiany1();
    }

    /**
     * {@inheritDoc}
     */
    public function setOcenaTowaruZmiany2($ocenaTowaruZmiany2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOcenaTowaruZmiany2', [$ocenaTowaruZmiany2]);

        return parent::setOcenaTowaruZmiany2($ocenaTowaruZmiany2);
    }

    /**
     * {@inheritDoc}
     */
    public function getOcenaTowaruZmiany2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOcenaTowaruZmiany2', []);

        return parent::getOcenaTowaruZmiany2();
    }

    /**
     * {@inheritDoc}
     */
    public function setOcenaTowaruZmiany3($ocenaTowaruZmiany3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOcenaTowaruZmiany3', [$ocenaTowaruZmiany3]);

        return parent::setOcenaTowaruZmiany3($ocenaTowaruZmiany3);
    }

    /**
     * {@inheritDoc}
     */
    public function getOcenaTowaruZmiany3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOcenaTowaruZmiany3', []);

        return parent::getOcenaTowaruZmiany3();
    }

    /**
     * {@inheritDoc}
     */
    public function setIloscSuszuZmiana1($iloscSuszuZmiana1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIloscSuszuZmiana1', [$iloscSuszuZmiana1]);

        return parent::setIloscSuszuZmiana1($iloscSuszuZmiana1);
    }

    /**
     * {@inheritDoc}
     */
    public function getIloscSuszuZmiana1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIloscSuszuZmiana1', []);

        return parent::getIloscSuszuZmiana1();
    }

    /**
     * {@inheritDoc}
     */
    public function setIloscSuszuZmiana2($iloscSuszuZmiana2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIloscSuszuZmiana2', [$iloscSuszuZmiana2]);

        return parent::setIloscSuszuZmiana2($iloscSuszuZmiana2);
    }

    /**
     * {@inheritDoc}
     */
    public function getIloscSuszuZmiana2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIloscSuszuZmiana2', []);

        return parent::getIloscSuszuZmiana2();
    }

    /**
     * {@inheritDoc}
     */
    public function setIloscSuszuZmiana3($iloscSuszuZmiana3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIloscSuszuZmiana3', [$iloscSuszuZmiana3]);

        return parent::setIloscSuszuZmiana3($iloscSuszuZmiana3);
    }

    /**
     * {@inheritDoc}
     */
    public function getIloscSuszuZmiana3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIloscSuszuZmiana3', []);

        return parent::getIloscSuszuZmiana3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalkowitaIloscSuszu($calkowitaIloscSuszu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalkowitaIloscSuszu', [$calkowitaIloscSuszu]);

        return parent::setCalkowitaIloscSuszu($calkowitaIloscSuszu);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalkowitaIloscSuszu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalkowitaIloscSuszu', []);

        return parent::getCalkowitaIloscSuszu();
    }

    /**
     * {@inheritDoc}
     */
    public function setDostawca($dostawca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDostawca', [$dostawca]);

        return parent::setDostawca($dostawca);
    }

    /**
     * {@inheritDoc}
     */
    public function getDostawca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDostawca', []);

        return parent::getDostawca();
    }

    /**
     * {@inheritDoc}
     */
    public function setUwagi($uwagi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUwagi', [$uwagi]);

        return parent::setUwagi($uwagi);
    }

    /**
     * {@inheritDoc}
     */
    public function getUwagi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUwagi', []);

        return parent::getUwagi();
    }

    /**
     * {@inheritDoc}
     */
    public function setZdjecia($zdjecia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZdjecia', [$zdjecia]);

        return parent::setZdjecia($zdjecia);
    }

    /**
     * {@inheritDoc}
     */
    public function getZdjecia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZdjecia', []);

        return parent::getZdjecia();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpisZdjecia($opisZdjecia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpisZdjecia', [$opisZdjecia]);

        return parent::setOpisZdjecia($opisZdjecia);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpisZdjecia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpisZdjecia', []);

        return parent::getOpisZdjecia();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}