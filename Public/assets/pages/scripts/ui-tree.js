var UITree = function () {
    var ajaxTreeSample = function () {
       var s;
        $('#tree_4').on("changed.jstree", function (e, data) {
            s=(data.selected);
        });
         $("#tree_4").jstree({
            "core": {
                "themes": {
                    "responsive": false
                },
                // so that create works
                "check_callback": true,
                'data': {
                    'url': function (node) {
                        return 'http://localhost/sae_uejlm/public/demo/jstree_ajax_data.php?id='+s;
                    },
                    'data': function (node) {
                        return {'parent': node.id};
                    }
                }
            },
            "types": {
                "default": {
                    "icon": "fa fa-folder icon-state-warning icon-lg"
                },
                "file": {
                    "icon": "fa fa-file icon-state-warning icon-lg"
                }
            },
            "state": {"key": "demo3"},
            "plugins": ["dnd", "state", "types"]
        });


    }


    return {
        //main function to initiate the module
        init: function () {


            ajaxTreeSample();

        }

    };

}();

if (App.isAngularJsApp() === false) {
    jQuery(document).ready(function () {
        UITree.init();
    });
}