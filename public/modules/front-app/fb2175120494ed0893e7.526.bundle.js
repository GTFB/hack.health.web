(self.webpackChunk=self.webpackChunk||[]).push([[526],{90526:(e,n,t)=>{"use strict";t.r(n);var r=t(92137),a=t(87757),o=t.n(a);function s(){if(document.getElementById("front-app-server")){var e=document.getElementById("front-app");document.getElementById("front-app-server").remove(),e.removeAttribute("style"),window.removeEventListener("render-altrp",s)}else console.error(document.getElementById("front-app-server"))}(0,r.Z)(o().mark((function e(){var n;return o().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,Promise.all([t.e(1762),t.e(3935),t.e(6287),t.e(8942),t.e(2736)]).then(t.bind(t,40747));case 2:return window.altrpHelpers=e.sent,e.next=5,Promise.all([t.e(1762),t.e(6700)]).then(t.t.bind(t,30381,23));case 5:return n=e.sent,window.altrpHelpers.moment=n.default,e.next=9,Promise.all([t.e(1762),t.e(6700)]).then(t.t.bind(t,21793,23));case 9:window.altrpHelpers.momentModule=n,window.altrpHelpers.moment.locale("ru"),window.altrpHelpers.moment.updateLocale("ru",{week:{dow:1}});case 12:case"end":return e.stop()}}),e)})))(),(0,r.Z)(o().mark((function e(){var n;return o().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.e(6808).then(t.t.bind(t,36808,23));case 2:if(window.Cookies=e.sent.default,!window.Cookies.get("bvi-theme")){e.next=10;break}return e.next=6,t.e(9713).then(t.bind(t,9713));case 6:return n=e.sent.loadVIPlugin,e.next=9,n(!1);case 9:$.bvi();case 10:case"end":return e.stop()}}),e)})))(),(0,r.Z)(o().mark((function e(){var n,r;return o().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=function(){n.startUpdating(),window.removeEventListener("render-altrp",r)},fetch,e.next=4,t.e(7199).then(t.bind(t,27199));case 4:n=e.sent.default,window.addEventListener("render-altrp",s),window.addEventListener("render-altrp",r);case 7:case"end":return e.stop()}}),e)})))(),(0,r.Z)(o().mark((function e(){var n,r;return o().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.e(3081).then(t.bind(t,63081));case 2:return n=e.sent.setCurrentScreen,e.next=5,t.e(2027).then(t.bind(t,12027));case 5:r=e.sent.default,window.CONSTANTS=r,window.addEventListener("resize",(function(e){var t=appStore.getState().currentMediaScreen,a=r.SCREENS.find((function(e){if(!e.fullMediaQuery)return!1;var n=e.fullMediaQuery;return n=n.replace("@media",""),window.matchMedia(n).matches}))||r.SCREENS[0];t!==a&&appStore.dispatch(n(a))}));case 8:case"end":return e.stop()}}),e)})))()}}]);