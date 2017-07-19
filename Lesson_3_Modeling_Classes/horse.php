<?php
class Horse
{

	// For this example, we'll introduce a simple
	// function to produce an output.
	
	private $horse_size = 2;
	private $horse_breed = "Cartujan";
	private $horse_color = "Black";
	private $horse_name =  "HorseLuis";

	/* The funcion created will be generate an output
	 * with the properties created. 
	 *
	 * Why? well, at the previous examples the cases are not
	 * very useful. You can create an instance of the classes
	 * BUT you can't have access anything in the class, so 
	 * you need at least a basic method to get the values.
	 *
	 * Let's add a method to the class to display what is contained
	 * in this class. A simple method with a simple objetive: launch
	 * a printing order for show the properties values.
	 *
	 * Let's go to build one single string to return, a simple text
	 * adding all the values.
	 *
	 */

          function display_values()

	  {

          print "Horse size is $this->horse_size. Horse breed is $this->horse_breed. Horse color is $this->horse_color. And the name is $this->horse_name.";

	  /* Ok, now we have a method to get the values. What contains?
	   * Basically, it contains a set of pointers to get values.
	   * The $this pointer is used to have access to properties contained 
	   * in an object (an instance of a class). The $ sign is for the pointer
	   * but in this case, not for the variable ($this-> horse_breed).
	   *
	   */


	  }



}

?>
