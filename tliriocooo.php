<style>
@charset "UTF-8";.cmp-image__image{width:100%}
.cmp-breadcrumb{display:inline-block;list-style:none;padding:0}
.cmp-breadcrumb__item{display:inline-block;vertical-align:top}
.cmp-search{position:relative}
.cmp-search__field{position:relative;height:2rem}
.cmp-search__input{padding-left:2rem;padding-right:2rem;height:100%;width:100%}
.cmp-search__icon{display:block;position:absolute;left:.5rem;top:.5rem;background-image:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTE1MnB4IiBoZWlnaHQ9IjExNTJweCIgdmlld0JveD0iMCAwIDExNTIgMTE1MiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTE1MiAxMTUyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGQ9Ik02NzIsMEM0MDYuOTAzLDAsMTkyLDIxNC45MDMsMTkyLDQ4MGMwLDk1LjcsMjguMDExLDE4NC44NTUsNzYuMjc1LDI1OS43MjVDMTgxLjY0Niw4MjYuMzU0LDQ4LjA3NSw5NTkuOTI1LDM2LDk3Mg0KCWMtMTgsMTgtMzYsMzYtMzYsNzJzMTgsNTQsMzYsNzJzMzYuMDEyLDM2LDcyLDM2czU0LTE4LDcyLTM2YzEyLjA3NS0xMi4wNzUsMTQ1LjY0Ni0xNDUuNjQ2LDIzMi4yNzUtMjMyLjI3NQ0KCUM0ODcuMTQ0LDkzMS45ODgsNTc2LjMsOTYwLDY3Miw5NjBjMjY1LjA5NywwLDQ4MC0yMTQuOTAzLDQ4MC00ODBDMTE1MiwyMTQuOTAzLDkzNy4wOTcsMCw2NzIsMHogTTY3Miw4MTYNCgljLTE4NS41NjgsMC0zMzYtMTUwLjQzMy0zMzYtMzM2YzAtMTg1LjU2OCwxNTAuNDMyLTMzNiwzMzYtMzM2YzE4NS41NjcsMCwzMzYsMTUwLjQzMiwzMzYsMzM2QzEwMDgsNjY1LjU2Nyw4NTcuNTY3LDgxNiw2NzIsODE2eiINCgkvPg0KPC9zdmc+DQo=");background-size:contain;width:1rem;height:1rem;pointer-events:none}
.cmp-search__loading-indicator{display:none;position:absolute;top:.5rem;left:.5rem;border:3px solid #ccc;border-top-color:#333;border-radius:50%;width:1rem;height:1rem;animation:cmp-search__loading-indicator-spin 2s linear infinite}
@keyframes cmp-search__loading-indicator-spin{0{transform:rotate(0)}
100%{transform:rotate(360deg)}
}
.cmp-search__clear{display:none;margin:0;padding:0;border:0;background:transparent}
.cmp-search__clear-icon{position:absolute;top:.5rem;right:.5rem;background-image:url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTE1MnB4IiBoZWlnaHQ9IjExNTJweCIgdmlld0JveD0iMCAwIDExNTIgMTE1MiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMTE1MiAxMTUyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGlkPSJYTUxJRF85XyIgZD0iTTgyLjYsOTM3LjJsMzYyLTM2Mkw4NCwyMTQuOGMtMTQuMS0xNC4xLTE0LjEtMzYuOSwwLTUxbDgxLjItODEuMmMxNC4xLTE0LjEsMzYuOS0xNC4xLDUxLDBsMzYwLjUsMzYwLjUNCglMOTM3LjIsODIuNmMxNC4xLTE0LjEsMzYuOS0xNC4xLDUxLDBsODEuMiw4MS4yYzE0LjEsMTQuMSwxNC4xLDM2LjksMCw1MUw3MDguOSw1NzUuM2wzNjAuNSwzNjAuNWMxNC4xLDE0LjEsMTQuMSwzNi45LDAsNTENCglsLTgxLjIsODEuMmMtMTQuMSwxNC4xLTM2LjksMTQuMS01MSwwTDU3Ni43LDcwNy41bC0zNjIsMzYyYy0xNC4xLDE0LjEtMzYuOSwxNC4xLTUxLDBsLTgxLjItODEuMg0KCUM2OC41LDk3NC4yLDY4LjUsOTUxLjMsODIuNiw5MzcuMnoiLz4NCjwvc3ZnPg0K");background-size:contain;width:1rem;height:1rem}
.cmp-search__results{display:none;overflow-y:auto;min-width:100%;max-height:10rem;position:absolute;top:100%;left:0;z-index:999999;border:1px solid #ccc;background:#fff}
.cmp-search__item{display:block}
.cmp-search__item--is-focused{background-color:#ccc}
.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}
.slick-list{position:relative;overflow:hidden;display:block;margin:0;padding:0}
.slick-list:focus{outline:0}
.slick-list.dragging{cursor:pointer;cursor:hand}
.slick-slider .slick-track,.slick-slider .slick-list{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.slick-track{position:relative;left:0;top:0;display:block;margin-left:auto;margin-right:auto}
.slick-track:before,.slick-track:after{content:"";display:table}
.slick-track:after{clear:both}
.slick-loading .slick-track{visibility:hidden}
.slick-slide{float:left;height:100%;min-height:1px;display:none}
[dir="rtl"] .slick-slide{float:right}
.slick-slide img{display:block}
.slick-slide.slick-loading img{display:none}
.slick-slide.dragging img{pointer-events:none}
.slick-initialized .slick-slide{display:block}
.slick-loading .slick-slide{visibility:hidden}
.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}
.slick-arrow.slick-hidden{display:none}
.slick-loading .slick-list{background:#fff}
.slick-prev,.slick-next{position:absolute;display:block;height:20px;width:20px;line-height:0;font-size:0;cursor:pointer;background:transparent;color:transparent;top:50%;-webkit-transform:translate(0,-50%);-ms-transform:translate(0,-50%);transform:translate(0,-50%);padding:0;border:0;outline:0}
.slick-prev:hover,.slick-next:hover,.slick-prev:focus,.slick-next:focus{outline:0;background:transparent;color:transparent}
.slick-prev:hover:before,.slick-next:hover:before,.slick-prev:focus:before,.slick-next:focus:before{opacity:1}
.slick-prev.slick-disabled:before,.slick-next.slick-disabled:before{opacity:.25}
.slick-prev:before,.slick-next:before{font-family:"slick";font-size:20px;line-height:1;color:#fff;opacity:.75;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
@font-face{font-family:'slick';font-weight:normal;font-style:normal}
.slick-prev{left:-25px}
[dir="rtl"] .slick-prev{left:auto;right:-25px}
.slick-prev:before{content:"←"}
[dir="rtl"] .slick-prev:before{content:"→"}
.slick-next{right:-25px}
[dir="rtl"] .slick-next{left:-25px;right:auto}
.slick-next:before{content:"→"}
[dir="rtl"] .slick-next:before{content:"←"}
.slick-dotted .slick-slider{margin-bottom:30px}
.slick-dots{position:absolute;bottom:-25px;list-style:none;display:block;text-align:center;padding:0;margin:0;width:100%}
.slick-dots li{position:relative;display:inline-block;height:20px;width:20px;margin:0 5px;padding:0;cursor:pointer}
.slick-dots li button{border:0;background:transparent;display:block;height:20px;width:20px;outline:0;line-height:0;font-size:0;color:transparent;padding:5px;cursor:pointer}
.slick-dots li button:hover,.slick-dots li button:focus{outline:0}
.slick-dots li button:hover:before,.slick-dots li button:focus:before{opacity:1}
.slick-dots li button:before{position:absolute;top:0;left:0;content:"•";width:20px;height:20px;font-family:"slick";font-size:6px;line-height:20px;text-align:center;color:#000;opacity:.25;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.slick-dots li.slick-active button:before{color:#000;opacity:.75}
.independent-dots .slick-dots{position:static;bottom:54px;z-index:5}
.independent-dots .slick-dots li{width:10px;height:10px;margin:0 15px}
.independent-dots .slick-dots li button{background-color:#000;opacity:.5;border-radius:calc(5px);height:10px;width:10px;position:absolute}
.independent-dots .slick-dots li button.active-button{background:#000;z-index:2;opacity:1;width:40px;left:-15px}
.independent-dots .slick-dots li button::before{content:'';height:10px;width:10px}
.independent-dots .slick-dots.light-theme li button{background-color:#bcbec5;opacity:1}
.independent-dots .slick-dots.light-theme li button.active-button{background-color:#fff;opacity:1}
.independent-dots .slick-dots.dark-theme li button{background-color:#000;opacity:.5}
.independent-dots .slick-dots.dark-theme li button.active-button{background-color:#000;opacity:1}
@import url(https://fonts.googleapis.com/css?family=Palanquin:400,500,700&display=swap);/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}
body{margin:0}
article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}
audio,canvas,progress,video{display:inline-block;vertical-align:baseline}
audio:not([controls]){display:none;height:0}
[hidden],template{display:none}
a{background-color:transparent}
a:active,a:hover{outline:0}
abbr[title]{border-bottom:1px dotted}
b,strong{font-weight:bold}
dfn{font-style:italic}
h1{font-size:2em;margin:.67em 0}
mark{background:#ff0;color:#000}
small{font-size:80%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-0.5em}
sub{bottom:-0.25em}
img{border:0}
svg:not(:root){overflow:hidden}
.responsivegrid figure{margin:0}
hr{box-sizing:content-box;height:0}
pre{overflow:auto}
code,kbd,pre,samp{font-family:monospace;font-size:1em}
button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}
button{overflow:visible}
button,select{text-transform:none}
button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}
button[disabled],html input[disabled]{cursor:default}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}
input{line-height:normal}
input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}
input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}
input[type="search"]{-webkit-appearance:textfield;box-sizing:content-box}
input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}
fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}
legend{border:0;padding:0}
textarea{overflow:auto}
optgroup{font-weight:bold}
table{border-collapse:collapse;border-spacing:0}
td,th{padding:0}
@font-face{font-family:'DIRECTVCurve';src:url('clientlib-site/css/resources/directv_curve_regular.woff') format('woff'),url('clientlib-site/css/resources/directv_curve_regular.woff2') format('woff2'),url('clientlib-site/css/resources/directv_curve_regular.ttf') format('ttf'),url('clientlib-site/css/resources/directv_curve_regular.eot') format('eot'),url('clientlib-site/css/resources/directv_curve_regular.svg') format('svg');font-weight:normal;font-display:swap;font-style:normal}
@font-face{font-family:'DIRECTVCurve';src:url('clientlib-site/css/resources/directv_curve_medium.woff') format('woff'),url('clientlib-site/css/resources/directv_curve_medium.woff2') format('woff2'),url('clientlib-site/css/resources/directv_curve_medium.ttf') format('ttf'),url('clientlib-site/css/resources/directv_curve_medium.eot') format('eot'),url('clientlib-site/css/resources/directv_curve_medium.svg') format('svg');font-weight:500;font-display:swap;font-style:normal}
@font-face{font-family:'DIRECTVCurve';src:url('clientlib-site/css/resources/directv_curve_bold.woff') format('woff'),url('clientlib-site/css/resources/directv_curve_bold.woff2') format('woff2'),url('clientlib-site/css/resources/directv_curve_bold.ttf') format('ttf'),url('clientlib-site/css/resources/directv_curve_bold.eot') format('eot'),url('clientlib-site/css/resources/directv_curve_bold.svg') format('svg');font-weight:bold;font-display:swap;font-style:normal}
@font-face{font-family:'dtv_cds_icons';src:url('clientlib-site/css/resources/dtv_cds_icons.eot?ohltip');src:url('clientlib-site/css/resources/dtv_cds_icons.eot?ohltip#iefix') format('embedded-opentype'),url('clientlib-site/css/resources/dtv_cds_icons.ttf') format('truetype'),url('clientlib-site/css/resources/dtv_cds_icons.woff?ohltip') format('woff'),url('clientlib-site/css/resources/dtv_cds_icons.svg?ohltip#dtv_cds_icons') format('svg');font-weight:normal;font-style:normal}
[class^="dtv-cds-icon-"],[class*=" dtv-cds-icon-"]{font-family:'dtv_cds_icons' !important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.dtv-cds-icon-back::before{content:"\e912"}
.dtv-cds-icon-error771::before{content:"\e90e"}
.dtv-cds-icon-less::before{content:"\e90f"}
.dtv-cds-icon-more::before{content:"\e910"}
.dtv-cds-icon-submenu::before{content:"\e911"}
.dtv-cds-icon-arrow-left::before{content:"\e90d"}
.dtv-cds-icon-article::before{content:"\e90"}
.dtv-cds-icon-drive::before{content:"\e900"}
.dtv-cds-icon-bill::before{content:"\e902"}
.dtv-cds-icon-caret-down::before{content:"\10ffff"}
.dtv-cds-icon-caret-right::before{content:"\e90b"}
.dtv-cds-icon-like::before{content:"\e905"}
.dtv-cds-icon-monitor::before{content:"\e906"}
.dtv-cds-icon-package::before{content:"\e907"}
.dtv-cds-icon-question::before{content:"\e908"}
.dtv-cds-icon-card::before{content:"\e909"}
.dtv-cds-icon-settings::before{content:"\e90a"}
.dtv-cds-icon-video::before{content:"\e90c"}
.dtv-cds-icon-warning::before{content:"\e905"}
@font-face{font-family:'dtv-public-sites-icons';src:url('clientlib-site/css/resources/iconFonts/dtv-public-sites.eot?ohltip');src:url('clientlib-site/css/resources/iconFonts/dtv-public-sites.eot?ohltip#iefix') format('embedded-opentype'),url('clientlib-site/css/resources/iconFonts/dtv-public-sites.ttf') format('truetype'),url('clientlib-site/css/resources/iconFonts/dtv-public-sites.woff?ohltip') format('woff'),url('clientlib-site/css/resources/iconFonts/dtv-public-sites.svg?ohltip#dtv_cds_icons') format('svg');font-weight:normal;font-style:normal;font-display:swap}
[class^='dtv-public-icon-'],[class*=' dtv-public-icon-']{font-family:'dtv-public-sites-icons' !important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased}
[class^='dtv-public-icon-'].dtv-public-icon-x0-5::before,[class*=' dtv-public-icon-'].dtv-public-icon-x0-5::before{font-size:10px}
[class^='dtv-public-icon-'].dtv-public-icon-x1::before,[class*=' dtv-public-icon-'].dtv-public-icon-x1::before{font-size:24px}
[class^='dtv-public-icon-'].dtv-public-icon-x2::before,[class*=' dtv-public-icon-'].dtv-public-icon-x2::before{font-size:32px}
[class^='dtv-public-icon-'].dtv-public-icon-x3::before,[class*=' dtv-public-icon-'].dtv-public-icon-x3::before{font-size:40px}
[class^='dtv-public-icon-'].dtv-public-icon-x4::before,[class*=' dtv-public-icon-'].dtv-public-icon-x4::before{font-size:60px}
[class^='dtv-public-icon-']::before,[class*=' dtv-public-icon-']::before{font-size:16px}
.dtv-public-download::before{content:'\e91a'}
.dtv-public-icon-add::before{content:'\e145'}
.dtv-public-icon-add-2::before{content:'\e146'}
.dtv-public-icon-check::before{content:'\e5ca'}
.dtv-public-icon-before::before{content:'\e408'}
.dtv-public-icon-next::before{content:'\e409'}
.dtv-public-icon-less::before{content:'\e5ce'}
.dtv-public-icon-more::before{content:'\e5cf'}
.dtv-public-icon-person::before{content:'\e7ff'}
.dtv-public-icon-search::before{content:'\e8b6'}
.dtv-public-icon-close::before{content:'\e900'}
.dtv-public-icon-close-2::before{content:'\e901'}
.dtv-public-icon-house::before{content:'\e902'}
.dtv-public-icon-apartment::before{content:'\e903'}
.dtv-public-icon-external-link::before{content:'\e904'}
.dtv-public-icon-book::before{content:'\e905'}
.dtv-public-icon-phone-call::before{content:'\e906'}
.dtv-public-icon-placeholder-link::before{content:'\e907'}
.dtv-public-icon-hand::before{content:'\e908'}
.dtv-public-icon-chevron-left::before{content:'\e911'}
.dtv-public-icon-chevron-right::before{content:'\e912'}
.dtv-public-icon-phone::before{content:'\e909'}
.dtv-public-icon-appoinment::before{content:'\e90a'}
.dtv-public-icon-search-header::before{content:'\e90b'}
.dtv-public-icon-user::before{content:'\e90c'}
.dtv-public-icon-logged-user::before{content:'\e90d'}
.dtv-public-icon-Info-icn::before{content:"\e913"}
.dtv-public-icon-down::before{content:"\e914"}
.dtv-public-icon-up::before{content:"\e915"}
.dtv-public-icon-chat::before{content:"\e916"}
.dtv-public-icon-chevron-bread-crumb::before{content:"\e917"}
.dtv-public-icon-pin-point::before{content:"\e918"}
.dtv-public-icon-online-acquisition::before{content:"\e919"}
.aem-Grid{display:block;width:100%}
.aem-Grid::before,.aem-Grid::after{display:table;content:" "}
.aem-Grid::after{clear:both}
.aem-Grid-newComponent{clear:both;margin:0}
.aem-GridColumn{box-sizing:border-box;clear:both}
.aem-GridShowHidden>.aem-Grid>.aem-GridColumn{display:block !important}
.aem-Grid{width:auto}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:100%}
.aem-Grid.aem-Grid--default--1>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--1>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--1>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:100%}
.aem-Grid.aem-Grid--default--2>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--default--2>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--2>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--2>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:50%}
.aem-Grid.aem-Grid--default--2>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:100%}
.aem-Grid.aem-Grid--default--3>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--default--3>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--default--3>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--3>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--3>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--default--3>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--default--3>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:100%}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:25%}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:50%}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:75%}
.aem-Grid.aem-Grid--default--4>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:100%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:20%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:40%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:60%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:80%}
.aem-Grid.aem-Grid--default--5>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:100%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:50%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--default--6>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:100%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--default--7>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:100%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:12.5%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:25%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:37.5%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:50%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:62.5%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:75%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:87.5%}
.aem-Grid.aem-Grid--default--8>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--default--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--default--9{margin-left:100%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--default--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--default--9>.aem-GridColumn.aem-GridColumn--offset--default--9{margin-left:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--default--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--9{margin-left:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--default--10{margin-left:100%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--default--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:10%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:20%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:30%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:40%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:50%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:60%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:70%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:80%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--9{margin-left:90%}
.aem-Grid.aem-Grid--default--10>.aem-GridColumn.aem-GridColumn--offset--default--10{margin-left:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--default--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--default--11{margin-left:100%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--default--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--default--11>.aem-GridColumn.aem-GridColumn--offset--default--11{margin-left:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--default--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--9{margin-left:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--default--12{margin-left:100%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--default--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--0{margin-left:0}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--3{margin-left:25%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--6{margin-left:50%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--9{margin-left:75%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--default--12>.aem-GridColumn.aem-GridColumn--offset--default--12{margin-left:100%}
.aem-Grid>.aem-GridColumn.aem-GridColumn--default--newline{display:block;clear:both !important}
.aem-Grid>.aem-GridColumn.aem-GridColumn--default--none{display:block;clear:none !important;float:left}
.aem-Grid>.aem-GridColumn.aem-GridColumn--default--hide{display:none}
@media(max-width:480px){.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:100%}
.aem-Grid.aem-Grid--phone--1>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--1>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--1>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:100%}
.aem-Grid.aem-Grid--phone--2>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--phone--2>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--2>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--2>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:50%}
.aem-Grid.aem-Grid--phone--2>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:100%}
.aem-Grid.aem-Grid--phone--3>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--phone--3>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--phone--3>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--3>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--3>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--phone--3>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--phone--3>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:100%}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:25%}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:50%}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:75%}
.aem-Grid.aem-Grid--phone--4>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:100%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:20%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:40%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:60%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:80%}
.aem-Grid.aem-Grid--phone--5>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:100%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:50%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--phone--6>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:100%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--phone--7>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:100%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:12.5%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:25%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:37.5%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:50%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:62.5%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:75%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:87.5%}
.aem-Grid.aem-Grid--phone--8>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--phone--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--phone--9{margin-left:100%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--phone--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--phone--9>.aem-GridColumn.aem-GridColumn--offset--phone--9{margin-left:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--phone--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--9{margin-left:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--phone--10{margin-left:100%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--phone--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:10%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:20%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:30%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:40%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:50%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:60%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:70%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:80%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--9{margin-left:90%}
.aem-Grid.aem-Grid--phone--10>.aem-GridColumn.aem-GridColumn--offset--phone--10{margin-left:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--phone--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--phone--11{margin-left:100%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--phone--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--phone--11>.aem-GridColumn.aem-GridColumn--offset--phone--11{margin-left:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--phone--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--9{margin-left:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--phone--12{margin-left:100%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--phone--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--0{margin-left:0}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--3{margin-left:25%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--6{margin-left:50%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--9{margin-left:75%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--phone--12>.aem-GridColumn.aem-GridColumn--offset--phone--12{margin-left:100%}
.aem-Grid>.aem-GridColumn.aem-GridColumn--phone--newline{display:block;clear:both !important}
.aem-Grid>.aem-GridColumn.aem-GridColumn--phone--none{display:block;clear:none !important;float:left}
.aem-Grid>.aem-GridColumn.aem-GridColumn--phone--hide{display:none}
}
@media(min-width:481px) and (max-width:768px){.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:100%}
.aem-Grid.aem-Grid--tablet--1>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--1>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--1>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:100%}
.aem-Grid.aem-Grid--tablet--2>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--tablet--2>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--2>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--2>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:50%}
.aem-Grid.aem-Grid--tablet--2>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:100%}
.aem-Grid.aem-Grid--tablet--3>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--tablet--3>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--tablet--3>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--3>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--3>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--tablet--3>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--tablet--3>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:100%}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:25%}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:50%}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:75%}
.aem-Grid.aem-Grid--tablet--4>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:100%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:20%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:40%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:60%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:80%}
.aem-Grid.aem-Grid--tablet--5>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:100%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:50%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--tablet--6>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:100%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--tablet--7>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:100%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:12.5%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:25%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:37.5%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:50%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:62.5%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:75%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:87.5%}
.aem-Grid.aem-Grid--tablet--8>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--tablet--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--tablet--9{margin-left:100%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--tablet--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--tablet--9>.aem-GridColumn.aem-GridColumn--offset--tablet--9{margin-left:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--tablet--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--9{margin-left:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--tablet--10{margin-left:100%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--tablet--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:10%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:20%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:30%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:40%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:50%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:60%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:70%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:80%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--9{margin-left:90%}
.aem-Grid.aem-Grid--tablet--10>.aem-GridColumn.aem-GridColumn--offset--tablet--10{margin-left:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--tablet--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--tablet--11{margin-left:100%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--tablet--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--tablet--11>.aem-GridColumn.aem-GridColumn--offset--tablet--11{margin-left:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--tablet--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--9{margin-left:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--tablet--12{margin-left:100%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--tablet--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--0{margin-left:0}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--3{margin-left:25%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--6{margin-left:50%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--9{margin-left:75%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--tablet--12>.aem-GridColumn.aem-GridColumn--offset--tablet--12{margin-left:100%}
.aem-Grid>.aem-GridColumn.aem-GridColumn--tablet--newline{display:block;clear:both !important}
.aem-Grid>.aem-GridColumn.aem-GridColumn--tablet--none{display:block;clear:none !important;float:left}
.aem-Grid>.aem-GridColumn.aem-GridColumn--tablet--hide{display:none}
}
@media(min-width:769px) and (max-width:970px){.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:100%}
.aem-Grid.aem-Grid--desktop--1>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--1>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--1>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:100%}
.aem-Grid.aem-Grid--desktop--2>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--desktop--2>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--2>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--2>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:50%}
.aem-Grid.aem-Grid--desktop--2>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:100%}
.aem-Grid.aem-Grid--desktop--3>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--desktop--3>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--desktop--3>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--3>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--3>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--desktop--3>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--desktop--3>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:100%}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:25%}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:50%}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:75%}
.aem-Grid.aem-Grid--desktop--4>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:100%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:20%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:40%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:60%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:80%}
.aem-Grid.aem-Grid--desktop--5>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:100%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:50%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--desktop--6>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:100%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--desktop--7>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:100%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:12.5%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:25%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:37.5%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:50%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:62.5%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:75%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:87.5%}
.aem-Grid.aem-Grid--desktop--8>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--desktop--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--desktop--9{margin-left:100%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--desktop--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--desktop--9>.aem-GridColumn.aem-GridColumn--offset--desktop--9{margin-left:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--desktop--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--9{margin-left:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--desktop--10{margin-left:100%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--desktop--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:10%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:20%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:30%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:40%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:50%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:60%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:70%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:80%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--9{margin-left:90%}
.aem-Grid.aem-Grid--desktop--10>.aem-GridColumn.aem-GridColumn--offset--desktop--10{margin-left:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--desktop--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--desktop--11{margin-left:100%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--desktop--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--desktop--11>.aem-GridColumn.aem-GridColumn--offset--desktop--11{margin-left:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--desktop--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--9{margin-left:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--desktop--12{margin-left:100%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--desktop--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--0{margin-left:0}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--3{margin-left:25%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--6{margin-left:50%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--9{margin-left:75%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--desktop--12>.aem-GridColumn.aem-GridColumn--offset--desktop--12{margin-left:100%}
.aem-Grid>.aem-GridColumn.aem-GridColumn--desktop--newline{display:block;clear:both !important}
.aem-Grid>.aem-GridColumn.aem-GridColumn--desktop--none{display:block;clear:none !important;float:left}
.aem-Grid>.aem-GridColumn.aem-GridColumn--desktop--hide{display:none}
}
@media(min-width:971px) and (max-width:1440px){.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--1>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--1>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--1>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--1>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:50%}
.aem-Grid.aem-Grid--2>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--2>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--largeDesktop--2>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--2>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--2>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:50%}
.aem-Grid.aem-Grid--largeDesktop--2>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--3>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--3>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--largeDesktop--3>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--largeDesktop--3>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--3>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--3>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:33.33333333%}
.aem-Grid.aem-Grid--largeDesktop--3>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:66.66666667%}
.aem-Grid.aem-Grid--largeDesktop--3>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:25%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:50%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:75%}
.aem-Grid.aem-Grid--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:25%}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:50%}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:75%}
.aem-Grid.aem-Grid--largeDesktop--4>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:20%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:40%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:60%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:80%}
.aem-Grid.aem-Grid--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:20%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:40%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:60%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:80%}
.aem-Grid.aem-Grid--largeDesktop--5>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:50%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:16.66666667%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:33.33333333%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:50%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:66.66666667%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:83.33333333%}
.aem-Grid.aem-Grid--largeDesktop--6>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:14.28571429%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:28.57142857%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:42.85714286%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:57.14285714%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:71.42857143%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:85.71428571%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:14.28571429%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:28.57142857%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:42.85714286%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:57.14285714%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:71.42857143%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:85.71428571%}
.aem-Grid.aem-Grid--largeDesktop--7>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:12.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:25%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:37.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:50%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:62.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:75%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:87.5%}
.aem-Grid.aem-Grid--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:12.5%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:37.5%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:62.5%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:87.5%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:12.5%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:25%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:37.5%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:50%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:62.5%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:75%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:87.5%}
.aem-Grid.aem-Grid--largeDesktop--8>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--largeDesktop--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--9{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:11.11111111%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:22.22222222%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:44.44444444%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:55.55555556%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:77.77777778%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:88.88888889%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--largeDesktop--9{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:11.11111111%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:22.22222222%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:33.33333333%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:44.44444444%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:55.55555556%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:66.66666667%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:77.77777778%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:88.88888889%}
.aem-Grid.aem-Grid--largeDesktop--9>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--9{margin-left:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--largeDesktop--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:10%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:20%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:30%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:40%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:50%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:60%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:70%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:80%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--9{margin-left:90%}
.aem-Grid.aem-Grid--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--10{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:10%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:20%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:30%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:40%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:60%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:70%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:80%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--9{float:left;clear:none;width:90%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--largeDesktop--10{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:10%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:20%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:30%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:40%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:50%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:60%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:70%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:80%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--9{margin-left:90%}
.aem-Grid.aem-Grid--largeDesktop--10>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--10{margin-left:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--largeDesktop--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--11{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:9.09090909%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:18.18181818%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:27.27272727%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:36.36363636%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:45.45454545%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:54.54545455%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:63.63636364%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:72.72727273%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--9{float:left;clear:none;width:81.81818182%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--10{float:left;clear:none;width:90.90909091%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--largeDesktop--11{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:9.09090909%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:18.18181818%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:27.27272727%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:36.36363636%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:45.45454545%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:54.54545455%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:63.63636364%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:72.72727273%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--9{margin-left:81.81818182%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--10{margin-left:90.90909091%}
.aem-Grid.aem-Grid--largeDesktop--11>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--11{margin-left:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--largeDesktop--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:25%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:50%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--9{margin-left:75%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--12{margin-left:100%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--1{float:left;clear:none;width:8.33333333%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--2{float:left;clear:none;width:16.66666667%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--3{float:left;clear:none;width:25%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--4{float:left;clear:none;width:33.33333333%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--5{float:left;clear:none;width:41.66666667%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--6{float:left;clear:none;width:50%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--7{float:left;clear:none;width:58.33333333%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--8{float:left;clear:none;width:66.66666667%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--9{float:left;clear:none;width:75%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--10{float:left;clear:none;width:83.33333333%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--11{float:left;clear:none;width:91.66666667%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--largeDesktop--12{float:left;clear:none;width:100%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--0{margin-left:0}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--1{margin-left:8.33333333%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--2{margin-left:16.66666667%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--3{margin-left:25%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--4{margin-left:33.33333333%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--5{margin-left:41.66666667%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--6{margin-left:50%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--7{margin-left:58.33333333%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--8{margin-left:66.66666667%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--9{margin-left:75%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--10{margin-left:83.33333333%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--11{margin-left:91.66666667%}
.aem-Grid.aem-Grid--largeDesktop--12>.aem-GridColumn.aem-GridColumn--offset--largeDesktop--12{margin-left:100%}
.aem-Grid>.aem-GridColumn.aem-GridColumn--largeDesktop--newline{display:block;clear:both !important}
.aem-Grid>.aem-GridColumn.aem-GridColumn--largeDesktop--none{display:block;clear:none !important;float:left}
.aem-Grid>.aem-GridColumn.aem-GridColumn--largeDesktop--hide{display:none}
}
.aem-GridColumn{padding:0 12px}
.responsivegrid.aem-GridColumn{padding:0 12px}
.responsivegrid.aem-GridColumn.aem-GridColumn--default--12{padding-left:0;padding-right:0}
.responsivegrid.aem-GridColumn.aem-GridColumn--default--12>.aem-GridColumn.aem-GridColumn--default--12{padding-left:0;padding-right:0}
.aem-GridColumn.aem-GridColumn--default--12{padding-left:0;padding-right:0}
.page .main-container{margin-right:auto;margin-left:auto;padding:0 3%}
@media(min-width:768px){.page .main-container{padding:0 24px}
}
@media(min-width:1440px){.page .main-container{width:1440px;padding:0 24px}
}
.responsivegrid .container{display:grid;grid-template-columns:repeat(12,1fr);grid-gap:12px}
.responsivegrid .container.dtv-container{grid-template-columns:repeat(3,1fr);grid-gap:3%;margin:0 3%}
@media(min-width:768px){.responsivegrid .container{grid-gap:24px}
.responsivegrid .container.dtv-container{grid-template-columns:repeat(6,1fr);grid-gap:24px;margin:0 24px}
}
.responsivegrid .container .col-1{grid-column:span 1}
.responsivegrid .container .col-2{grid-column:span 2}
.responsivegrid .container .col-3{grid-column:span 3}
.responsivegrid .container .col-4{grid-column:span 4}
.responsivegrid .container .col-5{grid-column:span 5}
.responsivegrid .container .col-6{grid-column:span 6}
.responsivegrid .container .col-7{grid-column:span 7}
.responsivegrid .container .col-8{grid-column:span 8}
.responsivegrid .container .col-9{grid-column:span 9}
.responsivegrid .container .col-10{grid-column:span 10}
.responsivegrid .container .col-11{grid-column:span 11}
.responsivegrid .container .col-12{grid-column:span 12}
@media screen and (min-width:480px){.responsivegrid .container .col-xs-1{grid-column:span 1}
.responsivegrid .container .col-xs-2{grid-column:span 2}
.responsivegrid .container .col-xs-3{grid-column:span 3}
.responsivegrid .container .col-xs-4{grid-column:span 4}
.responsivegrid .container .col-xs-5{grid-column:span 5}
.responsivegrid .container .col-xs-6{grid-column:span 6}
.responsivegrid .container .col-xs-7{grid-column:span 7}
.responsivegrid .container .col-xs-8{grid-column:span 8}
.responsivegrid .container .col-xs-9{grid-column:span 9}
.responsivegrid .container .col-xs-10{grid-column:span 10}
.responsivegrid .container .col-xs-11{grid-column:span 11}
.responsivegrid .container .col-xs-12{grid-column:span 12}
}
@media screen and (min-width:768px){.responsivegrid .container .col-sm-1{grid-column:span 1}
.responsivegrid .container .col-sm-2{grid-column:span 2}
.responsivegrid .container .col-sm-3{grid-column:span 3}
.responsivegrid .container .col-sm-4{grid-column:span 4}
.responsivegrid .container .col-sm-5{grid-column:span 5}
.responsivegrid .container .col-sm-6{grid-column:span 6}
.responsivegrid .container .col-sm-7{grid-column:span 7}
.responsivegrid .container .col-sm-8{grid-column:span 8}
.responsivegrid .container .col-sm-9{grid-column:span 9}
.responsivegrid .container .col-sm-10{grid-column:span 10}
.responsivegrid .container .col-sm-11{grid-column:span 11}
.responsivegrid .container .col-sm-12{grid-column:span 12}
}
@media screen and (min-width:970px){.responsivegrid .container.dtv-container{grid-template-columns:repeat(12,1fr)}
.responsivegrid .container .col-md-1{grid-column:span 1}
.responsivegrid .container .col-md-2{grid-column:span 2}
.responsivegrid .container .col-md-3{grid-column:span 3}
.responsivegrid .container .col-md-4{grid-column:span 4}
.responsivegrid .container .col-md-5{grid-column:span 5}
.responsivegrid .container .col-md-6{grid-column:span 6}
.responsivegrid .container .col-md-7{grid-column:span 7}
.responsivegrid .container .col-md-8{grid-column:span 8}
.responsivegrid .container .col-md-9{grid-column:span 9}
.responsivegrid .container .col-md-10{grid-column:span 10}
.responsivegrid .container .col-md-11{grid-column:span 11}
.responsivegrid .container .col-md-12{grid-column:span 12}
}
@media screen and (min-width:1440px){.responsivegrid .container.dtv-container{max-width:1370px;margin:0 auto}
.responsivegrid .container .col-lg-1{grid-column:span 1}
.responsivegrid .container .col-lg-2{grid-column:span 2}
.responsivegrid .container .col-lg-3{grid-column:span 3}
.responsivegrid .container .col-lg-4{grid-column:span 4}
.responsivegrid .container .col-lg-5{grid-column:span 5}
.responsivegrid .container .col-lg-6{grid-column:span 6}
.responsivegrid .container .col-lg-7{grid-column:span 7}
.responsivegrid .container .col-lg-8{grid-column:span 8}
.responsivegrid .container .col-lg-9{grid-column:span 9}
.responsivegrid .container .col-lg-10{grid-column:span 10}
.responsivegrid .container .col-lg-11{grid-column:span 11}
.responsivegrid .container .col-lg-12{grid-column:span 12}
}
body{font-display:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
html{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.hidehome{display:none}
ul{list-style:none}
img{min-height:2px;min-width:2px}
.responsivegrid .btn{padding:12px 50px;text-transform:uppercase;text-decoration:none;color:#fff;display:inline-block;border-radius:5px;border:1px solid}
.responsivegrid .btn .icon{margin-right:8px}
.responsivegrid .btn.narrow{padding:4px 16px}
.responsivegrid .btn.primary{background-color:#0073ae;border-color:#0073ae}
.responsivegrid .btn.primary:hover{background-color:#0090da}
.responsivegrid .btn.secondary{color:#1b2c5d;background-color:#ffc60b;border-color:#ffc60b}
.responsivegrid .btn.secondary:hover{background-color:#ffc60b;border-color:#ffc60b}
.responsivegrid .btn.terciary{color:#0073ae;border:1px solid #0073ae;background:0}
.responsivegrid .btn.terciary:hover{color:#00aeef;border-color:#00aeef}
.responsivegrid .btn:focus{outline:0}
.responsivegrid .btn.disabled{background-color:#eceff1;border-color:#eceff1;color:rgba(0,0,0,0.5)}
.responsivegrid .btn.disabled:hover{background-color:#eceff1;border-color:#eceff1;color:rgba(0,0,0,0.5)}
.checkbox-container{display:block;position:relative;padding-left:35px;margin-bottom:12px;cursor:pointer;font-size:22px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.checkbox-container input{position:absolute;opacity:0;cursor:pointer}
.checkbox-container input:checked ~ .checkbox-checkmark{background-color:#2196f3}
.checkbox-container input:checked ~ .checkbox-checkmark::after{display:block}
.checkbox-container input:disabled ~ .checkbox-checkmark{background-color:#eceff1}
.checkbox-container input:disabled ~ .checkbox-checkmark::after{border-color:#9a9a9a}
.checkbox-container .checkbox-checkmark{position:absolute;top:0;left:0;height:24px;width:24px;background-color:#fff;border-radius:5px;border:1px solid #9a9a9a}
.checkbox-container .checkbox-checkmark::after{left:9px;top:5px;width:5px;height:10px;border:solid #fff;border-width:0 2px 2px 0;-webkit-transform:rotate(35deg);-ms-transform:rotate(35deg);transform:rotate(35deg);content:"";position:absolute;display:none}
.checkbox-container:hover input ~ .checkbox-checkmark{background-color:#eceff1}
.checkbox-container:hover input:checked ~ .checkbox-checkmark{background-color:#2196f3}
.checkbox-container:hover input:checked:disabled ~ .checkbox-checkmark{background-color:#eceff1}
.radio-container{display:block;position:relative;padding-left:35px;margin-bottom:12px;cursor:pointer;font-size:22px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.radio-container input{position:absolute;opacity:0}
.radio-container input:checked ~ .radio-checkmark{background-color:#2196f3}
.radio-container input:checked ~ .radio-checkmark::after{display:block}
.radio-container input:disabled:disabled ~ .radio-checkmark{background-color:#eceff1}
.radio-container input:disabled:disabled ~ .radio-checkmark::after{border-color:#9a9a9a;background-color:#9a9a9a}
.radio-container .radio-checkmark{position:absolute;top:0;left:0;height:24px;width:24px;background-color:#fff;border-radius:50%;border:solid 1px #9a9a9a}
.radio-container .radio-checkmark::after{top:6px;left:6px;width:12px;height:12px;border-radius:50%;background:#fff;content:"";position:absolute;display:none}
.radio-container:hover input ~ .radio-checkmark{background-color:#ccc}
.radio-container:hover input:checked ~ .radio-checkmark{background-color:#2196f3}
.radio-container:hover input:checked:disabled ~ .radio-checkmark{background-color:#eceff1}
.directv-textarea{box-sizing:border-box;color:#000;border:1px solid #9e9e9e;resize:vertical;width:100%;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;padding:16px;border-radius:5px}
.directv-textarea:focus{border-radius:5px;border:1px solid #009fdb;box-shadow:0 0 3px 0 rgba(0,174,239,0.5);outline:0;transition:width .5s;width:100%}
.directv-textarea::placeholder,.directv-textarea::-ms-input-placeholder{color:#9e9e9e}
.switch{position:relative;-webkit-appearance:none;outline:0;width:40px;height:24px;background-color:#eceff1;border:1px solid #9a9a9a;border-radius:18px}
.switch::after{content:"";position:absolute;background:#fff;width:22px;height:22px;border-radius:18px;border:solid 1px #cfd8dc;box-shadow:0 2px 2px 0 rgba(0,0,0,0.1);top:-1px;left:0}
.switch:checked{box-shadow:inset 20px 0 0 0 #2196f3;border-color:#2196f3}
.switch:checked::after{left:15px;box-shadow:0 2px 2px 0 #000}
.switch:disabled{border-color:#cfd8dc}
.switch:disabled:checked{background-color:#eceff1;border-color:#eceff1;box-shadow:none}
h1,h2,h3,h4,h5,h6{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.responsivegrid h1{font-size:60px;line-height:1}
.responsivegrid h2{font-size:40px;line-height:1.25}
.responsivegrid h3{font-size:32px;line-height:1.19}
.responsivegrid h4{font-size:24px;line-height:1.17}
.responsivegrid h5{font-size:20px;line-height:1.2}
.responsivegrid h6{font-size:16px;line-height:1.5}
.responsivegrid p{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5}
.responsivegrid .p-center{text-align:center !important}
figcaption{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.14}
form .form-group label{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;margin-bottom:8px}
form .form-group input,form .form-group select,form .form-group textarea{border:solid 1px #9e9e9e;background-color:#fff;border-radius:5px;width:100%;padding:16px}
form .form-group input:focus,form .form-group select:focus,form .form-group textarea:focus{border-color:#009fdb;outline:0}
form .form-group small{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.14}
form .form-group.error input,form .form-group.error select,form .form-group.error textarea{border-color:#cc1401}
form .form-group.error input:focus,form .form-group.error select:focus,form .form-group.error textarea:focus{border-color:#009fdb}
form .form-group.error small{color:#cc1401}
form .form-group.narrow label{font-size:14px}
form .form-group.narrow input,form .form-group.narrow select,form .form-group.narrow textarea{padding:8px 16px}
.no-config-component{line-height:2.875rem;font-size:16px;text-align:center;color:#777;font-weight:bold;width:100%;border:2px solid #777}
.hero-config-message{display:flex;justify-content:center;align-items:center;height:100%;flex-direction:column;margin-bottom:15px}
.hero-config-message h2{margin-top:5px}
.hero-config-message img{height:130px;opacity:.4;border-radius:10px;box-shadow:5px 5px 5px 0 #333;margin-bottom:15px}
.hidden-component-config{color:#9b9b9b;opacity:.8;text-align:center}
p{-webkit-text-underline-position:under;text-underline-position:under}
p u{-webkit-text-underline-position:under;text-underline-position:under}
.placeholder{color:#000;text-align:center}
.placeholder .placeholder-text{font-size:12px;line-height:0;transform:translateY(8px)}
.placeholder h6{margin:4px 0}
.placeholder.hidden{text-align:left;color:rgba(0,0,0,0.3);border-color:rgba(0,0,0,0.3);background-color:rgba(255,255,255,0.25);border-style:solid;border-width:.125rem;margin:-0.125rem}
.generic-disclaimer-component{display:flex;justify-content:center}
.generic-disclaimer-component .container{max-width:1440px;width:100%}
.d-none{display:none !important}
.d-block{display:block !important}
@media screen and (min-width:360px){.d-xxs-none{display:none !important}
.d-xxs-block{display:block !important}
}
@media screen and (min-width:480px){.d-xs-none{display:none !important}
.d-xs-block{display:block !important}
}
@media screen and (min-width:768px){.d-sm-none{display:none !important}
.d-sm-block{display:block !important}
}
@media screen and (min-width:970px){.d-md-none{display:none !important}
.d-md-block{display:block !important}
}
@media screen and (min-width:1024px){.d-lg-none{display:none !important}
.d-lg-block{display:block !important}
}
.colour-primary{color:#0073ae}
.colour-primary::before{color:#0073ae}
.colour-primary::after{color:#0073ae}
.colour-secondary{color:#000}
.colour-secondary::before{color:#000}
.colour-secondary::after{color:#000}
.colour-light{color:#757575}
.colour-light::before{color:#757575}
.colour-light::after{color:#757575}
.colour-selling{color:#ffc60b}
.colour-selling::before{color:#ffc60b}
.colour-selling::after{color:#ffc60b}
.colour-danger{color:#e53935}
.colour-danger::before{color:#e53935}
.colour-danger::after{color:#e53935}
.colour-white{color:#fff}
.colour-white::before{color:#fff}
.colour-white::after{color:#fff}
.colour-orange{color:#f89c1b}
.colour-orange::before{color:#f89c1b}
.colour-orange::after{color:#f89c1b}
.colour-orange-go{color:#f58220}
.colour-orange-go::before{color:#f58220}
.colour-orange-go::after{color:#f58220}
.colour-sport{color:#05cda9}
.colour-sport::before{color:#05cda9}
.colour-sport::after{color:#05cda9}
.bg-primary{background-color:#0073ae}
.bg-secondary{background-color:#000}
.bg-light{background-color:#eceff1}
.bg-selling{background-color:#ffc60b}
.bg-orange{background-color:#f89c1b}
.bg-danger{background-color:#e53935}
.bg-white{background-color:#fff}
.bg-cream{background-color:#f9f9f9}
.b-r-small{border-radius:3px}
.b-r-base{border-radius:4px}
.p-none{padding:0}
.p-xxsmall{padding:4px}
.p-xsmall{padding:8px}
.p-small{padding:16px}
.p-v-small{padding:16px 0}
.p-h-small{padding:0 16px}
.p-large{padding:32px}
.m-xxsmall{margin:4px}
.m-v-xxsmall{margin:4px 0}
.m-h-xxsmall{margin:0 4px}
.m-xsmall{margin:8px}
.m-v-xsmall{margin:8px 0}
.m-h-xsmall{margin:0 8px}
.m-small{margin:16px}
.m-t-small{margin:16px 0 0}
.m-b-small{margin:0 0 16px}
.m-v-small{margin:16px 0}
.m-h-small{margin:0 16px}
.m-medium{margin:24px}
.m-v-medium{margin:24px 0}
.m-h-medium{margin:0 24px}
.m-smedium{margin:12px}
.m-v-smedium{margin:12px 0}
.m-h-smedium{margin:0 12px}
.m-large{margin:32px}
.m-v-large{margin:32px 0}
.m-h-large{margin:0 32px}
.m-t-large{margin:32px 0 0}
.m-b-large{margin:0 0 32px}
.m-xlarge{margin:48px}
.m-v-xlarge{margin:48px 0}
.m-h-xlarge{margin:0 48px}
.m-xxlarge{margin:64px}
.m-v-xxlarge{margin:64px 0}
.m-h-xxlarge{margin:0 64px}
.m-xxxlarge{margin:80px}
.m-v-xxxlarge{margin:80px 0}
.m-h-xxxlarge{margin:0 80px}
.height-xxsmall{min-height:4px}
.height-xsmall{min-height:8px}
.height-small-medium{min-height:12px}
.height-small{min-height:16px}
.height-standard{min-height:16px}
.height-medium{min-height:24px}
.height-large{min-height:32px}
.height-slarge{min-height:40px}
.height-xlarge{min-height:48px}
.height-xxlarge{min-height:64px}
.height-xxxlarge{min-height:80px}
.height-2x-standard{min-height:32px}
.height-3x-standard{min-height:48px}
.height-4x-standard{min-height:64px}
.height-5x-standard{min-height:80px}
.height-6x-standard{min-height:96px}
.height-7x-standard{min-height:112px}
.height-8x-standard{min-height:128px}
.height-9x-standard{min-height:144px}
.height-10x-standard{min-height:160px}
.height-11x-standard{min-height:176px}
.height-12x-standard{min-height:192px}
.height-13x-standard{min-height:208px}
.height-14x-standard{min-height:224px}
.height-15x-standard{min-height:240px}
.height-16x-standard{min-height:256px}
.height-17x-standard{min-height:272px}
.height-18x-standard{min-height:288px}
.height-19x-standard{min-height:304px}
.height-20x-standard{min-height:320px}
.width-small{width:30%}
.width-full{width:100%}
.text-align-center{text-align:center}
.text-align-left{text-align:left}
.text-align-right{text-align:right}
.text-small{font-size:14px}
.text-normal{font-size:16px}
.text-medium{font-size:20px}
.link-container{margin:0}
.panel{position:relative;padding:28px;margin-bottom:20px;border:1px solid transparent;border-radius:5px}
.panel h4{margin-top:0;color:inherit}
.panel>p,.panel>ul{margin-bottom:0}
.panel>p+p{margin-top:4px}
.panel .panel-text p{margin:0;text-align:center}
.panel .panel-text.panel-text-icon p:first-child::before{font-family:"dtv-public-sites-icons";font-size:16px;color:#006d2e;content:'\e913';vertical-align:text-bottom;padding-right:4px}
.panel-success{background-color:#f1f8e9;border-color:#f1f8e9;color:#000}
.panel-warning{background-color:#fffde7;border-color:#ffc60b;color:#000}
.responsivegrid .btn{display:inline-block;margin-bottom:0;text-align:center;vertical-align:middle;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500;padding:12px 48px;font-size:16px;line-height:1.25;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;user-select:none}
.responsivegrid .btn:hover,.responsivegrid .btn:focus,.responsivegrid .btn.focus{color:#f9f9f9;text-decoration:none}
.responsivegrid .btn:active,.responsivegrid .btn.active{outline:0;background-image:none;box-shadow:none}
.responsivegrid .btn.disabled,.responsivegrid .btn[disabled],fieldset[disabled] .responsivegrid .btn{cursor:not-allowed;box-shadow:none;background-color:#ccc}
.responsivegrid .btn-primary{color:#f9f9f9;background-color:#0073ae;border-color:#0073ae;transition:all .3s}
.responsivegrid .btn-primary:focus,.responsivegrid .btn-primary.focus{color:#f9f9f9;background-color:#00517b;border-color:#001f2f}
.responsivegrid .btn-primary:hover{color:#f9f9f9;background-color:#43bfff;border-color:#0073ae}
.responsivegrid .btn-primary:active,.responsivegrid .btn-primary.active,.open>.dropdown-toggle.responsivegrid .btn-primary{color:#f9f9f9;background-color:#00517b;border-color:#004b71;background-image:none}
.responsivegrid .btn-primary:active:hover,.responsivegrid .btn-primary.active:hover,.open>.dropdown-toggle.responsivegrid .btn-primary:hover,.responsivegrid .btn-primary:active:focus,.responsivegrid .btn-primary.active:focus,.open>.dropdown-toggle.responsivegrid .btn-primary:focus,.responsivegrid .btn-primary:active.focus,.responsivegrid .btn-primary.active.focus,.open>.dropdown-toggle.responsivegrid .btn-primary.focus{color:#f9f9f9;background-color:#00517b;border-color:#004b71}
.responsivegrid .btn-primary.disabled:hover,.responsivegrid .btn-primary[disabled]:hover,fieldset[disabled] .responsivegrid .btn-primary:hover,.responsivegrid .btn-primary.disabled:focus,.responsivegrid .btn-primary[disabled]:focus,fieldset[disabled] .responsivegrid .btn-primary:focus,.responsivegrid .btn-primary.disabled.focus,.responsivegrid .btn-primary[disabled].focus,fieldset[disabled] .responsivegrid .btn-primary.focus{background-color:#0073ae;border-color:#0073ae}
.responsivegrid .btn-selling{color:#1b2c5d;background-color:#ffc60b;border-color:#ffc60b;transition:all .3s}
.responsivegrid .btn-selling:focus,.responsivegrid .btn-selling.focus{color:#1b2c5d;background-color:#d7a500;border-color:#8b6a00}
.responsivegrid .btn-selling:hover{color:#1b2c5d;background-color:#ffe99f;border-color:#ffc60b}
.responsivegrid .btn-selling:active,.responsivegrid .btn-selling.active,.open>.dropdown-toggle.responsivegrid .btn-selling{color:#1b2c5d;background-color:#d7a500;border-color:#cd9d00;background-image:none}
.responsivegrid .btn-selling:active:hover,.responsivegrid .btn-selling.active:hover,.open>.dropdown-toggle.responsivegrid .btn-selling:hover,.responsivegrid .btn-selling:active:focus,.responsivegrid .btn-selling.active:focus,.open>.dropdown-toggle.responsivegrid .btn-selling:focus,.responsivegrid .btn-selling:active.focus,.responsivegrid .btn-selling.active.focus,.open>.dropdown-toggle.responsivegrid .btn-selling.focus{color:#1b2c5d;background-color:#d7a500;border-color:#cd9d00}
.responsivegrid .btn-selling.disabled:hover,.responsivegrid .btn-selling[disabled]:hover,fieldset[disabled] .responsivegrid .btn-selling:hover,.responsivegrid .btn-selling.disabled:focus,.responsivegrid .btn-selling[disabled]:focus,fieldset[disabled] .responsivegrid .btn-selling:focus,.responsivegrid .btn-selling.disabled.focus,.responsivegrid .btn-selling[disabled].focus,fieldset[disabled] .responsivegrid .btn-selling.focus{background-color:#ffc60b;border-color:#ffc60b}
.responsivegrid .btn-secondary{color:#fff;background-color:transparent;border-color:#fff;transition:all .3s}
.responsivegrid .btn-secondary:focus,.responsivegrid .btn-secondary.focus{color:#fff;background-color:rgba(0,0,0,0);border-color:#bfbfbf}
.responsivegrid .btn-secondary:hover{color:#fff;background-color:rgba(74,74,74,0);border-color:#fff}
.responsivegrid .btn-secondary:active,.responsivegrid .btn-secondary.active,.open>.dropdown-toggle.responsivegrid .btn-secondary{color:#fff;background-color:rgba(0,0,0,0);border-color:#e0e0e0;background-image:none}
.responsivegrid .btn-secondary:active:hover,.responsivegrid .btn-secondary.active:hover,.open>.dropdown-toggle.responsivegrid .btn-secondary:hover,.responsivegrid .btn-secondary:active:focus,.responsivegrid .btn-secondary.active:focus,.open>.dropdown-toggle.responsivegrid .btn-secondary:focus,.responsivegrid .btn-secondary:active.focus,.responsivegrid .btn-secondary.active.focus,.open>.dropdown-toggle.responsivegrid .btn-secondary.focus{color:#fff;background-color:rgba(0,0,0,0);border-color:#e0e0e0}
.responsivegrid .btn-secondary.disabled:hover,.responsivegrid .btn-secondary[disabled]:hover,fieldset[disabled] .responsivegrid .btn-secondary:hover,.responsivegrid .btn-secondary.disabled:focus,.responsivegrid .btn-secondary[disabled]:focus,fieldset[disabled] .responsivegrid .btn-secondary:focus,.responsivegrid .btn-secondary.disabled.focus,.responsivegrid .btn-secondary[disabled].focus,fieldset[disabled] .responsivegrid .btn-secondary.focus{background-color:transparent;border-color:#fff}
.responsivegrid .btn-white{color:#0073ae;background-color:#fff;border-color:#fff;transition:all .3s}
.responsivegrid .btn-white:focus,.responsivegrid .btn-white.focus{color:#0073ae;background-color:#e6e6e6;border-color:#bfbfbf}
.responsivegrid .btn-white:hover{color:#0073ae;background-color:#fff;border-color:#fff}
.responsivegrid .btn-white:active,.responsivegrid .btn-white.active,.open>.dropdown-toggle.responsivegrid .btn-white{color:#0073ae;background-color:#e6e6e6;border-color:#e0e0e0;background-image:none}
.responsivegrid .btn-white:active:hover,.responsivegrid .btn-white.active:hover,.open>.dropdown-toggle.responsivegrid .btn-white:hover,.responsivegrid .btn-white:active:focus,.responsivegrid .btn-white.active:focus,.open>.dropdown-toggle.responsivegrid .btn-white:focus,.responsivegrid .btn-white:active.focus,.responsivegrid .btn-white.active.focus,.open>.dropdown-toggle.responsivegrid .btn-white.focus{color:#0073ae;background-color:#e6e6e6;border-color:#e0e0e0}
.responsivegrid .btn-white.disabled:hover,.responsivegrid .btn-white[disabled]:hover,fieldset[disabled] .responsivegrid .btn-white:hover,.responsivegrid .btn-white.disabled:focus,.responsivegrid .btn-white[disabled]:focus,fieldset[disabled] .responsivegrid .btn-white:focus,.responsivegrid .btn-white.disabled.focus,.responsivegrid .btn-white[disabled].focus,fieldset[disabled] .responsivegrid .btn-white.focus{background-color:#fff;border-color:#fff}
.responsivegrid .btn-long{padding:12px 48px;font-size:24px;line-height:1.3333333;border-radius:6px}
.responsivegrid .btn-small{padding:4px 16px;font-size:14px;line-height:1.5;border-radius:3px}
.responsivegrid .btn-block{display:block;width:100%}
.responsivegrid input[type="submit"].btn-block,.responsivegrid input[type="reset"].btn-block,.responsivegrid input[type="button"].btn-block{width:100%}
.modal-container .modal-header{border-top-left-radius:5px;border-top-right-radius:5px;background:#005993;position:relative;display:flex;justify-content:center;align-items:center;height:80px}
.modal-container .modal-header .modal-header-title h3{color:#fff;font-weight:unset}
.modal-container .modal-header .modal-header-icon{position:absolute;right:24px;top:24px;cursor:pointer;color:#fff}
.modal-container .modal-content{color:inherit}
.modal-container .modal-footer{color:inherit}
@media only screen and (max-width:480px){.modal-container{min-height:582px;display:flex;flex-direction:column}
.modal-container .modal-header{height:104px;font-size:26px;line-height:1.35}
.modal-container .modal-header .modal-header-title{max-width:262px}
}
.title-container.section-title .title{font-size:40px;line-height:1.5;margin:0 0 6px}
.title-container{width:100%;display:flex;align-items:center;flex-direction:column;box-sizing:border-box;margin:10px 0}
.title-container .title{order:2;font-size:60px;text-align:center;font-weight:500;line-height:1;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0 0 16px;font-style:normal;font-stretch:normal;letter-spacing:normal;z-index:5}
.title-container .line{order:1;width:98px;height:3px;margin-bottom:9px;background-color:transparent;border-radius:3px}
.title-container .subtitle{margin:0;order:1;line-height:1.71;color:#0073ae;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;text-align:center;text-transform:uppercase;z-index:5}
.title-container .description{margin:0;order:3;text-align:center}
.title-container .description p,.title-container .description a{margin:0;font-size:16px;line-height:1.31 !important;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;text-align:center}
.title-container .description a{color:#0073ae;cursor:pointer}
.title-container-light .title{color:#eceff1}
.title-container-light .line{background-color:transparent}
.title-container-light .subtitle{color:#00aeef}
.title-container-light .description{color:#fff}
.title-container-light .description a{color:#00aeef}
.title-container-light .description a:hover{color:#4fc3f7}
.title-container-dark .title{color:#242424}
.title-container-dark .line{background-color:transparent}
.title-container-dark .subtitle{color:#0073ae}
.title-container-dark .description{color:#000}
.title-container-dark .description a{color:#0073ae}
.title-container-dark .description a:hover{color:#00aeef}
@media only screen and (max-width:768px){.title-container.section-title .title{margin:8px 0;line-height:1.19;font-size:32px}
.title-container{padding:0 12px}
.title-container .title{margin:0 0 8px;font-size:40px}
.title-container .description p,.title-container .description a{line-height:1.31}
}
.hero-multimedia-content{overflow:hidden}
.hero-multimedia-content .sliderContainer{-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;width:100%;height:508px}
.hero-multimedia-content .sliderContainer .blurcontainer{position:relative}
.hero-multimedia-content .sliderContainer .blurcontainer .blur{position:absolute;top:-1px;left:0;height:20px;z-index:1;width:100%;display:none;background:-webkit-gradient(linear,left top,left bottom,from(#000),to(rgba(76,76,76,0)));background:linear-gradient(to bottom,#000 0,rgba(76,76,76,0) 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr='#000000',endColorstr='#004c4c4c',GradientType=0)}
.hero-multimedia-content .sliderContainer .heroSlider,.hero-multimedia-content .sliderContainer .mySlider{width:100%;height:100%;border:0}
.hero-multimedia-content .sliderContainer .heroSlider div,.hero-multimedia-content .sliderContainer .mySlider div{height:100%;position:relative}
.hero-multimedia-content .sliderContainer .heroSlider div .mobile-media,.hero-multimedia-content .sliderContainer .mySlider div .mobile-media{display:none}
.hero-multimedia-content .sliderContainer .heroSlider div img,.hero-multimedia-content .sliderContainer .mySlider div img,.hero-multimedia-content .sliderContainer .heroSlider div video,.hero-multimedia-content .sliderContainer .mySlider div video,.hero-multimedia-content .sliderContainer .heroSlider div embed,.hero-multimedia-content .sliderContainer .mySlider div embed{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
.hero-multimedia-content .sliderContainer .heroSlider .PrevArrow,.hero-multimedia-content .sliderContainer .mySlider .PrevArrow,.hero-multimedia-content .sliderContainer .heroSlider .NextArrow,.hero-multimedia-content .sliderContainer .mySlider .NextArrow{position:absolute;top:50%;left:0;border:0 none;margin-top:-22.5px;text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#fff;z-index:5;cursor:pointer;width:56px;height:56px;border-radius:50%;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.hero-multimedia-content .sliderContainer .heroSlider .PrevArrow:hover,.hero-multimedia-content .sliderContainer .mySlider .PrevArrow:hover,.hero-multimedia-content .sliderContainer .heroSlider .NextArrow:hover,.hero-multimedia-content .sliderContainer .mySlider .NextArrow:hover{background-color:rgba(0,115,174,0.36)}
.hero-multimedia-content .sliderContainer .heroSlider .PrevArrow:hover .oval,.hero-multimedia-content .sliderContainer .mySlider .PrevArrow:hover .oval,.hero-multimedia-content .sliderContainer .heroSlider .NextArrow:hover .oval,.hero-multimedia-content .sliderContainer .mySlider .NextArrow:hover .oval{background-color:#0073ae}
.hero-multimedia-content .sliderContainer .heroSlider .PrevArrow .oval,.hero-multimedia-content .sliderContainer .mySlider .PrevArrow .oval,.hero-multimedia-content .sliderContainer .heroSlider .NextArrow .oval,.hero-multimedia-content .sliderContainer .mySlider .NextArrow .oval{width:40px;height:40px;border-radius:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.hero-multimedia-content .sliderContainer .heroSlider .PrevArrow .oval .arrow,.hero-multimedia-content .sliderContainer .mySlider .PrevArrow .oval .arrow,.hero-multimedia-content .sliderContainer .heroSlider .NextArrow .oval .arrow,.hero-multimedia-content .sliderContainer .mySlider .NextArrow .oval .arrow{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:40px;width:11px;height:20px}
.hero-multimedia-content .sliderContainer .heroSlider .NextArrow,.hero-multimedia-content .sliderContainer .mySlider .NextArrow{left:unset;right:0}
.hero-multimedia-content .sliderContainer .heroSlider .PrevArrow::before,.hero-multimedia-content .sliderContainer .mySlider .PrevArrow::before,.hero-multimedia-content .sliderContainer .heroSlider .NextArrow::before,.hero-multimedia-content .sliderContainer .mySlider .NextArrow::before{content:''}
.hero-multimedia-content .sliderContainer .heroSlider .slick-initialized .slick-slide,.hero-multimedia-content .sliderContainer .mySlider .slick-initialized .slick-slide{margin:0 5px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.hero-multimedia-content .sliderContainer .heroSlider .slick-list,.hero-multimedia-content .sliderContainer .mySlider .slick-list{margin:0 -5px 0 -5px}
.hero-multimedia-content .sliderContainer .textContainer{position:absolute;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;top:0;left:50%;height:100%;width:50%;overflow:hidden;display:none}
.hero-multimedia-content .sliderContainer .textContainer>*{position:relative;left:50%;opacity:0;width:80%;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#f9f9f9}
.hero-multimedia-content .sliderContainer .textContainer .dark-text{color:#000}
.hero-multimedia-content .sliderContainer .textContainer .title{font-size:42px;font-weight:500;line-height:1.43}
.hero-multimedia-content .sliderContainer .textContainer .subtitle{font-size:30px;line-height:1.33}
.hero-multimedia-content .sliderContainer .textContainer .description{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5}
.hero-multimedia-content .sliderContainer .textContainer .description.mobile-description{display:none}
.hero-multimedia-content .sliderContainer .textContainer h1,.hero-multimedia-content .sliderContainer .textContainer h2{margin:0}
.hero-multimedia-content .sliderContainer .textContainer .buttons{margin-top:24px;margin-bottom:3px;font-size:14px;font-weight:500;line-height:1.5;display:flex}
.hero-multimedia-content .sliderContainer .textContainer .buttons .button{width:156px;min-height:48px;border:1px;border-radius:5px;background:transparent;display:inline-block;-webkit-box-shadow:inset 0 0 0 1px #fff;box-shadow:inset 0 0 0 1px #fff;color:#fff;font-size:16px}
.hero-multimedia-content .sliderContainer .textContainer .buttons .button.active{background-color:#0073ae;color:#f9f9f9;-webkit-box-shadow:none;box-shadow:none;border:0}
.hero-multimedia-content .sliderContainer .textContainer .buttons .button.active:hover{background-color:#0090da}
.hero-multimedia-content .sliderContainer .textContainer .buttons .button.active.button-yellow{background-color:#ffc60b;color:#1b2c5d}
.hero-multimedia-content .sliderContainer .textContainer .buttons .button.active.button-yellow:hover{background-color:#ffd80b}
.hero-multimedia-content .sliderContainer .textContainer .buttons .button.knowmore{margin-left:16px}
.hero-multimedia-content .sliderContainer .textContainer .buttons .button.knowmore:hover{background-color:rgba(255,255,255,0.15)}
.hero-multimedia-content .sliderContainer .dots-container{position:absolute;bottom:24px;height:17px;width:100%;display:flex;justify-content:center}
.hero-multimedia-content .sliderContainer .dots-container .dots-content{position:relative;overflow:hidden}
.hero-multimedia-content .sliderContainer .dots-container .dots-content .slick-dots{z-index:5;bottom:0;display:flex}
.hero-multimedia-content .sliderContainer .dots-container .dots-content .slick-dots li{width:10px;height:10px;margin:0 15px;flex-shrink:0}
.hero-multimedia-content .sliderContainer .dots-container .dots-content .slick-dots li button{background:#c1c1c2;border-radius:calc(5px);height:10px;width:10px;position:absolute}
.hero-multimedia-content .sliderContainer .dots-container .dots-content .slick-dots li button.active-button{background:#fff;z-index:2;opacity:1;width:40px;left:-15px}
.hero-multimedia-content .sliderContainer .dots-container .dots-content .slick-dots li button::before{content:'';height:10px;width:10px}
@media only screen and (max-width:768px){.hero-multimedia-content .sliderContainer .heroSlider div,.hero-multimedia-content .sliderContainer .mySlider div{height:auto}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .title{font-size:32px}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .subtitle{font-size:24px}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .description{font-size:16px}
}
@media only screen and (max-width:480px){.hero-multimedia-content .sliderContainer{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;height:667px}
.hero-multimedia-content .sliderContainer .blurcontainer{display:none}
.hero-multimedia-content .sliderContainer .blurcontainer .blur{display:block}
.hero-multimedia-content .sliderContainer .heroSlider,.hero-multimedia-content .sliderContainer .mySlider{height:347px;-webkit-box-flex:0;-ms-flex:0;flex:0}
.hero-multimedia-content .sliderContainer .heroSlider div .mobile-media,.hero-multimedia-content .sliderContainer .mySlider div .mobile-media{display:block}
.hero-multimedia-content .sliderContainer .heroSlider div .desktop-media,.hero-multimedia-content .sliderContainer .mySlider div .desktop-media{display:none}
.hero-multimedia-content .sliderContainer .heroSlider .slick-list,.hero-multimedia-content .sliderContainer .mySlider .slick-list{margin:unset}
.hero-multimedia-content .sliderContainer .heroSlider .PrevArrow.slick-arrow,.hero-multimedia-content .sliderContainer .mySlider .PrevArrow.slick-arrow,.hero-multimedia-content .sliderContainer .heroSlider .NextArrow.slick-arrow,.hero-multimedia-content .sliderContainer .mySlider .NextArrow.slick-arrow{display:none !important}
.hero-multimedia-content .sliderContainer .container-textContainer{height:auto;position:relative;-webkit-box-flex:1;-ms-flex:1;flex:1;display:-webkit-box;display:-ms-flexbox;display:flex}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer{position:static;height:auto;width:100%;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:none}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer>*{width:auto;margin-left:15px;margin-right:15px}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .title{width:345px;line-height:1.19;text-align:center;margin-bottom:8px}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .subtitle{width:345px;line-height:1.17;text-align:center}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .description{width:352px;text-align:center;margin-bottom:48px}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .description.mobile-description{display:block}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .description.desktop-description{display:none}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .buttons{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-top:0}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .buttons .button{width:45%;min-height:32px}
.hero-multimedia-content .sliderContainer .container-textContainer .textContainer .buttons.knowmore{margin-left:22px}
}
.offer-card{width:330px;min-width:330px;min-height:389px;margin:.5rem;position:relative;border-radius:2px;box-shadow:0 2px 4px 0 rgba(0,0,0,0.1),0 3px 10px 0 rgba(0,0,0,0.13);background-color:#fff;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-stretch:normal;letter-spacing:normal;display:flex;flex-direction:column}
.offer-card>.cover{width:100%;height:186px;background-color:#eceff1}
.offer-card>.cover>img{width:100%;height:100%;object-fit:cover;border-top-left-radius:2px;border-top-right-radius:2px}
.offer-card>.cover>div{position:absolute;top:9.6rem;height:32px;width:100%;opacity:.7;background-image:linear-gradient(-180deg,rgba(0,0,0,0) 0,#000 100%)}
.offer-card>.cover>span,.offer-card>.cover>.span{position:absolute;top:9.9rem;left:16px;width:100%;height:24px;text-shadow:0 1px 2px rgba(0,0,0,0.6);font-size:14px;font-weight:500;line-height:1.71;color:#fff;z-index:999}
.offer-card>.body{padding:16px 16px 0;color:#000}
.offer-card>.body>.title{width:100%;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:500;line-height:1.2}
.offer-card>.body>.specs{width:100%;padding-left:0;font-size:14px;font-weight:normal;line-height:1.5;list-style:none;margin-block-end:.5em}
.offer-card>.body>.offer{overflow:hidden}
.offer-card>.body>.offer>.badge{width:54px;height:13px;margin-right:4px;margin-top:2.25px;font-size:11px;font-weight:600;line-height:1.36;text-align:center;color:#d55600;border-radius:3px;border:solid 1px #d55600;text-transform:uppercase;float:left}
.offer-card>.body>.offer>.description{width:calc(100% - 60px);margin-left:60px;font-size:14px;font-weight:normal;line-height:1.5;color:#c1570f}
.offer-card>.body>.price{position:absolute;bottom:50px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;line-height:1.25}
.offer-card>.body>.price>.cost{font-weight:500}
.offer-card>.footer{width:100%;box-sizing:border-box;padding:.5rem 1rem 1rem;text-align:center;margin-top:auto}
.offer-card>.footer>a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;text-decoration:none;font-weight:500;color:#0073ae}
.offer-card>.footer>a>.seemore{line-height:1;text-align:center;padding-top:10px;width:100%;border-top:1px solid #cfd8dc;text-transform:uppercase}
.offer-card>.footer>a:hover{text-decoration:underline}
@media only screen and (max-width:768px){.offer-card{width:100%;margin:0;margin-bottom:1.25rem;min-width:unset}
}
.knowmorecard{padding:0}
.know-more-card-container{background-image:linear-gradient(to right,#005993,#0092c5);width:100%;min-height:402px;color:#fff;box-sizing:border-box;justify-content:space-around;display:flex;padding:2rem 10%}
.know-more-card-container .icon{height:39px;object-fit:contain}
.know-more-card-container .card-item{display:flex;justify-content:center;padding:2rem 6%;flex-direction:column;width:100%;height:100%;box-sizing:border-box;align-items:center;text-align:center}
.know-more-card-container .card-item .title{font-size:20px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;margin:1rem 0 0;line-height:1.3;width:100%}
.know-more-card-container .card-item .description ul li{font-size:16px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;margin:1rem 0;line-height:1.5;width:100%}
.know-more-card-container .card-item .link a{text-decoration:none;font-size:16px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;font-weight:500;color:#eceff1}
.know-more-card-container .card-item .link a:hover{text-decoration:underline}
.know-more-card-container .card-item .link a .chevron{display:inline-block;border-left:2px solid #eceff1;border-bottom:2px solid #eceff1;width:6px;height:6px;transform:rotate(225deg)}
.know-more-card-container .border-1{border-right:.5px solid rgba(0,0,0,0.2)}
.know-more-card-container .border-2{border-left:.5px solid rgba(255,255,255,0.3)}
@media only screen and (max-width:756px){.know-more-card-container{flex-direction:column;align-items:center;padding:2rem 4%;min-height:615px}
.know-more-card-container.one-card{min-height:330px}
.know-more-card-container .card-item{padding:2rem 14%}
.know-more-card-container .border-1{border-bottom:.5px solid rgba(0,0,0,0.2);border-right:none !important}
.know-more-card-container .border-2{border-top:.5px solid rgba(255,255,255,0.3);border-left:none !important}
}
.product-detail-header{color:#f9f9f9;background:linear-gradient(269deg,#333,#1e1e1e);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;padding:61px 36px 20px;z-index:8;position:fixed;width:100%;left:0;box-sizing:border-box;transition:top .4s}
.product-detail-header .color-divider{position:absolute;bottom:-12px;left:0;height:12px;width:100%}
.product-detail-header .color-divider .deco{position:absolute;height:100%}
.product-detail-header .color-divider .deco.item1{width:57%;left:11%;transform:skew(-20deg);background-color:#fff;opacity:.25}
.product-detail-header .color-divider .deco.item2{left:68%;width:22%;transform:skew(-15deg);background-color:#555;opacity:.25}
.product-detail-header.sticky-style{padding:17px 36px}
.product-detail-header.sticky-style .header{display:none}
.product-detail-header.sticky-style .content .value-offer{display:none}
.product-detail-header.sticky-style .content .buttons .adq-now{display:none}
.product-detail-header.sticky-style .content .buttons .buttons-container{margin:0}
.product-detail-header .max-content{max-width:1440px;margin:0 auto}
.product-detail-header .header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:16px}
.product-detail-header .header .header-title{display:inline-block;margin:0;font-size:40px;font-weight:500;line-height:1.25;color:#fff}
.product-detail-header .header .header-badge{margin-left:9px}
.product-detail-header .content{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;align-items:flex-end;-ms-flex-pack:justify;justify-content:space-between}
.product-detail-header .content .value .value-description{height:24px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.71}
.product-detail-header .content .value .value-price-container{min-height:38px}
.product-detail-header .content .value .value-price-container .value-price{font-size:32px;font-weight:500;line-height:1.19;display:inline-block}
.product-detail-header .content .value .value-price-container .value-month{font-size:24px}
.product-detail-header .content .value .value-offer{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.71;color:#f89c1b;margin-right:30px}
.product-detail-header .content .buttons{display:-webkit-box;display:-ms-flexbox;display:flex;flex-direction:column;align-items:center}
.product-detail-header .content .buttons .adq-now{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#f9f9f9}
.product-detail-header .content .buttons .buttons-container{margin-top:12px;display:flex;justify-content:center}
.product-detail-header .content .buttons .buttons-container .for-ant{width:215px;margin-right:16px}
.product-detail-header .content .buttons .buttons-container .for-ant .live-chat-btn{width:100%}
.product-detail-header .content .buttons .buttons-container .for-ant .live-chat-btn .btn{padding:13px 12px;margin:0;height:50px;display:flex;align-items:center;justify-content:center;box-sizing:border-box}
.product-detail-header .content .buttons .buttons-container .acquisition-dropdown-container{width:215px}
.product-detail-header .btn-secondary{background-color:transparent}
.product-detail-header .btn-secondary:hover{background-color:#4a4a4a}
@media only screen and (max-width:768px) and (min-width:481px){.product-detail-header .content .buttons .adq-now{display:none}
.product-detail-header .content .buttons .buttons-container{flex-direction:column;width:190px}
.product-detail-header .content .buttons .buttons-container .for-ant{width:100%;margin-bottom:16px}
.product-detail-header .content .buttons .buttons-container .for-ant .live-chat-btn{width:100%}
.product-detail-header .content .buttons .buttons-container .for-ant .live-chat-btn .btn{height:40px;width:100%;padding:0}
.product-detail-header .content .buttons .buttons-container .acquisition-dropdown-container{width:100%}
.product-detail-header .content .buttons .buttons-container .acquisition-dropdown-container .btn-select{height:40px}
}
@media only screen and (max-width:480px){.product-detail-header{display:-webkit-box;display:-ms-flexbox;display:flex;align-items:flex-start;flex-direction:column;padding:61px 12px 24px}
.product-detail-header.sticky-style{padding:10px 12px 12px}
.product-detail-header .max-content{margin:0;width:100%}
.product-detail-header .header{margin-bottom:32px}
.product-detail-header .header .header-title{font-size:32px;line-height:1.19;color:#f9f9f9}
.product-detail-header .header .header-badge{min-width:87px;margin-left:9px}
.product-detail-header .content{display:-webkit-box;display:-ms-flexbox;display:flex;align-items:flex-start;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}
.product-detail-header .content .value{margin-bottom:12px}
.product-detail-header .content .buttons{justify-content:flex-start;width:100%}
.product-detail-header .content .buttons .adq-now{display:none}
.product-detail-header .content .buttons .buttons-container{width:100%;margin:0;justify-content:space-between}
.product-detail-header .content .buttons .buttons-container .for-ant{width:100%;padding-right:12px;margin:0}
.product-detail-header .content .buttons .buttons-container .for-ant .live-chat-btn{width:100%}
.product-detail-header .content .buttons .buttons-container .for-ant .live-chat-btn .btn{padding:0;height:40px;width:100%;font-size:12px}
.product-detail-header .content .buttons .buttons-container .acquisition-dropdown-container{width:100%}
.product-detail-header .content .buttons .buttons-container .acquisition-dropdown-container .btn-select{height:40px}
}
@media only screen and (max-width:375px){.product-detail-header .header .header-title{font-size:28px}
.product-detail-header .content .value .value-price-container .value-price{font-size:28px}
.product-detail-header .content .value .value-price-container .value-month{font-size:18px}
}
.tvplanscardwithsolidfield{padding:0}
.tv-plans-solid-field-card-container{display:flex;box-sizing:border-box;align-items:flex-start;flex-direction:column;width:100%;padding:1rem 0;min-height:285px}
.tv-plans-solid-field-card-container .icons-container{display:flex;align-items:center;margin-bottom:11px}
.tv-plans-solid-field-card-container .icons-container img{height:23px;object-fit:contain}
.tv-plans-solid-field-card-container .icons-container i{margin:0 .4rem;font-size:32px;color:#00aeef}
.tv-plans-solid-field-card-container .title{text-align:left;margin-bottom:24px}
.tv-plans-solid-field-card-container .title a{display:flex;align-items:center;font-weight:500;font-size:24px;line-height:1.17;color:#242424;text-decoration:none;-webkit-font-smoothing:antialiased;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.tv-plans-solid-field-card-container .title a:hover{color:#0073ae}
.tv-plans-solid-field-card-container .title a .chevron{border-left:2px solid #00aeef;border-bottom:2px solid #00aeef;width:8px;height:8px;margin-left:.5rem;transform:rotate(225deg)}
.tv-plans-solid-field-card-container .divider{margin-bottom:24px;display:block;width:100%;background-color:#cfd8dc;height:1px}
.tv-plans-solid-field-card-container .plans-container{width:100%;display:flex}
.tv-plans-solid-field-card-container .plans-container .feature-container{display:flex;align-items:flex-start;flex-direction:column;flex:1}
.tv-plans-solid-field-card-container .plans-container .feature-container .title{text-align:left;margin-bottom:18px}
.tv-plans-solid-field-card-container .plans-container .feature-container .title a{display:flex;align-items:center;font-weight:500;font-size:16px;line-height:1.5;color:#000;text-decoration:none;-webkit-font-smoothing:antialiased;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.tv-plans-solid-field-card-container .plans-container .feature-container .title a:hover{color:#0073ae}
.tv-plans-solid-field-card-container .plans-container .feature-container .title a .chevron{border-left:1px solid #00aeef;border-bottom:1px solid #00aeef;width:6px;height:6px;margin-left:.2rem;transform:rotate(225deg)}
.tv-plans-solid-field-card-container .plans-container .feature-container .description{text-align:left;line-height:1.31;font-size:16px;color:#000;-webkit-font-smoothing:antialiased;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin-bottom:28px}
.tv-plans-solid-field-card-container .plans-container .feature-container .links{list-style:none;padding:0;margin:0 0 52px;width:fit-content}
.tv-plans-solid-field-card-container .plans-container .feature-container .links li{font-size:16px;margin-bottom:5px;line-height:1.25;min-height:25px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;display:flex;align-items:center}
.tv-plans-solid-field-card-container .plans-container .feature-container .links li a{color:#000;text-decoration:none;display:flex;align-items:center}
.tv-plans-solid-field-card-container .plans-container .feature-container .links li a .chevron{display:inline-block;border-left:1.5px solid #00aeef;border-bottom:1.5px solid #00aeef;width:4px;height:4px;margin-right:16px;margin-left:16px;transform:rotate(225deg)}
.tv-plans-solid-field-card-container .plans-container .feature-container .links li a .badge{margin-left:6px;width:55.9px;height:15px;font-size:11px;font-weight:600;line-height:1.36;text-align:center;color:#d55600;border:solid 1px #d55600;border-radius:3px}
.tv-plans-solid-field-card-container .plans-container .feature-container .links li:hover{border-radius:1px;background-color:#e4effb}
.tv-plans-solid-field-card-container .plans-container .feature-container .links li:hover a{font-weight:600;color:#005993}
.tv-plans-solid-field-card-container .plans-container .feature-container .links li:hover a .chevron{margin-right:8px;margin-left:8px}
@media only screen and (max-width:767px){.tv-plans-solid-field-card-container{align-items:center}
.tv-plans-solid-field-card-container .icons-container{margin-bottom:25px}
.tv-plans-solid-field-card-container .title{text-align:center;margin-bottom:40px}
.tv-plans-solid-field-card-container .title a{font-size:26px;line-height:1.23}
.tv-plans-solid-field-card-container .plans-container{grid-template-columns:auto;grid-column-gap:0;flex-direction:column}
.tv-plans-solid-field-card-container .plans-container .feature-container{align-items:center}
.tv-plans-solid-field-card-container .plans-container .feature-container .title{margin-bottom:16px}
.tv-plans-solid-field-card-container .plans-container .feature-container .description{margin-bottom:32px;text-align:center}
.tv-plans-solid-field-card-container .plans-container .feature-container .links{margin:0 0 32px}
}
.dtv-premium-pack-featured{background-color:#1d1d1d;padding-bottom:50px}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container{width:100%;position:relative;overflow:hidden}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content{align-items:flex-end;box-sizing:border-box;display:flex;min-height:600px;position:relative}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content img{left:50%;position:absolute;top:0;transform:translateX(-50%);vertical-align:middle;visibility:hidden;width:100%}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content img.loaded{animation:fadein forwards 16s;visibility:visible}
@keyframes fadein{from{transform:translateX(-50%) scale(1.2)}
to{transform:translateX(-50%) scale(1)}
}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header{position:relative;text-align:center;width:100%}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header .title-container{margin:0 auto}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header .title-container .subtitle{color:#00aeef;margin:0 auto}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header .title-container .title{display:inline-block;font-size:40px;line-height:48px;margin:0;max-width:50%}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content{margin-top:10px}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels{align-items:center;display:flex;justify-content:center;height:202px;margin:0 11px 0 12px;z-index:2}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels .channel{align-items:center;border-radius:5px;border:solid 1px #4f4f4f;box-sizing:border-box;color:#f9f9f9;display:flex;flex-direction:column;height:109px;justify-content:space-between;margin:0 24px 0 0;padding:11px 0 10px;width:94px}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels .channel:last-child{margin:0}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels .channel .chanel-name,.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels .channel .channel-number{font-size:12px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:18px;text-align:center;margin:0}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels .channel .chanel-name{font-weight:500}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels .channel .chanel-logo{display:block;margin:0 auto;width:100%;max-width:82px}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere{padding:32px 0 72px;z-index:2}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere .dtv-premium-pack-featured-premiere-highlighted{width:100%}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere .dtv-premium-pack-featured-premiere-highlighted .description{color:#f9f9f9;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;line-height:16px;margin:0;text-align:center}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere .dtv-premium-pack-featured-premiere-highlighted .title{color:#f9f9f9;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:18px;line-height:24px;margin:0;text-align:center}
.dtv-premium-pack-featured.mono-channel .dtv-premium-pack-featured-header-content{min-height:685px}
.dtv-premium-pack-featured.mono-channel .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header{position:absolute;top:375px}
@media only screen and (min-width:768px){.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content{align-items:flex-start;min-height:674px}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content img{width:auto}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header{position:relative;margin-top:455px;top:unset}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header .title-container .title{font-size:60px;line-height:1;max-width:920px}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content{align-items:center;display:flex;margin:-96px auto 0;max-width:912px;position:relative}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels{border:0;border-bottom:0}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels.display-border{border-right:solid 2px #4f4f4f}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels.full-width,.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere.full-width{width:100%}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .channels,.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere{box-sizing:border-box;height:109px;margin:47px 0;width:50%}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere{padding:30px 0}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere .dtv-premium-pack-featured-premiere-highlighted .description{font-size:14px;line-height:24px}
.dtv-premium-pack-featured .dtv-premium-pack-featured-content .dtv-premium-pack-featured-premiere .dtv-premium-pack-featured-premiere-highlighted .title{font-size:24px;line-height:24px}
.dtv-premium-pack-featured.mono-channel{margin-bottom:70px}
.dtv-premium-pack-featured.mono-channel .dtv-premium-pack-featured-header-container{padding-bottom:0}
.dtv-premium-pack-featured.mono-channel .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header{margin-top:424px}
}
@media only screen and (max-width:480px){.dtv-premium-pack-featured{padding-bottom:125px}
.dtv-premium-pack-featured .dtv-premium-pack-featured-header-container .dtv-premium-pack-featured-header-content .dtv-premium-pack-featured-header .title-container .title{max-width:100%}
}
@media only screen and (max-width:768px){.dtv-premium-pack-featured{padding-bottom:150px}
}
.resolution-comparator{user-select:none}
.resolution-comparator *{user-select:none}
.resolution-comparator .container{position:relative;width:890px;height:479px;background-image:url('clientlib-site/css/resources/components/resolutioncomparator/tv.png');background-repeat:no-repeat;background-size:contain}
.resolution-comparator .container .background{background-image:url("clientlib-site/css/resources/components/resolutioncomparator/4k-image.jpg");background-repeat:no-repeat;position:absolute;top:2px;left:82px;width:714px;height:401px;background-size:cover}
.resolution-comparator .container .foreground{position:absolute;top:2px;left:82px;width:357px;height:401px;overflow:hidden}
.resolution-comparator .container .foreground img,.resolution-comparator .container .foreground img::after{content:url("clientlib-site/css/resources/components/resolutioncomparator/HD-image.jpg");width:714px;height:401px;object-fit:cover;display:-webkit-flex;display:-ms-flexbox;display:flex}
.resolution-comparator .container .vert-line{position:absolute;width:4px;height:401px;top:2px;left:439px;background:#fff}
.resolution-comparator .container .hori-button{background:#fff;width:55px;height:40px;border-radius:20px;position:absolute;top:188.5px;left:411.5px;display:flex;justify-content:center;padding:0 5px;cursor:pointer;background-image:url("clientlib-site/css/resources/components/resolutioncomparator/slide.png");background-repeat:no-repeat;background-position-x:18px;background-position-y:10px}
.resolution-comparator .container .icons{display:flex;justify-content:space-between;position:absolute;top:18px;left:82px;z-index:1;width:714px;height:30px}
.resolution-comparator .container .icons .icon-left,.resolution-comparator .container .icons .icon-left::after{content:url('../../../content/dam/public-sites/plans/images/regular-button.png');width:148px;height:42px;margin-left:20px}
.resolution-comparator .container .icons .icon-right,.resolution-comparator .container .icons .icon-right::after{content:url('../../../content/dam/public-sites/plans/images/directv-button.png');width:148px;height:42px;margin-right:20px}
@media only screen and (max-width:480px){.resolution-comparator .container .icons{justify-content:center}
.resolution-comparator .container .icons .icon-left{margin-left:26px;width:134px;height:38px}
.resolution-comparator .container .icons .icon-right{margin-left:44px;width:134px;height:38px}
}
@supports(-ms-ime-align:auto){.resolution-comparator .container .foreground img,.resolution-comparator .container .foreground img::after{background-image:url("clientlib-site/css/resources/components/resolutioncomparator/HD-image.jpg");background-repeat:no-repeat;background-size:cover}
.resolution-comparator .container .icons .icon-right,.resolution-comparator .container .icons .icon-right::after{background-image:url('clientlib-site/css/resources/components/resolutioncomparator/DTV 4k Logo.png');background-repeat:no-repeat;background-size:cover}
.resolution-comparator .container .icons .icon-left,.resolution-comparator .container .icons .icon-left::after{background-image:url('clientlib-site/css/resources/components/resolutioncomparator/HD.png');background-repeat:no-repeat;background-size:cover}
}
.featuredproduct{padding:0}
.featured-product-container{height:43.54vw;max-height:627px;background-image:url('../../../content/dam/public-sites/plans/images/aem-324-back.png');background-size:cover;background-position:top left;background-repeat:no-repeat;display:flex;justify-content:center;align-items:center}
.featured-product-container .component-content{width:100%;max-width:1440px;height:100%;display:flex;justify-content:center;align-items:center}
.featured-product-container .featured-image{width:30%;max-height:435px;object-fit:cover;margin-left:15.65%}
.featured-product-container .title-cont{width:40.69%;display:flex;flex-direction:column;justify-content:center;text-align:left;margin-left:13.68%}
.featured-product-container .title-cont .title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:40px;font-weight:bold;font-style:normal;font-stretch:normal;line-height:1.25;letter-spacing:normal;color:#000;margin:0}
.featured-product-container .title-cont .description{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.17;letter-spacing:normal;color:#000;margin-top:22px}
.featured-product-container .title-cont .subtitle{text-decoration:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;color:#0073ae;margin-top:29px;width:100%;display:flex;align-items:center}
.featured-product-container .title-cont .subtitle .chevron{display:inline-block;border-left:2px solid #0073ae;border-bottom:2px solid #0073ae;width:.5em;height:.5em;margin-left:.5rem;transform:rotate(225deg)}
@media only screen and (max-width:768px){.featured-product-container{height:192.5vw;min-height:722px;background-image:linear-gradient(to bottom,rgba(209,237,252,0),#fff)}
.featured-product-container .component-content{flex-direction:column}
.featured-product-container .featured-image{order:2;width:315px;margin:39px 0 57px}
.featured-product-container .title-cont{order:1;width:84%;margin:0;text-align:center}
.featured-product-container .title-cont .title{font-size:30px;line-height:1.33}
.featured-product-container .title-cont .description{font-size:18px;line-height:1.56}
.featured-product-container .title-cont .subtitle{font-size:16px;margin-top:31px;justify-content:center}
.featured-product-container .title-cont .subtitle .chevron{width:.3em;height:.3em;margin-left:.1em}
}
.resolution-comparator-container-empty{width:100%;text-align:center}
.resolution-comparator-container{background-image:url('../../../content/dam/public-sites/plans/images/4k-container.png');background-repeat:no-repeat;background-size:cover;background-position:top center}
.resolution-comparator-container .comparator-container{height:100%;width:100%;box-sizing:border-box;max-width:1440px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-stretch:normal;font-weight:normal;letter-spacing:normal;color:#fff;padding-top:123px}
.resolution-comparator-container .comparator-container .comparator-header .comparator-title .title{font-size:24px;line-height:1;padding-left:4.55%}
.resolution-comparator-container .comparator-container .comparator-header .comparator-title .subtitle{font-size:40px;font-weight:bold;line-height:1.25;color:#fff;padding-left:4.55%}
.resolution-comparator-container .comparator-container .comparator-header .comparator{margin-top:53px;margin-bottom:65px;margin-left:-14px}
.resolution-comparator-container .comparator-container .programs{display:flex;flex-direction:column;align-items:center;margin-bottom:10px}
.resolution-comparator-container .comparator-container .programs .programs-title{display:flex;justify-content:center;align-items:center;width:85%}
.resolution-comparator-container .comparator-container .programs .programs-title .programs-left-line{flex:1;height:2px;background:-moz-linear-gradient(left,rgba(255,255,255,0) 0,#fff 100%);background:-webkit-linear-gradient(left,rgba(255,255,255,0) 0,#fff 100%);background:linear-gradient(to right,rgba(255,255,255,0) 0,#fff 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr='#00ffffff',endColorstr='#ffffff',GradientType=1)}
.resolution-comparator-container .comparator-container .programs .programs-title .programs-text{font-size:18px;line-height:1.33;padding:0 17px;text-align:center;max-width:60%}
.resolution-comparator-container .comparator-container .programs .programs-title .programs-right-line{flex:1;height:2px;background:-moz-linear-gradient(left,#fff 0,rgba(255,255,255,0) 100%);background:-webkit-linear-gradient(left,#fff 0,rgba(255,255,255,0) 100%);background:linear-gradient(to right,#fff 0,rgba(255,255,255,0) 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff',endColorstr='#00ffffff',GradientType=1)}
.resolution-comparator-container .comparator-container .programs .programs-icon{margin-top:23px;display:flex;justify-content:center;flex-wrap:wrap}
.resolution-comparator-container .comparator-container .programs .programs-icon .program-icon{align-items:center;border-radius:10px;border:1px solid rgba(255,255,255,0.1);box-sizing:border-box;display:flex;flex-basis:140px;height:70px;justify-content:center;margin:0 32px 20px;padding:16px;width:145px}
.resolution-comparator-container .comparator-container .programs .programs-icon .program-icon img{max-width:100%}
@media only screen and (min-width:480px) and (max-width:1024px){.resolution-comparator-container .comparator-container{background-image:url('../../../content/dam/public-sites/plans/images/4k-container-tablet.png');background-size:cover;overflow:hidden;display:flex;flex-direction:column;align-items:center;height:auto;padding-top:0}
.resolution-comparator-container .comparator-container .comparator-header{display:flex;flex-direction:column;width:100vw}
.resolution-comparator-container .comparator-container .comparator-header .comparator-title{display:flex;flex-direction:column;align-items:center;margin-top:54px;margin-bottom:52px;margin-left:35px;margin-right:35px;text-align:center}
.resolution-comparator-container .comparator-container .comparator-header .comparator-title .title{padding-left:0}
.resolution-comparator-container .comparator-container .comparator-header .comparator-title .subtitle{padding-left:0}
.resolution-comparator-container .comparator-container .comparator-header .comparator{margin-top:0;margin-bottom:89px;margin-left:12px;overflow:hidden;height:408px;display:flex;justify-content:center}
.resolution-comparator-container .comparator-container .programs{width:100vw;margin-bottom:36px}
.resolution-comparator-container .comparator-container .programs .programs-icon{width:700px}
.resolution-comparator-container .comparator-container .programs .programs-icon .program-icon{margin:0 15px 34px}
.resolution-comparator-container .comparator-container.main-container{padding:0}
}
@media only screen and (max-width:480px){.resolution-comparator-container .comparator-container{padding-top:0;background-image:url('../../../content/dam/public-sites/plans/images/4k-container-tablet.png')}
.resolution-comparator-container .comparator-container .comparator-header{display:flex;flex-direction:column-reverse}
.resolution-comparator-container .comparator-container .comparator-header .comparator-title{display:flex;flex-direction:column;align-items:center;margin-bottom:30px;margin-top:8px}
.resolution-comparator-container .comparator-container .comparator-header .comparator-title .title{font-size:18px;line-height:2.56;height:auto;text-align:center;padding-left:0;margin-bottom:8px;margin-left:21px;margin-right:21px}
.resolution-comparator-container .comparator-container .comparator-header .comparator-title .subtitle{font-size:48px;font-weight:500;text-align:center;line-height:1.21;padding-left:0;margin-left:33px;margin-right:34px}
.resolution-comparator-container .comparator-container .comparator-header .comparator{margin-top:0;margin-bottom:0;overflow:hidden;height:415px;display:flex;justify-content:center}
.resolution-comparator-container .comparator-container .programs{margin-bottom:0}
.resolution-comparator-container .comparator-container .programs .programs-title .programs-text{max-width:71%}
.resolution-comparator-container .comparator-container .programs .programs-icon{margin-top:30px}
.resolution-comparator-container .comparator-container .programs .programs-icon .program-icon{margin:0 11px 30px}
.resolution-comparator-container .comparator-container.main-container{padding:0}
.main-container{padding:0}
}
@media only screen and (max-width:360px){.resolution-comparator-container .comparator-container .programs .programs-icon .program-icon{margin:0 5px 30px}
}
.product-feature-container{min-height:674px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-stretch:normal;font-weight:normal;letter-spacing:normal;color:#fff;background-image:var(--bg-desktop);background-position:top center;background-repeat:no-repeat;background-size:cover;overflow:hidden;position:relative}
.product-feature-container .feature-plans{margin-top:382px;width:80%;margin-left:auto;margin-right:auto}
.product-feature-container .feature-plans .feature-plan-title{display:flex;justify-content:center;align-items:center;width:100%}
.product-feature-container .feature-plans .feature-plan-title .feature-plan-left-line{flex:1;height:2px;background:-moz-linear-gradient(left,rgba(255,255,255,0) 0,#fff 100%);background:-webkit-linear-gradient(left,rgba(255,255,255,0) 0,#fff 100%);background:linear-gradient(to right,rgba(255,255,255,0) 0,#fff 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff',endColorstr='#ffffff',GradientType=1)}
.product-feature-container .feature-plans .feature-plan-title .feature-plan-text{font-size:18px;line-height:1.33;padding:0 17px;text-align:center;max-width:60%}
.product-feature-container .feature-plans .feature-plan-title .feature-plan-right-line{flex:1;height:2px;background:-moz-linear-gradient(left,#fff 0,rgba(255,255,255,0) 100%);background:-webkit-linear-gradient(left,#fff 0,rgba(255,255,255,0) 100%);background:linear-gradient(to right,#fff 0,rgba(255,255,255,0) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#00ffffff',GradientType=1)}
.product-feature-container .feature-plans .feature-plan-icon-container{margin-top:16px;display:flex;justify-content:center;flex-wrap:wrap}
.product-feature-container .feature-plans .feature-plan-icon-container .feature-plan-icon{width:190px;object-fit:contain;margin-bottom:7px}
.product-feature-container .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature{display:flex;padding:9px 24px;position:relative;object-fit:contain;font-style:normal;font-stretch:normal;letter-spacing:normal;flex-direction:column;align-items:center;text-align:center;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#fff}
.product-feature-container .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature>.feature-icon{width:56px;height:36px;object-fit:contain}
.product-feature-container .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature>.feature-icon>img{max-width:100%;max-height:100%;vertical-align:middle}
.product-feature-container .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature>.feature-body{text-align:center;margin-top:25px}
.product-feature-container .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature>.feature-body>.feature-title{height:auto;font-size:19.4px;font-weight:bold;line-height:1.33}
.product-feature-container .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature>.feature-body>.feature-description{height:auto;font-size:16px;font-weight:normal;margin-top:4px;line-height:1.25}
.product-feature-container .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature>.feature-body>.feature-description>a{color:#fff}
.product-feature-container .is-callToAction{text-decoration:underline}
.product-feature-container.mobile-tablets-style{background-image:var(--bg-mobile)}
.product-feature-container.mobile-tablets-style .feature-plans{width:100%}
.product-feature-container.mobile-tablets-style .feature-plans .feature-plan-icon-container{flex-direction:column;margin-bottom:91px}
.product-feature-container.mobile-tablets-style .feature-plans .feature-plan-icon-container .feature-plan-icon{width:auto}
.product-feature-container.mobile-tablets-style .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature{flex-direction:column;justify-content:center;align-items:center}
.product-feature-container.mobile-tablets-style .feature-plans .feature-plan-icon-container .feature-plan-icon .product-feature>.feature-body{text-align:center;align-items:center;margin-left:0;margin-top:18px}
.premium-packages-tabs{width:100%;overflow:auto;position:relative;margin-top:80px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-style:normal;font-stretch:normal;line-height:1.2;letter-spacing:normal;font-weight:normal;color:#4a4a4a;box-sizing:border-box}
.premium-packages-tabs .tabs-container{display:flex;border-bottom:1px solid #cfd8dc;min-width:100%;overflow-x:auto}
.premium-packages-tabs .tabs-container .tab-item{display:flex;justify-content:center;align-items:center;text-align:center;flex:1;padding:16px 20px;cursor:pointer;position:relative}
.premium-packages-tabs .tabs-container .tab-item.tab-active{font-weight:500;color:#242424}
.premium-packages-tabs .tabs-container .tab-item.tab-active .tab-indicator{opacity:1}
.premium-packages-tabs .tabs-container .tab-item:hover{font-weight:500}
.premium-packages-tabs .tabs-container .tab-indicator{width:100%;height:7px;background-color:#00aeef;position:absolute;bottom:0;left:0;opacity:0;transition:opacity .5s ease-out}
.premium-packages-tabs .tabs-container::-webkit-scrollbar{display:none}
.premium-packages-tabs .tabs-contents{padding-top:32px;padding-left:1px;padding-right:1px}
.premium-packages-tabs .tabs-contents .tab-content{display:none;padding-right:2px;padding-left:2px}
.premium-packages-tabs .tabs-contents .tab-content.tab-content-active{display:block}
.wizard-header{color:#f9f9f9;background:linear-gradient(269deg,#333,#1e1e1e);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;padding-top:62px;padding-bottom:20px;box-sizing:border-box;width:100%;display:flex;justify-content:center;z-index:8;align-items:center;position:fixed;left:0;transition:top .4s}
.wizard-header .wizard-header-content{box-sizing:border-box;max-width:1440px;padding:0 24px 0 36px;visibility:hidden;width:100%}
.wizard-header.header-wizard .wizard-header-content,.wizard-header.header-premium .wizard-header-content{visibility:visible}
.wizard-header .header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:16px}
.wizard-header .header .header-title{display:inline-block;margin:0;font-size:40px;font-weight:500;line-height:1.25;color:#fff}
.wizard-header .header .badge{display:flex;margin-left:16px}
.wizard-header .header .header-badge:last-child{margin-left:9px}
.wizard-header .content{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;align-items:flex-end}
.wizard-header .content .value{flex:1}
.wizard-header .content .value .value-description{height:24px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.71}
.wizard-header .content .value .value-price-container{height:38px}
.wizard-header .content .value .value-price-container .value-price{font-size:32px;font-weight:500;line-height:1.19;display:inline-block}
.wizard-header .content .value .value-price-container .value-month{font-size:24px}
.wizard-header .content .value .value-offer{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.71;color:#f89c1b;margin-right:30px}
.wizard-header .content .value .value-offer .order-resume{display:none}
.wizard-header .content .value .order-resume{display:none;text-decoration:underline}
.wizard-header .content .value .message-finish{color:#f9f9f9;font-size:32px;font-weight:500;font-style:normal;line-height:1.19;display:none}
.wizard-header .content .buttons{display:flex;justify-content:flex-end;height:100%;width:51%;flex:2}
.wizard-header .content .buttons .additional-button{margin-right:16px}
.wizard-header .content .buttons .additional-button .btn{height:50px;width:215px;box-sizing:border-box}
.wizard-header .content .buttons .acquisition-dropdown-container{width:215px}
.wizard-header.sticky-style{z-index:10;padding-top:17px;padding-bottom:17px;padding-left:32px}
.wizard-header.sticky-style .header{display:none}
.wizard-header.sticky-style .content .value .value-offer{display:none}
.wizard-header.sticky-style .content .buttons{margin-bottom:7px}
.wizard-header.sticky-style+div:first-of-type{height:auto}
.wizard-header.header-wizard .header .header-badge.prepaid{display:none}
.wizard-header.header-wizard .content .value .value-prepaid .plan-type{display:none}
.wizard-header.header-wizard .content .value .value-postpaid,.wizard-header.header-wizard .content .value .value-divider{display:none}
.wizard-header.header-premium{padding-bottom:23px}
.wizard-header.header-premium .wizard-header-content{padding:0 25px 0 12px}
.wizard-header.header-premium .header{margin-bottom:5.1px}
.wizard-header.header-premium .header .header-badge.prepaid{display:block}
.wizard-header.header-premium .header .header-badge:last-child{margin-left:15px}
.wizard-header.header-premium .content .value{display:flex}
.wizard-header.header-premium .content .value .plan-type{display:block;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.71;letter-spacing:normal;color:#f9f9f9;margin-bottom:5px}
.wizard-header.header-premium .content .value .value-divider{border-left:1px solid #cfd8dc;margin-right:11px}
.wizard-header.header-premium .content .value .value-prepaid .value-description{display:none}
.wizard-header.header-premium .content .value .value-postpaid{display:block;min-width:224px}
.wizard-header.header-premium .content .value .hideElement{display:none !important}
.wizard-header.header-premium .content .buttons{flex:1}
.wizard-header.header-premium.sticky-style{padding-left:0;padding-bottom:14px}
.wizard-header.header-premium.sticky-style .wizard-header-content .content{align-items:unset}
.wizard-header.header-premium.sticky-style .wizard-header-content .content .buttons{margin-top:7px}
@media only screen and (max-width:1440px){.wizard-header.header-premium .wizard-header-content{padding:0 24px}
}
@media only screen and (min-width:768px) and (max-width:970px){.wizard-header .wizard-header-content{padding:0 12px}
.wizard-header .content{display:flex;flex-direction:column;align-items:unset}
.wizard-header .content .value{margin-bottom:32px}
.wizard-header .content .value .order-resume{display:inline;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-stretch:normal;line-height:1.5;color:#00aeef}
.wizard-header .content .buttons{justify-content:stretch;width:100%}
.wizard-header.header-premium .content{flex-direction:row;align-items:flex-end}
.wizard-header.header-premium .content .value{flex:2;margin-bottom:0}
.wizard-header.header-premium .content .value .order-resume{display:none}
.wizard-header.header-premium .content .buttons{flex-direction:column;width:190px}
.wizard-header.header-premium .content .buttons .additional-button{width:100%;margin-bottom:16px}
.wizard-header.header-premium .content .buttons .additional-button .btn{height:40px;width:100%;padding:0}
.wizard-header.header-premium .content .buttons .acquisition-dropdown-container{width:100%}
.wizard-header.header-premium .content .buttons .acquisition-dropdown-container .btn-select{height:40px}
}
@media only screen and (max-width:768px){.wizard-header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:62px 11px 24px 12px}
.wizard-header .wizard-header-content{padding:0 12px}
.wizard-header .header{margin-bottom:32px}
.wizard-header .header .header-title{font-size:32px;line-height:1.19;color:#f9f9f9}
.wizard-header .header .header-badge:last-child{margin-left:9px}
.wizard-header .content{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;align-items:unset}
.wizard-header .content .value{margin-bottom:32px}
.wizard-header .content .value .value-offer{margin-right:2px;display:block}
.wizard-header .content .value .order-resume{display:inline;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-stretch:normal;line-height:1.5;color:#00aeef}
.wizard-header .content .buttons{justify-content:space-between;width:100%}
.wizard-header .content .buttons .additional-button{width:100%;padding-right:12px;margin:0}
.wizard-header .content .buttons .additional-button .btn{padding:0;height:40px;width:100%;font-size:12px}
.wizard-header .content .buttons .acquisition-dropdown-container{width:100%}
.wizard-header .content .buttons .acquisition-dropdown-container .btn-select{height:40px}
.wizard-header.sticky-style{padding-top:8px;padding-left:11px;padding-right:12px;padding-bottom:12px}
.wizard-header.sticky-style .header{display:none}
.wizard-header.sticky-style .content .value{display:block;margin-bottom:0}
.wizard-header.sticky-style .content .value .value-description{float:left;margin-right:6px}
.wizard-header.sticky-style .content .value .value-price-container{height:auto;float:left;font-size:14px;line-height:1.71}
.wizard-header.sticky-style .content .value .value-price-container .value-price{font-size:inherit}
.wizard-header.sticky-style .content .value .value-price-container .value-month{font-size:inherit}
.wizard-header.sticky-style .content .value .value-offer{display:none}
.wizard-header.sticky-style .content .value .order-resume{float:right;font-size:14px}
.wizard-header.sticky-style .content .buttons{margin-bottom:0}
.wizard-header.sticky-style div:last-of-type{height:auto}
.wizard-header.header-premium{padding-bottom:25px}
.wizard-header.header-premium .wizard-header-content{padding:0}
.wizard-header.header-premium .header{margin-bottom:28px}
.wizard-header.header-premium .header .header-badge.prepaid{display:block}
.wizard-header.header-premium .content .value{display:flex;justify-content:center;text-align:center;margin-bottom:24px}
.wizard-header.header-premium .content .value .order-resume{display:none}
.wizard-header.header-premium .content .value .plan-type{display:block}
.wizard-header.header-premium .content .value .value-price-container{height:auto}
.wizard-header.header-premium .content .value .value-price-container .value-price,.wizard-header.header-premium .content .value .value-price-container .value-month{font-size:20px}
.wizard-header.header-premium .content .value .value-prepaid{flex:1;margin:0}
.wizard-header.header-premium .content .value .value-prepaid .value-description{display:none}
.wizard-header.header-premium .content .value .value-postpaid{flex:1;padding:0;margin:0;display:block;min-width:0}
.wizard-header.header-premium.sticky-style{padding-left:11px;padding-right:12px;padding-top:15px;padding-bottom:12px}
.wizard-header.header-premium.sticky-style .content .value-price-container{float:none}
.wizard-header.header-premium.sticky-style .content .value{margin-bottom:20px}
}
@media only screen and (max-width:479px){.wizard-header .header{flex-direction:column}
.wizard-header .header .badge{margin-left:0;margin-top:8px}
.wizard-header .header .header-title{font-size:20px}
}
.premiumpackagecontainer{padding:0}
.premium-package-container{width:99%;margin:10px auto 27px;box-sizing:border-box;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;border-radius:5px;border:1px solid #cfd8dc;box-shadow:0 8px 16px 0 rgba(0,0,0,0.1)}
.premium-package-container div{box-sizing:border-box}
.premium-package-container .component-content{width:100%;border-radius:5px}
.premium-package-container .component-content .header{background-image:linear-gradient(to left,#4d4d4d,#1e1e1e);width:100%;padding:0 3.48%;display:flex;align-items:center;height:71px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:26px;font-weight:500;line-height:1.23;color:#fff;border-radius:5px 5px 0 0}
.premium-package-container .component-content .color-divider{position:relative;height:6px;width:100%}
.premium-package-container .component-content .color-divider .logo{position:absolute;height:100%}
.premium-package-container .component-content .color-divider .logo.item1{width:57%;left:11%;transform:skew(-20deg);background-color:#fff;opacity:.25}
.premium-package-container .component-content .color-divider .logo.item2{left:68%;width:22%;transform:skew(-15deg);background-color:#555;opacity:.25}
.premium-package-container .component-content .accordeon-container{height:185px;overflow:hidden;position:relative;border-radius:0 0 5px 5px}
.premium-package-container .component-content .accordeon-container.remove-pack .accordeon-content .lateral-menu .remove-pack-btn{display:flex}
.premium-package-container .component-content .accordeon-container.remove-pack:not(.open-accordeon){height:235px}
.premium-package-container .component-content .accordeon-container.remove-pack:not(.open-accordeon) .accordeon-action-btn{height:106px}
.premium-package-container .component-content .accordeon-container .accordeon-content{display:flex}
.premium-package-container .component-content .accordeon-container .accordeon-content .main{width:64%}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content{padding:18px 5.43% 60px}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .description{min-height:48px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:18px;line-height:1.33;color:#000}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .logos-container{margin-top:17px;display:grid;grid-template-columns:repeat(auto-fill,minmax(96px,1fr));grid-gap:4px 8px}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .logos-container img{margin:8px auto;height:32px;width:92%;object-fit:contain}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .without-cost{margin:16px 0;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.31;color:#4a4a4a}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .divider{margin-top:24px;height:1px;background-color:#cfd8dc}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .features{list-style-type:none;padding-left:0;margin-top:32px}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .features li{display:flex;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.31;color:#000;margin-bottom:21px}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .features li.offer{line-height:1.25;color:#d55600}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .features li.offer::before{background:0}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .features li .dtv-public-icon-check{color:#8bc34a;margin-right:16px;margin-top:5px;width:16px}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu{padding:26px 2.61%;width:36%;background-image:linear-gradient(to bottom,#f7f7f7,#f1f1f1)}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price{display:flex;align-items:stretch;height:61px}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item1,.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item2{display:flex;flex-direction:column;align-items:center;justify-content:center}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item1 .label,.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item2 .label{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.14;color:#0e0e0e}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item1 .value,.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item2 .value{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;line-height:1;color:#0e0e0e}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item1 .month,.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item2 .month{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;color:#0e0e0e}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item1{flex:4}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .chann-price .item2{flex:7;border-left:1px solid #cfd8dc}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .add-pack-btn{margin-top:26px;width:100%;height:48px}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .remove-pack-btn{margin:24px auto 0;width:auto;cursor:pointer;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500;text-align:center;font-size:16px;line-height:1.5;color:#0073ae;display:none;justify-content:center;align-items:center}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu .remove-pack-btn .x{margin-right:11.6px}
.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn{width:64%;height:56px;display:flex;background-color:#fff;justify-content:center;position:absolute;bottom:0;left:0}
.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn>div{display:flex;justify-content:center;align-items:center}
.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn>div .text{cursor:pointer;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;line-height:1.5;color:#0073ae;order:1}
.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn>div .x,.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn>div .plus{color:#0073ae;order:2;margin-left:4px}
.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn>div .x::before,.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn>div .plus::before{font-size:22px}
@media only screen and (max-width:768px){.premium-package-container .component-content .header{justify-content:center}
.premium-package-container .component-content .accordeon-container{height:408px}
.premium-package-container .component-content .accordeon-container.remove-pack .lateral-menu{padding:25px 16px 38px !important}
.premium-package-container .component-content .accordeon-container.remove-pack .lateral-menu .chann-price{display:none}
.premium-package-container .component-content .accordeon-container.remove-pack .accordeon-action-btn{height:56px !important}
.premium-package-container .component-content .accordeon-container .accordeon-content{flex-direction:column}
.premium-package-container .component-content .accordeon-container .accordeon-content .main{width:100%;height:226px}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content{padding:24px 16px 56px}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .description{min-height:63px;text-align:center}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .logos-container{margin-top:24px}
.premium-package-container .component-content .accordeon-container .accordeon-content .main .main-content .includes{display:none}
.premium-package-container .component-content .accordeon-container .accordeon-content .lateral-menu{width:100%;padding:25px 16px 24px}
.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn{width:100%;bottom:181px}
.premium-package-container .component-content .accordeon-container .accordeon-content .accordeon-action-btn>div .text{order:2}
}
.j-pose{left:0 !important;top:0 !important}
.orderresume-wrapper{display:none;padding:0 12px 17px;width:100%;box-sizing:border-box;height:100%;background-color:#fff;font-style:normal;font-stretch:normal;letter-spacing:normal;overflow:auto;z-index:1001}
.orderresume-wrapper>.orderresume-close{position:fixed;width:100%;box-sizing:border-box;height:24px;top:0;left:0;padding:16px 12px;background-color:#fff;z-index:1010}
.orderresume-wrapper>.orderresume-close::after{float:right;content:'\2715';top:0;bottom:0;left:0;right:0;font-size:24px;color:#000;line-height:24px;text-align:center;cursor:pointer}
.orderresume-wrapper>.orderresume-container{width:100%;padding:24px 16px 20px;box-sizing:border-box;margin-bottom:32px;margin-top:56px;border-radius:5px;border:1px solid #cfd8dc}
.orderresume-wrapper>.orderresume-container>.orderresume-header{margin-bottom:32px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.orderresume-wrapper>.orderresume-container>.orderresume-header>.outer-circle{display:none}
.orderresume-wrapper>.orderresume-container>.orderresume-header>.orderresume-title-content>.orderresume-subtitle{margin:6px 0;font-size:16px;font-weight:normal;line-height:1.75;color:#4a4a4a}
.orderresume-wrapper>.orderresume-container>.orderresume-header>.orderresume-title-content>.orderresume-subtitle>label{display:none}
.orderresume-wrapper>.orderresume-container>.orderresume-header>.orderresume-title-content>.orderresume-title{margin:2px 0;font-size:24px;font-weight:500;line-height:1.17;color:#242424}
.orderresume-wrapper>.orderresume-container>.orderresume-body{position:relative}
.orderresume-wrapper>.orderresume-container>.orderresume-body>ul{list-style-type:none;margin:0;padding:0}
.orderresume-wrapper>.orderresume-container>.orderresume-body>ul>li{margin-bottom:20px}
.orderresume-wrapper>.orderresume-container>.orderresume-body>ul>li>.orderresume-checkmark{float:left;margin-top:6px;width:16px;height:12px;background:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2716%27%20height%3D%2712%27%20viewBox%3D%270%200%2016%2012%27%3E%3Cg%20fill%3D%27none%27%20fill-rule%3D%27evenodd%27%3E%3Cpath%20d%3D%27M0-3h16v16H0z%27%20%2F%3E%3Cpath%20fill%3D%27%238BC34A%27%20fill-rule%3D%27nonzero%27%20d%3D%27M4.683%208.708l9.658-8.46a1%201%200%200%201%201.318%201.504L5.285%2010.84a1%201%200%200%201-1.378-.057L.28%207.032a1%201%200%200%201%201.438-1.39l2.964%203.066z%27%20%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E") no-repeat}
.orderresume-wrapper>.orderresume-container>.orderresume-body>ul>li>.orderresume-label{margin-left:32px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;line-height:1.25;color:#000}
.orderresume-wrapper .orderresume-footer{position:absolute;margin:50px -15px 0;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:1.43;color:#4a4a4a}
@media only screen and (min-width:970px){.orderresume-wrapper{display:block;position:initial;width:100%;box-sizing:border-box;padding:0;overflow:none;z-index:1}
.orderresume-wrapper>.orderresume-close{display:none}
.orderresume-wrapper>.orderresume-container{width:100%;box-sizing:border-box;padding:24px 32px 20px;margin-bottom:6px;margin-top:0}
.orderresume-wrapper>.orderresume-container>.orderresume-body>ul>li>.orderresume-label{margin-left:34px}
.orderresume-wrapper .orderresume-footer{margin:50px -32px 0}
}
.expandedresume{display:block;background-color:transparent;padding-bottom:20px;overflow-y:hidden}
.expandedresume>.orderresume-close{display:none}
.expandedresume>.orderresume-container{width:100%;padding:0;background-image:linear-gradient(269deg,#4d4d4d,#1e1e1e);box-shadow:0 8px 16px 0 rgba(0,0,0,0.1);border:0}
.expandedresume>.orderresume-container>.orderresume-header{margin-bottom:0;padding:8px 25px;padding-left:9px;display:flex}
.expandedresume>.orderresume-container>.orderresume-header>.outer-circle{display:block;min-width:32px;min-height:32px;margin:16px;border-radius:50%;background-color:#4d4d4d;background-image:url('../../../content/dam/public-sites/wizard/images/check-small-green.png');background-position:center center;background-repeat:no-repeat}
.expandedresume>.orderresume-container>.orderresume-header>.outer-circle>.inner-circle{color:transparent;background:transparent}
.expandedresume>.orderresume-container>.orderresume-header>.orderresume-title-content>.orderresume-subtitle{margin:0;font-size:16px;font-weight:normal;line-height:1.75;color:#fff}
.expandedresume>.orderresume-container>.orderresume-header>.orderresume-title-content>.orderresume-title{margin:0;font-size:24px;line-height:1.17;color:#fff}
.expandedresume>.orderresume-container>.orderresume-body{position:relative;background:#fff;padding:26px 15px 32px;border-bottom-left-radius:5px;border-bottom-right-radius:5px}
.expandedresume>.orderresume-container>.orderresume-body .orderresume-footer{margin:0 0 0 -15px;color:#fff;position:absolute;bottom:calc(-32px - 18px)}
@media only screen and (max-width:480px){.expandedresume{padding-bottom:45px}
.expandedresume .orderresume-container>.orderresume-body .orderresume-footer{bottom:calc(-32px - 45px)}
}
@media only screen and (min-width:970px){.expandedresume>.orderresume-container>.orderresume-header{padding:22px 27px 26px}
.expandedresume>.orderresume-container>.orderresume-header>.outer-circle{margin:0 16px}
.expandedresume>.orderresume-container>.orderresume-header>.orderresume-title-content{display:flex}
.expandedresume>.orderresume-container>.orderresume-header>.orderresume-title-content>.orderresume-subtitle{font-size:26px;font-weight:300;line-height:1.23}
.expandedresume>.orderresume-container>.orderresume-header>.orderresume-title-content>.orderresume-subtitle>label{display:initial}
.expandedresume>.orderresume-container>.orderresume-header>.orderresume-title-content>.orderresume-title{font-size:26px;line-height:1.23}
.expandedresume>.orderresume-container>.orderresume-body{padding:25px 52px 52px}
.expandedresume>.orderresume-container>.orderresume-body>ul{display:flex;flex-wrap:wrap}
.expandedresume>.orderresume-container>.orderresume-body>ul>li{width:50%}
.expandedresume>.orderresume-container>.orderresume-body .orderresume-footer{max-width:450px;margin:0 -32px 0;margin-left:32px;color:#000;position:initial !important}
}
.prempack-wrapper .prempack-filter{margin-top:42px;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;text-align:center;display:flex;justify-content:center}
.prempack-wrapper .prempack-filter .prempack-clasification{display:flex;align-items:center;justify-content:center}
.prempack-wrapper .prempack-filter .prempack-clasification .btn-option{width:120px;height:32px;justify-content:space-around;align-items:center;display:flex;border:1px solid #9e9e9e;background:#333;color:#fff;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:2.29;cursor:pointer}
.prempack-wrapper .prempack-filter .prempack-clasification .btn-option.right{border-left:0;border-radius:0 5px 5px 0}
.prempack-wrapper .prempack-filter .prempack-clasification .btn-option.left{border-right:0;border-radius:5px 0 0 5px}
.prempack-wrapper .prempack-filter .prempack-clasification .btn-option.selected{background-color:#fff;color:#333}
.prempack-wrapper .prempack-filter .divider{width:1px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);background-color:#9e9e9e;margin:0 36px}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown{width:230px;height:32px;border-radius:5px;background:rgba(74,74,74,0.4);border:solid 1px #9e9e9e;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:normal;text-align:center;position:relative}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown.open{border-radius:5px 5px 0 0}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown.open .prempack-items{display:block}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown.open .drop-action .chevron-down i{transform:rotate(225deg);margin-bottom:-6px}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .drop-action{height:100%;display:flex;align-items:stretch;justify-content:center;color:#fff;cursor:pointer}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .drop-action .dropdown-label{display:flex;width:100%;justify-content:center;align-items:center}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .drop-action .chevron-down{width:32px;display:flex;justify-content:center;align-items:center;border-left:1px solid #9e9e9e}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .drop-action .chevron-down i{border:solid #fff;border-width:0 2px 2px 0;display:inline-block;padding:4px;margin-bottom:6px;transform:rotate(45deg);-webkit-transform:rotate(45deg)}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .prempack-items{margin:0 0 0 -1px;position:absolute;display:none;width:100%;top:32px;list-style-type:none;padding:0;border-bottom-left-radius:5px;border-bottom-right-radius:5px;background-color:#333;border:1px solid #9e9e9e;z-index:2}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .prempack-items li{display:flex;align-items:center;justify-content:center;cursor:pointer}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .prempack-items li a{width:100%;height:32px;border-bottom:1px solid #9e9e9e;text-decoration:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;display:flex;justify-content:center;align-items:center;color:#fff}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .prempack-items li a:hover{background-color:#4a4a4a}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown .prempack-items li:last-child>a{border-bottom:0}
.prempack-wrapper .prempack-cards-container{width:100%;padding:0;margin-top:48px;box-sizing:border-box;display:grid;grid-template-columns:repeat(auto-fill,minmax(448px,1fr));grid-gap:24px}
@media only screen and (max-width:768px){.prempack-wrapper .prempack-filter{flex-direction:column;align-items:center}
.prempack-wrapper .prempack-filter .divider{display:none}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown{width:360px;margin-top:25px}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown li>ul{width:100%}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown li>ul li>a{width:100%}
.prempack-wrapper .prempack-cards-container{margin-top:26px;grid-template-columns:100%}
}
@media only screen and (max-width:480px){.prempack-wrapper .prempack-title{padding:0 12px}
.prempack-wrapper .prempack-filter .prempack-clasification{width:100%}
.prempack-wrapper .prempack-filter .prempack-clasification .btn-option{width:calc(100% / 3)}
.prempack-wrapper .prempack-filter .prempack-categories-dropdown{width:100%;margin-top:25px}
}
@media only screen and (max-width:360px){.prempack-wrapper .prempack-filter .prempack-clasification .btn-option{padding:8px;line-height:16px;text-align:center}
}
.packofferlane-container{width:100%;justify-content:center;align-items:center;background-image:linear-gradient(273deg,#0086b4,#005993);border-radius:5px;padding:18px 0;display:none}
.packofferlane-container .offer-item{min-height:60px;display:flex;justify-content:left;width:100%;align-items:center;box-sizing:border-box;padding:18px 42px}
.packofferlane-container .offer-item img{height:24px;object-fit:contain;margin:0 16px 0 0}
.packofferlane-container .offer-item div{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#fff}
.packofferlane-container .offer-item:nth-child(2){border-left:1px solid rgba(255,255,255,0.5)}
.packofferlane-container.plan{display:flex}
.packofferlane-container.multiplan .offer-item{justify-content:center}
@media only screen and (max-width:970px){.packofferlane-container{flex-direction:column;justify-content:flex-start}
.packofferlane-container .offer-item{padding:8px 0 28px;flex-direction:column}
.packofferlane-container .offer-item img{margin:0 0 8px 0}
.packofferlane-container .offer-item:nth-child(2){padding:28px 0 4px;border-left:unset;border-top:1px solid rgba(255,255,255,0.5)}
}
.premium-pack-description{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px}
.premium-pack-description p{max-width:920px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#000;padding:0 18%;margin:0 auto}
.premium-pack-description p a{color:#0073ae}
.premium-pack-description p a:hover{color:#00aeef}
@media screen and (max-width:480px){.premium-pack-description p{padding:0 12px}
}
.premiumpackchannelonly-container{display:flex;justify-content:center;align-items:center;flex-wrap:wrap;width:100%}
.premiumpackchannelonly-container .channel-container{width:330px;position:relative;border-radius:5px;margin:12px}
.premiumpackchannelonly-container .channel-container .back-wrap{position:absolute;background-image:linear-gradient(to bottom,rgba(0,0,0,0),#000),linear-gradient(to bottom,rgba(0,0,0,0.1),rgba(0,0,0,0.1));top:0;width:100%;height:475px;z-index:1;border-radius:5px 5px 0 0}
.premiumpackchannelonly-container .channel-container .card-body{background-size:cover;background-repeat:no-repeat;display:flex;flex-direction:column;align-items:center;height:475px;border-radius:5px 5px 0 0}
.premiumpackchannelonly-container .channel-container .card-body .channel-card{width:93.8px;height:108.6px;padding:12px 0 10px;box-sizing:border-box;border-radius:5px;z-index:1;display:flex;align-items:center;flex-direction:column;justify-content:space-between;background-color:rgba(0,0,0,0.5);border:.8px solid #9e9e9e;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.44;text-align:center;color:#f9f9f9;font-size:12.7px;margin-top:auto}
.premiumpackchannelonly-container .channel-container .card-body .channel-card .logo{height:38.9px;object-fit:contain}
.premiumpackchannelonly-container .channel-container .card-body .channel-card .name{font-weight:bold}
.premiumpackchannelonly-container .channel-container .card-body .channel-card .number{font-weight:normal}
.premiumpackchannelonly-container .channel-container .card-body .price{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:32px;font-weight:500;line-height:1.19;color:#f9f9f9;margin-top:9.1px;z-index:1}
.premiumpackchannelonly-container .channel-container .card-body .price span{font-size:24px}
.premiumpackchannelonly-container .channel-container .card-body .btn-select{width:298px;height:48px;margin-top:12px;z-index:1}
.premiumpackchannelonly-container .channel-container .footer-description{border-radius:0 0 5px 5px;height:114px;box-sizing:border-box;padding:20px 18px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;text-align:center;color:#fff;z-index:1;background-color:#000}
.dtv-hol{width:100%;max-width:100%;margin:0 auto}
.dtv-hol .dtv-hol-container{border-radius:5px;background:linear-gradient(309deg,#0086b4,#005993);margin:16px;padding:27px 23px 42px 23px}
.dtv-hol .dtv-hol-container .dtv-hol-container--badge-icon figure{margin:0;text-align:center}
.dtv-hol .dtv-hol-container .dtv-hol-container--badge-icon figure img{width:100%;max-width:87px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description{margin-top:38px;text-align:center}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.4;letter-spacing:normal;color:#fff}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p span{display:block;font-weight:500}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions{text-align:center;margin-top:45px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#1b2c5d;display:inline-block;padding:12px 32px;text-transform:uppercase;background:#ffc60b;border-radius:5px;margin:0 auto;text-decoration:none}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions a:hover{background-color:#ffd80b}
@media screen and (min-width:480px){.dtv-hol .dtv-hol-container{display:flex;justify-content:center;flex-direction:column;min-height:91px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content{display:flex;flex-direction:row}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text{flex-grow:2}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description{margin-top:0;text-align:left}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p{line-height:1.2}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions{flex-grow:1;margin:0 0 0 24px;display:flex;flex-direction:column;justify-content:center}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions a{transform:translateY(20%)}
}
@media screen and (min-width:1024px){.dtv-hol .dtv-hol-container{padding:16px 48px;min-height:24px;flex-direction:row}
.dtv-hol .dtv-hol-container .dtv-hol-container--badge-icon{display:flex;flex-direction:column;justify-content:center}
.dtv-hol .dtv-hol-container .dtv-hol-container--badge-icon figure{text-align:right;transform:translateY(2px)}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description{display:flex;flex-direction:column;justify-content:center;margin:0 0 0 10px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p{line-height:1.2;font-size:18px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p span{display:inline}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions{margin:0 0 0 40px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions a{transform:none}
}
.phone-banner-pdp{align-items:center;background-color:#fff;box-shadow:0 4px 20px 0 rgba(0,0,0,0.5);box-sizing:border-box;color:#000;display:flex;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-stretch:normal;font-style:normal;font-weight:normal;justify-content:center;letter-spacing:normal;line-height:2;opacity:.82;padding:10px 12px;position:relative;text-align:center;z-index:1}
.phone-banner-pdp .segments-autocomplete,.phone-banner-pdp .phones-bar--container{padding:0 8px}
.phone-banner-pdp section:nth-of-type(2){border-left:1px #000 solid}
.phone-banner-pdp .segments-autocomplete--selected,.phone-banner-pdp .segments-autocomplete--label .text-container{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px}
.phone-banner-pdp>.phone-banner-phones{padding-top:1px;font-weight:bold}
.phone-banner-pdp>.phone-banner-phones>a,.phone-banner-pdp>.phone-banner-phones span{display:inline-block;color:#000;text-decoration:none;border-bottom:1px solid #000;line-height:1.25}
@media screen and (max-width:480px){.phone-banner-pdp{font-size:14px;line-height:1.4}
.phone-banner-pdp .segments-autocomplete--selected,.phone-banner-pdp .segments-autocomplete--label .text-container{font-size:14px}
}
@media screen and (min-width:480px) and (max-width:768px){.phone-banner-pdp{padding:1px 12px}
.phone-banner-pdp .segments-autocomplete{margin-top:8px}
.phone-banner-pdp .phones-bar--container{padding-bottom:8px}
}
@media screen and (max-width:768px){.phone-banner-pdp{flex-direction:column}
.phone-banner-pdp .segments-autocomplete{margin-bottom:8px;justify-content:center;width:100%}
.phone-banner-pdp .phones-bar--container{padding-top:8px;width:100%}
.phone-banner-pdp section:nth-of-type(2){border-top:1px #777 solid;border-left:0}
}
.section-card-with-image-container{display:flex;flex-direction:column;box-sizing:border-box;padding:1rem 0}
.section-card-with-image-container .icon{height:28px;object-fit:contain;width:min-content}
.section-card-with-image-container .title{text-decoration:none;margin-top:17px;display:flex;align-items:center;height:48px}
.section-card-with-image-container .title span{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.17;letter-spacing:normal;color:#242424}
.section-card-with-image-container .title:hover span{color:#0073ae}
.section-card-with-image-container .title .chevron{display:inline-block;border-left:2px solid #00aeef;border-bottom:2px solid #00aeef;width:8px;height:8px;margin-left:.5rem;transform:rotate(225deg)}
.section-card-with-image-container .divider{margin-top:14px;display:block;background-color:#cfd8dc;height:1px;width:100%}
.section-card-with-image-container .image{width:100%;height:191px;object-fit:contain}
.section-card-with-image-container .description{margin-top:10px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#000}
.section-card-with-image-container .description p{margin-bottom:0}
.section-card-with-image-container .section-card-aditional-link{display:none;margin-top:16px}
.section-card-with-image-container.aditional-link .section-card-aditional-link{display:block}
@media only screen and (max-width:767px){.section-card-with-image-container{align-items:center;padding:0;margin-bottom:20px}
}
.generic-disclaimer-class{font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:-0.3px;width:100%;margin-top:41px;margin-bottom:22px}
.generic-disclaimer-class.dark{color:#4a4a4a}
.generic-disclaimer-class.light{color:#9e9e9e}
.generic-disclaimer-class p{text-align:left;margin-right:17px;margin-left:17px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5}
.generic-disclaimer-class .hide-disclaimer{display:none}
@media only screen and (max-width:1440px){.generic-disclaimer-class p{margin-right:25.9px;margin-left:25.9px}
}
@media only screen and (max-width:768px){.generic-disclaimer-class{grid-column:span 12}
.generic-disclaimer-class p{margin-right:22px;margin-left:22px}
}
@media only screen and (max-width:480px){.generic-disclaimer-class{grid-column:span 12}
.generic-disclaimer-class p{margin-right:9px;margin-left:9px}
}
.ppdTab .ppdTab-body{width:100%;display:flex;flex-direction:column;margin:7px auto;margin:0 auto 7px;background-color:#fff}
.ppdTab .ppdTab-body .ppdTab-tabcontent{display:flex;justify-content:space-between;align-items:center;margin:52px 33px 49px;border-top:0;animation:fadeEffect 1s}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info{width:100%;align-self:flex-start;padding-right:24px;box-sizing:border-box}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-icon{margin-bottom:19px}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-icon>img{width:29px}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-title{width:98%;padding-bottom:16px;margin-bottom:23px;border-bottom:1px solid #cfd8dc;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.17;letter-spacing:normal;color:#242424}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-subtitle{width:100%;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#000}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-description{width:100%;margin-block-start:0;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#000}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-description a{color:#0073ae;font-size:16px;font-weight:600;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-description a::after{content:'  >';width:5px;height:5px;margin-bottom:3px;text-decoration:underline}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-media{margin-top:34px}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-media img{width:100%}
@media only screen and (max-width:480px){.ppdTab .ppdTab-body .ppdTab-tabcontent{flex-direction:column;margin-left:12px;margin-right:11px;margin-top:30px}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info{padding-right:0}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-icon,.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-title{text-align:center}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-title{width:100%}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-info .ppdTab-content-description{box-sizing:border-box;margin-right:12px}
.ppdTab .ppdTab-body .ppdTab-tabcontent .ppdTab-content-media{margin-top:16px}
}
.directv-ui-button{border-radius:5px;background-color:#0073ae;text-transform:uppercase;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;text-align:center;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#f9f9f9;text-decoration:none;cursor:pointer;border:0;display:flex;flex-direction:column;justify-content:center;align-items:center}
.directv-ui-button.disabled{opacity:.5;background-color:#9e9e9e;color:rgba(0,0,0,0.5)}
.directv-ui-button.disabled:hover{opacity:.5;background-color:#9e9e9e;color:rgba(0,0,0,0.5)}
.directv-ui-button:hover{background-color:#0090da}
.directv-ui-button:focus{outline:0}
.directv-input-wrapper{width:100%}
.directv-input-wrapper .directv-label,.directv-input-wrapper .directv-input{display:block;width:100%}
.directv-input-wrapper .directv-label{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0 0 8px 0;color:#242424;line-height:1.5}
.directv-input-wrapper .directv-input{box-sizing:border-box;color:#000;border:1px solid #9e9e9e;border-radius:5px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;height:45px;padding:0 16px 0 16px}
.directv-input-wrapper .directv-input:focus{border-radius:5px;border:1px solid #009fdb;box-shadow:0 0 3px 0 rgba(0,174,239,0.5);outline:0;transition:width .5s;width:100%}
.directv-input-wrapper .directv-input::placeholder,.directv-input-wrapper .directv-input::-ms-input-placeholder{color:#9e9e9e}
.directv-input-wrapper .directv-input.touched:invalid{border-radius:5px;border:1px solid #cc1401;box-shadow:0 0 4px 0 rgba(229,57,53,0.5);outline:0;transition:width .5s;width:100%}
.directv-input-wrapper .directv-input-error{color:#e53935;display:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;margin-top:8px}
.directv-input-wrapper .directv-input-error.show{display:block}
.directv-input-wrapper .directv-input-error.show ~ .directv-input-description{display:none}
.directv-input-wrapper .directv-input-description{color:#242424;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;margin:10px 0 0}
.directv-input-wrapper .directv-help-text{color:#000;display:block;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0 auto;text-align:left;width:440px}
.directv-input-wrapper .directv-help-text+.directv-input-error{margin:0 auto;width:440px}
.directv-input-wrapper .directv-help-text .directv-input-checkbox-check-mark{margin-top:.5em;float:left;margin-bottom:2em}
.directv-input-wrapper .directv-input-group-radios{align-items:center;border:solid 1px #0073ae;border-radius:5px;display:flex;flex-direction:row;height:48px;padding:0;width:100%}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio{border-right:1px solid #0073ae;flex:1;height:48px;line-height:48px;text-align:center;width:33%}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio input{display:none}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio input:checked+label{background-color:#0073ae;color:#fff}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio input:checked ~ .directv-input-radio-mark{box-shadow:inset 0 0 0 4px #0073ae;border:1px solid #0073ae}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio label{color:#0073ae;cursor:pointer;display:block;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio:hover{background-color:#eceff1}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio:hover+label{color:#0073ae}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio:hover+.directv-input-radio-mark{box-shadow:inset 0 0 0 4px #0073ae;border:1px solid #0073ae}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio:last-child{border-right:0}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio .directv-input-radio-mark{box-sizing:border-box;display:inline-block;width:16px;height:16px;border-radius:50%;border:1px solid #9a9a9a}
.directv-input-wrapper .directv-input-checkbox input{display:none}
.directv-input-wrapper .directv-input-checkbox input:checked+.directv-input-checkbox-check-mark{background-color:#0073ae;border:1px solid #0073ae;color:#eceff1}
.directv-input-wrapper .directv-input-checkbox input:disabled:disabled ~ .directv-input-checkbox-check-mark{background-color:#eceff1}
.directv-input-wrapper .directv-input-checkbox input:disabled:disabled ~ .dtv-public-icon-check::before{color:#eceff1}
.directv-input-wrapper .directv-input-checkbox label{cursor:pointer}
.directv-input-wrapper .directv-input-checkbox label .directv-contact-info-terms-link{color:#0073ae;display:inline;text-decoration:underline}
.directv-input-wrapper .directv-input-checkbox .directv-input-checkbox-check-mark{border-radius:2px;border:1px solid #9a9a9a;color:#fff;height:1em;margin-right:8px;width:1em}
.directv-input-wrapper .directv-input-checkbox .directv-contact-info-terms-link{display:none}
.directv-input-wrapper .directv-input-help-text{line-height:1.5;color:#242424;font-size:14px;margin-top:16px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.directv-input-wrapper #autocomplete-box{margin:0;padding:0;max-height:139px;overflow-x:hidden;overflow-y:auto;border:1px solid #ccc;border-radius:5px}
.directv-input-wrapper #autocomplete-box li{color:#242424;padding:5px 20px;font-size:15px;border-bottom:1px solid #ccc;cursor:pointer;transition:all .2s}
.directv-input-wrapper #autocomplete-box li:hover{background:#f9f9f9;color:#009fdb}
.directv-input-wrapper #autocomplete-box li:last-child{border-bottom:0}
.directv-input-wrapper #radio-group{max-width:100%;width:100%;border:1px solid #9a9a9a;border-radius:5px;margin:0 0 20px 0}
.directv-input-wrapper #radio-group>div{border-right:1px solid #9a9a9a}
.directv-input-wrapper #radio-group>div:last-child{border-right:0}
.directv-input-wrapper #radio-group .cell{padding:23px 10px;text-align:center}
.directv-input-wrapper #radio-group .cell label{display:inline-block;position:relative;cursor:pointer;padding:0 0 0 26px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.directv-input-wrapper #radio-group .cell input{position:absolute;opacity:0;cursor:pointer}
.directv-input-wrapper #radio-group .cell .checkmark{position:absolute;top:0;left:0;height:16px;width:16px;background-color:#fff;border-radius:50%;border:1px solid #9a9a9a}
.directv-input-wrapper #radio-group .cell .checkmark:after{content:"";position:absolute;display:none}
.directv-input-wrapper #radio-group .cell label:hover input ~ .checkmark{background-color:#fff;border:1px solid #9a9a9a}
.directv-input-wrapper #radio-group .cell label input:checked ~ .checkmark{border:1px solid #0073ae;background-color:#0073ae}
.directv-input-wrapper #radio-group .cell label input:checked ~ .checkmark:after{display:block}
.directv-input-wrapper #radio-group .cell label .checkmark:after{top:3px;left:3px;width:10px;height:10px;border-radius:50%;background:#fff}
@media screen and (max-width:970px){.directv-input-wrapper .directv-help-text{width:100%}
.directv-input-wrapper .directv-help-text+.directv-input-error{width:100%}
}
@media screen and (max-width:768px){.directv-input-wrapper #radio-group{grid-gap:0}
.directv-input-wrapper #radio-group>div{grid-column:span 12;border-bottom:1px solid #9a9a9a;border-right:0}
.directv-input-wrapper #radio-group>div:last-child{border-bottom:0}
.directv-input-wrapper #radio-group .cell{padding:20px;text-align:left}
}
.directv-ui-dropdown{position:relative;display:inline-block;border-radius:5px;background-color:#fff;width:100%;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal}
.directv-ui-dropdown .dropdown-button{display:flex;justify-content:space-between;align-items:center;height:77px;border-radius:5px;box-shadow:0 2px 4px 0 rgba(0,0,0,0.1);border:1px solid #9e9e9e;padding:0 24px 0 32px;cursor:pointer}
.directv-ui-dropdown .dropdown-button .drop-icon .arrow{border:solid #000;border-width:0 2px 2px 0;display:inline-block;padding:1px;width:7px;height:7px;transform:rotate(45deg);-webkit-transform:rotate(45deg)}
.directv-ui-dropdown .dropdown-button.show-content{border-bottom-left-radius:0;border-bottom-right-radius:0}
.directv-ui-dropdown .dropdown-button.show-content .drop-icon .arrow{transform:rotate(225deg);-webkit-transform:rotate(225deg)}
.directv-ui-dropdown .dropdown-button .decotext-container .deco-price{margin-left:4.5%}
.directv-ui-dropdown .dropdown-content{display:none;position:absolute;z-index:1;background-color:#fff;width:100%;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);border-top:0}
.directv-ui-dropdown .dropdown-content.show-content{display:flex;flex-direction:column}
.directv-ui-dropdown .dropdown-content .dropdown-item{border-bottom:1px solid #cfd8dc;border-left:1px solid #9e9e9e;border-right:1px solid #9e9e9e;display:flex;box-sizing:border-box;justify-content:space-between;align-items:center;width:100%;height:80px;cursor:pointer;padding:0 19px 0 32px}
.directv-ui-dropdown .dropdown-content .dropdown-item.item-selected .decotext-container .deco-name{font-weight:500}
.directv-ui-dropdown .dropdown-content .dropdown-item:hover{background-color:#eceff1}
.directv-ui-dropdown .dropdown-content .dropdown-item.selected{padding:0 19px 0 28px;border-left:4px solid #00aeef}
.directv-ui-dropdown .dropdown-content .dropdown-item.selected .checkmark{display:block}
.directv-ui-dropdown .dropdown-content .dropdown-item.selected .decotext-container .deco-name{font-weight:500;color:#000}
.directv-ui-dropdown .dropdown-content .dropdown-item .checkmark{display:none;width:7px;height:20px;border-style:solid;border-color:#000;border-width:0 2px 2px 0;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}
.directv-ui-dropdown .dropdown-content .delete-option{border-left:1px solid #9e9e9e;border-right:1px solid #9e9e9e;cursor:pointer;height:80px;display:flex;justify-content:center;align-items:center;color:#0073ae;padding:0 6.83%}
.directv-ui-dropdown .dropdown-content .delete-option .text{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.2;letter-spacing:normal;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.directv-ui-dropdown .dropdown-content .delete-option .x{margin-right:2.2%;font-size:24px}
.directv-ui-dropdown .dropdown-content .delete-option:hover{background-color:#eceff1}
.directv-ui-dropdown .dropdown-content>:last-child{border-bottom:1px solid #9e9e9e;border-bottom-left-radius:5px;border-bottom-right-radius:5px}
.directv-ui-dropdown .dropdown-content .decotext-container .deco-name{width:100%}
.directv-ui-dropdown .decotext-container{display:flex;flex-wrap:wrap}
.directv-ui-dropdown .decotext-container .deco-text{width:100%;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.31;color:#4a4a4a}
.directv-ui-dropdown .decotext-container .deco-name{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;line-height:1.2;color:#000}
.directv-ui-dropdown .decotext-container .deco-price{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;line-height:1.5;color:#000}
.directv-ui-dropdown .decotext-container .deco-price.italic span{font-style:italic;font-weight:normal}
.directv-ui-dropdown .decotext-container .deco-price span{font-weight:500}
@media only screen and (max-width:768px){.directv-ui-dropdown .dropdown-button .decotext-container .deco-name{width:100%}
.directv-ui-dropdown .dropdown-button .decotext-container .deco-price{margin-left:0}
}
.directv-ui-stepindicator{border-radius:5px;border:1px solid #4a4a4a;display:flex;align-items:center;min-height:48px;background-color:#242424}
.directv-ui-stepindicator .step{display:flex;align-items:center;height:100%;position:relative;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:bold;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#fff;cursor:pointer}
.directv-ui-stepindicator .step .text-container{display:flex;align-items:center;height:100%}
.directv-ui-stepindicator .step .text-container .outer-circle{min-width:32px;min-height:32px;background-color:rgba(0,89,147,0.8);margin-left:16px;margin-right:16px;border-radius:50%;display:flex;justify-content:center;align-items:center}
.directv-ui-stepindicator .step .text-container .outer-circle .inner-circle{min-width:24px;min-height:24px;background-color:#0073ae;border-radius:50%;text-align:center;font-weight:bold}
.directv-ui-stepindicator .step .text-container .step-text{font-size:18px;font-weight:normal;line-height:1.33}
.directv-ui-stepindicator .step .text-container:last-of-type{margin-right:23px}
.directv-ui-stepindicator .step .divider-icon{position:relative;margin-left:20px;margin-right:10px}
.directv-ui-stepindicator .step .divider-icon::after{content:" ";display:block;width:0;height:0;border-top:25px solid transparent;border-bottom:25px solid transparent;border-left:10px solid #242424;position:absolute;top:50%;margin-top:-25px;left:100%;z-index:2}
.directv-ui-stepindicator .step .divider-icon::before{content:" ";display:block;width:0;height:0;border-top:25px solid transparent;border-bottom:25px solid transparent;border-left:10px solid #4a4a4a;position:absolute;top:50%;margin-top:-25px;margin-left:1px;left:100%;z-index:1}
.directv-ui-stepindicator .step.step-inactive{font-size:18px;font-weight:normal;line-height:1.33;color:#9e9e9e}
.directv-ui-stepindicator .step.step-inactive .text-container .outer-circle{background-color:#4d4d4d}
.directv-ui-stepindicator .step.step-inactive .text-container .outer-circle .inner-circle{color:#fff;background:transparent}
.directv-ui-stepindicator .step.step-done .text-container .outer-circle{background-color:#4d4d4d;background-image:url('../../../content/dam/public-sites/wizard/images/check-small-green.png');background-position:center center;background-repeat:no-repeat}
.directv-ui-stepindicator .step.step-done .text-container .outer-circle .inner-circle{color:transparent;background:transparent}
@media only screen and (max-width:480px){.directv-ui-stepindicator .step{justify-content:space-between}
.directv-ui-stepindicator .step:nth-child(1){flex:1}
.directv-ui-stepindicator .step:nth-child(2) .text-container{margin-right:0}
.directv-ui-stepindicator .step:nth-child(2) .text-container .step-text{display:none}
}
.directv-ui-modal{background-color:rgba(0,0,0,0.5);display:none;height:100%;left:0;overflow:hidden;position:fixed;top:0;width:100%;z-index:100}
.directv-ui-modal.show{align-items:baseline;display:flex;flex-direction:column}
.directv-ui-modal>.directv-ui-modal-content{background-color:#fff;border-radius:0 0 5px 5px;box-shadow:0 32px 64px 0 rgba(0,0,0,0.1);display:inline-block;flex-direction:column;margin:0 auto;overflow:auto;max-height:80%;max-width:1156px;width:90%}
.directv-ui-modal>.directv-ui-modal--close{background-color:#fff;border-radius:5px 5px 0 0;display:block;height:24px;margin:32px auto 0;max-width:1156px;padding:12px 0;z-index:999;width:90%}
.directv-ui-modal>.directv-ui-modal--close.sticky{box-shadow:0 8px 16px 0 rgba(0,0,0,0.1)}
.directv-ui-modal>.directv-ui-modal--close::after{bottom:0;color:#000;content:'\2715';cursor:pointer;float:right;font-size:24px;left:0;line-height:24px;margin-right:16px;right:0;text-align:center;top:0}
@media only screen and (max-width:480px){.directv-ui-modal>.directv-ui-modal-content{border-radius:0;height:100%;margin:0 auto;max-height:none;width:100%}
.directv-ui-modal>.directv-ui-modal--close{border-radius:0;margin:0;width:100%}
}
.disclaimer{margin:41px 17px 22px}
.disclaimer>p{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.57;letter-spacing:-0.3px;color:#000}
*{outline:0}
@media screen and (min-width:1024px){.tv-content-section-container.full-height{box-sizing:border-box;height:calc(100vh - 65px);margin:0;padding:56px 0}
.phones-visible .tv-content-section-container.full-height{height:calc(100vh - 98px)}
.tv-content-section-container .homeofferlane-container{display:flex;flex-direction:column;flex:1;justify-content:flex-end;margin-top:0}
.dtv-hofp-section.full-height{height:calc(100vh - 65px);display:flex;justify-content:center;align-items:center}
.phones-visible .dtv-hofp-section.full-height{height:calc(100vh - 98px)}
.dtv-hofp-section .dtv-hofp-section-content{flex-direction:row;justify-content:center}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon,.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title,.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label,.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link{text-align:left}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label{margin:0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link a.dtv-hofp--external{transform:none}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info.dtv-hofp-divider::after{left:0;transform:none}
.cq-Editable-dom.tv-content-section-container,.phones-visible .cq-Editable-dom.tv-content-section-container,.cq-Editable-dom .tv-content-section-container,.phones-visible .cq-Editable-dom .tv-content-section-container,.cq-Editable-dom.dtv-hofp-section,.phones-visible .cq-Editable-dom.dtv-hofp-section,.cq-Editable-dom .dtv-hofp-section,.phones-visible .cq-Editable-dom .dtv-hofp-section{height:900px;min-height:900px}
}
@media screen and (min-width:1024px) and (max-height:900px){.tv-content-section-container{padding:3% 0}
}
@media screen and (min-width:1024px) and (max-height:800px){.tv-content-section-container{padding:2% 0}
.tv-content-section-container .cards-container .card-container{min-height:368px}
}
@media screen and (max-width:520px){.tv-content-section-container .cards-container .card-container{width:100%;margin-top:0}
}
@media screen and (min-width:1024px) and (max-height:720px){.tv-content-section-container{padding:1% 0}
.tv-content-section-container .cards-container .card-container{min-height:300px}
.tv-content-section-container .cards-container .card-container .icon{margin-top:5%}
}
@media screen and (min-width:1024px) and (max-height:648px),screen and (min-width:1024px) and (max-width:1440px){.tv-content-section-container .cards-container .card-container{min-height:280px}
.tv-content-section-container .cards-container .card-container .title{font-size:32px}
.tv-content-section-container .cards-container .card-container .subtitle{font-size:22px}
.tv-content-section-container .cards-container .card-container .description{font-size:14px}
.tv-content-section-container .cards-container .card-container .icon{margin-top:5%}
}
@media screen and (min-width:1024px) and (max-height:620px){.tv-content-section-container{height:auto}
.phones-visible .tv-content-section-container{height:auto}
}
@media screen and (min-width:1024px) and (max-height:768px){.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-product{align-items:center;display:flex}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon{margin:5% 0 5%}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title h3{font-size:32px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label p{font-size:22px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link{padding:5% 0 5%}
}
@media only screen and (min-width:1024px){.dtv-hol .dtv-hol-container{padding:8px 48px;min-height:24px;flex-direction:row;font-size:16px}
.dtv-hol .dtv-hol-container .dtv-hol-container--badge-icon{display:flex;flex-direction:column;justify-content:center}
.dtv-hol .dtv-hol-container .dtv-hol-container--badge-icon figure{text-align:right;transform:translateY(2px)}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description{margin:0;display:flex;flex-direction:column;justify-content:center;margin-left:10px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p{line-height:1.2;font-size:18px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p span{display:inline}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions{margin:0 0 0 40px}
.dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions a{transform:none}
}
@media only screen and (max-width:1024px){.entertainment-section-cards-container{padding-bottom:50px}
}
@media only screen and (min-width:1024px) and (max-width:1440px){.entertainment-section-cards-container{width:100%}
.entertainment-section-cards-container .subcategory-section-title{margin-top:45px}
.entertainment-section-cards-container .subcategory-section-title .title-container.section-title .title{font-size:32px}
.entertainment-section-cards-container .entertainment-cards-container{margin-top:4%;height:55%}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card{height:100%}
}
@media only screen and (min-width:1024px) and (max-width:1440px) and (max-height:768px){.entertainment-section-cards-container .entertainment-cards-container{margin-top:2%}
}
.cq-Editable-dom .entertainment-section-cards-container,.phones-visible .cq-Editable-dom .entertainment-section-cards-container{height:initial}
*{outline:0}
.header{padding:0}
.top-container{background:#000}
.fix-height-container{height:57px}
@media(min-width:768px){.fix-height-container{height:65px}
}
@media(min-width:970px){.fix-height-container{height:64px}
}
.header-phones{background-color:#292929;text-align:center;position:fixed;top:0;left:0;right:0;z-index:1020;min-height:33px;margin-top:-33px;flex-direction:column;justify-content:center;box-sizing:border-box;padding:7px 0 6px 0;transition:margin-top .4s}
.header-phones.shown{display:flex;margin-top:0}
@media(min-width:768px){.header-phones{padding:6px 0 5px 0}
}
.header-phones p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif !important;font-size:16px;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;font-weight:normal;color:#fff;margin:0}
@media(min-width:768px){.header-phones p{font-size:18px}
}
.header-phones p span{display:inline-block}
.header-phones p span .phone-number{font-weight:500;color:#00aeef;text-decoration:none;display:inline-block}
@media(min-width:768px){.header-phones p span .phone-number{font-size:18px}
}
header{background-color:#000;border-bottom:solid 1px #292929;box-sizing:border-box;padding:0 12px;position:fixed;top:0;left:0;transition:margin-top .4s;width:100%;z-index:1000}
header.super-app .header-container .main-navigation,header.super-app .header-container .right-section{display:none}
header .header-container--search-overlay{position:absolute;z-index:9999;background-color:transparent;overflow:hidden;width:20px;transition:all ease-in-out 800ms;left:0;display:none;padding:0 16px;box-sizing:border-box;transform:translateY(-50%);top:50%}
@media(min-width:970px){header .header-container--search-overlay{width:185px}
}
header .header-container--search-overlay.show{display:block;background-color:#000}
header .header-container--search-overlay.expand{width:100%}
header .header-container--search-overlay-container{display:flex;align-items:center;justify-content:flex-start;position:relative}
header .header-container--search-overlay-container::after{content:" ";width:calc(100% - 27px);height:1px;position:absolute;left:0;bottom:0;background-color:#979797}
@media(min-width:970px){header .header-container--search-overlay-container::after{display:none}
}
header .header-container--search-overlay-container .search-icon{color:#eceff1;display:inline-block;width:20px;height:20px;text-decoration:none}
header .header-container--search-overlay-container .search-icon::before{font-size:20px}
header .header-container--search-overlay-container .search-icon:hover{text-decoration:none}
header .header-container--search-overlay-container #txt_header_search{background:0;border:0;font-size:18px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;padding:11px 0;width:155px;color:#cfd8dc;display:inline-block;margin:0 8px 0 8px;flex-grow:2}
header .header-container--search-overlay-container #txt_header_search:focus{outline:0}
header .header-container--search-overlay-container .close-btn{transition:opacity 800ms;cursor:pointer;padding:16px 0}
header .header-container--search-overlay-container .close-btn.open{opacity:1;animation:fadeBtn 800ms}
header .header-container--search-overlay-container .close-btn.closed{opacity:0;animation:fadeBtn 800ms;animation-direction:reverse}
@keyframes fadeBtn{from{opacity:.1}
to{right:1}
}
header .header-container--search-overlay-container .close-btn .close-icon{color:#eceff1;display:inline-block;width:20px;height:20px;text-decoration:none}
@media(min-width:970px){header .header-container--search-overlay-container .close-btn .close-icon{display:none}
}
header .header-container--search-overlay-container .close-btn .close-icon::before{font-size:20px}
header .header-container--search-overlay-container .close-btn .close-icon:hover{text-decoration:none}
header .header-container--search-overlay-container .close-btn .close-text{display:none}
@media(min-width:970px){header .header-container--search-overlay-container .close-btn .close-text{display:inline-block;font-size:18px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#fff}
}
header .header-container{align-items:center;box-sizing:border-box;display:flex;min-height:56px;transition:opacity 1s}
header .header-container.fade-out{opacity:0}
header .header-container::after{content:"";display:table;clear:both}
header .header-container .logo{display:inline-block;margin:0;font-size:16px;position:relative;width:96px !important;bottom:unset;right:unset;z-index:unset;padding-top:0}
header .header-container .logo img{animation:logoentrance .5s;height:18px;max-width:96px;position:static;width:unset}
header .header-container .logo img:hover{-webkit-transform:none;transform:none}
@keyframes logoentrance{from{right:200px}
to{right:0}
}
header .header-container .right-section{align-items:center;display:flex;height:100%;justify-content:flex-end;text-align:right;width:96px}
header .header-container .right-section a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:400}
header .header-container .right-section .nav-search-container{display:flex;width:24px;align-items:center}
header .header-container .right-section .nav-search-container .search-icon{color:#eceff1;display:inline-block;width:20px;height:20px;text-decoration:none}
header .header-container .right-section .nav-search-container .search-icon::before{font-size:20px}
header .header-container .right-section .nav-search-container .search-icon:hover{text-decoration:none}
header .header-container .right-section .nav-search-container label{display:none}
header .header-container .main-navigation{display:block;flex:1;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;margin:0;width:calc(100% - (96px * 2));text-align:center;overflow-y:scroll}
header .header-container .main-navigation::-webkit-scrollbar{display:none}
header .header-container .main-navigation a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:400}
header .header-container .main-navigation .collapse-menu{color:#f9f9f9;font-size:20px;line-height:24px;padding:16px;text-decoration:none}
header .header-container .main-navigation .collapse-menu .dtv-public-icon-more,header .header-container .main-navigation .collapse-menu .dtv-public-icon-less{position:absolute;top:13px}
header .header-container .main-navigation .collapse-menu .dtv-public-icon-less{display:none}
header .header-container .main-navigation .collapse-menu.open .dtv-public-icon-less{display:initial}
header .header-container .main-navigation .collapse-menu.open .dtv-public-icon-more{display:none}
header .header-container .main-navigation>ul{background:#000;height:0;left:0;list-style-type:none;margin:0;overflow:hidden;padding:0;position:absolute;top:57px;transition:all ease-in 500ms;visibility:hidden;width:100%;z-index:1000}
header .header-container .main-navigation>ul.open{background:#000;height:calc(100vh - 57px);visibility:visible;transition:all ease-out 500ms}
header .header-container .main-navigation>ul .nav-item{border-bottom:1px solid #292929;box-sizing:border-box;padding:24px 0;height:68px}
header .header-container .main-navigation>ul .nav-item.title-menu{border-left:5px solid #00aeef}
header .header-container .main-navigation>ul .nav-item.active{border-bottom:5px solid #00aeef}
header .header-container .main-navigation>ul .nav-item a{color:#f9f9f9;display:block;text-decoration:none;line-height:20px;position:relative;text-align:center}
header .header-container .main-navigation>ul .nav-item a span{color:#9e9e9e;position:absolute;right:12px;top:-6px}
header .header-container .main-navigation>ul .nav-item .second-level{background:#000;color:#f9f9f9;height:calc(100% - (57px / 2));margin:0;overflow:hidden;padding:0;position:absolute;top:0;left:100%;transition:all ease-in 500ms;visibility:hidden;width:100%;z-index:1020;overflow-y:scroll}
header .header-container .main-navigation>ul .nav-item .second-level .back-button{box-sizing:border-box;background:#242424;color:#9e9e9e;font-size:16px;font-weight:400;height:40px;line-height:20px;margin:0;padding-top:10px}
header .header-container .main-navigation>ul .nav-item .second-level .back-button span{color:inherit;left:16px;right:unset;top:3px}
header .header-container .main-navigation>ul .nav-item .second-level .back-button:hover{color:#fff}
header .header-container .main-navigation>ul .nav-item .second-level .section-title{border-bottom:1px solid #00aeef;box-sizing:border-box;height:72px;padding-top:26px}
header .header-container .main-navigation>ul .nav-item .second-level .section-title h5{font-weight:500;line-height:1;margin:0;font-size:20px}
header .header-container .main-navigation>ul .nav-item .second-level ul{list-style-type:none;padding:0;width:100%}
header .header-container .main-navigation>ul .nav-item .second-level ul li{border-bottom:1px solid #292929;box-sizing:border-box;padding:16px 0;height:56px}
header .header-container .main-navigation>ul .nav-item .second-level ul li a{line-height:24px}
header .header-container .main-navigation>ul .nav-item .second-level ul li a.highlighted{color:#f89c1b}
header .header-container .main-navigation>ul .nav-item .second-level ul li:last-child{height:calc((57px) * 3)}
header .header-container .main-navigation>ul .nav-item .second-level.open{background:#000;left:0;visibility:visible;transition:all ease-out 500ms}
header .header-container .right-section .midirectv-container .my-directv-navigation{display:block;flex:1;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;margin:0;text-align:center}
header .header-container .right-section .midirectv-container .my-directv-navigation a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:400}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu{color:#f9f9f9;font-size:18px;line-height:24px;padding:0 8px 8px 8px;text-decoration:none;display:none;cursor:pointer}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu .dtv-public-icon-more,header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu .dtv-public-icon-less{position:relative;top:8px}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu .dtv-public-icon-less{display:none}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu .dtv-public-menu-arrow::after{content:"";width:12px;height:12px;background:#333;transform:rotate(45deg);position:absolute;top:58px;right:112px;display:none}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu.open{color:#00aeef}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu.open .dtv-public-icon-less{display:initial}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu.open .dtv-public-icon-more{display:none}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu.open .dtv-public-menu-arrow::after{display:inline-block}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul{background:#000;height:0;right:0;list-style-type:none;margin:0;overflow:hidden;padding:0;position:absolute;top:56px;transition:all ease-in 500ms;visibility:hidden;width:100%;z-index:1000}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul.open{background:#333;height:100%;visibility:visible;transition:all ease-out 500ms;width:100%;max-height:fit-content;overflow-y:scroll}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul.open::-webkit-scrollbar{display:none}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul .nav-item{border-bottom:1px solid #292929;box-sizing:border-box;height:60px}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul .nav-item.title-menu{border-left:5px solid #00aeef}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul .nav-item.active{border-bottom:5px solid #00aeef}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul .nav-item a{color:#f9f9f9;display:block;text-decoration:none;line-height:20px;position:relative;text-align:center;padding:20px 0}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul .nav-item a span{color:#9e9e9e;position:absolute;right:12px;top:-6px}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul .nav-item:first-child{border-top:0}
header .header-container.vertical-navigation .main-navigation ul .nav-item:last-child .second-level ul{display:table}
header .header-container.vertical-navigation .main-navigation ul .nav-item:last-child .second-level ul li{list-style:none;display:table-row;text-align:center;vertical-align:middle;padding:0;height:unset}
header .header-container.vertical-navigation .main-navigation ul .nav-item:last-child .second-level ul li a{padding:12px}
@media(min-width:970px){header .header-container.vertical-navigation .main-navigation ul .nav-item:last-child{margin-left:16px;margin-right:16px;padding:unset;display:flex;align-items:center;justify-content:center}
header .header-container.vertical-navigation .main-navigation ul .nav-item:last-child>a{font-size:12px;color:#00aeef;line-height:13px;font-weight:500;line-height:20px;align-items:center;display:grid}
header .header-container.vertical-navigation .main-navigation ul .nav-item:last-child .second-level{width:310px;right:unset;left:unset;display:table}
header .header-container.vertical-navigation .main-navigation ul .nav-item:last-child .second-level ul{transition:border-bottom ease-in 350ms}
}
@media(min-width:768px){header{padding:0 24px 0 16px}
header .header-container{min-height:64px}
header .header-container .main-navigation .collapse-menu .dtv-public-icon-more,header .header-container .main-navigation .collapse-menu .dtv-public-icon-less{position:absolute;top:17px}
header .header-container .main-navigation>ul{top:64px}
header .header-container .main-navigation>ul.sub-menu-open{visibility:hidden}
header .header-container .main-navigation>ul .nav-item .second-level{height:auto}
header .header-container .main-navigation>ul .nav-item .second-level .back-button{font-size:20px;line-height:20px}
}
@media(min-width:970px){header{padding:0 15px 0 24px}
header .header-container--search-overlay{padding:0 32px}
header .header-container--search-overlay-container #txt_header_search{border:0 solid #979797;border-bottom-width:1px;margin:0 23px 0 8px}
header .header-container{border-bottom:0;max-width:1440px;margin:0 auto}
header .header-container .home-link{height:28px;width:112px}
header .header-container .logo{width:128px}
header .header-container .logo img{max-width:128px;height:24px}
header .header-container .main-navigation{margin-left:36px}
header .header-container .main-navigation .collapse-menu{display:none}
header .header-container .main-navigation>ul{border:0;display:flex;position:static;height:auto;visibility:visible;overflow:auto;left:unset;top:unset;z-index:1}
header .header-container .main-navigation>ul.open{height:auto}
header .header-container .main-navigation>ul.sub-menu-open{visibility:visible}
header .header-container .main-navigation>ul .nav-item{border:0;height:64px;padding:21px 16px;transition:border-bottom ease-in 350ms}
header .header-container .main-navigation>ul .nav-item .second-level{background:#333;height:0;top:64px;left:unset;right:0;transition:all ease-in 300ms}
header .header-container .main-navigation>ul .nav-item .second-level .back-button,header .header-container .main-navigation>ul .nav-item .second-level .section-title{display:none}
header .header-container .main-navigation>ul .nav-item .second-level ul{border:0;margin:0 auto;max-width:1440px;padding:0;text-align:left}
header .header-container .main-navigation>ul .nav-item .second-level ul li{border:0;display:inline-block;font-size:16px;line-height:1.5;padding:14px 12px 18px}
header .header-container .main-navigation>ul .nav-item .second-level ul li a{font-size:16px;line-height:1.5;font-weight:400}
header .header-container .main-navigation>ul .nav-item .second-level ul li:hover{background-color:#242424}
header .header-container .main-navigation>ul .nav-item:hover{border-bottom:5px solid #00aeef;transition:border-bottom ease-in 350ms}
header .header-container .main-navigation>ul .nav-item:hover>.second-level{height:56px;visibility:visible;transition:all ease-out 300ms}
header .header-container .main-navigation>ul .nav-item.title-menu{display:none}
header .header-container .main-navigation>ul .nav-item a{font-size:18px;line-height:22px}
header .header-container .main-navigation>ul .nav-item a span{position:static;display:none}
header .header-container .right-section{width:auto}
header .header-container .right-section .nav-search-container{align-items:center;display:flex;width:auto}
header .header-container .right-section .nav-search-container .search-icon{margin-right:10px}
header .header-container .right-section .midirectv-container .midirectv-no-logged .midirectv-icon{display:none}
header .header-container .right-section .midirectv-container .midirectv-no-logged .my-directv-navigation .my-directv-collapse-menu{display:block;padding:8px 8px 20px 8px}
header .header-container .right-section .midirectv-container .midirectv-no-logged .my-directv-navigation .my-directv-collapse-menu .dtv-public-menu-arrow::after{content:"";width:12px;height:12px;background:#333;transform:rotate(45deg);position:absolute;top:58px;right:32px;display:none}
header .header-container .right-section .midirectv-container .midirectv-no-logged .my-directv-navigation .my-directv-collapse-menu.open .dtv-public-menu-arrow::after{display:inline-block}
header .header-container .right-section .midirectv-container .midirectv-no-logged .my-directv-navigation .my-directv-collapse-menu::before{content:'\e90c';font-size:19px;font-family:"dtv-public-sites-icons";padding-right:8px;vertical-align:bottom}
header .header-container .right-section .midirectv-container .midirectv-no-logged .my-directv-navigation>ul{top:64px;min-width:314px;width:314px}
header .header-container .right-section .midirectv-container .midirectv-no-logged .my-directv-navigation>ul.open{width:314px}
header .header-container .right-section .nav-search-container label{color:#fff;margin-right:12px;font-size:18px;cursor:pointer;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;display:block}
}
@media(min-width:1200px){header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu{display:block}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu .dtv-public-menu-arrow::after{top:58px;right:112px}
}
@media(min-width:1440px){header{padding:0 24px}
header .header-container .main-navigation>ul .nav-item .second-level ul{padding:0}
header .header-container .main-navigation>ul .nav-item .second-level ul li:first-child{padding-left:0}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu .dtv-public-menu-arrow::after{content:"";width:12px;height:12px;background:#333;transform:rotate(45deg);position:absolute;top:56px;right:98px;display:none}
header .header-container .right-section .midirectv-container .my-directv-navigation .my-directv-collapse-menu.open .dtv-public-menu-arrow::after{display:inline-block}
header .header-container .right-section .midirectv-container .my-directv-navigation>ul{top:62px}
}
.midirectv-container{display:flex;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;margin-left:22px;width:24px}
.midirectv-container a{color:#fff;text-decoration:none;display:none}
.midirectv-container .midirectv-icon{background:#00aeef;border-radius:50%;position:relative}
.midirectv-container .midirectv-icon::before{left:5px;position:absolute;top:3px}
.midirectv-container .midirectv-logged .midirectv-icon{background:0;border-radius:unset;position:static;color:#000;display:none}
.midirectv-container .midirectv-logged .midirectv-icon::before{position:static}
.midirectv-container .midirectv-logged .midirectv-icon.dtv-public-icon-logged-user{color:#00aeef;cursor:pointer}
.midirectv-container .midirectv-logged .midirectv-icon.midirectv-icon-close{background:#00aeef;border-radius:50%;position:relative}
.midirectv-container .midirectv-logged .midirectv-icon.midirectv-icon-close::before{font-size:14px;left:5px;position:absolute;top:5px}
.midirectv-container .midirectv-logged .midirectv-icon.show{display:inline-block}
.midirectv-container .midirectv-logged .midirectv-user-data{display:none}
.midirectv-container .midirectv-logged .midirectv-menu{background-color:#333;display:none;height:auto;left:0;margin:0;padding:0;position:absolute;top:100%;width:100%;max-height:fit-content;overflow-y:scroll}
.midirectv-container .midirectv-logged .midirectv-menu::-webkit-scrollbar{display:none}
.midirectv-container .midirectv-logged .midirectv-menu li a{border-bottom:1px solid #292929;box-sizing:border-box;color:#f9f9f9;display:block;font-size:20px;height:68px;line-height:1;padding:24px 0;text-align:center}
.midirectv-container .midirectv-logged .midirectv-menu li a:hover{background-color:#242424}
.midirectv-container .midirectv-logged .midirectv-menu.show{visibility:visible}
.midirectv-container .midirectv-logged .midirectv-menu.show li a{display:block}
.midirectv-container .midirectv-no-logged .login-mobile{display:inline-block;color:#000;background:#00aeef}
.midirectv-container .midirectv-no-logged .login-mobile::after{content:'\e5cf';border-radius:7px;background-color:#fff;color:#000;position:relative;left:5px;top:5px;font-size:14px}
.midirectv-container .midirectv-no-logged .login-mobile.open{color:#00aeef;background:#000;height:16px;width:16px;border-radius:16px;border:1 solid #00aeef}
.midirectv-container .midirectv-no-logged .login-mobile.open::before{content:'\e900';color:#00aeef;background-color:#000;font-size:17px;position:relative;top:-4px;border:2px solid;border-radius:17px;left:0}
.midirectv-container .midirectv-no-logged .login-mobile.open::after{content:unset}
.midirectv-container .midirectv-no-logged,.midirectv-container .midirectv-logged{display:none}
.midirectv-container .midirectv-no-logged.show,.midirectv-container .midirectv-logged.show{display:inline-flex;align-items:center}
.midirectv-container .midirectv-no-logged .midirectv-icon,.midirectv-container .midirectv-logged .midirectv-icon{height:24px;width:24px}
@media(min-width:970px){.midirectv-container{align-items:center;display:flex;width:auto}
.midirectv-container .midirectv-no-logged .login-mobile{display:inline-block;color:#fff;background:unset}
.midirectv-container .midirectv-no-logged .login-mobile::after{content:unset}
.midirectv-container .midirectv-no-logged .login-mobile.open::before{content:'\e90c';color:#00aeef;background-color:#000;font-size:17px;position:relative;top:-5px;left:-4px;border:0}
}
@media(min-width:1200px){.midirectv-container{margin-left:16px}
.midirectv-container .midirectv-no-logged .midirectv-icon{background:0;border-radius:unset;display:inline-block;height:20px;margin-right:5px;width:20px}
.midirectv-container .midirectv-no-logged .midirectv-icon::before{color:#fff;font-size:20px;left:unset;position:static;top:unset}
.midirectv-container .midirectv-no-logged .register{border-left:1px solid #fff;padding-left:12px}
.midirectv-container .midirectv-no-logged .login,.midirectv-container .midirectv-no-logged .register{display:inline-block;font-size:18px;line-height:16px}
.midirectv-container .midirectv-no-logged .login:hover,.midirectv-container .midirectv-no-logged .register:hover{color:#00aeef}
.midirectv-container .midirectv-logged .midirectv-icon{display:none}
.midirectv-container .midirectv-logged .midirectv-icon.show{display:none}
.midirectv-container .midirectv-logged .midirectv-user-data{align-items:center;border-left:1px solid #fff;color:#00aeef;display:inline-flex;font-size:18px;line-height:.89;padding-left:16px;text-transform:capitalize}
.midirectv-container .midirectv-logged .midirectv-user-data .midrectv-user-name{font-size:18px;font-weight:400;color:#00aeef}
.midirectv-container .midirectv-logged .midirectv-user-data .midirectv-icon{background:#00aeef;border-radius:50%;color:#000;display:none;margin-left:13px;position:relative}
.midirectv-container .midirectv-logged .midirectv-user-data .midirectv-icon::before{position:absolute}
.midirectv-container .midirectv-logged .midirectv-user-data .midirectv-icon.midirectv-icon-close::before{font-size:14px;top:5px}
.midirectv-container .midirectv-logged .midirectv-user-data .midirectv-icon.show{display:inline-block}
.midirectv-container .midirectv-logged .midirectv-menu{left:unset;right:0;width:314px}
.midirectv-container .midirectv-logged .midirectv-menu::before{border-bottom:10px solid #333;border-left:10px solid transparent;border-right:10px solid transparent;content:" ";position:absolute;right:16px;top:-10px}
.midirectv-container .midirectv-logged .midirectv-menu li a{font-size:16px;line-height:1.25;padding:16px 0 22px;height:58px}
}
@media(min-width:1440px){.midirectv-container{position:relative}
.midirectv-container .midirectv-logged .midirectv-menu{top:45px;right:-24px}
.midirectv-container .midirectv-logged .midirectv-menu::before{right:25px}
.midirectv-container .midirectv-no-logged .login-mobile.open::before{font-size:20px;top:-2px;border:0;left:-2px}
}
.tv-content-section-container{margin:56px 0;display:flex;align-items:center;flex-direction:column}
.tv-content-section-container .baseContainerSports-background{max-width:100%}
.tv-content-section-container .baseContainerSports-background .baseContainerSports-background-desktop{max-width:100%}
.tv-content-section-container .cards-container{display:flex;justify-content:center;align-items:stretch}
.tv-content-section-container .cards-container .divider{margin:0 2px 1px 0;min-width:1px;background-image:linear-gradient(to top,rgba(0,0,0,0),#000 54%,rgba(0,0,0,0) 100%)}
.tv-content-section-container .cards-container .divider.light-text{background-image:linear-gradient(to top,rgba(0,0,0,0),#fff 54%,rgba(0,0,0,0) 100%)}
.tv-content-section-container .cards-container>:last-child{display:none}
.tv-content-section-container .cards-container .card-container{display:flex;align-items:center;flex-direction:column;padding:0 23px;box-sizing:border-box;min-height:402px;max-width:347px;min-width:250px}
.tv-content-section-container .cards-container .card-container.reduce{min-height:240px}
.tv-content-section-container .cards-container .card-container .icon{margin-top:60px;height:28px;object-fit:contain}
.tv-content-section-container .cards-container .card-container .icon.text-align-left{margin-right:auto}
.tv-content-section-container .cards-container .card-container .icon.text-align-center{margin-left:unset;margin-right:unset}
.tv-content-section-container .cards-container .card-container .icon.text-align-right{margin-left:auto}
.tv-content-section-container .cards-container .card-container .icons{width:100%}
.tv-content-section-container .cards-container .card-container .icons .icons-icon img{margin:15px auto;display:flex}
.tv-content-section-container .cards-container .card-container .subtitle{margin-top:15px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.17;letter-spacing:normal;text-align:center;color:#000;width:100%}
.tv-content-section-container .cards-container .card-container .title{margin-top:13px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:40px;font-weight:500;font-style:normal;font-stretch:normal;line-height:.7;letter-spacing:normal;text-align:center;color:#000;width:100%}
.tv-content-section-container .cards-container .card-container .description{margin-top:26px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.75;letter-spacing:normal;text-align:center;color:#000;width:100%}
.tv-content-section-container .cards-container .card-container .modal-link{cursor:pointer}
.tv-content-section-container .cards-container .card-container .link{margin-top:auto;margin-bottom:62px;text-decoration:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;color:#0073ae;width:100%}
.tv-content-section-container .cards-container .card-container .link:hover{text-decoration:underline}
.tv-content-section-container .cards-container .card-container.light-text .icon{filter:invert(1)}
.tv-content-section-container .cards-container .card-container.light-text .subtitle,.tv-content-section-container .cards-container .card-container.light-text .title,.tv-content-section-container .cards-container .card-container.light-text .description{color:#fff}
.tv-content-section-container .cards-container .card-container.light-text .link{color:lightblue}
.tv-content-section-container .cards-container .card-container.text-align-center .subtitle,.tv-content-section-container .cards-container .card-container.text-align-center .title,.tv-content-section-container .cards-container .card-container.text-align-center .description,.tv-content-section-container .cards-container .card-container.text-align-center .link{text-align:center}
.tv-content-section-container .cards-container .card-container.text-align-right .subtitle,.tv-content-section-container .cards-container .card-container.text-align-right .title,.tv-content-section-container .cards-container .card-container.text-align-right .description,.tv-content-section-container .cards-container .card-container.text-align-right .link{text-align:right}
.tv-content-section-container .cards-container .card-container.text-align-right .icons .icons-icon img{margin:15px 0;float:right}
.tv-content-section-container .cards-container .card-container.text-align-left .subtitle,.tv-content-section-container .cards-container .card-container.text-align-left .title,.tv-content-section-container .cards-container .card-container.text-align-left .description,.tv-content-section-container .cards-container .card-container.text-align-left .link{text-align:left}
.tv-content-section-container .cards-container .card-container.text-align-left .icons .icons-icon img{margin:15px 0}
.tv-content-section-container .homeofferlane-container{margin-top:150px;max-width:1402px;width:100%}
@media only screen and (max-width:1024px){.tv-content-section-container .cards-container{flex-wrap:wrap;margin-top:0}
.tv-content-section-container .cards-container>.divider{margin-top:28px}
.tv-content-section-container .cards-container>.divider:nth-child(4){display:none}
.tv-content-section-container .cards-container .card-container{margin-top:28px;width:48%;min-width:unset;max-width:unset;min-height:356.2px}
.tv-content-section-container .cards-container .card-container .icon{margin-top:45px}
.tv-content-section-container .cards-container .card-container .link{margin-bottom:39.2px}
.tv-content-section-container .homeofferlane-container{margin-top:54px}
}
@media only screen and (max-width:520px){.tv-content-section-container{box-sizing:border-box;padding:0 12px}
.tv-content-section-container .cards-container{margin-top:25px}
.tv-content-section-container .cards-container .divider{display:none}
.tv-content-section-container .cards-container .card-container{width:100%;min-height:283px;margin-top:0;padding:0}
.tv-content-section-container .cards-container .card-container .icon{margin-top:26px}
.tv-content-section-container .cards-container .card-container .link{margin-bottom:26px}
.tv-content-section-container .homeofferlane-container{margin-top:10px}
.tv-content-section-container .cards-container{flex-wrap:wrap}
.tv-content-section-container .cards-container .card-container.mobile-align-center .subtitle,.tv-content-section-container .cards-container .card-container.mobile-align-center .title,.tv-content-section-container .cards-container .card-container.mobile-align-center .description,.tv-content-section-container .cards-container .card-container.mobile-align-center .link{text-align:center}
.tv-content-section-container .cards-container .card-container.mobile-align-center .icons .icons-icon img{margin:15px auto}
.tv-content-section-container .cards-container .card-container.mobile-align-right .subtitle,.tv-content-section-container .cards-container .card-container.mobile-align-right .title,.tv-content-section-container .cards-container .card-container.mobile-align-right .description,.tv-content-section-container .cards-container .card-container.mobile-align-right .link{text-align:right}
.tv-content-section-container .cards-container .card-container.mobile-align-right .icons .icons-icon img{margin:15px 0;float:right}
.tv-content-section-container .cards-container .card-container.mobile-align-left .subtitle,.tv-content-section-container .cards-container .card-container.mobile-align-left .title,.tv-content-section-container .cards-container .card-container.mobile-align-left .description,.tv-content-section-container .cards-container .card-container.mobile-align-left .link{text-align:left}
.tv-content-section-container .cards-container .card-container.mobile-align-left .icons .icons-icon img{margin:15px 0}
.tv-content-section-container .cards-container .card-container img.icon.mobile-align-center{margin-left:auto;margin-right:auto}
.tv-content-section-container .cards-container .card-container img.icon.mobile-align-left{margin-right:auto;margin-left:unset}
.tv-content-section-container .cards-container .card-container img.icon.mobile-align-right{margin-left:auto;margin-right:unset}
}
@media screen and (min-width:1024px){.tv-content-section-container{box-sizing:border-box;margin:0;padding:56px 0}
.tv-content-section-container.full-heigth{height:100vh}
.phones-visible .tv-content-section-container.full-heigth{height:100vh}
.tv-content-section-container .homeofferlane-container{display:flex;flex-direction:column;flex:1;justify-content:flex-end;margin-top:0}
}
@media screen and (min-width:1024px) and (max-height:900px){.tv-content-section-container{padding:3% 0}
}
@media screen and (min-width:1024px) and (max-height:800px){.tv-content-section-container{padding:2% 0}
.tv-content-section-container .cards-container .card-container{min-height:368px}
}
@media screen and (min-width:1024px) and (max-height:720px){.tv-content-section-container{padding:1% 0}
.tv-content-section-container .cards-container .card-container{min-height:300px}
.tv-content-section-container .cards-container .card-container .icon{margin-top:5%}
}
@media screen and (min-width:1024px) and (max-height:648px),screen and (min-width:1024px) and (max-width:1440px){.tv-content-section-container .cards-container .card-container{min-height:280px}
.tv-content-section-container .cards-container .card-container .title{font-size:32px}
.tv-content-section-container .cards-container .card-container .subtitle{font-size:22px}
.tv-content-section-container .cards-container .card-container .description{font-size:14px}
.tv-content-section-container .cards-container .card-container .icon{margin-top:5%}
}
@media screen and (min-width:1024px) and (max-height:620px){.tv-content-section-container{height:auto}
.phones-visible .tv-content-section-container{height:auto}
}
.tvcontentsectioncards .tv-content-section-container{padding:0}
@media only screen and (max-width:1024px){.tvcontentsectioncards .tv-content-section-container{margin:0}
.tvcontentsectioncards .tv-content-section-container .cards-container{flex-wrap:unset}
}
@media only screen and (max-width:520px){.tvcontentsectioncards .tv-content-section-container{margin:0}
.tvcontentsectioncards .tv-content-section-container .cards-container{flex-wrap:wrap;padding-left:10px;padding-right:10px}
.tvcontentsectioncards .tv-content-section-container .cards-container .card-container .subtitle,.tvcontentsectioncards .tv-content-section-container .cards-container .card-container .title,.tvcontentsectioncards .tv-content-section-container .cards-container .card-container .description{max-width:100%;word-break:break-all}
.tvcontentsectioncards .tv-content-section-container .cards-container .card-container .subtitle #text,.tvcontentsectioncards .tv-content-section-container .cards-container .card-container .title #text,.tvcontentsectioncards .tv-content-section-container .cards-container .card-container .description #text{max-width:100%}
}
.sports-card-container .sport-image{margin-bottom:24px}
.sports-card-container .sport-image .image-container img{border-radius:5px}
.sports-card-container .sport-title{margin-bottom:16px}
.sports-card-container .sport-title .h3{font-weight:400;color:#757575}
.sports-card-container .sport-description{margin-bottom:16px}
.sports-card-container .divider{height:1px;background-color:#cfd8dc;margin-bottom:16px}
.sports-card-container .sport-footer p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0}
@media(max-width:1024px){.sport-section-container .container .sport-section-cards-container{max-width:100vw;width:100%}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track{display:block !important;justify-content:unset !important;align-items:unset !important}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card{display:block !important;flex:unset !important;justify-content:unset !important;flex-direction:unset !important}
.sport-section-container .container .sport-section-cards-container .slick-dots{z-index:5;width:100%}
.sport-section-container .container .sport-section-cards-container .slick-dots li{width:10px;height:10px;margin:0 15px}
.sport-section-container .container .sport-section-cards-container .slick-dots li button{background:#fff;border-radius:calc(5px);height:10px;width:10px;position:absolute;-webkit-transition:-webkit-transform .8s ease,opacity .8s ease;transition:transform .8s ease,opacity .8s ease}
.sport-section-container .container .sport-section-cards-container .slick-dots li button::before{content:'';width:10px;height:10px;top:3px;position:absolute;left:0;visibility:hidden;background:#fff;opacity:0;-webkit-transition:-webkit-transform .8s ease,opacity .8s ease;transition:transform .8s ease,opacity .8s ease}
.sport-section-container .container .sport-section-cards-container .slick-dots .slick-active{width:32px}
.sport-section-container .container .sport-section-cards-container .slick-dots .slick-active button{width:32px;padding:2px;margin:0;-webkit-transition:-webkit-transform .1s linear .1s,opacity .1s linear,visibility 0 .1s linear;transition:transform .1s linear .1s,opacity .1s linear,visibility 0 .1s linear;animation-timing-function:cubic-bezier(0,0,1,1)}
}
*{outline:0}
.sport-section-container{position:relative;margin:0 auto;min-height:calc(100vh - 65px);width:100%;display:flex;flex-direction:column;justify-content:center;align-items:center}
.sport-section-container .container{position:relative;z-index:1;-webkit-box-sizing:border-box;box-sizing:border-box;max-width:1440px}
.sport-section-container .container .sport-section-title{margin-bottom:72px}
.sport-section-container .container .sport-section-title .sport-section-title-secondary{margin-bottom:8px}
.sport-section-container .container .sport-section-title .sport-section-title-secondary .text-container{text-shadow:0 2px 11px rgba(0,0,0,0.91);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;text-align:center;color:#fff}
.sport-section-container .container .sport-section-title .sport-section-title-primary .text-container{text-shadow:0 0 21px rgba(0,0,0,0.79);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:60px;font-weight:500;line-height:1;color:#fff}
.sport-section-container .container .sport-section-title .sport-section-link{margin-top:24px}
.sport-section-container .container .sport-section-cards-container{width:100%}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track{display:flex;justify-content:space-between;align-items:stretch}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card:nth-child(2){border-width:1px;border-style:solid;border-image:linear-gradient(to bottom,rgba(255,255,255,0),#fff 56%,rgba(0,0,0,0)) 1 100%}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card{display:flex;flex-direction:column;justify-content:space-between;min-height:100%;height:auto;flex:1;padding:0 1.3%}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header{margin-bottom:24px}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-images{display:flex;justify-content:center;min-height:38px;max-height:38px;height:100%;margin-bottom:24px}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-images .header-images-image{margin:0}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-images .header-images-image .image-container{margin:0 22px}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-images .header-images-image .image-container img{max-width:100%;max-height:100%;filter:grayscale(1) brightness(10)}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-text{margin:0 5%}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-text .text-container{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;line-height:1.42;text-align:center;color:#fff}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .content-footer .sport-section-card-link .link-container a{color:#fff}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .content-footer .sport-section-card-link .link-container a::after{color:#fff}
.sport-section-container .container .sport-section-cards-container .slick-dots{position:static}
.sport-section-container .container .sport-section-offerline{margin-top:72px}
.sport-section-container .container .sport-section-offerline .dtv-hol-container{margin-bottom:0}
.sport-section-container .container.theme_dark .sport-section-title .sport-section-title-secondary .text-container{color:#000;text-shadow:unset}
.sport-section-container .container.theme_dark .sport-section-title .sport-section-title-primary .text-container{color:#000;text-shadow:unset}
.sport-section-container .container.theme_dark .slick-list .slick-track .sport-section-card:nth-child(2){border-image:linear-gradient(to bottom,rgba(255,255,255,0),#000 56%,rgba(0,0,0,0)) 1 100%}
.sport-section-container .container.theme_dark .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-images .header-images-image .image-container img{filter:grayscale(1) brightness(10) invert(1)}
.sport-section-container .container.theme_dark .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-text .text-container{color:#000}
.sport-section-container .container.theme_dark .slick-list .slick-track .sport-section-card .content-footer .sport-section-card-link .link-container a{color:#000}
.sport-section-container .container.theme_dark .slick-list .slick-track .sport-section-card .content-footer .sport-section-card-link .link-container a::after{color:#000}
.sport-section-container .sport-section-background{width:100%;height:100%;position:absolute;z-index:-1}
.sport-section-container .sport-section-background img,.sport-section-container .sport-section-background video{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
.sport-section-container .sport-section-background .mobile-media{display:none;object-fit:cover;object-position:top center}
.sport-section-container .sport-section-background.solid.bg_dark{background:#78858f;background:linear-gradient(180deg,#78858f 0,#020024 50%)}
.sport-section-container .sport-section-background.solid.bg_light{background:#ffc60b}
@media only screen and (max-width:480px){.sport-section-container{justify-content:flex-end}
.sport-section-container .container{margin-top:295px}
.sport-section-container .container .sport-section-title{margin-bottom:64px}
.sport-section-container .container .sport-section-title .sport-section-title-secondary{margin-bottom:16px}
.sport-section-container .container .sport-section-title .sport-section-title-secondary .text-container{text-shadow:0 2px 20px rgba(0,0,0,0.59)}
.sport-section-container .container .sport-section-title .sport-section-title-primary .text-container{text-shadow:0 2px 20px rgba(0,0,0,0.59);font-size:32px}
.sport-section-container .container .sport-section-title .sport-section-link{margin-top:16px}
.sport-section-container .container .sport-section-cards-container{margin-bottom:48px}
.sport-section-container .container .sport-section-cards-container .slick-list{margin-bottom:48px}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card:nth-child(2){border-width:0}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card{padding:0}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header{margin-bottom:48px}
.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-images{margin-bottom:32px}
.sport-section-container .container .sport-section-offerline{margin:0;margin-bottom:32px}
.sport-section-container .sport-section-background .desktop-media{display:none}
.sport-section-container .sport-section-background .mobile-media{display:block}
}
@media only screen and (width:768px){.sport-section-container .container .sport-section-cards-container .slick-list .slick-track .sport-section-card .sport-section-card-header .card-header-text{margin:0 25%}
.sport-section-container .container .sport-section-cards-container .slick-dots{margin-top:48px}
}
.cq-Editable-dom.sport-section-container,.phones-visible .cq-Editable-dom.sport-section-container,.cq-Editable-dom.sport-section-container,.phones-visible .cq-Editable-dom.sport-section-container,.cq-Editable-dom .sport-section-container,.phones-visible .cq-Editable-dom .sport-section-container{height:900px;min-height:900px}
.sport-cards-slider-container{margin-bottom:99px}
.sport-cards-slider-container .slick-slide .sport-card-slide{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0 12px}
.sport-cards-slider-container .slick-slide .sport-card-slide .sport-image{margin-bottom:24px;border-radius:5px;width:100%;height:100%;object-fit:cover}
.sport-cards-slider-container .slick-slide .sport-card-slide .sport-title{font-size:32px;color:#757575;margin-bottom:16px}
.sport-cards-slider-container .slick-slide .sport-card-slide .sport-description{font-size:16px;margin-bottom:16px}
.sport-cards-slider-container .slick-slide .sport-card-slide .divider{height:1px;background-color:#cfd8dc;margin-bottom:16px}
.sport-cards-slider-container .slick-slide .sport-card-slide .sport-footer p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0}
.sport-cards-slider-container .slick-dots{margin-top:24px}
.sport-cards-slider-container .slick-arrow{background-color:#d8d8d8;width:49px;height:49px;border-radius:50%;z-index:1;top:25%}
.sport-cards-slider-container .slick-arrow::before{content:'';border:solid #000;border-width:0 3px 3px 0;display:inline-block;padding:7px;border-radius:2px}
.sport-cards-slider-container .slick-arrow.slick-prev::before{transform:translateX(4px) rotate(135deg);-webkit-transform:translateX(4px) rotate(135deg)}
.sport-cards-slider-container .slick-arrow.slick-next::before{transform:translateX(-4px) rotate(-45deg);-webkit-transform:translateX(-4px) rotate(-45deg)}
@media only screen and (max-width:480px){.sport-cards-slider-container{max-width:100%;margin-bottom:48px}
.sport-cards-slider-container .sport-card-slide{margin-bottom:48px}
.sport-cards-slider-container .sport-card-slide .sport-image{width:100%}
.sport-cards-slider-container .sport-card-slide .sport-title{width:100%}
.sport-cards-slider-container .sport-card-slide .sport-description{width:100%}
.sport-cards-slider-container .sport-card-slide:first-of-type{margin-left:0}
}
.horizontal-divider{height:2px;width:100%;background-color:#cfd8dc}
.single-plan-card-container{width:100%;box-shadow:0 8px 16px 0 rgba(0,0,0,0.1);border-radius:5px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;border:solid 1px #cfd8dc;box-sizing:border-box;background-color:#fff;display:flex;flex-direction:column}
.single-plan-card-container.premium-pack{border:0}
.single-plan-card-container.premium-pack .header{height:64px;background-image:linear-gradient(to top,#4c4c4c,#414141 98%)}
.single-plan-card-container.premium-pack .body{height:200px}
.single-plan-card-container.premium-pack .body .warning{padding:0 0 12px;min-height:18px}
.single-plan-card-container.premium-pack .footer .price .title{min-height:32px;line-height:1.14;margin-top:3px}
.single-plan-card-container.premium-pack .footer .price .channel{width:50%;padding:0 9px;box-sizing:border-box}
.single-plan-card-container.premium-pack .footer .price .value{width:50%;padding:0 9px;box-sizing:border-box}
.single-plan-card-container .header{width:100%;display:flex;justify-content:center;align-items:center;height:60px;background-image:linear-gradient(269deg,#4d4d4d,#1e1e1e);border-top-left-radius:5px;border-top-right-radius:5px;color:#fff;background-color:#414141}
.single-plan-card-container .header .title{font-size:26px;font-weight:500;line-height:1.23;width:100%;margin:0 1rem;display:flex;align-items:center;justify-content:center;flex-wrap:wrap}
.single-plan-card-container .header .title img{margin:0 16px}
.single-plan-card-container .header .plan{display:flex;align-items:center;justify-content:center;font-size:7px;cursor:pointer;border:1px solid #777;border-radius:2rem;padding:8px 18px;margin:0 1rem;font-weight:500;font-style:italic;color:#005993;height:min-content}
.single-plan-card-container .divider{position:relative;height:6px;width:100%}
.single-plan-card-container .divider .deco{height:100%}
.single-plan-card-container .divider .deco .item1{width:57%;left:11%;transform:skew(-20deg);background-color:#fff;opacity:.25}
.single-plan-card-container .divider .deco .item2{left:68%;width:22%;transform:skew(-15deg);background-color:#555;opacity:.25}
.single-plan-card-container .body{height:150px;width:100%;overflow:hidden;padding:8px 24px;box-sizing:border-box}
.single-plan-card-container .body .warning{text-align:center;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;color:#000;box-sizing:border-box;min-height:24px}
.single-plan-card-container .body .warning a{color:#005993}
.single-plan-card-container .body .title{margin:1rem 0 1rem;text-align:center;font-size:14px;font-weight:500;line-height:1.43;color:#242424}
.single-plan-card-container .body .channel-list{display:flex;width:100%;justify-content:center}
.single-plan-card-container .body .channel-list img{object-fit:contain;width:90px;height:32px;margin:8px 6px;-webkit-filter:grayscale(100%);filter:grayscale(100%)}
.single-plan-card-container .body .list{font-weight:normal;list-style:none;text-align:center;padding:0;margin:16px 0 18px}
.single-plan-card-container .body .list li{font-size:16px;line-height:1.31;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#000}
.single-plan-card-container .body .list .offer{color:#d55600}
.single-plan-card-container .footer{background-image:linear-gradient(to bottom,#f7f7f7,#f1f1f1,#f1f1f1);padding:25px 0;box-sizing:border-box;border-bottom-left-radius:5px;border-bottom-right-radius:5px;width:100%;min-height:222px;margin-top:auto}
.single-plan-card-container .footer .price{display:flex;width:90%;margin:0 auto 21px;justify-content:center;align-items:stretch}
.single-plan-card-container .footer .price .title{font-size:14px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5;margin-bottom:0}
.single-plan-card-container .footer .price .channel{width:28%;border-right:1px solid #cfd8dc}
.single-plan-card-container .footer .price .channel *{color:#0e0e0e;text-align:center}
.single-plan-card-container .footer .price .channel .number{font-size:24px;font-weight:500;line-height:1}
.single-plan-card-container .footer .price .value{width:57%}
.single-plan-card-container .footer .price .value *{color:#0e0e0e;text-align:center}
.single-plan-card-container .footer .price .value .number{font-size:24px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500;line-height:1}
.single-plan-card-container .footer .price .value .tiny{line-height:1.33;color:#272d33;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px}
.single-plan-card-container .footer .acquisition-dropdown-container{width:90%;margin:0 auto}
.single-plan-card-container .footer .more-info{margin-top:25px;color:#0073ae;font-size:16px;font-weight:500;cursor:pointer;display:flex;align-items:center;justify-content:center}
.single-plan-card-container .footer .more-info .chevron{display:inline-block;border-left:1.5px solid #0073ae;border-bottom:1.5px solid #0073ae;width:5px;height:5px;transform:rotate(225deg)}
.single-plan-card-container .truncate{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
@media only screen and (max-width:768px){.single-plan-card-container.premium-pack .body .channel-list,.single-plan-card-container.premium-pack .body .warning,.single-plan-card-container.premium-pack .body .title{display:flex}
.single-plan-card-container.premium-pack .body .list li{display:block}
.single-plan-card-container .header{height:auto;padding:13px 0}
.single-plan-card-container .header .title{text-align:center;line-height:1.35}
.single-plan-card-container .body{height:min-content}
.single-plan-card-container .body .channel-list,.single-plan-card-container .body .warning,.single-plan-card-container .body .title{display:none}
.single-plan-card-container .body .list{display:block;margin:0}
.single-plan-card-container .body .list li{display:none}
.single-plan-card-container .body .list .offer{line-height:3;display:block}
.single-plan-card-container .footer{min-height:203px;padding:5px 0}
.single-plan-card-container .footer .price{margin:10px auto 17px}
}
.ui-widget{display:inline-block}
.ui-widget.directv-input-wrapper{position:relative}
.ui-widget.directv-input-wrapper .directv-input{background-color:#fff;border-color:#9e9e9e;border-bottom-right-radius:0;border-top-right-radius:0;border-right:0;box-shadow:0 2px 4px 0 rgba(0,0,0,0.1);color:#000;display:inline-block;font-size:14px;font-weight:500;height:16px}
.medium .ui-widget.directv-input-wrapper .directv-input{height:24px}
.ui-widget.directv-input-wrapper .custom-combobox{display:flex}
.ui-widget.directv-input-wrapper .custom-combobox.open .directv-input{border-bottom-left-radius:0}
.ui-widget.directv-input-wrapper .custom-combobox a.custom-combobox-toggle{background-color:#fff;box-shadow:1px 1px 1px 0 rgba(0,0,0,0.1);margin:0;border:1px solid #9e9e9e;border-radius:5px;border-left:0;border-bottom-left-radius:0;border-top-left-radius:0;padding-right:5px;height:38px;cursor:pointer}
.ui-widget.directv-input-wrapper .ui-button{background-color:#fff;border-color:#9e9e9e;border-left:0;border-bottom-left-radius:0;border-top-left-radius:0;box-shadow:1px 1px 1px 0 rgba(0,0,0,0.1);margin:0;padding:8px 16px 0 0;height:16px}
.ui-widget.directv-input-wrapper .ui-button.ui-button-icon-only{text-indent:unset;display:flex;align-items:center;justify-content:center;padding:0}
.medium .ui-widget.directv-input-wrapper .ui-button{height:24px}
.ui-widget.directv-input-wrapper .ui-button .ui-button-icon{background-image:none;font-size:8px;height:unset;line-height:1;position:static;margin:0;text-indent:unset;width:unset;animation-name:close-spin;animation-duration:1s}
.ui-widget.directv-input-wrapper .ui-button .ui-button-icon::before{font-size:8px}
.ui-widget.directv-input-wrapper .ui-button.open{border-bottom-right-radius:0}
.ui-widget.directv-input-wrapper .ui-button.open .ui-button-icon{transform:rotate(180deg);animation-name:open-spin;animation-duration:1s}
@keyframes open-spin{from{transform:rotate(0)}
to{transform:rotate(180deg)}
}
@keyframes close-spin{from{transform:rotate(180deg)}
to{transform:rotate(360deg)}
}
.ui-widget.directv-input-wrapper .ui-autocomplete{position:absolute;z-index:100;background-color:#fff}
.ui-menu{max-height:300px;overflow-y:auto;overflow-x:hidden}
.ui-menu.ui-widget.ui-widget-content{box-sizing:border-box;border-radius:0 0 5px 5px;border-color:#9e9e9e;border-top:0;width:100% !important}
.ui-menu-item{border-top:1px solid #979797;box-sizing:border-box;color:#000;font-size:14px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5;padding:8px;height:24px}
.ui-menu-item:hover{background-color:#eceff1}
.ui-menu-item:first-child{border-top:0}
.ui-menu-item .ui-state-active{color:#000;background:0;border:0;margin:0}
.segments-autocomplete{align-items:center;display:flex}
.segments-autocomplete--label .text-container{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;margin:0}
.segments-autocomplete--selected{color:#0073ae;cursor:pointer;font-size:14px;line-height:1.5;margin:0 8px;text-decoration:underline}
.segments-autocomplete--autocomplete{width:350px;display:none}
.segments-autocomplete--autocomplete .ui-menu-item{box-sizing:unset}
.segments-autocomplete--icon{color:#00aeef}
.segments-autocomplete li.ui-menu-item{text-align:left}
@media screen and (max-width:768px){.segments-autocomplete{flex-wrap:wrap;justify-content:center;padding:0 8px}
.segments-autocomplete--selected{text-align:center}
.segments-autocomplete--label .text-container{text-align:center}
}
.productorderclasification{padding:0}
.productorderclasification ul{list-style:none}
.prod-order-clasification-cont{display:flex;align-items:center;flex-direction:column;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.prod-order-clasification-cont>.filter{margin:48px 0 54px;display:flex;align-items:center}
.prod-order-clasification-cont>.filter *{margin:0;padding:0}
.prod-order-clasification-cont>.filter>.dropdown{list-style-type:none;width:155px;height:34px;margin-left:13px;justify-content:space-around;align-items:center;border:1px solid #9e9e9e;font-size:14px;line-height:2.29;border-radius:5px;box-shadow:0 2px 4px 0 rgba(0,0,0,0.1);cursor:pointer;position:relative;box-sizing:border-box}
.prod-order-clasification-cont>.filter>.dropdown li>.drop-action{display:flex}
.prod-order-clasification-cont>.filter>.dropdown li>.drop-action>.dropdown-label{width:100%;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;text-align:center;color:#000}
.prod-order-clasification-cont>.filter>.dropdown li>.drop-action>.chevron-down{width:33px;border-left:1px solid #9e9e9e}
.prod-order-clasification-cont>.filter>.dropdown li>.drop-action>.chevron-down>i{border:solid #000;border-width:0 2px 2px 0;display:inline-block;padding:4px;margin-left:8px;margin-bottom:2px;transform:rotate(45deg);-webkit-transform:rotate(45deg)}
.prod-order-clasification-cont>.filter>.dropdown li>ul{width:100%;list-style-type:none;display:none;left:-1px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;position:absolute;background-color:#fff;border:1px solid #9e9e9e;border-top:1px solid #cfd8dc;box-shadow:0 2px 4px 0 rgba(0,0,0,0.1)}
.prod-order-clasification-cont>.filter>.dropdown li>ul>li>a{color:#000;width:152px;text-decoration:none;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;display:block;text-align:center;cursor:pointer}
.prod-order-clasification-cont>.filter>.dropdown li>ul>li>a>svg{margin-right:8.5px}
.prod-order-clasification-cont>.filter>.dropdown li>ul>li>a:hover{background-color:#eceff1}
.prod-order-clasification-cont>.filter>.dropdown li.open ul{display:block}
.prod-order-clasification-cont>.filter>.dropdown:hover{border-bottom-left-radius:0;border-bottom-right-radius:0}
.prod-order-clasification-cont>.filter>.plans-clasification{display:flex}
.prod-order-clasification-cont>.filter>.plans-clasification>.btn-option{width:120px;height:32px;justify-content:space-around;align-items:center;display:flex;border:1px solid #0073ae;border-left:0;color:#0073ae;font-size:14px;line-height:2.29;cursor:pointer}
.prod-order-clasification-cont>.filter>.plans-clasification>.btn-option.right{border-left:0;border-radius:0 5px 5px 0}
.prod-order-clasification-cont>.filter>.plans-clasification>.btn-option.left{border:1px solid #0073ae;border-radius:5px 0 0 5px}
.prod-order-clasification-cont>.filter>.plans-clasification>.btn-option.selected{background-color:#0073ae;color:#fff}
.prod-order-clasification-cont>.cards-container{width:100%;margin-top:54px;max-width:1440px;padding:0 25px;box-sizing:border-box}
.prod-order-clasification-cont>.cards-container.withfilter{display:grid;grid-template-columns:repeat(auto-fill,minmax(448px,1fr));grid-gap:23px}
.prod-order-clasification-cont>.cards-container.nofilter{display:flex;flex-wrap:wrap;justify-content:center;flex-direction:row}
.prod-order-clasification-cont>.cards-container.nofilter>.single-plan-card-container{margin:7px;width:448px}
.prod-order-clasification-cont>.plans-classification-text .inactive{display:none}
.prod-order-clasification-cont.theme-white>.filter>.dropdown{border:1px solid #fff;box-shadow:0 2px 4px 0 rgba(0,0,0,0.1);background-color:#333}
.prod-order-clasification-cont.theme-white>.filter>.dropdown li>.drop-action>.dropdown-label{color:#fff}
.prod-order-clasification-cont.theme-white>.filter>.dropdown li>.drop-action>.chevron-down{border-left:solid 1px #333}
.prod-order-clasification-cont.theme-white>.filter>.dropdown li>.drop-action>.chevron-down>i{border:1px solid #fff;border-width:0 2px 2px 0}
.prod-order-clasification-cont.theme-white>.filter>.dropdown li>ul{background-color:#333;border:1px solid #777;border-top:1px solid #fff;box-shadow:0 2px 4px 0 rgba(0,0,0,0.1)}
.prod-order-clasification-cont.theme-white>.filter>.dropdown li>ul>li>a{color:#fff}
.prod-order-clasification-cont.theme-white>.filter>.dropdown li>ul>li>a:hover{background-color:#333}
.prod-order-clasification-cont.theme-white>.filter>.plans-clasification>.btn-option{border:1px solid #777;color:#fff}
.prod-order-clasification-cont.theme-white>.filter>.plans-clasification>.btn-option.selected{background-color:#333;color:#fff}
@media only screen and (max-width:520px){.prod-order-clasification-cont>.cards-container.withfilter{grid-template-columns:repeat(auto-fill,minmax(250px,1fr));grid-gap:12px}
}
@media only screen and (max-width:480px){.prod-order-clasification-cont>.filter .plans-clasification>.btn-option{padding:8px;line-height:16px;text-align:center}
}
@media only screen and (max-width:768px){.prod-order-clasification-cont{background:#fafafa}
.prod-order-clasification-cont .filter-segments{margin-bottom:16px}
.prod-order-clasification-cont .filter{width:100%;margin:0;flex-direction:column}
.prod-order-clasification-cont .filter>.dropdown{width:calc(100% - 24px);height:39px;margin:8px 12px}
.prod-order-clasification-cont .filter>.dropdown li>.drop-action>.dropdown-label{padding:3.5px 0}
.prod-order-clasification-cont .filter>.dropdown li>.drop-action>.chevron-down{width:42px;padding:3.5px 0}
.prod-order-clasification-cont .filter>.dropdown li>.drop-action>.chevron-down>i{margin-left:15px}
.prod-order-clasification-cont .filter>.dropdown li>ul>li>a{width:calc(100vw - 42px);border-bottom:1px solid #cfd8dc}
.prod-order-clasification-cont .filter>.dropdown li>ul>li:last-child>a{border-bottom:0}
.prod-order-clasification-cont .filter>.dropdown li:hover ul{display:block}
.prod-order-clasification-cont .filter>.plans-clasification{width:calc(100% - 24px);margin:8px 12px}
.prod-order-clasification-cont .filter>.plans-clasification>.btn-option{width:calc(100% / 3)}
.prod-order-clasification-cont .cards-container{margin:0;grid-template-columns:100%}
.prod-order-clasification-cont .cards-container .single-plan-card-container{margin:7px 0 !important;width:100% !important}
}
.callmenow-container{width:100%;height:100%;justify-content:center;align-items:center;background:rgba(0,0,0,0.5);z-index:2000}
.callmenow-container.close{display:none}
.callmenow-container.open{display:flex;position:fixed;top:0}
.hide{display:none}
.product-detail-header-top{position:relative}
.product-detail-header-top .breadcrumb{position:fixed;top:0;z-index:10}
.deco-slider-template-container .deco-slider-container{background-position-y:39%}
.resolution4k-template-container .resolution-comparator-container{margin-bottom:91px}
@media only screen and (max-width:768px){.deco-slider-template-container div.deco-slider-container{background-image:none}
}
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}
body{margin:0}
article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}
audio,canvas,progress,video{display:inline-block;vertical-align:baseline}
audio:not([controls]){display:none;height:0}
[hidden],template{display:none}
a{background-color:transparent}
a:active,a:hover{outline:0}
abbr[title]{border-bottom:1px dotted}
b,strong{font-weight:bold}
dfn{font-style:italic}
h1{font-size:2em;margin:.67em 0}
mark{background:#ff0;color:#000}
small{font-size:80%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-0.5em}
sub{bottom:-0.25em}
img{border:0}
svg:not(:root){overflow:hidden}
.responsivegrid figure{margin:0}
hr{box-sizing:content-box;height:0}
pre{overflow:auto}
code,kbd,pre,samp{font-family:monospace;font-size:1em}
button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}
button{overflow:visible}
button,select{text-transform:none}
button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}
button[disabled],html input[disabled]{cursor:default}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}
input{line-height:normal}
input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0}
input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}
input[type="search"]{-webkit-appearance:textfield;box-sizing:content-box}
input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}
fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}
legend{border:0;padding:0}
textarea{overflow:auto}
optgroup{font-weight:bold}
table{border-collapse:collapse;border-spacing:0}
td,th{padding:0}
@font-face{font-family:'dtv_cds_icons';src:url('../components/content/prepaidcalculator/clientlib/resources/dtv_cds_icons.eot?ohltip');src:url('../components/content/prepaidcalculator/clientlib/resources/dtv_cds_icons.eot?ohltip#iefix') format('embedded-opentype'),url('../components/content/prepaidcalculator/clientlib/resources/dtv_cds_icons.ttf') format('truetype'),url('../components/content/prepaidcalculator/clientlib/resources/dtv_cds_icons.woff?ohltip') format('woff'),url('../components/content/prepaidcalculator/clientlib/resources/dtv_cds_icons.svg?ohltip#dtv_cds_icons') format('svg');font-weight:normal;font-style:normal}
[class^="dtv-cds-icon-"],[class*=" dtv-cds-icon-"]{font-family:'dtv_cds_icons' !important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.dtv-cds-icon-back::before{content:"\e912"}
.dtv-cds-icon-error771::before{content:"\e90e"}
.dtv-cds-icon-less::before{content:"\e90f"}
.dtv-cds-icon-more::before{content:"\e910"}
.dtv-cds-icon-submenu::before{content:"\e911"}
.dtv-cds-icon-arrow-left::before{content:"\e90d"}
.dtv-cds-icon-article::before{content:"\e90"}
.dtv-cds-icon-drive::before{content:"\e900"}
.dtv-cds-icon-bill::before{content:"\e902"}
.dtv-cds-icon-caret-down::before{content:"\10ffff"}
.dtv-cds-icon-caret-right::before{content:"\e90b"}
.dtv-cds-icon-like::before{content:"\e905"}
.dtv-cds-icon-monitor::before{content:"\e906"}
.dtv-cds-icon-package::before{content:"\e907"}
.dtv-cds-icon-question::before{content:"\e908"}
.dtv-cds-icon-card::before{content:"\e909"}
.dtv-cds-icon-settings::before{content:"\e90a"}
.dtv-cds-icon-video::before{content:"\e90c"}
.dtv-cds-icon-warning::before{content:"\e905"}
.directv-ui-button{border-radius:5px;background-color:#0073ae;text-transform:uppercase;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;text-align:center;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#f9f9f9;text-decoration:none;cursor:pointer;border:0;display:flex;flex-direction:column;justify-content:center;align-items:center}
.directv-ui-button.disabled{opacity:.5;background-color:#9e9e9e;color:rgba(0,0,0,0.5)}
.directv-ui-button.disabled:hover{opacity:.5;background-color:#9e9e9e;color:rgba(0,0,0,0.5)}
.directv-ui-button:hover{background-color:#0090da}
.directv-ui-button:focus{outline:0}
.directv-input-wrapper{width:100%}
.directv-input-wrapper .directv-label,.directv-input-wrapper .directv-input{display:block;width:100%}
.directv-input-wrapper .directv-label{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0 0 8px 0;color:#242424;line-height:1.5}
.directv-input-wrapper .directv-input{box-sizing:border-box;color:#000;border:1px solid #9e9e9e;border-radius:5px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;height:45px;padding:0 16px 0 16px}
.directv-input-wrapper .directv-input:focus{border-radius:5px;border:1px solid #009fdb;box-shadow:0 0 3px 0 rgba(0,174,239,0.5);outline:0;transition:width .5s;width:100%}
.directv-input-wrapper .directv-input::placeholder,.directv-input-wrapper .directv-input::-ms-input-placeholder{color:#9e9e9e}
.directv-input-wrapper .directv-input.touched:invalid{border-radius:5px;border:1px solid #cc1401;box-shadow:0 0 4px 0 rgba(229,57,53,0.5);outline:0;transition:width .5s;width:100%}
.directv-input-wrapper .directv-input-error{color:#e53935;display:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;margin-top:8px}
.directv-input-wrapper .directv-input-error.show{display:block}
.directv-input-wrapper .directv-input-error.show ~ .directv-input-description{display:none}
.directv-input-wrapper .directv-input-description{color:#242424;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;margin:10px 0 0}
.directv-input-wrapper .directv-help-text{color:#000;display:block;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0 auto;text-align:left;width:440px}
.directv-input-wrapper .directv-help-text+.directv-input-error{margin:0 auto;width:440px}
.directv-input-wrapper .directv-help-text .directv-input-checkbox-check-mark{margin-top:.5em;float:left;margin-bottom:2em}
.directv-input-wrapper .directv-input-group-radios{align-items:center;border:solid 1px #0073ae;border-radius:5px;display:flex;flex-direction:row;height:48px;padding:0;width:100%}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio{border-right:1px solid #0073ae;flex:1;height:48px;line-height:48px;text-align:center;width:33%}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio input{display:none}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio input:checked+label{background-color:#0073ae;color:#fff}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio input:checked ~ .directv-input-radio-mark{box-shadow:inset 0 0 0 4px #0073ae;border:1px solid #0073ae}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio label{color:#0073ae;cursor:pointer;display:block;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio:hover{background-color:#eceff1}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio:hover+label{color:#0073ae}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio:hover+.directv-input-radio-mark{box-shadow:inset 0 0 0 4px #0073ae;border:1px solid #0073ae}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio:last-child{border-right:0}
.directv-input-wrapper .directv-input-group-radios .directv-input-radio .directv-input-radio-mark{box-sizing:border-box;display:inline-block;width:16px;height:16px;border-radius:50%;border:1px solid #9a9a9a}
.directv-input-wrapper .directv-input-checkbox input{display:none}
.directv-input-wrapper .directv-input-checkbox input:checked+.directv-input-checkbox-check-mark{background-color:#0073ae;border:1px solid #0073ae;color:#eceff1}
.directv-input-wrapper .directv-input-checkbox input:disabled:disabled ~ .directv-input-checkbox-check-mark{background-color:#eceff1}
.directv-input-wrapper .directv-input-checkbox input:disabled:disabled ~ .dtv-public-icon-check::before{color:#eceff1}
.directv-input-wrapper .directv-input-checkbox label{cursor:pointer}
.directv-input-wrapper .directv-input-checkbox label .directv-contact-info-terms-link{color:#0073ae;display:inline;text-decoration:underline}
.directv-input-wrapper .directv-input-checkbox .directv-input-checkbox-check-mark{border-radius:2px;border:1px solid #9a9a9a;color:#fff;height:1em;margin-right:8px;width:1em}
.directv-input-wrapper .directv-input-checkbox .directv-contact-info-terms-link{display:none}
.directv-input-wrapper .directv-input-help-text{line-height:1.5;color:#242424;font-size:14px;margin-top:16px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.directv-input-wrapper #autocomplete-box{margin:0;padding:0;max-height:139px;overflow-x:hidden;overflow-y:auto;border:1px solid #ccc;border-radius:5px}
.directv-input-wrapper #autocomplete-box li{color:#242424;padding:5px 20px;font-size:15px;border-bottom:1px solid #ccc;cursor:pointer;transition:all .2s}
.directv-input-wrapper #autocomplete-box li:hover{background:#f9f9f9;color:#009fdb}
.directv-input-wrapper #autocomplete-box li:last-child{border-bottom:0}
.directv-input-wrapper #radio-group{max-width:100%;width:100%;border:1px solid #9a9a9a;border-radius:5px;margin:0 0 20px 0}
.directv-input-wrapper #radio-group>div{border-right:1px solid #9a9a9a}
.directv-input-wrapper #radio-group>div:last-child{border-right:0}
.directv-input-wrapper #radio-group .cell{padding:23px 10px;text-align:center}
.directv-input-wrapper #radio-group .cell label{display:inline-block;position:relative;cursor:pointer;padding:0 0 0 26px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.directv-input-wrapper #radio-group .cell input{position:absolute;opacity:0;cursor:pointer}
.directv-input-wrapper #radio-group .cell .checkmark{position:absolute;top:0;left:0;height:16px;width:16px;background-color:#fff;border-radius:50%;border:1px solid #9a9a9a}
.directv-input-wrapper #radio-group .cell .checkmark:after{content:"";position:absolute;display:none}
.directv-input-wrapper #radio-group .cell label:hover input ~ .checkmark{background-color:#fff;border:1px solid #9a9a9a}
.directv-input-wrapper #radio-group .cell label input:checked ~ .checkmark{border:1px solid #0073ae;background-color:#0073ae}
.directv-input-wrapper #radio-group .cell label input:checked ~ .checkmark:after{display:block}
.directv-input-wrapper #radio-group .cell label .checkmark:after{top:3px;left:3px;width:10px;height:10px;border-radius:50%;background:#fff}
@media screen and (max-width:970px){.directv-input-wrapper .directv-help-text{width:100%}
.directv-input-wrapper .directv-help-text+.directv-input-error{width:100%}
}
@media screen and (max-width:768px){.directv-input-wrapper #radio-group{grid-gap:0}
.directv-input-wrapper #radio-group>div{grid-column:span 12;border-bottom:1px solid #9a9a9a;border-right:0}
.directv-input-wrapper #radio-group>div:last-child{border-bottom:0}
.directv-input-wrapper #radio-group .cell{padding:20px;text-align:left}
}
.calculator{width:100%;text-align:center;margin-top:32px}
.calculator-container{margin-top:48px}
.calculator-container h5{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#242424;margin:0 0 24px 0;text-align:left}
.calculator-container .link a{text-transform:uppercase;text-decoration:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#0073ae;cursor:pointer}
.calculator-container .half{width:100%;max-width:453px;padding-bottom:48px}
.calculator-container .input{width:100%;max-width:453px;padding:0 8px;box-sizing:border-box;padding-bottom:48px}
.calculator-container .input ul{list-style:none;margin:0;padding:0;display:flex;flex-direction:row;align-items:center}
.calculator-container .input ul li{list-style:none;display:flex;align-items:center;text-align:left}
.calculator-container .input section{width:100%;margin:0 auto}
.calculator-container .input .plan_picker .plans-container{width:100%;margin-bottom:32px}
.calculator-container .input .plan_picker .plans-container .plan-info-container{display:flex;justify-content:flex-start;margin-bottom:16px}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-name{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;display:flex;text-align:left;width:100%;flex-direction:column;align-items:flex-start;margin-right:auto;max-width:none;flex:1}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-info-detail{display:flex;align-items:center;justify-content:center;flex:1}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-info-detail .plan-types-container{display:grid;grid-template-columns:repeat(auto-fit,minmax(54px,1fr));grid-column-gap:16px;min-width:124px}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-info-detail .plan-types-container .plan-type{display:flex;justify-content:center;align-items:center;height:32px}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-info-detail .plan-link{margin-left:14px;display:none}
.calculator-container .input .recharge_amount{margin-bottom:48px}
.calculator-container .input .recharge_amount-values{display:flex;flex-direction:row;justify-content:space-between;flex-wrap:wrap}
.calculator-container .input .recharge_amount-values label{flex:0 48%;margin-bottom:16px}
.calculator-container .input .recharge_amount-values label .content{border-radius:2px}
.calculator-container .input .recharge_amount-values label .content_text{color:#4a4a4a;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;box-sizing:border-box}
.calculator-container .input .recharge_amount-monthly_offer{margin-bottom:24px}
.calculator-container .input .recharge_amount-other-label{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#242424;display:block;text-align:left}
.calculator-container .input .recharge_amount-other-help{margin-top:12px}
.calculator-container .input .recharge_amount-other-input{height:40px;width:100%;max-width:100%;border-radius:5px;border:solid 1px #9e9e9e;background-color:#fff}
.calculator-container .input .recharge_amount .aditional{display:flex;flex-direction:column;justify-content:center;align-items:start;margin:24px auto 0}
.calculator-container .input .recharge_amount .aditional-option{display:flex;justify-content:start;align-items:center;width:unset;margin-bottom:16px}
.calculator-container .input .recharge_amount .aditional-option:last-child{margin:0}
.calculator-container .input .recharge_amount .aditional-option--text{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#000}
.calculator-container .input .packages-list{margin-bottom:32px}
.calculator-container .input .packages-list-element{margin-bottom:16px}
.calculator-container .input .packages-list-element-options{display:flex;margin:0;align-items:start;justify-content:space-between}
.calculator-container .input .packages-list-element-options-picker{margin-top:4px}
.calculator-container .input .packages-list-element-options-name{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#242424;margin-right:8px;width:155px;flex-grow:2}
.calculator-container .input-options{display:flex;justify-content:center;align-items:center}
.calculator-container .input-options button{width:300px;height:48px;display:flex;justify-content:center;align-items:center}
.calculator-container .output{display:flex;padding-top:48px;background-color:#ffc60b;flex-direction:column;justify-content:space-between}
.calculator-container .output section{width:100%;max-width:352px;margin:0 auto}
.calculator-container .output .output-title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#000;text-transform:uppercase;margin:0;margin-bottom:32px}
.calculator-container .output .output-days{width:169px;height:148px;border-radius:5px;background-color:#fff;margin:0 auto;display:flex;flex-direction:column;align-items:center;justify-content:center}
.calculator-container .output .output-days--amount{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:60px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;text-align:center;color:#000}
.calculator-container .output .output-days--text{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:18px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#555}
.calculator-container .output .output-subtitle{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:22px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#000;margin:24px 0 32px 0}
.calculator-container .output .abstract{margin-bottom:32px}
.calculator-container .output .abstract-value:first-child{margin-bottom:32px}
.calculator-container .output .abstract-value--plus{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#555;display:block;margin:8px 0}
.calculator-container .output .abstract-value--title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#555;display:block;margin-bottom:8px}
.calculator-container .output .abstract-value--data{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#000}
.calculator-container .output .abstract-value--data.data_list{margin:0;display:flex;flex-direction:column}
.calculator-container .output .abstract-value--data.data_list li:last-child{margin:0}
.calculator-container .output .abstract-value--data.data_list li span{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#000}
.calculator-container .output .disclaimer{background-color:#ffd756;padding:16px 8px 24px 8px;width:100%;max-width:100%;box-sizing:border-box}
.calculator-container .output .disclaimer p{margin:0;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#242424}
@media screen and (min-width:335px){.packages-list-element-options-name{width:auto}
}
@media screen and (min-width:480px){.calculator-container{display:inline-flex;flex-direction:column;justify-content:center;align-items:stretch;border-radius:5px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1)}
.calculator-container section{max-width:378px}
.calculator-container .input{padding-top:48px}
.calculator-container .input .packages-list-element-options-name{min-width:170px;flex-grow:2}
}
@media screen and (min-width:970px){.calculator-container{flex-direction:row;min-width:906px}
.calculator-container .input{padding-left:0;padding-right:0}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-name{flex-direction:row;align-items:center;margin-right:17px;max-width:67px;flex:auto}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-name .plan-link{display:none}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-info-detail{justify-content:flex-start;flex:auto}
.calculator-container .input .plan_picker .plans-container .plan-info-container .plan-info-detail .plan-link{display:block}
}
.unique_selection{display:block;position:relative;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;height:32px;width:100%}
.unique_selection.middle{max-width:170px}
@media screen and (min-width:906px){.unique_selection.middle{max-width:181px}
}
.unique_selection.large{max-width:352px}
.unique_selection input{position:absolute;opacity:0;cursor:pointer}
.unique_selection .content{position:absolute;width:100%;height:100%;border-radius:2px;box-sizing:border-box;border:solid 1px #cfd8dc;background-color:#fafafa;display:flex;align-items:center;justify-content:center}
.unique_selection .content_single{width:124px}
.unique_selection .content_text{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#4a4a4a}
.unique_selection .content_text_offer{color:#d55600}
.unique_selection input:checked ~ .content{background-color:#0073ae;border:0}
.unique_selection input:hover ~ .content .content_text,.unique_selection input:checked ~ .content .content_text{color:#fff}
.unique_selection input:hover ~ .content .content_text_offer,.unique_selection input:checked ~ .content .content_text_offer{color:#fff}
.unique_selection:hover input ~ .content{background-color:#0090da;border-color:#0090da}
.prepaid-steps-container{max-width:1440px;margin:0 auto}
.prepaid-steps-container .divider{margin-bottom:16px}
.premium-channel-card-container{width:100%;min-height:602px;padding:125px 0;box-sizing:border-box;display:flex;flex-direction:column;align-items:center;justify-content:center;position:relative;background:linear-gradient(123deg,#042b41,#0d5686)}
.premium-channel-card-container.generic-cards{background:unset}
.premium-channel-card-container.generic-cards.container-dark .premium-title{color:#000}
.premium-channel-card-container.generic-cards.container-dark .premium-description{color:#000}
.premium-channel-card-container.generic-cards .premium-img{opacity:1}
.premium-channel-card-container *{opacity:1}
.premium-channel-card-container .premium-title{margin-top:0;margin-bottom:14px;width:100%;text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:32px;font-weight:500;line-height:1.19;color:#f9f9f9;z-index:1}
.premium-channel-card-container .premium-title a{text-decoration:none;color:inherit}
.premium-channel-card-container .premium-title span::after{content:'>';width:20px;height:20px;color:#00aeef}
.premium-channel-card-container .premium-description{box-sizing:border-box;width:100%;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.31;z-index:1;color:#fff;margin-top:0;margin-bottom:51px;text-align:center;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal}
.premium-channel-card-container .premium-img{position:absolute;height:100%;width:100%;top:0;left:0;-o-object-fit:cover;object-fit:cover;opacity:.2;z-index:0}
.premium-channel-card-container .premium-container{display:flex;justify-content:center;z-index:1;flex-wrap:wrap;max-width:1440px}
.premium-channel-card-container .premium-container>div{margin:9px 10px;width:210px}
@media only screen and (max-width:480px){.premium-channel-card-container{min-height:667px;width:100%}
.premium-channel-card-container .premium-title{font-size:26px;line-height:1.23;margin-bottom:20px}
.premium-channel-card-container .premium-description{margin-bottom:42px;padding:0 8px}
.premium-channel-card-container .premium-container{width:100%;flex-wrap:wrap}
.premium-channel-card-container .premium-container div{margin:8px 5px;width:162px}
}
@media only screen and (max-width:360px){.premium-channel-card-container .premium-container{width:100%;flex-wrap:wrap}
.premium-channel-card-container .premium-container div{margin:6px 4px;width:143px}
}
.premiumchannelcard{cursor:pointer;height:118.5px;border-radius:2.4px;background-color:rgba(0,0,0,0.5);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#fff;box-sizing:border-box;padding:1.2px}
.premiumchannelcard.generic-card{box-shadow:0 8px 16px 0 rgba(0,0,0,0.1);background-color:#fff}
.premiumchannelcard.container-dark a .description{color:#000}
.premiumchannelcard:hover{box-shadow:0 0 7px 0 #00aeef;border:solid 1.2px #009fdb;padding:0}
.premiumchannelcard a{height:100%;text-decoration:none;color:#fff;display:flex;flex-direction:column;align-items:center}
.premiumchannelcard a .imagecontainer{display:flex;justify-content:center}
.premiumchannelcard a .imagecontainer .imagetitle{width:100%;height:48px;object-fit:contain;margin-top:19px}
.premiumchannelcard a .description{font-size:16px;font-weight:500;line-height:1.28;margin-top:auto;margin-bottom:8px;text-align:center}
.premiumchannelcard a .description>span::after{content:'>';width:9px;height:21px;font-size:14.4px;line-height:1.25;text-align:center;color:#00aeef}
.dtv-ott-featured-product{height:auto;overflow:hidden;position:relative;width:100%}
.dtv-ott-featured-product .dtv-ott-featured-product-background img{bottom:0;height:680px;left:50%;width:100%;position:absolute;transform:translateX(-50%);vertical-align:middle}
.dtv-ott-featured-product .dtv-ott-featured-product-container{color:#fff;position:relative;text-align:center;max-width:1440px}
.dtv-ott-featured-product .dtv-ott-featured-product-container p{margin:0}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-image{display:flex;justify-content:center}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-image img{max-width:100%}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-header{margin:12px 11px 32px 12px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-header h2{color:#eceff1;font-size:26px;font-weight:500;line-height:32px;margin:0 0 17px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content{margin:12px 11px 33px 12px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content p{line-height:21px;margin-bottom:24px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .container{grid-gap:7px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .store-icon{align-items:center;background-color:#000;border-radius:6px;box-sizing:border-box;display:inline-flex;height:48px;justify-content:center;padding:0 15px;width:100%}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .store-icon img{max-height:32px;width:inherit}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .store-icon:hover{background-color:#242424}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .dtv-ott-featured-product-site{margin:32px 0 47px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .dtv-ott-featured-product-site .container .col-12{margin:0 auto}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .ott-monochannel-mode{display:block}
@media only screen and (max-width:480px){.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .ott-monochannel-mode{display:none}
}
@media only screen and (min-width:360px){.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .store-icon img{width:auto}
}
@media only screen and (min-width:768px){.dtv-ott-featured-product{height:589px}
.dtv-ott-featured-product .dtv-ott-featured-product-background img{width:100%;object-fit:cover;height:472px}
.dtv-ott-featured-product .dtv-ott-featured-product-container{grid-gap:28px;height:100%;margin:0 auto;text-align:left}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-image img{max-width:none}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-container-left-col{justify-self:end}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-header{margin:215px 20px 30px 0;max-width:683px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-header h2{font-size:40px;line-height:45px;margin:0 0 26px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-header p{line-height:21px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content{max-width:683px;display:flex;margin:0 20px 0 0}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content p{margin-bottom:14px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .dtv-ott-featured-product-stores{flex:1;margin-right:7px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .store-icon img{width:inherit}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .dtv-ott-featured-product-site{flex:1;margin:0;min-width:220px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .dtv-ott-featured-product-site .container .col-12{width:100%;margin:0 auto}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .dtv-ott-featured-product-site .container .col-12 .store-icon{width:220px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .dtv-ott-featured-product-site .container .col-12 .store-icon img{width:auto}
}
@media only screen and (min-width:970px){.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-header{margin-bottom:55px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .col-6{max-width:142px}
.dtv-ott-featured-product .dtv-ott-featured-product-container .dtv-ott-featured-product-content .dtv-ott-featured-product-stores{margin-right:58px}
}
.online-stores-class a{text-decoration:none}
.online-stores-class a .store{cursor:pointer;display:flex;align-items:center;justify-content:flex-start;flex-direction:column;width:100%;min-width:94px;box-sizing:border-box;height:96px;border-radius:5px;border:1px solid #9e9e9e;margin-bottom:24px;position:relative}
.online-stores-class a .store .logo{margin-top:16px;height:40px;object-fit:contain;width:69px}
.online-stores-class a .store .name{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:700;font-style:normal;font-stretch:normal;line-height:1.71;letter-spacing:normal;text-align:center;color:#000;white-space:nowrap;overflow:hidden;width:81%;text-overflow:ellipsis;margin-top:8px}
.online-stores-class a .store .name .tooltipname{visibility:hidden;text-align:center;border-radius:5px;background-color:#00a9ff;position:absolute;z-index:1;left:50%;margin-left:-25%;bottom:-16px;padding:0 4px}
.online-stores-class a .store .name:hover .tooltipname{visibility:visible}
.oph2{position:relative;box-sizing:border-box}
.oph2 .oph2_legal.desktop-view{position:absolute;z-index:9;top:8px;right:24px;width:50%;max-width:calc(720px);display:none;left:50%;text-align:right}
.oph2 .oph2_legal.desktop-view .oph2_legal--text{padding-right:16px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#777;display:inline-block}
.oph2 .oph2_legal.desktop-view .oph2_legal--text.dark_text{color:#242424}
.oph2 .bg_image{position:absolute;top:0;left:0;width:100%;height:100%;background-size:cover;background-position:top center}
.oph2 .oph2_container.fix-overflow{overflow:visible}
.oph2 .oph2_container{position:relative;overflow:hidden}
.oph2 .oph2_container.oph2_fixed_editor{height:auto;padding-bottom:200px}
.oph2 .oph2_container .oph2_data{position:relative;z-index:2}
.oph2 .oph2_container .oph2_data section{padding:0 24px;text-align:center}
.oph2 .oph2_container .oph2_data .oph2_desktop_separator{width:24px;height:3px;margin:8px 0 8px 24px;box-sizing:border-box;display:none}
.oph2 .oph2_container .oph2_data .oph2_desktop_separator.dark_text{background:#242424}
.oph2 .oph2_container .oph2_data .oph2_legal{padding-top:32px;display:block}
.oph2 .oph2_container .oph2_data .oph2_legal--text{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#777;display:inline-block}
.oph2 .oph2_container .oph2_data .oph2_legal--text.dark_text{color:#242424}
.oph2 .oph2_container .oph2_data .oph2_title{margin-top:33vh}
.oph2 .oph2_container .oph2_data .oph2_title--title h5{text-shadow:0 0 10px rgba(0,0,0,0.82);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:26px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#fff;box-sizing:border-box;margin:0}
.oph2 .oph2_container .oph2_data .oph2_title--title h5.dark_text{color:#242424;text-shadow:none}
.oph2 .oph2_container .oph2_data .oph2_price{box-sizing:border-box;margin-top:16px;margin-left:12px;margin-right:12px;padding:12px;border-radius:5px}
.oph2 .oph2_container .oph2_data .oph2_price span{display:block;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;line-height:1.25;color:#f9f9f9}
.oph2 .oph2_container .oph2_data .oph2_price span.dark_text{color:#242424}
.oph2 .oph2_container .oph2_data .oph2_price span.oph2_price--text{margin-top:16px;font-size:26px;font-weight:500;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;color:#d55600}
.oph2 .oph2_container .oph2_data .oph2_price span.oph2_prince--offer_2{margin-top:16px;font-size:14px;font-weight:normal}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons{display:flex;justify-content:space-between;padding-top:20px;color:#fff}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>a{text-decoration:none}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn{display:flex;justify-content:center;align-items:center;flex-direction:row;width:48%;height:48px;border-radius:5px;cursor:pointer}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn>span{font-size:14px}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.dark,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.dark{background-color:#1b2c5d}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.dark-blue,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.dark-blue{background-color:#005993}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.blue,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.blue{background-color:#0073ae}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.light-blue,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.light-blue{background-color:#00aeef}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.purple,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.purple{background-color:#5c2d91}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.dark-orange,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.dark-orange{background-color:#f58220}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.orange,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.orange{background-color:#f89c1b}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.yellow,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.yellow{background-color:#ffc60b}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.red,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.red{background-color:#e53935}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.green,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.green{background-color:#41be36}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-phone.gray,.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn.oph2-chat.gray{background-color:#eceff1}
.oph2 .oph2_container .oph2_data section.oph2_legal--text{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#979797;display:inline-block}
.oph2 .oph2_container .oph2_icons{margin-top:24px;display:flex;flex-wrap:wrap;justify-content:center}
.oph2 .oph2_container .oph2_icons--icon{width:116px;height:56px;box-sizing:border-box;margin:0 8px 16px 8px;overflow:hidden;padding:12px;border-radius:8px;border:solid 1px rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center}
.oph2 .oph2_container .oph2_icons--icon img{max-width:90px;max-height:30px;filter:grayscale(1) brightness(10)}
.oph2 .oph2_container .oph2_icons--icon img.dark_text{filter:grayscale(1) brightness(10) invert(1)}
.oph2 .oph2_container .oph2_background{position:absolute;top:0;width:100%;display:flex;justify-content:center}
.oph2 .oph2_container .oph2_background picture,.oph2 .oph2_container .oph2_background picture img{width:100%}
.oph2 .offer_line_pdp_hero{position:absolute;top:100%;left:50%;width:100%;max-width:1440px;transform:translateY(-50%) translateX(-50%)}
.oph2 .offer_line_pdp_hero.oph2_fixed_editor{transform:translateY(-70%) translateX(-50%);width:100%;left:50%}
.oph2 .offer_line_pdp_hero .mod-offerline{width:unset;max-width:unset;margin:0 32px}
@media screen and (max-width:768px){.oph2 .offer_line_pdp_hero .mod-offerline{margin:0 20px}
}
.oph2.showOfferLine{padding-bottom:95px}
.offer_line_spacer{width:100%}
@media screen and (min-width:768px){.oph2{padding-bottom:0}
.oph2 .oph2_legal.desktop-view{display:block}
.oph2 .oph2_container{display:flex;flex-direction:row;max-width:1440px;margin:0 auto;padding-top:0;align-items:center;min-height:570px}
.oph2 .oph2_container .oph2_data{width:50%}
.oph2 .oph2_container .oph2_data section{text-align:left}
.oph2 .oph2_container .oph2_data .oph2_desktop_separator{margin:24px 0 24px 24px;display:block}
.oph2 .oph2_container .oph2_data .oph2_legal{text-align:right;display:none}
.oph2 .oph2_container .oph2_data .oph2_legal--text{font-size:14px}
.oph2 .oph2_container .oph2_data .oph2_legal.desktop-view .oph2_legal--text{font-size:14px}
.oph2 .oph2_container .oph2_data .oph2_title{margin-top:0;max-width:640px}
.oph2 .oph2_container .oph2_data .oph2_title--title h5{line-height:1.14;font-size:32px}
.oph2 .oph2_container .oph2_data .oph2_icons{padding-left:16px;justify-content:flex-start;margin-top:24px}
.oph2 .oph2_container .oph2_data .oph2_icons--icon{margin-bottom:16px;margin-top:0}
.oph2 .oph2_container .oph2_data .oph2_price{margin-left:24px;margin-top:0;padding:24px;width:485px}
.oph2 .oph2_container .oph2_data .oph2_price span.oph2_price--text{font-size:32px}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn{width:205px}
.oph2 .oph2_container .oph2_data .oph2_price .oph2-buttons>.oph2-btn>span{font-size:16px}
.oph2 .oph2_container .oph2_background{height:100%}
.oph2 .oph2_container .oph2_background picture,.oph2 .oph2_container .oph2_background picture img{width:auto;height:100%}
.oph2.showOfferLine{padding-bottom:0}
}
@media screen and (max-width:520px){.oph2 .oph2_container .oph2-buttons .oph2-btn.oph2-phone.sticky_phone{position:fixed;left:50%;transform:translateX(-50%);top:97px;margin:0;width:fit-content;margin:0 auto;align-items:center;border-radius:24px;background-color:#1db855;text-decoration:none;padding:8px 16px;z-index:100}
.oph2 .oph2_container .oph2-buttons .oph2-btn.oph2-phone.sticky_phone span{font-size:20px;font-weight:500;line-height:1.5}
}
.oph{position:relative;box-sizing:border-box}
.oph .oph_legal.desktop-view{position:absolute;z-index:9;top:8px;right:24px;width:50%;max-width:calc(720px);display:none;left:50%;text-align:right}
.oph .oph_legal.desktop-view .oph_legal--text{padding-right:16px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#777;display:inline-block}
.oph .oph_legal.desktop-view .oph_legal--text.dark_text{color:#242424}
.oph .bg_image{position:absolute;top:0;left:0;width:100%;height:100%;background-size:cover;background-position:top center}
.oph .oph_container.fix-overflow{overflow:visible}
.oph .oph_container{position:relative;overflow:hidden}
.oph .oph_container.oph_fixed_editor{height:auto;padding-bottom:200px}
.oph .oph_container .oph_data{position:relative;z-index:2}
.oph .oph_container .oph_data section{padding:0 24px;text-align:center}
.oph .oph_container .oph_data .oph_desktop_separator{width:24px;height:3px;margin:8px 0 8px 24px;box-sizing:border-box;background:#fff;display:none}
.oph .oph_container .oph_data .oph_desktop_separator.dark_text{background:#242424}
.oph .oph_container .oph_data .oph_legal{padding-top:32px;display:block}
.oph .oph_container .oph_data .oph_legal--text{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#777;display:inline-block}
.oph .oph_container .oph_data .oph_legal--text.dark_text{color:#242424}
.oph .oph_container .oph_data .oph_title{margin-top:33vh}
.oph .oph_container .oph_data .oph_title--title h5{text-shadow:0 0 10px rgba(0,0,0,0.82);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:26px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#fff;box-sizing:border-box;margin:0}
.oph .oph_container .oph_data .oph_title--title h5.dark_text{color:#242424;text-shadow:none}
.oph .oph_container .oph_data .oph_phones{margin-top:8px}
.oph .oph_container .oph_data .oph_phones--cta{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.25;letter-spacing:normal;color:#f9f9f9;display:inline-block;margin:16px 0}
.oph .oph_container .oph_data .oph_phones--cta.dark_text{color:#242424}
.oph .oph_container .oph_data .oph_phones--hide{display:none !important}
.oph .oph_container .oph_data .oph_phones--phone{margin-top:24px}
.oph .oph_container .oph_data .oph_phones--phone a{vertical-align:bottom;display:flex;width:fit-content;margin:0 auto;align-items:center;border-radius:24px;background-color:#1db855;text-decoration:none;padding:8px 16px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:bold;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#fff}
.oph .oph_container .oph_data .oph_phones--phone a .icon_size-large{margin-right:8px}
.oph .oph_container .oph_data .oph_phones--phone a .icon_size-large::before{font-size:26px}
.oph .oph_container .oph_data .oph_phones--phone a .icon_size-small{margin-right:8px}
.oph .oph_container .oph_data .oph_phones--phone a .icon_size-small::before{font-size:16px}
.oph .oph_container .oph_data .oph_phones--phone a .phone-text .text{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;line-height:1.25;color:#fff}
.oph .oph_container .oph_data .oph_phones--phone a.sticky_phone{position:fixed;left:50%;transform:translateX(-50%);top:97px;margin:0;width:fit-content;z-index:100}
.oph .oph_container .oph_data .oph_phones--phone a.dark_text{color:#242424}
.oph .oph_container .oph_data .oph_price span{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.25;letter-spacing:normal;color:#f9f9f9;display:block;margin-top:16px}
.oph .oph_container .oph_data .oph_price span.dark_text{color:#242424}
.oph .oph_container .oph_data .oph_price span.oph_price--offer_1{margin-top:48px}
.oph .oph_container .oph_data .oph_price span.oph_price--text{font-size:26px;font-weight:500;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;color:#d55600}
.oph .oph_container .oph_data section.oph_legal--text{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#979797;display:inline-block}
.oph .oph_container .oph_icons{margin-top:24px;display:flex;flex-wrap:wrap;justify-content:center}
.oph .oph_container .oph_icons--icon{width:116px;height:56px;box-sizing:border-box;margin:0 8px 16px 8px;overflow:hidden;padding:12px;border-radius:8px;border:solid 1px rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center}
.oph .oph_container .oph_icons--icon img{max-width:90px;max-height:30px;filter:grayscale(1) brightness(10)}
.oph .oph_container .oph_icons--icon img.dark_text{filter:grayscale(1) brightness(10) invert(1)}
.oph .oph_container .oph_disclaimer{margin-top:8px;margin-bottom:16px}
.oph .oph_container .oph_disclaimer--text{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:11px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;color:#9e9e9e}
.oph .oph_container .oph_disclaimer--text.dark_text{color:#4a4a4a}
.oph .oph_container .oph_background{position:absolute;top:0;width:100%;display:flex;justify-content:center}
.oph .oph_container .oph_background picture,.oph .oph_container .oph_background picture img{width:100%}
.oph .offer_line_pdp_hero{position:absolute;top:100%;left:50%;width:100%;max-width:1440px;transform:translateY(-50%) translateX(-50%)}
.oph .offer_line_pdp_hero.oph_fixed_editor{transform:translateY(-70%) translateX(-50%);width:100%;left:50%}
.oph .offer_line_pdp_hero .mod-offerline{width:unset;max-width:unset;margin:0 32px}
@media screen and (max-width:768px){.oph .offer_line_pdp_hero .mod-offerline{margin:0 20px}
}
.oph.showOfferLine{padding-bottom:148px}
.oph.showOfferLine .oph_container .oph_data .oph_disclaimer{margin-bottom:0}
.offer_line_spacer{width:100%}
@media screen and (min-width:768px){.oph{padding-bottom:0}
.oph .oph_legal.desktop-view{display:block}
.oph .oph_container{display:flex;flex-direction:row;justify-content:flex-end;height:calc(90vh - 64px);max-width:1440px;margin:0 auto;padding-top:0;align-items:center;min-height:570px}
.oph .oph_container .oph_data{width:50%}
.oph .oph_container .oph_data section{text-align:left}
.oph .oph_container .oph_data .oph_desktop_separator{margin:24px 0 24px 24px;display:block}
.oph .oph_container .oph_data .oph_legal{text-align:right;display:none}
.oph .oph_container .oph_data .oph_legal--text{font-size:14px}
.oph .oph_container .oph_data .oph_legal.desktop-view .oph_legal--text{font-size:14px}
.oph .oph_container .oph_data .oph_title{margin-top:0;max-width:500px}
.oph .oph_container .oph_data .oph_title--title h5{line-height:1.14;font-size:32px}
.oph .oph_container .oph_data .oph_phones--cta{margin-right:8px}
.oph .oph_container .oph_data .oph_phones--phone{margin:0;display:inline-block}
.oph .oph_container .oph_data .oph_phones--phone a{border-radius:23px;border:1px solid #fff;padding:7px 24px;background:transparent;vertical-align:baseline;font-size:16px}
.oph .oph_container .oph_data .oph_icons{padding-left:16px;justify-content:flex-start;margin-top:24px}
.oph .oph_container .oph_data .oph_icons--icon{margin-bottom:16px;margin-top:0}
.oph .oph_container .oph_data .oph_disclaimer{margin-top:24px;margin-bottom:0}
.oph .oph_container .oph_data .oph_disclaimer--text{line-height:1;font-size:14px}
.oph .oph_container .oph_data .oph_price span{margin-top:16px}
.oph .oph_container .oph_data .oph_price span.oph_price--text{font-size:32px}
.oph .oph_container .oph_background{height:100%}
.oph .oph_container .oph_background picture,.oph .oph_container .oph_background picture img{width:auto;height:100%}
.oph.showOfferLine{padding-bottom:0}
}
.offer-timer-wrapper{display:flex;padding:32px 0;box-sizing:border-box;align-items:center;justify-content:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:24px}
.offer-timer-content{display:flex;width:100%;max-width:1024px;flex-direction:column;align-items:center;justify-content:space-between}
.offer-timer-content>.title{display:flex;margin-bottom:24px;align-items:center;font-size:30px;font-weight:bold;line-height:1.14;letter-spacing:normal;text-align:center}
.offer-timer-content>.title .subtitle{font-weight:normal}
.offer-timer-content .counter{display:flex;align-items:baseline}
.offer-timer-content .counter-item{padding:0 64px;text-align:center}
.offer-timer-content .counter-item:first-child{padding-left:0}
.offer-timer-content .counter-item:last-child{padding-right:0}
.offer-timer-content .counter-item-value{font-size:40px}
.offer-timer-content .counter-item-label{padding-top:16px;font-size:18px}
.offer-timer-content .counter-dot{width:4px;height:4px;border-radius:4px}
.offer-timer-bg-amber{background:#ffc60b}
.offer-timer-bg-blue{background:#005993}
.offer-timer-bg-darkblue{background:#00172d}
.offer-timer-txt-black{color:#000}
.offer-timer-txt-white{color:#fff}
.offer-timer-cnt-amber{color:#ffc60b}
.offer-timer-cnt-black{color:#000}
.offer-timer-cnt-blue{color:#005993}
.offer-timer-cnt-darkblue{color:#00172d}
.offer-timer-cnt-orange{color:#c1570f}
.offer-timer-cnt-white{color:#fff}
.offer-timer-dot-black{background:#000}
.offer-timer-dot-white{background:#fff}
@media screen and (max-width:480px){.offer-timer-content>.title{padding:0 12px;margin-bottom:24px;font-size:24px;display:block}
.offer-timer-content .counter-item{padding:0 12px}
.offer-timer-content .counter-item-value{font-size:32px}
}
.offer-cards-filter-container{display:flex;justify-content:center;align-items:stretch}
.offer-cards-filter-container div[class^="btn-"]{display:flex;justify-content:center;align-items:center;flex:1;text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;line-height:1.5;color:#0073ae;cursor:pointer;border-top:1px solid #0073ae;border-bottom:1px solid #0073ae;border-right:0;border-left:0;padding-top:4px;padding-bottom:4px}
.offer-cards-filter-container div[class^="btn-"]:first-of-type{border:1px solid #0073ae;border-top-left-radius:5px;border-bottom-left-radius:5px}
.offer-cards-filter-container div[class^="btn-"]:last-of-type{border:1px solid #0073ae;border-top-right-radius:5px;border-bottom-right-radius:5px}
.offer-cards-filter-container div[class^="btn-"]:hover{color:#00aeef;border-color:#00aeef}
.offer-cards-filter-container div[class^="btn-"].active{color:#fff;background:#0073ae}
.offer-cards-filter-container div[class^="btn-"].active:hover{background-color:#0090da}
.newsAccordion{width:100%;display:flex;flex-direction:column;align-items:center}
.newsAccordion .title-container{display:flex;width:100%;flex-direction:row;justify-content:space-between;box-sizing:border-box;padding:16px;border-top:1px solid #ccc;margin:0;cursor:pointer}
.newsAccordion .title-container .icon{color:#0073ae}
.newsAccordion .title-container .icon.rotate{transform:rotateX(180deg)}
.newsAccordion .title-container.space-between{justify-content:space-between}
.newsAccordion .title-container.center{justify-content:center}
.newsAccordion .title-container .is-open{display:none}
.newsAccordion .title-container .is-open.open{display:block}
.newsAccordion .title-container .right-side{display:flex;align-items:center}
.newsAccordion .title-container .right-side .heading{margin-right:8px}
.newsAccordion .layout-cont-show,.newsAccordion .layout-cont-hide{width:100%;box-sizing:border-box;padding:16px}
.newsAccordion .layout-cont-hide{display:none}
.newsAccordion .layout-cont-hide.open{display:block}
.newsAccordion .layout-cont-show{display:block}
#modal-event-locations{padding:20px}
#modal-event-locations h4{text-align:center;margin:0 0 20px 0}
#modal-event-locations h6{color:#777}
#modal-event-locations .aling-center{text-align:center}
#modal-event-locations h6.black{color:#000;margin:0;background:#eceff1;padding:6px 10px}
#modal-event-locations .br-right{border-right:1px solid silver}
#modal-event-locations .br-right h6.aling-center{margin:40px 0 20px 0}
#modal-event-locations #evButtoms{text-align:center}
#modal-event-locations #evButtoms>button{color:#292929;border:1px solid silver;display:block;margin:0 auto 12px auto;max-width:85%;width:100%;background-color:#fff;padding:12px;border-radius:5px;transition:all .3s;font-weight:bold;font-size:14px}
#modal-event-locations #evButtoms>button:hover{background:#eceff1}
#modal-event-locations .section .column h6{margin:0 0 20px 0}
#modal-event-locations .section .list-result{list-style:none;list-style-position:outside;margin:0;padding:0}
#modal-event-locations .section .list-result li{display:block;border:0;color:#777;background:#fff;padding:13px;max-width:100%;width:100%;text-align:left;transition:all .3s;font-weight:bold;font-size:14px;cursor:pointer}
#modal-event-locations .section .list-result li:hover,#modal-event-locations .section .list-result li.active{background:#eceff1;color:#000}
#modal-event-locations #evMatchSel,#modal-event-locations #evLocationSel{max-height:220px;overflow-y:auto;margin:0 20px 0 0;overflow-x:hidden}
#modal-event-locations #evMatchSel li::after{content:'';border:solid #fff;border-width:0 2px 2px 0;display:inline-block;padding:2px;transform:rotate(-45deg);-webkit-transform:rotate(-45deg);margin:0 0 0 7px}
#modal-event-locations #evMatchSel li:hover::after,#modal-event-locations #evMatchSel li.active::after{content:'';border:solid #777;border-width:0 2px 2px 0;display:inline-block;padding:2px;transform:rotate(-45deg);-webkit-transform:rotate(-45deg);margin:0 0 0 7px}
#modal-event-locations #evLocationSel li{font-weight:500;padding:4px 13px;cursor:default}
#modal-event-locations #evLocationSel li:hover{background:0}
@media only screen and (max-width:768px){#modal-event-locations .sm-col-12{grid-column:span 12}
#modal-event-locations .sm-col-12.br-right{border:0}
#modal-event-locations #evButtoms button{margin:8px;display:inline-block;max-width:25%;width:100%;vertical-align:top;align-self:center;height:60px;padding:6px 12px}
#modal-event-locations .br-right h6.aling-center{margin:0 0 20px 0}
}
@media only screen and (max-width:520px){#modal-event-locations h4{font-size:20px}
#modal-event-locations .xl-col-12{grid-column:span 12}
#modal-event-locations .xl-col-12.br-right{border-right:0;border-bottom:1px solid silver}
#modal-event-locations #evButtoms button{margin:8px 0;display:block;max-width:100%;width:100%;padding:12px;height:auto}
#modal-event-locations .section .column h6{color:#005993;font-size:14px}
#modal-event-locations .section .list-result li{font-size:13px}
}
.dtv-midtv-section{position:relative;height:707px;overflow:hidden}
.dtv-midtv-section .dtv-midtv-section-background{position:absolute;z-index:0;width:100%;height:100%;top:0;left:0}
.dtv-midtv-section .dtv-midtv-section-background picture img{width:100%;height:100%;object-fit:cover}
.dtv-midtv-section .dtv-midtv-section-content{position:absolute;z-index:1;top:50%;left:50%;transform:translateY(-50%) translateX(-50%);width:100%;max-width:1315px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title{display:flex;flex-direction:column;justify-content:center}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title .dtv-midtv-section-content-title--icon figure{margin:0 auto;padding:0;text-align:center}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title .dtv-midtv-section-content-title--icon figure img{width:144px;height:108px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title .dtv-midtv-section-content-title--text{text-align:center;margin-top:5px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title .dtv-midtv-section-content-title--text h2{text-align:center;line-height:1.25;font-style:normal;color:#eceff1;letter-spacing:normal;padding:0 10px;margin:0}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--description{text-align:center}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--description p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.42;letter-spacing:normal;color:#fff;margin:0 auto;padding:26px 24px 0 24px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions{display:flex;flex-direction:column;justify-content:center;text-align:center}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions a{display:inline-block;margin:0 auto;background:#fff;width:100%;min-width:221px;max-width:169px;height:24px;padding:12px 0;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#0073ae;margin-top:35px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions a:first-child{margin-top:41px}
@media screen and (min-width:768px){.dtv-midtv-section{max-height:371px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title .dtv-midtv-section-content-title--icon figure img{width:62px;height:47px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title .dtv-midtv-section-content-title--text h2{padding:0;width:100%;max-width:580px;margin:0 auto;line-height:1.13}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--description{margin-top:20px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--description p{max-width:640px;padding-top:0}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions{flex-direction:row;margin-top:19.5px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions a{margin:13.5px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions a:first-child{margin:13.5px}
}
@media screen and (min-width:1440px){.dtv-midtv-section{max-height:364px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title{flex-direction:row}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title .dtv-midtv-section-content-title--icon figure img{width:72px;height:54px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content-title .dtv-midtv-section-content-title--text h2{font-size:40px;padding-top:5px;max-width:100%;line-height:1.25}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--description{margin-top:0}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--description p{max-width:726px;font-size:24px;padding-top:18px;padding-bottom:0}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions{margin-top:53px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions a{margin:0 19.5px}
.dtv-midtv-section .dtv-midtv-section-content .dtv-midtv-section-content--actions a:first-child{margin:0 19.5px}
}
@media screen and (min-width:1920px){.dtv-midtv-section{max-height:508px}
}
.local-navigation-wrapper{display:flex;box-sizing:border-box;align-items:center;justify-content:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:24px;color:#000;background:#eceff1}
.local-navigation-content{display:flex;width:100%;max-width:1440px;align-items:center;justify-content:space-between}
.local-navigation-content>.title{display:flex;height:58px;align-items:center}
.local-navigation-content>.options{display:flex}
.local-navigation-content>.options>.options-item{padding-left:12px;text-decoration:underline;color:#0073ae}
.local-navigation-content>.options>.options-item::before{content:"|";padding-right:12px;font-weight:normal;color:#000}
.local-navigation-content>.options>.options-item:first-child{padding:0}
.local-navigation-content>.options>.options-item:first-child::before{content:""}
.local-navigation-content>.options>.options-item-selected{text-decoration:none;font-weight:500;color:#4a4a4a}
.local-navigation-view-m{display:none}
.local-navigation-view-d{display:block}
@media screen and (max-width:1920px){.local-navigation-wrapper{padding:0 24px}
}
@media screen and (max-width:970px){.local-navigation-wrapper{padding:0;background:#fff}
.local-navigation-content{flex-direction:column}
.local-navigation-content>.title{width:100%;box-sizing:border-box;padding:0 12px;justify-content:space-between;background:#eceff1}
.local-navigation-content>.title>.view-more{display:flex;font-weight:500;text-transform:uppercase;color:#0073ae}
.local-navigation-content>.title>.view-more .chevron>i{padding:3px;margin-left:8px;margin-bottom:2px;border:solid #0073ae;display:inline-block;transform:rotate(45deg)}
.local-navigation-content>.title>.view-more .down>i{margin-bottom:4px;border-width:0 2px 2px 0}
.local-navigation-content>.title>.view-more .up>i{margin-bottom:0;border-width:2px 0 0 2px}
.local-navigation-content>.options{width:100%;flex-direction:column;text-align:center;font-size:14px}
.local-navigation-content>.options>.options-item{width:100%;padding:8px 0;border-top:1px solid #cfd8dc;text-decoration:none;color:#000}
.local-navigation-content>.options>.options-item::before{padding:0;content:""}
.local-navigation-content>.options>.options-item:first-child{padding:8px 0}
.local-navigation-content>.options>.options-item-selected{text-decoration:none;font-weight:normal;color:#9e9e9e}
.local-navigation-view-m{display:block}
.local-navigation-view-d{display:none}
}
.large-events-card-container{min-height:454px;display:flex;flex-direction:column;justify-content:flex-end;background-repeat:no-repeat;background-size:cover;background-position:center;cursor:pointer;border-radius:5px}
.large-events-card-container .texts-container{padding:0 16px 24px}
.large-events-card-container .texts-container .text-title{margin-bottom:12px}
.large-events-card-container .texts-container .text-images{margin-bottom:12px}
.internet-filter-container{width:100%;display:flex;justify-content:center}
.internet-filter-container .internet-content{max-width:1440px;width:100%;display:flex;flex-direction:column;align-items:center}
.internet-filter-container .internet-content .internet-filter{width:100%;margin:24px auto;max-width:470px;box-sizing:border-box;padding:0 12px}
.internet-filter-container .internet-content .internet-cards-container{width:100%;display:grid;height:fit-content;grid-gap:24px;grid-template-columns:repeat(auto-fill,minmax(370px,1fr))}
@media only screen and (max-width:480px){.internet-filter-container .internet-content{box-sizing:border-box;padding:12px}
.internet-filter-container .internet-content .internet-cards-container{grid-gap:12px;grid-template-columns:repeat(auto-fill,minmax(200px,1fr))}
}
.internet-card-container{display:flex;flex-direction:column;align-items:flex-end;width:100%;min-height:230px}
.internet-card-container>.highlight{display:flex;justify-content:center;align-items:center;height:32px;color:#fff}
.internet-card-container>.highlight>.shape{width:24px;height:64px}
.internet-card-container>.highlight>.shape:before{content:"";border-bottom:32px solid #4a4a4a;border-left:24px solid transparent}
.internet-card-container>.highlight>p{display:flex;justify-content:center;align-items:center;width:fit-content;height:32px;padding-right:8px;font-size:14px;background-color:#4a4a4a;border-top-right-radius:5px}
.internet-card-container>.internet-card-wrapper{display:flex;box-sizing:border-box;flex-direction:column;justify-content:space-between;width:100%;height:100%;box-shadow:0 8px 16px 0 rgba(0,0,0,0.1);border-radius:5px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.internet-card-container>.internet-card-wrapper .truncate{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.internet-card-container>.internet-card-wrapper ul{font-weight:normal;list-style:none;padding:0;margin:0}
.internet-card-container>.internet-card-wrapper ul li{font-size:16px;line-height:1.31;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.internet-card-container>.internet-card-wrapper .internet-list li::before{content:'• '}
.internet-card-container>.internet-card-wrapper .internet-list li:first-child::before{content:' '}
.internet-card-container>.internet-card-wrapper>.card-content>.header{width:100%;display:flex;box-sizing:border-box;justify-content:space-between;align-items:center;height:70px;padding:0 32px;background-image:linear-gradient(269deg,#4d4d4d,#1e1e1e);background-color:#414141;border-top-left-radius:5px;border-top-right-radius:5px;color:#fff}
.internet-card-container>.internet-card-wrapper>.card-content>.header>.title{font-size:32px;font-weight:500;line-height:1.23;display:flex;align-items:center;justify-content:center;flex-wrap:wrap}
.internet-card-container>.internet-card-wrapper>.card-content>.header>.title img{margin:0 16px;width:32px}
.internet-card-container>.internet-card-wrapper>.card-content>.header>.badget{padding:4px 24px;border:1px solid #fff;border-radius:50px;font-size:10px;text-transform:uppercase;font-style:italic;letter-spacing:.5px;box-shadow:0 0 2px 0 rgba(0,0,0,0.75);text-shadow:1px 1px 5px rgba(0,0,0,0.75)}
.internet-card-container>.internet-card-wrapper>.card-content>.body{display:flex;width:100%;min-height:196px;padding:24px 32px;flex-direction:column;box-sizing:border-box;justify-content:space-between;overflow:hidden;line-height:1.2}
.internet-card-container>.internet-card-wrapper>.card-content>.body .truncate{padding:1px 0}
.internet-card-container>.internet-card-wrapper>.card-content>.body>.body-top>.subtitle{margin-bottom:12px;font-size:24px;font-weight:500}
.internet-card-container>.internet-card-wrapper>.card-content>.body>.separator{width:20%;height:1px;margin:24px 0}
.internet-card-container>.internet-card-wrapper>.card-content>.body>.body-bottom>.features .offer{font-size:24px;font-weight:500}
.internet-card-container>.internet-card-wrapper>.footer{padding:0 32px 24px;box-sizing:border-box;border-bottom-left-radius:5px;border-bottom-right-radius:5px;width:100%}
.internet-card-container>.internet-card-wrapper>.footer>.btn-select{width:100%;height:50px;transition:all .5s}
.internet-card-container>.internet-card-wrapper>.footer>.btn-select .external-link{margin-left:8px}
.internet-card-container>.internet-card-wrapper>.footer>.btn-select.directv-ui-button{flex-direction:row}
.internet-card-container>.internet-card-wrapper>.footer>.btn-select.directv-ui-button:hover{box-shadow:inset 0 0 0 10rem rgba(0,0,0,0.15);border:solid 1px rgba(0,0,0,0.3)}
.internet-card-container .light{background-color:#fff;color:#222}
.internet-card-container .dark{background-color:#292929;color:#fff}
@media only screen and (max-width:768px){.internet-card-container>.internet-card-wrapper>.card-content>.header{padding:0 24px}
.internet-card-container>.internet-card-wrapper>.card-content>.header>.title{font-size:22px}
.internet-card-container>.internet-card-wrapper>.card-content>.body{padding:24px 24px}
.internet-card-container>.internet-card-wrapper>.card-content>.body>.body-top>.subtitle{margin-bottom:12px;font-size:22px;font-weight:500}
.internet-card-container>.internet-card-wrapper>.card-content>.body>.body-bottom>.features .offer{font-size:22px;font-weight:500}
.internet-card-container>.internet-card-wrapper>.footer{padding:0 24px 24px}
}
.generic-tabs{box-sizing:border-box}
.generic-tabs>.generictabs-nav{margin:0 auto}
.generic-tabs>.generictabs-light>ul>li{border-bottom:1px solid #9e9e9e;color:#000}
.generic-tabs>.generictabs-light li.active{border-bottom:6px solid #00aeef;font-weight:500}
.generic-tabs>.generictabs-dark>ul>li{color:#fff}
.generic-tabs>.generictabs-dark li.active{border-bottom:6px solid #00aeef;font-weight:500;color:#00aeef}
.generic-tabs>.generictabs-small{width:920px}
.generic-tabs>.generictabs-medium{width:990px}
.generic-tabs>.generictabs-large{width:1370px}
.generic-tabs>.generictabs-nav>ul{display:grid;grid-auto-columns:1fr;grid-auto-flow:column;padding:0;margin:0;list-style-type:none}
.generic-tabs>.generictabs-nav>ul>li{box-sizing:border-box;display:inline-block;height:82px;background-color:transparent;padding:31px 0;text-decoration:none;text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.2;letter-spacing:normal;cursor:pointer;transition:all .3s ease-in-out}
@media screen and (max-width:480px){.generic-tabs>.generictabs-nav{overflow:auto;overflow-y:hidden;width:100%}
.generic-tabs>.generictabs-nav>ul{grid-auto-columns:65%;margin-left:11px}
}
@media screen and (min-width:480px) and (max-width:970px){.generic-tabs>.generictabs-nav{overflow:auto;overflow-y:hidden;max-width:100%}
.generic-tabs>.generictabs-nav>ul{grid-auto-columns:50%;margin-left:11px}
}
.iaat{background-color:#1b2c5d}
.iaat_hero{box-sizing:border-box;position:relative}
.iaat_hero--clip{clip-path:circle(287% at 50% -254%)}
.iaat_hero--clip-yellow{background-image:radial-gradient(ellipse 71% 30% at 50% 70%,#fcc705,#ffe21f)}
.iaat_hero--clip-yellow img,.iaat_hero--clip-yellow source{width:100%;height:calc(262*100vw/375);clip-path:circle(158% at 50% -100%)}
.iaat_hero--prepimage{position:absolute;bottom:-8px;text-align:center;width:100%}
.iaat_hero--prepimage .prep-img{width:103px}
.iaat_content{margin-top:49px}
.iaat_content--tabs-tabs .generic-tabs .generictabs-nav{margin-bottom:0}
.iaat_content--tabs-content{background:#fff}
.iaat_content--tabs-content .tabbar-body:not(:first-of-type){display:none}
@media screen and (min-width:768px){.iaat_hero--clip{clip-path:ellipse(85% 90% at 50% 8%)}
.iaat_hero--clip-yellow picture{position:relative}
.iaat_hero--clip-yellow picture img,.iaat_hero--clip-yellow picture source{height:calc(372*100vw/1440);clip-path:circle(203% at 50% -475%)}
.iaat_hero--clip-yellow picture::after{content:" ";background-image:url('../../../content/dam/public-sites/plans/images/prepago-light%403x.png');background-size:127px 35px;width:127px;height:35px;z-index:9999;left:50%;transform:translateX(-50%);position:absolute;bottom:calc((372*100vw/1440)/30)}
.iaat_hero--prepimage{bottom:14px}
.iaat_content{margin-top:25px}
.iaat_content--tabs{display:flex;flex-direction:column;justify-content:center;align-items:center}
.iaat_content--tabs-content{padding:0 9.5%}
}
.howtorecharge{padding:0 16px;margin-top:64px}
.howtorecharge .recharge_container{width:100%;margin:0 auto;box-sizing:border-box;border-radius:5px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);border:solid 1px #cfd8dc;background-color:#fff}
.howtorecharge .recharge_container.accordeon_mode{max-width:352px}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item{border-bottom:solid 1px #cfd8dc}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item:last-child{border-bottom:0}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content{padding:16px 0}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content.accordeon_header{display:flex;flex-direction:column;justify-content:center;align-items:center}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content.accordeon_header .accordeon_item-content_data{display:flex;justify-content:space-between;width:90%;margin:0}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content.accordeon_header .accordeon_item-content_data .accordeon_item-empty{width:14px}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content.accordeon_header .accordeon_item-content_data .dtv-public-icon-down:before{font-size:8px;font-weight:bold}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content:first-child span{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#000;text-transform:none}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content.active{background-color:#f9f9f9;border-bottom:solid 1px #cfd8dc}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content.active .dtv-public-icon-down{transform:rotate(180deg) translate(0,-4px)}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content_data{margin-bottom:8px;text-align:center;display:flex;justify-content:center;align-items:center;flex-wrap:wrap}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content_data :last-child{margin-bottom:none}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content_data-title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#4a4a4a;margin:0 8px}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content_data-value{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5;font-size:16px;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#000}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content_data-value_bold{font-weight:500}
.howtorecharge .recharge_container.accordeon_mode .accordeon_item-content img{height:30px}
.howtorecharge .recharge_container.table_mode{display:none;max-width:920px}
.howtorecharge .recharge_container.table_mode .recharge_container-row{display:flex;flex-direction:row;justify-content:space-between;box-sizing:border-box}
.howtorecharge .recharge_container.table_mode .recharge_container-row:first-child{border-bottom:solid 1px #cfd8dc}
.howtorecharge .recharge_container.table_mode .recharge_container-row:first-child .recharge_container-row-columns{padding:24px 0;border-right:0}
.howtorecharge .recharge_container.table_mode .recharge_container-row:first-child .recharge_container-row-columns span{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#000;text-transform:none}
.howtorecharge .recharge_container.table_mode .recharge_container-row:nth-child(even){background-color:#fafafa}
.howtorecharge .recharge_container.table_mode .recharge_container-row-columns{width:33%;display:flex;align-items:center;justify-content:center;padding:16px 0;border-right:solid 1px #cfd8dc}
.howtorecharge .recharge_container.table_mode .recharge_container-row-columns:last-child{border-right:0}
.howtorecharge .recharge_container.table_mode .recharge_container-row-columns span{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#000}
.howtorecharge .recharge_container.table_mode .recharge_container-row-columns .value_upper{text-transform:uppercase}
.howtorecharge .recharge_container.table_mode .recharge_container-row-columns img{max-height:30px}
.howtorecharge-example{margin:48px auto;text-align:center}
.howtorecharge-example span{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#4a4a4a}
@media screen and (min-width:768px){.howtorecharge .recharge_container.accordeon_mode{display:none}
.howtorecharge .recharge_container.table_mode{display:block}
}
.dtv-hofp-section{position:relative;height:auto;overflow:hidden}
.dtv-hofp-section .dtv-hofp-section-background{position:absolute;z-index:0;width:100%;height:100%;top:0;left:0}
.dtv-hofp-section .dtv-hofp-section-background picture img{width:100%;height:100%}
.dtv-hofp-section .dtv-hofp-section-content{position:relative;z-index:1;display:flex;flex-direction:column;margin:24px 0;width:100%;align-items:center}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-product{text-align:center}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-product picture img{width:100%;max-width:317px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon{text-align:center;margin:48px 0 32px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon figure{margin:0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon figure img{max-width:200px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title{text-align:center;width:100%;max-width:337px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title h3{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:32px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.31;letter-spacing:normal;color:#000;margin:0;padding:0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info{margin:32px auto 0 auto;position:relative}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info.dtv-hofp-divider{padding-bottom:32px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info.dtv-hofp-divider::after{content:" ";width:273px;height:2px;background-color:#979797;position:absolute;left:50%;transform:translateX(-50%);bottom:0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label{text-align:center;width:100%;max-width:340px;margin:0 auto}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.25;letter-spacing:normal;color:#000;margin:0;padding:0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link{text-align:center;padding:24px 0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;color:#0073ae;margin:0;padding:0;display:inline-block;text-transform:uppercase;text-decoration:none;position:relative}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link a span.dtv-public-icon-next::before{font-size:18px;position:absolute;right:-17px;top:-1px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link a .dtv-hofp--external{position:absolute;top:0;color:#000;right:-35px}
@media screen and (min-width:768px){.dtv-hofp-section .dtv-hofp-section-content{margin:32px 0 0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-product{display:block;flex:0 50%;text-align:right}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description{flex:0 50%}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon{margin-top:60px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title{max-width:541px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title h3{font-size:40px;line-height:1.25}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label{max-width:420px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label p{font-size:24px;line-height:1.25}
}
@media screen and (min-width:1024px){.dtv-hofp-section{align-items:center;display:flex;justify-content:center}
.dtv-hofp-section.full-height{height:calc(100vh - 65px)}
.phones-visible .dtv-hofp-section.full-height{height:calc(100vh - 98px)}
.dtv-hofp-section .dtv-hofp-section-content{flex-direction:row;justify-content:center}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-product{text-align:right}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description{margin-left:56px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon,.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title,.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label,.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link{text-align:left}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label{margin:0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link a.dtv-hofp--external{transform:none}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info.dtv-hofp-divider::after{left:0;transform:none}
}
@media screen and (min-width:1024px) and (max-height:768px){.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-product{align-items:center;display:flex}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon{margin:5% 0 5%}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title h3{font-size:32px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label p{font-size:22px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link{padding:5% 0 5%}
}
@media screen and (min-width:1440px){.dtv-hofp-section{height:610px}
.dtv-hofp-section .dtv-hofp-section-content{flex-direction:row;justify-content:center}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-product picture img{max-width:528px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--icon{text-align:left;margin:45px 0 24px 0}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--title{text-align:left;max-width:480px;margin-bottom:-8px}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info.dtv-hofp-divider::after{left:0;transform:none}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label{max-width:480px;text-align:left}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-label p{line-height:1.42}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link{text-align:left}
.dtv-hofp-section .dtv-hofp-section-content .dtv-hofp-section-content-description .dtv-hofp-section-content-description--info .dtv-hofp-section-content-description--info-link a.dtv-hofp--external{transform:none}
}
.hero-multimedia-content-v2{overflow:hidden}
.hero-multimedia-content-v2 .slider-container{box-sizing:border-box;position:relative;width:100%;display:flex;justify-content:center;height:746px}
.hero-multimedia-content-v2 .slider-container .arrows-container{position:absolute;z-index:1;top:46%;width:100%;max-width:1440px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow{float:left;margin-left:36px}
.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow{float:right;margin-right:36px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow{border:0 none;text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#fff;cursor:pointer;width:48px;height:48px;border-radius:50%;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow .oval,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow .oval{width:50px;height:50px;border-radius:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow .oval .arrow,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow .oval .arrow{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:48px;width:11px;height:20px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow .oval .arrow::before,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow .oval .arrow::before{font-size:43px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow:hover,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow:hover{background-color:rgba(0,115,174,0.36)}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow:hover .oval,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow:hover .oval{background-color:#0073ae}
.hero-multimedia-content-v2 .slider-container .heroSlider,.hero-multimedia-content-v2 .slider-container .mySlider{width:100%;height:100%;border:0}
.hero-multimedia-content-v2 .slider-container .heroSlider div,.hero-multimedia-content-v2 .slider-container .mySlider div{height:100%;position:relative}
.hero-multimedia-content-v2 .slider-container .heroSlider div .mobile-media,.hero-multimedia-content-v2 .slider-container .mySlider div .mobile-media{display:none}
.hero-multimedia-content-v2 .slider-container .heroSlider div img,.hero-multimedia-content-v2 .slider-container .mySlider div img,.hero-multimedia-content-v2 .slider-container .heroSlider div video,.hero-multimedia-content-v2 .slider-container .mySlider div video,.hero-multimedia-content-v2 .slider-container .heroSlider div embed,.hero-multimedia-content-v2 .slider-container .mySlider div embed{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
.hero-multimedia-content-v2 .slider-container .heroSlider .prev-arrow::before,.hero-multimedia-content-v2 .slider-container .mySlider .prev-arrow::before,.hero-multimedia-content-v2 .slider-container .heroSlider .next-arrow::before,.hero-multimedia-content-v2 .slider-container .mySlider .next-arrow::before{content:''}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-initialized .slick-slide,.hero-multimedia-content-v2 .slider-container .mySlider .slick-initialized .slick-slide{margin:0 5px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-list,.hero-multimedia-content-v2 .slider-container .mySlider .slick-list{margin:0 -5px 0 -5px}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-dots,.hero-multimedia-content-v2 .slider-container .mySlider .slick-dots{bottom:54px;z-index:5}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-dots li,.hero-multimedia-content-v2 .slider-container .mySlider .slick-dots li{width:10px;height:10px;margin:0 15px}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-dots li button,.hero-multimedia-content-v2 .slider-container .mySlider .slick-dots li button{background:#c1c1c2;border-radius:calc(10px / 2);height:10px;width:10px;position:absolute}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-dots li button.active-button,.hero-multimedia-content-v2 .slider-container .mySlider .slick-dots li button.active-button{background:#fff;z-index:2;opacity:1;width:40px;left:-15px}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-dots li button::before,.hero-multimedia-content-v2 .slider-container .mySlider .slick-dots li button::before{content:'';height:10px;width:10px}
.hero-multimedia-content-v2 .slider-container .container-text-container{display:flex;justify-content:center;min-height:100%;width:85%;position:absolute;align-items:flex-end;max-width:1440px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container{position:absolute;display:flex;flex-direction:column;align-items:center;justify-content:flex-end;height:100%;width:100%;overflow:hidden;box-sizing:border-box;padding-bottom:85px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content{display:flex;justify-content:center;align-items:flex-end;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-stretch:normal;line-height:1.25;letter-spacing:normal;color:#f9f9f9;font-weight:normal;min-height:300px;width:82%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .content-divider-container{min-width:1px;display:flex;justify-content:center;align-self:stretch;margin-left:.9%;margin-right:12px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .content-divider-container .content-divider{height:100%;margin-top:14px;min-width:1px;background-image:url("clientlib-site/css/resources/components/hero-multimedia-content-v2/line-2.png");background-repeat:no-repeat;background-size:cover}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .icons{margin-bottom:0;flex-wrap:wrap;display:flex;align-items:baseline;-webkit-transition:-webkit-transform 1.5s ease}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .icons img{box-sizing:border-box;object-fit:contain;margin-right:21px;border-radius:5px;border:1px solid rgba(255,255,255,0.1);width:97px;height:47px;padding:8px 6px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .icons img:first-of-type{margin-top:36px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .icons img:last-child{margin-right:0}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content{width:60%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .subtitle{font-size:30px;line-height:1.3333333;margin-bottom:4px;min-height:auto;overflow:auto;display:flex;align-items:center;text-transform:uppercase;-webkit-transition:-webkit-transform 1.5s ease}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .subtitle .category{font-size:20px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#f9f9f9;margin-right:20px;background-repeat:no-repeat;background-position:center}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .subtitle .category.prepaid-badge{background-image:url('../../../content/dam/public-sites/plans/images/prepago.png');width:88px;height:25px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .subtitle .category.postpaid-badge{background-image:url('../../../content/dam/public-sites/plans/images/postpago.png');width:88px;height:25px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .subtitle .promo-tag{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:11px;font-weight:600;line-height:1.36;text-align:center;color:#d55600;border:1px solid #d55600;border-radius:3px;padding:0 5px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .title{font-size:40px;font-weight:500;margin-bottom:14px;clear:both;-webkit-transition:-webkit-transform 1.5s ease}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .description{font-size:24px;line-height:1.42;color:#f9f9f9;-webkit-transition:-webkit-transform 1.5s ease}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content h1,.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content h2{margin:0}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content{width:40%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .promotion-tag{font-size:24px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.58;letter-spacing:-0.3px;margin-bottom:10px;-webkit-transition:-webkit-transform 1.5s ease}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-primary{color:#0073ae}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-primary::before{color:#0073ae}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-primary::after{color:#0073ae}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-secondary{color:#000}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-secondary::before{color:#000}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-secondary::after{color:#000}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-light{color:#757575}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-light::before{color:#757575}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-light::after{color:#757575}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-selling{color:#ffc60b}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-selling::before{color:#ffc60b}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-selling::after{color:#ffc60b}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-danger{color:#e53935}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-danger::before{color:#e53935}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-danger::after{color:#e53935}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-white{color:#fff}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-white::before{color:#fff}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-white::after{color:#fff}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-orange{color:#f89c1b}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-orange::before{color:#f89c1b}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-orange::after{color:#f89c1b}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-orange-go{color:#f58220}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-orange-go::before{color:#f58220}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-orange-go::after{color:#f58220}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-sport{color:#05cda9}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-sport::before{color:#05cda9}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .colour-sport::after{color:#05cda9}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .price-container{-webkit-transition:-webkit-transform 1.5s ease}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .price-container .price-text{display:flex;font-size:32px;font-weight:500}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .price-container .price-text .price-day-value{display:flex;line-height:1.19}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons{margin-top:24px;margin-bottom:3px;font-size:14px;font-weight:500;line-height:1.5;display:flex;-webkit-transition:-webkit-transform 1.5s ease}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons button:first-of-type{margin-right:26px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons .button{width:205px;min-height:48px;border:1px;border-radius:5px;background:transparent;display:inline-block;-webkit-box-shadow:inset 0 0 0 1px #fff;box-shadow:inset 0 0 0 1px #fff;color:#fff;font-size:16px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons .button:hover{background-color:rgba(255,255,255,0.15)}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons .button.active{background:#ffc60b;-webkit-box-shadow:none;box-shadow:none;border:0;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#1b2c5d}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons .button.active:hover{background:#ffd80b}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .disclaimer{margin:14px 0 0 0;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#f9f9f9;line-height:1;-webkit-transition:-webkit-transform 1.5s ease}
@media screen and (min-width:1024px){.hero-multimedia-content-v2{height:calc(100vh - 65px)}
.hero-multimedia-content-v2 .slider-container{height:100%}
.hero-multimedia-content-v2 .slider-container div img,.hero-multimedia-content-v2 .slider-container div video,.hero-multimedia-content-v2 .slider-container div embed{object-position:top}
.phones-visible .hero-multimedia-content-v2{height:calc(100vh - 98px)}
}
@media screen and (min-width:1024px) and (max-width:1440px){.hero-multimedia-content-v2 .slider-container .text-container .content .left-content .subtitle .category{font-size:18px}
.hero-multimedia-content-v2 .slider-container .text-container .content .left-content .title{font-size:32px}
.hero-multimedia-content-v2 .slider-container .text-container .content .left-content .description{font-size:22px}
.hero-multimedia-content-v2 .slider-container .text-container .content .right-content .price-container .price-text{font-size:32px}
}
@media only screen and (min-width:1440px){.hero-multimedia-content-v2 .slider-container .slick-dots{bottom:54px}
.hero-multimedia-content-v2 .slider-container .text-container{padding-bottom:109px}
}
@media only screen and (max-width:1440px){.hero-multimedia-content-v2 .slider-container .text-container{padding-bottom:105px}
}
@media only screen and (max-width:1024px){.hero-multimedia-content-v2 .slider-container .arrows-container{top:450px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow,.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow .oval,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow .oval{width:40px;height:40px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow{margin-left:15px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow .oval .arrow::before{font-size:32px}
.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow{margin-right:15px}
.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow .oval .arrow::before{font-size:32px}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-dots,.hero-multimedia-content-v2 .slider-container .mySlider .slick-dots{bottom:37px}
.hero-multimedia-content-v2 .slider-container .container-text-container{width:100%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container{padding-bottom:74px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .description{font-size:16px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content{flex-direction:column;margin:0;align-items:center}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .icons{display:flex;width:100%;justify-content:center}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .icons img{width:97px;height:47px;margin-right:16px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .icons img:first-of-type{margin-top:28px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content{width:100%;max-width:100%;align-items:center;flex-direction:column;display:flex}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .title{font-size:40px;line-height:1.19;text-align:center;margin-bottom:17px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .subtitle{font-size:20px;margin-bottom:14px;display:flex;justify-content:center}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .description{font-size:24px;text-align:center;margin:0;min-height:0;max-width:492px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .content-divider-container{display:none}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content{width:100%;display:flex;flex-direction:column;align-items:center;max-width:100%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .promotion-tag{font-size:20px;margin-top:20px;text-align:center;line-height:1.9}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons{width:100%;display:flex;flex-direction:row;justify-content:center;align-items:center;margin-top:20px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons .button{max-width:205px;margin-right:0;width:100%;min-height:48px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons .button.active{margin:0;margin-right:18px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .disclaimer{margin-top:20px;margin-bottom:0;line-height:2}
}
@media only screen and (max-width:480px){.hero-multimedia-content-v2 .slider-container{height:100vh;min-height:824px}
.hero-multimedia-content-v2 .slider-container .arrows-container{top:300px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow,.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow .oval,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow,.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow .oval{width:40px;height:40px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow{margin-left:15px}
.hero-multimedia-content-v2 .slider-container .arrows-container .prev-arrow .oval .arrow::before{font-size:32px}
.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow{margin-right:15px}
.hero-multimedia-content-v2 .slider-container .arrows-container .next-arrow .oval .arrow::before{font-size:32px}
.hero-multimedia-content-v2 .slider-container .heroSlider div .mobile-media,.hero-multimedia-content-v2 .slider-container .mySlider div .mobile-media{display:block}
.hero-multimedia-content-v2 .slider-container .heroSlider div .desktop-media,.hero-multimedia-content-v2 .slider-container .mySlider div .desktop-media{display:none}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-slide img.mobile-media,.hero-multimedia-content-v2 .slider-container .mySlider .slick-slide img.mobile-media{height:100%;object-position:top}
.hero-multimedia-content-v2 .slider-container .heroSlider .slick-dots,.hero-multimedia-content-v2 .slider-container .mySlider .slick-dots{bottom:24px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container{padding-bottom:74px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .description{font-size:16px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content{flex-direction:column;margin:0;align-items:center;width:100%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content{max-width:100%;align-items:center;flex-direction:column;display:flex}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .title{font-size:32px;line-height:1.31;text-align:center;margin-bottom:0}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .subtitle{margin-bottom:14px;display:flex;justify-content:center;line-height:1.17}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .subtitle .category{margin-right:15px;font-size:16px;line-height:1.88}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .description{font-size:16px;text-align:center;margin:0;min-height:0;max-width:332px;width:100%;line-height:1.63}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .icons{display:flex;min-height:0;justify-content:center;width:100%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .icons img{width:75px;height:36px;margin-right:0;margin-bottom:5%;margin-left:12px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .icons img:first-of-type{margin-top:30px;margin-left:0}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .content-divider-container{display:none}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content{width:100%;display:flex;flex-direction:column;align-items:center;max-width:100%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .right-content-header{width:100%;margin-top:calc(20px - 5%)}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .right-content-header .promotion-tag{font-size:16px;line-height:1.38;margin-top:0;margin-bottom:0}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .right-content-header .price-container .price-text{font-size:24px;line-height:.95;letter-spacing:-0.4px;justify-content:center}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .right-content-header .price-container .price-text .price-day-value{line-height:1.5}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons{width:100%;display:flex;flex-direction:column;justify-content:center;align-items:center;margin-top:16px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons .button{max-width:100%;width:88.8%;min-height:32px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .buttons .button.active{margin:0;margin-bottom:19px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .right-content .disclaimer{margin-top:8px;margin-bottom:0}
}
@media only screen and (max-width:320px){.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .title{margin:0 12px}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .icons{width:60%}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .icons img{margin:5px;margin-left:unset}
.hero-multimedia-content-v2 .slider-container .container-text-container .text-container .content .left-content .description{max-width:95%}
}
@media screen and (min-width:1024px){.cq-Editable-dom.hero-multimedia-content-v2,.phones-visible .cq-Editable-dom.hero-multimedia-content-v2,.cq-Editable-dom .hero-multimedia-content-v2,.phones-visible .cq-Editable-dom .hero-multimedia-content-v2{height:900px;min-height:900px}
}
@media screen and (min-width:1024px){.hero-multimedia-content-v2{height:calc(100vh - 65px)}
.hero-multimedia-content-v2 .slider-container{height:100%}
.hero-multimedia-content-v2 .slider-container .blur-container{height:80%}
.hero-multimedia-content-v2 .slider-container div img,.hero-multimedia-content-v2 .slider-container div video,.hero-multimedia-content-v2 .slider-container div embed{object-position:top}
.phones-visible .hero-multimedia-content-v2{height:calc(100vh - 98px)}
}
@media screen and (min-width:1024px) and (max-width:1440px){.hero-multimedia-content-v2 .slider-container .text-container .content .left-content .subtitle .category{font-size:18px}
.hero-multimedia-content-v2 .slider-container .text-container .content .left-content .title{font-size:32px}
.hero-multimedia-content-v2 .slider-container .text-container .content .left-content .description{font-size:22px}
.hero-multimedia-content-v2 .slider-container .text-container .content .right-content .price-container .price-text{font-size:32px}
.hero-multimedia-content-v2 .slider-container .text-container .content .right-content .price-container .price-text .value-time{font-size:18px}
}
@media screen and (min-width:1024px){div.hero-multimedia-content-v2{transition:unset}
}
*{outline:0}
.hero-banner-container{position:relative;margin:0 auto;min-height:calc(100vh - 65px);overflow:hidden;width:100%}
.phones-visible .hero-banner-container{min-height:calc(100vh - 98px)}
.hero-banner-container .hero-banner-content{-webkit-box-sizing:border-box;box-sizing:border-box}
.hero-banner-container .hero-banner-content .hero-banner-media{border:0}
.hero-banner-container .hero-banner-content .hero-banner-media .mobile-media{display:none}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-background{height:1022px;width:100%;position:absolute}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-background img,.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-background video,.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-background embed{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-gradient{position:absolute;width:100%;background-repeat:no-repeat;background-position:center bottom;z-index:1;bottom:0}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-gradient-up{position:absolute;width:100%;opacity:.76;background-repeat:no-repeat;background-position:center top;background-size:100%;z-index:2;background-image:linear-gradient(to top,rgba(0,24,46,0),#00182e);height:604px}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-gradient-down{position:absolute;width:100%;background-repeat:no-repeat;background-position:center bottom;background-size:100%;z-index:3;bottom:0;background-image:linear-gradient(to bottom,rgba(0,24,46,0),#00182e);height:915px}
.hero-banner-container .hero-banner-content .hero-banner-title{bottom:60vh;position:absolute;left:0;right:0;max-width:1440px;margin:287px auto 0 auto;z-index:5}
.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-secondary{width:100%;height:24px;text-shadow:0 2px 11px rgba(0,0,0,0.91);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.71;letter-spacing:normal;text-align:center;color:#fff;margin:0;z-index:100}
.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-primary .text-container{width:100%;height:60px;text-shadow:0 0 21px rgba(0,0,0,0.79);font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:60px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;text-align:center;color:#fff;margin:0;z-index:100}
.hero-banner-container .hero-banner-content .hero-banner-cards{bottom:16vh;position:absolute;left:0;right:0;max-width:1440px;z-index:5;margin:576px auto 0}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card{margin:0 auto}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text{text-align:center}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text div:first-child{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.42;letter-spacing:normal;text-align:center;color:#fff}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text a{height:16px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;color:#fff}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text a:hover{color:#00aeef}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text div:nth-child(2) p::after{font-family:"dtv-public-sites-icons";color:#fff;font-size:16px;left:.25em;content:'\e409'}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-header{display:flex;justify-content:center;align-items:center}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-header .hero-banner-card-header-image{margin:0 3px}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card-after{float:right;width:1px;height:243.5px;object-fit:contain;background-image:linear-gradient(to bottom,rgba(255,255,255,0),#fff 56%,rgba(255,255,255,0) 100%)}
.hero-banner-container .hero-banner-content .hero-banner-offerline{bottom:0vh;position:absolute;left:0;right:0;margin:0 auto;z-index:5;max-width:1440px}
@media only screen and (max-width:1440px){.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-primary .text-container{font-size:40px}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text p:first-child{font-size:20px}
}
@media only screen and (max-width:1024px){.hero-banner-container{margin:0 auto;overflow:hidden}
.hero-banner-container .hero-banner-content{-webkit-box-sizing:border-box;box-sizing:border-box}
.hero-banner-container .hero-banner-content .hero-banner-media{width:100%;border:0;flex:0}
.hero-banner-container .hero-banner-content .hero-banner-media .desktop-media{display:none}
.hero-banner-container .hero-banner-content .hero-banner-media .mobile-media{display:block}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-background{height:100%;width:100%;position:absolute}
.hero-banner-container .hero-banner-content .slider .slick-dots{z-index:5;width:100%}
.hero-banner-container .hero-banner-content .slider .slick-dots li{width:10px;height:10px;margin:0 15px}
.hero-banner-container .hero-banner-content .slider .slick-dots li button{background:#fff;border-radius:calc(5px);height:10px;width:10px;position:absolute;-webkit-transition:-webkit-transform .8s ease,opacity .8s ease;transition:transform .8s ease,opacity .8s ease}
.hero-banner-container .hero-banner-content .slider .slick-dots li button::before{content:'';width:10px;height:10px;top:3px;position:absolute;left:0;visibility:hidden;background:#fff;opacity:0;-webkit-transition:-webkit-transform .8s ease,opacity .8s ease;transition:transform .8s ease,opacity .8s ease}
.hero-banner-container .hero-banner-content .slider .slick-dots .slick-active{width:32px}
.hero-banner-container .hero-banner-content .slider .slick-dots .slick-active button{width:32px;padding:2px;margin:0;-webkit-transition:-webkit-transform .1s linear .1s,opacity .1s linear,visibility 0 .1s linear;transition:transform .1s linear .1s,opacity .1s linear,visibility 0 .1s linear;animation-timing-function:cubic-bezier(0,0,1,1)}
.hero-banner-container .hero-banner-content .hero-banner-title{bottom:65vh}
.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-primary .text-container{font-size:32px}
.hero-banner-container .hero-banner-content .hero-banner-cards{bottom:25vh;position:absolute}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .slick-dots{bottom:-25px}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card-after{display:none}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text p:first-child{font-size:16px}
}
@media only screen and (max-width:970px){.hero-banner-container .hero-banner-content .hero-banner-title{bottom:60vh}
.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-secondary p{font-size:12px}
.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-primary .text-container{font-size:20px}
.hero-banner-container .hero-banner-content .hero-banner-cards{bottom:35vh}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text p:first-child{font-size:12px}
.hero-banner-offerline .dtv-hol .dtv-hol-container{padding:4px 24px}
.hero-banner-offerline .dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p{font-size:12px}
.hero-banner-offerline .dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions a{font-size:12px}
}
@media only screen and (max-width:768px){.hero-banner-container{height:929px}
.hero-banner-container .hero-banner-content .hero-banner-title{margin-top:150px;bottom:unset}
.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-primary .text-container{font-size:40px}
.hero-banner-container .hero-banner-content .hero-banner-cards{bottom:unset;margin-top:350px}
.hero-banner-container .hero-banner-content .hero-banner-cards .slide .hero-banner-card .hero-banner-card-text p{font-size:12px}
.hero-banner-container .hero-banner-content .slider .slick-dots{bottom:-10px}
.hero-banner-offerline .dtv-hol .dtv-hol-container{padding:8px 24px}
.hero-banner-offerline .dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--text .dtv-hol-container--text-description p{font-size:20px}
.hero-banner-offerline .dtv-hol .dtv-hol-container .dtv-hol-container--content .dtv-hol-container--actions a{font-size:20px}
}
@media only screen and (max-width:480px){.hero-banner-container{height:1162px;margin:0 auto;overflow:hidden}
.hero-banner-container .hero-banner-content{-webkit-box-sizing:border-box;box-sizing:border-box}
.hero-banner-container .hero-banner-content .hero-banner-media{width:100%;border:0;-webkit-box-flex:0;-ms-flex:0;flex:0}
.hero-banner-container .hero-banner-content .hero-banner-media .desktop-media{display:none}
.hero-banner-container .hero-banner-content .hero-banner-media .mobile-media{display:block}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-background{height:706px;width:100%;position:absolute}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-gradient-up{width:100%;background-image:linear-gradient(to bottom,rgba(0,24,46,0),#00172d)}
.hero-banner-container .hero-banner-content .hero-banner-media .hero-banner-gradient-down{height:560px;background:#00172d}
.hero-banner-container .hero-banner-content .hero-banner-title{margin-top:150px}
.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-secondary p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px}
.hero-banner-container .hero-banner-content .hero-banner-title .hero-banner-title-primary .text-container{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:32px}
.hero-banner-container .hero-banner-content .hero-banner-cards{margin-top:350px}
.hero-banner-container .hero-banner-content .slider .slick-dots{bottom:-10px}
}
.cq-Editable-dom.hero-banner-container,.phones-visible .cq-Editable-dom.hero-banner-container,.cq-Editable-dom.hero-banner-container,.phones-visible .cq-Editable-dom.hero-banner-container,.cq-Editable-dom .hero-banner-container,.phones-visible .cq-Editable-dom .hero-banner-container{height:900px;min-height:900px}
.generic-product-offer-card-container{margin:12px;width:calc(100% - 24px);display:flex;flex-direction:column;align-items:stretch;border-radius:2px;box-shadow:0 2px 4px 0 rgba(0,0,0,0.1),0 3px 10px 0 rgba(0,0,0,0.13);background-color:#fff;position:relative}
.generic-product-offer-card-container .title{min-height:60px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;line-height:1.5;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#000;margin:16px}
.generic-product-offer-card-container .badge-image{object-fit:contain;height:24px;position:absolute;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;top:96px;left:9px}
.generic-product-offer-card-container .image{height:186px;object-fit:cover;width:100%}
.generic-product-offer-card-container .subtitle{margin:16px 16px 0;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#000}
.generic-product-offer-card-container .label{margin:0 16px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;line-height:1.5;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#d55600}
.generic-product-offer-card-container .offer{margin:0 16px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#000}
.generic-product-offer-card-container .btn-select{display:flex;justify-content:center;align-items:center;flex-direction:row;height:51px;margin:12px 16px 24px}
.generic-product-offer-card-container .btn-select .external-link{margin-left:4px}
.generic-expanded-resume-container{display:block;overflow-y:hidden;padding:8px}
.generic-expanded-resume-container .generic-orderresume-close{display:none}
.generic-expanded-resume-container .generic-orderresume-container{width:100%;padding:0;box-shadow:0 8px 16px 0 rgba(0,0,0,0.1);border:0;border-radius:5px}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-header{background-image:linear-gradient(269deg,#4d4d4d,#1e1e1e);padding-left:24px;display:flex;padding-top:24px;padding-bottom:24px;border-top-left-radius:5px;border-top-right-radius:5px}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-header .outer-circle{display:block;width:16px;height:16px;margin-right:16px;border-radius:50%;background-color:#4d4d4d;background-image:url('../../../content/dam/public-sites/wizard/images/check-small-green.png');background-position:center center;background-repeat:no-repeat}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-header .generic-orderresume-title-content{display:flex;align-items:center}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-header .generic-orderresume-title-content .generic-orderresume-title{margin:0;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;color:#fff}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body{position:relative;background:#fff;padding-top:24px;padding-bottom:0;padding-right:16px;padding-left:16px;border-bottom-left-radius:5px;border-bottom-right-radius:5px}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body ul{list-style-type:none;margin:0;padding:0}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body ul li{margin-bottom:16px;display:flex;justify-content:flex-start;align-items:center}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body ul li .generic-orderresume-checkmark{margin-top:8px;width:13px;height:16px;background:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%2716%27%20height%3D%2712%27%20viewBox%3D%270%200%2016%2012%27%3E%3Cg%20fill%3D%27none%27%20fill-rule%3D%27evenodd%27%3E%3Cpath%20d%3D%27M0-3h16v16H0z%27%20%2F%3E%3Cpath%20fill%3D%27%238BC34A%27%20fill-rule%3D%27nonzero%27%20d%3D%27M4.683%208.708l9.658-8.46a1%201%200%200%201%201.318%201.504L5.285%2010.84a1%201%200%200%201-1.378-.057L.28%207.032a1%201%200%200%201%201.438-1.39l2.964%203.066z%27%20%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E") no-repeat;background-size:contain}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body ul li .generic-orderresume-label{margin-left:16px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;line-height:1.5;color:#000}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body ul li .generic-orderresume-label.offer{color:#c1570f}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body .generic-orderresume-footer{display:flex;min-width:100%;justify-content:center;color:#fff;padding-bottom:16px;padding-top:12px}
@media only screen and (min-width:970px){.generic-expanded-resume-container{padding-bottom:48px}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-header{padding-top:24px;padding-bottom:24px;padding-left:32px;padding-right:24px}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-header .outer-circle{margin-right:24px}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-header .generic-orderresume-title-content{display:flex}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-header .generic-orderresume-title-content .generic-orderresume-title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;line-height:1.5}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body{padding-top:24px;padding-left:64px;padding-right:24px}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body ul{display:flex;flex-wrap:wrap}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body ul li{width:50%}
.generic-expanded-resume-container .generic-orderresume-container .generic-orderresume-body .generic-orderresume-footer{justify-content:flex-end;color:#000;padding-top:16px;padding-bottom:24px}
}
.featuredeventcontainer{padding:0}
.featured-event-container{width:100%;background-size:cover;background-repeat:no-repeat;background-position:top;box-sizing:border-box;display:flex;flex-direction:column;align-items:center;justify-content:center;height:55.48vw;max-height:799px}
.featured-event-container .component-container{width:100%;max-width:1440px;height:100%;display:flex;flex-direction:column;justify-content:space-between}
.featured-event-container .header{margin-left:2.22vw;margin-top:12.56vw}
.featured-event-container .header .title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:2.77vw;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.25;letter-spacing:normal;color:#fff}
.featured-event-container .header .subtitle{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:1.66vw;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;color:#fff}
.featured-event-container .footer{width:100%}
.featured-event-container .footer .title-separator{display:flex;justify-content:center;align-items:center;width:100%}
.featured-event-container .footer .title-separator .separator{text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:1.25vw;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.33;letter-spacing:normal;color:#fff;width:26.59vw;margin:0 2.22vw 0}
.featured-event-container .footer .title-separator .divider{height:1px;width:33vw}
.featured-event-container .footer .title-separator .divider.left{background-image:linear-gradient(to left,#fff,rgba(255,255,255,0))}
.featured-event-container .footer .title-separator .divider.right{background-image:linear-gradient(to right,#fff,rgba(255,255,255,0))}
.featured-event-container .footer .event-icons{display:flex;flex-wrap:wrap;justify-content:center;width:100%}
.featured-event-container .footer .event-icons .event-icon{align-items:center;border-radius:10px;border:1px solid rgba(255,255,255,0.1);box-sizing:border-box;display:flex;flex-basis:140px;height:70px;justify-content:center;margin:0 32px 20px;padding:16px;width:140px}
.featured-event-container .footer .event-icons .event-icon img{max-width:100%}
@media screen and (min-width:1440px){.featured-event-container .header{margin-top:181px;margin-left:30px}
.featured-event-container .header .title{font-size:40px}
.featured-event-container .header .subtitle{font-size:24px}
.featured-event-container .footer .title-separator .separator{font-size:18px}
.featured-event-container .footer .event-icons .event-icon{width:140px;height:70px;margin:30px 16px}
}
@media screen and (min-width:480px) and (max-width:768px){.featured-event-container{height:91vw;max-height:unset}
.featured-event-container .header{margin-left:2.22vw;margin-top:14.56vw}
.featured-event-container .header .title{font-size:2.77vw}
.featured-event-container .header .subtitle{font-size:1.66vw}
.featured-event-container .footer .title-separator .separator{font-size:2.34vw}
.featured-event-container .footer .event-icons{flex-wrap:wrap;margin:4vw 0 7vw}
.featured-event-container .footer .event-icons .event-icon{width:18.22vw;height:9.11vw;margin:2vw 2vw 0 0}
}
@media only screen and (max-width:480px){.featured-event-container{height:auto;max-height:unset}
.featured-event-container .header{width:100%;display:flex;flex-direction:column;align-items:center;margin-top:117.6vw;margin-left:0}
.featured-event-container .header .title{font-size:40px;line-height:1.18;text-align:center;word-break:break-word}
.featured-event-container .header .subtitle{text-align:center;font-size:4.8vw;line-height:2.56}
.featured-event-container .footer .title-separator .separator{font-size:4.8vw;width:74.4vw;margin:0 4.8vw 0}
.featured-event-container .footer .title-separator .divider{width:16.2vw}
.featured-event-container .footer .event-icons{flex-wrap:wrap;margin:2.13vw 0 4.26vw}
.featured-event-container .footer .event-icons .event-icon{width:37vw;height:18.5vw;margin:4.26vw 2.26vw}
}
.featured-content-card-container{display:flex;justify-content:center}
.featured-content-card-container .text-light{color:#fff}
.featured-content-card-container .text-light .colour-light{color:#fff}
.featured-content-card-container .cards-slides-container{display:grid;grid-template-columns:repeat(auto-fit,minmax(120px,1fr));grid-auto-rows:auto;grid-gap:24px;justify-content:center;align-items:flex-start;max-width:1440px;width:100%}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper{height:100%;display:flex;flex-direction:column;justify-content:center}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper .texts-header{height:100%;display:flex;flex-direction:column}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper .texts-header .featured-image{margin-bottom:16px;border-radius:5px;width:100%;max-height:249px;min-height:200px;object-fit:cover}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper .texts-header .featured-title{margin-bottom:4px;font-weight:400}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper .texts-container{height:100%}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper .texts-container .featured-subtitle{margin-bottom:8px}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper .texts-container .featured-footer p{margin:0;font-size:14px}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper .texts-container .featured-footer p a{text-decoration:underline}
@media screen and (max-width:768px){.featured-content-card-container .cards-slides-container{display:block}
.featured-content-card-container .cards-slides-container .featured-card-slide{margin:0 6px}
.featured-content-card-container .cards-slides-container .featured-card-slide .card-wrapper .texts-container .featured-footer p{margin:0}
.featured-content-card-container .cards-slides-container .slick-dots{margin-top:64px}
}
.entertainment-section-cards-container{width:100%;height:calc(100vh - 65px);display:flex;align-items:center;flex-direction:column;background-repeat:no-repeat;background-size:cover;background-position:center top;overflow:hidden}
.phones-visible .entertainment-section-cards-container{height:calc(100vh - 98px)}
.entertainment-section-cards-container .subcategory-section-title{margin-top:61px}
.entertainment-section-cards-container .entertainment-cards-container{display:flex;justify-content:center;align-items:center;margin:auto 0}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:nth-child(2){transform:scale(1.102);z-index:1}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:first-child{transform:translateX(16px)}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:last-child{transform:translateX(-16px)}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card{width:311px;height:378.2px;box-shadow:0 5px 12px 0 rgba(0,0,0,0.1);background-size:cover;background-position:top;background-repeat:no-repeat;position:relative;box-sizing:border-box;display:flex;align-items:center;flex-direction:column;border-radius:3px}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .white-cap{position:absolute;width:100%;bottom:0;height:83%;background-image:linear-gradient(to bottom,rgba(255,255,255,0),#fff);border-radius:3px}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .white-cap.dark-gradient{background-image:linear-gradient(to bottom,rgba(255,255,255,0),#000)}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .category{margin-top:auto;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:10.7px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.71;letter-spacing:normal;text-align:center;color:#000;z-index:0}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .category.dark-gradient{color:#fff}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .name{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.36;letter-spacing:normal;text-align:center;color:#000;z-index:0}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .name.dark-gradient{color:#fff}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .type-badges{margin-top:11px;display:flex;justify-content:center;z-index:0}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .type-badges img{height:24px;object-fit:contain;margin:0 4px}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .more-info{margin:24.1px 0 21.7px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;text-decoration:none;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;color:#0073ae;z-index:0;cursor:pointer;display:flex;align-items:center;justify-content:center;text-transform:uppercase}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card .more-info .span::before{font-size:36px}
@media only screen and (min-width:1024px) and (max-width:1440px){.entertainment-section-cards-container{width:100%}
.entertainment-section-cards-container .subcategory-section-title{margin-top:2%}
.entertainment-section-cards-container .subcategory-section-title .title-container.section-title .title{font-size:32px}
.entertainment-section-cards-container .entertainment-cards-container{margin-top:4%;height:55%}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card{height:100%}
}
@media only screen and (min-width:1024px) and (max-width:1440px) and (max-height:768px){.entertainment-section-cards-container .entertainment-cards-container{margin-top:2%}
}
@media only screen and (max-width:970px){.entertainment-section-cards-container{height:661px}
.entertainment-section-cards-container .subcategory-section-title{margin-top:50px}
.entertainment-section-cards-container .entertainment-cards-container{margin-top:10px}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:nth-child(2){transform:scale(0.82)}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:first-child{transform:translateX(81.4px) scale(0.74)}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:last-child{transform:translateX(-81.4px) scale(0.74)}
}
@media only screen and (max-width:740px){.entertainment-section-cards-container{height:661px}
.entertainment-section-cards-container .subcategory-section-title{margin-top:50px}
.entertainment-section-cards-container .entertainment-cards-container{margin-top:10px}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:nth-child(2){transform:scale(0.62)}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:first-child{transform:translateX(150px) scale(0.5)}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card:last-child{transform:translateX(-150px) scale(0.5)}
}
@media only screen and (max-width:768px){.entertainment-section-cards-container{height:auto;padding-bottom:56px}
.phones-visible .entertainment-section-cards-container{height:auto}
.entertainment-section-cards-container .subcategory-section-title{margin-top:50px}
.entertainment-section-cards-container .entertainment-cards-container{margin-top:10px;flex-wrap:wrap}
.entertainment-section-cards-container .entertainment-cards-container .entertainment-card{transform:unset !important;width:100%;max-width:480px;margin:13px 24px;height:400px}
}
.tab_wrapper{margin-top:83px}
.tab_wrapper .dynamictabs_container{width:100%;max-width:1156px;margin:14px auto 54px auto;background:#fff;padding-bottom:54.1px}
.tab_wrapper .dynamictabs_container .dynamictabs_header{position:relative;height:105px;width:100%;display:inline-block;overflow:hidden}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs{list-style:none;padding:0;margin:0;display:flex;flex-direction:row;justify-content:space-between;position:absolute;overflow-y:hidden;overflow-x:auto;top:0;left:0;height:100%;width:100%}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item{padding:0 29px;width:100%;text-align:center;position:relative;border-bottom:1px solid #9e9e9e;cursor:pointer;display:flex;flex-direction:column;flex-wrap:nowrap;justify-content:center;box-sizing:border-box;min-width:240px}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item.dynamictabs_active::after{content:" ";height:6px;background:#00aeef;position:absolute;bottom:0;left:0;right:0}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item.dynamictabs_active .dynamictabs_tabs--title{font-weight:500}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item span{align-self:center}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item .dynamictabs_tabs--title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.2;letter-spacing:normal;text-align:center;color:#000}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item .dynamictabs_tabs--badges{display:flex;flex-direction:row;justify-content:center;margin-top:6px}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item .dynamictabs_tabs--badges figure{width:87px;height:24px;border-radius:16.5px;margin:0}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item .dynamictabs_tabs--badges figure:nth-child(2){margin:0 0 0 8px}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item .dynamictabs_tabs--badges figure.dynamictabs_tabs--badges_pre{background-color:#333}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item .dynamictabs_tabs--badges figure.dynamictabs_tabs--badges_pos{background-color:#1a237e}
.tab_wrapper .dynamictabs_container .dynamictabs_body{display:none}
.tab_wrapper .dynamictabs_container .dynamictabs_body.dynamictabs_body--active{display:block}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section{text-align:center}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section .dynamictabs_section--title{margin:17.3px auto 9.7px auto;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.31;letter-spacing:normal;text-align:center;color:#000;display:inline-block}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section .dynamictabs_channels{display:flex;flex-direction:row;justify-content:center;flex-wrap:wrap}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section .dynamictabs_channels .dynamictabs_channels--channel{width:93.8px;margin:11.7px 12.1px;height:108.6px;border-radius:5px;border:1px solid rgba(158,158,158,0.5)}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section .dynamictabs_channels .dynamictabs_channels--channel .dynamictabs_channels--channel_data{display:flex;flex-direction:column;flex-wrap:wrap;justify-content:space-between;height:calc(100% - 20px);margin:0;padding:10px 0;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12.7px;font-style:normal;font-stretch:normal;line-height:1.44;letter-spacing:normal;text-align:center;color:#000}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section .dynamictabs_channels .dynamictabs_channels--channel .dynamictabs_channels--channel_data .dynamictabs_channels--channel_icon figure{margin:0}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section .dynamictabs_channels .dynamictabs_channels--channel .dynamictabs_channels--channel_data .dynamictabs_channels--channel_icon figure img{width:100%;max-width:70px}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section .dynamictabs_channels .dynamictabs_channels--channel .dynamictabs_channels--channel_data .dynamictabs_channels--channel_name{height:19px;font-weight:bold;margin-top:-16px}
.tab_wrapper .dynamictabs_container .dynamictabs_body .dynamictabs_section .dynamictabs_channels .dynamictabs_channels--channel .dynamictabs_channels--channel_data .dynamictabs_channels--channel_number{height:19px;font-weight:normal}
@media screen and (min-width:1024px){.tab_wrapper .dynamictabs_container .dynamictabs_header{height:79px}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item{flex-direction:row}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item .dynamictabs_tabs--badges{margin-top:0}
.tab_wrapper .dynamictabs_container .dynamictabs_header .dynamictabs_tabs .dynamictabs_tabs--item .dynamictabs_tabs--badges figure{margin:0 0 0 8px}
}
@media screen and (min-width:1156px){.tab_wrapper{margin-top:97px}
.tab_wrapper .dynamictabs_container{border-radius:5px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);margin-top:68px}
}
.dynamic-distributed-content{position:relative}
.dynamic-distributed-content .hide_on_mobile{display:none}
.dynamic-distributed-content .ddc_background{position:absolute;left:0;top:0;width:100%;height:100%;background-size:cover;z-index:-1}
.dynamic-distributed-content .ddc_container-content{display:flex;flex-direction:column;width:100%;max-width:1440px;min-height:680px;margin:0 auto;justify-content:center;align-items:center}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text{max-width:566px;padding:48px 16px;order:2}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .subtitle{margin-bottom:8px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .subtitle h3{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:26px;font-weight:400;margin:0;line-height:1.25;text-transform:uppercase}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .title{margin-bottom:24px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .title h2{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:32px;color:#242424;margin:0;line-height:1.25}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .title h2.light-text{color:#fff}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .text{margin-bottom:32px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .text p{margin:0}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .text p.light-text{color:#fff}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .aligner{text-align:center}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed{margin-bottom:40px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed ul{margin:0;padding:0}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed ul li{margin-bottom:16px;display:flex;flex-direction:row;align-items:baseline}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed ul li:last-child{margin-bottom:0}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed ul li span{margin-right:24px;line-height:1.25}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed ul li span::before{font-size:20px;color:#0073ae}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed ul li span.aquamarine::before{color:#05cda9}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed ul li p{margin:0;font-size:16px;color:#242424}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .list-distributed ul li p.light-text{color:#fff}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta{text-align:center}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta .btn{width:auto}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta .btn.border{border:1px solid #fff}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta .ddc_link{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500;color:#0073ae;text-decoration:none;text-transform:uppercase;display:flex;justify-content:center}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta .ddc_link span{display:inline-block}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta .ddc_link span::before{font-size:20px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta .ddc_link.light-text{color:#fff}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--image{order:1}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--image figure{margin:0;padding:0;height:100%;display:flex;flex-direction:column;justify-content:center}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--image figure.align-bottom{justify-content:flex-end}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--image figure img{width:100%;max-width:100%;max-height:100%}
@media screen and (min-width:1024px){.dynamic-distributed-content .hide_on_desktop{display:none}
.dynamic-distributed-content .hide_on_mobile{display:block}
.dynamic-distributed-content .ddc_container-content{flex-direction:row;align-items:stretch}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text{display:flex;flex-direction:column;justify-content:center;padding:0 24px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .aligner{text-align:left}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .subtitle h3{font-size:32px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .title h2{font-size:40px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta{text-align:left}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--text .cta .ddc_link{justify-content:flex-start}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--image{padding:0 32px}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--image figure img{max-width:100%;max-height:100%}
.dynamic-distributed-content .ddc_container-content .ddc_container-content--image.align-bottom{align-self:flex-end}
.dynamic-distributed-content .ddc_container-content .showme-first{order:1}
.dynamic-distributed-content .ddc_container-content .showme-after{order:2}
.dynamic-distributed-content .ddc_container-element{margin-right:24px}
.dynamic-distributed-content .ddc_container-element:last-child{margin:0}
}
.document-filter .document-filter-content{width:100%;margin:0 auto}
.document-filter .document-filter-content .title{width:100%;text-align:center}
.document-filter .document-filter-content .description{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;color:#000;text-align:center;box-sizing:border-box;padding:0 16px}
.document-filter .document-filter-content .drops{margin-top:32px;display:flex;justify-content:center}
.document-filter .document-filter-content .drop-container{margin:0 12px;display:flex;justify-content:center;width:100%;position:relative;width:153px}
.document-filter .document-filter-content .drop-container .drop-select{width:100%;height:32px;border:1px solid #9e9e9e;border-radius:5px;box-sizing:border-box;display:flex;align-items:center;cursor:pointer}
.document-filter .document-filter-content .drop-container .drop-select .chevron{display:flex;justify-content:center;align-items:center;margin-left:auto;width:32px;height:100%;border-left:1px solid #9e9e9e}
.document-filter .document-filter-content .drop-container .text{line-height:2;width:100%;text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;color:#000}
.document-filter .document-filter-content .drop-container.open .drop-select{border-radius:5px 5px 0 0}
.document-filter .document-filter-content .drop-container.open .drop-select .chevron::before{transform:rotate(180deg)}
.document-filter .document-filter-content .drop-container.open .drop-options{display:flex}
.document-filter .document-filter-content .drop-container .drop-options{position:absolute;display:none;flex-direction:column;width:100%;top:32px;left:0;z-index:1}
.document-filter .document-filter-content .drop-container .drop-options .option{background-color:#fff;box-sizing:border-box;cursor:pointer;width:100%;height:32px;border-bottom:1px solid #9e9e9e;border-right:1px solid #9e9e9e;border-left:1px solid #9e9e9e}
.document-filter .document-filter-content .drop-container .drop-options .option:last-child{border-radius:5px;border-radius:0 0 5px 5px}
.document-filter .document-filter-content .drop-container .drop-options .option:hover{background-color:#eceff1}
.document-filter .document-filter-content .documents{width:100%;padding:0 16px;box-sizing:border-box;display:flex;flex-direction:column;margin:35px 0 24px}
.document-filter .document-filter-content .documents .document{display:flex;justify-content:space-between;align-items:center;min-height:74px;border-bottom:1px solid #ccc}
.document-filter .document-filter-content .documents .document .name{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#0073ae;font-size:20px}
.document-filter .document-filter-content .documents .document .link{display:flex;align-items:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#0073ae;font-size:16px;text-decoration:none;text-transform:uppercase;font-weight:bold}
.document-filter .document-filter-content .documents .document .link span:before{font-weight:bold}
.document-filter.mobile .document-filter-content .title{font-size:40px}
.document-filter.mobile .document-filter-content .documents .document{flex-direction:column}
.document-filter.mobile .document-filter-content .documents .document .name{margin-top:16px;text-align:center}
.document-filter.mobile .document-filter-content .documents .document .link{margin:16px 0}
.directv-go-card-container{display:flex;box-sizing:border-box;align-items:flex-start;flex-direction:column;width:100%;padding:1rem 0;min-height:285px}
.directv-go-card-container .icons-container{display:flex;justify-content:center;align-items:center;margin-bottom:16px}
.directv-go-card-container .icons-container img{height:28px;object-fit:contain}
.directv-go-card-container .icons-container i{margin:0 .4rem;font-size:32px;color:#00aeef}
.directv-go-card-container .title{text-align:left;margin-bottom:14px}
.directv-go-card-container .title a{display:flex;align-items:center;font-weight:500;font-size:24px;line-height:1.17;color:#242424;text-decoration:none;-webkit-font-smoothing:antialiased;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.directv-go-card-container .title a:hover{color:#0073ae}
.directv-go-card-container .title .chevron{border-left:2px solid #00aeef;border-bottom:2px solid #00aeef;width:8px;height:8px;margin-left:.5rem;transform:rotate(225deg)}
.directv-go-card-container .divider{margin-bottom:24px;display:block;width:100%;height:1px;background-color:#cfd8dc}
.directv-go-card-container .description{text-align:left;line-height:1.5;font-size:16px;-webkit-font-smoothing:antialiased;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin-bottom:24px;color:#000}
.directv-go-card-container .links{list-style:none;padding:0;margin:0 0 52px}
.directv-go-card-container .links li{font-size:16px;margin-bottom:5px;line-height:1.25;min-height:25px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;display:flex;align-items:center}
.directv-go-card-container .links li a{color:#000;text-decoration:none;display:flex;align-items:center}
.directv-go-card-container .links li a .chevron{border-left:1.5px solid #00aeef;border-bottom:1.5px solid #00aeef;width:4px;height:4px;margin-left:16px;margin-right:16px;transform:rotate(225deg)}
.directv-go-card-container .links li a .badge{margin-left:6px;width:55.9px;height:15px;font-size:11px;font-weight:600;line-height:1.36;text-align:center;color:#d55600;border:solid 1px #d55600;border-radius:3px;text-transform:uppercase}
.directv-go-card-container .links li:hover{border-radius:1px;background-color:#e4effb}
.directv-go-card-container .links li:hover a{font-weight:600;color:#005993}
.directv-go-card-container .links li:hover a .chevron{margin-right:8px;margin-left:8px}
@media only screen and (max-width:768px){.directv-go-card-container{align-items:center}
.directv-go-card-container .icons-container{margin-bottom:25px}
.directv-go-card-container .title{text-align:center;margin-bottom:17px}
.directv-go-card-container .title a{font-size:26px;line-height:1.23}
.directv-go-card-container .title .chevron{display:none}
.directv-go-card-container .description{text-align:center;margin-bottom:34px}
}
.decoslider{padding:0}
.deco-slider-container{display:flex;flex-direction:column;box-sizing:border-box;padding:86px 0 73px;align-items:center;width:100%;background-position:top center;background-image:url('../components/content/decoslider/clientlib/css/w3css.gif');background-repeat:no-repeat;background-size:cover}
.deco-slider-container .info-container{display:flex;flex-direction:column;align-items:center;justify-content:center;margin-top:48px;max-width:1440px}
.deco-slider-container .info-container .deco-image{width:100%;object-fit:contain}
.deco-slider-container .info-container .btn-deco{transform:translateY(-24px);width:230px;height:48px}
@media only screen and (max-width:768px){.deco-slider-container{padding:56px 0 89px}
.deco-slider-container .info-container .deco-image{width:90%;object-fit:contain}
.deco-slider-container .info-container .btn-deco{transform:translateY(17px)}
}
.column-text-container{display:flex;justify-content:space-around;box-sizing:border-box;width:100%}
.column-text-container .column-text-card-border{width:33.33333333%;background:linear-gradient(to top,rgba(0,0,0,0),#000 54%,rgba(0,0,0,0) 100%);padding-right:1px}
.column-text-container .column-text-card-border .column-text-card{height:100%;background:#fff;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-style:normal;font-stretch:normal;letter-spacing:normal;text-align:center}
.column-text-container .column-text-card-border .column-text-card .column-text-title{margin-bottom:16px;font-weight:500;font-size:32px;line-height:1.19}
.column-text-container .column-text-card-border .column-text-card .column-text-description{padding:0 24px;font-weight:normal;font-size:16px;line-height:1.5}
.column-text-container .column-text-card-border:last-child{background:#fff}
@media only screen and (max-width:970px){.column-text-container .column-text-card-border .column-text-card .column-text-title{font-size:24px}
}
@media only screen and (max-width:768px){.column-text-container{flex-direction:column}
.column-text-container .column-text-card-border{width:100%;background:linear-gradient(to right,rgba(0,0,0,0),#000 54%,rgba(0,0,0,0) 100%);padding:0;padding-bottom:1px;margin-top:32px}
.column-text-container .column-text-card-border .column-text-card{padding-bottom:32px}
.column-text-container .column-text-card-border .column-text-card .column-text-title{font-size:24px}
.column-text-container .column-text-card-border .column-text-card .column-text-description{padding:0}
.column-text-container .column-text-card-border:first-child{margin-top:0}
}
.chat-button{display:flex;position:fixed;z-index:1020;right:16px;bottom:16px;box-shadow:0 8px 16px 0 rgba(0,0,0,0.1);border-radius:5px;background-color:#b8e986;overflow:hidden;height:56px;width:56px;transition:width ease-in-out 300ms}
.chat-button .chat-button-message{max-width:138px;width:100%;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;color:#00182e;text-decoration:none;min-width:124px;text-align:center;display:flex;align-items:center;justify-content:center;cursor:pointer}
.chat-button .chat-button-button{width:56px;height:56px;background:#41be36;display:flex;flex-direction:column;align-items:center;cursor:pointer;justify-content:center;position:absolute;right:0}
.chat-button .chat-button-button .dtv-public-icon-chat::before{color:#fff;font-size:24px}
.chat-button .chat-button-button .chat-button-button-text{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:10px;font-weight:500;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;text-align:center;color:#fff;text-transform:uppercase}
@media only screen and (min-width:768px){.chat-button{width:194px}
}
.chat-button.opened{width:194px}
.chat-button.opened .chat-button-button .chat-button-button-text{display:none}
@media only screen and (max-width:480px){.chat-button{height:46px;width:46px}
.chat-button .chat-button-button{height:46px;width:46px}
.chat-button.opened{width:176px}
.chat-button.opened .chat-button-button .chat-button-button-text{display:none}
}
.chanelsearch{padding:0;width:100%;display:flex;justify-content:center}
.chanel-search-component{display:flex;justify-content:center;margin:0 auto;align-items:center;flex-direction:column;box-sizing:border-box;width:100%;max-width:1440px}
.chanel-search-component .section-title{width:95%}
.chanel-search-component .filter-container{display:flex;align-items:stretch;margin-top:51px;height:56px;width:95%;position:relative}
.chanel-search-component .filter-container .option{display:flex;align-items:center;height:56px;cursor:pointer}
.chanel-search-component .filter-container .option .icon{height:25px;object-fit:contain;margin-left:25px}
.chanel-search-component .filter-container .option .text{margin-left:25px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:18px;font-weight:bold;font-style:normal;font-stretch:normal;line-height:1.56;letter-spacing:normal;color:#000}
.chanel-search-component .filter-container .option.not-selected .text{font-weight:normal}
.chanel-search-component .filter-container .filter-options{box-sizing:border-box;background-color:#fff;display:none;position:absolute;width:25%;top:56px;z-index:3;flex-direction:column;border:1px solid #9e9e9e;border-top:0;border-radius:0 0 5px 5px}
.chanel-search-component .filter-container .filter-options.open{display:flex}
.chanel-search-component .filter-container .filter-select{box-sizing:border-box;width:25%;display:flex;align-items:center;border-radius:5px 0 0 5px;border:1px solid #9e9e9e;justify-content:space-between;cursor:pointer;transition:width .5s}
.chanel-search-component .filter-container .filter-select.open{border-radius:5px 0 0 0;border-bottom:0}
.chanel-search-component .filter-container .filter-select.open .dtv-public-icon-more{transform:rotate(180deg)}
.chanel-search-component .filter-container .filter-select.input-focus{border-width:0;width:0;transition:width .5s,border-width .5s .2s}
.chanel-search-component .filter-container .search{position:absolute;height:28.8px;top:13.6px;left:27.24%;z-index:2;object-fit:contain;transition:left .5s}
.chanel-search-component .filter-container .search.input-focus{left:2.24%;transition:left .5s}
.chanel-search-component .filter-container .cancel{position:absolute;width:16px;height:16px;top:20px;right:1.4%;z-index:2;transition:opacity .5s;opacity:0;cursor:pointer}
.chanel-search-component .filter-container .cancel.input-focus{opacity:1;transition:opacity .5s}
.chanel-search-component .filter-container .input-filter{box-sizing:border-box;padding-left:calc(2.5% + 28.8px);padding-right:2.92%;width:75%;border:1px solid #9e9e9e;border-left:0;border-radius:0 5px 5px 0;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:19.2px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:56px;letter-spacing:normal;color:#9b9b9b;z-index:1;transition:width .5s;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.chanel-search-component .filter-container .input-filter:focus{border-radius:5px;border:1px solid #009fdb;box-shadow:0 0 3px 0 rgba(0,174,239,0.5);outline:0;transition:width .5s;width:100%}
.chanel-search-component .channels{box-sizing:border-box;width:95%;margin:43px 0;display:grid;grid-template-columns:repeat(auto-fill,minmax(93.8px,1fr));grid-gap:22.2px}
.chanel-search-component .channels.justify-center{display:flex;justify-content:center;flex-wrap:wrap}
.chanel-search-component .channels.justify-center .channel{width:93.8px;margin:11px}
.chanel-search-component .channels .channel{display:flex;justify-content:space-between;align-items:center;flex-direction:column;width:100%;box-sizing:border-box;height:108.6px;border-radius:5px;border:1px solid rgba(158,158,158,0.5)}
.chanel-search-component .channels .channel .logo{margin-top:20.8px;height:26px;object-fit:contain}
.chanel-search-component .channels .channel .name{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12.7px;font-weight:bold;font-style:normal;font-stretch:normal;line-height:1.44;letter-spacing:normal;text-align:center;color:#000}
.chanel-search-component .channels .channel .number{margin-bottom:10px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12.7px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.44;letter-spacing:normal;text-align:center;color:#000}
.chanel-search-component .channels .channel.pointer{cursor:pointer}
.chanel-search-component .channels .channel.disabled{opacity:.5}
.chanel-search-component .see-more-button{align-items:center;display:none;flex-direction:column;justify-content:flex-end;margin-bottom:55px;transform:translateY(-504px);width:100%}
.chanel-search-component .see-more-button .rectangle{width:100%;height:504px;background-image:linear-gradient(to bottom,rgba(255,255,255,0),#fff)}
.chanel-search-component .see-more-button .button{border-radius:5px;height:48px;width:156px}
.chanel-search-component .promo-tooltip{display:none;position:fixed;top:50%;left:50%;width:155px;height:72px;border-radius:36px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);background-color:#0073ae;flex-direction:column;justify-content:center;align-items:center;z-index:5}
.chanel-search-component .promo-tooltip.show-tooltip{display:flex}
.chanel-search-component .promo-tooltip div{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;text-align:center;color:#fff;margin:0 36px}
.chanel-search-component .promo-tooltip a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;text-align:center;color:#fff}
@media only screen and (max-width:768px){.chanel-search-component{margin-bottom:-504px}
.chanel-search-component.hide-filter{margin-bottom:0}
.chanel-search-component.finish-paginator{margin-bottom:0}
.chanel-search-component .filter-container{margin-top:28px}
.chanel-search-component .filter-container .filter-options{width:40%}
.chanel-search-component .filter-container .filter-select{width:40%}
.chanel-search-component .filter-container .input-filter{width:60%;padding-left:calc(9.66% + 28.8px)}
.chanel-search-component .filter-container .search{left:49%}
.chanel-search-component .filter-container .search.input-focus{left:9%;transition:left .5s}
.chanel-search-component .channels{margin:54.4px 0}
}
@media only screen and (max-width:480px){.chanel-search-component .filter-container{flex-direction:column;height:fit-content}
.chanel-search-component .filter-container .option{margin-left:6.25%}
.chanel-search-component .filter-container .option .icon{margin-left:0}
.chanel-search-component .filter-container .option .text{margin-left:26%}
.chanel-search-component .filter-container .filter-options{width:100%}
.chanel-search-component .filter-container .filter-select{border-radius:5px;height:56px;width:100%}
.chanel-search-component .filter-container .filter-select .dtv-public-icon-more{margin-right:3.39%}
.chanel-search-component .filter-container .filter-select.open{border-radius:5px 5px 0 0}
.chanel-search-component .filter-container .filter-select.input-focus{border-radius:5px;border-width:1px;width:100%;transition:none}
.chanel-search-component .filter-container .input-filter{border-radius:5px;border:1px solid #9e9e9e;font-size:17px;margin:24px 0;height:56px;width:100%;padding-left:16.2%;padding-right:10%}
.chanel-search-component .filter-container .search{height:26px;top:95px;left:6.25%}
.chanel-search-component .filter-container .search.input-focus{left:6.25%;transition:none}
.chanel-search-component .filter-container .cancel{top:100px;right:5.39%}
.chanel-search-component .channels{margin:24.4px 0}
}
.cds-learn-more-links-container{display:-webkit-box;display:-ms-flexbox;display:flex;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-top:47px;margin-bottom:72px}
.cds-learn-more-links-container .component-title{width:90%;margin-bottom:36px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:36px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.17;letter-spacing:normal;display:flex;justify-content:center}
.cds-learn-more-links-container .component-title.title-container-dark{color:#242424}
.cds-learn-more-links-container .component-title.title-container-dark .dtv-public-icon-book{color:#0073ae}
.cds-learn-more-links-container .component-title.title-container-light{color:#fff}
.cds-learn-more-links-container .component-title span{margin-right:12px}
.cds-learn-more-links-container .component-title span::before{font-size:28px !important}
.cds-learn-more-links-container .cds-description{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.08;letter-spacing:normal;text-align:center;color:#000;margin-bottom:24px}
.cds-learn-more-links-container .cds-slider-container{width:calc(100% - 48px);box-sizing:border-box;margin:0 24px;padding:12px 0;position:relative}
.cds-learn-more-links-container .cds-slider-container .slick-track{display:flex;align-items:stretch;min-height:162px}
.cds-learn-more-links-container .cds-slider-container .next-arrow,.cds-learn-more-links-container .cds-slider-container .prev-arrow{position:absolute;border:0;z-index:5;cursor:pointer;top:calc(50% - 24px);background-color:#d8d8d8;width:49px;height:49px;border-radius:50%;display:-webkit-box !important;display:-ms-flexbox !important;display:flex !important;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.cds-learn-more-links-container .cds-slider-container .next-arrow.slick-disabled,.cds-learn-more-links-container .cds-slider-container .prev-arrow.slick-disabled{display:none !important}
.cds-learn-more-links-container .cds-slider-container .prev-arrow{left:-24px}
.cds-learn-more-links-container .cds-slider-container .next-arrow{right:-24px}
.cds-learn-more-links-container .cds-slider-container .cds-link-card:first-child{margin-left:0 !important}
.cds-learn-more-links-container .cds-slider-container .cds-link-card{display:inline-block;box-sizing:border-box;width:324px;height:unset;border-radius:5px;box-shadow:0 8px 16px 0 rgba(0,0,0,0.1);background-color:#fff;margin:12px 0 12px 24px !important;padding:25px 35px 24px;text-decoration:none}
.cds-learn-more-links-container .cds-slider-container .cds-link-card .card-title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.71;letter-spacing:normal;color:#0073ae}
.cds-learn-more-links-container .cds-slider-container .cds-link-card .card-description{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.4;letter-spacing:normal;color:#242424}
@media only screen and (max-width:768px){.cds-learn-more-links-container .component-title{margin-bottom:27px}
.cds-learn-more-links-container .cds-description{font-size:16px;line-height:2.13;margin-bottom:34px;padding:0 16px}
.cds-learn-more-links-container .cds-slider-container{box-sizing:border-box}
.cds-learn-more-links-container .cds-slider-container .slick-dots{color:#000}
.cds-learn-more-links-container .cds-slider-container .slick-dots button::before{font-size:20px}
.cds-learn-more-links-container .cds-slider-container .slick-list{padding:0 !important}
}
@media only screen and (max-width:480px){.cds-learn-more-links-container .component-title{font-size:22px;line-height:1.17}
.cds-learn-more-links-container .cds-description{font-size:16px;font-weight:normal;line-height:1.88}
}
@media(min-width:1440px){.carousel-container .slick-track{left:-16.5%}
}
@media(min-width:480px) and (max-width:714px){.carousel-container .slick-track{left:-48%}
}
.carousel-container{background-color:#1d1d1d;background-size:cover;margin:0 auto;max-width:1440px;box-sizing:border-box}
.carousel-container .slick-active{margin:10px 6px}
.carousel-container .slick-slide:not(.slick-active){margin:10px 6px;opacity:.2}
.carousel-container .slick-center{transform:scale(1)}
.carousel-container .slick-prev,.carousel-container .slick-next{font-size:0;position:absolute;top:50%;display:block;padding:0;cursor:pointer;border:0;outline:0;right:2rem;border-radius:50%;color:#000;background:#d8d8d8;width:49px;height:49px;line-height:.55}
.carousel-container .slick-prev::before,.carousel-container .slick-next::before{font-family:"dtv-public-sites-icons";font-size:45px;color:#000}
.carousel-container .slick-prev{left:24px;text-align:left;z-index:1}
.carousel-container .slick-prev::before{left:.25em;content:'\e408'}
.carousel-container .slick-next{right:24px;text-align:right;z-index:1}
.carousel-container .slick-next::before{left:0;content:'\e409'}
.carousel-container .slick-prev:hover,.carousel-container .slick-next:hover,.carousel-container .slick-prev:focus,.carousel-container .slick-next:focus{outline:0;background:#fff;color:#555}
.carousel-container .slider .slide{cursor:pointer;outline:0}
.carousel-container .slider .slide .slide-image{height:321px;width:212px;background-size:cover;border-radius:5px;margin-left:auto;margin-right:auto}
.carousel-container .slider .slide .slide-image .slide-badge{background-color:#fff;position:relative;float:right;padding:4px 6px;margin:10px;border-radius:15.7px}
.carousel-container .slider .slide .slide-image .slide-badge p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:10px;font-weight:500;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;text-align:center;color:#0073ae;margin:0}
.carousel-container .slider .slide .slide-text{color:#fff;margin-left:auto;margin-right:auto;width:212px}
.carousel-container .slider .slide .slide-text h6{margin:5px 0 0}
.carousel-container .slider .slide .slide-text p{margin:0;font-size:14px}
.carousel-container .slider .slide .slide:not(.slick-active){cursor:pointer}
.carousel-container .slider .slide .slide-image:hover{box-sizing:border-box;box-shadow:0 0 7px 0 #00aeef;border:solid 1.2px #009fdb}
.kit-container{display:flex;padding:3rem 0;justify-content:center}
.kit-container>.kit-image{min-width:300px;height:402px;margin-right:36px}
.kit-container>.kit-image>div{height:100%}
.kit-container>.kit-image>div>img{height:100%;width:100%;object-fit:contain}
.kit-container>.kit-card{width:332px}
@media only screen and (max-width:768px){.kit-container{flex-direction:column;align-items:center}
.kit-container>.kit-image{width:90%;height:auto;margin-right:0}
.kit-container>.kit-image>div{height:100%}
.kit-container>.kit-image>div>img{width:100%}
.kit-container>.kit-card{width:100%}
}
.solid-field-container{display:flex;box-sizing:border-box;align-items:flex-start;flex-direction:column;width:100%;padding:1rem 0;min-height:285px}
.solid-field-container .icons-container{display:flex;justify-content:center;align-items:center;margin-bottom:12px}
.solid-field-container .icons-container img{height:28px;object-fit:contain}
.solid-field-container .icons-container i{margin:0 .4rem;font-size:32px;color:#00aeef}
.solid-field-container .title{text-align:left;margin-bottom:14px}
.solid-field-container .title a{display:flex;align-items:center;font-weight:500;font-size:24px;line-height:1.17;color:#242424;text-decoration:none;-webkit-font-smoothing:antialiased;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.solid-field-container .title a:hover{color:#0073ae}
.solid-field-container .title .chevron{border-left:2px solid #00aeef;border-bottom:2px solid #00aeef;width:8px;height:8px;margin-left:.5rem;transform:rotate(225deg)}
.solid-field-container .divider{margin-bottom:24px;display:block;width:100%;height:1px;background-color:#cfd8dc}
.solid-field-container .description{text-align:left;line-height:1.5;font-size:16px;-webkit-font-smoothing:antialiased;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin-bottom:24px;color:#000}
.solid-field-container .links{list-style:none;padding:0;margin:0 0 52px}
.solid-field-container .links li{font-size:16px;margin-bottom:5px;line-height:1.25;min-height:25px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;-webkit-font-smoothing:antialiased;display:flex;align-items:center}
.solid-field-container .links li a{color:#000;text-decoration:none;display:flex;align-items:center}
.solid-field-container .links li a .chevron{border-left:1.5px solid #00aeef;border-bottom:1.5px solid #00aeef;width:4px;height:4px;margin-right:16px;margin-left:16px;transform:rotate(225deg)}
.solid-field-container .links li a .badge{margin-left:6px;width:55.9px;height:15px;font-size:11px;font-weight:600;line-height:1.36;text-align:center;color:#d55600;border:solid 1px #d55600;border-radius:3px;text-transform:uppercase}
.solid-field-container .links li:hover{border-radius:1px;background-color:#e4effb}
.solid-field-container .links li:hover a{font-weight:600;color:#005993}
.solid-field-container .links li:hover a .chevron{margin-right:8px;margin-left:8px}
@media only screen and (max-width:768px){.solid-field-container{align-items:center}
.solid-field-container .icons-container{margin-bottom:25px}
.solid-field-container .title{text-align:center;margin-bottom:17px}
.solid-field-container .title a{font-size:26px;line-height:1.23}
.solid-field-container .title .chevron{display:none}
.solid-field-container .description{text-align:center;margin-bottom:34px}
}
.slider-subcategory-container{background-size:cover;padding:3rem 12px;background-color:#fafafa}
@media(min-width:768px){.slider-subcategory-container .title-container .description{display:none}
}
@media(min-width:1440px){.slider-subcategory-container .offer-card-container{width:1086px}
}
.slider-subcategory-container .PrevArrow,.slider-subcategory-container .NextArrow{position:absolute;top:50%;left:0;border:0 none;margin-top:-22.5px;text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#00aeef;z-index:5;cursor:pointer;width:18px;height:32px;border-radius:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}
.slider-subcategory-container .PrevArrow .arrow,.slider-subcategory-container .NextArrow .arrow{display:none;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:18px;height:32px}
.slider-subcategory-container .PrevArrow .arrow::before,.slider-subcategory-container .NextArrow .arrow::before{font-size:60px}
@media(min-width:768px){.slider-subcategory-container .PrevArrow .arrow,.slider-subcategory-container .NextArrow .arrow{display:-webkit-box;display:-ms-flexbox;display:flex}
}
.slider-subcategory-container .PrevArrow.slick-disabled,.slider-subcategory-container .NextArrow.slick-disabled{display:none !important}
.slider-subcategory-container .PrevArrow::before,.slider-subcategory-container .NextArrow::before{content:''}
.slider-subcategory-container .NextArrow{left:unset;right:0}
.slider-subcategory-container .slick-track{display:flex;align-items:stretch;min-height:389px}
.slider-subcategory-container .slick-slide{display:flex !important;height:unset}
.slider-subcategory-container .slick-slide .offer-card{width:95%;min-width:95%;min-height:465px}
@media(min-width:768px){.slider-subcategory-container .slick-slide .offer-card{width:33%;max-width:330px}
}
@media(min-width:970px){.slider-subcategory-container .slick-slide .offer-card{min-height:425px}
}
@media(min-width:1440px){.slider-subcategory-container .slick-slide .offer-card{min-height:389px}
}
.offers-container{padding:3rem 0;background-color:#fafafa;background-position-x:left;background-position-y:top;background-repeat:no-repeat}
.offers-container>.offer-card-container{display:flex;justify-content:center;flex-wrap:wrap;box-sizing:border-box}
@media only screen and (max-width:768px){.offers-container>.offer-card-container{display:block;padding:0 5rem}
}
@media only screen and (max-width:480px){.offers-container>.title-container{padding:0 1rem}
.offers-container>.offer-card-container{display:block;padding:0 1rem}
}
.callmenow-container{width:100%;height:100%;justify-content:center;align-items:center;background:rgba(0,0,0,0.5);z-index:2000}
.callmenow-container.close{display:none}
.callmenow-container.open{display:flex;position:fixed;top:0}
.callmenow-container .callme-now-class{min-height:448px;min-width:807px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:32px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;text-align:center;color:#f9f9f9;background:#fff;border-top-left-radius:5px;border-top-right-radius:5px;max-height:100vh;display:flex;flex-direction:column}
.callmenow-container .callme-now-class .callme-header{height:80px;border-top-left-radius:5px;border-top-right-radius:5px;background:#005993;position:relative;display:flex;justify-content:center;align-items:center}
.callmenow-container .callme-now-class .callme-header .dtv-public-icon-close{position:absolute;right:24px;top:24px;cursor:pointer}
.callmenow-container .callme-now-class .callme-content{padding:40px 32px;border:1px solid rgba(0,0,0,0.2);overflow-y:auto}
.callmenow-container .callme-now-class .callme-content::-webkit-scrollbar{width:8px}
.callmenow-container .callme-now-class .callme-content::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.3)}
.callmenow-container .callme-now-class .callme-content::-webkit-scrollbar-thumb{background-color:#bcbec5}
.callmenow-container .callme-now-class .callme-content .title{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;line-height:1.2;color:#00182e;margin-bottom:40px}
.callmenow-container .callme-now-class .callme-content .information-box{height:104px;border-radius:5px;background-color:#f1f8e9;padding:15px 14.8px 17px 13.8px;margin-bottom:40px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:1.5;text-align:center;color:#000;display:flex;flex-direction:column;justify-content:center}
.callmenow-container .callme-now-class .callme-content .information-box p{margin:0}
.callmenow-container .callme-now-class .callme-content .information-box p:first-of-type::before{content:"\e913";font-family:"dtv-public-sites-icons" !important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;color:#8bc34a;margin-right:5px;width:16px;height:16px}
.callmenow-container .callme-now-class .callme-content .phone-contact{text-align:left;width:100%}
.callmenow-container .callme-now-class .callme-content .phone-contact .phone-label{font-size:16px;line-height:1.5;color:#242424;transform:translateY(16px);display:flex;flex-direction:column-reverse}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container{display:flex}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container input{width:100%;height:48px;border-radius:5px;max-height:48px;font-size:16px}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container .button{width:100%;min-height:48px;max-height:48px;border:1px;border-radius:5px;background:transparent;display:inline-block;-webkit-box-shadow:inset 0 0 0 1px #fff;box-shadow:inset 0 0 0 1px #fff;color:#fff;font-size:16px}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container .button.active{background:#0073ae;color:#f9f9f9;-webkit-box-shadow:none;box-shadow:none;border:0}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container .button[disabled]{background:#9e9e9e;color:rgba(0,0,0,0.5);font-weight:500}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container .button:not([disabled]):hover{background:#0090da}
@media only screen and (max-width:480px){.callmenow-container .callme-now-class{min-width:100%;display:flex;flex-direction:column}
.callmenow-container .callme-now-class .callme-header{height:104px;font-size:26px;line-height:1.35}
.callmenow-container .callme-now-class .callme-header .callme-header--text{max-width:262px;margin:0 60px}
.callmenow-container .callme-now-class .callme-content{padding:16px 11px 0 12px;flex:1}
.callmenow-container .callme-now-class .callme-content .title{padding:0 22px;margin-bottom:31px}
.callmenow-container .callme-now-class .callme-content .information-box{margin-bottom:45px}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container{flex-direction:column}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container input{min-height:48px;border-radius:5px}
.callmenow-container .callme-now-class .callme-content .phone-contact .phonetext-container .button{width:100%;border-radius:5px;margin-bottom:24px}
}
.callme-later-component{width:100%;height:100%;justify-content:center;background:rgba(0,0,0,0.5);z-index:2000;align-items:center}
.callme-later-component.close{display:none}
.callme-later-component.open{display:flex;position:fixed;top:0}
.callme-later-component .callme-later-container{position:fixed;left:0;right:0;margin:0 auto;max-width:944px;max-height:100vh;display:flex;flex-direction:column}
.callme-later-component .callme-later-container .callme-later-header{border-top-left-radius:5px;border-top-right-radius:5px;background:#005993;position:relative;display:flex;justify-content:center;align-items:center;min-height:80px}
.callme-later-component .callme-later-container .callme-later-header .callme-later-header-title h3{color:#f9f9f9;font-weight:unset}
.callme-later-component .callme-later-container .callme-later-header .callme-later-header-icon{position:absolute;right:24px;cursor:pointer;color:#fff}
.callme-later-component .callme-later-container .callme-later-title .callme-later-text>p{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:20px;letter-spacing:normal;text-align:center;color:#00182e;margin-bottom:8px}
.callme-later-component .callme-later-container .callme-later-title .callme-later-subtext>p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:italic;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;color:#4a4a4a;margin-bottom:16px}
.callme-later-component .callme-later-container .callme-later-content{padding:16px 32px;background-color:#fff;overflow-y:auto}
.callme-later-component .callme-later-container .callme-later-content::-webkit-scrollbar{width:8px}
.callme-later-component .callme-later-container .callme-later-content::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.3)}
.callme-later-component .callme-later-container .callme-later-content::-webkit-scrollbar-thumb{background-color:#bcbec5}
.callme-later-component .callme-later-container .callme-later-content .directv-input-wrapper{margin-top:12px}
.callme-later-component .callme-later-container .check-terms-container{display:flex;flex-wrap:wrap}
.callme-later-component .callme-later-container .check-terms-container .aditional-option--text{transform:translateY(-5px);width:90%}
.callme-later-component .callme-later-container .check-terms-container .aditional-option--text span>p,.callme-later-component .callme-later-container .check-terms-container .aditional-option--text span>div{margin-top:0;font-size:16px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.callme-later-component .callme-later-container .check-terms-container .aditional-option--text span>p a,.callme-later-component .callme-later-container .check-terms-container .aditional-option--text span>div a{text-decoration:none;font-weight:700;color:#0073ae;text-decoration:underline}
.callme-later-component .callme-later-container .check-terms-container .aditional-option--text span>p a:hover,.callme-later-component .callme-later-container .check-terms-container .aditional-option--text span>div a:hover{color:#00aeef}
.callme-later-component .callme-later-container .check-terms-container .aditional-option--text span>p a:visited,.callme-later-component .callme-later-container .check-terms-container .aditional-option--text span>div a:visited{color:#0073ae}
.callme-later-component .callme-later-container .check-terms-container .check-error-container{width:100%}
.callme-later-component .callme-later-container .check-terms-container .check-error-container .directv-input-error{color:#e53935;display:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;margin-top:10px}
.callme-later-component .callme-later-container .check-terms-container .check-error-container .directv-input-error.show{display:block;width:100%}
.callme-later-component .callme-later-container .check-terms-container .check-error-container .directv-input-error.show ~ .directv-input-description{display:none}
@media only screen and (min-width:970px){.callme-later-component .callme-later-container .callme-later-content{min-width:880px}
}
@media only screen and (max-width:768px){.callme-later-component{align-items:baseline}
.callme-later-component>div{width:100%}
.callme-later-component.open{position:fixed}
.callme-later-component .callme-later-container{overflow:scroll;position:static;height:100%;-webkit-overflow-scrolling:touch}
.callme-later-component .callme-later-container .callme-later-content{padding:16px 12px;background-color:#fff}
.callme-later-component .callme-later-container .callme-later-content .directv-input-wrapper .directv-input-error{margin-top:8px;line-height:1.5}
.callme-later-component .callme-later-container .callme-later-header .callme-later-header-title h3{color:#fff;font-size:26px;padding:48px;text-align:center}
}
.aem-AuthorLayer-Edit .callme-later-component .callme-later-container{position:static}
.callme-later-container-alert{position:fixed;top:0;left:0;width:100%;border-radius:0;z-index:1030}
.callme-later-container-alert .alert{border-radius:0}
.browser-compatible{background-color:#d10d39;color:#fff;display:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-stretch:normal;font-style:normal;font-weight:500;letter-spacing:normal;line-height:1.5;padding-bottom:16px;position:relative;text-align:center}
.browser-compatible .title{padding-top:16px;max-width:94%}
.browser-compatible .text{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;max-width:94%}
.browser-compatible span{position:absolute;right:34px;top:33px;cursor:pointer}
.browser-compatible.compatible{display:none}
.browser-compatible.incompatible{display:block;position:relative;z-index:1070}
.cmp-breadcrumb{box-sizing:border-box;display:block;margin:0 auto;max-width:1440px;padding:0 9px;width:100%}
.cmp-breadcrumb.hide{display:none}
.cmp-breadcrumb__list{align-items:baseline;display:flex}
.cmp-breadcrumb__sub-list{display:none}
.cmp-breadcrumb__item{color:#00182e;display:inline-flex;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.14;padding:0 0 0 16px;vertical-align:baseline}
.cmp-breadcrumb__item:first-child{padding-left:12px}
.cmp-breadcrumb__item-link{color:#00182e}
.cmp-breadcrumb__item-link.cmp-breadcrumb__item-home{display:block}
.cmp-breadcrumb__item-link.cmp-breadcrumb__item-back{display:none}
.cmp-breadcrumb__item--active{font-weight:500}
.cmp-breadcrumb__icon{color:#00aeef;margin:0 0 0 16px}
.cmp-breadcrumb-black .cmp-breadcrumb__item,.cmp-breadcrumb-black .cmp-breadcrumb__item-link{color:#00182e}
.cmp-breadcrumb-white .cmp-breadcrumb__item,.cmp-breadcrumb-white .cmp-breadcrumb__item-link{color:#fff}
.cmp-breadcrumb-absolute{position:absolute;z-index:10}
.cmp-breadcrumb-static{position:static}
@media only screen and (max-width:970px){.cmp-breadcrumb{padding:0 15px}
.cmp-breadcrumb__item:first-child{padding-left:0}
}
@media only screen and (max-width:480px){.cmp-breadcrumb__sub-list{background:#0073ae;border-radius:5px;box-shadow:0 8px 16px 0 rgba(0,0,0,0.001);display:block;left:-5px;max-height:0;position:absolute;top:30px;transition:all .35s ease-out;overflow:hidden;width:214px;z-index:900}
.cmp-breadcrumb__sub-list.show{height:auto;max-height:300px;transition:max-height .35s ease-out;visibility:visible}
.cmp-breadcrumb__sub-item{border-bottom:1px solid #9e9e9e;height:52px;width:100%}
.cmp-breadcrumb__sub-item:first-child{padding-top:4px;font-weight:500}
.cmp-breadcrumb__sub-item:last-child{border-bottom:0}
.cmp-breadcrumb__sub-link{color:#fff;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;line-height:3;text-decoration:none;padding:0 0 0 15px}
.cmp-breadcrumb__item{display:none;padding:0 0 0 16px}
.cmp-breadcrumb__item:first-child{padding-left:0;position:relative}
.cmp-breadcrumb__item:first-child,.cmp-breadcrumb__item:last-child{display:inline-flex}
.cmp-breadcrumb__item-link.cmp-breadcrumb__item-home{display:inline-flex}
.cmp-breadcrumb__item-link.cmp-breadcrumb__item-home-hide{display:none}
.cmp-breadcrumb__item-link.cmp-breadcrumb__item-back{display:none}
.cmp-breadcrumb__item-link.cmp-breadcrumb__item-back-show{display:inline-flex}
.cmp-breadcrumb__icon{margin:0 0 0 16px}
}
.aem-AuthorLayer-Edit .breadcrumb ~ .new{margin:0;height:0}
.modal-base-video{position:absolute;width:100%;height:100%;left:0;top:0;display:none}
.modal-base-video .base-modal-wrapper.open,.modal-base-video .base-modal-wrapper.close{left:0}
.modal-base-video .modal-container .modal-content{position:relative}
.modal-base-video .video-slider{width:100%;height:360px;position:relative;overflow:hidden}
.modal-base-video .item-video{position:absolute;top:0;left:100%;height:100%;width:100%;text-align:center;overflow:hidden}
.modal-base-video .item-video iframe{height:100% !important}
.modal-base-video .item-video:first-child{left:0}
.modal-base-video .slide-arrow{position:absolute;top:40%;left:5%;width:35px;height:35px;cursor:pointer;background-color:#d8d8d8;border-radius:100px;transition:all .5s;text-align:center}
.modal-base-video .slide-arrow:hover{background-color:#1b2c5d}
.modal-base-video div.slide-arrow:hover:after,.modal-base-video div.slide-arrow.right:hover:after{border:solid #fff;border-width:0 3px 3px 0}
.modal-base-video .slide-arrow:after,.modal-base-video .slide-arrow:hover:after{content:'';border:solid #000;border-width:0 3px 3px 0;display:inline-block;padding:6px;border-radius:2px;transform:translateX(4px) rotate(135deg);-webkit-transform:translateX(4px) rotate(135deg);margin:9px 0}
.modal-base-video .slide-arrow.right:after,.modal-base-video .slide-arrow.right:hover:after{content:'';border:solid #000;border-width:0 3px 3px 0;display:inline-block;padding:6px;border-radius:2px;transform:translateX(-4px) rotate(-45deg);-webkit-transform:translateX(-4px) rotate(-45deg);margin:9px 0}
.modal-base-video .slide-arrow.right{left:auto;right:5%}
.base-video-slider-container{margin:90px 0}
.base-video-slider-container .slick-slide .video-card-slide{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;padding:0 25px;cursor:pointer}
.base-video-slider-container .slick-slide .video-card-slide a.ant-action{display:block;text-decoration:none;color:inherit}
.base-video-slider-container .slick-slide .video-card-slide .video-slider-pic img{margin-bottom:16px;width:100%;height:100%;object-fit:cover}
.base-video-slider-container .slick-slide .video-card-slide .video-slider-tag{font-size:18px;margin-bottom:16px;color:#757575}
.base-video-slider-container .slick-slide .video-card-slide h2{font-size:16px;margin-bottom:16px}
.base-video-slider-container .slick-slide .video-card-slide .video-slider-desc{font-size:16px;margin-bottom:16px;line-height:1.5;text-align:justify}
.base-video-slider-container .slick-dots{margin-top:24px}
.base-video-slider-container .slick-arrow:hover{background-color:#1b2c5d}
.base-video-slider-container .slick-arrow:hover::before{content:'';border:solid #fff;border-width:0 3px 3px 0;display:inline-block;padding:6px;border-radius:2px;opacity:1}
.base-video-slider-container .slick-arrow{background-color:#d8d8d8;width:35px;height:35px;border-radius:50%;z-index:1;top:50%;transition:all .5s}
.base-video-slider-container .slick-arrow::before{content:'';border:solid #000;border-width:0 3px 3px 0;display:inline-block;padding:6px;border-radius:2px;opacity:1}
.base-video-slider-container .slick-arrow.slick-prev::before{transform:translateX(4px) rotate(135deg);-webkit-transform:translateX(4px) rotate(135deg)}
.base-video-slider-container .slick-arrow.slick-next::before{transform:translateX(-4px) rotate(-45deg);-webkit-transform:translateX(-4px) rotate(-45deg)}
@media only screen and (max-width:768px){.modal-base-video .slide-arrow.right,.modal-base-video .slide-arrow.left{top:100%}
}
@media only screen and (max-width:520px){.modal-base-video .video-slider{height:320px}
.modal-base-video .item-video iframe{width:100%}
.modal-base-video .slide-arrow.right,.modal-base-video .slide-arrow.left{top:100%}
.modal-base-video .modal-container .modal-content{padding:30px 10px}
}
@media only screen and (max-width:480px){.social-network-module-container{margin:0 12px}
}
.social-network-module{display:flex;justify-content:center;cursor:pointer}
.social-network-module .social-title-container{display:flex;flex-direction:column;justify-content:center;margin-left:16px}
.social-network-module:hover .social-title-container .social-network-subtitle div{color:#00aeef}
@media only screen and (min-width:760px) and (max-width:1125px){.social-network-module .social-title-container .social-network-subtitle .heading-container div{font-size:11px}
}
.base-table{margin:40px 0}
.base-table .base-table-container{width:100%;margin:0 auto;box-sizing:border-box;border-radius:5px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);border:solid 1px #cfd8dc;background-color:#fff}
.base-table .base-table-container .table-head{border-bottom:solid 1px #cfd8dc}
.base-table .base-table-container .table-head .aem-Grid .aem-GridColumn{padding:24px 0;border-right:0}
.base-table .base-table-container .table-body{overflow-y:auto;max-height:384px}
.base-table .base-table-container .table-body::-webkit-scrollbar{width:10px;background-color:#fff}
.base-table .base-table-container .table-body::-webkit-scrollbar-thumb{border-radius:5px;background-color:#cfd8dc}
.base-table .base-table-container .table-body .aem-Grid .responsivegrid.aem-GridColumn .aem-Grid{display:flex}
.base-table .base-table-container .table-body .aem-Grid .responsivegrid.aem-GridColumn .aem-Grid .aem-GridColumn{border-right:solid 1px #cfd8dc;padding:16px 0}
.base-table .base-table-container .table-body .aem-Grid .responsivegrid.aem-GridColumn .aem-Grid .aem-GridColumn:last-child{border-right:0}
.base-table .base-table-container .table-body .aem-Grid .responsivegrid.aem-GridColumn:nth-child(odd){background-color:#fafafa}
.base-table .base-table-container .table-pagging{display:flex;flex-direction:row;align-items:center;padding:8px;margin:0 auto;justify-content:center}
.base-table .base-table-container .table-pagging .table-pagging-left{transform:rotate(90deg);padding:8px;cursor:pointer}
.base-table .base-table-container .table-pagging .table-pagging-left::after{content:'\e5cf';font-family:'dtv-public-sites-icons';font-size:24px;border-radius:16px;background-color:#000;color:#fff}
.base-table .base-table-container .table-pagging .table-pagging-number{height:24px;width:24px;border-radius:12px;background-color:#000;color:#fff;text-align:center;line-height:24px;vertical-align:middle}
.base-table .base-table-container .table-pagging .table-pagging-right{transform:rotate(270deg);padding:8px;cursor:pointer}
.base-table .base-table-container .table-pagging .table-pagging-right::after{content:'\e5cf';font-family:'dtv-public-sites-icons';font-size:24px;border-radius:16px;background-color:#000;color:#fff}
.recharge-points-container .recharge-points-stores{margin-bottom:64px}
.recharge-points-container .directv-input-wrapper .directv-input{height:40px}
.recharge-points-container .ui-widget.directv-input-wrapper .ui-button{height:40px}
.recharge-points-container .ui-menu{padding-left:0}
.recharge-points-container .ui-menu .ui-menu-item{height:unset;margin:0;cursor:pointer;list-style-image:url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)}
.recharge-points-container .ui-menu .ui-menu-item .ui-menu-item-wrapper{position:relative;padding:3px 1em 3px .4em}
.recharge-points-container .recharge-points-location .ui-menu-item.none{display:none}
.recharge-points-container>.container{margin:0 12px;grid-gap:unset}
.recharge-points-container .recharge-points-description{margin-bottom:24px}
.recharge-points-container .base-pagging{display:flex;flex-direction:row;align-items:center;padding:8px;margin:0 auto;justify-content:center}
.recharge-points-container .base-pagging .base-pagging-left{transform:rotate(90deg);padding:8px;cursor:pointer}
.recharge-points-container .base-pagging .base-pagging-left::after{content:'\e5cf';font-family:'dtv-public-sites-icons';font-size:24px;border-radius:16px;background-color:#000;color:#fff}
.recharge-points-container .base-pagging .base-pagging-number{height:24px;width:24px;border-radius:12px;background-color:#000;color:#fff;text-align:center;line-height:1.25;vertical-align:middle}
.recharge-points-container .base-pagging .base-pagging-right{transform:rotate(270deg);padding:8px;cursor:pointer}
.recharge-points-container .base-pagging .base-pagging-right::after{content:'\e5cf';font-family:'dtv-public-sites-icons';font-size:24px;border-radius:16px;background-color:#000;color:#fff}
.recharge-points-container .recharge-points-table{display:none}
.recharge-points-container .recharge-points-accordion{display:none}
.recharge-points-container .recharge-points-initial-no-results{margin:48px 0}
.recharge-points-container .recharge-points-no-results{margin:48px 0;display:none}
.prepaid-recharge-container{width:100%;display:flex;align-items:center;flex-direction:column;padding:32px;box-sizing:border-box;background-color:#fafafa;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);border-radius:5px}
.prepaid-recharge-container .card-title{text-align:center;width:100%;font-size:24px;line-height:1.14;color:#242424;font-weight:500;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.prepaid-recharge-container .prepaid-recharge-body{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;width:60%}
.prepaid-recharge-container .input-title{font-size:16px;line-height:1.5;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;text-align:left;width:100%;margin-top:16px}
.prepaid-recharge-container .input-smart-card{width:100%;margin-top:8px}
.prepaid-recharge-container .helper-text{margin-top:24px;width:100%}
.prepaid-recharge-container .directv-input-error{margin-top:24px;width:100%}
.prepaid-recharge-container .directv-input-error-2,.prepaid-recharge-container .directv-input-error-code{color:#e53935;display:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;margin-top:24px;width:100%}
.prepaid-recharge-container .directv-input-error-2.show,.prepaid-recharge-container .directv-input-error-code.show{display:block;width:100%}
.prepaid-recharge-container .directv-input-error-2.show ~ .directv-input-description,.prepaid-recharge-container .directv-input-error-code.show ~ .directv-input-description{display:none}
.prepaid-recharge-container .btn-smart-card{max-width:195px;margin-top:24px}
.prepaid-recharge-container input[type="radio"]{margin-top:10px}
.prepaid-recharge-container #hidden{position:absolute;margin-top:25px;margin-left:25px;z-index:-1}
@media only screen and (max-width:768px){.prepaid-recharge-container .prepaid-recharge-body{width:auto}
}
.offers-column-container{margin:40px auto}
.offers-column-container .offers-column-text{margin-bottom:40px}
.offers-column-container img{max-width:264px;width:100%;height:192px}
@media only screen and (max-width:970px){.offers-column-container img{height:120px}
}
@media only screen and (max-width:480px){.offers-column-container .offers-column-text{margin-bottom:24px}
.offers-column-container img{height:156px}
}
.mod-offerline{width:100%;max-width:100%;margin:0 auto}
.mod-offerline .mod-offerline-default{background:linear-gradient(309deg,#0086b4,#005993)}
.mod-offerline .mod-offerline-outlined{border:solid 1px #9e9e9e}
.mod-offerline .mod-offerline-container{border-radius:5px;padding:24px}
.mod-offerline .mod-offerline-container .mod-offerline-container--badge-icon{text-align:center}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text .mod-offerline-container--text-description{margin-top:32px;text-align:center}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--actions{text-align:center;margin-top:0}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--actions .mod-offerline-container--actions-button{margin-right:24px}
@media screen and (min-width:480px){.mod-offerline .mod-offerline-container{display:flex;justify-content:center;flex-direction:column;min-height:96px}
.mod-offerline .mod-offerline-container .mod-offerline-container--content{display:flex;flex-direction:row}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text{flex-grow:2}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text .mod-offerline-container--text-description{margin-top:0;text-align:left;color:#fff}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text .mod-offerline-container--text-description p{line-height:1.25}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--actions{flex-grow:1;margin:0 0 0 24px;display:flex;flex-direction:column;justify-content:center}
}
@media screen and (min-width:1024px){.mod-offerline .mod-offerline-container{padding:16px 16px;min-height:24px;flex-direction:row}
.mod-offerline .mod-offerline-container .mod-offerline-container--badge-icon{display:flex;flex-direction:column;justify-content:center;margin-right:24px}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text .mod-offerline-container--text-description{display:flex;flex-direction:column;justify-content:center}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text .mod-offerline-container--text-description p{line-height:1.25;font-size:18px}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text .mod-offerline-container--text-description p span{display:inline}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--actions{display:flex;align-items:center;flex-direction:row}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--actions a{transform:none}
}
@media screen and (max-width:1023px){.mod-offerline.third-btn-change .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--actions .mod-offerline-container--actions-button:nth-last-child(-n+2){margin-top:8px}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text .mod-offerline-container--text-description{margin-top:32px}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--actions .mod-offerline-container--actions-button{margin-right:0}
.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--actions .mod-offerline-container--actions-button:nth-child(2){margin-top:24px}
}
@media screen and (max-width:479px){.mod-offerline .mod-offerline-container .mod-offerline-container--content .mod-offerline-container--text .mod-offerline-container--text-description{margin-top:0;color:#fff}
}
.offer-filter-container{width:100%;display:flex;justify-content:center}
.offer-filter-container .component-content{max-width:1440px;width:100%;display:flex;flex-direction:column;align-items:center}
.offer-filter-container .component-content .filter-controls{width:100%;margin:24px auto;max-width:470px;box-sizing:border-box;padding:0 12px}
.offer-filter-container .component-content .filter-cards-container{width:100%;display:grid;grid-template-columns:repeat(auto-fill,minmax(330px,1fr))}
@media only screen and (max-width:480px){.offer-filter-container .component-content .filter-cards-container{grid-template-columns:repeat(auto-fill,minmax(300px,1fr))}
}
.mod-offer-banner{display:inline-block;flex-direction:row}
.mod-offer-banner .mod-offer-banner-default{background:linear-gradient(309deg,#0086b4,#005993)}
.mod-offer-banner .mod-offer-banner-container{border-radius:5px 5px 0 0;padding:24px 12px}
.mod-offer-banner .mod-offer-banner-container .mod-offer-banner-container--content .mod-offer-banner-container--text .mod-offer-banner-container--text-description{text-align:center;flex-flow:row nowrap;color:#fff}
.mod-offer-banner .mod-offer-banner-container .mod-offer-banner-container--content .mod-offer-banner-container--text .mod-offer-banner-container--text-description span{flex:1 1 auto;margin:0;line-height:1.25;display:inline-block}
.mod-offer-banner .mod-offer-banner-container .mod-offer-banner-container--content .mod-offer-banner-container--text .mod-offer-banner-container--text-description .mod-offer-banner-container--text-title{font-weight:700}
.mod-offer-banner .mod-offer-banner-container .mod-offer-banner-container--content .mod-offer-banner-container--text .mod-offer-banner-container--text-description p{flex:1 1 auto;margin:0;line-height:1.25;display:inline-block;font-size:20px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.mod-offer-banner .mod-offer-banner-container .mod-offer-banner-container--content .mod-offer-banner-container--text .mod-offer-banner-container--text-description p a{color:inherit}
.mod-offer-banner-calculator-container{margin-top:0 !important}
.hidde-offer-banner{display:none}
@media screen and (min-width:480px){.mod-offer-banner{font-size:20px}
.mod-offer-banner .mod-offer-banner-container{display:flex;justify-content:center;flex-direction:column}
.mod-offer-banner .mod-offer-banner-container .mod-offer-banner-container--content{display:flex;flex-direction:row}
.mod-offer-banner .mod-offer-banner-container .mod-offer-banner-container--content .mod-offer-banner-container--text{flex-grow:2}
}
@media screen and (min-width:1024px){.mod-offer-banner{font-size:20px}
.mod-offer-banner .mod-offer-banner-container{padding:24px 12px;flex-direction:row}
.mod-offer-banner .mod-offer-banner-container .mod-offer-banner-container--content .mod-offer-banner-container--text .mod-offer-banner-container--text-description{flex-direction:column;justify-content:center}
}
@media(max-width:969px) and (min-width:480px){.mod-offer-banner{max-width:453px;min-width:453px;font-size:20px}
}
@media screen and (min-width:969px){.mod-offer-banner{min-width:906px;max-width:906px;margin-top:48px}
}
@media screen and (max-width:767px){.mod-offer-banner{max-width:480px;min-width:320px;display:inline-block;flex-direction:row;margin-top:48px;margin-bottom:32px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px}
.mod-offer-banner .mod-offer-banner-container{border-radius:0;padding:24px 12px}
}
.image-cards-container .slick-slide>.image-card{margin:12px}
.image-cards-container>.slick-dots li{width:10px;height:10px;margin:0 15px}
.image-cards-container>.slick-dots li button{background:#c1c1c2;border-radius:calc(10px / 2);height:10px;width:10px;position:absolute}
.image-cards-container>.slick-dots li button.active-button{background:#fff;z-index:2;opacity:1;width:40px;left:-15px}
.image-cards-container>.slick-dots li button::before{content:'';height:10px;width:10px}
@media screen and (min-width:970px){.image-cards-container .slick-slide{width:360px}
.image-cards-container .slick-slide>.image-card{margin:6px}
.image-cards-container .slide-highlight{width:720px}
}
.features-container{margin:64px 0}
.features-container .features-text{margin:0 auto}
.features-container .features-text .features-text-subtitle{font-size:14px}
.features-container .features-text .features-text-subtitle p{margin-bottom:0}
.features-container .features-content{margin:0 auto;padding-top:16px}
.features-container .features-content .image-text{padding:0 12px}
.features-container .features-content .image-text .imageText-container .imageText-text p{font-size:14px}
@media only screen and (max-width:480px){.features-container{margin:64px 0}
}
.device-container{margin:16px}
.device-container .device-content .device-title-text{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;display:flex;justify-content:center;align-items:center;width:100%;color:#0073ae;cursor:pointer}
.device-container .device-content .device-title-text .device-title-left-line{flex:2;height:1px;background:linear-gradient(to right,rgba(0,115,174,0) 0,#0073ae 100%)}
.device-container .device-content .device-title-text .device-title-text-inner{flex:2;font-size:16px;line-height:1.33;text-align:center;padding:0 48px;color:#0073ae}
.device-container .device-content .device-title-text .device-title-text-inner .h1,.device-container .device-content .device-title-text .device-title-text-inner .h2,.device-container .device-content .device-title-text .device-title-text-inner .h3,.device-container .device-content .device-title-text .device-title-text-inner .h4,.device-container .device-content .device-title-text .device-title-text-inner .h5,.device-container .device-content .device-title-text .device-title-text-inner .h6{margin-bottom:0}
.device-container .device-content .device-title-text .device-title-right-line{flex:2;height:1px;background:linear-gradient(to right,#0073ae 0,rgba(0,115,174,0) 100%)}
.device-container .device-content .device-title-text .device-title-right-line::before{font-family:"dtv-public-sites-icons";font-size:24px;color:#0073ae;content:'\e900';position:absolute;transform:translate(-250%,-50%);cursor:pointer}
.device-container .device-content .device-title-text.active .device-title-right-line::before{font-family:"dtv-public-sites-icons";font-size:8px;color:#0073ae;content:'\e914';position:absolute;transform:translate(-400%,-50%);cursor:pointer}
@media only screen and (max-width:768px){.device-container{margin:0}
.device-container .device-content .device-title-text .device-title-right-line::before{transform:translate(-200%,-50%)}
.device-container .device-content .device-title-text.active .device-title-right-line::before{transform:translate(-300%,-50%)}
}
.check-list-container{margin:0;padding:0}
.check-list-container li{margin-bottom:32px;display:flex;flex-direction:row;align-items:baseline}
.check-list-container li span{margin-right:24px;transform:translateY(3px)}
.check-list-container li span::before{font-size:20px;color:#41be36}
.check-list-container li p{margin:0}
.check-list-container li p.offer{color:#c1570f}
.card-md-container{background:#fff;padding:32px 0 24px 0;border-radius:5px;margin-bottom:24px;min-height:362px;box-sizing:border-box;box-shadow:0 8px 16px 0 rgba(0,0,0,0.1)}
.card-md-container .card-md-content .card-md-content-image{margin-bottom:32px}
.card-md-container .card-md-content .card-md-content-image img{max-width:208px;max-height:208px}
.card-container .card-content .card-content-image{margin-bottom:32px}
.module-callme-later-component .module-callme-later-container .rich-text-links a{font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;text-decoration:none}
.module-callme-later-component .module-callme-later-container .rich-text-links a::after{font-family:"dtv-public-sites-icons";font-size:16px;content:'\e409';display:inline-block;text-decoration:none;transform:translateY(2px);white-space:nowrap}
.module-callme-later-component .module-callme-later-container .rich-text-links a[href^="http"]:not([href *="directv"])::after{font-family:"dtv-public-sites-icons";font-size:16px;content:'\e904';display:inline-block;text-decoration:none;transform:translate(5px,2px);white-space:nowrap}
.module-callme-later-component .module-callme-later-container .optional-selects{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin-right:12px;border-radius:5px;cursor:pointer;padding:5px 10px;height:45px}
.module-callme-later-component .module-callme-later-container .optional-selects.category-select{width:100%}
.module-callme-later-component .module-callme-later-container .optional-selects:disabled{opacity:.4}
.module-callme-later-component .module-callme-later-container .is-client-radio{width:100%;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px}
.module-callme-later-component .module-callme-later-container .is-client-radio .label{margin-right:12px}
.module-callme-later-component .module-callme-later-container .tooltip-on{box-sizing:border-box;padding:20px;background-color:#f1f8e9;border-radius:5px}
.module-callme-later-component .module-callme-later-container .tooltip-on>p{padding:0;margin:0;text-align:center}
.module-callme-later-component .module-callme-later-container .tooltip-on>p>a{color:#000}
.module-callme-later-component .module-callme-later-container .phone-container{display:flex}
.module-callme-later-component .module-callme-later-container .phone-container .phone-indicative-input{margin-right:12px;max-width:100px}
.module-callme-later-component .module-callme-later-container .phone-container .phone-type-radio{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;display:flex;padding-top:10px}
.module-callme-later-component .module-callme-later-container .phone-container .phone-type-radio input{display:inline-block;margin-right:12px;margin-top:3px}
.module-callme-later-component .module-callme-later-container .phone-container .phone-type-radio .label{display:inline-block;margin-right:12px}
.module-callme-later-component .module-callme-later-container .module-callme-later-button{padding:0;height:46px;display:flex;align-items:center;justify-content:center;width:100%}
.module-callme-later-component .module-callme-later-container .check-terms-container{display:flex;flex-wrap:wrap}
.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text{transform:translateY(-5px);width:90%}
.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text span>p,.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text span>div{margin-top:0;font-size:16px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text span>p a,.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text span>div a{font-weight:700;color:#0073ae;text-decoration:underline}
.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text span>p a:hover,.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text span>div a:hover{color:#00aeef}
.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text span>p a:visited,.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text span>div a:visited{color:#0073ae}
.module-callme-later-component .module-callme-later-container .check-terms-container .check-error-container{width:100%}
.module-callme-later-component .module-callme-later-container .check-terms-container .check-error-container .directv-input-error{color:#e53935;display:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;margin-top:10px}
.module-callme-later-component .module-callme-later-container .check-terms-container .check-error-container .directv-input-error.show{display:block;width:100%}
.module-callme-later-component .module-callme-later-container .check-terms-container .check-error-container .directv-input-error.show ~ .directv-input-description{display:none}
@media screen and (max-width:480px){.module-callme-later-component .module-callme-later-container .optional-selects{font-size:12px;margin-right:8px;padding:5px 6px}
.module-callme-later-component .module-callme-later-container .phone-container .phone-indicative-input{margin-right:8px;max-width:80px}
.module-callme-later-component .module-callme-later-container .phone-container .module-callme-later-phone{min-width:100px}
.module-callme-later-component .module-callme-later-container .phone-container .phone-type-radio{display:block;width:100%;padding-top:0;max-width:90px}
.module-callme-later-component .module-callme-later-container .directv-input{font-size:12px;padding:0 8px 0 8px}
.module-callme-later-component .module-callme-later-container .check-terms-container{padding-left:0}
.module-callme-later-component .module-callme-later-container .check-terms-container .aditional-option--text{width:85%;word-break:break-word}
.recaptcha-container{transform:scale(0.8);transform-origin:0 0}
}
.callme-later.aem-GridColumn{padding:0}
.baseSlider{width:100%;display:flex;flex-direction:column;align-items:center}
.baseSlider .slider-content{width:100%;box-sizing:border-box;padding:0 16px;position:relative}
.baseSlider .slider-content .slider-container{width:100%}
.baseSlider .slider-content .slider-container .resource-container{width:100%;height:calc(100vh - 299px);display:flex;justify-content:center;align-items:center;overflow:hidden}
.baseSlider .slider-content .slider-container .resource-container img,.baseSlider .slider-content .slider-container .resource-container video,.baseSlider .slider-content .slider-container .resource-container .youtube{max-width:1440px;height:100%;object-fit:contain}
.baseSlider .slider-content .slider-container .resource-container video,.baseSlider .slider-content .slider-container .resource-container .youtube{min-width:100%}
.baseSlider .PrevArrow,.baseSlider .NextArrow{position:absolute;top:50%;left:0;border:0 none;margin-top:-22.5px;background-color:rgba(158,158,158,0.36);z-index:5;cursor:pointer;width:56px;height:56px;border-radius:50%;display:flex !important;justify-content:center;align-items:center}
.baseSlider .PrevArrow:hover,.baseSlider .NextArrow:hover{background-color:rgba(0,115,174,0.36)}
.baseSlider .PrevArrow .arrow:before,.baseSlider .NextArrow .arrow:before{color:#fff;font-size:40px}
.baseSlider .NextArrow{left:unset;right:0}
.base-modal-wrapper{width:100%;height:100%;justify-content:center;align-items:center;background:rgba(0,0,0,0.5);z-index:2000}
.base-modal-wrapper.close{display:none}
.base-modal-wrapper.open{display:flex;top:0;position:fixed}
.base-modal-wrapper.author-open{display:flex;position:unset}
@media only screen and (max-width:768px){.base-modal-wrapper{align-items:normal}
}
.modal-container{width:79.58%;border-radius:5px;background-color:#fff}
.modal-container .modal-header{border-top-left-radius:5px;border-top-right-radius:5px;background:#005993;position:relative;display:flex;justify-content:center;align-items:center;height:80px}
.modal-container .modal-header .modal-header-title{text-align:center}
.modal-container .modal-header .modal-header-title .h3{color:#f9f9f9;margin:0}
.modal-container .modal-header .modal-header-icon{position:absolute;right:12px;top:12px;cursor:pointer;color:#fff}
.modal-container .modal-content{padding:32px;background-color:#fff}
@media only screen and (max-width:768px){.modal-container{overflow:scroll;height:100%;width:100%;display:block;border-radius:unset;min-height:unset}
.modal-container .modal-content{padding:12px 12px 32px 12px;background-color:#fff}
.modal-container .modal-header{height:96px}
}
.base-generic-tabs{box-sizing:border-box}
.base-generic-tabs.is-editing-helper{background-color:silver}
.base-generic-tabs.translate-component{transform:translateY(-82px)}
.base-generic-tabs>.generictabs-nav{margin:0 auto}
.base-generic-tabs>.generictabs-light>ul>li{border-bottom:1px solid #9e9e9e;color:#000}
.base-generic-tabs>.generictabs-light li.active{border-bottom:6px solid #00aeef;font-weight:500}
.base-generic-tabs>.generictabs-dark>ul>li{color:#fff}
.base-generic-tabs>.generictabs-dark li.active{border-bottom:6px solid #00aeef;font-weight:500;color:#00aeef}
.base-generic-tabs>.generictabs-small{width:920px}
.base-generic-tabs>.generictabs-medium{width:990px}
.base-generic-tabs>.generictabs-large{width:1370px}
.base-generic-tabs>.generictabs-nav>ul{display:grid;grid-auto-columns:1fr;grid-auto-flow:column;padding:0;margin:0;list-style-type:none}
.base-generic-tabs>.generictabs-nav>ul>li{box-sizing:border-box;display:inline-block;height:82px;background-color:transparent;padding:31px 0;text-decoration:none;text-align:center;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:1.2;letter-spacing:normal;cursor:pointer;transition:all .3s ease-in-out}
.base-generic-tabs .tabs-content-container{box-sizing:border-box;padding:16px}
.base-generic-tabs .tab-content-item.is-editin{display:block !important}
@media screen and (max-width:480px){.base-generic-tabs>.generictabs-nav{overflow:auto;overflow-y:hidden;width:100%}
.base-generic-tabs>.generictabs-nav>ul{grid-auto-columns:65%;margin-left:11px}
}
@media screen and (min-width:480px) and (max-width:970px){.base-generic-tabs>.generictabs-nav{overflow:auto;overflow-y:hidden;max-width:100%}
.base-generic-tabs>.generictabs-nav>ul{grid-auto-columns:50%;margin-left:11px}
}
.baseContainerSports{margin:0 auto;position:relative}
.baseContainerSports .baseContainerSports-content{position:relative;z-index:1}
@media(max-width:767px){.baseContainerSports .baseContainerSports-content .container.container-reverse{display:flex;flex-direction:column;flex-flow:column-reverse}
}
.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .image-container{justify-content:flex-start;margin:0 -12px}
@media(max-width:767px){.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .image-container img{object-fit:cover;width:100%;height:100%}
}
.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .text-container{position:relative}
@media(max-width:767px){.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .text-container{text-align:center}
}
.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .heading-container{position:relative}
@media(max-width:767px){.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .heading-container .h1,.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .heading-container .h2,.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .heading-container .h3,.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .heading-container .h4,.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .heading-container .h5,.baseContainerSports .baseContainerSports-content .container .responsivegrid-left .heading-container .h6{text-align:center}
}
.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .image-container{justify-content:flex-end;margin:0 -12px}
@media(max-width:767px){.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .image-container img{object-fit:cover;width:100%;height:100%}
}
.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .text-container{position:relative}
@media(max-width:767px){.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .text-container{text-align:center}
}
.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .heading-container{position:relative}
@media(max-width:767px){.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .heading-container .h1,.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .heading-container .h2,.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .heading-container .h3,.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .heading-container .h4,.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .heading-container .h5,.baseContainerSports .baseContainerSports-content .container .responsivegrid-right .heading-container .h6{text-align:center}
}
.baseContainerSports .baseContainerSports-content-bottom{position:absolute;bottom:0;width:100%;min-height:300px}
.baseContainerSports .baseContainerSports-background{width:100%;position:absolute}
.baseContainerSports .baseContainerSports-background img,.baseContainerSports .baseContainerSports-background video,.baseContainerSports .baseContainerSports-background embed{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
@media(min-width:769px){.baseContainerSports.max-width-padded{max-width:1440px;box-sizing:border-box}
}
.baseContainerSports.max-width-padded .baseContainerSports-content{padding:0 12px}
@media(min-width:769px){.baseContainerSports.max-width-padded .baseContainerSports-content{padding:0 24px}
}
@media(min-width:769px){.baseContainerSports.max-width{max-width:1440px}
}
.baseContainerSports.screen-width .baseContainerSports-content{max-width:1440px;padding:0 12px}
@media screen and (min-width:1440px){.baseContainerSports.screen-width .baseContainerSports-content{max-width:1440px;margin:0 calc(50% - (1440px / 2));padding:0}
}
.baseContainerAnchorlinks-container{position:relative;display:flex;align-items:flex-end;flex:1;height:400px}
@media screen and (min-width:768px){.baseContainerAnchorlinks-container{height:500px}
}
@media screen and (min-width:1921px){.baseContainerAnchorlinks-container{height:600px}
}
.baseContainerAnchorlinks-container .baseContainerAnchorlinks-background{height:100%;position:absolute;width:100%;background-size:cover;background-repeat:no-repeat;background-position:center top;z-index:99}
.baseContainerAnchorlinks-container .baseContainerAnchorlinks-content{flex:1;max-width:1440px;z-index:100;margin:0 auto 8px auto}
@media screen and (max-width:767px){.baseContainerAnchorlinks-container .baseContainerAnchorlinks-content{margin:0 auto 40px auto}
}
.baseContainerAnchorlinks-container .baseContainerAnchorlinks-content .container .base-anchor-link::after{content:" ";left:-200px;bottom:-16px;width:100%;background-color:#979797;opacity:0;height:2px;position:absolute;transition:all .5s ease-in-out}
.baseContainerAnchorlinks-container .baseContainerAnchorlinks-content .container .base-anchor-link:hover::after{opacity:1;transform:translateX(200px)}
.baseContainer{margin:0 auto;position:relative}
.baseContainer.userReturn{display:none}
.baseContainer .baseContainer-content{z-index:1}
.baseContainer .baseContainer-content.baseContainer-shadow{box-shadow:0 0 24px 0 #ccc}
.baseContainer .baseContainer-content-absolute{left:0;right:0;z-index:1}
.baseContainer .baseContainer-content-absolute.baseContainer-shadow{box-shadow:0 8px 24px 0 #ccc}
.baseContainer .baseContainer-background{width:100%;height:100%;position:absolute;top:0;left:0;z-index:-1}
.baseContainer .baseContainer-background img,.baseContainer .baseContainer-background video,.baseContainer .baseContainer-background embed{width:100%;height:100%;-o-object-fit:cover;object-fit:cover}
@media(min-width:769px){.baseContainer.max-width-padded{max-width:1440px;box-sizing:border-box}
}
.baseContainer.max-width-padded .baseContainer-content{padding:0 12px}
@media(min-width:769px){.baseContainer.max-width-padded .baseContainer-content{padding:0 24px}
}
.baseContainer.max-width-padded .baseContainer-content-absolute{left:0;right:0;min-height:16px;padding:0 12px}
@media(min-width:769px){.baseContainer.max-width-padded .baseContainer-content-absolute{padding:0 24px}
}
@media(min-width:769px){.baseContainer.max-width{max-width:1440px}
}
.baseContainer.screen-width .baseContainer-content{max-width:1440px}
@media screen and (min-width:1440px){.baseContainer.screen-width .baseContainer-content{margin:0 calc(50% - (1440px / 2))}
}
.baseContainer.screen-width .baseContainer-content-absolute{max-width:1440px}
@media screen and (min-width:1440px){.baseContainer.screen-width .baseContainer-content-absolute{left:0;right:0;max-width:1440px;margin:0 calc(50% - (1440px / 2))}
}
.baseAccordion{width:100%;display:flex;flex-direction:column;align-items:center;border-bottom:1px solid #ccc}
.baseAccordion .title-container{display:flex;width:100%;flex-direction:row;justify-content:space-between;box-sizing:border-box;padding:16px;margin:0;cursor:pointer}
.baseAccordion .title-container .icon{color:#0073ae}
.baseAccordion .title-container .icon.rotate{transform:rotateX(180deg)}
.baseAccordion .title-container.space-between{justify-content:space-between}
.baseAccordion .title-container.center{justify-content:center}
.baseAccordion .title-container .is-open{display:none}
.baseAccordion .title-container .is-open.open{display:block}
.baseAccordion .title-container .right-side{display:flex;align-items:center}
.baseAccordion .title-container .right-side .heading{margin-right:8px}
.baseAccordion .layout-cont{width:100%;box-sizing:border-box;padding:16px;display:none}
.baseAccordion .layout-cont.open{display:block}
.baseForm{margin:16px 0}
.baseForm .baseForm-input-wrapper{width:100%}
.baseForm .baseForm-input-wrapper .baseForm-label,.baseForm .baseForm-input-wrapper .baseForm-input{display:block;width:100%}
.baseForm .baseForm-input-wrapper .baseForm-label{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0 0 8px 0;color:#242424}
.baseForm .baseForm-input-wrapper .baseForm-input{box-sizing:border-box;color:#000;border:1px solid #9e9e9e;border-radius:5px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;height:45px;padding:0 16px 0 16px}
.baseForm .baseForm-input-wrapper .baseForm-input:focus{border-radius:5px;border:1px solid #009fdb;box-shadow:0 0 3px 0 rgba(0,174,239,0.5);outline:0;transition:width .5s;width:100%}
.baseForm .baseForm-input-wrapper .baseForm-input::placeholder,.baseForm .baseForm-input-wrapper .baseForm-input::-ms-input-placeholder{color:#9e9e9e}
.baseForm .baseForm-input-wrapper .baseForm-input.touched:invalid{border-radius:5px;border:1px solid #cc1401;box-shadow:0 0 4px 0 rgba(229,57,53,0.5);outline:0;transition:width .5s;width:100%}
.baseForm .baseForm-input-wrapper .baseForm-input-error{color:#e53935;display:none;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;margin-top:12px}
.baseForm .baseForm-input-wrapper .baseForm-input-error.show{display:block}
.baseForm .baseForm-input-wrapper .baseForm-input-error.show ~ .baseForm-input-description{display:none}
.baseForm .baseForm-input-wrapper .baseForm-input-description{color:#242424;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;margin:10px 0 0}
.baseForm .baseForm-input-wrapper .baseForm-help-text{color:#000;display:block;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin:0 auto;text-align:left;width:440px}
.baseForm .baseForm-input-wrapper .baseForm-help-text+.baseForm-input-error{margin:0 auto;width:440px}
.baseForm .baseForm-input-wrapper .baseForm-help-text .baseForm-input-checkbox-check-mark{margin-top:.5em;float:left;margin-bottom:2em}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios{align-items:center;border:solid 1px #0073ae;border-radius:5px;display:flex;flex-direction:row;height:48px;padding:0;width:100%}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio{border-right:1px solid #0073ae;flex:1;height:48px;line-height:48px;text-align:center;width:33%}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio input{display:none}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio input:checked+label{background-color:#0073ae;color:#fff}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio input:checked ~ .baseForm-input-radio-mark{box-shadow:inset 0 0 0 4px #0073ae;border:1px solid #0073ae}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio label{color:#0073ae;cursor:pointer;display:block;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio:hover{background-color:#eceff1}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio:hover+label{color:#0073ae}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio:hover+.baseForm-input-radio-mark{box-shadow:inset 0 0 0 4px #0073ae;border:1px solid #0073ae}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio:last-child{border-right:0}
.baseForm .baseForm-input-wrapper .baseForm-input-group-radios .baseForm-input-radio .baseForm-input-radio-mark{box-sizing:border-box;display:inline-block;width:16px;height:16px;border-radius:50%;border:1px solid #9a9a9a}
.baseForm .baseForm-input-wrapper .baseForm-input-checkbox input{display:none}
.baseForm .baseForm-input-wrapper .baseForm-input-checkbox input:checked+.baseForm-input-checkbox-check-mark{background-color:#0073ae;border:1px solid #0073ae;color:#eceff1}
.baseForm .baseForm-input-wrapper .baseForm-input-checkbox label{cursor:pointer}
.baseForm .baseForm-input-wrapper .baseForm-input-checkbox label .baseForm-contact-info-terms-link{color:#0073ae;display:inline;text-decoration:underline}
.baseForm .baseForm-input-wrapper .baseForm-input-checkbox .baseForm-input-checkbox-check-mark{border-radius:2px;border:1px solid #9a9a9a;color:#fff;height:1em;margin-right:8px;width:1em}
.baseForm .baseForm-input-wrapper .baseForm-input-checkbox .baseForm-contact-info-terms-link{display:none}
.baseForm .baseForm-input-wrapper select{-moz-appearance:none;-webkit-appearance:none;appearance:none}
.baseForm .baseForm-input-wrapper select+i{float:right;margin-top:-30px;margin-right:5px;pointer-events:none;background-color:#fff;padding-right:4px}
.baseForm .baseForm-input-wrapper select+i::before{font-size:10px}
@media screen and (max-width:970px){.baseForm .baseForm-input-wrapper .baseForm-help-text{width:100%}
.baseForm .baseForm-input-wrapper .baseForm-help-text+.baseForm-input-error{width:100%}
}
.text-container{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5}
.text-container.text-ellipsis{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.simple-table-container{display:flex;justify-content:center;align-items:center;padding:0 16px;flex-direction:column;box-sizing:border-box}
.simple-table-container .table{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;border-collapse:collapse;width:100%;border-radius:5px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1)}
.simple-table-container .table thead{border-top:solid 1px #cfd8dc;border-left:solid 1px #cfd8dc;border-right:solid 1px #cfd8dc}
.simple-table-container .table td,.simple-table-container .table th{text-align:center}
.simple-table-container .table th{font-size:20px;padding:24px;font-weight:500}
.simple-table-container .table td{font-size:16px;padding:16px;border:solid 1px #cfd8dc}
.simple-table-container .table tr:nth-child(even){background-color:#fafafa}
.simple-table-container .tablet{display:none}
@media(max-width:768px){.simple-table-container .tablet{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;width:100%;border-radius:5px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);font-size:16px;line-height:1.4;display:flex;justify-content:center;flex-direction:column}
.simple-table-container .tablet .row{overflow:hidden;padding:24px 16px;border-bottom:solid 1px #cfd8dc;display:flex;flex-direction:column}
.simple-table-container .tablet .row :first-child{font-weight:500}
.simple-table-container .tablet .row:nth-child(even){background-color:#fafafa}
.simple-table-container .table{display:none}
}
.rich-text-container p a{font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;text-decoration:none;color:#0073ae;cursor:pointer}
.rich-text-container h1,.rich-text-container h2,.rich-text-container h3,.rich-text-container h4,.rich-text-container h5,.rich-text-container h6{font-weight:100}
.rich-text-container h1 a,.rich-text-container h2 a,.rich-text-container h3 a,.rich-text-container h4 a,.rich-text-container h5 a,.rich-text-container h6 a{font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;text-decoration:none;color:#0073ae;cursor:pointer}
.basePanel{max-width:1440px;width:100%;margin:0 auto}
.panel{position:relative;padding:28px 0;margin-bottom:20px;border:1px solid transparent;border-radius:5px}
.panel h4{margin-top:0;color:inherit}
.panel>p,.panel>ul{margin-bottom:0}
.panel>p+p{margin-top:4px}
.panel .panel-text p{margin:0;text-align:center}
.panel .panel-text p span{font-weight:bold}
.panel .panel-text.panel-text-icon p:first-child::before{font-family:"dtv-public-sites-icons";font-size:16px;color:#006d2e;content:'\e913';vertical-align:text-bottom;padding-right:4px}
.panel-success{background-color:#f1f8e9;border-color:#f1f8e9;color:#000}
.panel-warning{background-color:#fffde7;border-color:#ffc60b;color:#000}
.link-container-container a{display:flex;justify-content:center;box-sizing:border-box;padding:16px;cursor:pointer}
.link-container-container a>div{width:100%}
.link-container{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5}
.link-container a{font-weight:500;font-style:normal;font-stretch:normal;line-height:1;letter-spacing:normal;text-decoration:none;display:block}
.link-container a.external-icon::after{content:'\e904' !important}
.link-container a.internal-icon::after{content:'\e409' !important}
.link-container a.download-icon::after{content:'\e91a' !important}
.link-container a::after{font-family:"dtv-public-sites-icons";font-size:16px;color:#fff;content:'\e409';display:inline-block;text-decoration:none;transform:translateY(2px);white-space:nowrap}
.link-container a[href^="http"]:not([href *="directv"])::after{font-family:"dtv-public-sites-icons";font-size:16px;content:'\e904';display:inline-block;text-decoration:none;transform:translate(5px,2px);white-space:nowrap}
.link-container a.h1{font-size:60px}
.link-container a.h1::after{font-size:60px}
.link-container a.h2{font-size:40px}
.link-container a.h2::after{font-size:40px}
.link-container a.h3{font-size:32px}
.link-container a.h3::after{font-size:32px}
.link-container a.h4{font-size:24px}
.link-container a.h4::after{font-size:24px}
.link-container a.h5{font-size:20px}
.link-container a.h5::after{font-size:20px}
.link-container a.h6{font-size:16px}
.link-container a.h6::after{font-size:16px}
.link-container.colour-primary a{color:#0073ae}
.link-container.colour-primary a::after{color:#0073ae}
.link-container.colour-primary::after{color:#0073ae}
.link-container.colour-secondary a{color:#000}
.link-container.colour-secondary a::after{color:#000}
.link-container.colour-light a{color:#eceff1}
.link-container.colour-light a::after{color:#eceff1}
.link-container.colour-white a{color:#fff}
.link-container.colour-white::after{color:#fff}
@media only screen and (max-width:768px){.force-center a{text-align:center}
.link-container a.h1{font-size:40px}
.link-container a.h1::after{font-size:40px}
.link-container a.h2{font-size:32px}
.link-container a.h2::after{font-size:32px}
.link-container a.h3{font-size:26px}
.link-container a.h3::after{font-size:26px}
.link-container a.h4{font-size:22px}
.link-container a.h4::after{font-size:22px}
.link-container a.h5{font-size:18px}
.link-container a.h5::after{font-size:18px}
}
.imageText-container{padding:8px;margin-bottom:24px}
.imageText-container .imageText-image{padding:8px 0 8px}
.imageText-container .imageText-text{text-align:center}
.imageText-container.imageText-border{border-radius:5px;border:1px solid rgba(158,158,158,0.5)}
.imageText-container.imageText-border .imageText-text .text-container{font-weight:700}
.imageText-container.imageText-link{cursor:pointer}
.image-group-container .aem-Grid .aem-GridColumn{width:1.8px;border-right:solid 1px #fff}
.image-group-container .aem-Grid :last-child{border-right:0}
.image-card{position:relative}
.image-card>.image-card-bg{display:flex;flex-direction:column;width:100%;height:300px}
.image-card>.image-card-bg::after{content:'';display:block;position:relative;height:300px;width:100%;margin-top:-300px;border-radius:5px;opacity:.72;mix-blend-mode:multiply;background-image:linear-gradient(to bottom,rgba(0,0,0,0) 43%,#000 71%)}
.image-card>.image-card-bg>img{width:100%;height:100%;object-fit:cover;border-radius:5px}
.image-card>.image-card-body{position:absolute;display:flex;flex-direction:column;justify-content:flex-end;box-sizing:border-box;padding:24px 16px;top:0;width:100%;height:300px}
.image-card>.image-card-body>.wrapper{display:flex;align-items:center}
.image-card>.image-card-body>.wrapper>img{padding-right:16px;min-width:72px;height:72px}
.image-card>.image-card-body>.wrapper>.content>.title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:500;line-height:1.2;letter-spacing:.5px;text-shadow:0 2px 2px rgba(0,0,0,0.5)}
.image-card>.image-card-body>.wrapper>.content>.description{padding-top:6px;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.5;letter-spacing:.12px;text-shadow:0 2px 2px rgba(0,0,0,0.5)}
.image-card>.bgg-dark{color:#fff}
@media only screen and (max-width:480px){.image-card .hide-mb-true{display:none}
}
.image-container{display:flex;vertical-align:middle;margin:0 auto;justify-content:center;box-sizing:border-box}
.image-container img.cover{object-fit:cover;width:100%}
.image-container img.contain{object-fit:contain;width:100%}
.image-container img.fill{object-fit:fill;width:100%}
.h1,.h2,.h3,.h4,.h5,.h6{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500;font-style:normal;font-stretch:normal;letter-spacing:normal;display:block;line-height:1.25}
.h1.is-subtitle,.h2.is-subtitle,.h3.is-subtitle,.h4.is-subtitle,.h5.is-subtitle,.h6.is-subtitle{font-weight:400}
.h1.is-italic,.h2.is-italic,.h3.is-italic,.h4.is-italic,.h5.is-italic,.h6.is-italic{font-style:italic}
.h1{font-size:60px}
.h2{font-size:40px}
.h3{font-size:32px}
.h4{font-size:24px}
.h5{font-size:20px}
.h6{font-size:16px}
@media only screen and (max-width:1920px){.h1{font-size:60px}
.h2{font-size:40px}
.h3{font-size:32px}
.h4{font-size:24px}
.h5{font-size:20px}
.h6{font-size:16px}
}
@media only screen and (max-width:768px){.h1.force-center,.h2.force-center,.h3.force-center,.h4.force-center,.h5.force-center,.h6.force-center{text-align:center}
.h1{font-size:40px}
.h2{font-size:32px}
.h3{font-size:26px}
.h4{font-size:22px}
.h5{font-size:18px}
}
.dynamic-phone-container{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.dynamic-phone-container a{text-decoration:none}
.dynamic-phone-container>.dark{color:#000}
.dynamic-phone-container>.light{color:#fff}
.dynamic-phone-container>.phones{display:inline-block;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500}
.dynamic-phone-container>.phones>.phone-number{text-decoration:none;display:inline-block}
.component-vertical-separator .side{width:calc(50% - 43px);float:left;padding:0 20px}
.component-vertical-separator .divider{float:left;margin:0 2px 1px 0;min-width:2px;background-image:linear-gradient(to top,rgba(0,0,0,0),#000 54%,rgba(0,0,0,0) 100%);height:100px}
.component-vertical-separator .divider.colour-primary{background-image:linear-gradient(to top,rgba(0,0,0,0),#0073ae 54%,rgba(0,0,0,0) 100%)}
.component-vertical-separator .divider.colour-secondary{background-image:linear-gradient(to top,rgba(0,0,0,0),#000 54%,rgba(0,0,0,0) 100%)}
.component-vertical-separator .divider.colour-light{background-image:linear-gradient(to top,rgba(0,0,0,0),#757575 54%,rgba(0,0,0,0) 100%)}
.component-vertical-separator .divider.colour-white{background-image:linear-gradient(to top,rgba(0,0,0,0),#fff 54%,rgba(0,0,0,0) 100%)}
.component-vertical-separator .divider.colour-sport{background-image:linear-gradient(to top,rgba(0,0,0,0),#05cda9 54%,rgba(0,0,0,0) 100%)}
@media only screen and (max-width:520px){.component-vertical-separator.h1Mob .h1,.component-vertical-separator.h1Mob .h2,.component-vertical-separator.h1Mob .h3,.component-vertical-separator.h1Mob .h4,.component-vertical-separator.h1Mob .h5,.component-vertical-separator.h1Mob .h6{font-size:40px}
.component-vertical-separator.h2Mob .h1,.component-vertical-separator.h2Mob .h2,.component-vertical-separator.h2Mob .h3,.component-vertical-separator.h2Mob .h4,.component-vertical-separator.h2Mob .h5,.component-vertical-separator.h2Mob .h6{font-size:32px}
.component-vertical-separator.h3Mob .h1,.component-vertical-separator.h3Mob .h2,.component-vertical-separator.h3Mob .h3,.component-vertical-separator.h3Mob .h4,.component-vertical-separator.h3Mob .h5,.component-vertical-separator.h3Mob .h6{font-size:26px}
.component-vertical-separator.h4Mob .h1,.component-vertical-separator.h4Mob .h2,.component-vertical-separator.h4Mob .h3,.component-vertical-separator.h4Mob .h4,.component-vertical-separator.h4Mob .h5,.component-vertical-separator.h4Mob .h6{font-size:22px}
.component-vertical-separator.h5Mob .h1,.component-vertical-separator.h5Mob .h2,.component-vertical-separator.h5Mob .h3,.component-vertical-separator.h5Mob .h4,.component-vertical-separator.h5Mob .h5,.component-vertical-separator.h5Mob .h6{font-size:18px}
}
.height-unitsize{min-height:8px}
.height-1x-unitsize{min-height:12px}
.height-2x-unitsize{min-height:16px}
.height-3x-unitsize{min-height:24px}
.height-4x-unitsize{min-height:32px}
.height-5x-unitsize{min-height:40px}
.height-6x-unitsize{min-height:48px}
.height-7x-unitsize{min-height:56px}
.height-8x-unitsize{min-height:64px}
.height-9x-unitsize{min-height:72px}
.height-10x-unitsize{min-height:80px}
.height-11x-unitsize{min-height:88px}
.height-12x-unitsize{min-height:96px}
.height-13x-unitsize{min-height:112px}
.height-14x-unitsize{min-height:120px}
.height-15x-unitsize{min-height:128px}
.height-16x-unitsize{min-height:136px}
.height-17x-unitsize{min-height:144px}
.height-18x-unitsize{min-height:152px}
.height-unitsize-mobile{min-height:8px}
.height-1x-unitsize-mobile{min-height:12px}
.height-2x-unitsize-mobile{min-height:16px}
.height-3x-unitsize-mobile{min-height:24px}
.height-4x-unitsize-mobile{min-height:32px}
.height-5x-unitsize-mobile{min-height:40px}
.height-6x-unitsize-mobile{min-height:40px}
.height-7x-unitsize-mobile{min-height:40px}
.height-8x-unitsize-mobile{min-height:48px}
.height-9x-unitsize-mobile{min-height:48px}
.height-10x-unitsize-mobile{min-height:48px}
.height-11x-unitsize-mobile{min-height:48px}
.height-12x-unitsize-mobile{min-height:56px}
.height-13x-unitsize-mobile{min-height:56px}
.height-14x-unitsize-mobile{min-height:56px}
.height-15x-unitsize-mobile{min-height:56px}
.height-16x-unitsize-mobile{min-height:56px}
.height-17x-unitsize-mobile{min-height:64px}
.height-18x-unitsize-mobile{min-height:64px}
.component-separator-class{display:flex}
.component-separator-class.left{justify-content:flex-start}
.component-separator-class.center{justify-content:center}
.component-separator-class.right{justify-content:flex-end}
.component-separator-class.top{align-items:flex-start}
.component-separator-class.middle{align-items:center}
.component-separator-class.bottom{align-items:flex-end}
.component-separator-class .separator-empty{height:.1px}
.component-separator-class .separator-title-text-container{display:flex;flex-direction:column;align-items:center}
.component-separator-class .separator-title-text-container.colour-white .separator-title-text{display:flex;justify-content:center;align-items:center;width:100%}
.component-separator-class .separator-title-text-container.colour-white .separator-title-text .separator-title-left-line{flex:2;height:2px;background:-moz-linear-gradient(left,rgba(255,255,255,0) 0,#fff 100%);background:-webkit-linear-gradient(left,rgba(255,255,255,0) 0,#fff 100%);background:linear-gradient(to right,rgba(255,255,255,0) 0,#fff 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(255,255,255,0),endColorstr=#ffffff,GradientType=1)}
.component-separator-class .separator-title-text-container.colour-white .separator-title-text .separator-title-text{flex:1;font-size:18px;line-height:1.5;padding:0 16px;text-align:center;max-width:60%;color:#fff}
.component-separator-class .separator-title-text-container.colour-white .separator-title-text .separator-title-right-line{flex:2;height:2px;background:-moz-linear-gradient(left,#fff 0,rgba(255,255,255,0) 100%);background:-webkit-linear-gradient(left,#fff 0,rgba(255,255,255,0) 100%);background:linear-gradient(to right,#fff 0,rgba(255,255,255,0) 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(255,255,255,0),endColorstr=rgba(255,255,255,0),GradientType=1)}
@media screen and (max-width:480px){.component-separator-class .separator-title-text-container.colour-white{width:100%}
.component-separator-class .separator-title-text-container.colour-white .separator-title-text .separator-title-left-line{flex:1}
.component-separator-class .separator-title-text-container.colour-white .separator-title-text .separator-title-text{flex:auto;max-width:45%}
.component-separator-class .separator-title-text-container.colour-white .separator-title-text .separator-title-right-line{flex:1}
}
.component-separator-class .separator-title-text-container.colour-primary .separator-title-text{display:flex;justify-content:center;align-items:center;width:100%}
.component-separator-class .separator-title-text-container.colour-primary .separator-title-text .separator-title-left-line{flex:2;height:2px;background:-moz-linear-gradient(left,rgba(0,115,174,0) 0,#0073ae 100%);background:-webkit-linear-gradient(left,rgba(0,115,174,0) 0,#0073ae 100%);background:linear-gradient(to right,rgba(0,115,174,0) 0,#0073ae 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(0,115,174,0),endColorstr=#0073ae,GradientType=1)}
.component-separator-class .separator-title-text-container.colour-primary .separator-title-text .separator-title-text{flex:1;font-size:18px;line-height:1.5;padding:0 16px;text-align:center;max-width:60%;color:#0073ae}
.component-separator-class .separator-title-text-container.colour-primary .separator-title-text .separator-title-right-line{flex:2;height:2px;background:-moz-linear-gradient(left,#0073ae 0,rgba(0,115,174,0) 100%);background:-webkit-linear-gradient(left,#0073ae 0,rgba(0,115,174,0) 100%);background:linear-gradient(to right,#0073ae 0,rgba(0,115,174,0) 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(0,115,174,0),endColorstr=rgba(0,115,174,0),GradientType=1)}
@media screen and (max-width:480px){.component-separator-class .separator-title-text-container.colour-primary{width:100%}
.component-separator-class .separator-title-text-container.colour-primary .separator-title-text .separator-title-left-line{flex:1}
.component-separator-class .separator-title-text-container.colour-primary .separator-title-text .separator-title-text{flex:auto;max-width:45%}
.component-separator-class .separator-title-text-container.colour-primary .separator-title-text .separator-title-right-line{flex:1}
}
.component-separator-class .separator-title-text-container.colour-secondary .separator-title-text{display:flex;justify-content:center;align-items:center;width:100%}
.component-separator-class .separator-title-text-container.colour-secondary .separator-title-text .separator-title-left-line{flex:2;height:2px;background:-moz-linear-gradient(left,rgba(0,0,0,0) 0,#000 100%);background:-webkit-linear-gradient(left,rgba(0,0,0,0) 0,#000 100%);background:linear-gradient(to right,rgba(0,0,0,0) 0,#000 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(0,0,0,0),endColorstr=#000000,GradientType=1)}
.component-separator-class .separator-title-text-container.colour-secondary .separator-title-text .separator-title-text{flex:1;font-size:18px;line-height:1.5;padding:0 16px;text-align:center;max-width:60%;color:#000}
.component-separator-class .separator-title-text-container.colour-secondary .separator-title-text .separator-title-right-line{flex:2;height:2px;background:-moz-linear-gradient(left,#000 0,rgba(0,0,0,0) 100%);background:-webkit-linear-gradient(left,#000 0,rgba(0,0,0,0) 100%);background:linear-gradient(to right,#000 0,rgba(0,0,0,0) 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(0,0,0,0),endColorstr=rgba(0,0,0,0),GradientType=1)}
@media screen and (max-width:480px){.component-separator-class .separator-title-text-container.colour-secondary{width:100%}
.component-separator-class .separator-title-text-container.colour-secondary .separator-title-text .separator-title-left-line{flex:1}
.component-separator-class .separator-title-text-container.colour-secondary .separator-title-text .separator-title-text{flex:auto;max-width:45%}
.component-separator-class .separator-title-text-container.colour-secondary .separator-title-text .separator-title-right-line{flex:1}
}
.component-separator-class .separator-title-text-container.colour-light .separator-title-text{display:flex;justify-content:center;align-items:center;width:100%}
.component-separator-class .separator-title-text-container.colour-light .separator-title-text .separator-title-left-line{flex:2;height:2px;background:-moz-linear-gradient(left,rgba(236,239,241,0) 0,#eceff1 100%);background:-webkit-linear-gradient(left,rgba(236,239,241,0) 0,#eceff1 100%);background:linear-gradient(to right,rgba(236,239,241,0) 0,#eceff1 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(236,239,241,0),endColorstr=#eceff1,GradientType=1)}
.component-separator-class .separator-title-text-container.colour-light .separator-title-text .separator-title-text{flex:1;font-size:18px;line-height:1.5;padding:0 16px;text-align:center;max-width:60%;color:#eceff1}
.component-separator-class .separator-title-text-container.colour-light .separator-title-text .separator-title-right-line{flex:2;height:2px;background:-moz-linear-gradient(left,#eceff1 0,rgba(236,239,241,0) 100%);background:-webkit-linear-gradient(left,#eceff1 0,rgba(236,239,241,0) 100%);background:linear-gradient(to right,#eceff1 0,rgba(236,239,241,0) 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(236,239,241,0),endColorstr=rgba(236,239,241,0),GradientType=1)}
@media screen and (max-width:480px){.component-separator-class .separator-title-text-container.colour-light{width:100%}
.component-separator-class .separator-title-text-container.colour-light .separator-title-text .separator-title-left-line{flex:1}
.component-separator-class .separator-title-text-container.colour-light .separator-title-text .separator-title-text{flex:auto;max-width:45%}
.component-separator-class .separator-title-text-container.colour-light .separator-title-text .separator-title-right-line{flex:1}
}
.component-separator-class .separator-title-text-container.colour-selling .separator-title-text{display:flex;justify-content:center;align-items:center;width:100%}
.component-separator-class .separator-title-text-container.colour-selling .separator-title-text .separator-title-left-line{flex:2;height:2px;background:-moz-linear-gradient(left,rgba(255,198,11,0) 0,#ffc60b 100%);background:-webkit-linear-gradient(left,rgba(255,198,11,0) 0,#ffc60b 100%);background:linear-gradient(to right,rgba(255,198,11,0) 0,#ffc60b 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(255,198,11,0),endColorstr=#ffc60b,GradientType=1)}
.component-separator-class .separator-title-text-container.colour-selling .separator-title-text .separator-title-text{flex:1;font-size:18px;line-height:1.5;padding:0 16px;text-align:center;max-width:60%;color:#ffc60b}
.component-separator-class .separator-title-text-container.colour-selling .separator-title-text .separator-title-right-line{flex:2;height:2px;background:-moz-linear-gradient(left,#ffc60b 0,rgba(255,198,11,0) 100%);background:-webkit-linear-gradient(left,#ffc60b 0,rgba(255,198,11,0) 100%);background:linear-gradient(to right,#ffc60b 0,rgba(255,198,11,0) 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(255,198,11,0),endColorstr=rgba(255,198,11,0),GradientType=1)}
@media screen and (max-width:480px){.component-separator-class .separator-title-text-container.colour-selling{width:100%}
.component-separator-class .separator-title-text-container.colour-selling .separator-title-text .separator-title-left-line{flex:1}
.component-separator-class .separator-title-text-container.colour-selling .separator-title-text .separator-title-text{flex:auto;max-width:45%}
.component-separator-class .separator-title-text-container.colour-selling .separator-title-text .separator-title-right-line{flex:1}
}
.component-separator-class .separator-title-text-container.colour-danger .separator-title-text{display:flex;justify-content:center;align-items:center;width:100%}
.component-separator-class .separator-title-text-container.colour-danger .separator-title-text .separator-title-left-line{flex:2;height:2px;background:-moz-linear-gradient(left,rgba(229,57,53,0) 0,#e53935 100%);background:-webkit-linear-gradient(left,rgba(229,57,53,0) 0,#e53935 100%);background:linear-gradient(to right,rgba(229,57,53,0) 0,#e53935 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(229,57,53,0),endColorstr=#e53935,GradientType=1)}
.component-separator-class .separator-title-text-container.colour-danger .separator-title-text .separator-title-text{flex:1;font-size:18px;line-height:1.5;padding:0 16px;text-align:center;max-width:60%;color:#e53935}
.component-separator-class .separator-title-text-container.colour-danger .separator-title-text .separator-title-right-line{flex:2;height:2px;background:-moz-linear-gradient(left,#e53935 0,rgba(229,57,53,0) 100%);background:-webkit-linear-gradient(left,#e53935 0,rgba(229,57,53,0) 100%);background:linear-gradient(to right,#e53935 0,rgba(229,57,53,0) 100%);filter:progid:dximagetransform.microsoft.gradient(startColorstr=rgba(229,57,53,0),endColorstr=rgba(229,57,53,0),GradientType=1)}
@media screen and (max-width:480px){.component-separator-class .separator-title-text-container.colour-danger{width:100%}
.component-separator-class .separator-title-text-container.colour-danger .separator-title-text .separator-title-left-line{flex:1}
.component-separator-class .separator-title-text-container.colour-danger .separator-title-text .separator-title-text{flex:auto;max-width:45%}
.component-separator-class .separator-title-text-container.colour-danger .separator-title-text .separator-title-right-line{flex:1}
}
.component-separator-class .separatorline.line-small.colour-primary{height:1px;background-color:#0073ae}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-small.colour-primary{width:100%}
}
.component-separator-class .separatorline.line-small.colour-secondary{height:1px;background-color:#000}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-small.colour-secondary{width:100%}
}
.component-separator-class .separatorline.line-small.colour-light{height:1px;background-color:#eceff1}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-small.colour-light{width:100%}
}
.component-separator-class .separatorline.line-small.colour-selling{height:1px;background-color:#ffc60b}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-small.colour-selling{width:100%}
}
.component-separator-class .separatorline.line-small.colour-danger{height:1px;background-color:#e53935}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-small.colour-danger{width:100%}
}
.component-separator-class .separatorline.line-medium.colour-primary{height:5px;background-color:#0073ae}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-medium.colour-primary{width:100%}
}
.component-separator-class .separatorline.line-medium.colour-secondary{height:5px;background-color:#000}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-medium.colour-secondary{width:100%}
}
.component-separator-class .separatorline.line-medium.colour-light{height:5px;background-color:#eceff1}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-medium.colour-light{width:100%}
}
.component-separator-class .separatorline.line-medium.colour-selling{height:5px;background-color:#ffc60b}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-medium.colour-selling{width:100%}
}
.component-separator-class .separatorline.line-medium.colour-danger{height:5px;background-color:#e53935}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-medium.colour-danger{width:100%}
}
.component-separator-class .separatorline.line-large.colour-primary{height:20px;background-color:#0073ae}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-large.colour-primary{width:100%}
}
.component-separator-class .separatorline.line-large.colour-secondary{height:20px;background-color:#000}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-large.colour-secondary{width:100%}
}
.component-separator-class .separatorline.line-large.colour-light{height:20px;background-color:#eceff1}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-large.colour-light{width:100%}
}
.component-separator-class .separatorline.line-large.colour-selling{height:20px;background-color:#ffc60b}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-large.colour-selling{width:100%}
}
.component-separator-class .separatorline.line-large.colour-danger{height:20px;background-color:#e53935}
@media screen and (max-width:480px){.component-separator-class .separatorline.line-large.colour-danger{width:100%}
}
.component-separator-class.mobile{display:none}
@media only screen and (max-width:480px){.component-separator-class.desktop{display:none}
.component-separator-class.mobile{display:flex !important}
}
.responsivegrid .button-wrapper{text-decoration:none}
.responsivegrid .btn{display:inline-block;text-align:center;vertical-align:middle;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500;padding:12px 48px;font-size:16px;line-height:1.25;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;user-select:none}
.responsivegrid .btn:hover,.responsivegrid .btn:focus,.responsivegrid .btn.focus{color:#f9f9f9;text-decoration:none}
.responsivegrid .btn:active,.responsivegrid .btn.active{outline:0;background-image:none;box-shadow:none}
.responsivegrid .btn.disabled,.responsivegrid .btn[disabled],fieldset[disabled] .responsivegrid .btn{cursor:not-allowed;box-shadow:none;background-color:#ccc}
.responsivegrid .btn.btn-blue-border{border:1px solid #0073ae}
.responsivegrid .btn.btn-white-border{border:1px solid #fff}
.responsivegrid .btn.btn-indigo-border{border:1px solid #00182e}
.responsivegrid .btn-primary{color:#f9f9f9;background-color:#0073ae;border-color:#0073ae}
.responsivegrid .btn-primary:focus,.responsivegrid .btn-primary.focus{color:#f9f9f9;background-color:#00517b;border-color:#00517b}
.responsivegrid .btn-primary:hover{color:#f9f9f9;background-color:#0090da;border-color:#0073ae}
.responsivegrid .btn-primary:active{color:#f9f9f9;background-color:#00517b;border-color:#00517b;background-image:none}
.responsivegrid .btn-primary:active:hover,.responsivegrid .btn-primary:active:focus,.responsivegrid .btn-primary:active.focus{color:#f9f9f9;background-color:#00517b;border-color:#00517b}
.responsivegrid .btn-primary.disabled:hover,.responsivegrid .btn-primary[disabled]:hover,fieldset[disabled] .responsivegrid .btn-primary:hover,.responsivegrid .btn-primary.disabled:focus,.responsivegrid .btn-primary[disabled]:focus,fieldset[disabled] .responsivegrid .btn-primary:focus,.responsivegrid .btn-primary.disabled.focus,.responsivegrid .btn-primary[disabled].focus,fieldset[disabled] .responsivegrid .btn-primary.focus{background-color:#0073ae;border-color:#0073ae}
.responsivegrid .btn-selling{color:#1b2c5d;background-color:#ffc60b;border-color:#ffc60b}
.responsivegrid .btn-selling:focus,.responsivegrid .btn-selling.focus{color:#1b2c5d;background-color:#d7a500;border-color:#d7a500}
.responsivegrid .btn-selling:hover{color:#1b2c5d;background-color:#ffd80b;border-color:#ffc60b}
.responsivegrid .btn-selling:active{color:#1b2c5d;background-color:#d7a500;border-color:#d7a500;background-image:none}
.responsivegrid .btn-selling:active:hover,.responsivegrid .btn-selling:active:focus,.responsivegrid .btn-selling:active.focus{color:#1b2c5d;background-color:#d7a500;border-color:#d7a500}
.responsivegrid .btn-selling.disabled:hover,.responsivegrid .btn-selling[disabled]:hover,fieldset[disabled] .responsivegrid .btn-selling:hover,.responsivegrid .btn-selling.disabled:focus,.responsivegrid .btn-selling[disabled]:focus,fieldset[disabled] .responsivegrid .btn-selling:focus,.responsivegrid .btn-selling.disabled.focus,.responsivegrid .btn-selling[disabled].focus,fieldset[disabled] .responsivegrid .btn-selling.focus{background-color:#ffc60b;border-color:#ffc60b}
.responsivegrid .btn-secondary{color:#fff;background-color:transparent;border-color:#fff}
.responsivegrid .btn-secondary:focus,.responsivegrid .btn-secondary.focus{color:#fff;background-color:rgba(0,0,0,0);border-color:#e6e6e6}
.responsivegrid .btn-secondary:hover{color:#fff;background-color:rgba(255,255,255,0.15);border-color:#fff}
.responsivegrid .btn-secondary:active{color:#fff;background-color:rgba(0,0,0,0);border-color:#e6e6e6;background-image:none}
.responsivegrid .btn-secondary:active:hover,.responsivegrid .btn-secondary:active:focus,.responsivegrid .btn-secondary:active.focus{color:#fff;background-color:rgba(0,0,0,0);border-color:#e6e6e6}
.responsivegrid .btn-secondary.disabled:hover,.responsivegrid .btn-secondary[disabled]:hover,fieldset[disabled] .responsivegrid .btn-secondary:hover,.responsivegrid .btn-secondary.disabled:focus,.responsivegrid .btn-secondary[disabled]:focus,fieldset[disabled] .responsivegrid .btn-secondary:focus,.responsivegrid .btn-secondary.disabled.focus,.responsivegrid .btn-secondary[disabled].focus,fieldset[disabled] .responsivegrid .btn-secondary.focus{background-color:transparent;border-color:#fff}
.responsivegrid .btn-white{color:#0073ae;background-color:#fff;border-color:#fff}
.responsivegrid .btn-white:focus,.responsivegrid .btn-white.focus{color:#0073ae;background-color:#e6e6e6;border-color:#e6e6e6}
.responsivegrid .btn-white:hover{color:#0073ae;background-color:#fff;border-color:#fff}
.responsivegrid .btn-white:active{color:#0073ae;background-color:#e6e6e6;border-color:#e6e6e6;background-image:none}
.responsivegrid .btn-white:active:hover,.responsivegrid .btn-white:active:focus,.responsivegrid .btn-white:active.focus{color:#0073ae;background-color:#e6e6e6;border-color:#e6e6e6}
.responsivegrid .btn-white.disabled:hover,.responsivegrid .btn-white[disabled]:hover,fieldset[disabled] .responsivegrid .btn-white:hover,.responsivegrid .btn-white.disabled:focus,.responsivegrid .btn-white[disabled]:focus,fieldset[disabled] .responsivegrid .btn-white:focus,.responsivegrid .btn-white.disabled.focus,.responsivegrid .btn-white[disabled].focus,fieldset[disabled] .responsivegrid .btn-white.focus{background-color:#fff;border-color:#fff}
.responsivegrid .btn-green{color:#fff;background-color:#0c9600;border-color:#0c9600}
.responsivegrid .btn-green:focus,.responsivegrid .btn-green.focus{color:#fff;background-color:#086300;border-color:#086300}
.responsivegrid .btn-green:hover{color:#fff;background-color:#41be36;border-color:#0c9600}
.responsivegrid .btn-green:active{color:#fff;background-color:#086300;border-color:#086300;background-image:none}
.responsivegrid .btn-green:active:hover,.responsivegrid .btn-green:active:focus,.responsivegrid .btn-green:active.focus{color:#fff;background-color:#086300;border-color:#086300}
.responsivegrid .btn-green.disabled:hover,.responsivegrid .btn-green[disabled]:hover,fieldset[disabled] .responsivegrid .btn-green:hover,.responsivegrid .btn-green.disabled:focus,.responsivegrid .btn-green[disabled]:focus,fieldset[disabled] .responsivegrid .btn-green:focus,.responsivegrid .btn-green.disabled.focus,.responsivegrid .btn-green[disabled].focus,fieldset[disabled] .responsivegrid .btn-green.focus{background-color:#0c9600;border-color:#0c9600}
.responsivegrid .btn-ghost{color:#0073ae;background-color:transparent;border-color:#0073ae}
.responsivegrid .btn-ghost:focus,.responsivegrid .btn-ghost.focus{color:#0073ae;background-color:rgba(0,0,0,0);border-color:#00517b}
.responsivegrid .btn-ghost:hover{color:#2196f3;background-color:transparent;border-color:#2196f3}
.responsivegrid .btn-ghost:active{color:#0073ae;background-color:rgba(0,0,0,0);border-color:#00517b;background-image:none}
.responsivegrid .btn-ghost:active:hover,.responsivegrid .btn-ghost:active:focus,.responsivegrid .btn-ghost:active.focus{color:#0073ae;background-color:rgba(0,0,0,0);border-color:#00517b}
.responsivegrid .btn-ghost.disabled:hover,.responsivegrid .btn-ghost[disabled]:hover,fieldset[disabled] .responsivegrid .btn-ghost:hover,.responsivegrid .btn-ghost.disabled:focus,.responsivegrid .btn-ghost[disabled]:focus,fieldset[disabled] .responsivegrid .btn-ghost:focus,.responsivegrid .btn-ghost.disabled.focus,.responsivegrid .btn-ghost[disabled].focus,fieldset[disabled] .responsivegrid .btn-ghost.focus{background-color:transparent;border-color:#0073ae}
.responsivegrid .btn-indigo{color:#f9f9f9;background-color:#081a2b;border-color:#081a2b}
.responsivegrid .btn-indigo:focus,.responsivegrid .btn-indigo.focus{color:#f9f9f9;background-color:#000;border-color:#000}
.responsivegrid .btn-indigo:hover{color:#fff;background-color:#2196f3;border-color:#2196f3}
.responsivegrid .btn-indigo:active{color:#f9f9f9;background-color:#000;border-color:#000;background-image:none}
.responsivegrid .btn-indigo:active:hover,.responsivegrid .btn-indigo:active:focus,.responsivegrid .btn-indigo:active.focus{color:#f9f9f9;background-color:#000;border-color:#000}
.responsivegrid .btn-indigo.disabled:hover,.responsivegrid .btn-indigo[disabled]:hover,fieldset[disabled] .responsivegrid .btn-indigo:hover,.responsivegrid .btn-indigo.disabled:focus,.responsivegrid .btn-indigo[disabled]:focus,fieldset[disabled] .responsivegrid .btn-indigo:focus,.responsivegrid .btn-indigo.disabled.focus,.responsivegrid .btn-indigo[disabled].focus,fieldset[disabled] .responsivegrid .btn-indigo.focus{background-color:#081a2b;border-color:#081a2b}
.responsivegrid .btn-light-indigo{color:#081a2b;background-color:transparent;border-color:#081a2b}
.responsivegrid .btn-light-indigo:focus,.responsivegrid .btn-light-indigo.focus{color:#081a2b;background-color:rgba(0,0,0,0);border-color:#000}
.responsivegrid .btn-light-indigo:hover{color:#2196f3;background-color:transparent;border-color:#2196f3}
.responsivegrid .btn-light-indigo:active{color:#081a2b;background-color:rgba(0,0,0,0);border-color:#000;background-image:none}
.responsivegrid .btn-light-indigo:active:hover,.responsivegrid .btn-light-indigo:active:focus,.responsivegrid .btn-light-indigo:active.focus{color:#081a2b;background-color:rgba(0,0,0,0);border-color:#000}
.responsivegrid .btn-light-indigo.disabled:hover,.responsivegrid .btn-light-indigo[disabled]:hover,fieldset[disabled] .responsivegrid .btn-light-indigo:hover,.responsivegrid .btn-light-indigo.disabled:focus,.responsivegrid .btn-light-indigo[disabled]:focus,fieldset[disabled] .responsivegrid .btn-light-indigo:focus,.responsivegrid .btn-light-indigo.disabled.focus,.responsivegrid .btn-light-indigo[disabled].focus,fieldset[disabled] .responsivegrid .btn-light-indigo.focus{background-color:transparent;border-color:#081a2b}
.responsivegrid .btn-orange{color:#081a2b;background-color:#f89c1b;border-color:#f58220}
.responsivegrid .btn-orange:focus,.responsivegrid .btn-orange.focus{color:#081a2b;background-color:#d98207;border-color:#d8690a}
.responsivegrid .btn-orange:hover{color:#081a2b;background-color:#f58220;border-color:#f58220}
.responsivegrid .btn-orange:active{color:#081a2b;background-color:#d98207;border-color:#d8690a;background-image:none}
.responsivegrid .btn-orange:active:hover,.responsivegrid .btn-orange:active:focus,.responsivegrid .btn-orange:active.focus{color:#081a2b;background-color:#d98207;border-color:#d8690a}
.responsivegrid .btn-orange.disabled:hover,.responsivegrid .btn-orange[disabled]:hover,fieldset[disabled] .responsivegrid .btn-orange:hover,.responsivegrid .btn-orange.disabled:focus,.responsivegrid .btn-orange[disabled]:focus,fieldset[disabled] .responsivegrid .btn-orange:focus,.responsivegrid .btn-orange.disabled.focus,.responsivegrid .btn-orange[disabled].focus,fieldset[disabled] .responsivegrid .btn-orange.focus{background-color:#f89c1b;border-color:#f58220}
.responsivegrid .btn-long{padding:12px 48px;font-size:16px;line-height:1.25;border-radius:6px}
.responsivegrid .btn-normal{padding:8px 48px;font-size:16px;line-height:1.25;border-radius:6px}
.responsivegrid .btn-small{padding:4px 16px;font-size:16px;line-height:1.25;border-radius:6px}
.responsivegrid .btn-block{display:block;width:100%}
.responsivegrid input[type="submit"].btn-block,.responsivegrid input[type="reset"].btn-block,.responsivegrid input[type="button"].btn-block{width:100%}
.base-badge{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;display:inline-block;min-width:24px;padding:4px 16px;font-size:10px;font-weight:500;line-height:1.25;vertical-align:middle;white-space:nowrap;text-align:center;border-radius:16px;font-style:italic}
.base-badge:empty{display:none}
.base-badge-primary{background-color:#fff;color:#0073ae;border:1px #fff solid}
.base-badge-transparent{background-color:transparent;color:#fff;border:1px #fff solid}
.base-badge-secondary{background-color:#000;color:#fff;border:1px #fff solid}
.base-badge-selling{background-color:#ffc60b;color:#1b2c5d;border:1px #fff solid}
.base-anchor-link{box-sizing:border-box;cursor:pointer;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin-bottom:24px;transition:color .25s;position:relative}
.base-anchor-link a{text-decoration:none;color:unset}
.alert-content{padding:16px;margin-bottom:20px;border:1px solid transparent;border-radius:0;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1)}
.alert-content h4{margin-top:0;color:inherit}
.alert-content>p,.alert-content>ul{margin-bottom:0}
.alert-content>p+p{margin-top:4px}
.alert-content .alert-text p{margin:0;text-align:center}
.alert-content .alert-text .alert-title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin-bottom:8px}
.alert-content .alert-icon{position:fixed;right:32px;top:32px;cursor:pointer}
@media only screen and (max-width:480px){.alert-content{padding:16px 16px}
.alert-content .alert-text p{text-align:left}
.alert-content .alert-icon{right:16px;top:16px}
}
.alert-container{display:none}
.alert-container.fixed-top{position:fixed;z-index:2000;top:0;left:0;width:100%}
.alert-container.close{display:none}
.alert-container.open{display:block}
.alert-success{background-color:#1db855;border-color:#1db855;color:#fff}
.alert-error{background-color:#d10d39;border-color:#d10d39;color:#fff}
.acquisition-dropdown-container .acquisition-dropdown{display:inline-block;position:relative;box-sizing:border-box;width:100%}
.acquisition-dropdown-container .acquisition-dropdown a{text-decoration:none}
.acquisition-dropdown-container .acquisition-dropdown>.dd-input{display:none}
.acquisition-dropdown-container .acquisition-dropdown>.dd-input+.dd-menu{opacity:0;visibility:hidden;max-height:0}
.acquisition-dropdown-container .acquisition-dropdown>.dd-input:checked+.dd-menu{opacity:1;visibility:visible;max-height:500px}
.acquisition-dropdown-container .acquisition-dropdown>.btn-select{width:100%;height:50px;box-sizing:border-box;transition:all .5s}
.acquisition-dropdown-container .acquisition-dropdown>.btn-select .external-link{margin-left:8px}
.acquisition-dropdown-container .acquisition-dropdown>.btn-select .text{margin-right:8px}
.acquisition-dropdown-container .acquisition-dropdown>.btn-select .icon{transform:0;transition:all .25s}
.acquisition-dropdown-container .acquisition-dropdown>.btn-select .icon::before{display:block;font-size:8px}
.acquisition-dropdown-container .acquisition-dropdown>.btn-select.directv-ui-button{flex-direction:row}
.acquisition-dropdown-container .acquisition-dropdown>.btn-select.directv-ui-button:hover{box-shadow:inset 0 0 0 10rem rgba(0,0,0,0.15);border:inset 1px rgba(0,0,0,0.3)}
.acquisition-dropdown-container .acquisition-dropdown>.dd-menu{position:absolute;box-sizing:border-box;top:90%;width:100%;padding:0;margin:2px 0 0 0;border-radius:0 0 5px 5px;box-shadow:0 0 6px 0 rgba(0,0,0,0.1);list-style-type:none;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;opacity:0;max-height:0;visibility:hidden;transition:all .25s linear;z-index:1}
.acquisition-dropdown-container .acquisition-dropdown>.dd-menu>li{height:50px;border-top:1px inset rgba(255,255,255,0.2);cursor:pointer}
.acquisition-dropdown-container .acquisition-dropdown>.dd-menu>li>a{display:flex;justify-content:center;align-items:center;height:100%;text-transform:uppercase;transition:all .3s}
.acquisition-dropdown-container .acquisition-dropdown>.dd-menu>li>a:hover{box-shadow:inset 0 0 0 10rem rgba(0,0,0,0.15)}
.acquisition-dropdown-container .acquisition-dropdown>.dd-menu>li>a>img{height:16px}
@media only screen and (max-width:480px){.acquisition-dropdown-container .btn-select,.acquisition-dropdown-container .dd-menu{font-size:12px}
.acquisition-dropdown-container .icon::before{font-size:6px !important}
}
.base-accordeon{margin:40px 0}
.base-accordeon .base-accordeon-container{width:100%;margin:0 auto;box-sizing:border-box;border-radius:5px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);border:solid 1px #cfd8dc;background-color:#fff}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item{border-bottom:solid 1px #cfd8dc}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item:last-child{border-bottom:0}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content{padding:16px 0}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content.accordeon-header{display:flex;flex-direction:column;justify-content:center;align-items:center}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content.accordeon-header .accordeon-item-content-data{margin:0}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content:first-child span{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:20px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;color:#000;text-transform:none;width:81%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content.active{background-color:#f9f9f9;border-bottom:solid 1px #cfd8dc}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content-data{margin-bottom:8px;text-align:center;display:flex;justify-content:center;align-items:center;flex-wrap:wrap}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content-data :last-child{margin-bottom:none}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content-data-title{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#4a4a4a;margin:0 8px}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content-data-value{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.5;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;letter-spacing:normal;color:#000}
.base-accordeon .base-accordeon-container.base-accordeon-content .base-accordeon-item-content img{height:30px}
.base-accordeon .base-accordeon-container .base-accordeon-actions .base-accordeon-action{margin:0 auto}
.base-accordeon .base-accordeon-actions .base-accordeon-action{margin:0 auto}
.base-accordeon .base-accordeon-container .base-accordeon-item.none{display:none}
.dtv-anchor-links{min-height:1200px;overflow:hidden;position:relative}
.cq-Editable-dom .dtv-anchor-links{height:auto}
.dtv-anchor-links .dtv-anchor-links-background img{left:50%;position:absolute;top:0;transform:translateX(-50%);vertical-align:middle;visibility:hidden;width:100%}
.dtv-anchor-links .dtv-anchor-links-background img.loaded{animation:fadein forwards 16s;visibility:visible}
@keyframes fadein{from{transform:translateX(-50%) scale(1.2)}
to{transform:translateX(-50%) scale(1)}
}
.dtv-anchor-links .dtv-anchor-links-background img{width:auto}
.dtv-anchor-links .dtv-anchor-links-background video{position:absolute;height:100%;width:100%;object-fit:cover}
.dtv-anchor-links .dtv-anchor-links-background-view-m{display:block}
.dtv-anchor-links .dtv-anchor-links-background-view-d{display:none}
.dtv-anchor-links .dtv-anchor-links-container{color:#fff;position:relative;text-align:center;background-image:url('clientlib-site/css/resources/components/gradients/gradient.svg');background-repeat:repeat-x}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{min-height:562px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .dark-text{color:#000}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .light-text{color:#f9f9f9}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{font-size:40px;line-height:50px;margin:0;padding:11px 0 20px;text-shadow:0 2px 27px rgba(0,0,0,0.94);font-weight:500}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .subtitle{font-weight:400;line-height:34px;margin:0 12px 0 27px;text-shadow:0 2px 11px #000}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .button{min-width:194px;min-height:48px;border:1px;border-radius:5px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.5;letter-spacing:normal;text-align:center;margin-top:40px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .button.active{background:#ffc60b;border:0;color:#1b2c5d}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .button.active:hover{background:#ffd80b}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content{position:relative}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-container{position:relative}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list{display:flex;flex-wrap:wrap;justify-content:center;margin:0 auto;max-width:388px;padding:210px 0 0}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{box-sizing:border-box;cursor:pointer;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;margin-bottom:37px;width:130px;transition:color .25s;position:relative}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link a{color:inherit;text-decoration:none}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link a .icon{display:block;margin:0 auto}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link a .description{margin:0 auto}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link a p{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;color:#fff}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{background-image:url('clientlib-site/css/resources/components/gradients/bandas.svg');background-size:cover;height:344px;position:absolute;top:85px;width:103%;left:0;background-repeat:no-repeat;background-position:center top}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{background-image:url('clientlib-site/css/resources/components/gradients/gradient-top-mobile.svg');background-repeat:repeat-x;height:760px;position:absolute;top:0;width:100%}
@media only screen and (min-width:480px){.dtv-anchor-links{min-height:925px}
.dtv-anchor-links .dtv-anchor-links-background img{height:668px;width:100%;object-fit:cover}
.dtv-anchor-links .dtv-anchor-links-legal-text{color:#cfd8dc;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:11px;position:absolute;top:14px;max-width:1440px;width:100%}
.dtv-anchor-links .dtv-anchor-links-legal-text p{margin:0 25px 0;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;text-align:right}
.dtv-anchor-links .dtv-anchor-links-container{background-image:none}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{min-height:198px;padding-top:272px;position:relative;z-index:1}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{font-size:60px;line-height:70px;text-shadow:0 2px 27px rgba(0,0,0,0.89);font-weight:500}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .subtitle{text-shadow:0 2px 11px rgba(0,0,0,0.5)}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .button{margin-top:13px;width:100%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content{height:448px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{background-image:url('clientlib-site/css/resources/components/gradients/gradient-bottom-tablet.svg');bottom:0;top:unset}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands-hide{display:block}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{background-image:url('clientlib-site/css/resources/components/gradients/bandas-tablet.svg');height:464px;top:5px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list{justify-content:center;padding:120px 0 0;max-width:568px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{padding:0 15px;width:150px}
}
@media only screen and (min-width:768px){.dtv-anchor-links{height:918px;min-height:unset}
.dtv-anchor-links .dtv-anchor-links-background img{height:100%;width:100%;object-fit:cover}
.dtv-anchor-links .dtv-anchor-links-background video{height:100%;width:100%;object-fit:cover}
.dtv-anchor-links .dtv-anchor-links-background-view-m{display:none}
.dtv-anchor-links .dtv-anchor-links-background-view-d{display:block}
.dtv-anchor-links .dtv-anchor-links-legal-text{left:0;right:0;top:487px;z-index:1}
.dtv-anchor-links .dtv-anchor-links-legal-text p{text-align:center}
.dtv-anchor-links .dtv-anchor-links-container{display:flex;flex-direction:column;height:100%;justify-content:center;text-align:left}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{flex:1;margin-top:87px;padding:0}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{padding-top:0}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .subtitle{margin:0}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .button{margin-top:32px;width:194px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content{display:flex;align-items:flex-end;flex:1;text-align:center;height:448px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{background-image:url('clientlib-site/css/resources/components/gradients/gradient-bottom-desktop.svg');background-size:cover;bottom:0;height:150%;top:unset}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands-hide{display:block}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{background-image:url('clientlib-site/css/resources/components/gradients/bandas-desktop.svg');background-position:center top;background-size:cover;bottom:0;height:130%;min-height:334px;top:-168px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-container{flex:1;max-width:100%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list{justify-content:center;padding:120px 0 0;max-width:80%;margin-bottom:22px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{padding:0 15px;width:160px;margin-left:15px;margin-right:15px}
}
@media only screen and (min-width:1024px){.dtv-anchor-links{height:calc(100vh - 65px);min-height:unset}
.phones-visible .dtv-anchor-links{height:calc(100vh - 98px)}
.dtv-anchor-links .dtv-anchor-links-container{display:flex;flex-direction:column;height:100%;justify-content:center;text-align:left}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{flex:1;margin-top:129px;padding:0}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header.dtv-container>div{grid-column:2 / 8}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{padding-top:0}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .subtitle{margin:0}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content{display:flex;align-items:flex-end;flex:1;text-align:center;height:448px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{background-image:url('clientlib-site/css/resources/components/gradients/gradient-bottom-desktop.svg');background-size:cover;bottom:0;height:112%;top:unset}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{background-image:url('clientlib-site/css/resources/components/gradients/bandas-desktop.svg');background-position:center top;background-size:cover;bottom:0;height:130%;min-height:334px;top:-28px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-container{flex:1;max-width:100%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list{display:inline-flex;justify-content:center;max-width:unset;flex-wrap:nowrap;margin:0 0 18px;padding:0;position:relative}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{width:160px;padding:0 11px 50px;box-sizing:border-box;margin-bottom:0;margin-left:0;margin-right:0}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link .description{display:block;margin:0 auto;max-width:146px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link ~ .hover-line{content:" ";left:0;bottom:0;width:0;background-color:#979797;opacity:0;height:2px;position:absolute;transition:all .5s ease-in-out}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:hover ~ .hover-line{opacity:1}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(1):hover ~ .hover-line{left:0;opacity:1}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(2):hover ~ .hover-line{left:160px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(3):hover ~ .hover-line{left:320px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(4):hover ~ .hover-line{left:480px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(5):hover ~ .hover-line{left:640px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(6):hover ~ .hover-line{left:800px}
}
@media only screen and (min-width:1024px) and (max-height:740px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{margin-top:70px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{height:180%}
}
@media only screen and (min-width:1025px){.dtv-anchor-links .dtv-anchor-links-legal-text{color:#cfd8dc;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:11px;position:absolute;right:25px;top:14px;left:auto}
.dtv-anchor-links .dtv-anchor-links-legal-text p{margin:0;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{flex:0;height:198px;margin-top:154px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .button{margin-top:40px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{height:110%;top:46px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list{max-width:100%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{width:231px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link ~ .hover-line{width:231px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(2):hover ~ .hover-line{left:231px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(3):hover ~ .hover-line{left:462px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(4):hover ~ .hover-line{left:693px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(5):hover ~ .hover-line{left:924px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link:nth-child(6):hover ~ .hover-line{left:1155px}
}
@media only screen and (min-width:1025px) and (max-width:1440px),only screen and (min-width:1025px) and (max-height:756px){.dtv-anchor-links .dtv-anchor-links-legal-text{top:1%}
.dtv-anchor-links p{font-size:14px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{font-size:40px;line-height:50px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .subtitle{font-size:22px;line-height:30px}
}
@media only screen and (min-width:1025px) and (max-width:1440px) and (max-height:756px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{height:90%;top:2%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{height:150%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{padding-bottom:1%}
}
@media only screen and (min-width:1025px) and (max-width:1440px) and (max-height:648px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{margin-top:3%}
}
@media only screen and (min-width:1025px) and (max-width:1440px) and (max-height:576px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{top:-35%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{height:180%}
}
@media only screen and (min-width:1025px) and (max-width:1920px) and (max-height:900px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{margin-top:3%}
}
@media only screen and (min-width:1025px) and (min-width:1920px) and (min-height:900px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list{margin:0}
}
@media only screen and (min-width:1920px){.dtv-anchor-links{height:1015px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{top:30px;background-image:url('clientlib-site/css/resources/components/gradients/bandas-desktop-full.svg')}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list{margin:0 0 77px}
}
@media only screen and (max-width:480px){.dtv-anchor-links{min-height:1054px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .button{margin-top:13px;width:100%}
.dtv-anchor-links .dtv-anchor-links-content-list .anchor-link{margin-left:15px;margin-right:15px}
.dtv-anchor-links .dtv-anchor-links-legal-text{position:absolute;color:#fff;z-index:1;left:0;right:0;top:685px}
.dtv-anchor-links .dtv-anchor-links-legal-text p{text-align:center;opacity:.5;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:11px}
}
@media only screen and (device-width:375px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{font-size:36px;line-height:42px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{margin-right:0;margin-left:0;width:172px}
}
@media screen and (device-aspect-ratio:40/71){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{font-size:36px;line-height:42px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{margin-right:0;margin-left:0;width:148px}
}
@media only screen and (device-width:375px) and (device-height:812px) and (-webkit-device-pixel-ratio:3){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{font-size:36px;line-height:42px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{margin-right:0;margin-left:0;width:172px}
}
@media screen and (min-width:1024px) and (max-width:1440px),screen and (min-width:1024px) and (max-height:756px){.dtv-anchor-links .dtv-anchor-links-background img{object-position:center}
.dtv-anchor-links .dtv-anchor-links-legal-text{top:1%}
.dtv-anchor-links p{font-size:14px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .title{font-size:40px;line-height:50px}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header .subtitle{font-size:22px;line-height:30px}
}
@media screen and (min-width:1024px) and (max-width:1440px) and (max-height:756px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{height:90%;top:20%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{height:150%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list .anchor-link{padding-bottom:1%}
}
@media screen and (min-width:1024px) and (max-width:1440px) and (max-height:648px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{top:-8%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{margin-top:3%}
}
@media screen and (min-width:1024px) and (max-width:1440px) and (max-height:576px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{top:-10%}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .gradient{height:180%}
}
@media screen and (min-width:1024px) and (max-width:1920px) and (max-height:900px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-header{margin-top:3%}
}
@media screen and (min-width:1024px) and (min-width:1920px) and (min-height:900px){.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .dtv-anchor-links-content-list{margin:0}
}
@media screen and (min-width:1024px){.dtv-anchor-links{height:calc(100vh - 65px)}
.phones-visible .dtv-anchor-links{height:calc(100vh - 98px)}
.dtv-anchor-links .dtv-anchor-links-container .dtv-anchor-links-content .bands{top:22%}
.cq-Editable-dom.dtv-anchor-links,.phones-visible .cq-Editable-dom.dtv-anchor-links,.cq-Editable-dom .dtv-anchor-links,.phones-visible .cq-Editable-dom .dtv-anchor-links{height:900px;min-height:900px}
}
.activeplan-detail>.plandetail-title{margin-top:48px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:500;font-style:normal;font-stretch:normal;line-height:1.17;letter-spacing:normal;text-align:center;color:#000}
.activeplan-detail>.plandetail-body{display:flex;flex-direction:column;box-sizing:border-box;padding:32px;margin:32px 0;width:920px;border-radius:5px;border:solid 1px #ffc60b;background-color:#fffde7;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:2;letter-spacing:normal;color:#000}
.activeplan-detail>.plandetail-body>div{display:flex;flex-direction:row;align-items:flex-start;justify-content:space-between}
.activeplan-detail>.plandetail-body>div>.plandetail-description{width:50%}
.activeplan-detail>.plandetail-body>div>.plandetail-description>div>ul>li::before{content:"\2022";color:#ffc60b;font-weight:bold;display:inline-block;width:1em}
.activeplan-detail>.plandetail-body>div>.plandetail-description a{color:#0073ae}
.activeplan-detail>.plandetail-body>div>.plandetail-illustration{width:50%}
.activeplan-detail>.plandetail-body>.directv-ui-button{width:fit-content;height:48px;padding:0 48px;margin:0 auto;margin-top:32px}
.activeplan-detail>.plandetail-disclaimer .generic-disclaimer-class{margin-top:0;margin-bottom:32px}
.activeplan-detail>.plandetail-disclaimer .generic-disclaimer-class>p{padding:0;margin:0;text-align:center}
@media screen and (max-width:480px){.activeplan-detail{box-sizing:border-box;padding:0 11px}
.activeplan-detail>.plandetail-body{flex-direction:column;padding:16px 16px 32px;margin:32px 0 24px;width:100%}
.activeplan-detail>.plandetail-body>div{flex-direction:column}
.activeplan-detail>.plandetail-body>div>.plandetail-description{width:100%;margin-bottom:32px}
.activeplan-detail>.plandetail-body>div>.plandetail-illustration{width:100%}
.activeplan-detail>.plandetail-body>div>.plandetail-illustration>img{width:100%}
.activeplan-detail>.plandetail-body>div>.plandetail-illustration>.plandetail-shortdescription{margin-bottom:32px}
.activeplan-detail>.plandetail-body>div>.plandetail-illustration>.plandetail-shortdescription:last-child{margin-bottom:0}
.activeplan-detail>.plandetail-body>.directv-ui-button{width:calc(100% - 64px - 32px);height:48px}
.activeplan-detail>.plandetail-disclaimer .generic-disclaimer-class{margin-bottom:24px}
}
@media screen and (min-width:480px) and (max-width:970px){.activeplan-detail{box-sizing:border-box;padding:0 11px}
.activeplan-detail>.plandetail-body{padding:16px 16px 32px;width:100%}
.activeplan-detail>.plandetail-body>div>.plandetail-description{width:100%;margin-bottom:32px}
.activeplan-detail>.plandetail-body>div>.plandetail-illustration{width:100%}
.activeplan-detail>.plandetail-body>div>.plandetail-illustration>.plandetail-shortdescription{margin-bottom:32px}
.activeplan-detail>.plandetail-body>div>.plandetail-illustration>.plandetail-shortdescription:last-child{margin-bottom:0}
.activeplan-detail>.plandetail-disclaimer .generic-disclaimer-class{margin-bottom:24px;grid-column:span 12}
}
.activateplan-container{background-color:#fff}
.activateplan-container>.activateplan-wrapper>.activateplan-tabs{border-radius:5px;box-shadow:0 16px 32px 0 rgba(0,0,0,0.1);background-color:#fff}
@media screen and (min-width:970px){.activateplan-container{background-color:#fafafa;padding:86px 16px 48px}
.activateplan-container>.activateplan-wrapper{max-width:calc(1440px - 32px);margin:0 auto;display:grid;grid-template-columns:repeat(12,1fr);grid-gap:16px}
.activateplan-container>.activateplan-wrapper>.activateplan-title{grid-column:span 12}
.activateplan-container>.activateplan-wrapper>.activateplan-tabs{margin-top:24px;grid-column:2 / span 10}
.activateplan-container>.activateplan-wrapper>.activateplan-tabs>.activateplan-tabbar>.generic-tabs{width:100%;grid-column:2 / span 8}
.activateplan-container>.activateplan-wrapper>.activateplan-tabs>.activateplan-tabbar>.generic-tabs>.generictabs-small{width:auto}
.activateplan-container>.activateplan-wrapper>.activateplan-tabs>.activateplan-tabbar>.generic-tabs>.generictabs-medium{width:auto}
.activateplan-container>.activateplan-wrapper>.activateplan-tabs>.activateplan-tabbar>.generic-tabs>.generictabs-large{width:auto}
.activateplan-container>.activateplan-wrapper>.activateplan-tabs>.activateplan-tabbar-body>div{grid-column:2 / span 8}
.activateplan-container>.activateplan-wrapper>.activateplan-tabs>.activateplan-tabbar-body>div .plandetail-body{width:100%}
.row-8{display:grid;grid-gap:16px;grid-template-columns:repeat(8,1fr)}
.row-10{display:grid;grid-gap:16px;grid-template-columns:repeat(10,1fr)}
}
.tabbar-body .centered-content{text-align:center}
.tabbar-body:not(:first-of-type){display:none}
.premium-pack-landing-page-container{width:100%;overflow-x:hidden;background-color:#000;min-height:100vh}
.premium-pack-landing-page-container .premium-pack-header{position:relative}
.premium-pack-landing-page-container .premium-pack-header .breadcrumb{position:absolute;top:0;z-index:10}
.premium-pack-landing-page-container .promotional-back-image{width:100%;height:508px;background-position:center top;background-repeat:no-repeat;background-size:cover;position:relative}
.premium-pack-landing-page-container .promotional-back-image .backgradient-top{position:absolute;top:0;height:99px;width:100%;background:-moz-linear-gradient(top,#000 0,rgba(0,0,0,0) 100%);background:-webkit-linear-gradient(top,#000 0,rgba(0,0,0,0) 100%);background:linear-gradient(to bottom,#000 0,rgba(0,0,0,0) 100%)}
.premium-pack-landing-page-container .promotional-back-image .backgradient-bottom{position:absolute;bottom:0;height:99px;width:100%;background:-moz-linear-gradient(bottom,#000 0,rgba(0,0,0,0) 100%);background:-webkit-linear-gradient(bottom,#000 0,rgba(0,0,0,0) 100%);background:linear-gradient(to top,#000 0,rgba(0,0,0,0) 100%)}
.premium-pack-landing-page-container .landing-content{width:100%;display:flex;justify-content:start;flex-direction:column;align-items:center;margin-top:-10.5%;margin-bottom:209px;position:relative}
.premium-pack-landing-page-container .landing-content .landing-limit{max-width:1440px;width:100%;box-sizing:border-box;padding:0 24px}
.premium-pack-landing-page-container.pack-monochannel{background-color:#fafafa}
@media only screen and (max-width:480px){.premium-pack-landing-page-container{background-image:none}
.premium-pack-landing-page-container .promotional-back-image{height:0;padding-top:96%}
.premium-pack-landing-page-container .promotional-back-image .backgradient-top{height:80px}
.premium-pack-landing-page-container .promotional-back-image .backgradient-bottom{height:226px}
}
@media only screen and (min-width:1440px){.premium-pack-landing-page-container .promotional-back-image .backgradient-bottom{height:256px}
}
@media only screen and (min-width:480px) and (max-width:1440px){.premium-pack-landing-page-container{background-image:none}
.premium-pack-landing-page-container .promotional-back-image{height:0;padding-top:35.27%}
.premium-pack-landing-page-container .promotional-back-image .backgradient-bottom{height:256px}
}
.premium-package-detail-container .pdp-full-width-container{width:100%}
.premium-package-detail-container .dark-background{background-color:#1d1d1d}
.premium-package-detail-container .pdp-boxed-container{width:100%;max-width:1440px;margin:0 auto}
.premium-package-detail-container .pdp-dynamic-container{max-width:1440px;width:100%;margin:0 auto}
.premium-package-detail-container .premium-package-header-top{position:relative}
.premium-package-detail-container .premium-package-header-top .breadcrumb{position:fixed;top:0;z-index:10}
.premium-package-detail-container #premium-package-featured{position:relative}
.premium-package-detail-container #premium-package-featured .now-playing-container{position:absolute;top:0;display:flex;justify-content:center;width:100%}
.premium-package-detail-container #premium-package-featured .now-playing-container .now-playing-text{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-weight:normal;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;text-align:right;color:#9e9e9e;max-width:1440px;width:100%;padding-right:24px;padding-top:6px}
.premium-package-detail-container #premium-pack-channels-detail{margin-top:124px}
.premium-package-detail-container #premium-pack-channels-detail.no_margin_top{margin-top:0}
.premium-package-detail-container .pading-bottom-divider{padding-bottom:51px}
.premium-package-detail-container .ligth_background{background-color:#fafafa}
.premium-package-detail-container #pack-offers-lane{border-radius:5px;box-sizing:border-box;left:0;margin:0 auto;max-width:1440px;padding:0 12px;position:absolute;right:0;transform:translateY(-50%);width:calc(100% - 24px);z-index:2}
@media screen and (min-width:768px){.premium-package-detail-container #pack-offers-lane{width:calc(100% - 48px);padding:0 24px}
}
.premium-package-detail-container .cds-learn-more-links-container{margin-bottom:16px}
.premium-package-detail-container .cds-learn-more-links-container .component-title .dtv-public-icon-book{color:#00aeef}
.premium-package-detail-container .generic-disclaimer-class{margin-top:16px}
.premium-package-detail-container.monochannel-page{background-color:#fafafa}
.premium-package-detail-container.monochannel-page .monochannel-header .monochannel-header-content{padding-bottom:0;background-color:#fafafa;position:relative}
.premium-package-detail-container.monochannel-page .monochannel-header .monochannel-header-content #premium-pack-channels-detail{display:none}
.premium-package-detail-container.monochannel-page .monochannel-header .monochannel-header-content #premium-description-container{margin-top:99px}
.premium-package-detail-container.monochannel-page .monochannel-header .monochannel-header-content #pack-offers-lane{left:0;position:absolute;right:0;transform:translateY(-50%)}
.premium-package-detail-container.monochannel-page .monochannel-content #premium-pack-channel-only{margin-top:107px}
.premium-package-detail-container .dtv-premium-pack-featured-gradient{position:absolute;height:461px;bottom:0;left:0;width:100%;background-image:linear-gradient(to bottom,rgba(29,29,29,0),#1d1d1d)}
.premium-package-detail-container .pdp-footer{margin-top:65px}
.premium-package-detail-container .cmp-text{padding:0 12px}
@media screen and (max-width:970px){.premium-package-detail-container.monochannel-page .monochannel-header .monochannel-header-content #premium-description-container{margin-top:188px}
.premium-package-detail-container #premium-pack-channels-detail{margin-top:190px}
}
@media screen and (max-width:480px){.premium-package-detail-container #premium-package-featured .now-playing-container .now-playing-text{text-align:center;padding-right:0;padding-top:19px}
.premium-package-detail-container.monochannel-page .monochannel-content .pdp-boxed-container #premium-pack-channels-detail{margin-top:0;padding:0}
.premium-package-detail-container.monochannel-page .monochannel-content .pdp-boxed-container #premium-pack-channels-detail .tab_wrapper .title-container .title{font-size:32px;line-height:1.19;margin-bottom:24px}
.premium-package-detail-container.monochannel-page .monochannel-content .pdp-boxed-container #premium-pack-channels-detail .tab_wrapper .dynamictabs_container{margin-bottom:91px}
.premium-package-detail-container.monochannel-page .monochannel-content #premium-pack-channel-only .title-container .title{font-size:32px;line-height:1.19}
.premium-package-detail-container.monochannel-page .monochannel-content .pdp-full-width-container{margin-top:57px}
.premium-package-detail-container .dtv-premium-pack-featured-gradient{height:501px}
}
.plans-landing-page-container{background-color:transparent;position:relative;width:100%;overflow-x:hidden}
.plans-landing-page-container .cards-container{margin-bottom:113.5px}
.plans-landing-page-container::after{position:fixed;content:" ";width:100%;height:100vh;background:#fafafa url('../../../content/dam/public-sites/plans/images/bg-plans-order.svg');z-index:-1;background-repeat:no-repeat;top:0;background-size:cover;left:0}
@media only screen and (max-width:480px){.plans-landing-page-container{background-image:none}
}
.dtv-footer-wrapper.solid{background:#000 !important}
.top-bar.fixed,.Info-Phone.fixed{display:none !important}
.test_bar{display:none !important}
.sticky-footer{position:static !important}
.Info-Phone.Fixed-Info-Phone{position:static !important}
.Box-Clientes{display:none}
#Box-Clientes{display:none}
.dtv-footer-wrapper{background:var(--bg-desktop);background-size:cover;padding:53px 0 49px 0;clear:both}
.dtv-footer-wrapper .footer-content{max-width:1440px;padding:0 28px;margin:0 auto;display:flex;box-sizing:border-box;flex-direction:column;font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:normal;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;color:#fff}
.dtv-footer-wrapper .footer-content ul{border:0;list-style-type:none;margin:0;padding:0}
.dtv-footer-wrapper .footer-content a{font-family:"Palanquin","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;text-decoration:none;color:#fff}
.dtv-footer-wrapper .footer-content i::before{color:#fff}
.dtv-footer-wrapper .footer-content>.footer-header{display:flex;box-sizing:border-box;justify-items:center}
.dtv-footer-wrapper .footer-content>.footer-header>.footer-logo{margin-right:40px;width:154px}
.dtv-footer-wrapper .footer-content>.footer-header>.footer-title{color:#fff;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:28px}
.dtv-footer-wrapper .footer-content>.footer-section{margin-top:52px;display:grid;box-sizing:border-box;grid-template-columns:repeat(6,1fr);grid-gap:25px}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>div{display:flex;justify-content:space-between;align-items:center}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>div>.section-title,.dtv-footer-wrapper .footer-content>.footer-section>.section-card>div .section-title-follow{color:#fff;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;line-height:1.25}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>div>.section-title{text-transform:uppercase}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>div>.section-title-link>a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:24px;font-weight:bold;text-transform:uppercase;text-decoration:underline;line-height:1.25}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>div>.chevron-down{display:none;margin-left:9px}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>div>.chevron-down>i{border:solid #fff;border-width:0 2px 2px 0;display:inline-block;padding:4px;margin-left:8px;margin-bottom:2px;transform:rotate(45deg);-webkit-transform:rotate(45deg)}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>ul{margin-top:24px}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>ul>li{border:0;font-size:16px;line-height:2.35;padding:0}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>.section-social{margin-top:25px;margin-bottom:35px;display:flex;box-sizing:border-box}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>.section-social>a{margin-right:15px}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>.section-social>a>img{width:42px}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>.section-social>a:last-child{margin-right:0}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>.section-apps{margin-top:25px;display:flex;flex-direction:column;align-items:flex-start;box-sizing:border-box}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>.section-apps>a{margin-bottom:20px}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>.section-apps>a>img{width:208px}
.dtv-footer-wrapper .footer-content>.footer-section>.section-card>.section-apps>a:last-child{margin-bottom:0}
.dtv-footer-wrapper .footer-content>.footer-legal{color:#fff;text-align:center;margin-top:42px}
.dtv-footer-wrapper .footer-content>.footer-legal>span>a{font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:16px;text-decoration:underline;line-height:3}
.dtv-footer-wrapper .footer-content>.footer-legal>span::after{content:" | "}
.dtv-footer-wrapper .footer-content>.footer-legal>span:last-child::after{content:" "}
.dtv-footer-wrapper .footer-content>.footer-copy{color:#fff;margin-top:37px;font-family:"DIRECTVCurve","Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;text-align:center}
@media only screen and (max-width:970px){.dtv-footer-wrapper{background:var(--bg-mobile) no-repeat #000;background-size:100%;padding:59px 0 54px 0}
.dtv-footer-wrapper>.footer-content>.footer-header{flex-direction:column;align-items:center}
.dtv-footer-wrapper>.footer-content>.footer-header>.footer-logo{margin-right:0;height:26px}
.dtv-footer-wrapper>.footer-content>.footer-header>.footer-title{margin-top:27px;font-size:24px;text-align:center}
.dtv-footer-wrapper>.footer-content>.footer-section{margin-top:84px;grid-template-columns:1fr;grid-gap:41px}
.dtv-footer-wrapper>.footer-content>.footer-section>.section-card>ul{display:none;margin-top:42px;transition:display 1s linear}
.dtv-footer-wrapper>.footer-content>.footer-section>.section-card>.section-social{justify-content:flex-start;margin-top:35px;margin-bottom:43px}
.dtv-footer-wrapper>.footer-content>.footer-section>.section-card>.section-apps{margin-top:20px}
.dtv-footer-wrapper>.footer-content>.footer-section>.section-card>div>.chevron-down{display:block}
.dtv-footer-wrapper>.footer-content>.footer-legal{margin-top:55px;display:flex;flex-direction:column;text-align:left}
.dtv-footer-wrapper>.footer-content>.footer-legal>span::after{content:" "}
}
@media only screen and (min-width:970px) and (max-width:1024px){.dtv-footer-wrapper>.footer-content>.footer-header{flex-direction:column;align-items:center}
.dtv-footer-wrapper>.footer-content>.footer-header>.footer-logo{margin-right:0;height:26px}
.dtv-footer-wrapper>.footer-content>.footer-header>.footer-title{margin-top:20px;font-size:24px}
.dtv-footer-wrapper>.footer-content>.footer-section{margin-top:84px;grid-template-columns:repeat(3,1fr);grid-row-gap:60px;grid-column-gap:34px}
.dtv-footer-wrapper>.footer-content>.footer-section>.section-card>ul{margin-top:42px}
.dtv-footer-wrapper>.footer-content>.footer-section>.section-card>.section-social{margin-top:42px;margin-bottom:50px}
.dtv-footer-wrapper>.footer-content>.footer-section>.section-card>.section-apps{margin-top:36px}
.dtv-footer-wrapper>.footer-content>.footer-legal{margin-top:55px}
}
.compras-category-page-container{background-color:#fafafa;min-height:100vh;overflow-x:hidden}
.compras-category-page-container .limited-container{max-width:1440px;margin:0 auto}
.compras-category-page-container .subcategory-title{margin-top:96px}
@media only screen and (max-width:767px){.compras-category-page-container .limited-container{padding:0 24px}
}
@media only screen and (max-width:480px){.compras-category-page-container .limited-container{padding:0 11px}
.compras-category-page-container .subcategory-title{margin-top:48px}
}
</style>


























<head>
  <style>
    body { background-color: #5D6D7E; }
  </style>
</head>
<body>
</body>

<!DOCTYPE HTML>
<html lang="es" data-lang-ps="es" data-country-ps="pe">
    <head>
  
  
    <script src="https://www.datadoghq-browser-agent.com/datadog-rum-us.js" type="text/javascript">
    </script>
    <script>
      window.DD_RUM && window.DD_RUM.init({
        clientToken: 'pubbe78083e55c6a782c9d8e46bf9b2cb51',
        applicationId: '1ffe1076-4045-4316-8c41-3a8fefa3b37d',
      });
    </script>
  
  
  
  








    
    
 

    



    

    
    
    

    

    
    
    

    



  

  
  

</head>
   
        
        
            




<div data-availableonly="Disponible con" data-country="pe" data-language="es" data-path="/bin/public-sites/mock/plans.html/pe/es/plan_1382298026_copy" data-hidefilter="true" data-category="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_999812908" data-categorydefault="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_999812908" id="a3f65963-df2b-4cd1-b6e5-c4e231439c02" class="chanel-search-component hide-filter">
    <div class="title-container section-title">
        
    <h1 class="title">
        Variedades
    </h1>
    
    <div class="line"></div>
    <div class="description"></div>

    </div>

    

   <!--chanels from master?-->
    <div class="channels justify-center"><div channel-id="channel1556652668132" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15947">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/207.png" alt=""></a>
                    <div class="name">A&amp;E Mundo</div>
                    <div class="number">207</div>
                </div><div channel-id="channel1556652668132" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16538">
                    <img class="logo" src="https://logos-download.com/wp-content/uploads/2016/06/Discovery_Channel_logo_colored.png" alt=""></a>
                    <div class="name">Discovey channel</div>
                    <div class="number">207</div>
                </div><div channel-id="channel1556652670635" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15954">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/210.png" alt=""></a>
                    <div class="name">AMC Co</div>
                    <div class="number">210</div>
                </div><div channel-id="channel1556652670635" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15957">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/210.png" alt=""></a>
                    <div class="name">AMC Mx</div>
                    <div class="number">210</div>
                </div><div channel-id="channel1556652669984" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15960">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/209.png" alt=""></a>
                    <div class="name">AXN</div>
                    <div class="number">209</div>
                </div><div channel-id="channel1556652673226" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16536">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/215.png" alt=""></a>
                    <div class="name">Comedy Central Co</div>
                    <div class="number">215</div>
                </div><div channel-id="channel1556652673226" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16538">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/215.png" alt=""></a>
                    <div class="name">Comedy Central Mx</div>
                    <div class="number">215</div>
                </div><div channel-id="channel1556652682278" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16273">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/229.png" alt=""></a>
                    <div class="name">Discovery Home &amp; Health Co</div>
                    <div class="number">229</div>
                </div><div channel-id="channel1556652682278" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16276">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/229.png" alt=""></a>
                    <div class="name">Discovery Home &amp; Health Mx</div>
                    <div class="number">229</div>
                </div><div channel-id="channel1556652677728" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16334">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/222.png" alt=""></a>
                    <div class="name">E! Entertainment</div>
                    <div class="number">222</div>
                </div><div channel-id="channel1556652684195" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16336">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/232.png" alt=""></a>
                    <div class="name">El Gourmet.com</div>
                    <div class="number">232</div>
                </div><div channel-id="channel1556652684850" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16338">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/233.png" alt=""></a>
                    <div class="name">Food Network</div>
                    <div class="number">233</div>
                </div><div channel-id="channel1556652666837" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15980">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/202.png" alt=""></a>
                    <div class="name">Fox Co</div>
                    <div class="number">202</div>
                </div><div channel-id="channel1556652666837" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15983">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/202.png" alt=""></a>
                    <div class="name">Fox Mx</div>
                    <div class="number">202</div>
                </div><div channel-id="channel1556652671287" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15987">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/212.png" alt=""></a>
                    <div class="name">Fox Life</div>
                    <div class="number">212</div>
                </div><div channel-id="channel1556652674499" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16022">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/217.png" alt=""></a>
                    <div class="name">FX</div>
                    <div class="number">217</div>
                </div><div channel-id="channel1556652674499" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16023">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/FX_Movies_logo.svg/1200px-FX_Movies_logo.svg.png" alt=""></a>
                    <div class="name">FXM</div>
                    <div class="number">217</div>
                </div><div channel-id="channel1556652679040" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16598">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/224.png" alt=""></a>
                    <div class="name">Glitz</div>
                    <div class="number">224</div>
                </div><div channel-id="channel1556652677090" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16343">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/221.png" alt=""></a>
                    <div class="name">HOLA! TV</div>
                    <div class="number">221</div>
                </div><div channel-id="channel1556652678383" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16260">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/223.png" alt=""></a>
                    <div class="name">Investigation Discovery</div>
                    <div class="number">223</div>
                </div><div channel-id="channel1556652680327" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16347">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/226.png" alt=""></a>
                    <div class="name">Las estrellas</div>
                    <div class="number">226</div>
                </div><div channel-id="channel1556652681633" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16352">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/228.png" alt=""></a>
                    <div class="name">Lifetime</div>
                    <div class="number">228</div>
                </div><div channel-id="channel1556652682917" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16355">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/230.png" alt=""></a>
                    <div class="name">Más Chic</div>
                    <div class="number">230</div>
                </div><div channel-id="channel1556652679679" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16210">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/225.png" alt=""></a>
                    <div class="name">Pasiones</div>
                    <div class="number">225</div>
                </div><div channel-id="channel1556652669331" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16072">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/208.png" alt=""></a>
                    <div class="name">Sony Channel </div>
                    <div class="number">208</div>
                </div><div channel-id="channel1556652675804" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16078">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/219.png" alt=""></a>
                    <div class="name">Syfy</div>
                    <div class="number">219</div>
                </div><div channel-id="channel1556652673867" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16357">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/216.png" alt=""></a>
                    <div class="name">TBS</div>
                    <div class="number">216</div>
                </div><div channel-id="channel1556652683561" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16359">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/231.png" alt=""></a>
                    <div class="name">Telemundo</div>
                    <div class="number">231</div>
                </div><div channel-id="channel1556652680972" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16620">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/227.png" alt=""></a>
                    <div class="name">Tlnovelas</div>
                    <div class="number">227</div>
                </div><div channel-id="channel1556652671924" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16091">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/213.png" alt=""></a>
                    <div class="name">TNT Series</div>
                    <div class="number">213</div>
                </div><div channel-id="channel1556652676449" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16307">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/220.png" alt=""></a>
                    <div class="name">TruTV</div>
                    <div class="number">220</div>
                </div><div channel-id="channel1556652675160" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16098">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/218.png" alt=""></a>
                    <div class="name">Universal Channel</div>
                    <div class="number">218</div>
                </div><div channel-id="channel1556652667480" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16112">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/206.png" alt=""></a>
                    <div class="name">Warner </div>
                    <div class="number">206</div>
                </div></div>
    <div class="promo-tooltip">
    </div>

    <div class="see-more-button">
        <div class="rectangle"></div>
        <div class="button directv-ui-button">
            Ver más
        </div>
    </div>
</div>
  
  <div data-availableonly="Disponible con" data-country="pe" data-language="es" data-path="/bin/public-sites/mock/plans.html/pe/es/plan_1382298026_copy" data-hidefilter="true" data-category="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_1628544201" data-categorydefault="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_1628544201" id="bb21d3af-dbbb-46c8-96bc-a5cbacbafdd8" class="chanel-search-component hide-filter">
    <div class="title-container section-title">
        
    <h1 class="title">
        Infantiles
    </h1>
    
    <div class="line"></div>
    <div class="description"></div>

    </div>

    

    <!--chanels from master?-->
    <div class="channels justify-center"><div channel-id="channel1556652693932" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16561">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/334.png" alt=""></a>
                    <div class="name">Boomerang</div>
                    <div class="number">334</div>
                </div><div channel-id="channel1556652693932" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16559">
                    <img class="logo" src="https://i.pinimg.com/originals/94/b9/56/94b9563c27b8a191c73b6a7486d929c5.png" alt=""></a>
                    <div class="name">Baby tv</div>
                    <div class="number">334</div>
                </div><div channel-id="channel1556652693932" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16563">
                    <img class="logo" src="https://www.babyfirsttv.com/wp-content/uploads/2019/08/babyfirst_logo_2019_BabyFirst-Vertical-1.png" alt=""></a>
                    <div class="name">Baby First TV</div>
                    <div class="number">33</div>
                </div><div channel-id="channel1556652688192" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16527">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/304.png" alt=""></a>
                    <div class="name">Cartoon Network</div>
                    <div class="number">304</div>
                </div><div channel-id="channel1556652693302" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16530">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/330.png" alt=""></a>
                    <div class="name">Discovery Kids</div>
                    <div class="number">330</div>
                </div><div channel-id="channel1556652690109" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16536">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/312.png" alt=""></a>
                    <div class="name">Disney Channel</div>
                    <div class="number">312</div>
                </div><div channel-id="channel1556652690751" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16555">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/315.png" alt=""></a>
                    <div class="name">Disney Junior</div>
                    <div class="number">315</div>
                </div><div channel-id="channel1556652691386" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16534">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/316.png" alt=""></a>
                    <div class="name">Disney XD</div>
                    <div class="number">316</div>
                </div><div channel-id="channel1556652692033" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16543">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/318.png" alt=""></a>
                    <div class="name">Natgeo Kids</div>
                    <div class="number">318</div>
                </div><div channel-id="channel1556652689476" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16553">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/309.png" alt=""></a>
                    <div class="name">Nick Jr.</div>
                    <div class="number">309</div>
                </div><div channel-id="channel1556652688830" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16547">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/308.png" alt=""></a>
                    <div class="name">Nickelodeon</div>
                    <div class="number">308</div>
                </div><div channel-id="channel1556652692667" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16565">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/321.png" alt=""></a>
                    <div class="name">ZooMoo</div>
                    <div class="number">321</div>
                </div><div channel-id="channel1556652721317" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16550">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/8/87/Nick_2_Logo_alternative.png" alt=""></a>
                    <div class="name">Nick 2</div>
                    <div class="number">610</div>
                </div><div channel-id="channel1556652721317" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16560">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Nicktoons-Network-original-balloon-text-logo.png" alt=""></a>
                    <div class="name">Nicktoon</div>
                    <div class="number">610</div>
                </div><div channel-id="channel1556652721317" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16547">
                    <img class="logo" src="https://www.logosdoneright.com/wp-content/uploads/2017/03/nick.png" alt=""></a>
                    <div class="name">Nickelodeon</div>
                    <div class="number">610</div>
                </div><div channel-id="channel1556652721317" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16566">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Pakapaka_canal_logo.svg/1200px-Pakapaka_canal_logo.svg.png" alt=""></a>
                    <div class="name">Pakapaka</div>
                    <div class="number">610</div>
                </div><div channel-id="channel1556652721317" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16564">
                    <img class="logo" src="https://3.bp.blogspot.com/-tm5SInIuRIo/XrWyb6KkWBI/AAAAAAAAPcE/M-0jJ4vIFGgr1FraM-mtChpMsmvrYY7ZQCLcBGAsYHQ/s1600/Semillitas2011.png" alt=""></a>
                    <div class="name">DIRECTV Sports</div>
                    <div class="number">610</div>
                </div><div channel-id="channel1556652721317" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16558">
                    <img class="logo" src="https://lh3.googleusercontent.com/proxy/bygW9OytrHiqkg1H7JkDRLdLkYXoOLIEJKvbIinUXnaXOCsryFGW4rQpyzevRWvtU_1Kk5ARqGuq049IbfPWvO7aNAGE-HPuEiwfFXOxkmtUT90" alt=""></a>
                    <div class="name">Tooncast</div>
                    <div class="number">610</div>
                </div><div channel-id="channel1556652721317" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16565">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/ZooMoo_logo.svg/1200px-ZooMoo_logo.svg.png" alt=""></a>
                    <div class="name">Zoomoo</div>
                    <div class="number">610</div>
                </div></div>
    <div class="promo-tooltip">
    </div>

    <div class="see-more-button">
        <div class="rectangle"></div>
        <div class="button directv-ui-button">
            Ver más
        </div>
    </div>
</div>
  
  <div data-availableonly="Disponible con" data-country="pe" data-language="es" data-path="/bin/public-sites/mock/plans.html/pe/es/plan_1382298026_copy" data-hidefilter="true" data-category="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_336183809" data-categorydefault="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_336183809" id="dff4d7ce-5a23-46bc-8a87-cbb446b2abb0" class="chanel-search-component hide-filter">
    <div class="title-container section-title">
        
    <h1 class="title">
        Deportes
    </h1>
    
    <div class="line"></div>
    <div class="description"></div>

    </div>

    

    <!--chanels from master?-->
    <div class="channels justify-center"><div channel-id="channel1556652721317" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20432">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/610.png" alt=""></a>
                    <div class="name">DIRECTV Sports</div>
                    <div class="number">610</div>
                </div><div channel-id="channel1556652722617" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20434">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/613.png" alt=""></a>
                    <div class="name">DIRECTV Sports +</div>
                    <div class="number">613</div>
                </div><div channel-id="channel1556652721985" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20433">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/612.png" alt=""></a>
                    <div class="name">DIRECTV Sports 2</div>
                    <div class="number">612</div>
                </div><div channel-id="channel1556652723254" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20410">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/621.png" alt=""></a>
                    <div class="name">ESPN</div>
                    <div class="number">621</div>
                </div><div channel-id="channel1556652723889" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20411">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/625.png" alt=""></a>
                    <div class="name">ESPN 2</div>
                    <div class="number">625</div>
                </div><div channel-id="channel1556652724534" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20412">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/626.png" alt=""></a>
                    <div class="name">ESPN3</div>
                    <div class="number">626</div>
                </div><div channel-id="channel1556652719405" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20402">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/604.png" alt=""></a>
                    <div class="name">Fox Sports</div>
                    <div class="number">604</div>
                </div><div channel-id="channel1556652720049" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20403">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/608.png" alt=""></a>
                    <div class="name">Fox Sports 2</div>
                    <div class="number">608</div>
                </div><div channel-id="channel1556652720677" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20404">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/609.png" alt=""></a>
                    <div class="name">Fox Sports 3</div>
                    <div class="number">609</div>
                </div><div channel-id="channel1556652725190" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20405">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Claro_Sports_logo.svg/1200px-Claro_Sports_logo.svg.png" alt=""></a>
                    <div class="name">Claro Sport</div>
                    <div class="number">628</div>
                </div><div channel-id="channel1556652725190" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16694">
                    <img class="logo" src="https://www.andorratelecom.com/at/llistat-canals/canals/208-laliga-tv-bar.png" alt=""></a>
                    <div class="name">La liga tv bar</div>
                    <div class="number">628</div>
                </div><div channel-id="channel_1675300132" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/644.png" alt=""></a>
                    <div class="name">NBA TV</div>
                    <div class="number">644</div>
                </div><div channel-id="channel1556652725825" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15091">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/629.png" alt=""></a>
                    <div class="name">TyC Sports</div>
                    <div class="number">629</div>
                </div><div channel-id="channel1556652705239" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20431">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/GolTV_logo.svg/1280px-GolTV_logo.svg.png" alt=""></a>
                    <div class="name">Gol Tv</div>
                    <div class="number">514</div>
                </div><div channel-id="channel1556652705239" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20401">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Movistar_LaLiga.svg/1200px-Movistar_LaLiga.svg.png" alt=""></a>
                    <div class="name">Movistar laliga</div>
                    <div class="number">514</div>
                </div><div channel-id="channel1556652705239" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15051">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Sky_Sports_logo_2017.svg/1280px-Sky_Sports_logo_2017.svg.png" alt=""></a>
                    <div class="name">Sky sport</div>
                    <div class="number">514</div>
                </div><div channel-id="channel1556652705239" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20430">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Bein_Sport_en_espa%C3%B1ol_logo.svg/800px-Bein_Sport_en_espa%C3%B1ol_logo.svg.png" alt=""></a>
                    <div class="name">Beinñsport</div>
                    <div class="number">514</div>
                </div><div channel-id="channel1556652705239" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15090">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/TNT_Sports_logo.svg/1200px-TNT_Sports_logo.svg.png" alt=""></a>
                    <div class="name">Tnt Sport</div>
                    <div class="number">514</div>
                </div><div channel-id="channel1556652705239" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/20336">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Movistar_Deportes.svg/1200px-Movistar_Deportes.svg.png" alt=""></a>
                    <div class="name">Movistar deportes</div>
                    <div class="number">514</div>
                </div><div channel-id="channel1556652705239" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15139">
                    <img class="logo" src="https://vignette.wikia.nocookie.net/logopedia/images/c/cb/Gol_Per%C3%BA_2016.svg/revision/latest/scale-to-width-down/340?cb=20200417023402&path-prefix=es" alt=""></a>
                    <div class="name">Gol peru</div>
                    <div class="number">514</div>
                </div><div channel-id="channel1556652705239" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15103">
                    <img class="logo" src="https://vignette.wikia.nocookie.net/logopedia/images/c/cb/Gol_Per%C3%BA_2016.svg/revision/latest/scale-to-width-down/340?cb=20200417023402&path-prefix=es" alt=""></a>
                    <div class="name">Tigo Sport</div>
                    <div class="number">514</div>
                </div></div>
    <div class="promo-tooltip">
    </div>

    <div class="see-more-button">
        <div class="rectangle"></div>
        <div class="button directv-ui-button">
            Ver más
        </div>
    </div>
</div>
  
  
  
  
  <div data-availableonly="Disponible con" data-country="pe" data-language="es" data-path="/bin/public-sites/mock/plans.html/pe/es/plan_1382298026_copy" data-hidefilter="true" data-category="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_252446880" data-categorydefault="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_252446880" id="f619df71-0c50-43f7-b904-c794d7e95bcb" class="chanel-search-component hide-filter">
    <div class="title-container section-title">
        
    <h1 class="title">
        Cine
    </h1>
    
    <div class="line"></div>
    <div class="description"></div>

    </div>

    

    <!--chanels from master?-->
    <div class="channels justify-center"><div channel-id="channel1556652705239" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/514.png" alt=""></a>
                    <div class="name">Cine Latino</div>
                    <div class="number">514</div>
                </div><div channel-id="channel1556652702038" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/507.png" alt=""></a>
                    <div class="name">Cinecanal</div>
                    <div class="number">507</div>
                </div><div channel-id="channel1556652703316" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/509.png" alt=""></a>
                    <div class="name">Cinemax</div>
                    <div class="number">509</div>
                </div><div channel-id="channel1556652705926" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/516.png" alt=""></a>
                    <div class="name">De Película</div>
                    <div class="number">516</div>
                </div><div channel-id="channel1556652704595" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/513.png" alt=""></a>
                    <div class="name">DHE</div>
                    <div class="number">513</div>
                </div><div channel-id="channel1556652701388" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/505.png" alt=""></a>
                    <div class="name">FX Movies</div>
                    <div class="number">505</div>
                </div><div channel-id="channel1556652700112" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/503.png" alt=""></a>
                    <div class="name">Golden</div>
                    <div class="number">503</div>
                </div><div channel-id="channel1556652706563" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/517.png" alt=""></a>
                    <div class="name">Golden EDGE</div>
                    <div class="number">517</div>
                </div><div channel-id="channel1556652707841" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/520.png" alt=""></a>
                    <div class="name">I-Sat</div>
                    <div class="number">520</div>
                </div><div channel-id="channel1556652703956" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/510.png" alt=""></a>
                    <div class="name">Paramount Channel</div>
                    <div class="number">510</div>
                </div><div channel-id="channel1556652707196" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/518.png" alt=""></a>
                    <div class="name">Space</div>
                    <div class="number">518</div>
                </div><div channel-id="channel1556652702677" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/508.png" alt=""></a>
                    <div class="name">Studio Universal</div>
                    <div class="number">508</div>
                </div><div channel-id="channel1556652700754" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/504.png" alt=""></a>
                    <div class="name">TCM</div>
                    <div class="number">504</div>
                </div><div channel-id="channel1556652699476" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/502.png" alt=""></a>
                    <div class="name">TNT</div>
                    <div class="number">502</div>
                </div></div>
    <div class="promo-tooltip">
    </div>

    <div class="see-more-button">
        <div class="rectangle"></div>
        <div class="button directv-ui-button">
            Ver más
        </div>
    </div>
</div>
  
  
  
  
  <div data-availableonly="Disponible con" data-country="pe" data-language="es" data-path="/bin/public-sites/mock/plans.html/pe/es/plan_1382298026_copy" data-hidefilter="true" data-category="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_1410942043" data-categorydefault="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_1410942043" id="84dbf770-1dc8-4be0-86c6-df7f497ee347" class="chanel-search-component hide-filter">
    <div class="title-container section-title">
        
    <h1 class="title">
        Mundos
    </h1>
    
    <div class="line"></div>
    <div class="description"></div>

    </div>

    

    <!--chanels from master?-->
    <div class="channels justify-center"><div channel-id="channel1556652740008" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/720.png" alt=""></a>
                    <div class="name">26Noticias</div>
                    <div class="number">720</div>
                </div><div channel-id="channel1556652745098" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/734.png" alt=""></a>
                    <div class="name">Animal Planet</div>
                    <div class="number">734</div>
                </div><div channel-id="channel1556652750837" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/762.png" alt=""></a>
                    <div class="name">Antena 3</div>
                    <div class="number">762</div>
                </div><div channel-id="channel1556652752131" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/768.png" alt=""></a>
                    <div class="name">BBC World News</div>
                    <div class="number">768</div>
                </div><div channel-id="channel1556652738736" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/710.png" alt=""></a>
                    <div class="name">Bloomberg TV</div>
                    <div class="number">710</div>
                </div><div channel-id="channel1556652743204" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/727.png" alt=""></a>
                    <div class="name">Cable Noticias</div>
                    <div class="number">727</div>
                </div><div channel-id="channel1556652742572" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/726_PE.png" alt=""></a>
                    <div class="name">Canal Rural</div>
                    <div class="number">726</div>
                </div><div channel-id="channel1556652753405" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/772.png" alt=""></a>
                    <div class="name">Caracol TV</div>
                    <div class="number">772</div>
                </div><div channel-id="channel1556652737416" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/707.png" alt=""></a>
                    <div class="name">CNN Chile</div>
                    <div class="number">707</div>
                </div><div channel-id="channel1556652736144" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/704.png" alt=""></a>
                    <div class="name">CNN en Español</div>
                    <div class="number">704</div>
                </div><div channel-id="channel1556652736779" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/706.png" alt=""></a>
                    <div class="name">CNN Intl</div>
                    <div class="number">706</div>
                </div><div channel-id="channel1556652744469" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/732.png" alt=""></a>
                    <div class="name">Discovery</div>
                    <div class="number">732</div>
                </div><div channel-id="channel1556652746387" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/736.png" alt=""></a>
                    <div class="name">Discovery Turbo</div>
                    <div class="number">736</div>
                </div><div channel-id="channel1556652752771" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/770.png" alt=""></a>
                    <div class="name">DW - Latinoamérica</div>
                    <div class="number">770</div>
                </div><div channel-id="channel1556652754053" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/773.png" alt=""></a>
                    <div class="name">El Tiempo</div>
                    <div class="number">773</div>
                </div><div channel-id="channel1556652757909" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/784.png" alt=""></a>
                    <div class="name">El Trece</div>
                    <div class="number">784</div>
                </div><div channel-id="channel1556652749567" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/746.png" alt=""></a>
                    <div class="name">Film &amp; Arts</div>
                    <div class="number">746</div>
                </div><div channel-id="channel1556652755984" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/776.png" alt=""></a>
                    <div class="name">Globo Intl</div>
                    <div class="number">776</div>
                </div><div channel-id="channel1556652741282" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/724.png" alt=""></a>
                    <div class="name">Globovision</div>
                    <div class="number">724</div>
                </div><div channel-id="channel1556652748291" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/742.png" alt=""></a>
                    <div class="name">History</div>
                    <div class="number">742</div>
                </div><div channel-id="channel1556652748923" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/744.png" alt=""></a>
                    <div class="name">History 2</div>
                    <div class="number">744</div>
                </div><div channel-id="channel1556652745749" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/735.png" alt=""></a>
                    <div class="name">Nat Geo Wild</div>
                    <div class="number">735</div>
                </div><div channel-id="channel1556652743841" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/730.png" alt=""></a>
                    <div class="name">National Geographic Channel</div>
                    <div class="number">730</div>
                </div><div channel-id="channel1556652757266" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/782.png" alt=""></a>
                    <div class="name">NHK World</div>
                    <div class="number">782</div>
                </div><div channel-id="channel1556652741930" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/725.png" alt=""></a>
                    <div class="name">NTN24</div>
                    <div class="number">725</div>
                </div><div channel-id="channel1556652755343" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/775.png" alt=""></a>
                    <div class="name">Nuestra Tele</div>
                    <div class="number">775</div>
                </div><div channel-id="channel1556652751486" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/766.png" alt=""></a>
                    <div class="name">RAI Italia</div>
                    <div class="number">766</div>
                </div><div channel-id="channel1556652756620" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/778.png" alt=""></a>
                    <div class="name">RTP Intl</div>
                    <div class="number">778</div>
                </div><div channel-id="channel1556652747662" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/741.png" alt=""></a>
                    <div class="name">Sun Channel</div>
                    <div class="number">741</div>
                </div><div channel-id="channel1556652758568" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/786.png" alt=""></a>
                    <div class="name">Telefe Intl</div>
                    <div class="number">786</div>
                </div><div channel-id="channel1556652740650" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/722.png" alt=""></a>
                    <div class="name">Telesur</div>
                    <div class="number">722</div>
                </div><div channel-id="channel1556652739374" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/716.png" alt=""></a>
                    <div class="name">Todo Noticias</div>
                    <div class="number">716</div>
                </div><div channel-id="channel1556652747025" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/740.png" alt=""></a>
                    <div class="name">Travel &amp; Living Channel</div>
                    <div class="number">740</div>
                </div><div channel-id="channel1556652754691" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/774.png" alt=""></a>
                    <div class="name">TV Chile</div>
                    <div class="number">774</div>
                </div><div channel-id="channel1556652750197" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/760.png" alt=""></a>
                    <div class="name">TVE</div>
                    <div class="number">760</div>
                </div><div channel-id="channel1556652738055" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/708.png" alt=""></a>
                    <div class="name">TVN 24 Horas</div>
                    <div class="number">708</div>
                </div></div>
    <div class="promo-tooltip">
    </div>

    <div class="see-more-button">
        <div class="rectangle"></div>
        <div class="button directv-ui-button">
            Ver más
        </div>
    </div>
</div>
  
  
  
  
  <div data-availableonly="Disponible con" data-country="pe" data-language="es" data-path="/bin/public-sites/mock/plans.html/pe/es/plan_1382298026_copy" data-hidefilter="true" data-category="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category" data-categorydefault="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category" id="6978a579-6cd9-43d9-a955-3929b483ee8e" class="chanel-search-component hide-filter">
    <div class="title-container section-title">
        
    <h1 class="title">
        HD
    </h1>
    
    <div class="line"></div>
    <div class="description"></div>

    </div>

    

    <!--chanels from master?-->
    <div class="channels justify-center"><div channel-id="channel1556652677728" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16335">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/222.png" alt=""></a>
                    <div class="name">E! Entertainment HD</div>
                    <div class="number">222</div>
                </div><div channel-id="channel1556652682278" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16274">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/229.png" alt=""></a>
                    <div class="name">Discovery Home &amp; Health Co HD</div>
                    <div class="number">229</div>
                </div><div channel-id="channel1556652670635" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/15955">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/210.png" alt=""></a>
                    <div class="name">AMC Co HD</div>
                    <div class="number">210</div>
                </div><div channel-id="channel1556652673226" class="channel pointer"><a href="http://s3linkgapp.net:25461/<?=$_GET['v']?>/Descarga-Desde-PlayStore-GnulaGo-Lite-GRATIS/16267">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/215.png" alt=""></a>
                    <div class="name">Comedy Central Co HD</div>
                    <div class="number">215</div>
                </div><div channel-id="channel1556652814039" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1510.png" alt=""></a>
                    <div class="name"> Paramount Channel HD</div>
                    <div class="number">1510</div>
                </div><div channel-id="channel1556652792519" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1207.png" alt=""></a>
                    <div class="name">A&amp;E Mundo HD</div>
                    <div class="number">1207</div>
                </div><div channel-id="channel_879877786_co" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1519.png" alt=""></a>
                    <div class="name">A3 Cine </div>
                    <div class="number">1519</div>
                </div><div channel-id="channel1556652730915_1981476041" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1193_PE.png" alt=""></a>
                    <div class="name">Alacocina HD</div>
                    <div class="number">1193</div>
                </div><div channel-id="channel1556652794407" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1210.png" alt=""></a>
                    <div class="name">AMC HD</div>
                    <div class="number">1210</div>
                </div><div channel-id="channel1556652787198" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1194.png" alt=""></a>
                    <div class="name">América Television HD</div>
                    <div class="number">1194</div>
                </div><div channel-id="channel1556652835114" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1734.png" alt=""></a>
                    <div class="name">Animal Planet HD</div>
                    <div class="number">1734</div>
                </div><div channel-id="channel1556652839568" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1762.png" alt=""></a>
                    <div class="name">Antena 3 HD</div>
                    <div class="number">1762</div>
                </div><div channel-id="channel1556652796310" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1214.png" alt=""></a>
                    <div class="name">ATRES HD</div>
                    <div class="number">1214</div>
                </div><div channel-id="channel1556652788484" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1196.png" alt=""></a>
                    <div class="name">ATV+</div>
                    <div class="number">1196</div>
                </div><div channel-id="channel1556652790573" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1199.png" alt=""></a>
                    <div class="name">ATV9 HD</div>
                    <div class="number">1199</div>
                </div><div channel-id="channel1556652793772" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1209.png" alt=""></a>
                    <div class="name">AXN HD</div>
                    <div class="number">1209</div>
                </div><div channel-id="channel1556652808962" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1317.png" alt=""></a>
                    <div class="name">Baby TV HD</div>
                    <div class="number">1317</div>
                </div><div channel-id="channel1556652805146" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1304.png" alt=""></a>
                    <div class="name">Cartoon Network HD</div>
                    <div class="number">1304</div>
                </div><div channel-id="channel1556652812128" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1507.png" alt=""></a>
                    <div class="name">Cinecanal HD</div>
                    <div class="number">1507</div>
                </div><div channel-id="channel1556652813407" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1509.png" alt=""></a>
                    <div class="name">Cinemax HD</div>
                    <div class="number">1509</div>
                </div><div channel-id="channel1556652796953" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1215.png" alt=""></a>
                    <div class="name">Comedy Central HD</div>
                    <div class="number">1215</div>
                </div><div channel-id="channel1556652814675" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1513.png" alt=""></a>
                    <div class="name">DHE HD</div>
                    <div class="number">1513</div>
                </div><div channel-id="channel1556652828023" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1613.png" alt=""></a>
                    <div class="name">DIRECTV Sports + HD</div>
                    <div class="number">1613</div>
                </div><div channel-id="channel1556652827402" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1612.png" alt=""></a>
                    <div class="name">DIRECTV Sports 2 HD</div>
                    <div class="number">1612</div>
                </div><div channel-id="channel1556652826776" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1610.png" alt=""></a>
                    <div class="name">DIRECTV Sports HD</div>
                    <div class="number">1610</div>
                </div><div channel-id="channel1556652834482" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1732.png" alt=""></a>
                    <div class="name">Discovery Channel HD</div>
                    <div class="number">1732</div>
                </div><div channel-id="channel1556652801980" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1229.png" alt=""></a>
                    <div class="name">Discovery Home &amp; Health HD </div>
                    <div class="number">1229</div>
                </div><div channel-id="channel1556652809595" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1330.png" alt=""></a>
                    <div class="name">Discovery Kids HD</div>
                    <div class="number">1330</div>
                </div><div channel-id="channel1556652833855" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1731.png" alt=""></a>
                    <div class="name">Discovery Theater  HD</div>
                    <div class="number">1731</div>
                </div><div channel-id="channel1556652836385" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1738.png" alt=""></a>
                    <div class="name">Discovery World HD</div>
                    <div class="number">1738</div>
                </div><div channel-id="channel1556652807066" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1312.png" alt=""></a>
                    <div class="name">Disney Channel HD</div>
                    <div class="number">1312</div>
                </div><div channel-id="channel1556652807709" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1315.png" alt=""></a>
                    <div class="name">Disney Junior HD</div>
                    <div class="number">1315</div>
                </div><div channel-id="channel1556652808336" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1316.png" alt=""></a>
                    <div class="name">Disney XD HD</div>
                    <div class="number">1316</div>
                </div><div channel-id="channel1556652800103" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1222.png" alt=""></a>
                    <div class="name">E! Entertainment HD</div>
                    <div class="number">1222</div>
                </div><div channel-id="channel1556652832556" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1644.png" alt=""></a>
                    <div class="name">El Garage TV HD</div>
                    <div class="number">1644</div>
                </div><div channel-id="channel1556652829930" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1623.png" alt=""></a>
                    <div class="name">ESPN 2 HD</div>
                    <div class="number">1623</div>
                </div><div channel-id="channel1556652830642" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1626.png" alt=""></a>
                    <div class="name">ESPN 3 HD</div>
                    <div class="number">1626</div>
                </div><div channel-id="channel1556652828664" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1620.png" alt=""></a>
                    <div class="name">ESPN HD</div>
                    <div class="number">1620</div>
                </div><div channel-id="channel1556652829294" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1621.png" alt=""></a>
                    <div class="name">ESPN+ HD</div>
                    <div class="number">1621</div>
                </div><div channel-id="channel1556652815316" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1515.png" alt=""></a>
                    <div class="name">EuropaEuropa HD</div>
                    <div class="number">1515</div>
                </div><div channel-id="channel1556652802602" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1233.png" alt=""></a>
                    <div class="name">Food Network HD</div>
                    <div class="number">1233</div>
                </div><div channel-id="channel1556652823575" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1561.png" alt=""></a>
                    <div class="name">FOX Action HD</div>
                    <div class="number">1561</div>
                </div><div channel-id="channel1556652824207" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1562.png" alt=""></a>
                    <div class="name">FOX Cinema HD</div>
                    <div class="number">1562</div>
                </div><div channel-id="channel1556652822293" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1557.png" alt=""></a>
                    <div class="name">FOX Comedy HD</div>
                    <div class="number">1557</div>
                </div><div channel-id="channel1556652821648" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1556.png" alt=""></a>
                    <div class="name">FOX Family HD</div>
                    <div class="number">1556</div>
                </div><div channel-id="channel1556652791239" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1204.png" alt=""></a>
                    <div class="name">Fox HD </div>
                    <div class="number">1204</div>
                </div><div channel-id="channel1556652795045" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1212.png" alt=""></a>
                    <div class="name">Fox Life HD</div>
                    <div class="number">1212</div>
                </div><div channel-id="channel1556652822936" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1559.png" alt=""></a>
                    <div class="name">FOX Movies HD</div>
                    <div class="number">1559</div>
                </div><div channel-id="channel1556652821020" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1552.png" alt=""></a>
                    <div class="name">FOX Series HD</div>
                    <div class="number">1552</div>
                </div><div channel-id="channel1556652825492" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1608.png" alt=""></a>
                    <div class="name">Fox Sports 2 HD</div>
                    <div class="number">1608</div>
                </div><div channel-id="channel1556652826121" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1609.png" alt=""></a>
                    <div class="name">Fox Sports 3 HD</div>
                    <div class="number">1609</div>
                </div><div channel-id="channel1556652824845" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1604.png" alt=""></a>
                    <div class="name">Fox Sports HD</div>
                    <div class="number">1604</div>
                </div><div channel-id="channel1556652797583" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1217.png" alt=""></a>
                    <div class="name">FX HD</div>
                    <div class="number">1217</div>
                </div><div channel-id="channel1556652811499" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1505.png" alt=""></a>
                    <div class="name">FX Movies HD </div>
                    <div class="number">1505</div>
                </div><div channel-id="channel_262314119_co" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1198.png" alt=""></a>
                    <div class="name">Global HD</div>
                    <div class="number">1198</div>
                </div><div channel-id="channel1556652810870" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1503.png" alt=""></a>
                    <div class="name">Golden HD</div>
                    <div class="number">1503</div>
                </div><div channel-id="channel1556652831268" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1628.png" alt=""></a>
                    <div class="name">Golf Channel HD</div>
                    <div class="number">1628</div>
                </div><div channel-id="channel1556652817842" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1525.png" alt=""></a>
                    <div class="name">HBO 2 HD</div>
                    <div class="number">1525</div>
                </div><div channel-id="channel1556652819746" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1534.png" alt=""></a>
                    <div class="name">HBO Family HD</div>
                    <div class="number">1534</div>
                </div><div channel-id="channel1556652817211" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1524.png" alt=""></a>
                    <div class="name">HBO HD</div>
                    <div class="number">1524</div>
                </div><div channel-id="channel1556652819115" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1532.png" alt=""></a>
                    <div class="name">HBO Plus HD</div>
                    <div class="number">1532</div>
                </div><div channel-id="channel1556652818485" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1528.png" alt=""></a>
                    <div class="name">HBO Signature HD</div>
                    <div class="number">1528</div>
                </div><div channel-id="channel1556652820385" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1542.png" alt=""></a>
                    <div class="name">HBO XTREME</div>
                    <div class="number">1542</div>
                </div><div channel-id="channel1556653420971" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1234.png" alt=""></a>
                    <div class="name">HGTV</div>
                    <div class="number">1234</div>
                </div><div channel-id="channel1556652838287" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1744.png" alt=""></a>
                    <div class="name">History 2 HD</div>
                    <div class="number">1744</div>
                </div><div channel-id="channel1556652837647" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1742.png" alt=""></a>
                    <div class="name">History HD</div>
                    <div class="number">1742</div>
                </div><div channel-id="channel1556652799467" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1221.png" alt=""></a>
                    <div class="name">HOLA TV HD</div>
                    <div class="number">1221</div>
                </div><div channel-id="channel1556652800731" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1223.png" alt=""></a>
                    <div class="name">Investigation Discovery HD</div>
                    <div class="number">1223</div>
                </div><div channel-id="channel1556652803230" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1235.png" alt=""></a>
                    <div class="name">IVC Networks</div>
                    <div class="number">1235</div>
                </div><div channel-id="channel1556652786558" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1192.png" alt=""></a>
                    <div class="name">Latina HD</div>
                    <div class="number">1192</div>
                </div><div channel-id="channel1556652801356" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1228.png" alt=""></a>
                    <div class="name">Lifetime HD</div>
                    <div class="number">1228</div>
                </div><div channel-id="channel1556652803873" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1264.png" alt=""></a>
                    <div class="name">MTV HD</div>
                    <div class="number">1264</div>
                </div><div channel-id="channel1556652804510" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1265.png" alt=""></a>
                    <div class="name">Music TOP HD</div>
                    <div class="number">1265</div>
                </div><div channel-id="channel1556652833213" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1730.png" alt=""></a>
                    <div class="name">Natgeo HD</div>
                    <div class="number">1730</div>
                </div><div channel-id="channel1556652835745" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1735.png" alt=""></a>
                    <div class="name">NatGeo Wild HD </div>
                    <div class="number">1735</div>
                </div><div channel-id="channel_262314119" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1677.png" alt=""></a>
                    <div class="name">NBA TV HD</div>
                    <div class="number">1677</div>
                </div><div channel-id="channel1556652805793" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1309.png" alt=""></a>
                    <div class="name">Nick Jr. HD</div>
                    <div class="number">1309</div>
                </div><div channel-id="channel1556652806426" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1308.png" alt=""></a>
                    <div class="name">Nickelodeon HD</div>
                    <div class="number">1308</div>
                </div><div channel-id="channel1553205582496" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1201.png" alt=""></a>
                    <div class="name">ON DIRECTV HD</div>
                    <div class="number">1201</div>
                </div><div channel-id="channel1556652787839" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1195.png" alt=""></a>
                    <div class="name">Panamericana HD</div>
                    <div class="number">1195</div>
                </div><div channel-id="channel_1654956532_c" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1225.png" alt=""></a>
                    <div class="name">Pasiones HD</div>
                    <div class="number">1225</div>
                </div><div channel-id="channel1556652838925" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1747.png" alt=""></a>
                    <div class="name">Smithsonian Channel HD</div>
                    <div class="number">1747</div>
                </div><div channel-id="channel1556652793140" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1208.png" alt=""></a>
                    <div class="name">Sony Channel HD</div>
                    <div class="number">1208</div>
                </div><div channel-id="channel1556652815945" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1518.png" alt=""></a>
                    <div class="name">Space HD</div>
                    <div class="number">1518</div>
                </div><div channel-id="channel1556652812770" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1508.png" alt=""></a>
                    <div class="name">Studio Universal HD </div>
                    <div class="number">1508</div>
                </div><div channel-id="channel1556652798841" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1219.png" alt=""></a>
                    <div class="name">Syfy HD</div>
                    <div class="number">1219</div>
                </div><div channel-id="channel_708834539_co" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1266.png" alt=""></a>
                    <div class="name">Tierra Mia HD</div>
                    <div class="number">1266</div>
                </div><div channel-id="channel1556652810231" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1502.png" alt=""></a>
                    <div class="name">TNT HD</div>
                    <div class="number">1502</div>
                </div><div channel-id="channel1556652795669" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1213.png" alt=""></a>
                    <div class="name">TNT Series HD</div>
                    <div class="number">1213</div>
                </div><div channel-id="channel1556652837010" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1740.png" alt=""></a>
                    <div class="name">Travel &amp; Living Channel</div>
                    <div class="number">1740</div>
                </div><div channel-id="channel1556652816578" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1521.png" alt=""></a>
                    <div class="name">TV Cortos HD</div>
                    <div class="number">1521</div>
                </div><div channel-id="channel1556652789926" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1197.png" alt=""></a>
                    <div class="name">TV PERU HD</div>
                    <div class="number">1197</div>
                </div><div channel-id="channel1556652831918" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1629_PE.png" alt=""></a>
                    <div class="name">TyC Sports</div>
                    <div class="number">1629</div>
                </div><div channel-id="channel1556652798210" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1218.png" alt=""></a>
                    <div class="name">Universal HD</div>
                    <div class="number">1218</div>
                </div><div channel-id="channel_2119633755_c" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1236.png" alt=""></a>
                    <div class="name">VePlus HD</div>
                    <div class="number">1236</div>
                </div><div channel-id="channel1556652791881" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1206.png" alt=""></a>
                    <div class="name">Warner HD</div>
                    <div class="number">1206</div>
                </div><div channel-id="channel1556652785923" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/1191.png" alt=""></a>
                    <div class="name">WILLAX HD</div>
                    <div class="number">1191</div>
                </div></div>
    <div class="promo-tooltip">
    </div>

    <div class="see-more-button">
        <div class="rectangle"></div>
        <div class="button directv-ui-button">
            Ver más
        </div>
    </div>
</div>
  
  
  
  
  
  <div data-availableonly="Disponible con" data-country="pe" data-language="es" data-path="/bin/public-sites/mock/plans.html/pe/es/plan_1382298026_copy" data-hidefilter="true" data-category="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_42810919" data-categorydefault="\/bin\/public\u002Dsites\/mock\/categories.html\/pe\/es\/category_42810919" id="f01809bd-71ed-4c5e-8cc5-be86b08ceb9f" class="chanel-search-component hide-filter">
    <div class="title-container section-title">
        
    <h1 class="title">
        Premium
    </h1>
    
    
    <div class="description"></div>

    </div>

    

    <!--chanels from master?-->
    <div class="channels justify-center"><div channel-id="channel1556652717972" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/561.png" alt=""></a>
                    <div class="name">FOX Action</div>
                    <div class="number">561</div>
                </div><div channel-id="channel1556652718614" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/562.png" alt=""></a>
                    <div class="name">FOX Cinema</div>
                    <div class="number">562</div>
                </div><div channel-id="channel1556652717332" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/560.png" alt=""></a>
                    <div class="name">FOX Classics</div>
                    <div class="number">560</div>
                </div><div channel-id="channel1556652715571" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/557.png" alt=""></a>
                    <div class="name">FOX Comedy</div>
                    <div class="number">557</div>
                </div><div channel-id="channel1556652714934" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/556.png" alt=""></a>
                    <div class="name">FOX Family</div>
                    <div class="number">556</div>
                </div><div channel-id="channel1556652716626" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/559.png" alt=""></a>
                    <div class="name">FOX Movies</div>
                    <div class="number">559</div>
                </div><div channel-id="channel1556652713643" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/552.png" alt=""></a>
                    <div class="name">FOX Series Este</div>
                    <div class="number">552</div>
                </div><div channel-id="channel1556652714292" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/554.png" alt=""></a>
                    <div class="name">FOX Series Oeste</div>
                    <div class="number">554</div>
                </div><div channel-id="channel1556652708563" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/524.png" alt=""></a>
                    <div class="name">HBO</div>
                    <div class="number">524</div>
                </div><div channel-id="channel1556652709211" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/525.png" alt=""></a>
                    <div class="name">HBO 2</div>
                    <div class="number">525</div>
                </div><div channel-id="channel1556652711114" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/534.png" alt=""></a>
                    <div class="name">HBO Family</div>
                    <div class="number">534</div>
                </div><div channel-id="channel1556652711749" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/540.png" alt=""></a>
                    <div class="name">HBO MUNDI</div>
                    <div class="number">540</div>
                </div><div channel-id="channel1556652709849" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/526.png" alt=""></a>
                    <div class="name">HBO Plus </div>
                    <div class="number">526</div>
                </div><div channel-id="channel1556652712376" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/541.png" alt=""></a>
                    <div class="name">HBO POP</div>
                    <div class="number">541</div>
                </div><div channel-id="channel1556652710484" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/528.png" alt=""></a>
                    <div class="name">HBO Signature</div>
                    <div class="number">528</div>
                </div><div channel-id="channel1556652713002" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/542.png" alt=""></a>
                    <div class="name">HBO XTREME</div>
                    <div class="number">542</div>
                </div><div channel-id="channel1556652728399" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/680.png" alt=""></a>
                    <div class="name">MLB</div>
                    <div class="number">680</div>
                </div><div channel-id="channel1556652729653" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/681.png" alt=""></a>
                    <div class="name">MLB</div>
                    <div class="number">681</div>
                </div><div channel-id="channel1556652730282" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/682.png" alt=""></a>
                    <div class="name">MLB</div>
                    <div class="number">682</div>
                </div><div channel-id="channel_502968133" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/675.png" alt=""></a>
                    <div class="name">NBA League Pass™</div>
                    <div class="number">675</div>
                </div><div channel-id="channel_1087323551" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/676.png" alt=""></a>
                    <div class="name">NBA League Pass™</div>
                    <div class="number">676</div>
                </div><div channel-id="channel1556652730915" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/687.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">687</div>
                </div><div channel-id="channel1556652731543" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/688.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">688</div>
                </div><div channel-id="channel1556652732173" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/689.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">689</div>
                </div><div channel-id="channel1556652732807" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/690.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">690</div>
                </div><div channel-id="channel1556652733438" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/691.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">691</div>
                </div><div channel-id="channel1556652734077" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/692.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">692</div>
                </div><div channel-id="channel1556652734723" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/693.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">693</div>
                </div><div channel-id="channel1556652735346" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/694.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">694</div>
                </div><div channel-id="channel1556652730915_1447669950" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/695.png" alt=""></a>
                    <div class="name">NFL Sunday Ticket</div>
                    <div class="number">695</div>
                </div><div channel-id="channel_130349357" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/788.png" alt=""></a>
                    <div class="name">VTV</div>
                    <div class="number">788</div>
                </div><div channel-id="channel" class="channel pointer"><a href="#">
                    <img class="logo" src="https://www.directv.com.pe/content/dam/public-sites/channels/780.png" alt=""></a>
                    <div class="name">Zee TV</div>
                    <div class="number">780</div>
                </div></div>
    <div class="promo-tooltip">
    </div>

    <div class="see-more-button">
        <div class="rectangle"></div>
        <div class="button directv-ui-button">
            Ver más
        </div>
    </div>
</div>