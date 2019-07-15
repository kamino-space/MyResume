<template>
  <div>
    <button v-on:click="getChild">test</button>
    <auth v-if="!authed" ref="authitem" v-model="ifAuthed" />
    <loading v-if="authed" ref="loadingitem" />
  </div>
</template>

<script>
import Auth from "./AuthComponent.vue";
import Loading from "./LoadingComponent.vue";
export default {
  name: "Index",
  components: { Auth, Loading },
  data() {
    return {
      authed: false
    };
  },
  methods: {
    getChild: function() {
      console.log("VAL", this.authed);
      console.log("REF", this.$refs.authitem.authed);
    }
  },
  watch: {
    ifAuthed: function(value) {
      this.authed = value;
    }
  }
};
</script>

<style>
</style>

