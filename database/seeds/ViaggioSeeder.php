<?php

use App\Viaggio;
use Illuminate\Database\Seeder;

class ViaggioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viaggi = 
        [
            [
                "id" => 1,
                "titolo_viaggio" => 'Viaggio a Milano',
                "descrizione" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea nobis nemo expedita voluptatem tempore est ut reiciendis facilis repellendus consequuntur distinctio sed accusamus, fugit perferendis sunt necessitatibus, dolor voluptas dolorem?",
                "localita" => "Milano",
                "trasporto" => "Aereo - Treno - Autobus",
                "data_partenza" => "2021-11-11",
                "data_ritorno" => "2021-11-21",
                "price" => 999.99,
                "img" => "https://picsum.photos/200",
            ],
            [
                "id" => 2,
                "titolo_viaggio" => 'Viaggio a Parigi',
                "descrizione" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea nobis nemo expedita voluptatem tempore est ut reiciendis facilis repellendus consequuntur distinctio sed accusamus, fugit perferendis sunt necessitatibus, dolor voluptas dolorem?",
                "localita" => "Milano",
                "trasporto" => "Aereo - Treno - Autobus",
                "data_partenza" => "2021-11-11",
                "data_ritorno" => "2021-11-21",
                "price" => 999.99,
                "img" => "https://picsum.photos/200",
            ],
            [
                "id" => 3,
                "titolo_viaggio" => 'Viaggio a Londra',
                "descrizione" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea nobis nemo expedita voluptatem tempore est ut reiciendis facilis repellendus consequuntur distinctio sed accusamus, fugit perferendis sunt necessitatibus, dolor voluptas dolorem?",
                "localita" => "Milano",
                "trasporto" => "Aereo - Treno - Autobus",
                "data_partenza" => "2021-11-11",
                "data_ritorno" => "2021-11-21",
                "price" => 999.99,
                "img" => "https://picsum.photos/200",
            ],
        ];

        foreach($viaggi as $ele){
            $_viaggio = new Viaggio();
            $_viaggio->titolo_viaggio = $ele['titolo_viaggio'];
            $_viaggio->descrizione = $ele['descrizione'];
            $_viaggio->localita = $ele['localita'];
            $_viaggio->trasporto = $ele['trasporto'];
            $_viaggio->data_partenza = $ele['data_partenza'];
            $_viaggio->data_ritorno = $ele['data_ritorno'];
            $_viaggio->price = $ele['price'];
            $_viaggio->img = $ele['img'];
            $_viaggio->save();
        }
    }
}
