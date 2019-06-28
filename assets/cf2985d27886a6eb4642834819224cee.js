((function(){if(!Element.prototype.matches){Element.prototype.matches=Element.prototype.msMatchesSelector||Element.prototype.webkitMatchesSelector}
var findAncestor=function(el,selector){while((el=el.parentElement)&&!((el.matches||el.matchesSelector).call(el,selector))){}
return el};var fields=document.querySelectorAll('input[name="searchfield"][data-search-input]');Array.prototype.forEach.call(fields,function(field){var form=findAncestor(field,'form[data-simplesearch-form]'),min=field.getAttribute('min')||!1,location=field.getAttribute('data-search-input'),separator=field.getAttribute('data-search-separator');if(min){var invalid=field.getAttribute('data-search-invalid');field.addEventListener('keydown',function(){field.setCustomValidity(field.value.length>=min?'':invalid)})}
form.addEventListener('submit',function(event){event.preventDefault();if(field.checkValidity()){window.location.href=location+separator+field.value}})})})());(function(window,document){var nextElement=document.querySelector('link[rel=next]');if(!nextElement)return;var feedElement=document.querySelector('.post-feed');if(!feedElement)return;var buffer=300;var ticking=!1;var loading=!1;var lastScrollY=window.scrollY;var lastWindowHeight=window.innerHeight;var lastDocumentHeight=document.documentElement.scrollHeight;function onPageLoad(){if(this.status===404){window.removeEventListener('scroll',onScroll);window.removeEventListener('resize',onResize);return}
var postElements=this.response.querySelectorAll('.post-card');postElements.forEach(function(item){feedElement.appendChild(item)});var resNextElement=this.response.querySelector('link[rel=next]');if(resNextElement){nextElement.href=resNextElement.href}else{window.removeEventListener('scroll',onScroll);window.removeEventListener('resize',onResize)}
lastDocumentHeight=document.documentElement.scrollHeight;ticking=!1;loading=!1}
function onUpdate(){if(loading)return;if(lastScrollY+lastWindowHeight<=lastDocumentHeight-buffer){ticking=!1;return}
loading=!0;var xhr=new window.XMLHttpRequest();xhr.responseType='document';xhr.addEventListener('load',onPageLoad);xhr.open('GET',nextElement.href);xhr.send(null)}
function requestTick(){ticking||window.requestAnimationFrame(onUpdate);ticking=!0}
function onScroll(){lastScrollY=window.scrollY;requestTick()}
function onResize(){lastWindowHeight=window.innerHeight;lastDocumentHeight=document.documentElement.scrollHeight;requestTick()}
window.addEventListener('scroll',onScroll,{passive:!0});window.addEventListener('resize',onResize);requestTick()})(window,document);
/*!
* FitVids 1.3
*
*
* Copyright 2017, Chris Coyier + Dave Rupert + Ghost Foundation
* This is an unofficial release, ported by John O'Nolan
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the MIT license
*
*/
;(function($){'use strict';$.fn.fitVids=function(options){var settings={customSelector:null,ignore:null};if(!document.getElementById('fit-vids-style')){var head=document.head||document.getElementsByTagName('head')[0];var css='.fluid-width-video-container{flex-grow: 1;width:100%;}.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}';var div=document.createElement("div");div.innerHTML='<p>x</p><style id="fit-vids-style">'+css+'</style>';head.appendChild(div.childNodes[1])}
if(options){$.extend(settings,options)}
return this.each(function(){var selectors=['iframe[src*="player.vimeo.com"]','iframe[src*="youtube.com"]','iframe[src*="youtube-nocookie.com"]','iframe[src*="kickstarter.com"][src*="video.html"]','object','embed'];if(settings.customSelector){selectors.push(settings.customSelector)}
var ignoreList='.fitvidsignore';if(settings.ignore){ignoreList=ignoreList+', '+settings.ignore}
var $allVideos=$(this).find(selectors.join(','));$allVideos=$allVideos.not('object object');$allVideos=$allVideos.not(ignoreList);$allVideos.each(function(){var $this=$(this);if($this.parents(ignoreList).length>0){return}
if(this.tagName.toLowerCase()==='embed'&&$this.parent('object').length||$this.parent('.fluid-width-video-wrapper').length){return}
if((!$this.css('height')&&!$this.css('width'))&&(isNaN($this.attr('height'))||isNaN($this.attr('width')))){$this.attr('height',9);$this.attr('width',16)}
var height=(this.tagName.toLowerCase()==='object'||($this.attr('height')&&!isNaN(parseInt($this.attr('height'),10))))?parseInt($this.attr('height'),10):$this.height(),width=!isNaN(parseInt($this.attr('width'),10))?parseInt($this.attr('width'),10):$this.width(),aspectRatio=height/width;if(!$this.attr('name')){var videoName='fitvid'+$.fn.fitVids._count;$this.attr('name',videoName);$.fn.fitVids._count++}
$this.wrap('<div class="fluid-width-video-container"><div class="fluid-width-video-wrapper"></div></div>').parent('.fluid-width-video-wrapper').css('padding-top',(aspectRatio*100)+'%');$this.removeAttr('height').removeAttr('width')})})};$.fn.fitVids._count=0})(window.jQuery||window.Zepto)