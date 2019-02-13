<?php 
// http://github.com/arif98741

function FunctionReturn($str1,$str2)
{
	$temp [][] 	= array();
	
	for($i = 0; $i < strlen($str1)+1; $i++){
            $temp[0][$i] = $i;
    }
    
    for($i = 0; $i < strlen($str1)+2; $i++){
        $temp[$i][0] = $i;
    }
    
    for( $i=1;$i <= strlen($str1); $i++){
        for( $j=1; $j <= strlen($str2); $j++){

            if($str1[$i-1] == $str2[$j-1]){

                $temp[$i][$j] = $temp[$i-1][$j-1];
            }else{
                $temp[$i][$j] = 1 + min($temp[$i-1][$j-1], $temp[$i-1][$j], $temp[$i][$j-1]);
                
            }
        }
    }
    
    // echo '<pre>';
    // print_r($temp); die;
    return $temp[strlen($str1)][strlen($str2)];

}

echo FunctionReturn("arif", "sima");

?>