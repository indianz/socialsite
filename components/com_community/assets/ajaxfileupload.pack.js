joms.jQuery.extend({createUploadIframe:function(d,b){var a="jUploadFrame"+d;var c='<iframe id="'+a+'" name="'+a+'" style="position:absolute; top:-9999px; left:-9999px"';if(window.ActiveXObject){if(typeof b=="boolean"){c+=' src="javascript:false"'}else{if(typeof b=="string"){c+=' src="'+b+'"'}}}c+=" />";joms.jQuery(c).appendTo(document.body);return joms.jQuery("#"+a).get(0)},createUploadForm:function(a,j,d){var h="jUploadForm"+a;var c="jUploadFile"+a;var b=joms.jQuery('<form  action="" method="POST" name="'+h+'" id="'+h+'" enctype="multipart/form-data"></form>');if(d){for(var e in d){joms.jQuery('<input type="hidden" name="'+e+'" value="'+d[e]+'" />').appendTo(b)}}var f=joms.jQuery("#"+j);var g=joms.jQuery(f).clone();joms.jQuery(f).attr("id",c);joms.jQuery(f).before(g);joms.jQuery(f).appendTo(b);joms.jQuery(b).css("position","absolute");joms.jQuery(b).css("top","-1200px");joms.jQuery(b).css("left","-1200px");joms.jQuery(b).appendTo("body");return b},ajaxFileUpload:function(k){k=joms.jQuery.extend({},joms.jQuery.ajaxSettings,k);var a=new Date().getTime();var b=joms.jQuery.createUploadForm(a,k.fileElementId,(typeof(k.data)=="undefined"?false:k.data));var i=joms.jQuery.createUploadIframe(a,k.secureuri);var h="jUploadFrame"+a;var j="jUploadForm"+a;if(k.global&&!joms.jQuery.active++){joms.jQuery.event.trigger("ajaxStart")}var c=false;var f={};if(k.global){joms.jQuery.event.trigger("ajaxSend",[f,k])}var d=function(l){var p=document.getElementById(h);try{if(p.contentDocument){f.responseText=p.contentDocument.body?p.contentDocument.body.innerHTML:null;f.responseXML=p.contentDocument.XMLDocument?p.contentDocument.XMLDocument:p.contentDocument.document}else{if(p.contentWindow){f.responseText=p.contentWindow.document.body?p.contentWindow.document.body.innerHTML:null;if(f.responseText.indexOf("pre")){f.responseText=f.responseText.substring(f.responseText.indexOf(">")+1,f.responseText.lastIndexOf("<"))}f.responseXML=p.contentWindow.document.XMLDocument?p.contentWindow.document.XMLDocument:p.contentWindow.document}}}catch(o){}if(f||l=="timeout"){c=true;var m;try{m=l!="timeout"?"success":"error";if(m!="error"){var n=joms.jQuery.uploadHttpData(f,k.dataType);if(k.success){k.success(n,m)}if(k.global){joms.jQuery.event.trigger("ajaxSuccess",[f,k])}}}catch(o){m="error"}if(k.global){joms.jQuery.event.trigger("ajaxComplete",[f,k])}if(k.global&&!--joms.jQuery.active){joms.jQuery.event.trigger("ajaxStop")}if(k.complete){k.complete(f,m)}joms.jQuery(p).unbind();setTimeout(function(){try{joms.jQuery(p).remove();joms.jQuery(b).remove()}catch(q){}},100);f=null}};if(k.timeout>0){setTimeout(function(){if(!c){d("timeout")}},k.timeout)}try{var b=joms.jQuery("#"+j);joms.jQuery(b).attr("action",k.url);joms.jQuery(b).attr("method","POST");joms.jQuery(b).attr("target",h);if(b.encoding){joms.jQuery(b).attr("encoding","multipart/form-data")}else{joms.jQuery(b).attr("enctype","multipart/form-data")}joms.jQuery(b).submit()}catch(g){}joms.jQuery("#"+h).load(d);return{abort:function(){}}},uploadHttpData:function(r,type){var data=!type;data=type=="xml"||data?r.responseXML:r.responseText;if(type=="script"){joms.jQuery.globalEval(data)}if(type=="json"){eval("data = "+data)}if(type=="html"){joms.jQuery("<div>").html(data).evalScripts()}return data}});