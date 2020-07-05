import { shallowMount } from '@vue/test-utils';
import 'src/module/sw-first-run-wizard/component/sw-first-run-wizard-modal';
import 'src/app/component/base/sw-modal';
import 'src/app/component/base/sw-container';

describe('module/sw-first-run-wizard/sw-first-run-wizard-modal', () => {
    const CreateFirstRunWizardModal = function CreateFirstRunWizardModal() {
        return shallowMount(Shopware.Component.build('sw-first-run-wizard-modal'), {
            stubs: {
                'sw-modal': Shopware.Component.build('sw-modal'),
                'sw-container': Shopware.Component.build('sw-container'),
                'sw-icon': '<div />',
                'router-view': '<div id="router-view" />',
                'sw-button': '<div />'
            },
            mocks: {
                $tc: (translationPath) => translationPath,
                $device: { onResize: () => {} },
                $route: { name: 'sw.first.run.wizard.index.welcome' },
                $router: { push: () => {} }
            },
            provide: {
                firstRunWizardService: { setFRWStart: () => {} },
                shortcutService: { stopEventListener: () => {} }
            },
            props: {}
        });
    };

    it('should be a vue js component', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();

        expect(firstRunWizardModal.isVueInstance()).toBeTruthy();
    });

    it('the default button config should be empty', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();

        expect(firstRunWizardModal.vm.$data.buttonConfig).toStrictEqual([]);
    });

    it('the footer should not contain buttons', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();

        const footerLeft = firstRunWizardModal.find('.footer-left');
        const footerRight = firstRunWizardModal.find('.footer-right');

        expect(footerLeft.isEmpty()).toBeTruthy();
        expect(footerRight.isEmpty()).toBeTruthy();
    });

    it('the button config should have the same config which are emitted by an event', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();
        const routerView = firstRunWizardModal.find('#router-view');

        expect(firstRunWizardModal.vm.$data.buttonConfig).toStrictEqual([]);

        const newButtonConfig = [
            {
                key: 'one',
                label: 'One',
                position: 'left',
                variant: null,
                action: 'route.one',
                disabled: false
            },
            {
                key: 'two',
                label: 'Two',
                position: 'right',
                variant: null,
                action: 'route.two',
                disabled: false
            },
            {
                key: 'three',
                label: 'Three',
                position: 'right',
                variant: 'primary',
                action: 'route.three',
                disabled: true
            }
        ];

        routerView.vm.$emit('buttons-update', newButtonConfig);

        expect(firstRunWizardModal.vm.$data.buttonConfig).toStrictEqual(newButtonConfig);
    });

    it('the footer should have the button config which are emitted by an event', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();
        const routerView = firstRunWizardModal.find('#router-view');

        let footerLeft = firstRunWizardModal.find('.footer-left');
        let footerRight = firstRunWizardModal.find('.footer-right');

        expect(footerLeft.isEmpty()).toBeTruthy();
        expect(footerRight.isEmpty()).toBeTruthy();

        const newButtonConfig = [
            {
                key: 'one',
                label: 'One',
                position: 'left',
                variant: null,
                action: 'route.one',
                disabled: false
            },
            {
                key: 'two',
                label: 'Two',
                position: 'right',
                variant: null,
                action: 'route.two',
                disabled: false
            },
            {
                key: 'three',
                label: 'Three',
                position: 'right',
                variant: 'primary',
                action: 'route.three',
                disabled: true
            }
        ];

        routerView.vm.$emit('buttons-update', newButtonConfig);

        footerLeft = firstRunWizardModal.find('.footer-left');
        footerRight = firstRunWizardModal.find('.footer-right');

        expect(footerLeft.isEmpty()).toBeFalsy();
        expect(footerRight.isEmpty()).toBeFalsy();
    });

    it('the buttonConfig should push a button in the left footer', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();
        const routerView = firstRunWizardModal.find('#router-view');

        const newButtonConfig = [
            {
                key: 'one',
                label: 'One',
                position: 'left',
                variant: null,
                action: 'route.one',
                disabled: false
            }
        ];

        routerView.vm.$emit('buttons-update', newButtonConfig);

        const footerLeft = firstRunWizardModal.find('.footer-left');
        const footerRight = firstRunWizardModal.find('.footer-right');

        expect(footerLeft.isEmpty()).toBeFalsy();
        expect(footerRight.isEmpty()).toBeTruthy();
    });

    it('the buttonConfig should push a button in the right footer', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();
        const routerView = firstRunWizardModal.find('#router-view');

        const newButtonConfig = [
            {
                key: 'one',
                label: 'One',
                position: 'right',
                variant: null,
                action: 'route.one',
                disabled: false
            }
        ];

        routerView.vm.$emit('buttons-update', newButtonConfig);

        const footerLeft = firstRunWizardModal.find('.footer-left');
        const footerRight = firstRunWizardModal.find('.footer-right');

        expect(footerLeft.isEmpty()).toBeTruthy();
        expect(footerRight.isEmpty()).toBeFalsy();
    });

    it('the buttonConfig should overwrite the previous one', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();
        const routerView = firstRunWizardModal.find('#router-view');
        let footerLeft;
        let footerRight;

        const firstButtonConfig = [
            {
                key: 'one',
                label: 'One',
                position: 'right',
                variant: null,
                action: 'route.one',
                disabled: false
            }
        ];

        routerView.vm.$emit('buttons-update', firstButtonConfig);

        footerLeft = firstRunWizardModal.find('.footer-left');
        footerRight = firstRunWizardModal.find('.footer-right');

        expect(footerLeft.isEmpty()).toBeTruthy();
        expect(footerRight.isEmpty()).toBeFalsy();

        const secondButtonConfig = [
            {
                key: 'second',
                label: 'Second',
                position: 'left',
                variant: null,
                action: 'route.two',
                disabled: true
            }
        ];

        routerView.vm.$emit('buttons-update', secondButtonConfig);

        footerLeft = firstRunWizardModal.find('.footer-left');
        footerRight = firstRunWizardModal.find('.footer-right');

        expect(footerLeft.isEmpty()).toBeFalsy();
        expect(footerRight.isEmpty()).toBeTruthy();
    });

    it('the title should show an warning when not defined', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();

        expect(firstRunWizardModal.vm.$data.title).toBe('No title defined');
    });

    it('the title should be updated when the router view emits an event', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();
        const routerView = firstRunWizardModal.find('#router-view');

        const newTitle = 'fooBar';

        routerView.vm.$emit('frw-set-title', newTitle);

        expect(firstRunWizardModal.vm.$data.title).toBe(newTitle);
    });

    it('onButtonClick: should call the redirect function when string', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();
        const spy = jest.spyOn(firstRunWizardModal.vm, 'redirect');

        expect(spy).not.toHaveBeenCalled();

        firstRunWizardModal.vm.onButtonClick('foo.bar');

        expect(spy).toHaveBeenCalled();
    });

    it('onButtonClick: should call the callback function', () => {
        const firstRunWizardModal = new CreateFirstRunWizardModal();
        const callbackFunction = jest.fn();

        expect(callbackFunction).not.toHaveBeenCalled();

        firstRunWizardModal.vm.onButtonClick(callbackFunction);

        expect(callbackFunction).toHaveBeenCalled();
    });
});
