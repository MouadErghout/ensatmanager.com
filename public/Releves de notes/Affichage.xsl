<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema"
    exclude-result-prefixes="xs"
    xmlns:fo="http://www.w3.org/1999/XSL/Format"
    version="2.0">
    <xsl:template match="/">
        <fo:root>
            <fo:layout-master-set>
                <fo:simple-page-master master-name="A4" margin-top="0.2cm"   margin-bottom="0.2cm"
                    margin-left="0.1cm">
                    <fo:region-body />
                    <fo:region-before extent="3.0cm"/>
                </fo:simple-page-master>
            </fo:layout-master-set>
            <fo:page-sequence master-reference="A4">
                <fo:flow flow-name="xsl-region-body">
                    <!-- TOP BAR -->
                    <fo:table table-layout="fixed" margin-left="2cm">
                        <fo:table-column column-width="10cm"/>
                        <fo:table-body>
                            <fo:table-row >
                                <fo:table-cell width="10cm" height="4cm">
                                    <fo:block font-family="Roboto" font-size="35px" color="#02306E" text-align="center"  margin-top="1cm" text-decoration="underline">
                                        Relevé des notes 
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="35px" color="#02306E" text-align="center" margin-top="0.1" margin-bottom="-0.02cm" >
                                        Classe : <xsl:value-of select="Eleves/@niveau"/>
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="35px" color="#02306E" text-align="center"  margin-bottom="-0.02cm" >
                                        Promotion : 2022
                                    </fo:block>
                                </fo:table-cell>
                            </fo:table-row>
                        </fo:table-body>
                    </fo:table>
                    <fo:table table-layout="fixed">
                        
                        <fo:table-column column-width="3.1cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="1.25cm" border-width="1px" border-style="solid"/>
                        
                        <fo:table-header  >
                            
                            <fo:table-row border-width="1px" border-style="solid" background-color="#93C4FF" >
                                
                                <fo:table-cell width="3.2cm" >
                                    <fo:block font-size="13px" color="#02306E"  margin-top="0.5cm" margin-bottom="0.5cm"  text-align="center">
                                        Etudiant
                                    </fo:block>
                                </fo:table-cell>
                                
                                <xsl:for-each select="//Eleve[@id='A124563']/Module">
                                    <fo:table-cell width="1.25cm" >
                                        <fo:block font-size="13px" color="#02306E"  margin-top="0.5cm" margin-bottom="0.5cm" text-align="center">
                                            <xsl:value-of select="@id"/>
                                        </fo:block>
                                    </fo:table-cell>
                                </xsl:for-each>
                                
                                <fo:table-cell width="1.33cm" >
                                    <fo:block font-size="13px" color="#02306E"  margin-top="0.5cm" margin-bottom="0.5cm" text-align="center" >
                                        Résultat
                                    </fo:block>
                                </fo:table-cell>
                            </fo:table-row>
                            
                        </fo:table-header>
                        <fo:table-body>
                            
                            <xsl:for-each select="Eleves/Eleve">
                                <fo:table-row >
                                        <xsl:variable name="moy">
                                            <xsl:value-of select="Moyenne"/>
                                        </xsl:variable>
                                        <fo:table-cell width="3.2cm" height="1cm" border-width="1px" border-style="solid" >
                                            <fo:block 
                                                width="3.2cm"
                                                height="4cm" font-size="10px"
                                                color="#000000"
                                                padding-top="0.6cm"
                                                padding-bottom="0.6cm"
                                                text-align="center"
                                                border-width="1px" border-style="solid">
                                                <xsl:value-of select="@nom"/>
                                                <xsl:text> </xsl:text>
                                                <xsl:value-of select="@prenom"/>
                                            </fo:block>
                                        </fo:table-cell>
                                    <xsl:for-each select="Module">
                                            <fo:table-cell width="1.25cm" height="1cm" border-width="1px" border-style="solid" >
                                                <fo:block 
                                                    width="1.25cm"
                                                    height="4cm" font-size="10px"
                                                    color="#000000"
                                                    padding-top="0.6cm"
                                                    padding-bottom="0.6cm"
                                                    text-align="center"
                                                    border-width="1px" border-style="solid">
                                                    <xsl:value-of select="Note"/>
                                                </fo:block> 
                                            </fo:table-cell> 
                                        </xsl:for-each>
                                        
                                        <xsl:if test="$moy &gt;= 10">
                                            <fo:table-cell width="1.25cm" height="1cm" border-width="1px" border-style="solid" background-color="#6BDB4B" >
                                                <fo:block 
                                                    width="1.25cm"
                                                    height="4cm" font-size="10px"
                                                    color="#000000"
                                                    padding-top="0.6cm"
                                                    padding-bottom="0.6cm"
                                                    text-align="center"
                                                    border-width="1px" border-style="solid">
                                                    <xsl:value-of select="Moyenne"/>
                                                </fo:block> 
                                            </fo:table-cell> 
                                        </xsl:if>
                                        <xsl:if test="$moy &lt; 10">
                                            <fo:table-cell width="1.25cm" height="1cm" border-width="1px" border-style="solid" background-color="#FF0000" >
                                                <fo:block 
                                                    width="1.25cm"
                                                    height="4cm" font-size="10px"
                                                    color="#000000"
                                                    padding-top="0.6cm"
                                                    padding-bottom="0.6cm"
                                                    text-align="center"
                                                    border-width="1px" border-style="solid">
                                                    <xsl:value-of select="Moyenne"/>
                                                </fo:block> 
                                            </fo:table-cell> 
                                        </xsl:if>
                                </fo:table-row>
                            </xsl:for-each>
                        </fo:table-body>
                    </fo:table>
                </fo:flow>
            </fo:page-sequence>
        </fo:root> 
    </xsl:template>
</xsl:stylesheet>