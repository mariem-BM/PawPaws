<?php
    class ReservationS {
        public $idReservation = null;
        public $firstname;
        public $lastname;
        public $email;
        public $phone;
        public $servicetype;
        public $nopets;
		 public  $dateS;

        public function getIdService () {
            return $this->idReservation;
        }

        public function getfirstname (){
            return $this->firstname;
        }

        public function getlastname (){
            return $this->lastname;
        }
        public function getemail (){
            return $this->email;
        }
        public function getphone (){
            return $this->phone;
        }
        public function getnopets (){
            return $this->nopets ;
        }

        public function getDateS(){
            return $this->dateS;
        }
        public function setfirstname ($firstname){
            $this->firstname = $firstname;
        }
        public function setlastname ($lastname){
            $this->lastname = $lastname;
        }
        public function setemail ($email){
            return $this->email = $email;
        }
        public function setphone ($phone){
            return $this->phone = $phone;
        }

        public function setnopets ($nopets){
            $this->nopets = $nopets;
        }

		public function setDate($date){
            $this->date= $date;
        }
    }
