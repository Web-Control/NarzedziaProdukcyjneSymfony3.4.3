<?php

class EntityManager_9954e20 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5a96326c95cd1158209652 = null;
    private $initializer5a96326c95cda737013514 = null;
    private static $publicProperties5a96326c95ca6710791834 = array(
        
    );
    public function getConnection()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getConnection', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getMetadataFactory', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getExpressionBuilder', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'beginTransaction', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getCache', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'transactional', array('func' => $func), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->transactional($func);
    }
    public function commit()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'commit', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->commit();
    }
    public function rollback()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'rollback', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'createQuery', array('dql' => $dql), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'createQueryBuilder', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'flush', array('entity' => $entity), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'clear', array('entityName' => $entityName), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->clear($entityName);
    }
    public function close()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'close', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->close();
    }
    public function persist($entity)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'persist', array('entity' => $entity), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'remove', array('entity' => $entity), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'refresh', array('entity' => $entity), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'detach', array('entity' => $entity), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'merge', array('entity' => $entity), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'contains', array('entity' => $entity), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getEventManager', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getConfiguration', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'isOpen', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getUnitOfWork', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getProxyFactory', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'getFilters', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'isFiltersStateClean', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'hasFilters', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return $this->valueHolder5a96326c95cd1158209652->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5a96326c95cda737013514 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5a96326c95cd1158209652) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a96326c95cd1158209652 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5a96326c95cd1158209652->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, '__get', ['name' => $name], $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        if (isset(self::$publicProperties5a96326c95ca6710791834[$name])) {
            return $this->valueHolder5a96326c95cd1158209652->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a96326c95cd1158209652;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder5a96326c95cd1158209652;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a96326c95cd1158209652;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5a96326c95cd1158209652;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, '__isset', array('name' => $name), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a96326c95cd1158209652;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a96326c95cd1158209652;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, '__unset', array('name' => $name), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a96326c95cd1158209652;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a96326c95cd1158209652;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, '__clone', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        $this->valueHolder5a96326c95cd1158209652 = clone $this->valueHolder5a96326c95cd1158209652;
    }
    public function __sleep()
    {
        $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, '__sleep', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
        return array('valueHolder5a96326c95cd1158209652');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a96326c95cda737013514 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5a96326c95cda737013514;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5a96326c95cda737013514 && ($this->initializer5a96326c95cda737013514->__invoke($valueHolder5a96326c95cd1158209652, $this, 'initializeProxy', array(), $this->initializer5a96326c95cda737013514) || 1) && $this->valueHolder5a96326c95cd1158209652 = $valueHolder5a96326c95cd1158209652;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a96326c95cd1158209652;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a96326c95cd1158209652;
    }
}
