<?php 
 
    class userr{
        private $id;
        private $name;
        private $prénom;
        private $phone ;
        private $Email ;
        private $adresse;
        private $ville;
        private $Password  ;
        private $is_Active ;
    
    
        



        public function __construct( $id, $name, $prénom, $phone, $Email,$adresse , $ville , $Password , $is_Active  ){
          
            $this->id = $id;
            $this->name =  $name;
            $this->prénom =  $prénom;
            $this->phone = $phone;
            $this->Email = $Email;
            $this->adresse =  $adresse;
            $this->ville =  $ville;
            $this->Password = $Password;
            $this->is_Active = $is_Active;
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
        public function getname()
        {
                return $this->name;
        }

        

          /**
         * Get the value of Author
         */ 
        public function get_prénom()
        {
                return $this->prénom;
        }


        /**
         * Get the value of Genre
         */ 
        public function get_phone()
        {
                return $this->phone;
        }

      
      
   
        /**
         * Get the value of delete
         */ 
        public function getEmail()
        {
                return $this->Email;
        }


         /**
         * Get the value of delete
         */ 
        public function getadresse()
        {
                return $this->adresse;
        }

         /**
         * Get the value of delete
         */ 
        public function getville()
        {
                return $this->ville;
        }


         /**
         * Get the value of delete
         */ 
        public function getPassword()
        {
                return $this->Password;
        }


         /**
         * Get the value of delete
         */ 
        public function getis_Active()
        {
                return $this->is_Active;
        }

    }
?>