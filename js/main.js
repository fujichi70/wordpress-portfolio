"use strict";

{
  class MobileMenu {
    constructor() {
      this.DOM = {};
      this.DOM.hamburger = document.querySelector('.hamburger');
      this.DOM.spMenu = document.querySelector(".sp-menu");
      this.eventType = this._getEventType();
      this._inner();
      this._addEvent();
    }

    _getEventType() {
      let nu = navigator.userAgent;
      const isTouchCapable =
        nu.indexOf("iPhone") > 0 ||
        (nu.indexOf("Android") > 0 && nu.indexOf("Mobile") > 0) ||
        nu.indexOf("iPad") > 0 ||
        nu.indexOf("Android") > 0;

      return isTouchCapable ? "touchstart" : "click";
    }

    _toggle() {
      this.DOM.spMenu.classList.toggle("menu-open");
      this.DOM.rice.classList.toggle("menu-open");
    }

    _addEvent() {
      this.DOM.hamburger.addEventListener(this.eventType, this._toggle.bind(this));
    }
  }


  new MobileMenu();
}
