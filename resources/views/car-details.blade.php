@extends('layouts.layout')
@section('content')



<!DOCTYPE html>
<html>
<head>
    <title>Car Details</title>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
</head>
<body>



    <div class="container mt-5">
        <div id="image-container"></div>


        @if($errors->any())
            <div class="alert alert-danger">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif

        @if(isset($carDetails))
    <div id="product-details">
        <h1 class="manrope-bold">
            {{ isset($carDetails['make']['name']) ? $carDetails['make']['name'] : '-' }}
            {{ isset($carDetails['model']['name']) ? $carDetails['model']['name'] : '-' }}
            ({{ isset($carDetails['years'][0]['year']) ? $carDetails['years'][0]['year'] : '-' }})
        </h1>
        <h2>VIN: <span id="VIN">{{ isset($vin) ? $vin : '-' }}</span></h2>
        <h2 class="priceCar"></h2>

        <div class="container mt-5">
            <div class="mb-4">
                <h2 class="manrope-bold" class="section-title">Transmission Details</h2>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Name:</strong></td>
                            <td>{{ isset($carDetails['transmission']['name']) ? $carDetails['transmission']['name'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Equipment Type:</strong></td>
                            <td>{{ isset($carDetails['transmission']['equipmentType']) ? $carDetails['transmission']['equipmentType'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Availability:</strong></td>
                            <td>{{ isset($carDetails['transmission']['availability']) ? $carDetails['transmission']['availability'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Transmission Type:</strong></td>
                            <td>{{ isset($carDetails['transmission']['transmissionType']) ? $carDetails['transmission']['transmissionType'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Number of Speeds:</strong></td>
                            <td>{{ isset($carDetails['transmission']['numberOfSpeeds']) ? $carDetails['transmission']['numberOfSpeeds'] : '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-4">
                <h2 class="section-title">Engine Details</h2>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Name:</strong></td>
                            <td>{{ isset($carDetails['engine']['name']) ? $carDetails['engine']['name'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Equipment Type:</strong></td>
                            <td>{{ isset($carDetails['engine']['equipmentType']) ? $carDetails['engine']['equipmentType'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Availability:</strong></td>
                            <td>{{ isset($carDetails['engine']['availability']) ? $carDetails['engine']['availability'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Compression Ratio:</strong></td>
                            <td>{{ isset($carDetails['engine']['compressionRatio']) ? $carDetails['engine']['compressionRatio'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Cylinder:</strong></td>
                            <td>{{ isset($carDetails['engine']['cylinder']) ? $carDetails['engine']['cylinder'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Size:</strong></td>
                            <td>{{ isset($carDetails['engine']['size']) ? $carDetails['engine']['size'] : '-' }}L</td>
                        </tr>
                        <tr>
                            <td><strong>Configuration:</strong></td>
                            <td>{{ isset($carDetails['engine']['configuration']) ? $carDetails['engine']['configuration'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Fuel Type:</strong></td>
                            <td>{{ isset($carDetails['engine']['fuelType']) ? $carDetails['engine']['fuelType'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Horsepower:</strong></td>
                            <td>{{ isset($carDetails['engine']['horsepower']) ? $carDetails['engine']['horsepower'] : '-' }} hp @ {{ isset($carDetails['engine']['rpm']['horsepower']) ? $carDetails['engine']['rpm']['horsepower'] : '-' }} rpm</td>
                        </tr>
                        <tr>
                            <td><strong>Torque:</strong></td>
                            <td>{{ isset($carDetails['engine']['torque']) ? $carDetails['engine']['torque'] : '-' }} lb-ft @ {{ isset($carDetails['engine']['rpm']['torque']) ? $carDetails['engine']['rpm']['torque'] : '-' }} rpm</td>
                        </tr>
                        <tr>
                            <td><strong>Type:</strong></td>
                            <td>{{ isset($carDetails['engine']['type']) ? $carDetails['engine']['type'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Code:</strong></td>
                            <td>{{ isset($carDetails['engine']['code']) ? $carDetails['engine']['code'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Compressor Type:</strong></td>
                            <td>{{ isset($carDetails['engine']['compressorType']) ? $carDetails['engine']['compressorType'] : '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-4">
                <h2 class="section-title">General Details</h2>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Driven Wheels:</strong></td>
                            <td>{{ isset($carDetails['drivenWheels']) ? $carDetails['drivenWheels'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Number of Doors:</strong></td>
                            <td>{{ isset($carDetails['numOfDoors']) ? $carDetails['numOfDoors'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>MPG:</strong></td>
                            <td>{{ isset($carDetails['mpg']['city']) ? $carDetails['mpg']['city'] : '-' }} city / {{ isset($carDetails['mpg']['highway']) ? $carDetails['mpg']['highway'] : '-' }} highway</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-4">
                <h2 class="section-title">Colors Available</h2>
                <table class="table table-bordered table-striped">
                    <tbody>
                        @foreach ($carDetails['colors'][0]['options'] as $color)
                            <tr>
                                <td>{{ isset($color['name']) ? $color['name'] : '-' }} ({{ isset($color['availability']) ? $color['availability'] : '-' }})</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mb-4">
                <h2 class="section-title">Categories</h2>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Primary Body Type:</strong></td>
                            <td>{{ isset($carDetails['categories']['primaryBodyType']) ? $carDetails['categories']['primaryBodyType'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Market:</strong></td>
                            <td>{{ isset($carDetails['categories']['market']) ? $carDetails['categories']['market'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>EPA Class:</strong></td>
                            <td>{{ isset($carDetails['categories']['epaClass']) ? $carDetails['categories']['epaClass'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Vehicle Size:</strong></td>
                            <td>{{ isset($carDetails['categories']['vehicleSize']) ? $carDetails['categories']['vehicleSize'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Vehicle Type:</strong></td>
                            <td>{{ isset($carDetails['categories']['vehicleType']) ? $carDetails['categories']['vehicleType'] : '-' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Vehicle Style:</strong></td>
                            <td>{{ isset($carDetails['categories']['vehicleStyle']) ? $carDetails['categories']['vehicleStyle'] : '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pro-cons d-flex flex-column justify-content-center text-center align-center p-3">
            <h2 class="manrope-bold">Pro and Cons of {{ isset($carDetails['make']['name']) ? $carDetails['make']['name'] : '-' }} {{ isset($carDetails['model']['name']) ? $carDetails['model']['name'] : '-' }} ({{ isset($carDetails['years'][0]['year']) ? $carDetails['years'][0]['year'] : '-' }})</h2>
            <div id="pros-cons-container" class="d-flex flex-row justify-content-center text-center align-items-start align-center"></div>
        </div>

        <div class="contact-expert d-flex flex-column justify-content-center text-center align-center p-3">
            <h2 class="manrope-bold">Contact one of our experts</h2>
            <form class="d-flex flex-column justify-content-center text-center align-center" action="{{ route('send.message') }}" method="POST">
                @csrf
                <input style="color: black" name="name" type="text" class="feedback-input" placeholder="Name" />
                <input style="color: black" name="email" type="text" class="feedback-input" placeholder="Email" />
                <div style="display: none;">
                    <input name="model" type="text" class="feedback-input" placeholder="model" value="{{ isset($carDetails['model']['name']) ? $carDetails['model']['name'] : '-' }}" />
                    <input name="make" type="text" class="feedback-input" placeholder="make" value="{{ isset($carDetails['make']['name']) ? $carDetails['make']['name'] : '-' }}" />
                    <input name="vin" type="text" class="feedback-input" placeholder="vin" value="{{ isset($vin) ? $vin : '-' }}" />
                </div>
                <textarea style="color: black" name="text" class="feedback-input" placeholder="Comment"></textarea>
                <input class="contactSubmit" type="submit" value="SEND"/>
            </form>
        </div>

    </div>
@endif
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Example of retrieving 'records' from sessionStorage
        const storedRecordsString = sessionStorage.getItem('records');
        if (storedRecordsString) {
            try {
                const storedRecords = JSON.parse(storedRecordsString);
                console.log('Stored Records:', storedRecords);

                const vin = $("#VIN").text().trim();

                var record = storedRecords.find(record => record.vin === vin);
                if (!record) {
                    console.error('Record not found for VIN:', vin);
                    return;
                }

                $('.priceCar').text('Price: ' + record.price);

                        $('input[name="model"]').val(record.model);
                        $('input[name="make"]').val(record.make);
                        $('input[name="vin"]').val(record.vin);

                const imageContainer = document.getElementById('image-container');

                // AJAX call to fetch data from /chatgptPRO
                const url = '/chatgptPRO';
const params = new URLSearchParams({
    message: record.make + " " + record.model
}).toString();

fetch(`${url}?${params}`, {
    method: 'GET'
})
.then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }
    return response.json();  // or response.text() or response.blob() depending on your response type
})
.then(data => {
    // console.log(data);
    var cons = data.cons;
    var pros = data.pros;
    var prosConsContainer = document.getElementById('pros-cons-container');

// var prosList = '<h3><i style="color:green;" class="fa-sharp fa-solid fa-circle-check"></i></h3><ul>';
// for (var i = 0; i < pros.length; i++) {
//     prosList += '<li>' + pros[i] + '</li>';
// }
// prosList += '</ul>';

// var consList = '<h3><i style="color:red;" class="fa-sharp fa-solid fa-circle-xmark"></i></h3><br><ul>';
// for (var i = 0; i < cons.length; i++) {
//     consList += '<li>' + cons[i] + '</li>';
// }
// consList += '</ul>';

// prosConsContainer.innerHTML = prosList + consList;
// })
var prosList = '<table class="table table-bordered"><thead><tr><th scope="col"><h3><i style="color:green;" class="fa-sharp fa-solid fa-circle-check"></i> Pros</h3></th></tr></thead><tbody>';
for (var i = 0; i < pros.length; i++) {
    prosList += '<tr><td>' + pros[i] + '</td></tr>';
}
prosList += '</tbody></table>';

var consList = '<table class="table table-bordered"><thead><tr><th scope="col"><h3><i style="color:red;" class="fa-sharp fa-solid fa-circle-xmark"></i> Cons</h3></th></tr></thead><tbody>';
for (var i = 0; i < cons.length; i++) {
    consList += '<tr><td>' + cons[i] + '</td></tr>';
}
consList += '</tbody></table>';

prosConsContainer.innerHTML = prosList + consList;
})
.catch(error => {
    console.error('Error:', error);
});

                // Display images
                record.photoUrls.forEach(link => {
                    const img = document.createElement('img');
                    img.src = link;
                    img.alt = 'Image';
                    img.style.width = '200px';  // You can set any width you prefer
                    img.style.margin = '10px';  // Add some space between images
                    imageContainer.appendChild(img);
                });

            } catch (error) {
                console.error('Error parsing JSON:', error);
            }
        } else {
            console.error('No records found in sessionStorage');
        }
    });

    </script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@stop
