Ext.define('Shopware.apps.Faq.model.Faq', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'Faq',
            detail: 'Shopware.apps.Faq.view.detail.Container'
        };
    },

    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'question', type: 'string', useNull: false },
        { name : 'answer', type: 'string', useNull: false },
        { name : 'active', type: 'boolean', useNull: false },
    ]
});