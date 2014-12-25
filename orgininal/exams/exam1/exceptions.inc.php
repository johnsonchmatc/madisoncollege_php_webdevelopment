<?php
  class notArrayException extends Exception {
    function __toString() {
      return 'notArrayException '. $this->getCode()
            .': '. $this->getMessage() .'<br />'.' in '
            . $this->getFile() .' on line '
            . $this->getLine() .'<br />';
    }
  }
  class emptyArrayException extends Exception {
    function __toString() {
      return 'emptyArrayException '. $this->getCode()
            .': '. $this->getMessage() .'<br />'.' in '
            . $this->getFile() .' on line '
            . $this->getLine() .'<br />';
    }
  }
  class notNumericException extends Exception {
    function __toString() {
      return 'notNumericException '. $this->getCode()
            .': '. $this->getMessage() .'<br />'.' in '
            . $this->getFile() .' on line '
            . $this->getLine() .'<br />';
    }
  }
?>
