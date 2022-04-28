<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //задания 1 часть 1-6
    public function zadanie1() {
        return 'Я люблю учиться в ЧРТ';
    }
    public function zadanie2(Request $request) {
        if($request->has('name')){
            $main= $request->input('name');
            $maininfo = "Меня зовут {$main}";
            return $maininfo;
        }
        else{
            return "Вы не написали своего имени(";
        }
    }
    public function zadanie3(Request $request) {
        if(($request->has('name'))&&($request->has('fruit'))){
            $main= $request->input('name');
            $secondmain= $request->input('fruit');
            $maininfo = "Меня зовут {$main} и я люблю есть {$secondmain}";
            return $maininfo;
        }
        else{
            return "Вы не написали своего имени, или фрукт(";
        }
    }
    public function zadanie4() {
        $firstnumber = 10;
        $secondnumber = 20;
        $mainnumber = $firstnumber + $secondnumber;
        return "Первое число = {$firstnumber}<br> Первое число = {$secondnumber} <br> Итог = {$mainnumber}";
    }
    public function zadanie5(Request $request) {
        if(($request->has('firstnumber'))&&($request->has('secondnumber'))){
            $firstnumber= $request->input('firstnumber');
            $secondnumber= $request->input('secondnumber');
            $mainnumber = $firstnumber + $secondnumber;
            return "Первое число = {$firstnumber}<br> Первое число = {$secondnumber} <br> Итог = {$mainnumber}";
        }
        else{
            return "Вы не написали 1-ое или 2-ое число(";
        }
    }
    public function zadanie6(Request $request) {
        if($request->has('cipher')){
            $cipher = $request->input('cipher');
            if($cipher == 'keyOneTest'){
                return 'Я взломал шифр';
            }
            else{
                return 'Неверный шифр';
            }
        }
        else{
            return "Нет доступа";
        }
    }
//задания 2 часть 1-6
    public function lessonTemplateOne() {

        return view('template');
    }
    public function lessonTemplateTwo($organization) {
        return view('template2', compact('organization'));
    }
    public function lessonTemplateThree($srtname) {
        return view('template3', compact('srtname'));
    }
    public function lessonTemplateFour() {
        $array = ['qwe','ert','iop','asd','dfg'];
        return view('template4', compact('array'));
    }
    public function lessonTemplateFive() {
        $array = ['qwe','ert','iop','asd','dfg'];
        return view('template5', compact('array'));
    }
    public function lessonTemplateSix() {
        $array = [1,2,3,4,5,6,7,8,9,10];
        return view('template6', compact('array'));
    }

}
