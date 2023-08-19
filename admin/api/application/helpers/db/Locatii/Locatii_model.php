<?php
	class DbLocatiiModel extends DbLocatii
	{ 

		public static function constructModel($id=null)
		{
			return new DbLocatiiModel($id);
		}
	}