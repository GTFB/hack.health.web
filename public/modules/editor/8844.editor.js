(self.webpackChunk=self.webpackChunk||[]).push([[8844],{66809:(e,t,r)=>{"use strict";r.d(t,{Z:()=>M});var n=r(22122),a=r(92137),l=r(96156),o=r(6610),c=r(5991),s=r(63349),i=r(10379),u=r(46070),p=r(77608),E=r(87757),d=r.n(E),m=r(67294),O=r(38773);function P(e,_){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);_&&(r=r.filter((function(_){return Object.getOwnPropertyDescriptor(e,_).enumerable}))),t.push.apply(t,r)}return t}function D(e){for(var _=1;_<arguments.length;_++){var t=null!=arguments[_]?arguments[_]:{};_%2?P(Object(t),!0).forEach((function(_){(0,l.Z)(e,_,t[_])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):P(Object(t)).forEach((function(_){Object.defineProperty(e,_,Object.getOwnPropertyDescriptor(t,_))}))}return e}const M=function(e){(0,i.Z)(M,e);var t,r,l,E,P=(l=M,E=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,_=(0,p.Z)(l);if(E){var t=(0,p.Z)(this).constructor;e=Reflect.construct(_,arguments,t)}else e=_.apply(this,arguments);return(0,u.Z)(this,e)});function M(e){var _;return(0,o.Z)(this,M),(_=P.call(this,e)).resource=new O.default({route:_.props.route}),_.state={value:_.props.value||"",disabled:!_.props.value},_.changeValue=_.changeValue.bind((0,s.Z)(_)),_.onChange=_.onChange.bind((0,s.Z)(_)),_.onKeyDown=_.onKeyDown.bind((0,s.Z)(_)),_}return(0,c.Z)(M,[{key:"componentDidUpdate",value:function(e,_){var t=this;e.route!==this.props.route&&(this.resource=new O.default({route:this.props.route}),console.log(this.resource)),e.value!==this.props.value&&this.props.value!==this.state.value&&this.setState((function(e){return D(D({},e),{},{value:t.props.value})}))}},{key:"componentDidMount",value:(r=(0,a.Z)(d().mark((function e(){var _,t=this;return d().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(void 0===this.props.value&&this.props.resourceid){e.next=2;break}return e.abrupt("return");case 2:return e.next=4,this.resource.get(this.props.resourceid);case 4:_=e.sent,this.setState((function(e){return D(D({},e),{},{value:_[t.props.resourceid]||"",disabled:!1})}));case 6:case"end":return e.stop()}}),e,this)}))),function(){return r.apply(this,arguments)})},{key:"onKeyDown",value:function(e){13===e.keyCode&&this.changeValue(e)}},{key:"onChange",value:function(e){var t=e.target.value;this.setState((function(e){return D(D({},e),{},{value:t})})),_.isFunction(this.props.changevalue)&&this.props.changevalue(t)}},{key:"changeValue",value:(t=(0,a.Z)(d().mark((function e(t){var r;return d().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.target.value,this.setState((function(e){return D(D({},e),{},{disabled:!0})})),_.isFunction(this.props.onBlur)&&this.props.onBlur(r),e.next=5,this.resource.put(this.props.resourceid,{value:r,column_value:r});case 5:e.sent,this.setState((function(e){return D(D({},e),{},{disabled:!1})}));case 7:case"end":return e.stop()}}),e,this)}))),function(e){return t.apply(this,arguments)})},{key:"render",value:function(){var e=this.props.className;this.state.disabled&&(e+=" pointer-event-none");var _=D({},this.props);return delete _.changevalue,m.createElement("input",(0,n.Z)({},_,{className:e,onBlur:this.changeValue,onKeyDown:this.onKeyDown,onChange:this.onChange,value:this.state.value}))}}]),M}(m.Component)},38844:(__unused_webpack_module,__webpack_exports__,__webpack_require__)=>{"use strict";__webpack_require__.r(__webpack_exports__),__webpack_require__.d(__webpack_exports__,{settingsToColumns:()=>settingsToColumns,renderAdditionalRows:()=>renderAdditionalRows,renderCellActions:()=>renderCellActions,default:()=>__WEBPACK_DEFAULT_EXPORT__});var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_10__=__webpack_require__(87329),_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__=__webpack_require__(22122),_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(96156),_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_7__=__webpack_require__(34699),react__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(67294),react_table__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(79521),react_table__WEBPACK_IMPORTED_MODULE_2___default=__webpack_require__.n(react_table__WEBPACK_IMPORTED_MODULE_2__),react_router_dom__WEBPACK_IMPORTED_MODULE_9__=__webpack_require__(73727),_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__=__webpack_require__(35713),_admin_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__=__webpack_require__(1987),_admin_src_components_AutoUpdateInput__WEBPACK_IMPORTED_MODULE_5__=__webpack_require__(66809),_altrp_query_component_altrp_query_component__WEBPACK_IMPORTED_MODULE_6__=__webpack_require__(47746);function ownKeys(e,_){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);_&&(r=r.filter((function(_){return Object.getOwnPropertyDescriptor(e,_).enumerable}))),t.push.apply(t,r)}return t}function _objectSpread(e){for(var _=1;_<arguments.length;_++){var t=null!=arguments[_]?arguments[_]:{};_%2?ownKeys(Object(t),!0).forEach((function(_){(0,_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__.Z)(e,_,t[_])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):ownKeys(Object(t)).forEach((function(_){Object.defineProperty(e,_,Object.getOwnPropertyDescriptor(t,_))}))}return e}__webpack_require__.e(350).then(__webpack_require__.bind(__webpack_require__,90350));var AltrpTable=function(e){var t=e.settings,r=e.query,n=e.data,a=(e.currentModel,e._status),l=e._error,o=e.setSortSettings,c=e.setFilterSettings,s=e.filterSetting,i=e.setPage,u=e._latestData,p=e.page,E=e.sortSetting;if(!t.tables_columns||!t.tables_columns.length)return react__WEBPACK_IMPORTED_MODULE_1__.createElement("div",{children:"Please Add Column"});var d={};t.tables_columns.forEach((function(e){e.column_is_default_sorted&&!d.order_by&&(d.order_by=e.accessor,d.order=_.get(e,"column_is_default_sorted_direction","ASC"))}));var m=react__WEBPACK_IMPORTED_MODULE_1__.useMemo((function(){return _.get(t,"group_by_column_name")?_.get(t,"group_by_column_name"):getGroupBy(t.tables_columns)}),[t]);react__WEBPACK_IMPORTED_MODULE_1__.useEffect((function(){m&&o({order:"ASC",order_by:m})}),[m]);var O,P=r.getCounterStart(p),D=react__WEBPACK_IMPORTED_MODULE_1__.useMemo((function(){return t.group_collapsing})),M=react__WEBPACK_IMPORTED_MODULE_1__.useState([]),b=(0,_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_7__.Z)(M,2),g=b[0],f=b[1],h=(0,react__WEBPACK_IMPORTED_MODULE_1__.useState)({}),C=(0,_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_7__.Z)(h,2),A=C[0],T=C[1],y=(0,react__WEBPACK_IMPORTED_MODULE_1__.useState)({}),R=(0,_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_7__.Z)(y,2),L=R[0],v=R[1],I=[];O=settingsToColumns(t),n=n.map((function(e){return e.id===A.rowId?(e[A.column]=A.value,_objectSpread({},e)):e}));var U=(0,react_table__WEBPACK_IMPORTED_MODULE_2__.useTable)({columns:react__WEBPACK_IMPORTED_MODULE_1__.useMemo((function(){return O||[]}),[t.tables_columns]),data:react__WEBPACK_IMPORTED_MODULE_1__.useMemo((function(){return n||[]}),[n])}),B=U.getTableProps,K=U.getTableBodyProps,W=U.headerGroups,w=U.rows,k=U.prepareRow,j=function(e){o({order_by:e,order:E&&E.order_by===e?"DESC"===E.order?"ASC":"DESC":"ASC"})},S=function(e,_){i(1);var t=_objectSpread({},s);_?t[e]=_:delete t[e],c(t)};return react__WEBPACK_IMPORTED_MODULE_1__.createElement(react__WEBPACK_IMPORTED_MODULE_1__.Fragment,null,react__WEBPACK_IMPORTED_MODULE_1__.createElement("table",(0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__.Z)({className:"altrp-table altrp-table_columns-"+O.length},B()),react__WEBPACK_IMPORTED_MODULE_1__.createElement("thead",{className:"altrp-table-head"},renderAdditionalRows(t),W.map((function(e){return react__WEBPACK_IMPORTED_MODULE_1__.createElement("tr",(0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__.Z)({},e.getHeaderGroupProps(),{className:"altrp-table-tr"}),e.headers.map((function(e){return renderTh({column:e,sortSetting:E,sortingHandler:j,filterSetting:s,filterHandler:S})})))}))),react__WEBPACK_IMPORTED_MODULE_1__.createElement("tbody",(0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__.Z)({},K(),{className:"altrp-table-tbody ".concat(t.table_style_table_striple_style?" altrp-table-tbody--striped":"")}),"error"===a?react__WEBPACK_IMPORTED_MODULE_1__.createElement("tr",null,react__WEBPACK_IMPORTED_MODULE_1__.createElement("td",null,l.message)):"loading"===a?react__WEBPACK_IMPORTED_MODULE_1__.createElement("tr",null,react__WEBPACK_IMPORTED_MODULE_1__.createElement("td",null,"Loading")):w.map((function(e,r){k(e);var n=_.get(t,"field_name_for_row_styling");return n=_.get(e.original,n,""),n=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.mbParseJSON)(n,{}),react__WEBPACK_IMPORTED_MODULE_1__.createElement(react__WEBPACK_IMPORTED_MODULE_1__.Fragment,{key:e.id},renderGroupingTr(e,m,I,t,D,f,g),react__WEBPACK_IMPORTED_MODULE_1__.createElement("tr",(0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__.Z)({},e.getRowProps(),{style:n,className:"altrp-table-tr ".concat(t.table_hover_row?"altrp-table-background":""," ").concat(D&&-1!==g.indexOf(_.last(I))?"altrp-d-none":"")}),e.cells.map((function(r,n){var a=r.render("Cell"),l=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.isEditor)()?"a":react_router_dom__WEBPACK_IMPORTED_MODULE_9__.rU;O[n].column_external_link&&!(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.isEditor)()&&(l="a");var o=r.column.column_body_alignment?{textAlign:r.column.column_body_alignment}:{},c=_objectSpread({},r.getCellProps()),s=r.value,i="";if(O[n].column_is_editable&&O[n].column_edit_url){var u=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.parseURLTemplate)(O[n].column_edit_url,e.original);i=react__WEBPACK_IMPORTED_MODULE_1__.createElement(_admin_src_components_AutoUpdateInput__WEBPACK_IMPORTED_MODULE_5__.Z,{className:"altrp-inherit altrp-table-td__double-click-content",route:u,resourceid:"",changevalue:function(_){T({value:_,rowId:e.original.id,column:O[n]._accessor})},value:s}),c.onDoubleClick=function(){L.column===O[n]._accessor&&L.rowId===e.original.id?v({}):v({column:O[n]._accessor,rowId:e.original.id})}}var p="altrp-table-td ".concat(r.column.column_body_alignment?"altrp-table-td_alignment-".concat(r.column.column_body_alignment):""," ");L.column===O[n]._accessor&&e.original.id===L.rowId&&(p+=" altrp-table-td_double-clicked"),t.table_hover_row||(p+=" altrp-table-background"),_.isObject(r.value)&&(a=""),a=O[n].column_link?react__WEBPACK_IMPORTED_MODULE_1__.createElement(l,{to:(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.parseURLTemplate)(O[n].column_link,e.original),href:(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.parseURLTemplate)(O[n].column_link,e.original),target:O[n].column_blank_link?"_blank":"",className:"altrp-inherit altrp-table-td__default-content",dangerouslySetInnerHTML:{__html:r.value}}):react__WEBPACK_IMPORTED_MODULE_1__.createElement("span",{className:"altrp-inherit altrp-table-td__default-content",dangerouslySetInnerHTML:{__html:r.value}}),r.column._accessor&&"##"===r.column._accessor.trim()&&(a=P+++"");var E=_.get(r,"column.column_styles_field");return E=_.get(e.original,E,""),E=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.mbParseJSON)(E,{}),o=_.assign(o,E),_.get(r,"column.actions.length")?react__WEBPACK_IMPORTED_MODULE_1__.createElement("td",(0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__.Z)({},c,{className:p,style:o}),renderCellActions(r,e)):_.isString(a)&&!i?react__WEBPACK_IMPORTED_MODULE_1__.createElement("td",(0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__.Z)({},c,{className:p,dangerouslySetInnerHTML:{__html:a+""},style:o})):react__WEBPACK_IMPORTED_MODULE_1__.createElement("td",(0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__.Z)({},c,{className:p,style:o}),a,i)}))))}))),renderFooter(t,n)),"prev-next"===r.paginationType&&r.pageSize?react__WEBPACK_IMPORTED_MODULE_1__.createElement("div",{className:"altrp-pagination"},react__WEBPACK_IMPORTED_MODULE_1__.createElement("button",{className:"altrp-pagination__previous",onClick:function(){i((function(e){return Math.max(e-1,0)})),v({}),T({})},disabled:1===p},t.prev_text||""),react__WEBPACK_IMPORTED_MODULE_1__.createElement("div",{className:"altrp-pagination__count"},t.current_page_text||"Current Page:",p),react__WEBPACK_IMPORTED_MODULE_1__.createElement("button",{className:"altrp-pagination__next",onClick:function(){T({}),v({}),i((function(e){return u&&u.hasMore?e+1:e}))},disabled:!u||!u.hasMore},t.next_text||"")):"")};function settingsToColumns(e){var _=[],t=e.tables_columns;return(t=t||[]).forEach((function(e){e.column_name&&(e.actions&&e.actions.length||e.accessor)&&(e._accessor=e.accessor,_.push(e))})),_}function renderAdditionalRows(e){var t=e.additional_rows;return _.isArray(t)?t.map((function(e){return e.additional_cells=e.additional_cells||[],react__WEBPACK_IMPORTED_MODULE_1__.createElement("tr",{key:"additional-row-".concat(e.id)},e.additional_cells.map((function(_){return _.rowspan=_.rowspan||1,_.colspan=_.colspan||1,react__WEBPACK_IMPORTED_MODULE_1__.createElement("th",{key:"additional-cell-".concat(e.id,"-").concat(_.id),role:"columnheader",className:"altrp-table-th altrp-table-cell",colSpan:_.colspan,rowSpan:_.rowspan},_.title)})))})):""}function renderTh(e){var _=e.column,t=e.sortSetting,r=e.sortingHandler,n=e.filterSetting,a=e.filterHandler,l=_.column_width,o=_.column_header_alignment,c=_objectSpread({},_.getHeaderProps()),s={};l&&(s.width=l),o&&(s.textAlign=o),c.className="altrp-table-th",_.column_is_sorted&&(c.onClick=function(){return r(_._accessor)},c.className+=" clickable"),_.column_width&&(c.width=_.column_width+"%");var i=_.render("column_name");return react__WEBPACK_IMPORTED_MODULE_1__.createElement("th",(0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_8__.Z)({},c,{style:s}),i,t&&_.column_is_sorted&&t.order_by===_._accessor&&("DESC"===t.order?(0,_admin_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.hX)().renderIcon("chevron",{className:"rotate-180 sort-icon "}):(0,_admin_src_js_helpers__WEBPACK_IMPORTED_MODULE_4__.hX)().renderIcon("chevron",{className:"sort-icon"})),_.column_is_filtered&&react__WEBPACK_IMPORTED_MODULE_1__.createElement("label",{className:"altrp-label"},react__WEBPACK_IMPORTED_MODULE_1__.createElement("input",{type:"text",onClick:function(e){e.stopPropagation()},onChange:function(e){e.stopPropagation();var t=e.target.value;a(_._accessor,t)},value:n[_._accessor]||"",className:"altrp-field"})))}function getGroupBy(e){var _=null;return e.forEach((function(e){e.group_by&&(_=e.accessor)})),_}function renderGroupingTr(e,t,r){var n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{},a=arguments.length>4?arguments[4]:void 0,l=arguments.length>5?arguments[5]:void 0,o=arguments.length>6?arguments[6]:void 0;if(!t)return null;var c=_.get(e,"original."+t,"");if(c||(c=_.get(n,"group_default_text","")),r.indexOf(c)>=0)return null;r.push(c);var s=-1!==o.indexOf(c),i=n.collapsed_icon,u=n.expanded_icon;return _.isArray(i)&&(i=null),_.isArray(u)&&(u=null),c?react__WEBPACK_IMPORTED_MODULE_1__.createElement("tr",{className:"altrp-table-tr"},react__WEBPACK_IMPORTED_MODULE_1__.createElement("td",{colSpan:_.get(e,"cells.length",1),onClick:function(){a&&toggleGroup(c,l,o)},className:"altrp-table-td__grouping altrp-table-td altrp-table-background ".concat(a?s?"altrp-pointer":"altrp-pointer active":""," ")},a?react__WEBPACK_IMPORTED_MODULE_1__.createElement("span",{className:"altrp-table__collapse-icon ".concat(s?"altrp-table__collapse-icon_collapsed":"")},s?(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.renderAsset)(i||{assetType:"icon",name:"add"}):(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.renderAsset)(u||{assetType:"icon",name:"minus"})):null,c)):null}function toggleGroup(e,t,r){-1===r.indexOf(e)?(r.push(e),t((0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_10__.Z)(r))):t(r=_.filter(r,(function(_){return _!==e})))}function renderFooter(settings,data){var footerColumns=settings.footer_columns||[];return 0===footerColumns.length?null:react__WEBPACK_IMPORTED_MODULE_1__.createElement("tfoot",{className:"altrp-table-foot"},react__WEBPACK_IMPORTED_MODULE_1__.createElement("tr",{className:"altrp-table-tr"},footerColumns.map((function(footerColumn){var style={textAlign:footerColumn.column_footer_alignment||"left"},content=footerColumn.content;if(-1!==content.indexOf("{{altrphelpers.")){window.altrphelpers.context=data,content=content.replace(/{{/g,"").replace(/}}/g,"");try{content=eval(content)}catch(e){console.log(content),console.error(e),content=""}}else content=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.replaceContentWithData)(content);return react__WEBPACK_IMPORTED_MODULE_1__.createElement("td",{className:"altrp-table-td",key:footerColumn.id,style,colSpan:footerColumn.colspan||1},content)}))))}function renderCellActions(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},r=_.get(e,"column.actions",[]);return react__WEBPACK_IMPORTED_MODULE_1__.createElement("div",{className:"altrp-actions"},r.map((function(e){var r=e.type||"Link",n=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.replaceContentWithData)(e.text||""),a=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.parseURLTemplate)(e.link,t.original),l={className:"altrp-actions-item altrp-link "+(e.classes||""),style:{},key:(e.id||"")+(t.id||""),title:e.text||""};if(l.style.marginLeft=_.get(e,"spacing.left")?_.get(e,"spacing.left")+_.get(e,"spacing.unit"):null,l.style.marginRight=_.get(e,"spacing.right")?_.get(e,"spacing.right")+_.get(e,"spacing.unit"):null,l.style.marginTop=_.get(e,"spacing.top")?_.get(e,"spacing.top")+_.get(e,"spacing.unit"):null,l.style.marginBottom=_.get(e,"spacing.bottom")?_.get(e,"spacing.bottom")+_.get(e,"spacing.unit"):null,"Link"===r&&(r=react_router_dom__WEBPACK_IMPORTED_MODULE_9__.rU,l.to=a),"a"===r&&e.target_blank&&(l.target="_blank"),"a"===r&&(l.href=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.parseURLTemplate)(e.link,t.original)),_.get(e,"icon.assetType")){var o=_.get(e,"size.size")?_.get(e,"size.size")+_.get(e,"size.unit","px"):null,c={className:"altrp-actions-item__icon",style:{}};o&&(c.style.width=o,c.style.height=o),n=(0,_front_app_src_js_helpers__WEBPACK_IMPORTED_MODULE_3__.renderAsset)(e.icon,c)}return react__WEBPACK_IMPORTED_MODULE_1__.createElement(r,l,n)})))}const __WEBPACK_DEFAULT_EXPORT__=function(e){return react__WEBPACK_IMPORTED_MODULE_1__.createElement(_altrp_query_component_altrp_query_component__WEBPACK_IMPORTED_MODULE_6__.Z,e,react__WEBPACK_IMPORTED_MODULE_1__.createElement(AltrpTable,null))}}}]);
//# sourceMappingURL=8844.editor.js.map