<?PHP

class reclamation 
{


	private  $id_rec=1;
	private $id_user=null;
	private $nom=null;
	private  $date_reclamation=null;
	private   $description=null;
	private  $type=null;
	private  $etat=null; 

	public function  __construct($id_user,$description,$type,$nom)
				{
			
		$this->id_user=$id_user;
		$this->nom=$nom;
		$this->description=$description;
		$this->type=$type;
		
		
				}
	public function getidrec()
	{
		return $this->id_rec;
	}
	public function getnomm()
	{
		return $this->nom;
	}
	public function getidcl()
	{
		return $this->id_user;
	}
	
	public function getdate(){
		return $this->date_reclamation;
	}
	public function getdescription(){
		return $this->description;
	}
	public function gettype(){
		return $this->type;
	}
	
	public function getetat()
	{
		return $this->etat;
	}


function setidrec($id_rec)
	{
		return $this->id_rec;
	}
	function setidcl()
	{
		return $this->id_user;
	}
	
	function setdate(){
		return $this->date_rec;
	}
	function setdescription(){
		return $this->description_rec;
	}
	function settype(){
		return $this->type_rec;
	}
	
	function setetat()
	{
		return $this->etat;
	}

}

?>