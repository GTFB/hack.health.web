(self.webpackChunk=self.webpackChunk||[]).push([[4011],{1987:(e,t,n)=>{"use strict";n.d(t,{hX:()=>i}),n(87757);var r=n(37895);function i(){return window.iconsManager||(window.iconsManager=new r.default),window.iconsManager}n(38773),n(96486)},4011:(e,t,n)=>{"use strict";n.r(t),n.d(t,{default:()=>b});var r=n(96156),i=n(6610),a=n(5991),s=n(63349),c=n(10379),l=n(46070),o=n(77608),u=n(67294),p=n(22122),f=n(1987),m=n(40747);function h(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function d(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?h(Object(n),!0).forEach((function(t){(0,r.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):h(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}const g=function(e){(0,c.Z)(s,e);var t,n,r=(t=s,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,o.Z)(t);if(n){var i=(0,o.Z)(this).constructor;e=Reflect.construct(r,arguments,i)}else e=r.apply(this,arguments);return(0,l.Z)(this,e)});function s(e){var t;return(0,i.Z)(this,s),(t=r.call(this,e)).labelClick=function(e){(0,m.isEditor)()&&e.preventDefault()},t.deleteItem=function(e,n){e.preventDefault();var r=t.state.files;r.splice(n,1);var i=[];r.length||t.setState((function(e){return d(d({},e),{},{filesForDisplay:i,files:r})})),console.log(r),_.each(r,(function(e){var n=new FileReader;n.readAsDataURL(e),n.onload=function(){i.push({src:n.result,alt:e.name||""}),i.length===r.length&&t.setState((function(e){return d(d({},e),{},{filesForDisplay:i,files:r})}))}})),_.isFunction(t.props.onChange)&&t.props.onChange(r)},t.onChange=function(e){if(!(!e.target.files instanceof FileList)){var n=[],r=t.props.settings.content_accept?t.props.settings.content_accept.split(","):[];_.each(e.target.files,(function(e){r.forEach((function(t){t=(t=t.trim()).replace("*",""),0===e.type.indexOf(t)&&n.push(e)}))}));var i=[];n.length||t.setState((function(e){return d(d({},e),{},{filesForDisplay:i,files:n})})),_.each(n,(function(e){var r=new FileReader;r.readAsDataURL(e),r.onload=function(){i.push({src:r.result,alt:e.name||""}),i.length===n.length&&(console.log(i),t.setState((function(e){return d(d({},e),{},{filesForDisplay:i,files:n})})))}})),_.isFunction(t.props.onChange)&&t.props.onChange(n)}},t.state={filesForDisplay:[],files:[]},t}return(0,a.Z)(s,[{key:"render",value:function(){var e=this,t=this.props.settings.select2_multiple,n=this.props.settings.content_placeholder||"",r=this.state.filesForDisplay,i=this.props.settings.content_accept||"",a=["altrp-field-file"];return r.length||a.push("altrp-field-file_empty"),u.createElement("label",{className:a.join(" "),onClick:this.labelClick},u.createElement("span",{className:"altrp-field-file__placeholder"},n),u.createElement("input",{type:"file",className:"altrp-field-file__field",multiple:t,accept:i,onChange:this.onChange}),u.createElement("span",{className:"altrp-field-file-media-list media-list"},(0,m.isEditor)()?u.createElement("span",{className:"media-list-item"},(0,f.hX)().renderIcon("times",{className:"media-list-item__remove"}),(0,m.renderAsset)({},{className:"media-list-item__img"})):r.map((function(t,n){return u.createElement("span",{key:n,className:"media-list-item"},(0,f.hX)().renderIcon("times",{className:"media-list-item__remove",onClick:function(t){e.deleteItem(t,n)}}),u.createElement("img",(0,p.Z)({className:"media-list-item__img"},t)))}))))}}]),s}(u.Component);function y(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function v(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?y(Object(n),!0).forEach((function(t){(0,r.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):y(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}n.e(882).then(n.bind(n,70882));var O=u.lazy((function(){return n.e(1749).then(n.t.bind(n,91749,23))}));const b=function(e){(0,c.Z)(p,e);var t,n,r=(t=p,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,o.Z)(t);if(n){var i=(0,o.Z)(this).constructor;e=Reflect.construct(r,arguments,i)}else e=r.apply(this,arguments);return(0,l.Z)(this,e)});function p(){var e;(0,i.Z)(this,p);for(var t=arguments.length,n=new Array(t),a=0;a<t;a++)n[a]=arguments[a];return(e=r.call.apply(r,[this].concat(n))).state={isValid:!0},e.checkValidity=function(t){if(t){var n=e.props.value.replace(/_/g,""),r=!(!n.length||!(0,m.isValueMatchMask)(n,t));e.setState((function(e){return v(v({},e),{},{isValid:r})})),_.set((0,s.Z)(e),"props.element.maskIsValid",r)}},e}return(0,a.Z)(p,[{key:"componentDidUpdate",value:function(e,t){!this.props.value&&this.props.settings.content_mask&&this.state.isValid&&(this.setState((function(e){return v(v({},e),{},{isValid:!1})})),_.set(this,"props.element.maskIsValid",!1))}},{key:"render",value:function(){var e=this,t=this.state.isValid,n=this.props.settings,r=n.content_type,i=n.content_mask,a=n.mask_mismatch_message,s=v({},this.props);switch(r){case"file":return u.createElement(g,s)}if(i){var c=i.split("");return c=c.map((function(e){switch(e){case"_":return/\d/;case"*":return/\S/;default:return e}})),s.mask=c,s.guide=!0,s.onBlur=function(t){e.props.onBlur(t),e.checkValidity(c)},s.onChange=function(n){e.props.onChange(n),t||e.checkValidity(c)},u.createElement(u.Suspense,{fallback:u.createElement("input",this.props)},u.createElement(O,s),!t&&a&&u.createElement("p",{className:"mask-mismatch-message"},a))}return"email"===r&&a&&(s.onBlur=function(t){e.props.onBlur(t),e.setState({isValid:(0,m.validateEmail)(t.target.value)})},t||(s.onChange=function(t){e.props.onChange(t),e.setState({isValid:(0,m.validateEmail)(t.target.value)})})),u.createElement(u.Fragment,null,u.createElement("input",s),!t&&"email"===r&&a&&u.createElement("p",{className:"mask-mismatch-message"},a))}}]),p}(u.Component)}}]);