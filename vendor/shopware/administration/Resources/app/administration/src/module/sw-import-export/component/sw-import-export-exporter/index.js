import template from './sw-import-export-exporter.html.twig';

const { Mixin } = Shopware;

/**
 * @private
 */
Shopware.Component.register('sw-import-export-exporter', {
    template,

    inject: ['importExport', 'repositoryFactory'],

    mixins: [
        Mixin.getByName('notification')
    ],

    data() {
        return {
            selectedProfileId: null,
            progressOffset: 0,
            progressTotal: null,
            progressText: '',
            progressState: '',
            progressLogEntry: null,
            isLoading: false
        };
    },

    computed: {
        disableExporting() {
            return this.isLoading || this.selectedProfileId === null;
        },
        logRepository() {
            return this.repositoryFactory.create('import_export_log');
        }
    },

    methods: {
        onStartProcess() {
            this.isLoading = true;

            // Reset progress stats
            this.progressOffset = 0;
            this.progressTotal = 0;
            this.progressText = '';
            this.progressState = '';
            this.progressLogEntry = null;

            this.importExport.export(this.selectedProfileId, this.handleProgress).then(res => {
                const logEntry = res.data.log;

                this.logRepository.get(logEntry.id, Shopware.Context.api).then((entry) => {
                    this.progressLogEntry = entry;
                });
            });
        },

        handleProgress(progress) {
            this.progressOffset = progress.offset;
            this.progressTotal = progress.total;
            // ToDo snippet text for states
            this.progressText = progress.state;
            this.progressState = progress.state;

            if (progress.state === 'succeeded') {
                this.onProgressFinished(progress);
            }
        },

        onProgressFinished() {
            this.createNotificationSuccess({
                title: this.$tc('sw-import-export.exporter.titleExportSuccess'),
                message: this.$tc('sw-import-export.exporter.messageExportSuccess', 0)
            });
            this.isLoading = false;
            this.$emit('export-finish');
        }
    }
});
