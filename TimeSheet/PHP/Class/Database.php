<?php         
     class DBConnect {
          private static $connection;
          private static $host = "localhost";
          private static $user = "root";
          private static $pwd = "";
          private static $dbname = "timesheet";
                    
        public static function connect() {
                 $host = self::$host;
                 $user = self::$user;
                 $pwd = self::$pwd;
                 $dbname = self::$dbname;
                   
                 self::$connection = new mysqli($host, $user, $pwd, $dbname) or die('Error connecting..');
                 return self::$connection;
        }
}


?>
