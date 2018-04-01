//{namespace name="faq/translation"}

Ext.define('Shopware.apps.Faq.view.detail.Container', {
    extend: 'Shopware.model.Container',
    padding: 20,


    configure: function() {
        return {
            controller: 'Faq',
            fieldSets: [{
                title: '{s name="window_detail_fieldset_question"}{/s}',
                layout: 'fit',
                fields: {
                    question:{ fieldLabel: '{s name="window_detail_fieldset_question_label_question"}{/s}' },
                    active:{ fieldLabel: '{s name="window_detail_fieldset_question_label_active"}{/s}' },
                }
            },{
                title: '{s name="window_detail_fieldset_answer_label_answer"}{/s}',
                layout: 'fit',
                fields:{
                    answer: this.answer
                }
            }]
        };
    },
    
    answer: function (model, formField) {
        formField.xtype = 'tinymce';
        formField.height = 90;
        formField.grow = true;
        formField.fieldLabel = '{s name="window_detail_fieldset_answer_label_answer"}{/s}';
        return formField;
    }
});