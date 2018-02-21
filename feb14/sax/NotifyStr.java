import java.io.*;

import org.xml.sax.*;
import org.xml.sax.helpers.*;

import javax.xml.parsers.*;

public class NotifyStr extends DefaultHandler
{
public static void main (String argv []) throws IOException, SAXException 
    {
        if (argv.length != 1) {
            System.err.println ("Usage: java NotifyStr filename.xml");
            System.exit (1);
        }

        XMLReader reader = XMLReaderFactory.createXMLReader();

        InputSource inputSource = new InputSource(argv[0]);         
        reader.setContentHandler(new NotifyStr());
        reader.parse(inputSource);
   
        System.exit (0);
   }
public NotifyStr() {}


    public void startDocument() throws SAXException {

         System.out.println("startDocument called:");
         
    }

    public void endDocument() throws SAXException {

         System.out.println("endDocument called:");

    }

    
public void startElement(String namespaceURI, String localName,
                             String qName, Attributes aMap)
                  throws SAXException {

         System.out.println("startElement called: element name =" 
                                        + localName);
        
         // examine the attributes
         
         for(int i = 0; i < aMap.getLength(); i++) {

             String attName = aMap.getLocalName(i);
             String type = aMap.getType(i);
             String value = aMap.getValue(i);
             System.out.println("  attribute name = " + attName + 
                                "  type = " + type + " value = " + value);
         }         
     }
public void characters(char[] ch, int start, int length) throws 
                                                                            SAXException {

         // build String from char array
         String dataFound = new String(ch,start,length);
         System.out.println("characters called:" + dataFound);

    }

  
}





