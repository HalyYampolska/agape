import{S as i}from"./vendor.js";(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))n(e);new MutationObserver(e=>{for(const r of e)if(r.type==="childList")for(const o of r.addedNodes)o.tagName==="LINK"&&o.rel==="modulepreload"&&n(o)}).observe(document,{childList:!0,subtree:!0});function s(e){const r={};return e.integrity&&(r.integrity=e.integrity),e.referrerPolicy&&(r.referrerPolicy=e.referrerPolicy),e.crossOrigin==="use-credentials"?r.credentials="include":e.crossOrigin==="anonymous"?r.credentials="omit":r.credentials="same-origin",r}function n(e){if(e.ep)return;e.ep=!0;const r=s(e);fetch(e.href,r)}})();function a(){if(!document.querySelector(".reviews__slider"))return!1;new i("#image-slider",{type:"loop",perPage:2,perMove:1,autoplay:!1,pagination:!0,arrows:!1,focus:1,gap:"24px",breakpoints:{1023:{perPage:1,gap:"16px"},767:{perPage:1}}}).mount()}function p(){if(!document.querySelector(".partners__wrapper"))return!1;new i(".partners__wrapper",{type:"loop",perPage:7,perMove:1,autoplay:!1,pagination:!0,arrows:!1,focus:1,breakpoints:{640:{destroy:"completely"}}}).mount()}document.addEventListener("DOMContentLoaded",()=>{a(),p()});
//# sourceMappingURL=index.js.map