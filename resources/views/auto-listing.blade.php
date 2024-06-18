<!DOCTYPE html>
<html>
<head>
    <title>Get Auto Listings</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Get Auto Listings</h2>
        <form id="auto-listings-form">
            <div class="form-group">
                <label for="message">Enter your requirements:</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="mt-4">
            <h4>Generated Link:</h4>
            <pre id="generated-link"></pre>
        </div>

        <div class="mt-4">
            <h4>Auto Listings:</h4>
            <div class="container">
                <div class="row" id="auto-listings"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#auto-listings-form').on('submit', function (e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route("fetch.auto.listings") }}',
                    type: 'GET',
                    data: $(this).serialize(),
                    success: function (response) {
                        console.log(response);
                        $('#generated-link').text(response.link);

                        // Clear previous listings
                        $('#auto-listings').empty();

                        // Extract records
                        const records = response.auto_dev_response.records;

                        // Loop through records and display each record
                        records.forEach(record => {
                            const recordHtml = `
                                <div class="col-4">
                                    <div class="card mb-3" data-vin="${record.vin}">
                                        <div class="card-body">
                                            <h5 class="card-title">${record.year} ${record.make} ${record.model}</h5>
                                            <img src="${record.thumbnailUrl}" alt="Car image" style="width:100%;height:auto;">
                                            <p class="card-text">Color: ${record.displayColor}</p>
                                            <p class="card-text"><b>${record.price}</b></p>
                                        </div>
                                    </div>
                                </div>
                            `;
                            $('#auto-listings').append(recordHtml);
                        });

                        // Add click event listener to each card
                        $('.card').on('click', function() {
                            const vin = $(this).data('vin');
                            window.location.href = `{{ url('car-details') }}/${vin}`;
                        });
                    }
                });
            });
        });
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
