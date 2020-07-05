import template from './sw-sales-channel-detail-domains.html.twig';
import './sw-sales-channel-detail-domains.scss';

const { Component, Context } = Shopware;
const { Criteria } = Shopware.Data;


Component.register('sw-sales-channel-detail-domains', {
    template,

    inject: [
        'repositoryFactory'
    ],

    props: {
        salesChannel: {
            required: true
        }
    },

    computed: {
        domainRepository() {
            return this.repositoryFactory.create(
                this.salesChannel.domains.entity,
                this.salesChannel.domains.source
            );
        },

        currentDomainModalTitle() {
            if (this.currentDomain.url && this.currentDomain.url.length) {
                return this.$t('sw-sales-channel.detail.titleEditDomain', 0, { name: this.currentDomain.url });
            }
            return this.$t('sw-sales-channel.detail.titleCreateDomain');
        },

        currentDomainModalButtonText() {
            if (this.currentDomain.url && this.currentDomain.url.length) {
                return this.$t('sw-sales-channel.detail.buttonEditDomain');
            }
            return this.$t('sw-sales-channel.detail.buttonAddDomain');
        },

        salesChannelFilterCriteria() {
            const criteria = new Criteria();

            criteria.addAssociation('salesChannels');

            return criteria.addFilter(Criteria.equals('salesChannels.id', this.salesChannel.id));
        }
    },

    data() {
        return {
            currentDomain: null,
            currentDomainBackup: {
                url: null,
                language: null,
                languageId: null,
                currency: null,
                currencyId: null,
                snippetSet: null,
                snippetSetId: null
            },
            isLoadingDomains: false,
            deleteDomain: null
        };
    },

    methods: {
        setCurrentDomainBackup(domain) {
            this.currentDomainBackup = {
                url: domain.url,
                language: domain.language,
                languageId: domain.languageId,
                currency: domain.currency,
                currencyId: domain.currencyId,
                snippetSet: domain.snippetSet,
                snippetSetId: domain.snippetSetId
            };
        },

        resetCurrentDomainToBackup() {
            this.currentDomain.url = this.currentDomainBackup.url;
            this.currentDomain.language = this.currentDomainBackup.language;
            this.currentDomain.languageId = this.currentDomainBackup.languageId;
            this.currentDomain.currency = this.currentDomainBackup.currency;
            this.currentDomain.currencyId = this.currentDomainBackup.currencyId;
            this.currentDomain.snippetSet = this.currentDomainBackup.snippetSet;
            this.currentDomain.snippetSetId = this.currentDomainBackup.snippetSetId;
        },

        onClickOpenCreateDomainModal() {
            this.currentDomain = this.domainRepository.create(Context.api);
            this.setCurrentDomainBackup(this.currentDomain);
        },

        onClickAddNewDomain() {
            const currentDomainId = this.currentDomain.id;

            if (this.currentDomain.isNew() && !this.salesChannel.domains.has(currentDomainId)) {
                this.salesChannel.domains.add(this.currentDomain);
            }
            this.currentDomain = null;
        },

        onClickEditDomain(domain) {
            this.currentDomain = domain;
            this.setCurrentDomainBackup(this.currentDomain);
        },

        onCloseCreateDomainModal() {
            this.resetCurrentDomainToBackup();
            this.currentDomain = null;
        },

        onClickDeleteDomain(domain) {
            if (domain.isNew()) {
                this.onConfirmDeleteDomain(domain);
            } else {
                this.deleteDomain = domain;
            }
        },

        onConfirmDeleteDomain(domain) {
            this.deleteDomain = null;

            this.$nextTick(() => {
                this.salesChannel.domains.remove(domain.id);
            });
        },

        onCloseDeleteDomainModal() {
            this.deleteDomain = null;
        },

        onOptionSelect(name, entity) {
            this.currentDomain[name] = entity;
        },

        getDomainColumns() {
            return [{
                property: 'url',
                dataIndex: 'url',
                label: this.$t('sw-sales-channel.detail.columnDomainUrl'),
                allowResize: false,
                primary: true,
                inlineEdit: true
            }, {
                property: 'languageId',
                dataIndex: 'languageId',
                label: this.$t('sw-sales-channel.detail.columnDomainLanguage'),
                allowResize: false,
                inlineEdit: false
            }, {
                property: 'snippetSetId',
                dataIndex: 'snippetSetId',
                label: this.$t('sw-sales-channel.detail.columnDomainSnippetSet'),
                allowResize: false,
                inlineEdit: false
            }, {
                property: 'currencyId',
                dataIndex: 'currencyId',
                label: this.$t('sw-sales-channel.detail.columnDomainCurrency'),
                allowResize: false,
                inlineEdit: false
            }];
        }
    }
});
