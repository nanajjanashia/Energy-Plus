!function(a){"use strict";var b=function(){var a=window,b="inner";return"innerWidth"in window||(b="client",a=document.documentElement||document.body),{width:a[b+"Width"],height:a[b+"Height"]}};a.fn.nooLoadmore=function(b,c){var d={contentSelector:null,contentWrapper:null,nextSelector:"div.navigation a:first",navSelector:"div.navigation",itemSelector:"div.post",dataType:"html",finishedMsg:"<em>Congratulations, you've reached the end of the internet.</em>",loading:{speed:"fast",start:void 0},state:{isDuringAjax:!1,isInvalidPage:!1,isDestroyed:!1,isDone:!1,isPaused:!1,isBeyondMaxPage:!1,currPage:1}},b=a.extend(d,b);return this.each(function(){var d=this,e=a(this),f=e.find(".loadmore-wrap"),g=e.find(".loadmore-action"),h=g.find(".btn-loadmore"),i=g.find(".loadmore-loading");b.contentWrapper=b.contentWrapper||f;var j=function(a){if(a.match(/^(.*?)\b2\b(.*?$)/))a=a.match(/^(.*?)\b2\b(.*?$)/).slice(1);else if(a.match(/^(.*?)2(.*?$)/)){if(a.match(/^(.*?page=)2(\/.*|$)/))return a=a.match(/^(.*?page=)2(\/.*|$)/).slice(1);a=a.match(/^(.*?)2(.*?$)/).slice(1)}else{if(a.match(/^(.*?page=)1(\/.*|$)/))return a=a.match(/^(.*?page=)1(\/.*|$)/).slice(1);b.state.isInvalidPage=!0}return a};if(a(b.nextSelector).length){b.callback=function(d,e){c&&c.call(a(b.contentSelector)[0],d,b,e)},b.loading.start=b.loading.start||function(){h.hide(),a(b.navSelector).hide(),i.show(b.loading.speed,a.proxy(function(){k(b)},d))};var k=function(b){var c=a(b.nextSelector).attr("href");c=j(c);var e,f,k,l,m;return b.callback,b.state.currPage++,void 0!==b.maxPage&&b.state.currPage>b.maxPage?(b.state.isBeyondMaxPage=!0,void 0):(e=c.join(b.state.currPage),k=a("<div/>"),k.load(e+" "+b.itemSelector,void 0,function(){if(l=k.children(),0===l.length)return h.hide(),g.append('<div style="margin-top:5px;">'+b.finishedMsg+"</div>").animate({opacity:1},2e3,function(){g.fadeOut(b.loading.speed)}),void 0;for(f=document.createDocumentFragment();k[0].firstChild;)f.appendChild(k[0].firstChild);a(b.contentWrapper)[0].appendChild(f),m=l.get(),i.hide(),h.show(b.loading.speed),b.callback(m)}),void 0)};h.on("click",function(c){c.stopPropagation(),c.preventDefault(),b.loading.start.call(a(b.contentWrapper)[0],b)})}})},a.fn.nooSmartSidebar=function(b){var c={_main_content:a(".noo-main")},b=a.extend(c,b);if(b._main_content=a(b._main_content),!b._main_content.length)return!1;var d=function(){return!!("ontouchstart"in window)||!!("onmsgesturechange"in window)&&!!window.navigator.maxTouchPoints};return d()?void 0:this.each(function(){var d,c=a(this),e="";c.width(),-1!=navigator.userAgent.indexOf("Safari")&&-1==navigator.userAgent.indexOf("Chrome");var h=function(){var a=window,b="inner";return"innerWidth"in window||(b="client",a=document.documentElement||document.body),{width:a[b+"Width"],height:a[b+"Height"]}},i=function(a,b){return 1<=Math.abs(a-b)?b>a?!0:!1:!0},j=function(a,b){return 1<=Math.abs(a-b)?b>a?!0:!1:!1},k=function(){if(c.data("sidebar_is_enabled")){var f=a(window).scrollTop(),g=h().height,k=0,l="",m=a(".navbar");m.hasClass("fixed-top")&&(k=0);var n=0;a("body").hasClass("admin-bar")&&(n=a("#wpadminbar").outerHeight()),k+=n,f!=d&&(l=f>d?"down":"up"),d=f,f+=k;var o=b._main_content.offset().top,p=b._main_content.outerHeight(),q=p,r=o+p,s=c.offset().top,t=c.outerHeight(),u=s+t;"-175px"==b._main_content.css("margin-top")&&(o+=175),t>=q?e="6":g>t?e=i(f,o)?"2":!0===j(u,f)?j(f,r-t)?"4":"3":i(r,u)?"up"==l&&i(f,s)?"4":"3":r-f>=t?"4":"3":(!0===j(u,f)?e="3":!0===j(u,f+g)&&!0===j(u,r)&&"down"==l&&r>=f+g?e="1":!0===i(s,o)&&"up"==l&&r>=f+g?e="2":!0===i(r,u)&&"down"==l||f+g>r?e="3":!0===i(f,s)&&"up"==l&&!0===i(o,f)&&(e="4"),("1"==e&&"up"==l||"4"==e&&"down"==l)&&(e="5"));var v=Math.max(c.data("fix-width"),200);switch(e){case"1":if(1===c.data("s-case-1"))break;c.data("s-case-1",1),c.data("s-case-2",0),c.data("s-case-3",0),c.data("s-case-4",0),c.data("s-case-5",0),c.data("s-case-6",0),c.css({width:v,position:"fixed",top:"auto",bottom:"0","z-index":"1"});break;case"2":if(1===c.data("s-case-2"))break;c.data("s-case-1",0),c.data("s-case-2",1),c.data("s-case-3",0),c.data("s-case-4",0),c.data("s-case-5",0),c.data("s-case-6",0),c.css({width:"auto",position:"static",top:"auto",bottom:"auto"});break;case"3":if(1===c.data("s-case-3")&&c.data("last-sidebar-height")==t&&c.data("last-content-height")==p)break;c.data("s-case-1",0),c.data("s-case-2",0),c.data("s-case-3",1),c.data("last-sidebar-height",t),c.data("last-content-height",p),c.data("s-case-4",0),c.data("s-case-5",0),c.data("s-case-6",0),c.css({width:v,position:"absolute",top:r-t-o,bottom:"auto"});break;case"4":if(1===c.data("s-case-4")&&c.data("last-menu-offset")==k)break;c.data("s-case-1",0),c.data("s-case-2",0),c.data("s-case-3",0),c.data("s-case-4",1),c.data("last-menu-offset",k),c.data("s-case-5",0),c.data("s-case-6",0),c.css({width:v,position:"fixed",top:k,bottom:"auto"});break;case"5":if(1===c.data("s-case-5"))break;c.data("s-case-1",0),c.data("s-case-2",0),c.data("s-case-3",0),c.data("s-case-4",0),c.data("s-case-5",1),c.data("s-case-6",0),c.css({width:v,position:"absolute",top:s-o,bottom:"auto"});break;case"6":if(1===c.data("s-case-6"))break;c.data("s-case-1",0),c.data("s-case-2",0),c.data("s-case-3",0),c.data("s-case-4",0),c.data("s-case-5",0),c.data("s-case-6",1),c.css({width:"auto",position:"static",top:"auto",bottom:"auto"})}}},l=function(){var a=0;a=h().width,a>=992?(c.data("fix-width",c.parent().width()),c.data("sidebar_is_enabled",1),k()):(c.data("fix-width",0),c.data("sidebar_is_enabled",0),c.data("s-case-1",0),c.data("s-case-2",0),c.data("s-case-3",0),c.data("s-case-4",0),c.data("s-case-5",0),c.data("s-case-6",0),c.data("last-menu-offset",0),c.data("last-sidebar-height",0),c.data("last-content-height",0),c.css({width:"auto",position:"static",top:"auto",bottom:"auto"}))};return a(window).bind("resize",function(){l()}),a(window).scroll(function(){window.requestAnimationFrame?window.requestAnimationFrame(function(){k()},document):k()}),setTimeout(function(){l()},100),!0})},a(".noo-smart-sidebar").nooSmartSidebar({_main_content:a(".noo-smart-content")}),a(".wpb_column.noovc-smart-content").each(function(){var b=a(this);b.parent().find(".noovc-smart-sidebar").nooSmartSidebar({_main_content:b})});var d=function(){function k(){a(".modal").each(function(){if(a(this).find(".modal-dialog").hasClass("modal-dialog-center")){a(this).hasClass("in")===!1&&a(this).show();var c=b().height-60,d=a(this).find(".modal-dialog-center .modal-header").outerHeight()||2,e=a(this).find(".modal-dialog-center .modal-footer").outerHeight()||2;a(this).find(".modal-dialog-center .modal-content").css({"max-height":function(){return c}}),a(this).find(".modal-dialog-center .modal-body").css({"max-height":function(){return c-(d+e)}}),a(this).find(".modal-dialog-center").css({"margin-top":function(){return-(a(this).outerHeight()/2)},"margin-left":function(){return-(a(this).outerWidth()/2)}}),a(this).hasClass("in")===!1&&a(this).hide()}})}var c="ontouchstart"in window;if(c&&a(".carousel-inner").swipe({swipeLeft:function(){a(this).parent().carousel("prev")},swipeRight:function(){a(this).parent().carousel("next")},threshold:0}),a(".navbar").length){var d=a(window),e=a("body"),f=a(".navbar").offset().top,g=0;e.hasClass("admin-bar")&&(g=a("#wpadminbar").outerHeight()),b().height>=320&&a(window).resize(k).trigger("resize");var l=function(){if(b().width>992){var c=a(window),d=a(".navbar"),h=d.outerHeight();if(d.hasClass("fixed-top")){var i="navbar-fixed-top";d.hasClass("shrinkable")&&!e.hasClass("one-page-layout")&&(i+=" navbar-shrink");var j=f;c.scrollTop()+g>=j?d.hasClass("navbar-fixed-top")||(e.hasClass("page-menu-transparent")?(d.closest(".noo-header").css({height:"1px"}),d.closest(".noo-header").css({position:"relative"})):a(".navbar-wrapper").css({"min-height":h+"px"}),d.addClass(i),d.css("top",g)):(e.hasClass("page-menu-transparent")?(d.closest(".noo-header").css({height:""}),d.closest(".noo-header").css({position:""})):a(".navbar-wrapper").css({"min-height":""}),d.removeClass(i))}}};d.bind("scroll",l).resize(l),e.hasClass("one-page-layout")&&(a('.navbar-scrollspy > .nav > li > a[href^="#"]').click(function(b){b.preventDefault();var c=a(this).attr("href").replace(/.*(?=#[^\s]+$)/,"");if(c&&a(c).length){var d=Math.max(0,a(c).offset().top);d=Math.max(0,d-(g+a(".navbar").outerHeight())+5),a("html, body").animate({scrollTop:d},{duration:800,easing:"easeInOutCubic",complete:window.reflow})}}),e.scrollspy({target:".navbar-scrollspy",offset:g+a(".navbar").outerHeight()}),a(window).resize(function(){e.scrollspy("refresh")}))}a(".cat-mega-menu").each(function(){var b=a(this),c=b.find(".cat-mega-filters a");c.on("mouseenter",function(){b.find(".cat-mega-filters li.selected").removeClass("selected"),a(this).closest("li").addClass("selected");var c=a(this).data("cat-id");b.find(".cat-mega-content").hide(),b.find('[data-control-id="cat-mega-'+c+'"]').show()})}),a(".navbar-toggle").on("click",function(b){b.stopPropagation(),b.preventDefault(),a("body").hasClass("offcanvas-open")?a("body").removeClass("offcanvas-open").addClass("offcanvas-close"):a("body").removeClass("offcanvas-close").addClass("offcanvas-open")}),a(document).on("click",".offcanvas-close-btn",function(){a("body").removeClass("offcanvas-open").addClass("offcanvas-close")}),a("body").on("mousedown",a.proxy(function(b){var c=a(b.target);a(".offcanvas").length&&a("body").hasClass("offcanvas-open")&&(c.is(".offcanvas")||0!==c.parents(".offcanvas").length||a("body").removeClass("offcanvas-open"))},this)),a(".noo-slider-revolution-container .noo-slider-scroll-bottom").click(function(b){b.preventDefault();var c=a(".noo-slider-revolution-container").outerHeight();a("html, body").animate({scrollTop:c},900,"easeInOutExpo")}),a("body").on("mouseleave ",".masonry-style-elevated .masonry-portfolio.no-gap .masonry-item",function(){a(this).closest(".masonry-container").find(".masonry-overlay").hide(),a(this).removeClass("masonry-item-hover")}),a(".masonry.noo-category-featured").length&&a(".masonry.noo-category-featured").each(function(){var b=a(this);b.find("div.pagination").hide(),b.find(".loadmore-loading").hide(),b.nooLoadmore({navSelector:b.find("div.pagination"),nextSelector:b.find("div.pagination a.next"),itemSelector:"div.loadmore-item",loading:{speed:1,start:void 0},finishedMsg:nooL10n.ajax_finishedMsg},function(c){if(b.find(".masonry-container").isotope("appended",a(c)),a(window).unbind(".infscr"),b.find(".masonry-filters").length){var d=b.find(".masonry-filters").find("a.selected").data("option-value");b.find(".masonry-container").isotope({filter:d})}})}),a(".masonry").each(function(){var b=a(this),c=a(this).find(".masonry-container"),d=a(this).find(".masonry-filters a"),e={gutter:0};c.isotope({itemSelector:".masonry-item",transitionDuration:"0.8s",masonry:e}),imagesLoaded(b,function(){c.isotope("layout")}),a(window).resize(function(){c.isotope("layout")}),d.click(function(a){a.stopPropagation(),a.preventDefault();var d=jQuery(this);if(d.hasClass("selected"))return!1;b.find(".masonry-result h3").text(d.text());var e=d.closest("ul");e.find(".selected").removeClass("selected"),d.addClass("selected");var f={layoutMode:"masonry",transitionDuration:"0.8s",masonry:{gutter:0}},g=e.attr("data-option-key"),h=d.attr("data-option-value");h="false"===h?!1:h,f[g]=h,c.isotope(f)})}),a(window).scroll(function(){a(this).scrollTop()>500?a(".go-to-top").addClass("on"):a(".go-to-top").removeClass("on")}),a("body").on("click",".go-to-top",function(){return a("html, body").animate({scrollTop:0},800),!1}),a("body").on("click",".search-button",function(){return a(".searchbar").hasClass("hide")&&(a(".searchbar").removeClass("hide").addClass("show"),a(".searchbar #s").focus()),!1}),a("body").on("mousedown",a.proxy(function(b){var c=a(b.target);c.is(".searchbar")||0!==c.parents(".searchbar").length||a(".searchbar").removeClass("show").addClass("hide")},this)),a(".mc-subscribe-form").submit(function(b){b.preventDefault();var c=a(this),d=c.serializeArray();c.find("label.noo-message").remove(),a.ajax({type:"POST",url:nooL10n.ajax_url,data:d,success:function(b){var d=a.parseJSON(b),e="";d.success?""!==d.data&&(e='<label class="noo-message error" role="alert">'+d.data+"</label>",c.addClass("submited"),c.html(e)):""!==d.data&&(c.removeClass("submited"),a('<label class="noo-message" role="alert">'+d.data+"</label>").prependTo(c))},error:function(){}})})};a(document).ready(function(){d()}),a(window).load(function(){a("body").hasClass("enable-preload")&&(a("#loader-wrapper #loader").length?a("#loader-wrapper").fadeOut({duration:200,complete:function(){a(this).remove(),a(".site").animate({opacity:1},{easing:"swing",duration:350})}}):a(".site").animate({opacity:1},{easing:"swing",duration:350}))}),a(document).bind("noo-layout-changed",function(){d()}),a(document).ready(function(){a('[data-paginate="loadmore"]').length&&a('[data-paginate="loadmore"]').find(".btn-loadmore").length&&a(function(){var b=a('[data-paginate="loadmore"] .infinite-wrap');b.infinitescroll({navSelector:"div.pagination",nextSelector:"div.pagination a.next",itemSelector:"article",loading:{img:"",finishedMsg:nooL10n.infinite_scroll_end_msg,msg:a('<div class="noo-loader loadmore-loading"><span></span><span></span><span></span><span></span><span></span></div>'),finished:function(){a(".noo-loader").remove(),c.show()}}},function(){a.fn.nooCarouFredSelInit&&a.fn.nooCarouFredSelInit(),a.fn.nooNivoLighboxInit&&a.fn.nooNivoLighboxInit()}),a(window).unbind(".infscr");var c=a('[data-paginate="loadmore"] .btn-loadmore');c.on("click",function(){return c.hide(),b.infinitescroll("retrieve"),!1}),a(document).ajaxError(function(b,d){404==d.status&&(c.remove(),a(".noo-loader.loadmore-loading").addClass("finished").html("<em>"+nooL10n.infinite_scroll_end_msg+"</em>").animate({opacity:1},2e3,function(){a(this).fadeOut("fast")}))})})})}(jQuery);