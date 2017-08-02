<?php
	class Image{
		
		private $id;
		private $src;
		
		public function __construct(){
			$this->id = 0;
			$this->src = "";
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getSrc(){
			return $this->src;
		}
		
		public function setSrc($src){
			$this->src = $src;
		}
	}
?>