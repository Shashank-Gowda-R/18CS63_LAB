<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:template match="/">
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
      </head>
      <body>
        <table>
          <tr>
            <th>USN</th>
            <th>Name</th>
            <th>College</th>
            <th>Branch</th>
            <th>Year of Joining</th>
            <th>Email ID</th>
          </tr>
          <xsl:apply-templates select="students/student"/>
        </table>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="student">
    <tr>
      <td><xsl:value-of select="usn"/></td>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="college"/></td>
      <td><xsl:value-of select="branch"/></td>
      <td><xsl:value-of select="year"/></td>
      <td><xsl:value-of select="email"/></td>
    </tr>
  </xsl:template>

</xsl:stylesheet>
