<style>
/*default css*/
:root {
--primary:#3d3d3d;
--light:#F8F2F0;
--black:#000;
--white:#fff;
--whitelight:#f0f0f0;
--litewhite:#fafafa;
--theme:#c70100;
--themebg:#052438;
--hover:#b30000;
--lightdark:#ccc;
--transparent:transparent;
--bordercolor:#57646c;
--bordersecondry:#eaeaea;
--lighttowhite:#f0f0f0;
--whitetowhite:#ffffff;
--dddtoddd:#dddddd;
--themetotheme:#052438;
--addtotheme:#fafafa;
--graytotheme:#F4F4F4;
--redtored:#b30000;
--redtodddddd:#b30000;
--lightblackwhite:#666666;
--livehilight:#fff2f2;
--tabbackcolor:#052438;
--searchborder:#eaeaea;
--searchfocusborder:#052438;
}
html[data-theme="dark"] {
--primary:#e5e5e5;
--black:#ddd;
--white:#042031;
--hover:#fff;
--bordersecondry:#0a3b5a;
--lighttowhite:#ffffff;
--themetotheme:#1b3445;
--addtotheme:#07273c;
--graytotheme:#07273c;
--redtodddddd:#d5d5d5;
--lightblackwhite:#dddddd;
--livehilight:#1b3445;
--tabbackcolor:#1b3445;
--searchborder:#bababa;
--searchfocusborder:#fefefe;
}
*{box-sizing:border-box;}
html{scroll-behavior:smooth}
html,body{margin:0;padding:0;}
body{font-family:"Noto Sans", sans-serif;font-size:16px;line-height:1.42857143;color:var(--primary);font-style: normal;font-weight:400;background-color: var(--white)}
img{vertical-align:middle}
a{text-decoration:none;color:var(--primary)}
a:hover{text-decoration:none}
p {margin: 0 0 10px;}
h1,h2,h3,h4,h5,h6{margin:0 0 10px;line-height:1.1;font-weight:500}
.idl24by7-container {margin: 0 auto;padding: 0 15px;max-width: 1300px;width: 100%;}
.idl24by7-row{display: flex;flex-wrap: wrap;margin-left: -15px;margin-right: -15px;}
.idl24by7-row-infull {width: 100%;padding: 0px 15px;}
/*top header*/
.idl24by7-top-header{background:var(--white);padding:6px 0px 6px;border-top: 1px solid var(--bordersecondry);border-bottom: 1px solid var(--bordersecondry);position: relative;z-index: 99;}
.idl24by7-header-site{margin:0;padding:0px 0px 0px 137px;list-style-type:none;display:flex;line-height:1;align-items: center;}
.idl24by7-header-site li{padding-right:25px}
.idl24by7-header-site li a{text-decoration:none;color:var(--primary);font-size:13px;padding:0 0;display:block;outline: none;}
.idl24by7-header-site li a:hover{color:var(--hover)}
.idl24by7-header-social{margin:0;padding:0;list-style-type:none;display:flex;margin-left:auto;line-height:1}
.idl24by7-header-social li{padding-left:10px;display: flex;align-items: center;}
.idl24by7-header-social li a{display:block;width: 25px;text-align: center;} 
.idl24by7-header-social li img {display: block;}
/*modebutton*/
.idl24by7-darkmodelight {background-color: transparent;border: none;height: 25px;width: 25px;padding: 0px;margin-left: 20px;cursor: pointer;}
[data-theme="light"] .idl24by7-darkmode {display: none;}
[data-theme="dark"] .idl24by7-lightmode {display: none;}
@media(min-width:599.99px){.idl24by7-header-trigger .idl24by7-darkmodelight{display: none;}}
@media(max-width:767px){.idl24by7-darkmodelight {margin-left: 8px;}}
@media(max-width:600px){
    .idl24by7-top-header .idl24by7-darkmodelight{display: none;}
    .idl24by7-darkmodelight {margin-left:0px;position:relative;top: -1px;margin-right: 4px;}
}
/*main header*/
.idl24by7-header-pagecenter{margin:0 auto;padding:0 15px;max-width:1300px;width:100%;display:flex;flex-wrap:wrap;position: relative;}
.idl24by7-mainheader{background-color:var(--themebg);box-shadow:0px 3px 6px -1px rgb(107 107 107 / 79%);position:sticky;top:0px;z-index:99}
.idl24by7-header-logo{width: 100px;padding: 7px 0;position: relative;}
.idl24by7-headerlogo img {vertical-align: middle; max-width: 100%; height: auto;width: 100%;}
.idl24by7-header-trigger{width:110px;display:flex;justify-content:space-between;align-items:center}
.idl24by7-tv a {display: block;}
.idl24by7-tv svg {display: block;}
.idl24by7-tv {padding-right: 4px;}
.idl24by7-header-menuwrp{width:calc(100% - 210px);padding:6px 10px;display: flex;flex-direction: column;justify-content: center;transition: padding .5s;}
.idl24by7-menuwrap:after,.idl24by7-menuwrap:before{content:"";position:absolute;height:100%;top:0;bottom:0;width:16px;z-index: 1;}
.idl24by7-menuwrap:after{right:0;background-image: linear-gradient(to right, rgb(5 36 56 / 28%), rgb(5 36 56 / 70%), rgb(5 36 56 / 88%), #052438, #052438, #052438);}
.idl24by7-menuwrap:before{left: 0;background-image: linear-gradient(to right, #052438, #052438, #052438, rgb(5 36 56 / 98%), rgb(5 36 56 / 56%), rgb(5 36 56 / 25%));}
.idl24by7-menuwrap {position: relative;}
.idl24by7-menu{margin:0;padding:0 10px;list-style-type:none;display:flex;justify-content:space-around;overflow-y:hidden;overflow-x:auto}
.idl24by7-menu li{padding:0 8px}
.idl24by7-menu li a{color:var(--whitetowhite);text-decoration:none;white-space: nowrap;display:block;padding:2px 0;font-weight:500;border-bottom:1px solid var(--transparent);font-size: 17px;}
.idl24by7-menu li a:hover{color:var(--whitetowhite);border-color:var(--whitetowhite)}
.idl24by7-menu-wrap {margin: 0px;padding: 10px 0px;list-style-type: none;position: absolute;left: 0px;width: 300px;background-color: #08486e;z-index: 2;display: flex;border-radius: 0px 0px 4px 4px;opacity: 0;visibility: hidden;pointer-events: none;transition: all .3s;}
.idl24by7-menu-child {position: relative;}
.idl24by7-menu-child:hover > .idl24by7-menu-wrap {opacity: 1;visibility: visible;pointer-events: all;}
.idl24by7-menu-wrap li {width: 50%;}
.idl24by7-menu-wrap li a {font-size: 15px;display: inline-block;}
.idl24by7-menu::-webkit-scrollbar {height: 0;width: 0;}
.idl24by7-slideerrow-group{position:absolute;right:0px;top:0;height:23px;padding:2px 0;font-size:0}
.idl24by7-slideerrow-group.hidebtnArrow {opacity: 0;visibility: hidden;}
.idl24by7-arrowbtnmenu{outline:0;background-color:var(--theme);border:none;padding:4px;position:relative;z-index:4;height:18px;width:18px;line-height:1;cursor:pointer}
.idl24by7-arrowbtnmenu:hover {background-color:var(--hover);}
.idl24by7-arrowbtnmenu+.idl24by7-arrowbtnmenu{margin-left:4px}
.idl24by7-leftbtnmain svg{transform:rotate(180deg)}
.idl24by7-trigger{display:flex;height:30px;width:30px;text-align:center;line-height:0;align-items:center;cursor:pointer}
.idl24by7-trigger img{display:block;margin:0 auto}
.idl24by7-search-open{height:30px;width:30px;display:flex;align-items:center;justify-content:center;cursor:pointer}
.idl24by7-search-wrapper{left:0;right:0;width:100%;position:absolute;background-color:var(--white);line-height:1.3;z-index:12;display:none;top:100%;min-height:300px;padding:0;border:1px solid var(--bordersecondry);border-top:none;box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);-webkit-animation-name:animatetop;-webkit-animation-duration:.4s;animation-name:animatetop;animation-duration:.4s}
.idl24by7-searchActive .idl24by7-search-wrapper{display:block}
.idl24by7-searchActive .idl24by7-search-open > svg {display: none;}
.idl24by7-sitebody:not(.idl24by7-searchActive) .idl24by7-close-ic {display: none;}
.idl24by7-sitebody:before {content: "";position: fixed;z-index: 99;height: 0%;width: 100%;right: 0;left: 0;bottom: 0;top: 0;transition: all .3s;background-color: rgb(61 61 61 / 89%);opacity: 0;pointer-events: none;}
.idl24by7-searchActive.idl24by7-sitebody:before {height: 100%;opacity: 1;pointer-events: all;}
.idl24by7-search-wrapper:before{content:"";height:0;width:0;position:absolute;border:12px solid var(--transparent);border-bottom-color:var(--white);right:56px;top:-20px}
.idl24by7-close-ic {line-height: 0;cursor: pointer;}
.idl24by7-search{position:relative}
.idl24by7-search-wrapper form{padding:15px 10px 40px;display:flex;align-items:center}
.idl24by7-search-input{padding:10px;line-height:1.3;border:1px solid var(--searchborder);outline:0;flex: 1;background-color: var(--transparent);color:var(--primary);font-family: inherit;}
.idl24by7-search-input:focus {border-color: var(--searchfocusborder);}
.idl24by7-search-btn{padding:10px;border:1px solid var(--searchfocusborder);background-color:var(--searchfocusborder);color:var(--white);line-height:1.3;cursor:pointer;outline:0}
.idl24by7-search-wrapperin{padding:38px 30px 30px;display:flex;flex-direction:column;justify-content:center;transform: translate(0px, -20px);transition: transform .8s;}
.idl24by7-searchActive .idl24by7-search-wrapperin {transform: translate(0px, 0px);}
.idl24by7-search-list ul{margin:0;padding:0;list-style-type:none;display:flex;flex-wrap:wrap}
.idl24by7-search-list ul li a{display:block;padding:10px 21px;border:1px solid var(--bordersecondry);border-radius:20px;line-height:1.2}
.idl24by7-search-list ul li{padding:4px}
/*fixed menu*/
.idl24by7-slide-menuwrap{background-color:var(--white);padding-top:11px;position:fixed;width:250px;right:-250px;top:0;bottom:0;height:100%;z-index:999;transition:right .4s}
.idl24by7-menu-open .idl24by7-slide-menuwrap {right: 0px;}
.idl24by7-sitebody:after{content:"";position:fixed;z-index:99;height:100%;width:100%;right:0;left:0;bottom:0;top:0;transition:all .3s;background-color:rgb(0 0 0 / 75%);opacity:0;pointer-events:none}
.idl24by7-sitebody.idl24by7-menu-open:after{opacity:1;pointer-events:all}
.idl24by7-slide-header{display:flex;align-items:center;justify-content:space-between;padding:0 22px 0 12px;border-bottom: 1px solid var(--bordersecondry);}
.idl24by7-slide-icon{height:30px;width:30px;margin-left:6px;position:relative;background-color:var(--transparent);border:none;cursor:pointer}
.idl24by7-slide-header a{height:50px;width:56px;display:block}
.idl24by7-slide-header img{max-width:100%;display:block;height:auto}
.idl24by7-slide-menu{margin:0;padding:4px 0px 10px;list-style-type:none;max-height:calc(100vh - 100px);overflow-y:auto}
.idl24by7-slide-menu li{display:block}
.idl24by7-slide-menu li a{color:var(--primary);padding:12px 14px 9px;display:block;font-size:16px;line-height:1;text-decoration:none;border-bottom: 1px solid var(--bordersecondry);}
.idl24by7-slide-menu li a:hover {color: var(--hover);}
.idl24by7-slide-menu::-webkit-scrollbar{width:.4em;height:.2em}
.idl24by7-slide-menu::-webkit-scrollbar-thumb{background-color: var(--bordersecondry);}
.idl24by7-slide-icon:after,.idl24by7-slide-icon:before{content:"";height:20px;width:2px;background-color:var(--primary);position:absolute;display:inline-block;transform:rotate(45deg);left:13px;top:3px}
.idl24by7-slide-icon:after{transform:rotate(-45deg)}
.idl24by7-slide-icon:hover:after, .idl24by7-slide-icon:hover:before {background-color: var(--hover);}
/*breaking ticker*/
.idl24by7-breaking-ticker {padding: 0px 0px 20px}
.idl24by7-breaking-outer{background-color:var(--redtored);padding:6px 10px 6px 20px;border-radius:20px;width:100%;margin:0 auto}
.idl24by7-breaking-inner{display:flex}
.idl24by7-breakhead{border-right:2px solid rgb(255 255 255 / 37%);margin-right:15px;width:210px;padding-right:15px}
.idl24by7-breakhead h3{font-size:22px;font-weight:700;text-transform:uppercase;color:var(--whitetowhite);margin:0;}
.idl24by7-breaknews{height:24px;overflow:hidden;position:relative;width:calc(100% - 230px)}
.idl24by7-breaknews a,.idl24by7-breaknews span{font-size:18px;font-weight:700;text-decoration:none;color:var(--whitetowhite);width:100%;transition:all .4s;display:block;transform:translateY(-70px);height:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;position:absolute;left:0;right:0;z-index:2;}
.idl24by7-breaknews a.active,.idl24by7-breaknews span.active{transform:translateY(0)}
@media(max-width: 1200px){
.idl24by7-breaking-outer{width:calc(100% - 0px);} 
}
@media(max-width: 1000px){
.idl24by7-breaknews a,.idl24by7-breaknews span{font-size:16px;font-weight:500}
.idl24by7-breakhead h3{font-weight:600;font-size:17px;line-height:1.4}
.idl24by7-breakhead{width:160px}
.idl24by7-breaknews{width:calc(100% - 160px)}
}
@media(max-width: 749px){
.idl24by7-breaking-outer{border-radius:0;padding-left:14px}
.idl24by7-breaking-ticker .idl24by7-container{padding:0}
.idl24by7-breakhead{width:100px;text-align:center}
.idl24by7-breaknews{height:45px;width:calc(100% - 100px)}
.idl24by7-breaknews a,.idl24by7-breaknews span{display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;white-space:normal}
}
/*footer css*/
.idl24by7-footer-pagecenter{margin:0 auto;padding: 0px 15px;max-width:1300px;width:100%;display:flex;flex-wrap:wrap;align-items:self-start;}
.idl24by7-footerlogo{width:220px;padding-top: 7px;}
.idl24by7-footermenu{width:calc(100% - 220px);padding-left:30px;}
.idl24by7-flogo{display:block;margin-bottom:10px}
.idl24by7-flogo img{display:block;margin:0 auto;max-width:100%;height:auto;border: 2px solid #e2e2e2;}
.idl24by7-social{display:flex;justify-content:center;padding-top: 15px;}
.idl24by7-social a{display:block;margin:0 3px}
.idl24by7-footermenu-item{padding: 0px 0px 14px;}
.idl24by7-footermenu ul li:after{content:"|";color:var(--bordercolor);position:absolute;right:0;top:7px;font-size:9px}
.idl24by7-footermenu ul li:last-child:after {opacity: 0;}
.idl24by7-footermenu h3{font-size:20px;color:var(--whitetowhite);margin:0;padding:0px 0px 12px}
.idl24by7-footermenu ul{margin:0px 0px 0px -9px;padding:0;list-style-type:none;display:flex;flex-wrap:wrap}
.idl24by7-footermenu ul li{padding:3px 5px;position: relative;}
.idl24by7-footermenu ul li a{display:block;text-decoration:none;color:var(--lighttowhite);padding:2px 5px;line-height:1.2;font-size: 15px;font-weight:300;}
.idl24by7-footermenu ul li a:hover {color: var(--dddtoddd);}
.idl24by7-footer{background-color:var(--themebg);padding-top: 30px;padding-bottom: 5px;}
.idl24by7-copyright{width: 100%;text-align: center; justify-content: space-between; display: flex; align-items: center; padding: 14px 0px 10px; border-top: 1px solid var(--bordercolor);}
.idl24by7-copyright p{margin:0;color:var(--whitelight);font-size:15px;line-height: 1.2;font-weight: 300;}
.idl24by7-copyright ul{margin:0px;padding:0px;list-style-type:none;display:flex;justify-content:center;align-items:center}
.idl24by7-copyright ul a{color:var(--whitelight);text-decoration:none;display:block;line-height: 1.2;padding:0px 5px;font-size:15px;transition:color .3s}
.idl24by7-copyright ul li{padding:0 10px}
.idl24by7-copyright ul li:first-child {padding-left: 0px;}
.idl24by7-copyright ul a:hover{color:var(--white)}
/*mobile sticky footer*/
.idl24by7-follow .idl24by7-stickyBottom{bottom:0}
.idl24by7-stickyBottom{position:fixed;bottom:-80px;left:0;right:0;background-color:var(--white);z-index:50;transition:all .7s;overflow:hidden;box-shadow:0 0 6px 0 #ddd}
.idl24by7-follow-back .idl24by7-stickyBottom{bottom:0}
.idl24by7-sticky-footer{display:flex;justify-content:space-between;padding:0 10px;max-width:1000px;margin:0 auto}
.idl24by7-sticky-footer a{display:block;padding:12px 5px;min-width:50px;text-align:center;line-height:1}
.idl24by7-sticky-footer a svg,.idl24by7-sticky-footer button svg{min-height:23px;min-width:24px}
.idl24by7-sticky-footer span{font-size:14px;color:var(--primary);margin-bottom:0;margin-top:3px;display:block;font-weight:700;cursor:pointer}
.idl24by7-sticky-footer button{display:block;padding:10px 5px;min-width:50px;text-align:center;line-height:1;background-color:transparent;border:none;cursor:pointer}
@media(min-width:750px){
.idl24by7-headerlogo {display: block; position: absolute; top: calc(50% - 42px); border: 4px solid #e2e2e2; border-radius: 2px; box-shadow: 0px 3px 9px -5px #696969;width: 100px;transition: all .5s;z-index: 999;}
.idl24by7-sticky .idl24by7-header-menuwrp {padding-top: 15px;padding-bottom: 15px;}
.idl24by7-sticky .idl24by7-headerlogo {width: 60px;border: 3px solid #e2e2e2;top: calc(50% - 26px);}
.idl24by7-stickyBottom{display: none !important}
}
@media(max-width:1000px) and (min-width:750px){
.idl24by7-header-menuwrp {padding-left: 0px;padding-right: 0px;transition: width .5s;}
.idl24by7-header-logo {transition: width .5s;}
.idl24by7-sticky .idl24by7-header-logo {width: 60px;}
.idl24by7-sticky .idl24by7-header-menuwrp{width: calc(100% - 170px);}
.idl24by7-header-site {padding: 0px 0px 0px 120px;}
}
@media(max-width:900px){
.idl24by7-copyright {flex-wrap: wrap;}
.idl24by7-copyright ul {width: 100%;padding-bottom: 14px;}
}
@media(max-width:800px){
.idl24by7-menu-tags li a {font-size: 11px;padding: 6px 10px 2px;}
.idl24by7-menu li a {font-size: 15px;}
.idl24by7-menu-tagswrap {margin-top: 3px;}
}
@media(max-width:749px){
.idl24by7-headerlogo {display: block;border: 2px solid #e2e2e2; border-radius: 3px;}
.idl24by7-header-logo {width: 60px;padding: 4px 0;}
.idl24by7-header-menuwrp {width: calc(100% - 170px);}
.idl24by7-header-site {padding: 0px 0px 0px 0px;}
.idl24by7-search-wrapperin {padding: 17px 6px 10px;}
.idl24by7-search-wrapper form {padding: 15px 10px 25px;}
.idl24by7-search-list ul li a {padding: 7px 21px;}
.idl24by7-search-wrapper {min-height: 200px;}
}
@media(max-width:700px){
.idl24by7-footerlogo {width: 100%;}
.idl24by7-footermenu {width: 100%;padding-left: 0px;}
.idl24by7-header-site li:last-child {padding-right: 0px;}
.idl24by7-top-header {padding: 3px 0px 3px;}
.idl24by7-social {padding-bottom: 30px;}
.idl24by7-flogo img {max-width: 120px;border-radius: 2px;}
}
@media(max-width:600px){
.idl24by7-header-menuwrp {display: none !important;}
.idl24by7-header-pagecenter {justify-content: space-between;}
.idl24by7-header-trigger {width: 170px;}
.idl24by7-header-social {display: none;}
.idl24by7-header-site {width: 100%;justify-content: center;}
.idl24by7-top-header {padding: 8px 0px 8px;}
.idl24by7-search-wrapper:before {right: 66px;}
}
@media(max-width:500px){
.idl24by7-copyright ul li {padding: 0 3px;}
.idl24by7-copyright ul a {padding: 0px 0px;font-size: 14px;}
.idl24by7-copyright p {line-height: 1.2;}
}
@media(max-width:400px){
.idl24by7-header-site li {padding-right: 15px;}
.idl24by7-header-site {justify-content: space-between;}
}
@media(max-width:360px){
.idl24by7-header-site li {padding-right: 10px;}
}
/*add global*/
.idl24by7-body-main {padding: 45px 0px 30px;min-height: calc(100vh - 340px);}
.idl24by7-addwrapper{text-align:center;display:flex;justify-content:center;padding:10px 0 15px;width: 100%;}
.idl24by7-ads1{position:relative;min-height:110px;text-align:center;background-color:var(--addtotheme);min-width:728px;width:initial;margin:0 auto}
.idl24by7-ads1:before{content:"विज्ञापन";line-height:16px;color:#7d7d7d;font-size:11px;text-transform:uppercase;font-weight:400}
.idl24by7-streched{text-align:center;display:flex;justify-content:center;width: 100%;}
.idl24by7-add250{display:inline-block;position:relative;min-height:270px;background-color:var(--addtotheme);text-align:center;min-width:300px;margin:10px auto 20px}
.idl24by7-strechedmt0 .idl24by7-add250 {margin-top: 0px;}
.idl24by7-add250:before{content:"विज्ञापन";line-height:16px;color:#7d7d7d;font-size:11px;text-transform:uppercase;font-weight:400}
.idl24by7-videoic,.idl24by7-photoic,.idl24by7-webstiryic {position: relative;}
.idl24by7-videoic:after {content: ""; height: 20px; width: 20px; position: absolute; background-image: url('https://images.theindiadaily.com/uploadimage/library/free_files/png/play-ic-1719574302.png'); bottom: 4px; left: 3px; z-index: 2; background-color: var(--theme); padding: 3px; background-size: 13px; background-repeat: no-repeat; background-position: center center; border-radius: 4px; box-sizing: border-box;}
.idl24by7-photoic:after { content: ""; position: absolute; height: 20px; width: 20px; bottom: 4px; left: 4px; background-image: url("https://images.theindiadaily.com/uploadimage/library/free_files/png/gallery-ic-1719575088.png"); background-size: 13px; background-position: center center; z-index: 3; background-repeat: no-repeat; background-color: var(--theme); border-radius: 4px; box-sizing: border-box; }
.idl24by7-webstiryic:after { content: ""; position: absolute; height: 20px; width: 20px; bottom: 4px; left: 4px; background-image: url("https://images.theindiadaily.com/uploadimage/library/free_files/png/websto-1719574368.png"); background-size: 25px; background-position: -4px -3px; z-index: 3; background-repeat: no-repeat; background-color: var(--theme); border-radius: 4px; box-sizing: border-box;}
.idl24by7-livearticle {background-color: var(--livehilight);}
.idl24by7-livearticle h3 {text-indent: 20px;position: relative;}
.idl24by7-livearticle h3:before {content: "";display: inline-block;background: #c70000;border-radius: 50%;box-shadow: 0 0 0 0 #c70000;height: 6px;width: 6px;transform: scale(1);animation: pulse-red 2s infinite;top: 7px;position: absolute;left: 7px;}
@media(max-width: 1100px) and (min-width: 900px){
    .idl24by7-body-content .idl24by7-ads1 {transform: scale(.7);}
}
@media(min-width:768px){
    .idl24by7-mobile-add{display: none !important}
}
@media(max-width:767px){
    .idl24by7-desktop-add{display: none !important}
}
@media(max-width:749px){
    .idl24by7-body-main {padding: 15px 0px 20px;}
}
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'index.php') { ?>
.idl24by7-section {padding: 30px 0px;}
.idl24by7-sectionp0 {padding: 0px 0px;}
.idl24by7-sectionpt0 {padding-top: 0px;}
.idl24by7-sectionpb0 {padding-bottom: 0px;}
.idl24by7-sticky-top {position: sticky;top: 60px;}
.idl24by7-grid-all{padding:0 15px;width:calc(33.333% - 110px)}
.idl24by7-grid-add{width:330px;padding:0 15px}
.idl24by7-home-grid-outer{padding-top:15px}
.idl24by7-home-title{display:flex;justify-content:space-between;align-items:center}
.idl24by7-home-title h2,.idl24by7-home-title h3{margin:0;font-size:20px;font-weight:600;color:var(--primary)}
.idl24by7-home-more{font-size:13px;border:1px solid var(--bordersecondry);border-radius:20px;padding:5px 10px;line-height:1;color:var(--redtodddddd);margin:0}
.idl24by7-home-title a{text-decoration:none}
/*widigits9*/
.idl24by7-home-vlist{margin:0;padding:0;list-style-type:none}
.idl24by7-home-vlist li{display:block}
.idl24by7-home-vlist li a{padding-top:10px;border-bottom:1px solid var(--bordersecondry);padding-bottom:10px;display:block}
.idl24by7-home-vlist li:first-child a {padding-top: 0px;}
.idl24by7-home-body{padding-top:7px}
.idl24by7-home-body h3{margin:0;color:var(--primary);font-size:18px;font-weight:500;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;line-height:1.5}
.idl24by7-home-vlist li a:hover{text-decoration:none}
.idl24by7-home-vlist li a:hover h3{color:var(--hover)}
.idl24by7-home-vlist li:first-child .idl24by7-home-img{display:block;position:relative;padding-bottom:57%}
.idl24by7-home-vlist li:first-child .idl24by7-home-img img{border-radius:3px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1;box-shadow:0 0 5px -1px #ddd;}
.idl24by7-home-vlist li:not(:first-child) a{display:flex;align-items:center;flex-direction:row-reverse}
.idl24by7-home-vlist li:not(:first-child) .idl24by7-home-img{width:115px;margin-bottom:0;position:relative;min-height: 68px;max-height: 68px;}
.idl24by7-home-vlist li:not(:first-child) .idl24by7-home-body{width:calc(100% - 115px);padding-top:0;padding-right:5px}
.idl24by7-home-vlist li:not(:first-child) .idl24by7-home-img img{max-width:100%;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1;border-radius:3px;min-height: 57px;}
.idl24by7-home-vlist li:not(:first-child) .idl24by7-home-body h3{-webkit-line-clamp:3;line-height:1.4;font-weight:500;font-size:15px;}
/*widigits8*/
.idl24by7-webstoryhome-cards{margin:0 -10px;padding:0px 0px 10px;list-style-type:none;display:flex;overflow-y: hidden;overflow-x: auto;scroll-behavior: smooth;}
.idl24by7-webstoryhome-cards::-webkit-scrollbar {height: 0;width: 0;}
.idl24by7-widhome-webstory-title{background-color:var(--white);box-shadow:0 0 6px 0 rgba(0,0,0,0.10);padding:.62rem;width:90%;position:absolute;bottom:0;left:5%;z-index:2;min-height:68px}
.idl24by7-webstoryhome-cards li a{position:relative;padding-bottom:33px;display:block}
.idl24by7-widhome-webstoryimg img{max-width:100%;height:auto;width:100%;max-height:300px;min-height:300px;object-fit:cover}
.idl24by7-webstoryhome-cards li{width:20%;padding:0 10px;min-width: 225px;}
.idl24by7-widhome-webstory-title h5{color:var(--black);overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;font-weight:600;line-height:1.4;font-size:16px;margin:0}
.idl24by7-webstoryhome-cards li a:hover .idl24by7-widhome-webstory-title h5{color:var(--hover);}
.idl24by7-webstoryhome-wisits{width:100%}
.idl24by7-widhome-webstoryimg{position:relative;border: 1px dashed #8f8f8f;z-index: 0;}
.idl24by7-webstoryhome-wisits .idl24by7-home-title {margin-bottom: 20px;}
.idl24by7-widhome-webstoryimg:before{content: ""; position: absolute; height: 26px; width: 26px; top: 7px; right: 8px; background-image: url("https://images.theindiadaily.com/uploadimage/library/free_files/png/websto-1719574446.png"); background-size: 29px; background-position: -3px -2px; z-index: 3; background-repeat: no-repeat; background-color: var(--whitetowhite); border-radius: 50%; box-sizing: border-box;}
@media(max-width:749px){
.idl24by7-webstoryhome-wisits {overflow: hidden; width: calc(100% + 0px);}
}
/*widigits7*/
.idl24by7-home-videowrap{display:flex;flex-wrap:wrap;padding-top:10px;align-items:center;width:100%}
.idl24by7-home-videolrft,.idl24by7-home-videoright{margin:0;padding:0px 5px;list-style-type:none;width:42%;display:flex;flex-wrap: wrap;}
.idl24by7-home-videocenter{margin:0;padding:0 15px;width:58%;list-style-type:none}
.idl24by7-home-videolrft .idl24by7-home-videocard,.idl24by7-home-videoright .idl24by7-home-videocard{width:100%;display:block;position:relative;padding-bottom:56.4%}
.idl24by7-home-videocard img{border-radius:1px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1;border:1px solid var(--bordersecondry)}
.idl24by7-home-videocenter .idl24by7-home-videocard{width:100%;display:block;position:relative;padding-bottom:56.4%}
.idl24by7-blackbg{background-color:var(--themebg)}
.idl24by7-home-videobody h2{margin:0;color:var(--whitetowhite);font-size:16px;line-height:1.5;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden}
.idl24by7-home-videolrft li,.idl24by7-home-videoright li{padding: 7px 10px;width: 50%;}
.idl24by7-home-videocenter li{padding:10px 0}
.idl24by7-home-videolrft .idl24by7-home-videobody,.idl24by7-home-videoright .idl24by7-home-videobody{padding-top:10px}
.idl24by7-blackbg .idl24by7-home-title h2,.idl24by7-blackbg .idl24by7-home-title h3{color:var(--whitetowhite)}
.idl24by7-blackbg .idl24by7-home-more{color:var(--whitetowhite)}
.idl24by7-home-videocenter li a{display:block;position:relative}
.idl24by7-home-videocenter .idl24by7-home-videobody{position:absolute;bottom:0;z-index:2;min-height:100px;background-image:linear-gradient(#00000000,#000000c7);left:0;right:0;padding:20px 50px 20px 16px;display:flex;align-items:end}
.idl24by7-home-videocenter .idl24by7-home-videobody h2{font-size:22px}
.idl24by7-home-videocenter .idl24by7-videoic:after {height: 30px;width: 30px;background-size: 20px;left: auto;right: 6px;z-index: 9;bottom: 9px;}
/*widigits6*/
.gallery-section{padding:30px 0 40px;background-color:#fffcfc}
.idl24by7-gallery-overflow {overflow: hidden;padding-top: 10px;}
.idl24by7-gallery-default{display: flex; margin: 0 -10px; padding: 0; list-style-type: none; overflow-x: auto; scrollbar-width: none;}
.idl24by7-gallery-count{width: 20%; min-width: 250px; padding: 10px 10px;}
.idl24by7-gallery-imgcount {display: block; padding-left: 34px; font-size: 13px; color: var(--redtodddddd); margin-top: 3px; position: relative;} 
.idl24by7-gallery-imgcount:before {content: ""; background-image: url("https://images.theindiadaily.com/uploadimage/library/free_files/png/photoicon-1719574933.png"); background-position: center center; background-repeat: no-repeat; height: 16px; width: 16px; display: inline-block; position: absolute; left: 12px; top: 1px; background-size: 16px;}
.idl24by7-items-in figure{display: block; margin: 0; width: 100%; overflow: hidden;}
.idl24by7-items-in figure img{max-width: 100%; display: block;height: auto; width: 100%; transition: all .8s; transform: scale(1);}
.idl24by7-items-in:hover figure img {transform: scale(1.1);}
.idl24by7-items-in{display: block;}
.idl24by7-gallery-headlines{padding: 0.625rem; background-color: var(--white); min-height: 113px;}
.idl24by7-gallery-headlines h5{padding: 0 10px; font-size: 16px; line-height: 1.5; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden; margin: 0px;}
.idl24by7-items-in:hover{text-decoration: none;}
.idl24by7-items-in:hover .idl24by7-gallery-headlines h5 {color: var(--hover);}
.idl24by7-gallery-default::-webkit-scrollbar {width: 0px;height: 0px;}
.idl24by7-galbg {background-color: var(--graytotheme);padding-top: 25px;padding-bottom: 10px;}
/*widigits5*/
.idl24by7-grid-layoutmain{width:50%;padding:0 15px;}
.idl24by7-grid-layoutsec{display:flex;padding-top: 20px;}
.idl24by7-grid-layoutfrist{padding-right:15px;width:50%}
.idl24by7-grid-layoutsecond{width:50%}
.idl24by7-grid-layoutitm{margin-bottom:10px;border-bottom:1px solid var(--bordersecondry);padding-bottom:11px}
.idl24by7-grid-layoutfrist .idl24by7-absolute-contentitm:last-child {border-bottom: 0px;padding-bottom: 0px;}
.idl24by7-grid-layoutfrist .idl24by7-absolute-contentitm {padding-bottom: 9px;margin-bottom: 9px;}
.idl24by7-absolute-contentitm .idl24by7-grid-layoutitm-in{display:block;position:relative}
.idl24by7-grid-layoutitm-in{display:flex;align-items:center;flex-direction: row-reverse;}
.idl24by7-absolute-contentitm .idl24by7-grid-img-absolute{width:100%;padding-bottom:55.5%;min-height:162px;max-height:162px}
.idl24by7-grid-img-absolute{width:115px;display:block;position:relative;min-height:68px;max-height:68px}
.idl24by7-grid-img-absolute img{border-radius:3px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1}
.idl24by7-grid-contentmain{width:calc(100% - 115px);padding-right:10px}
.idl24by7-absolute-contentitm .idl24by7-grid-contentmain{width:100%;position:absolute;bottom:0;z-index:2;padding:35px 10px 10px;background:linear-gradient(180deg,rgba(0,0,0,0) 0,#000 58.85%,#000 70.83%,#000 100%);border-radius:0 0 3px 3px}
.idl24by7-grid-contentmain h3{line-height:1.4;margin:0;padding:0;font-weight: 500;font-size:15px;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3;overflow:hidden}
.idl24by7-absolute-contentitm .idl24by7-grid-contentmain h3{margin:0;color:var(--whitetowhite);font-size:17px}
.idl24by7-grid-layoutitm:hover h3{color:var(--hover)}
.idl24by7-absolute-contentitm.idl24by7-grid-layoutitm:hover h3{color:var(--whitetowhite)} 
/*widigits4*/
.idl24by7-story-widgelft {width: calc(100% - 330px);}
.idl24by7-story-widget {display: flex;flex-wrap: wrap;padding-top: 20px;}
.idl24by7-left-sec{width:50%;padding:0 15px}
.idl24by7-right-sec{width:50%;padding:0 15px}
.idl24by7-thumb-listing{margin:0;padding:0;list-style-type:none}
.idl24by7-thumb-listing li{margin-bottom:10px;border-bottom:1px solid var(--bordersecondry);padding-bottom:10px}
.idl24by7-thumb-listing li a{display:flex;align-items:center;flex-wrap:wrap}
.idl24by7-thumb{width:170px;display:block;position:relative;min-height: 100px;max-height: 100px;}
.idl24by7-thumb img{border-radius:3px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1}
.idl24by7-thumb-title{width:calc(100% - 170px);padding-left:15px}
.idl24by7-thumb-title h3{line-height:1.4;font-size:19px;color:var(--primary);font-weight:600;padding:0;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3;overflow:hidden;margin:0}
.idl24by7-thumb-listing li a:hover .idl24by7-thumb-title h3{color:var(--hover);}
.idl24by7-first-story .idl24by7-thumb-listing li:first-child .idl24by7-thumb{width:100%;padding-bottom:54%;min-height: 246px;}
.idl24by7-first-story .idl24by7-thumb-listing a{position:relative}
.idl24by7-first-story .idl24by7-thumb-listing li:first-child .idl24by7-thumb-title{position:absolute;bottom:0;z-index:2;left:0;right:0;width:100%;padding:35px 16px 15px;background:linear-gradient(180deg,rgba(0,0,0,0) 0,#000 58.85%,#000 70.83%,#000 100%)}
.idl24by7-first-story .idl24by7-thumb-listing li:first-child .idl24by7-thumb-title h3{color:var(--whitetowhite)}
.idl24by7-first-story .idl24by7-thumb-listing li:first-child a:hover .idl24by7-thumb-title h3{color:var(--whitetowhite)}
.idl24by7-right-sec .idl24by7-thumb-listing li {padding-bottom: 15px;margin-bottom: 15px;}
/*newsflesh*/
.idl24by7-flesh-data h3{margin:0;font-size:15px;line-height:24px;font-weight:400;color:var(--primary)}
.idl24by7-flesh-data a{color:var(--primary)}
.idl24by7-flesh-data a:hover{color:var(--hover)}
.idl24by7-newsflash{margin:0;padding:0;list-style-type:none;padding-top:6px;padding-left:24px;overflow-y:scroll;height:380px;color:#ef412f}
.idl24by7-newsflash li{padding:4px 0;position:relative;padding-right:6px}
.idl24by7-newsflash li:before{content:"";background-color:var(--bordersecondry);height:calc(100% - 14.4px);width:1px;position:absolute;left:-17px;border-radius:5px;top:20px}
.idl24by7-newsflash li:after{content:"";background-color:var(--redtored);height:8px;width:8px;position:absolute;left:-20px;top:8px;border-radius:55px}
.idl24by7-live-updates{padding-left:12px;padding-right:12px;padding-top:13px;background-color:var(--graytotheme);padding-bottom:6px}
.lidl24by7-ive-updatehead{padding-bottom:3px;border-bottom:1px solid var(--bordersecondry)}
.lidl24by7-ive-updatehead h2{margin:0px 0px 4px}
.lidl24by7-ive-updatehead h2 a{font-weight: 600; color: var(--hover); font-size: 20px; display: inline-block; position: relative; padding-left: 24px;}
.lidl24by7-ive-updatehead h2 a:before { content: ""; background-color: var(--redtored); height: 6px; width: 6px; border-radius: 50%; display: inline-block; position: absolute; left: 2px; top: 6px; border: 2px solid var(--white); outline: var(--redtored) solid 2px;animation: fleshpulse .9s infinite; }
.lidl24by7-ive-updatehead h2 img{margin-right:7px}
.idl24by7-newsflash::-webkit-scrollbar {width: .4em;height: .2em;}
.idl24by7-newsflash::-webkit-scrollbar-thumb {background-color: var(--bordersecondry);}
.idl24by7-newsflash::-webkit-scrollbar-track {background-color:var(--addtotheme);border-radius:10px}
@-webkit-keyframes fleshpulse{
0%{-webkit-box-shadow:0 0 0 0 rgb(255 0 0 / 40%)}
70%{-webkit-box-shadow:0 0 0 10px rgba(204,169,44,0)}
100%{-webkit-box-shadow:0 0 0 0 rgb(255 0 0 / 0%)}
}
@keyframes fleshpulse{
0%{-moz-box-shadow:0 0 0 0 rgb(255 6 6 / 40%);box-shadow:0 0 0 0 rgb(255 22 22 / 40%)}
70%{-moz-box-shadow:0 0 0 10px rgba(204,169,44,0);box-shadow:0 0 0 10px rgba(204,169,44,0)}
100%{-moz-box-shadow:0 0 0 0 rgba(204,169,44,0);box-shadow:0 0 0 0 rgba(204,169,44,0)}
}
/*widigits3*/
.idl24by7-widgetListing-Wrapper {padding-top: 15px;}
.idl24by7-latestNine-Wrapper .idl24by7-home-title h2 {color: var(--white);}
.idl24by7-latestNine-Wrapper .idl24by7-home-title a {color: var(--white);}
.idl24by7-latestNine-Wrapper{background-color: #08486e;padding:0.94rem;margin:0 30px 1.88rem 30px;position: relative;}
.idl24by7-latestNine-Wrapper::before{content: '';width: -webkit-fill-available;height: 20.5625rem;background-color: #ffcc01;display: block;margin: 3.125rem -30px;position: absolute;z-index:-1;left:0;right:0;}
.idl24by7-widgetListing-Wrapper ul{padding: 0px;margin: 0px;list-style: none;counter-reset: num-counter;border-top:1px solid rgb(194 194 194 / 30%);display:flex;flex-wrap:wrap;}
.idl24by7-widgetListing-Wrapper ul li {counter-increment: num-counter;display:flex;padding-bottom: 30px;padding-top: 30px;border-bottom:1px solid rgb(194 194 194 / 30%);width:30%; margin-right:5%}
.idl24by7-cardInfo-Wrapper{width:calc(100% - 50px);}
.idl24by7-widgetListing-Wrapper ul li:nth-child(3n+3){margin-right:0;}
.idl24by7-widgetListing-Wrapper ul li::before{content: counter(num-counter);color: var(--white);font-size: 1rem;font-weight:500;margin-right: 1.25rem;width: 30px;height: 30px;background-color: #c70100;border-radius:50%;display: flex;justify-content: center;align-items: center;}
.idl24by7-widgetListing-Wrapper ul li a{color: var(--white);font-size: 16px;font-weight: 400;line-height: 1.5;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;}
.idl24by7-widgetListing-Wrapper ul li a:hover{color: #ffcc01;}
.idl24by7-widgetListing-Wrapper ul li:nth-child(7),
.idl24by7-widgetListing-Wrapper ul li:nth-child(8),
.idl24by7-widgetListing-Wrapper ul li:nth-child(9){border-bottom:0;margin-bottom:0.94rem;padding-bottom:0;}
.idl24by7-blinker{background: #d80202;animation: pulse-red 2s infinite;display: inline-block;border-radius: 50%;box-shadow: 0 0 0 0 rgb(216 2 2);margin: 0 6px;height: 8px;width: 8px;transform: scale(1);position: relative;top: -3px;}
@keyframes pulse-red {
0% {transform: scale(.95);box-shadow: 0 0 0 0 rgba(216,2,2,.7)}
70% {transform: scale(1);box-shadow: 0 0 0 10px rgba(216,2,2,0)}
100% {transform: scale(.95);box-shadow: 0 0 0 0 rgba(216,2,2,0)}
}
/*widigits2*/
.idl24by7-home-grid3colwrp{margin:0px -15px;padding:20px 0 0;list-style-type:none;display:flex;flex-wrap:wrap}
.idl24by7-home-grid3colwrp li{width:50%;padding:0 15px}
.idl24by7-home-grid3colwrp li a{display:flex;align-items:center;flex-direction:row-reverse;padding-top:10px;border-bottom:1px solid var(--bordersecondry);padding-bottom:10px}
.idl24by7-home-gridtitle3col{width:calc(100% - 115px);padding-top:0;padding-right:5px}
.idl24by7-home-gridimg3col{width:115px;margin-bottom:0;position:relative;min-height:68px;max-height: 68px;}
.idl24by7-home-gridimg3col img{max-width:100%;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1;border-radius:3px;min-height:57px}
.idl24by7-home-gridtitle3col h3{margin:0;color:var(--primary);font-size:15px;font-weight:500;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;line-height:1.4}
.idl24by7-home-grid3colwrp li a:hover .idl24by7-home-gridtitle3col h3{margin:0;color:var(--hover);}
.idl24by7-home-grid3colwrp li:nth-child(1) a,.idl24by7-home-grid3colwrp li:nth-child(2) a{display:block;padding-bottom:0;border-bottom:0;padding-top:0;}
.idl24by7-home-grid3colwrp li:nth-child(1) .idl24by7-home-gridimg3col,.idl24by7-home-grid3colwrp li:nth-child(2) .idl24by7-home-gridimg3col{display:block;padding-bottom:57%;width:100%}
.idl24by7-home-grid3colwrp li:nth-child(1) .idl24by7-home-gridimg3col img,.idl24by7-home-grid3colwrp li:nth-child(2) .idl24by7-home-gridimg3col img{border-radius:3px 3px 3px 0}
.idl24by7-home-grid3colwrp li:nth-child(1) .idl24by7-home-gridtitle3col,.idl24by7-home-grid3colwrp li:nth-child(2) .idl24by7-home-gridtitle3col{padding:10px;width:100%;background-color:var(--addtotheme)}
.idl24by7-home-grid3colwrp li:nth-child(1) .idl24by7-home-gridtitle3col h3,.idl24by7-home-grid3colwrp li:nth-child(2) .idl24by7-home-gridtitle3col h3{font-weight:600;font-size:18px}
/*widigits1*/
.idl24by7-grid-layout5 {width: 50%;padding: 0px 15px;}
.idl24by7-grid-layout5x2 {width: 50%;display: flex;flex-wrap: wrap;}
.idl24by7-home-grid2x {width: 50%;padding: 0px 15px;}
.idl24by7-home-grid2x .idl24by7-home-vlist li:first-child .idl24by7-home-body h3 {font-size: 19px;-webkit-line-clamp: 3;line-height: 1.444;}
.idl24by7-home-grid2x .idl24by7-home-vlist li:first-child .idl24by7-home-body {min-height: 88px;}
.idl24by7-home-grid2x .idl24by7-home-vlist {padding-top: 20px;}
.idl24by7-cityinfo-intIn{display:flex;flex-wrap:wrap;margin:0 -10px}
.idl24by7-cityinfo-grd{padding:0 10px;width:50%}
.idl24by7-cityinfo-content {padding-top: 10px;}
.idl24by7-cityinfo-grd:first-child{width:100%}
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itmimg{width:calc(50% - 10px)}
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itmTitle{width:calc(50% + 10px);padding-right:0;padding-left:15px}
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itmimg img{width:100%}
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itmTitle h3{font-size:22px;font-weight:600;margin-bottom:10px}
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itmTitle p{margin:0;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;font-weight: 500;}
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itm{flex-direction:inherit}
.idl24by7-cityinfo-itm{display:flex;flex-direction: row-reverse;align-items:center;text-decoration:none;outline:0;width:100%;padding:10px 0 10px;border-bottom:1px solid var(--bordersecondry)}
.idl24by7-cityinfo-itmimg{width:115px}
.idl24by7-cityinfo-itmimg img{border-radius:3px;max-width: 100%;height: auto;}
.idl24by7-cityinfo-itmTitle{width:calc(100% - 115px);padding-right:10px;}
.idl24by7-cityinfo-itmTitle h3{font-size:15px;font-weight:500;margin:0;line-height:1.4;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}
.idl24by7-cityinfo-itm:hover{text-decoration:none}
.idl24by7-cityinfo-itm:hover .idl24by7-cityinfo-itmTitle h3{color: var(--hover)}
.idl24by7-cityinfo-header{background-color:rgb(8 72 110);display:flex;position:relative;z-index:2;margin-top:15px;padding: 6px 15px 0px;}
.idl24by7-cityinfo-header ul{margin:0;padding:0;list-style-type:none;display:flex;overflow:hidden;scroll-behavior:smooth;flex:1}
.idl24by7-cityinfoClick{font-size:16px;font-weight:400;color:var(--white);padding:7px 15px;line-height:1.292;cursor:pointer;transition:all .5s;border-radius: 10px 10px 0px 0px;margin-right: 3px;}
.idl24by7-cityinfoClick.active,.idl24by7-cityinfoClick:hover{background-color:#d90000;color:var(--white)}
/*widigitsmain*/
.idl24by7-sports-sec {padding: 25px 20px;background-color: var(--graytotheme);width: 100%;}
.idl24by7-sports-sec .idl24by7-home-title h2, .idl24by7-sports-sec .idl24by7-home-title h3{color: var(--black);}
.idl24by7-sports-sec .idl24by7-home-more{color: var(--black)}
.idl24by7-co2grid-intIn{margin:0px -15px;padding:15px 0 0;list-style-type:none;display:flex;flex-wrap:wrap}
.idl24by7-co2grid-grd{width:33.333%;padding:0 15px}
.idl24by7-co2grid-itm{display:flex;align-items:center;flex-direction:row-reverse;padding-top:10px;border-bottom:1px solid var(--bordersecondry);padding-bottom:10px}
.idl24by7-co2grid-itmimg{width:115px;padding-bottom:17%;margin-bottom:0;position:relative;min-height:68px;max-height:68px}
.idl24by7-co2grid-itmTitle{width:calc(100% - 115px);padding-top:0;padding-right:5px}
.idl24by7-co2grid-itmimg img{max-width:100%;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1;border-radius:3px;min-height:57px}
.idl24by7-co2grid-itmTitle h3{margin:0;color:var(--primary);font-size:16px;font-weight:500;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;line-height:1.4}
.idl24by7-co2grid-itm:hover .idl24by7-co2grid-itmTitle h3{color: var(--hover)}
.idl24by7-co2grid-grd:nth-child(1) .idl24by7-co2grid-itm,.idl24by7-co2grid-grd:nth-child(2) .idl24by7-co2grid-itm, .idl24by7-co2grid-grd:nth-child(3) .idl24by7-co2grid-itm{display:block;padding-bottom:0;border-bottom:0;padding-top:0px}
.idl24by7-co2grid-grd:nth-child(1) .idl24by7-co2grid-itmimg,.idl24by7-co2grid-grd:nth-child(2) .idl24by7-co2grid-itmimg, .idl24by7-co2grid-grd:nth-child(3) .idl24by7-co2grid-itmimg{display:block;padding-bottom:57%;width:100%}
.idl24by7-co2grid-grd:nth-child(1) .idl24by7-co2grid-itmTitle,.idl24by7-co2grid-grd:nth-child(2) .idl24by7-co2grid-itmTitle, .idl24by7-co2grid-grd:nth-child(3) .idl24by7-co2grid-itmTitle{padding:10px 10px;width:100%;background-color:var(--white);min-height:73px;}
.idl24by7-co2grid-grd:nth-child(1) .idl24by7-co2grid-itmTitle h3,.idl24by7-co2grid-grd:nth-child(2) .idl24by7-co2grid-itmTitle h3, .idl24by7-co2grid-grd:nth-child(3) .idl24by7-co2grid-itmTitle h3{font-weight:600;font-size:19px;-webkit-line-clamp:2;}
.idl24by7-co2grid-grd:nth-child(1) .idl24by7-co2grid-itmimg img,.idl24by7-co2grid-grd:nth-child(2) .idl24by7-co2grid-itmimg img, .idl24by7-co2grid-grd:nth-child(3) .idl24by7-co2grid-itmimg img{border-radius:3px 3px 3px 0}
/*widigitstop*/
.idl24by7-adpadding {padding-left: 6px;padding-right: 6px;}
.idl24by7-topleftsection {flex: 1;max-width: 50.5%;padding: 0px 9px;}

.idl24by7-topleftsection2 {flex: 0 0 25.08%;padding: 0px 9px;}
/* .idl24by7-topleftsection,.idl24by7-topleftsection1,.idl24by7-topleftsection2 {flex: 1;max-width: calc((100% - 318px) / 3);box-sizing: border-box;padding: 0px 9px;} */
.idl24by7-topLeftitem-grid{width: 50%;padding: 0px 9px;}
.idl24by7-topLeftCardspace .idl24by7-topLeftitem-grid {width: 100%;padding: 0px 0px;}
.idl24by7-topLeftitem-grid a{text-decoration:none;display:flex;padding-top:11px;border-bottom:1px solid var(--bordersecondry);padding-bottom:11px;width:100%;align-items: center;flex-direction: row-reverse;}
.idl24by7-topLeftimages-wrap{min-height:68px;max-height:68px;position:relative;width:115px}
.idl24by7-topLeftcontent-wrap{flex:1;padding-right:10px;width:100%;position: relative;}
.idl24by7-topLeftCardInner {display: flex;flex-wrap: wrap;justify-content: space-between;}
.idl24by7-topLeftcontent-wrap h2,.idl24by7-topLeftcontent-wrap h3{margin:0 0 10px;font-size:15px;font-weight:500;line-height:1.4;margin-bottom:3px;color:var(--primary);display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden;}
.idl24by7-topLeftimages-wrap img{border-radius:3px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1}
.idl24by7-topLeftitem-grid.idl24by7-full-grid{position: relative;width: 100%;}
.idl24by7-topLeftitem-grid.idl24by7-full-grid a {display: block;position: relative;padding-top: 0px;}
.idl24by7-topLeftitem-grid.idl24by7-full-grid .idl24by7-topLeftimages-wrap{width:100%;min-height:352px;max-height:352px;padding-bottom: 56%;}
.idl24by7-topLeftitem-grid.idl24by7-full-grid .idl24by7-topLeftimages-wrap a img{box-shadow:0 0 5px -1px #ddd}
.idl24by7-topLeftitem-grid.idl24by7-full-grid .idl24by7-topLeftcontent-wrap{padding:11px 0px 0px;min-height:81px}
.idl24by7-topLeftitem-grid.idl24by7-full-grid .idl24by7-topLeftcontent-wrap h2,.idl24by7-topLeftitem-grid.idl24by7-full-grid .idl24by7-topLeftcontent-wrap h3{font-size:25px;font-weight:700;margin-bottom:0;-webkit-line-clamp: 2;}
.idl24by7-topLeftitem-grid a:hover h2, .idl24by7-topLeftitem-grid a:hover h3{color: var(--hover);}
.idl24by7-topLeftCard{display:flex;margin: 0px -9px;}
.idl24by7-topLeftitem-grid.idl24by7-full-grid .idl24by7-topLeftcontent-wrap img {border-radius: 4px;}
/*livetv*/
.idl24by7-content-tvTitle{text-align:center;display:flex;padding:0 0 10px}
.idl24by7-content-tvTitle a{display:flex;align-items:center;text-decoration:none;color:var(--hover)}
.idl24by7-tvhead{font-weight:700;font-size:20px;line-height:1;position:relative;padding-left:17px}
.idl24by7-tvhead:before,.idl24by7-tvhead:after{content: "";background-color: var(--redtored);height: 8px;width: 8px;border-radius: 50%;display: inline-block;box-shadow: 0 0 0 rgb(255 16 16 / 40%);animation: livetv 1s linear infinite;position: absolute;left: 0;top: 7px;}
.idl24by7-tvhead:after {content: "";animation: livetv 1.4s linear infinite;}
@-webkit-keyframes livetv{
0%{-webkit-box-shadow:0 0 0 0 rgb(255 0 0 / 40%)}
70%{-webkit-box-shadow:0 0 0 10px rgba(204,169,44,0)}
100%{-webkit-box-shadow:0 0 0 0 rgb(255 0 0 / 0%)}
}
@keyframes livetv{
0%{-moz-box-shadow:0 0 0 0 rgb(255 6 6 / 40%);box-shadow:0 0 0 0 rgb(255 22 22 / 40%)}
70%{-moz-box-shadow:0 0 0 10px rgba(204,169,44,0);box-shadow:0 0 0 10px rgba(204,169,44,0)}
100%{-moz-box-shadow:0 0 0 0 rgba(204,169,44,0);box-shadow:0 0 0 0 rgba(204,169,44,0)}
}
.idl24by7-live-window{display:block;position:relative;padding-bottom:calc(69% - 30px);border-radius:4px;overflow:hidden;min-height: 180px;}
.idl24by7-vgrPlayer{border-radius:5px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1}
.idl24by7-videoContainer{height: 100%;width: 100%;}
.idl24by7-videoContainer iframe {height: 100%;width: 100%;border: none;outline: none;}
.idl24by7-latestNews-grid {padding-top: 14px;}
.idl24by7-latestNews-grid .idl24by7-home-title {border-bottom: 1px solid var(--bordersecondry);padding-bottom: 7px;margin-bottom: 3px;}
.idl24by7-lastadd {width: 318px;padding: 0px 9px;box-sizing: border-box;}
.idl24by7-lastadd .idl24by7-streched:first-child .idl24by7-add250 {margin-top: 0px;}
.idl24by7-lastadd .idl24by7-add250 {margin-bottom: 10px;}
.idl24by7-liveb-home {margin-bottom: 11px;}
.idl24by7-livebtitle{font-size:16px;line-height:1.4;position:relative;font-weight:700;display: flex;}
.idl24by7-livebtitle a{color:var(--black);display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;text-indent: 7px;margin-left: -9px;}
.idl24by7-livebtitle a:hover{color:var(--hover);}
.idl24by7-livebtitle:before{content:"";display:inline-block;background:#c70000;border-radius:50%;box-shadow:0 0 0 0 #c70000;margin:0 7px 0 0;height:7px;width:7px;min-width:7px;transform:scale(1);animation:pulse-red 2s infinite;top:9px;position:relative}
.idl24by7-liveblist{margin:0;padding:0;list-style-type:none;padding-left:15px;max-height:166px;overflow-x:auto;overflow-y:auto;position:relative}
.idl24by7-livebitem{position:relative;padding-top:10px;border-bottom:1px solid var(--bordersecondry);list-style:none}
.idl24by7-livebitem:first-child{padding-top:0}
.idl24by7-livebitem:before{content:'';border-left:2px dotted var(--bordersecondry);position:absolute;top:3px;left:-11px;width:1px;height:100%}
.idl24by7-livebitem:after{content:'';width:7px;height:7px;position:absolute;top:12px;left:-14px;border-radius:10px;background:var(--redtored);box-sizing:border-box}
.idl24by7-livebitem:first-child:after{top:3px}
.idl24by7-livebtime{color:var(--lightblackwhite);font-size:12px;line-height:1;font-weight:400;margin-bottom:6px;display:block}
.idl24by7-livebitem h3{margin-bottom:4px;font-size:15px;line-height:1.5;font-weight:500}
.idl24by7-liveblist::-webkit-scrollbar{width:4px;}
.idl24by7-liveblist::-webkit-scrollbar-thumb{background-color:var(--bordersecondry);border-radius:10px}
.idl24by7-liveblist::-webkit-scrollbar-track{background-color:var(--addtotheme);border-radius:10px}
.idl24by7-selfadver{margin-top:12px}
.idl24by7-selfadver a{display:block}
.idl24by7-selfadver img{max-width:100%;display:block;margin:0 auto}
.idl24by7-lastadd .idl24by7-latestNews-grid {padding-top: 0px;}
.idl24by7-liveb-home + .idl24by7-topLeftCardspace .idl24by7-topLeftitem-grid a {padding-top: 11px;padding-bottom: 11px;}
.idl24by7-liveb-home + .idl24by7-topLeftCardspace .idl24by7-topLeftitem-grid:first-child a {padding-top: 0px;}
.idl24by7-topLeftCardspace .idl24by7-topLeftitem-grid a {padding-top: 8px;padding-bottom: 7px;}
.idl24by7-topLeftCardspace .idl24by7-topLeftitem-grid:first-child a {padding-top: 0px;}
/*topslider*/
.idl24by7-carousel-Secondry{position:relative;max-width:100%;margin:0;overflow:hidden;box-shadow:0 0 2px 0 #ddd;border-radius:3px;margin-bottom:0;background-color: var(--graytotheme);}
.idl24by7-carousel-Container{display:flex;transition:all .5s ease-in-out}
.idl24by7-slide-secondry a{text-decoration:none;display:block;position: relative;}
.idl24by7-slider-body{padding:15px 13px 10px;position: absolute;bottom: 0px;background:linear-gradient(0deg, rgb(0 0 0 / 63%) 40%, rgb(0 0 0 / 4%) 98%);}
.idl24by7-slider-body h3{margin:0;padding:0;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;line-height:1.5;font-size:15px;color: var(--whitetowhite);}
.idl24by7-slider-button{background-color:rgb(255 255 255 / 44%);color:#fff;border:none;font-size:20px;cursor:pointer;height:30px;width:30px;line-height:36px;border-radius:50%;text-align:center;position:absolute;top:36%;z-index:2}
.idl24by7-slider-button svg{height:15px;width:15px;position:relative;top:-3px;left: -1px;}
#idl24by7-nextrit svg {left: 1px;}
.idl24by7-slider-button:hover{background-color:rgb(255 255 255 / 79%)}
.idl24by7-slide-secondry a:hover h3{color:var(--whitetowhite)}
.idl24by7-img-top {height: 240px;width: 100%;object-fit: cover;max-width: 100%;}
.idl24by7-slide-secondry {display: flex;border-radius: 10px;overflow: hidden;}
.idl24by7-slide-inn2 {padding: 2px;width: 50%;}
.idl24by7-slide-inn2 .idl24by7-webstiryic:after { bottom: auto; right: 4px; left: auto; top: 4px; border-radius: 50%; background-color: #000000; height: 22px; width: 22px; background-position: -3px -2px; }
#idl24by7-nextrit{right:9px}
#idl24by7-prevlft{left:9px}
/*home tab design*/
.idl24by7-home-tablemu{display:flex;border-bottom:1px solid var(--bordersecondry);align-items: center;}
.idl24by7-home-tablemuclick{padding:8px 18px;line-height:1.3;border-radius:10px 10px 0 0;font-weight:600;cursor:pointer;margin-right:2px}
.idl24by7-home-tablemuclick.active,.idl24by7-home-tablemuclick:hover{background-color:var(--tabbackcolor);color:var(--whitetowhite)}
.idl24by7-home-tabcontentitem .idl24by7-cityinfo-content{padding-top:4px}
.idl24by7-home-tablemu .idl24by7-home-more { margin-left: auto; margin-bottom: auto; }
.idl24by7-home-tabcontentitem:not(.active){display:none}
/*all home responsive here*/
@media(max-width: 1024px){
.idl24by7-topleftsection {max-width: 100%;width: 100%;flex: 100%;}
.idl24by7-lastadd {width: 50%;min-width: 318px;padding-top: 20px;}
.idl24by7-topleftsection2 {padding-top: 20px;flex: 0 0 50%;}
.idl24by7-grid-layout5{width:100%;width:100%}
.idl24by7-grid-layout5x2{width:100%;padding-top:25px}
.idl24by7-grid-layout5 + .idl24by7-grid-layout5{padding-top:25px}
.idl24by7-grid-layoutmain{width:100%}
.idl24by7-grid-layoutmain + .idl24by7-grid-layoutmain{padding-top:25px}
.idl24by7-grid-all{width:50%;flex: 1;}
.idl24by7-grid-add{max-width: 50%;min-width:330px;width: 100%;}
.idl24by7-story-widgelft{width:100%}
.idl24by7-story-widgelft + .idl24by7-grid-add{width:100%;max-width: 100%;}
.idl24by7-newsflash{height:auto;overflow:hidden}
.idl24by7-latestNine-Wrapper::before { margin: 3.125rem -14px;}
.idl24by7-latestNine-Wrapper {margin: 0 18px 1.88rem 14px;}
.idl24by7-topLeftitem-grid.idl24by7-full-grid .idl24by7-topLeftimages-wrap {min-height: auto;max-height: 352px;padding-bottom: 56%;}
}
@media(max-width: 680px){
.idl24by7-topLeftitem-grid.idl24by7-full-grid .idl24by7-topLeftimages-wrap{padding-bottom:56%}
.idl24by7-topleftsection,.idl24by7-topleftsection1,.idl24by7-topleftsection2{flex:100%;max-width:100%}
.idl24by7-livebtitle:before{margin:0 14px 0 0}
.idl24by7-latestNews-grid{padding-top:25px}
.idl24by7-lastadd{width:100%}
.idl24by7-livebtitle{margin-bottom:20px;font-size:19px}
.idl24by7-liveblist{height:auto;max-height:100%;overflow:hidden;padding-bottom:18px}
.idl24by7-widgetListing-Wrapper ul li{width:100%;margin-right:0;padding-bottom:20px;padding-top:20px}
.idl24by7-latestNine-Wrapper::before{height:calc(100% - 128px)}
.idl24by7-co2grid-grd{width:100%}
.idl24by7-left-sec{width:100%}
.idl24by7-right-sec{width:100%}
.idl24by7-home-videolrft,.idl24by7-home-videoright{width:100%;padding: 0px 5px;}
.idl24by7-home-videocenter{width:100%}
.idl24by7-home-videocenter .idl24by7-home-videobody {position: static;background-image: none;padding: 10px 0px 0px;min-height: auto;}
.idl24by7-home-videocenter .idl24by7-videoic:after {left: 9px;right: auto;}
.idl24by7-topLeftitem-grid {width: 100%}
.idl24by7-home-videolrft li, .idl24by7-home-videoright li {padding: 7px 10px;}
}
@media(max-width: 580px){
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itm{flex-wrap:wrap}
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itmimg{width:100%}
.idl24by7-cityinfo-grd:first-child .idl24by7-cityinfo-itmTitle{width:100%;padding-left:0;padding-top:17px}
.idl24by7-cityinfo-grd{width:100%}
.idl24by7-home-grid2x{width:100%}
.idl24by7-home-grid3colwrp li{width:100%}
.idl24by7-grid-layoutfrist{width:100%;padding-right:0}
.idl24by7-grid-layoutsec{flex-wrap:wrap}
.idl24by7-absolute-contentitm .idl24by7-grid-contentmain{position:static;background:none;padding:10px 0 0}
.idl24by7-absolute-contentitm .idl24by7-grid-contentmain h3{color:var(--black)}
.idl24by7-absolute-contentitm.idl24by7-grid-layoutitm:hover h3{color:var(--black)}
.idl24by7-grid-layoutsecond{width:100%}
.idl24by7-grid-add{max-width:100%}
.idl24by7-grid-all{width:100%;flex:100%;margin-bottom:20px}
.idl24by7-home-tablemuclick {padding: 5px 10px;font-size: 15px;}
}

<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'categorypage.php' || $current_page == 'videocategory.php' || $current_page == 'photocategory.php' || $current_page == 'webstorypage.php' || $current_page == 'storypage.php' || $current_page == 'videostorypage.php' || $current_page == 'photostorypage.php' || $current_page == 'authorpage.php' || $current_page == 'tagpage.php' || $current_page == 'authorlisting.php' || $current_page == 'searchpage.php' || $current_page == 'livetv.php' || $current_page == 'topiclist.php') { ?>
/*sidebar css*/
.idl24by7-sidebar-column {margin-bottom: 22px;}
.idl24by7-sidebar-title{margin-bottom: 5px;display: flex;position: relative;align-items: center;}
.idl24by7-sidebar-title h3{margin:0;font-size:20px;color:var(--black);font-weight:600;white-space:nowrap}
.idl24by7-sidebar-title a{display: inline-block;text-decoration:none;margin-right: 10px;}
.idl24by7-sidebar-title .idl24by7-more { font-size: 13px; border: 1px solid var(--bordersecondry); border-radius: 20px; padding: 5px 10px; line-height: 1; color: var(--redtodddddd); margin: 0px; }
.idl24by7-sidebar-feeds{margin:0;padding:0px 0px 0px;list-style-type:none}
.idl24by7-article-title h4{margin:0;color:var(--primary);line-height:1.4;font-weight: 500;font-size: 15px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;}
.idl24by7-sidebar-feeds a{display:flex;padding:10px 0;flex-direction: row-reverse;}
.idl24by7-sidebar-feeds li{border-bottom:1px solid var(--bordersecondry)}
.idl24by7-sidebar-feeds a:hover h4{color:var(--hover)}
.idl24by7-article-title {padding-right: 5px;width: calc(100% - 125px);}
.idl24by7-sidebar-initm {width: 125px;}
.idl24by7-sidebar-initm img {width: 100%;height: auto;}
.idl24by7-line { flex: 1; border: 1px solid var(--bordersecondry); position: relative; top: 0px; }
@media(max-width: 600px){
    .idl24by7-sidebar-initm {width: 100px;height: 56px;}
    .idl24by7-article-title {padding-right: 7px;width: calc(100% - 100px);}
    .idl24by7-sidebar-feeds a {padding: 12px 0;}
}
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'categorypage.php' || $current_page == 'videocategory.php' || $current_page == 'photocategory.php') { ?>
    /*page bottom card*/
    .idl24by7-card-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:20px}
    .idl24by7-card-header h2{font-size:25px;margin:0 10px 0 0;font-weight:700}
    .idl24by7-card-header h2 a{color: var(--whitetowhite)}
    .idl24by7-card-moreLink{font-size:17px;line-height:1;color:var(--whitetowhite);margin:0}
    .idl24by7-horizontal-line{flex:1;border:1px solid var(--whitelight);position:relative;top:0}
    .idl24by7-webstory-cards{margin:0 -10px;padding:0px 0px 10px;list-style-type:none;display:flex;overflow-y: hidden;overflow-x: auto;scroll-behavior: smooth;}
    .idl24by7-webstory-cards::-webkit-scrollbar {height: 0;width: 0;}
    .idl24by7-wid-webstory-title{background-color:var(--white);box-shadow:0 0 6px 0 rgba(0,0,0,0.10);padding:.62rem;width:90%;position:absolute;bottom:0;left:5%;z-index:2;min-height:68px}
    .idl24by7-webstory-cards li a{position:relative;padding-bottom:33px;display:block}
    .idl24by7-wid-webstoryimg img{max-width:100%;height:auto;width:100%;max-height:300px;object-fit:cover}
    .idl24by7-webstory-cards li{width:25%;padding:0 10px;min-width: 200px;}
    .idl24by7-wid-webstory-title h5{color:var(--black);overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;font-weight:600;line-height:1.4;font-size:16px;margin:0}
    .idl24by7-webstory-wisits{background-color:var(--themebg);padding:25px 20px 20px;margin: 15px 0px;}
    .idl24by7-wid-webstoryimg{position:relative;border: 1px dashed #8f8f8f;z-index: 0;}
    .idl24by7-wid-webstoryimg:before{content: ""; position: absolute; height: 26px; width: 26px; top: 7px; right: 8px; background-image: url("https://images.theindiadaily.com/uploadimage/library/free_files/png/websto-1719574446.png"); background-size: 29px; background-position: -3px -2px; z-index: 3; background-repeat: no-repeat; background-color: var(--whitetowhite); border-radius: 50%; box-sizing: border-box;}
    @media(max-width:749px){
    .idl24by7-webstory-cards li {min-width: 225px;}
    .idl24by7-webstory-wisits {margin: 15px -15px;}
    }
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page !== 'index.php') { ?>
    /*grid devide css*/
    .idl24by7-right-sidbar{width:330px;padding:5px 15px}
    .idl24by7-left-content{width:calc(100% - 330px);padding:0 15px}
    .idl24by7-full-content {width: 100%;padding: 0px 15px 0px;display: block;}
    .idl24by7-mainbody-content{padding:30px 0}
    .idl24by7-body-title h1{margin:0;font-size:30px;font-weight:700;line-height:1.3}
    .idl24by7-body-title h2{margin:16px 0px 0px;font-size:20px;font-weight:500;line-height:1.5}
    .idl24by7-body-title{margin-bottom:10px}
    .idl24by7-body-content{padding-top:2px}
    .idl24by7-body-title.idl24by7-category-title {border-bottom: 1px solid var(--bordersecondry);padding-bottom: 7px;}
    @media(max-width:900px){
    .idl24by7-right-sidbar {width: 100%;padding-top: 30px;}
    .idl24by7-left-content {width: calc(100% - 0px);}
    }
    @media(max-width:767px){
    .idl24by7-body-title h1 {font-size: 26px;}
    .idl24by7-body-title h2 {font-size: 18px;}
    .idl24by7-full-content {padding: 0px 15px 0px;}
    }
    /*breadcrumb*/
    .idl24by7-breadcrumb{background:0 0;padding:0px 0;margin-top:0px;margin-bottom:10px;list-style:none}
    .idl24by7-breadcrumb.idl24by7-hasbg-breadcrumb{background-color:var(--addtotheme);padding: 5px 13px 5px;margin-bottom: 23px;}
    .idl24by7-center {text-align: center;}
    .idl24by7-breadcrumb>li{display:inline-block}
    .idl24by7-breadcrumb>li:last-child{color: var(--theme)}
    .idl24by7-breadcrumb>li+li:before{padding:0 5px;color:var(--lightdark);content:"/\00a0"; font-size: 13px;}
    .idl24by7-breadcrumb li a{color:var(--primary);font-size:16px;font-style:normal;font-weight:400;line-height:30px;letter-spacing:.16px}
    /*loadmore*/
    .idl24by7-loadmorewrap{text-align:center;padding:30px 0 20px}
    .idl24by7-loadmore{border:2px solid var(--redtodddddd);padding:13px 15px;font-size:17px;outline:0;line-height:1;background-color:var(--transparent);color:var(--redtodddddd);cursor:pointer;transition:all .8s;letter-spacing:.5px;min-width:200px;text-align:center;display:inline-block;border-radius:35px;font-weight:600}
    .idl24by7-loadmore:hover{background-color:var(--hover);color:var(--white);border-color:var(--hover)}

<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'storypage.php' || $current_page == 'videostorypage.php' || $current_page == 'photostorypage.php') { ?>
    /*feature images*/
    .idl24by7-story-feature{display:block}
    .idl24by7-story-feature img { max-width: 100%; width: 100%; display: block; margin: 0 auto;height: auto;}
    .idl24by7-story-feature iframe {max-width: 100%;height: 35vw;width:100%;display:block;border: none;}
    .idl24by7-cap-follow {display: flex;flex-direction: row;font-size: 15px;padding: 4px 5px 2px;border-bottom: 1px solid var(--lightdark);}
    .idl24by7-cap-follow b {padding-right: 5px;}
    /* story page content*/
    .idl24by7-editior-content {padding-top: 20px;}
    .idl24by7-editior-content p, .idl24by7-editior-content {font-size: 17px;line-height: 1.7;}
    .idl24by7-editior-content div[style] {margin-bottom: 10px !important;padding-bottom: 0px !important;}
    .idl24by7-editior-content img {max-width: 100%;}
    .idl24by7-editior-content iframe {border: none;}
    .idl24by7-editior-content p iframe:not(.instagram-media), .idl24by7-editior-content #vidgyor_iframe  {max-width: 100% !important;height: 35vw !important;width:100% !important;position: static !important;margin-top: 10px;}
    .idl24by7-editior-content > iframe:not(.instagram-media),.idl24by7-editior-content #vidgyor_iframe {margin-top: 10px !important;margin-bottom: 15px !important;max-width: 100% !important;height: 35vw !important;width:100% !important;position: static !important;}
    .idl24by7-editior-content .instagram-media-rendered{margin-top:10px !important;margin-bottom:15px !important;max-height:70vw;max-width:480px !important;position:static}
    .idl24by7-editior-content ul li, .idl24by7-editior-content ol li {font-size: 17px;line-height: 1.7;}
    .idl24by7-editior-content > ul, .idl24by7-editior-content > ol{padding-left: 20px;}
    /*fixed share*/
    .idl24by7-share-fixed{display:none;z-index:22;position:fixed;top:40%;right:0;background-color:#151515;padding:8px 6px;box-shadow:-2px 0 7px 4px #0000000f;border-radius:5px 0 0 5px;cursor:pointer;line-height: 1;}
    @media(max-width:1300px){
    .idl24by7-editior-content p iframe:not(.instagram-media),.idl24by7-editior-content #vidgyor_iframe  {height: 40vw !important;}
    .idl24by7-editior-content > iframe:not(.instagram-media),.idl24by7-editior-content #vidgyor_iframe {height: 40vw !important;}
    .idl24by7-story-feature iframe {height: 40vw;}
    }
    @media(max-width:900px){
    .idl24by7-editior-content p iframe:not(.instagram-media),.idl24by7-editior-content #vidgyor_iframe  {height: 49vw !important;}
    .idl24by7-editior-content > iframe:not(.instagram-media),.idl24by7-editior-content #vidgyor_iframe {height: 49vw !important;}
    .idl24by7-story-feature iframe {height: 49vw;}
    }
    /*also read*/
    .idl24by7-alsoread{padding:16px 16px;background:var(--addtotheme);margin-top:12px;margin-bottom:15px}
    .idl24by7-alsoread > h3{font-size:22px;font-weight:700;margin:0 0 12px;color:var(--primary);padding: 0px 5px;}
    .idl24by7-alsoread-slide{display:flex;overflow-y:hidden;overflow-x:auto;scroll-behavior: smooth;padding: 0px 0px 6px;margin:0px;list-style-type: none;}
    .idl24by7-alsoread-slide li{flex:1;padding:0 7px;min-width: 280px;}
    .idl24by7-alsoread-slide li a{display:flex;text-decoration:none;}
    .idl24by7-also-initm{display:block;min-height:64.13px;height:64.13px;max-height:64.13px;position:relative;width:115px;min-width:114px}
    .idl24by7-also-initm img{border-radius:5px 0px 0px 5px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1}
    .idl24by7-also-title{flex: 1;padding-left:12px;background-color: var(--white);display: flex;align-items: center;}
    .idl24by7-also-title h3{margin:0;line-height:1.5;font-size:15px;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3;overflow:hidden}
    .idl24by7-alsoread-slide li:not(:last-child){border-right:1px solid var(--bordersecondry)}
    .idl24by7-also-container{position:relative}
    .idl24by7-alsoread-slide::-webkit-scrollbar{height:0;width:0}
    /*highlight*/
    .idl24by7-hilights{border:1px solid var(--bordersecondry);padding:15px 15px 10px;margin-bottom:20px;margin-top:20px;background-color:var(--addtotheme)}
    .idl24by7-hilights h3{font-size:23px;font-weight:600;color:var(--primary);margin-bottom:20px;text-transform: capitalize;}
    .idl24by7-hilights ul{margin:0;padding:0;list-style-type:none}
    .idl24by7-hilights ul li,.idl24by7-hilights ul li a{color:var(--redtodddddd);font-weight:600}
    .idl24by7-hilights ul li{position:relative;padding-left:20px;margin-bottom:8px}
    .idl24by7-hilights ul li:before{content:"";height:5px;width:5px;display:inline-block;position:absolute;border:2px solid var(--primary);left:4px;top:10px;transform:rotate(45deg);border-left:0;border-bottom:0}
    .idl24by7-hilights ul li a{text-decoration:underline}

    /*story page author*/
    .idl24by7-auth-section{display:flex;margin-bottom:8px;align-items:center;padding-top: 10px;border-top: 1px solid var(--whitelight);}
    .idl24by7-auth-thumb{height:50px;width:50px;min-width:50px;border-radius:60px;box-shadow:0 0 1px 1px var(--light);overflow:hidden;padding:3px}
    .idl24by7-auth-thumb img{width:44px;height:44px;min-width:44px;object-fit:cover}
    .idl24by7-auth-profile{display:flex;flex-direction:column;justify-content:center;padding-left:11px}
    .idl24by7-auth-profile a{font-weight:600;font-size:16px;margin:4px 0 0 0;color: var(--primary);}
    .idl24by7-auth-date{font-weight:400;font-size:12px;margin:3px 0 0 0;display:block;color:var(--lightblackwhite)}
    .idl24by7-auth-date em{font-style:normal;font-weight:600;color:var(--black)}
    /*follow design*/
    .idl24by7-feature-share{display:flex;justify-content:center;margin-top:10px;margin-bottom:5px;position:relative}
    .idl24by7-feature-share:after,.idl24by7-feature-share:before{content:"";position:absolute;top:calc(50% + 0px);left:0;right:0;height:1px;background-color:var(--bordersecondry);z-index:-1;display:block}
    .idl24by7-wrap-cont{display: flex; justify-content: space-between; align-items: center; padding: 10px 16px; min-width: 310px; border: 1px solid var(--bordersecondry); background-color: var(--white);}
    .idl24by7-follow{width:auto;margin-bottom:0;border-right:1px solid var(--bordersecondry);padding-right:10px;position:relative;margin-top:1px;z-index:0;font-size:16px;line-height:26px;font-weight:600;white-space: nowrap;}
    .idl24by7-follow-itm{display:flex;align-items:center;width:calc(100% - 75px);justify-content:end}
    .idl24by7-follow-itm a{margin:0 7px;width:25px;height:25px;display:flex;padding:0;border-radius:100%;align-items:center;justify-content:center}
    .idl24by7-follow-itm a.idl24by7-followgoogle{width:auto;height:auto;padding:0}
    .idl24by7-follow-itm a.idl24by7-followgoogle img{width:33px;height:26px}
    .idl24by7-follow-itm a:last-child {margin-right: 0px;}
    /*author share design*/
    .idl24by7-followus-widget{position:relative;margin:2px 0;margin-left:auto;display:flex;align-items: center;}
    .idl24by7-follow-tool ul{position:absolute;top:100%;width:123px;background-color:var(--white);right:0;border:1px solid var(--bordersecondry);padding:0;margin:0;list-style-type:none;z-index: 2;opacity:0;visibility:hidden;pointer-events:none}
    .idl24by7-whatsapp-tool a{display:block;padding:8px 4px}
    .idl24by7-follow-tool{margin-left:10px;min-width:20px;text-align:center;padding:12px 5px 10px;cursor:pointer;position:relative}
    .idl24by7-whatsapp-tool svg{display:block;fill:#00CE55}
    .idl24by7-whatsapp-tool a:hover svg {fill: #0eac4f;}
    .idl24by7-follow-tool > svg{display:block;margin: 0 auto;}
    .idl24by7-follow-tool ul li{display:block}
    .idl24by7-follow-tool ul li a{display:flex;padding:9px 11px 7px;text-align:left;align-items:center;line-height:1}
    .idl24by7-follow-tool ul li svg,.idl24by7-follow-tool ul li img{margin-right:7px;position:relative;top:-1px}
    .idl24by7-follow-tool ul li a:hover{background-color:var(--addtotheme)}
    .idl24by7-follow-tool.idl24by7-active ul {opacity:1;visibility:visible;pointer-events:all}
    @media(max-width: 600px){
    .idl24by7-follow-tool {margin-left: 10px;}
    }
    /*related slider*/
    .idl24by7-rel-slider{background-color:var(--addtotheme);padding-bottom:17px;margin-top:25px;margin-bottom: 20px;}
    .idl24by7-rel-head{padding:13px 26px 7px;}
    .idl24by7-rel-head h4{font-size:23px;color:var(--primary);font-weight:600;margin: 0px;}
    .idl24by7-rel-wrapper{display:flex;overflow-y:hidden;overflow-x:auto;scroll-behavior: smooth;padding: 0px 0px 7px;scrollbar-width: none;}
    .idl24by7-rel-slide-itm{min-width:300px;padding:12px 10px 0px;width: 100%;max-width:300px;}
    .idl24by7-rel-slide-itm a{flex-wrap: wrap;display:flex;text-decoration:none;align-items:center}
    .idl24by7-rel-initm{display: block; padding-bottom: 55.6%; position: relative; width: 100%; min-width: 114px;}
    .idl24by7-rel-initm img{border-radius:5px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1}
    .idl24by7-rel-title{width:100%;padding-top:12px}
    .idl24by7-rel-title h3{margin:0;line-height:1.5;font-size:16px;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3;overflow:hidden}
    .idl24by7-rel-container{position:relative;padding: 0px 19px;}
    .idl24by7-rel-wrapper::-webkit-scrollbar{height:0;width:0;}
    .idl24by7-leftright-button{height:25px;width:25px;text-align:center;cursor:pointer;display:inline-block;position:absolute;top:-30px;z-index:3;}
    #idl24by7-rel-rightbutton{right:32px;}
    #idl24by7-rel-leftbutton {right: 70px;transform: rotate(180deg)}
    /*story tage*/
    .idl24by7-feature-tag{padding:10px 0;display:flex;}
    .idl24by7-feature-tag h4{font-weight: 700; font-size: 16px; width: 60px; margin: 0; padding-top: 6px;}
    .idl24by7-tagsbox{width:calc(100% - 60px);margin:0;padding:0;list-style-type:none;display:flex;flex-wrap: wrap;}
    .idl24by7-tagsbox li{padding:3px 4px}
    .idl24by7-tagsbox li a{display: block; background-color: var(--transparent); color: var(--black); padding: 4px 8px 4px; line-height: 1; border: 2px solid var(--theme); transition: all .3s; font-weight: 500; font-size: 13px;border-radius: 25px;}
    .idl24by7-tagsbox li a:hover{background-color:var(--white);color:var(--theme)}
    @media(max-width:749px){
    .idl24by7-share-fixed{display:block;}
    .idl24by7-followus-widget{display:none;}
    }
    /*liveupdate*/
    .idl24by7-live-updates{padding-top:20px}
    .idl24by7-livedetails-content{box-shadow:none;padding:0 20px 1px 30px;margin-bottom:20px;padding-bottom:5px;position:relative;color:var(--primary);font-size:18px;line-height:1.7}
    .idl24by7-livedetails-content h4{font-size:23px;font-weight:800;color:var(--black);margin-bottom:10px;margin-top:3px;line-height:1.5;letter-spacing:0;text-align:left}
    .idl24by7-livedetails-content:before{content:"";position:absolute;left:1px;top:7px;height:10px;width:10px;border-radius:50%;border:2px solid var(--hover);z-index:3;box-sizing:border-box}
    .idl24by7-livedetails-content:after{content:"";position:absolute;left:5px;top:20px;background-color:var(--hover);height:calc(100% + 4px);width:1px;border-radius:5px;z-index:2}
    .idl24by7-livedetails-content:last-child:after {height: calc(100% - 33px);}
    .idl24by7-livedetails-time{position:relative;align-items:center;margin-bottom:20px;display:flex}
    .idl24by7-livedetails-time:after{content:"";position:absolute;left:-19px;height:1px;top:12px;width:20px;background-color:var(--hover);display:inline-block}
    .idl24by7-livedetails-content:first-child .idl24by7-livedetails-time:before{width:57px;height:29px;background-repeat:no-repeat;content:"";background-image:url("https://images.theindiadaily.com/uploadimage/library/free_files/others/live_2023_11_13_062438.webp");background-size:86px;background-position:-14px -8px;margin-right:7px}
    .idl24by7-livedetails-time p{font-size:16px;color:var(--hover);padding:6px 12px 3px;border-radius:9px;border:1px solid var(--hover);display:inline-block;margin:0;line-height:1;font-weight:600}
    .idl24by7-livedetails-content>#vidgyor_iframe{position:static!important;width:100%;max-height:500px;min-height:32vw!important;height:32vw!important}
    .idl24by7-livedetails-content> iframe:not(.instagram-media,.twitter-tweet) {height: 40vw !important;}
    .idl24by7-livedetails-content.todays-news:first-child .idl24by7-livedetails-time::before{content:"LIVE NEWS & UPDATES";background-image:none;width:228px;font-size:20px;color:var(--hover);font-weight:700;padding:5px 7px 0;line-height:1;height:auto;margin-right:0}
        
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'categorypage.php' || $current_page == 'authorpage.php' || $current_page == 'tagpage.php') { ?>
    /*category page*/
    .idl24by7-cardGrid{margin:0 -10px;padding:0;list-style-type:none;display:flex;flex-wrap:wrap}
    .idl24by7-cardGrid .idl24by7-listitems{padding:10px;width:33.33333%}
    .idl24by7-cardImgWrap img{max-width: 100%;height: 100%;width: 100%;object-fit: cover;position: absolute;z-index: 1;}
    .idl24by7-cardGrid h2{margin:0;font-size:17px;line-height:1.5;padding:0 9px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}
    .idl24by7-cardGrid a{display:block;overflow:hidden;height:100%;background-color:var(--addtotheme);padding-bottom: 10px;}
    .idl24by7-cardImgWrap{margin-bottom: 12px;padding-bottom: 56.4%;position: relative;}
    .idl24by7-cardGrid a:hover{text-decoration:none}
    .idl24by7-cardGrid a:hover h2{color:var(--hover)}
    .idl24by7-cardImgWrap.idl24by7-video:after{content: "";height: 30px;width: 30px;position: absolute;background-image: url('https://www.theindiadaily.com/commondir/images/svg/vid-icon.svg');transform: translate(-50%, -50%);top: 50%;left: 50%;z-index: 2;background-size: cover;}
    @media(max-width:767px){
    .idl24by7-cardGrid .idl24by7-listitems {width: 50%;}
    }
    @media(max-width: 600px){
    .idl24by7-cardGrid .idl24by7-listitems{width:100%}
    .idl24by7-cardGrid .idl24by7-listitems:not(:first-child) a{display:flex;padding-bottom:0;background-color:transparent;flex-direction:row-reverse}
    .idl24by7-cardGrid .idl24by7-listitems:not(:first-child) .idl24by7-cardImgWrap{width:100px;padding-bottom:0px;margin-bottom:0;height: 56px;}
    .idl24by7-cardGrid .idl24by7-listitems:not(:first-child) .idl24by7-cardImgWraptitle{width: calc(100% - 100px)}
    .idl24by7-cardGrid .idl24by7-listitems:not(:first-child){padding-top:12px;padding-bottom:12px;border-bottom: 1px solid var(--bordersecondry);}
    .idl24by7-cardGrid .idl24by7-listitems:not(:first-child) .idl24by7-cardImgWraptitle h2{font-size:15px;padding-left:0;font-weight:500;line-height: 1.4;}
    }
    @media(max-width:480px){
    .idl24by7-cardGrid .idl24by7-listitems {width: 100%;}
    }
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'videocategory.php') { ?>
    /*video list page*/
    .idl24by7-videolist{margin:0px -10px;padding:0;list-style-type:none;display:flex;flex-wrap:wrap}
    .idl24by7-videolist .idl24by7-videolist-item{padding:10px;width:33.3333%}
    .idl24by7-videolist .idl24by7-videolist-item a{background-color: var(--addtotheme);position:relative;overflow:hidden;text-decoration:none;outline:0;width:100%;height: 100%;display: block;}
    .idl24by7-videothumb{width:100%;padding-bottom:56%;position:relative}
    .idl24by7-videothumb img{height:100%;width:100%;object-fit:cover;position:absolute;z-index:1}
    .idl24by7-videothumb:before{content:"";height:20px;width:20px;position:absolute;background-image:url("https://images.theindiadaily.com/uploadimage/library/free_files/png/play-ic-1719574302.png");left: 0px; bottom: 0px; z-index: 2; background-size: 15px; background-position: center; background-repeat: no-repeat; background-color: #c70100; border-radius: 0px 3px 0px 0px;}
    .idl24by7-videotitle{width:100%;padding:10px 10px 10px}
    .idl24by7-videotitle h3{margin:0;line-height:1.4;display:-webkit-box;-webkit-box-orient:vertical;overflow:hidden;font-weight:500;font-size:18px;-webkit-line-clamp:3;color:var(--primary)}
    .idl24by7-videolist .idl24by7-videolist-item a:hover h3{color:var(--hover)}
    @media(max-width:767px){
    .idl24by7-videolist .idl24by7-videolist-item {width: 50%;}
    }
    @media(max-width:600px){
    .idl24by7-videolist .idl24by7-videolist-item {width: 100%;}
    .idl24by7-videolist .idl24by7-videolist-item:not(:first-child) {padding-top: 7px;padding-bottom: 7px;}
    .idl24by7-videolist .idl24by7-videolist-item:not(:first-child) a {display: flex;padding-bottom: 0;background-color: transparent;flex-direction: row-reverse;}
    .idl24by7-videolist .idl24by7-videolist-item:not(:first-child) .idl24by7-videothumb {width: 125px;padding-bottom: 16.5%;margin-bottom: 0;}
    .idl24by7-videolist .idl24by7-videolist-item:not(:first-child) .idl24by7-videotitle {width: calc(100% - 125px);padding-left: 0px;}
    .idl24by7-videolist .idl24by7-videolist-item:not(:first-child) .idl24by7-videotitle h3 {font-size: 16px;padding-left: 0;font-weight: 400;}
    .idl24by7-videotitle h3 {font-size: 20px;}
    .idl24by7-videolist-item:not(:first-child) .idl24by7-videothumb:before {background-size: 15px;height: 20px;width: 20px;}
}
    @media(max-width:480px){
    .idl24by7-videolist .idl24by7-videolist-item {width: 100%;}
    }
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'webstorypage.php') { ?>
    /*webstory list*/
    .idl24by7-webstory{display:flex;flex-wrap:wrap;margin:0px -10px;padding:0;list-style-type:none}
    .idl24by7-webstoryitm {width:33.33%;padding:10px}
    .idl24by7-webstoryitm a{position: relative; padding-bottom: 33px; display: block;}
    .idl24by7-webstoryimg{position:relative}
    .idl24by7-webstoryimg:before { content: ""; position: absolute; height: 26px; width: 26px; top: 7px; right: 8px; background-image: url("https://images.theindiadaily.com/uploadimage/library/free_files/png/websto-1719574446.png"); background-size: 29px; background-position: -3px -2px; z-index: 3; background-repeat: no-repeat; background-color: var(--whitetowhite); border-radius: 50%; box-sizing: border-box; }
    .idl24by7-webstoryimg img{max-width: 100%; height: auto; width: 100%; max-height: 480px; object-fit: cover;}
    .idl24by7-webstory-title{background-color: var(--white); box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.10); padding: .62rem; width: 90%; position: absolute; bottom: 0; left: 5%; z-index: 2; min-height: 68px;}
    .idl24by7-webstory-title h5{color: var(--black); overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; font-weight: 600; line-height: 1.4; font-size: 16px; margin: 0;}
    @media(max-width:700px){
    .idl24by7-webstoryitm {width: 50%;}
    }
    @media(max-width:450px){
    .idl24by7-webstoryitm {width: 100%;}
    }     
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'photocategory.php') { ?>
    /*gallery css*/
    .idl24by7-gallery-list{margin:0px -10px;padding:0;list-style-type:none;display:flex;flex-wrap:wrap}
    .idl24by7-gallery-listitm{width:33.333%;padding:10px}
    .idl24by7-gallery-listitm a{display:block}
    .idl24by7-gallery-img{display:block;margin:0;width:100%;overflow:hidden}
    .idl24by7-gallery-img img{max-width:100%;display:block;height:auto;width:100%;transition:all .8s;transform:scale(1)}
    .idl24by7-gallery-title{padding:7px 0;background-color:var(--addtotheme);min-height:113px}
    .idl24by7-gallery-title h3{padding:0 10px;font-size:16px;line-height:1.5;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3;overflow:hidden;margin:0}
    .idl24by7-gallery-listitm a:hover .idl24by7-gallery-img img{transform:scale(1.1)}
    .idl24by7-gallery-listcount{display:block;padding-left:34px;font-size:13px;color:var(--redtodddddd);margin-top:3px;position:relative}
    .idl24by7-gallery-listcount:before{content:"";background-image:url('https://images.theindiadaily.com/uploadimage/library/free_files/png/photoicon-1719574933.png');background-position:center center;background-repeat:no-repeat;height:16px;width:16px;display:inline-block;position:absolute;left:12px;top:1px;background-size:16px}
    @media(max-width:767px){
    .idl24by7-gallery-listitm {width: 50%;}
    }
    @media(max-width:480px){
    .idl24by7-gallery-listitm {width: 100%;}
    .idl24by7-gallery-title {padding: 7px 0px 13px;min-height: auto;}
    }
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'photostorypage.php') { ?>
    .idl24by7-editior-content.idl24by7-tp-0{padding-top:0px;}
    .idl24by7-photo-content{padding:30px 0 5px}
    .idl24by7-photo-content h3, .idl24by7-photo-content h4 {font-weight: 600;}
    .idl24by7-photo-featured{position:relative;z-index: 0;}
    .idl24by7-galleryVertical{text-align:center;background-color:var(--addtotheme)}
    .idl24by7-photo-featured img{height:auto;width:100%;max-height:540px;object-fit:cover;display:block;margin:0 auto}
    .idl24by7-photo-featured.idl24by7-galleryVertical img{width:auto;max-width:100%}
    .idl24by7-photo-count{position:absolute;bottom:12px;padding:7px 10px 7px;background:var(--theme);color:var(--whitetowhite);right:0;line-height:1}
    .idl24by7-photo-featured.idl24by7-gallerySquire img {width: auto;}
    .idl24by7-photo-featured.idl24by7-gallerySquire {background-color:var(--addtotheme)}
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'authorpage.php' || $current_page == 'tagpage.php') { ?>
.idl24by7-profile{display:flex;margin-bottom:10px;border: 2px solid var(--bordercolor);}
.idl24by7-profile-img{flex:1;padding:20px;display:flex;justify-content:center;border-right:2px solid var(--bordersecondry)}
.idl24by7-profile-img img{width:200px;border-radius:200px;height:200px;object-fit:cover}
.idl24by7-profiletag .idl24by7-profile-img img { width: 285px; height: auto; display: block; margin: 0 auto; max-height: 160px; border-radius: 0px; }
.idl24by7-profile-contnet{flex:3;padding:16px 20px;display:flex;flex-direction:column;position:relative}
.idl24by7-profile-contnet h1{margin:0 0 13px;font-size:27px;color:var(--primary);font-weight:700}
.idl24by7-profile-contnet>a{font-size:17px;display:inline-block;margin-bottom:6px;font-weight:500;text-decoration:none;color:var(--lightblackwhite)}
.idl24by7-profile-desination{font-size:17px;color:var(--lightblackwhite)}
.idl24by7-profile-desination label{font-weight:600;display:inline-block;width:auto}
.idl24by7-profile-auth{font-size:16px;margin-top:6px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden;}
.idl24by7-profile-auth label,.idl24by7-profile-auth p{display:inline;line-height:1.6;font-size:16px}
.idl24by7-profile-social{position:absolute;top:16px;right:2%;display:flex;list-style-type:none;margin: 0px;padding: 0px;}
.idl24by7-profile-social a{font-size:17px;display:inline-block;font-weight:500;text-decoration:none;color:#565656}
.idl24by7-profile-social a img{filter:invert(1);height:17px;width:17px}
.idl24by7-profile-social li{padding:0 7px}
.idl24by7-scrollactive .idl24by7-profile-auth {display: block;}
.idl24by7-selfdetails-read{text-align:right;padding-top:10px;margin-top:-5px;position:relative;top:0}
.idl24by7-selfdetails-read button{font-size:12px;color:var(--hover);font-weight:700;text-decoration:none;background-color:transparent;outline:none;border:none;cursor:pointer}
.idl24by7-selfdetails-read button em{font-style:normal}
.idl24by7-scrollactive .idl24by7-selfdetails-read button:after{content:attr(data-button)}
.idl24by7-scrollactive .idl24by7-selfdetails-read button em{display:none}
.idl24by7-tagpg-tab {padding: 0px 0px 15px;}
.idl24by7-tagpg-tablemu{display:flex;border-bottom:1px solid var(--bordersecondry);align-items: center;max-width: 100%;overflow-y: hidden;overflow-x: auto;padding-top: 15px;}
.idl24by7-tagpg-tablemu::-webkit-scrollbar {height: 0;width: 0;}
.idl24by7-tagpg-tablemuclick{padding:8px 18px;line-height:1.3;border-radius:10px 10px 0 0;font-weight:600;cursor:pointer;margin-right:2px;border: 1px solid var(--bordersecondry);border-bottom: 0px;white-space: nowrap;}
.idl24by7-tagpg-tablemuclick.active,.idl24by7-tagpg-tablemuclick:hover{background-color:var(--tabbackcolor);color:var(--whitetowhite);border-color: var(--tabbackcolor);}
.idl24by7-tagpg-tabcontentitem .idl24by7-cityinfo-content{padding-top:4px}
.idl24by7-tagpg-tabcontentitem:not(.active){display:none}
@media(max-width:950px){
.idl24by7-profile-social {position: static;margin-left: -8px;margin-top: 4px;}
}
@media (max-width: 700px) {
    .idl24by7-tagpg-tablemu {position: sticky;top: 57px;z-index: 9;background-color: var(--white);}
}
@media(max-width: 600px){
.idl24by7-profile-social {margin-left: 0px;margin-top: 15px;}
.idl24by7-profile {flex-wrap: wrap;}
.idl24by7-profile-img {width: 100%;flex: 100%;border: 0px;}
.idl24by7-profile-contnet {padding-bottom: 10px;justify-content: center;align-items: center;text-align: center;}
.idl24by7-profile-img img {width: 150px;height: 150px;}
}
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'authorlisting.php') { ?>
.idl24by7-author-list{display:flex;flex-wrap:wrap;margin:0 -5px}
.idl24by7-author-listitm{width:25%;text-align:center;padding:5px}
.idl24by7-author-listin{background-color:var(--addtotheme);border:1px solid var(--bordersecondry);padding:20px 10px 14px;outline: none;display:block;height: 100%;}
.idl24by7-authorlist-img img{display:block;margin:0 auto;border-radius:50%;border:2px solid var(--bordersecondry);padding:2px;height: 100px;width: 100px;object-fit: cover;}
.idl24by7-authorinf h4{font-size:14px;font-weight:700;line-height:1.4;margin-bottom:5px;color: var(--primary);}
.idl24by7-authorinf p{margin-bottom:0;font-size:15px;color:var(--lightblackwhite)}
.idl24by7-authorinf{padding-top:10px}
@media(max-width: 1080px){
    .idl24by7-author-listitm {width: 33.3333%;}
}
@media(max-width: 580px){
    .idl24by7-author-listitm {width: 50%;}
}
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'searchpage.php') { ?>
.idl24by7-searchforimp{display:flex}
.idl24by7-searchforimp input{border:1px solid var(--searchborder);flex:1;padding:10px 10px;border-radius:2px 0 0 2px;outline:none;font-family: inherit;line-height: 1.2;font-size: 16px;background-color:var(--transparent);color: var(--primary)}
.idl24by7-searchforimp button{width:100px;background-color:var(--searchfocusborder);border:none;outline:none;color:var(--white);font-weight:600;font-size:19px;font-family:inherit;cursor:pointer;line-height:1;padding:10px 6px}
.idl24by7-searchfrom{margin-bottom:20px}
.idl24by7-searchforimp input:focus{border-color:var(--searchfocusborder)}
.idl24by7-search-items{width:100%}
.idl24by7-search-item{width:100%;display:flex;margin-bottom: 13px;border-bottom: 1px solid var(--bordersecondry);padding-bottom: 11px;}
.idl24by7-search-item:last-child {border: none;}
.idl24by7-search-img{width:250px;position:relative;padding-bottom:15%;display:block;max-height:141px}
.idl24by7-search-info{width:calc(100% - 250px);padding-left:20px}
.idl24by7-search-img img{border-radius:3px;height:100%;width:100%;object-fit:cover;position:absolute;z-index:1}
.idl24by7-search-date{color:var(--lightblackwhite);font-size:14px;font-weight:500;display:block}
.idl24by7-search-info h2{margin:10px 0;line-height:1.5}
.idl24by7-search-info h2 a{text-decoration:none;font-weight: 600;color:var(--primary);display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;font-size:20px}
.idl24by7-search-info p a{font-size:15px;text-decoration:none;font-weight:400;line-height:1.5;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;color:var(--primary);}
.idl24by7-search-info h2 a:hover{color:var(--hover)}
.idl24by7-search-info p:last-child{margin-bottom:0}
@media(max-width:980px){
.idl24by7-search-img {width: 178px;padding-bottom: 17.7%;max-height: 100px;}
.idl24by7-search-info {width: calc(100% - 178px);}
.idl24by7-search-info h2 a {font-size: 17px;}
}
@media(max-width:580px){
.idl24by7-search-img {width: 115px;padding-bottom: 75px;max-height: 75px;}
.idl24by7-search-info {width: calc(100% - 115px);padding-left: 15px;}
.idl24by7-search-info p a {-webkit-line-clamp: 3;}
}
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'livetv.php') { ?>
.idl24by7-livemorevideos h3 {font-weight: 700;}
.idl24by7-livetive iframe,.idl24by7-livemorevideos iframe{max-width:100%;border:3px solid var(--bordersecondry);border-radius:5px;width:100%;max-height:555px;height:auto;box-shadow:0 6px 15px -7px #848484;aspect-ratio:16 / 9}
.idl24by7-livetive{margin-bottom:20px}
.idl24by7-subscribe-btn{text-align:center;padding:20px 0}
.idl24by7-subscribe-btn a{display:inline-block;padding:10px 16px;background-color:#ba0000;color:#fff;text-decoration:none;border-radius:23px;font-weight:500;font-size:15px;line-height:1.3}
.idl24by7-subscribe-btn img{margin-right:3px;position:relative;top:-1px}
.idl24by7-subscribe-btn a:hover{background-color:var(--hover)}
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == '404page.php') { ?>
.idl24by7-page404-content {max-width: 600px;margin: 0 auto;display: block;text-align: center;}
.idl24by7-page404-title {font-size: 13vw; font-weight: 900; letter-spacing: 10px; margin-bottom: 20px; text-shadow: 5px 3px 0px rgb(199 2 0 / 66%); color: var(--primary);}
.idl24by7-page404-content h3 {font-size: 22px;margin-bottom: 18px;}
.idl24by7-page404-content p {line-height: 1.5;}
.idl24by7-backhomelink{display:inline-block;background-color:transparent;border:2px solid var(--themebg);border-radius:20px;padding:11px 30px;line-height:1;color:var(--primary);font-weight:600;text-decoration:none}
.idl24by7-backhomelinkwrp{text-align:center;margin-top:35px}
.idl24by7-backhomelink:hover{background-color:var(--themebg);color:#fff}
.idl24by7-page404 { padding-bottom: 20px; }
@media(max-width: 700px){
    .idl24by7-page404-title {font-size: 29vw;}
}
<?php } ?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'topiclist.php') { ?>
.idl24by7-alltopicpage{margin:0;padding:0 0 0 20px;display:flex;flex-wrap:wrap}
.idl24by7-alltopicpage li{padding-right:10px;width:33.3333%}
.idl24by7-alltopicpage li a{padding:6px 0;display:inline-block;font-weight:600;font-size:17px}
.idl24by7-alltopicpage li a:hover{color:var(--hover)}
@media(max-width: 1024px){
    .idl24by7-alltopicpage li {width: 50%;}
}
@media (max-width: 480px) {
    .idl24by7-alltopicpage li {width: 100%;}
    .idl24by7-alltopicpage {padding: 0 0 0 25px;}
}
<?php } ?>
<?php /*
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'tagpage.php') { ?>
.idl24by7-tagpg-tab {padding: 0px 0px 15px;}
.idl24by7-tagpg-tablemu{display:flex;border-bottom:1px solid var(--bordersecondry);align-items: center;max-width: 100%;overflow-y: hidden;overflow-x: auto;padding-top: 15px;}
.idl24by7-tagpg-tablemu::-webkit-scrollbar {height: 0;width: 0;}
.idl24by7-tagpg-tablemuclick{padding:8px 18px;line-height:1.3;border-radius:10px 10px 0 0;font-weight:600;cursor:pointer;margin-right:2px;border: 1px solid var(--bordersecondry);border-bottom: 0px;white-space: nowrap;}
.idl24by7-tagpg-tablemuclick.active,.idl24by7-tagpg-tablemuclick:hover{background-color:var(--themebg);color:#fff;border-color: var(--themebg);}
.idl24by7-tagpg-tabcontentitem .idl24by7-cityinfo-content{padding-top:4px}
.idl24by7-tagpg-tabcontentitem:not(.active){display:none}
@media (max-width: 700px) {
    .idl24by7-tagpg-tablemu {position: sticky;top: 57px;z-index: 9;background-color: var(--white);}
}
<?php } ?> */?>
<?php $current_page = basename($_SERVER['PHP_SELF']);
if ($current_page == 'staticpages.php') { ?>
.idl24by7-full-staticcontent {width: calc(100% - 20px); padding: 15px 15px 15px; display: block; max-width: 1000px; margin: 0 auto; background-color: var(--addtotheme);border: 1px solid var(--bordersecondry)}
.idl24by7-static-page h1{color:var(--hover);font-weight:700;font-size:32px;margin:0 0 20px;text-transform: capitalize;}
.idl24by7-static-page{padding-top:10px;line-height:1.7}
.idl24by7-static-page h3,.idl24by7-static-page h4{font-size:20px;margin:0 0 10px;font-weight:600}
.idl24by7-static-page h2{font-size:23px;margin:0 0 10px;font-weight:600}
.idl24by7-static-page h5 {font-size: 18px;margin: 0 0 10px;font-weight: 500;}
.idl24by7-static-page p {margin-bottom: 20px;text-align: justify}
<?php } ?>
</style>