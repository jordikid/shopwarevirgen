import './extension/sw-settings-index';
import './page/sw-settings-customer-group-list';
import './page/sw-settings-customer-group-detail';

const { Module } = Shopware;

Module.register('sw-settings-customer-group', {
    type: 'core',
    name: 'settings-customer-group',
    title: 'sw-settings-customer-group.general.mainMenuItemGeneral',
    description: 'sw-settings-customer-group.general.description',
    version: '1.0.0',
    targetVersion: '1.0.0',
    color: '#9AA8B5',
    icon: 'default-action-settings',
    favicon: 'icon-module-settings.png',
    entity: 'customer_group',

    routes: {
        index: {
            component: 'sw-settings-customer-group-list',
            path: 'index',
            meta: {
                parentPath: 'sw.settings.index'
            }
        },
        detail: {
            component: 'sw-settings-customer-group-detail',
            path: 'detail/:id',
            meta: {
                parentPath: 'sw.settings.customer.group.index'
            },
            props: {
                default(route) {
                    return {
                        customerGroupId: route.params.id
                    };
                }
            }
        },
        create: {
            component: 'sw-settings-customer-group-detail',
            path: 'create',
            meta: {
                parentPath: 'sw.settings.customer.group.index'
            }
        }
    }
});
