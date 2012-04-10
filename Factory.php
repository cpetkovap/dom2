<html>
	<head>
		<title>dom2</title>
	</head>
	<body>
	
		<?php

abstract class PC {
    
    public function getType(){
        echo $this->type;
    }
}


class Toshiba extends PC{
    private $type = "Toshiba";
    
    public function getType(){
        echo $this->type;
    }
   
}


class HP extends PC{
    private $type = "HP";
    
    public function getType(){
        echo $this->type;
    }

}


class Acer extends PC{
    private $type = "Acer";
    
    public function getType(){
        echo $this->type;
    }

}


class PCFactory {
    

    const Toshiba = "Toshiba";
    const HP = "HP";
    const Acer = "Acer";
    

    public static function createPC($pcType){
        switch($pcType){
            case self::Toshiba:
                return new Toshiba();
                break;
            case self::HP:
                return new HP();
                break;
            case self::Acer:
                return new Acer();
        }
        die("PC die");
    }
    
}


$PCFactory = new PCFactory();

$Toshiba = $PCFactory->createPC(PCFactory::Toshiba);
//Run a method.
$Toshiba->getType();

$Acer = $PCFactory->createPC(PCFactory::Acer);
$Acer->getType();

$HP = $PCFactory->createPC(PCFactory::HP);
$HP->getType();

?>
	</body>
</html>