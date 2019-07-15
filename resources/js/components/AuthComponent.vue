<template>
  <div class="auth-box fullscreen-box">
    <el-container class="auth-box-show">
      <el-header class="main-header" hidden>个人简历</el-header>
      <el-container>
        <el-aside width="33.3%">Aside</el-aside>
        <el-container>
          <el-header class="auth-header">您好，请输入查看密码</el-header>
          <el-main class="auth-main" v-loading="loading" element-loading-text="正在验证密码...">
            <div class="auth-form-box">
              <el-alert :title="errormsg" v-if="keyerror" type="error"></el-alert>
              <el-input class="auth-form-item" focus placeholder="请输入查看密码" v-model="key" show-password></el-input>
              <el-button class="auth-form-item" v-on:click="submit" type="primary" round>提交</el-button>
            </div>
          </el-main>
          <el-footer class="auth-footer">COPYRIGHT 2019 AIKAMINO.</el-footer>
        </el-container>
      </el-container>
    </el-container>
  </div>
</template>


<script>
export default {
  name: "AuthComponent",
  data() {
    return {
      key: "",
      loading: false,
      keyerror: false,
      errormsg: "未知错误",
      authed: false,
      data: {}
    };
  },
  methods: {
    submit: function() {
      if (this.key.length <= 0) {
        this.keyerror = true;
        this.errormsg = "请输入密码";
        return;
      }
      this.loading = true;
      const _this = this;
      this.$axios
        .post("/", { key: this.key })
        .then(res => {
          _this.loading = false;
          _this.keyerror = false;
          _this.authed = true;
          _this.data = res;
        })
        .catch(error => {
          _this.loading = false;
          _this.keyerror = true;
          _this.authed = false;
          _this.errormsg = error.response.data;
        });
    }
  }
};
</script>


<style>
.auth-box {
  background-color: aquamarine;
}

.auth-box-show {
  width: 50%;
  margin: 0 auto;
  position: relative;
  top: 20%;
}

.main-header {
  width: 100%;
  text-align: center;
  line-height: 48px;
  font-size: 48px;
}

.auth-header,
.auth-footer {
  background-color: #b3c0d1;
  color: #333;
  text-align: center;
  line-height: 60px;
}

.auth-form-item {
  width: 100%;
  height: 40px;
  border-radius: 20%;
  margin: 5px 0;
}
</style>
