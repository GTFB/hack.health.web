(self.webpackChunk=self.webpackChunk||[]).push([[4124],{64367:(e,t,a)=>{"use strict";a.d(t,{u3:()=>l,en:()=>o,fq:()=>r,Fe:()=>n,e_:()=>c,eq:()=>d,z$:()=>i,YO:()=>s});var l="CHART/BAR",o="CHART/PIE",r="CHART/LINE",n="CHART/TABLE",c="CHART/POINT",d=[{name:"Столбцы",value:l},{name:"Круговая",value:o},{name:"Графики",value:r},{name:"Таблица",value:n},{name:"Точечная",value:c}],i=function(e){return d.find((function(t){return t.value===e})).name},s=["#FFEC00","#6F6E6E","#F6E36A","#979797","#FEF367","#979678","#CFBF00","#706B46","#A59103","#444444"]},45250:(e,t,a)=>{"use strict";a.d(t,{Z:()=>p});var l=a(96156),o=a(6610),r=a(5991),n=a(63349),c=a(10379),d=a(46070),i=a(77608);function s(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);t&&(l=l.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),a.push.apply(a,l)}return a}function u(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?s(Object(a),!0).forEach((function(t){(0,l.Z)(e,t,a[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):s(Object(a)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))}))}return e}const p=function(e){(0,c.Z)(s,e);var t,a,l=(t=s,a=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,l=(0,i.Z)(t);if(a){var o=(0,i.Z)(this).constructor;e=Reflect.construct(l,arguments,o)}else e=l.apply(this,arguments);return(0,d.Z)(this,e)});function s(e){var t;return(0,o.Z)(this,s),(t=l.call(this,e)).state={enablebar:e.datum.enable,enable:e.enable,point:e.datum.point,data:e.datum.point.data,settings:null==e?void 0:e.settings,keyIsDate:null==e?void 0:e.keyIsDate},console.log("===================================="),console.log(t.state.data),console.log("===================================="),t.containerSettings=t.containerSettings.bind((0,n.Z)(t)),t}return(0,r.Z)(s,[{key:"componentDidUpdate",value:function(e,t){var a=this;_.isEqual(e.datum.point,this.props.datum.point)||this.setState((function(e){return u(u({},e),{},{point:a.props.datum.point,data:a.props.datum.point.data})})),_.isEqual(e.settings,this.props.settings)||this.setState((function(e){var t;return u(u({},e),{},{settings:null===(t=a.props)||void 0===t?void 0:t.settings})})),_.isEqual(e.enable,this.props.enable)||this.setState((function(e){var t;return u(u({},e),{},{settenableings:null===(t=a.props)||void 0===t?void 0:t.enable})}))}},{key:"containerSettings",value:function(){var e,t,a,l,o,r=(null===(e=this.state)||void 0===e?void 0:e.settings)||{};return console.log("===================================="),console.log(r),console.log("===================================="),{padding:"".concat((null==r||null===(t=r.padding)||void 0===t?void 0:t.top)||5,"px ").concat((null==r||null===(a=r.padding)||void 0===a?void 0:a.right)||5,"px ").concat((null==r||null===(l=r.padding)||void 0===l?void 0:l.bottom)||5,"px ").concat((null==r||null===(o=r.padding)||void 0===o?void 0:o.left)||5,"px"),borderStyle:"".concat((null==r?void 0:r.borderStyle)||"solid"),borderRadius:"".concat((null==r?void 0:r.borderRadius)||"4px"),borderColor:"".concat((null==r?void 0:r.borderColor)||"black"),borderWidth:"".concat((null==r?void 0:r.borderWidth)||"1px"),backgroundColor:"".concat((null==r?void 0:r.backgroundColor)||"red"),color:"white",width:"fit-content",flexDirection:"column-reverse"}}},{key:"render",value:function(){var e,t,a;if(this.state.enable)return React.createElement(React.Fragment,null,React.createElement("div",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--label-background altrp-dashboard__tooltip--width altrp-dashboard__tooltip--label-background-shadow altrp-dashboard__tooltip--border-type altrp-dashboard__tooltip--border-width altrp-dashboard__tooltip--border-color col-12"),style:{padding:"5px 9px"}},React.createElement("div",null,void 0===(null===(e=this.state.data)||void 0===e?void 0:e.tooltip)&&React.createElement("div",{style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},React.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.state.point.color,marginRight:"7px"}}),React.createElement("div",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font col px-0")},this.props.keyIsDate?this.state.data.xFormatted:this.state.data.x,":",React.createElement("strong",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font col px-0")},this.state.data.y))),null===(t=this.state.data)||void 0===t||null===(a=t.tooltip)||void 0===a?void 0:a.map((function(e,t){return React.createElement(React.Fragment,null,React.createElement("div",{style:{color:(null==e?void 0:e.color)||"#000000"},key:t},"".concat(null==e?void 0:e.label,":"),React.createElement("strong",null,e.value)))})))));var l=this.state.data,o=l.xFormatted,r=l.yFormatted;return React.createElement(React.Fragment,null,React.createElement("div",{style:{background:"white",color:"inherit",fontSize:"{{SIZE}}px",borderRadius:"2px",boxShadow:"rgba(0, 0, 0, 0.25) 0px 1px 2px",padding:"5px 9px"}},React.createElement("div",{style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},React.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.state.point.color,marginRight:"7px"}}),React.createElement("span",null,o,": ",React.createElement("strong",null,r)))))}}]),s}(a(67294).PureComponent)},22683:(e,t,a)=>{"use strict";a.d(t,{Z:()=>p});var l=a(96156),o=a(6610),r=a(5991),n=a(10379),c=a(46070),d=a(77608),i=a(67294);function s(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);t&&(l=l.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),a.push.apply(a,l)}return a}function u(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?s(Object(a),!0).forEach((function(t){(0,l.Z)(e,t,a[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):s(Object(a)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))}))}return e}const p=function(e){(0,n.Z)(s,e);var t,a,l=(t=s,a=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,l=(0,d.Z)(t);if(a){var o=(0,d.Z)(this).constructor;e=Reflect.construct(l,arguments,o)}else e=l.apply(this,arguments);return(0,c.Z)(this,e)});function s(e){var t,a,r,n;return(0,o.Z)(this,s),(n=l.call(this,e)).state={indexValue:null===(t=e.datum)||void 0===t?void 0:t.indexValue,value:null===(a=e.datum)||void 0===a?void 0:a.value,color:null===(r=e.datum)||void 0===r?void 0:r.color,enable:null==e?void 0:e.enable,settings:null==e?void 0:e.settings},n}return(0,r.Z)(s,[{key:"componentDidUpdate",value:function(e,t){var a=this;_.isEqual(e.enable,this.props.enable)||this.setState((function(e){var t;return u(u({},e),{},{enable:null===(t=a.props)||void 0===t?void 0:t.enable})}))}},{key:"customTooltip",value:function(){var e,t,a,l,o;return i.createElement(i.Fragment,null,i.createElement("div",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font altrp-dashboard__tooltip--label-background altrp-dashboard__tooltip--width altrp-dashboard__tooltip--label-background-shadow altrp-dashboard__tooltip--border-type altrp-dashboard__tooltip--border-width altrp-dashboard__tooltip--border-color  col-12"),style:{padding:"5px 9px"}},i.createElement("div",null,void 0===(null===(e=this.props.datum)||void 0===e||null===(t=e.data)||void 0===t?void 0:t.tooltip)&&i.createElement("div",{style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},i.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.props.datum.color,marginRight:"7px"}}),i.createElement("div",{className:"".concat(this.props.widgetID," col px-0")},this.props.datum.data.key,":"," ",i.createElement("strong",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font col px-0")},this.props.datum.data.value))),null===(a=this.props.datum)||void 0===a||null===(l=a.data)||void 0===l||null===(o=l.tooltip)||void 0===o?void 0:o.map((function(e,t){return i.createElement("div",{style:{color:(null==e?void 0:e.color)||"#000000"},key:t},"".concat(null==e?void 0:e.label,":"),i.createElement("strong",null,e.value))})))))}},{key:"render",value:function(){return this.state.enable?this.customTooltip():i.createElement(i.Fragment,null,i.createElement("div",{style:{color:"inherit",fontSize:"{{SIZE}}px",borderRadius:"2px",padding:"3px 9px"}},i.createElement("div",{style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},i.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.props.datum.color,marginRight:"7px"}}),i.createElement("span",null,this.props.datum.data.key,":"," ",i.createElement("strong",null,this.props.datum.data.value)))))}}]),s}(i.PureComponent)},33695:(e,t,a)=>{"use strict";a.d(t,{Z:()=>p});var l=a(96156),o=a(6610),r=a(5991),n=a(10379),c=a(46070),d=a(77608),i=a(67294);function s(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);t&&(l=l.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),a.push.apply(a,l)}return a}function u(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?s(Object(a),!0).forEach((function(t){(0,l.Z)(e,t,a[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):s(Object(a)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))}))}return e}const p=function(e){(0,n.Z)(s,e);var t,a,l=(t=s,a=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,l=(0,d.Z)(t);if(a){var o=(0,d.Z)(this).constructor;e=Reflect.construct(l,arguments,o)}else e=l.apply(this,arguments);return(0,c.Z)(this,e)});function s(e){var t,a,r,n;return(0,o.Z)(this,s),console.log(e.datum),(n=l.call(this,e)).state={indexValue:null===(t=e.datum)||void 0===t?void 0:t.indexValue,value:null===(a=e.datum)||void 0===a?void 0:a.value,color:null===(r=e.datum)||void 0===r?void 0:r.color,enable:null==e?void 0:e.enable,settings:null==e?void 0:e.settings},n}return(0,r.Z)(s,[{key:"componentDidUpdate",value:function(e,t){var a=this;_.isEqual(e.enable,this.props.enable)||this.setState((function(e){var t;return u(u({},e),{},{enable:null===(t=a.props)||void 0===t?void 0:t.enable})}))}},{key:"customTooltip",value:function(){var e,t,a,l,o,r,n;return i.createElement(i.Fragment,null,i.createElement("div",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font altrp-dashboard__tooltip--label-background altrp-dashboard__tooltip--width altrp-dashboard__tooltip--label-background-shadow altrp-dashboard__tooltip--border-type altrp-dashboard__tooltip--border-width altrp-dashboard__tooltip--border-color col-12"),style:{padding:"5px 9px"}},i.createElement("div",null,void 0===(null===(e=this.props.datum)||void 0===e||null===(t=e.datum)||void 0===t||null===(a=t.data)||void 0===a?void 0:a.tooltip)&&i.createElement("div",{style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},i.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.props.datum.datum.color,marginRight:"7px"}}),i.createElement("div",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font col px-0")},this.props.datum.datum.label,":"," ",i.createElement("strong",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font col px-0")},this.props.datum.datum.value))),null===(l=this.props.datum)||void 0===l||null===(o=l.datum)||void 0===o||null===(r=o.data)||void 0===r||null===(n=r.tooltip)||void 0===n?void 0:n.map((function(e,t){return i.createElement("div",{style:{color:(null==e?void 0:e.color)||"#000000"},key:t},"".concat(null==e?void 0:e.label,":"),i.createElement("strong",null,e.value))})))))}},{key:"render",value:function(){return this.state.enable?this.customTooltip():i.createElement(i.Fragment,null,i.createElement("div",{style:{background:"white",color:"inherit",fontSize:"{{SIZE}}px",borderRadius:"2px",boxShadow:"rgba(0, 0, 0, 0.25) 0px 1px 2px",padding:"5px 9px"}},i.createElement("div",{style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},i.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.props.datum.datum.color,marginRight:"7px"}}),i.createElement("span",null,this.props.datum.datum.label,":"," ",i.createElement("strong",null,this.props.datum.datum.value)))))}}]),s}(i.PureComponent)},59533:(e,t,a)=>{"use strict";a.d(t,{Z:()=>p});var l=a(96156),o=a(6610),r=a(5991),n=a(10379),c=a(46070),d=a(77608),i=a(67294);function s(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);t&&(l=l.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),a.push.apply(a,l)}return a}function u(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?s(Object(a),!0).forEach((function(t){(0,l.Z)(e,t,a[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):s(Object(a)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))}))}return e}const p=function(e){(0,n.Z)(s,e);var t,a,l=(t=s,a=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,l=(0,d.Z)(t);if(a){var o=(0,d.Z)(this).constructor;e=Reflect.construct(l,arguments,o)}else e=l.apply(this,arguments);return(0,c.Z)(this,e)});function s(e){var t,a,r,n,c,d;return(0,o.Z)(this,s),(d=l.call(this,e)).state={indexValue:null===(t=e.datum)||void 0===t?void 0:t.indexValue,value:null===(a=e.datum)||void 0===a?void 0:a.value,color:null===(r=e.datum)||void 0===r?void 0:r.color,enable:null==e?void 0:e.enable,settings:null==e?void 0:e.settings,data:null===(n=e.datum)||void 0===n||null===(c=n.node)||void 0===c?void 0:c.data},d}return(0,r.Z)(s,[{key:"componentDidUpdate",value:function(e,t){var a=this;_.isEqual(e.enable,this.props.enable)||this.setState((function(e){var t;return u(u({},e),{},{enable:null===(t=a.props)||void 0===t?void 0:t.enable})}))}},{key:"customTooltip",value:function(){var e,t,a;return i.createElement(i.Fragment,null,i.createElement("div",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--label-background altrp-dashboard__tooltip--width altrp-dashboard__tooltip--label-background-shadow altrp-dashboard__tooltip--border-type altrp-dashboard__tooltip--border-width altrp-dashboard__tooltip--border-color col-12"),style:{padding:"5px 9px"}},i.createElement("div",null,void 0===(null===(e=this.props.datum.node.data)||void 0===e?void 0:e.tooltip)&&i.createElement("div",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font col px-0"),style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},i.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.props.datum.node.style.color,marginRight:"7px"}}),this.props.datum.node.data.formattedX,":"," ",i.createElement("strong",{className:"".concat(this.props.widgetID," altrp-dashboard__tooltip--font col px-0")},this.props.datum.node.data.formattedY)),null===(t=this.props.datum.node.data)||void 0===t||null===(a=t.tooltip)||void 0===a?void 0:a.map((function(e,t){return i.createElement("div",{style:{color:(null==e?void 0:e.color)||"#000000"},key:t},"".concat(null==e?void 0:e.label,":"),i.createElement("strong",null,e.value))})))))}},{key:"render",value:function(){return this.state.enable?this.customTooltip():i.createElement(i.Fragment,null,i.createElement("div",{style:{background:"white",color:"inherit",fontSize:"{{SIZE}}px",borderRadius:"2px",boxShadow:"rgba(0, 0, 0, 0.25) 0px 1px 2px",padding:"5px 9px"}},i.createElement("div",{style:{whiteSpace:"pre",display:"flex",alignItems:"center"}},i.createElement("span",{style:{display:"block",width:"12px",height:"12px",background:this.props.datum.node.style.color,marginRight:"7px"}}),i.createElement("span",null,this.props.datum.node.data.formattedX,":"," ",i.createElement("strong",null,this.props.datum.node.data.formattedY)))))}}]),s}(i.PureComponent)},23233:(e,t,a)=>{"use strict";a.d(t,{Z:()=>l});const l=[{label:"Regagro",value:"regagro",colors:["#FFEC00","#6F6E6E","#F6E36A","#979797","#FEF367","#979678","#CFBF00","#706B46","#A59103","#444444"]},{label:"nivo",value:"nivo",colors:["#e8c1a0","#f47560","#f1e15b","#e8a838","#61cdbb","#97e3d5"]},{label:"category10",value:"category10",colors:["#1f77b4","#ff7f0e","#2ca02c","#d62728","#9467bd","#8c564b","#e377c2","#7f7f7f","#bcbd22","#17becf"]},{label:"accent",value:"accent",colors:["#7fc97f","#beaed4","#fdc086","#ffff99","#386cb0","#f0027f","#bf5b17","#666666"]},{label:"dark2",value:"dark2",colors:["#1b9e77","#d95f02","#7570b3","#e7298a","#66a61e","#e6ab02","#a6761d","#666666"]},{label:"paired",value:"paired",colors:["#a6cee3","#1f78b4","#b2df8a","#33a02c","#fb9a99","#e31a1c","#fdbf6f","#ff7f00","#cab2d6","#6a3d9a","#ffff99","#b15928"]},{label:"pastel1",value:"pastel1",colors:["#fbb4ae","#b3cde3","#ccebc5","#decbe4","#fed9a6","#ffffcc","#e5d8bd","#fddaec","#f2f2f2"]},{label:"pastel2",value:"pastel2",colors:["#b3e2cd","#fdcdac","#cbd5e8","#f4cae4","#e6f5c9","#fff2ae","#f1e2cc","#cccccc"]},{label:"set1",value:"set1",colors:["#e41a1c","#377eb8","#4daf4a","#984ea3","#ff7f00","#ffff33","#a65628","#f781bf","#999999"]},{label:"set2",value:"set2",colors:["#66c2a5","#fc8d62","#8da0cb","#e78ac3","#a6d854","#ffd92f","#e5c494","#b3b3b3"]},{label:"set3",value:"set3",colors:["#8dd3c7","#ffffb3","#bebada","#fb8072","#80b1d3","#fdb462","#b3de69","#fccde5","#d9d9d9","#bc80bd","#ccebc5","#ffed6f"]},{label:"brown_blueGreen",value:"brown_blueGreen",colors:["#543005","#8c510a","#bf812d","#dfc27d","#f6e8c3","#f5f5f5","#c7eae5","#80cdc1","#35978f","#01665e","#003c30"]},{label:"purpleRed_green",value:"purpleRed_green",colors:["#40004b","#762a83","#9970ab","#c2a5cf","#e7d4e8","#f7f7f7","#d9f0d3","#a6dba0","#5aae61","#1b7837","#00441b"]},{label:"pink_yellowGreen",value:"pink_yellowGreen",colors:["#8e0152","#c51b7d","#de77ae","#f1b6da","#fde0ef","#f7f7f7","#e6f5d0","#b8e186","#7fbc41","#4d9221","#276419"]},{label:"purple_orange",value:"purple_orange",colors:["#2d004b","#542788","#8073ac","#b2abd2","#d8daeb","#f7f7f7","#fee0b6","#fdb863","#e08214","#b35806","#7f3b08"]},{label:"red_blue",value:"red_blue",colors:["#67001f","#b2182b","#d6604d","#f4a582","#fddbc7","#f7f7f7","#d1e5f0","#92c5de","#4393c3","#2166ac","#053061"]},{label:"regagro",value:"red_grey",colors:["#67001f","#b2182b","#d6604d","#f4a582","#fddbc7","#ffffff","#e0e0e0","#bababa","#878787","#4d4d4d","#1a1a1a"]},{label:"red_yellow_blue",value:"red_yellow_blue",colors:["#a50026","#d73027","#f46d43","#fdae61","#fee090","#ffffbf","#e0f3f8","#abd9e9","#74add1","#4575b4","#313695"]},{label:"red_yellow_green",value:"red_yellow_green",colors:["#a50026","#d73027","#f46d43","#fdae61","#fee08b","#ffffbf","#d9ef8b","#a6d96a","#66bd63","#1a9850","#006837"]},{label:"spectral",value:"spectral",colors:["#9e0142","#d53e4f","#f46d43","#fdae61","#fee08b","#ffffbf","#e6f598","#abdda4","#66c2a5","#3288bd","#5e4fa2"]},{label:"blues",value:"blues",colors:["#f7fbff","#deebf7","#c6dbef","#9ecae1","#6baed6","#4292c6","#2171b5","#08519c","#08306b"]},{label:"greens",value:"greens",colors:["#f7fcf5","#e5f5e0","#c7e9c0","#a1d99b","#74c476","#41ab5d","#238b45","#006d2c","#00441b"]},{label:"greys",value:"greys",colors:["#ffffff","#f0f0f0","#d9d9d9","#bdbdbd","#969696","#737373","#525252","#252525","#000000"]},{label:"oranges",value:"oranges",colors:["#fff5eb","#fee6ce","#fdd0a2","#fdae6b","#fd8d3c","#f16913","#d94801","#a63603","#7f2704"]},{label:"purples",value:"purples",colors:["#fcfbfd","#efedf5","#dadaeb","#bcbddc","#9e9ac8","#807dba","#6a51a3","#54278f","#3f007d"]},{label:"reds",value:"reds",colors:["#fff5f0","#fee0d2","#fcbba1","#fc9272","#fb6a4a","#ef3b2c","#cb181d","#a50f15","#67000d"]},{label:"blue_green",value:"blue_green",colors:["#f7fcfd","#e5f5f9","#ccece6","#99d8c9","#66c2a4","#41ae76","#238b45","#006d2c","#00441b"]},{label:"blue_purple",value:"blue_purple",colors:["#f7fcfd","#e0ecf4","#bfd3e6","#9ebcda","#8c96c6","#8c6bb1","#88419d","#810f7c","#4d004b"]},{label:"green_blue",value:"green_blue",colors:["#f7fcf0","#e0f3db","#ccebc5","#a8ddb5","#7bccc4","#4eb3d3","#2b8cbe","#0868ac","#084081"]},{label:"orange_red",value:"orange_red",colors:["#fff7ec","#fee8c8","#fdd49e","#fdbb84","#fc8d59","#ef6548","#d7301f","#b30000","#7f0000"]},{label:"purple_blue_green",value:"purple_blue_green",colors:["#fff7fb","#ece2f0","#d0d1e6","#a6bddb","#67a9cf","#3690c0","#02818a","#016c59","#014636"]},{label:"purple_blue",value:"purple_blue",colors:["#fff7fb","#ece7f2","#d0d1e6","#a6bddb","#74a9cf","#3690c0","#0570b0","#045a8d","#023858"]},{label:"purple_red",value:"purple_red",colors:["#f7f4f9","#e7e1ef","#d4b9da","#c994c7","#df65b0","#e7298a","#ce1256","#980043","#67001f"]},{label:"red_purple",value:"red_purple",colors:["#fff7f3","#fde0dd","#fcc5c0","#fa9fb5","#f768a1","#dd3497","#ae017e","#7a0177","#49006a"]},{label:"yellow_green_blue",value:"yellow_green_blue",colors:["#ffffd9","#edf8b1","#c7e9b4","#7fcdbb","#41b6c4","#1d91c0","#225ea8","#253494","#081d58"]},{label:"yellow_green",value:"yellow_green",colors:["#ffffe5","#f7fcb9","#d9f0a3","#addd8e","#78c679","#41ab5d","#238443","#006837","#004529"]},{label:"yellow_orange_brown",value:"yellow_orange_brown",colors:["#ffffe5","#fff7bc","#fee391","#fec44f","#fe9929","#ec7014","#cc4c02","#993404","#662506"]},{label:"yellow_orange_red",value:"yellow_orange_red",colors:["#ffffcc","#ffeda0","#fed976","#feb24c","#fd8d3c","#fc4e2a","#e31a1c","#bd0026","#800026"]},{label:"Milk",value:"milk",colors:["#797979","#042D5B","#536DFE","#7C4DFF","#AA8D52","#448AFF","#A52A2A","#FF6347","#EE82EE","#BDB76B"]},{label:"Milk2",value:"milk2",colors:["#004B9C","#6F2700","#FF6600","#005800"]}]}}]);