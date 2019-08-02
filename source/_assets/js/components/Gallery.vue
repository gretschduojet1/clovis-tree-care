<template>
    <vue-picture-swipe :items="items"></vue-picture-swipe>
</template>

<script>
    import VuePictureSwipe from 'vue-picture-swipe';

    export default {
        data() {
            return {
                items: [
                    {
                        src: '/assets/images/gallery/clovis_tree_care_image_1.jpg',
                        thumbnail: '/assets/images/gallery/thumb_clovis_tree_care_image_1.jpg',
                        w: 600,
                        h: 450,
                    },
                    {
                        src: 'http://via.placeholder.com/1200x900',
                        thumbnail: 'http://via.placeholder.com/64x64',
                        w: 1200,
                        h: 900
                    }
                ]
            };
        }
    }
</script>