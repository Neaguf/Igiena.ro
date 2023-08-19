<?php
	class DbBlog extends DbBase
	{ 

		/**
		 * @var int Id
		 */
		public $Id; 

		/**
		 * @var string titlu
		 */
		public $titlu; 

		/**
		 * @var string slug
		 */
		public $slug; 

		/**
		 * @var string continut
		 */
		public $continut; 

		/**
		 * @var string poza
		 */
		public $poza; 

		/**
		 * @return String numele tabelului din db
		 */
		public static function _getTableName()
		{
			return 'blog';
		}
		
		/**
		 * @return string[] intoarce lista de coloane
		 */
		public function _getColumns()
		{
			return array('Id','titlu','slug','continut','poza');
		}
		

		/* @return DbBlogModel OR null */
		public static function QueryRow()
		{
			return parent::QueryRow();
		}

		/* @return DbBlogModel[] */
		public static function QueryResult()
		{
			return parent::QueryResult();
		}

		/* @return DbBlogModel[] */
		public static function QuerySql($sql)
		{
			return parent::QuerySql( $sql);
		}

		public static function query()
		{
			return new DbBlog_Queryable( static::_getTableName() );
		}

		
		public static function constructModel( $id=null)
		{
			return new DbBlog( $id);
		}
	}
	class DbBlog_Queryable extends DbQueryableBase
	{
		/* @return DbBlogModel[] */
		public function get()
		{
			return DbBlogModel::QueryResult();
		}

		/* @return DbBlogModel[] */
		public function get_row()
		{
			return DbBlogModel::QueryRow();
		}
	}
		