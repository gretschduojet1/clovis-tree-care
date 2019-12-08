import VuePictureSwipe from 'vue-picture-swipe';
import VueGallery from './components/Gallery.vue';

window.docsearch = require('docsearch.js');
window.Vue = require('vue');

window.Vue.component('vue-picture-swipe', VuePictureSwipe);
window.Vue.component('vue-gallery', VueGallery);

new Vue({
    el: '#app',
    data: {
        open: false,
    },
    methods: {
        toggle() {
            console.log("Open");
            this.open = !this.open;
        }
    }
});