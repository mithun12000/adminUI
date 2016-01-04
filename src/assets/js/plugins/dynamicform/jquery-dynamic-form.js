/**
 * @author Stéphane Roucheray
 * @extends jQuery
 */

jQuery.fn.dynamicForm = function (plusElmnt, minusElmnt, options){
	var source = jQuery(this),
	minus = jQuery(minusElmnt),
	plus = jQuery(plusElmnt),
	template = source.clone(true),
	fieldId = 0,
	formFields = "input, checkbox, select, textarea",
	insertBefore = source.next(),
	clones = [],
	defaults = {
		duration:1000,
                beforeClone:null,
                afterClone:null,
                beforeDelete:null,
                afterDelete:null,
  	};
        
        template.find(formFields).each(function(){
            jQuery(this).val('');
            jQuery(this).html('');
        });
        
        /*
        id = source.attr("id") + clones.length;
        while(jQuery('#'+id).length>0){
            clone = jQuery('#'+id);
            normalizeElmnt(clone);
            clones.push(clone);
        }
        //*/
        
	
  	// Extend default options with those provided
  	options = $.extend(defaults, options);
	
	isPlusDescendentOfTemplate = source.find("*").filter(function(){
            return this == plus.get(0);
	});
	
	isPlusDescendentOfTemplate = isPlusDescendentOfTemplate.length > 0 ? true : false;
	
	function normalizeElmnt(elmnt){
        elmnt.find(formFields).each(function(){
            var nameAttr = jQuery(this).attr("name"), 
			idAttr = jQuery(this).attr("id");                        

            /* Normalize field name attributes */
            if (!nameAttr) {
				jQuery(this).attr("name", "field" + fieldId + "[]");
			}
			
			if (!/\[\]$/.exec(nameAttr)) {
				jQuery(this).attr("name", nameAttr + "[]");
			}
			
            /* Normalize field id attributes */
            if (idAttr) {
				/* Normalize attached label */
				jQuery("label[for='"+idAttr+"']").each(function(){
					jQuery(this).attr("for", idAttr + fieldId);
				});
				
                jQuery(this).attr("id", idAttr + fieldId);
            }
            fieldId++;
        });
    };
	
	/* Hide minus element */
        if(clones.length){
            minus.hide();
        }
	
	/* If plus element is within the template */
	if (isPlusDescendentOfTemplate) {
		function clickOnPlus(event){
			var clone,
			currentClone = clones[clones.length -1] || source;
			event.preventDefault();
                        
                        if (typeof options.beforeClone === "function") {
                              options.beforeClone(clones);
                        }
			
			/* On first add, normalize source */
			if (clones.length == 0) {
				normalizeElmnt(source);
				currentClone.find(minusElmnt).hide();
				currentClone.find(plusElmnt).hide();
			}else{
				currentClone.find(plusElmnt).hide();
			}
			
			/* Clone template and normalize it */
			clone = template.clone(true).insertAfter(clones[clones.length - 1] || source);
			normalizeElmnt(clone);
			
			/* Normalize template id attribute */
			if (clone.attr("id")) {
				clone.attr("id", clone.attr("id") + clones.length);
			}
                        
                        if (typeof options.afterClone === "function") {
                              options.afterClone(clone);
                        }
			
			
			plus = clone.find(plusElmnt);
			minus = clone.find(minusElmnt);
			
			minus.get(0).removableClone = clone;
			minus.click(clickOnMinus);
			plus.click(clickOnPlus);
			
			if (options.limit && (options.limit - 2) > clones.length) {
				plus.show();
			}else{
				plus.hide();
			}
			
			clones.push(clone);
		}
		
		function clickOnMinus(event){
			event.preventDefault();
                        
                        if (typeof options.beforeDelete === "function") {
                              options.beforeDelete(this.removableClone);
                        }
			
			if (this.removableClone.effect && options.removeColor) {
				that = this;
				this.removableClone.effect("highlight", {
					color: options.removeColor
				}, options.duration, function(){that.removableClone.remove();});
			} else {
			
				this.removableClone.remove();
			}
			clones.splice(clones.indexOf(this.removableClone),1);
                        
                        if (typeof options.afterDelete === "function") {
                              options.afterDelete(clones);
                        }
                        
			if (clones.length == 0){
				source.find(plusElmnt).show();
			}else{
				clones[clones.length -1].find(plusElmnt).show();
			}
		}
		
		/* Handle click on plus */
		plus.click(clickOnPlus);
		
		/* Handle click on minus */
		minus.click(function(event){
			
		});
		
	}else{
	/* If plus element is out of the template */
		/* Handle click on plus */
		plus.click(function(event){
			var clone;
			
			event.preventDefault();
                        
                        if (typeof options.beforeClone === "function") {
                              options.beforeClone(clones);
                        }
			
			/* On first add, normalize source */
			if (clones.length == 0) {
				normalizeElmnt(source);
				jQuery(minusElmnt).show();
			}
			
			/* Clone template and normalize it */
			clone = template.clone(true).insertAfter(clones[clones.length - 1] || source);
			if (clone.effect && options.createColor) {
				clone.effect("highlight", {color:options.createColor}, options.duration);
			}
			normalizeElmnt(clone);
			
			/* Normalize template id attribute */
			if (clone.attr("id")) {
				clone.attr("id", clone.attr("id") + clones.length);
			}
                        
                        if (typeof options.afterClone === "function") {
                              options.afterClone(clone);
                        }
                        
			if (options.limit && (options.limit - 3) < clones.length) {
				plus.hide();
			}
			clones.push(clone);
		});
		
		/* Handle click on minus */
		minus.click(function(event){
			event.preventDefault();
			var clone = clones.pop();
                        if (typeof options.beforeDelete === "function") {
                              options.beforeDelete(clone);
                        }
			if (clones.length >= 0) {
				if (clone.effect && options.removeColor) {
					that = this;
					clone.effect("highlight", {
						color: options.removeColor, mode:"hide"
					}, options.duration, function(){clone.remove();});
				} else {
					clone.remove();
				}
			}
                        if (typeof options.afterDelete === "function") {
                              options.afterDelete(clones);
                        }
			if (clones.length == 0) {
				jQuery(minusElmnt).hide();
			}
			plus.show();
		});
	}
	
};
