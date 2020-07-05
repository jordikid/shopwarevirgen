import './component/sw-plugin-box';
import './extension/sw-settings-index';
import './page/sw-settings-payment-list';
import './page/sw-settings-payment-detail';
import './page/sw-settings-payment-create';

const { Module } = Shopware;

Module.register('sw-settings-payment', {
    type: 'core',
    name: 'settings-payment',
    title: 'sw-settings-payment.general.mainMenuItemGeneral',
    description: 'Payment section in the settings module',
    color: '#9AA8B5',
    icon: 'default-action-settings',
    favicon: 'icon-module-settings.png',
    entity: 'payment_method',

    routes: {
        index: {
            component: 'sw-settings-payment-list',
            path: 'index',
            meta: {
                parentPath: 'sw.settings.index'
            }
        },
        detail: {
            component: 'sw-settings-payment-detail',
            path: 'detail/:id',
            meta: {
                parentPath: 'sw.settings.payment.index'
            }
        },
        create: {
            component: 'sw-settings-payment-create',
            path: 'create',
            meta: {
                parentPath: 'sw.settings.payment.index'
            }
        }
    }
});
