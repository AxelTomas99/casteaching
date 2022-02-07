import VideosList from "./components/VideosList";
import VideoForm from "./components/VideoForm";
import Alpine from 'alpinejs';
import axeltomas_casteaching from 'axeltomas_casteaching';
import Vue from 'vue';

require('./bootstrap');

window.Alpine = Alpine;
window.axeltomas_casteaching = axeltomas_casteaching;
window.Vue = Vue;

window.Vue.component('videos-list', VideosList)
window.Vue.component('video-form', VideoForm)
Alpine.start();

const app = new window.Vue({
    el: '#app',
});
