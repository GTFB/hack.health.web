(self.webpackChunk=self.webpackChunk||[]).push([[7902],{27902:(e,t,n)=>{"use strict";n.r(t),n.d(t,{default:()=>me,settingsToColumns:()=>ue});var r,a=n(81253),l=n(96156),o=n(22122),c=n(87329),i=n(92137),s=n(34699),u=n(87757),d=n.n(u),p=n(7145),m=n.n(p),g=n(35713),f=n(73727),v=n(38844),b=n(79521),h=n(47746),w=n(4916),y=n(1987),E=n(90233),x=n(67294),O=n(81352),P=n(85009),R=n(71743),S=n(95899),j=n(66809),k=n(32465),N=n(71893);const Z=N.ZP.div(r||(r=(0,k.Z)([""])));var C,I=n(32360);const T=N.ZP.div(C||(C=(0,k.Z)(["",""])),(function(e){var t=e.settings,n=e.column;if(!t.table_transpose)return"";var r=n.column_cell_vertical_alignment,a=n.header_full_width,l=n.header_bg,o=(0,g.getResponsiveSetting)(t,"table_style_main_width"),c=(0,g.getResponsiveSetting)(t,"table_style_other_width"),i="&.altrp-table-th.altrp-table-cell{",s=(0,g.getResponsiveSetting)(t,"cell_vertical_alignment");return s=(0,I.EX)(s),r&&(s=(0,I.EX)(r)),s&&(i+="\n    display: flex;\n    align-items: ".concat(s,";\n    > span{\n      display: block;\n      width: 100%;\n    }\n    ")),l&&(i+="background-color:".concat(l.color,";")),a&&(i+="\n      grid-column-start: 1;\n      grid-column-end: ".concat(n.filteredRows.length+2,";\n      width: calc(").concat(_.get(o,"size")+(_.get(o,"unit")||"px")," + (").concat(_.get(c,"size")+(_.get(c,"unit")||"px"),") * ").concat(n.filteredRows.length,")\n    ")),(i+="\n      width: ".concat(_.get(o,"size")+(_.get(o,"unit")||"px"),"\n    "))+"}"}));var M,z=n(74061),F=n(18035),D=n(27034);const A=N.ZP.div(M||(M=(0,k.Z)(["",""])),(function(e){var t=e.settings,n=e.column;if(!t.table_transpose)return"";var r=n.column_cell_vertical_alignment,a=n.body_bg,l=n.header_full_width,o=(0,g.getResponsiveSetting)(t,"table_style_other_width"),c=(0,g.getResponsiveSetting)(t,"cell_vertical_alignment");c=(0,I.EX)(c),r&&(c=(0,I.EX)(r));var i="&.altrp-table-td.altrp-table-cell{";return c&&(i+="\n    display: flex;\n    align-items: ".concat(c,";\n    .altrp-table-td__default-content{\n      display: block;\n      width: 100%;\n    }\n    ")),l?"&.altrp-table-td{display:none;}":(a&&(i+="background-color:".concat(a.color,";")),i+="\n  width: ".concat(_.get(o,"size")+(_.get(o,"unit")||"px"),";\n  "),i+="}")}));function B(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}const L=function(e){var t=e.cell,n=e.settings,r=t.row,a=t.column,c=n.resize_columns,i=n.replace_rows,s=n.virtualized_rows,u=n.hide_expanded_row_icon,d=n.expanded_row_icon,p=n.hide_not_expanded_row_icon,m=n.not_expanded_row_icon,f=t.render("Cell");"##"===t.column.id&&(f=t.row.index+1),t.isGrouped?f=React.createElement(React.Fragment,null,React.createElement("span",r.getToggleRowExpandedProps(),r.isExpanded?(0,g.renderIcon)(u,d,"👇","expanded-row"):(0,g.renderIcon)(p,m,"👉","not-expanded-row"))," ",t.render("Cell")," (",(0,g.recurseCount)(r,"subRows"),")"):t.isAggregated?f=t.render("Aggregated"):t.isPlaceholder&&(f=t.render("Cell"));var v=["altrp-table-td","altrp-table-cell"];t.isAggregated&&v.push("altrp-table-td_aggregated"),t.isPlaceholder&&v.push("altrp-table-td_placeholder"),t.isGrouped&&v.push("altrp-table-td_grouped");var b=React.useMemo((function(){var e=t.getCellProps();if(c||s||delete e.style,_.get(t,"column.column_styles_field")){var n=_.get(t,"column.column_styles_field");n=_.get(r.original,n,""),n=(0,g.mbParseJSON)(n,{}),e.style=_.assign(function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?B(Object(n),!0).forEach((function(t){(0,l.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):B(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({},n),e.style)}return e}),[c,i,s,t.getCellProps().style.width,_.get(t,"column.column_styles_field")]);n.table_hover_row||v.join("altrp-table-background");var h=t.column.column_body_alignment?{textAlign:t.column.column_body_alignment}:{};return h=_.assign(h,b.style||{}),t.column.column_cell_vertical_alignment&&"inherit"!==t.column.column_cell_vertical_alignment&&(h.verticalAlign=t.column.column_cell_vertical_alignment),React.createElement(A,(0,o.Z)({},b,{settings:n,column:a,style:h,className:v.join(" ")}),f)};function G(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function H(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?G(Object(n),!0).forEach((function(t){(0,l.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):G(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}const W=function(e){var t=e.row,n=e.index,r=e.moveRow,a=e.style,l=e.visibleColumns,c=e.cardTemplate,i=e.settings,u=React.useRef(null),d=React.useRef(null),p=H({},t.getRowProps());delete p.role,delete p.style;var m=null,g=i.resize_columns,f=i.replace_rows,_=i.row_expand,v=i.virtualized_rows,b=i.card_template,h=i.replace_text,w=i.replace_image,y=i.replace_width;if(c){var E=P.default.cloneElement(c);E.setCardModel(new R.Z(t.original||{})),m=React.createElement(E.componentClass,{element:E,ElementWrapper:S.default,children:E.children})}var x=React.useMemo((function(){var e=t.getRowProps();return g||v||(delete e.style,a={}),f&&(e.ref=u),e}),[g,f,v]),O=(0,F.L)({accept:"row",hover:function(e,t){if(u.current){var a=e.index,l=n;if(a!==l){var o=u.current.getBoundingClientRect(),c=(o.bottom-o.top)/2,i=t.getClientOffset().y-o.top;a<l&&i<c||a>l&&i>c||(r(a,l),e.index=l)}}}}),j=(0,s.Z)(O,2)[1],k=(0,D.c)({item:{type:"row",index:n},collect:function(e){return{isDragging:e.isDragging()}}}),N=(0,s.Z)(k,3),Z=N[0].isDragging,C=N[1],I=Z?0:1;(0,N[2])(j(u)),C(d);var T=React.useMemo((function(){return g||v?a:{}}),[g,v,t.getRowProps().style.width]);return React.createElement(React.Fragment,p,React.createElement("div",(0,o.Z)({},x,{className:"altrp-table-tr ".concat(Z?"altrp-table-tr__dragging":""),style:H(H({},T),{},{opacity:I})}),f&&React.createElement("div",{className:"altrp-table-td replace-text",ref:d,style:{width:y}},h,w&&w.url&&React.createElement("img",{src:w.url,className:"replace-picture"})),t.cells.map((function(e,t){return React.createElement(L,{cell:e,key:t,settings:i})}))),t.isExpanded&&_&&b&&c&&React.createElement("div",{className:"altrp-table-tr altrp-posts"},React.createElement("td",{colSpan:l.length+f,className:"altrp-table-td altrp-post"},m)))};var V;const q=N.ZP.div(V||(V=(0,k.Z)(["\n",""])),(function(e){var t,n=e.settings,r=e.groupIndex,a=(0,g.getResponsiveSetting)(n,"tables_groups"),l=(0,g.getResponsiveSetting)(n,"tables_settings_for_subheading"),o=_.get(l,r-1,{}).transition;if(!_.isArray(a)||!r)return"";if(!(t=r>a.length?a[a.length-1]:a[r-1]))return"";if(!_.isObject(t))return"";var c=t,i=c.cell_alignment,s=c.padding,u=c.color,d=c.bg_color,p=c.typographic,m="&.altrp-table-tr .altrp-table-td{";null!=o&&o.size&&(m+="transition-duration: ".concat(o.size,"s;")),_.isObject(s)&&(m+=(0,I.WC)(s)),_.isObject(p)&&(m+=(0,I.Ej)(p)),i&&(m+="text-align: ".concat(i,";")),null!=u&&u.color&&(m+="color: ".concat(u.color,";")),null!=d&&d.color&&(m+="background-color: ".concat(d.color,";")),m+="}&.altrp-table-tr .altrp-table-td:hover{";var f=t["cell_alignment_:hover_"],v=t["padding_:hover_"],b=t["color_:hover_"],h=t["bg_color_:hover_"],w=t["typographic_:hover_"];return _.isObject(v)&&(m+=(0,I.WC)(v)),_.isObject(w)&&(m+=(0,I.Ej)(w)),f&&(m+="text-align: ".concat(f,";")),null!=b&&b.color&&(m+="color: ".concat(b.color,";")),null!=h&&h.color&&(m+="background-color: ".concat(h.color,";")),m+"}"}));function X(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}const U=function e(t){var n=t.prepareRow,r=t.rows,a=t.visibleColumns,c=t.totalColumnsWidth,i=t.moveRow,u=t.settings,d=t.cardTemplate,p=t.groupIndex,m=t.page,f=x.useMemo((function(){return(0,g.scrollbarWidth)()}),[]),v=u.virtualized_rows,b=u.virtualized_height,h=u.item_size,w=u.tables_settings_for_subheading,y=(u.table_style_table_striple_style,x.useCallback((function(e){var t=e.index,l=e.style,c=m?m[t]:r[t];return n(c),x.createElement(W,(0,o.Z)({index:t,row:c,visibleColumns:a,moveRow:i,settings:u,cardTemplate:d},c.getRowProps({style:l})))}),[m,r,a,u,d,i,n])),E=x.useMemo((function(){return m?m.length:r.length}),[m,r]),O=x.useMemo((function(){var e;if(_.isEmpty(w))return null;var t,n,a=null===(e=w[p])||void 0===e?void 0:e.name;if(!a)return null;if(-1!==a.indexOf("?")&&-1!==a.indexOf(":")){var l=a.split("?")[1].split(":"),o=(0,s.Z)(l,2);t=o[0],n=o[1],t=t.trim(),n=n.trim(),cell.value=cell.value?t:n,a=a.split("?")[0].trim()}var c=[];return(m||r).forEach((function(e){var r,l=c.find((function(t){return t.columnValue===e.original[a]}));r=t||n?e.original[a]?t:n:e.original[a],l||(l={columnValue:r,rows:[]},c.push(l)),l.rows.push(e)})),c}),[w,m,r]);return _.isEmpty(O)?v?x.createElement(x.Fragment,null,x.createElement(z.t7,{height:Number(b)||0,itemCount:E,itemSize:Number(h)||0,width:c+f},y)):x.createElement(x.Fragment,null,(m||r).map((function(e,t){return n(e),x.createElement(W,(0,o.Z)({index:t,row:e,visibleColumns:a,moveRow:i,settings:u,cardTemplate:d},e.getRowProps()))}))):O.map((function(n,r){var o=function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?X(Object(n),!0).forEach((function(t){(0,l.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):X(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({},t);return o.page=n.rows,o.rows=n.rows,o.groupIndex=p+1,o.key=n.columnValue+r,x.createElement(x.Fragment,{key:o.key},x.createElement(q,{className:"altrp-table-tr altrp-table-tr_group-subheading",groupIndex:o.groupIndex,settings:u},x.createElement("td",{colSpan:a.length||1,className:"altrp-table-td",dangerouslySetInnerHTML:{__html:0===n.columnValue?"0":n.columnValue||"&nbsp;"}})),x.createElement(e,o))}))};function J(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}const $=function(e){var t=e.settings,n=t.tables_settings_for_subheading,r=t.table_style_table_striple_style,a=function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?J(Object(n),!0).forEach((function(t){(0,l.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):J(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({},e);return a.rows=x.useMemo((function(){if(_.isEmpty(n))return e.rows;var t=[],r=[];n.forEach((function(e){e.name&&(t.push(e.name),r.push(e.order||"asc"))}))}),[n]),a.groupIndex=0,x.createElement("div",(0,o.Z)({},e.getTableBodyProps(),{className:"altrp-table-tbody ".concat(r?"altrp-table-tbody--striped":"")}),x.createElement(U,a))};var K=n(49825),Q=["indeterminate","icons"];function Y(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function ee(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?Y(Object(n),!0).forEach((function(t){(0,l.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):Y(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function te(e,t,n){return e.filter((function(e){return t.some((function(t){var r=e.values[t];return n.some((function(e){return!e&&!r||(_.isString(r)||(r+=""),r.includes(e))}))}))}))}function ne(e,t,n){return t=t?t[0]:void 0,(0,E.L)(e,n,{keys:[function(e){var n=e.values[t];return"##"===t&&(n=e.index+1),n}]})}function re(e,t,n){return t=t?t[0]:void 0,e.filter((function(e){return _.get(e,"values.".concat(t))===n}))}function ae(e,t,n){return t=t?t[0]:void 0,e.filter((function(e){return n=n.replace(/\s/g,""),-1!==_.get(e,"values.".concat(t),"").replace(/\s/g,"").indexOf(n)}))}function le(e){var t=e.settings,n=e.currentScreen,r=e.widgetId,a=(e.query,e.data),u=(e.currentModel,e._status),p=(e._error,e.setSortSettings,e.setFilterSettings,e.filterSetting,e._latestData,e.widgetState);function h(e){var t=e.row,n=e.data,r=e.cell,a=e.value,l=e.updateData,o=r.column,c=x.useState(a),u=(0,s.Z)(c,2),p=u[0],m=u[1];x.useEffect((function(){m(a)}),[a,r]);var b,h,w=o.column_template,y=o.column_is_editable,E=o.column_edit_url,k=o.column_external_link,N=o.column_blank_link,Z=o.edit_disabled,C=o.column_cell_content_type,I=o._accessor;if((I=(I=I||"").trim())&&-1!==I.indexOf("?")&&-1!==I.indexOf(":")){var T=I.split("?")[1].split(":"),M=(0,s.Z)(T,2);b=M[0],h=M[1],b=b.trim(),h=h.trim(),r.value=r.value?b:h}0===I.indexOf('"')&&'"'===I[I.length-1]&&(r.value=I.substring(1,I.length-1));var z=x.useState(null),F=(0,s.Z)(z,2),D=F[0],A=F[1],B=x.useMemo((function(){return y&&E?(0,g.parseURLTemplate)(E,t.original):null}),[E,y,t]);x.useEffect((function(){w&&(0,i.Z)(d().mark((function e(){var t;return d().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,O.default.loadParsedTemplate(w);case 2:t=e.sent,A(t);case 4:case"end":return e.stop()}}),e)})))()}),[w]);var L=r.value,G=(0,g.isEditor)()?"a":f.rU;switch(k&&!(0,g.isEditor)()&&(G="a"),_.isObject(r.value)&&(L=""),C){case"email":L=x.createElement("a",{href:"mailto:".concat(r.value),className:"altrp-inherit altrp-table-td__default-content",dangerouslySetInnerHTML:{__html:0===r.value?"0":r.value||"&nbsp;"}});break;case"phone":L=x.createElement("a",{href:"tel:".concat(r.value),className:"altrp-inherit altrp-table-td__default-content",dangerouslySetInnerHTML:{__html:0===r.value?"0":r.value||"&nbsp;"}});break;default:L=o.column_link?x.createElement(G,{to:(0,g.parseURLTemplate)(o.column_link,t.original),href:(0,g.parseURLTemplate)(o.column_link,t.original),target:N?"_blank":"",className:"altrp-inherit altrp-table-td__default-content",dangerouslySetInnerHTML:{__html:0===r.value?"0":r.value||"&nbsp;"}}):x.createElement("span",{href:null,className:"altrp-inherit altrp-table-td__default-content",dangerouslySetInnerHTML:{__html:0===r.value?"0":r.value||"&nbsp;"}})}var H=x.useMemo((function(){if(!D)return null;var e=P.default.cloneElement(D);return e.setCardModel(new R.Z(t.original||{})),x.createElement(e.componentClass,{element:e,ElementWrapper:S.default,children:e.children})}),[D,t.original,n]);return H?x.createElement("div",{className:"altrp-posts"},x.createElement("div",{className:"altrp-post overflow-visible"},H)):B&&!Z?x.createElement(j.Z,{className:"altrp-inherit",route:B,resourceid:"",changevalue:function(e){m(e)},onBlur:function(e){l(t.index,I,e)},value:p}):_.get(r,"column.actions.length")?(0,v.renderCellActions)(r,t):_.isString(L)?L:x.createElement(x.Fragment,null,L)}e.sortSetting;var w=x.useRef(p),E=t.inner_page_size,k=t.global_filter,N=t.card_template,C=t.row_expand,I=t.selected_storage,M=t.row_select,z=t.row_select_width,F=t.store_state,D=t.loading_text,A=t.row_select_all,B=t.hide_columns,L=t.resize_columns,G=t.table_transpose,H=t.virtualized_rows,W=t.replace_rows,V=t.tables_settings_for_subheading,q=t.replace_width,X=t.ids_storage,U=t.hide_grouped_column_icon,J=t.grouped_column_icon,Q=t.hide_not_grouped_column_icon,Y=t.not_grouped_column_icon,le=t.checkbox_checked_icon,ce=void 0===le?{}:le,ie=t.checkbox_unchecked_icon,se=void 0===ie?{}:ie,me=t.checkbox_indeterminate_icon,ge=void 0===me?{}:me,fe=x.useState(null),_e=(0,s.Z)(fe,2),ve=_e[0],be=_e[1],he=x.useState(a),we=(0,s.Z)(he,2),ye=we[0],Ee=we[1];x.useEffect((function(){Ee(a)}),[a]);var xe=x.useMemo((function(){return{fuzzyText:ne,fullMatchText:re,partialMatchText:ae,text:function(e,t,n){return t=t?t[0]:void 0,e.filter((function(e){var r=e.values[t];return"##"===t&&(r=e.index+1),void 0===r||String(r).toLowerCase().startsWith(String(n).toLowerCase())}))},between:function(e,t,n){var r=n||[],a=r[0],l=r[1];if((a="number"==typeof a?a:-1/0)>(l="number"==typeof l?l:1/0)){var o=a;a=l,l=o}return e.filter((function(e){return t.some((function(t){var n=e.values[t];return"##"===t&&(n=e.index+1),n>=a&&n<=l}))}))},equals:function(e,t,n){return e.filter((function(e){return t.some((function(t){var r=e.values[t];return"##"===t&&(r=e.index+1),r==n}))}))},includesSome:te}}),[]),Oe=x.useMemo((function(){return{Filter:oe,width:150,Cell:h}}),[]);x.useEffect((function(){a?_.isArray(a)||(a=[a]):a=[]}),[a]);var Pe=x.useMemo((function(){return ue(t,r)}),[t,r]);x.useEffect((function(){N&&C&&(0,i.Z)(d().mark((function e(){var t;return d().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,O.default.loadParsedTemplate(N);case 2:t=e.sent,be(t);case 4:case"end":return e.stop()}}),e)})))()}),[C,N]);var Re=[b.useFilters,b.useGlobalFilter,b.useGroupBy,b.useSortBy,b.useExpanded,b.usePagination,b.useRowSelect,b.useResizeColumns,b.useBlockLayout];M&&Re.push((function(e){e.visibleColumns.push((function(e){return[{id:"selection",column_width:z||0,column_name:function(e){var n=e.getToggleAllRowsSelectedProps,r=e.getToggleAllPageRowsSelectedProps;return!t.inner_page_size||t.inner_page_size<0||A?x.createElement("div",{className:"altrp-toggle-row"},x.createElement(de,(0,o.Z)({},n(),{icons:{checkedIcon:ce,uncheckedIcon:se,indeterminateIcon:ge}}))):x.createElement("div",{className:"altrp-toggle-row"},x.createElement(de,(0,o.Z)({},r(),{icons:{checkedIcon:ce,uncheckedIcon:se,indeterminateIcon:ge}})))},Cell:function(e){var t=e.row;return x.createElement("div",{className:"altrp-toggle-row"},x.createElement(de,(0,o.Z)({},t.getToggleRowSelectedProps(),{icons:{checkedIcon:ce,uncheckedIcon:se,indeterminateIcon:ge}})))}}].concat((0,c.Z)(e))}))}));var Se=x.useState(!1),je=(0,s.Z)(Se,2),ke=je[0],Ne=je[1],Ze=function(e,t,n){Ne(!0),Ee((function(r){return r.map((function(a,o){return o===e?ee(ee({},r[e]),{},(0,l.Z)({},t,n)):a}))}))},Ce=x.useCallback((function(e){return e.id}),[]),Ie=x.useMemo((function(){var e={columns:Pe,data:ye,filterTypes:xe,autoResetPage:!ke,defaultColumn:Oe,updateData:Ze};if(W&&(e.getRowId=Ce),(0,g.isEditor)()&&(e.initialState=E>=1?{pageSize:Number(E)}:{pageSize:a.length}),_.isArray(e.data)||(_.isObject(e.data)?e.data=[e.data]:e.data=[]),!_.isEmpty(V)){var t=V.map((function(e){return{id:e.name,desc:"DESC"===e.order}}));_.set(e,"initialState.sortBy",t)}return e}),[E,a,Pe,w,ye,W,ke,V]);x.useEffect((function(){_.isObject(w.current)&&(Ie.initialState=w.current)}),[w,a]);var Te=b.useTable.apply(void 0,[Ie].concat(Re)),Me=Te.getTableProps,ze=Te.getTableBodyProps,Fe=Te.headerGroups,De=Te.prepareRow,Ae=Te.page,Be=(Te.canPreviousPage,Te.canNextPage,Te.pageOptions,Te.pageCount),Le=Te.gotoPage,Ge=Te.nextPage,He=Te.previousPage,We=Te.getToggleHideAllColumnsProps,Ve=Te.allColumns,qe=Te.rows,Xe=Te.visibleColumns,Ue=Te.preGlobalFilteredRows,Je=Te.setGlobalFilter,$e=Te.setPageSize,Ke=Te.selectedFlatRows,Qe=Te.totalColumnsWidth,Ye=Te.state,et=Ye.pageIndex,tt=Ye.globalFilter,nt=(Ye.groupBy,Ye.selectedRowIds,Ye.expanded,Ye.pageSize);function rt(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",n=[];return _.isEmpty(e)||e.forEach((function(e){e.original&&(t?n.push(_.get(e.original,t)):n.push(e.original)),e.subRows&&(n=_.concat(n,rt(e.subRows)))})),n}x.useEffect((function(){F&&(0,g.storeWidgetState)(r,Ye)})),x.useEffect((function(){$e&&(Number(E)&&!Number(E<1)||$e(a.length||10),$e(Number(E)||a.length||10))}),[E,a]);var at=x.useMemo((function(){return rt(Ke)}),[Ke]),lt=x.useMemo((function(){return rt(Ke,"id")}),[Ke]);x.useEffect((function(){!I||_.isEqual(altrpHelpers.getDataByPath(I),at)||(0,g.isEditor)()||(0,g.setDataByPath)(I,at)}),[Ke]),x.useEffect((function(){!X||_.isEqual(altrpHelpers.getDataByPath(X),lt)||(0,g.isEditor)()||(0,g.setDataByPath)(X,lt)}),[Ke]);var ot=x.useMemo((function(){var e=null;return E&&E>=1&&(e={settings:t,nextPage:Ge,previousPage:He,pageIndex:et,pageCount:Be,pageSize:nt,setPageSize:$e,widgetId:r,gotoPage:Le}),e}),[E,nt,Be,et,t]),ct=x.useRef(null);return x.createElement(x.Fragment,null,B&&x.createElement("div",{className:"altrp-table-hidden"},x.createElement("div",{className:"altrp-table-hidden__all"},x.createElement(de,We())," Toggle All"),Ve.map((function(e){return["expander","selection"].indexOf(e.id)>=0?null:x.createElement("div",{key:e.id,className:"altrp-table-hidden__column"},x.createElement("label",null,x.createElement("input",(0,o.Z)({type:"checkbox"},e.getToggleHiddenProps()))," ",e.column_name||e.id,e.id))})),x.createElement("br",null)),x.createElement(Z,(0,o.Z)({className:"altrp-table altrp-table_columns-"+Pe.length,ReactTable:Te,currentScreen:n,settings:t,table:ct,ref:ct},Me()),x.createElement("div",{className:"altrp-table-head"},(0,v.renderAdditionalRows)(t),Fe.map((function(e){var n=e.getHeaderGroupProps();return L||H||delete n.style,x.createElement("div",(0,o.Z)({},n,{className:"altrp-table-tr"}),W&&x.createElement("div",{className:"altrp-table-th altrp-table-cell",style:{width:q}}),e.headers.map((function(e,n){var r=e.column_width,a=e.column_header_alignment,l=e.getHeaderProps(e.getSortByToggleProps());l.settings=t;var c=ee(ee({},e.getResizerProps()),{},{onClick:function(e){e.stopPropagation()}});L||H||(l.style={},r&&(l.style.width=r+"%"),a&&(l.style.textAlign=a));var i=e.render("column_name");return _.isString(i)&&(i=x.createElement("span",{dangerouslySetInnerHTML:{__html:e.render("column_name")||"&nbsp;"}})),G&&_.unset(l,"style.width"),x.createElement(T,(0,o.Z)({},l,{column:e,className:"altrp-table-th altrp-table-cell",key:n}),i,e.canGroupBy?x.createElement("span",(0,o.Z)({},e.getGroupByToggleProps(),{className:"altrp-table-th__group-toggle"}),e.isGrouped?(0,g.renderIcon)(Q,Y," 🛑 ","not-grouped-column"):(0,g.renderIcon)(U,J," 👊 ","grouped-column")):null,e.isSorted?e.isSortedDesc?(0,y.hX)().renderIcon("chevron",{className:"rotate-180 sort-icon "}):(0,y.hX)().renderIcon("chevron",{className:"sort-icon"}):"",e.column_is_filtered&&x.createElement("label",{className:"altrp-label altrp-label_".concat(e.column_filter_type),onClick:function(e){e.stopPropagation()}},e.render("Filter")),L&&x.createElement("div",(0,o.Z)({},c,{className:"altrp-table__resizer ".concat(e.isResizing?"altrp-table__resizer_resizing":"")})))})))})),k&&x.createElement("div",{className:"altrp-table-tr"},x.createElement("th",{className:"altrp-table-th altrp-table-th_global-filter altrp-table-cell",role:"cell",colSpan:Xe.length+W,style:{textAlign:"left"}},x.createElement(pe,{widgetId:r,preGlobalFilteredRows:Ue,globalFilter:tt,setGlobalFilter:Je,settings:t})))),"success"===u?x.createElement($,{getTableBodyProps:ze,prepareRow:De,totalColumnsWidth:Qe,rows:qe,visibleColumns:Xe,moveRow:function(e,t){var n=ye[e];Ee(m()(ye,{$splice:[[e,1],[t,0,n]]}))},settings:t,page:Ae,cardTemplate:ve}):x.createElement("div",null,x.createElement("div",{className:"altrp-table-tr altrp-table-tr_loading"},x.createElement("div",{className:"altrp-table-td altrp-table-td_loading",colSpan:Xe.length+W},"loading"===u&&D||null)))),ot&&x.createElement(K.Z,ot))}function oe(e,t){var n=e.column,r=n.filterValue,a=n.preFilteredRows,l=n.setFilter,o=n.filter_placeholder,c=(n.column_filter_type,n.column_is_filtered,a.length);return o=o?o.replace("{{count}}",c):"Search ".concat(c," records..."),x.createElement("input",{value:r||"",className:"altrp-field",onChange:function(e){l(e.target.value||void 0)},placeholder:o})}function ce(e){var t=e.column,n=(t.filterValue,t.setFilter),r=t.preFilteredRows,a=t.id,l=t.filter_placeholder,o=e.widgetId,i=x.useMemo((function(){var e=new Set;return r.forEach((function(t){e.add(t.values[a])})),(0,c.Z)(e.values()).map((function(e){return{value:e,label:e+""}}))}),[a,r]);return x.createElement(w.Z,{options:i,isMulti:!0,placeholder:l||"Select some...",className:"altrp-table__filter-select",classNamePrefix:o+" altrp-field-select2",onChange:function(e){_.isArray(e)||(e=[]);var t=e.map((function(e){return e.value}));n(t)}})}function ie(e){var t=e.column,n=t.filterValue,r=t.setFilter,a=t.preFilteredRows,l=t.id,o=t.filter_button_text,c=x.useMemo((function(){var e=a.length?a[0].values[l]:0;"##"===l&&a.length&&(e=a[0].index);var t=e,n=e;return a.forEach((function(e){var r=e.values[l];"##"===l&&(r=e.index),t=Math.min(r,t),n=Math.max(r,n)})),[t,n]}),[l,a]),i=(0,s.Z)(c,2),u=i[0],d=i[1],p=o||"Off";return x.createElement(x.Fragment,null,x.createElement("input",{type:"range",className:"altrp-field",min:u,max:d,value:n||u,onChange:function(e){r(parseInt(e.target.value,10))}}),x.createElement("button",{className:"altrp-btn ".concat(void 0!==n?"active":""),onClick:function(){return r(void 0)}},p))}function se(e){var t=e.column,n=t.filterValue,r=void 0===n?[]:n,a=t.preFilteredRows,l=t.setFilter,o=t.filter_max_placeholder,c=t.filter_min_placeholder,i=t.id,u=x.useMemo((function(){var e=a.length?a[0].values[i]:0;"##"===i&&a.length&&(e=a[0].index);var t=e,n=e;return a.forEach((function(e){var r=e.values[i];"##"===i&&(r=e.index),t=Math.min(r,t),n=Math.max(r,n)})),[t,n]}),[i,a]),d=(0,s.Z)(u,2),p=d[0],m=d[1],g=c||"Min (".concat(p,")"),f=o||"Max (".concat(m,")");return x.createElement("div",{className:"altrp-filter-group",style:{display:"flex"}},x.createElement("input",{value:r[0]||"",type:"number",className:"altrp-field",onChange:function(e){var t=e.target.value;l((function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];return[t?parseInt(t,10):void 0,e[1]]}))},placeholder:g,style:{width:"70px",marginRight:"0.5rem"}}),"to",x.createElement("input",{value:r[1]||"",type:"number",className:"altrp-field",onChange:function(e){var t=e.target.value;l((function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];return[e[0],t?parseInt(t,10):void 0]}))},placeholder:f,style:{width:"70px",marginLeft:"0.5rem"}}))}function ue(e,t){var n=[],r=e.tables_columns,a=e.card_template,l=e.row_expand,c=e.virtualized_rows,i=e.resize_columns,s=e.hide_expanded_row_icon,u=e.expanded_row_icon,d=e.hide_not_expanded_row_icon,p=e.edit_disabled,m=e.not_expanded_row_icon;r=r||[];var f=((0,g.getResponsiveSetting)(e,"columns_order")||"").trim();if(f=f?f.split(","):[],r.forEach((function(e){if(e.actions&&e.actions.length||e.accessor){if(e.edit_disabled=p,e._accessor=e.accessor,e.accessor&&-1!==e.accessor.indexOf("?")&&-1!==e.accessor.indexOf(":")&&(e.accessor=e.accessor.split("?")[0].trim()),e.column_name=e.column_name||"&nbsp;",e.column_is_filtered)switch(e.filter="fuzzyText",e.column_filter_type){case"min_max":e.filter="between",e.Filter=se;break;case"slider":e.filter="equals",e.Filter=ie;break;case"select":e.filter="includesSome",e.Filter=function(e){var n=e.column;return x.createElement(ce,{column:n,widgetId:t})};break;case"text":switch(e.column_text_filter_type){case"full_match":e.filter="fullMatchText";break;case"partial_match":e.filter="partialMatchText"}}if(e.canGroupBy=!!e.group_by,e.disableSortBy=!e.column_is_sorted,e.aggregate){var r=e.aggregate_template||"{{value}} Unique Names";e.Aggregated=function(e){var t=e.value;return r.replace(/{{value}}/g,t)}}(c||i)&&(e.width=Number(e.column_width)||150),n.push(e)}})),e.row_expand&&n.unshift({id:"expander",column_name:function(e){var t=e.getToggleAllRowsExpandedProps,n=e.isAllRowsExpanded;return x.createElement("span",(0,o.Z)({},t(),{className:"altrp-table__all-row-expander"}),n?(0,g.renderIcon)(s,u,"👇","expanded-row"):(0,g.renderIcon)(d,m,"👉","not-expanded-row"))},Cell:function(e){var t=e.row;return a&&l||t.canExpand?x.createElement("span",(0,o.Z)({className:"altrp-table__row-expander"},t.getToggleRowExpandedProps({style:{paddingLeft:"".concat(2*t.depth,"rem")}})),t.isExpanded?(0,g.renderIcon)(s,u,"👇","expanded-row"):(0,g.renderIcon)(d,m,"👉","not-expanded-row")):null}}),f.length){var _=[];f.forEach((function(e){e=parseInt(e)-1,n[e]&&-1===_.indexOf(n[e])&&_.push(n[e])})),n=_}return n}n.e(8102).then(n.bind(n,48102)),n.e(350).then(n.bind(n,90350)),te.autoRemove=function(e){return!e||!e.length},ne.autoRemove=function(e){return!e},re.autoRemove=function(e){return!e},ae.autoRemove=function(e){return!e};var de=x.forwardRef((function(e,t){var n=e.indeterminate,r=e.icons,l=(0,a.Z)(e,Q),c=x.useRef(),i=t||c;x.useEffect((function(){i.current.indeterminate=n}),[i,n]);var s=r.checkedIcon.name?l.checked?r.checkedIcon:n?r.indeterminateIcon:r.uncheckedIcon:null;return x.createElement("label",{className:"check-icon--"+(l.checked?"checked":n?"indeterminate":"unchecked")},s&&(0,g.renderAssetIcon)(s),x.createElement("input",(0,o.Z)({type:"checkbox",ref:i},l,{className:s?"hidden":""})))}));function pe(e){var t=e.preGlobalFilteredRows,n=e.globalFilter,r=e.setGlobalFilter,a=e.widgetId,l=e.settings,o=l.global_filter_placeholder,c=l.global_filter_label,i=t.length,u=x.useState(n),d=(0,s.Z)(u,2),p=d[0],m=d[1],g=(0,b.useAsyncDebounce)((function(e){r(e||void 0)}),200),f=c||"Search:".concat(" "),_=o||"".concat(i," records...");return _=_.replace(/{{count}}/g,i),x.createElement("div",{className:"altrp-table-global-filter"},x.createElement("label",{htmlFor:"altrp-table-global-filter".concat(a),dangerouslySetInnerHTML:{__html:f}}),x.createElement("input",{id:"altrp-table-global-filter".concat(a),value:p||"",onChange:function(e){m(e.target.value),g(e.target.value)},placeholder:_}))}const me=function(e){if("datasource"===(e=ee({},e)).settings.choose_datasource){var t=x.useMemo((function(){return e.settings.inner_page_size>0?100:10}),[e.settings.inner_page_size]);return e._status="success",(0,g.isEditor)()&&((e=ee({},e)).settings=ee({},e.settings),e.data=Array.from({length:t},(function(){return{}})),(0,g.setAltrpIndex)(e.data)),x.createElement(le,e)}return x.createElement(h.Z,e,x.createElement(le,null))}}}]);
//# sourceMappingURL=7902.editor.js.map