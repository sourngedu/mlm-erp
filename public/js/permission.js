! function (n) {
  var t = {};

  function e(r) {
    if (t[r]) return t[r].exports;
    var i = t[r] = {
      i: r,
      l: !1,
      exports: {}
    };
    return n[r].call(i.exports, i, i.exports, e), i.l = !0, i.exports
  }
  e.m = n, e.c = t, e.d = function (n, t, r) {
    e.o(n, t) || Object.defineProperty(n, t, {
      configurable: !1,
      enumerable: !0,
      get: r
    })
  }, e.n = function (n) {
    var t = n && n.__esModule ? function () {
      return n.default
    } : function () {
      return n
    };
    return e.d(t, "a", t), t
  }, e.o = function (n, t) {
    return Object.prototype.hasOwnProperty.call(n, t)
  }, e.p = "/", e(e.s = 274)
}({
  274: function (n, t, e) {
    n.exports = e(275)
  },
  275: function (n, t) {
    window.admin.removeSubmitButtonOffsetOn(["#permissions"]), 
    $(".permission-parent-actions > .allow-all, .permission-parent-actions > .deny-all, .permission-parent-actions > .inherit-all").on("click", function (n) {
      var t = n.currentTarget.className.split(/\s+/)[2].split(/-/)[0];
      $(".permission-" + t).prop("checked", !0)
    }), $(".permission-group-actions > .allow-all, .permission-group-actions > .deny-all, .permission-group-actions > .inherit-all").on("click", function (n) {
      var t = n.currentTarget.className.split(/\s+/)[2].split(/-/)[0];
      $(n.currentTarget).closest(".permission-group").find(".permission-" + t).each(function (n, t) {
        $(t).prop("checked", !0)
      })
    }), $(".delete-api-key").on("click", function (n) {
      $("#confirmation-form").attr("action", n.currentTarget.dataset.action)
    })
  }
});