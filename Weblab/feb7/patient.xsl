<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
    <h2>List of Patients</h2>
    <table border="2">
      <tr bgcolor="#9ac41c">
        <th>SSNo</th>
        <th>Age</th>
		<th>Room_No</th>
        <th>Phone_No</th>
		<th>Address</th>
        <th>Diseases</th>
		<th>Allergies</th>
        
		
      </tr>
      <xsl:for-each select="patient_list/patient">
      <tr>
        <td><xsl:value-of select="ssno" /></td>
        <td><xsl:value-of select="age" /></td>
		<td><xsl:value-of select="roomno" /></td>
        <td><xsl:value-of select="phoneno" /></td>
		<td><xsl:value-of select="address" /></td>
        <td><xsl:value-of select="diseases" /></td>
		<td><xsl:value-of select="allergies" /></td>
        
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

