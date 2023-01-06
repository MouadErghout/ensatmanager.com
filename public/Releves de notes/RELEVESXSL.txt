<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema"
    exclude-result-prefixes="xs"
    version="2.0">
    
    <xsl:template match="/">
        <html>
            <body>
                <h1>Releve de notes</h1>
                <table border="1">
                    <tr>
                        <th>Code Module</th>
                        <th>Designation Module</th>
                        <th>Note</th>
                        <th>Designation matière</th>
                        <th>Note</th>
                    </tr>
                    <xsl:for-each select="Releve/Eleve/Module">
                        <xsl:variable name="number">
                            <xsl:value-of select="count(Element_module)"/>
                        </xsl:variable>
                        <tr>
                            <td rowspan="{$number + 1}"><xsl:value-of select="@id"/></td>
                            <td rowspan="{$number + 1}"><xsl:value-of select="@designation"/></td>
                            <td rowspan="{$number + 1}"><xsl:value-of select="Note"/></td>
                        </tr>
                        <xsl:for-each select="Element_module">
                            <tr>
                                <td><xsl:value-of select="@designation"/></td>
                                <td><xsl:value-of select="Note"/></td>
                            </tr>
                        </xsl:for-each>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>