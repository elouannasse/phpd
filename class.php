
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
    public function create($nom, $message){
        $sql = "INSERT into commentaires values(:id, :nom, :message, :horodatage);";
        $stmt = $this->link->prepare($sql);
        $stmt->execute(["id" => null, ":nom" => $nom, ":message" => $message, "horodatage" => "now()"]);
        return true; 
        }
        public function read(){
          $sql = "select * from commentaires";
          $stmt = $this->link->prepare($sql);
          $stmt->execute();
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
          return $result;
          }


  }


  $coment = new commentaire ($link);

  // $coment->create("ahmed", "hello");




