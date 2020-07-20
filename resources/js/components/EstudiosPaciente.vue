<template>
    <div class="">
        <div v-for="(src, index) in imgs" :key="index" class="pic" @click="() => showImg(index)">
            <img :src="src">
        </div>
        <vue-easy-lightbox :visible="visible" :imgs="imgs" :index="index" @hide="handleHide"></vue-easy-lightbox>
    </div>
</template>

<script>
import VueEasyLightbox from 'vue-easy-lightbox';

export default {
  components: {
    VueEasyLightbox
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
    }
}
</script>