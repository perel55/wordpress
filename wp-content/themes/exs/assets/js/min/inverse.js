"use strict";!function(n,s,i){function o(e,t){var s=new Date,s=(s.setTime(s.getTime()+31536e6),"expires="+s.toUTCString());n.cookie=e+"="+t+";"+s+";path=/"}function c(e){if(s.exsInverse)for(var t in s.exsInverse[e])n.documentElement.style.setProperty("--"+t,s.exsInverse[e][t])}n.addEventListener("DOMContentLoaded",function(e){var t=i("toggle_inverse");t&&t.addEventListener("click",function(e){t.classList.contains("active")?(t.classList.remove("active"),n.body.classList.remove("exs-color-inverse"),c("light"),o("exs-color-inverse","0")):(t.classList.add("active"),n.body.classList.add("exs-color-inverse"),c("dark"),o("exs-color-inverse","1"))})})}(document,window,document.getElementById.bind(document));