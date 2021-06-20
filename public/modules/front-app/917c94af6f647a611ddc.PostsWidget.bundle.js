/*! For license information please see 917c94af6f647a611ddc.PostsWidget.bundle.js.LICENSE.txt */
(self.webpackChunk=self.webpackChunk||[]).push([[1197,9198,9466,5098,6156],{63349:(e,t,r)=>{"use strict";function n(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}r.d(t,{Z:()=>n})},96156:(e,t,r)=>{"use strict";function n(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}r.d(t,{Z:()=>n})},77608:(e,t,r)=>{"use strict";function n(e){return(n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}r.d(t,{Z:()=>n})},10379:(e,t,r)=>{"use strict";r.d(t,{Z:()=>o});var n=r(14665);function o(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&(0,n.Z)(e,t)}},46070:(e,t,r)=>{"use strict";r.d(t,{Z:()=>a});var n=r(90484),o=r(63349);function a(e,t){return!t||"object"!==(0,n.Z)(t)&&"function"!=typeof t?(0,o.Z)(e):t}},14665:(e,t,r)=>{"use strict";function n(e,t){return(n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}r.d(t,{Z:()=>n})},90484:(e,t,r)=>{"use strict";function n(e){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}r.d(t,{Z:()=>n})},71614:(e,t,r)=>{"use strict";r.d(t,{Z:()=>h});var n=r(92137),o=r(96156),a=r(87329),u=r(6610),c=r(5991),i=r(87757),s=r.n(i),l=r(38773),f=r(75098),p=r(40747);function d(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function y(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?d(Object(r),!0).forEach((function(t){(0,o.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):d(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}const h=function(){function e(t,r){(0,u.Z)(this,e),this.component=r,this.modelName=t.modelName||"",this.dataSource=t.dataSource,t.dataSource&&"model_query"===t.dataSource.type&&(this.dataSourceName=t.dataSource.value||""),this.pageSize=t.pageSize||10,this.paginationType=t.paginationType||"pages",this.orderingField=t.orderingField||"name",this.order=t.order||"ASC",this.route="/ajax/models/".concat(this.modelName||(t.dataSource?t.dataSource.value:"")),t.dataSource&&"sql_datasource"===t.dataSource.type&&(this.route=t.dataSource.value,this.dataSourceName=t.dataSource.sql_name||"");var n=_.cloneDeep(r.props.currentModel);n.setProperty("altrpdata",r.props.currentDataStorage.getData()),this.setDefaultParams((0,p.parseParamsFromString)(t.defaultParams,n))}var t;return(0,c.Z)(e,[{key:"getResource",value:function(){return new l.Z({route:this.route})}},{key:"getFromModel",value:function(e){return e?_.isArray(e[this.dataSource.value])?(0,a.Z)(e[this.dataSource.value]):[y({},e[this.dataSource.value])]:[]}},{key:"getQueried",value:(t=(0,n.Z)(s().mark((function e(t){var r;return s().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!this.dataSource||"has_many_relation"!==this.dataSource.type){e.next=4;break}this.modelUpdater?console.log(this.modelUpdater):this.modelUpdater=f.default.subscribeToModelUpdates(this.dataSource.model_name,this.component.getModelId(),this.component),e.next=10;break;case 4:return e.next=6,this.getResource().getQueried(this.getParams(t));case 6:return this.lastQuery=e.sent,_.isArray(this.lastQuery)?r=(0,a.Z)(this.lastQuery):_.isArray(this.lastQuery.data)&&(r=this.lastQuery.data),r.hasMore=this.lastQuery.hasMore,e.abrupt("return",r);case 10:case"end":return e.stop()}}),e,this)}))),function(e){return t.apply(this,arguments)})},{key:"hasMore",value:function(){return!!this.lastQuery&&this.lastQuery.hasMore}},{key:"setDefaultParams",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.defaultParams=e}},{key:"getDefaultParams",value:function(){return this.defaultParams=this.defaultParams||{},this.defaultParams.pageSize=this.pageSize,this.defaultParams}},{key:"getParams",value:function(e){return(e=y({},_.assign(_.cloneDeep(this.getDefaultParams()),e))).page=e.page||1,_.has(e,"pageSize")&&e.pageSize<=0&&(delete e.pageSize,delete e.page),e}},{key:"getCounterStart",value:function(e){var t=1;return this.pageSize<1?t:(e=parseInt(e)||1,t=this.pageSize*(e-1)+1)}}]),e}()},75098:(e,t,r)=>{"use strict";r.r(t),r.d(t,{default:()=>p});var n=r(6610),o=r(5991),a=r(96156),u=r(92137),c=r(87757),i=r.n(c),s=r(38773);function l(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}const f=function(){function e(t,r){(0,n.Z)(this,e),this.modelName=t,r||console.error("ид модели не указан!"),this.modelId=r,this.data=null,this.subscribers=[],this.resource=new s.Z({route:"/ajax/models/".concat(this.modelName)}),this.updating=!1}var t;return(0,o.Z)(e,[{key:"subscribeToUpdates",value:function(e){this.subscribers.push(e),this.updating||(this.data&&this.callSubscribers(),this.updateData())}},{key:"updateData",value:(t=(0,u.Z)(i().mark((function e(){return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return this.updating=!0,e.next=3,this.resource.get(this.modelId);case 3:this.data=e.sent,this.updating=!1,this.callSubscribers();case 6:case"end":return e.stop()}}),e,this)}))),function(){return t.apply(this,arguments)})},{key:"callSubscribers",value:function(){var e=this;this.subscribers.forEach((function(t){_.isFunction(t.updateModelData)&&t.updateModelData(e.getData()),_.isFunction(t)&&t(e.getData())}))}},{key:"unsubscribe",value:function(e){this.subscribers=this.subscribers.filter((function(t){return t!==e}))}},{key:"getData",value:function(){return this.data}},{key:"updateWithData",value:function(e){this.data=_.extend(this.data,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?l(Object(r),!0).forEach((function(t){(0,a.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):l(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}({},e)),this.callSubscribers()}}]),e}(),p=new(function(){function e(){(0,n.Z)(this,e),this.modelsStorage={}}return(0,o.Z)(e,[{key:"updateModel",value:function(e,t){this.modelsStorage["".concat(e,"::").concat(t)]||this.modelsStorage["".concat(e,"::").concat(t)].updateData()}},{key:"addModel",value:function(e){}},{key:"getModel",value:function(e,t){}},{key:"subscribeToModelUpdates",value:function(e,t,r){return t?(this.modelsStorage["".concat(e,"::").concat(t)]||(this.modelsStorage["".concat(e,"::").concat(t)]=new f(e,t)),(n=this.modelsStorage["".concat(e,"::").concat(t)]).subscribeToUpdates(r),n):null;var n}},{key:"unsubscribe",value:function(e,t,r){return t?this.modelsStorage["".concat(e,"::").concat(t)]?((n=this.modelsStorage["".concat(e,"::").concat(t)]).unsubscribe(r),n):void 0:null;var n}},{key:"updateModelWithData",value:function(e,t,r){this.modelsStorage["".concat(e,"::").concat(t)]&&this.modelsStorage["".concat(e,"::").concat(t)].updateWithData(r)}}]),e}())},33765:(e,t,r)=>{"use strict";r.r(t),r.d(t,{default:()=>h});var n=r(96156),o=r(6610),a=r(5991),u=r(63349),c=r(10379),i=r(46070),s=r(77608),l=r(67294),f=r(71614),p=r(40747);function d(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function y(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?d(Object(r),!0).forEach((function(t){(0,n.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):d(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}const h=function(e){(0,c.Z)(h,e);var t,n,d=(t=h,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,s.Z)(t);if(n){var o=(0,s.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,i.Z)(this,e)});function h(e){var t;return(0,o.Z)(this,h),(t=d.call(this,e)).state={settings:e.element.getSettings(),PostsComponent:function(){return l.createElement("div",{children:"Loading..."})}},e.element.component=(0,u.Z)(t),window.elementDecorator&&window.elementDecorator((0,u.Z)(t)),e.baseRender&&(t.render=e.baseRender((0,u.Z)(t))),t}return(0,a.Z)(h,[{key:"_componentDidMount",value:function(){var e=this;Promise.all([r.e(1893),r.e(5977),r.e(1902),r.e(9981),r.e(1298),r.e(4338),r.e(2435),r.e(4627),r.e(7989),r.e(1241)]).then(r.bind(r,99822)).then((function(t){e.setState((function(e){return y(y({},e),{},{PostsComponent:t.default})}))}))}},{key:"showPosts",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return"datasource"===this.props.element.getSettings("choose_datasource")||!(!e.modelName&&!e.dataSource)}},{key:"render",value:function(){if(!this.props.currentModel.getProperty("altrpModelUpdated"))return"";var e=new f.Z(this.props.element.getSettings().table_query||{},this);if(!this.showPosts(e))return l.createElement("div",{children:"Please Choose Source"});var t=e.getFromModel(this.state.modelData)||[];if("datasource"===this.props.element.getSettings("choose_datasource")){var r=this.props.element.getSettings("posts_datasource","");r=r.replace(/}}/g,"").replace(/{{/g,""),t=(0,p.getDataByPath)(r,[],this.props.element.getCurrentModel().getData())}return l.createElement(this.state.PostsComponent,{query:e,currentModel:this.props.currentModel,data:t,element:this.props.element,settings:this.props.element.getSettings()})}}]),h}(l.Component)},27418:e=>{"use strict";var t=Object.getOwnPropertySymbols,r=Object.prototype.hasOwnProperty,n=Object.prototype.propertyIsEnumerable;function o(e){if(null==e)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(e)}e.exports=function(){try{if(!Object.assign)return!1;var e=new String("abc");if(e[5]="de","5"===Object.getOwnPropertyNames(e)[0])return!1;for(var t={},r=0;r<10;r++)t["_"+String.fromCharCode(r)]=r;if("0123456789"!==Object.getOwnPropertyNames(t).map((function(e){return t[e]})).join(""))return!1;var n={};return"abcdefghijklmnopqrst".split("").forEach((function(e){n[e]=e})),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},n)).join("")}catch(e){return!1}}()?Object.assign:function(e,a){for(var u,c,i=o(e),s=1;s<arguments.length;s++){for(var l in u=Object(arguments[s]))r.call(u,l)&&(i[l]=u[l]);if(t){c=t(u);for(var f=0;f<c.length;f++)n.call(u,c[f])&&(i[c[f]]=u[c[f]])}}return i}},72408:(e,t,r)=>{"use strict";var n=r(27418),o="function"==typeof Symbol&&Symbol.for,a=o?Symbol.for("react.element"):60103,u=o?Symbol.for("react.portal"):60106,c=o?Symbol.for("react.fragment"):60107,i=o?Symbol.for("react.strict_mode"):60108,s=o?Symbol.for("react.profiler"):60114,l=o?Symbol.for("react.provider"):60109,f=o?Symbol.for("react.context"):60110,p=o?Symbol.for("react.forward_ref"):60112,d=o?Symbol.for("react.suspense"):60113,y=o?Symbol.for("react.memo"):60115,h=o?Symbol.for("react.lazy"):60116,b="function"==typeof Symbol&&Symbol.iterator;function m(e){for(var t="https://reactjs.org/docs/error-decoder.html?invariant="+e,r=1;r<arguments.length;r++)t+="&args[]="+encodeURIComponent(arguments[r]);return"Minified React error #"+e+"; visit "+t+" for the full message or use the non-minified dev environment for full errors and additional helpful warnings."}var g={isMounted:function(){return!1},enqueueForceUpdate:function(){},enqueueReplaceState:function(){},enqueueSetState:function(){}},v={};function S(e,t,r){this.props=e,this.context=t,this.refs=v,this.updater=r||g}function O(){}function P(e,t,r){this.props=e,this.context=t,this.refs=v,this.updater=r||g}S.prototype.isReactComponent={},S.prototype.setState=function(e,t){if("object"!=typeof e&&"function"!=typeof e&&null!=e)throw Error(m(85));this.updater.enqueueSetState(this,e,t,"setState")},S.prototype.forceUpdate=function(e){this.updater.enqueueForceUpdate(this,e,"forceUpdate")},O.prototype=S.prototype;var j=P.prototype=new O;j.constructor=P,n(j,S.prototype),j.isPureReactComponent=!0;var w={current:null},k=Object.prototype.hasOwnProperty,_={key:!0,ref:!0,__self:!0,__source:!0};function D(e,t,r){var n,o={},u=null,c=null;if(null!=t)for(n in void 0!==t.ref&&(c=t.ref),void 0!==t.key&&(u=""+t.key),t)k.call(t,n)&&!_.hasOwnProperty(n)&&(o[n]=t[n]);var i=arguments.length-2;if(1===i)o.children=r;else if(1<i){for(var s=Array(i),l=0;l<i;l++)s[l]=arguments[l+2];o.children=s}if(e&&e.defaultProps)for(n in i=e.defaultProps)void 0===o[n]&&(o[n]=i[n]);return{$$typeof:a,type:e,key:u,ref:c,props:o,_owner:w.current}}function Z(e){return"object"==typeof e&&null!==e&&e.$$typeof===a}var E=/\/+/g,C=[];function x(e,t,r,n){if(C.length){var o=C.pop();return o.result=e,o.keyPrefix=t,o.func=r,o.context=n,o.count=0,o}return{result:e,keyPrefix:t,func:r,context:n,count:0}}function R(e){e.result=null,e.keyPrefix=null,e.func=null,e.context=null,e.count=0,10>C.length&&C.push(e)}function M(e,t,r,n){var o=typeof e;"undefined"!==o&&"boolean"!==o||(e=null);var c=!1;if(null===e)c=!0;else switch(o){case"string":case"number":c=!0;break;case"object":switch(e.$$typeof){case a:case u:c=!0}}if(c)return r(n,e,""===t?"."+U(e,0):t),1;if(c=0,t=""===t?".":t+":",Array.isArray(e))for(var i=0;i<e.length;i++){var s=t+U(o=e[i],i);c+=M(o,s,r,n)}else if("function"==typeof(s=null===e||"object"!=typeof e?null:"function"==typeof(s=b&&e[b]||e["@@iterator"])?s:null))for(e=s.call(e),i=0;!(o=e.next()).done;)c+=M(o=o.value,s=t+U(o,i++),r,n);else if("object"===o)throw r=""+e,Error(m(31,"[object Object]"===r?"object with keys {"+Object.keys(e).join(", ")+"}":r,""));return c}function $(e,t,r){return null==e?0:M(e,"",t,r)}function U(e,t){return"object"==typeof e&&null!==e&&null!=e.key?function(e){var t={"=":"=0",":":"=2"};return"$"+(""+e).replace(/[=:]/g,(function(e){return t[e]}))}(e.key):t.toString(36)}function A(e,t){e.func.call(e.context,t,e.count++)}function N(e,t,r){var n=e.result,o=e.keyPrefix;e=e.func.call(e.context,t,e.count++),Array.isArray(e)?q(e,n,r,(function(e){return e})):null!=e&&(Z(e)&&(e=function(e,t){return{$$typeof:a,type:e.type,key:t,ref:e.ref,props:e.props,_owner:e._owner}}(e,o+(!e.key||t&&t.key===e.key?"":(""+e.key).replace(E,"$&/")+"/")+r)),n.push(e))}function q(e,t,r,n,o){var a="";null!=r&&(a=(""+r).replace(E,"$&/")+"/"),$(e,N,t=x(t,a,n,o)),R(t)}var F={current:null};function I(){var e=F.current;if(null===e)throw Error(m(321));return e}var z={ReactCurrentDispatcher:F,ReactCurrentBatchConfig:{suspense:null},ReactCurrentOwner:w,IsSomeRendererActing:{current:!1},assign:n};t.Children={map:function(e,t,r){if(null==e)return e;var n=[];return q(e,n,null,t,r),n},forEach:function(e,t,r){if(null==e)return e;$(e,A,t=x(null,null,t,r)),R(t)},count:function(e){return $(e,(function(){return null}),null)},toArray:function(e){var t=[];return q(e,t,null,(function(e){return e})),t},only:function(e){if(!Z(e))throw Error(m(143));return e}},t.Component=S,t.Fragment=c,t.Profiler=s,t.PureComponent=P,t.StrictMode=i,t.Suspense=d,t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED=z,t.cloneElement=function(e,t,r){if(null==e)throw Error(m(267,e));var o=n({},e.props),u=e.key,c=e.ref,i=e._owner;if(null!=t){if(void 0!==t.ref&&(c=t.ref,i=w.current),void 0!==t.key&&(u=""+t.key),e.type&&e.type.defaultProps)var s=e.type.defaultProps;for(l in t)k.call(t,l)&&!_.hasOwnProperty(l)&&(o[l]=void 0===t[l]&&void 0!==s?s[l]:t[l])}var l=arguments.length-2;if(1===l)o.children=r;else if(1<l){s=Array(l);for(var f=0;f<l;f++)s[f]=arguments[f+2];o.children=s}return{$$typeof:a,type:e.type,key:u,ref:c,props:o,_owner:i}},t.createContext=function(e,t){return void 0===t&&(t=null),(e={$$typeof:f,_calculateChangedBits:t,_currentValue:e,_currentValue2:e,_threadCount:0,Provider:null,Consumer:null}).Provider={$$typeof:l,_context:e},e.Consumer=e},t.createElement=D,t.createFactory=function(e){var t=D.bind(null,e);return t.type=e,t},t.createRef=function(){return{current:null}},t.forwardRef=function(e){return{$$typeof:p,render:e}},t.isValidElement=Z,t.lazy=function(e){return{$$typeof:h,_ctor:e,_status:-1,_result:null}},t.memo=function(e,t){return{$$typeof:y,type:e,compare:void 0===t?null:t}},t.useCallback=function(e,t){return I().useCallback(e,t)},t.useContext=function(e,t){return I().useContext(e,t)},t.useDebugValue=function(){},t.useEffect=function(e,t){return I().useEffect(e,t)},t.useImperativeHandle=function(e,t,r){return I().useImperativeHandle(e,t,r)},t.useLayoutEffect=function(e,t){return I().useLayoutEffect(e,t)},t.useMemo=function(e,t){return I().useMemo(e,t)},t.useReducer=function(e,t,r){return I().useReducer(e,t,r)},t.useRef=function(e){return I().useRef(e)},t.useState=function(e){return I().useState(e)},t.version="16.14.0"},67294:(e,t,r)=>{"use strict";e.exports=r(72408)}}]);