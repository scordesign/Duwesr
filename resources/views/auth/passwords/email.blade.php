<!DOCTYPE html>
<!-- saved from url=(0279)https://duwestcolombia.com:2083/cpsess8788799616/frontend/jupiter/filemanager/editit.html?file=email.blade.php&fileop=&dir=%2Fhome%2Fduwestcolombia%2Fduclient.duwestcolombia.com%2Fresources%2Fviews%2Fauth%2Fpasswords&dirop=&charset=&file_charset=_DETECT_&baseurl=&basedir=&edit=1 -->
<html data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>email.blade.php - Administrador de archivos cPanel v3</title>
        

        <link rel="stylesheet" type="text/css" href="./email.blade_files/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="./email.blade_files/open_sans.min.css">
        <link rel="stylesheet" type="text/css" href="./email.blade_files/all.min.css">
        <link rel="stylesheet" type="text/css" href="./email.blade_files/tree_styles2_optimized.css">

        <script type="text/javascript" src="./email.blade_files/utilities_container.js"></script>
        <script type="text/javascript" src="./email.blade_files/cpanel-all-min.js"></script>
        <script type="text/javascript" src="./email.blade_files/filemanager_editors_optimized.js"></script>

        
<link rel="stylesheet" type="text/css" href="./email.blade_files/ajaxapp-min.css">
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="/cPanel_magic_revision_1453255723/cjt/css/ajaxapp_ie6.css" />
<![endif]-->


        <style type="text/css">
            html, body, #maintbl {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
                background: none !important;
            }

            form { margin: 0 }

            #maintbl, #maintbl tr, #maintbl td {
                margin:0;
                padding:0;
                border-collapse: collapse;
                border: none;
            }

            .cjt_progress_overlay .bd {
                background: transparent;
            }

            /* Suppress inherited styles from global style sheets. */
            .yui-panel .hd,
            .yui-panel .bd,
            .yui-panel .ft {
                background-image: none;
                font-size: 100%;

            }
            .yui-panel .ft {
                background-color: #CCCCCC;
            }

            /* overrides from tree_styles2_optimized.css */
            p {
                line-height: normal;
            }
            .header {
                background: #333333;
                color: #FFFFFF;
                padding: 5px;
            }
            .button-group .default {
                background: none !important;
                padding: 0;
            }

            .action-buttons {
                text-align: right;
            }

            .editor-area {
                position: absolute !important;
                top: 94px;
                right: 0;
                left: 0;
                bottom: 20px;
                border: 1px solid #CCCCCC;
            }

            .editor-toolbar {
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .editor-toolbar .fa-terminal {
                font-size: inherit;
            }

            .btn-group-ddl {
                padding: 1px;
            }

            .help-link {
                padding: 14px;
                display: block;
            }

            @media (max-width: 503px) {
                .editor-area {
                    top: 245px;
                }
                .action-buttons {
                    text-align: left;
                }
            }

            @media (min-width: 504px) and (max-width: 768px) {
                .editor-area {
                    top: 200px;
                }
            }

            @media (min-width: 769px) and (max-width: 1074px) {
                .editor-area {
                    top: 130px;
                }
            }
        </style>

        <!--[if IE]>
        <style type="text/css">
            #legacy_codewindow {
                width: 99.5%;
            }
        </style>
        <![endif]-->

    <style id="ace_editor.css">.ace_editor {position: relative;overflow: hidden;font: 12px/normal 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;direction: ltr;text-align: left;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}.ace_scroller {position: absolute;overflow: hidden;top: 0;bottom: 0;background-color: inherit;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;cursor: text;}.ace_content {position: absolute;box-sizing: border-box;min-width: 100%;}.ace_dragging .ace_scroller:before{position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';background: rgba(250, 250, 250, 0.01);z-index: 1000;}.ace_dragging.ace_dark .ace_scroller:before{background: rgba(0, 0, 0, 0.01);}.ace_selecting, .ace_selecting * {cursor: text !important;}.ace_gutter {position: absolute;overflow : hidden;width: auto;top: 0;bottom: 0;left: 0;cursor: default;z-index: 4;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;}.ace_gutter-active-line {position: absolute;left: 0;right: 0;}.ace_scroller.ace_scroll-left {box-shadow: 17px 0 16px -16px rgba(0, 0, 0, 0.4) inset;}.ace_gutter-cell {padding-left: 19px;padding-right: 6px;background-repeat: no-repeat;}.ace_gutter-cell.ace_error {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABOFBMVEX/////////QRswFAb/Ui4wFAYwFAYwFAaWGAfDRymzOSH/PxswFAb/SiUwFAYwFAbUPRvjQiDllog5HhHdRybsTi3/Tyv9Tir+Syj/UC3////XurebMBIwFAb/RSHbPx/gUzfdwL3kzMivKBAwFAbbvbnhPx66NhowFAYwFAaZJg8wFAaxKBDZurf/RB6mMxb/SCMwFAYwFAbxQB3+RB4wFAb/Qhy4Oh+4QifbNRcwFAYwFAYwFAb/QRzdNhgwFAYwFAbav7v/Uy7oaE68MBK5LxLewr/r2NXewLswFAaxJw4wFAbkPRy2PyYwFAaxKhLm1tMwFAazPiQwFAaUGAb/QBrfOx3bvrv/VC/maE4wFAbRPBq6MRO8Qynew8Dp2tjfwb0wFAbx6eju5+by6uns4uH9/f36+vr/GkHjAAAAYnRSTlMAGt+64rnWu/bo8eAA4InH3+DwoN7j4eLi4xP99Nfg4+b+/u9B/eDs1MD1mO7+4PHg2MXa347g7vDizMLN4eG+Pv7i5evs/v79yu7S3/DV7/498Yv24eH+4ufQ3Ozu/v7+y13sRqwAAADLSURBVHjaZc/XDsFgGIBhtDrshlitmk2IrbHFqL2pvXf/+78DPokj7+Fz9qpU/9UXJIlhmPaTaQ6QPaz0mm+5gwkgovcV6GZzd5JtCQwgsxoHOvJO15kleRLAnMgHFIESUEPmawB9ngmelTtipwwfASilxOLyiV5UVUyVAfbG0cCPHig+GBkzAENHS0AstVF6bacZIOzgLmxsHbt2OecNgJC83JERmePUYq8ARGkJx6XtFsdddBQgZE2nPR6CICZhawjA4Fb/chv+399kfR+MMMDGOQAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: 2px center;}.ace_gutter-cell.ace_warning {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEX///8AAAD///8AAAAAAABPSzb/5sAAAAB/blH/73z/ulkAAAAAAAD85pkAAAAAAAACAgP/vGz/rkDerGbGrV7/pkQICAf////e0IsAAAD/oED/qTvhrnUAAAD/yHD/njcAAADuv2r/nz//oTj/p064oGf/zHAAAAA9Nir/tFIAAAD/tlTiuWf/tkIAAACynXEAAAAAAAAtIRW7zBpBAAAAM3RSTlMAABR1m7RXO8Ln31Z36zT+neXe5OzooRDfn+TZ4p3h2hTf4t3k3ucyrN1K5+Xaks52Sfs9CXgrAAAAjklEQVR42o3PbQ+CIBQFYEwboPhSYgoYunIqqLn6/z8uYdH8Vmdnu9vz4WwXgN/xTPRD2+sgOcZjsge/whXZgUaYYvT8QnuJaUrjrHUQreGczuEafQCO/SJTufTbroWsPgsllVhq3wJEk2jUSzX3CUEDJC84707djRc5MTAQxoLgupWRwW6UB5fS++NV8AbOZgnsC7BpEAAAAABJRU5ErkJggg==");background-position: 2px center;}.ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAJ0Uk5TAAB2k804AAAAPklEQVQY02NgIB68QuO3tiLznjAwpKTgNyDbMegwisCHZUETUZV0ZqOquBpXj2rtnpSJT1AEnnRmL2OgGgAAIKkRQap2htgAAAAASUVORK5CYII=");background-position: 2px center;}.ace_dark .ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEUAAAChoaGAgIAqKiq+vr6tra1ZWVmUlJSbm5s8PDxubm56enrdgzg3AAAAAXRSTlMAQObYZgAAAClJREFUeNpjYMAPdsMYHegyJZFQBlsUlMFVCWUYKkAZMxZAGdxlDMQBAG+TBP4B6RyJAAAAAElFTkSuQmCC");}.ace_scrollbar {position: absolute;right: 0;bottom: 0;z-index: 6;}.ace_scrollbar-inner {position: absolute;cursor: text;left: 0;top: 0;}.ace_scrollbar-v{overflow-x: hidden;overflow-y: scroll;top: 0;}.ace_scrollbar-h {overflow-x: scroll;overflow-y: hidden;left: 0;}.ace_print-margin {position: absolute;height: 100%;}.ace_text-input {position: absolute;z-index: 0;width: 0.5em;height: 1em;opacity: 0;background: transparent;-moz-appearance: none;appearance: none;border: none;resize: none;outline: none;overflow: hidden;font: inherit;padding: 0 1px;margin: 0 -1px;text-indent: -1em;-ms-user-select: text;-moz-user-select: text;-webkit-user-select: text;user-select: text;white-space: pre!important;}.ace_text-input.ace_composition {background: inherit;color: inherit;z-index: 1000;opacity: 1;text-indent: 0;}[ace_nocontext=true] {transform: none!important;filter: none!important;perspective: none!important;clip-path: none!important;mask : none!important;contain: none!important;perspective: none!important;mix-blend-mode: initial!important;z-index: auto;}.ace_layer {z-index: 1;position: absolute;overflow: hidden;word-wrap: normal;white-space: pre;height: 100%;width: 100%;box-sizing: border-box;pointer-events: none;}.ace_gutter-layer {position: relative;width: auto;text-align: right;pointer-events: auto;}.ace_text-layer {font: inherit !important;}.ace_cjk {display: inline-block;text-align: center;}.ace_cursor-layer {z-index: 4;}.ace_cursor {z-index: 4;position: absolute;box-sizing: border-box;border-left: 2px solid;transform: translatez(0);}.ace_multiselect .ace_cursor {border-left-width: 1px;}.ace_slim-cursors .ace_cursor {border-left-width: 1px;}.ace_overwrite-cursors .ace_cursor {border-left-width: 0;border-bottom: 1px solid;}.ace_hidden-cursors .ace_cursor {opacity: 0.2;}.ace_smooth-blinking .ace_cursor {transition: opacity 0.18s;}.ace_marker-layer .ace_step, .ace_marker-layer .ace_stack {position: absolute;z-index: 3;}.ace_marker-layer .ace_selection {position: absolute;z-index: 5;}.ace_marker-layer .ace_bracket {position: absolute;z-index: 6;}.ace_marker-layer .ace_active-line {position: absolute;z-index: 2;}.ace_marker-layer .ace_selected-word {position: absolute;z-index: 4;box-sizing: border-box;}.ace_line .ace_fold {box-sizing: border-box;display: inline-block;height: 11px;margin-top: -2px;vertical-align: middle;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACJJREFUeNpi+P//fxgTAwPDBxDxD078RSX+YeEyDFMCIMAAI3INmXiwf2YAAAAASUVORK5CYII=");background-repeat: no-repeat, repeat-x;background-position: center center, top left;color: transparent;border: 1px solid black;border-radius: 2px;cursor: pointer;pointer-events: auto;}.ace_dark .ace_fold {}.ace_fold:hover{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACBJREFUeNpi+P//fz4TAwPDZxDxD5X4i5fLMEwJgAADAEPVDbjNw87ZAAAAAElFTkSuQmCC");}.ace_tooltip {background-color: #FFF;background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));border: 1px solid gray;border-radius: 1px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);color: black;max-width: 100%;padding: 3px 4px;position: fixed;z-index: 999999;box-sizing: border-box;cursor: default;white-space: pre;word-wrap: break-word;line-height: normal;font-style: normal;font-weight: normal;letter-spacing: normal;pointer-events: none;}.ace_folding-enabled > .ace_gutter-cell {padding-right: 13px;}.ace_fold-widget {box-sizing: border-box;margin: 0 -12px 0 1px;display: none;width: 11px;vertical-align: top;background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42mWKsQ0AMAzC8ixLlrzQjzmBiEjp0A6WwBCSPgKAXoLkqSot7nN3yMwR7pZ32NzpKkVoDBUxKAAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: center;border-radius: 3px;border: 1px solid transparent;cursor: pointer;}.ace_folding-enabled .ace_fold-widget {display: inline-block;   }.ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42m3HwQkAMAhD0YzsRchFKI7sAikeWkrxwScEB0nh5e7KTPWimZki4tYfVbX+MNl4pyZXejUO1QAAAABJRU5ErkJggg==");}.ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAGCAYAAAAG5SQMAAAAOUlEQVR42jXKwQkAMAgDwKwqKD4EwQ26sSOkVWjgIIHAzPiCgaqiqnJHZnKICBERHN194O5b9vbLuAVRL+l0YWnZAAAAAElFTkSuQmCCXA==");}.ace_fold-widget:hover {border: 1px solid rgba(0, 0, 0, 0.3);background-color: rgba(255, 255, 255, 0.2);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);}.ace_fold-widget:active {border: 1px solid rgba(0, 0, 0, 0.4);background-color: rgba(0, 0, 0, 0.05);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);}.ace_dark .ace_fold-widget {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHklEQVQIW2P4//8/AzoGEQ7oGCaLLAhWiSwB146BAQCSTPYocqT0AAAAAElFTkSuQmCC");}.ace_dark .ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAH0lEQVQIW2P4//8/AxQ7wNjIAjDMgC4AxjCVKBirIAAF0kz2rlhxpAAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAFCAYAAACAcVaiAAAAHElEQVQIW2P4//+/AxAzgDADlOOAznHAKgPWAwARji8UIDTfQQAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget:hover {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);background-color: rgba(255, 255, 255, 0.1);}.ace_dark .ace_fold-widget:active {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);}.ace_inline_button {border: 1px solid lightgray;display: inline-block;margin: -1px 8px;padding: 0 5px;pointer-events: auto;cursor: pointer;}.ace_inline_button:hover {border-color: gray;background: rgba(200,200,200,0.2);display: inline-block;pointer-events: auto;}.ace_fold-widget.ace_invalid {background-color: #FFB4B4;border-color: #DE5555;}.ace_fade-fold-widgets .ace_fold-widget {transition: opacity 0.4s ease 0.05s;opacity: 0;}.ace_fade-fold-widgets:hover .ace_fold-widget {transition: opacity 0.05s ease 0.05s;opacity:1;}.ace_underline {text-decoration: underline;}.ace_bold {font-weight: bold;}.ace_nobold .ace_bold {font-weight: normal;}.ace_italic {font-style: italic;}.ace_error-marker {background-color: rgba(255, 0, 0,0.2);position: absolute;z-index: 9;}.ace_highlight-marker {background-color: rgba(255, 255, 0,0.2);position: absolute;z-index: 8;}.ace_br1 {border-top-left-radius    : 3px;}.ace_br2 {border-top-right-radius   : 3px;}.ace_br3 {border-top-left-radius    : 3px; border-top-right-radius:    3px;}.ace_br4 {border-bottom-right-radius: 3px;}.ace_br5 {border-top-left-radius    : 3px; border-bottom-right-radius: 3px;}.ace_br6 {border-top-right-radius   : 3px; border-bottom-right-radius: 3px;}.ace_br7 {border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px;}.ace_br8 {border-bottom-left-radius : 3px;}.ace_br9 {border-top-left-radius    : 3px; border-bottom-left-radius:  3px;}.ace_br10{border-top-right-radius   : 3px; border-bottom-left-radius:  3px;}.ace_br11{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-left-radius:  3px;}.ace_br12{border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br13{border-top-left-radius    : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br14{border-top-right-radius   : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br15{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;}.ace_text-input-ios {position: absolute !important;top: -100000px !important;left: -100000px !important;}
/*# sourceURL=ace/css/ace_editor.css */</style><style id="ace-tm">.ace-tm .ace_gutter {background: #f0f0f0;color: #333;}.ace-tm .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-tm .ace_fold {background-color: #6B72E6;}.ace-tm {background-color: #FFFFFF;color: black;}.ace-tm .ace_cursor {color: black;}.ace-tm .ace_invisible {color: rgb(191, 191, 191);}.ace-tm .ace_storage,.ace-tm .ace_keyword {color: blue;}.ace-tm .ace_constant {color: rgb(197, 6, 11);}.ace-tm .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-tm .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-tm .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-tm .ace_invalid {background-color: rgba(255, 0, 0, 0.1);color: red;}.ace-tm .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-tm .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-tm .ace_support.ace_type,.ace-tm .ace_support.ace_class {color: rgb(109, 121, 222);}.ace-tm .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-tm .ace_string {color: rgb(3, 106, 7);}.ace-tm .ace_comment {color: rgb(76, 136, 107);}.ace-tm .ace_comment.ace_doc {color: rgb(0, 102, 255);}.ace-tm .ace_comment.ace_doc.ace_tag {color: rgb(128, 159, 191);}.ace-tm .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-tm .ace_variable {color: rgb(49, 132, 149);}.ace-tm .ace_xml-pe {color: rgb(104, 104, 91);}.ace-tm .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-tm .ace_heading {color: rgb(12, 7, 255);}.ace-tm .ace_list {color:rgb(185, 6, 144);}.ace-tm .ace_meta.ace_tag {color:rgb(0, 22, 142);}.ace-tm .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-tm .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-tm.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px white;}.ace-tm .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-tm .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-tm .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-tm .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-tm .ace_gutter-active-line {background-color : #dcdcdc;}.ace-tm .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-tm .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-tm */</style><style>    .error_widget_wrapper {        background: inherit;        color: inherit;        border:none    }    .error_widget {        border-top: solid 2px;        border-bottom: solid 2px;        margin: 5px 0;        padding: 10px 40px;        white-space: pre-wrap;    }    .error_widget.ace_error, .error_widget_arrow.ace_error{        border-color: #ff5a5a    }    .error_widget.ace_warning, .error_widget_arrow.ace_warning{        border-color: #F1D817    }    .error_widget.ace_info, .error_widget_arrow.ace_info{        border-color: #5a5a5a    }    .error_widget.ace_ok, .error_widget_arrow.ace_ok{        border-color: #5aaa5a    }    .error_widget_arrow {        position: absolute;        border: solid 5px;        border-top-color: transparent!important;        border-right-color: transparent!important;        border-left-color: transparent!important;        top: -5px;    }</style><script src="./email.blade_files/mode-php.js"></script><script src="./email.blade_files/theme-chrome.js"></script><style id="ace-chrome">.ace-chrome .ace_gutter {background: #ebebeb;color: #333;overflow : hidden;}.ace-chrome .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-chrome {background-color: #FFFFFF;color: black;}.ace-chrome .ace_cursor {color: black;}.ace-chrome .ace_invisible {color: rgb(191, 191, 191);}.ace-chrome .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-chrome .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-chrome .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-chrome .ace_invalid {background-color: rgb(153, 0, 0);color: white;}.ace-chrome .ace_fold {}.ace-chrome .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-chrome .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-chrome .ace_support.ace_type,.ace-chrome .ace_support.ace_class.ace-chrome .ace_support.ace_other {color: rgb(109, 121, 222);}.ace-chrome .ace_variable.ace_parameter {font-style:italic;color:#FD971F;}.ace-chrome .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-chrome .ace_comment {color: #236e24;}.ace-chrome .ace_comment.ace_doc {color: #236e24;}.ace-chrome .ace_comment.ace_doc.ace_tag {color: #236e24;}.ace-chrome .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-chrome .ace_variable {color: rgb(49, 132, 149);}.ace-chrome .ace_xml-pe {color: rgb(104, 104, 91);}.ace-chrome .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-chrome .ace_heading {color: rgb(12, 7, 255);}.ace-chrome .ace_list {color:rgb(185, 6, 144);}.ace-chrome .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-chrome .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-chrome .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-chrome .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-chrome .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-chrome .ace_gutter-active-line {background-color : #dcdcdc;}.ace-chrome .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-chrome .ace_storage,.ace-chrome .ace_keyword,.ace-chrome .ace_meta.ace_tag {color: rgb(147, 15, 128);}.ace-chrome .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-chrome .ace_string {color: #1A1AA6;}.ace-chrome .ace_entity.ace_other.ace_attribute-name {color: #994409;}.ace-chrome .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-chrome */</style></head>
    <body class="nomargins yui-skin-sam" data-new-gr-c-s-check-loaded="14.1185.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1185.0"><div class="mask" id="yui-gen12_mask" style="z-index: 2507; height: 968px; width: 1935px; display: none;">&nbsp;</div><div class="yui-panel-container cjt-progress-overlay throbber cjt_progress_panel_container yui-overlay-hidden" id="yui-gen12_c" style="z-index: 2508; visibility: hidden; left: 1010px; top: 371px; overflow: hidden;"><div id="yui-gen12" class="yui-module yui-overlay yui-panel cjt_progress_panel" style="visibility: inherit;"><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"><button tabindex="-1" style="height: 1px; width: 1px; position: absolute; left: -10000em; opacity: 0;"></button><div class="bd" style="border: 0px;" id="yui-gen13"><div class="cjt-progress-overlay-body-liner"><div class="loader-tool"><div class="loader"></div></div><div class="cjt-progress-overlay-text-container"><span class="cjt-progress-overlay-text cjt-fading-text-field">Guardando “email.blade.php” …</span></div></div></div><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"></div></div><div class="mask" id="yui-gen9_mask" style="z-index: 2505; height: 968px; width: 1935px; display: none;">&nbsp;</div><div class="yui-panel-container cjt-progress-overlay throbber cjt_progress_panel_container yui-overlay-hidden" id="yui-gen9_c" style="z-index: 2506; visibility: hidden; left: 830px; top: 454px; overflow: hidden;"><div id="yui-gen9" class="yui-module yui-overlay yui-panel cjt_progress_panel" style="visibility: inherit;"><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"><button tabindex="-1" style="height: 1px; width: 1px; position: absolute; left: -10000em; opacity: 0;"></button><div class="bd" style="border: 0px;" id="yui-gen10"><div class="cjt-progress-overlay-body-liner"><div class="loader-tool"><div class="loader"></div></div><div class="cjt-progress-overlay-text-container"><span class="cjt-progress-overlay-text cjt-fading-text-field">Guardando “email.blade.php” …</span></div></div></div><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"></div></div><div class="mask" id="yui-gen6_mask" style="z-index: 2503; height: 968px; width: 1935px; display: none;">&nbsp;</div><div class="yui-panel-container cjt-progress-overlay throbber cjt_progress_panel_container yui-overlay-hidden" id="yui-gen6_c" style="z-index: 2504; visibility: hidden; left: 1014px; top: 369px; overflow: hidden;"><div id="yui-gen6" class="yui-module yui-overlay yui-panel cjt_progress_panel" style="visibility: inherit;"><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"><button tabindex="-1" style="height: 1px; width: 1px; position: absolute; left: -10000em; opacity: 0;"></button><div class="bd" style="border: 0px;" id="yui-gen7"><div class="cjt-progress-overlay-body-liner"><div class="loader-tool"><div class="loader"></div></div><div class="cjt-progress-overlay-text-container"><span class="cjt-progress-overlay-text cjt-fading-text-field">Guardando “email.blade.php” …</span></div></div></div><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"></div></div><div class="mask" id="yui-gen3_mask" style="z-index: 2501; height: 968px; width: 1935px; display: none;">&nbsp;</div><div class="yui-panel-container cjt-progress-overlay throbber cjt_progress_panel_container yui-overlay-hidden" id="yui-gen3_c" style="z-index: 2502; visibility: hidden; left: 864px; top: 438px; overflow: hidden;"><div id="yui-gen3" class="yui-module yui-overlay yui-panel cjt_progress_panel" style="visibility: inherit;"><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"><button tabindex="-1" style="height: 1px; width: 1px; position: absolute; left: -10000em; opacity: 0;"></button><div class="bd" style="border: 0px;" id="yui-gen4"><div class="cjt-progress-overlay-body-liner"><div class="loader-tool"><div class="loader"></div></div><div class="cjt-progress-overlay-text-container"><span class="cjt-progress-overlay-text cjt-fading-text-field">Guardando “email.blade.php” …</span></div></div></div><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"></div></div><iframe id="_yuiResizeMonitor" title="Text Resize Monitor" tabindex="-1" role="presentation" style="position: absolute; visibility: visible; background-color: transparent; border-width: 0px; width: 2em; height: 2em; left: 0px; top: -29px;" src="./email.blade_files/saved_resource.html"></iframe><div class="mask" id="yui-gen0_mask" style="z-index: 2499; height: 968px; width: 1935px; display: none;">&nbsp;</div><div class="yui-panel-container cjt-progress-overlay throbber cjt_progress_panel_container yui-overlay-hidden" id="yui-gen0_c" style="z-index: 2500; visibility: hidden; left: 830px; top: 454px; overflow: hidden;"><div id="yui-gen0" class="yui-module yui-overlay yui-panel cjt_progress_panel" style="visibility: inherit;"><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"><button tabindex="-1" style="height: 1px; width: 1px; position: absolute; left: -10000em; opacity: 0;"></button><div class="bd" style="border: 0px;" id="yui-gen1"><div class="cjt-progress-overlay-body-liner"><div class="loader-tool"><div class="loader"></div></div><div class="cjt-progress-overlay-text-container"><span class="cjt-progress-overlay-text cjt-fading-text-field">Guardando “email.blade.php” …</span></div></div></div><input style="position: absolute; top: 1px; outline: 0px; margin: 0px; border: 0px; padding: 0px; height: 1px; width: 1px; z-index: -1; opacity: 0;"></div></div>
        <form action="javascript:void(0)" name="sform" onsubmit="loadfdata(&#39;sform_submit&#39;); return false;" class="form-inline">
            <table border="0" id="maintbl">
                <tbody><tr class="header">
                    <td style="padding: 5px">
                        <div class="row">
                            <div class="col-xs-12 col-md-8">
                                <label style="font-weight: 900; font-size:13px;">
                                    Edición:
                                    <input id="path" name="path" value="/home/duwestcolombia/duclient.duwestcolombia.com/resources/views/auth/passwords/email.blade.php" class="form-control" control-id="ControlID-1">
                                </label>
                                <label>Codificación:
                                    <select id="charset" name="charset" class="form-control" control-id="ControlID-2">
                                    
                                        
                                            <option value="ansi_x3.110-1983">
                                                ansi_x3.110-1983
                                            </option>
                                        
                                            <option value="ansi_x3.4-1968">
                                                ansi_x3.4-1968
                                            </option>
                                        
                                            <option value="armscii-8">
                                                armscii-8
                                            </option>
                                        
                                            <option value="asmo_449">
                                                asmo_449
                                            </option>
                                        
                                            <option value="big5">
                                                big5
                                            </option>
                                        
                                            <option value="big5-hkscs">
                                                big5-hkscs
                                            </option>
                                        
                                            <option value="brf">
                                                brf
                                            </option>
                                        
                                            <option value="bs_4730">
                                                bs_4730
                                            </option>
                                        
                                            <option value="bs_viewdata">
                                                bs_viewdata
                                            </option>
                                        
                                            <option value="cp10007">
                                                cp10007
                                            </option>
                                        
                                            <option value="cp1125">
                                                cp1125
                                            </option>
                                        
                                            <option value="cp1250">
                                                cp1250
                                            </option>
                                        
                                            <option value="cp1253">
                                                cp1253
                                            </option>
                                        
                                            <option value="cp1254">
                                                cp1254
                                            </option>
                                        
                                            <option value="cp1255">
                                                cp1255
                                            </option>
                                        
                                            <option value="cp1256">
                                                cp1256
                                            </option>
                                        
                                            <option value="cp1257">
                                                cp1257
                                            </option>
                                        
                                            <option value="cp1258">
                                                cp1258
                                            </option>
                                        
                                            <option value="cp737">
                                                cp737
                                            </option>
                                        
                                            <option value="cp770">
                                                cp770
                                            </option>
                                        
                                            <option value="cp771">
                                                cp771
                                            </option>
                                        
                                            <option value="cp772">
                                                cp772
                                            </option>
                                        
                                            <option value="cp773">
                                                cp773
                                            </option>
                                        
                                            <option value="cp774">
                                                cp774
                                            </option>
                                        
                                            <option value="cp775">
                                                cp775
                                            </option>
                                        
                                            <option value="csa_z243.4-1985-1">
                                                csa_z243.4-1985-1
                                            </option>
                                        
                                            <option value="csa_z243.4-1985-2">
                                                csa_z243.4-1985-2
                                            </option>
                                        
                                            <option value="csa_z243.4-1985-gr">
                                                csa_z243.4-1985-gr
                                            </option>
                                        
                                            <option value="csn_369103">
                                                csn_369103
                                            </option>
                                        
                                            <option value="cwi">
                                                cwi
                                            </option>
                                        
                                            <option value="dec-mcs">
                                                dec-mcs
                                            </option>
                                        
                                            <option value="din_66003">
                                                din_66003
                                            </option>
                                        
                                            <option value="ds_2089">
                                                ds_2089
                                            </option>
                                        
                                            <option value="ebcdic-at-de">
                                                ebcdic-at-de
                                            </option>
                                        
                                            <option value="ebcdic-at-de-a">
                                                ebcdic-at-de-a
                                            </option>
                                        
                                            <option value="ebcdic-ca-fr">
                                                ebcdic-ca-fr
                                            </option>
                                        
                                            <option value="ebcdic-dk-no">
                                                ebcdic-dk-no
                                            </option>
                                        
                                            <option value="ebcdic-dk-no-a">
                                                ebcdic-dk-no-a
                                            </option>
                                        
                                            <option value="ebcdic-es">
                                                ebcdic-es
                                            </option>
                                        
                                            <option value="ebcdic-es-a">
                                                ebcdic-es-a
                                            </option>
                                        
                                            <option value="ebcdic-es-s">
                                                ebcdic-es-s
                                            </option>
                                        
                                            <option value="ebcdic-fi-se">
                                                ebcdic-fi-se
                                            </option>
                                        
                                            <option value="ebcdic-fi-se-a">
                                                ebcdic-fi-se-a
                                            </option>
                                        
                                            <option value="ebcdic-fr">
                                                ebcdic-fr
                                            </option>
                                        
                                            <option value="ebcdic-is-friss">
                                                ebcdic-is-friss
                                            </option>
                                        
                                            <option value="ebcdic-it">
                                                ebcdic-it
                                            </option>
                                        
                                            <option value="ebcdic-pt">
                                                ebcdic-pt
                                            </option>
                                        
                                            <option value="ebcdic-uk">
                                                ebcdic-uk
                                            </option>
                                        
                                            <option value="ebcdic-us">
                                                ebcdic-us
                                            </option>
                                        
                                            <option value="ecma-cyrillic">
                                                ecma-cyrillic
                                            </option>
                                        
                                            <option value="es">
                                                es
                                            </option>
                                        
                                            <option value="es2">
                                                es2
                                            </option>
                                        
                                            <option value="euc-jisx0213">
                                                euc-jisx0213
                                            </option>
                                        
                                            <option value="euc-jp">
                                                euc-jp
                                            </option>
                                        
                                            <option value="euc-jp-ms">
                                                euc-jp-ms
                                            </option>
                                        
                                            <option value="euc-kr">
                                                euc-kr
                                            </option>
                                        
                                            <option value="euc-tw">
                                                euc-tw
                                            </option>
                                        
                                            <option value="gb18030">
                                                gb18030
                                            </option>
                                        
                                            <option value="gb2312">
                                                gb2312
                                            </option>
                                        
                                            <option value="gb_1988-80">
                                                gb_1988-80
                                            </option>
                                        
                                            <option value="gbk">
                                                gbk
                                            </option>
                                        
                                            <option value="georgian-academy">
                                                georgian-academy
                                            </option>
                                        
                                            <option value="georgian-ps">
                                                georgian-ps
                                            </option>
                                        
                                            <option value="gost_19768-74">
                                                gost_19768-74
                                            </option>
                                        
                                            <option value="greek-ccitt">
                                                greek-ccitt
                                            </option>
                                        
                                            <option value="greek7">
                                                greek7
                                            </option>
                                        
                                            <option value="greek7-old">
                                                greek7-old
                                            </option>
                                        
                                            <option value="gsm03.38">
                                                gsm03.38
                                            </option>
                                        
                                            <option value="hp-greek8">
                                                hp-greek8
                                            </option>
                                        
                                            <option value="hp-roman8">
                                                hp-roman8
                                            </option>
                                        
                                            <option value="hp-roman9">
                                                hp-roman9
                                            </option>
                                        
                                            <option value="hp-thai8">
                                                hp-thai8
                                            </option>
                                        
                                            <option value="hp-turkish8">
                                                hp-turkish8
                                            </option>
                                        
                                            <option value="hz-gb-2312">
                                                hz-gb-2312
                                            </option>
                                        
                                            <option value="ibm037">
                                                ibm037
                                            </option>
                                        
                                            <option value="ibm038">
                                                ibm038
                                            </option>
                                        
                                            <option value="ibm1004">
                                                ibm1004
                                            </option>
                                        
                                            <option value="ibm1026">
                                                ibm1026
                                            </option>
                                        
                                            <option value="ibm1047">
                                                ibm1047
                                            </option>
                                        
                                            <option value="ibm1124">
                                                ibm1124
                                            </option>
                                        
                                            <option value="ibm1129">
                                                ibm1129
                                            </option>
                                        
                                            <option value="ibm1132">
                                                ibm1132
                                            </option>
                                        
                                            <option value="ibm1133">
                                                ibm1133
                                            </option>
                                        
                                            <option value="ibm1160">
                                                ibm1160
                                            </option>
                                        
                                            <option value="ibm1161">
                                                ibm1161
                                            </option>
                                        
                                            <option value="ibm1162">
                                                ibm1162
                                            </option>
                                        
                                            <option value="ibm1163">
                                                ibm1163
                                            </option>
                                        
                                            <option value="ibm1164">
                                                ibm1164
                                            </option>
                                        
                                            <option value="ibm256">
                                                ibm256
                                            </option>
                                        
                                            <option value="ibm273">
                                                ibm273
                                            </option>
                                        
                                            <option value="ibm274">
                                                ibm274
                                            </option>
                                        
                                            <option value="ibm275">
                                                ibm275
                                            </option>
                                        
                                            <option value="ibm277">
                                                ibm277
                                            </option>
                                        
                                            <option value="ibm278">
                                                ibm278
                                            </option>
                                        
                                            <option value="ibm280">
                                                ibm280
                                            </option>
                                        
                                            <option value="ibm281">
                                                ibm281
                                            </option>
                                        
                                            <option value="ibm284">
                                                ibm284
                                            </option>
                                        
                                            <option value="ibm285">
                                                ibm285
                                            </option>
                                        
                                            <option value="ibm290">
                                                ibm290
                                            </option>
                                        
                                            <option value="ibm297">
                                                ibm297
                                            </option>
                                        
                                            <option value="ibm420">
                                                ibm420
                                            </option>
                                        
                                            <option value="ibm423">
                                                ibm423
                                            </option>
                                        
                                            <option value="ibm424">
                                                ibm424
                                            </option>
                                        
                                            <option value="ibm437">
                                                ibm437
                                            </option>
                                        
                                            <option value="ibm500">
                                                ibm500
                                            </option>
                                        
                                            <option value="ibm850">
                                                ibm850
                                            </option>
                                        
                                            <option value="ibm851">
                                                ibm851
                                            </option>
                                        
                                            <option value="ibm852">
                                                ibm852
                                            </option>
                                        
                                            <option value="ibm855">
                                                ibm855
                                            </option>
                                        
                                            <option value="ibm856">
                                                ibm856
                                            </option>
                                        
                                            <option value="ibm857">
                                                ibm857
                                            </option>
                                        
                                            <option value="ibm858">
                                                ibm858
                                            </option>
                                        
                                            <option value="ibm860">
                                                ibm860
                                            </option>
                                        
                                            <option value="ibm861">
                                                ibm861
                                            </option>
                                        
                                            <option value="ibm862">
                                                ibm862
                                            </option>
                                        
                                            <option value="ibm863">
                                                ibm863
                                            </option>
                                        
                                            <option value="ibm864">
                                                ibm864
                                            </option>
                                        
                                            <option value="ibm865">
                                                ibm865
                                            </option>
                                        
                                            <option value="ibm866">
                                                ibm866
                                            </option>
                                        
                                            <option value="ibm866nav">
                                                ibm866nav
                                            </option>
                                        
                                            <option value="ibm868">
                                                ibm868
                                            </option>
                                        
                                            <option value="ibm869">
                                                ibm869
                                            </option>
                                        
                                            <option value="ibm870">
                                                ibm870
                                            </option>
                                        
                                            <option value="ibm871">
                                                ibm871
                                            </option>
                                        
                                            <option value="ibm874">
                                                ibm874
                                            </option>
                                        
                                            <option value="ibm875">
                                                ibm875
                                            </option>
                                        
                                            <option value="ibm880">
                                                ibm880
                                            </option>
                                        
                                            <option value="ibm891">
                                                ibm891
                                            </option>
                                        
                                            <option value="ibm903">
                                                ibm903
                                            </option>
                                        
                                            <option value="ibm904">
                                                ibm904
                                            </option>
                                        
                                            <option value="ibm905">
                                                ibm905
                                            </option>
                                        
                                            <option value="ibm918">
                                                ibm918
                                            </option>
                                        
                                            <option value="ibm922">
                                                ibm922
                                            </option>
                                        
                                            <option value="iec_p27-1">
                                                iec_p27-1
                                            </option>
                                        
                                            <option value="inis">
                                                inis
                                            </option>
                                        
                                            <option value="inis-8">
                                                inis-8
                                            </option>
                                        
                                            <option value="inis-cyrillic">
                                                inis-cyrillic
                                            </option>
                                        
                                            <option value="invariant">
                                                invariant
                                            </option>
                                        
                                            <option value="isiri-3342">
                                                isiri-3342
                                            </option>
                                        
                                            <option value="iso-8859-1">
                                                iso-8859-1
                                            </option>
                                        
                                            <option value="iso-8859-10">
                                                iso-8859-10
                                            </option>
                                        
                                            <option value="iso-8859-11">
                                                iso-8859-11
                                            </option>
                                        
                                            <option value="iso-8859-13">
                                                iso-8859-13
                                            </option>
                                        
                                            <option value="iso-8859-14">
                                                iso-8859-14
                                            </option>
                                        
                                            <option value="iso-8859-15">
                                                iso-8859-15
                                            </option>
                                        
                                            <option value="iso-8859-16">
                                                iso-8859-16
                                            </option>
                                        
                                            <option value="iso-8859-2">
                                                iso-8859-2
                                            </option>
                                        
                                            <option value="iso-8859-3">
                                                iso-8859-3
                                            </option>
                                        
                                            <option value="iso-8859-4">
                                                iso-8859-4
                                            </option>
                                        
                                            <option value="iso-8859-5">
                                                iso-8859-5
                                            </option>
                                        
                                            <option value="iso-8859-6">
                                                iso-8859-6
                                            </option>
                                        
                                            <option value="iso-8859-7">
                                                iso-8859-7
                                            </option>
                                        
                                            <option value="iso-8859-8">
                                                iso-8859-8
                                            </option>
                                        
                                            <option value="iso-8859-9">
                                                iso-8859-9
                                            </option>
                                        
                                            <option value="iso-8859-9e">
                                                iso-8859-9e
                                            </option>
                                        
                                            <option value="iso-ir-197">
                                                iso-ir-197
                                            </option>
                                        
                                            <option value="iso-ir-209">
                                                iso-ir-209
                                            </option>
                                        
                                            <option value="iso-ir-90">
                                                iso-ir-90
                                            </option>
                                        
                                            <option value="iso_10367-box">
                                                iso_10367-box
                                            </option>
                                        
                                            <option value="iso_10646">
                                                iso_10646
                                            </option>
                                        
                                            <option value="iso_11548-1">
                                                iso_11548-1
                                            </option>
                                        
                                            <option value="iso_2033-1983">
                                                iso_2033-1983
                                            </option>
                                        
                                            <option value="iso_5427">
                                                iso_5427
                                            </option>
                                        
                                            <option value="iso_5427-ext">
                                                iso_5427-ext
                                            </option>
                                        
                                            <option value="iso_5428">
                                                iso_5428
                                            </option>
                                        
                                            <option value="iso_646.basic">
                                                iso_646.basic
                                            </option>
                                        
                                            <option value="iso_646.irv">
                                                iso_646.irv
                                            </option>
                                        
                                            <option value="iso_6937">
                                                iso_6937
                                            </option>
                                        
                                            <option value="iso_6937-2-25">
                                                iso_6937-2-25
                                            </option>
                                        
                                            <option value="iso_6937-2-add">
                                                iso_6937-2-add
                                            </option>
                                        
                                            <option value="iso_8859-1,gl">
                                                iso_8859-1,gl
                                            </option>
                                        
                                            <option value="iso_8859-supp">
                                                iso_8859-supp
                                            </option>
                                        
                                            <option value="it">
                                                it
                                            </option>
                                        
                                            <option value="jis_c6220-1969-jp">
                                                jis_c6220-1969-jp
                                            </option>
                                        
                                            <option value="jis_c6220-1969-ro">
                                                jis_c6220-1969-ro
                                            </option>
                                        
                                            <option value="jis_c6229-1984-a">
                                                jis_c6229-1984-a
                                            </option>
                                        
                                            <option value="jis_c6229-1984-b">
                                                jis_c6229-1984-b
                                            </option>
                                        
                                            <option value="jis_c6229-1984-b-add">
                                                jis_c6229-1984-b-add
                                            </option>
                                        
                                            <option value="jis_c6229-1984-hand">
                                                jis_c6229-1984-hand
                                            </option>
                                        
                                            <option value="jis_c6229-1984-hand-add">
                                                jis_c6229-1984-hand-add
                                            </option>
                                        
                                            <option value="jis_c6229-1984-kana">
                                                jis_c6229-1984-kana
                                            </option>
                                        
                                            <option value="jis_x0201">
                                                jis_x0201
                                            </option>
                                        
                                            <option value="johab">
                                                johab
                                            </option>
                                        
                                            <option value="jus_i.b1.002">
                                                jus_i.b1.002
                                            </option>
                                        
                                            <option value="jus_i.b1.003-mac">
                                                jus_i.b1.003-mac
                                            </option>
                                        
                                            <option value="jus_i.b1.003-serb">
                                                jus_i.b1.003-serb
                                            </option>
                                        
                                            <option value="koi-8">
                                                koi-8
                                            </option>
                                        
                                            <option value="koi8-r">
                                                koi8-r
                                            </option>
                                        
                                            <option value="koi8-ru">
                                                koi8-ru
                                            </option>
                                        
                                            <option value="koi8-t">
                                                koi8-t
                                            </option>
                                        
                                            <option value="koi8-u">
                                                koi8-u
                                            </option>
                                        
                                            <option value="ks_c_5601-1987">
                                                ks_c_5601-1987
                                            </option>
                                        
                                            <option value="ksc5636">
                                                ksc5636
                                            </option>
                                        
                                            <option value="latin-greek">
                                                latin-greek
                                            </option>
                                        
                                            <option value="latin-greek-1">
                                                latin-greek-1
                                            </option>
                                        
                                            <option value="mac-centraleurope">
                                                mac-centraleurope
                                            </option>
                                        
                                            <option value="mac-cyrillic">
                                                mac-cyrillic
                                            </option>
                                        
                                            <option value="mac-is">
                                                mac-is
                                            </option>
                                        
                                            <option value="mac-sami">
                                                mac-sami
                                            </option>
                                        
                                            <option value="mac-uk">
                                                mac-uk
                                            </option>
                                        
                                            <option value="macintosh">
                                                macintosh
                                            </option>
                                        
                                            <option value="mik">
                                                mik
                                            </option>
                                        
                                            <option value="msz_7795.3">
                                                msz_7795.3
                                            </option>
                                        
                                            <option value="nats-dano">
                                                nats-dano
                                            </option>
                                        
                                            <option value="nats-dano-add">
                                                nats-dano-add
                                            </option>
                                        
                                            <option value="nats-sefi">
                                                nats-sefi
                                            </option>
                                        
                                            <option value="nats-sefi-add">
                                                nats-sefi-add
                                            </option>
                                        
                                            <option value="nc_nc00-10">
                                                nc_nc00-10
                                            </option>
                                        
                                            <option value="nextstep">
                                                nextstep
                                            </option>
                                        
                                            <option value="nf_z_62-010">
                                                nf_z_62-010
                                            </option>
                                        
                                            <option value="nf_z_62-010_1973">
                                                nf_z_62-010_1973
                                            </option>
                                        
                                            <option value="ns_4551-1">
                                                ns_4551-1
                                            </option>
                                        
                                            <option value="ns_4551-2">
                                                ns_4551-2
                                            </option>
                                        
                                            <option value="pt">
                                                pt
                                            </option>
                                        
                                            <option value="pt154">
                                                pt154
                                            </option>
                                        
                                            <option value="pt2">
                                                pt2
                                            </option>
                                        
                                            <option value="rk1048">
                                                rk1048
                                            </option>
                                        
                                            <option value="sami">
                                                sami
                                            </option>
                                        
                                            <option value="sami-ws2">
                                                sami-ws2
                                            </option>
                                        
                                            <option value="sen_850200_b">
                                                sen_850200_b
                                            </option>
                                        
                                            <option value="sen_850200_c">
                                                sen_850200_c
                                            </option>
                                        
                                            <option value="shift_jis">
                                                shift_jis
                                            </option>
                                        
                                            <option value="shift_jisx0213">
                                                shift_jisx0213
                                            </option>
                                        
                                            <option value="t.101-g2">
                                                t.101-g2
                                            </option>
                                        
                                            <option value="t.61-7bit">
                                                t.61-7bit
                                            </option>
                                        
                                            <option value="t.61-8bit">
                                                t.61-8bit
                                            </option>
                                        
                                            <option value="tcvn5712-1">
                                                tcvn5712-1
                                            </option>
                                        
                                            <option value="tis-620">
                                                tis-620
                                            </option>
                                        
                                            <option value="tscii">
                                                tscii
                                            </option>
                                        
                                            <option value="us-ascii">
                                                us-ascii
                                            </option>
                                        
                                            <option value="utf-7">
                                                utf-7
                                            </option>
                                        
                                            <option value="utf-8" selected="">
                                                utf-8
                                            </option>
                                        
                                            <option value="videotex-suppl">
                                                videotex-suppl
                                            </option>
                                        
                                            <option value="viscii">
                                                viscii
                                            </option>
                                        
                                            <option value="windows-1251">
                                                windows-1251
                                            </option>
                                        
                                            <option value="windows-1252">
                                                windows-1252
                                            </option>
                                        
                                            <option value="windows-31j">
                                                windows-31j
                                            </option>
                                        
                                    
                                    </select>
                                </label>
                                <input type="button" onclick="loadfile(this);" class="btn btn-default" value="Volver a abrir" id="btnReOpen" control-id="ControlID-3">
                            </div>
                            <div class="col-xs-12 col-md-4 action-buttons">
                                <button type="button" class="btn btn-default" id="switch_editor_control" onclick="try {toggle_EditArea(this)} catch(e) {} return false" title="Switch to legacy editor." control-id="ControlID-4">Use legacy editor</button>
                                &nbsp;
                                <button type="submit" id="sform_submit" class="btn btn-primary" style="font-weight:bold" control-id="ControlID-5">
                                    Guardar cambios
                                </button>
                                <input type="button" onclick="confirm_close(this);" class="btn btn-default" value="Cerrar" id="btnClose" control-id="ControlID-6">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="show-ace-editor">
                    <td>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <a href="https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcuts" target="_blank" class="help-link">
                                    <span class="fas fa-external-link-alt"></span>
                                    Keyboard shortcuts
                                </a>
                            </div>
                            <!-- Editor Toolbar -->
                            <div class="col-xs-12 col-sm-8">
                                <div class="btn-toolbar editor-toolbar" role="toolbar">
                                    <div class="btn-group" role="group">
                                        <button id="btnSearch" type="button" onclick="toolbarActions(&#39;search&#39;)" class="btn btn-default" title="Buscar" control-id="ControlID-7">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button id="btnGoto" type="button" onclick="toolbarActions(&#39;goto&#39;)" class="btn btn-default" title="Go to line." control-id="ControlID-8">
                                            <i class="fas fa-terminal"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button id="btnUndo" type="button" onclick="toolbarActions(&#39;undo&#39;)" class="btn btn-default" title="Deshacer" control-id="ControlID-9">
                                            <i class="fas fa-undo"></i>
                                        </button>
                                        <button id="btnRedo" type="button" onclick="toolbarActions(&#39;redo&#39;)" class="btn btn-default" title="Redo" control-id="ControlID-10">
                                            <i class="fas fa-redo"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button id="btnLineWrap" type="button" onclick="toolbarActions(&#39;linewrap&#39;)" class="btn btn-default active" title="Wrap" control-id="ControlID-11">
                                            <i class="fas fa-arrows-alt-h"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <select id="ddlFontSizes" class="btn btn-default form-control btn-group-ddl" control-id="ControlID-12">
                                        <option value="10">10px</option><option value="11">11px</option><option value="12">12px</option><option value="13">13px</option><option value="14">14px</option><option value="16">16px</option><option value="18">18px</option><option value="20">20px</option><option value="24">24px</option></select>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <select id="ddlModes" class="btn btn-default form-control btn-group-ddl" control-id="ControlID-13">
                                        <option value="abap">ABAP</option><option value="abc">ABC</option><option value="actionscript">ActionScript</option><option value="ada">ADA</option><option value="apache_conf">Apache Conf</option><option value="asciidoc">AsciiDoc</option><option value="assembly_x86">Assembly x86</option><option value="autohotkey">AutoHotKey</option><option value="batchfile">BatchFile</option><option value="bro">Bro</option><option value="c_cpp">C and C++</option><option value="c9search">C9Search</option><option value="cirru">Cirru</option><option value="clojure">Clojure</option><option value="cobol">Cobol</option><option value="coffee">CoffeeScript</option><option value="coldfusion">ColdFusion</option><option value="csharp">C#</option><option value="csound_document">Csound Document</option><option value="csound_orchestra">Csound</option><option value="csound_score">Csound Score</option><option value="css">CSS</option><option value="curly">Curly</option><option value="d">D</option><option value="dart">Dart</option><option value="diff">Diff</option><option value="dockerfile">Dockerfile</option><option value="dot">Dot</option><option value="drools">Drools</option><option value="edifact">Edifact</option><option value="eiffel">Eiffel</option><option value="ejs">EJS</option><option value="elixir">Elixir</option><option value="elm">Elm</option><option value="erlang">Erlang</option><option value="forth">Forth</option><option value="fortran">Fortran</option><option value="ftl">FreeMarker</option><option value="gcode">Gcode</option><option value="gherkin">Gherkin</option><option value="gitignore">Gitignore</option><option value="glsl">Glsl</option><option value="gobstones">Gobstones</option><option value="golang">Go</option><option value="graphqlschema">GraphQLSchema</option><option value="groovy">Groovy</option><option value="haml">HAML</option><option value="handlebars">Handlebars</option><option value="haskell">Haskell</option><option value="haskell_cabal">Haskell Cabal</option><option value="haxe">haXe</option><option value="hjson">Hjson</option><option value="html">HTML</option><option value="html_elixir">HTML (Elixir)</option><option value="html_ruby">HTML (Ruby)</option><option value="ini">INI</option><option value="io">Io</option><option value="jack">Jack</option><option value="jade">Jade</option><option value="java">Java</option><option value="javascript">JavaScript</option><option value="json">JSON</option><option value="jsoniq">JSONiq</option><option value="jsp">JSP</option><option value="jssm">JSSM</option><option value="jsx">JSX</option><option value="julia">Julia</option><option value="kotlin">Kotlin</option><option value="latex">LaTeX</option><option value="less">LESS</option><option value="liquid">Liquid</option><option value="lisp">Lisp</option><option value="livescript">LiveScript</option><option value="logiql">LogiQL</option><option value="lsl">LSL</option><option value="lua">Lua</option><option value="luapage">LuaPage</option><option value="lucene">Lucene</option><option value="makefile">Makefile</option><option value="markdown">Markdown</option><option value="mask">Mask</option><option value="matlab">MATLAB</option><option value="maze">Maze</option><option value="mel">MEL</option><option value="mixal">MIXAL</option><option value="mushcode">MUSHCode</option><option value="mysql">MySQL</option><option value="nix">Nix</option><option value="nsis">NSIS</option><option value="objectivec">Objective-C</option><option value="ocaml">OCaml</option><option value="pascal">Pascal</option><option value="perl">Perl</option><option value="pgsql">pgSQL</option><option value="php">PHP</option><option value="pig">Pig</option><option value="powershell">Powershell</option><option value="praat">Praat</option><option value="prolog">Prolog</option><option value="properties">Properties</option><option value="protobuf">Protobuf</option><option value="python">Python</option><option value="r">R</option><option value="razor">Razor</option><option value="rdoc">RDoc</option><option value="red">Red</option><option value="rhtml">RHTML</option><option value="rst">RST</option><option value="ruby">Ruby</option><option value="rust">Rust</option><option value="sass">SASS</option><option value="scad">SCAD</option><option value="scala">Scala</option><option value="scheme">Scheme</option><option value="scss">SCSS</option><option value="sh">SH</option><option value="sjs">SJS</option><option value="smarty">Smarty</option><option value="snippets">snippets</option><option value="soy_template">Soy Template</option><option value="space">Space</option><option value="sql">SQL</option><option value="sqlserver">SQLServer</option><option value="stylus">Stylus</option><option value="svg">SVG</option><option value="swift">Swift</option><option value="tcl">Tcl</option><option value="tex">Tex</option><option value="text">Text</option><option value="textile">Textile</option><option value="toml">Toml</option><option value="tsx">TSX</option><option value="twig">Twig</option><option value="typescript">Typescript</option><option value="vala">Vala</option><option value="vbscript">VBScript</option><option value="velocity">Velocity</option><option value="verilog">Verilog</option><option value="vhdl">VHDL</option><option value="wollok">Wollok</option><option value="xml">XML</option><option value="xquery">XQuery</option><option value="yaml">YAML</option><option value="django">Django</option></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="codewindow_container">
                        <!-- Editor -->
                        <div id="codewindow" class="show-ace-editor editor-area ace_editor ace-chrome ace_focus" style="font-size: 13px;"><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; left: 318.243px; height: 17px; width: 7.80127px; top: 138px;" control-id="ControlID-14"></textarea><div class="ace_gutter" aria-hidden="true"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="margin-top: -49px; height: 954px; width: 49px;"><div class="ace_gutter-cell " style="height: 85px;">24</div><div class="ace_gutter-cell " style="height: 17px;">25</div><div class="ace_gutter-cell " style="height: 17px;">26</div><div class="ace_gutter-cell " style="height: 17px;">27<span class="ace_fold-widget ace_start ace_open" style="height: 17px;"></span></div><div class="ace_gutter-cell " style="height: 17px;">28</div><div class="ace_gutter-cell " style="height: 17px;">29</div><div class="ace_gutter-cell " style="height: 17px;">30</div><div class="ace_gutter-cell " style="height: 17px;">31</div><div class="ace_gutter-cell " style="height: 17px;">32</div><div class="ace_gutter-cell " style="height: 17px;">33</div><div class="ace_gutter-cell " style="height: 17px;">34<span class="ace_fold-widget ace_start ace_open" style="height: 17px;"></span></div><div class="ace_gutter-cell " style="height: 17px;">35<span class="ace_fold-widget ace_start ace_open" style="height: 17px;"></span></div><div class="ace_gutter-cell " style="height: 17px;">36<span class="ace_fold-widget ace_start ace_open" style="height: 17px;"></span></div><div class="ace_gutter-cell " style="height: 34px;">37</div><div class="ace_gutter-cell " style="height: 17px;">38</div><div class="ace_gutter-cell " style="height: 17px;">39</div><div class="ace_gutter-cell " style="height: 17px;">40</div><div class="ace_gutter-cell " style="height: 17px;">41</div><div class="ace_gutter-cell " style="height: 17px;">42</div><div class="ace_gutter-cell " style="height: 17px;">43</div><div class="ace_gutter-cell " style="height: 17px;">44</div><div class="ace_gutter-cell " style="height: 17px;">45</div><div class="ace_gutter-cell " style="height: 17px;">46</div><div class="ace_gutter-cell " style="height: 17px;">47<span class="ace_fold-widget ace_start ace_open" style="height: 17px;"></span></div><div class="ace_gutter-cell " style="height: 17px;">48</div><div class="ace_gutter-cell " style="height: 17px;">49</div><div class="ace_gutter-cell " style="height: 17px;">50</div><div class="ace_gutter-cell " style="height: 17px;">51</div><div class="ace_gutter-cell " style="height: 17px;">52<span class="ace_fold-widget ace_start ace_open" style="height: 17px;"></span></div><div class="ace_gutter-cell " style="height: 17px;">53</div><div class="ace_gutter-cell " style="height: 34px;">54<span class="ace_fold-widget ace_start ace_open" style="height: 17px;"></span></div><div class="ace_gutter-cell " style="height: 34px;">55</div><div class="ace_gutter-cell " style="height: 17px;">56</div><div class="ace_gutter-cell " style="height: 51px;">57</div><div class="ace_gutter-cell " style="height: 17px;">58</div><div class="ace_gutter-cell " style="height: 17px;">59</div><div class="ace_gutter-cell " style="height: 17px;">60</div><div class="ace_gutter-cell " style="height: 17px;">61</div><div class="ace_gutter-cell " style="height: 17px;">62</div><div class="ace_gutter-cell " style="height: 17px;">63</div><div class="ace_gutter-cell " style="height: 17px;">64</div><div class="ace_gutter-cell " style="height: 17px;">65</div><div class="ace_gutter-cell " style="height: 17px;">66</div><div class="ace_gutter-cell " style="height: 17px;">67</div></div><div class="ace_gutter-active-line" style="top: 138px; height: 17px;"></div></div><div class="ace_scroller" style="left: 49px; right: 15px; bottom: 0px;"><div class="ace_content" style="margin-top: -49px; width: 1854px; height: 954px; margin-left: 0px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 628px; visibility: visible;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height:17px;top:187px;left:0;right:0;"></div></div><div class="ace_layer ace_text-layer" style="padding: 0px 4px;"><div class="ace_line_group" style="height:85px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_form ace_tag-name ace_xml">input</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">id</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"email"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">type</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"email"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"form</span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_string ace_attribute-value ace_xml">-control @error('email') is-invalid </span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_string ace_attribute-value ace_xml">@enderror"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">name</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"email"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">value</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"{{ old</span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_string ace_attribute-value ace_xml">('email') }}"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">required</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">autocomplete</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"email"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_entity ace_other ace_attribute-name ace_xml">autofocus</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    @error('email')</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">span</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"invalid-feedback"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">role</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"alert"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">strong</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span><span class="ace_text ace_xml">{{ $message }}</span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">strong</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">span</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    @enderror</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"row mb-0"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"col-md-6 offset-md-4"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_form ace_tag-name ace_xml">button</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">type</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"submit"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"btn btn-primary"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:34px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    {{ __('Enviar link para restablecer </span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_text ace_xml">contraseña') }}</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_form ace_tag-name ace_xml">button</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_form ace_tag-name ace_xml">form</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">br</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">ul</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"navbar-nav ms-auto"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_comment ace_start ace_xml">&lt;!--</span><span class="ace_comment ace_xml"> Authentication Links </span><span class="ace_comment ace_end ace_xml">--&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">   </span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_tag-name ace_xml">li</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"nav-item"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:34px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_tag-open ace_xml">&lt;</span><span class="ace_meta ace_tag ace_anchor ace_tag-name ace_xml">a</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">class</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"nav-link"</span><span class="ace_entity ace_other ace_attribute-name ace_xml">style</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"background-color: </span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_string ace_attribute-value ace_xml">#199319;width:auto;text-align:center;</span></div></div><div class="ace_line_group" style="height:34px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_string ace_attribute-value ace_xml">    color:white;"</span><span class="ace_text ace_tag-whitespace ace_xml"> </span><span class="ace_entity ace_other ace_attribute-name ace_xml">href</span><span class="ace_keyword ace_operator ace_attribute-equals ace_xml">=</span><span class="ace_string ace_attribute-value ace_xml">"{{ route('login') }}"</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span><span class="ace_text ace_xml">{{ </span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_text ace_xml">__('Regresar') }}</span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_anchor ace_tag-name ace_xml">a</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:51px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_comment ace_start ace_xml">&lt;!--</span><span class="ace_comment ace_xml"> &lt;img src="https://duclient</span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_comment ace_xml">.duwestcolombia.com/public/img/adornar</span></div><div class="ace_line" style="height:17px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ace_comment ace_xml">.png"style="width:50%;"&gt; &lt;/br&gt;     </span><span class="ace_comment ace_end ace_xml">--&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">    </span><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">li</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_indent-guide">    </span><span class="ace_text ace_xml">  </span></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"></div></div><div class="ace_line_group" style="height:17px"><div class="ace_line" style="height:17px"><span class="ace_meta ace_tag ace_punctuation ace_end-tag-open ace_xml">&lt;/</span><span class="ace_meta ace_tag ace_tag-name ace_xml">div</span><span class="ace_meta ace_tag ace_punctuation ace_tag-close ace_xml">&gt;</span></div></div><div class="ace_line_group" style="height: 17px;"><div class="ace_line" style="height:17px"><span class="ace_text ace_xml">@endsection</span></div></div><div class="ace_line_group" style="height: 17px;"><div class="ace_line" style="height:17px"></div></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer"><div class="ace_cursor" style="left: 269.243px; top: 187px; width: 7.80127px; height: 17px; opacity: 0;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="width: 20px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 20px; height: 1326px;"></div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 20px; left: 49px; right: 15px;"><div class="ace_scrollbar-inner" style="height: 20px; width: 1854px;"></div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;"></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div>
                        <textarea id="legacy_codewindow" class="codepress " style="visibility:hidden" wrap="soft" name="page" control-id="ControlID-15"></textarea>
                    </td>
                </tr>
            </tbody></table>
        </form>

        <script type="text/plain" id="general_encoding_changed_template">
            <p>
                El sistema no pudo guardar el documento con la codificación “{old_charset}”. Lo más seguro es que el documento contenga caracteres incompatibles con “{old_charset}”.
            </p>

            <p>
                cPanel actualizó su documento a “{new_charset}” codificación. Verifique que el archivo se abra correctamente en la aplicación.
            </p>

            <p>
                Para obtener más información acerca de la codificación de archivos, ingrese a <a href="https://go.cpanel.net/encoding">https://go.cpanel.net/encoding</a>.
            </p>
        </script>

        

<img src="./email.blade_files/progress_bar.gif" class="preloadedImage">
<img src="./email.blade_files/check.png" class="preloadedImage">

<script id="cjt_error_dialog_template" type="text/plain">
<div class="error_notice">{error_html}</div>
</script>

<script id="cjt_http_error_dialog_template" type="text/plain">
<div class="error_notice http_error_notice">
    <div class="http_status">{status}: {status_text_html}</div>
    <div><a href="javascript:void(0)" class="http_error_details_link">Mostrar/ocultar detalles</a></div>
    <div class="cjt_error_details" style="display:none">
        <div class="url">URL ({method}):<pre>{url_html}</pre></div>
        <div class="post">Cuerpo: <pre>{post_html}</pre></div>
        <div class="response">Respuesta:<pre>{response_html}</pre></div>
    </div>
</div>
</script>

<script>
CPANEL.application = "cpaneld";
YAHOO.lang.augmentObject( CPANEL.Locale.prototype.LEXICON, {"Proceed":"Proceder","Cancel":"Cancelar","Notice":"Notas","Processing …":"Procesando…","Error":"Error","Success!":"¡Éxito!","HTTP ERROR":"ERROR DE HTTP","OK":"Aceptar","An unknown error occurred.":"Se produjo un error desconocido.","ERROR":"ERROR"} );
</script>

<script src="./email.blade_files/ajaxapp-min.js"></script>


        <script type="text/javascript">
            var savedContent = "";
            var CHARSET = document.sform.charset.value;
            var file_path_textbox = document.getElementById("path");
            var file_path_initial_value = file_path_textbox.value;
            var reopen_btn = document.getElementById("btnReOpen");
            var USE_LEGACY_EDITOR = (0) ? true : false;

            if ( !window.LEXICON ) {
                LEXICON = {};
            }

            LEXICON.charset_changed = "Cambio de codificación de caracteres";
            LEXICON.confirm_close   = "No guardó los cambios. ¿Está seguro de que desea cerrar esta ventana?";
            LEXICON.confirm_save    = "Are you sure you want to save? The file will be overwritten.";
            LEXICON.reloading       = "Recargando…";

            file_path_textbox.addEventListener("keydown", function(event) {
                if ( event.keyCode == 13 ) {
                    event.preventDefault(); // prevents default action of form submit
                    reopen_btn.click();
                }
            });

            function loadfile(clicked_el) {
                var result = check_file_edits();
                var isFileEdited = result.isFileModified;

                if (isFileEdited) {
                    var sure = confirm("¿Está seguro de que desea abrir un archivo nuevo? Perderá cualquier cambio que haya realizado.");
                    if (!sure) {
                        file_path_textbox.value = file_path_initial_value;
                        return;
                    }
                }

                var filen = document.sform.path.value;
                var fpath = filen.split("/");
                var filename = fpath.pop();
                var dir = fpath.join("/");
                var sdir = encodeURIComponent(dir);
                var sfilename = encodeURIComponent(filename);
                var charset = document.getElementById("charset").value;

                var pp = new CPANEL.ajax.Progress_Panel( DOM.generateId(), {
                    status_html: "Recargando…",
                    effect: CPANEL.ajax.FADE_MODAL,
                } );

                if (clicked_el) {
                    pp.show_from_source(clicked_el);
                } else {
                    pp.show();
                }
                var tt_value = (USE_LEGACY_EDITOR) ? 1 : 0;
                document.location.href = "?dir=" + sdir + "&file=" + sfilename + "&file_charset=" + charset + "&use_legacy_editor=" + tt_value;

                // update the title
                document.title = filename.replace(/\n|\r/, "").html_encode() + " - Administrador de archivos cPanel v3";
            }

            var LAST_NOTICE = null;

            function loadfdata(clicked_el) {
                var path     = DOM.get("path");
                var result = check_file_edits();
                var changedContent = result.changedContent;
                var isFileEdited = result.isFileModified;

                if (!isFileEdited) {
                    LAST_NOTICE = new CPANEL.ajax.Dynamic_Notice({content:"No realizó cambios que guardar.", level:"info", replaces:LAST_NOTICE});
                    return;
                }

                var match = path.value.match(/^(.+)\/([^\/]+)$/);
                if ( !match ) {
                    LAST_NOTICE = new CPANEL.ajax.Dynamic_Notice({content:"Ruta de destino no válida.", level:"error", replaces:LAST_NOTICE});
                    return;
                }

                var api_params = {
                    module: "Fileman",
                    func: "savefile",
                    data: {
                        dir: match[1],
                        filename: match[2],
                        content: changedContent,
                        utf8_fallback: 1,
                        charset: CHARSET,
                    },
                    progress_panel: {
                        zIndex: 2500,
                        show_status: true,
                        source_el: clicked_el,
                        status_html: "Guardando “{the_file}” …".replace('{the_file}',match[2].html_encode()),
                        success_notice_options: { replaces: LAST_NOTICE },
                        before_success: function(result) {
                            savedContent = (USE_LEGACY_EDITOR) ? editAreaLoader.getValue(editAreaEl) : ace_editor.getValue();
                            return check_for_encoding_change.call(
                                this,
                                CPANEL.ajax.templates.general_encoding_changed_template,
                                result.cpanel_data
                            );
                        },
                    },
                    callback: {
                        success: function() {
                            LAST_NOTICE = req.notice;
                        },
                    },
                };

                savedContent = changedContent;
                var req = CPANEL.api( api_params );

                return false;
            }

	</script>

        <script type="text/javascript" charset="utf-8" src="./email.blade_files/ace.js">
        </script>
        <script type="text/javascript" charset="utf-8" src="./email.blade_files/ext-modelist.js">
        </script>
        <script type="text/javascript" src="./email.blade_files/edit_area_full.js"></script>
        <script type="text/javascript" src="./email.blade_files/edit_area_resizer.js"></script>

        <script type="text/javascript" src="./email.blade_files/jquery.min.js"></script>
        <script>
        

        
        var file_content = "@extends('layouts.app')\n\n@section('content')\n\u003cdiv class=\"container\">\n    \u003cdiv class=\"row justify-content-center\">\n        \u003cdiv class=\"col-md-8\">\n            \u003cdiv class=\"card\">\n                \u003cdiv class=\"card-header\">{{ __('Cambiar contraseña') }}\u003c\/div>\n\n                \u003cdiv class=\"card-body\">\n                    @if (session('status'))\n                        \u003cdiv class=\"alert alert-success\" role=\"alert\">\n                            {{ session('status') }}\n                        \u003c\/div>\n                    @endif\n\n                    \u003cform method=\"POST\" action=\"{{ route('password.email') }}\">\n                        @csrf\n\n                        \u003cdiv class=\"row mb-3\">\n                            \u003clabel for=\"email\" class=\"col-md-4 col-form-label text-md-end\">{{ __('Dirección de E-Mail') }}\u003c\/label>\n\n                            \u003cdiv class=\"col-md-6\">\n                                \u003cinput id=\"email\" type=\"email\" class=\"form-control @error('email') is-invalid @enderror\" name=\"email\" value=\"{{ old('email') }}\" required autocomplete=\"email\" autofocus>\n\n                                @error('email')\n                                    \u003cspan class=\"invalid-feedback\" role=\"alert\">\n                                        \u003cstrong>{{ $message }}\u003c\/strong>\n                                    \u003c\/span>\n                                @enderror\n                            \u003c\/div>\n                        \u003c\/div>\n\n                        \u003cdiv class=\"row mb-0\">\n                            \u003cdiv class=\"col-md-6 offset-md-4\">\n                                \u003cbutton type=\"submit\" class=\"btn btn-primary\">\n                                    {{ __('Enviar link para restablecer contraseña') }}\n                                \u003c\/button>\n                            \u003c\/div>\n                        \u003c\/div>\n                    \u003c\/form>\n                \u003c\/div>\n            \u003c\/div>\n        \u003c\/div>\n    \u003c\/div>\n\u003c\/div>\n@endsection\n";
        
        var fileName = "email.blade.php";
        var editAreaEl = "";
        var lastResizeTime = 0;
        var lastResizeRequestTime = 0;
        var NVData = {"editor_fontsize":"","editor_nowrap":""};

        function load_EditArea(workingContent) {
            workingContent = workingContent;
            if(USE_LEGACY_EDITOR){
                showAceEditorElements(false);

                editAreaEl = 'legacy_codewindow';
                CODEWINDOW = DOM.get(editAreaEl);
                editAreaLoader.show(editAreaEl);
                loadLegacyEditor(editAreaEl, workingContent);
            } else {
                editAreaLoader.hide(editAreaEl);

                editAreaEl = 'codewindow';
                CODEWINDOW = DOM.get(editAreaEl);
                showAceEditorElements(true);
                loadAceEditor(editAreaEl, workingContent);
            }
        }

        function showAceEditorElements(show){
            if(show){
                $(".show-ace-editor").show();
            } else {
                $(".show-ace-editor").hide();
            }
        }

        function loadLegacyEditor(editAreaId, editContent){
            // Setting up the ids in js/edit_area_resizer.js file to
            // use it for resizing purposes.
            setElementIds(editAreaId);
            var EditArea_config = {
                id: editAreaEl,
                start_highlight: true,
                allow_resize: "both",
                allow_toggle: false,
                language: "en",
                toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, syntax_selection, |, change_smooth_selection, highlight, reset_highlight, word_wrap, |, help",
                syntax: "php",
                word_wrap: true
            };
            editAreaLoader.setValue(editAreaId, editContent);

            editAreaLoader.init(EditArea_config);
            doResizeSoon();
        }

        function loadAceEditor(editAreaEl, editContent){
            ace_editor = ace.edit(editAreaEl);
            // The line below is added to disable a
            // warning message as required by ace editor
            // script.
            ace_editor.$blockScrolling = Infinity;
            ace_editor.focus();

            var editSession = ace.createEditSession(editContent);
            ace_editor.setSession(editSession);
            if(typeof(editSession) !== "undefined"){
                var defaultFontSize = parseInt(NVData.editor_fontsize, 10) || 13;
                // Load the modelist extension to identify the file
                // type of the given file and open the file in that
                // editor mode.
                var modelist = ace.require("ace/ext/modelist");
                var modeObj = modelist.getModeForPath(fileName);

                ace_editor.setOptions({
                    "fontSize": defaultFontSize,
                    "mode": modeObj.mode,
                    "theme": "ace/theme/chrome"
                });
                updateWordWrapInterface();

                // Fill mode list dropdown in the toolbar.
                var $modeEl = $('#ddlModes');
                fillModesDropdown($modeEl, modelist);
                $modeEl.val(modeObj.name);
                // Bind change event.
                $modeEl.change(function(){
                    var selectedMode = $modeEl.find( "option:selected" ).first().val();
                    ace_editor.getSession().setMode(modelist.modesByName[selectedMode].mode);
                });

                // Fill font size dropdown.
                var $fontEl = $('#ddlFontSizes');
                fillFontsDropdown($fontEl);
                $fontEl.val(defaultFontSize);
                // Bind change event.
                $fontEl.change(function(){
                    var selectedSize = parseInt($fontEl.find( "option:selected" ).first().val());
                    SetNvData("editor_fontsize", selectedSize);
                    ace_editor.setFontSize(selectedSize);
                });
            }
        }

        function fillFontsDropdown($el) {
            var arr = [10, 11, 12, 13, 14, 16, 18, 20, 24].map(function(size){
                return {val: size, text: size + "px"};
            });
            arr.forEach(function(val){
                $el.append($("<option>", val));
            });
        }

        function fillModesDropdown($el, modeList) {
            var arr = modeList.modes.map(function(oMode){
                return {val: oMode.name, text: oMode.caption};
            });
            arr.forEach(function(val){
                $el.append($("<option>", val));
            });
        }

        function toolbarActions(action){
            switch(action){
                case "search":
                ace_editor.execCommand("find");
                break;
                case "goto":
                ace_editor.execCommand("gotoline");
                break;
                case "undo":
                ace_editor.undo();
                break;
                case "redo":
                ace_editor.redo();
                break;
                case "linewrap":
                toggleWordWrap();
                break;
            }
        }

        function toggleWordWrap() {
            if (NVData.editor_nowrap) {
                SetNvData("editor_nowrap", 0);
            } else {
                SetNvData("editor_nowrap", 1);
            }
            updateWordWrapInterface();
        }

        function updateWordWrapInterface() {
            var btnEl = document.querySelector("#btnLineWrap");

            if (btnEl && NVData.editor_nowrap) {
                ace_editor.setOption("wrap", false);
                btnEl.classList.remove("active");
            } else {
                ace_editor.setOption("wrap", 80);
                btnEl.classList.add("active");
            }
            // Remove the focus button state for less UI confusion
            btnEl.blur();
        }

        /*
         * This function detects if the browser is in a mobile
         * environment.
         * Note: This is used to open the editor in legacy editor mode
         * until Ace editor comes with the fixes for issues described in
         * ZC-2558.
        */
        function detectmobile() {
         if( navigator.userAgent.match(/Android/i)
         || navigator.userAgent.match(/webOS/i)
         || navigator.userAgent.match(/iPhone/i)
         || navigator.userAgent.match(/iPad/i)
         || navigator.userAgent.match(/iPod/i)
         || navigator.userAgent.match(/BlackBerry/i)
         || navigator.userAgent.match(/Windows Phone/i)
         ){
            return true;
          }
         else {
            return false;
          }
        }

        function toggle_EditArea(link) {
            var workingContent = "";
            if(USE_LEGACY_EDITOR){
                USE_LEGACY_EDITOR = false;
                // send working content to not loose working data
                // when user switches between two editors.
                workingContent = (editAreaLoader) ? editAreaLoader.getValue(editAreaEl) : "";
            } else {
                USE_LEGACY_EDITOR = true;
                // Reset the word wrap
                toggleWordWrap();
                // send working content to not loose working data
                // when user switches between two editors.
                workingContent = (ace_editor) ? ace_editor.getSession().getValue() : "";
            }
            toggleSwitchButtonAttr(link);
            load_EditArea(workingContent);
        }

        function toggleSwitchButtonAttr(btnEl) {
            var $switchButton = $(btnEl);
            if(USE_LEGACY_EDITOR){
                $switchButton.text("Use latest editor").prop("title", "Switch to latest editor.");
            } else {
                $switchButton.text("Use legacy editor").prop("title", "Switch to legacy editor.");
            }
        }

        var CODEWINDOW;
        var ace_editor;

        EVENT.throwErrors = true;

        YAHOO.util.Event.addListener(window, "load", function(){
            savedContent = file_content;
            if(detectmobile()){
                USE_LEGACY_EDITOR = true;
            }
            toggleSwitchButtonAttr(DOM.get("switch_editor_control"));
            load_EditArea(savedContent);
        });
        $(window).resize(function(e) {
            doResize();
        });
        </script>

    

<deepl-input-controller><template shadowrootmode="open"><link rel="stylesheet" href="chrome-extension://cofdbpoegempjloogbagkncekinflcnj/build/content.css"><div dir="ltr"><div class="dl-input-translation-container svelte-95aucy"><div></div></div></div></template></deepl-input-controller><webchatgpt-custom-element-2b6642b1-cfdd-4509-b40f-2f101fa4b786 id="webchatgpt-snackbar" style="color: rgb(255, 255, 255);"><template shadowrootmode="open"><style id="webchatgpt-snackbar-container-emotion-style"></style><div id="webchatgpt-snackbar-container" style="z-index: 2147483647;"></div></template></webchatgpt-custom-element-2b6642b1-cfdd-4509-b40f-2f101fa4b786><div id="cjt_dynamicnotice_container" class="cjt-dynamicnotice-container cjt-notice-container"></div></body><grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open"><style>
      div.grammarly-desktop-integration {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select:none;
        user-select:none;
      }

      div.grammarly-desktop-integration:before {
        content: attr(data-content);
      }
    </style><div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div></template></grammarly-desktop-integration></html>