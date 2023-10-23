<template>
  <div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center" v-show="show">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-70" @click="$emit('close')"></div>

    <div style="z-index: 9999" :class="`modal-container bg-white ${width} mx-auto rounded shadow-lg overflow-y-auto`">
      <div class="modal-content py-4 text-left px-6">
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">{{ title }}</p>
          <div style="z-index: 999" class="modal-close cursor-pointer" @click="$emit('close')">
            <svg width="25" height="25" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.9997 36.6673C29.1663 36.6673 36.6663 29.1673 36.6663 20.0007C36.6663 10.834 29.1663 3.33398 19.9997 3.33398C10.833 3.33398 3.33301 10.834 3.33301 20.0007C3.33301 29.1673 10.833 36.6673 19.9997 36.6673Z" stroke="#0E0E2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15.2832 24.7165L24.7165 15.2832" stroke="#0E0E2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M24.7165 24.7165L15.2832 15.2832" stroke="#0E0E2C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

          </div>
        </div>
        <div>
          <slot></slot>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'Modal',
  props: {
    show: {
      type: Boolean,
      required: true
    },
    title: {
      type: String,
      default: 'Modal Title'
    },
    width: {
      type: String,
      default: 'w-11/12 md:max-w-md'
    }
  },
  data(){
    return {

    }
  },
  mounted() {
    document.addEventListener('keydown', this.keydownHandler);
  },
  destroyed() {
    document.removeEventListener('keydown', this.keydownHandler);
  },
  methods: {
    keydownHandler(event) {
      if (event.keyCode === 27) {
        this.$emit('close');
      }
    }
  }
}
</script>
