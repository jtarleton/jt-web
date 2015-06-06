<?php
class JtXmlParser
{
    const XML_PATH ='datasource.xml';

    const START_NODE = 'ROW'; // the element identifying a new record

    public $file, 
        $rows = array(), 
        $record = array(), 
        $fdata = '', 
        $interactive; 

    //Constuctor
    public function __construct($path = null, $startnode = null){
        $this->file      = $path;
        $this->startnode = $startnode;
        if(!isset($this->file)){
            $this->file = self::XML_PATH;
        }

         if(!isset($this->startnode)){
            $this->startnode = self::START_NODE;
        }
        $this->doParse();


    }

    //Factory create method
    public static function get($path=null, $startnode=null){
        return new self($path, $startnode);
    }

    //Prompt
    private function prompt(){
        
        echo sprintf('Found %s rows in XML source files%sContinue or quit (c/q) ?', count($this->rows),   PHP_EOL);
    }

    //Finish up
    public function finishUp(){

        if($this->interactive){
            $this->prompt();
            $handle = fopen ("php://stdin","r");
            $line = fgets($handle);
            $line = trim($line);
            switch($line){
                case 'C':
                case 'c':
                    echo sprintf('Continuing...%s', PHP_EOL);
                    print_r($this->rows); 
                    break;
                default:
                    echo sprintf('Exiting...%s', PHP_EOL);
                    exit(0);
            } 
        } else {
            return $this->rows; 
        }
    }

    //Do Parse
    public function doParse()
    {
        $this->record = array();
        $this->fdata = '';
        $this->inrecord = false;
        $xml_parser = xml_parser_create();
       
        xml_set_element_handler($xml_parser, array($this, "startElement"), array($this, "endElement"));

        xml_set_character_data_handler($xml_parser, array($this, "characterData") );

        if (!($fp = fopen($this->file, 'r'))) {
            die('Could not open XML input');
        }

        while ($data = fread($fp, 4096)) {
           
            //xml_parse will feed the current element to startElement() and endElement()
            if (!xml_parse($xml_parser, $data, feof($fp)))
            {
                die(sprintf("XML error: %s at line %d", xml_error_string(xml_get_error_code($xml_parser)), xml_get_current_line_number($xml_parser)));
            }

        }

        xml_parser_free($xml_parser);
    }

    /**
    * Start Element
    */
    public function startElement($parser, $name, $attrs)
    {
        // Start of new record?
        if( $name == $this->startnode ) {
            $this->inrecord = true;
            $this->record = array();
        }

        $this->fdata = '';

    }

    /**
    * End Element
    */
    public function endElement($parser, $name)
    {
        //End of record
        if( $name == $this->startnode ) {
            $this->inrecord = false;

            // Do end of record processing here
            $this->rows[]= $this->record;
        }

        if( ! $this->inrecord ){
            return;
        }

        //  do something with the fdata element
        if( ! isset($this->record[$name])) {
            $this->record[$name] = $this->fdata;
        } elseif( is_array($this->record[$name])) {
            $this->record[$name][] = $this->fdata;
        } else {
            $temp = $this->record[$name];
            $this->record[$name] = array($temp);
            $this->record[$name][] = $this->fdata;
        }

        // clear it
        $this->fdata = '';

    }
    public function setInteractive(){
        $this->interactive = true;
        return $this;
    }

    /**
    * Character Data
    */
    public function characterData($parser, $data)
    {
        $this->fdata .= $data;
    }
}


