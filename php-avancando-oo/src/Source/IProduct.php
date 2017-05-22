<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 21/05/17
 * Time: 17:20
 */

namespace Source;


interface IProduct
{
    public function setId($id);
    public function setName($name);
    public function setDesc($desc);
    public function getId();
    public function getName();
    public function getDesc();
}