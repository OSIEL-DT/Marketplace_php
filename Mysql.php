<?php
 
 	
 	class Mysql
 	{
 		
 		private static $pdo = null;

 		public static function getConn()
 		{
 			if(self::$pdo == null)
 			{
 				self::$pdo = new PDO('mysql:host=localhost;dbname=marketplace_php','root','');
 				return self::$pdo;
 			}
 			else
 			{
 				return self::$pdo;
 			}
 		}
 	}

?>