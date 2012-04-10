<html>      
	<head>
	</head>
	<body>  
		<?php
		class Teacher {
    private $name;
    static $number = 0;
    public function  __construct() {
        
        $this->name = name; //‘Nedko Nedkov’;
        $number++;
        echo "number of teachers $number . <br/>" ;
    }
    public function takeAttendance($studentName) {
       
        echo "$studentName";
    }
}
class Student{
    private $name;
    private $teacher;
    public function  __construct($name) {
       
        $this->name = $name;
        $this->teacher = new Teacher();
    }
    public function shoutYourName(){
        $this->teacher->takeAttendance($this->name);
    }
}
$kiril = new Student(‘KiriL’);
$qvor = new Student(‘Qvor’);
$robert = new Student(‘Robert’);
$patrick = new Student(‘Patrick’);
$kiril->shoutYourName();
$qvor->shoutYourName();
$robert->shoutYourName();
$patrick->shoutYourName();
		?>
	</body>
</html>