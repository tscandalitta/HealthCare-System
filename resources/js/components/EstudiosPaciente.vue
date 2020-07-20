<template>
    <div class="">
        <div v-for="(src, index) in estudios" :key="index" class="pic" @click="() => showImg(index)">
            <img :src="src">
        </div>
        <vue-easy-lightbox :visible="visible" :imgs="estudios" :index="index" @hide="handleHide"></vue-easy-lightbox>
    </div>
</template>

<script>
import VueEasyLightbox from 'vue-easy-lightbox';

export default {
    components: {
        VueEasyLightbox
    },
    props: {
        estudios: {
            type: Array
        }
    },
    data() {
        return {
        imgs: [
            'https://via.placeholder.com/450.png/',
            'https://via.placeholder.com/300.png/',
            'https://via.placeholder.com/150.png/',
            { src: 'https://via.placeholder.com/450.png/', title: 'this is title' }
        ],
        visible: false,
        index: 0
        }
    },
    methods: {
        showImg (index) {
            this.index = index
            this.visible = true
        },
        handleHide () {
            this.visible = false
        }
    },
}
</script>