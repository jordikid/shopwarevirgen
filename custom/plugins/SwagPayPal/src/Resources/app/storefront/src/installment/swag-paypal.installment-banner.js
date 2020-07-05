/* eslint-disable import/no-unresolved */

import DomAccess from 'src/helper/dom-access.helper';
import SwagPaypalAbstractButtons from '../swag-paypal.abstract-buttons';

export default class SwagPayPalInstallmentBanner extends SwagPaypalAbstractButtons {
    static options = {
        /**
         * This option holds the client id specified in the settings
         *
         * @type string
         */
        clientId: '',

        /**
         * Amount of money, which will be used to calculate the examples
         *
         * @type number
         */
        amount: 0,

        /**
         * Currency used for the examples
         *
         * @type string
         */
        currency: 'EUR',

        /**
         * Layout of the installment banner
         * Available layouts:
         *  - flex (graphical)
         *  - text
         *
         * @type string
         */
        layout: 'text',

        /**
         * Color of the graphical banner
         * Available colors:
         *  - blue
         *  - black
         *  - white
         *  - gray
         *
         * @type string
         */
        color: 'blue',

        /**
         * Ratio of the graphical banner
         * Available values:
         *  - 1x1
         *  - 20x1
         *  - 8x1
         *  - 1x4
         *
         * @type string
         */
        ratio: '8x1',

        /**
         * Layout type for the text banner
         * Available values:
         *  - primary
         *  - alternative
         *  - inline
         *  - none
         *
         * @type string
         */
        logoType: 'primary',

        /**
         * Text color of the text banner.
         * Available values:
         *  - black
         *  - white
         */
        textColor: 'black',
    };

    init() {
        this.paypal = null;
        const isConfirmPage = DomAccess.getDataAttribute(this.el, 'swag-paypal-installment-banner-is-confirm', false) === true;

        if (isConfirmPage === false) {
            this.createInstallmentBanner();
            return;
        }

        const body = DomAccess.querySelector(document, 'body');
        const $body = $(body);
        $body.on('shown.bs.modal', (event) => {
            if (event.target.classList.contains('confirm-payment-modal')) {
                this.createInstallmentBanner();
            }
        });
    }

    createInstallmentBanner() {
        this.createScript(() => {
            this.paypal = window.paypal;

            this.paypal.Messages(this.getBannerConfig()).render(this.el);
        });
    }

    getBannerConfig() {
        return {
            amount: this.options.amount,
            currency: this.options.currency,
            style: {
                layout: this.options.layout,
                color: this.options.color,
                ratio: this.options.ratio,
                logo: {
                    type: this.options.logoType,
                },
                text: {
                    color: this.options.textColor,
                },
            },
        };
    }
}
