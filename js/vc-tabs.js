+ function($){'use strict';var Tabs,old,clickHandler,changeHandler;Tabs=function(element,options){this.$element=$(element);this.activeClass='vc_active';this.tabSelector='[data-vc-tab]';this.useCacheFlag=undefined;this.$target=undefined;this.selector=undefined;this.$targetTab=undefined;this.$relatedAccordion=undefined;this.$container=undefined;};Tabs.prototype.isCacheUsed=function(){var useCache,that;that=this;useCache=function(){return false!==that.$element.data('vcUseCache');};if('undefined'===typeof(this.useCacheFlag)){this.useCacheFlag=useCache();}
return this.useCacheFlag;};Tabs.prototype.getContainer=function(){if(!this.isCacheUsed()){return this.findContainer();}
if('undefined'===typeof(this.$container)){this.$container=this.findContainer();}
return this.$container;};Tabs.prototype.findContainer=function(){var $container;$container=this.$element.closest(this.$element.data('vcContainer'));if(!$container.length){$container=$('body');}
return $container;};Tabs.prototype.getContainerAccordion=function(){return this.getContainer().find('[data-vc-accordion]');};Tabs.prototype.getSelector=function(){var findSelector,$this;$this=this.$element;findSelector=function(){var selector;selector=$this.data('vcTarget');if(!selector){selector=$this.attr('href');}
return selector;};if(!this.isCacheUsed()){return findSelector();}
if('undefined'===typeof(this.selector)){this.selector=findSelector();}
return this.selector;};Tabs.prototype.getTarget=function(){var selector;selector=this.getSelector();if(!this.isCacheUsed()){return this.getContainer().find(selector);}
if('undefined'===typeof(this.$target)){this.$target=this.getContainer().find(selector);}
return this.$target;};Tabs.prototype.getRelatedAccordion=function(){var tab,filterElements;tab=this;filterElements=function(){var $elements;$elements=tab.getContainerAccordion().filter(function(){var $that,accordion;$that=$(this);accordion=$that.data('vc.accordion');if('undefined'===typeof(accordion)){$that.vcAccordion();accordion=$that.data('vc.accordion');}
return tab.getSelector()===accordion.getSelector();});if($elements.length){return $elements;}
return undefined;};if(!this.isCacheUsed()){return filterElements();}
if('undefined'===typeof(this.$relatedAccordion)){this.$relatedAccordion=filterElements();}
return this.$relatedAccordion;};Tabs.prototype.triggerEvent=function(event){var $event;if('string'===typeof(event)){$event=$.Event(event);this.$element.trigger($event);}};Tabs.prototype.getTargetTab=function(){var $this;$this=this.$element;if(!this.isCacheUsed()){return $this.closest(this.tabSelector);}
if('undefined'===typeof(this.$targetTab)){this.$targetTab=$this.closest(this.tabSelector);}
return this.$targetTab;};Tabs.prototype.tabClick=function(){this.getRelatedAccordion().trigger('click');};Tabs.prototype.show=function(){if(this.getTargetTab().hasClass(this.activeClass)){return;}
this.triggerEvent('show.vc.tab');this.getTargetTab().addClass(this.activeClass);};Tabs.prototype.hide=function(){if(!this.getTargetTab().hasClass(this.activeClass)){return;}
this.triggerEvent('hide.vc.tab');this.getTargetTab().removeClass(this.activeClass);};function Plugin(action,options){var args;args=Array.prototype.slice.call(arguments,1);return this.each(function(){var $this,data;$this=$(this);data=$this.data('vc.tabs');if(!data){data=new Tabs($this,$.extend(true,{},options));$this.data('vc.tabs',data);}
if('string'===typeof(action)){data[action].apply(data,args);}});}
old=$.fn.vcTabs;$.fn.vcTabs=Plugin;$.fn.vcTabs.Constructor=Tabs;$.fn.vcTabs.noConflict=function(){$.fn.vcTabs=old;return this;};clickHandler=function(e){var $this;$this=$(this);e.preventDefault();Plugin.call($this,'tabClick');};changeHandler=function(e){var caller;caller=$(e.target).data('vc.accordion');if('undefined'===typeof(caller.getRelatedTab)){caller.getRelatedTab=function(){var findTargets;findTargets=function(){var $targets;$targets=caller.getContainer().find('[data-vc-tabs]').filter(function(){var $this,tab;$this=$(this);tab=$this.data('vc.accordion');if('undefined'===typeof(tab)){$this.vcAccordion();}
tab=$this.data('vc.accordion');return tab.getSelector()===caller.getSelector();});return $targets;};if(!caller.isCacheUsed()){return findTargets();}
if('undefined'===typeof(caller.relatedTab)){caller.relatedTab=findTargets();}
return caller.relatedTab;};}
Plugin.call(caller.getRelatedTab(),e.type);};$(document).on('click.vc.tabs.data-api','[data-vc-tabs]',clickHandler);$(document).on('show.vc.accordion hide.vc.accordion',changeHandler);}(window.jQuery);