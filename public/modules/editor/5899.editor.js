(self.webpackChunk=self.webpackChunk||[]).push([[5899],{95899:(e,t,r)=>{"use strict";r.r(t),r.d(t,{default:()=>N});var n,o=r(96156),a=r(6610),s=r(5991),i=r(63349),p=r(10379),l=r(46070),c=r(77608),u=r(5977),h=r(14494),d=r(35713),m=r(1196),g=r(16455),f=r(61113),S=r(32465),y=r(71893).ZP.div(n||(n=(0,S.Z)(["",""])),(function(e){var t=e.settings,r="";r+="&.altrp-column{";var n=(0,d.getResponsiveSetting)(t,"layout_column_width");return n&&(Number(n)?r+="width:".concat(n,"%;"):r+="width:".concat(n,";")),r+"}"})),v=r(11774),D=r(34399),b=r(95597),w=r(4627),k=r(5911),R=r(22873),E=r(82435),M=r(90853),C=r(43370);function Z(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function P(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?Z(Object(r),!0).forEach((function(t){(0,o.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):Z(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var O=function(e){(0,p.Z)(o,e);var t,r,n=(t=o,r=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,n=(0,c.Z)(t);if(r){var o=(0,c.Z)(this).constructor;e=Reflect.construct(n,arguments,o)}else e=n.apply(this,arguments);return(0,l.Z)(this,e)});function o(e){var t;return(0,a.Z)(this,o),(t=n.call(this,e)).updateStore=function(){t.state.currentModel!==appStore.getState().currentModel&&t.setState((function(e){return P(P({},e),{},{currentModel:appStore.getState().currentModel})})),t.state.currentUser!==appStore.getState().currentUser&&t.setState((function(e){return P(P({},e),{},{currentModel:appStore.getState().currentUser})})),t.state.currentDataStorage!==appStore.getState().currentDataStorage&&t.setState((function(e){return P(P({},e),{},{currentDataStorage:appStore.getState().currentDataStorage})}))},t.state={elementDisplay:!t.props.element.getSettings("default_hidden")},e.element.wrapper=(0,i.Z)(t),t.elementWrapperRef=React.createRef(),t.elementRef=React.createRef(),appStore.dispatch((0,m.MN)((0,i.Z)(t))),t}return(0,s.Z)(o,[{key:"componentDidCatch",value:function(e,t){this.setState((function(r){return P(P({},r),{},{error:e,errorInfo:t})}))}},{key:"componentDidMount",value:function(){!(0,d.isEditor)()&&window.frontApp.onWidgetMount(),_.isFunction(this.props.element.update)&&(this.props.element.update(),this.props.element.updateFonts()),this.checkElementDisplay()}},{key:"getStylesHTMLElement",value:function(){return _.get(window,"stylesModule.stylesContainer.current")&&window.stylesModule.stylesContainer.current.getElementsByClassName("altrp-styles".concat(this.props.element.getId()))[0]||null}},{key:"componentDidUpdate",value:function(e,t){if(this.checkElementDisplay(),appStore.getState().currentModel.getProperty("altrpModelUpdated")&&appStore.getState().currentDataStorage.getProperty("currentDataStorageLoaded")&&!(0,d.isEditor)()&&"section"===this.props.element.getName()){var r=appStore.getState().currentTitle;r=(0,d.replaceContentWithData)(r),appStore.getState().altrpPage.getProperty("title")!==r&&appStore.dispatch((0,f.qs)("title",r)),(0,d.setTitle)(r)}}},{key:"updateElement",value:function(){this.setState((function(e){return P(P({},e),{},{updateToken:(0,d.altrpRandomId)()})}))}},{key:"checkElementDisplay",value:function(e,t){var r=this.props.element;if(r.getSettings("conditional_other")){var n=r.getSettings("conditions",[]);n=n.map((function(e){return{modelField:e.conditional_model_field,operator:e.conditional_other_operator,value:e.conditional_other_condition_value}}));var o=(0,d.conditionsChecker)(n,"AND"===r.getSettings("conditional_other_display"),this.props.element.getCurrentModel(),!0);this.state.elementDisplay!==o&&this.setState((function(e){return P(P({},e),{},{elementDisplay:o})}))}}},{key:"toggleElementDisplay",value:function(){this.setState((function(e){return P(P({},e),{},{elementDisplay:!e.elementDisplay})}))}},{key:"inputIsDisplay",value:function(){var e=this.state.formsStore,t=this.props.element.getSettings("form_id",""),r=this.props.element.getSettings("form_condition_display_on","AND"),n=this.props.element.getSettings("form_conditions",[]),o=!0;return n.forEach((function(n){"AND"===r?o*=(0,d.altrpCompare)(_.get(e,"".concat(t,".").concat(n.field_id)),n.value,n.operator):o+=(0,d.altrpCompare)(_.get(e,"".concat(t,".").concat(n.field_id)),n.value,n.operator)})),o}},{key:"render",value:function(){var e=this.props.element.settings,t=e.hide_on_wide_screen,r=e.hide_on_desktop,n=e.hide_on_laptop,o=e.hide_on_tablet,a=e.hide_on_big_phone,s=e.hide_on_small_phone,i=e.hide_on_trigger,p=e.isFixed,l=e.tooltip_text,c=e.tooltip_position,u="altrp-element altrp-element".concat(this.props.element.getId()," altrp-element_").concat(this.props.element.getType());if(u+=this.props.element.getPrefixClasses()+" ","widget"===this.props.element.getType()&&(u+=" altrp-widget_".concat(this.props.element.getName())),t&&(u+=" hide_on_wide_screen"),r&&(u+=" hide_on_desktop"),n&&(u+=" hide_on_laptop"),o&&(u+=" hide_on_tablet"),a&&(u+=" hide_on_big_phone"),s&&(u+=" hide_on_small_phone"),p&&(u+=" fixed-section"),this.state.errorInfo)return React.createElement("div",{className:"altrp-error","data-eltype":this.props.element.getType()},React.createElement("h2",null,"Something went wrong."),React.createElement("details",{style:{whiteSpace:"pre-wrap"}},this.state.error&&this.state.error.toString(),React.createElement("br",null),this.state.errorInfo.componentStack));var h={};this.props.element.getResponsiveSetting("layout_column_width")&&(Number(this.props.element.getResponsiveSetting("layout_column_width"))?h.width=this.props.element.getResponsiveSetting("layout_column_width")+"%":h.width=this.props.element.getResponsiveSetting("layout_column_width")),this.state.elementDisplay||(h.display="none");var m=this.props.element.getSettings("advanced_element_id","");m=(0,d.replaceContentWithData)(m,this.props.element.getCurrentModel().getData()),this.CSSId!==m&&(this.CSSId=m);var f=frontElementsManager.getComponentClass(this.props.element.getName()),S=React.createElement(f,{ref:this.elementRef,rootElement:this.props.rootElement,ElementWrapper:this.props.ElementWrapper,element:this.props.element,children:this.props.element.getChildren(),match:this.props.match,currentModel:this.props.currentModel,currentUser:this.props.currentUser,currentDataStorage:this.props.currentDataStorage,altrpresponses:this.props.altrpresponses,formsStore:this.props.formsStore,elementDisplay:this.state.elementDisplay,altrpPageState:this.props.altrpPageState,altrpMeta:this.props.altrpMeta,updateToken:this.state.updateToken,currentScreen:this.props.currentScreen,baseRender:this.props.baseRender,history:this.props.history,appStore});if("email"===this.props.element.getTemplateType())return this.state.elementDisplay?React.createElement(React.Fragment,null,S):null;var _=y;switch(this.props.element.getName()){case"gallery":_=b.Z;break;case"image":_=v.Z;break;case"button":_=w.Z;break;case"text":_=E.Z;break;case"carousel":_=D.Z;break;case"divider":_=k.Z;break;case"accordion":_=R.Z;break;case"menu":_=M.Z;break;case"breadcrumbs":_=C.Z}return this.props.hideTriggers.includes(i)?null:React.createElement(_,{className:u,ref:this.elementWrapperRef,elementId:this.props.element.getId(),settings:this.props.element.getSettings(),style:h,id:this.CSSId},S,l&&React.createElement(g.Z,{position:c},l))}}]),o}(Component);const N=(0,h.$j)((function(e){return{hideTriggers:e.hideTriggers,altrpresponses:e.altrpresponses,formsStore:e.formsStore,currentDataStorage:e.currentDataStorage,currentModel:e.currentModel,currentUser:e.currentUser,altrpMeta:e.altrpMeta,altrpPageState:e.altrpPageState,currentScreen:e.currentScreen}}),null,null,{forwardRef:!0})((0,u.EN)(O))}}]);
//# sourceMappingURL=5899.editor.js.map