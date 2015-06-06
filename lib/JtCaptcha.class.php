<?php
/* 
* Based on SIMPLE CAPTCHA IMAGE SCRIPT by Constantin Boiangiu
* This program is free software: you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation, either version 3 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 * 
	 * You should have received a copy of the GNU General Public License
	 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
class JtCaptcha {
	public $img, $security_number, $red, $green, $blue, $text_color, $text;
	public function __construct($fpath, $secnum){
		//we create out image from the existing jpg image.
		//You can replace that image with another of the 
		//same size.

		try{
		$this->img=imagecreatefromjpeg($fpath);	
		} catch(Exception $e){
		
die(var_dump( $e->getMessage()));
		}	


	
		//defines the text we use in our image,
		//in our case the security number defined
		//in usage.php
		$this->security_number = empty($secnum) 
			? 'error' 
			: $secnum;

		//we define 3 random numbers that will
		//eventually create our text color code (RGB)
		$this->red=rand(100,255); 
		$this->green=rand(100,255);
		$this->blue=rand(100,255);
	
		//in order to have different color for our text, 
		//we substract from the maximum 255 the random
		//number generated above
		$this->text_color=imagecolorallocate($this->img,
			255-$this->red,
			255-$this->green,
			255-$this->blue 
		);

		//this adds the text stored in $this->image_text to our 
		//capcha image
		$this->text=imagettftext($this->img,
			16,
			rand(-10,10),
			rand(10,30),
			rand(25,35),
			$this->text_color,
			"/var/homewww/web/images/fonts/monof55.ttf",
			$this->security_number
		);


		

	}
	public static function get($fpath, $secnum){
		return new self($fpath, $secnum);
	}
	public function send(){
		//
		//	we tell the browser that he's dealing
		//	with a jpg image, although that's not true,
		//	he will have to belive us
		header("Content-type:image/jpeg");
		header("Content-Disposition:inline ; filename=secure.jpg");	
		imagejpeg($this->img);

		// and this is all.
	}
}
