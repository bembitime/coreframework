<?php


namespace shop\base;


use shop\Db;

abstract class Model{

    public $attributes = []; //массив св-св модели который индентичен полям в бд
    public $errors = [];
    public $rules = []; //правила валидации данных

    public function __construct(){
        Db::instance();

    }

}