<?php
	class DbLocatii extends DbBase
	{ 

		/**
		 * @var int Id
		 */
		public $Id; 

		/**
		 * @var string Denumire
		 */
		public $Denumire; 

		/**
		 * @var string Slug
		 */
		public $Slug; 

		/**
		 * @var string Adresa
		 */
		public $Adresa; 

		/**
		 * @var string Telefon
		 */
		public $Telefon; 

		/**
		 * @var string Program
		 */
		public $Program; 

		/**
		 * @var string Gps_latitudine
		 */
		public $Gps_latitudine; 

		/**
		 * @var string Gps_longitudine
		 */
		public $Gps_longitudine; 

		/**
		 * @var int Afiseaza
		 */
		public $Afiseaza; 

		/**
		 * @return String numele tabelului din db
		 */
		public static function _getTableName()
		{
			return 'locatii';
		}
		
		/**
		 * @return string[] intoarce lista de coloane
		 */
		public function _getColumns()
		{
			return array('Id','Denumire','Slug','Adresa','Telefon','Program','Gps_latitudine','Gps_longitudine','Afiseaza');
		}
		

		/* @return DbLocatiiModel OR null */
		public static function QueryRow()
		{
			return parent::QueryRow();
		}

		/* @return DbLocatiiModel[] */
		public static function QueryResult()
		{
			return parent::QueryResult();
		}

		/* @return DbLocatiiModel[] */
		public static function QuerySql($sql)
		{
			return parent::QuerySql( $sql);
		}

		public static function query()
		{
			return new DbLocatii_Queryable( static::_getTableName() );
		}

		
		public static function constructModel( $id=null)
		{
			return new DbLocatii( $id);
		}
	}
	class DbLocatii_Queryable extends DbQueryableBase
	{
		/* @return DbLocatiiModel[] */
		public function get()
		{
			return DbLocatiiModel::QueryResult();
		}

		/* @return DbLocatiiModel[] */
		public function get_row()
		{
			return DbLocatiiModel::QueryRow();
		}
	}
		