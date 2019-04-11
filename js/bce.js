/**
 * Bootstrap Components Enabler (BCE) Library v0.1 Alpha (22/02/2016)
 *
 * Created by Ivan Montilla for IA-Team (c) 2016
 *
 * bce.ia-team.es
 * ivan@ia-team.es
 *
 * You're free to use, adapt and contribute this library.
 * If you want to contribute, please email me to ivan@ia-team.es
 */

const BCE = {
    /**
     * Size constants.
     */
    EXTRA_SMALL_SIZE: "xs",
    SMALL_SIZE: "sm",
    MEDIUN_SIZE: "md",
    LARGE_SIZE: "lg",

    /**
     * Create a Bootstrap modal dialog.
     * @param o Object Object options.
     * @param o.id String Modal ID attribute.
     * @param o.size String [OPTIONAL] (SM|LG) Modal Size, set "SM" for small modal, "LG" for large modal,
     *   or not set anything for default modal.
     * @param o.closeButton [OPTIONAL] Boolean Show or not default close. True by default.
     * @param o.title String Title of modal dialog.
     * @param o.body jQuery jQuery object to show in body dialog.
     * @param o.buttons Array [OPTIONAL] Array of objects that define buttons.
     * @param o.onClose function [OPTIONAL] Callback function called when the modal dialog hidden.
     */
    showDialog: function(o) {

        //We create de modal div
        var mainDiv = $(
            '<div id="' + o.id + '" class="modal fade" role="dialog">' +
                '<div class="modal-dialog">' +
                    '<div class="modal-content">' +
                        '<div class="modal-header">' +
                            '<h4 class="modal-title">' + o.title + '</h4>' +
                        '</div>' +
                        '<div class="modal-body"></div>' +
                    '</div>' +
                '</div>' +
            '</div>'
        );

        //We add the close button if closeButton property is set to true, or don't exists.
        if (o.closeButton || typeof o.closeButton === "undefined") {
            mainDiv.find('.modal-header').prepend(
                '<button type="button" class="close" data-dismiss="modal">&times;</button>'
            );
        }

        //We append the modal div to the body
        $('body').append(mainDiv);

        //We create the variable thats points the modal div.
        var modal = $('#' + o.id);

        //We append the body to modal.
        if (o.body instanceof jQuery) {
            modal.find(".modal-body").append(o.body);
        } else console.log("BCE.dialog WARNING: Property body must be a jQuery object.");

        //We add buttons to modal footer
        if (typeof o.buttons !== "undefined") {
            if (o.buttons instanceof Array) {
                modal.find('.modal-content').append('<div class="modal-footer"></div>');
                for (var i = 0; i < o.buttons.length; i++) {
                    if (typeof o.buttons[i] === "object") {
                        var btn = $('<button type="button" class="' + o.buttons[i].class + '">' + o.buttons[i].label + '</button>');
                        if (typeof o.buttons[i].onClick === "function") {
                            btn.on('click', o.buttons[i].onClick);
                        } else console.log("BCE.dialog WARNING: Property buttons[i].onClick must be a function.");
                        modal.find('.modal-footer').append(btn);
                    } else console.log("BCE.dialog WARNING: Property buttons must be array of objects.");
                }
            } else console.log("BCE.dialog WARNING: Property buttons must be array of objects.");
        }

        //We add onHidden callback to modal.
        modal.on('hidden.bs.modal', function() {
            if (typeof o.onClose === "function")
                o.onClose();
            else if(typeof o.onClose !== "undefined") console.log("BCE.dialog WARNING: Property onClose must be a function or undefined.");
            mainDiv.remove();
        });

        //We change the modal size.
        if (typeof o.size !== "undefined") {
            switch (o.size) {
                case "sm": modal.find('.modal-dialog').addClass("modal-sm"); break;
                case "lg": modal.find('.modal-dialog').addClass("modal-lg"); break;
                default: console.log("BCE.dialog WARNING: Property size must be \"lg\" or \"sm\".");
            }
        }

        //We show de modal.
        modal.modal();
    },

    /**
     * Call this function at buttons[i].onClick property for close the dialog.
     */
    closeDialog: function() {
        $('[role="dialog"]').modal('hide');
    }
};