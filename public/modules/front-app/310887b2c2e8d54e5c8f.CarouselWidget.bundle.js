/*! For license information please see 310887b2c2e8d54e5c8f.CarouselWidget.bundle.js.LICENSE.txt */
(self.webpackChunk=self.webpackChunk||[]).push([[6854,9198,9466,6156],{63349:(e,t,r)=>{"use strict";function n(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}r.d(t,{Z:()=>n})},96156:(e,t,r)=>{"use strict";function n(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}r.d(t,{Z:()=>n})},77608:(e,t,r)=>{"use strict";function n(e){return(n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}r.d(t,{Z:()=>n})},10379:(e,t,r)=>{"use strict";r.d(t,{Z:()=>o});var n=r(14665);function o(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&(0,n.Z)(e,t)}},46070:(e,t,r)=>{"use strict";r.d(t,{Z:()=>u});var n=r(90484),o=r(63349);function u(e,t){return!t||"object"!==(0,n.Z)(t)&&"function"!=typeof t?(0,o.Z)(e):t}},14665:(e,t,r)=>{"use strict";function n(e,t){return(n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}r.d(t,{Z:()=>n})},90484:(e,t,r)=>{"use strict";function n(e){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}r.d(t,{Z:()=>n})},30238:(e,t,r)=>{"use strict";r.r(t),r.d(t,{default:()=>m});var n=r(96156),o=r(92137),u=r(6610),c=r(5991),i=r(63349),f=r(10379),l=r(46070),a=r(77608),s=r(87757),p=r.n(s),y=r(67294),d=r(76450);function b(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function h(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?b(Object(r),!0).forEach((function(t){(0,n.Z)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):b(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}const m=function(e){(0,f.Z)(m,e);var t,n,s,b=(n=m,s=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=(0,a.Z)(n);if(s){var r=(0,a.Z)(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return(0,l.Z)(this,e)});function m(e){var t;return(0,u.Z)(this,m),(t=b.call(this,e)).state={settings:e.element.getSettings(),AltrpCarousel:function(){return y.createElement("div",null,"Loading...")}},e.element.component=(0,i.Z)(t),window.elementDecorator&&window.elementDecorator((0,i.Z)(t)),e.baseRender&&(t.render=e.baseRender((0,i.Z)(t))),t.carousel=y.createRef(),t}return(0,c.Z)(m,[{key:"_componentDidMount",value:(t=(0,o.Z)(p().mark((function e(){var t;return p().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,Promise.all([r.e(1762),r.e(3935),r.e(6287),r.e(1893),r.e(2879),r.e(5045),r.e(6066),r.e(8942),r.e(6423)]).then(r.bind(r,6423));case 2:t=(t=e.sent).default,this.setState((function(e){return h(h({},e),{},{AltrpCarousel:t})}));case 5:case"end":return e.stop()}}),e,this)}))),function(){return t.apply(this,arguments)})},{key:"render",value:function(){var e=h(h({},this.props.element.getSettings()),{},{currentScreen:this.props.currentScreen,elementId:this.props.element.getId()});return(0,d.q1)(this.state.AltrpCarousel)&&(e.ref=this.carousel),y.createElement(this.state.AltrpCarousel,e)}}]),m}(y.Component)},76450:(e,t,r)=>{"use strict";r.d(t,{q1:()=>o,D9:()=>u});var n=r(67294);function o(e){return"function"==typeof e&&!!e.prototype.isReactComponent}function u(e){var t=(0,n.useRef)();return(0,n.useEffect)((function(){t.current=e}),[e]),t.current}},27418:e=>{"use strict";var t=Object.getOwnPropertySymbols,r=Object.prototype.hasOwnProperty,n=Object.prototype.propertyIsEnumerable;function o(e){if(null==e)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(e)}e.exports=function(){try{if(!Object.assign)return!1;var e=new String("abc");if(e[5]="de","5"===Object.getOwnPropertyNames(e)[0])return!1;for(var t={},r=0;r<10;r++)t["_"+String.fromCharCode(r)]=r;if("0123456789"!==Object.getOwnPropertyNames(t).map((function(e){return t[e]})).join(""))return!1;var n={};return"abcdefghijklmnopqrst".split("").forEach((function(e){n[e]=e})),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},n)).join("")}catch(e){return!1}}()?Object.assign:function(e,u){for(var c,i,f=o(e),l=1;l<arguments.length;l++){for(var a in c=Object(arguments[l]))r.call(c,a)&&(f[a]=c[a]);if(t){i=t(c);for(var s=0;s<i.length;s++)n.call(c,i[s])&&(f[i[s]]=c[i[s]])}}return f}},72408:(e,t,r)=>{"use strict";var n=r(27418),o="function"==typeof Symbol&&Symbol.for,u=o?Symbol.for("react.element"):60103,c=o?Symbol.for("react.portal"):60106,i=o?Symbol.for("react.fragment"):60107,f=o?Symbol.for("react.strict_mode"):60108,l=o?Symbol.for("react.profiler"):60114,a=o?Symbol.for("react.provider"):60109,s=o?Symbol.for("react.context"):60110,p=o?Symbol.for("react.forward_ref"):60112,y=o?Symbol.for("react.suspense"):60113,d=o?Symbol.for("react.memo"):60115,b=o?Symbol.for("react.lazy"):60116,h="function"==typeof Symbol&&Symbol.iterator;function m(e){for(var t="https://reactjs.org/docs/error-decoder.html?invariant="+e,r=1;r<arguments.length;r++)t+="&args[]="+encodeURIComponent(arguments[r]);return"Minified React error #"+e+"; visit "+t+" for the full message or use the non-minified dev environment for full errors and additional helpful warnings."}var v={isMounted:function(){return!1},enqueueForceUpdate:function(){},enqueueReplaceState:function(){},enqueueSetState:function(){}},O={};function g(e,t,r){this.props=e,this.context=t,this.refs=O,this.updater=r||v}function w(){}function j(e,t,r){this.props=e,this.context=t,this.refs=O,this.updater=r||v}g.prototype.isReactComponent={},g.prototype.setState=function(e,t){if("object"!=typeof e&&"function"!=typeof e&&null!=e)throw Error(m(85));this.updater.enqueueSetState(this,e,t,"setState")},g.prototype.forceUpdate=function(e){this.updater.enqueueForceUpdate(this,e,"forceUpdate")},w.prototype=g.prototype;var S=j.prototype=new w;S.constructor=j,n(S,g.prototype),S.isPureReactComponent=!0;var _={current:null},k=Object.prototype.hasOwnProperty,P={key:!0,ref:!0,__self:!0,__source:!0};function C(e,t,r){var n,o={},c=null,i=null;if(null!=t)for(n in void 0!==t.ref&&(i=t.ref),void 0!==t.key&&(c=""+t.key),t)k.call(t,n)&&!P.hasOwnProperty(n)&&(o[n]=t[n]);var f=arguments.length-2;if(1===f)o.children=r;else if(1<f){for(var l=Array(f),a=0;a<f;a++)l[a]=arguments[a+2];o.children=l}if(e&&e.defaultProps)for(n in f=e.defaultProps)void 0===o[n]&&(o[n]=f[n]);return{$$typeof:u,type:e,key:c,ref:i,props:o,_owner:_.current}}function R(e){return"object"==typeof e&&null!==e&&e.$$typeof===u}var E=/\/+/g,x=[];function $(e,t,r,n){if(x.length){var o=x.pop();return o.result=e,o.keyPrefix=t,o.func=r,o.context=n,o.count=0,o}return{result:e,keyPrefix:t,func:r,context:n,count:0}}function Z(e){e.result=null,e.keyPrefix=null,e.func=null,e.context=null,e.count=0,10>x.length&&x.push(e)}function A(e,t,r,n){var o=typeof e;"undefined"!==o&&"boolean"!==o||(e=null);var i=!1;if(null===e)i=!0;else switch(o){case"string":case"number":i=!0;break;case"object":switch(e.$$typeof){case u:case c:i=!0}}if(i)return r(n,e,""===t?"."+I(e,0):t),1;if(i=0,t=""===t?".":t+":",Array.isArray(e))for(var f=0;f<e.length;f++){var l=t+I(o=e[f],f);i+=A(o,l,r,n)}else if("function"==typeof(l=null===e||"object"!=typeof e?null:"function"==typeof(l=h&&e[h]||e["@@iterator"])?l:null))for(e=l.call(e),f=0;!(o=e.next()).done;)i+=A(o=o.value,l=t+I(o,f++),r,n);else if("object"===o)throw r=""+e,Error(m(31,"[object Object]"===r?"object with keys {"+Object.keys(e).join(", ")+"}":r,""));return i}function D(e,t,r){return null==e?0:A(e,"",t,r)}function I(e,t){return"object"==typeof e&&null!==e&&null!=e.key?function(e){var t={"=":"=0",":":"=2"};return"$"+(""+e).replace(/[=:]/g,(function(e){return t[e]}))}(e.key):t.toString(36)}function q(e,t){e.func.call(e.context,t,e.count++)}function U(e,t,r){var n=e.result,o=e.keyPrefix;e=e.func.call(e.context,t,e.count++),Array.isArray(e)?L(e,n,r,(function(e){return e})):null!=e&&(R(e)&&(e=function(e,t){return{$$typeof:u,type:e.type,key:t,ref:e.ref,props:e.props,_owner:e._owner}}(e,o+(!e.key||t&&t.key===e.key?"":(""+e.key).replace(E,"$&/")+"/")+r)),n.push(e))}function L(e,t,r,n,o){var u="";null!=r&&(u=(""+r).replace(E,"$&/")+"/"),D(e,U,t=$(t,u,n,o)),Z(t)}var M={current:null};function B(){var e=M.current;if(null===e)throw Error(m(321));return e}var F={ReactCurrentDispatcher:M,ReactCurrentBatchConfig:{suspense:null},ReactCurrentOwner:_,IsSomeRendererActing:{current:!1},assign:n};t.Children={map:function(e,t,r){if(null==e)return e;var n=[];return L(e,n,null,t,r),n},forEach:function(e,t,r){if(null==e)return e;D(e,q,t=$(null,null,t,r)),Z(t)},count:function(e){return D(e,(function(){return null}),null)},toArray:function(e){var t=[];return L(e,t,null,(function(e){return e})),t},only:function(e){if(!R(e))throw Error(m(143));return e}},t.Component=g,t.Fragment=i,t.Profiler=l,t.PureComponent=j,t.StrictMode=f,t.Suspense=y,t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED=F,t.cloneElement=function(e,t,r){if(null==e)throw Error(m(267,e));var o=n({},e.props),c=e.key,i=e.ref,f=e._owner;if(null!=t){if(void 0!==t.ref&&(i=t.ref,f=_.current),void 0!==t.key&&(c=""+t.key),e.type&&e.type.defaultProps)var l=e.type.defaultProps;for(a in t)k.call(t,a)&&!P.hasOwnProperty(a)&&(o[a]=void 0===t[a]&&void 0!==l?l[a]:t[a])}var a=arguments.length-2;if(1===a)o.children=r;else if(1<a){l=Array(a);for(var s=0;s<a;s++)l[s]=arguments[s+2];o.children=l}return{$$typeof:u,type:e.type,key:c,ref:i,props:o,_owner:f}},t.createContext=function(e,t){return void 0===t&&(t=null),(e={$$typeof:s,_calculateChangedBits:t,_currentValue:e,_currentValue2:e,_threadCount:0,Provider:null,Consumer:null}).Provider={$$typeof:a,_context:e},e.Consumer=e},t.createElement=C,t.createFactory=function(e){var t=C.bind(null,e);return t.type=e,t},t.createRef=function(){return{current:null}},t.forwardRef=function(e){return{$$typeof:p,render:e}},t.isValidElement=R,t.lazy=function(e){return{$$typeof:b,_ctor:e,_status:-1,_result:null}},t.memo=function(e,t){return{$$typeof:d,type:e,compare:void 0===t?null:t}},t.useCallback=function(e,t){return B().useCallback(e,t)},t.useContext=function(e,t){return B().useContext(e,t)},t.useDebugValue=function(){},t.useEffect=function(e,t){return B().useEffect(e,t)},t.useImperativeHandle=function(e,t,r){return B().useImperativeHandle(e,t,r)},t.useLayoutEffect=function(e,t){return B().useLayoutEffect(e,t)},t.useMemo=function(e,t){return B().useMemo(e,t)},t.useReducer=function(e,t,r){return B().useReducer(e,t,r)},t.useRef=function(e){return B().useRef(e)},t.useState=function(e){return B().useState(e)},t.version="16.14.0"},67294:(e,t,r)=>{"use strict";e.exports=r(72408)}}]);