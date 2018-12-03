<?php

declare(strict_types=1);

namespace Markethot\Entity;

use Markethot\Contracts\ArrayableInterface;

/**
 * Class AbstractEntity
 *
 * @package Markethot\Entity
 */
abstract class AbstractEntity implements ArrayableInterface
{
    /**
     * Converts object data to array
     *
     * @return  array
     */
    public function toArray(){

        $array = [];

        foreach ($this as $key => $val) {
            if(is_array($val)) {
                foreach ($val as $child) {
                    $array[$key][] = $child->toArray();
                }
            }elseif(is_object($val)){
                $array[$key] = call_user_func('get_object_vars', $val);
            }else{
                $array[$key] = $val;
            }
        }


        return $array;
    }
}