<?php
/*
! I updated your class and its description. I am oop lover.
! @Class Distance 
! @pvt variable
! @ always use description and intro . It will help you to edit code in future
*/
class Distance //class name should always be Capital. Its good practice
{
    private $string1;
    private $string2;
    
    /*
    !--------------------------------------
    !       Initialize Constructor
    !--------------------------------------
    */
    public function __construct($string1, $string2)
    {
        $this->string1 = $string1;
        $this->string2 = $string2;
    }

    /*
    !--------------------------------------
    !       Set Variable Value String1
    !       @param string
    !--------------------------------------
    */
    public function setString1($string1)
    {
        $this->string1 = $string1;
    }

    /*
    !--------------------------------------
    !       Set Variable Value String2
    ! @param string
    !--------------------------------------
    */
    public function setString2($string2)
    {
        $this->string2 = $string2;
    }

    /*
    !--------------------------------------
    !       Get Variable Value String1
    !   @return string
    !--------------------------------------
    */
    public function getString1()
    {
        //echo $this->string1;
        return $this->string1;
    }

    /*
    !--------------------------------------
    !       Get Variable Value String2
    ! @return string
    !--------------------------------------
    */
    public function getString2()
    {
        return $this->string2;
    }

    /*
    !--------------------------------------
    !       Calculate Distance
    !--------------------------------------
    */
    protected function calculateDistance($str1, $str2)
    {
        // echo "calculateDistance"; //what have you done here actually?
    }


    /*
    !--------------------------------------
    !       Get Distance
    !--------------------------------------
    */
    public function getDistance($str1, $str2)
    {
        $result = $this->calculateDistance($str1, $str2);
        return $result;
    }
}


$test2 = new Distance("hello", "world");
$t4    = $test2->getString1();
$t5    = $test2->getString2();

echo $t4 . " " . $t5;

?>