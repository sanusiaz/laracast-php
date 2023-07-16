<?php

    namespace App\Http\Traits\Singleton;

    trait Singleton {
        public static $instance;
        

    
        final public static function get_instance() 
        {

            self::$instance = [];

            $called_class = get_called_class();

            if ( !isset($instance[$called_class]) )
            {
                self::$instance[$called_class] = new $called_class;

            }
            return self::$instance[$called_class];
        }

        final public function __clone() {
            // To Prevent Object Clonning
        }
    }