<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $historyCase = History::all()->toArray();
        // return view('history.index', compact(['historyCase']));

        $historyCase = History::all()->toArray();
        return view('history.index', compact('historyCase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ================ how to insert image ==================================================================

        $request->validate([
            'resumePhoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'namePrefix' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'birthday' => 'required',
            'yearOld' => 'required',
            'university' => 'required',
            'faculty' => 'required',
            'branch' => 'required',
            'gpa' => 'required',
            'educational' => 'required',
            'experience' => 'required',
            'dominantLanguage' => 'required',
            'languageLearned' => 'required',
            'charisma' => 'required',
            'nameVillage' => 'required',
            'homeNumber' => 'required',
            'alley' => 'required',
            'road' => 'required',
            'district' => 'required',
            'canton' => 'required',
            'province' => 'required',
            'postalCode' => 'required',
            'myNameVillage' => 'required',
            'myHomeNumber' => 'required',
            'myAlley' => 'required',
            'myRoad' => 'required',
            'myDistrict' => 'required',
            'myCanton' => 'required',
            'myProvince' => 'required',
            'myPostalCode' => 'required',
        ]);

        // ========================== เพิ่มรูปได้ =========================================
        // if ($resumePhoto = $request->file('resumePhoto')) {
        //     $destinationPath = 'resumePhoto'; //upload path
        //     $resumePhotoImg = time() . "." . $resumePhoto->extension();
        //     echo 
        //     $resumePhoto->move($destinationPath, $resumePhotoImg);
        //     $insert['resumePhoto'] = "$resumePhotoImg";
        // }

        // if ($certi = $request->file('certi')) {
        //     $destinationPath = 'certi'; //upload path
        //     $certiImg = time() . "." . $certi->extension();
        //     $certi->move($destinationPath, $certiImg);
        //     $insert['certi'] = "$certiImg";
        // }


        // ===========================================================================================================
        $resumePhoto_name = '';
        if ($request->resumePhoto) {
            $resumePhoto_name = time() . '.' . $request->resumePhoto->extension();
            $request->resumePhoto->move(public_path('resumePhoto'), $resumePhoto_name); //upload path
        }

        // $certi_name = '';
        // if ($request->certi) {
        //     $certi_name = time() . '.' . $request->certi->extension();
        //     $request->certi->move(public_path('certi'), $certi_name); //upload path
        // }

        $historyCase = new History;
        $historyCase->resumePhoto = $resumePhoto_name;
        $historyCase->namePrefix = $request->namePrefix;
        $historyCase->firstName = $request->firstName;
        $historyCase->lastName = $request->lastName;
        $historyCase->email = $request->email;
        $historyCase->phoneNumber = $request->phoneNumber;
        $historyCase->birthday = $request->birthday;
        $historyCase->yearOld = $request->yearOld;
        $historyCase->university = $request->university;
        $historyCase->faculty = $request->faculty;
        $historyCase->branch = $request->branch;
        $historyCase->gpa = $request->gpa;
        $historyCase->educational = $request->educational;
        $historyCase->experience = $request->experience;
        $historyCase->dominantLanguage = $request->dominantLanguage;
        $historyCase->languageLearned = $request->languageLearned;
        $historyCase->charisma = $request->charisma;
        $historyCase->nameVillage = $request->nameVillage;
        $historyCase->homeNumber = $request->homeNumber;
        $historyCase->alley = $request->alley;
        $historyCase->road = $request->road;
        $historyCase->district = $request->district;
        $historyCase->canton = $request->canton;
        $historyCase->province = $request->province;
        $historyCase->postalCode = $request->postalCode;
        $historyCase->myNameVillage = $request->myNameVillage;
        $historyCase->myHomeNumber = $request->myHomeNumber;
        $historyCase->myAlley = $request->myAlley;
        $historyCase->myRoad = $request->myRoad;
        $historyCase->myDistrict = $request->myDistrict;
        $historyCase->myCanton = $request->myCanton;
        $historyCase->myProvince = $request->myProvince;
        $historyCase->myPostalCode = $request->myPostalCode;

        $historyCase->save();

        return redirect()->route('history.index')->with('success', 'History is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        // $historyCase = History::find($id);
        return view('history.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        $request->validate([
            'namePrefix' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'birthday' => 'required',
            'yearOld' => 'required',
            'university' => 'required',
            'faculty' => 'required',
            'branch' => 'required',
            'gpa' => 'required',
            'educational' => 'required',
            'experience' => 'required',
            'dominantLanguage' => 'required',
            'languageLearned' => 'required',
            'charisma' => 'required',
            'nameVillage' => 'required',
            'homeNumber' => 'required',
            'alley' => 'required',
            'road' => 'required',
            'district' => 'required',
            'canton' => 'required',
            'province' => 'required',
            'postalCode' => 'required',
            'myNameVillage' => 'required',
            'myHomeNumber' => 'required',
            'myAlley' => 'required',
            'myRoad' => 'required',
            'myDistrict' => 'required',
            'myCanton' => 'required',
            'myProvince' => 'required',
            'myPostalCode' => 'required',
        ]);

        $resumePhoto_name = '';
        if ($request->resumePhoto) {
            $resumePhoto_name = time() . '.' . $request->resumePhoto->extension();
            $request->resumePhoto->move(public_path('resumePhoto'), $resumePhoto_name); //upload path
            $history->resumePhoto = $resumePhoto_name;
        }

        // $history->resumePhoto = $resumePhoto_name;
        $history->namePrefix = $request->namePrefix;
        $history->firstName = $request->firstName;
        $history->lastName = $request->lastName;
        $history->email = $request->email;
        $history->phoneNumber = $request->phoneNumber;
        $history->birthday = $request->birthday;
        $history->yearOld = $request->yearOld;
        $history->university = $request->university;
        $history->faculty = $request->faculty;
        $history->branch = $request->branch;
        $history->gpa = $request->gpa;
        $history->educational = $request->educational;
        $history->experience = $request->experience;
        $history->dominantLanguage = $request->dominantLanguage;
        $history->languageLearned = $request->languageLearned;
        $history->charisma = $request->charisma;
        $history->nameVillage = $request->nameVillage;
        $history->homeNumber = $request->homeNumber;
        $history->alley = $request->alley;
        $history->road = $request->road;
        $history->district = $request->district;
        $history->canton = $request->canton;
        $history->province = $request->province;
        $history->postalCode = $request->postalCode;
        $history->myNameVillage = $request->myNameVillage;
        $history->myHomeNumber = $request->myHomeNumber;
        $history->myAlley = $request->myAlley;
        $history->myRoad = $request->myRoad;
        $history->myDistrict = $request->myDistrict;
        $history->myCanton = $request->myCanton;
        $history->myProvince = $request->myProvince;
        $history->myPostalCode = $request->myPostalCode;
        $history->update();
        return redirect()->route('history.index')->with('success', 'อัพเดทเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historyCase = History::find($id);
        $historyCase->delete();
        return redirect()->route('history.create')->with('success', 'ลบข้อมูลเรียบร้อย');
    }
}
