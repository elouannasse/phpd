
  <?php
  require "config.php" ;
  ?>
<?php
  class commentaire {
    private $nom ;
    private $message ;
    private $horodatage ;
    private $link ;

    public function __construct($link){
        $this->link=$link ;

    }
    public function create($nom, $message, $horodatage ){
        $sql = "INSERT into commentaires values(null, :nom, :message, :horodatage)";
        $stmt = $this->link->prepare($sql);
        $stmt->execute(["nom" => $nom, "message" => $message, "horodatage" => $horodatage]);
        return true;
        }


  }