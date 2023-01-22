<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema"
    exclude-result-prefixes="xs"
    xmlns:fo="http://www.w3.org/1999/XSL/Format"
    version="2.0">
    <xsl:template match="/">
        <fo:root>
            <fo:layout-master-set>
                <fo:simple-page-master master-name="simplePage"  page-height="22cm" page-width="28cm">
                    <fo:region-body/>
                </fo:simple-page-master>
            </fo:layout-master-set>
            <fo:page-sequence master-reference="simplePage">
                <fo:flow flow-name="xsl-region-body">
                    <fo:table table-layout="fixed">
                        <fo:table-column column-width="22cm"/>
                        <fo:table-body>
                            <fo:table-row>
                                <fo:table-cell width="22cm" height="4cm" margin-right="0.8cm">
                                    <fo:block font-family="Roboto" font-size="34px" color="#02306E" text-align="center" margin-top="0.9cm" margin-left="2.5cm"
                                        font-style="italic">
                                        Emploi du Temps Ensa TANGER
                                    </fo:block>
                                </fo:table-cell>
                            </fo:table-row>
                        </fo:table-body>
                        
                    </fo:table>
                    <!--==================================-->
                    
                    <!-- Choose Week Bar -->    
                    <fo:table table-layout="fixed">
                        <fo:table-column column-width="1.5cm"/>
                        <fo:table-column column-width="2cm"/>
                        <fo:table-column column-width="1.5cm"/>
                        <fo:table-column column-width="2cm"/>
                        <fo:table-body>
                            <fo:table-row>
                                
                                <fo:table-cell width="1.5cm" >
                                    <fo:block font-family="Roboto" font-size="24px" color="#000000" text-align="center" margin-top="-0.8cm" margin-left="10cm">
                                        Semaine
                                    </fo:block>
                                </fo:table-cell>
                                
                                <fo:table-cell width="2cm" height="4cm" margin-right="0.8cm">
                                    <fo:block margin-top="-0.9cm" margin-left="9.7cm">
                                        <fo:instream-foreign-object>
                                            <svg width="85" height="34" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="79" height="27.5" fill="white" stroke="black"/>
                                            </svg>
                                        </fo:instream-foreign-object>
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="24px" color="#000000" text-align="center" margin-top="-0.75cm" margin-left="10.1cm"
                                        >
                                        05
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="1.5cm" >
                                    <fo:block font-family="Roboto" font-size="24px" color="#000000" text-align="center" margin-top="-0.8cm" margin-left="10.5cm">
                                        Année
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="2cm" >
                                    <fo:block margin-top="-0.94cm" margin-left="10cm">
                                        <fo:instream-foreign-object>
                                            <svg width="85" height="37" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="79" height="28" fill="white" stroke="black"/>
                                            </svg>
                                        </fo:instream-foreign-object>
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="24px" color="#000000" text-align="center" margin-top="-0.75cm" margin-left="10.7cm">
                                        2020
                                    </fo:block>
                                </fo:table-cell>
                                
                            </fo:table-row>
                        </fo:table-body>
                        
                    </fo:table>
                    <fo:table margin-left="1.7cm" margin-top="-3cm" >
                        <fo:table-column column-width="1.5cm"/>
                        <fo:table-column column-width="3.8cm"/>
                        <fo:table-column column-width="3.8cm"/>
                        <fo:table-column column-width="3.8cm"/>
                        <fo:table-column column-width="3.8cm"/>
                        <fo:table-column column-width="3.8cm"/>
                        <fo:table-column column-width="3.8cm"/>
                        <fo:table-header  >
                            <fo:table-row >
                                
                                <fo:table-cell width="1.5cm" border="solid">
                                    <fo:block width="1.5cm" height="1cm"  >
                                        
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="3.8cm" height="1cm" border="solid">
                                    <fo:block width="1.5cm"
                                        height="1cm" margin-top="0.2cm"
                                        margin-left="-0.5cm" font-size="20px"
                                        font-weight="bold" color="#000000">
                                        Lundi
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="3.8cm" height="1cm" border="solid">
                                    <fo:block width="1.5cm"
                                        height="1cm" margin-top="0.2cm"
                                        margin-left="-0.5cm" font-size="20px"
                                        font-weight="bold" color="#000000">
                                        Mardi
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="3.8cm" height="1cm" border="solid">
                                    <fo:block width="1.5cm"
                                        height="1cm" margin-top="0.2cm"
                                        margin-left="-0.5cm" font-size="20px"
                                        font-weight="bold" color="#000000">
                                        Mercredi
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="3.8cm" height="1cm" border="solid">
                                    <fo:block width="1.5cm"
                                        height="1cm" margin-top="0.2cm"
                                        margin-left="-0.5cm" font-size="20px"
                                        font-weight="bold" color="#000000">
                                        Jeudi
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="3.8cm" height="1cm" border="solid">
                                    <fo:block width="1.5cm"
                                        height="1cm" margin-top="0.2cm"
                                        margin-left="-0.5cm" font-size="20px"
                                        font-weight="bold" color="#000000">
                                        Vendredi
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="3.8cm" height="1cm" border="solid">
                                    <fo:block width="1.5cm"
                                        height="1cm" margin-top="0.2cm"
                                        margin-left="-0.5cm" font-size="20px"
                                        font-weight="bold" color="#000000">
                                        Samedi
                                    </fo:block>
                                </fo:table-cell>
                            </fo:table-row>
                        </fo:table-header>
                        <fo:table-body>
                            <fo:table-row>
                                <fo:table-cell border="solid">
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        08:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        08:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        09:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        09:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        10:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        10:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        11:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        11:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        12:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        12:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        13:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        13:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        14:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        14:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        15:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        15:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        16:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        16:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        17:00
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        17:30
                                    </fo:block>
                                    <fo:block width="1.5cm"
                                        height="1cm" font-size="20px"
                                        font-weight="bold" color="#000000"
                                        margin-left="-1.5cm" margin-top="0.05cm" >
                                        18:00
                                    </fo:block>
                                </fo:table-cell>
                                <xsl:for-each select="//Jour">
                                    <fo:table-cell border="solid">
                                        <xsl:for-each select="Seance">
                                            <xsl:variable name="temps">
                                                <xsl:value-of select="Temps"/>
                                            </xsl:variable>
                                            <xsl:variable name="sorte">
                                                <xsl:value-of select="Sorte"/>
                                            </xsl:variable>
                                            <xsl:if test="$temps = 1">
                                                <fo:block>
                                                    <fo:block width="1.5cm"
                                                        height="1cm" margin-top="0.2cm"
                                                        margin-left="-1.6cm" font-size="20px"
                                                        font-weight="bold" color="#000000">
                                                        <fo:instream-foreign-object margin-left="-4cm">
                                                            <svg width="175" height="130" viewBox="0 0 98 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <xsl:if test="$sorte = 'Cours' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#C17FE9" stroke="black"/>
                                                                </xsl:if>
                                                                <xsl:if test="$sorte = 'TP' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#42E427" stroke="black"/>
                                                                </xsl:if>
                                                                <xsl:if test="$sorte = 'TD' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#F9FCA9" stroke="black"/>
                                                                </xsl:if>
                                                                <line x1="1.52698" y1="11.1227" x2="95.1328" y2="11.1227" stroke="black"/>
                                                            </svg>
                                                        </fo:instream-foreign-object>
                                                    </fo:block>
                                                    <fo:block width="0.5cm"
                                                        height="1cm" margin-top="-2.5cm"
                                                        margin-left="-0.5cm" font-size="20px"
                                                        font-weight="bold" color="#000000" >
                                                        <fo:table margin-left="-0.98cm" width="3.6cm" border-collapse="separate"  >
                                                            
                                                            <fo:table-header  >
                                                                <fo:table-cell >
                                                                    <fo:block font-size="15px" >
                                                                        09:00 - 10:30
                                                                        <!--Cour - HDep - Hfin-->
                                                                    </fo:block>
                                                                </fo:table-cell>
                                                            </fo:table-header>
                                                            
                                                            <fo:table-body>
                                                                <fo:table-cell >
                                                                    <fo:block font-size="12px" margin-top="0.1cm" width="3.6cm" margin-left="-0.1cm">
                                                                        <xsl:value-of select="Matiere"/>
                                                                        <!--Matière-->
                                                                    </fo:block>
                                                                    <fo:block font-size="15px" text-align="center" margin-left="-0.5cm">
                                                                        <xsl:value-of select="Prof"/>
                                                                        <!--PROF-->
                                                                    </fo:block>
                                                                    <fo:block font-size="15px" text-align="center" margin-left="-0.3cm">
                                                                        <xsl:value-of select="Salle"/>
                                                                        <!--Salle-->
                                                                    </fo:block>
                                                                </fo:table-cell>
                                                            </fo:table-body>
                                                        </fo:table>
                                                    </fo:block>
                                                </fo:block>
                                            </xsl:if>
                                            <xsl:if test="$temps = 2">
                                                <fo:block>
                                                    <fo:block width="1.5cm"
                                                        height="1cm" margin-top="0.08cm"
                                                        margin-left="-1.6cm" font-size="20px"
                                                        font-weight="bold" color="#000000" >
                                                        <fo:instream-foreign-object margin-left="-4cm">
                                                            <svg width="175" height="130" viewBox="0 0 98 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <xsl:if test="$sorte = 'Cours' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#C17FE9" stroke="black"/>
                                                                </xsl:if>
                                                                <xsl:if test="$sorte = 'TP' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#42E427" stroke="black"/>
                                                                </xsl:if>
                                                                <xsl:if test="$sorte = 'TD' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#F9FCA9" stroke="black"/>
                                                                </xsl:if>
                                                                <line x1="1.52698" y1="11.1227" x2="95.1328" y2="11.1227" stroke="black"/>
                                                            </svg>
                                                            
                                                        </fo:instream-foreign-object>
                                                    </fo:block>
                                                    <fo:block width="0.5cm"
                                                        height="1cm" margin-top="-2.5cm"
                                                        margin-left="-0.5cm" font-size="20px"
                                                        font-weight="bold" color="#000000" >
                                                        <fo:table margin-left="-0.98cm" width="3.6cm" border-collapse="separate"  >
                                                            
                                                            <fo:table-header  >
                                                                <fo:table-cell >
                                                                    <fo:block font-size="15px">
                                                                        11:00 - 12:30
                                                                        <!--Cour - HDep - Hfin-->
                                                                    </fo:block>
                                                                </fo:table-cell>
                                                            </fo:table-header>
                                                            
                                                            <fo:table-body>
                                                                <fo:table-cell >
                                                                    <fo:block font-size="12px" margin-top="0.1cm" width="3.6cm" margin-left="-0.1cm">
                                                                        <xsl:value-of select="Matiere"/>
                                                                        <!--Matière-->
                                                                    </fo:block>
                                                                    <fo:block font-size="15px" text-align="center" margin-left="-0.5cm">
                                                                        <xsl:value-of select="Prof"/>
                                                                        <!--PROF-->
                                                                    </fo:block>
                                                                    <fo:block font-size="15px" text-align="center" margin-left="-0.3cm">
                                                                        <xsl:value-of select="Salle"/>
                                                                        <!--Salle-->
                                                                    </fo:block>
                                                                </fo:table-cell>
                                                            </fo:table-body>
                                                        </fo:table>
                                                    </fo:block>
                                                </fo:block>
                                            </xsl:if>    
                                            <xsl:if test="$temps = 3">
                                                <fo:block>
                                                    <fo:block width="1.5cm"
                                                        height="1cm" margin-top="1.5cm"
                                                        margin-left="-1.6cm" font-size="20px"
                                                        font-weight="bold" color="#000000" >
                                                        <fo:instream-foreign-object margin-left="-4cm">
                                                            <svg width="175" height="130" viewBox="0 0 98 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <xsl:if test="$sorte = 'Cours' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#C17FE9" stroke="black"/>
                                                                </xsl:if>
                                                                <xsl:if test="$sorte = 'TP' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#42E427" stroke="black"/>
                                                                </xsl:if>
                                                                <xsl:if test="$sorte = 'TD' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#F9FCA9" stroke="black"/>
                                                                </xsl:if>
                                                                <line x1="1.52698" y1="11.1227" x2="95.1328" y2="11.1227" stroke="black"/>
                                                            </svg>
                                                            
                                                        </fo:instream-foreign-object>
                                                    </fo:block>
                                                    <fo:block width="0.5cm"
                                                        height="1cm" margin-top="-2.5cm"
                                                        margin-left="-0.5cm" font-size="20px"
                                                        font-weight="bold" color="#000000" >
                                                        <fo:table margin-left="-0.98cm" width="3.6cm" border-collapse="separate"  >
                                                            
                                                            <fo:table-header  >
                                                                <fo:table-cell >
                                                                    <fo:block font-size="15px">
                                                                        14:00 - 15:30
                                                                        <!--Cour - HDep - Hfin-->
                                                                    </fo:block>
                                                                </fo:table-cell>
                                                            </fo:table-header>
                                                            
                                                            <fo:table-body>
                                                                <fo:table-cell >
                                                                    <fo:block font-size="12px" margin-top="0.1cm" width="3.6cm" margin-left="-0.2cm">
                                                                        <xsl:value-of select="Matiere"/>
                                                                        <!--Matière-->
                                                                    </fo:block>
                                                                    <fo:block font-size="15px" text-align="center" margin-left="-0.5cm">
                                                                        <xsl:value-of select="Prof"/>
                                                                        <!--PROF-->
                                                                    </fo:block>
                                                                    <fo:block font-size="15px" text-align="center" margin-left="-0.3cm">
                                                                        <xsl:value-of select="Salle"/>
                                                                        <!--Salle-->
                                                                    </fo:block>
                                                                </fo:table-cell>
                                                            </fo:table-body>
                                                        </fo:table>
                                                    </fo:block>
                                                </fo:block>
                                            </xsl:if>     
                                            <xsl:if test="$temps = 4">
                                                <fo:block>
                                                    <fo:block width="1.5cm"
                                                        height="1cm" margin-top="0.12cm"
                                                        margin-left="-1.6cm" font-size="20px"
                                                        font-weight="bold" color="#000000" >
                                                        <fo:instream-foreign-object margin-left="-4cm">
                                                            <svg width="175" height="130" viewBox="0 0 98 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <xsl:if test="$sorte = 'Cours' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#C17FE9" stroke="black"/>
                                                                </xsl:if>
                                                                <xsl:if test="$sorte = 'TP' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#42E427" stroke="black"/>
                                                                </xsl:if>
                                                                <xsl:if test="$sorte = 'TD' ">
                                                                    <rect x="-0.09772" y="0.985062" width="95.4644" height="52.8319" rx="11.5" fill="#F9FCA9" stroke="black"/>
                                                                </xsl:if>
                                                                <line x1="1.52698" y1="11.1227" x2="95.1328" y2="11.1227" stroke="black"/>
                                                            </svg>
                                                            
                                                        </fo:instream-foreign-object>
                                                    </fo:block>
                                                    <fo:block width="0.5cm"
                                                        height="1cm" margin-top="-2.5cm"
                                                        margin-left="-0.5cm" font-size="20px"
                                                        font-weight="bold" color="#000000" >
                                                        <fo:table margin-left="-0.98cm" width="3.6cm" border-collapse="separate"  >
                                                            
                                                            <fo:table-header  >
                                                                <fo:table-cell >
                                                                    <fo:block font-size="15px">
                                                                        16:00 - 17:30
                                                                        <!--Cour - HDep - Hfin-->
                                                                    </fo:block>
                                                                </fo:table-cell>
                                                            </fo:table-header>
                                                            
                                                            <fo:table-body>
                                                                <fo:table-cell >
                                                                    <fo:block font-size="13px" text-align="center" margin-top="0.1cm" width="3.6cm" margin-left="-0.1cm">
                                                                        <xsl:value-of select="Matiere"/>
                                                                        <!--Matière-->
                                                                    </fo:block>
                                                                    <fo:block font-size="15px" text-align="center" margin-left="-0.5cm">
                                                                        <xsl:value-of select="Prof"/>
                                                                        <!--PROF-->
                                                                    </fo:block>
                                                                    <fo:block font-size="15px" text-align="center" margin-left="-0.3cm">
                                                                        <xsl:value-of select="Salle"/>
                                                                        <!--Salle-->
                                                                    </fo:block>
                                                                </fo:table-cell>
                                                            </fo:table-body>
                                                        </fo:table>
                                                    </fo:block>
                                                </fo:block>
                                            </xsl:if>   
                                        </xsl:for-each>
                                    </fo:table-cell>
                                </xsl:for-each>
                                <fo:table-cell width="3.8cm" height="12cm" border="solid">
                                    <fo:block width="1.5cm"
                                        height="1cm" margin-top="0.2cm"
                                        margin-left="-1.6cm" font-size="20px"
                                        font-weight="bold" color="#000000" >
                                    </fo:block>
                                </fo:table-cell>
                            </fo:table-row>
                        </fo:table-body>
                    </fo:table>
                    <!--==================================-->
                    <fo:table table-layout="fixed">
                        <fo:table-column column-width="8cm"/>
                        <fo:table-column column-width="4cm"/>
                        <fo:table-column column-width="4cm"/>
                        <fo:table-column column-width="4cm"/>
                        <fo:table-body>
                            <fo:table-row>
                                
                                <fo:table-cell width="8cm" >
                                    <fo:block font-family="Roboto" font-size="24px" color="#000000" margin-top="1cm"  margin-left="3cm">
                                        
                                    </fo:block>
                                </fo:table-cell>
                                
                                <fo:table-cell width="4cm"   margin-top="1cm">
                                    <fo:block margin-top="1cm" margin-left="3.7cm">
                                        <fo:instream-foreign-object>
                                            <svg width="85" height="34" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="79" height="27.5" fill="#C17FE9" stroke="black"/>
                                            </svg>
                                        </fo:instream-foreign-object>
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="24px" color="#000000" text-align="center" margin-top="-0.75cm" margin-left="1.9cm">
                                        Cours
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="4cm" >
                                    <fo:block margin-top="1cm" margin-left="4cm">
                                        <fo:instream-foreign-object>
                                            <svg width="85" height="37" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="79" height="28" fill="#42E427" stroke="black"/>
                                            </svg>
                                        </fo:instream-foreign-object>
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="24px" color="#000000" text-align="center" margin-top="-0.75cm" margin-left="2.7cm">
                                        TP
                                    </fo:block>
                                </fo:table-cell>
                                <fo:table-cell width="4cm" >
                                    <fo:block margin-top="1cm" margin-left="4cm">
                                        <fo:instream-foreign-object>
                                            <svg width="85" height="37" viewBox="0 0 80 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="79" height="28" fill="#F9FCA9" stroke="black"/>
                                            </svg>
                                        </fo:instream-foreign-object>
                                    </fo:block>
                                    <fo:block font-family="Roboto" font-size="24px" color="#000000" text-align="center" margin-top="-0.75cm" margin-left="2.7cm">
                                        TD
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