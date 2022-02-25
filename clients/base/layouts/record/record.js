/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
({
    plugins: ['ShortcutSession'],

    shortcuts: [
        'Sidebar:Toggle',
        'Record:Edit',
        'Record:Delete',
        'Record:Save',
        'Record:Cancel',
        'Record:Previous',
        'Record:Next',
        'Record:Favorite',
        'Record:Follow',
        'Record:Copy',
        'Record:Action:More'
    ],

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this.initFocusDrawerComponent(options);
        this._super('initialize', [options]);
    },

    /**
     * Add the focus drawer component
     *
     * @param options
     */
    initFocusDrawerComponent: function(options) {
        if (options && options.meta && options.meta.components) {
            options.meta.components.push({
                layout: {
                    name: 'focus-drawer',
                    type: 'focus-drawer'
                }
            });
        }
    }
})
