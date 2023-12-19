<?php 
 
    class categ{
        private $id;
        private $Nom;
        private $Description;
        private $img;
        private $deleted_at ;
    
        



        public function __construct( $id, $Nom, $Description, $img, $deleted_at ){
          
            $this->id = $id;
            $this->Nom =  $Nom;
            $this->Description =  $Description;
            $this->img = $img;
            $this->deleted_at = $deleted_at;
        }

     /**
         * Get the value of id
         */ 
        public function getid()
        {
                return $this->id;
        }



           /**
         * Get the value of name
         */ 
        public function getNom()
        {
                return $this->Nom;
        }

        

          /**
         * Get the value of Author
         */ 
        public function get_catg_Description()
        {
                return $this->Description;
        }


        /**
         * Get the value of Genre
         */ 
        public function get_catg_img()
        {
                return $this->img;
        }

      
      
   
        /**
         * Get the value of delete
         */ 
        public function getdeleted_at_catg()
        {
                return $this->deleted_at;
        }
    }
?>