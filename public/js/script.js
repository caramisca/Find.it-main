const burger = document.querySelector(".burger-wrapper");

burger.addEventListener('click',function(e){
  this.classList.toggle('active');
})


$(document).ready(function () {

    $('#auto-prompt-form').on('submit', function (e) {
        e.preventDefault();

        $('#loading-screen').show();
        // document.body.style.backgroundColor = "#229FFE";
        // document.body.style.overflow = "hidden";

        // document.body.style.height = "100%";
        // document.body.style.width = "100%";
        // document.body.style.margin = "0";
        // document.body.style.padding = "0";

        // document.documentElement.style.height = "100%";
        // document.documentElement.style.width = "100%";
        // document.documentElement.style.margin = "0";
        // document.documentElement.style.padding = "0";





        $.ajax({
            url: '/get-auto-listings',
            type: 'GET',
            data: $(this).serialize(),
            success: function (response) {



                // const svgs = document.querySelectorAll('svg');
                // svgs.forEach(svg => {
                //   svg.style.width = "100%";
                //   svg.style.height = "100%";
                //   svg.style.visibility = "hidden";
                // });






                console.log(response);

                const records = response.auto_dev_response.records;
                const recordsString = JSON.stringify(records);
                sessionStorage.setItem('rec', recordsString);

                const url = `/ai`;
                window.location.href = url;
            },
            error: function (error) {
                console.error('Error:', error);
            },
            complete: function() {
                $('#loading-screen').hide(); // Hide loading screen
            }
        });
    });
});
