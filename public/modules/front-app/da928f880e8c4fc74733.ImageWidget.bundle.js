(self.webpackChunk=self.webpackChunk||[]).push([[551],{1866:(t,e,n)=>{"use strict";n.d(e,{Z:()=>P});var i,r,o=n(96156),s=n(6610),a=n(5991),l=n(10379),c=n(46070),u=n(77608),p=n(22122),h=n(32465),g=n(71893),f="#eee",m=g.ZP.span(r||(r=(0,h.Z)(["\n  animation: "," 1.2s ease-in-out infinite;\n  background-color: ",";\n  background-size: 200px 100%;\n  background-repeat: no-repeat;\n  background-image: linear-gradient(90deg, ",");\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n  height: 100%;\n"])),(function(t,e){return(0,g.F4)(i||(i=(0,h.Z)(["\n  0% {\n    background-position: -200px 0;\n  }\n  ","\n  100% {\n    background-position: calc(200px + 100%) 0;\n  }\n"])),e>0?"".concat(Math.floor(1/(t+e)*t*100),"% {\n    background-position: calc(200px + 100%) 0;\n  }"):void 0)}),(function(t){var e=t.color;return"".concat(e||f)}),(function(t){var e=t.highlightColor,n=t.color;return"".concat(n||f,", ").concat(e||"#f5f5f5",", ").concat(n||f)}));const d=function(t){return React.createElement("div",{className:t.className},React.createElement(m,(0,p.Z)({},t,{className:"altrp-skeleton__span"})))};var v,b=n(14494),y=n(67294),w=n(40747);const R=g.ZP.div(v||(v=(0,h.Z)(["& {\n  position: relative;\n  max-width: 100%;\n  overflow: hidden;\n  width:",";  \n","\n  \n  background-color: ","; \n}\n&::before{\n  display: block;\n  content: '';\n  width: 100%;\n",";\n}\n&& .altrp-skeleton,\n&& .altrp-image{\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;  \n  height: 100%;\n}\n"])),(function(t){return _.isNumber(t.width)?t.width+"px":t.width?t.width:"100%"}),(function(t){var e=t.settings,n=(0,w.getResponsiveSetting)(e,"aspect_ratio_size");return 0!==Number(n)&&"custom"===n||Number(n)?"height:auto;":t.height&&-1===t.height.indexOf("%")?"height:".concat(t.height?t.height:"auto",";"):"height:auto;"}),(function(t){return t.color?t.color:"#fff"}),(function(t){var e=t.settings,n=t.height,i="",r=(0,w.getResponsiveSetting)(e,"aspect_ratio_size");if(0!==Number(r)){if("custom"===r){var o=(0,w.getResponsiveSetting)(e,"custom_aspect");o=Number(o)||100,i+="padding-top:".concat(o,"%;")}else Number(r)&&(i+="padding-top:".concat(r,"%;"));return i}return n&&_.isString(n)&&-1===n.indexOf("%")||Number(t.mediaWidth)&&Number(t.mediaHeight)&&(i+="padding-top:".concat(t.mediaHeight/t.mediaWidth*100,"%;")),i}));var S=n(29459);function Z(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(t);e&&(i=i.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,i)}return n}function k(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?Z(Object(n),!0).forEach((function(e){(0,o.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):Z(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}var O=function(t){(0,l.Z)(r,t);var e,n,i=(e=r,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,i=(0,u.Z)(e);if(n){var r=(0,u.Z)(this).constructor;t=Reflect.construct(i,arguments,r)}else t=i.apply(this,arguments);return(0,c.Z)(this,t)});function r(t){var e,n,o;(0,s.Z)(this,r),(o=i.call(this,t)).imageRef=y.createRef();var a=!0;return(!(0,w.isSSR)()||null!==(e=t.element)&&void 0!==e&&e.getResponsiveSetting("lazyload_disable"))&&((0,w.isEditor)()||!1===t.lazy||!window.altrpImageLazy||"none"===window.altrpImageLazy||!t.element||null!==(n=t.element)&&void 0!==n&&n.getResponsiveSetting("lazyload_disable"))||(a=!1),o.state={visible:a,update:0},o.timeoutId=setTimeout((function(){return o.setState((function(t){return k(k({},t),{},{update:t.update++})}))}),500),o}return(0,a.Z)(r,[{key:"componentWillUnmount",value:function(){clearTimeout(this.timeoutId)}},{key:"componentDidUpdate",value:function(t,e){var n;if(this.state.visible&&clearTimeout(this.timeoutId),!this.state.visible&&this.imageRef.current&&(null!==(n=this.props)&&void 0!==n&&n.element.getRoot().popupGUID&&this.props.element.getRoot().popupGUID===this.props.popupTrigger.popupID&&this.setState((function(t){return k(k({},t),{},{visible:!0})})),t.scrollPosition!==this.props.scrollPosition||e.update!==this.state.update)){var i=window.mainScrollbars;i||(i=document.querySelector(".front-app-content")),this.imageRef.current&&(0,S.nX)(this.imageRef.current,i)&&(clearTimeout(this.timeoutId),this.setState((function(t){return k(k({},t),{},{visible:!0})})))}}},{key:"render",value:function(){var t,e=k({},this.props.image),n=this.props.noDefault||!1,i={},r=this.props.width,o=this.props.height;if(!(0,w.isSSR)()&&this.props.image instanceof File)e=this.props.image;else if(this.props.default)0===Object.keys(e).length&&(e=this.props.default);else{if(n)return"";e.url=e.url||"/img/nullImage.png",e.name=e.name||"null",e.assetType=e.assetType||void 0}var s=(0,w.renderAsset)(e);(this.state.visible||"skeleton"===window.altrpImageLazy)&&(i.background="transparent");var a=y.createElement(R,{color:e.main_color,className:"altrp-image-placeholder ",ref:this.imageRef,settings:(null===(t=this.props.element)||void 0===t?void 0:t.getSettings())||{},height:o,width:r,style:i,mediaWidth:e.width||100,mediaHeight:e.height||75},"skeleton"===window.altrpImageLazy&&!this.state.visible&&y.createElement(d,{className:"altrp-skeleton",color:window.altrpSkeletonColor,highlightColor:window.altrpSkeletonHighlightColor}),this.state.visible&&(0,y.cloneElement)(s,{className:this.props.className,id:this.props.id||null,style:this.props.style}));return y.createElement(y.Fragment,null,a)}}]),r}(y.Component);const P=(0,w.isEditor)()?O:(0,b.$j)((function(t){return{scrollPosition:t.scrollPosition,popupTrigger:t.popupTrigger}}))(O)},49e3:(t,e,n)=>{"use strict";n.d(e,{Z:()=>p});var i=n(22122),r=n(6610),o=n(5991),s=n(10379),a=n(46070),l=n(77608),c=n(67294),u=n(92879);n.e(3912).then(n.bind(n,53912));const p=function(t){(0,s.Z)(h,t);var e,n,p=(e=h,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,i=(0,l.Z)(e);if(n){var r=(0,l.Z)(this).constructor;t=Reflect.construct(i,arguments,r)}else t=i.apply(this,arguments);return(0,a.Z)(this,t)});function h(t){var e;return(0,r.Z)(this,h),(e=p.call(this,t)).state={current:t.current||0},e}return(0,o.Z)(h,[{key:"render",value:function(){var t=this,e=this.props.images,n=this.props.settings,r=null,o=null,s=this.state.current;return 0===e.length&&(e=["/img/nullImage.png"]),e.length>1&&(r=e[(s+1)%e.length],o=e[(s+e.length-1)%e.length]),c.createElement(u.Z,(0,i.Z)({},n,{onMovePrevRequest:function(){t.setState({current:(s+e.length-1)%e.length})},onMoveNextRequest:function(){t.setState({current:(s+1)%e.length})},mainSrc:e[s],prevSrc:o,nextSrc:r,wrapperClassName:"altrp-lightbox"}))}}]),h}(c.Component)},66017:(t,e,n)=>{"use strict";n.r(e),n.d(e,{default:()=>m});var i=n(22122),r=n(6610),o=n(5991),s=n(63349),a=n(10379),l=n(46070),c=n(77608),u=n(67294),p=n(73727),h=n(40747),g=n(1866),f=n(49e3);const m=function(t){(0,a.Z)(d,t);var e,n,m=(e=d,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,i=(0,c.Z)(e);if(n){var r=(0,c.Z)(this).constructor;t=Reflect.construct(i,arguments,r)}else t=i.apply(this,arguments);return(0,l.Z)(this,t)});function d(t){var e;return(0,r.Z)(this,d),(e=m.call(this,t)).state={settings:t.element.getSettings(),lightbox:!1},t.element.component=(0,s.Z)(e),window.elementDecorator&&window.elementDecorator((0,s.Z)(e)),t.baseRender&&(e.render=t.baseRender((0,s.Z)(e))),e}return(0,o.Z)(d,[{key:"render",value:function(){var t=this,e=this.props.element,n=this.state.settings.image_link||{},r=this.props.element.getSettings("lightbox_switch",!1),o=this.props.element.getSettings("cursor_pointer",!1),s=this.props.element.getSettings("background_image",{}),a="altrp-image-container",l=this.state.settings.content_media;o&&(a+=" cursor-pointer");var c=e.hasCardModel()?e.getCardModel():this.props.currentModel;this.state.settings.content_path&&_.isObject((0,h.getDataByPath)(this.state.settings.content_path,null,c))?(l=(0,h.getDataByPath)(this.state.settings.content_path,null,c),_.get(l,"0")instanceof File?l=_.get(l,"0"):l.assetType="media"):this.state.settings.content_path&&_.isString((0,h.getDataByPath)(this.state.settings.content_path,null,c))?l={assetType:"media",url:l=(0,h.getDataByPath)(this.state.settings.content_path,null,c),name:"null"}:this.props.element.getSettings("default_url")&&(l={assetType:"media",url:this.props.element.getSettings("default_url"),name:"default"});var m=this.props.element.getResponsiveSetting("width_size"),d=this.props.element.getResponsiveSetting("height_size");m=_.get(m,"size","100")+_.get(m,"unit","%"),d=_.get(d,"size","100")+_.get(d,"unit","%");var v=u.createElement(g.Z,{image:l,width:m,element:this.props.element,height:d,id:this.state.settings.position_css_id,className:this.state.settings.position_css_classes+" altrp-image"+(s?" altrp-background-image":"")}),b=u.createElement(f.Z,{images:[l?l.url:""],settings:{onCloseRequest:function(){return t.setState({lightbox:!1})}}});if(n.toPrevPage&&!(0,h.isEditor)())return u.createElement("div",{className:a,onClick:function(){history.back(),r&&t.setState({lightbox:!0})}},v);var y=n.url||"";y=(0,h.parseURLTemplate)(y,this.props.element.getCurrentModel().getData());var w={};return n.openInNew&&(w.target="_blank"),u.createElement("div",{className:a,onClick:function(){r&&t.setState({lightbox:!0})}},y&&!(0,h.isEditor)()?"a"===n.tag?u.createElement("a",(0,i.Z)({href:y},w),v):u.createElement(p.rU,(0,i.Z)({to:y},w),v):v,r&&this.state.lightbox?b:"")}}]),d}(u.Component)}}]);