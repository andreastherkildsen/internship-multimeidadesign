<?php
	require("Upload.php");
	$config_file = file_exists("config.php") ? "config.php" : "../config.php";
	include($config_file);

	class Blogpost{

		private $title,
				$content,
				$image = null,
				$slug,
				$imagename = "";

		public function __construct(){
		}

		public function create($title, $content, $image = null){
			$this->set($title, $content, $image);
			$this->save();
		}

		public function delete($slug){
			$blogpost_file = "../data/blogposts/" . $slug . ".json";
			if(file_exists($blogpost_file)){
				$blogpost_data = json_decode(file_get_contents($blogpost_file));
				$imagename = $blogpost_data->imagename;

				if(file_exists("../images/blogposts_fullsize/$imagename")){
					unlink("../images/blogposts_fullsize/$imagename");
				}
				if(file_exists("../images/blogposts_thumbs/$imagename")){
					unlink("../images/blogposts_thumbs/$imagename");
				}
				
				return unlink($blogpost_file);
			}
			else{
				// send error
			}
		}

		public function update($slug, $title, $content, $imagename, $image = null){
			$this->slug = $slug;
			$this->title = $title;
			$this->content = $content;
			$this->imagename = ($image) ? $image["name"] : $imagename;
			$this->image = $image;
			unlink("../data/blogposts/{$this->slug}.json");
			$this->save();
		}

		private function set($title, $content, $image){
			$this->title = $title;
			$this->content = $content;
			$this->image = $image;
			$this->slug = $this->make_slug();
		}

		private function save(){
			if($this->image){
				if($this->image["size"]){
					$upload = new Upload($this->image);
					if(!$upload->get_error()){
						$this->imagename = $this->image["name"];
					}
					else{
						echo $upload->get_error();
						exit;
					}
				}
			}
			else if(strlen($this->imagename) > 0){
				// do nothing
			}
			else{
				$this->imagename = "";
			}
			$data = array(
				"title" => $this->title,
				"content" => $this->content,
				"imagename" => $this->imagename,
				"slug" => $this->slug
			);
			file_put_contents("data/blogposts/" . $this->slug . ".json", json_encode($data));
		}


		private function make_slug(){
			$title = strtolower($this->title);
			return join("-", explode(" ", $title));
		}

	}

?>