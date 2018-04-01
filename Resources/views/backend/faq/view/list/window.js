//{namespace name="faq/translation"}

Ext.define('Shopware.apps.Faq.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.faq-reporting-list-window',
    height: 450,
    title : '{s name="window_listing_title"}{/s}',

    configure: function() {
        return {
            listingGrid: 'Shopware.apps.Faq.view.list.List',
            listingStore: 'Shopware.apps.Faq.store.Faq'
        }


    }
});