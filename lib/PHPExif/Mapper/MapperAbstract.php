<?php

namespace PHPExif\Mapper;

/**
 * PHP Exif Mapper Abstract
 *
 * Implements common functionality for data mappers
 *
 * @category    PHPExif
 * @package     Mapper
 */
abstract class MapperAbstract implements MapperInterface
{
    /**
     * Trim whitespaces recursively
     *
     * @param mixed $data
     * @return mixed
     */
    public function trim(mixed $data) : mixed
    {
        if (is_array($data)) {
            /** @var mixed $v */
            foreach ($data as $k => $v) {
                $data[$k] = $this->trim($v);
            }
        } elseif (is_string($data)) {
            $data = trim($data);
        }
        return $data;
    }
}
