exports.ids=[5],exports.modules={355:function(t,e,o){"use strict";o.r(e);var r=o(4),n=o.n(r),s=o(5),i=o.n(s),a=o(6),p=o.n(a),c=o(7),d=o.n(c),l=o(8),h=o.n(l),u=o(3),b=o.n(u),_=o(2),f=o.n(_),y=o(14),g=o.n(y),m=o(20),w=o.n(m),v=o(32),O=o.n(v),S=o(351),j=o(0),k=o(109);function E(t,e){var o=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),o.push.apply(o,r)}return o}function x(t){for(var e=1;e<arguments.length;e++){var o=null!=arguments[e]?arguments[e]:{};e%2?E(Object(o),!0).forEach((function(e){g()(t,e,o[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(o)):E(Object(o)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(o,e))}))}return t}function T(t){var e=Object(_.useRef)(),o=Object(_.useState)(t.settings.updateSettings||{}),r=w()(o,2),n=r[0],s=r[1],i=Object(_.useState)(!1),a=w()(i,2),p=a[0],c=a[1],d=Object(k.b)(t.updateToken),l=document.body;t.editor||(l=Object(_.useMemo)((function(){return Object(j.isEditor)()?document.getElementById("editorContent").contentWindow.document.body:document.body})));var h=t.settings.placement,u=["bottom-start","bottom","bottom-end","top-start","top","top-end","left-start","left","left-end","right-start","right","right-end"];-1===u.indexOf(h)&&(console.log(h),h=u[0]);var b=Object(S.a)(t.target.current,e.current,{placement:h,modifiers:[{name:"offset",options:{offset:t.settings.offset}}]}),y=b.styles,g=b.attributes,m=b.forceUpdate,v=b.update;return Object(_.useEffect)((function(){if(t.updateToken!==d){m();new Event("resize",{bubbles:!0,cancelable:!0});Object(j.isEditor)()||console.log(),v()}0!==Object.keys(n).length&&JSON.stringify(n)!==JSON.stringify(t.settings.updateSettings)&&(s(t.settings.updateSettings),m()),!p&&t.target.current&&(console.log("aann"),c(!0))}),[t.children,h,t.target,t.updateToken]),t.portal?O.a.createPortal(f.a.cloneElement(t.children,x({ref:e,style:y.popper},g.popper)),l):f.a.cloneElement(t.children,x({ref:e,style:y.popper},g.popper))}var z=o(77),P=o(11),D=o.n(P),M=o(9),N=o(1);function R(){var t=D()(["\n  ","\n\nbackground-color: red;\n"]);return R=function(){return t},t}var C=M.b.div(R(),(function(t){var e=t.settings;return Object(N.styledString)(["&.altrp-dropbar-btn-containter",["width","width_dropbar_options","slider"],["padding","padding_dropbar_content_style","dimensions"],["background-color","background_dropbar_content_style","color"],["border-style","border_style_dropbar_content_style"],["border-width","border_width_dropbar_content_style","dimensions"],["border-color","border_color_dropbar_content_style","color"],["border-radius","border_radius_dropbar_content_style","dimensions"],["box-shadow","box_shadow_dropbar_content_style","shadow"],"}","altrp-dropbar-btn-content",["color","text_color_dropbar_content_style","color"],["","typographic_text_dropbar_content_style","typographic"],"}","&:hover.altrp-dropbar-btn-containter",["padding","padding_dropbar_content_style","dimensions",":hover"],["background-color","background_dropbar_content_style","color",":hover"],["border-style","border_style_dropbar_content_style","",":hover"],["border-width","border_width_dropbar_content_style","dimensions",":hover"],["border-color","border_color_dropbar_content_style","color",":hover"],["border-radius","border_radius_dropbar_content_style","dimensions",":hover"],["box-shadow","box_shadow_dropbar_content_style","shadow",":hover"],"}","&:hover .altrp-dropbar-btn-content",["color","text_color_dropbar_content_style","color",":hover"],["","typographic_text_dropbar_content_style","typographic",":hover"],"}"],e)}));function H(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}();return function(){var o,r=b()(t);if(e){var n=b()(this).constructor;o=Reflect.construct(r,arguments,n)}else o=r.apply(this,arguments);return h()(this,o)}}var I=function(t){d()(o,t);var e=H(o);function o(t){var r;return n()(this,o),(r=e.call(this,t)).state={show:!1,updateToken:void 0},r.show=r.show.bind(p()(r)),r.leaveHide=r.leaveHide.bind(p()(r)),r.enterShow=r.enterShow.bind(p()(r)),r.children=f.a.createRef(),r}return i()(o,[{key:"show",value:function(){var t=this;this.props.settings.show_delay_dropbar_options.size||this.props.settings.hide_delay_dropbar_options.size?this.state.show?setTimeout((function(){t.setState((function(t){return{show:!t.show}}))}),this.props.settings.hide_delay_dropbar_options.size):setTimeout((function(){t.setState((function(t){return{show:!t.show}}))}),this.props.settings.show_delay_dropbar_options.size):this.setState((function(t){return{show:!t.show}}))}},{key:"leaveHide",value:function(){var t=this;this.props.settings.hide_delay_dropbar_options.size?setTimeout((function(){t.setState({show:!1})}),this.props.settings.hide_delay_dropbar_options.size):this.setState({show:!1})}},{key:"enterShow",value:function(t){var e=this;t.currentTarget;this.props.showDelay.size&&!this.state.show?setTimeout((function(){e.setState({show:!0})}),this.props.showDelay.size):this.setState((function(t){return{show:!t.show}}))}},{key:"componentDidUpdate",value:function(t,e,o){this.state.show,e.show}},{key:"render",value:function(){var t=this,e=f.a.Children.only(this.props.children),o="altrp-dropbar-"+this.props.className,r=this.props.settings.type_dropbar_section||"text",n=this.props.getContent("content_dropbar_section");return f.a.createElement("div",{className:"altrp-dropbar altrp-dropbar-"+o},f.a.createElement("span",{className:"altrp-dropbar-children-wrapper "+o+"-wrapper",onMouseEnter:"hover"===this.props.settings.mode_dropbar_options?this.enterShow:null,onMouseLeave:"hover"===this.props.settings.mode_dropbar_options?this.leaveHide:null},f.a.cloneElement(e,{ref:this.children,onClick:"click"===this.props.settings.mode_dropbar_options?this.show:null}),f.a.createElement(T,{target:this.children,portal:!0,updateToken:this.state.updateToken,settings:{placement:this.props.settings.position_dropbar_options,offset:[0,this.props.settings.offset_dropbar_options.size],updateSettings:{width:this.props.settings.width_dropbar_options}}},f.a.createElement(C,{settings:this.props.element.getSettings(),className:"altrp-dropbar-container "+" ".concat(this.props.elemenentId,"-altrp-dropbar ")+o+"-containter"+(this.state.show?" altrp-dropbar-container-show":" altrp-dropbar-container-hide")},"text"===r?f.a.createElement("div",{className:"altrp-dropbar-content "+o+"-content",dangerouslySetInnerHTML:{__html:n||""}}):f.a.createElement(z.a,{onLoad:function(){t.setState({updateToken:Math.random()})},templateId:this.props.settings.template_dropbar_section,cardModel:this.props.element.getCurrentModel()})))))}}]),o}(_.Component);e.default=I}};