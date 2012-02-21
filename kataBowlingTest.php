<?php
include_once "kataBowling.php";


class kataBowlingTest extends PHPUnit_Framework_TestCase {
	
   /**
     * @dataProvider bateria
     */
    public function testaJuegoBowling($jugada, $resultado)
    {
		$obj = new kataBowling();
        $this->assertEquals($resultado, $obj->resuelve($jugada));
    }
 
    public function bateria()
    {
		return array(
        	array('1',1),
			array('2',2),
			array('9',9),
			array('-',0),
			array('X',10),
			array('11',2)/*,
			array('-1',1),
			array('1-',1),
			array('--',0),
			array('1/',10),
			array('5/',10),
			array('-/',10),
			array('2345',14),
			array('3-26',11),
			array('346/',17),
			array('34X',17),
			array('3/53',23),
			array('X24',22),
			array('5/8/',28),
			array('5/X',30),
			array('X5/',30),
			array('XX',30),
			array('5/8/3/',41),
			array('5/X35',46),
			array('5/XX',50),
			array('X5/5/',45),
			array('X5/X',50),
			array('XX6/',60),
			array('XX43',51),
			array('XXX',60),
			array('XXXXXXXXX72',267),
			array('9-9-9-9-9-9-9-9-9-9-',90),
			array('5/5/5/5/5/5/5/5/5/51',141),
			array('XXXXXXXXXX5',285),
			array('XXXXXXXXXXXX',300),
			array('XXXXXXXXX5/6',282),
			array('5/5/5/5/5/5/5/5/5/5/5',150)
        */);
    }
}
?>