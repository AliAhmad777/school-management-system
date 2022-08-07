<?php

namespace App\Repository;

interface StudentRepositoryInterface{


    //  Get Student
    public function Get_Student();

    // Edit Student
    public function Edit_Student($id);

    //Update Student
    public function Update_Student($request);

    //Delete Student
    public function Delete_Student($request);

    // Get Add Form Student
    public function Create_Student();

    // Get classrooms
    public function Get_classrooms($id);

    //Get Sections
    public function Get_Sections($id);

    //Store Student
    public function Store_Student($request);

}


