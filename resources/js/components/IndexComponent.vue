<template>
  <div>
    <auth v-if="!authed" ref="authitem" />
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
  created() {
    console.log(this.$refs);
  },
  methods: {
    getChild: function() {}
  }
};
</script>

<style>
</style>

