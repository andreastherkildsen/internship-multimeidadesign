<?php

	require("Blogpost.php");

	class Blog{

		private $blogpost = null;

		public function __construct(){
			$this->blogpost = new Blogpost();
		}

		public function create_blogpost($title, $content, $image){
			$this->blogpost->create($title, $content, $image);
		}

		public function read_blogpost($slug){
			return json_decode(file_get_contents("../data/blogposts/" . $slug . ".json"));
		}

		public function update_blogpost($slug, $title, $content, $imagename, $image){
			$this->blogpost->update($slug, $title, $content, $imagename, $image);
		}

		public function delete_blogpost($slug){
			$this->blogpost->delete($slug);
		}

		public function get_blogposts(){
			$blogpost_files = $this->clean_files(scandir("../data/blogposts/"));
			$blogposts = array();
			foreach($blogpost_files as $blogpost_file){
				$blogpost_data = json_decode(file_get_contents("../data/blogposts/" . $blogpost_file));
				$blogposts[] = $blogpost_data;
			}
			return $blogposts;
		}

		private function clean_files($files_array){
			$return_array = array();
			foreach($files_array as $file_to_clean){
				$first_char = substr($file_to_clean, 0, 1);
				if($first_char == "_" or $first_char == "."){
					continue;
				}
				else{
					$return_array[] = $file_to_clean;	
				}
			}
			return($return_array);

		}

	}
?>