<template>
    <div class="row" id="row-estudios">
            <div v-for="(src, index) in estudios" :key="index" class="pic m-1" @click="() => showImg(index)">
                <img :src="src" class="img">
            </div>
            <vue-easy-lightbox :visible="visible" :imgs="estudios" :index="index" @hide="handleHide">
            </vue-easy-lightbox>
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

<style>
    #row-estudios {
        background-color: white;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }
    .pic {
        width: fit-content;
        display: inline-block;
    }
    .img {
        max-width: 200px;
    }
    .img:hover {
        cursor: pointer;
    }
</style>