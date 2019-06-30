<?php



	class Meeting {


		private $_meetingname;
		private $_organisateurs;
		private $_datedebut;
		private $_datefin;
		private $_participants;


		function __construct(array $donnees)
		{
			$this->_meetingname  = $donnees['meetingname'];
			$this->_datedebut    = $donnees['datedebut'];
			$this->_datefin      = $donnees['datefin'];
			$this->setParticipants(" ", $donnees['participants']);
            $this->setOrganisateurs(" ", $donnees['organisateurs']);

        }



		
		
		public function getOrganisateurs()
		{
			return $this->_organisateurs;
		}
		

		public function getMeetingname()
		{
			return $this->_meetingname;
		}

		
		public function getDateDebut()
		{
			return $this->_datedebut;
		}		
		
		
		public function getDateFin()
		{
			return $this->_datefin;
		}
		
		
		public function getParticipants()
		{
			return $this->_participants;
		}
		
		public function setParticipants($delimeter, $valeur)
		{
			$this->_participants = explode($delimeter, $valeur);
		}


        public function setOrganisateurs($delimeter, $valeur)
        {
            $this->_organisateurs = explode($delimeter, $valeur);
        }
	}




?>