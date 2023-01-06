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
                    margin-left="0.5cm"  margin-right="0.5cm">
                    <fo:region-body />
                    <fo:region-before extent="3.0cm"/>
                </fo:simple-page-master>
            </fo:layout-master-set>
            <fo:page-sequence master-reference="A4">
                <fo:flow flow-name="xsl-region-body">
                    <fo:table table-layout="fixed">
                        <fo:table-column column-width="10cm"/>
                        <fo:table-body>
                            <fo:table-row>
                                <fo:table-cell width="10cm" height="4cm">
                                    <fo:block font-family="Roboto" font-size="35px" color="#02306E" text-align="center" margin-top="1cm" margin-bottom="-0.02cm" >
                                        AP2
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="35px" color="#02306E" text-align="center"  margin-bottom="-0.02cm" >
                                        2022/2023
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="35px" color="#02306E" text-align="center"  margin-bottom="-0.02cm" text-decoration="underline" >
                                        Relevé des notes
                                    </fo:block>
                                </fo:table-cell>
                            </fo:table-row>
                        </fo:table-body>
                    </fo:table>
                    <fo:table table-layout="fixed">
                        
                        <fo:table-column column-width="4.5cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="6.5cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="2cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="4.5cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="2.5cm" border-width="1px" border-style="solid"/>
                        
                        <fo:table-header  >
                            
                            <fo:table-row border-width="1px" border-style="solid" >
                                
                                <fo:table-cell width="4.5cm" >
                                    <fo:block font-size="15px" color="#02306E"  margin-top="0.5cm" margin-bottom="0.5cm" text-align="center" margin-left="0.2cm">
                                        Code Module
                                    </fo:block>
                                </fo:table-cell>
                                
                                <fo:table-cell width="6cm" >
                                    <fo:block font-size="15px" color="#02306E" margin-left="0.2cm" margin-top="0.5cm" margin-bottom="0.5cm" text-align="center">
                                        Designation Module
                                    </fo:block>
                                </fo:table-cell>
                                
                                <fo:table-cell width="2cm" >
                                    <fo:block font-size="15px" color="#02306E" margin-left="0.2cm" margin-top="0.5cm" margin-bottom="0.5cm" text-align="center">
                                        Note/20
                                    </fo:block>
                                </fo:table-cell>
                                
                                <fo:table-cell width="4.5cm" >
                                    <fo:block font-size="15px" color="#02306E" margin-left="0.2cm" margin-top="0.5cm" margin-bottom="0.5cm" text-align="center">
                                        Désignation matière
                                    </fo:block>
                                </fo:table-cell>
                                
                                <fo:table-cell width="2.5cm" >
                                    <fo:block font-size="15px" color="#02306E" margin-left="0.2cm" margin-top="0.5cm" margin-bottom="0.5cm" text-align="center" >
                                        Note/20
                                    </fo:block>
                                </fo:table-cell>
                            </fo:table-row>
                        </fo:table-header>
                        <fo:table-body>
                            <xsl:for-each select="Releve/Eleve/Module">
                                <xsl:variable name="number">
                                    <xsl:value-of select="count(Element_module)"/>
                                </xsl:variable>
                                <fo:table-row >
                                        <fo:table-cell width="2.6cm" height="0.5cm" border-width="1px" border-style="solid" >
                                                <fo:block 
                                                    width="2.6cm"
                                                    height="0.5cm" font-size="12px"
                                                    color="#000000"
                                                    text-align="center"
                                                    padding-top="0.6cm"
                                                    padding-bottom="0.6cm"
                                                    border-width="1px" border-style="solid">
                                                    <xsl:value-of select="@id"/>
                                                </fo:block>
                                        </fo:table-cell>
                                    <fo:table-cell width="5cm" height="0.5cm" border-width="1px" border-style="solid" >
                                                <fo:block 
                                                    width="5.2cm"
                                                    height="0.5cm" font-size="12px"
                                                    color="#000000"
                                                    text-align="center"
                                                    padding-top="0.6cm"
                                                    padding-bottom="0.6cm"
                                                    border-width="1px" border-style="solid">
                                                    <xsl:value-of select="@designation"/>
                                                </fo:block>
                                        </fo:table-cell>   
                                    <fo:table-cell width="1.9cm" height="0.5cm" border-width="1px" border-style="solid" >
                                                <fo:block 
                                                    width="1.9cm"
                                                    height="0.5cm" font-size="12px"
                                                    color="#000000"
                                                    text-align="center"
                                                    padding-top="0.6cm"
                                                    padding-bottom="0.6cm"
                                                    border-width="1px" border-style="solid">
                                                    <xsl:value-of select="Note"/>
                                                </fo:block>
                                        </fo:table-cell>
                                    <fo:table-cell width="5.5cm" height="0.5cm" border-width="1px" border-style="solid" >
                                        <xsl:for-each select="Element_module">
                                                <fo:block 
                                                    width="5cm"
                                                    height="0.5cm" font-size="12px"
                                                    color="#000000"
                                                    text-align="center"
                                                    padding-top="0.09cm"
                                                    padding-bottom="0.09cm"
                                                    border-width="1px" border-style="solid">
                                                    <xsl:value-of select="@designation"/>
                                                </fo:block>
                                        </xsl:for-each>
                                            </fo:table-cell>
                                    <fo:table-cell width="5.5cm" height="0.5cm" border-width="1px" border-style="solid" >
                                        <xsl:for-each select="Element_module">
                                                <fo:block 
                                                    width="5cm"
                                                    height="0.5cm" font-size="12px"
                                                    color="#000000"
                                                    text-align="center"
                                                    padding-top="0.09cm"
                                                    padding-bottom="0.09cm"
                                                    border-width="1px" border-style="solid">
                                                    <xsl:value-of select="Note"/>
                                                </fo:block>
                                        </xsl:for-each>
                                    </fo:table-cell>
                                </fo:table-row>
                            </xsl:for-each>
                        </fo:table-body>
                    </fo:table>
                    <!--  ligne du resultat -->
                    <xsl:variable name="moy">
                        <xsl:value-of select="//Moyenne"/>
                    </xsl:variable>
                    <fo:table table-layout="fixed">
                        <fo:table-column column-width="10cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="6cm" border-width="1px" border-style="solid"/>
                        <fo:table-column column-width="6cm" border-width="1px" border-style="solid"/>
                        <fo:table-body>
                            <fo:table-row height="1cm">
                                <fo:table-cell width="10cm" >
                                    <fo:block font-size="20px" text-align="center" color="black" margin-top="0.2cm" >
                                        Résultat :
                                    </fo:block>
                                </fo:table-cell>
                                <xsl:if test="$moy &gt;= 10">
                                    <fo:table-cell width="5cm" background-color="#48D053">
                                        <fo:block font-size="20px" text-align="center" color="black"  margin-top="0.2cm"   >
                                            ADM        
                                        </fo:block>
                                    </fo:table-cell>
                                    <fo:table-cell width="5cm" background-color="#48D053">
                                        <fo:block  font-size="20px" text-align="center" color="black"   margin-top="0.2cm"  >
                                            <xsl:value-of select="//Moyenne"/>
                                        </fo:block>
                                    </fo:table-cell>
                                </xsl:if>
                                <xsl:if test="$moy &lt;= 10">
                                    <fo:table-cell width="5cm" background-color="#FF0000">
                                        <fo:block font-size="20px" text-align="center" color="black"  margin-top="0.2cm"   >
                                            AJ        
                                        </fo:block>
                                    </fo:table-cell>
                                    <fo:table-cell width="5cm" background-color="#FF0000">
                                        <fo:block  font-size="20px" text-align="center" color="black"   margin-top="0.2cm"  >
                                            <xsl:value-of select="//Moyenne"/>
                                        </fo:block>
                                    </fo:table-cell>
                                </xsl:if>
                            </fo:table-row>
                        </fo:table-body>
                        
                    </fo:table>
                    
                    <!--  Nom et prénom de l'étudiant  -->
                    <fo:table table-layout="fixed">
                        <fo:table-column column-width="7cm" />
                        <fo:table-column column-width="7cm" />
                        <fo:table-column column-width="6cm" />
                        <fo:table-body>
                            <fo:table-row height="1cm">
                                <fo:table-cell width="7cm" >
                                    <fo:block font-size="25px" text-align="center" color="white" margin-top="0.5cm" background-color="black" >
                                        Nom: <xsl:value-of select="//Eleve/@nom"/>
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="7cm" >
                                    <fo:block font-size="25px" text-align="center" color="white"  margin-top="0.5cm" background-color="black"  >
                                        Prenom: <xsl:value-of select="//Eleve/@prenom"/>        
                                    </fo:block>
                                    
                                </fo:table-cell>
                                
                                <fo:table-cell width="6cm" >
                                    <fo:block font-size="25px" text-align="center" color="white"  margin-top="0.5cm" background-color="black" >
                                        ID: <xsl:value-of select="//Eleve/@id"/>        
                                    </fo:block>
                                    
                                </fo:table-cell>
                                
                            </fo:table-row>
                        </fo:table-body>
                        
                    </fo:table>
                </fo:flow>
            </fo:page-sequence>
        </fo:root>

    </xsl:template>
</xsl:stylesheet>