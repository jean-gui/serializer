<?php

namespace JMS\Serializer\Annotation;

/**
 * @Annotation
 * @Target({"CLASS","PROPERTY"})
 */
final class ReadOnlyAnnotation
{
    /**
     * @var boolean
     */
    public $readOnly = true;
}
