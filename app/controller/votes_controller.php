<?php
	namespace Controller;
	class VotesController
	{
		public function post()
		{
			$id=$_POST['linkid'];
			if(!isset($_SESSION["name"])){
				header("location: http://localhost:8000/signin");
			}
			else{
				$user_id=$_SESSION["user_id"];
				\Model\UpvoteModel::vote($id,$user_id);
				header( "Refresh:0" );
			}
		}
	}