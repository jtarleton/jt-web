


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>

 <base href="http://www.oxfordamerican.org" target="_blank">

<script type="text/javascript" src="/static/js/analytics.js"></script>
<script type="text/javascript">archive_analytics.values.server_name="wwwb-app7.us.archive.org";archive_analytics.values.server_ms=163;</script>
<link type="text/css" rel="stylesheet" href="/static/css/banner-styles.css"/>


	<title>Oxford American.com</title>
	<link rel="stylesheet" type="text/css" href="style.cfm">
	<script type="text/javascript">
<!--

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		leftnav_01_over = newImage("images/leftnav_01-over.gif");
		leftnav_02_over = newImage("images/leftnav_02-over.gif");
		leftnav_03_over = newImage("images/leftnav_03-over.gif");
		leftnav_04_over = newImage("images/leftnav_04-over.gif");
		leftnav_05_over = newImage("images/leftnav_05-over.gif");
		leftnav_06_over = newImage("images/leftnav_06-over.gif");
		leftnav_07_over = newImage("images/leftnav_07-over.gif");
		leftnav_08_over = newImage("images/leftnav_08-over.gif");
		leftnav_09_over = newImage("images/leftnav_09-over.gif");
		leftnav_10_over = newImage("images/leftnav_10-over.gif");
		leftnav_11_over = newImage("images/leftnav_11-over.gif");
		leftnav_12_over = newImage("images/leftnav_12-over.gif");
		leftnav_13_over = newImage("images/leftnav_13-over.gif");
		leftnav_14_over = newImage("images/leftnav_14-over.gif");
		leftnav_15_over = newImage("images/leftnav_15-over.gif");
		leftnav_16_over = newImage("images/leftnav_16-over.gif");
		leftnav_17_over = newImage("images/leftnav_17-over.gif");
		leftnav_18_over = newImage("images/leftnav_18-over.gif");
		leftnav_19_over = newImage("images/leftnav_19-over.gif");
		leftnav_20_over = newImage("images/leftnav_20-over.gif");
		preloadFlag = true;
	}
}

// -->
</script>
</head>

<body bgcolor="#ffffff" leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" onload="preloadImages();">


<!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script type="text/javascript" src="/static/js/disclaim-element.js" ></script>
<script type="text/javascript" src="/static/js/graph-calc.js" ></script>
<script type="text/javascript" src="/static/jflot/jquery.min.js" ></script>
<script type="text/javascript">//<![CDATA[
var __wm = (function(){
var wbPrefix = "/web/";
var wbCurrentUrl = "http://www.oxfordamericanmag.com/content.cfm?ArticleID=301&amp;Entry=CurrentIssue";

var firstYear = 1996;
var imgWidth = 500,imgHeight = 27;
var yearImgWidth = 25,monthImgWidth = 2;
var displayDay = "1";
var displayMonth = "Jan";
var displayYear = "2008";
var prettyMonths = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
var $D=document,$=function(n){return document.getElementById(n)};
var trackerVal,curYear = -1,curMonth = -1;
var yearTracker,monthTracker;
function showTrackers(val) {
  if (val===trackerVal) return;
  var $ipp=$("wm-ipp");
  var $y=$("displayYearEl"),$m=$("displayMonthEl"),$d=$("displayDayEl");
  if (val) {
    $ipp.className="hi";
  } else {
    $ipp.className="";
    $y.innerHTML=displayYear;$m.innerHTML=displayMonth;$d.innerHTML=displayDay;
  }
  yearTracker.style.display=val?"inline":"none";
  monthTracker.style.display=val?"inline":"none";
  trackerVal = val;
}
function getElementX2(obj) {
  var $e=jQuery(obj);
  return (typeof $e=="undefined"||typeof $e.offset=="undefined")?
    getElementX(obj):Math.round($e.offset().left);
}
function trackMouseMove(event,element) {
  var eventX = getEventX(event);
  var elementX = getElementX2(element);
  var xOff = Math.min(Math.max(0, eventX - elementX),imgWidth);
  var monthOff = xOff % yearImgWidth;

  var year = Math.floor(xOff / yearImgWidth);
  var monthOfYear = Math.min(11,Math.floor(monthOff / monthImgWidth));
  // 1 extra border pixel at the left edge of the year:
  var month = (year * 12) + monthOfYear;
  var day = monthOff % 2==1?15:1;
  var dateString = zeroPad(year + firstYear) + zeroPad(monthOfYear+1,2) +
    zeroPad(day,2) + "000000";

  $("displayYearEl").innerHTML=year+firstYear;
  $("displayMonthEl").innerHTML=prettyMonths[monthOfYear];
  // looks too jarring when it changes..
  //$("displayDayEl").innerHTML=zeroPad(day,2);
  var url = wbPrefix + dateString + '/' +  wbCurrentUrl;
  $("wm-graph-anchor").href=url;

  if(curYear != year) {
    var yrOff = year * yearImgWidth;
    yearTracker.style.left = yrOff + "px";
    curYear = year;
  }
  if(curMonth != month) {
    var mtOff = year + (month * monthImgWidth) + 1;
    monthTracker.style.left = mtOff + "px";
    curMonth = month;
  }
}
function hideToolbar() {
  $("wm-ipp").style.display="none";
}
function bootstrap() {
  var $spk=$("wm-ipp-sparkline");
  yearTracker=$D.createElement('div');
  yearTracker.className='yt';
  with(yearTracker.style){
    display='none';width=yearImgWidth+"px";height=imgHeight+"px";
  }
  monthTracker=$D.createElement('div');
  monthTracker.className='mt';
  with(monthTracker.style){
    display='none';width=monthImgWidth+"px";height=imgHeight+"px";
  }
  $spk.appendChild(yearTracker);
  $spk.appendChild(monthTracker);

  var $ipp=$("wm-ipp");
  $ipp&&disclaimElement($ipp);
}
return{st:showTrackers,mv:trackMouseMove,h:hideToolbar,bt:bootstrap};
})();//]]>
</script>
<style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  min-width:800px !important;
}
</style>
<div id="wm-ipp" lang="en" style="display:none;">

<div style="position:fixed;left:0;top:0;width:100%!important">
<div id="wm-ipp-inside">
   <table style="width:100%;"><tbody><tr>
   <td id="wm-logo">
       <a href="/web/" title="Wayback Machine home page"><img src="/static/images/toolbar/wayback-toolbar-logo.png" alt="Wayback Machine" width="110" height="39" border="0" /></a>
   </td>
   <td class="c">
       <table style="margin:0 auto;"><tbody><tr>
       <td class="u" colspan="2">
       <form target="_top" method="get" action="/web/form-submit.jsp" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://www.oxfordamericanmag.com/content.cfm?ArticleID=301&amp;Entry=CurrentIssue" style="width:400px;" onfocus="this.focus();this.select();" /><input type="hidden" name="type" value="replay" /><input type="hidden" name="date" value="20080101123433" /><input type="submit" value="Go" /><span id="wm_tb_options" style="display:block;"></span></form>
       </td>
       <td class="n" rowspan="2">
           <table><tbody>
           <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
           <tr class="m">
           	<td class="b" nowrap="nowrap">
		
		    Dec
		
		</td>
		<td class="c" id="displayMonthEl" title="You are here: 12:34:33 Jan 1, 2008">JAN</td>
		<td class="f" nowrap="nowrap">
		
		    <a href="/web/20080208091034/http://www.oxfordamericanmag.com/content.cfm?ArticleID=301&amp;Entry=CurrentIssue" title="8 Feb 2008"><strong>FEB</strong></a>
		
                </td>
	    </tr>
           <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
           <tr class="d">
               <td class="b" nowrap="nowrap">
               
                       <img src="/static/images/toolbar/wm_tb_prv_off.png" alt="Previous capture" width="14" height="16" border="0" />
               
               </td>
               <td class="c" id="displayDayEl" style="width:34px;font-size:24px;" title="You are here: 12:34:33 Jan 1, 2008">1</td>
	       <td class="f" nowrap="nowrap">
               
		   <a href="/web/20080108110139/http://www.oxfordamericanmag.com/content.cfm?ArticleID=301&amp;Entry=CurrentIssue" title="11:01:39 Jan 8, 2008"><img src="/static/images/toolbar/wm_tb_nxt_on.png" alt="Next capture" width="14" height="16" border="0" /></a>
	       
	       </td>
           </tr>
           <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
           <tr class="y">
	       <td class="b" nowrap="nowrap">
               
                   2007
               
               </td>
               <td class="c" id="displayYearEl" title="You are here: 12:34:33 Jan 1, 2008">2008</td>
	       <td class="f" nowrap="nowrap">
               
	           <a href="/web/20090119080845/http://www.oxfordamericanmag.com/content.cfm?ArticleID=301&amp;Entry=CurrentIssue" title="19 Jan 2009"><strong>2009</strong></a>
	       
	       </td>
           </tr>
           </tbody></table>
       </td>
       </tr>
       <tr>
       <td class="s">
           <a class="t" href="/web/20080101123433*/http://www.oxfordamericanmag.com/content.cfm?ArticleID=301&amp;Entry=CurrentIssue" title="See a list of every capture for this URL">6 captures</a>
           <div class="r" title="Timespan for captures of this URL">1 Jan 08 - 5 Nov 09</div>
       </td>
       <td class="k">
       <a href="" id="wm-graph-anchor">
       <div id="wm-ipp-sparkline" title="Explore captures for this URL">
	 <img id="sparklineImgId" alt="sparklines"
		 onmouseover="__wm.st(1)" onmouseout="__wm.st(0)"
		 onmousemove="__wm.mv(event,this)"
		 width="500"
		 height="27"
		 border="0"
		 src="/web/jsp/graph.jsp?graphdata=500_27_1996:-1:000000000000_1997:-1:000000000000_1998:-1:000000000000_1999:-1:000000000000_2000:-1:000000000000_2001:-1:000000000000_2002:-1:000000000000_2003:-1:000000000000_2004:-1:000000000000_2005:-1:000000000000_2006:-1:000000000000_2007:-1:000000000000_2008:0:211000000000_2009:-1:100000000010_2010:-1:000000000000_2011:-1:000000000000_2012:-1:000000000000_2013:-1:000000000000_2014:-1:000000000000_2015:-1:000000000000" />
       </div>
       </a>
       </td>
       </tr></tbody></table>
   </td>
   <td class="r">
       <a href="#close" onclick="__wm.h();return false;" style="background-image:url(/static/images/toolbar/wm_tb_close.png);top:5px;" title="Close the toolbar">Close</a>
       <a href="http://faq.web.archive.org/" style="background-image:url(/static/images/toolbar/wm_tb_help.png);bottom:5px;" title="Get some help using the Wayback Machine">Help</a>
   </td>
   </tr></tbody></table>
</div>
</div>
</div>
<script type="text/javascript">__wm.bt();</script>
<!-- END WAYBACK TOOLBAR INSERT -->

<div align="center">
<table width="800" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			
		<table width="800" cellpadding="0" cellspacing="0">
			<tr>
				<td width="150">
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td>
							<img src="images/logo_oa_top.gif" width="150" height="42" alt="" border="0"></td>
						</tr>
						<tr>	
							<td bgcolor="#ff0000">
							<img src="images/logo_oa_bottom.gif" width="150" height="20" alt="" border="0"></td>
						</tr>
					</table>
				</td>
				<td width="650">
				<table width="650" cellpadding="0" cellspacing="0">
					<tr>
						<td bgcolor="#000000" width="100%" height="42">
						&nbsp;</td>
					</tr>
					<tr>
						<td id="nav" style="height : 20px; vertical-align : middle;" height="20" bgcolor="#ff0000">
						<table width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td width="650"><img src="/web/20080101123433im_/http://www.oxfordamericanmag.com/images/space.gif" width="650" height="1" alt="" border="0">
								
								
								</td>
							</tr>	
						</table>
						</td>	
					</tr>
				</table>
				</td>
			</tr>
		</table>
		
		</td>
	</tr>
	<tr>
		<td>
		<table width="800" cellpadding="0" cellspacing="0">
	<tr>
		<td style="padding-top : 15px; padding-bottom : 15px;">
			
		<table width="800" cellpadding="0" cellspacing="0">
			<tr>
				<td>
				<div><a href="index.cfm" class="nav">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="donate.cfm" class="nav">Donate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="OAStore.cfm?Category=Back%20Issues%2031%2D60" class="nav">Back Issues</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="OAStore.cfm?Category=Tickets" class="nav">Tickets</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="oastore.cfm" class="nav">Gallery &amp; Store</a></div>
				</td>
				<td>
				<div align="right" style="padding-right : 15px;"><a href="oacart.cfm?Entry=CurrentIssue" class="nav">Shopping Cart</a><br>
				
				<span class="accent">0&nbsp;items in your shopping cart</span>	
				</div>
				</td>
			</tr>
		</table>
		</td>
	</tr>	
</table>
		</td>
	</tr>
	<tr>	
		<td>
		<table cellpadding="0" cellspacing="0" style="border-right : solid 1px #999999;">
			<tr>
				<td width="150">
				<div align="center" style="width : 145px; padding-top : 15px;">
				<table id="Table_01" width="150" height="555" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<a href="index.cfm"
				onmouseover="changeImages('leftnav_01', 'images/leftnav_01-over.gif'); return true;"
				onmouseout="changeImages('leftnav_01', 'images/leftnav_01.gif'); return true;"
				onmousedown="changeImages('leftnav_01', 'images/leftnav_01-over.gif'); return true;"
				onmouseup="changeImages('leftnav_01', 'images/leftnav_01-over.gif'); return true;">
				<img name="leftnav_01" src="images/leftnav_01.gif" width="150" height="29" border="0" alt="Home"></a></td>
	</tr>
	<tr>
		<td>
			<a href="/web/20080101123433/https://www.kable.com/pub/oxam/subservices.asp"
				onmouseover="changeImages('leftnav_02', 'images/leftnav_02-over.gif'); return true;"
				onmouseout="changeImages('leftnav_02', 'images/leftnav_02.gif'); return true;"
				onmousedown="changeImages('leftnav_02', 'images/leftnav_02-over.gif'); return true;"
				onmouseup="changeImages('leftnav_02', 'images/leftnav_02-over.gif'); return true;">
				<img name="leftnav_02" src="images/leftnav_02.gif" width="150" height="26" border="0" alt="Subscribe"></a></td>
	</tr>
	<tr>
		<td>
			<a href="donate.cfm"
				onmouseover="changeImages('leftnav_03', 'images/leftnav_03-over.gif'); return true;"
				onmouseout="changeImages('leftnav_03', 'images/leftnav_03.gif'); return true;"
				onmousedown="changeImages('leftnav_03', 'images/leftnav_03-over.gif'); return true;"
				onmouseup="changeImages('leftnav_03', 'images/leftnav_03-over.gif'); return true;">
				<img name="leftnav_03" src="images/leftnav_03.gif" width="150" height="26" border="0" alt="Donate"></a></td>
	</tr>
	<tr>
		<td>
			<a href="readersfund.cfm"
				onmouseover="changeImages('leftnav_04', 'images/leftnav_04-over.gif'); return true;"
				onmouseout="changeImages('leftnav_04', 'images/leftnav_04.gif'); return true;"
				onmousedown="changeImages('leftnav_04', 'images/leftnav_04-over.gif'); return true;"
				onmouseup="changeImages('leftnav_04', 'images/leftnav_04-over.gif'); return true;">
				<img name="leftnav_04" src="images/leftnav_04.gif" width="150" height="27" border="0" alt="Readers Fund"></a></td>
	</tr>
	<tr>
		<td>
			<a href="currentissue.cfm"
				onmouseover="changeImages('leftnav_05', 'images/leftnav_05-over.gif'); return true;"
				onmouseout="changeImages('leftnav_05', 'images/leftnav_05.gif'); return true;"
				onmousedown="changeImages('leftnav_05', 'images/leftnav_05-over.gif'); return true;"
				onmouseup="changeImages('leftnav_05', 'images/leftnav_05-over.gif'); return true;">
				<img name="leftnav_05" src="images/leftnav_05.gif" width="150" height="26" border="0" alt="Current Issue"></a></td>
	</tr>
	<tr>
		<td>
			<a href="oastore.cfm?Category=Back%20Issues%2031%2D60"
				onmouseover="changeImages('leftnav_06', 'images/leftnav_06-over.gif'); return true;"
				onmouseout="changeImages('leftnav_06', 'images/leftnav_06.gif'); return true;"
				onmousedown="changeImages('leftnav_06', 'images/leftnav_06-over.gif'); return true;"
				onmouseup="changeImages('leftnav_06', 'images/leftnav_06-over.gif'); return true;">
				<img name="leftnav_06" src="images/leftnav_06.gif" width="150" height="27" border="0" alt="Back Issues"></a></td>
	</tr>
	<tr>
		<td>
			<a href="webextras.cfm"
				onmouseover="changeImages('leftnav_07', 'images/leftnav_07-over.gif'); return true;"
				onmouseout="changeImages('leftnav_07', 'images/leftnav_07.gif'); return true;"
				onmousedown="changeImages('leftnav_07', 'images/leftnav_07-over.gif'); return true;"
				onmouseup="changeImages('leftnav_07', 'images/leftnav_07-over.gif'); return true;">
				<img name="leftnav_07" src="images/leftnav_07.gif" width="150" height="27" border="0" alt="Web Extras"></a></td>
	</tr>
	<tr>
		<td>
			<a href="oaarchive.cfm"
				onmouseover="changeImages('leftnav_08', 'images/leftnav_08-over.gif'); return true;"
				onmouseout="changeImages('leftnav_08', 'images/leftnav_08.gif'); return true;"
				onmousedown="changeImages('leftnav_08', 'images/leftnav_08-over.gif'); return true;"
				onmouseup="changeImages('leftnav_08', 'images/leftnav_08-over.gif'); return true;">
				<img name="leftnav_08" src="images/leftnav_08.gif" width="150" height="26" border="0" alt="OA Archive"></a></td>
	</tr>
	<tr>
		<td>
			<a href="oanews.cfm"
				onmouseover="changeImages('leftnav_09', 'images/leftnav_09-over.gif'); return true;"
				onmouseout="changeImages('leftnav_09', 'images/leftnav_09.gif'); return true;"
				onmousedown="changeImages('leftnav_09', 'images/leftnav_09-over.gif'); return true;"
				onmouseup="changeImages('leftnav_09', 'images/leftnav_09-over.gif'); return true;">
				<img name="leftnav_09" src="images/leftnav_09.gif" width="150" height="26" border="0" alt="OA News"></a></td>
	</tr>
	<tr>
		<td>
			<a href="events.cfm"
				onmouseover="changeImages('leftnav_10', 'images/leftnav_10-over.gif'); return true;"
				onmouseout="changeImages('leftnav_10', 'images/leftnav_10.gif'); return true;"
				onmousedown="changeImages('leftnav_10', 'images/leftnav_10-over.gif'); return true;"
				onmouseup="changeImages('leftnav_10', 'images/leftnav_10-over.gif'); return true;">
				<img name="leftnav_10" src="images/leftnav_10.gif" width="150" height="26" border="0" alt="Special Events"></a></td>
	</tr>
	<tr>
		<td>
			<a href="newsletter.cfm"
				onmouseover="changeImages('leftnav_11', 'images/leftnav_11-over.gif'); return true;"
				onmouseout="changeImages('leftnav_11', 'images/leftnav_11.gif'); return true;"
				onmousedown="changeImages('leftnav_11', 'images/leftnav_11-over.gif'); return true;"
				onmouseup="changeImages('leftnav_11', 'images/leftnav_11-over.gif'); return true;">
				<img name="leftnav_11" src="images/leftnav_11.gif" width="150" height="26" border="0" alt="OA Newsletter"></a></td>
	</tr>
	<tr>
		<td>
			<a href="oastore.cfm"
				onmouseover="changeImages('leftnav_12', 'images/leftnav_12-over.gif'); return true;"
				onmouseout="changeImages('leftnav_12', 'images/leftnav_12.gif'); return true;"
				onmousedown="changeImages('leftnav_12', 'images/leftnav_12-over.gif'); return true;"
				onmouseup="changeImages('leftnav_12', 'images/leftnav_12-over.gif'); return true;">
				<img name="leftnav_12" src="images/leftnav_12.gif" width="150" height="26" border="0" alt="OA Store"></a></td>
	</tr>
	<tr>
		<td>
			<a href="advertising.cfm"
				onmouseover="changeImages('leftnav_13', 'images/leftnav_13-over.gif'); return true;"
				onmouseout="changeImages('leftnav_13', 'images/leftnav_13.gif'); return true;"
				onmousedown="changeImages('leftnav_13', 'images/leftnav_13-over.gif'); return true;"
				onmouseup="changeImages('leftnav_13', 'images/leftnav_13-over.gif'); return true;">
				<img name="leftnav_13" src="images/leftnav_13.gif" width="150" height="26" border="0" alt="Advertising"></a></td>
	</tr>
	<tr>
		<td>
			<a href="internships.cfm"
				onmouseover="changeImages('leftnav_14', 'images/leftnav_14-over.gif'); return true;"
				onmouseout="changeImages('leftnav_14', 'images/leftnav_14.gif'); return true;"
				onmousedown="changeImages('leftnav_14', 'images/leftnav_14-over.gif'); return true;"
				onmouseup="changeImages('leftnav_14', 'images/leftnav_14-over.gif'); return true;">
				<img name="leftnav_14" src="images/leftnav_14.gif" width="150" height="26" border="0" alt="Internships"></a></td>
	</tr>
	<tr>
		<td>
			<a href="jobs.cfm"
				onmouseover="changeImages('leftnav_15', 'images/leftnav_15-over.gif'); return true;"
				onmouseout="changeImages('leftnav_15', 'images/leftnav_15.gif'); return true;"
				onmousedown="changeImages('leftnav_15', 'images/leftnav_15-over.gif'); return true;"
				onmouseup="changeImages('leftnav_15', 'images/leftnav_15-over.gif'); return true;">
				<img name="leftnav_15" src="images/leftnav_15.gif" width="150" height="27" border="0" alt="Job Opportunities"></a></td>
	</tr>
	<tr>
		<td>
			<a href="submissions.cfm"
				onmouseover="changeImages('leftnav_16', 'images/leftnav_16-over.gif'); return true;"
				onmouseout="changeImages('leftnav_16', 'images/leftnav_16.gif'); return true;"
				onmousedown="changeImages('leftnav_16', 'images/leftnav_16-over.gif'); return true;"
				onmouseup="changeImages('leftnav_16', 'images/leftnav_16-over.gif'); return true;">
				<img name="leftnav_16" src="images/leftnav_16.gif" width="150" height="26" border="0" alt="Submissions"></a></td>
	</tr>
	<tr>
		<td>
			<a href="newsstand.cfm"
				onmouseover="changeImages('leftnav_17', 'images/leftnav_17-over.gif'); return true;"
				onmouseout="changeImages('leftnav_17', 'images/leftnav_17.gif'); return true;"
				onmousedown="changeImages('leftnav_17', 'images/leftnav_17-over.gif'); return true;"
				onmouseup="changeImages('leftnav_17', 'images/leftnav_17-over.gif'); return true;">
				<img name="leftnav_17" src="images/leftnav_17.gif" width="150" height="26" border="0" alt="Newsstand Locations"></a></td>
	</tr>
	<tr>
		<td>
			<a href="staff.cfm"
				onmouseover="changeImages('leftnav_18', 'images/leftnav_18-over.gif'); return true;"
				onmouseout="changeImages('leftnav_18', 'images/leftnav_18.gif'); return true;"
				onmousedown="changeImages('leftnav_18', 'images/leftnav_18-over.gif'); return true;"
				onmouseup="changeImages('leftnav_18', 'images/leftnav_18-over.gif'); return true;">
				<img name="leftnav_18" src="images/leftnav_18.gif" width="150" height="27" border="0" alt="Staff"></a></td>
	</tr>
	<tr>
		<td>
			<a href="faq.cfm"
				onmouseover="changeImages('leftnav_19', 'images/leftnav_19-over.gif'); return true;"
				onmouseout="changeImages('leftnav_19', 'images/leftnav_19.gif'); return true;"
				onmousedown="changeImages('leftnav_19', 'images/leftnav_19-over.gif'); return true;"
				onmouseup="changeImages('leftnav_19', 'images/leftnav_19-over.gif'); return true;">
				<img name="leftnav_19" src="images/leftnav_19.gif" width="150" height="26" border="0" alt="FAQs"></a></td>
	</tr>
	<tr>
		<td>
			<a href="contact.cfm"
				onmouseover="changeImages('leftnav_20', 'images/leftnav_20-over.gif'); return true;"
				onmouseout="changeImages('leftnav_20', 'images/leftnav_20.gif'); return true;"
				onmousedown="changeImages('leftnav_20', 'images/leftnav_20-over.gif'); return true;"
				onmouseup="changeImages('leftnav_20', 'images/leftnav_20-over.gif'); return true;">
				<img name="leftnav_20" src="images/leftnav_20.gif" width="150" height="27" border="0" alt="Contact"></a></td>
	</tr>
	<tr>
		<td>
			<img src="images/leftnav_21.gif" width="150" height="26" alt=""></td>
	</tr>
</table> 
				<br><br>
				
								<div align="center" style="width : 125px; padding : 10px 0px 0px 0px;">
				<div style="padding : 5px 0px;">
				<h1>featured store items</h1>
				</div>
				<br>
				<table width="125" background="images/tile_gray_gradient.gif" cellpadding="0" cellspacing="0">
					<tr>
						<td>
						<div align="center" style="padding-top: 15px;">
						
						<table width="110" cellpadding="0" cellspacing="0">
							<tr>
								<td>
								<div align="center"><a href="oastoreview.cfm?StyleID=341&amp;Entry=CurrentIssue"><img src="StylePhotos/341d.jpg" border="0" alt=""></a></div>
								</td>
							</tr>
							<tr>
								<td>
								<span class="ficontent"><a href="oastoreview.cfm?StyleID=341&amp;Entry=CurrentIssue" class="filink">7th Annual Music Issue</a></span>&nbsp;
								<span class="ficontent"></span><br>
								<div align="right"><a href="oastoreview.cfm?StyleID=341&amp;Entry=CurrentIssue"><img src="images/image_buy.gif" width="28" height="12" alt="" border="0"></a></div>
								<br><br>
								</td>	
							</tr>
						</table> 
						
						<table width="110" cellpadding="0" cellspacing="0">
							<tr>
								<td>
								<div align="center"><a href="oastoreview.cfm?StyleID=421&amp;Entry=CurrentIssue"><img src="StylePhotos/421d.jpg" border="0" alt=""></a></div>
								</td>
							</tr>
							<tr>
								<td>
								<span class="ficontent"><a href="oastoreview.cfm?StyleID=421&amp;Entry=CurrentIssue" class="filink">8th Annual Music Issue</a></span>&nbsp;
								<span class="ficontent"></span><br>
								<div align="right"><a href="oastoreview.cfm?StyleID=421&amp;Entry=CurrentIssue"><img src="images/image_buy.gif" width="28" height="12" alt="" border="0"></a></div>
								<br><br>
								</td>	
							</tr>
						</table> 
						
						<table width="110" cellpadding="0" cellspacing="0">
							<tr>
								<td>
								<div align="center"><a href="oastoreview.cfm?StyleID=426&amp;Entry=CurrentIssue"><img src="StylePhotos/426d.jpg" border="0" alt=""></a></div>
								</td>
							</tr>
							<tr>
								<td>
								<span class="ficontent"><a href="oastoreview.cfm?StyleID=426&amp;Entry=CurrentIssue" class="filink">OA Hat</a></span>&nbsp;
								<span class="ficontent">Show everyone what team you're on!</span><br>
								<div align="right"><a href="oastoreview.cfm?StyleID=426&amp;Entry=CurrentIssue"><img src="images/image_buy.gif" width="28" height="12" alt="" border="0"></a></div>
								<br><br>
								</td>	
							</tr>
						</table> 
						
						<table width="110" cellpadding="0" cellspacing="0">
							<tr>
								<td>
								<div align="center"><a href="oastoreview.cfm?StyleID=427&amp;Entry=CurrentIssue"><img src="StylePhotos/427d.jpg" border="0" alt=""></a></div>
								</td>
							</tr>
							<tr>
								<td>
								<span class="ficontent"><a href="oastoreview.cfm?StyleID=427&amp;Entry=CurrentIssue" class="filink">OA CD Case</a></span>&nbsp;
								<span class="ficontent">Perfect for storing your OA CD's!</span><br>
								<div align="right"><a href="oastoreview.cfm?StyleID=427&amp;Entry=CurrentIssue"><img src="images/image_buy.gif" width="28" height="12" alt="" border="0"></a></div>
								<br><br>
								</td>	
							</tr>
						</table> 
						
						</div>
						</td>
					</tr>
				</table>
				</div>

				</div>
				</td>
								
				<td width="490">
				<table width="490" cellpadding="0" cellspacing="0">
					<tr>
						<td>
						<div style="border-left : solid 1px #999999; border-right : solid 1px #999999; padding-left : 20px; padding-right : 20px; padding-top : 15px;">


				<table width="450" cellpadding="0" cellspacing="0">
					
					<tr>
						<td>
						<a href="currentIssue.cfm" class="small">previous page</a><br><br> <span class="storyhead">A RUNNER’S PLACE</span><br> <span class="storysubhead"><em>Can you love a sport too much?</em></span><br> <div style="padding-top : 2px; padding-bottom : 2px;"><span class="storycontent">by&nbsp;&nbsp;</span><a href="mailto:oamag@oxfordamericanmag.com" class="storylink3"><strong>FARRELL EVANS</strong></a></div><br><br>
						
						
						<img src="images/symbol_add.gif" width="11" height="13" alt="" border="0">&nbsp;&nbsp;<a href="emailfriend.cfm?ArticleID=301" class="storylink2">Email this story to a friend</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/symbol_add.gif" width="11" height="13" alt="" border="0">&nbsp;&nbsp;<a href="authorbio.cfm?AuthorID=291&amp;ArticleID=301&amp;Entry=CurrentIssue" class="storylink2">View Author Bio</a><br><br>
												
						
								<div style="padding : 5px;"><img src="articleimages/301p.jpg" alt="301p.jpg" border="0"></div>
								
					 		<span class="storycontetn"><p class="msonormal">
  <br />
  
</p>
<p class="msonormal">
  <strong>Brian Pope reaches a cruising mile-pace of 5:45</strong>, running along an old railroad bed in lushly wooded trails, when he hears a rifle shot. The six-foot-three, 145-pound Pope has run these trails daily since he came to Oxford from Jackson in 1981 for college at Ole Miss. On a calm, late morning, he moves effortlessly and efficiently down the abandoned tracks that once carried passengers south on the Mississippi Central Line to New Orleans. On each side of him, there is land claimed by deer hunters, land that William Faulkner used as the inspiration for his fictional Yoknapatawpha County.
</p>
<p class="msonormal">
  As Pope reaches a clearing in the woods, a hunter and his wife emerge on an ATV four-wheeler, yelling for him to stop. Pope quickens his pace.
</p>
<p class="msonormal">
  When Pope keeps running, the man fires a warning shot. Pope finally stops his watch and then himself and turns back to confront the shooter and his wife.
</p>
<p class="msonormal">
  &#8220;What are you doing out here on private land?&#8221; the hunter asks as he points the rifle at Pope.
</p>
<p class="msonormal">
  &#8220;This is university-owned property,&#8221; Pope replies.
</p>
<p class="msonormal">
  &#8220;No, it&#8217;s not,&#8221; says the hunter, moving off the four-wheeler. &#8220;I&#8217;m going to kick your scrawny ass if you don&#8217;t get going.&#8221;
</p>
<p class="msonormal">
  &#8220;Okay, let&#8217;s go, show me what you got,&#8221; says Pope, who uses his right hand to push the barrel of the rifle away from his torso. The hunter shows temerity by taking a step backward. &#8220;Just what I thought, Pope says. &#8220;You&#8217;re just a coward with a gun.&#8221;
</p>
<p class="msonormal">
  The hunter hollers obscenities as Pope re-starts his watch and resumes his run back toward town.
</p>
<p class="msonormal">
  Pope protects his freedom to run as fiercely as a sportsman does his right to hunt and kill game. On these trails, he has had frequent encounters with hunters. &#8220;I don&#8217;t like people messing with me when I&#8217;m running,&#8221; he says. &#8220;That&#8217;s my protective space.&#8221;
</p>
<p class="msonormal">
  Since the altercation three years ago with the hunter, Pope, now forty-five, has led the effort to preserve some of the five-hundred-and-fifty-acre plot of land for runners and mountain bikers. He&#8217;s also directed a successful campaign to block the city from paving the dirt trails. &#8220;I&#8217;ve always been protective of those trails,&#8221; he explains. &#8220;It&#8217;s really the only off-road place to run in town.&#8221;
</p>
<p class="msonormal">
  For years, Pope has been the First Runner of Oxford<b> </b>and, because of his singular devotion to the sport, an enigma to his neighbors, friends, and training partners.
</p>
<p class="msonormal">
  He leads a monastic life, and whatever it is that he summons to make him run twice a day&#8212;his Baptist upbringing or deep withdrawal from society to make a closer connection to his purpose&#8212;his achievements are remarkable.
</p>
<p class="msonormal">
  On back-to-back weekends in 2004, he set American Masters records in the three-thousand-meter and five-thousand-meter races. Just a few months later, he won the USA National Masters Cross Country Championships in the 5-K and 8-K in the division for runners between the ages of forty and forty-four.
</p>
<p class="msonormal">
  In 2004, <em>Running Times</em> rated him the 32nd-best road runner in the country. In 2005, he took the 5-K at the World Masters Outdoor Track and Field Championships in San Sebasti&#225;n, Spain; the USA Masters 8-K Championships in Honolulu; and the USA Masters 5-K Cross Country Championships in Saratoga Springs, New York.
</p>
<p class="msonormal">
  
</p>
<div align="center">
  <img border="0" alt="1 Star" width="18" height="35" src="images/symbol_1star.gif" />
</div>
<p class="msonormal">
  Pope lives alone in a gray, one-story house near Oxford&#8217;s downtown square. A homemade wooden gate on his front steps, held in place by cinder blocks, keeps dogs off a narrow front porch that shelters generations of Nike running shoes. The porch looks out at a bottle tree in the yard and the Oxford Middle School across the street. In Southern folklore, the bottle tree is used to protect homes by trapping evil spirits in the colorful glass bottles.
</p>
<p class="msonormal">
  The front room of Pope&#8217;s house is a vast repository of running ephemera: old copies of Running Times and Track and Field News; boxes of videotapes of every televised track-and-field event since 1984; newspaper clippings from his races; shelves of books on running and human performance. Soiled T-shirts, shorts, socks, and gloves camouflage his small sofa. A dusty Formica table in the kitchen holds a variety of vitamins and nutritional supplements. A few dozen rolls of toilet paper collected from restrooms at track stadiums across the country form a tall pyramid over the lid of his bathroom toilet. A table in his bedroom, covered with sketches and paintings in progress, testifies to Pope&#8217;s work as an artist (specializing in acrylic and oil portraits).
</p>
<p class="msonormal">
  &#8220;People criticize me for the way that I live,&#8221; he says, &#8220;but it&#8217;s my life and I alone bear the consequences.&#8221;
</p>
<p class="msonormal">
  The consistency and economy of his daily habits are in harmony with his running. Before each morning run in the winter, he thaws his half-eaten refrigerated PowerBar from the night before by sticking it into the grates of his furnace. He orders his running shoes from catalogues, mostly at bargain prices. He never eats out. He eats lots of eggs.
</p>
<p class="msonormal">
  When he set those American Masters records in the 3-K and 5-K races on consecutive weekends in Boston in 2004, he took his room and board at the downtown YMCA, where he received his meals in the basement with homeless people.
</p>
<p class="msonormal">
  Despite winning ten races in 2004, he won just $10,000&#8212;his best year financially. He pays most of his household and travel expenses from his paltry race earnings, with a little help from his father. He occasionally sells a painting. &#8220;This is a big sacrifice,&#8221; he says.<span><br /></span>&#8220;I know I don&#8217;t have a lot, but I don&#8217;t need a lot.&#8221;
</p>
<p class="msonormal">
  &#8220;He lives on as little money as I&#8217;ve ever seen,&#8221; says Rodney Pearson, who holds the Mississippi Marathon record with 2:23:42. Pearson met Pope in 1987 at the Crazy Day 5-K in McGhee, Mississippi. He remembers how Pope&#8217;s Nike American Eagle racing flats were full of holes that day, and how his tattered shorts and T-shirt appeared as if they had been found on the street.
</p>
<p class="msonormal">
  By Pope&#8217;s own account, he&#8217;s always been an odd bird. &#8220;I like being an enigma,&#8221; he says, borrowing a line from The Great Santini, one of his favorite movies. When he began running seriously, in high school, he substituted Adidas court shoes for the team-issued Nike waffle trainers. &#8220;What can I say?&#8221; Pope asks. &#8220;I was skeptical of the new shoe technology.&#8221;
</p>
<p class="msonormal">
  &#8220;He truly does not care what others think about him,&#8221; says Pearson. &#8220;What he really wants is the respect of good runners.&#8221;
</p>
<p class="msonormal">
  
</p>
<div align="center">
  <img border="0" alt="1 Star" width="18" height="35" src="images/symbol_1star.gif" />
</div>
<p class="msonormal">
  After graduation from Ole Miss in 1986 (where he&#8217;d been an All-SEC runner), and before settling down as a professional on the road-race circuit, Pope bounced around for a few years, working for his father&#8217;s heating and air-conditioning business and as a sporting-goods salesman.
</p>
<p class="msonormal">
  In the early &#8217;90s, Pope rejoined the Ole Miss track team as a graduate assistant, and began training with Pablo Sierra, a cocksure Spaniard who came to Oxford to run track.
</p>
<p class="msonormal">
  In Sierra, Pope found a kindred spirit. Both runners were headstrong and preferred high mileage and intense training over the lighter training prescribed by coaches. This was before Pope lived alone, when he was still head of a household of up to ten runners who shared a rambling, plantation-style house off campus. Pope and Sierra trained together every day on the trails and around town. As they glided over the fertile, hilly Lafayette County landscape, Pope&#8217;s chiseled face, Marlboro Man-mustache, and lankiness cut a striking contrast to Pablo&#8217;s boyish Spanish features. At their peak in the mid-&#8217;90s, the pair ran a one-hundred-and-forty-mile week.
</p>
<p class="msonormal">
  In 1991, Pope ran a 4:02 mile at a University of Arkansas meet, finishing third behind Eric Henry and Gilbert Contreras, who each finished at 4:00 flat. Pope believes that he could&#8217;ve run faster if he hadn&#8217;t started the race as the last person on the outside in the second row of a crowded start.<b> </b>&#8220;I didn&#8217;t get into lane one until the last lap of the race,&#8221; he says. &#8220;That was my best opportunity to break four minutes for the mile.&#8221; Later<span><br /></span>that year at the Penn Relays, he ran a 13:57 5-K in the Olympic Development Heat. But for a knee problem in &#8217;92, he believes he might have had a chance to qualify for the Barcelona Games. Pope&#8217;s run of bad luck continued in &#8217;93, where in the U.S. Indoor Track and Field Championships in New York City, he suffered through walking pneumonia to finish last in the 5-K.
</p>
<p class="msonormal">
  Meanwhile, Sierra had become one of the best runners in college track and field, running 13:51:22 in the 5-K at the &#8217;91 Penn Relays and winning his conference&#8217;s &#8217;92 cross-country championship. By 1994, he&#8217;d turned professional and was training with Pope. Day after day, often in the brutal Mississippi summer heat, the two banged out fast-paced runs in preparation for Sierra&#8217;s marathon debut at Twin Cities that October, where he ran 2:11:35, winning the race and $12,000.
</p>
<p class="msonormal">
  Despite running the hundred-and-forty-mile week with Sierra&#8212;not to mention weekly two-hour runs at a 5:40 pace and bone-tingling interval workouts on the track&#8212;Pope never considered entering the race himself.<span><br /></span>&#8220;I wasn&#8217;t a marathoner,&#8221; says Pope. &#8220;I had other goals in the shorter distances.&#8221;
</p>
<p class="msonormal">
  He eventually completed the Chicago Marathon in &#8217;99, running 2:23:40.
</p>
<p class="msonormal">
  Asked why he hadn&#8217;t run more big races during this period, when he was peaking as a runner, Pope says, &#8220;No one ever helped my training. A lot of runners have used me to fulfill their goals. I sacrificed my best years helping Pablo and several other guys who I trained with at Ole Miss. When I needed a training partner, no one was available.&#8221;
</p>
<p class="msonormal">
  His sense of sacrifice also spilled into his personal life. When Pope shared the house with nine other runners, he took it upon himself to gather the rent and bills from his housemates and also act as their surrogate father. For a stint during the mid-&#8217;90s, he drove a schoolbus, but then quit because the clutch aggravated his knee and the kids gave him colds. &#8220;I consider driving that bus my community service,&#8221; he says playfully.
</p>
<p class="msonormal">
  Nowadays, when friends call him for help, even when it&#8217;s not convenient for his racing or training, Pope is always willing to lend a hand. A few summers ago, just before a big meet in California, he helped build a swing set for his friend&#8217;s daughter. Running tired and with a sore back from working five long days, he finished second in the race. The friend, Land Renfroe, an Oxford urologist and former Ole Miss javelin thrower and punter on the football team, feels indebted to Pope. &#8220;Everything about him is a testament to getting after it&#8212;getting it done,&#8221; says Renfroe. After an article on Pope appeared in the Clarion-Ledger, people around Mississippi phoned Renfroe about making donations to help underwrite Pope&#8217;s traveling expenses to races. Pope rejected the idea. &#8220;He doesn&#8217;t want to take a penny from anybody,&#8221; Renfroe says. &#8220;He believes this is his journey.&#8221;
</p>
<p class="msonormal">
  Sierra, who splits his time between Oxford and Spain&#8212;where he wants to someday build a pottery studio&#8212;has his own theories about his former training partner. &#8220;I think Pope found out what he could do too late,&#8221; says Sierra. &#8220;For a long time, he never believed he could run at a world-class level. He was always kind of holding back. I had a lot of fights with him. We would go into the trails and he would say we were going too hard. It wasn&#8217;t until he started seeing the results that he started to change his attitude.&#8221;
</p>
<p class="msonormal">
  Though their lives were intertwined for almost a decade, challenging each other every day to work harder, Pope and Sierra had fundamentally different ideas about the role and meaning that running should take in a person&#8217;s life. Sierra explained their differences this way: &#8220;Pope doesn&#8217;t get out of his routine. Actually, the routine is more important to him than obtaining results. He sees running more as therapy than a sport. He<span><br /></span>forgot that training is not a means unto itself. A lot of runners see it all as pure competition. But for Pope it&#8217;s everlasting&#8212;it&#8217;s about being there.&#8221;
</p>
<p class="msonormal">
  Since Sierra stopped training with Pope almost ten years ago, the two have drifted apart. Pope mostly trains by himself now. Occasionally, Ed Acevedo, once an exercise physiologist at Ole Miss and now a professor at Virginia Commonwealth University, would tag along for moderately fast after-noon runs. With Acevedo, who has twice attempted to swim the English Channel,Pope would talk about some of his favorite topics: the abuse of performance-enhancing drugs in track and field, land rights, and how professional golfers make too much money. &#8220;Running Times ranked me 32nd-best road racer and I made $10,000,&#8221; Pope likes to say. &#8220;The 32nd-ranked guy on the PGA Tour made over $2 million.&#8221;
</p>
<p class="msonormal">
  Acevedo is amazed at how long Pope has been able to stay at such a high level at an age when a typical runner&#8217;s performance begins to wane. &#8220;We usually look at performance from the standpoint of a twenty year old running a 2:06 marathon as being elite,&#8221; says Acevedo. &#8220;But what Brian represents is a different definition of an elite performer&#8212;the ability to maintain a high level of fitness and performance well into his forties.&#8221;
</p>
<p class="msonormal">
  For years, Pope has kept a running journal in which he records his training statistics&#8212;and his reflections. The deer hunters, the mile splits, the heart rates, the mileage, they&#8217;re all there in small letters in black, bound notebooks. Going into a USA Masters 10-K Championship in Paso Robles, California, where he ran second the year before with a time of 30:47, Pope carried a nagging leg injury and a lingering bacterial infection. An excerpt from his journal entry after he ran 32:36 and finished fifth in &#8217;05:
</p>
<p class="msonormal">
  
</p>
<blockquote>
  I struggled from the start. Don&#8217;t have a lot of incentive to try and make a big rush, mentally I am just sort of crushed and feeling bad. I just feel bewildered and shamed. I can&#8217;t believe I did so bad. The awards are announced and I didn&#8217;t even place in my age group. But what is really painful for me is to write this in my journal. What a crummy day for me.
</blockquote>
<p class="msonormal">
  He says he has never considered quitting but that &#8220;sometimes I question why I go through what I do.&#8221;
</p>
<p class="msonormal">
  Pope also keeps a diary of his dreams. Most of his dreams are of running along his beloved trails.
</p>
<p class="msonormal">
  
</p>
<div align="center">
  <img border="0" alt="1 Star" width="18" height="35" src="images/symbol_1star.gif" />
</div>
<p class="msonormal">
  A training run with Pope in which one can actually hold a conversation isn&#8217;t easy. He keeps a torrid pace, and the conversation itself can be a journey into the slightly paranoid diversions of a confirmed loner&#8212;someone who has spent a lot of time poking around land deeds at the county courthouse, reading&#173;&#173; newspapers, and speculating on who might be using steroids.
</p>
<p class="msonormal">
  One afternoon in winter, Pope takes to the trails with Acevedo and an old friend visiting from out of town. He politely sets the mile-pace at seven minutes. On these trails, he seems always to be on the lookout for a fresh encounter with a hunter or a land surveyor or a barking dog. &#8220;He treats the trails as his own little fiefdom,&#8221; says Oxford&#8217;s mayor, Richard Howorth.
</p>
<p class="msonormal">
  Following the incident a few years ago with the deer hunter, Pope filed a police report, but the matter was never resolved. The University of Mississippi owns the railroad bed, but private landowners surrounding the bed lease the land to hunters. &#8220;This is my next big project,&#8221; Pope says.
</p>
<p class="msonormal">
  As he leads his group along power lines and a bend near a small pond, he speaks of &#8220;purifying the trails.&#8221;
</p>
<p class="msonormal">
  Then, while he&#8217;s telling the two runners about his investigation of land deeds, he spots a beat-up red Ford pickup near the railbed. He runs over to peer into the truck bed. A hunter emerges out of the brush.
</p>
<p class="msonormal">
  &#8220;What are you doing looking in my truck?&#8221; asks the man.
</p>
<p class="msonormal">
  &#8220;What are you doing out here in these woods?&#8221; retorts Pope, stopping his watch.
</p>
<p class="msonormal">
  &#8220;We&#8217;re building a deer stand,&#8221; the man says reluctantly.
</p>
<p class="msonormal">
  By now Pope has settled in front of the man, in his face, when a much older man, the first man&#8217;s uncle, comes out of the brush to join the conversation. The older man listens for a while before saying to Pope: &#8220;You&#8217;re just a tall drink of water with a smart mouth.&#8221;
</p>
<p class="msonormal">
  The whole scene would be funny were it not for the fact that his nephew seems to be about a flinch away from hitting Pope. The nephew intermittently lights cigarettes as Pope challenges him to produce proof that he has papers on the land. &#8220;I don&#8217;t have to show you anything,&#8221; the man says before he finally pulls his papers from the glove compartment of the truck. But Pope is unconvinced.
</p>
<p class="msonormal">
  The agitated man dares him: &#8220;You make me get off this land. I&#8217;m sick of you joggers messing up my hunt.&#8221;
</p>
<p class="msonormal">
  Thirty minutes pass before the parties agree that nothing is going to be resolved through the confrontation. As he restarts his watch, Pope commits to memory the license plate of the truck. Delight shows on his face; he just stood down another hunter on his turf.
</p>
<p class="msonormal">
  &#8220;When&#8217;s your next race?&#8221; Acevedo asks.
</p>
<p class="msonormal">
  &#8220;I don&#8217;t know,&#8221; Pope says.
</p>
<p class="msonormal">
  Right now, he&#8217;s exactly where he wants to be and no race could ever give him this much satisfaction. <img border="0" alt="" width="5" height="5" src="images/tile_red.gif" />&#160;
</p></span>
						
						</td>
					</tr>
				</table>
						</div>
						</td>
					</tr>
				</table>
				</td>		
				<td width="160" bgcolor="#ffffff">
				<div align="center" style="padding-top : 15px;">
				
						
					<div style="width : 140px; border-top : solid 1px #cccccc; border-bottom : solid 1px #cccccc;"><img src="images/space.gif" width="1" height="1" alt="" border="0"></div>
					<div style="padding-top : 15px; padding-bottom : 25px;">
					
			<A HREF="/web/20080101123433/http://www.oxfordamericanmag.com/adsystem/redir.cfm?adid=8" TARGET="_blank">
				<IMG SRC="/web/20080101123433im_/http://www.oxfordamericanmag.com/adsystem/banners/loaded_oxford-america125x400.jpg" ALT="" BORDER="0" ALIGN="center"></A>
			
			
			
					</div>
					
					<div style="width : 140px; border-top : solid 1px #cccccc; border-bottom : solid 1px #cccccc;"><img src="images/space.gif" width="1" height="1" alt="" border="0"></div>
					<div style="padding-top : 15px; padding-bottom : 25px;">
					
			<A HREF="/web/20080101123433/http://www.oxfordamericanmag.com/adsystem/redir.cfm?adid=45" TARGET="_blank">
				<IMG SRC="/web/20080101123433im_/http://www.oxfordamericanmag.com/adsystem/banners/faulkner-(Oxford).jpg" ALT="" BORDER="0" ALIGN="center"></A>
			
			
			
					</div>
				</div>
				
				</td>
			</tr>
		</table>	
		</td>	
	</tr>	
</table>
<table width="800" cellpadding="0" cellspacing="0" style="padding-top : 15px; padding-bottom : 25px;">
	<tr>
		<td>
		<div style="width : 100%; border-top : solid 1px #999999; border-bottom : solid 1px #cccccc;"><img src="images/space.gif" width="1" height="1" alt="" border="0"></div>
		<br>
		<div align="center"><span class="content">
<a href="index.cfm" class="footnav">HOME</a>&nbsp;|&nbsp;
<a href="currentissue.cfm" class="footnav">CURRENT ISSUE</a>&nbsp;|&nbsp;
<a href="oaarchive.cfm" class="footnav">OA ARCHIVE</a>&nbsp;|&nbsp;
<a href="oastore.cfm?Category=Back%20Issues%2031%2D60" class="footnav">BACK ISSUES</a>&nbsp;|&nbsp;
<a href="oastore.cfm" class="footnav">OA ART GALLERY &amp; STORE</a>&nbsp;|&nbsp;
<a href="oanews.cfm" class="footnav">OA NEWS</a>&nbsp;|&nbsp;
<a href="advertising.cfm" class="footnav">ADVERTISING</a>&nbsp;|&nbsp;
<a href="/web/20080101123433/https://www.kable.com/pub/oxam/subservices.asp" class="footnav">SUBSCRIPTIONS</a>&nbsp;|&nbsp;
<a href="internships.cfm" class="footnav">INTERNSHIPS</a>&nbsp;|&nbsp;
<a href="donate.cfm" class="footnav">DONATE</a>&nbsp;|&nbsp;
<a href="submissions.cfm" class="footnav">SUBMISSIONS</a>&nbsp;|&nbsp;
<a href="jobs.cfm" class="footnav">JOB OPPORTUNITIES</a>&nbsp;|&nbsp;
<a href="faq.cfm" class="footnav">FAQs</a>&nbsp;|&nbsp;
<a href="staff.cfm" class="footnav">STAFF</a>&nbsp;|&nbsp;
<a href="newsletter.cfm" class="footnav">OA NEWSLETTER</a>&nbsp;|&nbsp;
<a href="webextras.cfm" class="footnav">WEB EXTRAS</a>&nbsp;|&nbsp;
<a href="newsstand.cfm" class="footnav">NEWSTAND LOCATIONS</a>&nbsp;|&nbsp;
<a href="contact.cfm" class="footnav">CONTACT US</a>
</span>
</div>
		</td>
	</tr>
</table>
</div>
</body>
</html> 




<!--
     FILE ARCHIVED ON 12:34:33 Jan 1, 2008 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 18:13:40 Mar 8, 2015.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->


