<?php

class EntityManager_87e9635 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5a6dfeb0d3245313031582 = null;
    private $initializer5a6dfeb0d3257320178366 = null;
    private static $publicProperties5a6dfeb0d31fa885802440 = array(
        
    );
    public function getConnection()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getConnection', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getMetadataFactory', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getExpressionBuilder', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'beginTransaction', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getCache', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'transactional', array('func' => $func), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->transactional($func);
    }
    public function commit()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'commit', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->commit();
    }
    public function rollback()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'rollback', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getClassMetadata', array('className' => $className), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'createQuery', array('dql' => $dql), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'createNamedQuery', array('name' => $name), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'createQueryBuilder', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'flush', array('entity' => $entity), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'clear', array('entityName' => $entityName), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->clear($entityName);
    }
    public function close()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'close', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->close();
    }
    public function persist($entity)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'persist', array('entity' => $entity), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'remove', array('entity' => $entity), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'refresh', array('entity' => $entity), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'detach', array('entity' => $entity), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'merge', array('entity' => $entity), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'contains', array('entity' => $entity), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getEventManager', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getConfiguration', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'isOpen', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getUnitOfWork', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getProxyFactory', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'initializeObject', array('obj' => $obj), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'getFilters', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'isFiltersStateClean', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'hasFilters', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return $this->valueHolder5a6dfeb0d3245313031582->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5a6dfeb0d3257320178366 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5a6dfeb0d3245313031582) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a6dfeb0d3245313031582 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5a6dfeb0d3245313031582->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, '__get', ['name' => $name], $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        if (isset(self::$publicProperties5a6dfeb0d31fa885802440[$name])) {
            return $this->valueHolder5a6dfeb0d3245313031582->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a6dfeb0d3245313031582;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder5a6dfeb0d3245313031582;
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
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a6dfeb0d3245313031582;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5a6dfeb0d3245313031582;
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
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, '__isset', array('name' => $name), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a6dfeb0d3245313031582;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a6dfeb0d3245313031582;
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
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, '__unset', array('name' => $name), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a6dfeb0d3245313031582;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5a6dfeb0d3245313031582;
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
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, '__clone', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        $this->valueHolder5a6dfeb0d3245313031582 = clone $this->valueHolder5a6dfeb0d3245313031582;
    }
    public function __sleep()
    {
        $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, '__sleep', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
        return array('valueHolder5a6dfeb0d3245313031582');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5a6dfeb0d3257320178366 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5a6dfeb0d3257320178366;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5a6dfeb0d3257320178366 && ($this->initializer5a6dfeb0d3257320178366->__invoke($valueHolder5a6dfeb0d3245313031582, $this, 'initializeProxy', array(), $this->initializer5a6dfeb0d3257320178366) || 1) && $this->valueHolder5a6dfeb0d3245313031582 = $valueHolder5a6dfeb0d3245313031582;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a6dfeb0d3245313031582;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a6dfeb0d3245313031582;
    }
}
