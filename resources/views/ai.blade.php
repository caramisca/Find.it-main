@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Get Auto Listings</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="{{ asset('css/ai.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">

        {{-- <form id="auto-listings-form">
            <div class="form-group">
                <label for="message">Enter your requirements:</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> --}}


        <div class="mt-5 mb-5 d-flex flex-column justify-content-center text-center">
            <h1 class="manrope-bold p-5">Vehicles Found</h1>
            <div class="container">
                <div class="row" id="auto-listings"></div>
            </div>
        </div>
    </div>

    <script>
    //     $(document).ready(function () {
    //         $('#auto-listings-form').on('submit', function (e) {
    //             e.preventDefault();

    //             $.ajax({
    //                 url: '{{ route("get.auto.listings") }}',
    //                 type: 'GET',
    //                 data: $(this).serialize(),
    //                 success: function (response) {
    // console.log(response);

    // $('#auto-listings').empty();

    // const records = response.auto_dev_response.records;
    // sessionStorage.setItem('rec', records);
    // const url = `{{ url('ai') }}`;
    // window.location.href = url;

    var recordsString = sessionStorage.getItem('rec');
    console.log(recordsString);
var records = JSON.parse(recordsString);
$('#auto-listings').empty();

records.forEach(record => {
    const recordHtml = `
        <div class="col-3">
            <div class="card mb-3" data-vin="${record.vin}">
                <div class="card-body rounded cardAuto">

                    <img src="${record.thumbnailUrl}" alt="Car image" class="imageCard">
                    <h5 class="card-title titleCard">${record.year} ${record.make} ${record.model}</h5>
                    <p class="card-text" style="display:none">VIN: ${record.vin}</p>
                    <p class="card-text"><b>${record.price}</b></p>
                </div>
            </div>
        </div>

    `;
    $('#auto-listings').append(recordHtml);
});

$('.card').on('click', function() {
    const vin = $(this).data('vin');
    console.log(vin);

    // Store 'records' string in sessionStorage
    const recordsString = JSON.stringify(records);
    sessionStorage.setItem('records', recordsString);

    // Construct the URL with both vin and serialized records
    const url = `{{ url('car-details') }}/${vin}`;

    // Redirect to the constructed URL
    window.location.href = url;
});
    </script>
</body>
</html>
@stop
