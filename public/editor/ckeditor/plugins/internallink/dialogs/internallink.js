
var modelId = null;

var modelName = '';

var modelType = '';

var ajaxUrls = {};

var keywords = [];

CKEDITOR.dialog.add( 'internallinkDialog', function ( editor ) {
    ajaxUrls = editor.config.internallinkAjaxUrls;
    return {
        // ... The dialog definition comes here ...
        title: 'Internallink Properties',
        minWidth: 0.9 * window.innerWidth,
        minHeight: 0.7 * window.innerHeight,

        contents: [
            {
                id: 'tab-basic',
                label: 'Basic Settings',
                elements: [
                    // UI elements of the first tab will be defined here.
                    {
                        type: 'hbox',
                        widths: [ '25%', '75%' ],
                        children: [
                            {
                                type: 'select',
                                id: 'model-type',
                                label: 'Model Type',
                                items: [
                                    ['Static Page', 'StaticPage'],
                                    ['Article', 'Article'],
                                    ['Article Category', 'ArticleCategory']
                                ],
                                default: 'StaticPage',
                                validate: CKEDITOR.dialog.validate.notEmpty( "Model Type field cannot be empty." ),
                                onChange: function ( element ) {
                                    modelType = this.getValue();
                                    modelId = null;
                                    modelName = '';
                                    $('#' + ckeInputElement('tab-basic', 'model').id).empty();
                                    ckeInputElement('tab-basic', 'text').value = '';
                                    ckeInputElement('tab-basic', 'title').value = '';
                                },
                                setup: function( element ) {
                                    this.setValue( element.getAttribute( "data-model-type" ) );
                                },
                                commit: function( element ) {
                                    element.setAttribute( "data-model-type", this.getValue() );
                                }
                            },
                            {
                                type: 'select',
                                id: 'model',
                                label: 'Model',
                                items: [],
                                validate: CKEDITOR.dialog.validate.notEmpty( "Model field cannot be empty." ),
                                setup: function( element ) {
                                    this.setValue( element.getAttribute( "data-model-id" ) );
                                },
                                commit: function( element ) {
                                    // var input = this.getInputElement().$;
                                    element.setAttribute( "data-model-id", modelId );
                                    element.setAttribute( "data-model-name", modelName );
                                }
                            }
                        ]
                    },
                    {
                        type: 'select',
                        id: 'keyword',
                        label: 'Keyword',
                        items: [],
                        setup: function( element ) {
                            this.disable();
                            var text = ckeContentElement( 'tab-basic', 'text' );
                            var title = ckeContentElement( 'tab-basic', 'title' );
                            var autoText = ckeContentElement( 'tab-basic', 'auto-text' );
                            var autoTitle = ckeContentElement( 'tab-basic', 'auto-title' );
                            var titleLikeText = ckeContentElement( 'tab-basic', 'title-like-text' );
                            $.post(
                                ajaxUrls.searchKeywords,
                                {
                                    model_id : element.getAttribute( 'data-model-id' ),
                                    model_type: element.getAttribute( 'data-model-type' )
                                },
                                function (data, status) {
                                    if (status === 'success') {
                                        keywords = JSON.parse(data);
                                    } else {
                                        keywords = [];
                                    }
                                    this.clear();
                                    if (keywords.length > 0) {
                                        keywords.forEach(function (keyword) {
                                            this.add(keyword.value, keyword.id);
                                        }, this);
                                        this.setValue( element.getAttribute( "title" ) );
                                        this.enable();
                                        autoText.setValue( false );
                                        autoTitle.setValue( false );
                                        titleLikeText.setValue( true );
                                        autoText.disable();
                                        autoTitle.disable();
                                        titleLikeText.disable();
                                        text.disable();
                                        title.disable();
                                    } else {
                                        if (!autoText.getValue()) {
                                            text.enable();
                                        }
                                        if (!autoTitle.getValue()) {
                                            title.enable();
                                        }
                                        autoText.enable();
                                        autoTitle.enable();
                                        titleLikeText.enable();
                                    }
                                }.bind(this)
                            );
                        },
                        commit: function( element ) {
                            // element.setAttribute( "data-keyword-id", this.getValue() );
                        },
                        onChange: function () {
                            var keyword_id = this.getValue();
                            var keyword = keywords.filter( function (keyword) {
                                return keyword_id == keyword.id;
                            } )[0];
                            if (keyword) {
                                ckeContentElement( 'tab-basic', 'text' ).setValue( keyword.value );
                                ckeContentElement( 'tab-basic', 'title' ).setValue( keyword.value );
                            }
                        }
                    },
                    {
                        type: 'hbox',
                        widths: [ '50%', '50%' ],
                        children: [
                            {
                                type: 'text',
                                id: 'text',
                                label: 'Text',
                                validate: CKEDITOR.dialog.validate.notEmpty( "Text field cannot be empty." ),
                                setup: function( element ) {
                                    this.setValue( element.getText() );
                                },
                                commit: function( element ) {
                                    element.setText( this.getValue() );
                                },
                                onInput: function () {
                                    if ( ckeContentElement( 'tab-basic', 'title-like-text' ).getValue() ) {
                                        ckeContentElement( 'tab-basic', 'title' ).setValue( this.getValue() );
                                    }
                                }
                            },
                            {
                                type: 'text',
                                id: 'title',
                                label: 'Title',
                                validate: CKEDITOR.dialog.validate.notEmpty( "Title field cannot be empty." ),
                                setup: function( element ) {
                                    this.setValue( element.getAttribute( "title" ) );
                                },
                                commit: function( element ) {
                                    element.setAttribute( "title", this.getValue());
                                },
                                onInput: function () {
                                    if ( ckeContentElement( 'tab-basic', 'title-like-text' ).getValue() ) {
                                        ckeContentElement( 'tab-basic', 'text' ).setValue( this.getValue() );
                                    }
                                }
                            }
                        ]
                    },
                    {
                        type: 'hbox',
                        widths: [ '50%', '50%' ],
                        children: [
                            {
                                type: 'checkbox',
                                id: 'auto-text',
                                label: 'Auto Text',
                                // default: 'checked',
                                onChange: function() {
                                    var text = ckeContentElement( 'tab-basic', 'text' );
                                    var autoTitle = ckeContentElement( 'tab-basic', 'auto-title' );
                                    var titleLikeText = ckeContentElement( 'tab-basic', 'title-like-text' );
                                    if (this.getValue() && modelName) {
                                        text.setValue(modelName);
                                        text.disable();
                                    } else {
                                        text.enable();
                                    }
                                    if (titleLikeText.getValue()) {
                                        if (autoTitle.getValue() !== this.getValue()) {
                                            autoTitle.setValue( this.getValue() );
                                        }
                                    }
                                },
                                setup: function( element ) {
                                    this.setValue( 'true' === element.getAttribute('data-auto-text') );
                                },
                                commit: function( element ) {
                                    element.setAttribute('data-auto-text', this.getValue());
                                }
                            },
                            {
                                type: 'checkbox',
                                id: 'auto-title',
                                label: 'Auto Title',
                                // default: 'checked',
                                onChange: function() {
                                    var title = ckeContentElement( 'tab-basic', 'title' );
                                    var autoText = ckeContentElement( 'tab-basic', 'auto-text' );
                                    var titleLikeText = ckeContentElement( 'tab-basic', 'title-like-text' );
                                    if (this.getValue() && modelName) {
                                        title.setValue(modelName);
                                        title.disable();
                                    } else {
                                        title.enable();
                                    }
                                    if (titleLikeText.getValue()) {
                                        if (autoText.getValue() !== this.getValue()) {
                                            autoText.setValue( this.getValue() );
                                        }
                                    }
                                },
                                setup: function( element ) {
                                    this.setValue( 'true' === element.getAttribute('data-auto-title') );
                                },
                                commit: function( element ) {
                                    element.setAttribute('data-auto-title', this.getValue());
                                }
                            }
                        ]
                    },
                    {
                        type: 'checkbox',
                        id: 'title-like-text',
                        label: 'Title like Text',
                        default: 'checked',
                        onChange: function() {
                            if (this.getValue()) {
                                ckeContentElement( 'tab-basic', 'auto-title' ).setValue( ckeContentElement( 'tab-basic', 'auto-text' ).getValue() );
                                ckeContentElement( 'tab-basic', 'title' ).setValue( ckeContentElement( 'tab-basic', 'text' ).getValue() )
                            }
                        },
                        setup: function( element ) {
                            this.setValue(
                                (element.getAttribute('data-auto-title') === element.getAttribute('data-auto-text')
                                && element.getAttribute('title') === element.getText())
                            );
                        },
                        commit: function( element ) {
                        }
                    }
                ]
            },
            {
                id: 'tab-adv',
                label: 'Advanced Settings',
                elements: [
                    // UI elements of the second tab will be defined here.
                    {
                        type: 'text',
                        id: 'id',
                        label: 'Id',
                        setup: function( element ) {
                            this.setValue( element.getAttribute( "id" ) );
                        },
                        commit: function ( element ) {
                            var id = this.getValue();
                            if ( id ) {
                                element.setAttribute( 'id', id );
                            } else if ( !this.insertMode ) {
                                element.removeAttribute( 'id' );
                            }
                        }
                    },
                    {
                        type: 'text',
                        id: 'class',
                        label: 'Class',
                        setup: function( element ) {
                            this.setValue( element.getAttribute( "class" ) );
                        },
                        commit: function ( element ) {
                            var className = this.getValue();
                            if ( className ) {
                                element.setAttribute( 'class', className );
                            } else if ( !this.insertMode ) {
                                element.removeAttribute( 'class' );
                            }
                        }
                    }
                ]
            }
        ],

        // Act on tab switching
        onLoad : function() {
            // Act on tab switching
            this.on('selectPage', function (event) {
                // console.log('modelId: ' + modelId, 'modelName: ' + modelName, 'modelType: ' + modelType);
            });
        },

        onShow: function() {

            // The code that will be executed when a dialog window is loaded.
            var selection = editor.getSelection();
            var element = selection.getStartElement();

            if ( element ) {
                element = element.getAscendant( 'template-a', true );
            }

            if ( !element || element.getName() != 'template-a' ) {
                element = editor.document.createElement( 'template-a' );
                this.insertMode = true;
            } else {
                this.insertMode = false;
            }

            // if (this.insertMode) {
            //     ckeContentElement('tab-basic', 'title-like-text').setValue(true);
            // } else {
            //     ckeContentElement('tab-basic', 'title-like-text').setValue(element.getAttribute('title') === element.getText());
            // }

            this.element = element;

            if ( !this.insertMode ) {
                this.setupContent( element );
            }

            // Select2
            var selector = '#' + ckeInputElement('tab-basic', 'model').id;
            select2(selector);
            if (this.insertMode) {
                // $(selector).select2('open');
                modelId = null;
                modelName = '';
                modelType = '';
            } else {
                modelId = element.getAttribute('data-model-id');
                modelName = element.getAttribute('data-model-name');
                modelType = element.getAttribute('data-model-type');
                $(selector).empty().append('<option value="' + modelId + '">' + modelName + '</option>')
                    .val(modelId).trigger("change");
            }

            if (ckeContentElement('tab-basic', 'auto-title').getValue()) {
                ckeContentElement('tab-basic', 'title').disable();
            }
            if (ckeContentElement('tab-basic', 'auto-text').getValue()) {
                ckeContentElement('tab-basic', 'text').disable();
            }
        },

        onOk: function() {
            var dialog = this;
            var internallink = dialog.element;

            dialog.commitContent( internallink );

            if ( dialog.insertMode ) {
                editor.insertElement( internallink );
            }
        }
    };
});

function select2(selector) {
    $(selector).select2({
        ajax: {
            url: ajaxUrls.searchModels,
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page,
                    type: modelType || ckeContentElement( 'tab-basic', 'model-type' ).default
                };
            },
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;

                return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
        minimumInputLength: 0,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    });

    function formatRepo (repo) {
        if (repo.loading) {
            return repo.text;
        }
        return (
            '<div class="select2-option-row">' +
                '<div class="select2-option-row--left">' +
                    (repo.image_src ? ' <img src="' + repo.image_src + '">' : '') +
                '</div>' +
                '<div class="select2-option-row--right">' +
                    '<div class="__name">' + repo.name + '</div>' +
                    '<div class="__url">' + repo.url + '</div>' +
                '</div>' +
            '</div>'
        );
    }

    function formatRepoSelection (repo) {
        modelId = repo.id;
        modelName = repo.name || repo.text;
        return modelName + (repo.url ? ' &rightarrow; ' + repo.url : '');
    }

    $(selector).on("select2:select", function (event) {
        if (ckeContentElement('tab-basic', 'auto-text').getValue()) {
            ckeContentElement('tab-basic', 'text').disable();
            ckeContentElement('tab-basic', 'text').setValue(modelName);
        }
        if (ckeContentElement('tab-basic', 'auto-title').getValue()) {
            ckeContentElement('tab-basic', 'title').disable();
            ckeContentElement('tab-basic', 'title').setValue(modelName);
        }

        var keyword_sel = ckeContentElement( 'tab-basic', 'keyword' );
        var text = ckeContentElement( 'tab-basic', 'text' );
        var title = ckeContentElement( 'tab-basic', 'title' );
        var autoText = ckeContentElement( 'tab-basic', 'auto-text' );
        var autoTitle = ckeContentElement( 'tab-basic', 'auto-title' );
        var titleLikeText = ckeContentElement( 'tab-basic', 'title-like-text' );
        keyword_sel.disable();

        $.post(
            ajaxUrls.searchKeywords,
            {
                model_id : modelId,
                model_type: modelType || 'StaticPage'
            },
            function (data, status) {
                if (status === 'success') {
                    keywords = JSON.parse(data);
                } else {
                    keywords = [];
                }
                keyword_sel.clear();
                console.log('keywords', keywords);
                if (keywords.length > 0) {
                    keywords.forEach(function (keyword) {
                        keyword_sel.add(keyword.value, keyword.id);
                    });
                    keyword_sel.enable();
                    keyword_sel.onChange();
                    autoText.setValue( false );
                    autoTitle.setValue( false );
                    titleLikeText.setValue( true );
                    autoText.disable();
                    autoTitle.disable();
                    titleLikeText.disable();
                    text.disable();
                    title.disable();
                } else {
                    if (!autoText.getValue()) {
                        text.enable();
                    }
                    if (!autoTitle.getValue()) {
                        title.enable();
                    }
                    autoText.enable();
                    autoTitle.enable();
                    titleLikeText.enable();
                }
            }
        );

    });
}

/**
 * Helper functions
 */

/**
 * @param tabId
 * @param elmId
 * @returns {*}
 */
function ckeInputElement(tabId, elmId)
{
    return ckeContentElement( tabId, elmId ).getInputElement().$;
}

/**
 *
 * @param tabId
 * @param elmId
 * @returns {*|CKEDITOR.ui.dialog.uiElement}
 */
function ckeContentElement(tabId, elmId) {
    return CKEDITOR.dialog.getCurrent().getContentElement( tabId, elmId );
}
