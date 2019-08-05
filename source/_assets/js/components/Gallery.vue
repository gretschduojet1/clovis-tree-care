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
                        src: '/assets/images/gallery/clovis_tree_care_gallery1.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_1.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery4.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_4.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery5.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_5.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery6.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_6.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery7.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_7.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery8.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_8.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery10.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_10.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery9.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_9.jpg',
                        w: 600,
                        h: 800,
                        alt: 'some numbers on a grey background'
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery11.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_11.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery12.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_12.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery13.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_13.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery14.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_14.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery15.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_15.jpg',
                        w: 600,
                        h: 800
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery2.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_2.jpg',
                        w: 600,
                        h: 600
                    },
                    {
                        src: '/assets/images/gallery/clovis_tree_care_gallery3.jpg',
                        thumbnail: '/assets/images/gallery/clovis_tree_care_gallery_thumb_3.jpg',
                        w: 600,
                        h: 600
                    },
                ]
            };
        }
    }
</script>