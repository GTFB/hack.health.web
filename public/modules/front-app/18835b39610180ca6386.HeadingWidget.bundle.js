(self.webpackChunk=self.webpackChunk||[]).push([[6598],{77976:(t,e,n)=>{"use strict";n.r(e),n.d(e,{default:()=>Z});var a=n(96156),i=n(6610),r=n(5991),s=n(63349),l=n(10379),c=n(46070),o=n(77608),p=n(67294),h=n(12519),g=n(40747);function u(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}function d(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?u(Object(n),!0).forEach((function(e){(0,a.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):u(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}n.e(4228).then(n.bind(n,64228));const f=function(t){(0,l.Z)(h,t);var e,n,a=(e=h,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,a=(0,o.Z)(e);if(n){var i=(0,o.Z)(this).constructor;t=Reflect.construct(a,arguments,i)}else t=a.apply(this,arguments);return(0,c.Z)(this,t)});function h(t){var e;(0,i.Z)(this,h);var n={active:0,step:0,index:0,width:0,style:{}};return"swirl"!==(e=a.call(this,t)).props.type&&"blinds"!==e.props.type&&"wave"!==e.props.type||(n.index=-1),"slide"!==e.props.type&&"slideDown"!==e.props.type||(n.active=-1),"flip"===e.props.type&&(n.step=1),e.state=n,e.rotating=e.rotating.bind((0,s.Z)(e)),e.typing=e.typing.bind((0,s.Z)(e)),e.getWidth=e.getWidth.bind((0,s.Z)(e)),e.setStep=e.setStep.bind((0,s.Z)(e)),e.widthRef=p.createRef(),e.clipRef=p.createRef(),e}return(0,r.Z)(h,[{key:"componentDidMount",value:function(){this.rotating(),(this.clipRef.current&&"clip"===this.props.type||this.clipRef.current&&"slide"===this.props.type)&&this.setState({width:this.clipRef.current.offsetWidth})}},{key:"componentDidUpdate",value:function(t){var e=this,n=function(){var t=!1;"flip"===e.props.type&&(t=!0),e.setState((function(e){return{active:0,index:0,step:0,width:t?e.width:0,style:{}}})),e.props.type,e.setState({index:-1}),e.rotating()};t.text!==this.props.text&&n(),t.type!==this.props.type&&n(),JSON.stringify(this.props.text.split("\n"))!==JSON.stringify(t.text.split("\n"))&&this.props.type,this.getWidth()}},{key:"getWidth",value:function(){if(this.widthRef.current){var t=Array.from(this.widthRef.current.children),e=0;t.forEach((function(t){e<t.offsetWidth&&(e=t.offsetWidth)})),this.state.width!==e&&this.setState({width:e})}}},{key:"rotating",value:function(){var t=this,e=this.props.text.split("\n");switch(this.props.type){case"typing":setTimeout((function(){var n=e[t.state.index].split("").length;t.setState((function(t){return{step:1,active:n>=t.active+1?t.active:0}})),setTimeout((function(){var n=e.length--;t.setState((function(t){return{step:2,index:n>t.index+1?t.index+1:0}})),setTimeout(t.typing,500)}),500)}),2e3);break;case"clip":if(this.clipRef.current){var n=e.length;setTimeout((function(){var e=setInterval((function(){t.state.width>0?t.setState((function(t){return{width:t.width-4}})):(clearInterval(e),setTimeout((function(){t.setState((function(t){return{width:0,active:n>t.active+1?t.active+1:0}}));var e=setInterval((function(){"clip"===t.props.type&&t.clipRef.current.offsetWidth>=t.state.width?t.setState((function(t){return{width:t.width+4}})):("clip"===t.props.type&&t.setState({width:t.clipRef.current.offsetWidth}),clearInterval(e),t.rotating())}),20)}),100))}),20)}),4e3)}break;case"flip":setTimeout((function(){t.setState({step:0}),setTimeout((function(){var n=e.length;t.setState((function(t){return{active:n>t.active+1?t.active+1:0,step:1}})),t.rotating()}),1500)}),3e3);break;case"swirl":if(_.isString(e[this.state.active+1])){var a=e[e.length>=this.state.active+1?this.state.active+1:0].split("").length,i=e[this.state.active].split("").length;this.setState({step:a>i?a:i})}setTimeout((function(){var n=setInterval((function(){t.state.index<t.state.step?t.setState((function(t){return{index:t.index+1}})):(clearInterval(n),setTimeout((function(){var n=e.length>t.state.active+1;t.setState((function(t){return{active:n?t.active+1:0,index:-1}})),t.rotating()}),500))}),100)}),1e3);break;case"blinds":if(_.isString(e[this.state.active+1])){var r=e[e.length>=this.state.active+1?this.state.active+1:0].split("").length,s=e[this.state.active].split("").length;this.setState({step:r>s?r:s})}setTimeout((function(){var n=setInterval((function(){t.state.index<t.state.step?t.setState((function(t){return{index:t.index+1}})):(clearInterval(n),setTimeout((function(){var n=e.length>t.state.active+1;t.setState((function(t){return{active:n?t.active+1:0,index:-1}})),t.rotating()}),500))}),100)}),1e3);break;case"dropIn":setTimeout((function(){var n=e.length>t.state.active+1?t.state.active+1:0;t.setState({active:n}),t.rotating()}),4e3);break;case"wave":if(_.isString(e[this.state.active+1])){var l="";e[e.length>=this.state.active+1?this.state.active+1:0]&&(l=e[e.length>=this.state.active+1?this.state.active+1:0].split("").length);var c=e[this.state.active].split("").length;this.setState({step:l>c?l:c})}setTimeout((function(){var n=setInterval((function(){t.state.index<t.state.step?t.setState((function(t){return{index:t.index+1}})):(clearInterval(n),setTimeout((function(){var n=e.length>t.state.active+1;t.setState((function(t){return{active:n?t.active+1:0,index:-1}})),t.rotating()}),500))}),100)}),1e3);break;case"slide":if(this.widthRef.current){var o=e.length-1;setTimeout((function(){t.setState((function(e){return{active:t.state.active+1<o?e.active+1:-1}})),t.rotating()}),4e3)}break;case"slideDown":if(this.widthRef.current){var p=e.length-1;setTimeout((function(){t.setState((function(e){return{active:t.state.active+1<p?e.active+1:-1}})),t.rotating()}),5e3)}}}},{key:"typing",value:function(){var t=this,e=0;this.props.text.split("\n")[this.state.index].split("")&&(e=this.props.text.split("\n")[this.state.index].split("").length),setTimeout((function(){e>=t.state.active+1?(t.setState((function(t){return{active:t.active+1}})),t.typing()):t.rotating()}),150)}},{key:"setStep",value:function(t){console.log(t),this.setState({step:t})}},{key:"render",value:function(){var t=this,e=[this.props.prefix?"altrp-"+this.props.prefix+"-animating-rotating":" ","altrp-animating-rotating","altrp-animating-text"],n=this.props.text.split("\n"),a=n[this.state.index],i={};switch(this.props.type){case"typing":e.push("altrp-animating-rotating-line"),e.push("altrp-animating-rotating-line-pulse"),1===this.state.step?e.push("altrp-animating-rotating-typing-delete"):a=n[this.state.index].split("").map((function(e,n){var a=["altrp-animating-rotating-typing-letter",n>=t.state.active&&t.state.step>=2?"altrp-animating-rotating-typing-letter-hide":""];return p.createElement("span",{key:n,className:_.join(a," ")},e)}));break;case"clip":var r={width:this.state.width,overflow:"hidden"};a=p.createElement(p.Fragment,null,p.createElement("div",{style:r},n.map((function(e,n){var a="altrp-animating-rotating-clip-word"+(t.state.active!==n?" altrp-animating-rotating-clip-hide":"");return p.createElement("span",{key:n,ref:t.state.active!==n?null:t.clipRef,className:a},e)}))),p.createElement("span",{className:"altrp-animating-rotating-clip-line"}));break;case"flip":e.push("altrp-animating-rotating-flip-container");var s="altrp-animating-rotating-flip-container-showing";0===this.state.step?s="altrp-animating-rotating-flip-container-hiding":1===this.state.step&&(s="altrp-animating-rotating-flip-container-showing"),e.push(s),i=d(d({},i),{},{transform:"rotateX(".concat(this.state.style.transform,"deg)")}),a=p.createElement("div",{style:{width:this.state.width},ref:this.widthRef},n.map((function(e,n){var a="altrp-animating-rotating-flip-word"+(t.state.active!==n?" altrp-animating-rotating-flip-hide":" altrp-animating-rotating-flip-show");return p.createElement("span",{key:n,className:a},p.createElement("span",null,e))})));break;case"swirl":a=p.createElement("div",{style:{width:this.state.width},className:"altrp-animating-rotating-swirl",ref:this.widthRef},n.map((function(e,a){return p.createElement("span",{key:a,className:"altrp-animating-rotating-swirl-word"},e.split("").map((function(e,i){var r="altrp-animating-rotating-swirl-letter";return t.state.active!==a&&(r+=" altrp-animating-rotating-swirl-letter-hide"),(n.length>t.state.active+1?t.state.active+1:0)===a&&i<=t.state.index&&(r+=" altrp-animating-rotating-swirl-letter-showing"),t.state.active===a&&i<=t.state.index&&(r+=" altrp-animating-rotating-swirl-letter-hiding"),p.createElement("div",{key:i,className:r},e)})))})));break;case"blinds":a=p.createElement("div",{style:{width:this.state.width},className:"altrp-animating-rotating-blinds",ref:this.widthRef},n.map((function(e,a){return p.createElement("span",{key:a,className:"altrp-animating-rotating-blinds-word"},e.split("").map((function(e,i){var r="altrp-animating-rotating-blinds-letter";return t.state.active!==a&&(r+=" altrp-animating-rotating-blinds-letter-hide"),(n.length>t.state.active+1?t.state.active+1:0)===a&&i<=t.state.index&&(r+=" altrp-animating-rotating-blinds-letter-showing"),t.state.active===a&&i<=t.state.index&&(r+=" altrp-animating-rotating-blinds-letter-hiding"),p.createElement("div",{key:i,className:r},e)})))})));break;case"dropIn":var l={width:this.state.width};a=p.createElement("div",{style:l,className:"altrp-animating-rotating-drop-in",ref:this.widthRef},n.map((function(e,a){var i="altrp-animating-rotating-drop-in-word",r=t.state.active-1>=0?t.state.active-1:n.length-1;return t.state.active!==a?i+=r===a?" altrp-animating-rotating-drop-in-hiding":" altrp-animating-rotating-drop-in-hide":i+=" altrp-animating-rotating-drop-in-show",p.createElement("span",{key:a,className:i},e)})));break;case"wave":a=p.createElement("div",{style:{width:this.state.width},className:"altrp-animating-rotating-wave",ref:this.widthRef},n.map((function(e,a){return p.createElement("span",{key:a,className:"altrp-animating-rotating-wave-word"},e.split("").map((function(e,i){var r="altrp-animating-rotating-wave-letter";return t.state.active!==a&&(r+=" altrp-animating-rotating-wave-letter-hide"),(n.length>t.state.active+1?t.state.active+1:0)===a&&i<=t.state.index&&(r+=" altrp-animating-rotating-wave-letter-showing"),t.state.active===a&&i<=t.state.index&&(r+=" altrp-animating-rotating-wave-letter-hiding"),p.createElement("div",{key:i,className:r},e)})))})));break;case"slide":var c={width:this.state.width};a=p.createElement("div",{style:c,ref:this.widthRef,className:"altrp-animating-rotating-slide"},n.map((function(e,a){var i=" altrp-animating-rotating-slide-word";return t.state.active!==a&&(t.state.active+1<n.length?t.state.active+1:-1)===a?i+=" altrp-animating-rotating-slide-word-showing":i+=" altrp-animating-rotating-slide-word-hiding",p.createElement("span",{key:a,className:i},e)})));break;case"slideDown":var o={width:this.state.width};a=p.createElement("div",{style:o,ref:this.widthRef,className:"altrp-animating-rotating-slide-down"},n.map((function(e,a){var i=" altrp-animating-rotating-slide-down-word";return t.state.active!==a&&(t.state.active+1<n.length?t.state.active+1:0)===a?i+=" altrp-animating-rotating-slide-down-word-showing":i+=" altrp-animating-rotating-slide-down-word-hiding",p.createElement("span",{key:a,className:i},e)})))}return p.createElement("span",{className:_.join(e," "),style:i},a)}}]),h}(p.Component);var m=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M325 18C228.7-8.3 118.5 8.3 78 21 22.4 38.4 4.6 54.6 5.6 77.6c1.4 32.4 52.2 54 142.6 63.7 66.2 7.1 212.2 7.5 273.5-8.3 64.4-16.6 104.3-57.6 33.8-98.2C386.7-4.9 179.4-1.4 126.3 20.7"}))};m.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"};var v=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M3 146.1c17.1-8.8 33.5-17.8 51.4-17.8 15.6 0 17.1 18.1 30.2 18.1 22.9 0 36-18.6 53.9-18.6 17.1 0 21.3 18.5 37.5 18.5 21.3 0 31.8-18.6 49-18.6 22.1 0 18.8 18.8 36.8 18.8 18.8 0 37.5-18.6 49-18.6 20.4 0 17.1 19 36.8 19 22.9 0 36.8-20.6 54.7-18.6 17.7 1.4 7.1 19.5 33.5 18.8 17.1 0 47.2-6.5 61.1-15.6"}))};v.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"};var w=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M7.7 145.6C109 125 299.9 116.2 401 121.3c42.1 2.2 87.6 11.8 87.3 25.7"}))};w.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"};var y=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M8.4 143.1c14.2-8 97.6-8.8 200.6-9.2 122.3-.4 287.5 7.2 287.5 7.2M8 19.4c72.3-5.3 162-7.8 216-7.8s136.2 0 267 7.8"}))};y.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"};var b=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M5 125.4c30.5-3.8 137.9-7.6 177.3-7.6 117.2 0 252.2 4.7 312.7 7.6M26.9 143.8c55.1-6.1 126-6.3 162.2-6.1 46.5.2 203.9 3.2 268.9 6.4"}))};b.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"};var k=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M9.3 127.3c49.3-3 150.7-7.6 199.7-7.4 121.9.4 189.9.4 282.3 7.2-111.2 2.5-310.1 3.5-421.3 11.9 82.6-2.9 254.2-1 335.9 1.3-56 1.4-137.2-.3-197.1 9"}))};k.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"};var E=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M13.5 15.5c131 13.7 289.3 55.5 475 125.5"}))};E.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"};var x=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M3 75h493.5"}))};x.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"};var R=function(t){return p.createElement("svg",t,p.createElement("path",{d:"M497.4 23.9C301.6 40 155.9 80.6 4 144.4M14.1 27.6c204.5 20.3 393.8 74 467.3 111.7"}))};R.defaultProps={xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 500 150",preserveAspectRatio:"none"},n.e(4648).then(n.bind(n,74648));const S=function(t){(0,l.Z)(s,t);var e,n,a=(e=s,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,a=(0,o.Z)(e);if(n){var i=(0,o.Z)(this).constructor;t=Reflect.construct(a,arguments,i)}else t=a.apply(this,arguments);return(0,c.Z)(this,t)});function s(){return(0,i.Z)(this,s),a.apply(this,arguments)}return(0,r.Z)(s,[{key:"render",value:function(){var t="altrp-animating-highlighted-svg",e="",n=this.props.bringToFront||!1;if(!!this.props.roundedEdges&&(t+=" altrp-animating-highlighted-rounded-edges"),n&&(t+=" altrp-animating-highlighted-bring-to-front"),this.props.shape)switch(t+=" altrp-animating-highlighted-".concat(this.props.shape),this.props.shape){case"circle":e=p.createElement(m,null);break;case"curly":e=p.createElement(v,null);break;case"underline":e=p.createElement(w,null);break;case"double":e=p.createElement(y,null);break;case"doubleUnderline":e=p.createElement(b,null);break;case"underlineZigzag":e=p.createElement(k,null);break;case"diagonal":e=p.createElement(E,null);break;case"strikethrough":e=p.createElement(x,null);break;case"x":e=p.createElement(R,null)}else t+=" altrp-animating-highlighted-circle";return p.createElement("span",{className:"altrp-animating-highlighted"},p.createElement("span",{className:"altrp-animating-highlighted-text altrp-animating-text"},this.props.text),p.createElement("span",{className:t},e))}}]),s}(p.Component);const O=function(t){(0,l.Z)(s,t);var e,n,a=(e=s,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,a=(0,o.Z)(e);if(n){var i=(0,o.Z)(this).constructor;t=Reflect.construct(a,arguments,i)}else t=a.apply(this,arguments);return(0,c.Z)(this,t)});function s(){return(0,i.Z)(this,s),a.apply(this,arguments)}return(0,r.Z)(s,[{key:"render",value:function(){var t="",e=this.props.settings,n=e.text_before_animating,a=e.text_after_animating,i=e.html_tag_animating||"h2",r="heading";return"highlighted"===e.style_animating?t=p.createElement(S,{shape:e.shape_animating,text:e.text_highlighted_animating,bringToFront:e.bring_to_front_shape_animating,roundedEdges:e.rounded_edges_shape_animating,prefix:r}):"rotating"===e.style_animating&&(t=p.createElement(f,{type:e.animation_animating,prefix:r,text:e.text_rotating_animating})),p.createElement("div",{className:"altrp-heading-animating"},p.createElement(i,{className:"altrp-heading-animating-tag"},p.createElement(p.Fragment,null,n?p.createElement("span",{className:"altrp-heading-no-animating-text",dangerouslySetInnerHTML:{__html:n}}):null," ",t," ",a?p.createElement("span",{className:"altrp-heading-no-animating-text",dangerouslySetInnerHTML:{__html:a}}):null)))}}]),s}(p.Component);function N(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}n.e(3795).then(n.bind(n,73795));const Z=function(t){(0,l.Z)(d,t);var e,n,u=(e=d,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}(),function(){var t,a=(0,o.Z)(e);if(n){var i=(0,o.Z)(this).constructor;t=Reflect.construct(a,arguments,i)}else t=a.apply(this,arguments);return(0,c.Z)(this,t)});function d(t){var e;return(0,i.Z)(this,d),(e=u.call(this,t)).state={settings:t.element.getSettings()},t.element.component=(0,s.Z)(e),window.elementDecorator&&window.elementDecorator((0,s.Z)(e)),t.baseRender&&(e.render=t.baseRender((0,s.Z)(e))),e}return(0,r.Z)(d,[{key:"render",value:function(){var t=p.createElement("div",null,"Loading...");switch(this.props.element.getSettings("type","heading")){case"heading":var e,n=this.props.element.getCurrentModel().getData(),i=this.props.element.getSettings("background_image",{}),r=this.getContent("text"),s="altrp-heading altrp-heading--link "+ +this.state.settings.position_css_classes+(i.url?" altrp-background-image":""),l="altrp-heading-wrapper",c=this.state.settings.sub_heading_settings_html_tag||"h2",o="";if(this.state.settings.text_sub_switch){var u=this.getContent("text_sub");switch(this.getContent("sub_heading_settings_position")){case"top":l+=" altrp-heading-wrapper-sub-top";break;case"left":l+=" altrp-heading-wrapper-sub-left";break;case"right":l+=" altrp-heading-wrapper-sub-right";break;default:l+=" altrp-heading-wrapper-sub-bottom"}o=p.createElement(c,{dangerouslySetInnerHTML:{__html:u},className:"altrp-heading-sub"})}if(this.state.settings.link_link&&this.state.settings.link_link.url){var d={rel:this.state.settings.link_link.noFollow?"nofollow":null,href:"mailto:mail@gmail.com",className:"altrp-inherit altrp-inherit_wo-border"};d.tag=this.state.settings.link_link.tag,d.creativelink="p"!==this.getContent("heading_settings_html_tag")?this.getContent("creative_link_controller"):null,this.state.settings.link_link.openInNew&&(d.target="_black"),"Link"!==this.state.settings.link_link.tag||(0,g.isEditor)()||(d.to=this.state.settings.link_link.url.replace(":id",this.getModelId()||""),d.href=this.state.settings.link_link.url.replace(":id",this.getModelId()||"")),_.isObject(n)&&(d.to=(0,g.parseURLTemplate)(this.state.settings.link_link.url,n),d.href=(0,g.parseURLTemplate)(this.state.settings.link_link.url,n)),(0,g.isEditor)()&&(d.onClick=function(t){t.preventDefault()}),e=p.createElement(h.Z,d,r)}var f="";if(this.state.settings.switch_advanced_heading_content){var m,v=this.getContent("horizontal_offset_advanced_heading_content"),w=this.getContent("vertical_offset_advanced_heading_content"),y=this.getContent("rotate_offset_advanced_heading_content"),b=this.getContent("transform_origin_offset_advanced_heading_content");""===v.size&&(v.size="0"),""===w.size&&(w.size="0"),""===y.size&&(y.size="0");var k="0 0";switch(b){case"topLeft":k="0 0";break;case"topCenter":k="50% 0";break;case"topRight":k="100% 0";break;case"centerLeft":k="0 50%";break;case"center":k="50% 50%";break;case"centerRight":k="100% 50%";break;case"bottomLeft":k="0 100%";break;case"bottomCenter":k="50% 100%";break;case"bottomRight":k="100% 100%"}m=function(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?N(Object(n),!0).forEach((function(e){(0,a.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):N(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}({},{transform:"translate(".concat(v.size+v.unit,", ").concat(w.size+w.unit,") rotate(").concat(y.size,"deg)"),transformOrigin:k});var E="altrp-heading-advanced";this.props.element.getSettings("main_fill_advanced_heading_style")&&(E+=" altrp-heading-advanced-main-fill"),f=p.createElement("div",{className:"altrp-heading-advanced-wrapper"},p.createElement(this.state.settings.heading_settings_html_tag||"h2",{className:E,style:m,dangerouslySetInnerHTML:{__html:this.getContent("text_advanced_heading_content")}}));var x={};switch(this.getContent("hide_at_offset_advanced_heading_content")){case"never":x={type:"never",size:0};break;case"mobile":x={type:"mobile",size:768};break;case"tablet":x={type:"tablet",size:1025}}if("never"!==this.getContent("hide_at_offset_advanced_heading_content")){var R=document.body.offsetWidth;(0,g.isEditor)()&&(R=document.getElementById("editorWindow").offsetWidth),R<=x.size&&(f="")}}var S=e?p.createElement(p.Fragment,null,p.createElement(this.state.settings.heading_settings_html_tag||"h2",{className:s,id:this.state.settings.position_css_id||""},e),this.state.settings.text_sub_switch&&p.createElement(c,{className:"altrp-heading-sub-container-link altrp-heading-sub"},p.createElement(h.Z,{link:this.state.settings.link_link,dangerouslySetInnerHTML:{__html:this.state.settings.text_sub},className:"altrp-inherit altrp-inherit_wo-border"}))):p.createElement(p.Fragment,null,p.createElement(this.state.settings.heading_settings_html_tag||"h2",{className:s,id:this.state.settings.position_css_id||"",dangerouslySetInnerHTML:{__html:r}}),o);t=p.createElement("div",{className:l},f,S);break;case"animating":t=p.createElement(O,{settings:this.state.settings})}return t}}]),d}(p.Component)}}]);