(self.webpackChunk=self.webpackChunk||[]).push([[4197],{72769:(e,t,n)=>{"use strict";n.r(t),n.d(t,{default:()=>O});var r=n(6610),o=n(5991),s=n(63349),c=n(10379),u=n(46070),i=n(77608),l=n(67294),a=n(96156),f=n(27322);function p(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function h(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?p(Object(n),!0).forEach((function(t){(0,a.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):p(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}const y=function(e){(0,c.Z)(a,e);var t,n,s=(t=a,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,i.Z)(t);if(n){var o=(0,i.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,u.Z)(this,e)});function a(e){var t;return(0,r.Z)(this,a),(t=s.call(this,e)).state={isTourOpen:e.show,steps:e.steps},t}return(0,o.Z)(a,[{key:"setIsTourOpen",value:function(e){this.setState((function(t){return h(h({},t),{},{isTourOpen:e})}))}},{key:"render",value:function(){var e=this;return l.createElement(l.Fragment,null,l.createElement(f.ZP,{steps:this.state.steps,isOpen:this.state.isTourOpen,onRequestClose:function(){return e.setIsTourOpen(!1)}}))}}]),a}(l.Component);var m=n(40747);const O=function(e){(0,c.Z)(f,e);var t,n,a=(t=f,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,r=(0,i.Z)(t);if(n){var o=(0,i.Z)(this).constructor;e=Reflect.construct(r,arguments,o)}else e=r.apply(this,arguments);return(0,u.Z)(this,e)});function f(e){var t;return(0,r.Z)(this,f),(t=a.call(this,e)).state={container:document.body},window.elementDecorator&&window.elementDecorator((0,s.Z)(t)),e.baseRender&&(t.render=e.baseRender((0,s.Z)(t))),t}return(0,o.Z)(f,[{key:"render",value:function(){var e=this.props.element.settings.showTutorial;if(!(0,m.isEditor)()&&0===this.props.element.settings.steps.length)return l.createElement(l.Fragment,null);console.log(this.props.element.settings.steps);var t=this.props.element.settings.steps.map((function(e){return{selector:".altrp-element".concat(_.get(e,"element")),content:_.get(e,"text"),startAt:1e3}}));return console.log(t),(0,m.isEditor)()&&(e=!1),l.createElement(l.Fragment,null,(0,m.isEditor)()&&l.createElement("div",null,"Нажмите, чтобы настроить обучение"),l.createElement(y,{show:e,steps:t}))}}]),f}(l.Component)}}]);