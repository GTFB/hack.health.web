(self.webpackChunk=self.webpackChunk||[]).push([[7983],{37983:(e,t,n)=>{"use strict";n.r(t),n.d(t,{default:()=>f});var r=n(92137),a=n(34699),o=n(87757),i=n.n(o),u=n(67294),l=n(9669),c=n.n(l),s=n(14494),p=n(40747),d=u.lazy((function(){return Promise.all([n.e(1902),n.e(9521),n.e(5034),n.e(7333),n.e(2769),n.e(9199)]).then(n.bind(n,79199))}));const f=function(e){var t=e.settings,n=e.id,o=(0,u.useState)(!1),l=(0,a.Z)(o,2),f=l[0],g=l[1],v=(0,u.useState)({}),y=(0,a.Z)(v,2),m=y[0],b=y[1],h=t.editable,k=t.canvas,x=t.zoom,C=t.lat,D=t.lng,B=t.latDs,w=t.lngDs,P=t.centerByDatasource,F=void 0!==P&&P,N=t.style_height,S=void 0===N?{}:N,Z=t.style_margin,z=void 0===Z?{}:Z,E=t.objects,K=void 0===E?{}:E,M=t.url,O=t.field_id,j=t.url_connect,L=void 0===j?null:j,A=t.field_first_connect,G=void 0===A?null:A,H=t.field_second_connect,J=void 0===H?null:H,I=t.onlyDatasource,R=void 0!==I&&I,T=t.parameters,q=C,Q=D,U=(0,s.v9)((function(e){return e.currentDataStorage.data}));F&&(q=(0,p.getDataByPath)(B,50.7496449),Q=(0,p.getDataByPath)(w,86.1250068));var V=(0,u.useMemo)((0,r.Z)(i().mark((function e(){var t,n;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,c().get(M);case 2:return t=e.sent,n=t.data.data.map((function(e){var t=_.get(e,"id"),n=JSON.parse(_.get(e,O));return n.dbID=t,n})),e.abrupt("return",n);case 5:case"end":return e.stop()}}),e)}))),[M,O]),W=(0,u.useMemo)((function(){if(_.keys(K).length>0)return K.map((function(e){var t,n=(0,p.getDataByPath)(e.path,[]);return Array.isArray(n)?n.map((function(t){var n;return{type:"Feature",geometry:{type:"Point",coordinates:[Number(_.get(t,e.latitude)),Number(_.get(t,e.longitude))]},id:t.id,inCluster:(null==e?void 0:e.useCluster)||!1,properties:{fillOpacity:1,icon:e.icon||"GoogleMarker",tooltip:e.tooltipByKeyboard?e.tooltip:_.get(t,e.tooltip)||"",popup:e.popupByKeyboard?e.popup:_.get(t,e.popup)||"",fillColor:(null===(n=e.color)||void 0===n?void 0:n.colorPickedHex)||"#3388ff"}}})):{type:"Feature",geometry:{type:"Point",coordinates:[Number(_.get(n,e.latitude)),Number(_.get(n,e.longitude))]},id:n.id,inCluster:(null==e?void 0:e.useCluster)||!1,properties:{fillOpacity:1,icon:e.icon||"GoogleMarker",tooltip:e.tooltipByKeyboard?e.tooltip:_.get(n,e.tooltip)||"",popup:e.popupByKeyboard?e.popup:_.get(n,e.popup)||"",fillColor:(null===(t=e.color)||void 0===t?void 0:t.colorPickedHex)||"#3388ff"}}})).flat()}),[K,U]),X=(0,u.useCallback)(function(){var e=(0,r.Z)(i().mark((function e(t,n){var r,a,o,u;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!R){e.next=6;break}b({type:"FeatureCollection",features:n}),g(!1),e.next=19;break;case 6:return e.prev=6,g(!0),e.next=10,c()("/ajax/maps/".concat(t));case 10:200===(r=e.sent).status&&(a=_.cloneDeep(r.data),o=[],u=a.features,_.keys(n).length>0&&(o=u.concat(n)),r.data.features=o.length>0?o:u,b(r.data),g(!1)),e.next=19;break;case 14:e.prev=14,e.t0=e.catch(6),b({type:"FeatureCollection",features:n}),g(!1);case 19:case"end":return e.stop()}}),e,null,[[6,14]])})));return function(t,n){return e.apply(this,arguments)}}(),[n]),Y=(0,u.useCallback)(function(){var e=(0,r.Z)(i().mark((function e(t,n){var r,a,o;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(null===M){e.next=17;break}return e.prev=1,g(!0),e.next=5,t;case 5:r=e.sent,a=n,o=(o=r).concat(a).filter((function(e){return void 0!==e})),b({type:"FeatureCollection",features:o}),g(!1),e.next=15;break;case 13:e.prev=13,e.t0=e.catch(1);case 15:e.next=18;break;case 17:return e.abrupt("return",!1);case 18:case"end":return e.stop()}}),e,null,[[1,13]])})));return function(t,n){return e.apply(this,arguments)}}(),[M]);return(0,u.useEffect)((function(){void 0!==M&&""!=M&&null!==M?Y(V,W):X(n,W)}),[n,W]),u.createElement(u.Suspense,{fallback:"Loading"},u.createElement(d,{data:m,saveData:function(e){R||null==M&&c().post("/ajax/maps/".concat(n),{data:JSON.stringify({type:"FeatureCollection",features:e.features.filter((function(e){return void 0!==e.id}))})})},isLoading:f,id:n,url_connect:L,field_first_connect:G,field_second_connect:J,style:{height:S.size+S.unit,marginTop:z.top+z.unit,marginBottom:z.bottom+z.unit,marginLeft:z.left+z.unit,marginRight:z.right+z.unit},isEditable:h,preferCanvas:k,zoom:+x,url:M,field_id:O,center:[q||50.7496449,Q||86.1250068],parameters:T}))}}}]);