<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "M1911",20000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1g2980MIUtkNksmhm2vErSDGxlby9f4iw3L1tPrmgh0U0VFcs-g","HG"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "MK23",35000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYtF7bTWkjayeI8YLL7mJiwgkkbDP1JbICmqX53o6QEgIWKRVvmg","HG"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "M9A1",25000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxSy-yU2Am7YzsVpQnPkzZxL4OAfFmVPOqI_Dc2tRI-R4MlnlUYA","HG"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "デザートイーグル",50000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg0qeYZQlHY06O4eFwb_n7yv48K_6sauqmt__veptWxCC2qR7C","HG"
        ]);
        //AR
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "FN SCAR",50000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcwxPkiYYYg-JjtNDHkokRcH_WVs3chGZtDisROBj8dQvsZ6Ax","AR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "IMI ガリル",55000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2l77dW4VO68ydjXMzWTKrDoF18ipHst49WyfT0Fx1WpVmpyUC","AR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "AK-47",40000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2XXM3GRwryaSvAN4cQY1TjbH4pKLZlojdGTovZyp0gHu0EzGyQw","AR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "FA-MAS",37500,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ963nA-apnRSldUYnkLdzJZMmdtJMvcupZUuWjEjCSrxt8jWfa","AR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "M4", 35000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBwsMnilGU0pOX38usDQtYnRtZ9xS9ZzkEJZg4uOUC-ukmM3Hu7A","AR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "G36C", 45000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMZrQDcVp9sM1PfvVoqPFLNCqwYehNDcnbOiHQ4ztK9b4nRlGXDQ","AR"
        ]);

        //SNG
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "P90", 30000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeE0zNasB9lbSMgE3yoYiQan8lDuwACvc2Dm5FlXc70ThUMZLq","SNG"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "MP5",35000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzb3QnM_GRZtTt_TcNXdnzMYZmThzwB2GAAUno4Vj01Mi5u31A","SNG"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "G3 SAS",40000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4NC8lK29UmB-Sojz__ghetJVxTwxIxisSHky2WqcE6Arum0e_","SNG"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "Mac10",375000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREPLeWHHnFvcpw791NO2_MDpvleIANYJ5UQiKTkqVcAO5N2kf-","SNG"
        ]);

        //SR
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "MP7",45000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFE7Lx76dbDJFOF5pd-yTzu0ULod6udzaXtg13pw3KYRv_ou-Eyg","SR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "H&K PSG1",60000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwdzeDYrnWkDQgIAdsEtyOaclPVwLOL1JvQ_HAMmHw_jECzzZrmQ","SR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "ワルサーWA2000",65000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTcVQtHPlhbkFtVAnxbLDWG5pgNOJoO0kMliR33DiEH1h9c9d-","SR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "L96", 56000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLxjvwanCOhPJ6wsEri5wm5h0eVCdc9YOeLahEgmEnOUFm179bVA","SR"
        ]);
        DB::insert("insert into items (name,price,URL,TIP) value (?,?,?,?)",[
            "ドラグノフ狙撃銃",50000,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0Ywztnv-RSYEuXZAZc50Q7hRUTm1ztolEqoB3WuKcG4PAqPF1lw","SR"
        ]);
    }

}
