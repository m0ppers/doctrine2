<?php
namespace Doctrine\ORM\Mapping;

use Doctrine\ORM\Mapping\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY","ANNOTATION"})
 */
class BrokenNull implements Annotation
{
}