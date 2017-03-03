


var attachments = new Vue({
    el: '#attachment',
    data: {
        showExistingAttachments: false,

    },
    methods: {
        changeStatusExistingAttachments: function () {
            this.showExistingAttachments = !this.showExistingAttachments;
        },
        loadAjaxFiles: function () {
            var uploadUrl = $(event.target).attr('data-upload-url');
            var data = new FormData();
            data.append( $(event.target).attr('name'), event.target.files[0] );
            console.log(event.target.files[0]);

        }
    }
});