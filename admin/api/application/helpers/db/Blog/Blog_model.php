<?php
	class DbBlogModel extends DbBlog
	{ 

		public static function constructModel($id=null)
		{
			return new DbBlogModel($id);
		}
	}