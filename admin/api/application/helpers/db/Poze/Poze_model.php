<?php
	class DbPozeModel extends DbPoze
	{ 

		public static function constructModel($id=null)
		{
			return new DbPozeModel($id);
		}
	}