require("./bootstrap");

import Vue from "vue";

Vue.component("app", require("./App.vue").default);

var app = new Vue({
    el: "#app",
});
