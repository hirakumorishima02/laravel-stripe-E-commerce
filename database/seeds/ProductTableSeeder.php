<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'sku' => 12,
                'name'=>'Water bottle',
                'description'=>'A water bottle is a container that is used to hold water, 
                liquids or other beverages for consumption. The use of a water bottle allows an individual to drink and 
                transport a beverage from one place to another.
                A water bottle is usually made of plastic, glass, or metal. Water bottles are available in different shapes,
                colors, and sizes. In the past, water bottles were sometimes made of wood, bark, or animal skins such as leather,
                hide and sheepskin. Water bottles can be either disposable or reusable. Reusable water bottles can also be used for
                liquids such as juice, iced tea, alcoholic beverages, or soft drinks. Reusable water bottles reduce plastic waste and
                contribute to saving the environment. Easily portable, water bottles make for convenient use. Disposable water bottles
                often list nutrition facts.',
                'price'=>30,
                'is_downloadble'=>true,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/dBjbwdgCVlsAkZT5GUe8IUaLMd7qftcJnTgGGVyZ.jpeg',
            ],
            [
                'sku' => 6,
                'name'=>'The Watch',
                'description'=>'A watch is a timepiece intended to be carried or worn by a person. 
                It is designed to keep working despite the motions caused by the persons activities. 
                A wristwatch is designed to be worn around the wrist, attached by a watch strap or other
                type of bracelet. A pocket watch is designed for a person to carry in a pocket. The study of timekeeping is known as horology.
                Watches progressed in the 17th century from spring-powered clocks, which appeared as early as the 14th century. 
                During most of its history the watch was a mechanical device, driven by clockwork, powered by winding a mainspring,
                and keeping time with an oscillating balance wheel. ',
                'price'=>120,
                'is_downloadble'=>false,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/vYpQaiGlqEo8yz37qDKIAEYjsSf4bJIluUmQAq62.jpeg',
            ],
            [
                'sku' => 20,
                'name'=>'Desital Camera',
                'description'=>'A camera is an optical instrument to capture still images or to record moving images,
                which are stored in a physical medium such as in a digital system or on photographic film. A camera consists
                of a lens which focuses light from the scene, and a camera body which holds the image capture mechanism.
                The still image camera is the main instrument in the art of photography and captured images may be reproduced later
                as a part of the process of photography, digital imaging, photographic printing. The similar artistic fields in the
                moving image camera domain are film, videography, and cinematography.',
                'price'=>80,
                'is_downloadble'=>false,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/FHkf2BiPyDS31xzNBLf9TU6gU7qwVj3Q1tf6C3rk.jpeg',
            ],
            [
                'sku' => 5,
                'name'=>'PlayStation 4',
                'description'=>'The PlayStation 4 (officially abbreviated as PS4) is an eighth-generation home video game console developed
                by Sony Interactive Entertainment. Announced as the successor to the PlayStation 3 in February 2013,
                it was launched on November 15 in North America, November 29 in Europe, South America and Australia,
                and on February 22, 2014, in Japan. It competes with Microsofts Xbox One and Nintendos Wii U and Switch.',
                'price'=>120,
                'is_downloadble'=>true,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/jFZQQB0taGXAqeXNbfsBVbAEnDDnKAkaFjUP7U4q.jpeg',
            ],
            [
                'sku' => 3,
                'name'=>'Drone',
                'description'=>'An unmanned aerial vehicle (UAV) (or uncrewed aerial vehicle,[2] commonly known as a drone) 
                is an aircraft without a human pilot on board and a type of unmanned vehicle. UAVs are a component of an unmanned
                aircraft system (UAS); which include a UAV, a ground-based controller, and a system of communications between the two. ',
                'price'=>200,
                'is_downloadble'=>false,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/2e3cXHMIJqWUPCwJYkuUZJGkHtkSdzkxBeyvKAxU.jpeg',
            ],
            [
                'sku' => 1,
                'name'=>'Face Powder',
                'description'=>'Face powder is a cosmetic powder applied to the face to set a foundation after application. 
                It can also be reapplied throughout the day to minimize shininess caused by oily skin. There is translucent sheer powder, 
                and there is pigmented powder. Certain types of pigmented facial powders are meant be worn alone with no base foundation. 
                Powder tones the face and gives an even appearance.',
                'price'=>20,
                'is_downloadble'=>false,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/0HYX6HN8KWnQGhepoAmsJIH5SuRvtQXFwX9p0bK6.jpeg',
            ],
            [
                'sku' => 10,
                'name'=>'Mountain Bike',
                'description'=>'A mountain bike or mountain bicycle (abbreviated MTB[1]) is a bicycle designed for off-road cycling.
                Mountain bikes share similarities with other bicycles, but incorporate features designed to enhance durability and performance
                in rough terrain. These typically include a front or full suspension, large knobby tires, more durable wheels, more powerful brakes,
                straight handlebars, and lower gear ratios for climbing steep grades.',
                'price'=>400,
                'is_downloadble'=>false,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/rqG3W63Vk8Z3fGmOt4UQLC5i5VwqTCpZRnUXNFLJ.jpeg',
            ],
            [
                'sku' => 6,
                'name'=>'Mac Book Air',
                'description'=>'The MacBook Air is a line of laptop computers developed and manufactured by Apple Inc.
                [2] It features a full-size keyboard, a machined aluminum case, and a thin and light structure. 
                The MacBook Air is available with a screen size of 13.3-inch, with different models produced by Apple throughout the years.
                MacBook Air models with an 11.6-inch screen were made available from 2010 through late 2016.[3]',
                'price'=>120000,
                'is_downloadble'=>true,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/JoauxH7luedGsaJ52ZsCqEbs0RuHmqI3ssoUWE22.jpeg',
            ],
            [
                'sku' => 7,
                'name'=>'Headphones',
                'description'=>'Headphones (or head-phones in the early days of telephony and radio) traditionally refer to a pair of small
                loudspeaker drivers worn on or around the head over a users ears. They are electroacoustic transducers, which convert an electrical
                signal to a corresponding sound. Headphones let a single user listen to an audio source privately, in contrast to a loudspeaker,
                which emits sound into the open air for anyone nearby to hear. Headphones are also known as earspeakers, ',
                'price'=>345,
                'is_downloadble'=>false,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/5CED9AGPYaiD5wPsLya02lE6pXsNDnUZuJKmemjH.jpeg',
            ],
            [
                'sku' => 12,
                'name'=>'Rétro Watch',
                'description'=>'Watches progressed in the 17th century from spring-powered clocks, which appeared as early as the 14th century.
                During most of its history the watch was a mechanical device, driven by clockwork, powered by winding a mainspring, and keeping
                time with an oscillating balance wheel. These are called mechanical watches.[1][2]',
                'price'=>274,
                'is_downloadble'=>true,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/GjjEfg7IfqjIz23t2bivsuk6FrOUGfO797FYKBGM.jpeg',
            ],
            [
                'sku' => 25,
                'name'=>'Nike shoes',
                'description'=>'Nike Air Max is a line of shoes produced by Nike, Inc., with the first model released in 1987. Air Max shoes
                are identified by their midsoles incorporating flexible urethane pouches filled with pressurized gas, visible from the exterior of
                the shoe and intended to provide cushioning underfoot. Air Max was conceptualized by Tinker Hatfield, who initially worked for Nike
                designing stores[1], with the underlying technology being created and patented by M. Frank Rudy.',
                'price'=>579,
                'is_downloadble'=>false,
                'file_path'=>'https://hel-mane.s3.ap-southeast-1.amazonaws.com/file_path/P4Z3udcPxefvuT5mS5JyDMFi3YSwwnqEzIYxJFtY.jpeg',
            ],
        ]);
    }
}
