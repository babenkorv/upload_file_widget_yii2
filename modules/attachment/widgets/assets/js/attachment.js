


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
            // console.log(uploadUrl);
            console.log(event.target.files[0]);
            $.ajax({
                url: '/web/attachment/default/create-and-return',
                type: 'POST',
                data:  event.target.files[0],
                cache: false,
                processData: false, // Don't process the files
                // contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success: function(data) {
                    console.log(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {

                }
            });

        }
    }
});