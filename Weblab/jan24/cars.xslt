<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
    <h2>My CD Collection</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>Make</th>
        <th>Year</th>
		<th>Model</th>
        <th>Color</th>
		<th>Engine</th>
        <th>Number of doors</th>
		<th>Transmission Type</th>
        <th>Accessories</th>
		
      </tr>
      <xsl:for-each select="catalog/cd">
      <tr>
        <td><xsl:value-of select="make" /></td>
        <td><xsl:value-of select="year" /></td>
		<td><xsl:value-of select="model" /></td>
        <td><xsl:value-of select="color" /></td>
		<td><xsl:value-of select="engine" /></td>
        <td><xsl:value-of select="number_of_doors" /></td>
		<td><xsl:value-of select="transmission_type" /></td>
        <td><xsl:value-of select="accessories" /></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

