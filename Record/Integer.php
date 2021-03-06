<?PHP

  require_once ('libEJ/Record.php');
  require_once ('libEJ/Interface/Record/Numeric.php');
  
  abstract class libEJ_Record_Integer extends libEJ_Record implements libEJ_Interface_Record_Numeric {
    private $Value = 0.00;
    
    // {{{ __toString
    /**
     * Create a string from this object
     * 
     * @access public
     * @return string
     **/
    function __toString () {
      return strval ($this->Value);
    }
    // }}}
    
    // {{{ setValue
    /**
     * Store the value of this record
     * 
     * @param int $Value
     * 
     * @access public
     * @return void
     **/
    public function setValue ($Value) {
      $this->Value = intval ($Value);
    }
    // }}}
    
    // {{{ getValue
    /**
     * Retrive the value of this record
     * 
     * @access public
     * @return int
     **/
    public function getValue () {
      return $this->Value;
    }
    // }}}
  }

?>