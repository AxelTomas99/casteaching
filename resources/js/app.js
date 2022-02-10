import VideosList from "./components/VideosList";
import VideoForm from "./components/VideoForm";
import Status from "./components/Status";
import Alpine from 'alpinejs';
import axeltomas_casteaching from 'axeltomas_casteaching';
import Vue from 'vue';

require('./bootstrap');

window.Alpine = Alpine;
window.axeltomas_casteaching = axeltomas_casteaching;
window.Vue = Vue;

window.Vue.component('videos-list', VideosList)
window.Vue.component('video-form', VideoForm)
window.Vue.component('status', Status)
Alpine.start();

const app = new window.Vue({
    el: '#app',
});
