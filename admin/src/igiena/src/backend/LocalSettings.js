import Vue from "vue";

export default {
  version: "1.0",
  BASE_URL: "https://igiena.brk-dev.ro/admin/api/index.php/",
  baseUrl: "https://igiena.brk-dev.ro/admin/api/index.php",

  set_token: function (newToken) {
    window.localStorage.setItem("igiena-token", newToken);
    Vue.http.headers.common["Token"] = newToken;
  },

  get_token: function () {
    return window.localStorage.getItem("igiena-token");
  },

  set_drepturi: function (drepturi) {
    window.localStorage.setItem(
      "igiena-drepturi_user",
      JSON.stringify(drepturi)
    );
  },

  get_drepturi: function () {
    var drepturi = window.localStorage.getItem("igiena-drepturi_user");
    return JSON.parse(drepturi);
  },
  set_user_type: function (user_type) {
    window.localStorage.setItem("igiena-user_type", user_type);
  },

  get_user_type: function () {
    return window.localStorage.getItem("igiena-user_type");
  },

  is_logged_in: function () {
    var token = this.get_token();
    return token !== "";
  },

  logout: function () {
    this.set_token("");
    this.set_drepturi("");
  },

  verify_response: function (response) {
    if (response.body.NotLogged) {
      return false;
    }
    return true;
  },

  verify_login_and_redirect: function (vueInstance) {
    if (!this.is_logged_in()) {
      vueInstance.$router.push("/");
    }
  },
};
