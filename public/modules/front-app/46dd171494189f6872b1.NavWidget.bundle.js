(self.webpackChunk=self.webpackChunk||[]).push([[7396],{1866:(e,t,n)=>{"use strict";n.d(t,{Z:()=>N});var r,o,a=n(96156),i=n(6610),s=n(5991),l=n(10379),c=n(46070),u=n(77608),p=n(22122),d=n(32465),m=n(71893),h="#eee",f=m.ZP.span(o||(o=(0,d.Z)(["\n  animation: "," 1.2s ease-in-out infinite;\n  background-color: ",";\n  background-size: 200px 100%;\n  background-repeat: no-repeat;\n  background-image: linear-gradient(90deg, ",");\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n  height: 100%;\n"])),(function(e,t){return(0,m.F4)(r||(r=(0,d.Z)(["\n  0% {\n    background-position: -200px 0;\n  }\n  ","\n  100% {\n    background-position: calc(200px + 100%) 0;\n  }\n"])),t>0?"".concat(Math.floor(1/(e+t)*e*100),"% {\n    background-position: calc(200px + 100%) 0;\n  }"):void 0)}),(function(e){var t=e.color;return"".concat(t||h)}),(function(e){var t=e.highlightColor,n=e.color;return"".concat(n||h,", ").concat(t||"#f5f5f5",", ").concat(n||h)}));const v=function(e){return React.createElement("div",{className:e.className},React.createElement(f,(0,p.Z)({},e,{className:"altrp-skeleton__span"})))};var g,y=n(14494),b=n(67294),w=n(40747);const k=m.ZP.div(g||(g=(0,d.Z)(["& {\n  position: relative;\n  max-width: 100%;\n  overflow: hidden;\n  width:",";  \n","\n  \n  background-color: ","; \n}\n&::before{\n  display: block;\n  content: '';\n  width: 100%;\n",";\n}\n&& .altrp-skeleton,\n&& .altrp-image{\n  position: absolute;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;  \n  height: 100%;\n}\n"])),(function(e){return _.isNumber(e.width)?e.width+"px":e.width?e.width:"100%"}),(function(e){var t=e.settings,n=(0,w.getResponsiveSetting)(t,"aspect_ratio_size");return 0!==Number(n)&&"custom"===n||Number(n)?"height:auto;":e.height&&-1===e.height.indexOf("%")?"height:".concat(e.height?e.height:"auto",";"):"height:auto;"}),(function(e){return e.color?e.color:"#fff"}),(function(e){var t=e.settings,n=e.height,r="",o=(0,w.getResponsiveSetting)(t,"aspect_ratio_size");if(0!==Number(o)){if("custom"===o){var a=(0,w.getResponsiveSetting)(t,"custom_aspect");a=Number(a)||100,r+="padding-top:".concat(a,"%;")}else Number(o)&&(r+="padding-top:".concat(o,"%;"));return r}return n&&_.isString(n)&&-1===n.indexOf("%")||Number(e.mediaWidth)&&Number(e.mediaHeight)&&(r+="padding-top:".concat(e.mediaHeight/e.mediaWidth*100,"%;")),r}));var Z=n(29459);function E(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function R(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?E(Object(n),!0).forEach((function(t){(0,a.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):E(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var S=function(e){(0,l.Z)(o,e);var t,n,r=(t=o,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,u.Z)(t);if(n){var o=(0,u.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,c.Z)(this,e)});function o(e){var t,n,a;(0,i.Z)(this,o),(a=r.call(this,e)).imageRef=b.createRef();var s=!0;return(!(0,w.isSSR)()||null!==(t=e.element)&&void 0!==t&&t.getResponsiveSetting("lazyload_disable"))&&((0,w.isEditor)()||!1===e.lazy||!window.altrpImageLazy||"none"===window.altrpImageLazy||!e.element||null!==(n=e.element)&&void 0!==n&&n.getResponsiveSetting("lazyload_disable"))||(s=!1),a.state={visible:s,update:0},a.timeoutId=setTimeout((function(){return a.setState((function(e){return R(R({},e),{},{update:e.update++})}))}),500),a}return(0,s.Z)(o,[{key:"componentWillUnmount",value:function(){clearTimeout(this.timeoutId)}},{key:"componentDidUpdate",value:function(e,t){var n;if(this.state.visible&&clearTimeout(this.timeoutId),!this.state.visible&&this.imageRef.current&&(null!==(n=this.props)&&void 0!==n&&n.element.getRoot().popupGUID&&this.props.element.getRoot().popupGUID===this.props.popupTrigger.popupID&&this.setState((function(e){return R(R({},e),{},{visible:!0})})),e.scrollPosition!==this.props.scrollPosition||t.update!==this.state.update)){var r=window.mainScrollbars;r||(r=document.querySelector(".front-app-content")),this.imageRef.current&&(0,Z.nX)(this.imageRef.current,r)&&(clearTimeout(this.timeoutId),this.setState((function(e){return R(R({},e),{},{visible:!0})})))}}},{key:"render",value:function(){var e,t=R({},this.props.image),n=this.props.noDefault||!1,r={},o=this.props.width,a=this.props.height;if(!(0,w.isSSR)()&&this.props.image instanceof File)t=this.props.image;else if(this.props.default)0===Object.keys(t).length&&(t=this.props.default);else{if(n)return"";t.url=t.url||"/img/nullImage.png",t.name=t.name||"null",t.assetType=t.assetType||void 0}var i=(0,w.renderAsset)(t);(this.state.visible||"skeleton"===window.altrpImageLazy)&&(r.background="transparent");var s=b.createElement(k,{color:t.main_color,className:"altrp-image-placeholder ",ref:this.imageRef,settings:(null===(e=this.props.element)||void 0===e?void 0:e.getSettings())||{},height:a,width:o,style:r,mediaWidth:t.width||100,mediaHeight:t.height||75},"skeleton"===window.altrpImageLazy&&!this.state.visible&&b.createElement(v,{className:"altrp-skeleton",color:window.altrpSkeletonColor,highlightColor:window.altrpSkeletonHighlightColor}),this.state.visible&&(0,b.cloneElement)(i,{className:this.props.className,id:this.props.id||null,style:this.props.style}));return b.createElement(b.Fragment,null,s)}}]),o}(b.Component);const N=(0,w.isEditor)()?S:(0,y.$j)((function(e){return{scrollPosition:e.scrollPosition,popupTrigger:e.popupTrigger}}))(S)},69764:(e,t,n)=>{"use strict";n.d(t,{Z:()=>p});var r=n(6610),o=n(5991),a=n(10379),i=n(46070),s=n(77608),l=n(12519),c=n(40747),u=n(67294);const p=function(e){(0,a.Z)(d,e);var t,n,p=(t=d,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,s.Z)(t);if(n){var o=(0,s.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,i.Z)(this,e)});function d(){return(0,r.Z)(this,d),p.apply(this,arguments)}return(0,o.Z)(d,[{key:"render",value:function(){var e=this.props,t=e.defaultChildren,n=e.link,r=e.modelId,o=e.modelData,a=e.children,i=e.className,s=u.cloneElement(t,{},a);if(n){var p={rel:n.noFollow?"nofollow":null,href:n.url,dangerouslySetInnerHTMLCondition:!1,className:i};p.tag=n.tag||"a",n.openInNew&&(p.target="_black"),"Link"!==n.tag||(0,c.isEditor)()||(p.to=n.url.replace(":id",r||""),p.href=n.url.replace(":id",r||"")),_.isObject(this.props.modelData)&&(p.to=(0,c.parseURLTemplate)(n.url,o),p.href=(0,c.parseURLTemplate)(n.url,o)),s=u.createElement(l.Z,p,a)}return s}}]),d}(u.Component)},98927:(e,t,n)=>{"use strict";n.r(t),n.d(t,{default:()=>S});var r=n(6610),o=n(5991),a=n(63349),i=n(10379),s=n(46070),l=n(77608),c=n(67294),u=n(96156),p=n(92137),d=n(87757),m=n.n(d),h=n(1866),f=(n(12519),n(69764));const v=function(e){(0,i.Z)(p,e);var t,n,u=(t=p,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,l.Z)(t);if(n){var o=(0,l.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,s.Z)(this,e)});function p(e){var t;return(0,r.Z)(this,p),(t=u.call(this,e)).state={show:!1,list:[]},t.changeShow=t.changeShow.bind((0,a.Z)(t)),t.setList=t.setList.bind((0,a.Z)(t)),t}return(0,o.Z)(p,[{key:"setList",value:function(){var e=this,t=[];this.props.li.children&&this.props.list.forEach((function(n){e.props.li.children.forEach((function(e){n.id===e&&t.push(n)}))})),this.setState({list:t})}},{key:"componentDidMount",value:function(){this.setList()}},{key:"componentDidUpdate",value:function(e,t){e.list!==this.props.list&&this.setList()}},{key:"changeShow",value:function(){this.setState((function(e){return{show:!e.show}}))}},{key:"render",value:function(){var e=this;return c.createElement("div",{className:"altrp-nav-menu-dropdown-sub"},c.createElement("div",{className:"altrp-nav-menu-li-link-dropdown altrp-nav-menu-dropdown-sub-label",onClick:this.changeShow},c.createElement("span",null,this.props.li.label_repeater_menu_layout),c.createElement(h.Z,{image:this.props.settings.chevron_dropdown_menu_section,element:this.props.element,default:{assetType:"icon",name:"chevron",iconComponent:iconsManager.renderIcon("chevron")},className:"altrp-nav-menu-li-link-chevron-dropdown"+(this.state.show?" altrp-nav-menu-li-link-active-chevron-dropdown":"")})),c.createElement("div",{className:"altrp-nav-menu-dropdown-sub-content altrp-nav-menu-ul-wrapper-dropdown altrp-nav-menu-dropdown-content"+(this.state.show?" altrp-nav-menu-dropdown-content-show":" altrp-nav-menu-dropdown-content-hide")},c.createElement("ul",{className:"altrp-nav-menu-ul-dropdown"},this.state.list.map((function(t,n){var r=c.createElement(f.Z,{defaultChildren:c.createElement("div",{className:"altrp-nav-menu-li-link-dropdown altrp-nav-menu-li-link-label-dropdown"}),modelData:e.props.modelData,modelId:e.props.modelId||null,link:t.link_repeater_menu_layout,className:"altrp-nav-menu-li-link-dropdown altrp-nav-menu-li-link-label-dropdown"},t.label_repeater_menu_layout);return c.createElement("li",{className:"altrp-nav-menu-li-dropdown",key:n},t.id_repeater_menu_layout?c.createElement(p,{settings:e.props.settings,divider:!1,list:e.props.list,li:t}):c.createElement(c.Fragment,null,r,e.props.settings.divider_switch_dropdown_menu_section?c.createElement("div",{className:"altrp-nav-menu-dropdown-s-content-divider"}):""))})))))}}]),p}(c.Component);const g=function(e){(0,i.Z)(p,e);var t,n,u=(t=p,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,l.Z)(t);if(n){var o=(0,l.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,s.Z)(this,e)});function p(e){var t;return(0,r.Z)(this,p),(t=u.call(this,e)).state={show:!1,list:[]},t.changeShow=t.changeShow.bind((0,a.Z)(t)),t.setStateList=t.setStateList.bind((0,a.Z)(t)),t}return(0,o.Z)(p,[{key:"changeShow",value:function(){this.setState((function(e){return{show:!e.show}}))}},{key:"componentDidMount",value:function(){this.setStateList()}},{key:"componentDidUpdate",value:function(e,t){var n=this.props.settings.repeater_menu_layout;t.list!==n&&this.setStateList()}},{key:"setStateList",value:function(){var e=this.props.settings.repeater_menu_layout;e.forEach((function(t){if(t.id_repeater_menu_layout){var n=[];e.forEach((function(r){if(t.id!==r.id&&r.parent_id_repeater_menu_layout&&r.parent_id_repeater_menu_layout===t.id_repeater_menu_layout){var o=e.findIndex((function(e){return e.id==r.id}));e[o]&&(e[o].childrenParent=!0),n.push(r.id)}}));var r=t.id_repeater_menu_layout,o=e.findIndex((function(e){return e.id_repeater_menu_layout==r}));e[o]&&(e[o].children=n)}})),this.setState({list:e})}},{key:"render",value:function(){var e,t,n=this,r=this.state.list,o="altrp-nav-menu-dropdown";switch(this.props.settings.align_dropdown_menu_layout){case"left":o+=" altrp-nav-menu-dropdown-left";break;case"center":o+=" altrp-nav-menu-dropdown-center";break;case"right":o+=" altrp-nav-menu-dropdown-right"}var a=null===(e=this.props.element)||void 0===e?void 0:e.getResponsiveSetting("icon_dropdown_menu_layout"),i=null===(t=this.props.element)||void 0===t?void 0:t.getResponsiveSetting("icon_dropdown_menu_layout"),s=c.createElement(h.Z,{image:a,element:this.props.element,default:{name:"in_width",assetType:"icon",iconComponent:iconsManager.renderIcon("in_width")},className:"altrp-nav-menu-dropdown-button-icon"});return this.state.show&&i&&(s=c.createElement(h.Z,{image:i,element:this.props.element,default:{name:"add",assetType:"icon",iconComponent:iconsManager.renderIcon("add")},className:"altrp-nav-menu-dropdown-button-icon altrp-nav-menu-dropdown-button-icon-close"})),c.createElement("div",{className:o},c.createElement("div",{className:"altrp-nav-menu-dropdown-wrapper"},c.createElement("div",{className:"altrp-nav-menu-dropdown-button",onClick:this.changeShow},s)),c.createElement("div",{className:"altrp-nav-menu-ul-wrapper-dropdown altrp-nav-menu-dropdown-content"+(this.state.show?" altrp-nav-menu-dropdown-content-show":"")},c.createElement("ul",{className:"altrp-nav-menu-ul-dropdown"},r.map((function(e,t){var r=c.createElement(f.Z,{defaultChildren:c.createElement("div",{className:"altrp-nav-menu-li-link-dropdown altrp-nav-menu-li-link-label-dropdown"}),modelData:n.props.modelData,modelId:n.props.modelId||null,link:e.link_repeater_menu_layout,className:"altrp-nav-menu-li-link-dropdown altrp-nav-menu-li-link-label-dropdown"},e.label_repeater_menu_layout);return e.id_repeater_menu_layout?null!=e&&e.childrenParent?"":c.createElement("li",{className:"altrp-nav-menu-li-dropdown altrp-nav-menu-li-sub",key:t},c.createElement(v,{settings:n.props.settings,list:n.state.list,li:e,modelData:n.props.modelData,modelId:n.props.modelId})):null!=e&&e.childrenParent?"":c.createElement("li",{className:"altrp-nav-menu-li-dropdown",key:t},r,n.props.settings.divider_switch_dropdown_menu_section?c.createElement("div",{className:"altrp-nav-menu-dropdown-s-content-divider"}):"")})))))}}]),p}(c.Component);var y=n(40747);function b(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function w(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?b(Object(n),!0).forEach((function(t){(0,u.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):b(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}n.e(5690).then(n.bind(n,55690));const _=function(e){(0,i.Z)(f,e);var t,u,d,h=(u=f,d=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=(0,l.Z)(u);if(d){var n=(0,l.Z)(this).constructor;e=Reflect.construct(t,arguments,n)}else e=t.apply(this,arguments);return(0,s.Z)(this,e)});function f(e){var t;return(0,r.Z)(this,f),(t=h.call(this,e)).state={settings:e.element.getSettings()},e.element.component=(0,a.Z)(t),window.elementDecorator&&window.elementDecorator((0,a.Z)(t)),t}return(0,o.Z)(f,[{key:"_componentDidMount",value:(t=(0,p.Z)(m().mark((function e(){var t;return m().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,n.e(3676).then(n.bind(n,93676));case 2:t=e.sent.default,this.setState((function(e){return w(w({},e),{},{HorizontalVerticalMenu:t})}));case 4:case"end":return e.stop()}}),e,this)}))),function(){return t.apply(this,arguments)})},{key:"render",value:function(){var e=c.createElement("div",null,(0,y.isEditor)()?"create menu":""),t=this.state.settings.menu_layout,n={},r=this.state.settings.breakpoint_dropdown_menu_layout;switch(r){case"never":n={type:"never",size:0};break;case"mobile":n={type:"mobile",size:768};break;case"tablet":n={type:"tablet",size:1025}}if("never"!==r){var o=document.body.offsetWidth;(0,y.isEditor)()&&(o=document.getElementById("editorWindow").offsetWidth),o<=n.size&&(t="dropdown")}return this.state.settings.repeater_menu_layout&&this.state.HorizontalVerticalMenu&&(e="dropdown"!==t?c.createElement(this.state.HorizontalVerticalMenu,{modelId:this.props.modelId,currentScreen:this.props.currentScreen,modelData:this.props.modelData,settings:this.props.element.getSettings(),element:this.props.element,idElement:this.props.element.getId()}):c.createElement(g,{modelId:this.props.modelId,modelData:this.props.modelData,settings:this.state.settings,idElement:this.props.element.getId()})),c.createElement("div",{className:"altrp-nav-menu"},e)}}]),f}(c.Component);var k=n(73727),Z=n(5977);n.e(6981).then(n.bind(n,16981));var E=function(e){(0,i.Z)(u,e);var t,n,a=(t=u,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,l.Z)(t);if(n){var o=(0,l.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,s.Z)(this,e)});function u(e){return(0,r.Z)(this,u),a.call(this,e)}return(0,o.Z)(u,[{key:"render",value:function(){var e=[],t=(0,y.isEditor)()?[{title:"this",id:1,path:"/thisSiteIsWonderful",parent_page_id:null},{title:"site",id:2,path:"/thisSiteIsWonderful",parent_page_id:1},{title:"is",id:3,path:"/thisSiteIsWonderful",parent_page_id:2},{title:"wonderful",id:4,path:"/thisSiteIsWonderful",parent_page_id:3}]:appStore.getState().appRoutes.routes,n=(0,y.isEditor)()?4:window.currentPageId;if(n!==t[0].id){var r=0;t.forEach((function(e,t){n===e.id&&(r=t)}));var o=[];o.push(t[r]),t[r].parent_page_id&&function e(n){t.forEach((function(t){t.id===n&&(o.push(t),t.parent_page_id&&e(t.parent_page_id))}))}(t[r].parent_page_id),e=o.reverse()}else e.push(t[0]);var a=this.props.element.getContent("breadcrumbs_type_separator","default"),i="altrp-nav-breadcrumbs-separator",s="-";switch(a){case"text":var l=this.props.element.getContent("breadcrumbs_separator_text",">");i+=" altrp-nav-breadcrumbs-separator-text",s=l;break;case"icon":var u=this.props.element.getContent("breadcrumbs_separator_icon",{});i+=" altrp-nav-breadcrumbs-separator-icon",s=c.createElement(h.Z,{image:u,element:this.props.element,default:{assetType:"icon",name:"star",iconComponent:iconsManager.renderIcon("star")}});break;default:i+=" altrp-nav-breadcrumbs-separator-default"}return c.createElement("ul",{className:"altrp-nav-breadcrumbs"},e.map((function(t,r){var o=t.path,a=t.title;return a=(0,y.replaceContentWithData)(a),c.createElement("li",{className:"altrp-nav-breadcrumbs-li",key:r},t.id!==n?c.createElement(k.rU,{to:o,onClick:(0,y.isEditor)()?function(e){return e.preventDefault()}:null,className:"altrp-nav-breadcrumbs-label altrp-nav-breadcrumbs-link"},a):c.createElement("div",{className:"altrp-nav-breadcrumbs-label altrp-nav-breadcrumbs-current"},a),r!==e.length-1?c.createElement("span",{className:i},s):"")})))}}]),u}(c.Component);const R=(0,Z.EN)(E);const S=function(e){(0,i.Z)(p,e);var t,n,u=(t=p,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,l.Z)(t);if(n){var o=(0,l.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,s.Z)(this,e)});function p(e){var t;return(0,r.Z)(this,p),(t=u.call(this,e)).state={settings:e.element.getSettings()},e.element.component=(0,a.Z)(t),window.elementDecorator&&window.elementDecorator((0,a.Z)(t)),e.baseRender&&(t.render=e.baseRender((0,a.Z)(t))),t}return(0,o.Z)(p,[{key:"render",value:function(){var e,t=this.props.element.hasCardModel()?this.props.element.getCardModel().getData():this.props.currentModel.getData();switch(this.props.element.getContent("type_type","menu")){case"menu":e=c.createElement(_,{modelData:t,currentScreen:this.props.currentScreen,modelId:this.getModelId(),element:this.props.element});break;case"breadCrumbs":e=c.createElement(R,{element:this.props.element})}return e||""}}]),p}(c.Component)}}]);