<?php

namespace App;

class Container
{
    protected array $bindings = [];
    protected array $singletons = [];

    public function bind($key, $value, $isShared = false): void
    {
        $this->bindings[$key] = [
            'value' => $value,
            'shared' => $isShared
        ];
    }

    public function singleton($key, $value): void
    {
        $this->bind($key, $value, true);
    }

    public function resolve($key)
    {

         if(! isset($this->bindings[$key]['value'])){

             if(class_exists($key)){
                 return new $key();
             }

             throw new \Exception("Can't find binding '{$key}'.");
         }


        $output = $this->bindings[$key]['value'];

         if($this->bindings[$key]['shared'] && isset($this->singletons[$key])) {
             return $this->singletons[$key];
         }

         if($output instanceof \Closure) {
             $result = $output();

             if($this->bindings[$key]['shared']) {
                 $this->singletons[$key] = $result;
             }

             return $result;
         }

         return $output;
    }

}
