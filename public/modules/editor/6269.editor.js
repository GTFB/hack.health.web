(self.webpackChunk=self.webpackChunk||[]).push([[6269],{56269:(e,o,t)=>{"use strict";t.r(o),t.d(o,{default:()=>G});var l=t(87329),i=t(96156),a=t(67294),r=t(86817),n=t(14494),d=t(30381),u=t.n(d),c=t(34699),s=t(87757),v=t.n(s),h=t(96486),k=t.n(h),m=t(65056),g=t(5367),p=t(23233),b=t(58965),y=t(10895),f=t(22683),x=k().find(p.Z,{value:"regagro"}).colors,M=k().find(p.Z,{value:"milk"}).colors,C=k().find(p.Z,{value:"milk2"}).colors,S=f.Z;const w=function(e){var o=e.widget,t=e.width,l=void 0===t?300:t,r=e.height,n=void 0===r?450:r,d=e.margin,u=e.dataSource,s=void 0===u?[]:u,h=e.groupMode,p=void 0===h?"stacked":h,f=e.layout,w=void 0===f?"vertical":f,D=e.colorScheme,L=void 0===D?"regagro":D,Z=e.reverse,P=void 0!==Z&&Z,R=e.enableLabel,Y=void 0!==R&&R,G=e.padding,_=void 0===G?.1:G,E=e.innerPadding,V=void 0===E?0:E,A=e.borderRadius,W=void 0===A?0:A,z=e.borderWidth,B=void 0===z?0:z,T=e.sort,I=void 0===T?"":T,O=e.tickRotation,X=void 0===O?0:O,q=(e.bottomAxis,e.enableGridX),N=void 0===q||q,H=e.enableGridY,F=void 0===H||H,j=e.customColorSchemeChecker,$=void 0!==j&&j,J=e.customColors,K=void 0===J?[]:J,Q=(e.yScaleMax,e.widgetID),U=e.useCustomTooltips,ee=(0,a.useState)(!1),oe=(0,c.Z)(ee,2),te=oe[0],le=oe[1],ie=(0,a.useState)([]),ae=(0,c.Z)(ie,2),re=ae[0],ne=ae[1],de=(0,a.useCallback)((function(){return e=void 0,t=void 0,l=void 0,a=v().mark((function e(){var t,l;return v().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(le(!0),0!=s.length){e.next=8;break}return e.next=4,(0,y.O)(o.source,o.filter);case 4:200===(t=e.sent).status&&(l=t.data.data.map((function(e,o){var t;return t={},(0,i.Z)(t,e.key,Number(e.data)),(0,i.Z)(t,"key",e.key),(0,i.Z)(t,"value",Number(e.data)),t})),ne(l||[]),le(!1)),e.next=20;break;case 8:if(null==I||void 0===s){e.next=18;break}e.t0=I,e.next="value"===e.t0?12:"key"===e.t0?14:16;break;case 12:return s=k().sortBy(s,["value"]),e.abrupt("break",18);case 14:return s=k().sortBy(s,["key"]),e.abrupt("break",18);case 16:return s=s,e.abrupt("break",18);case 18:ne(s||[]),le(!1);case 20:case"end":return e.stop()}}),e)})),new(l||(l=Promise))((function(o,i){function r(e){try{d(a.next(e))}catch(e){i(e)}}function n(e){try{d(a.throw(e))}catch(e){i(e)}}function d(e){var t;e.done?o(e.value):(t=e.value,t instanceof l?t:new l((function(e){e(t)}))).then(r,n)}d((a=a.apply(e,t||[])).next())}));var e,t,l,a}),[o]);return(0,a.useEffect)((function(){de()}),[re]),te?a.createElement(m.Z,null):0===re.length?a.createElement(g.Z,null):a.createElement(a.Fragment,null,a.createElement("div",{style:{height:"".concat(n),width:"".concat(l)}},a.createElement(b.jM,{data:re,margin:{top:(null==d?void 0:d.top)||30,right:(null==d?void 0:d.right)||30,bottom:(null==d?void 0:d.bottom)||30,left:(null==d?void 0:d.left)||30},indexBy:"key",colors:$&&K.length>0?K:"regagro"===L?x:"milk"===L?M:"milk2"===L?C:{scheme:L},layout:w,tooltip:function(e){return a.createElement(S,{enable:U,datum:e,widgetID:Q})},enableGridX:N,enableGridY:F,enableLabel:Y,reverse:P,groupMode:p,padding:_,innerPadding:V,borderRadius:W,borderWidth:B,axisBottom:{tickSize:5,tickPadding:5,tickRotation:X,legendOffset:32}})))};var D=t(78478),L=t(26568),Z=t(53723),P=t(57167),R=t(64367),Y=t(35713);t(47249);const G=(0,n.$j)((function(e){return{currentDataStorage:e.currentDataStorage}}))((function(e){var o,t,d,c,s,v,h,m,g,b,y,f,x,M,C,S,G,_,E,V,A,W,z=e.settings,B=e.id,T=(0,n.I0)(),I=null==z?void 0:z.margin,O=(null==z?void 0:z.widget_name)||B,X=null==z?void 0:z.isCustomColor,q=null==z||null===(o=z.customScheme)||void 0===o?void 0:o.map((function(e){return k().get(e,"color.colorPickedHex")})),N=null==z?void 0:z.yScaleMax,H=null==z?void 0:z.axisY,F=null==z||null===(t=z.repTooltips)||void 0===t?void 0:t.map((function(e){var o;return{label:k().get(e,"label"),field:k().get(e,"value"),color:null===(o=k().get(e,"color"))||void 0===o?void 0:o.colorPickedHex}})),j=null==z?void 0:z.customTooltip,$=(null==H?void 0:H.map((function(e){var o=(0,Y.getDataByPath)(e.yMarkerValue);return{axis:"y",value:Number(null!==o?o:e.yMarkerValue),lineStyle:{stroke:null!=e.yMarkerColor?e.yMarkerColor.colorPickedHex:"#000000",strokeWidth:e.yMarkerWidth},textStyle:{fill:null!=e.yMarkerLabelColor?e.yMarkerLabelColor.colorPickedHex:"#000000"},legend:e.yMarkerLabel,legendOrientation:e.yMarkerOrientation}})))||[],J=null==z?void 0:z.axisX,K=(null==J?void 0:J.map((function(e){var o=(0,Y.getDataByPath)(e.xMarkerValue);return{axis:"x",value:null!==o?o:e.xMarkerIsDate?u()(e.xMarkerValue).format("DD.MM.YYYY"):e.xMarkerValue,lineStyle:{stroke:null!=e.xMarkerColor?e.xMarkerColor.colorPickedHex:"#000000",strokeWidth:e.xMarkerWidth},textStyle:{fill:null!=e.xMarkerLabelColor?e.xMarkerLabelColor.colorPickedHex:"#000000"},legend:e.xMarkerLabel,legendOrientation:e.xMarkerOrientation}})))||[],Q=[];K.length>0&&(Q.push(K),Q=Q.flat()),$.length>0&&(Q.push($),Q=Q.flat());var U,ee,oe=null===(d=z.query)||void 0===d||null===(c=d.dataSource)||void 0===c?void 0:c.value,te=z.isMultiple,le=z.isCustomColors,ie=z.key_is_date,ae=null==z?void 0:z.sort,re=null==z?void 0:z.tickRotation,ne=null==z?void 0:z.bottomAxis,de=null==z?void 0:z.enableGridX,ue=null==z?void 0:z.enableGridY,ce=(null==z?void 0:z.xScaleType)||"point",se=(null==z?void 0:z.precision)||"month",ve=(null==z?void 0:z.curve)||"line",he=null==z?void 0:z.lineWidth,ke=null==z?void 0:z.colorScheme,me=null==z?void 0:z.enableArea,ge=null==z?void 0:z.enablePoints,pe=null==z?void 0:z.pointSize,be=null==z?void 0:z.pointColor,ye=null==z?void 0:z.yMarker,fe=null==z?void 0:z.yMarkerValue,xe=null==z?void 0:z.yMarkerOrientation,Me=null==z?void 0:z.yMarkerColor,Ce=null==z?void 0:z.yMarkerWidth,Se=null==z?void 0:z.yMarkerLabel,we=null==z?void 0:z.yMarkerLabelColor,De=null==z?void 0:z.xMarker,Le=ie?u()(null==z?void 0:z.xMarkerValueDate).toDate():null==z?void 0:z.xMarkerValue,Ze=null==z?void 0:z.xMarkerOrientation,Pe=null==z?void 0:z.xMarkerColor,Re=null==z?void 0:z.xMarkerWidth,Ye=null==z?void 0:z.xMarkerLabel,Ge=null==z?void 0:z.xMarkerLabelColor,_e=null==z?void 0:z.layout,Ee=null==z?void 0:z.groupMode,Ve=null==z?void 0:z.reverse,Ae=null==z?void 0:z.borderRadius,We=null==z?void 0:z.borderWidth,ze=null==z?void 0:z.enableLabel,Be=null==z?void 0:z.padding,Te=null==z?void 0:z.innerRadius,Ie=null==z?void 0:z.enableSliceLabels,Oe=null==z?void 0:z.padAngle,Xe=null==z?void 0:z.cornerRadius,qe=null==z?void 0:z.sortByValue,Ne=null==z?void 0:z.enableRadialLabels,He=[],Fe=function(e,o){return e.map((function(e,t){var l=k().get(e,o.key),a=u()(l).isValid()?u()(l).format("DD.MM.YYYY"):l,r=void 0!==F?null==F?void 0:F.map((function(o){return{label:null==o?void 0:o.label,value:k().get(e,o.field),color:null==o?void 0:o.color}})):[];switch(z.type){case R.fq:case R.Fe:case R.e_:return{y:Number(k().get(e,o.data)),x:ie?a:l,tooltip:r};case R.u3:var n,d=ie?a:l;return n={},(0,i.Z)(n,d,Number(k().get(e,o.data))),(0,i.Z)(n,"key",d),(0,i.Z)(n,"value",Number(k().get(e,o.data))),(0,i.Z)(n,"tooltip",r),n;case R.en:return{value:Number(k().get(e,o.data)),id:ie?a:l,tooltip:r}}}))},je=[],$e=le?q:k().find(p.Z,{value:null==z?void 0:z.colorScheme}).colors,Je=$e.length;if(te)He=k().cloneDeep(z.rep,[]).map((function(e,o){var t=(0,Y.getDataByPath)(e.path,[]);return t.length>0&&(z.type!==R.fq&&z.type!==R.en||(t=k().uniqBy(t,e.key)),t=Fe(t,e)),z.type===R.en||z.type===R.u3?t:(z.type!==R.en&&je.push({color:$e[o%Je],label:e.title||e.path}),{id:e.title||e.path,data:t})})),(z.type===R.en||z.type===R.u3)&&(He=(U=[]).concat.apply(U,(0,l.Z)(He)),je=null===(ee=He)||void 0===ee?void 0:ee.map((function(e,o){return{color:z.type===R.u3?$e[0]:$e[o%Je],label:e.id||e.key}})));else if(null!=z.datasource_path)try{He=(0,Y.getDataByPath)(z.datasource_path,[]),z.type===R.fq&&(He=k().uniqBy(He,z.key_name));var Ke,Qe={key:z.key_name,data:z.data_name};z.type===R.en||z.type===R.u3?(He=Fe(He,Qe),je=null===(Ke=He)||void 0===Ke?void 0:Ke.map((function(e,o){return{color:z.type===R.u3?$e[0]:$e[o%Je],label:e.id||e.key}}))):(je.push({color:$e[0],label:z.datasource_title||z.datasource_path}),He=[{id:z.datasource_title||z.datasource_path,data:Fe(He,Qe)}])}catch(e){console.log("===================================="),console.log(e),console.log("===================================="),He=[{id:z.datasource_title||z.datasource_path,data:[]}]}if(le)var Ue=k().cloneDeep(z.repcolor,[]).map((function(e){return e.color.colorPickedHex}));if(!oe&&0===He.length)return a.createElement("div",{className:"altrp-chart ".concat(z.legendPosition)},"Идет загрузка данных...");var eo={source:oe+function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";if(!e)return"";var o=e.split("\n"),t=o.map((function(e){return e.replace("|","=")})).join("&");return"?".concat(t)}(null===(s=z.query)||void 0===s?void 0:s.defaultParams),options:{colorScheme:z.colorScheme,legend:z.legend,animated:z.animated,isVertical:z.isVertical},filter:{}};switch((0,a.useEffect)((function(){je.length>0&&function(e){T((0,r.Xe)(O,{legend:e}))}(je)}),[je]),console.log("===================================="),console.log(He),console.log("===================================="),z.type){case R.fq:return a.createElement(L.Z,{widgetID:B,margin:I,useCustomTooltips:j,yScaleMax:N,customColorSchemeChecker:X,customColors:q,widget:eo,dataSource:He,keyIsDate:ie,xScaleType:ce,precision:se,curve:ve,colorScheme:ke,enableArea:me,enablePoints:ge,lineWidth:he,pointColor:be,pointSize:pe,yMarker:ye,width:"".concat(null===(v=z.width)||void 0===v?void 0:v.size).concat(null===(h=z.width)||void 0===h?void 0:h.unit),height:"".concat(null===(m=z.height)||void 0===m?void 0:m.size).concat(null===(g=z.height)||void 0===g?void 0:g.unit),yMarkerValue:fe,yMarkerOrientation:xe,yMarkerColor:Me,yMarkerWidth:Ce,yMarkerLabel:Se,xMarker:De,xMarkerValue:Le,xMarkerOrientation:Ze,xMarkerColor:Pe,xMarkerWidth:Re,xMarkerLabel:Ye,yMarkerLabelColor:we,xMarkerLabelColor:Ge,constantsAxises:Q,sort:ae,tickRotation:re,bottomAxis:ne,enableGridX:de,enableGridY:ue});case R.e_:return a.createElement(P.Z,{widgetID:B,margin:I,useCustomTooltips:j,yScaleMax:N,customColorSchemeChecker:X,customColors:q,dataSource:He,constantsAxises:Q,colorScheme:ke,width:"".concat(null===(b=z.width)||void 0===b?void 0:b.size).concat(null===(y=z.width)||void 0===y?void 0:y.unit),height:"".concat(null===(f=z.height)||void 0===f?void 0:f.size).concat(null===(x=z.height)||void 0===x?void 0:x.unit),widget:eo,nodeSize:pe,xScaleType:ce,precision:se,sort:ae,tickRotation:re,bottomAxis:ne,enableGridX:de,enableGridY:ue});case R.u3:return a.createElement(w,{widgetID:B,margin:I,useCustomTooltips:j,yScaleMax:N,customColorSchemeChecker:X,customColors:q,isMultiple:te,colorScheme:ke,dataSource:He,widget:eo,enableLabel:ze,width:"".concat(null===(M=z.width)||void 0===M?void 0:M.size).concat(null===(C=z.width)||void 0===C?void 0:C.unit),height:"".concat(null===(S=z.height)||void 0===S?void 0:S.size).concat(null===(G=z.height)||void 0===G?void 0:G.unit),layout:_e,groupMode:Ee,reverse:Ve,borderRadius:Ae,borderWidth:We,padding:Be,sort:ae,tickRotation:re,bottomAxis:ne,enableGridX:de,enableGridY:ue});case R.en:return a.createElement(D.Z,{widgetID:B,margin:I,useCustomTooltips:j,yScaleMax:N,customColorSchemeChecker:X,customColors:q,isMultiple:te,dataSource:He,colorScheme:ke,widget:eo,width:"".concat(null===(_=z.width)||void 0===_?void 0:_.size).concat(null===(E=z.width)||void 0===E?void 0:E.unit),height:"".concat(null===(V=z.height)||void 0===V?void 0:V.size).concat(null===(A=z.height)||void 0===A?void 0:A.unit),innerRadius:Te,enableSliceLabels:Ie,padAngle:Oe,cornerRadius:Xe,sortByValue:qe,enableRadialLabels:Ne,sort:ae,tickRotation:re,bottomAxis:ne,enableGridX:de,enableGridY:ue});case R.Fe:return a.createElement(Z.Z,{widgetID:B,useCustomTooltips:j,isCustomColor:le,colorArray:Ue,isMultiple:te,dataSource:He,widget:eo,width:null===(W=z.width)||void 0===W?void 0:W.size,sort:ae,tickRotation:re,bottomAxis:ne,enableGridX:de,enableGridY:ue});default:return a.createElement(a.Fragment,null)}}))}}]);
//# sourceMappingURL=6269.editor.js.map