(self.webpackChunk=self.webpackChunk||[]).push([[4338],{44338:(t,e,n)=>{"use strict";n.r(e),n.d(e,{default:()=>w});var r=n(96156),i=n(6610),s=n(5991),o=n(34699),a=n(90484),l=n(92137),u=n(87757),c=n.n(u),h=n(12027),g=n(40747),d=n(71743),f=n(65215);function p(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function m(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?p(Object(n),!0).forEach((function(e){(0,r.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):p(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}const y=function(){function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};(0,i.Z)(this,t),this.name=e.name,this.settings=e.settings,this.lazySection=e.lazySection,this.children=e.children,this.cssClassStorage=e.cssClassStorage,this.type=e.type,this.id=e.id,window.frontElementsManager&&(this.componentClass=window.frontElementsManager.getComponentClass(this.getName())),this.parent=null,this.forms=[],this.component=null,this.root=null,this.modelsList=[]}var e,r;return(0,s.Z)(t,[{key:"setParent",value:function(t){t||console.error(this),this.parent=t}},{key:"getRoot",value:function(){return this.root||(this.root=this.findClosestByType("root-element")),this.root}},{key:"findClosestByType",value:function(t){return"widget"===t&&"widget"!==this.getType()||"column"===t&&-1!==["root-element","section"].indexOf(this.getType())||"section"===t&&"root-element"===this.getType()?null:this.getType()===t?this:(this.parent,this.parent.findClosestByType(t))}},{key:"update",value:function(){this.updateStyles();var t=["button","input"];["button","input"].indexOf(this.getName())>=0&&this.getSettings("actions",[]).length,(t.indexOf(this.getName())>=0&&this.getFormId()||t.indexOf(this.getName())>=0&&"delete"===this.getSettings("form_actions"))&&this.formInit()}},{key:"registerActions",value:(r=(0,l.Z)(c().mark((function t(){var e;return c().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(!this.actionsRegistered){t.next=2;break}return t.abrupt("return");case 2:return t.next=4,n.e(2167).then(n.bind(n,2167));case 4:e=t.sent.default,t.t0=this.getName(),t.next="button"===t.t0?8:"input"===t.t0?10:11;break;case 8:return e.registerWidgetActions(this.getIdForAction(),this.getSettings("actions",[]),"click",this),t.abrupt("break",11);case 10:e.registerWidgetActions(this.getIdForAction(),this.getSettings("actions",[]),"blur",this);case 11:this.actionsRegistered=!0;case 12:case"end":return t.stop()}}),t,this)}))),function(){return r.apply(this,arguments)})},{key:"formInit",value:(e=(0,l.Z)(c().mark((function t(){var e,r,i,s,o=this;return c().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(this.component){t.next=2;break}return t.abrupt("return");case 2:if(!this.formsIsInit){t.next=4;break}return t.abrupt("return");case 4:return this.formsIsInit=!0,t.next=7,n.e(955).then(n.bind(n,80955));case 7:e=(e=t.sent).default,t.t0=this.getName(),t.next="button"===t.t0?12:"input"===t.t0?37:39;break;case 12:r="POST",t.t1=this.getSettings("form_actions"),t.next="add_new"===t.t1?16:"delete"===t.t1?18:"edit"===t.t1?22:"login"===t.t1?26:"logout"===t.t1?29:"email"===t.t1?32:35;break;case 16:return this.addForm(e.registerForm(this.getFormId(),this.getSettings("choose_model"),r)),t.abrupt("break",35);case 18:return r="DELETE",(i=this.getModelName())&&this.addForm(e.registerForm(this.getId(),i,r)),t.abrupt("break",35);case 22:return r="PUT",(s=this.getModelName())&&this.addForm(e.registerForm(this.getFormId(),s,r)),t.abrupt("break",35);case 26:return r="POST",this.addForm(e.registerForm(this.getFormId(),"login",r,{afterLoginRedirect:this.getSettings("redirect_after")})),t.abrupt("break",35);case 29:return r="POST",this.addForm(e.registerForm(this.getFormId(),"logout",r,{afterLogoutRedirect:this.getSettings("redirect_after")})),t.abrupt("break",35);case 32:return r="POST",this.addForm(e.registerForm(this.getFormId(),"email",r,{afterLogoutRedirect:this.getSettings("redirect_after")})),t.abrupt("break",35);case 35:return this.getForms().forEach((function(t){t.addSubmitButton(o)})),t.abrupt("break",39);case 37:return e.addField(this.getFormId(),this),t.abrupt("break",39);case 39:case"end":return t.stop()}}),t,this)}))),function(){return e.apply(this,arguments)})},{key:"getForms",value:function(){return this.forms}},{key:"addForm",value:function(t){this.forms.push(t)}},{key:"getChildren",value:function(){return this.children}},{key:"getId",value:function(){return this.id}},{key:"getIdForAction",value:function(){return this.idForAction||(this.idForAction=(0,g.altrpRandomId)()),this.idForAction}},{key:"getName",value:function(){return this.name}},{key:"getType",value:function(){return this.type}},{key:"getSettings",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return t?!1===_.get(this.settings,t)||0===_.get(this.settings,t)?_.get(this.settings,t):_.get(this.settings,t)||e:_.cloneDeep(this.settings)}},{key:"updateStyles",value:function(){var t=this;window.stylesModulePromise.then((function(e){e.addElementStyles(t.getId(),t.getStringifyStyles())}))}},{key:"getStringifyStyles",value:function(){var t=this,e="";if("object"!==(0,a.Z)(this.settings.styles))return e;var n=_.cloneDeep(h.default.SCREENS);n.splice(0,1);var r=function(r){var i={};if(t.settings.styles.hasOwnProperty(r)){for(var s in t.settings.styles[r])if(t.settings.styles[r].hasOwnProperty(s))for(var o in t.settings.styles[r][s])t.settings.styles[r][s].hasOwnProperty(o)&&(i[o]=i[o]||[],i[o]=i[o].concat(t.settings.styles[r][s][o]));if(r===h.default.DEFAULT_BREAKPOINT)for(var a in i)i.hasOwnProperty(a)&&(e+="".concat(a," {")+i[a].join("")+"}");else n.forEach((function(t){t.name===r&&(t.rules=i)}))}};for(var i in this.settings.styles)r(i);return n.forEach((function(t){if(_.isObject(t.rules)){for(var n in e+="".concat(t.mediaQuery,"{"),t.rules)t.rules.hasOwnProperty(n)&&(e+="".concat(n," {")+t.rules[n].join("")+"}");e+="}"}})),e+=this.settings.stringStyles||""}},{key:"getSelector",value:function(){return"root-element"===this.type?".altrp-template-root".concat(this.getId()):".altrp-element".concat(this.getId())}},{key:"getColumnsCount",value:function(){return this.children.length}},{key:"fieldValidate",value:function(){return"input"!==this.getName()||!this.getSettings("content_required")||(_.has(this,"maskIsValid")?this.getValue()&&this.maskIsValid:this.getValue())}},{key:"elementIsDisplay",value:function(){return"root-element"===this.getName()||!(!this.component.props.elementDisplay&&!this.getSettings("conditional_ignore_in_forms"))&&(!this.parent||this.parent.elementIsDisplay())}},{key:"getValue",value:function(){if("input"!==this.getName())return null;if(!this.elementIsDisplay())return null;this.getSettings();var t=this.component.state.value;switch(t&&t.dynamic&&(t=this.getContent("content_default_value")),this.getSettings("content_type")){case"checkbox":t=_.isArray(t)?t:t?[t]:[];break;case"accept":var e=this.getSettings("accept_checked")||!0,n=this.getSettings("accept_unchecked")||!1;n=(0,g.valueReplacement)(n),e=(0,g.valueReplacement)(e),t=t?e:n}return t}},{key:"getModelsList",value:function(){return this.getRoot().modelsList||[]}},{key:"getModelName",value:function(){var t=null;return this.getModelsList().forEach((function(e){"page"===e.modelName||e.related||(t=e.modelName)})),t}},{key:"getModelsInfoByModelName",value:function(t){var e=this.getModelsList(),n=null;return e.forEach((function(e){e.modelName===t&&(n=e)})),n}},{key:"setModelsList",value:function(t){this.getRoot().modelsList=t}},{key:"addModelInfo",value:function(t){this.getRoot().modelsList=this.getRoot().modelsList||[],this.getRoot().modelsList.push(m({},t))}},{key:"setModelsIds",value:function(t){}},{key:"getContent",value:function(t){return this.component?this.component.getContent(t):""}},{key:"setModelData",value:function(t,e){this.modelsStorage=this.modelsStorage||{},this.modelsStorage[t]=m({},e),this.modelCallbacksStorage&&this.modelCallbacksStorage[t]&&this.modelCallbacksStorage[t](this.modelsStorage[t])}},{key:"onUpdateModelStorage",value:function(t,e){this.modelCallbacksStorage=this.modelCallbacksStorage||{},this.modelCallbacksStorage[t]=e,this.modelsStorage&&this.modelsStorage[t]&&e(this.modelsStorage[t])}},{key:"getPrefixClasses",value:function(){var t=_.toPairs(this.cssClassStorage),e=" ";return t.forEach((function(t){e+="".concat(t[1]," ")})),e}},{key:"setCardModel",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=this.getRoot();if(!t)return n.cardModel=null,void(n.isCard=!1);!t instanceof d.Z&&(t=new d.Z(t)),e=Number(e),n.cardModel=t,n.isCard=!0}},{key:"hasCardModel",value:function(){var t=this.getRoot();return!(!t.cardModel||!t.isCard)}},{key:"getCardModel",value:function(){var t;return!(t="root-element"===this.getType()?this.cardModel:this.getRoot().cardModel)instanceof d.Z&&(t=new d.Z(t)),t}},{key:"getCurrentModel",value:function(){return this.hasCardModel()?this.getCardModel():appStore.getState().currentModel||new d.Z}},{key:"getFieldId",value:function(){var t=this.getSettings("field_id");return t?(-1!==t.indexOf("{{")&&(t=(0,g.replaceContentWithData)(t,this.getCurrentModel().getData())),t):t}},{key:"getFormId",value:function(){var t=this.getSettings("form_id");return t?(-1!==t.indexOf("{{")&&this.component&&(t=(0,g.replaceContentWithData)(t,this.getCurrentModel().getData())),t):t}},{key:"updateFonts",value:function(){var t=this,e=_.get(this.settings,"__altrpFonts__",{});(e=_.toPairs(e)).forEach((function(e){var n=(0,o.Z)(e,2),r=n[0],i=n[1];appStore.dispatch((0,f.gZ)(t.getId(),r,i))}))}},{key:"getDynamicSetting",value:function(t){return _.get(this.settings,"altrpDynamicSetting.".concat(t),null)}},{key:"getResponsiveSetting",value:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",n=arguments.length>2?arguments[2]:void 0;return(0,g.getResponsiveSetting)(this.getSettings(),t,e,n)}},{key:"getTemplateType",value:function(){return this.getRoot().templateType||"content"}},{key:"updateSetting",value:function(t){var e,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";!n&&_.isObject(t)&&(e=m({},_.assign(this.settings,t))),n&&(e=m({},this.settings),_.set(e,n,t)),e&&(this.settings=e,this.component&&this.component.setState((function(t){return m(m({},t),{},{settings:e})})))}}]),t}();function v(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function b(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?v(Object(n),!0).forEach((function(e){(0,r.Z)(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):v(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function k(t,e){var n="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!n){if(Array.isArray(t)||(n=function(t,e){if(t){if("string"==typeof t)return S(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?S(t,e):void 0}}(t))||e&&t&&"number"==typeof t.length){n&&(t=n);var r=0,i=function(){};return{s:i,n:function(){return r>=t.length?{done:!0}:{done:!1,value:t[r++]}},e:function(t){throw t},f:i}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var s,o=!0,a=!1;return{s:function(){n=n.call(t)},n:function(){var t=n.next();return o=t.done,t},e:function(t){a=!0,s=t},f:function(){try{o||null==n.return||n.return()}finally{if(a)throw s}}}}function S(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}var O=function(){function t(){(0,i.Z)(this,t)}return(0,s.Z)(t,[{key:"parseData",value:function(t,e,n,r){var i=[],s=new y(t);if(n&&s.addModelInfo({modelName:"page",modelId:n}),_.isArray(r)){var o,a=k(r);try{for(a.s();!(o=a.n()).done;){var l=o.value;s.addModelInfo(b({},l))}}catch(t){a.e(t)}finally{a.f()}}if(t.children&&t.children.length){var u,c=k(t.children);try{for(c.s();!(u=c.n()).done;){var h=u.value;window.frontElementsManager.checkElementExists(h.name)&&i.push(this.parseData(h,s))}}catch(t){c.e(t)}finally{c.f()}}return s.id=t.id,s.lastElement=t.lastElement,s.children=i,s.settings=t.settings,s.name=t.name,s.type=t.type,s.dynamicContentSettings=t.dynamicContentSettings,e&&s.setParent(e),s.update(),s}},{key:"cloneElement",value:function(t){if(!t)return null;var e=_.cloneDeep(t);return this.updateParents(e),e}},{key:"updateParents",value:function(t){var e=this;_.isArray(t.children)&&t.children.forEach((function(n){n.setParent(t),e.updateParents(n)}))}}]),t}();window.frontElementsFabric=new O;const w=window.frontElementsFabric}}]);