Ext.define('Shopware.apps.Faq.store.Faq', {
    extend:'Shopware.store.Listing',

    configure: function() {
        return {
            controller: 'Faq'
        };
    },
    model: 'Shopware.apps.Faq.model.Faq'
});
