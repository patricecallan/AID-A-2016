<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>My Book Collection</h2>
    <table border="1">
      <tr bgcolor="#ccffff">
        <th style="text-align:left">book_id</th>
        <th style="text-align:left">book_title</th>
      </tr>
      <xsl:for-each select="books/book">
      <tr>
        <td><xsl:value-of select="book_id"/></td>
        <td><xsl:value-of select="book_title"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>