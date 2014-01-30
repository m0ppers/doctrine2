<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tastrei
 * Date: 12.07.13
 * Time: 15:56
 * To change this template use File | Settings | File Templates.
 */

namespace Doctrine\ORM;


use Doctrine\ORM\Mapping\ClassMetadata;

class BogusNull
{
    private $class;
    private $fieldName;

    public function __construct(ClassMetadata $class, $fieldName)
    {
        $this->class = $class;
        $this->fieldName = $fieldName;
    }

    public function getFieldname()
    {
        return $this->fieldName;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getNull()
    {
        $type = $this->class->getTypeOfColumn($this->fieldName);
        switch($type) {
            case 'string':
                return '';
                break;
        }

        throw new \InvalidArgumentException($this->fieldName . ' is defined as ' . $type . ' and null is not supported');
    }
}