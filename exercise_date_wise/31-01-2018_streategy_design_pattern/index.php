<h2>
    <?php
   			

   			interface data{
   				public function sort();
   			}


   			
   			class QuickSort  implements data
   			{
   				private $data;

   				function __construct($data)
   				{
   					$this->data = $data;
   				}


   				public function sort(){
   					echo "Sorted Assending";
   					echo "<br/>";
   					 asort($this->data);
   					 echo "<pre>";
   					 print_r( $this->data);
   					 echo "</pre>";
   					 
   				}

   			}


   			class MergeSort  implements data
   			{
   				private $data;

   				function __construct($data)
   				{
   					$this->data = $data;
   				}


   				public function sort(){
   					echo "Sorted Decending";
   					echo "<br/>";
   					arsort($this->data);
   					 echo "<pre>";
   					 print_r( $this->data);
   					 echo "</pre>";
   				}

   			}



   			function sortdata($data){
   				if(count($data)>20)
   				{
   					$s = new QuickSort($data);
   				}else{
   					$s = new MergeSort($data);
   				}

   				$s->sort();

   				

   			}


   			$data = array(5,3,8,9,1,7,9,1,11,25,98,1,39,2);
   			sortdata($data);


	?>
</h2>




