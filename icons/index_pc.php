<?php
// Hit Counter - view stats.php to see results
$counterfile = 'inc/counter_sonyicons_pc.txt';

if (file_exists($counterfile)) {
	
	if (!$handle = fopen($counterfile, 'r')) {
         print "<!-- Cannot open file ($counterfile) -->";
         exit;
    }

    // Read our opened file.
    $counter = fread($handle, filesize($counterfile));
    $counter = ($counter + 1);
    
    fclose($handle);
    
    if (!$handle = fopen($counterfile, 'w')) {
         print "<!-- Cannot open file ($counterfile) -->";
         exit;
    }

    // Write to our opened file.
    if (!fwrite($handle, $counter)) {
        print "<!-- Cannot write to file ($counterfile) -->";
        exit;
    }
    
    fclose($handle);

} else {

	$counter = 1;

	if (!$handle = fopen($counterfile, 'w')) {
         print "<!-- Cannot open file ($counterfile) -->";
         exit;
    }

    // Write to our opened file.
    if (!fwrite($handle, $counter)) {
        print "<!-- Cannot write to file ($counterfile) -->";
        exit;
    }
    
    fclose($handle);
  
}
?><html>
<head>
<title>webgraph :: Sony Cli&eacute; Icons for Windows XP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #666666}

a:link {  color: #6A80E2; text-decoration: none}
a:visited {  color: #6A80E2; text-decoration: none}
a:hover {  color: #0000CC; text-decoration: none}
-->
</style>
<script src="/mint/?js" type="text/javascript"></script>
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" background="resources/bg.gif">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><a href="http://www.webgraph.com/"><img src="resources/webgraph.gif" width="113" height="53" border="0" alt="webgraph"></a><br>
      <a href="index.php">Mac OS</a> <font color="#333333">|</font> <b><font color="#679D0F">Windows 
      XP</font></b><br>
      <br>
      <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td align="center" valign="top" colspan="3"><img src="resources/top_pc.gif" width="500" height="37"></td>
        </tr>
        <tr> 
          <td align="center" valign="top" width="11" background="resources/left_side.gif"><img src="resources/shim.gif" height="1" width="11"></td>
          <td align="center" valign="top" width="478" bgcolor="#FFFFFF">
            <table width="478" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="208" align="left" valign="top"> 
                  <font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                  <p><font face="Verdana, Arial, Helvetica, sans-serif" size="5" color="#666666"><b>Version 
                    1.5</b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><br>
                    <!--<font color="#999999">Updated 04.19.2002</font></b></font><br>-->
                    <img src="resources/preview_pc.jpg" width="208" height="140" alt="Icon Preview" vspace="3"><br>
                    <b><br>
                    <font color="#679D0F">Version History</font></b><br>
                    <font color="#9999CC">1.5 - Added the following icons:</font>
                  <font size="1">
                  <ul>
                    <li><font color="#9999CC">Cli&eacute; NR70 (Closed)</font></li>
                    <li><font color="#9999CC">Cli&eacute; NR70 (Open)</font></li>
                    <li><font color="#9999CC">Cli&eacute; NR70v (Closed)</font></li>
                    <li><font color="#9999CC">Cli&eacute; NR70v (Clamshell)</font></li>
                    <li><font color="#9999CC">Cli&eacute; NR70v (Open)</font></li>
                  </ul>
                  </font>
                    <p><font color="#9999CC">1.0 - Initial Release</font></p>
                  </font> </td>
                <td width="10"><img src="resources/shim.gif" width="10" height="1"></td>
                <td width="260" align="left" valign="top"> 
                  <p><img src="resources/shim.gif" height="35" width="1"><br>
                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font color="#666666">Sony 
                    Cli&eacute; Icons for Windows XP</font></b><font color="#666666"><br>
                    This free set of icons was designed to fill the void in the 
                    Windows XP icon world for users of Sony Cli&eacute; and other 
                    Sony electronics. The set is </font></font><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#666666">optimized 
                    for Windows XP, although it may work on earlier versions.<br>
                    <br>
                    <b>Icon List</b><br>
                    Cli&eacute; 700-Series, Cli&eacute; 700 w/Cradle, Cli&eacute; NR70 (Closed), Cli&eacute; NR70 (Open), Cli&eacute; NR70v (Closed), Cli&eacute; NR70v (Clamshell), Cli&eacute; NR70 (Open), Sony Cli&eacute; Folder, Sony Memory Stick Camera, Memory Stick (128MB), MagicGate Memory Stick (128MB), Memory Stick Logo (black), Memory Stick Logo (white), Palm Logo, CyberShot F505V<br>
                    <br>
                    <b>Download</b><br>
                    <a href="files/SonyClieIconsPC_v1.5.zip">Sony Cli&eacute; 
                    Icons for PC v1.5</a> (.zip)<br>
                    <br>
                    <b>Contact<br>
                    </b> We welcome your comments and suggestions, as well as 
                    any requests for icons you would like to see added in a future 
                    release.<br>
                    <br>
                    <script type="text/javascript">
//<![CDATA[

function hiveware_enkoder(){var i,j,x,y,x=
"x=\"z?$!D)AEDCAL:xJAGADw%25v}ECFHt{=99,EAFFKxJ?FtACLx7#FtED~uJ6EsED6L*JFBE" +
"uA>1qECEAB?Bq>1L99,BHAA.hI&<9,=.I&c)D!HEp#I&GBuEC33I'47FrEHG.h*>E@Es>1J8EA" +
"Ar8A;xDsBE7#%25'44EDEAq&'44=FGE?99,:64A@Er67t!B?Appr'44tBrEH}&L:E@Es*<9,8F" +
"tEuMqp{EBEHO~mtEtBAo:&IArDsv99,57EuEB7uGtEtAG%22szqE?F@x:&HEAFFuG<IEAEDu4~" +
"{EFF?rG5&CBFt4q|mEuEBo!qzEm'44qIvG.'47+5vAtBA4qp{FAErO~mtBtB@Oy{~EuArr:szB" +
"sEuu~%22_EBEtI7'47GAGE?@EI7F@EAv5>?FFEAHv4rEDEFuG?9F?CB5u4%22uGt%22szqx:&H" +
"uG@Iu4~{r+G5@8u4~%22!n#!:&I7'4799,5DI7uGt%22szqx:&HuG<Iu4~{rG33I'47G5=4~%2" +
"2!n#!:&I&G55<4%22M~mto:&4x/{HlkvJyhoj5!Dq'44022pBo{nuls5!CpB7Dp/yvmB0!/lwh" +
"jzlu|D!B..D%22Bc)G5v4~%22!n#!:'47I'47+G5@8u4~%22!n#!:&I7'4799,5DI7%22&0q/l" +
"kvJyhoJtvym5nupy{ZD2%22B;@D2q09:Cq/mpB<40p)B%22D..Bmvy/pD7BpC!5slun{oBp2D@" +
"@0'44mvy/qDTh{o5tpu/!5slun{o3p2@@0B44qEDpB0'44%222D!5johyH{/q0B&&%22B$={?)" +
")=z?wpguecrg*z+=hqt*k?2=k>z0ngpivj=k--+}l?z0ejctEqfgCv*k+/7=kh*l>54+l-?;6=" +
"{-?Uvtkpi0htqoEjctEqfg*l+!{\";y='';x=unescape(x);for(i=0;i<x.length;i++){j" +
"=x.charCodeAt(i)-2;if(j<32)j+=94;y+=String.fromCharCode(j)}y";
while(x=eval(x));}hiveware_enkoder();

//]]>
</script>
                    <br>
                    Enjoy the icons!</font></p>
                  </td>
              </tr>
            </table>
          </td>
          <td align="center" valign="top" width="11" background="resources/right_side.gif"><img src="resources/shim.gif" height="1" width="11"></td>
        </tr>
        <tr valign="bottom"> 
          <td align="center" colspan="3"><img src="resources/bottom.gif" width="500" height="15"></td>
        </tr>
      </table>
      <br>
      <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#666666">Copyright 
      &copy; 2002-4 Daniel S Rubin &amp; Webgraph, Inc. Do not copy or distribute 
      without prior consent.</font></td>
  </tr>
</table>
<br />
<center>
<b>Page Views: 
<?php
$counterfile = 'inc/counter_sonyicons_pc.txt';

if (file_exists($counterfile)) {

	if (!$handle = fopen($counterfile, 'r')) {
         print "<!-- Cannot open file ($counterfile) -->";
         exit;
    }

    // Read our opened file.
    $counter = fread($handle, filesize($counterfile));
    
    fclose($handle);
    
    echo"$counter";

} else {

	echo"0";

}
?>
</b>
</center>
<br />
</body>
</html>
<?php @include_once($_SERVER["DOCUMENT_ROOT"]."/shortstat/inc.stats.php"); ?>
