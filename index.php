<html><head>
<title>glype proxy</title>
<meta name="description" content="">
<meta name="keywords" content="">
<style type="text/css">
/* GLOBAL ELEMENTS */
html,body {
   margin: 0; padding: 0;
   background: #0b1933;
   font-size: 100%;
   font-family: "trebuchet ms", arial, verdana;
	color: #444;
   text-align: center;
}
a {
   color: #EF7B0A;
   text-decoration:none; 
}
a:hover {
   text-decoration: underline;
}
p {
   color: #444;
   line-height: 170%; margin: 5px 0;
}
p, td, th, ul {
   font-size: 80%;
}

/* LAYOUT */
#wrapper {
   width: 700px;
   margin: 0 auto 0 auto;
   text-align: left;
}

#content {
   background: #fff;
   border-top: 3px solid #ce6c1c;
   border-bottom: 3px solid #ce6c1c;
   padding: 20px;
}

/* ELEMENTS */
h1 {
   font: 250% "trebuchet ms";
   color: #fff;
   padding: 40px 0 10px 10px;
   margin: 0;
}
h1 span { color: #6BAD42; }
h1 a { color: #FFF; }
h1 a:hover { color: #6BAD42;  text-decoration: none;}
h1 a:hover span { color: #FFF;}
h2 {
   font: bold 100% arial, verdana, sans-serif;
   color: #3B578B;
   border-bottom: 1px solid #ccc;
   padding-bottom: 3px;
   margin: 25px 0 10px 0;
}
p+p { padding-top: 1em; }
form.form { font-size: 80%; background-color: #f5f5f5; padding: 10px;}
#options {
   list-style-type: none;
   width: 500px;
   margin: 10px; padding: 0;
}
#options li { 
   float: left;
   width: 240px;
   border-left: 5px solid #ccc;
}
#footer {
   margin: 10px 0 0 0; 
   font-size: 80%;
   color: #ccc;
}
#nav {
   text-align: right;
   list-style-type: none;
   font-size: 80%;
   border-top: 1px solid #ccc;
   margin: 20px 0 0 0;
   padding: 0;
}
#nav li {
   padding: 0 5px 0 5px;
   display: inline;
   border-left: 1px solid #ccc;
}
.left {
   float: left;
}

/* STYLES */
.first { margin-top: 0 }
input.textbox { width: 500px; font: 120% arial, verdana, sans-serif; }
input.button {font: 120% arial, verdana, sans-serif; margin-top: 10px;}
label { font-weight: light; }
#error {
   border: 1px solid red;
   border-left: 5px solid red;
   padding: 2px;
   margin: 5px 0 15px 0;
   background: #eee;
}

/* TABLES USED IN COOKIE MANAGEMENT / EDIT BROWSER PAGES */
table {
   border-color: #666;
   border-width: 0 0 1px 1px;
   border-style: solid;
   width: 50%;
}
th {
   font-size: normal;
   background: #ccc;
   border-width: 2px;
}
td, th {
   border-color: #666;
   border-width: 1px 1px 0 0;
   border-style: solid;
   padding: 2px 10px 2px 10px;
}
td {background: #eee;}
.full-width {
   width: 98%;
}
.large-table { 
   width: 75%; 
   margin-top: 15px;
}
.large-table td, .large-table th {
   padding: 5px;
}
td.small-note {
   font-size: 60%;
   padding: 2px;
   text-align: right;
}

/* TOOLTIP HOVER EFFECT */
label { font-weight: bold; line-height: 20px; cursor: help; }
#tooltip{ width:20em; color: #fff; background: #555; font-size: 12px; font-weight: normal; padding: 5px; border: 3px solid #333; text-align: left; }
</style>
   <script type="text/javascript">ginf={url:'https://www.plypan.com/admin+++',script:'browse.php',target:{h:'',p:'',b:''},enc:{u:'',e:'1',p:''},b:'29',test:1}</script>
   <script type="text/javascript" src="https://www.plypan.com/admin+++/includes/main.js"></script><script data-dapp-detection="">!function(){let e=!1;function n(){if(!e){const n=document.createElement("meta");n.name="dapp-detected",document.head.appendChild(n),e=!0}}if(window.hasOwnProperty("ethereum")){if(window.__disableDappDetectionInsertion=!0,void 0===window.ethereum)return;n()}else{var t=window.ethereum;Object.defineProperty(window,"ethereum",{configurable:!0,enumerable:!1,set:function(e){window.__disableDappDetectionInsertion||n(),t=e},get:function(){if(!window.__disableDappDetectionInsertion){const e=arguments.callee;e&&e.caller&&e.caller.toString&&-1!==e.caller.toString().indexOf("getOwnPropertyNames")||n()}return t}})}}();</script><script type="text/javascript">
window.addDomReadyFunc(function() {
   document.getElementById('options').style.display = 'none';
   document.getElementById('input').focus();
});
disableOverride();
</script>
</head>
<body class="vsc-initialized">
   
   <div id="wrapper">
   
      <div id="header">
         <h1><a href="index.php">glype<span>proxy</span></a></h1>
      </div>
   
      <div id="content">
      <!-- CONTENT START -->
      
         <!--[error]-->
         
         <h2 class="first">About</h2>
         
            <p>Enjoy unrestricted and uncensored browsing with our service. You make a request via our site, we fetch the resource and send it back to you.</p>
   <p>Browsing through us both keeps you anonymous from the sites you visit and allows you to bypass any network restrictions from your government, workplace or college.</p>
         
         <h2>Enter URL</h2>
         
         
         
         <form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form">
            <input type="text" name="u" id="input" size="40" class="textbox">
            <input type="submit" value="Go" class="button">
            &nbsp;
            [<a style="cursor:pointer;" onclick="document.getElementById('options').style.display = (document.getElementById('options').style.display=='none'?'':'none')">options</a>]
            <ul id="options" style="display: none;">
               <li>
                  <input type="checkbox" name="encodeURL" id="encodeURL" checked="checked">
                  <label for="encodeURL" class="tooltip" onmouseover="tooltip('Encodes the URL of the page you are viewing so that it does not contain the target site in plaintext.')" onmouseout="exit();">Encode URL</label>
               </li>               <li>
                  <input type="checkbox" name="encodePage" id="encodePage">
                  <label for="encodePage" class="tooltip" onmouseover="tooltip('Helps avoid filters by encoding the page before sending it and decoding it with javascript once received. This is not 100% reliable and may break functionality in some browsers.')" onmouseout="exit();">Encode Page</label>
               </li>               <li>
                  <input type="checkbox" name="showForm" id="showForm" checked="checked">
                  <label for="showForm" class="tooltip" onmouseover="tooltip('This provides a mini form at the top of each page to allow you to quickly jump to another site without returning to our homepage.')" onmouseout="exit();">Show Form</label>
               </li>               <li>
                  <input type="checkbox" name="allowCookies" id="allowCookies" checked="checked">
                  <label for="allowCookies" class="tooltip" onmouseover="tooltip('Cookies may be required on interactive websites (especially where you need to log in) but advertisers also use cookies to track your browsing habits.')" onmouseout="exit();">Allow Cookies</label>
               </li>               <li>
                  <input type="checkbox" name="tempCookies" id="tempCookies" checked="checked">
                  <label for="tempCookies" class="tooltip" onmouseover="tooltip('This option overrides the expiry date for all cookies and sets it to at the end of the session only - all cookies will be deleted when you shut your browser. (Recommended)')" onmouseout="exit();">Force Temporary Cookies</label>
               </li>               <li>
                  <input type="checkbox" name="stripTitle" id="stripTitle">
                  <label for="stripTitle" class="tooltip" onmouseover="tooltip('Removes titles from proxified pages.')" onmouseout="exit();">Remove Page Titles</label>
               </li>               <li>
                  <input type="checkbox" name="stripJS" id="stripJS">
                  <label for="stripJS" class="tooltip" onmouseover="tooltip('Remove scripts to protect your anonymity and speed up page loads. However, not all sites will provide an HTML-only alternative. (Recommended)')" onmouseout="exit();">Remove Scripts</label>
               </li>               <li>
                  <input type="checkbox" name="stripObjects" id="stripObjects">
                  <label for="stripObjects" class="tooltip" onmouseover="tooltip('You can increase page load times by removing unnecessary Flash, Java and other objects. If not removed, these may also compromise your anonymity.')" onmouseout="exit();">Remove Objects</label>
               </li>            </ul>
            <br style="clear: both;">
         
         </form>
         
         

         <!-- CONTENT END -->
         
         <!--// Optional navigation supplied.  Uncomment and edit if you want to use but make sure the pages exist!
         <ul id="nav">
            <li class="left"><a href="index.php">Home</a></li>
            <li class="left"><a href="edit-browser.php">Edit Browser</a></li>
            <li class="left"><a href="cookies.php">Manage Cookies</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="disclaimer.php">Disclaimer</a></li>            
            <li><a href="terms.php">Terms of Use</a></li>            
         </ul>
         -->
         
      </div>
      
      <div id="footer">
         © 2008 <a href="index.php">glype proxy</a> : Powered by <a href="http://www.glype.com/">glype</a> v1.1
		</div>

	</div>


</body></html>
