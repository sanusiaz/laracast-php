<?php

    namespace App\Http\Route;
    require_once(dirname(__FILE__) . './Traits/Singleton.php');


    class Route {

        private static $registeredRoutes = [];

        use \App\Http\Traits\Singleton\Singleton;
       

        private static function __getServerRequest()
        {
            return $_SERVER;
        }

        public static function get( $path, $callBackFunc, $viewName = "", ) 
        {
            self::setRegisteredRoutes($path, 'GET');
            self::__parseRoute($path, 'GET', $callBackFunc);
        
        }

        public static function setRegisteredRoutes($path, $method) 
        {
            if ( !in_array( $path . '@' . $method, self::$registeredRoutes ) ) {
                self::$registeredRoutes[$path . '@' . $method] = [
                    'method' => $method,
                    'controller' => null
                ];
            }
        }

        public static function __parseRoute($path, $mustUseMethod = 'GET', $action = "")
        {
            if ( array_key_exists( $path . '@' . $mustUseMethod, self::$registeredRoutes ) ) {
                if ( self::__getServerRequest()['REQUEST_METHOD'] === $mustUseMethod ) {
                    $serverPath = parse_url(self::__getServerRequest()['REQUEST_URI'])['path'];
                    if ( $serverPath === $path ) {
                        if ( is_callable( $action ) ) {
                            $action();
                        }
                        elseif ( is_string( $action ) ) {
                            loadView($action);
                            // Simply Load the view
                        }
                        else {
                            // it is a class in this format only [ CLASSANME, METHOD ]
                            $class = $action[0];
                            $method = $action[1];

                            if ( class_exists( $class ) ) {

                                $class = new $class;
                                if ( method_exists( $class, $method ) ) {
                                    $class->$method();
                                }
                            }
                            else {
                                die($class . ' => Not Found');
                            }
                        }
                    }

                }
               
            }
            else {
                die('Not Found');
                return http_response_code(404);
            }

            
        }


        public static function __getAllRoutes()
        {
            return self::$registeredRoutes;
        }

    }