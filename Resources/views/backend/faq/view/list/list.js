//{namespace name="faq/translation"}

Ext.define('Shopware.apps.Faq.view.list.List', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.faq-reporting-listing-grid',
    region: 'center',

    configure: function() {
        return {
            detailWindow: 'Shopware.apps.Faq.view.detail.Window',
            columns: {
                question: { header: '{s name="window_listing_header_question"}{/s}', flex: 4 } ,
                answer: { header: '{s name="window_listing_header_answer"}{/s}', flex: 5 } ,
                active: { header: '{s name="window_listing_header_active"}{/s}', flex: 1 }
            }
        };
    }

});