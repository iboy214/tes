<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>Contact &#8211; SMKN 4 Palu</title>
<meta name='robots' content='max-image-preview:large' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="alternate" type="application/rss+xml" title="SMKN 4 Palu&raquo; Feed" href="https://smkn4palu.sch.id/feed/" />
<link rel="alternate" type="application/rss+xml" title="SMKN 4 Palu&raquo; Comments Feed" href="https://smkn4palu.sch.id/comments/feed/" />
<script>
var pagelayer_ajaxurl = "https://smkn4palu.sch.id/wp-admin/admin-ajax.php?";
var pagelayer_global_nonce = "ca8900cdec";
var pagelayer_server_time = 1702386520;
var pagelayer_is_live = "";
var pagelayer_facebook_id = "";
var pagelayer_settings = {"post_types":["post","page"],"enable_giver":"1","max_width":1170,"tablet_breakpoint":768,"mobile_breakpoint":360,"sidebar":false,"body_font":"","color":false};
var pagelayer_recaptch_lang = "";
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbskontak"; // Ganti dengan nama database yang telah Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memproses data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    // Menyimpan data ke dalam tabel
    $sql = "INSERT INTO contacts (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        echo "Data kontak berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();

// Pengaturan Pagelayer
$pagelayer_ajaxurl = "https://smkn4palu.sch.id/wp-admin/admin-ajax.php";
$pagelayer_global_nonce = "83304660ea";
$pagelayer_server_time = 1702362776;
$pagelayer_is_live = "";
$pagelayer_facebook_id = "";
$pagelayer_settings = array(
    "post_types" => array("post", "page"),
    "enable_giver" => "1",
    "max_width" => 1170,
    "tablet_breakpoint" => 768,
    "mobile_breakpoint" => 360,
    "sidebar" => false,
    "body_font" => "",
    "color" => false
);
$pagelayer_recaptch_lang = "";
?>

<style id="popularfx-global-styles" type="text/css">
.site-header {background-color:#ffffff!important;}
.site-title a {color:#171717!important;}
.site-title a { font-size: 30 px; }
.site-description {color:#171717 !important;}
.site-description {font-size: 15px;}
.site-footer {background-color:#171717! important;}

</style><style id="pagelayer-wow-animation-style" type="text/css">.pagelayer-wow{visibility: hidden;}</style>
<style id="pagelayer-global-styles" type="text/css">
:root{--pagelayer-color-primary:#007bff;--pagelayer-color-secondary:#6c757d;--pagelayer-color-text:#1d1d1d;--pagelayer-color-accent:#61ce70;--pagelayer-font-primary-font-family:Open Sans;--pagelayer-font-secondary-font-family:Roboto;--pagelayer-font-text-font-family:Montserrat;--pagelayer-font-accent-font-family:Poppins;}
.pagelayer-row-stretch-auto > .pagelayer-row-holder, .pagelayer-row-stretch-full > .pagelayer-row-holder.pagelayer-width-auto{ max-width: 1170px; margin-left: auto; margin-right: auto;}
@media (min-width: 769px){
    .pagelayer-hide-desktop{
      display:none !important;
    }
  }

  @media (max-width: 768px) and (min-width: 361px){
    .pagelayer-hide-tablet{
      display:none !important;
    }
    .pagelayer-wp-menu-holder[data-drop_breakpoint="tablet"] .pagelayer-wp_menu-ul{
      display:none;
    }
  }

  @media (max-width: 360px){
    .pagelayer-hide-mobile{
      display:none !important;
    }
    .pagelayer-wp-menu-holder[data-drop_breakpoint="mobile"] .pagelayer-wp_menu-ul{
      display:none;
    }
  }
body.pagelayer-body {font-weight:300;line-height:1.5;letter-spacing:2px;word-spacing:2px}
body.pagelayer-body .entry-content{font-style:normal}
@media (max-width: 768px){
[class^="pagelayer-offset-"],
[class*=" pagelayer-offset-"] {
  margin-left: 0;
}

.pagelayer-row .pagelayer-col {
  margin-left: 0;
  width: 100%;
}
.pagelayer-row.pagelayer-gutters .pagelayer-col {
  margin-bottom: 16px;
}
.pagelayer-first-sm {
  order: -1;
}
.pagelayer-last-sm {
  order: 1;
}


}

</style><script>
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/smkn3bandung.sch.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
</script>
<link rel='stylesheet' id='pagelayer-frontend-css' href='https://smkn3bandung.sch.id/wp-content/plugins/pagelayer/css/givecss.php?give=pagelayer-frontend.css%2Cnivo-lightbox.css%2Canimate.min.css%2Cowl.carousel.min.css%2Cowl.theme.default.min.css%2Cfont-awesome5.min.css&#038;premium&#038;ver=1.7.8' media='all' />
<style id='wp-emoji-styles-inline-css'>

img.wp-smiley, img.emoji {
  display: inline !important;
  border: none !important;
  box-shadow: none !important;
  height: 1em !important;
  width: 1em !important;
  margin: 0 0.07em !important;
  vertical-align: -0.1em !important;
  background: none !important;
  padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='https://smkn3bandung.sch.id/wp-includes/css/dist/block-library/style.min.css?ver=6.4.2' media='all' />
<style id='classic-theme-styles-inline-css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='popularfx-style-css' href='https://smkn3bandung.sch.id/wp-content/uploads/popularfx-templates/academy/style.css?ver=1.2.4' media='all' />
<link rel='stylesheet' id='popularfx-sidebar-css' href='https://smkn3bandung.sch.id/wp-content/themes/popularfx/sidebar.css?ver=1.2.4' media='all' />
<script src="https://smkn3bandung.sch.id/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></>
<script src="https://smkn3bandung.sch.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="https://smkn3bandung.sch.id/wp-content/plugins/pagelayer/js/givejs.php?give=pagelayer-frontend.js%2Cnivo-lightbox.min.js%2Cwow.min.js%2Cjquery-numerator.js%2CsimpleParallax.min.js%2Cowl.carousel.min.js&amp;premium&amp;ver=1.7.8" id="pagelayer-frontend-js"></script>
<link rel="https://api.w.org/" href="https://smkn3bandung.sch.id/wp-json/" /><link rel="alternate" type="application/json" href="https://smkn3bandung.sch.id/wp-json/wp/v2/pages/21" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://smkn3bandung.sch.id/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.4.2" />
<link rel="canonical" href="https://smkn3bandung.sch.id/contact/" />
<link rel='shortlink' href='https://smkn3bandung.sch.id/?p=21' />
<link rel="alternate" type="application/json+oembed" href="https://smkn4palusch.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsmkn4palusch.id%2Fcontact%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://smkn4palusch.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsmkn4palusch.id%2Fcontact%2F&#038;format=xml" />
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="logo.jpg" sizes="32x32" />
<link rel="icon" href="logo.jpg" sizes="192x192" />
<link rel="apple-touch-icon" href="logo.jpg" />
<meta name="msapplication-TileImage" content="logo.jpg" />
</head>

<body class="page-template-default page page-id-21 wp-custom-logo popularfx-body pagelayer-body">
  
<header class="pagelayer-header"><div pagelayer-id="sxx4020" class="p-sxx4020 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
<style pagelayer-style-id="sxx4020">.p-sxx4020 .pagelayer-col-holder{padding: 10px}
.p-sxx4020 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-sxx4020 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-sxx4020 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-sxx4020 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-sxx4020 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-sxx4020{background: #000000;padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 0px}
</style>
    
    
    
    
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
<div pagelayer-id="kqc6019" class="p-kqc6019 pagelayer-col">
<style pagelayer-style-id="kqc6019">.p-kqc6019{align-content: center !important}
.p-kqc6019 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.pagelayer-row-holder .p-kqc6019{width: 30%}
.p-kqc6019 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
@media (max-width: 360px){.pagelayer-row-holder .p-kqc6019{width: 70%}
}
</style>
      
      
      
      <div class="pagelayer-col-holder">
<div pagelayer-id="71t8387" class="p-71t8387 pagelayer-wp_title">
<style pagelayer-style-id="71t8387">.p-71t8387 .pagelayer-wp-title-heading{font-family: Muli; font-size: 30px !important; font-style:  !important; font-weight: 600 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform: Uppercase !important; letter-spacing: px !important; word-spacing: px !important;color:#ffffff;text-align:left;padding: 0px 0px 0px 0px}
</style><div class="pagelayer-wp-title-content">
    <div class="pagelayer-wp-title-section">
      <a href="https://smkn4palusch.id" class="pagelayer-wp-title-link pagelayer-ele-link">
        
        <div class="pagelayer-wp-title-holder">
          <div class="pagelayer-wp-title-heading">SMKN 4 Palu</div>
          
        </div>
      </a>
    </div>			
  <div></div></div></div>
</div></div>
<div pagelayer-id="5yr4402" class="p-5yr4402 pagelayer-col">
<style pagelayer-style-id="5yr4402">.p-5yr4402 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.pagelayer-row-holder .p-5yr4402{width: 70%}
.p-5yr4402 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
@media (max-width: 360px){.pagelayer-row-holder .p-5yr4402{width: 20%}
}
</style>
      
      
      
      <div class="pagelayer-col-holder">
<div pagelayer-id="nh33572" class="p-nh33572 pagelayer-wp_menu">
<style pagelayer-style-id="nh33572">.p-nh33572 .pagelayer-wp_menu-ul{text-align:right}
.p-nh33572 .pagelayer-wp-menu-container li.menu-item{list-style: none}
.p-nh33572 .pagelayer-wp_menu-ul>li a:first-child{color: #ffffff}
.p-nh33572 .pagelayer-wp_menu-ul>li>a:hover{color: #6200ea}
.p-nh33572 .pagelayer-wp_menu-ul>li.pagelayer-active-sub-menu>a:hover{color: #6200ea}
.p-nh33572 .pagelayer-wp_menu-ul>li.current-menu-item>a{color: #6200ea}
.p-nh33572 .pagelayer-wp-menu-container ul li.menu-item > a{font-family: Noto Sans !important; font-size: 14px !important; font-style:  !important; font-weight: 600 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform: Uppercase !important; letter-spacing: px !important; word-spacing: px !important}
.p-nh33572 .pagelayer-wp_menu-ul>li>a{padding-left: 23px;padding-right: 23px;padding-top: 10px;padding-bottom	: 10px}
.p-nh33572 .pagelayer-menu-type-horizontal .sub-menu{left:0px}
.p-nh33572 .pagelayer-menu-type-horizontal .sub-menu .sub-menu{left:unset;left:100% !important;top:0px}
.p-nh33572 .pagelayer-wp-menu-container ul.sub-menu>li a{color: #ffffff}
.p-nh33572 .pagelayer-wp-menu-container ul.sub-menu{background-color: #0986c0}
.p-nh33572 .pagelayer-wp-menu-container ul.sub-menu li a{padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom	: 10px}
.p-nh33572 .pagelayer-wp-menu-container .sub-menu a{margin-left: 10px}
.p-nh33572 .pagelayer-wp-menu-container .sub-menu .sub-menu a{margin-left: calc(2 * 10px)}
.p-nh33572 .pagelayer-primary-menu-bar{text-align:center}
.p-nh33572 .pagelayer-primary-menu-bar i{color:#ffffff;background-color:#6200ea;font-size:30px}
.p-nh33572 .pagelayer-menu-type-dropdown{width:30%;background-color:#000000}
.p-nh33572 .pagelayer-menu-type-dropdown .pagelayer-wp_menu-ul{width:100%;top: 8%; transform: translateY(-8%)}
.p-nh33572 .pagelayer-wp_menu-close i{font-size:25px;padding:8px;color:rgba(255,255,255,0.41);background-color:rgba(0,0,0,0.21);-webkit-transition: all 600ms !important; transition: all 600ms !important}
.p-nh33572 .pagelayer-wp_menu-close i:hover{color:#ffffff;background-color:#000000}
.p-nh33572 .pagelayer-wp_menu-ul .menu-item a {
  justify-content: center;
}
@media (max-width: 768px) and (min-width: 361px){.p-nh33572 .pagelayer-wp_menu-ul>li>a{padding-top: 14px;padding-bottom	: 14px}
.p-nh33572 .pagelayer-primary-menu-bar{text-align:right}
.p-nh33572 .pagelayer-primary-menu-bar i{font-size:20px;padding:10 {{val[1]}}}
.p-nh33572 .pagelayer-menu-type-dropdown .pagelayer-wp_menu-ul{top: 5%; transform: translateY(-5%)}
}
@media (max-width: 360px){.p-nh33572 .pagelayer-wp_menu-ul{text-align:center}
.p-nh33572 .pagelayer-primary-menu-bar{text-align:right}
.p-nh33572 .pagelayer-primary-menu-bar i{font-size:20px;padding:10 {{val[1]}}}
.p-nh33572 .pagelayer-menu-type-dropdown{width:50%}
}
</style><div class="pagelayer-wp-menu-holder" data-layout="horizontal" data-submenu_ind="caret-down" data-drop_breakpoint="tablet">
    <div class="pagelayer-primary-menu-bar"><i class="fas fa-bars"></i></div>
    <div class="pagelayer-wp-menu-container pagelayer-menu-type-horizontal pagelayer-menu-hover- slide pagelayer-wp_menu-right" data-align="right">
      <div class="pagelayer-wp_menu-close"><i class="fas fa-times"></i></div>
      <div class="menu-academy-header-menu-container"><ul id="2" class="pagelayer-wp_menu-ul"><li id="menu-item-206" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-206"><a href="https://smkn4palusch.id/"><span class="pagelayer-nav-menu-title">Home</span></a><div class="pagelayer-mega-menu pagelayer-mega-editor-206"></div></li>
<li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-26"><a href="https://smkn4palusch.id/about/"><span class="pagelayer-nav-menu-title">Profil</span></a><div class="pagelayer-mega-menu pagelayer-mega-editor-26"></div>
<ul class="sub-menu">
<ul class="sub-menu">
</ul>
</ul>
</li>
<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="https://smkn4palusch.id/blog/"><span class="pagelayer-nav-menu-title">Info</span></a><div class="pagelayer-mega-menu pagelayer-mega-editor-24"></div></li>
<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="https://smkn4palusch.id/service/"><span class="pagelayer-nav-menu-title">Layanan</span></a><div class="pagelayer-mega-menu pagelayer-mega-editor-25"></div></li>
<li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-21 current_page_item menu-item-27"><a href="https://smkn4palusch.id/contact/" aria-current="page"><span class="pagelayer-nav-menu-title">Kontak</span></a><div class="pagelayer-mega-menu pagelayer-mega-editor-27"></div></li>
</ul></div>
    </div>
  </div></div>
</div></div>
</div></div>

</header>
<main id="primary" class="site-main">

  
<article id="post-21" class="post-21 page type-page status-publish hentry">
<header class="entry-header">
    </header><!-- .entry-header -->


<div class="entry-content">
  <div pagelayer-id="1ix5176" class="p-1ix5176 pagelayer-post_props">
</div>
<div pagelayer-id="7c81490" class="p-7c81490 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
<style pagelayer-style-id="7c81490">.p-7c81490 .pagelayer-col-holder{padding: 10px}
.p-7c81490 > .pagelayer-background-overlay{background-color: #000000;opacity: 0.7;-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-7c81490 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-7c81490 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-7c81490 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-7c81490 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-7c81490{background-image: url("#");background-attachment: scroll;background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-size: cover;padding-top: 150px; padding-right: 0px; padding-bottom: 150px; padding-left: 0px}
</style>
    
    
    
    <div class="pagelayer-background-overlay"></div>
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto"><div pagelayer-id="vny7890" class="p-vny7890 pagelayer-col">
<style pagelayer-style-id="vny7890">.p-vny7890 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-vny7890 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
      
      
      
      <div class="pagelayer-col-holder"><div pagelayer-id="0v43645" class="p-0v43645 pagelayer-heading fadeInDown pagelayer-wow">
<style pagelayer-style-id="0v43645">.p-0v43645 .pagelayer-heading-holder *{color:#ffffff;font-family: Muli !important; font-size: 75px !important; font-style:  !important; font-weight: 400 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-0v43645 .pagelayer-heading-holder{color:#ffffff;font-family: Muli !important; font-size: 75px !important; font-style:  !important; font-weight: 400 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-0v43645{-webkit-animation-delay: 600ms; animation-delay: 600ms}
@media (max-width: 360px){.p-0v43645 .pagelayer-heading-holder *{font-family:  !important; font-size: 50px !important; font-style:  !important; font-weight:  !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-0v43645 .pagelayer-heading-holder{font-family:  !important; font-size: 50px !important; font-style:  !important; font-weight:  !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
}
</style><div class="pagelayer-heading-holder">


Contact Us</div>
  
    </div><div pagelayer-id="9nd8527" class="p-9nd8527 pagelayer-divider">
<style pagelayer-style-id="9nd8527">.p-9nd8527 .pagelayer-divider-seperator{border-top-style: solid;border-top-color: #6200ea;border-top-width: 3px;width: 10%}
.p-9nd8527 .pagelayer-divider-holder{padding-top: 10px; padding-bottom: 10px;text-align: left}
@media (max-width: 768px) and (min-width: 361px){.p-9nd8527 .pagelayer-divider-seperator{width: 10%}
}
@media (max-width: 360px){.p-9nd8527 .pagelayer-divider-seperator{width: 20%}
}
</style><div class="pagelayer-divider-holder">
    <span class="pagelayer-divider-seperator"></span>
  </div></div></div></div></div></div>
<div pagelayer-id="g865866" class="p-g865866 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
<style pagelayer-style-id="g865866">.p-g865866 .pagelayer-col-holder{padding: 10px}
.p-g865866 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-g865866 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-g865866 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-g865866 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-g865866 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-g865866{background-image: url("https://smkn3bandung.sch.id/wp-content/uploads/2021/07/Beranda_lite-scaled.jpg");background-attachment: fixed;background-size: cover;padding-top: 60px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px}
</style>
    
    
    
    
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto"><div pagelayer-id="p148215" class="p-p148215 pagelayer-col pagelayer-col-2">
<style pagelayer-style-id="p148215">.p-p148215 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-p148215 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
      
      
      
      <div class="pagelayer-col-holder">
</div></div><div pagelayer-id="cef7526" class="p-cef7526 pagelayer-col pagelayer-col-8">
<style pagelayer-style-id="cef7526">.p-cef7526 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-cef7526 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
      
      
      
      <div class="pagelayer-col-holder"><div pagelayer-id="ci02717" class="p-ci02717 pagelayer-heading fadeInDown pagelayer-wow" align="center">
<style pagelayer-style-id="ci02717">.p-ci02717{text-align: center;-webkit-animation-delay: 600ms; animation-delay: 600ms}
.p-ci02717 .pagelayer-heading-holder *{color:#111111;font-family: Muli !important; font-size: 40px !important; font-style:  !important; font-weight:  !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-ci02717 .pagelayer-heading-holder{color:#111111;font-family: Muli !important; font-size: 40px !important; font-style:  !important; font-weight:  !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
@media (max-width: 360px){.p-ci02717 .pagelayer-heading-holder *{font-family:  !important; font-size: 40px !important; font-style:  !important; font-weight:  !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-ci02717 .pagelayer-heading-holder{font-family:  !important; font-size: 40px !important; font-style:  !important; font-weight:  !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
}
</style><div class="pagelayer-heading-holder">


Get In Touch</div>
  
    </div><div pagelayer-id="w0v6056" class="p-w0v6056 pagelayer-divider">
<style pagelayer-style-id="w0v6056">.p-w0v6056 .pagelayer-divider-seperator{border-top-style: solid;border-top-color: #6200ea;border-top-width: 3px;width: 14%}
.p-w0v6056 .pagelayer-divider-holder{padding-top: 10px; padding-bottom: 10px;text-align: center}
@media (max-width: 768px) and (min-width: 361px){.p-w0v6056 .pagelayer-divider-seperator{width: 10%}
}
@media (max-width: 360px){.p-w0v6056 .pagelayer-divider-seperator{width: 20%}
}
</style><div class="pagelayer-divider-holder">
    <span class="pagelayer-divider-seperator"></span>
  </div></div><div pagelayer-id="1fd9054" class="p-1fd9054 pagelayer-contact fadeInUp pagelayer-wow">
<style pagelayer-style-id="1fd9054">.p-1fd9054 .pagelayer-contact-form{text-align: center}
.p-1fd9054 label{padding-top:px; padding-right:px; padding-bottom:10px; padding-left:px}
.p-1fd9054 ::placeholder{font-family: Noto Sans !important; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-1fd9054 input, .p-1fd9054 select, .p-1fd9054 textarea{padding-top:10px; padding-right:10px; padding-bottom:10px; padding-left:10px;-webkit-transition: all 400ms; transition: all 400ms}
.p-1fd9054 input[type="checkbox"] + label:before, .p-1fd9054 input[type="radio"]{height:10px; min-height:10px;  width:10px}
.p-1fd9054 input:focus, .p-1fd9054 select:focus, .p-1fd9054 textarea:focus{border-style: solid;border-color: #6200ea;border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px}
.p-1fd9054 .pagelayer-btn-text{font-family: Muli; font-size: 14px !important; font-style:  !important; font-weight: 600 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-1fd9054 .pagelayer-btn-holder{font-family: Muli; font-size: 14px !important; font-style:  !important; font-weight: 600 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important;padding-top:10px; padding-right:20px; padding-bottom:10px; padding-left:20px;background-color: rgba(9,134,192,0.00);color: #6200ea;-webkit-transition: all 400ms !important; transition: all 400ms !important;border-style: solid;border-color: #6200ea;border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;border-radius: 0px 0px 0px 0px; -webkit-border-radius:  0px 0px 0px 0px;-moz-border-radius: 0px 0px 0px 0px}
.p-1fd9054 .pagelayer-btn-holder:hover{background-color: #6200ea;color: #ffffff}
.p-1fd9054{-webkit-animation-delay: 600ms; animation-delay: 600ms}
</style><div class="pagelayer-contact-form-div pagelayer-contact-form-holder">
        <div class="pagelayer-message-box pagelayer-message-top"></div>
        
        <form class="pagelayer-contact-form" id="contact-form" name="Contact Form" onsubmit="return pagelayer_contact_submit(this, event)" method="POST">
          <div class="pagelayer-contact-holder"><div pagelayer-id="7kn2440" class="p-7kn2440 pagelayer-contact_item">
<style pagelayer-style-id="7kn2440">.p-7kn2440{width:45%;display:inline-block;padding-top:0px; padding-right:10px; padding-bottom:10px; padding-left:0px}
</style><input type="text" placeholder="Name" name="name" /></div><div pagelayer-id="0qc5747" class="p-0qc5747 pagelayer-contact_item">
<style pagelayer-style-id="0qc5747">.p-0qc5747{width:45%;display:inline-block;padding-top:0px; padding-right:0px; padding-bottom:10px; padding-left:10px}
</style><input type="text" placeholder="Email" name="name" /></div><div pagelayer-id="oxo9216" class="p-oxo9216 pagelayer-contact_item">
<style pagelayer-style-id="oxo9216">.p-oxo9216{width:90%;display:inline-block;padding-top:0px; padding-right:0px; padding-bottom:10px; padding-left:0px}
</style><input type="text" placeholder="Subject" name="name" /></div><div pagelayer-id="bkw9213" class="p-bkw9213 pagelayer-contact_item">
<style pagelayer-style-id="bkw9213">.p-bkw9213{width:90%;display:inline-block;padding-top:0px; padding-right:0px; padding-bottom:10px; padding-left:0px}
</style><textarea name="name" rows="6" placeholder="Message"></textarea></div></div>
          <input type="hidden" name="cfa-pagelayer-id" />
          <input type="hidden" name="cfa-post-id" value="8838" />
          
          
          
          <div class="pagelayer-contact-submit-holder">
            <button type="submit" form="contact-form" class="pagelayer-contact-submit-btn pagelayer-btn-holder pagelayer-ele-link pagelayer-btn-custom pagelayer-btn-custom {{icon_position}}">
              <i class="fa fa-circle-o-notch fa-spin" style="display:none;margin-right:5px;"></i>
              
              <span class="pagelayer-btn-text">Send Message</span>
              
            </button>
          </div>
        </form>
        <div class="pagelayer-message-box pagelayer-message-bottom"></div>
    </div></div></div></div><div pagelayer-id="9e43009" class="p-9e43009 pagelayer-col pagelayer-col-2">
<style pagelayer-style-id="9e43009">.p-9e43009 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-9e43009 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
      
      
      
      <div class="pagelayer-col-holder">
</div></div></div></div>
<div pagelayer-id="sw53950" class="p-sw53950 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
<style pagelayer-style-id="sw53950">.p-sw53950 .pagelayer-col-holder{padding: 10px}
.p-sw53950 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-sw53950 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-sw53950 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-sw53950 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-sw53950 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-sw53950{margin-top: 60px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
</style>
    
    
    
    
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto"><div pagelayer-id="owh8989" class="p-owh8989 pagelayer-col pagelayer-col-4 fadeInLeft pagelayer-wow">
<style pagelayer-style-id="owh8989">.p-owh8989 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-owh8989 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-owh8989{-webkit-animation-delay: 600ms; animation-delay: 600ms}
</style>
      
      
      
      <div class="pagelayer-col-holder"><div pagelayer-id="ssr4516" class="p-ssr4516 pagelayer-iconbox">
<style pagelayer-style-id="ssr4516">.p-ssr4516 .pagelayer-service-icon i{padding: calc(0.5em + 16px);color:#ffffff;-webkit-transition: all 400ms; transition: all 400ms}
.p-ssr4516 .pagelayer-service-icon.pagelayer-service-stacked i{background-color:#6200ea}
.p-ssr4516 .pagelayer-service-icon{font-size:30px}
.p-ssr4516 .pagelayer-service-heading{text-align:center;padding-top:10px; padding-right:0px; padding-bottom:10px; padding-left:0px;color:#000000;font-family: Muli; font-size: 24px !important; font-style:  !important; font-weight: 600 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important;-webkit-transition: all 400ms; transition: all 400ms}
.p-ssr4516 .pagelayer-service-details{text-align:center}
.p-ssr4516 .pagelayer-service-btn{-webkit-transition: all 400ms; transition: all 400ms}
</style><div class="pagelayer-service-container pagelayer-service-align-top pagelayer-service-vertical-{{service_vertical_alignment}}">
    <div class="pagelayer-service-icon pagelayer-service-stacked">
      <i class="fas fa-map-marker-alt pagelayer-icon-circle pagelayer-animation-{{anim_hover}}" aria-hidden="true"></i>
    </div>
    <div class="pagelayer-service-details">
      
        <div class="pagelayer-service-heading">Address</div>
      
      <div class="pagelayer-service-text">


</div>
      
    </div>
     
  </div></div><div pagelayer-id="0su2999" class="p-0su2999 pagelayer-address">
<style pagelayer-style-id="0su2999">.p-0su2999 .pagelayer-address *, .p-0su2999 .pagelayer-address{font-family: Noto Sans; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: 1.4em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-0su2999 .pagelayer-address-holder{justify-content: center}
.p-0su2999{margin-top: -10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
.p-0su2999 .pagelayer-address{text-align:center;}
</style><div class="pagelayer-address-holder">
    <span class="pagelayer-address-icon"><i class=""></i></span>
    <span class="pagelayer-address">Jln. Totosi, No.08, Kel. Duyu, Kec. Tatanga Kota Palu (Jalan Arah Vila Doda) </span>
  </div></div></div></div><div pagelayer-id="bl16875" class="p-bl16875 pagelayer-col pagelayer-col-4 fadeInUp pagelayer-wow">
<style pagelayer-style-id="bl16875">.p-bl16875 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-bl16875 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-bl16875{-webkit-animation-delay: 600ms; animation-delay: 600ms}
</style>
      
      
      
      <div class="pagelayer-col-holder"><div pagelayer-id="myl5602" class="p-myl5602 pagelayer-iconbox">
<style pagelayer-style-id="myl5602">.p-myl5602 .pagelayer-service-icon i{padding: calc(0.5em + 16px);color:#ffffff;-webkit-transition: all 400ms; transition: all 400ms}
.p-myl5602 .pagelayer-service-icon.pagelayer-service-stacked i{background-color:#6200ea}
.p-myl5602 .pagelayer-service-icon{font-size:30px}
.p-myl5602 .pagelayer-service-heading{text-align:center;padding-top:10px; padding-right:0px; padding-bottom:10px; padding-left:0px;color:#000000;font-family: Muli; font-size: 24px !important; font-style:  !important; font-weight: 600 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important;-webkit-transition: all 400ms; transition: all 400ms}
.p-myl5602 .pagelayer-service-details{text-align:center}
.p-myl5602 .pagelayer-service-btn{-webkit-transition: all 400ms; transition: all 400ms}
@media (max-width: 768px) and (min-width: 361px){.p-myl5602{margin-top: 20px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
}
@media (max-width: 360px){.p-myl5602{margin-top: 20px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
}
</style><div class="pagelayer-service-container pagelayer-service-align-top pagelayer-service-vertical-{{service_vertical_alignment}}">
    <div class="pagelayer-service-icon pagelayer-service-stacked">
      <i class="fas fa-mobile-alt pagelayer-icon-circle pagelayer-animation-{{anim_hover}}" aria-hidden="true"></i>
    </div>
    <div class="pagelayer-service-details">
      
        <div class="pagelayer-service-heading">Phone</div>
      
      <div class="pagelayer-service-text">


</div>
      
    </div>
     
  </div></div><div pagelayer-id="rjx2923" class="p-rjx2923 pagelayer-phone">
<style pagelayer-style-id="rjx2923">.p-rjx2923 .pagelayer-phone *, .p-rjx2923 .pagelayer-phone{font-family: Noto Sans; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-rjx2923 .pagelayer-phone-holder{justify-content: center}
.p-rjx2923{margin-top: -5px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
</style><div class="pagelayer-phone-holder">
    <span class="pagelayer-phone-icon"><i class=""></i></span>
    
      <span class="pagelayer-phone">+62 822-7165-5439</span>
    
    </div></div></div></div><div pagelayer-id="wmj7587" class="p-wmj7587 pagelayer-col pagelayer-col-4 fadeInRight pagelayer-wow">
<style pagelayer-style-id="wmj7587">.p-wmj7587 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-wmj7587 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-wmj7587{-webkit-animation-delay: 600ms; animation-delay: 600ms}
</style>
      
      
      
      <div class="pagelayer-col-holder"><div pagelayer-id="v4b5979" class="p-v4b5979 pagelayer-iconbox">
<style pagelayer-style-id="v4b5979">.p-v4b5979 .pagelayer-service-icon i{padding: calc(0.5em + 16px);color:#ffffff;-webkit-transition: all 400ms; transition: all 400ms}
.p-v4b5979 .pagelayer-service-icon.pagelayer-service-stacked i{background-color:#6200ea}
.p-v4b5979 .pagelayer-service-icon{font-size:30px}
.p-v4b5979 .pagelayer-service-heading{text-align:center;padding-top:10px; padding-right:0px; padding-bottom:10px; padding-left:0px;color:#000000;font-family: Muli; font-size: 24px !important; font-style:  !important; font-weight: 600 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important;-webkit-transition: all 400ms; transition: all 400ms}
.p-v4b5979 .pagelayer-service-details{text-align:center}
.p-v4b5979 .pagelayer-service-btn{-webkit-transition: all 400ms; transition: all 400ms}
@media (max-width: 768px) and (min-width: 361px){.p-v4b5979{margin-top: 20px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
}
@media (max-width: 360px){.p-v4b5979{margin-top: 20px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
}
</style><div class="pagelayer-service-container pagelayer-service-align-top pagelayer-service-vertical-{{service_vertical_alignment}}">
    <div class="pagelayer-service-icon pagelayer-service-stacked">
      <i class="fas fa-envelope pagelayer-icon-circle pagelayer-animation-{{anim_hover}}" aria-hidden="true"></i>
    </div>
    <div class="pagelayer-service-details">
      
        <div class="pagelayer-service-heading">Email</div>
      
      <div class="pagelayer-service-text">


</div>
      
    </div>
     
  </div></div><div pagelayer-id="4hd3262" class="p-4hd3262 pagelayer-email">
<style pagelayer-style-id="4hd3262">.p-4hd3262 .pagelayer-email *, .p-4hd3262 .pagelayer-email{font-family: Noto Sans; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-4hd3262 .pagelayer-email-holder{justify-content: center}
.p-4hd3262{margin-top: -5px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
</style><div class="pagelayer-email-holder">
    <span class="pagelayer-email-icon"><i class=""></i></span>
    <span class="pagelayer-email">admin@smkn4palu.sch.id</span>
      </div>
    
    </div></div></div></div></div>
<div pagelayer-id="rag2893" class="p-rag2893 pagelayer-row pagelayer-row-stretch-full pagelayer-height-default fadeInUp pagelayer-wow">
<style pagelayer-style-id="rag2893">.p-rag2893 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-rag2893 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-rag2893 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-rag2893 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-rag2893 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-rag2893{margin-top: 60px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;-webkit-animation-delay: 600ms; animation-delay: 600ms}
</style>
    
    
    
    
    
      
   
  </div></div></div></div></div></div>
</div><!-- .entry-content -->

</article><!-- #post-21 -->

</main><!-- #main -->


<footer class="pagelayer-footer"><div pagelayer-id="cxd822" class="p-cxd822 pagelayer-post_props">
</div>
<div pagelayer-id="xn54589" class="p-xn54589 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
<style pagelayer-style-id="xn54589">.p-xn54589 .pagelayer-col-holder{padding: 10px}
.p-xn54589 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-xn54589 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-xn54589 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-xn54589 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-xn54589 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-xn54589{background: #101010;padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px}
</style>
    
    
    
    
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto"><div pagelayer-id="6ue3898" class="p-6ue3898 pagelayer-col pagelayer-col-6">
<style pagelayer-style-id="6ue3898">.p-6ue3898 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-6ue3898 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
      
      
      
      <div class="pagelayer-col-holder"><div pagelayer-id="byl9605" class="p-byl9605 pagelayer-wp_title">
<style pagelayer-style-id="byl9605">.p-byl9605 .pagelayer-wp-title-heading{font-family: Muli; font-size: 30px !important; font-style:  !important; font-weight: 600 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform: Capitalize !important; letter-spacing: px !important; word-spacing: px !important;color:#6200ea;text-align:left;padding: 0px 0px 0px 0px}
</style><div class="pagelayer-wp-title-content">
    <div class="pagelayer-wp-title-section">
      <a href="https://smkn3bandung.sch.id" class="pagelayer-wp-title-link pagelayer-ele-link">
        
        <div class="pagelayer-wp-title-holder">
          <div class="pagelayer-wp-title-heading">SMKN 4 Palu</div>
          
        </div>
      </a>
    </div>			
  <div></div></div></div><div pagelayer-id="kb97426" class="p-kb97426 pagelayer-text">
<style pagelayer-style-id="kb97426">.p-kb97426{font-size: 10px !important}
.p-kb97426 .pagelayer-text-holder p{font-family:noto sans; font-weight:500; line-height:2; color:#ffffff;}
</style><div class="pagelayer-text-holder"><p style="text-align: left;">Sekolah Menengah Kejuruan (SMK) Negeri 4 Palu Merupakan Sekolah Program Keunggulan Bidang Teknik Komputer dan Jaringan. Konsentrasi Keahlian yang tersedia yakni&nbsp;<span style="line-height: 0.9; color: rgb(255, 255, 0);"><strong><em>Otomatisasi Tata Kelola Perkantoran. dan Kepawaratan, Pekerjaan Sosial.</em></strong></span><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline;"><span style="border-style: initial; border-color: initial; border-image: initial; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit;"><em><strong></strong></em></span></span></p></div></div><div pagelayer-id="hix5260" class="p-hix5260 pagelayer-social_grp pagelayer-social-shape-circle">
<style pagelayer-style-id="hix5260">.p-hix5260 i{height:1em; width:1em; position: absolute; top: 50%; left: 50%; transform: translate(-50% , -50%)}
.p-hix5260 .pagelayer-icon-holder{position: relative; min-height: 1em; min-width: 1em;padding: calc(0.5em + 10px);font-size: 16px;background-color: rgba(0,234,68,0.56) !important;border-style: dotted;border-color: #42414f;-webkit-transition: all 400ms; transition: all 400ms}
.p-hix5260{text-align: left}
.p-hix5260 > div{display: inline-block}
.p-hix5260 .pagelayer-social{padding: 3px}
.p-hix5260 .pagelayer-social-fa{font-size: 16px;color: #ffffff !important;-webkit-transition: all 400ms; transition: all 400ms}
.p-hix5260 .pagelayer-icon-holder:hover .pagelayer-social-fa{color: #ffffff !important}
.p-hix5260 .pagelayer-icon-holder:hover{background-color: #0986c0 !important}
</style><div pagelayer-id="mfw3250" class="p-mfw3250 pagelayer-social">
<div class="pagelayer-icon-holder pagelayer-facebook-f" data-icon="fab fa-facebook-f">
        <a class="pagelayer-ele-link" href="https://www.facebook.com/smknegeri4palu?mibextid=3amO3DAFELuS4Abp" target="_blank">
          <i class="pagelayer-social-fa fab fa-facebook-f"></i>
        </a>
      </div></div><div pagelayer-id="ai87928" class="p-ai87928 pagelayer-social">
<div class="pagelayer-icon-holder pagelayer-instagram" data-icon="fab fa-instagram">
        <a class="pagelayer-ele-link" href="https://instagram.com/smknegeriempatpalu?igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
          <i class="pagelayer-social-fa fab fa-instagram"></i>
        </a>
      </div></div><div pagelayer-id="lak5608" class="p-lak5608 pagelayer-social">
<div class="pagelayer-icon-holder pagelayer-tiktok" data-icon="fab fa-tiktok">
        <a class="pagelayer-ele-link" href="https://www.tiktok.com/@smk.negeri.4.palu?_t=8i8RkocujGU&_r=1" target="_blank">
          <i class="pagelayer-social-fa fab fa-tiktok"></i>
        </a>
      </div></div><div pagelayer-id="c7p4087" class="p-c7p4087 pagelayer-social">
<div pagelayer-id="ipk4953" class="p-ipk4953 pagelayer-social">
<div class="pagelayer-icon-holder pagelayer-whatsapp" data-icon="fab fa-whatsapp">
        <a class="pagelayer-ele-link" href="https://wa.me/+6282271655439" target="_blank">
          <i class="pagelayer-social-fa fab fa-whatsapp"></i>
        </a>
      </div></div></div></div></div><div pagelayer-id="qe74887" class="p-qe74887 pagelayer-col pagelayer-col-2">
<style pagelayer-style-id="qe74887">.p-qe74887 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-qe74887 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
      
      
      
      <div class="pagelayer-col-holder"><div pagelayer-id="u373460" class="p-u373460 pagelayer-heading">
<style pagelayer-style-id="u373460">.p-u373460 .pagelayer-heading-holder *{color:#6200ea;font-family: Muli !important; font-size: 20px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-u373460 .pagelayer-heading-holder{color:#6200ea;font-family: Muli !important; font-size: 20px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
</style><div class="pagelayer-heading-holder">
Quick Links</div>
  
    </div><div pagelayer-id="xkk6253" class="p-xkk6253 pagelayer-list">
<style pagelayer-style-id="xkk6253">.p-xkk6253 li{list-style-type: none;font-family: Noto Sans; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform: Capitalize !important; letter-spacing: px !important; word-spacing: px !important}
.p-xkk6253 .pagelayer-list-icon-holder{padding-bottom: calc(22px/2); padding-top: calc(22px/2)}
.p-xkk6253 .pagelayer-list-item{color:#ffffff}
.p-xkk6253 li > a{font-family: Noto Sans; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform: Capitalize !important; letter-spacing: px !important; word-spacing: px !important}
.p-xkk6253 .pagelayer-list-icon{color:#0986c0}
</style><ul class="pagelayer-list-ul pagelayer-list-type-none"><div pagelayer-id="25z8508" class="p-25z8508 pagelayer-list_item">
<li class="pagelayer-list-li">
      <a class="pagelayer-list-url pagelayer-ele-link" href="smk4.html">
        <span class="pagelayer-list-icon-holder">
          
          <span class="pagelayer-list-item">
Home</span>
        </span>
      </a>
    </li></div><div pagelayer-id="fs75561" class="p-fs75561 pagelayer-list_item">
<li class="pagelayer-list-li">
      <a class="pagelayer-list-url pagelayer-ele-link" href="profil.html">
        <span class="pagelayer-list-icon-holder">
          
          <span class="pagelayer-list-item">Profil</span>
        </span>
      </a>
    </li></div><div pagelayer-id="8hr9064" class="p-8hr9064 pagelayer-list_item">
<li class="pagelayer-list-li">
      <a class="pagelayer-list-url pagelayer-ele-link" href="galeri.html">
        <span class="pagelayer-list-icon-holder">
          
          <span class="pagelayer-list-item">Galeri</span>
        </span>
      </a>
    </li></div><div pagelayer-id="h4i7710" class="p-h4i7710 pagelayer-list_item">
<li class="pagelayer-list-li">
      <a class="pagelayer-list-url pagelayer-ele-link" href="kontak.html">
        <span class="pagelayer-list-icon-holder">
          
          <span class="pagelayer-list-item">Kontak</span>
        </span>
      </a>
    </li></div></ul></div></div></div><div pagelayer-id="pg86907" class="p-pg86907 pagelayer-col pagelayer-col-4">
<style pagelayer-style-id="pg86907">.p-pg86907 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-pg86907 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
      
      
      
      <div class="pagelayer-col-holder"><div pagelayer-id="5189998" class="p-5189998 pagelayer-heading">
<style pagelayer-style-id="5189998">.p-5189998 .pagelayer-heading-holder *{color:#6200ea;font-family: Muli !important; font-size: 20px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-5189998 .pagelayer-heading-holder{color:#6200ea;font-family: Muli !important; font-size: 20px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
</style><div class="pagelayer-heading-holder">
Get In Touch</div>
  
    </div><div pagelayer-id="1tn3885" class="p-1tn3885 pagelayer-address">
<style pagelayer-style-id="1tn3885">.p-1tn3885 .pagelayer-address *, .p-1tn3885 .pagelayer-address{color:#ffffff;font-family: Noto Sans; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: 1.6em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-1tn3885{margin-top: 6px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
</style><div class="pagelayer-address-holder">
    <span class="pagelayer-address-icon"><i class=""></i></span>
    <span class="pagelayer-address">Jln. Totosi, No.08, Kel. Duyu, Kec. Tatanga Kota Palu (Jalan Arah Vila Doda) </span>
  </div></div><div pagelayer-id="ukt5715" class="p-ukt5715 pagelayer-phone">
<style pagelayer-style-id="ukt5715">.p-ukt5715 .pagelayer-phone *, .p-ukt5715 .pagelayer-phone{color:#ffffff;font-family: Noto Sans; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-ukt5715{margin-top: 5px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
</style><div class="pagelayer-phone-holder">
    <span class="pagelayer-phone-icon"><i class=""></i></span>
    
      <span class="pagelayer-phone">+62 822-7165-5439</span>
    
    </div></div><div pagelayer-id="02u6563" class="p-02u6563 pagelayer-email">
<style pagelayer-style-id="02u6563">.p-02u6563 .pagelayer-email *, .p-02u6563 .pagelayer-email{color:#ffffff;font-family: Noto Sans; font-size: 14px !important; font-style:  !important; font-weight: 500 !important; font-variant:  !important; text-decoration-line:  !important; text-decoration-style: Solid !important; line-height: em !important; text-transform:  !important; letter-spacing: px !important; word-spacing: px !important}
.p-02u6563 .pagelayer-email-holder{justify-content: flex-start}
.p-02u6563{margin-top: 10px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px}
</style><div class="pagelayer-email-holder">
    <span class="pagelayer-email-icon"><i class=""></i></span>
    <span class="pagelayer-email">admin@smkn4palu.sch.id</span>
      </div>
    
    </div></div></div></div></div>
<div pagelayer-id="aeu4361" class="p-aeu4361 pagelayer-row pagelayer-row-stretch-auto pagelayer-height-default">
<style pagelayer-style-id="aeu4361">.p-aeu4361 .pagelayer-col-holder{padding: 10px}
.p-aeu4361 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
.p-aeu4361 .pagelayer-svg-top .pagelayer-shape-fill{fill:#227bc3}
.p-aeu4361 .pagelayer-row-svg .pagelayer-svg-top{width:100%;height:100px}
.p-aeu4361 .pagelayer-svg-bottom .pagelayer-shape-fill{fill:#e44993}
.p-aeu4361 .pagelayer-row-svg .pagelayer-svg-bottom{width:100%;height:100px}
.p-aeu4361{background: #171717;padding-top: 5px; padding-right: 0px; padding-bottom: 5px; padding-left: 0px}
</style>
    
    
    
    
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto"><div pagelayer-id="dko8950" class="p-dko8950 pagelayer-col">
<style pagelayer-style-id="dko8950">.p-dko8950 .pagelayer-col-holder > div:not(:last-child){margin-bottom: 15px}
.p-dko8950 > .pagelayer-background-overlay{-webkit-transition: all 400ms !important; transition: all 400ms !important}
</style>
      
      
      
      <div class="pagelayer-col-holder">
</div></div></div></div>

</footer><link rel="preload" href="https://fonts.googleapis.com/css?family=Muli%3A400%2C600%2C500%7CNoto%20Sans%3A400%2C600%2C500" as="fetch" crossorigin="anonymous"><link rel='stylesheet' id='pagelayer-google-font-css' href='https://fonts.googleapis.com/css?family=Muli%3A400%2C600%2C500%7CNoto+Sans%3A400%2C600%2C500&#038;ver=1.7.8' media='all' />
<script src="https://smkn4palu.sch.id/wp-content/themes/popularfx/js/navigation.js?ver=1.2.4" id="popularfx-navigation-js"></script>
</body>
</html>
