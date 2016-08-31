<?php
/*
Objektet modtager en uploadet fil (formodentlig et billede) som parameter.
Det er altså selve $_FILES["the-name-attribute-given"], som sendes til objektet.
Der skal sættes tre globale konstanter: 
IMAGEFOLDER (mappen til de uploadede billeder i fuld størrelse)
THUMBFOLDER (mappen til de skalerede billeder)
THUMBWIDTH (bredden på de skalerede billeder - højden beregnes, så billedet bevarer proportionerne)
*/

	class Upload{

		private $error = null;
		
		function __construct($image){

			$error = $image["error"];
			if($error){
				$this->error = $error;
			}

			$destination_image = IMAGEFOLDER . $image["name"];
			$tmp_name = $image["tmp_name"];
				
			if(file_exists($destination_image)){
				$this->error = "Image exists";
			}

			if(!getimagesize($tmp_name)){
				$this->error = "File is not an image";
			}

			if(!move_uploaded_file($tmp_name, $destination_image)){
				$this->error = "Upload failed - permissions?";
			}
			else{
				$image_type = $image["type"];
				$destination_thumb = THUMBFOLDER . $image["name"];
				$this->resize_image($destination_image, $destination_thumb, $image_type, THUMBWIDTH);
			}
		
			return $this->error;
		}

		function get_error(){
			return $this->error;
		}

		private function resize_image($destination_image, $destination_thumb, $image_type, $thumb_width){
			switch($image_type){
				case "image/jpeg":
					$img = imagecreatefromjpeg($destination_image);
					break;
				case "image/png":
					$img = imagecreatefrompng($destination_image);
					break;
				case "image/gif":
					$img = imagecreatefromgif($destination_image);
					break;
			}
			
			$width = imagesx($img);
			$height = imagesy($img);
			
			if($width > $thumb_width){
				// calculate thumbnail size
				$new_width = $thumb_width;
				$new_height = floor($height * ($thumb_width/$width));
				
				// create a new temporary image
				$tmp_img = imagecreatetruecolor($new_width, $new_height);
				
				// copy and resize old image into new image 
				imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

				switch($image_type){
					case "image/jpeg":
						imagejpeg($tmp_img, $destination_thumb, 100);
						break;
					case "image/png":
						imagepng($tmp_img, $destination_thumb, 0);
						break;
					case "image/gif":
						imagegif($tmp_img, $destination_thumb);
						break;
				}

			}

			else{
				// the original image is smaller than the requested thumb width
				copy($destination_image, $destination_thumb);
			}
				
		}
	}
?>