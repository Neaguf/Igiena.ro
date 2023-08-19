<?php
	class DbPoze extends DbBase
	{ 

		/**
		 * @var int Id
		 */
		public $Id; 

		/**
		 * @var int IdLocatie
		 */
		public $IdLocatie; 

		/**
		 * @var string Poza
		 */
		public $Poza; 

		/**
		 * @return String numele tabelului din db
		 */
		public static function _getTableName()
		{
			return 'poze';
		}
		
		/**
		 * @return string[] intoarce lista de coloane
		 */
		public function _getColumns()
		{
			return array('Id','IdLocatie','Poza');
		}
		

		/* @return DbPozeModel OR null */
		public static function QueryRow()
		{
			return parent::QueryRow();
		}

		/* @return DbPozeModel[] */
		public static function QueryResult()
		{
			return parent::QueryResult();
		}

		/* @return DbPozeModel[] */
		public static function QuerySql($sql)
		{
			return parent::QuerySql( $sql);
		}

		public static function query()
		{
			return new DbPoze_Queryable( static::_getTableName() );
		}

		
		public static function constructModel( $id=null)
		{
			return new DbPoze( $id);
		}
	}
	class DbPoze_Queryable extends DbQueryableBase
	{
		/* @return DbPozeModel[] */
		public function get()
		{
			return DbPozeModel::QueryResult();
		}

		/* @return DbPozeModel[] */
		public function get_row()
		{
			return DbPozeModel::QueryRow();
		}
	}
		