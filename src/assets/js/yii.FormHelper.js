/**
 * Yii form widget.
 *
 * This is the JavaScript widget used by the yii\widgets\ActiveForm widget.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
(function ($) {

    $.fn.FormHelper = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.yiiActiveForm');
            return false;
        }
    };

    var methods = {
        
        load: function (url) {
            var helper = this;
            //debug(helper);
            var data = $(this).serialize();
            $.ajax({
                'type':'POST',
                'url':url,
                'data':data,
                'success':function(data){
                    insertData(helper,data);
                },
            }); 
        },
        
        // find an attribute config based on the specified attribute ID
        unlockfields:function () {
            $(this).find('[readonly="readonly"]').removeAttr('readonly');
            $(this).find('option:not(.asmOptionDisabled)').removeAttr('disabled','disabled');
            $(this).find('.asmSelect,.asmListItemRemove').show();
            $(this).find('ol.asmList').addClass('asmListSortable');
            $(this).find('ol.asmList span').addClass('asmListItemLabel');
        }
    };

        // add a new attribute to the form dynamically.
        // please refer to attributeDefaults for the structure of attribute
    var insertData = function (frm,attribute) {
            //debug(frm)
            //debug(attribute);
            if(typeof attribute.responce.map != 'undefined'){
                $.each(attribute.responce.map,function(){
                    obj = getInput(this.id);
                    
                    switch(this.type){
                        case 'text': 
                                    if(this.lock || (obj.val() == '')){
                                        obj.val(this.value);
                                    }
                                    break;
                        case 'select': 
                                    if(this.lock || (obj.val() == '')){
                                        obj.val(this.value);
                                    }
                                    break;
                        case 'asm': 
                                    //debug(obj.val())
                                    if(this.lock || (obj.val() == null)){
                                        val_ar = this.value.split(',');
                                        //var res = this;
                                        //debug(obj)
                                        var exp = [];
                                        obj.children('[data-order]').removeAttr("data-order");                                        
                                        var order = 0;
                                        $.each(val_ar,function(){
                                           order++;
                                           obj.children('[value="'+this+'"]').attr({
                                                "selected":"selected",
                                                'data-order':order
                                           }); 
                                           exp.push('[value="'+this+'"]');
                                        });

                                        obj.children(':not('+exp.join()+')').removeAttr("selected");
                                        obj.change();
                                    }
                                    break;
                    }
                    lockfield(this);
                });
            }
        };
        
    var getInput = function(id){
        return jQuery('#'+id);
    };
        
        // remove the attribute with the specified ID from the form
    var lockfield = function (obj) {
            inputobj = getInput(obj.id);
                    
            switch(obj.type){
                case 'text': if(obj.lock){ inputobj.attr('readonly',true);}
                                else {
                                    inputobj.removeAttr('readonly');
                                }
                            break;
                case 'select':  if(obj.lock){
                                    inputobj.attr('readonly',true);
                                    inputobj.find('option:not(:selected)').attr('disabled','disabled');
                                }else { 
                                    inputobj.removeAttr('readonly');
                                    inputobj.find('option').removeAttr('disabled','disabled');
                                }
                                break;
                
                case 'asm': if(obj.lock){                                 
                                inputobj.parent().find('ol.asmList').removeClass('asmListSortable');
                                inputobj.parent().find('ol.asmList span').removeClass('asmListItemLabel');
                                inputobj.parent().find('.asmSelect,.asmListItemRemove').hide();
                            }else{//asmListItemLabel
                                inputobj.parent().find('.asmSelect,.asmListItemRemove').show();
                                inputobj.parent().find('ol.asmList').addClass('asmListSortable');                                
                                inputobj.parent().find('ol.asmList span').addClass('asmListItemLabel');
                            }
                            break;
            }
        };
})(window.jQuery);
