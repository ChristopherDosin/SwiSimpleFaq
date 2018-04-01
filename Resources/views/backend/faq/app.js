Ext.define('Shopware.apps.Faq', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.Faq',

    loadPath: '{url action=load}',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'list.Window',
        'list.List',

        'detail.Window',
        'detail.Container'
    ],

    models: [ 'Faq' ],
    stores: [ 'Faq' ],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});