<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
    
    <h2>Elements</h2>
	<p>
    <xsl:for-each select="/patient_list/patient/*">
     	<xsl:value-of select="name()" />
		<br />
		</xsl:for-each>
   </p> 
       <h2>Processing instruction</h2>
	<p>
    <xsl:for-each select="/">
     	<xsl:value-of select="processing-instruction()" />
		<br />
		</xsl:for-each>
   </p> 
     <h2>Comments</h2>
	<p>
    <xsl:for-each select="/patient_list">
     	<xsl:value-of select="comment()" />
		<br />
		</xsl:for-each>
   </p> 
   <h2>Attributes</h2>
	<p>
    <xsl:for-each select="/patient_list/patient/allergies">
     	<xsl:value-of select="@count" />
		<br />
		</xsl:for-each>
   </p>
      <h2>Text</h2>
	<p>
    <xsl:for-each select="/patient_list/patient/address">
     	<xsl:value-of select="text()" />
		<br />
		</xsl:for-each>
   </p>

<h2>Second</h2>
	<p> Last element <br />
    <xsl:for-each select="/patient_list/patient[last()]">
     	<xsl:value-of select="." />
		<br />
		</xsl:for-each>
   </p> 
<p>Age greater than 50 <br />
    <xsl:for-each select="/patient_list/patient[age>50]">
     	<xsl:value-of select="." />
		<br />
		</xsl:for-each>
   </p>
<p>All the elements <br />
    <xsl:for-each select="/patient_list/patient">
     	<xsl:value-of select="." />
		<br />
		</xsl:for-each>
   </p>   
 <p><b>Ancestor </b><br />
    <xsl:for-each select="/patient_list/patient[last()]/ancestor::patient_list/patient[position()>1]">
     	<xsl:value-of select="." />
		<br />
		</xsl:for-each>
   </p> 
<p><b>Descendants </b><br />
    <xsl:for-each select="/patient_list/descendant::patient">
     	<xsl:value-of select="." />
		<br />
		</xsl:for-each>
   </p>   
<p><b>Sibling </b><br />
    <xsl:for-each select="/patient_list/patient[position()=2]/following-sibling::patient">
     	<xsl:value-of select="." />
		<br />
		</xsl:for-each>
   </p>      
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

