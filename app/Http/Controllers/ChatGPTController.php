<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatGPTController extends Controller
{
    public function getResponse(Request $request)
    {
        $msg = $request->input('message');
        $apiKey = env('CHATGPT_API_KEY');
        $client = new Client([
            'verify' => false,
        ]);

        $message = '
Top Level Search
SEARCH TYPE	PARAMETER	VALUE
Year Range Min	year_min=2016	2016-2022
Make	make=Acura	Acura
Model	make=MDX	MDX
Trim	trim=Base	Base
Trim	trim=SH-AWD	SH-AWD
City	city=Los%20Angeles	Los Angeles
State	state=CA	California
Location	location=Los%20Angeles%20CA	California
Latitude	latitude=34.0522342	34.0522342
Longitude	longitude=-118.2436849	-118.2436849
Radius	radius=100	100 miles
Transmission	transmission[]=automatic	Automatic
Features	features[]=sunroof	Sunroof
Exterior Color	exterior_color[]=gray	Gray
Exterior Color	exterior_color[]=silver	Silver
Interior Color	exterior_color[]=gray	Gray
Filter by Price, Year, Mileage, Drivetrain and more.

Search and filter by price range, year range and max mileage for any vehicle


https://auto.dev/api/listings?apikey=ZrQEPSkKbGl2ZS5wcm9ncmFtbWluZy5tb2xkb3ZhQGdtYWlsLmNvbQ==&price_max=60000&year_min=2016&make=Audi&city=Los%20Angeles&state=CA&location=Los%20Angeles,%20CA&latitude=34.0522342&longitude=-118.2436849&radius=50&mileage=45000&driveline[]=AWD&condition[]=used&condition[]=certified%20pre-owned&exterior_color[]=black&page=1
(open in new tab)
Top Level Search
SEARCH TYPE	PARAMETER	VALUE
Price Range Max	price_max=60000	$60,000
Year Range Min	year_min=2016	2016-2022
Make	make=Audi	Audi
City	city=Los%20Angeles	Los Angeles
State	state=CA	California
Location	location=Los%20Angeles%20CA	California
Latitude	latitude=34.0522342	34.0522342
Longitude	longitude=-118.2436849	-118.2436849
Radius	radius=50	50 miles
Max Mileage	mileage=45000	Max Mileage 45,000
Drivetrain	driveline[]=AWD	AWD
Condition	condition[]=used	Used
Condition	condition[]=certified%20pre-owned	Certified Pre-owned
Exterior Color	exterior_color[]=black	Black
Listing Type	exclude_regional=true	Hide "online only" listings
Listing Type	exclude_no_price=true	Hide listings with no price
Pagination

&page= specify the page of vehicle listing results to return.

For example, &condition[]=used&page=3 is the third page of listings results. You may access every available listing through the API, one page at a time.

Location

You can search by Cityor Zip Code.

Sorting

Sort and filter by best match, price, distance, year, and time on market. Best Match is set to default and returns all listings.


https://auto.dev/api/listings?apikey=ZrQEPSkKbGl2ZS5wcm9ncmFtbWluZy5tb2xkb3ZhQGdtYWlsLmNvbQ==&&sort_filter=created_at:asc&make=Tesla&model=Model%203&radius=50&condition[]=used&page=1
(open in new tab)
Sort & filter by
PARAMETER	VALUE
-	Best Match
sort_filter=price:asc	Price (Least Expensive First)
sort_filter=price:desc	Price (Most Expensive First)
sort_filter=distance:asc	Distance (Nearest First)
sort_filter=year:asc	Year (Oldest First)
sort_filter=year:asc	Year (Oldest First)
sort_filter=year:desc	Year (Newest First)
sort_filter=mileage:asc	Mileage (Lowest First)
sort_filter=created_at:desc	Time on Market (Shortest First)
sort_filter=created_at:asc	Time on Market (Longest First)
Query Parameters
Body Style

You can use theses query parameter to sort by any vehicle body style. Use []to add additional parameters.


https://auto.dev/api/listings?apikey=ZrQEPSkKbGl2ZS5wcm9ncmFtbWluZy5tb2xkb3ZhQGdtYWlsLmNvbQ==&body_style[]=convertible&body_style[]=coupe&page=1
(open in new tab)
Body style filters
PARAMETER	VALUE
body_style[]=convertible	Convertible
body_style[]=coupe	Coupe
body_style[]=minivan	Minivan
body_style[]=crossover	Crossover
body_style[]=passenger_cargo_vans	Passenger & Cargo Vans
body_style[]=sedan	Sedan
body_style[]=suv	SUV
body_style[]=truck	Truck
body_style[]=wagon	Wagon
Interior & Exterior Colors

You can use theses query parameter to sort by any vehicle interior and exterior color. Use []to add additional parameters.


https://auto.dev/api/listings?apikey=ZrQEPSkKbGl2ZS5wcm9ncmFtbWluZy5tb2xkb3ZhQGdtYWlsLmNvbQ==&make=Toyota&exterior_color[]=red&interior_color[]=blue&page=1
(open in new tab)
Interior Colors
PARAMETER	VALUE
interior_color[]=black	Black
interior_color[]=white	White
interior_color[]=gray	Gray
interior_color[]=brown	Brown
interior_color[]=red	Red
interior_color[]=blue	Blue
Exterior Colors
PARAMETER	VALUE
exterior_color[]=black	Black
exterior_color[]=silver	Silver
exterior_color[]=white	White
exterior_color[]=gray	Gray
exterior_color[]=red	Red
exterior_color[]=green	Green
exterior_color[]=yellow	Yellow
exterior_color[]=blue	Blue
exterior_color[]=brown	Brown
exterior_color[]=orange	Orange
exterior_color[]=purple	Purple
exterior_color[]=gold	Gold


        Search Type	Parameter	Examples of parameters
Make	make=	Audi
Model	model=	S8
Trim	trim=	Base, 550i, quattro
City	city=	Los%20Angeles
State	state=	CA
Year Range Min	year_min=	2010
Year Range Max	year_max=	2020
Price Range Min	price_min=	20000
Price Range Max	price_max=	120000
Max Mileage	mileage=	30000
Transmission	transmission[]=	automatic, manual
Features	features[]=	sunroof, bluetooth, entertainment
Exterior Color	exterior_color[]=	gray, black, white
Interior Color	interior_color[]=
Category	category=	clasic, american, family
Driveline	driveline[]=	RWD, FWD, 4X4, AWD
Engine Cylinders	engine_cylinders[]=	2 cyl - 12 cyl
Milse per Gallon	combined_mpg=	20 - 50
Vehicle Condition	condition[]=	certified%20pre-owned, new, used
Fuel Type	fuel_type[]=	gasoline, hybrid, electric, diesel

PARAMETER	VALUE
-	Any Category
category=american	American
category=classic	Classic
category=commuter	Commuter
category=electric	Electric
category=family	Family
category=fuel_efficient	Fuel Efficient
category=hybrid	Hybrid
category=large	Large
category=muscle	Muscle
category=off_road	Off Road
category=small	Small
category=sport	Sport
category=supercar	Supercar

PARAMETER	VALUE
driveline[]=RWD	Rear Wheel Drive
driveline[]=FWD	Front Wheel Drive
driveline[]=4X4	Four Wheel Drive
driveline[]=AWD	All Wheel Drive

PARAMETER	VALUE
engine_cylinders[]=2	2
engine_cylinders[]=3	3
engine_cylinders[]=4	4
engine_cylinders[]=6	6
engine_cylinders[]=8	8
engine_cylinders[]=10	10
engine_cylinders[]=12	12

PARAMETER	VALUE
cabin[]=crew	Crew
cabin[]=extended	Extended
cabin[]=regular	Regular

Bed Type
PARAMETER	VALUE
bed[]=regular	Regular
bed[]=short	Short
bed[]=long	Long
bed[]=step-side	Step-Side
bed[]=chassis	Chassis
Rear Wheel Type
PARAMETER	VALUE
rear_wheel[]=dual	Dual
rear_wheel[]=single	Single


PARAMETER	VALUE
condition[]=new	New
condition[]=used	Used
condition[]=certified%20pre-owned	Certified Pre-owned

PARAMETER	VALUE
fuel_type[]=gasoline	Gasoline
fuel_type[]=hybrid	Hybrid
fuel_type[]=electric	Electric
fuel_type[]=flex%20fuel	Flex Fuel
fuel_type[]=natural%20gas	Natural Gas
fuel_type[]=plug-in%20hybrid	Plug-in Hybrid
fuel_type[]=hydrogen%20fuel%20cell	Hydrogen Fuel Cell
fuel_type[]=diesel	Diesel

Miles Per Gallon
PARAMETER	VALUE
combined_mpg=20	At least 20 MPG
combined_mpg=30	At least 30 MPG
combined_mpg=40	At least 40 MPG
combined_mpg=50	At least 50 MPG


PARAMETER	VALUE
transmission[]=automatic	Automatic
transmission[]=manual	Manual

features[]=backup_camera	Backup Camera
features[]=bluetooth	Bluetooth
features[]=entertainment	Entertainment
features[]=handicap_accessible	Handicap Accessible
features[]=heated_seats	Header Seats
features[]=ipod_aux_input	Aux Input
features[]=lane_departure_warning_system	Land Departure Warning
features[]=leather	Leather
features[]=navigation	Navigation
features[]=one_owner	Navigation
features[]=roof_rack	Roof Rack
features[]=sunroof	Sunroof
features[]=third_row_seats	Third Row Seat
features[]=towing	Towing
features[]=warranty	Warranty

        {
    "Make": "make=",
    "Model": "model=",
    "Trim": "trim=",
    "City": "city=",
    "State": "state=",
    "Year Range Min": "year_min=",
    "Year Range Max": "year_max=",
    "Price Range Min": "price_min=",
    "Price Range Max": "price_max=",
    "Max Mileage": "mileage=",
    "Transmission": "transmission[]=",
    "Features": "features[]=",
    "Exterior Color": "exterior_color[]=",
    "Interior Color": "interior_color[]=",
    "Driveline": "driveline[]=",
    "Engine Cylinders": "engine_cylinders[]=",
    "Miles per Gallon": "combined_mpg=",
    "Vehicle Condition": "condition[]=",
    "Fuel Type": "fuel_type[]="
}

User Requirements:'.$msg.'

    Example: https://auto.dev/api/listings?apikey=ZrQEPSkKYWxleGlzZGFuZHkxNUBnbWFpbC5jb20=&year_min=2016

Return only a link with completed data with details requested by.Use every info and convert that into preferences(example family car: at least 5 seats 4 doors and so on... recommend suv or ...  try to input as much as possible settings that fetch with user description). If it is null do not write it.
Use FEATURES only listed above.
GIVE ME ONLY THE LINK(not a single word). TAKE in account what parameters accepts our API(written above).
';

        $chatGptResponse  = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-4-0125-preview',
                //'response_format' => ["type" => "json_object" ],
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => $message//$request->input('message')
                    ],
                ],
                'max_tokens' => 150,
            ],
        ]);


        $chatGptData = json_decode($chatGptResponse->getBody(), true);
        $chatGptMessage = $chatGptData['choices'][0]['message']['content'] ?? '';

        // Auto.dev API request
        $autoDevApiKey = env('AUTODEV_API_KEY');
        $autoDevResponse = $client->get('https://auto.dev/api/listings', [
            'query' => [
                'apikey' => $autoDevApiKey,
                'queryParam' => $chatGptMessage, // Assuming you want to use ChatGPT's message as a query parameter
            ]
        ]);

        $autoDevData = json_decode($autoDevResponse->getBody(), true);

        return response()->json([
            //'chat_gpt_response' => $chatGptData,
            'auto_dev_response' => $autoDevData,
        ]);
    }
}
