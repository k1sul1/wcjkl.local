webpackJsonp([5],{203:function(e,t,n){"use strict";function o(e){return function(){var t=e.apply(this,arguments);return new Promise(function(e,n){function o(r,a){try{var i=t[r](a),c=i.value}catch(e){return void n(e)}if(!i.done)return Promise.resolve(c).then(function(e){o("next",e)},function(e){o("throw",e)});e(c)}return o("next")})}}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function a(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!==typeof t&&"function"!==typeof t?e:t}function i(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}Object.defineProperty(t,"__esModule",{value:!0});var c,u,s=n(7),l=n.n(s),p=n(0),f=n.n(p),h=n(1),d=n.n(h),y=n(38),b=n(40),v=n(8),m=n(39),w=n.n(m),k=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),g=function(e){return e},P=(u=c=function(e){function t(){r(this,t);var e=a(this,(t.__proto__||Object.getPrototypeOf(t)).call(this));return e.state={authenticated:!1},e}return i(t,e),k(t,[{key:"onlogout",value:function(){this.setState({authenticated:!1})}},{key:"onauthenticated",value:function(){this.setState({authenticated:!0})}},{key:"handleEvent",value:function(e){console.log(e),this["on"+e.type](e)}},{key:"componentDidMount",value:function(){function e(){return t.apply(this,arguments)}var t=o(l.a.mark(function e(){var t;return l.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return this.props.WP.addAuthenticationListeners(this),e.next=3,this.props.WP.getCurrentUser();case 3:t=e.sent,console.log(this.props.hooks),t&&this.setState({authenticated:!0});case 6:case"end":return e.stop()}},e,this)}));return e}()},{key:"componentWillUnmount",value:function(){this.props.WP.removeAuthenticationListeners(this)}},{key:"render",value:function(){var e=this.props,t=e.hooks,n=e.post,o=n.title,r=n.content,a=this.state.authenticated;return console.log(t),f.a.createElement(y.a,Object.assign({sidebar:b.b},e),f.a.createElement("article",{className:"single-page"},t.title(f.a.createElement("h2",null,o.rendered),e),t.content(f.a.createElement("section",null,r.rendered),e),!!a&&f.a.createElement("div",{className:"admin-bar"},f.a.createElement("a",{href:w.a.WPURL+"/wp-admin/post.php?post="+n.id+"&action=edit"},"Edit"))))}}]),t}(p.Component),c.propTypes={hooks:d.a.object,post:d.a.object.isRequired},c.defaultProps={hooks:{title:g,content:g}},u);t.default=Object(v.a)(P)}});
//# sourceMappingURL=5.dbaf290f.chunk.js.map