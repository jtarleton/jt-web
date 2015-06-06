<h1>Event-Based XML Parsing in PHP</h1>

<b>Introduction</b>
<p>
In this tutorial, I will show how to write a simple parser application that reads an XML data source and 
outputs it as an HTML table.  Alternatively, you may run this script on the command line, and return the parsed data as an 
array instead of outputting HTML.
</p>

<p>To begin, you will need a valid XML file, saved as <b>datasource.xml</b>, such as the following:
<blockquote><?php echo htmlentities('<?xml version="1.0" encoding="utf-8" ?>
<countries>
    <code_country>
        <country_id>1</country_id>
        <country>United States</country>
        <country_code>USA</country_code>
    </code_country>
</countries>'); 
?></blockquote>
</p>

<p>
Simply instantiate a JtXmlParser object with the following parameters: 
<ul>
<li>Your file system path ("datasource.xml") </li>
<li>The name of parent element to be parsed ("code_country")</li>
</ul>
</p>

<p>
Run it, and the XML source is neatly parsed into a multi-dimensional array and rendered as HTML.
</p>

<b>Running the Application</b>
<p>
This example requires three files:
<ol>
<li>datasource.xml<br />
The XML data source file we will be reading.</li>
<li>JtXmlParser.class.php<br />
The custom class definition for the parser object to be created within the main PHP script.</li>
<li>parse.php<br />
The main PHP script to be run under the web server document root.
</li></ol>
</p>

<p>Here is the <?php echo link_to('full source code', 'https://gist.github.com/jtarleton/ee0375efb8eaeb53c0a4'); ?> and a <a href="xmlparsing/parse">demo</a> of the final HTML in this example.</p>

<p>
<b>Writing the Parser Class</b> 
<br /><!-- 
The library this example uses is a PHP extension called libxml, based on <a href="http://www.xmlsoft.org/">Libxml2</a>.  

Programming an XML parser in PHP can be a complex and tedious task, so PHP offers several other extensions to support XML interoperability, including but not limited to:

<ul>
<li>Document Object Model (DOM)</li> 
<li>SimpleXML</li> 
<li>Service Data Objects (SDO)</li>
</ul>

XML parsers can be event-based, treating the XML source as a sequence of events and event handlers, or DOM-based.
Event-based DOM-based 



-->
to be continued...
</p>
<p>
<b>Creating the Parser Instance</b>
<br />
to be continued...
</p>
